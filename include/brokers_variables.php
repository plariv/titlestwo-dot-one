<?php
$strTableName="brokers";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="brokers";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT brokers.idbrokers,  brokers.ttl_actions_idttl_actions,  brokers.agents_idagents,  agents.name,  agents.phone,  agents.co_name,  agents.addr1,  agents.addr2,  agents.city,  agents.`state`,  agents.postal";
$gsqlFrom="FROM brokers  LEFT OUTER JOIN agents ON brokers.agents_idagents = agents.idagents";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/brokers_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_brokers;
$eventObj = &$tableEvents["brokers"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>