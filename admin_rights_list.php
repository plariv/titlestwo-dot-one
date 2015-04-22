<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

include("include/admin_rights_variables.php");


$gsqlHead="select `username` ";
$gsqlFrom="from `ttwousers`";
$gsqlWhereExpr="";
$gsqlTail="";
// $gstrSQL = "SELECT TableName,   GroupID,   AccessMask  FROM titlestwo1_ugrights ";
$gstrSQL = gSQLWhere("");


if(!@$_SESSION["UserID"])
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}
if(!IsAdmin())
{
	echo "<p>"."You don't have permissions to access this table"." <a href=\"login.php\">"."Back to login page"."</a></p>";
	return;
}



$layout = new TLayout("ug_rights","Extravaganza1Orange","MobileOrange");
$layout->blocks["center"] = array();
$layout->containers["ugcontrols"] = array();

$layout->containers["ugcontrols"][] = array("name"=>"ugbuttons","block"=>"savebuttons_block","substyle"=>1);


$layout->skins["ugcontrols"] = "1";
$layout->blocks["center"][] = "ugcontrols";
$layout->containers["message"] = array();

$layout->containers["message"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->skins["message"] = "1";
$layout->blocks["center"][] = "message";
$layout->containers["grid"] = array();

$layout->containers["grid"][] = array("name"=>"ugrightsblock","block"=>"rights_block","substyle"=>1);


$layout->skins["grid"] = "grid";
$layout->blocks["center"][] = "grid";
$layout->containers["pagination"] = array();

$layout->containers["pagination"][] = array("name"=>"pagination","block"=>"pagination_block","substyle"=>1);


$layout->skins["pagination"] = "2";
$layout->blocks["center"][] = "pagination";$layout->blocks["left"] = array();
$layout->containers["left"] = array();


$layout->containers["left"][] = array("name"=>"loggedas","block"=>"security_block","substyle"=>1);


$layout->containers["left"][] = array("name"=>"vmenu","block"=>"menu_block","substyle"=>1);


$layout->skins["left"] = "menu";
$layout->blocks["left"][] = "left";
$layout->containers["uggroup"] = array();

$layout->containers["uggroup"][] = array("name"=>"ugrightsgroup","block"=>"","substyle"=>1);


$layout->skins["uggroup"] = "1";
$layout->blocks["left"][] = "uggroup";$layout->blocks["top"] = array();
$layout->skins["master"] = "empty";
$layout->blocks["top"][] = "master";
$layout->skins["toplinks"] = "2";
$layout->blocks["top"][] = "toplinks";
$layout->containers["search"] = array();


$layout->containers["search"][] = array("name"=>"details_found","block"=>"details_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"page_of","block"=>"pages_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"recsperpage","block"=>"recordspp_block","substyle"=>1);


$layout->skins["search"] = "2";
$layout->blocks["top"][] = "search";$page_layouts["admin_rights_list"] = $layout;


include('include/xtempl.php');
include('classes/runnerpage.php');
include('classes/listpage.php');
include('classes/rightspage.php');
$xt = new Xtempl();

$options = array();
//array of params for classes
$options["pageType"] = PAGE_LIST;
$options["id"] = postvalue("id") ? postvalue("id") : 1;
$options["mode"] = RIGHTS_PAGE;
$options['xt'] = &$xt;
$nonAdminTablesRightsArr=array();
$nonAdminTablesArr=array();
$pageRights=array();
$nonAdminTablesArr[] = array("agents","Agents");
$nonAdminTablesRightsArr["agents"]=array();
$pageRights["agents"]["add"]=true;
$pageRights["agents"]["edit"]=true;
$pageRights["agents"]["delete"]=false;
$pageRights["agents"]["list"]=true;
$pageRights["agents"]["export"]=false;
$pageRights["agents"]["import"]=false;

$nonAdminTablesArr[] = array("ttl_actions","Ttl Actions");
$nonAdminTablesRightsArr["ttl_actions"]=array();
$pageRights["ttl_actions"]["add"]=true;
$pageRights["ttl_actions"]["edit"]=true;
$pageRights["ttl_actions"]["delete"]=true;
$pageRights["ttl_actions"]["list"]=true;
$pageRights["ttl_actions"]["export"]=false;
$pageRights["ttl_actions"]["import"]=false;

$nonAdminTablesArr[] = array("brokers","Brokers");
$nonAdminTablesRightsArr["brokers"]=array();
$pageRights["brokers"]["add"]=true;
$pageRights["brokers"]["edit"]=true;
$pageRights["brokers"]["delete"]=true;
$pageRights["brokers"]["list"]=true;
$pageRights["brokers"]["export"]=false;
$pageRights["brokers"]["import"]=false;

$nonAdminTablesArr[] = array("buyers","Buyers");
$nonAdminTablesRightsArr["buyers"]=array();
$pageRights["buyers"]["add"]=true;
$pageRights["buyers"]["edit"]=true;
$pageRights["buyers"]["delete"]=true;
$pageRights["buyers"]["list"]=true;
$pageRights["buyers"]["export"]=false;
$pageRights["buyers"]["import"]=false;

$nonAdminTablesArr[] = array("parties","Parties");
$nonAdminTablesRightsArr["parties"]=array();
$pageRights["parties"]["add"]=true;
$pageRights["parties"]["edit"]=true;
$pageRights["parties"]["delete"]=false;
$pageRights["parties"]["list"]=true;
$pageRights["parties"]["export"]=false;
$pageRights["parties"]["import"]=false;

$nonAdminTablesArr[] = array("properties","Properties");
$nonAdminTablesRightsArr["properties"]=array();
$pageRights["properties"]["add"]=true;
$pageRights["properties"]["edit"]=true;
$pageRights["properties"]["delete"]=false;
$pageRights["properties"]["list"]=true;
$pageRights["properties"]["export"]=false;
$pageRights["properties"]["import"]=false;

$nonAdminTablesArr[] = array("sellers","Sellers");
$nonAdminTablesRightsArr["sellers"]=array();
$pageRights["sellers"]["add"]=true;
$pageRights["sellers"]["edit"]=true;
$pageRights["sellers"]["delete"]=true;
$pageRights["sellers"]["list"]=true;
$pageRights["sellers"]["export"]=false;
$pageRights["sellers"]["import"]=false;

$nonAdminTablesArr[] = array("ttl_recordings","Ttl Recordings");
$nonAdminTablesRightsArr["ttl_recordings"]=array();
$pageRights["ttl_recordings"]["add"]=true;
$pageRights["ttl_recordings"]["edit"]=true;
$pageRights["ttl_recordings"]["delete"]=true;
$pageRights["ttl_recordings"]["list"]=true;
$pageRights["ttl_recordings"]["export"]=false;
$pageRights["ttl_recordings"]["import"]=false;

$nonAdminTablesArr[] = array("ttlaction_notes","Ttlaction Notes");
$nonAdminTablesRightsArr["ttlaction_notes"]=array();
$pageRights["ttlaction_notes"]["add"]=true;
$pageRights["ttlaction_notes"]["edit"]=true;
$pageRights["ttlaction_notes"]["delete"]=true;
$pageRights["ttlaction_notes"]["list"]=true;
$pageRights["ttlaction_notes"]["export"]=true;
$pageRights["ttlaction_notes"]["import"]=true;

$nonAdminTablesArr[] = array("lastfilenumbers","Lastfilenumbers");
$nonAdminTablesRightsArr["lastfilenumbers"]=array();
$pageRights["lastfilenumbers"]["add"]=true;
$pageRights["lastfilenumbers"]["edit"]=true;
$pageRights["lastfilenumbers"]["delete"]=false;
$pageRights["lastfilenumbers"]["list"]=true;
$pageRights["lastfilenumbers"]["export"]=false;
$pageRights["lastfilenumbers"]["import"]=false;

$nonAdminTablesArr[] = array("search5","Search5");
$nonAdminTablesRightsArr["search5"]=array();
$pageRights["search5"]["add"]=false;
$pageRights["search5"]["edit"]=false;
$pageRights["search5"]["delete"]=false;
$pageRights["search5"]["list"]=true;
$pageRights["search5"]["export"]=false;
$pageRights["search5"]["import"]=false;

$nonAdminTablesArr[] = array("ttwousers","Ttwousers");
$nonAdminTablesRightsArr["ttwousers"]=array();
$pageRights["ttwousers"]["add"]=true;
$pageRights["ttwousers"]["edit"]=true;
$pageRights["ttwousers"]["delete"]=true;
$pageRights["ttwousers"]["list"]=true;
$pageRights["ttwousers"]["export"]=false;
$pageRights["ttwousers"]["import"]=false;

$nonAdminTablesArr[] = array("titlestwo1_uggroups","Titlestwo1 Uggroups");
$nonAdminTablesRightsArr["titlestwo1_uggroups"]=array();
$pageRights["titlestwo1_uggroups"]["add"]=true;
$pageRights["titlestwo1_uggroups"]["edit"]=true;
$pageRights["titlestwo1_uggroups"]["delete"]=true;
$pageRights["titlestwo1_uggroups"]["list"]=true;
$pageRights["titlestwo1_uggroups"]["export"]=true;
$pageRights["titlestwo1_uggroups"]["import"]=true;

$nonAdminTablesArr[] = array("titlestwo1_ugmembers","Titlestwo1 Ugmembers");
$nonAdminTablesRightsArr["titlestwo1_ugmembers"]=array();
$pageRights["titlestwo1_ugmembers"]["add"]=false;
$pageRights["titlestwo1_ugmembers"]["edit"]=false;
$pageRights["titlestwo1_ugmembers"]["delete"]=false;
$pageRights["titlestwo1_ugmembers"]["list"]=true;
$pageRights["titlestwo1_ugmembers"]["export"]=true;
$pageRights["titlestwo1_ugmembers"]["import"]=true;

$nonAdminTablesArr[] = array("titlestwo1_ugrights","Titlestwo1 Ugrights");
$nonAdminTablesRightsArr["titlestwo1_ugrights"]=array();
$pageRights["titlestwo1_ugrights"]["add"]=false;
$pageRights["titlestwo1_ugrights"]["edit"]=false;
$pageRights["titlestwo1_ugrights"]["delete"]=false;
$pageRights["titlestwo1_ugrights"]["list"]=true;
$pageRights["titlestwo1_ugrights"]["export"]=false;
$pageRights["titlestwo1_ugrights"]["import"]=false;

$nonAdminTablesArr[] = array("sellersactions","Sellersactions");
$nonAdminTablesRightsArr["sellersactions"]=array();
$pageRights["sellersactions"]["add"]=false;
$pageRights["sellersactions"]["edit"]=false;
$pageRights["sellersactions"]["delete"]=false;
$pageRights["sellersactions"]["list"]=true;
$pageRights["sellersactions"]["export"]=false;
$pageRights["sellersactions"]["import"]=false;

$nonAdminTablesArr[] = array("buyersactions","Buyersactions");
$nonAdminTablesRightsArr["buyersactions"]=array();
$pageRights["buyersactions"]["add"]=false;
$pageRights["buyersactions"]["edit"]=false;
$pageRights["buyersactions"]["delete"]=false;
$pageRights["buyersactions"]["list"]=true;
$pageRights["buyersactions"]["export"]=false;
$pageRights["buyersactions"]["import"]=false;


$options["nonAdminTablesArr"] = $nonAdminTablesArr;
$options["nonAdminTablesRightsArr"] = $nonAdminTablesRightsArr;


$pageObject = ListPage::createListPage($strTableName, $options);
 // add button events if exist

// prepare code for build page
$pageObject->prepareForBuildPage();

// show page depends of mode
$pageObject->showPage();
	//$xt->assign_loopsection("grid_row",$rowinfo);
	


?>
