<?php
$tdatattlaction_notes=array();
	$tdatattlaction_notes[".NumberOfChars"]=80; 
	$tdatattlaction_notes[".ShortName"]="ttlaction_notes";
	$tdatattlaction_notes[".OwnerID"]="";
	$tdatattlaction_notes[".OriginalTable"]="ttlaction_notes";


	
//	field labels
$fieldLabelsttlaction_notes = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsttlaction_notes["English"]=array();
	$fieldToolTipsttlaction_notes["English"]=array();
	$fieldLabelsttlaction_notes["English"]["idnotes"] = "Idnotes";
	$fieldToolTipsttlaction_notes["English"]["idnotes"] = "";
	$fieldLabelsttlaction_notes["English"]["ttlactions_idttlactions"] = "Ttlactions Idttlactions";
	$fieldToolTipsttlaction_notes["English"]["ttlactions_idttlactions"] = "";
	$fieldLabelsttlaction_notes["English"]["created"] = "Created";
	$fieldToolTipsttlaction_notes["English"]["created"] = "";
	$fieldLabelsttlaction_notes["English"]["note_content"] = "Note Content";
	$fieldToolTipsttlaction_notes["English"]["note_content"] = "";
	if (count($fieldToolTipsttlaction_notes["English"])){
		$tdatattlaction_notes[".isUseToolTips"]=true;
	}
}


	
	$tdatattlaction_notes[".NCSearch"]=true;

	

$tdatattlaction_notes[".shortTableName"] = "ttlaction_notes";
$tdatattlaction_notes[".nSecOptions"] = 0;
$tdatattlaction_notes[".recsPerRowList"] = 1;	
$tdatattlaction_notes[".tableGroupBy"] = "0";
$tdatattlaction_notes[".mainTableOwnerID"] = "";
$tdatattlaction_notes[".moveNext"] = 1;




$tdatattlaction_notes[".showAddInPopup"] = false;

$tdatattlaction_notes[".showEditInPopup"] = false;

$tdatattlaction_notes[".showViewInPopup"] = false;


$tdatattlaction_notes[".fieldsForRegister"] = array();

$tdatattlaction_notes[".listAjax"] = false;

	$tdatattlaction_notes[".audit"] = false;

	$tdatattlaction_notes[".locking"] = false;
	
$tdatattlaction_notes[".listIcons"] = true;
$tdatattlaction_notes[".edit"] = true;
$tdatattlaction_notes[".view"] = true;

$tdatattlaction_notes[".exportTo"] = true;

$tdatattlaction_notes[".printFriendly"] = true;

$tdatattlaction_notes[".delete"] = true;

$tdatattlaction_notes[".showSimpleSearchOptions"] = false;

$tdatattlaction_notes[".showSearchPanel"] = true;


if (isMobile()){
$tdatattlaction_notes[".isUseAjaxSuggest"] = false;
}else {
$tdatattlaction_notes[".isUseAjaxSuggest"] = true;
}

$tdatattlaction_notes[".rowHighlite"] = true;


// button handlers file names

$tdatattlaction_notes[".addPageEvents"] = false;

$tdatattlaction_notes[".arrKeyFields"][] = "idnotes";

// use datepicker for search panel
$tdatattlaction_notes[".isUseCalendarForSearch"] = true;

// use timepicker for search panel
$tdatattlaction_notes[".isUseTimeForSearch"] = false;

$tdatattlaction_notes[".isUseiBox"] = false;



	



$tdatattlaction_notes[".isUseInlineJs"] = $tdatattlaction_notes[".isUseInlineAdd"] || $tdatattlaction_notes[".isUseInlineEdit"];

$tdatattlaction_notes[".allSearchFields"] = array();

$tdatattlaction_notes[".globSearchFields"][] = "idnotes";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("idnotes", $tdatattlaction_notes[".allSearchFields"]))
{
	$tdatattlaction_notes[".allSearchFields"][] = "idnotes";	
}
$tdatattlaction_notes[".globSearchFields"][] = "ttlactions_idttlactions";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ttlactions_idttlactions", $tdatattlaction_notes[".allSearchFields"]))
{
	$tdatattlaction_notes[".allSearchFields"][] = "ttlactions_idttlactions";	
}
$tdatattlaction_notes[".globSearchFields"][] = "created";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("created", $tdatattlaction_notes[".allSearchFields"]))
{
	$tdatattlaction_notes[".allSearchFields"][] = "created";	
}
$tdatattlaction_notes[".globSearchFields"][] = "note_content";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("note_content", $tdatattlaction_notes[".allSearchFields"]))
{
	$tdatattlaction_notes[".allSearchFields"][] = "note_content";	
}


$tdatattlaction_notes[".googleLikeFields"][] = "idnotes";
$tdatattlaction_notes[".googleLikeFields"][] = "ttlactions_idttlactions";
$tdatattlaction_notes[".googleLikeFields"][] = "created";
$tdatattlaction_notes[".googleLikeFields"][] = "note_content";



$tdatattlaction_notes[".advSearchFields"][] = "idnotes";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("idnotes", $tdatattlaction_notes[".allSearchFields"])) 
{
	$tdatattlaction_notes[".allSearchFields"][] = "idnotes";	
}
$tdatattlaction_notes[".advSearchFields"][] = "ttlactions_idttlactions";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ttlactions_idttlactions", $tdatattlaction_notes[".allSearchFields"])) 
{
	$tdatattlaction_notes[".allSearchFields"][] = "ttlactions_idttlactions";	
}
$tdatattlaction_notes[".advSearchFields"][] = "created";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("created", $tdatattlaction_notes[".allSearchFields"])) 
{
	$tdatattlaction_notes[".allSearchFields"][] = "created";	
}
$tdatattlaction_notes[".advSearchFields"][] = "note_content";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("note_content", $tdatattlaction_notes[".allSearchFields"])) 
{
	$tdatattlaction_notes[".allSearchFields"][] = "note_content";	
}

$tdatattlaction_notes[".isTableType"] = "list";


	

$tdatattlaction_notes[".isDisplayLoading"] = true;


// Access doesn't support subqueries from the same table as main
$tdatattlaction_notes[".subQueriesSupAccess"] = true;





$tdatattlaction_notes[".pageSize"] = 60;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdatattlaction_notes[".strOrderBy"] = $gstrOrderBy;
	
$tdatattlaction_notes[".orderindexes"] = array();

$tdatattlaction_notes[".sqlHead"] = "SELECT idnotes,   ttlactions_idttlactions,   created,   note_content";
$tdatattlaction_notes[".sqlFrom"] = "FROM ttlaction_notes";
$tdatattlaction_notes[".sqlWhereExpr"] = "";
$tdatattlaction_notes[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 60;
$arrRPP[] = 250;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatattlaction_notes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatattlaction_notes[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "idnotes";
	$tdatattlaction_notes[".Keys"] = $tableKeys;

$tdatattlaction_notes[".listFields"] = array();
$tdatattlaction_notes[".listFields"][] = "idnotes";
$tdatattlaction_notes[".listFields"][] = "ttlactions_idttlactions";
$tdatattlaction_notes[".listFields"][] = "created";
$tdatattlaction_notes[".listFields"][] = "note_content";

$tdatattlaction_notes[".addFields"] = array();
$tdatattlaction_notes[".addFields"][] = "ttlactions_idttlactions";
$tdatattlaction_notes[".addFields"][] = "created";
$tdatattlaction_notes[".addFields"][] = "note_content";

$tdatattlaction_notes[".inlineAddFields"] = array();
$tdatattlaction_notes[".inlineAddFields"][] = "ttlactions_idttlactions";
$tdatattlaction_notes[".inlineAddFields"][] = "created";
$tdatattlaction_notes[".inlineAddFields"][] = "note_content";

$tdatattlaction_notes[".editFields"] = array();
$tdatattlaction_notes[".editFields"][] = "ttlactions_idttlactions";
$tdatattlaction_notes[".editFields"][] = "created";
$tdatattlaction_notes[".editFields"][] = "note_content";

$tdatattlaction_notes[".inlineEditFields"] = array();
$tdatattlaction_notes[".inlineEditFields"][] = "ttlactions_idttlactions";
$tdatattlaction_notes[".inlineEditFields"][] = "created";
$tdatattlaction_notes[".inlineEditFields"][] = "note_content";

	
//	idnotes
	$fdata = array();
	$fdata["strName"] = "idnotes";
	$fdata["ownerTable"] = "ttlaction_notes";
	$fdata["Label"]="Idnotes"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		$fdata["AutoInc"]=true;
	
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "idnotes";
	
		$fdata["FullName"]= "idnotes";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 1;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		$fdata["bPrinterPage"]=true; 
	
		$fdata["bExportPage"]=true; 
	
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatattlaction_notes["idnotes"]=$fdata;
//	ttlactions_idttlactions
	$fdata = array();
	$fdata["strName"] = "ttlactions_idttlactions";
	$fdata["ownerTable"] = "ttlaction_notes";
	$fdata["Label"]="Ttlactions Idttlactions"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "ttlactions_idttlactions";
	
		$fdata["FullName"]= "ttlactions_idttlactions";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 2;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		$fdata["bInlineAdd"]=true; 
	
		$fdata["bEditPage"]=true; 
	
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		$fdata["bPrinterPage"]=true; 
	
		$fdata["bExportPage"]=true; 
	
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatattlaction_notes["ttlactions_idttlactions"]=$fdata;
//	created
	$fdata = array();
	$fdata["strName"] = "created";
	$fdata["ownerTable"] = "ttlaction_notes";
	$fdata["Label"]="Created"; 
	
		
		
	$fdata["FieldType"]= 7;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Date";
	$fdata["ViewFormat"]= "Short Date";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "created";
	
		$fdata["FullName"]= "created";
	
		
		
		
		
		
				$fdata["Index"]= 3;
		$fdata["DateEditType"] = 13; 
	$fdata["InitialYearFactor"] = 20; 
	$fdata["LastYearFactor"] = 20; 
			
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		$fdata["bInlineAdd"]=true; 
	
		$fdata["bEditPage"]=true; 
	
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		$fdata["bPrinterPage"]=true; 
	
		$fdata["bExportPage"]=true; 
	
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatattlaction_notes["created"]=$fdata;
//	note_content
	$fdata = array();
	$fdata["strName"] = "note_content";
	$fdata["ownerTable"] = "ttlaction_notes";
	$fdata["Label"]="Note Content"; 
	
		
		
	$fdata["FieldType"]= 201;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text area";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "note_content";
	
		$fdata["FullName"]= "note_content";
	
		
		
		
		
		
				$fdata["Index"]= 4;
			$fdata["EditParams"] = "";
			$fdata["EditParams"].= " rows=100";
		$fdata["nRows"] = 100;
			$fdata["EditParams"].= " cols=200";
		$fdata["nCols"] = 200;
		
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		$fdata["bInlineAdd"]=true; 
	
		$fdata["bEditPage"]=true; 
	
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		$fdata["bPrinterPage"]=true; 
	
		$fdata["bExportPage"]=true; 
	
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatattlaction_notes["note_content"]=$fdata;


	
$tables_data["ttlaction_notes"]=&$tdatattlaction_notes;
$field_labels["ttlaction_notes"] = &$fieldLabelsttlaction_notes;
$fieldToolTips["ttlaction_notes"] = &$fieldToolTipsttlaction_notes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ttlaction_notes"] = array();

	
// tables which are master tables for current table (detail)
$masterTablesData["ttlaction_notes"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="ttl_actions";
	$masterTablesData["ttlaction_notes"][$mIndex] = array(
		  "mDataSourceTable"=>"ttl_actions"
		, "mOriginalTable" => $strOriginalDetailsTable
		, "mShortTable" => "ttl_actions"
		, "masterKeys" => array()
		, "detailKeys" => array()
		, "dispChildCount" => "0"
		, "hideChild" => "0"	
		, "dispInfo" => "0"								
		, "previewOnList" => 1
		, "previewOnAdd" => 1
		, "previewOnEdit" => 1
		, "previewOnView" => 1
	);	
		$masterTablesData["ttlaction_notes"][$mIndex]["masterKeys"][]="idttl_actions";
		$masterTablesData["ttlaction_notes"][$mIndex]["detailKeys"][]="ttlactions_idttlactions";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ttlaction_notes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idnotes,   ttlactions_idttlactions,   created,   note_content";
$proto0["m_strFrom"] = "FROM ttlaction_notes";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = "0";
$proto1["m_inBrackets"] = "0";
$proto1["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = "0";
$proto3["m_inBrackets"] = "0";
$proto3["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "idnotes",
	"m_strTable" => "ttlaction_notes"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ttlactions_idttlactions",
	"m_strTable" => "ttlaction_notes"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "created",
	"m_strTable" => "ttlaction_notes"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "note_content",
	"m_strTable" => "ttlaction_notes"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "ttlaction_notes";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "idnotes";
$proto14["m_columns"][] = "ttlactions_idttlactions";
$proto14["m_columns"][] = "created";
$proto14["m_columns"][] = "note_content";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_alias"] = "";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = "0";
$proto15["m_inBrackets"] = "0";
$proto15["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

return $obj;
}
$queryData_ttlaction_notes = createSqlQuery_ttlaction_notes();
$tdatattlaction_notes[".sqlquery"] = $queryData_ttlaction_notes;



$tableEvents["ttlaction_notes"] = new eventsBase;
$tdatattlaction_notes[".hasEvents"] = false;

?>
