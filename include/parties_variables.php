<?php
$strTableName="parties";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="parties";

$gstrOrderBy="ORDER BY name";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$g_orderindexes[] = array(1, (1 ? "ASC" : "DESC"), "name");
$gsqlHead="SELECT name AS Name,  salutation AS Title,  phone AS Phone,  contact AS `Contact Name`,  co_name AS Company,  addr1 AS `Address line 1`,  addr2 AS `Address line 2`,  city AS City,  `state` AS `State`,  postal AS `ZIP Code`,  idparties";
$gsqlFrom="FROM parties";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/parties_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_parties;
$eventObj = &$tableEvents["parties"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>