<?php
$strTableName="sellersactions";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="sellersactions";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT idsellers,   ttl_actions_idttl_actions,   parties_idparties,   idparties,   name";
$gsqlFrom="FROM sellersactions";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/sellersactions_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_sellersactions;
$eventObj = &$tableEvents["sellersactions"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>