<?php
$strTableName="sellers";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="sellers";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT sellers.idsellers,  sellers.ttl_actions_idttl_actions,  sellers.parties_idparties,  parties.name,  parties.phone,  parties.co_name,  parties.addr1,  parties.addr2,  parties.city,  parties.`state`,  parties.postal";
$gsqlFrom="FROM sellers  LEFT OUTER JOIN parties ON sellers.parties_idparties = parties.idparties";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/sellers_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_sellers;
$eventObj = &$tableEvents["sellers"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>