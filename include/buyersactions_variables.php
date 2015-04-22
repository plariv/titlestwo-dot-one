<?php
$strTableName="buyersactions";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="buyersactions";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT idbuyers,   ttl_actions_idttl_actions,   parties_idparties,   idparties,   name";
$gsqlFrom="FROM buyersactions";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/buyersactions_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_buyersactions;
$eventObj = &$tableEvents["buyersactions"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>