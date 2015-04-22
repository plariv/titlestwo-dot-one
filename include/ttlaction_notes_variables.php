<?php
$strTableName="ttlaction_notes";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="ttlaction_notes";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT idnotes,   ttlactions_idttlactions,   created,   note_content";
$gsqlFrom="FROM ttlaction_notes";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/ttlaction_notes_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_ttlaction_notes;
$eventObj = &$tableEvents["ttlaction_notes"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>