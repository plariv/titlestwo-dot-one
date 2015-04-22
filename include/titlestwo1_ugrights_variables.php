<?php
$strTableName="titlestwo1_ugrights";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="titlestwo1_ugrights";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT TableName,   GroupID,   AccessMask";
$gsqlFrom="FROM titlestwo1_ugrights";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/titlestwo1_ugrights_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_titlestwo1_ugrights;
$eventObj = &$tableEvents["titlestwo1_ugrights"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>