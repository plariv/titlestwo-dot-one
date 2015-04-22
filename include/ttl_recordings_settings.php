<?php
$tdatattl_recordings=array();
	$tdatattl_recordings[".NumberOfChars"]=80; 
	$tdatattl_recordings[".ShortName"]="ttl_recordings";
	$tdatattl_recordings[".OwnerID"]="";
	$tdatattl_recordings[".OriginalTable"]="ttl_recordings";


	
//	field labels
$fieldLabelsttl_recordings = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsttl_recordings["English"]=array();
	$fieldToolTipsttl_recordings["English"]=array();
	$fieldLabelsttl_recordings["English"]["idttl_recordings"] = "Idttl Recordings";
	$fieldToolTipsttl_recordings["English"]["idttl_recordings"] = "";
	$fieldLabelsttl_recordings["English"]["ttl_actions_idttl_actions"] = "Title File Link";
	$fieldToolTipsttl_recordings["English"]["ttl_actions_idttl_actions"] = "";
	$fieldLabelsttl_recordings["English"]["Mortgage"] = "Mortgage";
	$fieldToolTipsttl_recordings["English"]["Mortgage"] = "";
	$fieldLabelsttl_recordings["English"]["Discharge_recorded__Y_N_"] = "Discharge recorded (Y/N)";
	$fieldToolTipsttl_recordings["English"]["Discharge recorded (Y/N)"] = "";
	$fieldLabelsttl_recordings["English"]["Recording_Date"] = "Recording Date";
	$fieldToolTipsttl_recordings["English"]["Recording Date"] = "";
	$fieldLabelsttl_recordings["English"]["Account_Number"] = "Account Number";
	$fieldToolTipsttl_recordings["English"]["Account Number"] = "";
	$fieldLabelsttl_recordings["English"]["Book"] = "Book";
	$fieldToolTipsttl_recordings["English"]["Book"] = "";
	$fieldLabelsttl_recordings["English"]["Page"] = "Page";
	$fieldToolTipsttl_recordings["English"]["Page"] = "";
	if (count($fieldToolTipsttl_recordings["English"])){
		$tdatattl_recordings[".isUseToolTips"]=true;
	}
}


	
	$tdatattl_recordings[".NCSearch"]=true;

	

$tdatattl_recordings[".shortTableName"] = "ttl_recordings";
$tdatattl_recordings[".nSecOptions"] = 0;
$tdatattl_recordings[".recsPerRowList"] = 1;	
$tdatattl_recordings[".tableGroupBy"] = "0";
$tdatattl_recordings[".mainTableOwnerID"] = "";
$tdatattl_recordings[".moveNext"] = 1;




$tdatattl_recordings[".showAddInPopup"] = false;

$tdatattl_recordings[".showEditInPopup"] = false;

$tdatattl_recordings[".showViewInPopup"] = false;


$tdatattl_recordings[".fieldsForRegister"] = array();

$tdatattl_recordings[".listAjax"] = false;

	$tdatattl_recordings[".audit"] = false;

	$tdatattl_recordings[".locking"] = false;
	
$tdatattl_recordings[".listIcons"] = true;
$tdatattl_recordings[".edit"] = true;
$tdatattl_recordings[".view"] = true;



$tdatattl_recordings[".delete"] = true;

$tdatattl_recordings[".showSimpleSearchOptions"] = true;

$tdatattl_recordings[".showSearchPanel"] = true;


if (isMobile()){
$tdatattl_recordings[".isUseAjaxSuggest"] = false;
}else {
$tdatattl_recordings[".isUseAjaxSuggest"] = true;
}

$tdatattl_recordings[".rowHighlite"] = true;


// button handlers file names

$tdatattl_recordings[".addPageEvents"] = false;

$tdatattl_recordings[".arrKeyFields"][] = "idttl_recordings";
$tdatattl_recordings[".arrKeyFields"][] = "ttl_actions_idttl_actions";

// use datepicker for search panel
$tdatattl_recordings[".isUseCalendarForSearch"] = true;

// use timepicker for search panel
$tdatattl_recordings[".isUseTimeForSearch"] = false;

$tdatattl_recordings[".isUseiBox"] = false;



	



$tdatattl_recordings[".isUseInlineJs"] = $tdatattl_recordings[".isUseInlineAdd"] || $tdatattl_recordings[".isUseInlineEdit"];

$tdatattl_recordings[".allSearchFields"] = array();

$tdatattl_recordings[".globSearchFields"][] = "idttl_recordings";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("idttl_recordings", $tdatattl_recordings[".allSearchFields"]))
{
	$tdatattl_recordings[".allSearchFields"][] = "idttl_recordings";	
}
$tdatattl_recordings[".globSearchFields"][] = "Mortgage";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Mortgage", $tdatattl_recordings[".allSearchFields"]))
{
	$tdatattl_recordings[".allSearchFields"][] = "Mortgage";	
}
$tdatattl_recordings[".globSearchFields"][] = "Discharge recorded (Y/N)";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Discharge recorded (Y/N)", $tdatattl_recordings[".allSearchFields"]))
{
	$tdatattl_recordings[".allSearchFields"][] = "Discharge recorded (Y/N)";	
}
$tdatattl_recordings[".globSearchFields"][] = "Recording Date";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Recording Date", $tdatattl_recordings[".allSearchFields"]))
{
	$tdatattl_recordings[".allSearchFields"][] = "Recording Date";	
}
$tdatattl_recordings[".globSearchFields"][] = "Book";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Book", $tdatattl_recordings[".allSearchFields"]))
{
	$tdatattl_recordings[".allSearchFields"][] = "Book";	
}
$tdatattl_recordings[".globSearchFields"][] = "Page";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Page", $tdatattl_recordings[".allSearchFields"]))
{
	$tdatattl_recordings[".allSearchFields"][] = "Page";	
}
$tdatattl_recordings[".globSearchFields"][] = "Account Number";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Account Number", $tdatattl_recordings[".allSearchFields"]))
{
	$tdatattl_recordings[".allSearchFields"][] = "Account Number";	
}
$tdatattl_recordings[".globSearchFields"][] = "ttl_actions_idttl_actions";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ttl_actions_idttl_actions", $tdatattl_recordings[".allSearchFields"]))
{
	$tdatattl_recordings[".allSearchFields"][] = "ttl_actions_idttl_actions";	
}


$tdatattl_recordings[".googleLikeFields"][] = "idttl_recordings";
$tdatattl_recordings[".googleLikeFields"][] = "Mortgage";
$tdatattl_recordings[".googleLikeFields"][] = "Discharge recorded (Y/N)";
$tdatattl_recordings[".googleLikeFields"][] = "Recording Date";
$tdatattl_recordings[".googleLikeFields"][] = "Book";
$tdatattl_recordings[".googleLikeFields"][] = "Page";
$tdatattl_recordings[".googleLikeFields"][] = "Account Number";
$tdatattl_recordings[".googleLikeFields"][] = "ttl_actions_idttl_actions";



$tdatattl_recordings[".advSearchFields"][] = "idttl_recordings";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("idttl_recordings", $tdatattl_recordings[".allSearchFields"])) 
{
	$tdatattl_recordings[".allSearchFields"][] = "idttl_recordings";	
}
$tdatattl_recordings[".advSearchFields"][] = "Mortgage";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Mortgage", $tdatattl_recordings[".allSearchFields"])) 
{
	$tdatattl_recordings[".allSearchFields"][] = "Mortgage";	
}
$tdatattl_recordings[".advSearchFields"][] = "Discharge recorded (Y/N)";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Discharge recorded (Y/N)", $tdatattl_recordings[".allSearchFields"])) 
{
	$tdatattl_recordings[".allSearchFields"][] = "Discharge recorded (Y/N)";	
}
$tdatattl_recordings[".advSearchFields"][] = "Recording Date";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Recording Date", $tdatattl_recordings[".allSearchFields"])) 
{
	$tdatattl_recordings[".allSearchFields"][] = "Recording Date";	
}
$tdatattl_recordings[".advSearchFields"][] = "Book";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Book", $tdatattl_recordings[".allSearchFields"])) 
{
	$tdatattl_recordings[".allSearchFields"][] = "Book";	
}
$tdatattl_recordings[".advSearchFields"][] = "Page";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Page", $tdatattl_recordings[".allSearchFields"])) 
{
	$tdatattl_recordings[".allSearchFields"][] = "Page";	
}
$tdatattl_recordings[".advSearchFields"][] = "Account Number";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Account Number", $tdatattl_recordings[".allSearchFields"])) 
{
	$tdatattl_recordings[".allSearchFields"][] = "Account Number";	
}
$tdatattl_recordings[".advSearchFields"][] = "ttl_actions_idttl_actions";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ttl_actions_idttl_actions", $tdatattl_recordings[".allSearchFields"])) 
{
	$tdatattl_recordings[".allSearchFields"][] = "ttl_actions_idttl_actions";	
}

$tdatattl_recordings[".isTableType"] = "list";


	

$tdatattl_recordings[".isDisplayLoading"] = true;


// Access doesn't support subqueries from the same table as main
$tdatattl_recordings[".subQueriesSupAccess"] = true;





$tdatattl_recordings[".pageSize"] = 60;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdatattl_recordings[".strOrderBy"] = $gstrOrderBy;
	
$tdatattl_recordings[".orderindexes"] = array();

$tdatattl_recordings[".sqlHead"] = "SELECT idttl_recordings,  mort AS Mortgage,  disrec AS `Discharge recorded (Y/N)`,  whenrecorded AS `Recording Date`,  book AS Book,  page AS Page,  account AS `Account Number`,  ttl_actions_idttl_actions";
$tdatattl_recordings[".sqlFrom"] = "FROM ttl_recordings";
$tdatattl_recordings[".sqlWhereExpr"] = "";
$tdatattl_recordings[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 60;
$arrRPP[] = 250;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatattl_recordings[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatattl_recordings[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "idttl_recordings";
	$tableKeys[] = "ttl_actions_idttl_actions";
	$tdatattl_recordings[".Keys"] = $tableKeys;

$tdatattl_recordings[".listFields"] = array();
$tdatattl_recordings[".listFields"][] = "Mortgage";
$tdatattl_recordings[".listFields"][] = "Discharge recorded (Y/N)";
$tdatattl_recordings[".listFields"][] = "Recording Date";
$tdatattl_recordings[".listFields"][] = "Book";
$tdatattl_recordings[".listFields"][] = "Page";
$tdatattl_recordings[".listFields"][] = "Account Number";

$tdatattl_recordings[".addFields"] = array();
$tdatattl_recordings[".addFields"][] = "Mortgage";
$tdatattl_recordings[".addFields"][] = "Discharge recorded (Y/N)";
$tdatattl_recordings[".addFields"][] = "Recording Date";
$tdatattl_recordings[".addFields"][] = "Book";
$tdatattl_recordings[".addFields"][] = "Page";
$tdatattl_recordings[".addFields"][] = "Account Number";

$tdatattl_recordings[".inlineAddFields"] = array();

$tdatattl_recordings[".editFields"] = array();
$tdatattl_recordings[".editFields"][] = "Mortgage";
$tdatattl_recordings[".editFields"][] = "Discharge recorded (Y/N)";
$tdatattl_recordings[".editFields"][] = "Recording Date";
$tdatattl_recordings[".editFields"][] = "Book";
$tdatattl_recordings[".editFields"][] = "Page";
$tdatattl_recordings[".editFields"][] = "Account Number";

$tdatattl_recordings[".inlineEditFields"] = array();

	
//	idttl_recordings
	$fdata = array();
	$fdata["strName"] = "idttl_recordings";
	$fdata["ownerTable"] = "ttl_recordings";
	$fdata["Label"]="Idttl Recordings"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		$fdata["AutoInc"]=true;
	
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "idttl_recordings";
	
		$fdata["FullName"]= "idttl_recordings";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 1;
				$fdata["EditParams"]="";
			
		
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatattl_recordings["idttl_recordings"]=$fdata;
//	Mortgage
	$fdata = array();
	$fdata["strName"] = "Mortgage";
	$fdata["ownerTable"] = "ttl_recordings";
	$fdata["Label"]="Mortgage"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Mortgage";
	
		$fdata["FullName"]= "mort";
	
		
		
		
		
		
				$fdata["Index"]= 2;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		
		$fdata["bEditPage"]=true; 
	
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatattl_recordings["Mortgage"]=$fdata;
//	Discharge recorded (Y/N)
	$fdata = array();
	$fdata["strName"] = "Discharge recorded (Y/N)";
	$fdata["ownerTable"] = "ttl_recordings";
	$fdata["Label"]="Discharge recorded (Y/N)"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Discharge_recorded__Y_N_";
	
		$fdata["FullName"]= "disrec";
	
		
		
		
		
		
				$fdata["Index"]= 3;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		
		$fdata["bEditPage"]=true; 
	
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatattl_recordings["Discharge recorded (Y/N)"]=$fdata;
//	Recording Date
	$fdata = array();
	$fdata["strName"] = "Recording Date";
	$fdata["ownerTable"] = "ttl_recordings";
	$fdata["Label"]="Recording Date"; 
	
		
		
	$fdata["FieldType"]= 135;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Date";
	$fdata["ViewFormat"]= "Short Date";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Recording_Date";
	
		$fdata["FullName"]= "whenrecorded";
	
		
		
		
		
		
				$fdata["Index"]= 4;
		$fdata["DateEditType"] = 13; 
	$fdata["InitialYearFactor"] = 20; 
	$fdata["LastYearFactor"] = 20; 
			
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		
		$fdata["bEditPage"]=true; 
	
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatattl_recordings["Recording Date"]=$fdata;
//	Book
	$fdata = array();
	$fdata["strName"] = "Book";
	$fdata["ownerTable"] = "ttl_recordings";
	$fdata["Label"]="Book"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Book";
	
		$fdata["FullName"]= "book";
	
		
		
		
		
		
				$fdata["Index"]= 5;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=45";
		
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		
		$fdata["bEditPage"]=true; 
	
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatattl_recordings["Book"]=$fdata;
//	Page
	$fdata = array();
	$fdata["strName"] = "Page";
	$fdata["ownerTable"] = "ttl_recordings";
	$fdata["Label"]="Page"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Page";
	
		$fdata["FullName"]= "page";
	
		
		
		
		
		
				$fdata["Index"]= 6;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=45";
		
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		
		$fdata["bEditPage"]=true; 
	
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatattl_recordings["Page"]=$fdata;
//	Account Number
	$fdata = array();
	$fdata["strName"] = "Account Number";
	$fdata["ownerTable"] = "ttl_recordings";
	$fdata["Label"]="Account Number"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Account_Number";
	
		$fdata["FullName"]= "account";
	
		
		
		
		
		
				$fdata["Index"]= 7;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		
		$fdata["bEditPage"]=true; 
	
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatattl_recordings["Account Number"]=$fdata;
//	ttl_actions_idttl_actions
	$fdata = array();
	$fdata["strName"] = "ttl_actions_idttl_actions";
	$fdata["ownerTable"] = "ttl_recordings";
	$fdata["Label"]="Title File Link"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "ttl_actions_idttl_actions";
	
		$fdata["FullName"]= "ttl_actions_idttl_actions";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 8;
				$fdata["EditParams"]="";
			
		
		
		
		
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatattl_recordings["ttl_actions_idttl_actions"]=$fdata;


	
$tables_data["ttl_recordings"]=&$tdatattl_recordings;
$field_labels["ttl_recordings"] = &$fieldLabelsttl_recordings;
$fieldToolTips["ttl_recordings"] = &$fieldToolTipsttl_recordings;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ttl_recordings"] = array();

	
// tables which are master tables for current table (detail)
$masterTablesData["ttl_recordings"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="ttl_actions";
	$masterTablesData["ttl_recordings"][$mIndex] = array(
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
		$masterTablesData["ttl_recordings"][$mIndex]["masterKeys"][]="idttl_actions";
		$masterTablesData["ttl_recordings"][$mIndex]["detailKeys"][]="ttl_actions_idttl_actions";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ttl_recordings()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idttl_recordings,  mort AS Mortgage,  disrec AS `Discharge recorded (Y/N)`,  whenrecorded AS `Recording Date`,  book AS Book,  page AS Page,  account AS `Account Number`,  ttl_actions_idttl_actions";
$proto0["m_strFrom"] = "FROM ttl_recordings";
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
	"m_strName" => "idttl_recordings",
	"m_strTable" => "ttl_recordings"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "mort",
	"m_strTable" => "ttl_recordings"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "Mortgage";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "disrec",
	"m_strTable" => "ttl_recordings"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "Discharge recorded (Y/N)";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "whenrecorded",
	"m_strTable" => "ttl_recordings"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "Recording Date";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "book",
	"m_strTable" => "ttl_recordings"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "Book";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "page",
	"m_strTable" => "ttl_recordings"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "Page";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "account",
	"m_strTable" => "ttl_recordings"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "Account Number";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "ttl_actions_idttl_actions",
	"m_strTable" => "ttl_recordings"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "ttl_recordings";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "idttl_recordings";
$proto22["m_columns"][] = "mort";
$proto22["m_columns"][] = "disrec";
$proto22["m_columns"][] = "whenrecorded";
$proto22["m_columns"][] = "book";
$proto22["m_columns"][] = "page";
$proto22["m_columns"][] = "account";
$proto22["m_columns"][] = "ttl_actions_idttl_actions";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_alias"] = "";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = "0";
$proto23["m_inBrackets"] = "0";
$proto23["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

return $obj;
}
$queryData_ttl_recordings = createSqlQuery_ttl_recordings();
$tdatattl_recordings[".sqlquery"] = $queryData_ttl_recordings;



$tableEvents["ttl_recordings"] = new eventsBase;
$tdatattl_recordings[".hasEvents"] = false;

?>
