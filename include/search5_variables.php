<?php
$strTableName="search5";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="search5";

$gstrOrderBy="ORDER BY FileNumber DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$g_orderindexes[] = array(2, (0 ? "ASC" : "DESC"), "FileNumber");
$gsqlHead="SELECT idttl_actions,  FileNumber,  NameOfSeller,  NameOfBuyer,  NameOfBroker,  BrokerCo,  PropAddress,  City,  MortgageBy,  `Client A`,  `Client B`,  Tenant,  Matter";
$gsqlFrom="FROM search5";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/search5_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_search5;
$eventObj = &$tableEvents["search5"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>