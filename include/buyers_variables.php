<?php
$strTableName="buyers";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="buyers";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT buyers.idbuyers,  buyers.ttl_actions_idttl_actions,  buyers.parties_idparties,  parties.name,  parties.phone,  parties.co_name,  parties.addr1,  parties.addr2,  parties.city,  parties.`state`,  parties.postal";
$gsqlFrom="FROM buyers  LEFT OUTER JOIN parties ON buyers.parties_idparties = parties.idparties";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/buyers_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_buyers;
$eventObj = &$tableEvents["buyers"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>