<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include('classes/runnerpage.php');
include('include/xtempl.php');

$reminded = false;
$sentMailResults = array();
$xt = new Xtempl();
$sessPrefix = 'remind';
$strSearchBy = "username";
$id = postvalue("id")!=="" ? postvalue("id") : 1;
$cEmailField = "emailaddr";

$layout = new TLayout("remind","Extravaganza1Orange","MobileOrange");
$layout->blocks["top"] = array();
$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"remindheader","block"=>"","substyle"=>2);


$layout->containers["fields"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"remindfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"enteremail_message","block"=>"","substyle"=>3);


$layout->containers["fields"][] = array("name"=>"remindbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";
$layout->blocks["top"][] = "fields";$page_layouts["remind"] = $layout;


//array of params for classes
$params = array("id" =>$id, "pageType" => PAGE_REMIND);
$params['xt'] = &$xt;
$params["tName"]= "global";
$params["templatefile"] = "remind.htm";
$params["needSearchClauseObj"] = false;
$pageObject = new RunnerPage($params);

$pageObject->addCommonJs();
$pageObject->fillSetCntrlMaps();
$pageObject->body["end"] .= "<script>";
$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";</script>";
$pageObject->body['end'] .= "<script language=\"JavaScript\" src=\"include/runnerJS/RunnerAll.js\"></script>\r\n";
$pageObject->body["end"] .= "<script>".$pageObject->PrepareJS()."</script>";

$pageObject->addButtonHandlers();
	
$isUseCaptcha = false;
$pageObject->isCaptchaOk = 1;


$strUsername="";
$strEmail="";
$strMessage="";

if (@$_POST["btnSubmit"] == "Remind")
{
	//	Before Process event
	if($globalEvents->exists("BeforeProcessRemind"))
		$globalEvents->BeforeProcessRemind($conn);
	
    $strSearchBy = postvalue("searchby");
	$strUsername = postvalue("username");
	$strEmail = postvalue("email");
		
	if(!$isUseCaptcha || ($isUseCaptcha && $pageObject->isCaptchaOk==1))
	{	
		$tosearch=false;
		if($strSearchBy!="email")
		{
			$value=$strUsername;
			if((string)$value!="")
				$tosearch=true;
			if(NeedQuotes($cUserNameFieldType))
				$value=db_prepare_string($value);
			else
				$value=(0+$value);
			$sWhere=AddFieldWrappers($cUserNameField)."=".$value;
		}
		else
		{
			$value=$strEmail;
			if((string)$value!="")
				$tosearch=true;
			if(NeedQuotes($cEmailFieldType))
				$value=db_prepare_string($value);
			else
				$value=(0+$value);
			$sWhere=AddFieldWrappers($cEmailField)."=".$value;
		}
		
		if($tosearch && $globalEvents->exists("BeforeRemindPassword"))
			$tosearch = $globalEvents->BeforeRemindPassword($strUsername,$strEmail);
		
		if($tosearch)
		{
			$activeField = "";
						$strSQL = "select ".AddFieldWrappers($cUserNameField).",".AddFieldWrappers($cPasswordField).",".AddFieldWrappers($cEmailField).$activeField." from ".AddTableWrappers("ttwousers")." where ".$sWhere;
			$rs = db_query($strSQL,$conn);
			if($data = db_fetch_numarray($rs))
			{
				$password=$data[1];
		
	
				$url = GetSiteUrl();
				$url.= $_SERVER["SCRIPT_NAME"];
				$url2 = str_replace("remind.","register.",$url);
				$message = "";
							$layout = new TLayout("remind_success","Extravaganza1Orange","MobileOrange");
$layout->blocks["top"] = array();
$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"remindheader","block"=>"","substyle"=>2);


$layout->containers["fields"][] = array("name"=>"weresent_message","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"remindsucbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";
$layout->blocks["top"][] = "fields";$page_layouts["remind_success"] = $layout;

				$message.= "Password reminder"."\r\n";
				$message.= "You asked to remind your username and password at"." ".$url."\r\n";
				$message.= "Username".": ".$data[0]."\r\n";
				$message.= "Password".": ".$password."\r\n";
				
				$sentMailResults = runner_mail(array('to' => $data[2], 'subject' => "Password reminder", 'body' => $message));
				if($sentMailResults['mailed'])
				{
					$reminded = true;
					if($globalEvents->exists("AfterRemindPassword"))
						$globalEvents->AfterRemindPassword($strUsername,$strEmail);
					
					$loginlink_attrs = "href=\"login.php";
					if($strSearchBy!="email")
						$loginlink_attrs.="?username=".rawurlencode($strUsername);
					$loginlink_attrs.="\"";
					
					$_SESSION[$sessPrefix."_count_captcha"]=$_SESSION[$sessPrefix."_count_captcha"]+1;
					
					$xt->assign("loginlink_attrs",$loginlink_attrs);
					$xt->assign("body",true);
					$xt->display("remind_success.htm");
					return;
				}	
			}
		}
		
		if(!$reminded)
		{
			if($sentMailResults['message'])
				$strMessage = $sentMailResults['message'];
			elseif($strSearchBy!="email")
				$strMessage = "User"." <i>".$strUsername."</i> "."is not registered.";
			else
				$strMessage = "This email doesn't exist in our database";
		}

	}

}
$emailradio_attrs="onclick=\"document.forms.form1.searchby.value='email'; UpdateControls();\"";
$usernameradio_attrs="onclick=\"document.forms.form1.searchby.value='username'; UpdateControls();\"";
if($strSearchBy=="username")
{
	$usernameradio_attrs.=" checked";
	$search_disabled = "email";
}
else
{
	$emailradio_attrs.=" checked";
	$search_disabled = "username";
}
$xt->assign("emailradio_attrs",$emailradio_attrs);
$xt->assign("usernameradio_attrs",$usernameradio_attrs);

$xt->assign("submit_attrs","onclick='document.forms.form1.submit();return false;'");

$xt->assign("username_label",true);
$xt->assign("email_label",true);
$is508=isEnableSection508();
if($is508)
{
	$xt->assign_section("username_label","<label for=\"username\">","</label>");
	$xt->assign_section("email_label","<label for=\"email\">","</label>");
}
$xt->assign("username_attrs",($is508==true ? "id=\"username\" " : "")."value=\"".htmlspecialchars($strUsername)."\"");
$xt->assign("email_attrs",($is508==true ? "id=\"email\" " : "")."value=\"".htmlspecialchars($strEmail)."\"");

if(@$strMessage)
{
	$xt->assign("message","<div class='message'>".$strMessage."</div>");
	$xt->assign("message_block",true);
	if($pageObject->isCaptchaOk==1) 
		$_SESSION[$sessPrefix."_count_captcha"]=$_SESSION[$sessPrefix."_count_captcha"]+1;
}

$pageObject->body["begin"] .= "<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>";
$pageObject->body["begin"] .= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";		
$pageObject->body["begin"] .="<script language = JavaScript>
function OnKeyDown()
{
	e = window.event;
	if (e.keyCode == 13)
	{
		e.cancel = true;
		document.forms[0].submit();
	}	
}

function UpdateControls()
{
	if (document.forms.form1.searchby.value==\"username\")
	{
		document.forms.form1.username.style.backgroundColor='white';
		document.forms.form1.email.style.backgroundColor='gainsboro';
		document.forms.form1.username.disabled=false; 
		document.forms.form1.email.disabled=true;
	}
	else
	{
		document.forms.form1.username.style.backgroundColor='gainsboro';
		document.forms.form1.email.style.backgroundColor='white';
		document.forms.form1.username.disabled=true; 
		document.forms.form1.email.disabled=false;
	}
}
</script>
<form method=post action=\"remind.php\" id=form1 name=form1>
<input type=hidden name=btnSubmit value=\"Remind\">
<input type=\"Hidden\" name=\"searchby\" value=\"".$strSearchBy."\">";
$pageObject->body["end"] .= "</form>
	<script language=\"JavaScript\">
	document.forms.form1.".$search_disabled.".disabled=true;
	UpdateControls();
	".$pageObject->PrepareJS()."
	</script>";

$xt->assignbyref("body",$pageObject->body);

if($globalEvents->exists("BeforeShowRemindPwd"))
	$globalEvents->BeforeShowRemindPwd($xt,$pageObject->templatefile);

$xt->display($pageObject->templatefile);
