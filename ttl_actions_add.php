<?php 
include("include/dbcommon.php");

@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

add_nocache_headers();
include("include/ttl_actions_variables.php");
include('include/xtempl.php');
include('classes/addpage.php');

//	check if logged in
if(@$_SESSION["UserID"] && IsAdmin() && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Add"))
{
	echo "<p>"."You don't have permissions to access this table"."<br>Proceed to <a href=\"admin.php\">Admin Area</a> to set up user permissions</p>";
	return;
}
if(!@$_SESSION["UserID"] || !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Add"))
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	
	header("Location: login.php?message=expired"); 
	return;
}

if ((sizeof($_POST)==0) && (postvalue('ferror'))){
	if (postvalue("inline")){
		$returnJSON['success'] = false;
		$returnJSON['message'] = "Error occurred";
		$returnJSON['fatalError'] = true;
		echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
		exit();
	}
	else if (postvalue("fly")){
		echo -1;
		exit();
	}
	else {
		$_SESSION["message_add"] = "<< "."Error occurred"." >>";
	}
}

if(isset($_REQUEST['afteradd'])){
	
	header('Location: '.$_SERVER['PHP_SELF']);
	if($eventObj->exists("AfterAdd") && isset($_SESSION['after_add_data'][$_REQUEST['afteradd']])){
	
		$data = $_SESSION['after_add_data'][$_REQUEST['afteradd']];
		$eventObj->AfterAdd($data['avalues'], $data['keys'],$data['inlineadd']);
	
	}
	unset($_SESSION['after_add_data'][$_REQUEST['afteradd']]);
	
	foreach (is_array($_SESSION['after_add_data']) ? $_SESSION['after_add_data'] : array() as $k=>$v){
		if (!is_array($v) or !array_key_exists('time',$v)) {
			unset($_SESSION['after_add_data'][$k]);
			continue;
		}
		if ($v['time'] < time() - 3600){
			unset($_SESSION['after_add_data'][$k]);
		}
	}
	exit;
}

$layout = new TLayout("add2","Extravaganza1Orange","MobileOrange");
$layout->blocks["top"] = array();
$layout->containers["add"] = array();

$layout->containers["add"][] = array("name"=>"addheader","block"=>"","substyle"=>2);


$layout->containers["add"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->containers["add"][] = array("name"=>"wrapper","block"=>"","substyle"=>1);


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"addfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"legend","block"=>"legend","substyle"=>3);


$layout->containers["fields"][] = array("name"=>"addbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["add"] = "1";
$layout->blocks["top"][] = "add";
$layout->containers["details"] = array();

$layout->containers["details"][] = array("name"=>"adddetails","block"=>"detail_tables","substyle"=>1);


$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["ttl_actions_add"] = $layout;

$layout = new TLayout("tab","Extravaganza1Orange","MobileOrange");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["ttl_actions_add_Client_and_Tenant1"] = $layout;

$layout = new TLayout("tab","Extravaganza1Orange","MobileOrange");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["ttl_actions_add_Title1"] = $layout;

$layout = new TLayout("tab","Extravaganza1Orange","MobileOrange");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["ttl_actions_add_Financial1"] = $layout;


$layout = new TLayout("list5","Extravaganza1Orange","MobileOrange");
$layout->blocks["center"] = array();
$layout->containers["bigblock"] = array();

$layout->containers["bigblock"][] = array("name"=>"wrapper","block"=>"","substyle"=>2);


$layout->containers["recordcontrols"] = array();

$layout->containers["recordcontrols"][] = array("name"=>"recordcontrols_new","block"=>"newrecord_controls_block","substyle"=>1);


$layout->containers["recordcontrols"][] = array("name"=>"recordcontrol","block"=>"record_controls_block","substyle"=>1);


$layout->skins["recordcontrols"] = "2";

$layout->containers["bigblock"][] = array("name"=>"wrapper","block"=>"","substyle"=>2);


$layout->containers["message"] = array();

$layout->containers["message"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->skins["message"] = "2";

$layout->containers["bigblock"][] = array("name"=>"wrapper","block"=>"","substyle"=>2);


$layout->containers["grid"] = array();

$layout->containers["grid"][] = array("name"=>"grid","block"=>"grid_block","substyle"=>1);


$layout->skins["grid"] = "grid";

$layout->containers["bigblock"][] = array("name"=>"wrapper","block"=>"","substyle"=>2);


$layout->containers["pagination"] = array();

$layout->containers["pagination"][] = array("name"=>"pagination","block"=>"pagination_block","substyle"=>1);


$layout->skins["pagination"] = "2";

$layout->skins["bigblock"] = "1";
$layout->blocks["center"][] = "bigblock";$layout->blocks["left"] = array();
$layout->containers["left"] = array();

$layout->containers["left"][] = array("name"=>"vmenu","block"=>"menu_block","substyle"=>1);


$layout->containers["left"][] = array("name"=>"vsearch1","block"=>"searchform_block","substyle"=>1);


$layout->containers["left"][] = array("name"=>"vsearch2","block"=>"searchform_block","substyle"=>1);


$layout->containers["left"][] = array("name"=>"vdetails_found","block"=>"details_block","substyle"=>2);


$layout->containers["left"][] = array("name"=>"vpage_of","block"=>"pages_block","substyle"=>1);


$layout->containers["left"][] = array("name"=>"vrecsperpage","block"=>"recordspp_block","substyle"=>1);


$layout->containers["left"][] = array("name"=>"searchpanel","block"=>"searchPanel","substyle"=>1);


$layout->skins["left"] = "menu";
$layout->blocks["left"][] = "left";$layout->blocks["top"] = array();
$layout->containers["master"] = array();

$layout->containers["master"][] = array("name"=>"masterinfo","block"=>"mastertable_block","substyle"=>1);


$layout->skins["master"] = "empty";
$layout->blocks["top"][] = "master";
$layout->containers["toplinks"] = array();

$layout->containers["toplinks"][] = array("name"=>"loggedas","block"=>"security_block","substyle"=>1);


$layout->containers["toplinks"][] = array("name"=>"toplinks_advsearch","block"=>"asearch_link","substyle"=>1);







$layout->skins["toplinks"] = "2";
$layout->blocks["top"][] = "toplinks";$page_layouts["brokers_list"] = $layout;

$layout = new TLayout("list5","Extravaganza1Orange","MobileOrange");
$layout->blocks["center"] = array();
$layout->containers["bigblock"] = array();

$layout->containers["bigblock"][] = array("name"=>"wrapper","block"=>"","substyle"=>2);


$layout->containers["recordcontrols"] = array();

$layout->containers["recordcontrols"][] = array("name"=>"recordcontrols_new","block"=>"newrecord_controls_block","substyle"=>1);


$layout->containers["recordcontrols"][] = array("name"=>"recordcontrol","block"=>"record_controls_block","substyle"=>1);


$layout->skins["recordcontrols"] = "2";

$layout->containers["bigblock"][] = array("name"=>"wrapper","block"=>"","substyle"=>2);


$layout->containers["message"] = array();

$layout->containers["message"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->skins["message"] = "2";

$layout->containers["bigblock"][] = array("name"=>"wrapper","block"=>"","substyle"=>2);


$layout->containers["grid"] = array();

$layout->containers["grid"][] = array("name"=>"grid","block"=>"grid_block","substyle"=>1);


$layout->skins["grid"] = "grid";

$layout->containers["bigblock"][] = array("name"=>"wrapper","block"=>"","substyle"=>2);


$layout->containers["pagination"] = array();

$layout->containers["pagination"][] = array("name"=>"pagination","block"=>"pagination_block","substyle"=>1);


$layout->skins["pagination"] = "2";

$layout->skins["bigblock"] = "1";
$layout->blocks["center"][] = "bigblock";$layout->blocks["left"] = array();
$layout->containers["left"] = array();

$layout->containers["left"][] = array("name"=>"vmenu","block"=>"menu_block","substyle"=>1);


$layout->containers["left"][] = array("name"=>"vsearch1","block"=>"searchform_block","substyle"=>1);


$layout->containers["left"][] = array("name"=>"vsearch2","block"=>"searchform_block","substyle"=>1);


$layout->containers["left"][] = array("name"=>"vdetails_found","block"=>"details_block","substyle"=>2);


$layout->containers["left"][] = array("name"=>"vpage_of","block"=>"pages_block","substyle"=>1);


$layout->containers["left"][] = array("name"=>"vrecsperpage","block"=>"recordspp_block","substyle"=>1);


$layout->containers["left"][] = array("name"=>"searchpanel","block"=>"searchPanel","substyle"=>1);


$layout->skins["left"] = "menu";
$layout->blocks["left"][] = "left";$layout->blocks["top"] = array();
$layout->containers["master"] = array();

$layout->containers["master"][] = array("name"=>"masterinfo","block"=>"mastertable_block","substyle"=>1);


$layout->skins["master"] = "empty";
$layout->blocks["top"][] = "master";
$layout->containers["toplinks"] = array();

$layout->containers["toplinks"][] = array("name"=>"loggedas","block"=>"security_block","substyle"=>1);


$layout->containers["toplinks"][] = array("name"=>"toplinks_advsearch","block"=>"asearch_link","substyle"=>1);







$layout->skins["toplinks"] = "2";
$layout->blocks["top"][] = "toplinks";$page_layouts["buyers_list"] = $layout;

$layout = new TLayout("list5","Extravaganza1Orange","MobileOrange");
$layout->blocks["center"] = array();
$layout->containers["bigblock"] = array();

$layout->containers["bigblock"][] = array("name"=>"wrapper","block"=>"","substyle"=>2);


$layout->containers["recordcontrols"] = array();

$layout->containers["recordcontrols"][] = array("name"=>"recordcontrols_new","block"=>"newrecord_controls_block","substyle"=>1);


$layout->containers["recordcontrols"][] = array("name"=>"recordcontrol","block"=>"record_controls_block","substyle"=>1);


$layout->skins["recordcontrols"] = "2";

$layout->containers["bigblock"][] = array("name"=>"wrapper","block"=>"","substyle"=>2);


$layout->containers["message"] = array();

$layout->containers["message"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->skins["message"] = "2";

$layout->containers["bigblock"][] = array("name"=>"wrapper","block"=>"","substyle"=>2);


$layout->containers["grid"] = array();

$layout->containers["grid"][] = array("name"=>"grid","block"=>"grid_block","substyle"=>1);


$layout->skins["grid"] = "grid";

$layout->containers["bigblock"][] = array("name"=>"wrapper","block"=>"","substyle"=>2);


$layout->containers["pagination"] = array();

$layout->containers["pagination"][] = array("name"=>"pagination","block"=>"pagination_block","substyle"=>1);


$layout->skins["pagination"] = "2";

$layout->skins["bigblock"] = "1";
$layout->blocks["center"][] = "bigblock";$layout->blocks["left"] = array();
$layout->containers["left"] = array();

$layout->containers["left"][] = array("name"=>"vmenu","block"=>"menu_block","substyle"=>1);


$layout->containers["left"][] = array("name"=>"vsearch1","block"=>"searchform_block","substyle"=>1);


$layout->containers["left"][] = array("name"=>"vsearch2","block"=>"searchform_block","substyle"=>1);


$layout->containers["left"][] = array("name"=>"vdetails_found","block"=>"details_block","substyle"=>2);


$layout->containers["left"][] = array("name"=>"vpage_of","block"=>"pages_block","substyle"=>1);


$layout->containers["left"][] = array("name"=>"vrecsperpage","block"=>"recordspp_block","substyle"=>1);


$layout->containers["left"][] = array("name"=>"searchpanel","block"=>"searchPanel","substyle"=>1);


$layout->skins["left"] = "menu";
$layout->blocks["left"][] = "left";$layout->blocks["top"] = array();
$layout->containers["master"] = array();

$layout->containers["master"][] = array("name"=>"masterinfo","block"=>"mastertable_block","substyle"=>1);


$layout->skins["master"] = "empty";
$layout->blocks["top"][] = "master";
$layout->containers["toplinks"] = array();

$layout->containers["toplinks"][] = array("name"=>"loggedas","block"=>"security_block","substyle"=>1);


$layout->containers["toplinks"][] = array("name"=>"toplinks_advsearch","block"=>"asearch_link","substyle"=>1);







$layout->skins["toplinks"] = "2";
$layout->blocks["top"][] = "toplinks";$page_layouts["sellers_list"] = $layout;

$layout = new TLayout("list5","Extravaganza1Orange","MobileOrange");
$layout->blocks["center"] = array();
$layout->containers["bigblock"] = array();

$layout->containers["bigblock"][] = array("name"=>"wrapper","block"=>"","substyle"=>2);


$layout->containers["recordcontrols"] = array();

$layout->containers["recordcontrols"][] = array("name"=>"recordcontrols_new","block"=>"newrecord_controls_block","substyle"=>1);


$layout->containers["recordcontrols"][] = array("name"=>"recordcontrol","block"=>"record_controls_block","substyle"=>1);


$layout->skins["recordcontrols"] = "2";

$layout->containers["bigblock"][] = array("name"=>"wrapper","block"=>"","substyle"=>2);


$layout->containers["message"] = array();

$layout->containers["message"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->skins["message"] = "2";

$layout->containers["bigblock"][] = array("name"=>"wrapper","block"=>"","substyle"=>2);


$layout->containers["grid"] = array();

$layout->containers["grid"][] = array("name"=>"grid","block"=>"grid_block","substyle"=>1);


$layout->skins["grid"] = "grid";

$layout->containers["bigblock"][] = array("name"=>"wrapper","block"=>"","substyle"=>2);


$layout->containers["pagination"] = array();

$layout->containers["pagination"][] = array("name"=>"pagination","block"=>"pagination_block","substyle"=>1);


$layout->skins["pagination"] = "2";

$layout->skins["bigblock"] = "1";
$layout->blocks["center"][] = "bigblock";$layout->blocks["left"] = array();
$layout->containers["left"] = array();

$layout->containers["left"][] = array("name"=>"vmenu","block"=>"menu_block","substyle"=>1);


$layout->containers["left"][] = array("name"=>"vsearch1","block"=>"searchform_block","substyle"=>1);


$layout->containers["left"][] = array("name"=>"vsearch2","block"=>"searchform_block","substyle"=>1);


$layout->containers["left"][] = array("name"=>"vdetails_found","block"=>"details_block","substyle"=>2);


$layout->containers["left"][] = array("name"=>"vpage_of","block"=>"pages_block","substyle"=>1);


$layout->containers["left"][] = array("name"=>"vrecsperpage","block"=>"recordspp_block","substyle"=>1);


$layout->containers["left"][] = array("name"=>"searchpanel","block"=>"searchPanel","substyle"=>1);


$layout->skins["left"] = "menu";
$layout->blocks["left"][] = "left";$layout->blocks["top"] = array();
$layout->containers["master"] = array();

$layout->containers["master"][] = array("name"=>"masterinfo","block"=>"mastertable_block","substyle"=>1);


$layout->skins["master"] = "empty";
$layout->blocks["top"][] = "master";
$layout->containers["toplinks"] = array();

$layout->containers["toplinks"][] = array("name"=>"loggedas","block"=>"security_block","substyle"=>1);


$layout->containers["toplinks"][] = array("name"=>"toplinks_advsearch","block"=>"asearch_link","substyle"=>1);







$layout->skins["toplinks"] = "2";
$layout->blocks["top"][] = "toplinks";$page_layouts["ttl_recordings_list"] = $layout;

$layout = new TLayout("list5","Extravaganza1Orange","MobileOrange");
$layout->blocks["center"] = array();
$layout->containers["bigblock"] = array();

$layout->containers["bigblock"][] = array("name"=>"wrapper","block"=>"","substyle"=>2);


$layout->containers["recordcontrols"] = array();

$layout->containers["recordcontrols"][] = array("name"=>"recordcontrols_new","block"=>"newrecord_controls_block","substyle"=>1);


$layout->containers["recordcontrols"][] = array("name"=>"recordcontrol","block"=>"record_controls_block","substyle"=>1);


$layout->skins["recordcontrols"] = "2";

$layout->containers["bigblock"][] = array("name"=>"wrapper","block"=>"","substyle"=>2);


$layout->containers["message"] = array();

$layout->containers["message"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->skins["message"] = "2";

$layout->containers["bigblock"][] = array("name"=>"wrapper","block"=>"","substyle"=>2);


$layout->containers["grid"] = array();

$layout->containers["grid"][] = array("name"=>"grid","block"=>"grid_block","substyle"=>1);


$layout->skins["grid"] = "grid";

$layout->containers["bigblock"][] = array("name"=>"wrapper","block"=>"","substyle"=>2);


$layout->containers["pagination"] = array();

$layout->containers["pagination"][] = array("name"=>"pagination","block"=>"pagination_block","substyle"=>1);


$layout->skins["pagination"] = "2";

$layout->skins["bigblock"] = "1";
$layout->blocks["center"][] = "bigblock";$layout->blocks["left"] = array();
$layout->containers["left"] = array();

$layout->containers["left"][] = array("name"=>"vmenu","block"=>"menu_block","substyle"=>1);


$layout->containers["left"][] = array("name"=>"vsearch1","block"=>"searchform_block","substyle"=>1);


$layout->containers["left"][] = array("name"=>"vsearch2","block"=>"searchform_block","substyle"=>1);


$layout->containers["left"][] = array("name"=>"vdetails_found","block"=>"details_block","substyle"=>2);


$layout->containers["left"][] = array("name"=>"vpage_of","block"=>"pages_block","substyle"=>1);


$layout->containers["left"][] = array("name"=>"vrecsperpage","block"=>"recordspp_block","substyle"=>1);


$layout->containers["left"][] = array("name"=>"searchpanel","block"=>"searchPanel","substyle"=>1);


$layout->skins["left"] = "menu";
$layout->blocks["left"][] = "left";$layout->blocks["top"] = array();
$layout->containers["master"] = array();

$layout->containers["master"][] = array("name"=>"masterinfo","block"=>"mastertable_block","substyle"=>1);


$layout->skins["master"] = "empty";
$layout->blocks["top"][] = "master";
$layout->containers["toplinks"] = array();

$layout->containers["toplinks"][] = array("name"=>"loggedas","block"=>"security_block","substyle"=>1);


$layout->containers["toplinks"][] = array("name"=>"toplinks_advsearch","block"=>"asearch_link","substyle"=>1);







$layout->skins["toplinks"] = "2";
$layout->blocks["top"][] = "toplinks";$page_layouts["ttlaction_notes_list"] = $layout;


$filename = "";
$status = "";
$message = "";
$mesClass = "";
$usermessage = "";
$error_happened = false;
$readavalues = false;

$keys = array();
$showValues = array();
$showRawValues = array();
$showFields = array();
$showDetailKeys = array();
$IsSaved = false;
$HaveData = true;
$popUpSave = false;

$sessionPrefix = $strTableName;

$onFly = false;
if(postvalue("onFly"))
	$onFly = true;

if(@$_REQUEST["editType"]=="inline")
	$inlineadd = ADD_INLINE;
elseif(@$_REQUEST["editType"]==ADD_POPUP)
{
	$inlineadd = ADD_POPUP;
	if(@$_POST["a"]=="added" && postvalue("field")=="" && postvalue("category")=="")
		$popUpSave = true;	
}
elseif(@$_REQUEST["editType"]==ADD_MASTER)
	$inlineadd = ADD_MASTER;
elseif($onFly)
{
	$inlineadd = ADD_ONTHEFLY;
	$sessionPrefix = $strTableName."_add";
}
else
	$inlineadd = ADD_SIMPLE;

if($inlineadd == ADD_INLINE)
	$templatefile = "ttl_actions_inline_add.htm";
else
	$templatefile = "ttl_actions_add.htm";

$id = postvalue("id");	
if(intval($id)==0)
	$id = 1;

//If undefined session value for mastet table, but exist post value master table, than take second
//It may be happen only when use dpInline mode on page add
if(!@$_SESSION[$sessionPrefix."_mastertable"] && postvalue("mastertable"))
	$_SESSION[$sessionPrefix."_mastertable"] = postvalue("mastertable");

$xt = new Xtempl();
	
// assign an id		
$xt->assign("id",$id);
	
$auditObj = GetAuditObject($strTableName);

//array of params for classes
$params = array("pageType" => PAGE_ADD,"id" => $id,"mode" => $inlineadd);

////////////////////// data picker
$params["calendar"] = true;

////////////////////// time picker

$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params['includes_js'] = $includes_js;
$params['locale_info'] = $locale_info;
$params['includes_css'] = $includes_css;
$params['useTabsOnAdd'] = useTabsOnAdd($strTableName);
$params['templatefile'] = $templatefile;
$params['includes_jsreq'] = $includes_jsreq;
$params['pageAddLikeInline'] = ($inlineadd==ADD_INLINE);
$params['needSearchClauseObj'] = false;
$params['strOriginalTableName'] = $strOriginalTableName;

if($params['useTabsOnAdd'])
	$params['arrAddTabs'] = GetAddTabs($strTableName);
	
$pageObject = new AddPage($params);

//Get detail table keys	
$detailKeys = $pageObject->detailKeysByM;

//Array of fields, which appear on add page
$addFields = $pageObject->getFieldsByPageType();

// add button events if exist
if ($inlineadd==ADD_SIMPLE)
	$pageObject->addButtonHandlers();

$url_page=substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1,12);

//For show detail tables on master page add
if($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
{
	$dpParams = array();
	if($pageObject->isShowDetailTables  && !isMobile())
	{
		$ids = $id;
		$countDetailsIsShow = 0;
			$dpPermis = $pageObject->getPermissions("brokers");
		if ($dpPermis['add']){
			$countDetailsIsShow ++;
			$mKeys["brokers"] = GetMasterKeysByDetailTable("brokers", $strTableName);
			$dpParams['strTableNames'][] = "brokers";
			$dpParams['ids'][] = ++$ids;
		}
			$dpPermis = $pageObject->getPermissions("buyers");
		if ($dpPermis['add']){
			$countDetailsIsShow ++;
			$mKeys["buyers"] = GetMasterKeysByDetailTable("buyers", $strTableName);
			$dpParams['strTableNames'][] = "buyers";
			$dpParams['ids'][] = ++$ids;
		}
			$dpPermis = $pageObject->getPermissions("sellers");
		if ($dpPermis['add']){
			$countDetailsIsShow ++;
			$mKeys["sellers"] = GetMasterKeysByDetailTable("sellers", $strTableName);
			$dpParams['strTableNames'][] = "sellers";
			$dpParams['ids'][] = ++$ids;
		}
			$dpPermis = $pageObject->getPermissions("ttl_recordings");
		if ($dpPermis['add']){
			$countDetailsIsShow ++;
			$mKeys["ttl_recordings"] = GetMasterKeysByDetailTable("ttl_recordings", $strTableName);
			$dpParams['strTableNames'][] = "ttl_recordings";
			$dpParams['ids'][] = ++$ids;
		}
			$dpPermis = $pageObject->getPermissions("ttlaction_notes");
		if ($dpPermis['add']){
			$countDetailsIsShow ++;
			$mKeys["ttlaction_notes"] = GetMasterKeysByDetailTable("ttlaction_notes", $strTableName);
			$dpParams['strTableNames'][] = "ttlaction_notes";
			$dpParams['ids'][] = ++$ids;
		}
		$pageObject->jsSettings['tableSettings'][$strTableName]['isShowDetails'] = $countDetailsIsShow > 0 ? true : false;
		$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array('tableNames'=>$dpParams['strTableNames'], 'ids'=>$dpParams['ids']);
	}
}

//	Before Process event
if($eventObj->exists("BeforeProcessAdd"))
	$eventObj->BeforeProcessAdd($conn);

// proccess captcha
if ($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
	if($pageObject->captchaExists())
		$pageObject->doCaptchaCode();	
	
// insert new record if we have to
if(@$_POST["a"]=="added")
{
	$afilename_values=array();
	$avalues=array();
	$blobfields=array();
//	processing properties_idproperties - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$value = postvalue("value_properties_idproperties_".$id);
		$type=postvalue("type_properties_idproperties_".$id);
		if (FieldSubmitted("properties_idproperties_".$id))
		{
				$value=prepare_for_db("properties_idproperties",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "properties_idproperties"=="password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["properties_idproperties"]=$value;
		}
		}
//	processibng properties_idproperties - end
//	processing ttlnumb - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$value = postvalue("value_ttlnumb_".$id);
		$type=postvalue("type_ttlnumb_".$id);
		if (FieldSubmitted("ttlnumb_".$id))
		{
				$value=prepare_for_db("ttlnumb",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "ttlnumb"=="password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["ttlnumb"]=$value;
		}
		}
//	processibng ttlnumb - end
//	processing whencreated - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$value = postvalue("value_whencreated_".$id);
		$type=postvalue("type_whencreated_".$id);
		if (FieldSubmitted("whencreated_".$id))
		{
				$value=prepare_for_db("whencreated",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "whencreated"=="password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["whencreated"]=$value;
		}
		}
//	processibng whencreated - end
//	processing matter - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$value = postvalue("value_matter_".$id);
		$type=postvalue("type_matter_".$id);
		if (FieldSubmitted("matter_".$id))
		{
				$value=prepare_for_db("matter",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "matter"=="password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["matter"]=$value;
		}
		}
//	processibng matter - end
//	processing staffatty - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$value = postvalue("value_staffatty_".$id);
		$type=postvalue("type_staffatty_".$id);
		if (FieldSubmitted("staffatty_".$id))
		{
				$value=prepare_for_db("staffatty",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "staffatty"=="password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["staffatty"]=$value;
		}
		}
//	processibng staffatty - end
//	processing file_status - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$value = postvalue("value_file_status_".$id);
		$type=postvalue("type_file_status_".$id);
		if (FieldSubmitted("file_status_".$id))
		{
				$value=prepare_for_db("file_status",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "file_status"=="password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["file_status"]=$value;
		}
		}
//	processibng file_status - end
//	processing file_archlocation - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$value = postvalue("value_file_archlocation_".$id);
		$type=postvalue("type_file_archlocation_".$id);
		if (FieldSubmitted("file_archlocation_".$id))
		{
				$value=prepare_for_db("file_archlocation",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "file_archlocation"=="password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["file_archlocation"]=$value;
		}
		}
//	processibng file_archlocation - end
//	processing filecabinet - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$value = postvalue("value_filecabinet_".$id);
		$type=postvalue("type_filecabinet_".$id);
		if (FieldSubmitted("filecabinet_".$id))
		{
				$value=prepare_for_db("filecabinet",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "filecabinet"=="password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["filecabinet"]=$value;
		}
		}
//	processibng filecabinet - end
//	processing client1 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$value = postvalue("value_client1_".$id);
		$type=postvalue("type_client1_".$id);
		if (FieldSubmitted("client1_".$id))
		{
				$value=prepare_for_db("client1",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "client1"=="password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["client1"]=$value;
		}
		}
//	processibng client1 - end
//	processing client2 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$value = postvalue("value_client2_".$id);
		$type=postvalue("type_client2_".$id);
		if (FieldSubmitted("client2_".$id))
		{
				$value=prepare_for_db("client2",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "client2"=="password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["client2"]=$value;
		}
		}
//	processibng client2 - end
//	processing claddr1 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$value = postvalue("value_claddr1_".$id);
		$type=postvalue("type_claddr1_".$id);
		if (FieldSubmitted("claddr1_".$id))
		{
				$value=prepare_for_db("claddr1",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "claddr1"=="password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["claddr1"]=$value;
		}
		}
//	processibng claddr1 - end
//	processing claddr2 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$value = postvalue("value_claddr2_".$id);
		$type=postvalue("type_claddr2_".$id);
		if (FieldSubmitted("claddr2_".$id))
		{
				$value=prepare_for_db("claddr2",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "claddr2"=="password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["claddr2"]=$value;
		}
		}
//	processibng claddr2 - end
//	processing clphone1 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$value = postvalue("value_clphone1_".$id);
		$type=postvalue("type_clphone1_".$id);
		if (FieldSubmitted("clphone1_".$id))
		{
				$value=prepare_for_db("clphone1",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "clphone1"=="password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["clphone1"]=$value;
		}
		}
//	processibng clphone1 - end
//	processing clphone2 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$value = postvalue("value_clphone2_".$id);
		$type=postvalue("type_clphone2_".$id);
		if (FieldSubmitted("clphone2_".$id))
		{
				$value=prepare_for_db("clphone2",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "clphone2"=="password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["clphone2"]=$value;
		}
		}
//	processibng clphone2 - end
//	processing tenant - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$value = postvalue("value_tenant_".$id);
		$type=postvalue("type_tenant_".$id);
		if (FieldSubmitted("tenant_".$id))
		{
				$value=prepare_for_db("tenant",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "tenant"=="password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["tenant"]=$value;
		}
		}
//	processibng tenant - end
//	processing titleconame - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$value = postvalue("value_titleconame_".$id);
		$type=postvalue("type_titleconame_".$id);
		if (FieldSubmitted("titleconame_".$id))
		{
				$value=prepare_for_db("titleconame",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "titleconame"=="password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["titleconame"]=$value;
		}
		}
//	processibng titleconame - end
//	processing titlephone - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$value = postvalue("value_titlephone_".$id);
		$type=postvalue("type_titlephone_".$id);
		if (FieldSubmitted("titlephone_".$id))
		{
				$value=prepare_for_db("titlephone",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "titlephone"=="password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["titlephone"]=$value;
		}
		}
//	processibng titlephone - end
//	processing titlepolicy - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$value = postvalue("value_titlepolicy_".$id);
		$type=postvalue("type_titlepolicy_".$id);
		if (FieldSubmitted("titlepolicy_".$id))
		{
				$value=prepare_for_db("titlepolicy",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "titlepolicy"=="password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["titlepolicy"]=$value;
		}
		}
//	processibng titlepolicy - end
//	processing titleatty - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$value = postvalue("value_titleatty_".$id);
		$type=postvalue("type_titleatty_".$id);
		if (FieldSubmitted("titleatty_".$id))
		{
				$value=prepare_for_db("titleatty",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "titleatty"=="password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["titleatty"]=$value;
		}
		}
//	processibng titleatty - end
//	processing titlerefatty - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$value = postvalue("value_titlerefatty_".$id);
		$type=postvalue("type_titlerefatty_".$id);
		if (FieldSubmitted("titlerefatty_".$id))
		{
				$value=prepare_for_db("titlerefatty",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "titlerefatty"=="password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["titlerefatty"]=$value;
		}
		}
//	processibng titlerefatty - end
//	processing titleremit - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$value = postvalue("value_titleremit_".$id);
		$type=postvalue("type_titleremit_".$id);
		if (FieldSubmitted("titleremit_".$id))
		{
				$value=prepare_for_db("titleremit",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "titleremit"=="password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["titleremit"]=$value;
		}
		}
//	processibng titleremit - end
//	processing titlerecv - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$value = postvalue("value_titlerecv_".$id);
		$type=postvalue("type_titlerecv_".$id);
		if (FieldSubmitted("titlerecv_".$id))
		{
				$value=prepare_for_db("titlerecv",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "titlerecv"=="password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["titlerecv"]=$value;
		}
		}
//	processibng titlerecv - end
//	processing examiner - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$value = postvalue("value_examiner_".$id);
		$type=postvalue("type_examiner_".$id);
		if (FieldSubmitted("examiner_".$id))
		{
				$value=prepare_for_db("examiner",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "examiner"=="password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["examiner"]=$value;
		}
		}
//	processibng examiner - end
//	processing closesched_date - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$value = postvalue("value_closesched_date_".$id);
		$type=postvalue("type_closesched_date_".$id);
		if (FieldSubmitted("closesched_date_".$id))
		{
				$value=prepare_for_db("closesched_date",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "closesched_date"=="password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["closesched_date"]=$value;
		}
		}
//	processibng closesched_date - end
//	processing closesched_time - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$value = postvalue("value_closesched_time_".$id);
		$type=postvalue("type_closesched_time_".$id);
		if (FieldSubmitted("closesched_time_".$id))
		{
				$value=prepare_for_db("closesched_time",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "closesched_time"=="password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["closesched_time"]=$value;
		}
		}
//	processibng closesched_time - end
//	processing sellprice - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$value = postvalue("value_sellprice_".$id);
		$type=postvalue("type_sellprice_".$id);
		if (FieldSubmitted("sellprice_".$id))
		{
				$value=prepare_for_db("sellprice",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "sellprice"=="password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["sellprice"]=$value;
		}
		}
//	processibng sellprice - end
//	processing deposit - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$value = postvalue("value_deposit_".$id);
		$type=postvalue("type_deposit_".$id);
		if (FieldSubmitted("deposit_".$id))
		{
				$value=prepare_for_db("deposit",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "deposit"=="password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["deposit"]=$value;
		}
		}
//	processibng deposit - end
//	processing loanamt - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$value = postvalue("value_loanamt_".$id);
		$type=postvalue("type_loanamt_".$id);
		if (FieldSubmitted("loanamt_".$id))
		{
				$value=prepare_for_db("loanamt",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "loanamt"=="password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["loanamt"]=$value;
		}
		}
//	processibng loanamt - end
//	processing refi_purch - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$value = postvalue("value_refi_purch_".$id);
		$type=postvalue("type_refi_purch_".$id);
		if (FieldSubmitted("refi_purch_".$id))
		{
				$value=prepare_for_db("refi_purch",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "refi_purch"=="password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["refi_purch"]=$value;
		}
		}
//	processibng refi_purch - end
//	processing res_comm - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$value = postvalue("value_res_comm_".$id);
		$type=postvalue("type_res_comm_".$id);
		if (FieldSubmitted("res_comm_".$id))
		{
				$value=prepare_for_db("res_comm",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "res_comm"=="password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["res_comm"]=$value;
		}
		}
//	processibng res_comm - end


//	insert masterkey value if exists and if not specified
	if(@$_SESSION[$sessionPrefix."_mastertable"]=="properties")
	{
		if(postvalue("masterkey1"))
			$_SESSION[$sessionPrefix."_masterkey1"] = postvalue("masterkey1");
		
		if($avalues["properties_idproperties"]=="")
			$avalues["properties_idproperties"]=prepare_for_db("properties_idproperties",$_SESSION[$sessionPrefix."_masterkey1"]);
			
	}
	if(@$_SESSION[$sessionPrefix."_mastertable"]=="search5")
	{
		if(postvalue("masterkey1"))
			$_SESSION[$sessionPrefix."_masterkey1"] = postvalue("masterkey1");
		
		if($avalues["idttl_actions"]=="")
			$avalues["idttl_actions"]=prepare_for_db("idttl_actions",$_SESSION[$sessionPrefix."_masterkey1"]);
			
	}
	if(@$_SESSION[$sessionPrefix."_mastertable"]=="sellersactions")
	{
		if(postvalue("masterkey1"))
			$_SESSION[$sessionPrefix."_masterkey1"] = postvalue("masterkey1");
		
		if($avalues["idttl_actions"]=="")
			$avalues["idttl_actions"]=prepare_for_db("idttl_actions",$_SESSION[$sessionPrefix."_masterkey1"]);
			
	}
	if(@$_SESSION[$sessionPrefix."_mastertable"]=="buyersactions")
	{
		if(postvalue("masterkey1"))
			$_SESSION[$sessionPrefix."_masterkey1"] = postvalue("masterkey1");
		
		if($avalues["idttl_actions"]=="")
			$avalues["idttl_actions"]=prepare_for_db("idttl_actions",$_SESSION[$sessionPrefix."_masterkey1"]);
			
	}


	$failed_inline_add=false;
//	add filenames to values
	foreach($afilename_values as $akey=>$value)
		$avalues[$akey]=$value;
	
//	before Add event
	$retval = true;
	if($eventObj->exists("BeforeAdd"))
		$retval = $eventObj->BeforeAdd($avalues,$usermessage,(bool)$inlineadd);
	if($retval && $pageObject->isCaptchaOk)
	{
		$_SESSION[$strTableName."_count_captcha"] = $_SESSION[$strTableName."_count_captcha"]+1;
		if(DoInsertRecord($strOriginalTableName,$avalues,$blobfields,$id,$pageObject))
		{
			$IsSaved=true;
//	after edit event
			if($auditObj || $eventObj->exists("AfterAdd"))
			{
				foreach($keys as $idx=>$val)
					$avalues[$idx]=$val;
			}
			
			if($auditObj)
				$auditObj->LogAdd($strTableName,$avalues,$keys);

			$afterAdd_id = '';	
			if($eventObj->exists("AfterAdd") && $inlineadd!=ADD_MASTER){
				$eventObj->AfterAdd($avalues,$keys,(bool)$inlineadd);
			} else if ($eventObj->exists("AfterAdd") && $inlineadd==ADD_MASTER){
				$afterAdd_id = md5(rand(0,99999999999) + session_id());	
			
				$_SESSION['after_add_data'][$afterAdd_id] = array(
					'avalues'=>$avalues,
					'keys'=>$keys,
					'inlineadd'=>(bool)$inlineadd,
					'time' => time()
				);	
			}
				
			if($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER)
			{
				$permis = array();
				$keylink = "";$k = 0;
				foreach($keys as $idx=>$val)
				{
					if($k!=0)
						$keylink .="&";
					$keylink .="editid".(++$k)."=".htmlspecialchars(rawurlencode(@$val));
				}
				$permis = $pageObject->getPermissions();				
				if (count($keys))
				{
					$message .="</br>";
					if(GetTableData($strTableName,".edit",false) && $permis['edit'])
						$message .='&nbsp;<a href=\'ttl_actions_edit.php?'.$keylink.'\'>'."Edit".'</a>&nbsp;';
					if(GetTableData($strTableName,".view",false) && $permis['search'])
						$message .='&nbsp;<a href=\'ttl_actions_view.php?'.$keylink.'\'>'."View".'</a>&nbsp;';
				}
				$mesClass = "mes_ok";	
			}
		}
		elseif($inlineadd!=ADD_INLINE)
			$mesClass = "mes_not";	
	}
	else
	{
		$message = $usermessage;
		$status = "DECLINED";
		$readavalues = true;
	}
}
if($message)
	$message = "<div class='message ".$mesClass."'>".$message."</div>";

// PRG rule, to avoid POSTDATA resend
if (no_output_done() && $inlineadd==ADD_SIMPLE && $IsSaved)
{
	// saving message
	$_SESSION["message_add"] = ($message ? $message : "");
	// redirect
	header("Location: ttl_actions_".$pageObject->getPageType().".php");
	// turned on output buffering, so we need to stop script
	exit();
}

if($inlineadd==ADD_MASTER && $IsSaved)
	$_SESSION["message_add"] = ($message ? $message : "");
	
// for PRG rule, to avoid POSTDATA resend. Saving mess in session
if($inlineadd==ADD_SIMPLE && isset($_SESSION["message_add"]))
{
	$message = $_SESSION["message_add"];
	unset($_SESSION["message_add"]);
}

$defvalues=array();

//	copy record
if(array_key_exists("copyid1",$_REQUEST) || array_key_exists("editid1",$_REQUEST))
{
	$copykeys=array();
	if(array_key_exists("copyid1",$_REQUEST))
	{
		$copykeys["idttl_actions"]=postvalue("copyid1");
		$copykeys["properties_idproperties"]=postvalue("copyid2");
	}
	else
	{
		$copykeys["idttl_actions"]=postvalue("editid1");
		$copykeys["properties_idproperties"]=postvalue("editid2");
	}
	$strWhere=KeyWhere($copykeys);
	$strSQL = gSQLWhere($strWhere);

	LogInfo($strSQL);
	$rs=db_query($strSQL,$conn);
	$defvalues=db_fetch_array($rs);
	if(!$defvalues)
		$defvalues=array();
//	clear key fields
	$defvalues["idttl_actions"]="";
	$defvalues["properties_idproperties"]="";
//call CopyOnLoad event
	if($eventObj->exists("CopyOnLoad"))
		$eventObj->CopyOnLoad($defvalues,$strWhere);
}
else
{
	$defvalues["ttlnumb"]=$_SESSION["lastfilenumber"];
}

//	set default values for the foreign keys

if(@$_SESSION[$sessionPrefix."_mastertable"]=="properties")
{
	if(postvalue("masterkey1"))
		$_SESSION[$sessionPrefix."_masterkey1"] = postvalue("masterkey1");

	if(postvalue("mainMPageType")<>"add")
		$defvalues["properties_idproperties"] = @$_SESSION[$sessionPrefix."_masterkey1"];	
	
}

if(@$_SESSION[$sessionPrefix."_mastertable"]=="search5")
{
	if(postvalue("masterkey1"))
		$_SESSION[$sessionPrefix."_masterkey1"] = postvalue("masterkey1");

	if(postvalue("mainMPageType")<>"add")
		$defvalues["idttl_actions"] = @$_SESSION[$sessionPrefix."_masterkey1"];	
	
}

if(@$_SESSION[$sessionPrefix."_mastertable"]=="sellersactions")
{
	if(postvalue("masterkey1"))
		$_SESSION[$sessionPrefix."_masterkey1"] = postvalue("masterkey1");

	if(postvalue("mainMPageType")<>"add")
		$defvalues["idttl_actions"] = @$_SESSION[$sessionPrefix."_masterkey1"];	
	
}

if(@$_SESSION[$sessionPrefix."_mastertable"]=="buyersactions")
{
	if(postvalue("masterkey1"))
		$_SESSION[$sessionPrefix."_masterkey1"] = postvalue("masterkey1");

	if(postvalue("mainMPageType")<>"add")
		$defvalues["idttl_actions"] = @$_SESSION[$sessionPrefix."_masterkey1"];	
	
}

if($readavalues)
{
	$defvalues["ttlnumb"]=@$avalues["ttlnumb"];
	$defvalues["whencreated"]=@$avalues["whencreated"];
	$defvalues["examiner"]=@$avalues["examiner"];
	$defvalues["filecabinet"]=@$avalues["filecabinet"];
	$defvalues["properties_idproperties"]=@$avalues["properties_idproperties"];
	$defvalues["titleconame"]=@$avalues["titleconame"];
	$defvalues["titlepolicy"]=@$avalues["titlepolicy"];
	$defvalues["titlephone"]=@$avalues["titlephone"];
	$defvalues["titleremit"]=@$avalues["titleremit"];
	$defvalues["titleatty"]=@$avalues["titleatty"];
	$defvalues["titlerefatty"]=@$avalues["titlerefatty"];
	$defvalues["titlerecv"]=@$avalues["titlerecv"];
	$defvalues["closesched_date"]=@$avalues["closesched_date"];
	$defvalues["closesched_time"]=@$avalues["closesched_time"];
	$defvalues["sellprice"]=@$avalues["sellprice"];
	$defvalues["deposit"]=@$avalues["deposit"];
	$defvalues["loanamt"]=@$avalues["loanamt"];
	$defvalues["refi_purch"]=@$avalues["refi_purch"];
	$defvalues["res_comm"]=@$avalues["res_comm"];
	$defvalues["file_status"]=@$avalues["file_status"];
	$defvalues["file_archlocation"]=@$avalues["file_archlocation"];
	$defvalues["client1"]=@$avalues["client1"];
	$defvalues["client2"]=@$avalues["client2"];
	$defvalues["claddr1"]=@$avalues["claddr1"];
	$defvalues["claddr2"]=@$avalues["claddr2"];
	$defvalues["clphone1"]=@$avalues["clphone1"];
	$defvalues["clphone2"]=@$avalues["clphone2"];
	$defvalues["tenant"]=@$avalues["tenant"];
	$defvalues["matter"]=@$avalues["matter"];
	$defvalues["staffatty"]=@$avalues["staffatty"];
}

if($eventObj->exists("ProcessValuesAdd"))
	$eventObj->ProcessValuesAdd($defvalues);


//for basic files
$includes="";

if($inlineadd!=ADD_INLINE)
{
	if($inlineadd!=ADD_ONTHEFLY && $inlineadd!=ADD_POPUP)
	{
		$includes .="<script language=\"JavaScript\" src=\"include/loadfirst.js\"></script>\r\n";
				$includes.="<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";
		if (!isMobile())
			$includes.="<div id=\"search_suggest\"></div>\r\n";
	}
	
	if(!$pageObject->isAppearOnTabs("ttlnumb"))
		$xt->assign("ttlnumb_fieldblock",true);
	else
		$xt->assign("ttlnumb_tabfieldblock",true);
	$xt->assign("ttlnumb_label",true);
	if(isEnableSection508())
		$xt->assign_section("ttlnumb_label","<label for=\"".GetInputElementId("ttlnumb", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("whencreated"))
		$xt->assign("whencreated_fieldblock",true);
	else
		$xt->assign("whencreated_tabfieldblock",true);
	$xt->assign("whencreated_label",true);
	if(isEnableSection508())
		$xt->assign_section("whencreated_label","<label for=\"".GetInputElementId("whencreated", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("examiner"))
		$xt->assign("examiner_fieldblock",true);
	else
		$xt->assign("examiner_tabfieldblock",true);
	$xt->assign("examiner_label",true);
	if(isEnableSection508())
		$xt->assign_section("examiner_label","<label for=\"".GetInputElementId("examiner", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("filecabinet"))
		$xt->assign("filecabinet_fieldblock",true);
	else
		$xt->assign("filecabinet_tabfieldblock",true);
	$xt->assign("filecabinet_label",true);
	if(isEnableSection508())
		$xt->assign_section("filecabinet_label","<label for=\"".GetInputElementId("filecabinet", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("properties_idproperties"))
		$xt->assign("properties_idproperties_fieldblock",true);
	else
		$xt->assign("properties_idproperties_tabfieldblock",true);
	$xt->assign("properties_idproperties_label",true);
	if(isEnableSection508())
		$xt->assign_section("properties_idproperties_label","<label for=\"".GetInputElementId("properties_idproperties", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("titleconame"))
		$xt->assign("titleconame_fieldblock",true);
	else
		$xt->assign("titleconame_tabfieldblock",true);
	$xt->assign("titleconame_label",true);
	if(isEnableSection508())
		$xt->assign_section("titleconame_label","<label for=\"".GetInputElementId("titleconame", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("titlepolicy"))
		$xt->assign("titlepolicy_fieldblock",true);
	else
		$xt->assign("titlepolicy_tabfieldblock",true);
	$xt->assign("titlepolicy_label",true);
	if(isEnableSection508())
		$xt->assign_section("titlepolicy_label","<label for=\"".GetInputElementId("titlepolicy", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("titlephone"))
		$xt->assign("titlephone_fieldblock",true);
	else
		$xt->assign("titlephone_tabfieldblock",true);
	$xt->assign("titlephone_label",true);
	if(isEnableSection508())
		$xt->assign_section("titlephone_label","<label for=\"".GetInputElementId("titlephone", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("titleremit"))
		$xt->assign("titleremit_fieldblock",true);
	else
		$xt->assign("titleremit_tabfieldblock",true);
	$xt->assign("titleremit_label",true);
	if(isEnableSection508())
		$xt->assign_section("titleremit_label","<label for=\"".GetInputElementId("titleremit", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("titleatty"))
		$xt->assign("titleatty_fieldblock",true);
	else
		$xt->assign("titleatty_tabfieldblock",true);
	$xt->assign("titleatty_label",true);
	if(isEnableSection508())
		$xt->assign_section("titleatty_label","<label for=\"".GetInputElementId("titleatty", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("titlerefatty"))
		$xt->assign("titlerefatty_fieldblock",true);
	else
		$xt->assign("titlerefatty_tabfieldblock",true);
	$xt->assign("titlerefatty_label",true);
	if(isEnableSection508())
		$xt->assign_section("titlerefatty_label","<label for=\"".GetInputElementId("titlerefatty", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("titlerecv"))
		$xt->assign("titlerecv_fieldblock",true);
	else
		$xt->assign("titlerecv_tabfieldblock",true);
	$xt->assign("titlerecv_label",true);
	if(isEnableSection508())
		$xt->assign_section("titlerecv_label","<label for=\"".GetInputElementId("titlerecv", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("closesched_date"))
		$xt->assign("closesched_date_fieldblock",true);
	else
		$xt->assign("closesched_date_tabfieldblock",true);
	$xt->assign("closesched_date_label",true);
	if(isEnableSection508())
		$xt->assign_section("closesched_date_label","<label for=\"".GetInputElementId("closesched_date", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("closesched_time"))
		$xt->assign("closesched_time_fieldblock",true);
	else
		$xt->assign("closesched_time_tabfieldblock",true);
	$xt->assign("closesched_time_label",true);
	if(isEnableSection508())
		$xt->assign_section("closesched_time_label","<label for=\"".GetInputElementId("closesched_time", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("sellprice"))
		$xt->assign("sellprice_fieldblock",true);
	else
		$xt->assign("sellprice_tabfieldblock",true);
	$xt->assign("sellprice_label",true);
	if(isEnableSection508())
		$xt->assign_section("sellprice_label","<label for=\"".GetInputElementId("sellprice", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("deposit"))
		$xt->assign("deposit_fieldblock",true);
	else
		$xt->assign("deposit_tabfieldblock",true);
	$xt->assign("deposit_label",true);
	if(isEnableSection508())
		$xt->assign_section("deposit_label","<label for=\"".GetInputElementId("deposit", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("loanamt"))
		$xt->assign("loanamt_fieldblock",true);
	else
		$xt->assign("loanamt_tabfieldblock",true);
	$xt->assign("loanamt_label",true);
	if(isEnableSection508())
		$xt->assign_section("loanamt_label","<label for=\"".GetInputElementId("loanamt", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("refi_purch"))
		$xt->assign("refi_purch_fieldblock",true);
	else
		$xt->assign("refi_purch_tabfieldblock",true);
	$xt->assign("refi_purch_label",true);
	if(isEnableSection508())
		$xt->assign_section("refi_purch_label","<label for=\"".GetInputElementId("refi_purch", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("res_comm"))
		$xt->assign("res_comm_fieldblock",true);
	else
		$xt->assign("res_comm_tabfieldblock",true);
	$xt->assign("res_comm_label",true);
	if(isEnableSection508())
		$xt->assign_section("res_comm_label","<label for=\"".GetInputElementId("res_comm", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("file_status"))
		$xt->assign("file_status_fieldblock",true);
	else
		$xt->assign("file_status_tabfieldblock",true);
	$xt->assign("file_status_label",true);
	if(isEnableSection508())
		$xt->assign_section("file_status_label","<label for=\"".GetInputElementId("file_status", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("file_archlocation"))
		$xt->assign("file_archlocation_fieldblock",true);
	else
		$xt->assign("file_archlocation_tabfieldblock",true);
	$xt->assign("file_archlocation_label",true);
	if(isEnableSection508())
		$xt->assign_section("file_archlocation_label","<label for=\"".GetInputElementId("file_archlocation", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("client1"))
		$xt->assign("client1_fieldblock",true);
	else
		$xt->assign("client1_tabfieldblock",true);
	$xt->assign("client1_label",true);
	if(isEnableSection508())
		$xt->assign_section("client1_label","<label for=\"".GetInputElementId("client1", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("client2"))
		$xt->assign("client2_fieldblock",true);
	else
		$xt->assign("client2_tabfieldblock",true);
	$xt->assign("client2_label",true);
	if(isEnableSection508())
		$xt->assign_section("client2_label","<label for=\"".GetInputElementId("client2", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("claddr1"))
		$xt->assign("claddr1_fieldblock",true);
	else
		$xt->assign("claddr1_tabfieldblock",true);
	$xt->assign("claddr1_label",true);
	if(isEnableSection508())
		$xt->assign_section("claddr1_label","<label for=\"".GetInputElementId("claddr1", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("claddr2"))
		$xt->assign("claddr2_fieldblock",true);
	else
		$xt->assign("claddr2_tabfieldblock",true);
	$xt->assign("claddr2_label",true);
	if(isEnableSection508())
		$xt->assign_section("claddr2_label","<label for=\"".GetInputElementId("claddr2", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("clphone1"))
		$xt->assign("clphone1_fieldblock",true);
	else
		$xt->assign("clphone1_tabfieldblock",true);
	$xt->assign("clphone1_label",true);
	if(isEnableSection508())
		$xt->assign_section("clphone1_label","<label for=\"".GetInputElementId("clphone1", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("clphone2"))
		$xt->assign("clphone2_fieldblock",true);
	else
		$xt->assign("clphone2_tabfieldblock",true);
	$xt->assign("clphone2_label",true);
	if(isEnableSection508())
		$xt->assign_section("clphone2_label","<label for=\"".GetInputElementId("clphone2", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("tenant"))
		$xt->assign("tenant_fieldblock",true);
	else
		$xt->assign("tenant_tabfieldblock",true);
	$xt->assign("tenant_label",true);
	if(isEnableSection508())
		$xt->assign_section("tenant_label","<label for=\"".GetInputElementId("tenant", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("matter"))
		$xt->assign("matter_fieldblock",true);
	else
		$xt->assign("matter_tabfieldblock",true);
	$xt->assign("matter_label",true);
	if(isEnableSection508())
		$xt->assign_section("matter_label","<label for=\"".GetInputElementId("matter", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("staffatty"))
		$xt->assign("staffatty_fieldblock",true);
	else
		$xt->assign("staffatty_tabfieldblock",true);
	$xt->assign("staffatty_label",true);
	if(isEnableSection508())
		$xt->assign_section("staffatty_label","<label for=\"".GetInputElementId("staffatty", $id)."\">","</label>");
	
	
	
	if($inlineadd!=ADD_ONTHEFLY && $inlineadd!=ADD_POPUP)
	{
		$pageObject->body["begin"] .= $includes;
				$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
		$xt->assign("back_button",true);
	}
	else
	{		
		$xt->assign("cancelbutton_attrs", "id=\"cancelButton".$id."\"");
		$xt->assign("cancel_button",true);
		$xt->assign("header","");
	}
	$xt->assign("save_button",true);
}
$xt->assign("savebutton_attrs","id=\"saveButton".$id."\"");
$xt->assign("message_block",true);
$xt->assign("message",$message);
if(!strlen($message))
{
	$xt->displayBrickHidden("message");
}

$readonlyfields=array();

//	show readonly fields
	$readonlyfields["ttlnumb"] = htmlspecialchars(GetData($defvalues,"ttlnumb", ""));
$linkdata="";

if(@$_POST["a"]=="added" && $inlineadd==ADD_ONTHEFLY)
{
	if( !$error_happened && $status!="DECLINED")
	{
		$LookupSQL = "";
		$linkfield = "";
		$dispfield = "";
		if($LookupSQL)
			$LookupSQL.=" from ".AddTableWrappers($strOriginalTableName);

		$data=0;
		if(count($keys) && $LookupSQL)
		{
			$where=KeyWhere($keys);
			$LookupSQL.=" where ".$where;
			$rs=db_query($LookupSQL,$conn);
			$data=db_fetch_numarray($rs);
		}
		if($data)
		{
			$respData = array($linkfield=>@$data[0], $dispfield=>@$data[1]);
		}
		else
		{
			$respData = array($linkfield=>@$avalues[$linkfield], $dispfield=>@$avalues[$dispfield]);
		}		
		$returnJSON['success'] = true;
		$returnJSON['keys'] = $keys;
		$returnJSON['vals'] = $respData;
		$returnJSON['fields'] = $showFields;
	}
	else
	{
		$returnJSON['success'] = false;
		$returnJSON['message'] = $message;
	}
	echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
	exit();
}

if(@$_POST["a"]=="added" && ($inlineadd == ADD_INLINE || $inlineadd == ADD_MASTER || $inlineadd==ADD_POPUP)) 
{
	//Preparation   view values
	//	get current values and show edit controls
	$dispFieldAlias = "";
	$data=0;
	if(count($keys))
	{
		$where=KeyWhere($keys);
			
		$sqlHead = $gQuery->HeadToSql();
		$sqlGroupBy = $gQuery->GroupByToSql();
		$oHaving = $gQuery->Having();
		$sqlHaving = $oHaving->toSql($gQuery);
		
		$dispFieldAlias = postvalue('dispFieldAlias');
		$dispField = postvalue('dispField');
		
		if ($dispFieldAlias)
		{
			$sqlHead.=", ".($dispField)." as ".AddFieldWrappers($dispFieldAlias)." ";
		}
		$strSQL = gSQLWhere_having($sqlHead, $gsqlFrom, $gsqlWhereExpr, $sqlGroupBy, $sqlHaving, $where, '');		
		
		LogInfo($strSQL);
		$rs=db_query($strSQL,$conn);
		$data=db_fetch_array($rs);
	}
	if(!$data)
	{
		$data=$avalues;
		$HaveData=false;
	}
	//check if correct values added
	$showDetailKeys["brokers"]["masterkey1"] = $data["idttl_actions"];	
	$showDetailKeys["buyers"]["masterkey1"] = $data["idttl_actions"];	
	$showDetailKeys["sellers"]["masterkey1"] = $data["idttl_actions"];	
	$showDetailKeys["ttl_recordings"]["masterkey1"] = $data["idttl_actions"];	
	$showDetailKeys["ttlaction_notes"]["masterkey1"] = $data["idttl_actions"];	

	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["idttl_actions"]));
	$keylink.="&key2=".htmlspecialchars(rawurlencode(@$data["properties_idproperties"]));
	
////////////////////////////////////////////
//	ttlnumb - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"ttlnumb", ""),"field=ttlnumb".$keylink,"",MODE_LIST);
	$showValues["ttlnumb"] = $value;
	$showFields[] = "ttlnumb";
		$showRawValues["ttlnumb"] = substr($data["ttlnumb"],0,100);
	}	
//	whencreated - Short Date
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"whencreated", "Short Date"),"field=whencreated".$keylink,"",MODE_LIST);
	$showValues["whencreated"] = $value;
	$showFields[] = "whencreated";
		$showRawValues["whencreated"] = substr($data["whencreated"],0,100);
	}	
//	examiner - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"examiner", ""),"field=examiner".$keylink,"",MODE_LIST);
	$showValues["examiner"] = $value;
	$showFields[] = "examiner";
		$showRawValues["examiner"] = substr($data["examiner"],0,100);
	}	
//	filecabinet - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"filecabinet", ""),"field=filecabinet".$keylink,"",MODE_LIST);
	$showValues["filecabinet"] = $value;
	$showFields[] = "filecabinet";
		$showRawValues["filecabinet"] = substr($data["filecabinet"],0,100);
	}	
//	properties_idproperties - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value="";
				$value = DisplayLookupWizard("properties_idproperties",$data["properties_idproperties"],$data,$keylink,MODE_LIST);
	$showValues["properties_idproperties"] = $value;
	$showFields[] = "properties_idproperties";
		$showRawValues["properties_idproperties"] = substr($data["properties_idproperties"],0,100);
	}	
//	titleconame - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"titleconame", ""),"field=titleconame".$keylink,"",MODE_LIST);
	$showValues["titleconame"] = $value;
	$showFields[] = "titleconame";
		$showRawValues["titleconame"] = substr($data["titleconame"],0,100);
	}	
//	titlepolicy - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"titlepolicy", ""),"field=titlepolicy".$keylink,"",MODE_LIST);
	$showValues["titlepolicy"] = $value;
	$showFields[] = "titlepolicy";
		$showRawValues["titlepolicy"] = substr($data["titlepolicy"],0,100);
	}	
//	titlephone - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"titlephone", ""),"field=titlephone".$keylink,"",MODE_LIST);
	$showValues["titlephone"] = $value;
	$showFields[] = "titlephone";
		$showRawValues["titlephone"] = substr($data["titlephone"],0,100);
	}	
//	titleremit - Currency
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"titleremit", "Currency"),"field=titleremit".$keylink,"",MODE_LIST);
	$showValues["titleremit"] = $value;
	$showFields[] = "titleremit";
		$showRawValues["titleremit"] = substr($data["titleremit"],0,100);
	}	
//	titleatty - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"titleatty", ""),"field=titleatty".$keylink,"",MODE_LIST);
	$showValues["titleatty"] = $value;
	$showFields[] = "titleatty";
		$showRawValues["titleatty"] = substr($data["titleatty"],0,100);
	}	
//	titlerefatty - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"titlerefatty", ""),"field=titlerefatty".$keylink,"",MODE_LIST);
	$showValues["titlerefatty"] = $value;
	$showFields[] = "titlerefatty";
		$showRawValues["titlerefatty"] = substr($data["titlerefatty"],0,100);
	}	
//	titlerecv - Short Date
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"titlerecv", "Short Date"),"field=titlerecv".$keylink,"",MODE_LIST);
	$showValues["titlerecv"] = $value;
	$showFields[] = "titlerecv";
		$showRawValues["titlerecv"] = substr($data["titlerecv"],0,100);
	}	
//	closesched_date - Short Date
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"closesched_date", "Short Date"),"field=closesched%5Fdate".$keylink,"",MODE_LIST);
	$showValues["closesched_date"] = $value;
	$showFields[] = "closesched_date";
		$showRawValues["closesched_date"] = substr($data["closesched_date"],0,100);
	}	
//	closesched_time - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"closesched_time", ""),"field=closesched%5Ftime".$keylink,"",MODE_LIST);
	$showValues["closesched_time"] = $value;
	$showFields[] = "closesched_time";
		$showRawValues["closesched_time"] = substr($data["closesched_time"],0,100);
	}	
//	sellprice - Currency
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"sellprice", "Currency"),"field=sellprice".$keylink,"",MODE_LIST);
	$showValues["sellprice"] = $value;
	$showFields[] = "sellprice";
		$showRawValues["sellprice"] = substr($data["sellprice"],0,100);
	}	
//	deposit - Currency
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"deposit", "Currency"),"field=deposit".$keylink,"",MODE_LIST);
	$showValues["deposit"] = $value;
	$showFields[] = "deposit";
		$showRawValues["deposit"] = substr($data["deposit"],0,100);
	}	
//	loanamt - Currency
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"loanamt", "Currency"),"field=loanamt".$keylink,"",MODE_LIST);
	$showValues["loanamt"] = $value;
	$showFields[] = "loanamt";
		$showRawValues["loanamt"] = substr($data["loanamt"],0,100);
	}	
//	refi_purch - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"refi_purch", ""),"field=refi%5Fpurch".$keylink,"",MODE_LIST);
	$showValues["refi_purch"] = $value;
	$showFields[] = "refi_purch";
		$showRawValues["refi_purch"] = substr($data["refi_purch"],0,100);
	}	
//	res_comm - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"res_comm", ""),"field=res%5Fcomm".$keylink,"",MODE_LIST);
	$showValues["res_comm"] = $value;
	$showFields[] = "res_comm";
		$showRawValues["res_comm"] = substr($data["res_comm"],0,100);
	}	
//	file_status - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"file_status", ""),"field=file%5Fstatus".$keylink,"",MODE_LIST);
	$showValues["file_status"] = $value;
	$showFields[] = "file_status";
		$showRawValues["file_status"] = substr($data["file_status"],0,100);
	}	
//	file_archlocation - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"file_archlocation", ""),"field=file%5Farchlocation".$keylink,"",MODE_LIST);
	$showValues["file_archlocation"] = $value;
	$showFields[] = "file_archlocation";
		$showRawValues["file_archlocation"] = substr($data["file_archlocation"],0,100);
	}	
//	propaddr1 - 
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"propaddr1", ""),"field=propaddr1".$keylink,"",MODE_LIST);
	$showValues["propaddr1"] = $value;
	$showFields[] = "propaddr1";
		$showRawValues["propaddr1"] = substr($data["propaddr1"],0,100);
	}	
//	propcity - 
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"propcity", ""),"field=propcity".$keylink,"",MODE_LIST);
	$showValues["propcity"] = $value;
	$showFields[] = "propcity";
		$showRawValues["propcity"] = substr($data["propcity"],0,100);
	}	
//	propstate - 
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"propstate", ""),"field=propstate".$keylink,"",MODE_LIST);
	$showValues["propstate"] = $value;
	$showFields[] = "propstate";
		$showRawValues["propstate"] = substr($data["propstate"],0,100);
	}	
//	client1 - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"client1", ""),"field=client1".$keylink,"",MODE_LIST);
	$showValues["client1"] = $value;
	$showFields[] = "client1";
		$showRawValues["client1"] = substr($data["client1"],0,100);
	}	
//	client2 - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"client2", ""),"field=client2".$keylink,"",MODE_LIST);
	$showValues["client2"] = $value;
	$showFields[] = "client2";
		$showRawValues["client2"] = substr($data["client2"],0,100);
	}	
//	claddr1 - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"claddr1", ""),"field=claddr1".$keylink,"",MODE_LIST);
	$showValues["claddr1"] = $value;
	$showFields[] = "claddr1";
		$showRawValues["claddr1"] = substr($data["claddr1"],0,100);
	}	
//	claddr2 - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"claddr2", ""),"field=claddr2".$keylink,"",MODE_LIST);
	$showValues["claddr2"] = $value;
	$showFields[] = "claddr2";
		$showRawValues["claddr2"] = substr($data["claddr2"],0,100);
	}	
//	clphone1 - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"clphone1", ""),"field=clphone1".$keylink,"",MODE_LIST);
	$showValues["clphone1"] = $value;
	$showFields[] = "clphone1";
		$showRawValues["clphone1"] = substr($data["clphone1"],0,100);
	}	
//	clphone2 - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"clphone2", ""),"field=clphone2".$keylink,"",MODE_LIST);
	$showValues["clphone2"] = $value;
	$showFields[] = "clphone2";
		$showRawValues["clphone2"] = substr($data["clphone2"],0,100);
	}	
//	tenant - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"tenant", ""),"field=tenant".$keylink,"",MODE_LIST);
	$showValues["tenant"] = $value;
	$showFields[] = "tenant";
		$showRawValues["tenant"] = substr($data["tenant"],0,100);
	}	
//	matter - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"matter", ""),"field=matter".$keylink,"",MODE_LIST);
	$showValues["matter"] = $value;
	$showFields[] = "matter";
		$showRawValues["matter"] = substr($data["matter"],0,100);
	}	
//	staffatty - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"staffatty", ""),"field=staffatty".$keylink,"",MODE_LIST);
	$showValues["staffatty"] = $value;
	$showFields[] = "staffatty";
		$showRawValues["staffatty"] = substr($data["staffatty"],0,100);
	}	
	
	// for custom expression for display field
	if ($dispFieldAlias)
	{
		$showValues[] = $data[$dispFieldAlias];	
		$showFields[] = $dispFieldAlias;
		$showRawValues[] = substr($data[$dispFieldAlias],0,100);
	}		
	
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_POPUP)
	{	
		if($IsSaved && count($showValues))
		{		
			$returnJSON['success'] = true;	
			if($HaveData){
				$returnJSON['noKeys'] = false;
			}else{
				$returnJSON['noKeys'] = true;
			}
				
			$returnJSON['keys'] = $keys;
			$returnJSON['vals'] = $showValues;
			$returnJSON['fields'] = $showFields;
			$returnJSON['rawVals'] = $showRawValues;
			$returnJSON['detKeys'] = $showDetailKeys;
			$returnJSON['userMess'] = $usermessage;
		}
		else
		{
			$returnJSON['success'] = false;
			$returnJSON['message'] = $message;
		}
		echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
		exit();
	}	
} 

/////////////////////////////////////////////////////////////
if($inlineadd==ADD_MASTER)
{		
	$respJSON = array();
	if(($_POST["a"]=="added" && $IsSaved))
	{
		$respJSON['afterAddId'] = $afterAdd_id;
		$respJSON['success'] = true;
		$respJSON['fields'] = $showFields;
		$respJSON['vals'] = $showValues;
		if($onFly){
			if($HaveData)
				$returnJSON['noKeys'] = false;
			else
				$returnJSON['noKeys'] = true;
			$respJSON['keys'] = $keys;
			$respJSON['rawVals'] = $showRawValues;
			$respJSON['detKeys'] = $showDetailKeys;
			$respJSON['userMess'] = $usermessage;
		}
		$respJSON['mKeys'] = array();	
		for($i=0;$i<count($dpParams['ids']);$i++)
		{
			$data=0;
			if(count($keys))
			{
				$where=KeyWhere($keys);
							$strSQL = gSQLWhere($where);
				LogInfo($strSQL);
				$rs=db_query($strSQL,$conn);
				$data=db_fetch_array($rs);
			}
			if(!$data)
				$data=$avalues;
			
			$mKeyId = 1;
			foreach($mKeys[$dpParams['strTableNames'][$i]] as $mk)	
			{
				if($data[$mk])
					$respJSON['mKeys'][$dpParams['strTableNames'][$i]]['masterkey'.$mKeyId++] = $data[$mk];
				else
					$respJSON['mKeys'][$dpParams['strTableNames'][$i]]['masterkey'.$mKeyId++] = '';
			}		
		}
		if((isset($_SESSION[$strTableName."_count_captcha"])) or ($_SESSION[$strTableName."_count_captcha"]>0) or ($_SESSION[$strTableName."_count_captcha"]<5))
			$respJSON['hideCaptha'] = true;
	}
	else{
			$respJSON['success'] = false;
			if(!$pageObject->isCaptchaOk)
				$respJSON['captha'] = false;
			else		
				$respJSON['error'] = $message;
			if($onFly)
				$respJSON['message'] = $message;				
		}
	echo "<textarea>".htmlspecialchars(my_json_encode($respJSON))."</textarea>";	
	exit();
}

/////////////////////////////////////////////////////////////
//	prepare Edit Controls
/////////////////////////////////////////////////////////////

//	validation stuff
$regex='';
$regexmessage='';
$regextype = '';
$control = array();

foreach($addFields as $fName)
{
	$gfName = GoodFieldName($fName);
	$controls = array('controls'=>array());
	if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))
	{		
		$control[$gfName] = array();
		$control[$gfName]["func"]="xt_buildeditcontrol";
		$control[$gfName]["params"] = array();
		$control[$gfName]["params"]["id"]= $id;
		$control[$gfName]["params"]["field"]=$fName;
		$control[$gfName]["params"]["value"]=@$defvalues[$fName];
		if(UseRTE($fName))
			$_SESSION[$strTableName."_".$fName."_rte"]=@$defvalues[$fName];
		
		//	Begin Add validation
		$arrValidate = getValidation($fName,$strTableName);	
		$control[$gfName]["params"]["validate"] = $arrValidate;
		//	End Add validation	
	}
	$controls["controls"]['ctrlInd'] = 0;
	$controls["controls"]['id'] = $id;
	$controls["controls"]['fieldName'] = $fName;
	
	if(UseRTEFCK($fName) || UseRTEInnova($fName) || UseRTEBasic($fName))
	{
		if(!$detailKeys || !in_array($fName, $detailKeys))	
			$control[$gfName]["params"]["mode"]="add";
		$controls["controls"]['mode'] = "add";
	}
	else
	{
		if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		{
			if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))	
				$control[$gfName]["params"]["mode"]="inline_add";
			$controls["controls"]['mode'] = "inline_add";
		}
		else
		{
			if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))	
				$control[$gfName]["params"]["mode"]="add";
			$controls["controls"]['mode'] = "add";
		}
	}
			
	if(!$detailKeys || !in_array($fName, $detailKeys))
		$xt->assignbyref($gfName."_editcontrol",$control[$gfName]);
	elseif($detailKeys && in_array($fName, $detailKeys))
		$controls["controls"]['value'] = @$defvalues[$fName];
		
	// category control field
	$strCategoryControl = $pageObject->hasDependField($fName);
	
	if($strCategoryControl!==false && in_array($strCategoryControl, $addFields))
		$vals = array($fName => @$defvalues[$fName],$strCategoryControl => @$defvalues[$strCategoryControl]);
	else
		$vals = array($fName => @$defvalues[$fName]);
	
	$preload = $pageObject->fillPreload($fName, $vals);
	if($preload!==false)
		$controls["controls"]['preloadData'] = $preload;
	
	$pageObject->fillControlsMap($controls);
	
	//fill field tool tips
	$pageObject->fillFieldToolTips($fName);
	
	// fill special settings for timepicker 	
	if(GetEditFormat($fName) == 'Time')	
		$pageObject->fillTimePickSettings($fName, @$defvalues[$fName]);
	
	if((($detailKeys && in_array($fName, $detailKeys)) || $fName == postvalue("category")) && array_key_exists($fName, $defvalues))
	{
		if((GetEditFormat($fName)==EDIT_FORMAT_LOOKUP_WIZARD || GetEditFormat($fName)==EDIT_FORMAT_RADIO) && GetpLookupType($fName) == LT_LOOKUPTABLE)
			$value=DisplayLookupWizard($fName,$defvalues[$fName],$defvalues,"",MODE_VIEW);
		elseif(NeedEncode($fName))
			$value = ProcessLargeText(GetData($defvalues,$fName, ViewFormat($fName)),"field=".rawurlencode(htmlspecialchars($fName)),"",MODE_VIEW);
		else
			$value = GetData($defvalues,$fName, ViewFormat($fName));
		
		$xt->assign($gfName."_editcontrol", $value);
	}
}
//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && ($inlineadd==ADD_SIMPLE || $inlineadd==ADD_POPUP) && !isMobile())
{
	if(count($dpParams['ids']))
	{
		$xt->assign("detail_tables",true);
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
		include("classes/searchclause.php");
	}
	
	$dControlsMap = array();
		
	$flyId = $ids+1;
	for($d=0;$d<count($dpParams['ids']);$d++)
	{
		$options = array();
		//array of params for classes
		$options["mode"] = LIST_DETAILS;
		$options["pageType"] = PAGE_LIST;
		$options["masterPageType"] = PAGE_ADD;
		$options["mainMasterPageType"] = PAGE_ADD;
		$options['masterTable'] = "ttl_actions";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		include("include/".GetTableURL($strTableName)."_settings.php");
		
		$layout = GetPageLayout(GoodFieldName($strTableName), PAGE_LIST);
		if($layout)
		{
			$rtl = $xt->getReadingOrder() == 'RTL' ? 'RTL' : '';
			$xt->cssFiles[] = array("stylepath" => "styles/".$layout->style.'/style'.$rtl
				, "pagestylepath" => "pagestyles/".$layout->name.$rtl);
			$xt->IEcssFiles[] = array("stylepathIE" => "styles/".$layout->style.'/styleIE');
		}	
			
		$options['xt'] = new Xtempl();
		$options['id'] = $dpParams['ids'][$d];
		$options['flyId'] = $flyId++;
		$mkr = 1;
		
		foreach($mKeys[$strTableName] as $mk)
		{
			if($defvalues[$mk])
				$options['masterKeysReq'][$mkr++] = $defvalues[$mk];
			else
				$options['masterKeysReq'][$mkr++] = '';
		}
		$listPageObject = ListPage::createListPage($strTableName,$options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		$flyId = $listPageObject->recId+1;
		
		//set page events
		foreach($listPageObject->eventsObject->events as $event => $name)
			$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
		
		//add detail settings to master settings
		$listPageObject->fillSetCntrlMaps();
		$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];

		$dControlsMap[$strTableName] = $listPageObject->controlsMap;
		
		foreach($listPageObject->jsSettings["global"]["shortTNames"] as $tName => $shortTName){
			$pageObject->settingsMap["globalSettings"]["shortTNames"][$tName] = $shortTName;
		}
		
		//Add detail's js files to master's files
		$pageObject->copyAllJSFiles($listPageObject->grabAllJSFiles());
		
		//Add detail's css files to master's files
		$pageObject->copyAllCSSFiles($listPageObject->grabAllCSSFiles());
		
		$xtParams = array("method"=>'showPage', "params"=> false);
		$xtParams['object'] = $listPageObject;
		$xt->assign("displayDetailTable_".GoodFieldName($listPageObject->tName), $xtParams);
		$pageObject->controlsMap['dpTablesParams'][] = array('tName'=>$strTableName, 'id'=>$options['id']);
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$strTableName = "ttl_actions";
}
/////////////////////////////////////////////////////////////
//fill jsSettings and ControlsHTMLMap
$pageObject->fillSetCntrlMaps();

$pageObject->addCommonJs();

//For mobile version in apple device

if($inlineadd == ADD_SIMPLE)
{
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";		
	$pageObject->body['end']["object"] = &$pageObject;
	$xt->assign("body", $pageObject->body);
	$xt->assign("flybody",true);
}
else{
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;	
}


if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
{ 
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("flybody", $pageObject->body);
	$xt->assign("body",true);
}	

$xt->assign("style_block",true);
$pageObject->xt->assign("legendBreak", '<br/>');

if($eventObj->exists("BeforeShowAdd"))
	$eventObj->BeforeShowAdd($xt, $templatefile);

if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
{
	$xt->load_template($templatefile);
	$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
	if(count($pageObject->includes_css))
		$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
	if(count($pageObject->includes_cssIE))
		$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);
	$returnJSON['idStartFrom'] = $id+1;	
	echo (my_json_encode($returnJSON)); 
}
elseif ($inlineadd == ADD_INLINE)
{
	$xt->load_template($templatefile);
	$returnJSON["html"] = array();
	foreach($addFields as $fName)
	{
		$returnJSON["html"][$fName] = $xt->fetchVar(GoodFieldName($fName)."_editcontrol");	
	}	
	echo (my_json_encode($returnJSON)); 
}
else
	$xt->display($templatefile);

?>
