<?php
$strTableName="lastfilenumbers";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="lastfilenumbers";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT fileyear,   lastfile";
$gsqlFrom="FROM lastfilenumbers";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/lastfilenumbers_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_lastfilenumbers;
$eventObj = &$tableEvents["lastfilenumbers"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>