<?php
$tdatalastfilenumbers=array();
	$tdatalastfilenumbers[".NumberOfChars"]=80; 
	$tdatalastfilenumbers[".ShortName"]="lastfilenumbers";
	$tdatalastfilenumbers[".OwnerID"]="";
	$tdatalastfilenumbers[".OriginalTable"]="lastfilenumbers";


	
//	field labels
$fieldLabelslastfilenumbers = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslastfilenumbers["English"]=array();
	$fieldToolTipslastfilenumbers["English"]=array();
	$fieldLabelslastfilenumbers["English"]["fileyear"] = "Fileyear";
	$fieldToolTipslastfilenumbers["English"]["fileyear"] = "";
	$fieldLabelslastfilenumbers["English"]["lastfile"] = "Lastfile";
	$fieldToolTipslastfilenumbers["English"]["lastfile"] = "";
	if (count($fieldToolTipslastfilenumbers["English"])){
		$tdatalastfilenumbers[".isUseToolTips"]=true;
	}
}


	
	$tdatalastfilenumbers[".NCSearch"]=true;

	

$tdatalastfilenumbers[".shortTableName"] = "lastfilenumbers";
$tdatalastfilenumbers[".nSecOptions"] = 0;
$tdatalastfilenumbers[".recsPerRowList"] = 1;	
$tdatalastfilenumbers[".tableGroupBy"] = "0";
$tdatalastfilenumbers[".mainTableOwnerID"] = "";
$tdatalastfilenumbers[".moveNext"] = 1;




$tdatalastfilenumbers[".showAddInPopup"] = false;

$tdatalastfilenumbers[".showEditInPopup"] = false;

$tdatalastfilenumbers[".showViewInPopup"] = false;


$tdatalastfilenumbers[".fieldsForRegister"] = array();

$tdatalastfilenumbers[".listAjax"] = false;

	$tdatalastfilenumbers[".audit"] = false;

	$tdatalastfilenumbers[".locking"] = false;
	
$tdatalastfilenumbers[".listIcons"] = true;
$tdatalastfilenumbers[".edit"] = true;




$tdatalastfilenumbers[".showSimpleSearchOptions"] = false;

$tdatalastfilenumbers[".showSearchPanel"] = true;


$tdatalastfilenumbers[".isUseAjaxSuggest"] = false;

$tdatalastfilenumbers[".rowHighlite"] = true;


// button handlers file names

$tdatalastfilenumbers[".addPageEvents"] = false;

$tdatalastfilenumbers[".arrKeyFields"][] = "fileyear";

// use datepicker for search panel
$tdatalastfilenumbers[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdatalastfilenumbers[".isUseTimeForSearch"] = false;

$tdatalastfilenumbers[".isUseiBox"] = false;



	


$tdatalastfilenumbers[".isUseInlineAdd"] = true;

$tdatalastfilenumbers[".isUseInlineJs"] = $tdatalastfilenumbers[".isUseInlineAdd"] || $tdatalastfilenumbers[".isUseInlineEdit"];

$tdatalastfilenumbers[".allSearchFields"] = array();







$tdatalastfilenumbers[".isTableType"] = "list";


	

$tdatalastfilenumbers[".isDisplayLoading"] = true;

$tdatalastfilenumbers[".isResizeColumns"] = true;

// Access doesn't support subqueries from the same table as main
$tdatalastfilenumbers[".subQueriesSupAccess"] = true;





$tdatalastfilenumbers[".pageSize"] = 60;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdatalastfilenumbers[".strOrderBy"] = $gstrOrderBy;
	
$tdatalastfilenumbers[".orderindexes"] = array();

$tdatalastfilenumbers[".sqlHead"] = "SELECT fileyear,   lastfile";
$tdatalastfilenumbers[".sqlFrom"] = "FROM lastfilenumbers";
$tdatalastfilenumbers[".sqlWhereExpr"] = "";
$tdatalastfilenumbers[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalastfilenumbers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalastfilenumbers[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "fileyear";
	$tdatalastfilenumbers[".Keys"] = $tableKeys;

$tdatalastfilenumbers[".listFields"] = array();
$tdatalastfilenumbers[".listFields"][] = "fileyear";
$tdatalastfilenumbers[".listFields"][] = "lastfile";

$tdatalastfilenumbers[".addFields"] = array();
$tdatalastfilenumbers[".addFields"][] = "fileyear";
$tdatalastfilenumbers[".addFields"][] = "lastfile";

$tdatalastfilenumbers[".inlineAddFields"] = array();
$tdatalastfilenumbers[".inlineAddFields"][] = "fileyear";
$tdatalastfilenumbers[".inlineAddFields"][] = "lastfile";

$tdatalastfilenumbers[".editFields"] = array();
$tdatalastfilenumbers[".editFields"][] = "fileyear";
$tdatalastfilenumbers[".editFields"][] = "lastfile";

$tdatalastfilenumbers[".inlineEditFields"] = array();

	
//	fileyear
	$fdata = array();
	$fdata["strName"] = "fileyear";
	$fdata["ownerTable"] = "lastfilenumbers";
	$fdata["Label"]="Fileyear"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "fileyear";
	
		$fdata["FullName"]= "fileyear";
	
		
		
		
		
		
				$fdata["Index"]= 1;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=4";
		
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		$fdata["bInlineAdd"]=true; 
	
		$fdata["bEditPage"]=true; 
	
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatalastfilenumbers["fileyear"]=$fdata;
//	lastfile
	$fdata = array();
	$fdata["strName"] = "lastfile";
	$fdata["ownerTable"] = "lastfilenumbers";
	$fdata["Label"]="Lastfile"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "lastfile";
	
		$fdata["FullName"]= "lastfile";
	
		
		
		
		
		
				$fdata["Index"]= 2;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=7";
		
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		$fdata["bInlineAdd"]=true; 
	
		$fdata["bEditPage"]=true; 
	
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatalastfilenumbers["lastfile"]=$fdata;


	
$tables_data["lastfilenumbers"]=&$tdatalastfilenumbers;
$field_labels["lastfilenumbers"] = &$fieldLabelslastfilenumbers;
$fieldToolTips["lastfilenumbers"] = &$fieldToolTipslastfilenumbers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["lastfilenumbers"] = array();

	
// tables which are master tables for current table (detail)
$masterTablesData["lastfilenumbers"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_lastfilenumbers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "fileyear,   lastfile";
$proto0["m_strFrom"] = "FROM lastfilenumbers";
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
	"m_strName" => "fileyear",
	"m_strTable" => "lastfilenumbers"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "lastfile",
	"m_strTable" => "lastfilenumbers"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "lastfilenumbers";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "fileyear";
$proto10["m_columns"][] = "lastfile";
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
$queryData_lastfilenumbers = createSqlQuery_lastfilenumbers();
$tdatalastfilenumbers[".sqlquery"] = $queryData_lastfilenumbers;



include_once(getabspath("include/lastfilenumbers_events.php"));
$tableEvents["lastfilenumbers"] = new eventclass_lastfilenumbers;
$tdatalastfilenumbers[".hasEvents"] = true;

?>
