<?php
$tdatatitlestwo1_ugrights=array();
	$tdatatitlestwo1_ugrights[".NumberOfChars"]=80; 
	$tdatatitlestwo1_ugrights[".ShortName"]="titlestwo1_ugrights";
	$tdatatitlestwo1_ugrights[".OwnerID"]="";
	$tdatatitlestwo1_ugrights[".OriginalTable"]="titlestwo1_ugrights";


	
//	field labels
$fieldLabelstitlestwo1_ugrights = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstitlestwo1_ugrights["English"]=array();
	$fieldToolTipstitlestwo1_ugrights["English"]=array();
	$fieldLabelstitlestwo1_ugrights["English"]["TableName"] = "Table Name";
	$fieldToolTipstitlestwo1_ugrights["English"]["TableName"] = "";
	$fieldLabelstitlestwo1_ugrights["English"]["GroupID"] = "Group ID";
	$fieldToolTipstitlestwo1_ugrights["English"]["GroupID"] = "";
	$fieldLabelstitlestwo1_ugrights["English"]["AccessMask"] = "Access Mask";
	$fieldToolTipstitlestwo1_ugrights["English"]["AccessMask"] = "";
	if (count($fieldToolTipstitlestwo1_ugrights["English"])){
		$tdatatitlestwo1_ugrights[".isUseToolTips"]=true;
	}
}


	
	$tdatatitlestwo1_ugrights[".NCSearch"]=true;

	

$tdatatitlestwo1_ugrights[".shortTableName"] = "titlestwo1_ugrights";
$tdatatitlestwo1_ugrights[".nSecOptions"] = 0;
$tdatatitlestwo1_ugrights[".recsPerRowList"] = 1;	
$tdatatitlestwo1_ugrights[".tableGroupBy"] = "0";
$tdatatitlestwo1_ugrights[".mainTableOwnerID"] = "";
$tdatatitlestwo1_ugrights[".moveNext"] = 1;




$tdatatitlestwo1_ugrights[".showAddInPopup"] = false;

$tdatatitlestwo1_ugrights[".showEditInPopup"] = false;

$tdatatitlestwo1_ugrights[".showViewInPopup"] = false;


$tdatatitlestwo1_ugrights[".fieldsForRegister"] = array();

$tdatatitlestwo1_ugrights[".listAjax"] = false;

	$tdatatitlestwo1_ugrights[".audit"] = false;

	$tdatatitlestwo1_ugrights[".locking"] = false;
	
$tdatatitlestwo1_ugrights[".listIcons"] = true;




$tdatatitlestwo1_ugrights[".showSimpleSearchOptions"] = false;

$tdatatitlestwo1_ugrights[".showSearchPanel"] = true;


if (isMobile()){
$tdatatitlestwo1_ugrights[".isUseAjaxSuggest"] = false;
}else {
$tdatatitlestwo1_ugrights[".isUseAjaxSuggest"] = true;
}

$tdatatitlestwo1_ugrights[".rowHighlite"] = true;


// button handlers file names

$tdatatitlestwo1_ugrights[".addPageEvents"] = false;


// use datepicker for search panel
$tdatatitlestwo1_ugrights[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdatatitlestwo1_ugrights[".isUseTimeForSearch"] = false;

$tdatatitlestwo1_ugrights[".isUseiBox"] = false;



	



$tdatatitlestwo1_ugrights[".isUseInlineJs"] = $tdatatitlestwo1_ugrights[".isUseInlineAdd"] || $tdatatitlestwo1_ugrights[".isUseInlineEdit"];

$tdatatitlestwo1_ugrights[".allSearchFields"] = array();

$tdatatitlestwo1_ugrights[".globSearchFields"][] = "TableName";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("TableName", $tdatatitlestwo1_ugrights[".allSearchFields"]))
{
	$tdatatitlestwo1_ugrights[".allSearchFields"][] = "TableName";	
}
$tdatatitlestwo1_ugrights[".globSearchFields"][] = "GroupID";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("GroupID", $tdatatitlestwo1_ugrights[".allSearchFields"]))
{
	$tdatatitlestwo1_ugrights[".allSearchFields"][] = "GroupID";	
}
$tdatatitlestwo1_ugrights[".globSearchFields"][] = "AccessMask";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("AccessMask", $tdatatitlestwo1_ugrights[".allSearchFields"]))
{
	$tdatatitlestwo1_ugrights[".allSearchFields"][] = "AccessMask";	
}


$tdatatitlestwo1_ugrights[".googleLikeFields"][] = "TableName";
$tdatatitlestwo1_ugrights[".googleLikeFields"][] = "GroupID";
$tdatatitlestwo1_ugrights[".googleLikeFields"][] = "AccessMask";



$tdatatitlestwo1_ugrights[".advSearchFields"][] = "TableName";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("TableName", $tdatatitlestwo1_ugrights[".allSearchFields"])) 
{
	$tdatatitlestwo1_ugrights[".allSearchFields"][] = "TableName";	
}
$tdatatitlestwo1_ugrights[".advSearchFields"][] = "GroupID";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("GroupID", $tdatatitlestwo1_ugrights[".allSearchFields"])) 
{
	$tdatatitlestwo1_ugrights[".allSearchFields"][] = "GroupID";	
}
$tdatatitlestwo1_ugrights[".advSearchFields"][] = "AccessMask";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("AccessMask", $tdatatitlestwo1_ugrights[".allSearchFields"])) 
{
	$tdatatitlestwo1_ugrights[".allSearchFields"][] = "AccessMask";	
}

$tdatatitlestwo1_ugrights[".isTableType"] = "list";


	

$tdatatitlestwo1_ugrights[".isDisplayLoading"] = true;


// Access doesn't support subqueries from the same table as main
$tdatatitlestwo1_ugrights[".subQueriesSupAccess"] = true;





$tdatatitlestwo1_ugrights[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdatatitlestwo1_ugrights[".strOrderBy"] = $gstrOrderBy;
	
$tdatatitlestwo1_ugrights[".orderindexes"] = array();

$tdatatitlestwo1_ugrights[".sqlHead"] = "SELECT TableName,   GroupID,   AccessMask";
$tdatatitlestwo1_ugrights[".sqlFrom"] = "FROM titlestwo1_ugrights";
$tdatatitlestwo1_ugrights[".sqlWhereExpr"] = "";
$tdatatitlestwo1_ugrights[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatitlestwo1_ugrights[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatitlestwo1_ugrights[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tdatatitlestwo1_ugrights[".Keys"] = $tableKeys;

$tdatatitlestwo1_ugrights[".listFields"] = array();
$tdatatitlestwo1_ugrights[".listFields"][] = "TableName";
$tdatatitlestwo1_ugrights[".listFields"][] = "GroupID";
$tdatatitlestwo1_ugrights[".listFields"][] = "AccessMask";

$tdatatitlestwo1_ugrights[".addFields"] = array();
$tdatatitlestwo1_ugrights[".addFields"][] = "TableName";
$tdatatitlestwo1_ugrights[".addFields"][] = "GroupID";
$tdatatitlestwo1_ugrights[".addFields"][] = "AccessMask";

$tdatatitlestwo1_ugrights[".inlineAddFields"] = array();
$tdatatitlestwo1_ugrights[".inlineAddFields"][] = "TableName";
$tdatatitlestwo1_ugrights[".inlineAddFields"][] = "GroupID";
$tdatatitlestwo1_ugrights[".inlineAddFields"][] = "AccessMask";

$tdatatitlestwo1_ugrights[".editFields"] = array();
$tdatatitlestwo1_ugrights[".editFields"][] = "TableName";
$tdatatitlestwo1_ugrights[".editFields"][] = "GroupID";
$tdatatitlestwo1_ugrights[".editFields"][] = "AccessMask";

$tdatatitlestwo1_ugrights[".inlineEditFields"] = array();
$tdatatitlestwo1_ugrights[".inlineEditFields"][] = "TableName";
$tdatatitlestwo1_ugrights[".inlineEditFields"][] = "GroupID";
$tdatatitlestwo1_ugrights[".inlineEditFields"][] = "AccessMask";

	
//	TableName
	$fdata = array();
	$fdata["strName"] = "TableName";
	$fdata["ownerTable"] = "titlestwo1_ugrights";
	$fdata["Label"]="Table Name"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "TableName";
	
		$fdata["FullName"]= "TableName";
	
		
		
		
		
		
				$fdata["Index"]= 1;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=50";
		
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
	
		
				
		
		
		
			$tdatatitlestwo1_ugrights["TableName"]=$fdata;
//	GroupID
	$fdata = array();
	$fdata["strName"] = "GroupID";
	$fdata["ownerTable"] = "titlestwo1_ugrights";
	$fdata["Label"]="Group ID"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "GroupID";
	
		$fdata["FullName"]= "GroupID";
	
		
		
		
		
		
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
						
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatatitlestwo1_ugrights["GroupID"]=$fdata;
//	AccessMask
	$fdata = array();
	$fdata["strName"] = "AccessMask";
	$fdata["ownerTable"] = "titlestwo1_ugrights";
	$fdata["Label"]="Access Mask"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "AccessMask";
	
		$fdata["FullName"]= "AccessMask";
	
		
		
		
		
		
				$fdata["Index"]= 3;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=10";
		
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
	
		
				
		
		
		
			$tdatatitlestwo1_ugrights["AccessMask"]=$fdata;


	
$tables_data["titlestwo1_ugrights"]=&$tdatatitlestwo1_ugrights;
$field_labels["titlestwo1_ugrights"] = &$fieldLabelstitlestwo1_ugrights;
$fieldToolTips["titlestwo1_ugrights"] = &$fieldToolTipstitlestwo1_ugrights;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["titlestwo1_ugrights"] = array();

	
// tables which are master tables for current table (detail)
$masterTablesData["titlestwo1_ugrights"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_titlestwo1_ugrights()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TableName,   GroupID,   AccessMask";
$proto0["m_strFrom"] = "FROM titlestwo1_ugrights";
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
	"m_strName" => "TableName",
	"m_strTable" => "titlestwo1_ugrights"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "GroupID",
	"m_strTable" => "titlestwo1_ugrights"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "AccessMask",
	"m_strTable" => "titlestwo1_ugrights"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "titlestwo1_ugrights";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "TableName";
$proto12["m_columns"][] = "GroupID";
$proto12["m_columns"][] = "AccessMask";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_alias"] = "";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = "0";
$proto13["m_inBrackets"] = "0";
$proto13["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

return $obj;
}
$queryData_titlestwo1_ugrights = createSqlQuery_titlestwo1_ugrights();
$tdatatitlestwo1_ugrights[".sqlquery"] = $queryData_titlestwo1_ugrights;



$tableEvents["titlestwo1_ugrights"] = new eventsBase;
$tdatatitlestwo1_ugrights[".hasEvents"] = false;

?>
