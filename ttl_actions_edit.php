<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


include("include/dbcommon.php");
include("include/ttl_actions_variables.php");
include('include/xtempl.php');
include('classes/editpage.php');
include("classes/searchclause.php");

add_nocache_headers();

/////////////////////////////////////////////////////////////
//	check if logged in
/////////////////////////////////////////////////////////////
if(!@$_SESSION["UserID"] || !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Edit"))
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}

$layout = new TLayout("edit2","Extravaganza1Orange","MobileOrange");
$layout->blocks["top"] = array();
$layout->containers["edit"] = array();

$layout->containers["edit"][] = array("name"=>"editheader","block"=>"","substyle"=>2);


$layout->containers["edit"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->containers["edit"][] = array("name"=>"wrapper","block"=>"","substyle"=>1);


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"editfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"legend","block"=>"legend","substyle"=>3);


$layout->containers["fields"][] = array("name"=>"editbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["edit"] = "1";
$layout->blocks["top"][] = "edit";
$layout->containers["details"] = array();

$layout->containers["details"][] = array("name"=>"editdetails","block"=>"detail_tables","substyle"=>1);


$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["ttl_actions_edit"] = $layout;


$layout = new TLayout("tab","Extravaganza1Orange","MobileOrange");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["ttl_actions_edit_Client_and_Tenant1"] = $layout;

$layout = new TLayout("tab","Extravaganza1Orange","MobileOrange");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["ttl_actions_edit_Title1"] = $layout;

$layout = new TLayout("tab","Extravaganza1Orange","MobileOrange");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["ttl_actions_edit_Financial1"] = $layout;


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



if ((sizeof($_POST)==0) && (postvalue('ferror')) && (!postvalue("editid1"))){
	$returnJSON['success'] = false;
	$returnJSON['message'] = "Error occurred";
	$returnJSON['fatalError'] = true;
	echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
	exit();
}
else if ((sizeof($_POST)==0) && (postvalue('ferror')) && (postvalue("editid1"))){
	if (postvalue('fly')){
		echo -1;
		exit();
	}
	else {
		$_SESSION["message_edit"] = "<< "."Error occurred"." >>";
	}
}
/////////////////////////////////////////////////////////////
//init variables
/////////////////////////////////////////////////////////////
if(postvalue("editType")=="inline")
	$inlineedit = EDIT_INLINE;
elseif(postvalue("editType")==EDIT_POPUP)
	$inlineedit = EDIT_POPUP;
else
	$inlineedit = EDIT_SIMPLE;

$id = postvalue("id");
if(intval($id)==0)
	$id = 1;

$flyId = $id+1;
$xt = new Xtempl();

// assign an id
$xt->assign("id",$id);

$templatefile = "ttl_actions_edit.htm";

//array of params for classes
$params = array("pageType" => PAGE_EDIT,"id" => $id);

////////////////////// data picker
$params["calendar"] = true;

////////////////////// time picker


$params['tName'] = $strTableName;
$params['xt'] = &$xt;
$params['mode'] = $inlineedit;
$params['includes_js'] = $includes_js;
$params['includes_jsreq'] = $includes_jsreq;
$params['includes_css'] = $includes_css;
$params['locale_info'] = $locale_info;
$params['templatefile'] = $templatefile;
$params['pageEditLikeInline'] = ($inlineedit == EDIT_INLINE);
//Get array of tabs for edit page
$params['useTabsOnEdit'] = useTabsOnEdit($strTableName);
if($params['useTabsOnEdit'])
	$params['arrEditTabs'] = GetEditTabs($strTableName);

$pageObject = new EditPage($params);

//	For ajax request 
if($_REQUEST["action"]!="")
{
	if($pageObject->lockingObj)
	{
		$arrkeys = explode("&",refine($_REQUEST["keys"]));
		foreach($arrkeys as $ind=>$val)
			$arrkeys[$ind]=urldecode($val);
		
		if($_REQUEST["action"]=="unlock")
		{
			$pageObject->lockingObj->UnlockRecord($strTableName,$arrkeys,$_REQUEST["sid"]);
			exit();	
		}
		else if($_REQUEST["action"]=="lockadmin" && (IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP))
		{
			$pageObject->lockingObj->UnlockAdmin($strTableName,$arrkeys,$_REQUEST["startEdit"]=="yes");
			if($_REQUEST["startEdit"]=="no")
				echo "unlock";
			else if($_REQUEST["startEdit"]=="yes")
				echo "lock";
			exit();	
		}
		else if($_REQUEST["action"]=="confirm")
		{
			if(!$pageObject->lockingObj->ConfirmLock($strTableName,$arrkeys,$message));
				echo $message;
			exit();	
		}
	}
	else
		exit();
}

$filename = $status = $message = $mesClass = $usermessage = $strWhereClause = $bodyonload = "";
$showValues = $showRawValues = $showFields = $showDetailKeys = $key = $next = $prev = array();
$HaveData = $enableCtrlsForEditing = true;
$error_happened = $readevalues = $IsSaved = false;

$auditObj = GetAuditObject($strTableName);

// SearchClause class stuff
$pageObject->searchClauseObj->parseRequest();
$_SESSION[$strTableName.'_advsearch'] = serialize($pageObject->searchClauseObj);

//Get detail table keys	
$detailKeys = $pageObject->detailKeysByM;

//Array of fields, which appear on edit page
$editFields = $pageObject->getFieldsByPageType();

if($pageObject->lockingObj)
{
	$system_attrs = "style='display:none;'";
	$system_message = "";
}

if ($inlineedit!=EDIT_INLINE)
{
	// add button events if exist
	$pageObject->addButtonHandlers();
}

$url_page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1,12);

//	Before Process event
if($eventObj->exists("BeforeProcessEdit"))
	$eventObj->BeforeProcessEdit($conn);

$keys = array();
$skeys = "";
$savedKeys = array();
$keys["idttl_actions"]=urldecode(postvalue("editid1"));
$savedKeys["idttl_actions"]=urldecode(postvalue("editid1"));
$skeys.=rawurlencode(postvalue("editid1"))."&";
$keys["properties_idproperties"]=urldecode(postvalue("editid2"));
$savedKeys["properties_idproperties"]=urldecode(postvalue("editid2"));
$skeys.=rawurlencode(postvalue("editid2"))."&";

if($skeys!="")
	$skeys = substr($skeys,0,-1);

//For show detail tables on master page edit
if($inlineedit!=EDIT_INLINE)	
{
	$dpParams = array();
	if($pageObject->isShowDetailTables && !isMobile())
	{
		$ids = $id;
			$dpPermis = $pageObject->getPermissions("brokers");
		if($dpPermis['search'] || $dpPermis['edit']){
			$mKeys["brokers"] = GetMasterKeysByDetailTable("brokers", $strTableName);
			$dpParams['strTableNames'][] = "brokers";
			$dpParams['ids'][] = ++$ids;
		}
			$dpPermis = $pageObject->getPermissions("buyers");
		if($dpPermis['search'] || $dpPermis['edit']){
			$mKeys["buyers"] = GetMasterKeysByDetailTable("buyers", $strTableName);
			$dpParams['strTableNames'][] = "buyers";
			$dpParams['ids'][] = ++$ids;
		}
			$dpPermis = $pageObject->getPermissions("sellers");
		if($dpPermis['search'] || $dpPermis['edit']){
			$mKeys["sellers"] = GetMasterKeysByDetailTable("sellers", $strTableName);
			$dpParams['strTableNames'][] = "sellers";
			$dpParams['ids'][] = ++$ids;
		}
			$dpPermis = $pageObject->getPermissions("ttl_recordings");
		if($dpPermis['search'] || $dpPermis['edit']){
			$mKeys["ttl_recordings"] = GetMasterKeysByDetailTable("ttl_recordings", $strTableName);
			$dpParams['strTableNames'][] = "ttl_recordings";
			$dpParams['ids'][] = ++$ids;
		}
			$dpPermis = $pageObject->getPermissions("ttlaction_notes");
		if($dpPermis['search'] || $dpPermis['edit']){
			$mKeys["ttlaction_notes"] = GetMasterKeysByDetailTable("ttlaction_notes", $strTableName);
			$dpParams['strTableNames'][] = "ttlaction_notes";
			$dpParams['ids'][] = ++$ids;
		}
		$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array('tableNames'=>$dpParams['strTableNames'], 'ids'=>$dpParams['ids']);
	}	
}	
/////////////////////////////////////////////////////////////
//	process entered data, read and save
/////////////////////////////////////////////////////////////

// proccess captcha
if ($inlineedit!=EDIT_INLINE)
	if($pageObject->captchaExists())
		$pageObject->doCaptchaCode();

if(@$_POST["a"] == "edited")
{
	$strWhereClause = whereAdd($strWhereClause,KeyWhere($keys));
		$oldValuesRead = false;
	if($eventObj->exists("AfterEdit") || $eventObj->exists("BeforeEdit") || $auditObj)
	{
		//	read old values
		$rsold = db_query(gSQLWhere($strWhereClause), $conn);
		$dataold = db_fetch_array($rsold);
		$oldValuesRead = true;
	}
	$evalues = $efilename_values = $blobfields = array();
	

//	processing ttlnumb - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$value = postvalue("value_ttlnumb_".$id);
		$type = postvalue("type_ttlnumb_".$id);
		if(FieldSubmitted("ttlnumb_".$id))
		{
				$value = prepare_for_db("ttlnumb",$value,$type);
		}
		else
			$value = false;
	
			if(GetFieldData($strTableName, "ttlnumb", "ownerTable", "") != $strOriginalTableName)
		$value = false;
	
		if($value!==false)
		{	
	
	
	
	
	
			if(0 && "ttlnumb"=="password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["ttlnumb"] = $value;
		
			}
	
			}
//	processing ttlnumb - end
//	processing whencreated - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$value = postvalue("value_whencreated_".$id);
		$type = postvalue("type_whencreated_".$id);
		if(FieldSubmitted("whencreated_".$id))
		{
				$value = prepare_for_db("whencreated",$value,$type);
		}
		else
			$value = false;
	
		
		if($value!==false)
		{	
	
	
	
	
	
			if(0 && "whencreated"=="password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["whencreated"] = $value;
		
			}
	
			}
//	processing whencreated - end
//	processing examiner - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$value = postvalue("value_examiner_".$id);
		$type = postvalue("type_examiner_".$id);
		if(FieldSubmitted("examiner_".$id))
		{
				$value = prepare_for_db("examiner",$value,$type);
		}
		else
			$value = false;
	
		
		if($value!==false)
		{	
	
	
	
	
	
			if(0 && "examiner"=="password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["examiner"] = $value;
		
			}
	
			}
//	processing examiner - end
//	processing filecabinet - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$value = postvalue("value_filecabinet_".$id);
		$type = postvalue("type_filecabinet_".$id);
		if(FieldSubmitted("filecabinet_".$id))
		{
				$value = prepare_for_db("filecabinet",$value,$type);
		}
		else
			$value = false;
	
		
		if($value!==false)
		{	
	
	
	
	
	
			if(0 && "filecabinet"=="password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["filecabinet"] = $value;
		
			}
	
			}
//	processing filecabinet - end
//	processing titleconame - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$value = postvalue("value_titleconame_".$id);
		$type = postvalue("type_titleconame_".$id);
		if(FieldSubmitted("titleconame_".$id))
		{
				$value = prepare_for_db("titleconame",$value,$type);
		}
		else
			$value = false;
	
		
		if($value!==false)
		{	
	
	
	
	
	
			if(0 && "titleconame"=="password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["titleconame"] = $value;
		
			}
	
			}
//	processing titleconame - end
//	processing titlepolicy - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$value = postvalue("value_titlepolicy_".$id);
		$type = postvalue("type_titlepolicy_".$id);
		if(FieldSubmitted("titlepolicy_".$id))
		{
				$value = prepare_for_db("titlepolicy",$value,$type);
		}
		else
			$value = false;
	
		
		if($value!==false)
		{	
	
	
	
	
	
			if(0 && "titlepolicy"=="password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["titlepolicy"] = $value;
		
			}
	
			}
//	processing titlepolicy - end
//	processing titlephone - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$value = postvalue("value_titlephone_".$id);
		$type = postvalue("type_titlephone_".$id);
		if(FieldSubmitted("titlephone_".$id))
		{
				$value = prepare_for_db("titlephone",$value,$type);
		}
		else
			$value = false;
	
		
		if($value!==false)
		{	
	
	
	
	
	
			if(0 && "titlephone"=="password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["titlephone"] = $value;
		
			}
	
			}
//	processing titlephone - end
//	processing titleremit - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$value = postvalue("value_titleremit_".$id);
		$type = postvalue("type_titleremit_".$id);
		if(FieldSubmitted("titleremit_".$id))
		{
				$value = prepare_for_db("titleremit",$value,$type);
		}
		else
			$value = false;
	
		
		if($value!==false)
		{	
	
	
	
	
	
			if(0 && "titleremit"=="password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["titleremit"] = $value;
		
			}
	
			}
//	processing titleremit - end
//	processing titleatty - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$value = postvalue("value_titleatty_".$id);
		$type = postvalue("type_titleatty_".$id);
		if(FieldSubmitted("titleatty_".$id))
		{
				$value = prepare_for_db("titleatty",$value,$type);
		}
		else
			$value = false;
	
		
		if($value!==false)
		{	
	
	
	
	
	
			if(0 && "titleatty"=="password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["titleatty"] = $value;
		
			}
	
			}
//	processing titleatty - end
//	processing titlerefatty - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$value = postvalue("value_titlerefatty_".$id);
		$type = postvalue("type_titlerefatty_".$id);
		if(FieldSubmitted("titlerefatty_".$id))
		{
				$value = prepare_for_db("titlerefatty",$value,$type);
		}
		else
			$value = false;
	
		
		if($value!==false)
		{	
	
	
	
	
	
			if(0 && "titlerefatty"=="password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["titlerefatty"] = $value;
		
			}
	
			}
//	processing titlerefatty - end
//	processing titlerecv - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$value = postvalue("value_titlerecv_".$id);
		$type = postvalue("type_titlerecv_".$id);
		if(FieldSubmitted("titlerecv_".$id))
		{
				$value = prepare_for_db("titlerecv",$value,$type);
		}
		else
			$value = false;
	
		
		if($value!==false)
		{	
	
	
	
	
	
			if(0 && "titlerecv"=="password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["titlerecv"] = $value;
		
			}
	
			}
//	processing titlerecv - end
//	processing closesched_date - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$value = postvalue("value_closesched_date_".$id);
		$type = postvalue("type_closesched_date_".$id);
		if(FieldSubmitted("closesched_date_".$id))
		{
				$value = prepare_for_db("closesched_date",$value,$type);
		}
		else
			$value = false;
	
		
		if($value!==false)
		{	
	
	
	
	
	
			if(0 && "closesched_date"=="password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["closesched_date"] = $value;
		
			}
	
			}
//	processing closesched_date - end
//	processing closesched_time - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$value = postvalue("value_closesched_time_".$id);
		$type = postvalue("type_closesched_time_".$id);
		if(FieldSubmitted("closesched_time_".$id))
		{
				$value = prepare_for_db("closesched_time",$value,$type);
		}
		else
			$value = false;
	
		
		if($value!==false)
		{	
	
	
	
	
	
			if(0 && "closesched_time"=="password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["closesched_time"] = $value;
		
			}
	
			}
//	processing closesched_time - end
//	processing sellprice - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$value = postvalue("value_sellprice_".$id);
		$type = postvalue("type_sellprice_".$id);
		if(FieldSubmitted("sellprice_".$id))
		{
				$value = prepare_for_db("sellprice",$value,$type);
		}
		else
			$value = false;
	
		
		if($value!==false)
		{	
	
	
	
	
	
			if(0 && "sellprice"=="password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["sellprice"] = $value;
		
			}
	
			}
//	processing sellprice - end
//	processing deposit - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$value = postvalue("value_deposit_".$id);
		$type = postvalue("type_deposit_".$id);
		if(FieldSubmitted("deposit_".$id))
		{
				$value = prepare_for_db("deposit",$value,$type);
		}
		else
			$value = false;
	
		
		if($value!==false)
		{	
	
	
	
	
	
			if(0 && "deposit"=="password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["deposit"] = $value;
		
			}
	
			}
//	processing deposit - end
//	processing loanamt - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$value = postvalue("value_loanamt_".$id);
		$type = postvalue("type_loanamt_".$id);
		if(FieldSubmitted("loanamt_".$id))
		{
				$value = prepare_for_db("loanamt",$value,$type);
		}
		else
			$value = false;
	
		
		if($value!==false)
		{	
	
	
	
	
	
			if(0 && "loanamt"=="password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["loanamt"] = $value;
		
			}
	
			}
//	processing loanamt - end
//	processing refi_purch - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$value = postvalue("value_refi_purch_".$id);
		$type = postvalue("type_refi_purch_".$id);
		if(FieldSubmitted("refi_purch_".$id))
		{
				$value = prepare_for_db("refi_purch",$value,$type);
		}
		else
			$value = false;
	
		
		if($value!==false)
		{	
	
	
	
	
	
			if(0 && "refi_purch"=="password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["refi_purch"] = $value;
		
			}
	
			}
//	processing refi_purch - end
//	processing res_comm - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$value = postvalue("value_res_comm_".$id);
		$type = postvalue("type_res_comm_".$id);
		if(FieldSubmitted("res_comm_".$id))
		{
				$value = prepare_for_db("res_comm",$value,$type);
		}
		else
			$value = false;
	
		
		if($value!==false)
		{	
	
	
	
	
	
			if(0 && "res_comm"=="password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["res_comm"] = $value;
		
			}
	
			}
//	processing res_comm - end
//	processing file_status - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$value = postvalue("value_file_status_".$id);
		$type = postvalue("type_file_status_".$id);
		if(FieldSubmitted("file_status_".$id))
		{
				$value = prepare_for_db("file_status",$value,$type);
		}
		else
			$value = false;
	
		
		if($value!==false)
		{	
	
	
	
	
	
			if(0 && "file_status"=="password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["file_status"] = $value;
		
			}
	
			}
//	processing file_status - end
//	processing file_archlocation - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$value = postvalue("value_file_archlocation_".$id);
		$type = postvalue("type_file_archlocation_".$id);
		if(FieldSubmitted("file_archlocation_".$id))
		{
				$value = prepare_for_db("file_archlocation",$value,$type);
		}
		else
			$value = false;
	
		
		if($value!==false)
		{	
	
	
	
	
	
			if(0 && "file_archlocation"=="password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["file_archlocation"] = $value;
		
			}
	
			}
//	processing file_archlocation - end
//	processing client1 - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$value = postvalue("value_client1_".$id);
		$type = postvalue("type_client1_".$id);
		if(FieldSubmitted("client1_".$id))
		{
				$value = prepare_for_db("client1",$value,$type);
		}
		else
			$value = false;
	
		
		if($value!==false)
		{	
	
	
	
	
	
			if(0 && "client1"=="password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["client1"] = $value;
		
			}
	
			}
//	processing client1 - end
//	processing client2 - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$value = postvalue("value_client2_".$id);
		$type = postvalue("type_client2_".$id);
		if(FieldSubmitted("client2_".$id))
		{
				$value = prepare_for_db("client2",$value,$type);
		}
		else
			$value = false;
	
		
		if($value!==false)
		{	
	
	
	
	
	
			if(0 && "client2"=="password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["client2"] = $value;
		
			}
	
			}
//	processing client2 - end
//	processing claddr1 - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$value = postvalue("value_claddr1_".$id);
		$type = postvalue("type_claddr1_".$id);
		if(FieldSubmitted("claddr1_".$id))
		{
				$value = prepare_for_db("claddr1",$value,$type);
		}
		else
			$value = false;
	
		
		if($value!==false)
		{	
	
	
	
	
	
			if(0 && "claddr1"=="password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["claddr1"] = $value;
		
			}
	
			}
//	processing claddr1 - end
//	processing claddr2 - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$value = postvalue("value_claddr2_".$id);
		$type = postvalue("type_claddr2_".$id);
		if(FieldSubmitted("claddr2_".$id))
		{
				$value = prepare_for_db("claddr2",$value,$type);
		}
		else
			$value = false;
	
		
		if($value!==false)
		{	
	
	
	
	
	
			if(0 && "claddr2"=="password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["claddr2"] = $value;
		
			}
	
			}
//	processing claddr2 - end
//	processing clphone1 - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$value = postvalue("value_clphone1_".$id);
		$type = postvalue("type_clphone1_".$id);
		if(FieldSubmitted("clphone1_".$id))
		{
				$value = prepare_for_db("clphone1",$value,$type);
		}
		else
			$value = false;
	
		
		if($value!==false)
		{	
	
	
	
	
	
			if(0 && "clphone1"=="password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["clphone1"] = $value;
		
			}
	
			}
//	processing clphone1 - end
//	processing clphone2 - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$value = postvalue("value_clphone2_".$id);
		$type = postvalue("type_clphone2_".$id);
		if(FieldSubmitted("clphone2_".$id))
		{
				$value = prepare_for_db("clphone2",$value,$type);
		}
		else
			$value = false;
	
		
		if($value!==false)
		{	
	
	
	
	
	
			if(0 && "clphone2"=="password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["clphone2"] = $value;
		
			}
	
			}
//	processing clphone2 - end
//	processing tenant - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$value = postvalue("value_tenant_".$id);
		$type = postvalue("type_tenant_".$id);
		if(FieldSubmitted("tenant_".$id))
		{
				$value = prepare_for_db("tenant",$value,$type);
		}
		else
			$value = false;
	
		
		if($value!==false)
		{	
	
	
	
	
	
			if(0 && "tenant"=="password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["tenant"] = $value;
		
			}
	
			}
//	processing tenant - end
//	processing matter - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$value = postvalue("value_matter_".$id);
		$type = postvalue("type_matter_".$id);
		if(FieldSubmitted("matter_".$id))
		{
				$value = prepare_for_db("matter",$value,$type);
		}
		else
			$value = false;
	
		
		if($value!==false)
		{	
	
	
	
	
	
			if(0 && "matter"=="password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["matter"] = $value;
		
			}
	
			}
//	processing matter - end
//	processing staffatty - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$value = postvalue("value_staffatty_".$id);
		$type = postvalue("type_staffatty_".$id);
		if(FieldSubmitted("staffatty_".$id))
		{
				$value = prepare_for_db("staffatty",$value,$type);
		}
		else
			$value = false;
	
		
		if($value!==false)
		{	
	
	
	
	
	
			if(0 && "staffatty"=="password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["staffatty"] = $value;
		
			}
	
			}
//	processing staffatty - end

	foreach($efilename_values as $ekey=>$value)
		$evalues[$ekey] = $value;
		
	if($pageObject->lockingObj)
	{
		$lockmessage = "";
		if(!$pageObject->lockingObj->ConfirmLock($strTableName,$savedKeys,$lockmessage))
		{
			$enableCtrlsForEditing = false;
			$system_attrs = "style='display:block;'";
			if($inlineedit == EDIT_INLINE)
			{
				if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
					$lockmessage = $pageObject->lockingObj->GetLockInfo($strTableName,$savedKeys,false,$id);
				
				$returnJSON['success'] = false;
				$returnJSON['message'] = $lockmessage;
				$returnJSON['enableCtrls'] = $enableCtrlsForEditing;
				$returnJSON['confirmTime'] = $pageObject->lockingObj->ConfirmTime;
				echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
				exit();
			}
			else
			{
				if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
					$system_message = $pageObject->lockingObj->GetLockInfo($strTableName,$savedKeys,true,$id);
				else
					$system_message = $lockmessage;
			}
			$status = "DECLINED";
			$readevalues = true;
		}
	}
	
	if($readevalues==false)
	{
	//	do event
		$retval = true;
		if($eventObj->exists("BeforeEdit"))
			$retval=$eventObj->BeforeEdit($evalues,$strWhereClause,$dataold,$keys,$usermessage,(bool)$inlineedit);
		if($retval && $pageObject->isCaptchaOk)
		{		
			if($inlineedit!=EDIT_INLINE)
				$_SESSION[$strTableName."_count_captcha"] = $_SESSION[$strTableName."_count_captcha"]+1;
				
			if(DoUpdateRecord($strOriginalTableName,$evalues,$blobfields,$strWhereClause,$id,$pageObject))
			{
				$IsSaved = true;
				
				//	after edit event
				if($pageObject->lockingObj && $inlineedit == EDIT_INLINE)
					$pageObject->lockingObj->UnlockRecord($strTableName,$savedKeys,"");
				if($auditObj || $eventObj->exists("AfterEdit"))
				{
					foreach($dataold as $idx=>$val)
					{
						if(!array_key_exists($idx,$evalues))
							$evalues[$idx] = $val;
					}
				}

				if($auditObj)
					$auditObj->LogEdit($strTableName,$evalues,$dataold,$keys);
				if($eventObj->exists("AfterEdit"))
					$eventObj->AfterEdit($evalues,KeyWhere($keys),$dataold,$keys,(bool)$inlineedit);
							
				$mesClass = "mes_ok";	
			}
			elseif($inlineedit!=EDIT_INLINE)
				$mesClass = "mes_not";	
		}
		else
		{
			$message = $usermessage;
			$readevalues = true;
			$status = "DECLINED";
		}
	}
	if($readevalues)
		$keys = $savedKeys;
}
//else
{
	/////////////////////////
	//Locking recors
	/////////////////////////

	if($pageObject->lockingObj)
	{
		$enableCtrlsForEditing = $pageObject->lockingObj->LockRecord($strTableName,$keys);
		if(!$enableCtrlsForEditing)
		{
			if($inlineedit == EDIT_INLINE)
			{
				if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
					$lockmessage = $pageObject->lockingObj->GetLockInfo($strTableName,$keys,false,$id);
				else
					$lockmessage = $pageObject->lockingObj->LockUser;
				$returnJSON['success'] = false;
				$returnJSON['message'] = $lockmessage;
				$returnJSON['enableCtrls'] = $enableCtrlsForEditing;
				$returnJSON['confirmTime'] = $pageObject->lockingObj->ConfirmTime;
				echo my_json_encode($returnJSON);
				exit();
			}
			
			$system_attrs = "style='display:block;'";
			$system_message = $pageObject->lockingObj->LockUser;
			
			if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
			{
				$rb = $pageObject->lockingObj->GetLockInfo($strTableName,$keys,true,$id);
				if($rb!="")
					$system_message = $rb;
			}
		}
	}
}

if($pageObject->lockingObj && $inlineedit!=EDIT_INLINE)
	$pageObject->body["begin"] .='<div class="runner-locking" '.$system_attrs.'>'.$system_message.'</div>';

if($message)
	$message = "<div class='message ".$mesClass."'>".$message."</div>";

// PRG rule, to avoid POSTDATA resend
if ($IsSaved && no_output_done() && $inlineedit == EDIT_SIMPLE)
{
	// saving message
	$_SESSION["message_edit"] = ($message ? $message : "");
	// key get query
	$keyGetQ = "";
		$keyGetQ.="editid1=".rawurldecode($keys["idttl_actions"])."&";
		$keyGetQ.="editid2=".rawurldecode($keys["properties_idproperties"])."&";
	// cut last &
	$keyGetQ = substr($keyGetQ, 0, strlen($keyGetQ)-1);	
	// redirect
	header("Location: ttl_actions_".$pageObject->getPageType().".php?".$keyGetQ);
	// turned on output buffering, so we need to stop script
	exit();
}
// for PRG rule, to avoid POSTDATA resend. Saving mess in session
if ($inlineedit == EDIT_SIMPLE && isset($_SESSION["message_edit"]))
{
	$message = $_SESSION["message_edit"];
	unset($_SESSION["message_edit"]);
}

/////////////////////////////////////////////////////////////
//	read current values from the database
/////////////////////////////////////////////////////////////
$query = $queryData_ttl_actions->Copy();

$strWhereClause = KeyWhere($keys);
$strSQL = gSQLWhere($strWhereClause);

$strSQLbak = $strSQL;
//	Before Query event
if($eventObj->exists("BeforeQueryEdit"))
	$eventObj->BeforeQueryEdit($strSQL, $strWhereClause);

if($strSQLbak == $strSQL)
	$strSQL = gSQLWhere($strWhereClause);
	
LogInfo($strSQL);

$rs = db_query($strSQL, $conn);
$data = db_fetch_array($rs);
if(!$data)
{
	if($inlineedit == EDIT_SIMPLE)
	{
		header("Location: ttl_actions_list.php?a=return");
		exit();
	}
	else
		$data = array();
}

$readonlyfields = array();

  $readonlyfields["ttlnumb"] = htmlspecialchars(GetData($data,"ttlnumb", ""));

if($readevalues)
{
	$data["whencreated"] = $evalues["whencreated"];
	$data["examiner"] = $evalues["examiner"];
	$data["filecabinet"] = $evalues["filecabinet"];
	$data["titleconame"] = $evalues["titleconame"];
	$data["titlepolicy"] = $evalues["titlepolicy"];
	$data["titlephone"] = $evalues["titlephone"];
	$data["titleremit"] = $evalues["titleremit"];
	$data["titleatty"] = $evalues["titleatty"];
	$data["titlerefatty"] = $evalues["titlerefatty"];
	$data["titlerecv"] = $evalues["titlerecv"];
	$data["closesched_date"] = $evalues["closesched_date"];
	$data["closesched_time"] = $evalues["closesched_time"];
	$data["sellprice"] = $evalues["sellprice"];
	$data["deposit"] = $evalues["deposit"];
	$data["loanamt"] = $evalues["loanamt"];
	$data["refi_purch"] = $evalues["refi_purch"];
	$data["res_comm"] = $evalues["res_comm"];
	$data["file_status"] = $evalues["file_status"];
	$data["file_archlocation"] = $evalues["file_archlocation"];
	$data["client1"] = $evalues["client1"];
	$data["client2"] = $evalues["client2"];
	$data["claddr1"] = $evalues["claddr1"];
	$data["claddr2"] = $evalues["claddr2"];
	$data["clphone1"] = $evalues["clphone1"];
	$data["clphone2"] = $evalues["clphone2"];
	$data["tenant"] = $evalues["tenant"];
	$data["matter"] = $evalues["matter"];
	$data["staffatty"] = $evalues["staffatty"];
}

if($eventObj->exists("ProcessValuesEdit"))
	$eventObj->ProcessValuesEdit($data);

/////////////////////////////////////////////////////////////
//	assign values to $xt class, prepare page for displaying
/////////////////////////////////////////////////////////////
//Basic includes js files
$includes = "";
//javascript code
	
if($inlineedit != EDIT_INLINE)
{
	if($inlineedit == EDIT_SIMPLE)
	{
		$includes.= "<script language=\"JavaScript\" src=\"include/loadfirst.js\"></script>\r\n";
				$includes.="<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";
		
		if (!isMobile())
			$includes.= "<div id=\"search_suggest".$id."\"></div>\r\n";
			
		$pageObject->body["begin"].= $includes;
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
		

	$xt->assign("show_key1", htmlspecialchars(GetData($data,"idttl_actions", "")));
	$xt->assign("show_key2", htmlspecialchars(GetData($data,"properties_idproperties", "")));
	//$xt->assign('editForm',true);
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
	if(!@$_SESSION[$strTableName."_noNextPrev"] && $inlineedit == EDIT_SIMPLE)
	{
		$next = array();
		$prev = array();
		$pageObject->getNextPrevRecordKeys($data,"Edit",$next,$prev);
	}
	$nextlink = $prevlink = "";
	if(count($next))
	{
		$xt->assign("next_button",true);
				$nextlink.= "editid1=".htmlspecialchars(rawurlencode($next[1]));
				$nextlink.= "&";
		$nextlink.= "editid2=".htmlspecialchars(rawurlencode($next[2]));
		$xt->assign("nextbutton_attrs","id=\"nextButton".$id."\" align=\"absmiddle\"");
	}
	else 
		$xt->assign("next_button",false);
	if(count($prev))
	{
		$xt->assign("prev_button",true);
				$prevlink.= "editid1=".htmlspecialchars(rawurlencode($prev[1]));
				$prevlink.= "&";
		$prevlink.= "editid2=".htmlspecialchars(rawurlencode($prev[2]));
		$xt->assign("prevbutton_attrs","id=\"prevButton".$id."\" align=\"absmiddle\"");
	}
	else 
		$xt->assign("prev_button",false);
	
	
	
	$xt->assign("resetbutton_attrs",'id="resetButton'.$id.'"');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//End Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
	if($inlineedit == EDIT_SIMPLE)
	{
		$xt->assign("back_button",true);
		$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
	}
	// onmouseover event, for changing focus. Needed to proper submit form
	$onmouseover = "this.focus();";
	$onmouseover = 'onmouseover="'.$onmouseover.'"';
	
	$xt->assign("save_button",true);
	if(!$enableCtrlsForEditing)
		$xt->assign("savebutton_attrs", "id=\"saveButton".$id."\" type=\"disabled\" ".$onmouseover);
	else
		$xt->assign("savebutton_attrs", "id=\"saveButton".$id."\"".$onmouseover);
		
	$xt->assign("reset_button",true);

}

$xt->assign("message_block",true);
$xt->assign("message",$message);
if(!strlen($message))
{
	$xt->displayBrickHidden("message");
}
/////////////////////////////////////////////////////////////
//process readonly and auto-update fields
/////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////
//	prepare Edit Controls
/////////////////////////////////////////////////////////////
//	validation stuff
$regex = '';
$regexmessage = '';
$regextype = '';
$control = array();

foreach($editFields as $fName)
{
	$gfName = GoodFieldName($fName);
	$controls = array('controls'=>array());
	if (!$detailKeys || !in_array($fName, $detailKeys))
	{		
		$control[$gfName] = array();
		$control[$gfName]["func"]="xt_buildeditcontrol";
		$control[$gfName]["params"] = array();
		$control[$gfName]["params"]["id"] = $id;
		$control[$gfName]["params"]["field"] = $fName;
		$control[$gfName]["params"]["value"] = @$data[$fName];
		
		//	Begin Add validation
		$arrValidate = getValidation($fName,$strTableName);	
		$control[$gfName]["params"]["validate"] = $arrValidate;
		//	End Add validation	
		$additionalCtrlParams = array();
		$additionalCtrlParams["disabled"] = !$enableCtrlsForEditing;
		$control[$gfName]["params"]["additionalCtrlParams"] = $additionalCtrlParams;
	}
	$controls["controls"]['ctrlInd'] = 0;
	$controls["controls"]['id'] = $id;
	$controls["controls"]['fieldName'] = $fName;
	
	if($inlineedit == EDIT_INLINE)
	{
		if(!$detailKeys || !in_array($fName, $detailKeys))
			$control[$gfName]["params"]["mode"]="inline_edit";
		$controls["controls"]['mode'] = "inline_edit";
	}
	else{
			if (!$detailKeys || !in_array($fName, $detailKeys))
				$control[$gfName]["params"]["mode"] = "edit";
			$controls["controls"]['mode'] = "edit";
		}
                                                                                                                    	
	if(!$detailKeys || !in_array($fName, $detailKeys))
		$xt->assignbyref($gfName."_editcontrol",$control[$gfName]);
	elseif($detailKeys && in_array($fName, $detailKeys))
		$controls["controls"]['value'] = @$data[$fName];
		
	// category control field
	$strCategoryControl = $pageObject->hasDependField($fName);
	
	if($strCategoryControl!==false && in_array($strCategoryControl, $editFields))
		$vals = array($fName => @$data[$fName],$strCategoryControl => @$data[$strCategoryControl]);
	else
		$vals = array($fName => @$data[$fName]);
		
	$preload = $pageObject->fillPreload($fName, $vals);
	if($preload!==false)
		$controls["controls"]['preloadData'] = $preload;	
	
	$pageObject->fillControlsMap($controls);
	
	//fill field tool tips
	$pageObject->fillFieldToolTips($fName);
	
	// fill special settings for timepicker
	if(GetEditFormat($fName) == 'Time')	
		$pageObject->fillTimePickSettings($fName, $data[$fName]);
	
	if(ViewFormat($fName) == FORMAT_MAP)	
		$pageObject->googleMapCfg['isUseGoogleMap'] = true;
		
	if($detailKeys && in_array($fName, $detailKeys) && array_key_exists($fName, $data))
	{
		if((GetEditFormat($fName)==EDIT_FORMAT_LOOKUP_WIZARD || GetEditFormat($fName)==EDIT_FORMAT_RADIO) && GetpLookupType($fName) == LT_LOOKUPTABLE)
			$value=DisplayLookupWizard($fName,$data[$fName],$data,"",MODE_VIEW);
		elseif(NeedEncode($fName))
			$value = ProcessLargeText(GetData($data,$fName, ViewFormat($fName)),"field=".rawurlencode(htmlspecialchars($fName)),"",MODE_VIEW);
		else
			$value = GetData($data,$fName, ViewFormat($fName));
		
		$xt->assign($gfName."_editcontrol",$value);
	}
}
//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();
			
$pageObject->jsSettings['tableSettings'][$strTableName]["keys"] = $keys;
$pageObject->jsSettings['tableSettings'][$strTableName]["prevKeys"] = $prev;
$pageObject->jsSettings['tableSettings'][$strTableName]["nextKeys"] = $next; 
if($pageObject->lockingObj)
{
	$pageObject->jsSettings['tableSettings'][$strTableName]["sKeys"] = $skeys;
	$pageObject->jsSettings['tableSettings'][$strTableName]["enableCtrls"] = $enableCtrlsForEditing;
	$pageObject->jsSettings['tableSettings'][$strTableName]["confirmTime"] = $pageObject->lockingObj->ConfirmTime;
}

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && $inlineedit!=EDIT_INLINE && !isMobile())
{
	if(count($dpParams['ids']))
	{
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
		$xt->assign("detail_tables",true);	
	}
	
	$dControlsMap = array();
	$flyId = $ids+1;
	
	for($d=0;$d<count($dpParams['ids']);$d++)
	{
		$options = array();
		//array of params for classes
		$options["mode"] = LIST_DETAILS;
		$options["pageType"] = PAGE_LIST;
		$options["masterPageType"] = PAGE_EDIT;
		$options["mainMasterPageType"] = PAGE_EDIT;
		$options['masterTable'] = "ttl_actions";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search")){
			$strTableName = "ttl_actions";
			continue;
		}
		
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
		$masterKeys = array();
		$mkr = 1;
		
		foreach($mKeys[$strTableName] as $mk){
			$options['masterKeysReq'][$mkr] = $data[$mk];
			$masterKeys['masterKey'.$mkr] = $data[$mk];
			$mkr++;
		}
		$listPageObject = ListPage::createListPage($strTableName, $options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		
		// show page
		if($listPageObject->isDispGrid())
		{
			//set page events
			foreach($listPageObject->eventsObject->events as $event => $name)
				$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
			
			//add detail settings to master settings
			$listPageObject->fillSetCntrlMaps();
			
			$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];
			
			foreach($listPageObject->jsSettings["global"]["shortTNames"] as $tName => $shortTName){
				$pageObject->settingsMap["globalSettings"]["shortTNames"][$tName] = $shortTName;
			}
			
			$dControlsMap[$strTableName] = $listPageObject->controlsMap;
			$dControlsMap[$strTableName]['masterKeys'] = $masterKeys;
			
			//Add detail's js files to master's files
			$pageObject->copyAllJSFiles($listPageObject->grabAllJSFiles());
			
			//Add detail's css files to master's files
			$pageObject->copyAllCSSFiles($listPageObject->grabAllCSSFiles());
		
			$xtParams = array("method"=>'showPage', "params"=> false);
			$xtParams['object'] = $listPageObject;
			$xt->assign("displayDetailTable_".GoodFieldName($listPageObject->tName), $xtParams);
		
			$pageObject->controlsMap['dpTablesParams'][] = array('tName'=>$strTableName, 'id'=>$options['id']);
		}
		$flyId = $listPageObject->recId+1;
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$strTableName = "ttl_actions";
}
/////////////////////////////////////////////////////////////
//fill jsSettings and ControlsHTMLMap
$pageObject->fillSetCntrlMaps();

$pageObject->addCommonJs();

//For mobile version in apple device

if($inlineedit == EDIT_SIMPLE)
{
	// assign body end
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	$xt->assign("body", $pageObject->body);
	$xt->assign("flybody",true);
}
else
{
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;	
}


if($inlineedit==EDIT_POPUP){
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("body",$pageObject->body);
	//$xt->assign("body",true);
}

$xt->assign("style_block",true);
$pageObject->xt->assign("legendBreak", '<br/>');

$viewlink="";
$viewkeys=array();
	$viewkeys["editid1"]=postvalue("editid1");
	$viewkeys["editid2"]=postvalue("editid2");
foreach($viewkeys as $key=>$val)
{
	if($viewlink)
		$viewlink.="&";
	$viewlink.=$key."=".$val;
}
$xt->assign("viewlink_attrs","id=\"viewButton".$id."\" name=\"viewButton".$id."\" onclick=\"window.location.href='ttl_actions_view.php?".$viewlink."'\"");
if(CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search") && $inlineedit==EDIT_SIMPLE)
	$xt->assign("view_button",true);
else
	$xt->assign("view_button",false);

/////////////////////////////////////////////////////////////
//display the page
/////////////////////////////////////////////////////////////
if($eventObj->exists("BeforeShowEdit"))
	$eventObj->BeforeShowEdit($xt,$templatefile,$data);
if($inlineedit==EDIT_POPUP)
{
	$xt->load_template($templatefile);
	$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
	if(count($pageObject->includes_css))
		$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
	if(count($pageObject->includes_cssIE))
		$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);
	$returnJSON['idStartFrom'] = $flyId + 1;
	echo (my_json_encode($returnJSON)); 
}
elseif($inlineedit == EDIT_INLINE)
{
	$xt->load_template($templatefile);
	$returnJSON["html"] = array();
	foreach($editFields as $fName)
	{
		if($detailKeys && in_array($fName, $detailKeys))
			continue;
		$returnJSON["html"][$fName] = $xt->fetchVar(GoodFieldName($fName)."_editcontrol");
	}
	
	echo (my_json_encode($returnJSON)); 
}
else
	$xt->display($templatefile);

?>
