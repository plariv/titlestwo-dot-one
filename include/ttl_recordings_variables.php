<?php
$strTableName="ttl_recordings";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="ttl_recordings";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT idttl_recordings,  mort AS Mortgage,  disrec AS `Discharge recorded (Y/N)`,  whenrecorded AS `Recording Date`,  book AS Book,  page AS Page,  account AS `Account Number`,  ttl_actions_idttl_actions";
$gsqlFrom="FROM ttl_recordings";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/ttl_recordings_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_ttl_recordings;
$eventObj = &$tableEvents["ttl_recordings"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>