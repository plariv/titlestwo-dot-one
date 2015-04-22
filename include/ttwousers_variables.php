<?php
$strTableName="ttwousers";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="ttwousers";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT id,   username,   password,   active,   firstname,   lastname,   datecreated,   groupmember,   emailaddr";
$gsqlFrom="FROM ttwousers";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/ttwousers_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_ttwousers;
$eventObj = &$tableEvents["ttwousers"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>