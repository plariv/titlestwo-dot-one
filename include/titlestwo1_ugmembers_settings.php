<?php
$tdatatitlestwo1_ugmembers=array();
	$tdatatitlestwo1_ugmembers[".NumberOfChars"]=80; 
	$tdatatitlestwo1_ugmembers[".ShortName"]="titlestwo1_ugmembers";
	$tdatatitlestwo1_ugmembers[".OwnerID"]="";
	$tdatatitlestwo1_ugmembers[".OriginalTable"]="titlestwo1_ugmembers";


	
//	field labels
$fieldLabelstitlestwo1_ugmembers = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstitlestwo1_ugmembers["English"]=array();
	$fieldToolTipstitlestwo1_ugmembers["English"]=array();
	$fieldLabelstitlestwo1_ugmembers["English"]["UserName"] = "User Name";
	$fieldToolTipstitlestwo1_ugmembers["English"]["UserName"] = "";
	$fieldLabelstitlestwo1_ugmembers["English"]["GroupID"] = "Group ID";
	$fieldToolTipstitlestwo1_ugmembers["English"]["GroupID"] = "";
	if (count($fieldToolTipstitlestwo1_ugmembers["English"])){
		$tdatatitlestwo1_ugmembers[".isUseToolTips"]=true;
	}
}


	
	$tdatatitlestwo1_ugmembers[".NCSearch"]=true;

	

$tdatatitlestwo1_ugmembers[".shortTableName"] = "titlestwo1_ugmembers";
$tdatatitlestwo1_ugmembers[".nSecOptions"] = 0;
$tdatatitlestwo1_ugmembers[".recsPerRowList"] = 1;	
$tdatatitlestwo1_ugmembers[".tableGroupBy"] = "0";
$tdatatitlestwo1_ugmembers[".mainTableOwnerID"] = "";
$tdatatitlestwo1_ugmembers[".moveNext"] = 1;




$tdatatitlestwo1_ugmembers[".showAddInPopup"] = false;

$tdatatitlestwo1_ugmembers[".showEditInPopup"] = false;

$tdatatitlestwo1_ugmembers[".showViewInPopup"] = false;


$tdatatitlestwo1_ugmembers[".fieldsForRegister"] = array();

$tdatatitlestwo1_ugmembers[".listAjax"] = false;

	$tdatatitlestwo1_ugmembers[".audit"] = false;

	$tdatatitlestwo1_ugmembers[".locking"] = false;
	
$tdatatitlestwo1_ugmembers[".listIcons"] = true;

$tdatatitlestwo1_ugmembers[".exportTo"] = true;

$tdatatitlestwo1_ugmembers[".printFriendly"] = true;


$tdatatitlestwo1_ugmembers[".showSimpleSearchOptions"] = false;

$tdatatitlestwo1_ugmembers[".showSearchPanel"] = true;


if (isMobile()){
$tdatatitlestwo1_ugmembers[".isUseAjaxSuggest"] = false;
}else {
$tdatatitlestwo1_ugmembers[".isUseAjaxSuggest"] = true;
}

$tdatatitlestwo1_ugmembers[".rowHighlite"] = true;


// button handlers file names

$tdatatitlestwo1_ugmembers[".addPageEvents"] = false;

$tdatatitlestwo1_ugmembers[".arrKeyFields"][] = "UserName";

// use datepicker for search panel
$tdatatitlestwo1_ugmembers[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdatatitlestwo1_ugmembers[".isUseTimeForSearch"] = false;

$tdatatitlestwo1_ugmembers[".isUseiBox"] = false;



	



$tdatatitlestwo1_ugmembers[".isUseInlineJs"] = $tdatatitlestwo1_ugmembers[".isUseInlineAdd"] || $tdatatitlestwo1_ugmembers[".isUseInlineEdit"];

$tdatatitlestwo1_ugmembers[".allSearchFields"] = array();

$tdatatitlestwo1_ugmembers[".globSearchFields"][] = "UserName";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("UserName", $tdatatitlestwo1_ugmembers[".allSearchFields"]))
{
	$tdatatitlestwo1_ugmembers[".allSearchFields"][] = "UserName";	
}
$tdatatitlestwo1_ugmembers[".globSearchFields"][] = "GroupID";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("GroupID", $tdatatitlestwo1_ugmembers[".allSearchFields"]))
{
	$tdatatitlestwo1_ugmembers[".allSearchFields"][] = "GroupID";	
}


$tdatatitlestwo1_ugmembers[".googleLikeFields"][] = "UserName";
$tdatatitlestwo1_ugmembers[".googleLikeFields"][] = "GroupID";



$tdatatitlestwo1_ugmembers[".advSearchFields"][] = "UserName";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("UserName", $tdatatitlestwo1_ugmembers[".allSearchFields"])) 
{
	$tdatatitlestwo1_ugmembers[".allSearchFields"][] = "UserName";	
}
$tdatatitlestwo1_ugmembers[".advSearchFields"][] = "GroupID";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("GroupID", $tdatatitlestwo1_ugmembers[".allSearchFields"])) 
{
	$tdatatitlestwo1_ugmembers[".allSearchFields"][] = "GroupID";	
}

$tdatatitlestwo1_ugmembers[".isTableType"] = "list";


	

$tdatatitlestwo1_ugmembers[".isDisplayLoading"] = true;


// Access doesn't support subqueries from the same table as main
$tdatatitlestwo1_ugmembers[".subQueriesSupAccess"] = true;





$tdatatitlestwo1_ugmembers[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdatatitlestwo1_ugmembers[".strOrderBy"] = $gstrOrderBy;
	
$tdatatitlestwo1_ugmembers[".orderindexes"] = array();

$tdatatitlestwo1_ugmembers[".sqlHead"] = "SELECT UserName,   GroupID";
$tdatatitlestwo1_ugmembers[".sqlFrom"] = "FROM titlestwo1_ugmembers";
$tdatatitlestwo1_ugmembers[".sqlWhereExpr"] = "";
$tdatatitlestwo1_ugmembers[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatitlestwo1_ugmembers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatitlestwo1_ugmembers[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "UserName";
	$tdatatitlestwo1_ugmembers[".Keys"] = $tableKeys;

$tdatatitlestwo1_ugmembers[".listFields"] = array();
$tdatatitlestwo1_ugmembers[".listFields"][] = "UserName";
$tdatatitlestwo1_ugmembers[".listFields"][] = "GroupID";

$tdatatitlestwo1_ugmembers[".addFields"] = array();
$tdatatitlestwo1_ugmembers[".addFields"][] = "UserName";
$tdatatitlestwo1_ugmembers[".addFields"][] = "GroupID";

$tdatatitlestwo1_ugmembers[".inlineAddFields"] = array();
$tdatatitlestwo1_ugmembers[".inlineAddFields"][] = "UserName";
$tdatatitlestwo1_ugmembers[".inlineAddFields"][] = "GroupID";

$tdatatitlestwo1_ugmembers[".editFields"] = array();
$tdatatitlestwo1_ugmembers[".editFields"][] = "UserName";
$tdatatitlestwo1_ugmembers[".editFields"][] = "GroupID";

$tdatatitlestwo1_ugmembers[".inlineEditFields"] = array();
$tdatatitlestwo1_ugmembers[".inlineEditFields"][] = "UserName";
$tdatatitlestwo1_ugmembers[".inlineEditFields"][] = "GroupID";

	
//	UserName
	$fdata = array();
	$fdata["strName"] = "UserName";
	$fdata["ownerTable"] = "titlestwo1_ugmembers";
	$fdata["Label"]="User Name"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "UserName";
	
		$fdata["FullName"]= "UserName";
	
		
		
		
		
		
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
	
		
				
		
		
		
			$tdatatitlestwo1_ugmembers["UserName"]=$fdata;
//	GroupID
	$fdata = array();
	$fdata["strName"] = "GroupID";
	$fdata["ownerTable"] = "titlestwo1_ugmembers";
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
	
		
				
		
		
		
			$tdatatitlestwo1_ugmembers["GroupID"]=$fdata;


	
$tables_data["titlestwo1_ugmembers"]=&$tdatatitlestwo1_ugmembers;
$field_labels["titlestwo1_ugmembers"] = &$fieldLabelstitlestwo1_ugmembers;
$fieldToolTips["titlestwo1_ugmembers"] = &$fieldToolTipstitlestwo1_ugmembers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["titlestwo1_ugmembers"] = array();

	
// tables which are master tables for current table (detail)
$masterTablesData["titlestwo1_ugmembers"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_titlestwo1_ugmembers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "UserName,   GroupID";
$proto0["m_strFrom"] = "FROM titlestwo1_ugmembers";
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
	"m_strName" => "UserName",
	"m_strTable" => "titlestwo1_ugmembers"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "GroupID",
	"m_strTable" => "titlestwo1_ugmembers"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "titlestwo1_ugmembers";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "UserName";
$proto10["m_columns"][] = "GroupID";
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
$queryData_titlestwo1_ugmembers = createSqlQuery_titlestwo1_ugmembers();
$tdatatitlestwo1_ugmembers[".sqlquery"] = $queryData_titlestwo1_ugmembers;



$tableEvents["titlestwo1_ugmembers"] = new eventsBase;
$tdatatitlestwo1_ugmembers[".hasEvents"] = false;

?>
