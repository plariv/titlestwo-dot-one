<?php
$strTableName="admin_users";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="ttwousers";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT id,   username,   password,   active,   firstname,   lastname,   datecreated,   groupmember,   emailaddr";
$gsqlFrom="FROM ttwousers";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/admin_users_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_admin_users;
$eventObj = &$tableEvents["admin_users"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>