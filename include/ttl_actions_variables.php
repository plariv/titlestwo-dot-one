<?php
$strTableName="ttl_actions";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="ttl_actions";

$gstrOrderBy="ORDER BY ttl_actions.whencreated DESC, ttl_actions.ttlnumb DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$g_orderindexes[] = array(3, (0 ? "ASC" : "DESC"), "ttl_actions.whencreated");
$g_orderindexes[] = array(2, (0 ? "ASC" : "DESC"), "ttl_actions.ttlnumb");
$gsqlHead="SELECT ttl_actions.idttl_actions,  ttl_actions.ttlnumb,  ttl_actions.whencreated,  ttl_actions.examiner,  ttl_actions.filecabinet,  ttl_actions.properties_idproperties,  ttl_actions.titleconame,  ttl_actions.titlepolicy,  ttl_actions.titlephone,  ttl_actions.titleremit,  ttl_actions.titleatty,  ttl_actions.titlerefatty,  ttl_actions.titlerecv,  ttl_actions.closesched_date,  ttl_actions.closesched_time,  ttl_actions.sellprice,  ttl_actions.deposit,  ttl_actions.loanamt,  ttl_actions.refi_purch,  ttl_actions.res_comm,  ttl_actions.file_status,  ttl_actions.file_archlocation,  properties.propaddr1,  properties.propaddr2,  properties.propcity,  properties.propstate,  properties.proppostal,  properties.propplatte,  properties.proplot,  ttl_actions.client1,  ttl_actions.client2,  ttl_actions.claddr1,  ttl_actions.claddr2,  ttl_actions.clphone1,  ttl_actions.clphone2,  ttl_actions.tenant,  properties.idproperties,  ttl_actions.matter,  ttl_actions.staffatty";
$gsqlFrom="FROM ttl_actions  INNER JOIN properties ON ttl_actions.properties_idproperties = properties.idproperties";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/ttl_actions_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_ttl_actions;
$eventObj = &$tableEvents["ttl_actions"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>