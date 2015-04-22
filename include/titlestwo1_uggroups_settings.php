<?php
$tdatatitlestwo1_uggroups=array();
	$tdatatitlestwo1_uggroups[".NumberOfChars"]=80; 
	$tdatatitlestwo1_uggroups[".ShortName"]="titlestwo1_uggroups";
	$tdatatitlestwo1_uggroups[".OwnerID"]="";
	$tdatatitlestwo1_uggroups[".OriginalTable"]="titlestwo1_uggroups";


	
//	field labels
$fieldLabelstitlestwo1_uggroups = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstitlestwo1_uggroups["English"]=array();
	$fieldToolTipstitlestwo1_uggroups["English"]=array();
	$fieldLabelstitlestwo1_uggroups["English"]["GroupID"] = "Group ID";
	$fieldToolTipstitlestwo1_uggroups["English"]["GroupID"] = "";
	$fieldLabelstitlestwo1_uggroups["English"]["Label"] = "Label";
	$fieldToolTipstitlestwo1_uggroups["English"]["Label"] = "";
	if (count($fieldToolTipstitlestwo1_uggroups["English"])){
		$tdatatitlestwo1_uggroups[".isUseToolTips"]=true;
	}
}


	
	$tdatatitlestwo1_uggroups[".NCSearch"]=true;

	

$tdatatitlestwo1_uggroups[".shortTableName"] = "titlestwo1_uggroups";
$tdatatitlestwo1_uggroups[".nSecOptions"] = 0;
$tdatatitlestwo1_uggroups[".recsPerRowList"] = 1;	
$tdatatitlestwo1_uggroups[".tableGroupBy"] = "0";
$tdatatitlestwo1_uggroups[".mainTableOwnerID"] = "";
$tdatatitlestwo1_uggroups[".moveNext"] = 1;




$tdatatitlestwo1_uggroups[".showAddInPopup"] = false;

$tdatatitlestwo1_uggroups[".showEditInPopup"] = false;

$tdatatitlestwo1_uggroups[".showViewInPopup"] = false;


$tdatatitlestwo1_uggroups[".fieldsForRegister"] = array();

$tdatatitlestwo1_uggroups[".listAjax"] = false;

	$tdatatitlestwo1_uggroups[".audit"] = false;

	$tdatatitlestwo1_uggroups[".locking"] = false;
	
$tdatatitlestwo1_uggroups[".listIcons"] = true;
$tdatatitlestwo1_uggroups[".edit"] = true;
$tdatatitlestwo1_uggroups[".view"] = true;

$tdatatitlestwo1_uggroups[".exportTo"] = true;

$tdatatitlestwo1_uggroups[".printFriendly"] = true;

$tdatatitlestwo1_uggroups[".delete"] = true;

$tdatatitlestwo1_uggroups[".showSimpleSearchOptions"] = false;

$tdatatitlestwo1_uggroups[".showSearchPanel"] = true;


if (isMobile()){
$tdatatitlestwo1_uggroups[".isUseAjaxSuggest"] = false;
}else {
$tdatatitlestwo1_uggroups[".isUseAjaxSuggest"] = true;
}

$tdatatitlestwo1_uggroups[".rowHighlite"] = true;


// button handlers file names

$tdatatitlestwo1_uggroups[".addPageEvents"] = false;

$tdatatitlestwo1_uggroups[".arrKeyFields"][] = "GroupID";

// use datepicker for search panel
$tdatatitlestwo1_uggroups[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdatatitlestwo1_uggroups[".isUseTimeForSearch"] = false;

$tdatatitlestwo1_uggroups[".isUseiBox"] = false;



	



$tdatatitlestwo1_uggroups[".isUseInlineJs"] = $tdatatitlestwo1_uggroups[".isUseInlineAdd"] || $tdatatitlestwo1_uggroups[".isUseInlineEdit"];

$tdatatitlestwo1_uggroups[".allSearchFields"] = array();

$tdatatitlestwo1_uggroups[".globSearchFields"][] = "GroupID";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("GroupID", $tdatatitlestwo1_uggroups[".allSearchFields"]))
{
	$tdatatitlestwo1_uggroups[".allSearchFields"][] = "GroupID";	
}
$tdatatitlestwo1_uggroups[".globSearchFields"][] = "Label";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Label", $tdatatitlestwo1_uggroups[".allSearchFields"]))
{
	$tdatatitlestwo1_uggroups[".allSearchFields"][] = "Label";	
}


$tdatatitlestwo1_uggroups[".googleLikeFields"][] = "GroupID";
$tdatatitlestwo1_uggroups[".googleLikeFields"][] = "Label";



$tdatatitlestwo1_uggroups[".advSearchFields"][] = "GroupID";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("GroupID", $tdatatitlestwo1_uggroups[".allSearchFields"])) 
{
	$tdatatitlestwo1_uggroups[".allSearchFields"][] = "GroupID";	
}
$tdatatitlestwo1_uggroups[".advSearchFields"][] = "Label";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Label", $tdatatitlestwo1_uggroups[".allSearchFields"])) 
{
	$tdatatitlestwo1_uggroups[".allSearchFields"][] = "Label";	
}

$tdatatitlestwo1_uggroups[".isTableType"] = "list";


	

$tdatatitlestwo1_uggroups[".isDisplayLoading"] = true;


// Access doesn't support subqueries from the same table as main
$tdatatitlestwo1_uggroups[".subQueriesSupAccess"] = true;





$tdatatitlestwo1_uggroups[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdatatitlestwo1_uggroups[".strOrderBy"] = $gstrOrderBy;
	
$tdatatitlestwo1_uggroups[".orderindexes"] = array();

$tdatatitlestwo1_uggroups[".sqlHead"] = "SELECT GroupID,   `Label`";
$tdatatitlestwo1_uggroups[".sqlFrom"] = "FROM titlestwo1_uggroups";
$tdatatitlestwo1_uggroups[".sqlWhereExpr"] = "";
$tdatatitlestwo1_uggroups[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatitlestwo1_uggroups[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatitlestwo1_uggroups[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "GroupID";
	$tdatatitlestwo1_uggroups[".Keys"] = $tableKeys;

$tdatatitlestwo1_uggroups[".listFields"] = array();
$tdatatitlestwo1_uggroups[".listFields"][] = "GroupID";
$tdatatitlestwo1_uggroups[".listFields"][] = "Label";

$tdatatitlestwo1_uggroups[".addFields"] = array();
$tdatatitlestwo1_uggroups[".addFields"][] = "Label";

$tdatatitlestwo1_uggroups[".inlineAddFields"] = array();
$tdatatitlestwo1_uggroups[".inlineAddFields"][] = "Label";

$tdatatitlestwo1_uggroups[".editFields"] = array();
$tdatatitlestwo1_uggroups[".editFields"][] = "Label";

$tdatatitlestwo1_uggroups[".inlineEditFields"] = array();
$tdatatitlestwo1_uggroups[".inlineEditFields"][] = "Label";

	
//	GroupID
	$fdata = array();
	$fdata["strName"] = "GroupID";
	$fdata["ownerTable"] = "titlestwo1_uggroups";
	$fdata["Label"]="Group ID"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		$fdata["AutoInc"]=true;
	
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "GroupID";
	
		$fdata["FullName"]= "GroupID";
	
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
	
		
				
		
		
		
			$tdatatitlestwo1_uggroups["GroupID"]=$fdata;
//	Label
	$fdata = array();
	$fdata["strName"] = "Label";
	$fdata["ownerTable"] = "titlestwo1_uggroups";
	$fdata["Label"]="Label"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Label";
	
		$fdata["FullName"]= "`Label`";
	
		
		
		
		
		
				$fdata["Index"]= 2;
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
	
		
				
		
		
		
			$tdatatitlestwo1_uggroups["Label"]=$fdata;


	
$tables_data["titlestwo1_uggroups"]=&$tdatatitlestwo1_uggroups;
$field_labels["titlestwo1_uggroups"] = &$fieldLabelstitlestwo1_uggroups;
$fieldToolTips["titlestwo1_uggroups"] = &$fieldToolTipstitlestwo1_uggroups;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["titlestwo1_uggroups"] = array();

	
// tables which are master tables for current table (detail)
$masterTablesData["titlestwo1_uggroups"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_titlestwo1_uggroups()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "GroupID,   `Label`";
$proto0["m_strFrom"] = "FROM titlestwo1_uggroups";
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
	"m_strName" => "GroupID",
	"m_strTable" => "titlestwo1_uggroups"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Label",
	"m_strTable" => "titlestwo1_uggroups"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "titlestwo1_uggroups";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "GroupID";
$proto10["m_columns"][] = "Label";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_alias"] = "";
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = "0";
$proto11["m_inBrackets"] = "0";
$proto11["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto11);

$proto9["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto9);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

return $obj;
}
$queryData_titlestwo1_uggroups = createSqlQuery_titlestwo1_uggroups();
$tdatatitlestwo1_uggroups[".sqlquery"] = $queryData_titlestwo1_uggroups;



$tableEvents["titlestwo1_uggroups"] = new eventsBase;
$tdatatitlestwo1_uggroups[".hasEvents"] = false;

?>
