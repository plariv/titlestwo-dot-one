<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/ttl_actions_variables.php");

add_nocache_headers();
//	check if logged in
if(!@$_SESSION["UserID"] || !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}

$layout = new TLayout("view2","Extravaganza1Orange","MobileOrange");
$layout->blocks["top"] = array();
$layout->skins["pdf"] = "empty";
$layout->blocks["top"][] = "pdf";
$layout->containers["view"] = array();

$layout->containers["view"][] = array("name"=>"viewheader","block"=>"","substyle"=>2);


$layout->containers["view"][] = array("name"=>"wrapper","block"=>"","substyle"=>1);


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"viewfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"viewbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["view"] = "1";
$layout->blocks["top"][] = "view";
$layout->containers["details"] = array();

$layout->containers["details"][] = array("name"=>"viewdetails","block"=>"detail_tables","substyle"=>1);


$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["ttl_actions_view"] = $layout;


$layout = new TLayout("viewtab","Extravaganza1Orange","MobileOrange");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"viewtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["ttl_actions_view_Client_and_Tenant1"] = $layout;

$layout = new TLayout("viewtab","Extravaganza1Orange","MobileOrange");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"viewtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["ttl_actions_view_Title1"] = $layout;

$layout = new TLayout("viewtab","Extravaganza1Orange","MobileOrange");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"viewtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["ttl_actions_view_Financial1"] = $layout;


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


include('include/xtempl.php');
include('classes/runnerpage.php');
include("classes/searchclause.php");
$xt = new Xtempl();


$query = $gQuery->Copy();

$filename = "";	
$message = "";
$key = array();
$next = array();
$prev = array();
$all = postvalue("all");
$pdf = postvalue("pdf");
$mypage = 1;

//Show view page as popUp or not
$inlineview = (postvalue("onFly") ? true : false);

//If show view as popUp, get parent Id
if($inlineview)
	$parId = postvalue("parId");
else
	$parId = 0;

//Set page id	
if(postvalue("id"))
	$id = postvalue("id");
else
	$id = 1;

//$isNeedSettings = true;//($inlineview && postvalue("isNeedSettings") == 'true') || (!$inlineview);	
	
// assign an id			
$xt->assign("id",$id);

//array of params for classes
$params = array("pageType" => PAGE_VIEW, "id" =>$id, "tName"=>$strTableName);
$params["xt"] = &$xt;
//Get array of tabs for edit page
$params['useTabsOnView'] = useTabsOnView($strTableName);
if($params['useTabsOnView'])
	$params['arrViewTabs'] = GetViewTabs($strTableName);
$pageObject = new RunnerPage($params);

// SearchClause class stuff
$pageObject->searchClauseObj->parseRequest();
$_SESSION[$strTableName.'_advsearch'] = serialize($pageObject->searchClauseObj);

// proccess big google maps

// add button events if exist
$pageObject->addButtonHandlers();

//For show detail tables on master page view
$dpParams = array();
if($pageObject->isShowDetailTables && !isMobile())
{
	$ids = $id;
	$dpPermis = $pageObject->getPermissions("brokers");
	if ($dpPermis['search']){
		$mKeys["brokers"] = GetMasterKeysByDetailTable("brokers", $strTableName);
		$dpParams['strTableNames'][] = "brokers";
		$dpParams['ids'][] = ++$ids;
	}
	$dpPermis = $pageObject->getPermissions("buyers");
	if ($dpPermis['search']){
		$mKeys["buyers"] = GetMasterKeysByDetailTable("buyers", $strTableName);
		$dpParams['strTableNames'][] = "buyers";
		$dpParams['ids'][] = ++$ids;
	}
	$dpPermis = $pageObject->getPermissions("sellers");
	if ($dpPermis['search']){
		$mKeys["sellers"] = GetMasterKeysByDetailTable("sellers", $strTableName);
		$dpParams['strTableNames'][] = "sellers";
		$dpParams['ids'][] = ++$ids;
	}
	$dpPermis = $pageObject->getPermissions("ttl_recordings");
	if ($dpPermis['search']){
		$mKeys["ttl_recordings"] = GetMasterKeysByDetailTable("ttl_recordings", $strTableName);
		$dpParams['strTableNames'][] = "ttl_recordings";
		$dpParams['ids'][] = ++$ids;
	}
	$dpPermis = $pageObject->getPermissions("ttlaction_notes");
	if ($dpPermis['search']){
		$mKeys["ttlaction_notes"] = GetMasterKeysByDetailTable("ttlaction_notes", $strTableName);
		$dpParams['strTableNames'][] = "ttlaction_notes";
		$dpParams['ids'][] = ++$ids;
	}
	$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array();
}


//	Before Process event
if($eventObj->exists("BeforeProcessView"))
	$eventObj->BeforeProcessView($conn);

$strWhereClause = '';
$strHavingClause = '';
if(!$all)
{
//	show one record only
	$keys=array();
	$strWhereClause="";
	$keys["idttl_actions"]=postvalue("editid1");
	$keys["properties_idproperties"]=postvalue("editid2");
	$strWhereClause = KeyWhere($keys);
	$strSQL = gSQLWhere($strWhereClause);
}
else
{
	if ($_SESSION[$strTableName."_SelectedSQL"]!="" && @$_REQUEST["records"]=="") 
	{
		$strSQL = $_SESSION[$strTableName."_SelectedSQL"];
		$strWhereClause=@$_SESSION[$strTableName."_SelectedWhere"];
	}
	else
	{
		$strWhereClause=@$_SESSION[$strTableName."_where"];
		$strHavingClause=@$_SESSION[$strTableName."_having"];
		$strSearchCriteria=@$_SESSION[$strTableName."_criteria"];
		$strSQL=gSQLWhere($strWhereClause, $strHavingClause, $strSearchCriteria);
	}
//	order by
	$strOrderBy=$_SESSION[$strTableName."_order"];
	if(!$strOrderBy)
		$strOrderBy=$gstrOrderBy;
	$strSQL.=" ".trim($strOrderBy);
}

$strSQLbak = $strSQL;
if($eventObj->exists("BeforeQueryView"))
	$eventObj->BeforeQueryView($strSQL,$strWhereClause);
if($strSQLbak == $strSQL)
{
	$strSQL=gSQLWhere($strWhereClause,$strHavingClause);
	if($all)
	{
		$numrows=gSQLRowCount($strWhereClause,$strHavingClause, $strSearchCriteria);
		$strSQL.=" ".trim($strOrderBy);
	}
}
else
{
//	changed $strSQL - old style	
	if($all)
	{
		$numrows=GetRowCount($strSQL);
	}
}

if(!$all)
{
	LogInfo($strSQL);
	$rs=db_query($strSQL,$conn);
}
else
{
//	 Pagination:
	$nPageSize=0;
	if(@$_REQUEST["records"]=="page" && $numrows)
	{
		$mypage=(integer)@$_SESSION[$strTableName."_pagenumber"];
		$nPageSize=(integer)@$_SESSION[$strTableName."_pagesize"];
		if($numrows<=($mypage-1)*$nPageSize)
			$mypage=ceil($numrows/$nPageSize);
		if(!$nPageSize)
			$nPageSize=$gPageSize;
		if(!$mypage)
			$mypage=1;
		$strSQL.=" limit ".(($mypage-1)*$nPageSize).",".$nPageSize;
	}
	$rs=db_query($strSQL,$conn);
}

$data=db_fetch_array($rs);

if($eventObj->exists("ProcessValuesView"))
	$eventObj->ProcessValuesView($data);

$out = "";
$first = true;

$fieldsArr = array();
$arr = array();
$arr['fName'] = "ttlnumb";
$arr['viewFormat'] = ViewFormat("ttlnumb", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "whencreated";
$arr['viewFormat'] = ViewFormat("whencreated", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "matter";
$arr['viewFormat'] = ViewFormat("matter", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "staffatty";
$arr['viewFormat'] = ViewFormat("staffatty", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "propaddr1";
$arr['viewFormat'] = ViewFormat("propaddr1", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "propaddr2";
$arr['viewFormat'] = ViewFormat("propaddr2", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "propcity";
$arr['viewFormat'] = ViewFormat("propcity", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "propstate";
$arr['viewFormat'] = ViewFormat("propstate", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "proppostal";
$arr['viewFormat'] = ViewFormat("proppostal", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "propplatte";
$arr['viewFormat'] = ViewFormat("propplatte", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "proplot";
$arr['viewFormat'] = ViewFormat("proplot", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "file_status";
$arr['viewFormat'] = ViewFormat("file_status", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "file_archlocation";
$arr['viewFormat'] = ViewFormat("file_archlocation", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "filecabinet";
$arr['viewFormat'] = ViewFormat("filecabinet", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "client1";
$arr['viewFormat'] = ViewFormat("client1", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "client2";
$arr['viewFormat'] = ViewFormat("client2", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "claddr1";
$arr['viewFormat'] = ViewFormat("claddr1", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "claddr2";
$arr['viewFormat'] = ViewFormat("claddr2", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "clphone1";
$arr['viewFormat'] = ViewFormat("clphone1", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "clphone2";
$arr['viewFormat'] = ViewFormat("clphone2", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "tenant";
$arr['viewFormat'] = ViewFormat("tenant", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "titleconame";
$arr['viewFormat'] = ViewFormat("titleconame", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "titlephone";
$arr['viewFormat'] = ViewFormat("titlephone", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "titlepolicy";
$arr['viewFormat'] = ViewFormat("titlepolicy", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "titleatty";
$arr['viewFormat'] = ViewFormat("titleatty", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "titlerefatty";
$arr['viewFormat'] = ViewFormat("titlerefatty", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "titleremit";
$arr['viewFormat'] = ViewFormat("titleremit", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "titlerecv";
$arr['viewFormat'] = ViewFormat("titlerecv", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "examiner";
$arr['viewFormat'] = ViewFormat("examiner", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "closesched_date";
$arr['viewFormat'] = ViewFormat("closesched_date", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "closesched_time";
$arr['viewFormat'] = ViewFormat("closesched_time", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "sellprice";
$arr['viewFormat'] = ViewFormat("sellprice", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "deposit";
$arr['viewFormat'] = ViewFormat("deposit", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "loanamt";
$arr['viewFormat'] = ViewFormat("loanamt", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "refi_purch";
$arr['viewFormat'] = ViewFormat("refi_purch", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "res_comm";
$arr['viewFormat'] = ViewFormat("res_comm", $strTableName);
$fieldsArr[] = $arr;

$mainTableOwnerID = GetTableData($strTableName,".mainTableOwnerID",'');
$ownerIdValue="";

$pageObject->setGoogleMapsParams($fieldsArr);

while($data)
{
	$xt->assign("show_key1", htmlspecialchars(GetData($data,"idttl_actions", "")));
	$xt->assign("show_key2", htmlspecialchars(GetData($data,"properties_idproperties", "")));

	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["idttl_actions"]));
	$keylink.="&key2=".htmlspecialchars(rawurlencode(@$data["properties_idproperties"]));

////////////////////////////////////////////
//ttlnumb - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"ttlnumb", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="ttlnumb")
		$ownerIdValue=$value;
	$xt->assign("ttlnumb_value",$value);
	if(!$pageObject->isAppearOnTabs("ttlnumb"))
		$xt->assign("ttlnumb_fieldblock",true);
	else
		$xt->assign("ttlnumb_tabfieldblock",true);
////////////////////////////////////////////
//whencreated - Short Date
	
	$value="";
	$value = ProcessLargeText(GetData($data,"whencreated", "Short Date"),"","",MODE_VIEW);
	if($mainTableOwnerID=="whencreated")
		$ownerIdValue=$value;
	$xt->assign("whencreated_value",$value);
	if(!$pageObject->isAppearOnTabs("whencreated"))
		$xt->assign("whencreated_fieldblock",true);
	else
		$xt->assign("whencreated_tabfieldblock",true);
////////////////////////////////////////////
//matter - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"matter", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="matter")
		$ownerIdValue=$value;
	$xt->assign("matter_value",$value);
	if(!$pageObject->isAppearOnTabs("matter"))
		$xt->assign("matter_fieldblock",true);
	else
		$xt->assign("matter_tabfieldblock",true);
////////////////////////////////////////////
//staffatty - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"staffatty", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="staffatty")
		$ownerIdValue=$value;
	$xt->assign("staffatty_value",$value);
	if(!$pageObject->isAppearOnTabs("staffatty"))
		$xt->assign("staffatty_fieldblock",true);
	else
		$xt->assign("staffatty_tabfieldblock",true);
////////////////////////////////////////////
//propaddr1 - 
	
	$value="";
	$value=DisplayLookupWizard("propaddr1",$data["propaddr1"],$data,$keylink,MODE_VIEW);
	if($mainTableOwnerID=="propaddr1")
		$ownerIdValue=$value;
	$xt->assign("propaddr1_value",$value);
	if(!$pageObject->isAppearOnTabs("propaddr1"))
		$xt->assign("propaddr1_fieldblock",true);
	else
		$xt->assign("propaddr1_tabfieldblock",true);
////////////////////////////////////////////
//propaddr2 - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"propaddr2", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="propaddr2")
		$ownerIdValue=$value;
	$xt->assign("propaddr2_value",$value);
	if(!$pageObject->isAppearOnTabs("propaddr2"))
		$xt->assign("propaddr2_fieldblock",true);
	else
		$xt->assign("propaddr2_tabfieldblock",true);
////////////////////////////////////////////
//propcity - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"propcity", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="propcity")
		$ownerIdValue=$value;
	$xt->assign("propcity_value",$value);
	if(!$pageObject->isAppearOnTabs("propcity"))
		$xt->assign("propcity_fieldblock",true);
	else
		$xt->assign("propcity_tabfieldblock",true);
////////////////////////////////////////////
//propstate - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"propstate", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="propstate")
		$ownerIdValue=$value;
	$xt->assign("propstate_value",$value);
	if(!$pageObject->isAppearOnTabs("propstate"))
		$xt->assign("propstate_fieldblock",true);
	else
		$xt->assign("propstate_tabfieldblock",true);
////////////////////////////////////////////
//proppostal - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"proppostal", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="proppostal")
		$ownerIdValue=$value;
	$xt->assign("proppostal_value",$value);
	if(!$pageObject->isAppearOnTabs("proppostal"))
		$xt->assign("proppostal_fieldblock",true);
	else
		$xt->assign("proppostal_tabfieldblock",true);
////////////////////////////////////////////
//propplatte - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"propplatte", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="propplatte")
		$ownerIdValue=$value;
	$xt->assign("propplatte_value",$value);
	if(!$pageObject->isAppearOnTabs("propplatte"))
		$xt->assign("propplatte_fieldblock",true);
	else
		$xt->assign("propplatte_tabfieldblock",true);
////////////////////////////////////////////
//proplot - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"proplot", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="proplot")
		$ownerIdValue=$value;
	$xt->assign("proplot_value",$value);
	if(!$pageObject->isAppearOnTabs("proplot"))
		$xt->assign("proplot_fieldblock",true);
	else
		$xt->assign("proplot_tabfieldblock",true);
////////////////////////////////////////////
//file_status - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"file_status", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="file_status")
		$ownerIdValue=$value;
	$xt->assign("file_status_value",$value);
	if(!$pageObject->isAppearOnTabs("file_status"))
		$xt->assign("file_status_fieldblock",true);
	else
		$xt->assign("file_status_tabfieldblock",true);
////////////////////////////////////////////
//file_archlocation - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"file_archlocation", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="file_archlocation")
		$ownerIdValue=$value;
	$xt->assign("file_archlocation_value",$value);
	if(!$pageObject->isAppearOnTabs("file_archlocation"))
		$xt->assign("file_archlocation_fieldblock",true);
	else
		$xt->assign("file_archlocation_tabfieldblock",true);
////////////////////////////////////////////
//filecabinet - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"filecabinet", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="filecabinet")
		$ownerIdValue=$value;
	$xt->assign("filecabinet_value",$value);
	if(!$pageObject->isAppearOnTabs("filecabinet"))
		$xt->assign("filecabinet_fieldblock",true);
	else
		$xt->assign("filecabinet_tabfieldblock",true);
////////////////////////////////////////////
//client1 - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"client1", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="client1")
		$ownerIdValue=$value;
	$xt->assign("client1_value",$value);
	if(!$pageObject->isAppearOnTabs("client1"))
		$xt->assign("client1_fieldblock",true);
	else
		$xt->assign("client1_tabfieldblock",true);
////////////////////////////////////////////
//client2 - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"client2", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="client2")
		$ownerIdValue=$value;
	$xt->assign("client2_value",$value);
	if(!$pageObject->isAppearOnTabs("client2"))
		$xt->assign("client2_fieldblock",true);
	else
		$xt->assign("client2_tabfieldblock",true);
////////////////////////////////////////////
//claddr1 - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"claddr1", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="claddr1")
		$ownerIdValue=$value;
	$xt->assign("claddr1_value",$value);
	if(!$pageObject->isAppearOnTabs("claddr1"))
		$xt->assign("claddr1_fieldblock",true);
	else
		$xt->assign("claddr1_tabfieldblock",true);
////////////////////////////////////////////
//claddr2 - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"claddr2", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="claddr2")
		$ownerIdValue=$value;
	$xt->assign("claddr2_value",$value);
	if(!$pageObject->isAppearOnTabs("claddr2"))
		$xt->assign("claddr2_fieldblock",true);
	else
		$xt->assign("claddr2_tabfieldblock",true);
////////////////////////////////////////////
//clphone1 - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"clphone1", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="clphone1")
		$ownerIdValue=$value;
	$xt->assign("clphone1_value",$value);
	if(!$pageObject->isAppearOnTabs("clphone1"))
		$xt->assign("clphone1_fieldblock",true);
	else
		$xt->assign("clphone1_tabfieldblock",true);
////////////////////////////////////////////
//clphone2 - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"clphone2", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="clphone2")
		$ownerIdValue=$value;
	$xt->assign("clphone2_value",$value);
	if(!$pageObject->isAppearOnTabs("clphone2"))
		$xt->assign("clphone2_fieldblock",true);
	else
		$xt->assign("clphone2_tabfieldblock",true);
////////////////////////////////////////////
//tenant - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"tenant", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="tenant")
		$ownerIdValue=$value;
	$xt->assign("tenant_value",$value);
	if(!$pageObject->isAppearOnTabs("tenant"))
		$xt->assign("tenant_fieldblock",true);
	else
		$xt->assign("tenant_tabfieldblock",true);
////////////////////////////////////////////
//titleconame - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"titleconame", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="titleconame")
		$ownerIdValue=$value;
	$xt->assign("titleconame_value",$value);
	if(!$pageObject->isAppearOnTabs("titleconame"))
		$xt->assign("titleconame_fieldblock",true);
	else
		$xt->assign("titleconame_tabfieldblock",true);
////////////////////////////////////////////
//titlephone - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"titlephone", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="titlephone")
		$ownerIdValue=$value;
	$xt->assign("titlephone_value",$value);
	if(!$pageObject->isAppearOnTabs("titlephone"))
		$xt->assign("titlephone_fieldblock",true);
	else
		$xt->assign("titlephone_tabfieldblock",true);
////////////////////////////////////////////
//titlepolicy - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"titlepolicy", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="titlepolicy")
		$ownerIdValue=$value;
	$xt->assign("titlepolicy_value",$value);
	if(!$pageObject->isAppearOnTabs("titlepolicy"))
		$xt->assign("titlepolicy_fieldblock",true);
	else
		$xt->assign("titlepolicy_tabfieldblock",true);
////////////////////////////////////////////
//titleatty - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"titleatty", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="titleatty")
		$ownerIdValue=$value;
	$xt->assign("titleatty_value",$value);
	if(!$pageObject->isAppearOnTabs("titleatty"))
		$xt->assign("titleatty_fieldblock",true);
	else
		$xt->assign("titleatty_tabfieldblock",true);
////////////////////////////////////////////
//titlerefatty - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"titlerefatty", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="titlerefatty")
		$ownerIdValue=$value;
	$xt->assign("titlerefatty_value",$value);
	if(!$pageObject->isAppearOnTabs("titlerefatty"))
		$xt->assign("titlerefatty_fieldblock",true);
	else
		$xt->assign("titlerefatty_tabfieldblock",true);
////////////////////////////////////////////
//titleremit - Currency
	
	$value="";
	$value = ProcessLargeText(GetData($data,"titleremit", "Currency"),"","",MODE_VIEW);
	if($mainTableOwnerID=="titleremit")
		$ownerIdValue=$value;
	$xt->assign("titleremit_value",$value);
	if(!$pageObject->isAppearOnTabs("titleremit"))
		$xt->assign("titleremit_fieldblock",true);
	else
		$xt->assign("titleremit_tabfieldblock",true);
////////////////////////////////////////////
//titlerecv - Short Date
	
	$value="";
	$value = ProcessLargeText(GetData($data,"titlerecv", "Short Date"),"","",MODE_VIEW);
	if($mainTableOwnerID=="titlerecv")
		$ownerIdValue=$value;
	$xt->assign("titlerecv_value",$value);
	if(!$pageObject->isAppearOnTabs("titlerecv"))
		$xt->assign("titlerecv_fieldblock",true);
	else
		$xt->assign("titlerecv_tabfieldblock",true);
////////////////////////////////////////////
//examiner - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"examiner", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="examiner")
		$ownerIdValue=$value;
	$xt->assign("examiner_value",$value);
	if(!$pageObject->isAppearOnTabs("examiner"))
		$xt->assign("examiner_fieldblock",true);
	else
		$xt->assign("examiner_tabfieldblock",true);
////////////////////////////////////////////
//closesched_date - Short Date
	
	$value="";
	$value = ProcessLargeText(GetData($data,"closesched_date", "Short Date"),"","",MODE_VIEW);
	if($mainTableOwnerID=="closesched_date")
		$ownerIdValue=$value;
	$xt->assign("closesched_date_value",$value);
	if(!$pageObject->isAppearOnTabs("closesched_date"))
		$xt->assign("closesched_date_fieldblock",true);
	else
		$xt->assign("closesched_date_tabfieldblock",true);
////////////////////////////////////////////
//closesched_time - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"closesched_time", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="closesched_time")
		$ownerIdValue=$value;
	$xt->assign("closesched_time_value",$value);
	if(!$pageObject->isAppearOnTabs("closesched_time"))
		$xt->assign("closesched_time_fieldblock",true);
	else
		$xt->assign("closesched_time_tabfieldblock",true);
////////////////////////////////////////////
//sellprice - Currency
	
	$value="";
	$value = ProcessLargeText(GetData($data,"sellprice", "Currency"),"","",MODE_VIEW);
	if($mainTableOwnerID=="sellprice")
		$ownerIdValue=$value;
	$xt->assign("sellprice_value",$value);
	if(!$pageObject->isAppearOnTabs("sellprice"))
		$xt->assign("sellprice_fieldblock",true);
	else
		$xt->assign("sellprice_tabfieldblock",true);
////////////////////////////////////////////
//deposit - Currency
	
	$value="";
	$value = ProcessLargeText(GetData($data,"deposit", "Currency"),"","",MODE_VIEW);
	if($mainTableOwnerID=="deposit")
		$ownerIdValue=$value;
	$xt->assign("deposit_value",$value);
	if(!$pageObject->isAppearOnTabs("deposit"))
		$xt->assign("deposit_fieldblock",true);
	else
		$xt->assign("deposit_tabfieldblock",true);
////////////////////////////////////////////
//loanamt - Currency
	
	$value="";
	$value = ProcessLargeText(GetData($data,"loanamt", "Currency"),"","",MODE_VIEW);
	if($mainTableOwnerID=="loanamt")
		$ownerIdValue=$value;
	$xt->assign("loanamt_value",$value);
	if(!$pageObject->isAppearOnTabs("loanamt"))
		$xt->assign("loanamt_fieldblock",true);
	else
		$xt->assign("loanamt_tabfieldblock",true);
////////////////////////////////////////////
//refi_purch - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"refi_purch", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="refi_purch")
		$ownerIdValue=$value;
	$xt->assign("refi_purch_value",$value);
	if(!$pageObject->isAppearOnTabs("refi_purch"))
		$xt->assign("refi_purch_fieldblock",true);
	else
		$xt->assign("refi_purch_tabfieldblock",true);
////////////////////////////////////////////
//res_comm - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"res_comm", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="res_comm")
		$ownerIdValue=$value;
	$xt->assign("res_comm_value",$value);
	if(!$pageObject->isAppearOnTabs("res_comm"))
		$xt->assign("res_comm_fieldblock",true);
	else
		$xt->assign("res_comm_tabfieldblock",true);

/*$jsKeysObj = 'window.recKeysObj = {';
	$jsKeysObj .= "'".jsreplace("idttl_actions")."': '".(jsreplace(@$data["idttl_actions"]))."', ";
	$jsKeysObj .= "'".jsreplace("properties_idproperties")."': '".(jsreplace(@$data["properties_idproperties"]))."', ";
$jsKeysObj = substr($jsKeysObj, 0, strlen($jsKeysObj)-2);
$jsKeysObj .= '};';
$pageObject->AddJsCode($jsKeysObj);	
*/
/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && !isMobile())
{
	if(count($dpParams['ids']))
	{
		$xt->assign("detail_tables",true);
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
	}
	
	$dControlsMap = array();
	
	for($d=0;$d<count($dpParams['ids']);$d++)
	{
		$options = array();
		//array of params for classes
		$options["mode"] = LIST_DETAILS;
		$options["pageType"] = PAGE_LIST;
		$options["masterPageType"] = PAGE_VIEW;
		$options["mainMasterPageType"] = PAGE_VIEW;
		$options['masterTable'] = "ttl_actions";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		include("include/".GetTableURL($strTableName)."_settings.php");
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
		{
			$strTableName = "ttl_actions";
			continue;
		}
		
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
		$options['flyId'] = $pageObject->genId()+1;
		$mkr = 1;
		foreach($mKeys[$strTableName] as $mk)
			$options['masterKeysReq'][$mkr++] = $data[$mk];
		
		$listPageObject = ListPage::createListPage($strTableName, $options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		
		// show page
		if(!$pdf && $listPageObject->permis[$strTableName]['search'] && $listPageObject->rowsFound)
		{
			//set page events
			foreach($listPageObject->eventsObject->events as $event => $name)
				$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
			
			//add detail settings to master settings
			$listPageObject->fillSetCntrlMaps();
			$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];
			$dControlsMap[$strTableName] = $listPageObject->controlsMap;
			foreach($listPageObject->jsSettings['global']['shortTNames'] as $keySet=>$val)
			{
				if(!array_key_exists($keySet,$pageObject->settingsMap["globalSettings"]['shortTNames']))
					$pageObject->settingsMap["globalSettings"]['shortTNames'][$keySet] = $val;
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
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$strTableName = "ttl_actions";
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin prepare for Next Prev button
if(!@$_SESSION[$strTableName."_noNextPrev"] && !$inlineview && !$pdf)
{
	$pageObject->getNextPrevRecordKeys($data,"Search",$next,$prev);
}
//End prepare for Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


if ($pageObject->googleMapCfg['isUseGoogleMap'])
{
	$pageObject->initGmaps();
}

$pageObject->addCommonJs();

//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

if(!$inlineview)
{
	$pageObject->body["begin"].="<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>\r\n";
		$pageObject->body["begin"].= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";		
	
	$pageObject->jsSettings['tableSettings'][$strTableName]["keys"] = $keys;
	$pageObject->jsSettings['tableSettings'][$strTableName]["prevKeys"] = $prev;
	$pageObject->jsSettings['tableSettings'][$strTableName]["nextKeys"] = $next; 
	
	// assign body end
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	
	$xt->assign("body",$pageObject->body);
	$xt->assign("flybody",true);
}
else
{
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("flybody",$pageObject->body);
	$xt->assign("body",true);
	$xt->assign("pdflink_block",false);
	
	$pageObject->fillSetCntrlMaps();
	
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;
}
$xt->assign("style_block",true);
$xt->assign("stylefiles_block",true);

$editlink="";
$editkeys=array();
	$editkeys["editid1"]=postvalue("editid1");
	$editkeys["editid2"]=postvalue("editid2");
foreach($editkeys as $key=>$val)
{
	if($editlink)
		$editlink.="&";
	$editlink.=$key."=".$val;
}
$xt->assign("editlink_attrs","id=\"editLink".$id."\" name=\"editLink".$id."\" onclick=\"window.location.href='ttl_actions_edit.php?".$editlink."'\"");

$strPerm = GetUserPermissions($strTableName);
if(CheckSecurity($ownerIdValue,"Edit") && !$inlineview && strpos($strPerm, "E")!==false)
	$xt->assign("edit_button",true);
else	
	$xt->assign("edit_button",false);

if(!$pdf && !$all && !$inlineview)
{
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin show Next Prev button
    $nextlink=$prevlink="";
	if(count($next))
    {
		$xt->assign("next_button",true);
	 		$nextlink .="editid1=".htmlspecialchars(rawurlencode($next[1]));
	 		$nextlink .="&";
		$nextlink .="editid2=".htmlspecialchars(rawurlencode($next[2]));
		$xt->assign("nextbutton_attrs","id=\"nextButton".$id."\"");
	}
	else 
		$xt->assign("next_button",false);
	if(count($prev))
	{
		$xt->assign("prev_button",true);
			$prevlink .="editid1=".htmlspecialchars(rawurlencode($prev[1]));
			$prevlink .="&";
		$prevlink .="editid2=".htmlspecialchars(rawurlencode($prev[2]));
		$xt->assign("prevbutton_attrs","id=\"prevButton".$id."\"");
	}
    else 
		$xt->assign("prev_button",false);
//End show Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$xt->assign("back_button",true);
	$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
}

$oldtemplatefile = $pageObject->templatefile;

if(!$all)
{
	if($eventObj->exists("BeforeShowView"))
		$eventObj->BeforeShowView($xt,$pageObject->templatefile,$data);
	
	if(!$pdf)
	{
		if(!$inlineview)
			$xt->display($pageObject->templatefile);
		else{
				$xt->load_template($pageObject->templatefile);
				$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
				if(count($pageObject->includes_css))
					$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
				if(count($pageObject->includes_cssIE))
					$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);				
				$returnJSON['idStartFrom'] = $id+1;
				echo (my_json_encode($returnJSON)); 
			}
	}
	break;
}
}


?>
