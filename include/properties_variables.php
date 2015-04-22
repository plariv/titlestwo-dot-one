<?php
$strTableName="properties";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="properties";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT properties.propaddr1 AS `Address line 1`,  properties.propaddr2 AS `Address line 2`,  properties.propcity AS City,  properties.propstate AS `State`,  properties.proppostal AS `ZIP Code`,  properties.propplatte AS `Platte Number`,  properties.proplot AS `Plot Number`,  properties.proplong AS Longitude,  properties.proplat AS Latitude,  properties.idproperties,  ttl_actions.examiner,  ttl_actions.filecabinet,  ttl_actions.whencreated,  ttl_actions.idttl_actions,  ttl_actions.properties_idproperties";
$gsqlFrom="FROM properties  LEFT OUTER JOIN ttl_actions ON properties.idproperties = ttl_actions.properties_idproperties";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/properties_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_properties;
$eventObj = &$tableEvents["properties"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>