<?php
$strTableName="titlestwo1_ugmembers";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="titlestwo1_ugmembers";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT UserName,   GroupID";
$gsqlFrom="FROM titlestwo1_ugmembers";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/titlestwo1_ugmembers_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_titlestwo1_ugmembers;
$eventObj = &$tableEvents["titlestwo1_ugmembers"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>