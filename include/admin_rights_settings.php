<?php
$tdataadmin_rights=array();
	$tdataadmin_rights[".NumberOfChars"]=80; 
	$tdataadmin_rights[".ShortName"]="admin_rights";
	$tdataadmin_rights[".OwnerID"]="";
	$tdataadmin_rights[".OriginalTable"]="titlestwo1_ugrights";


	
//	field labels
$fieldLabelsadmin_rights = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadmin_rights["English"]=array();
	$fieldToolTipsadmin_rights["English"]=array();
	$fieldLabelsadmin_rights["English"]["TableName"] = "Table Name";
	$fieldToolTipsadmin_rights["English"]["TableName"] = "";
	$fieldLabelsadmin_rights["English"]["GroupID"] = "Group ID";
	$fieldToolTipsadmin_rights["English"]["GroupID"] = "";
	$fieldLabelsadmin_rights["English"]["AccessMask"] = "Access Mask";
	$fieldToolTipsadmin_rights["English"]["AccessMask"] = "";
	if (count($fieldToolTipsadmin_rights["English"])){
		$tdataadmin_rights[".isUseToolTips"]=true;
	}
}


	
	$tdataadmin_rights[".NCSearch"]=true;

	

$tdataadmin_rights[".shortTableName"] = "admin_rights";
$tdataadmin_rights[".nSecOptions"] = 0;
$tdataadmin_rights[".recsPerRowList"] = 1;	
$tdataadmin_rights[".tableGroupBy"] = "0";
$tdataadmin_rights[".mainTableOwnerID"] = "";
$tdataadmin_rights[".moveNext"] = 1;




$tdataadmin_rights[".showAddInPopup"] = false;

$tdataadmin_rights[".showEditInPopup"] = false;

$tdataadmin_rights[".showViewInPopup"] = false;


$tdataadmin_rights[".fieldsForRegister"] = array();

$tdataadmin_rights[".listAjax"] = false;

	$tdataadmin_rights[".audit"] = false;

	$tdataadmin_rights[".locking"] = false;
	
$tdataadmin_rights[".listIcons"] = true;




$tdataadmin_rights[".showSimpleSearchOptions"] = false;

$tdataadmin_rights[".showSearchPanel"] = true;


if (isMobile()){
$tdataadmin_rights[".isUseAjaxSuggest"] = false;
}else {
$tdataadmin_rights[".isUseAjaxSuggest"] = true;
}

$tdataadmin_rights[".rowHighlite"] = true;


// button handlers file names

$tdataadmin_rights[".addPageEvents"] = false;


// use datepicker for search panel
$tdataadmin_rights[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdataadmin_rights[".isUseTimeForSearch"] = false;

$tdataadmin_rights[".isUseiBox"] = false;



	



$tdataadmin_rights[".isUseInlineJs"] = $tdataadmin_rights[".isUseInlineAdd"] || $tdataadmin_rights[".isUseInlineEdit"];

$tdataadmin_rights[".allSearchFields"] = array();



$tdataadmin_rights[".googleLikeFields"][] = "TableName";
$tdataadmin_rights[".googleLikeFields"][] = "GroupID";
$tdataadmin_rights[".googleLikeFields"][] = "AccessMask";



$tdataadmin_rights[".advSearchFields"][] = "TableName";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("TableName", $tdataadmin_rights[".allSearchFields"])) 
{
	$tdataadmin_rights[".allSearchFields"][] = "TableName";	
}
$tdataadmin_rights[".advSearchFields"][] = "GroupID";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("GroupID", $tdataadmin_rights[".allSearchFields"])) 
{
	$tdataadmin_rights[".allSearchFields"][] = "GroupID";	
}
$tdataadmin_rights[".advSearchFields"][] = "AccessMask";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("AccessMask", $tdataadmin_rights[".allSearchFields"])) 
{
	$tdataadmin_rights[".allSearchFields"][] = "AccessMask";	
}

$tdataadmin_rights[".isTableType"] = "list";


	

$tdataadmin_rights[".isDisplayLoading"] = true;


// Access doesn't support subqueries from the same table as main
$tdataadmin_rights[".subQueriesSupAccess"] = true;





$tdataadmin_rights[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdataadmin_rights[".strOrderBy"] = $gstrOrderBy;
	
$tdataadmin_rights[".orderindexes"] = array();

$tdataadmin_rights[".sqlHead"] = "SELECT TableName,   GroupID,   AccessMask";
$tdataadmin_rights[".sqlFrom"] = "FROM titlestwo1_ugrights";
$tdataadmin_rights[".sqlWhereExpr"] = "";
$tdataadmin_rights[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_rights[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_rights[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tdataadmin_rights[".Keys"] = $tableKeys;

$tdataadmin_rights[".listFields"] = array();

$tdataadmin_rights[".addFields"] = array();

$tdataadmin_rights[".inlineAddFields"] = array();

$tdataadmin_rights[".editFields"] = array();

$tdataadmin_rights[".inlineEditFields"] = array();

	
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
		
		
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				
		
				
		
		
		
			$tdataadmin_rights["TableName"]=$fdata;
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
			
		
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
		//End validation
	
				
		
				
		
		
		
			$tdataadmin_rights["GroupID"]=$fdata;
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
		
		
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				
		
				
		
		
		
			$tdataadmin_rights["AccessMask"]=$fdata;


	
$tables_data["admin_rights"]=&$tdataadmin_rights;
$field_labels["admin_rights"] = &$fieldLabelsadmin_rights;
$fieldToolTips["admin_rights"] = &$fieldToolTipsadmin_rights;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_rights"] = array();

	
// tables which are master tables for current table (detail)
$masterTablesData["admin_rights"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_admin_rights()
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
$queryData_admin_rights = createSqlQuery_admin_rights();
$tdataadmin_rights[".sqlquery"] = $queryData_admin_rights;



$tableEvents["admin_rights"] = new eventsBase;
$tdataadmin_rights[".hasEvents"] = false;

?>
