<?php
$strTableName="agents";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="agents";

$gstrOrderBy="ORDER BY name";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$g_orderindexes[] = array(1, (1 ? "ASC" : "DESC"), "name");
$gsqlHead="SELECT name,  salutation,  phone,  contact,  co_name,  addr1,  addr2,  city,  `state`,  postal,  idagents";
$gsqlFrom="FROM agents";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/agents_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_agents;
$eventObj = &$tableEvents["agents"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>