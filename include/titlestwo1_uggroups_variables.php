<?php
$strTableName="titlestwo1_uggroups";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="titlestwo1_uggroups";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT GroupID,   `Label`";
$gsqlFrom="FROM titlestwo1_uggroups";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/titlestwo1_uggroups_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_titlestwo1_uggroups;
$eventObj = &$tableEvents["titlestwo1_uggroups"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>