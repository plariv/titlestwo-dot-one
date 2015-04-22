<?php
$tdataparties=array();
	$tdataparties[".NumberOfChars"]=80; 
	$tdataparties[".ShortName"]="parties";
	$tdataparties[".OwnerID"]="";
	$tdataparties[".OriginalTable"]="parties";


	
//	field labels
$fieldLabelsparties = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsparties["English"]=array();
	$fieldToolTipsparties["English"]=array();
	$fieldLabelsparties["English"]["Title"] = "Title";
	$fieldToolTipsparties["English"]["Title"] = "";
	$fieldLabelsparties["English"]["Contact_Name"] = "Contact Name";
	$fieldToolTipsparties["English"]["Contact Name"] = "";
	$fieldLabelsparties["English"]["Company"] = "Company";
	$fieldToolTipsparties["English"]["Company"] = "";
	$fieldLabelsparties["English"]["Address_line_1"] = "Address line 1";
	$fieldToolTipsparties["English"]["Address line 1"] = "";
	$fieldLabelsparties["English"]["Address_line_2"] = "Address line 2";
	$fieldToolTipsparties["English"]["Address line 2"] = "";
	$fieldLabelsparties["English"]["ZIP_Code"] = "ZIP Code";
	$fieldToolTipsparties["English"]["ZIP Code"] = "";
	$fieldLabelsparties["English"]["Name"] = "Name";
	$fieldToolTipsparties["English"]["Name"] = "";
	$fieldLabelsparties["English"]["Phone"] = "Phone";
	$fieldToolTipsparties["English"]["Phone"] = "";
	$fieldLabelsparties["English"]["City"] = "City";
	$fieldToolTipsparties["English"]["City"] = "";
	$fieldLabelsparties["English"]["State"] = "State";
	$fieldToolTipsparties["English"]["State"] = "";
	$fieldLabelsparties["English"]["idparties"] = "Idparties";
	$fieldToolTipsparties["English"]["idparties"] = "";
	if (count($fieldToolTipsparties["English"])){
		$tdataparties[".isUseToolTips"]=true;
	}
}


	
	$tdataparties[".NCSearch"]=true;

	

$tdataparties[".shortTableName"] = "parties";
$tdataparties[".nSecOptions"] = 0;
$tdataparties[".recsPerRowList"] = 1;	
$tdataparties[".tableGroupBy"] = "0";
$tdataparties[".mainTableOwnerID"] = "";
$tdataparties[".moveNext"] = 1;




$tdataparties[".showAddInPopup"] = false;

$tdataparties[".showEditInPopup"] = false;

$tdataparties[".showViewInPopup"] = false;


$tdataparties[".fieldsForRegister"] = array();

$tdataparties[".listAjax"] = false;

	$tdataparties[".audit"] = false;

	$tdataparties[".locking"] = false;
	
$tdataparties[".listIcons"] = true;
$tdataparties[".edit"] = true;




$tdataparties[".showSimpleSearchOptions"] = true;

$tdataparties[".showSearchPanel"] = true;


if (isMobile()){
$tdataparties[".isUseAjaxSuggest"] = false;
}else {
$tdataparties[".isUseAjaxSuggest"] = true;
}

$tdataparties[".rowHighlite"] = true;


// button handlers file names

$tdataparties[".addPageEvents"] = false;

$tdataparties[".arrKeyFields"][] = "idparties";

// use datepicker for search panel
$tdataparties[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdataparties[".isUseTimeForSearch"] = false;

$tdataparties[".isUseiBox"] = false;



	

$tdataparties[".useDetailsPreview"] = true;	


$tdataparties[".isUseInlineJs"] = $tdataparties[".isUseInlineAdd"] || $tdataparties[".isUseInlineEdit"];

$tdataparties[".allSearchFields"] = array();

$tdataparties[".globSearchFields"][] = "Name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Name", $tdataparties[".allSearchFields"]))
{
	$tdataparties[".allSearchFields"][] = "Name";	
}
$tdataparties[".globSearchFields"][] = "Title";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Title", $tdataparties[".allSearchFields"]))
{
	$tdataparties[".allSearchFields"][] = "Title";	
}
$tdataparties[".globSearchFields"][] = "Phone";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Phone", $tdataparties[".allSearchFields"]))
{
	$tdataparties[".allSearchFields"][] = "Phone";	
}
$tdataparties[".globSearchFields"][] = "Contact Name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Contact Name", $tdataparties[".allSearchFields"]))
{
	$tdataparties[".allSearchFields"][] = "Contact Name";	
}
$tdataparties[".globSearchFields"][] = "Company";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Company", $tdataparties[".allSearchFields"]))
{
	$tdataparties[".allSearchFields"][] = "Company";	
}
$tdataparties[".globSearchFields"][] = "Address line 1";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Address line 1", $tdataparties[".allSearchFields"]))
{
	$tdataparties[".allSearchFields"][] = "Address line 1";	
}
$tdataparties[".globSearchFields"][] = "Address line 2";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Address line 2", $tdataparties[".allSearchFields"]))
{
	$tdataparties[".allSearchFields"][] = "Address line 2";	
}
$tdataparties[".globSearchFields"][] = "City";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("City", $tdataparties[".allSearchFields"]))
{
	$tdataparties[".allSearchFields"][] = "City";	
}
$tdataparties[".globSearchFields"][] = "State";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("State", $tdataparties[".allSearchFields"]))
{
	$tdataparties[".allSearchFields"][] = "State";	
}
$tdataparties[".globSearchFields"][] = "ZIP Code";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ZIP Code", $tdataparties[".allSearchFields"]))
{
	$tdataparties[".allSearchFields"][] = "ZIP Code";	
}


$tdataparties[".googleLikeFields"][] = "Name";
$tdataparties[".googleLikeFields"][] = "Title";
$tdataparties[".googleLikeFields"][] = "Phone";
$tdataparties[".googleLikeFields"][] = "Contact Name";
$tdataparties[".googleLikeFields"][] = "Company";
$tdataparties[".googleLikeFields"][] = "Address line 1";
$tdataparties[".googleLikeFields"][] = "Address line 2";
$tdataparties[".googleLikeFields"][] = "City";
$tdataparties[".googleLikeFields"][] = "State";
$tdataparties[".googleLikeFields"][] = "ZIP Code";
$tdataparties[".googleLikeFields"][] = "idparties";



$tdataparties[".advSearchFields"][] = "Name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Name", $tdataparties[".allSearchFields"])) 
{
	$tdataparties[".allSearchFields"][] = "Name";	
}
$tdataparties[".advSearchFields"][] = "Title";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Title", $tdataparties[".allSearchFields"])) 
{
	$tdataparties[".allSearchFields"][] = "Title";	
}
$tdataparties[".advSearchFields"][] = "Phone";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Phone", $tdataparties[".allSearchFields"])) 
{
	$tdataparties[".allSearchFields"][] = "Phone";	
}
$tdataparties[".advSearchFields"][] = "Contact Name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Contact Name", $tdataparties[".allSearchFields"])) 
{
	$tdataparties[".allSearchFields"][] = "Contact Name";	
}
$tdataparties[".advSearchFields"][] = "Company";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Company", $tdataparties[".allSearchFields"])) 
{
	$tdataparties[".allSearchFields"][] = "Company";	
}
$tdataparties[".advSearchFields"][] = "Address line 1";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Address line 1", $tdataparties[".allSearchFields"])) 
{
	$tdataparties[".allSearchFields"][] = "Address line 1";	
}
$tdataparties[".advSearchFields"][] = "Address line 2";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Address line 2", $tdataparties[".allSearchFields"])) 
{
	$tdataparties[".allSearchFields"][] = "Address line 2";	
}
$tdataparties[".advSearchFields"][] = "City";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("City", $tdataparties[".allSearchFields"])) 
{
	$tdataparties[".allSearchFields"][] = "City";	
}
$tdataparties[".advSearchFields"][] = "State";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("State", $tdataparties[".allSearchFields"])) 
{
	$tdataparties[".allSearchFields"][] = "State";	
}
$tdataparties[".advSearchFields"][] = "ZIP Code";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ZIP Code", $tdataparties[".allSearchFields"])) 
{
	$tdataparties[".allSearchFields"][] = "ZIP Code";	
}
$tdataparties[".advSearchFields"][] = "idparties";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("idparties", $tdataparties[".allSearchFields"])) 
{
	$tdataparties[".allSearchFields"][] = "idparties";	
}

$tdataparties[".isTableType"] = "list";


	

$tdataparties[".isDisplayLoading"] = true;


// Access doesn't support subqueries from the same table as main
$tdataparties[".subQueriesSupAccess"] = true;

		



$tdataparties[".pageSize"] = 60;

$gstrOrderBy = "ORDER BY name";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdataparties[".strOrderBy"] = $gstrOrderBy;
	
$tdataparties[".orderindexes"] = array();
$tdataparties[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "name");

$tdataparties[".sqlHead"] = "SELECT name AS Name,  salutation AS Title,  phone AS Phone,  contact AS `Contact Name`,  co_name AS Company,  addr1 AS `Address line 1`,  addr2 AS `Address line 2`,  city AS City,  `state` AS `State`,  postal AS `ZIP Code`,  idparties";
$tdataparties[".sqlFrom"] = "FROM parties";
$tdataparties[".sqlWhereExpr"] = "";
$tdataparties[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 60;
$arrRPP[] = 250;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataparties[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataparties[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "idparties";
	$tdataparties[".Keys"] = $tableKeys;

$tdataparties[".listFields"] = array();
$tdataparties[".listFields"][] = "Name";
$tdataparties[".listFields"][] = "Title";
$tdataparties[".listFields"][] = "Phone";
$tdataparties[".listFields"][] = "Contact Name";
$tdataparties[".listFields"][] = "Company";
$tdataparties[".listFields"][] = "Address line 1";
$tdataparties[".listFields"][] = "Address line 2";
$tdataparties[".listFields"][] = "City";
$tdataparties[".listFields"][] = "State";
$tdataparties[".listFields"][] = "ZIP Code";

$tdataparties[".addFields"] = array();
$tdataparties[".addFields"][] = "Name";
$tdataparties[".addFields"][] = "Phone";
$tdataparties[".addFields"][] = "City";
$tdataparties[".addFields"][] = "State";
$tdataparties[".addFields"][] = "Contact Name";
$tdataparties[".addFields"][] = "Company";
$tdataparties[".addFields"][] = "Address line 1";
$tdataparties[".addFields"][] = "Address line 2";
$tdataparties[".addFields"][] = "ZIP Code";

$tdataparties[".inlineAddFields"] = array();

$tdataparties[".editFields"] = array();
$tdataparties[".editFields"][] = "Name";
$tdataparties[".editFields"][] = "Title";
$tdataparties[".editFields"][] = "Phone";
$tdataparties[".editFields"][] = "Contact Name";
$tdataparties[".editFields"][] = "Company";
$tdataparties[".editFields"][] = "Address line 1";
$tdataparties[".editFields"][] = "Address line 2";
$tdataparties[".editFields"][] = "City";
$tdataparties[".editFields"][] = "State";
$tdataparties[".editFields"][] = "ZIP Code";

$tdataparties[".inlineEditFields"] = array();

	
//	Name
	$fdata = array();
	$fdata["strName"] = "Name";
	$fdata["ownerTable"] = "parties";
	$fdata["Label"]="Name"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Name";
	
		$fdata["FullName"]= "name";
	
		
		
		
		
		
				$fdata["Index"]= 1;
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
	
		
				
		
		
		
			$tdataparties["Name"]=$fdata;
//	Title
	$fdata = array();
	$fdata["strName"] = "Title";
	$fdata["ownerTable"] = "parties";
	$fdata["Label"]="Title"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Title";
	
		$fdata["FullName"]= "salutation";
	
		
		
		
		
		
				$fdata["Index"]= 2;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		
		
		$fdata["bEditPage"]=true; 
	
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataparties["Title"]=$fdata;
//	Phone
	$fdata = array();
	$fdata["strName"] = "Phone";
	$fdata["ownerTable"] = "parties";
	$fdata["Label"]="Phone"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "Phone Number";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Phone";
	
		$fdata["FullName"]= "phone";
	
		
		
		
		
		
				$fdata["Index"]= 3;
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
	
		
				
		
		
		
			$tdataparties["Phone"]=$fdata;
//	Contact Name
	$fdata = array();
	$fdata["strName"] = "Contact Name";
	$fdata["ownerTable"] = "parties";
	$fdata["Label"]="Contact Name"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Contact_Name";
	
		$fdata["FullName"]= "contact";
	
		
		
		
		
		
				$fdata["Index"]= 4;
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
	
		
				
		
		
		
			$tdataparties["Contact Name"]=$fdata;
//	Company
	$fdata = array();
	$fdata["strName"] = "Company";
	$fdata["ownerTable"] = "parties";
	$fdata["Label"]="Company"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Company";
	
		$fdata["FullName"]= "co_name";
	
		
		
		
		
		
				$fdata["Index"]= 5;
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
	
		
				
		
		
		
			$tdataparties["Company"]=$fdata;
//	Address line 1
	$fdata = array();
	$fdata["strName"] = "Address line 1";
	$fdata["ownerTable"] = "parties";
	$fdata["Label"]="Address line 1"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Address_line_1";
	
		$fdata["FullName"]= "addr1";
	
		
		
		
		
		
				$fdata["Index"]= 6;
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
	
		
				
		
		
		
			$tdataparties["Address line 1"]=$fdata;
//	Address line 2
	$fdata = array();
	$fdata["strName"] = "Address line 2";
	$fdata["ownerTable"] = "parties";
	$fdata["Label"]="Address line 2"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Address_line_2";
	
		$fdata["FullName"]= "addr2";
	
		
		
		
		
		
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
	
		
				
		
		
		
			$tdataparties["Address line 2"]=$fdata;
//	City
	$fdata = array();
	$fdata["strName"] = "City";
	$fdata["ownerTable"] = "parties";
	$fdata["Label"]="City"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "City";
	
		$fdata["FullName"]= "city";
	
		
		
		
		
		
				$fdata["Index"]= 8;
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
	
		
				
		
		
		
			$tdataparties["City"]=$fdata;
//	State
	$fdata = array();
	$fdata["strName"] = "State";
	$fdata["ownerTable"] = "parties";
	$fdata["Label"]="State"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "State";
	
		$fdata["FullName"]= "`state`";
	
		
		
		
		
		
				$fdata["Index"]= 9;
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
	
		
				
		
		
		
			$tdataparties["State"]=$fdata;
//	ZIP Code
	$fdata = array();
	$fdata["strName"] = "ZIP Code";
	$fdata["ownerTable"] = "parties";
	$fdata["Label"]="ZIP Code"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "ZIP_Code";
	
		$fdata["FullName"]= "postal";
	
		
		
		
		
		
				$fdata["Index"]= 10;
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
	
		
				
		
		
		
			$tdataparties["ZIP Code"]=$fdata;
//	idparties
	$fdata = array();
	$fdata["strName"] = "idparties";
	$fdata["ownerTable"] = "parties";
	$fdata["Label"]="Idparties"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		$fdata["AutoInc"]=true;
	
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "idparties";
	
		$fdata["FullName"]= "idparties";
	
		
		
		
		
		
				$fdata["Index"]= 11;
				$fdata["EditParams"]="";
			
		
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
		//End validation
	
				
		
				
		
		
		
			$tdataparties["idparties"]=$fdata;


	
$tables_data["parties"]=&$tdataparties;
$field_labels["parties"] = &$fieldLabelsparties;
$fieldToolTips["parties"] = &$fieldToolTipsparties;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["parties"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="buyers";
	$detailsTablesData["parties"][$dIndex] = array(
		  "dDataSourceTable"=>"buyers"
		, "dOriginalTable"=>$strOriginalDetailsTable
		, "dShortTable"=>"buyers"
		, "masterKeys"=>array()
		, "detailKeys"=>array()
		, "dispChildCount"=> "0"
		, "hideChild"=>"0"
		, "sqlHead"=>"SELECT buyers.idbuyers,  buyers.ttl_actions_idttl_actions,  buyers.parties_idparties,  parties.name,  parties.phone,  parties.co_name,  parties.addr1,  parties.addr2,  parties.city,  parties.`state`,  parties.postal"	
		, "sqlFrom"=>"FROM buyers  LEFT OUTER JOIN parties ON buyers.parties_idparties = parties.idparties"	
		, "sqlWhere"=>""
		, "sqlTail"=>""
		, "groupBy"=>"0"
		, "previewOnList" => 1
		, "previewOnAdd" => 0
		, "previewOnEdit" => 0
		, "previewOnView" => 0
	);
	
		
		$detailsTablesData["parties"][$dIndex]["masterKeys"][]="idparties";
		$detailsTablesData["parties"][$dIndex]["detailKeys"][]="parties_idparties";

$dIndex = 2-1;
			$strOriginalDetailsTable="sellers";
	$detailsTablesData["parties"][$dIndex] = array(
		  "dDataSourceTable"=>"sellers"
		, "dOriginalTable"=>$strOriginalDetailsTable
		, "dShortTable"=>"sellers"
		, "masterKeys"=>array()
		, "detailKeys"=>array()
		, "dispChildCount"=> "0"
		, "hideChild"=>"0"
		, "sqlHead"=>"SELECT sellers.idsellers,  sellers.ttl_actions_idttl_actions,  sellers.parties_idparties,  parties.name,  parties.phone,  parties.co_name,  parties.addr1,  parties.addr2,  parties.city,  parties.`state`,  parties.postal"	
		, "sqlFrom"=>"FROM sellers  LEFT OUTER JOIN parties ON sellers.parties_idparties = parties.idparties"	
		, "sqlWhere"=>""
		, "sqlTail"=>""
		, "groupBy"=>"0"
		, "previewOnList" => 1
		, "previewOnAdd" => 0
		, "previewOnEdit" => 0
		, "previewOnView" => 0
	);
	
		
		$detailsTablesData["parties"][$dIndex]["masterKeys"][]="idparties";
		$detailsTablesData["parties"][$dIndex]["detailKeys"][]="parties_idparties";


	
// tables which are master tables for current table (detail)
$masterTablesData["parties"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_parties()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "name AS Name,  salutation AS Title,  phone AS Phone,  contact AS `Contact Name`,  co_name AS Company,  addr1 AS `Address line 1`,  addr2 AS `Address line 2`,  city AS City,  `state` AS `State`,  postal AS `ZIP Code`,  idparties";
$proto0["m_strFrom"] = "FROM parties";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY name";
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
	"m_strName" => "name",
	"m_strTable" => "parties"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "Name";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "salutation",
	"m_strTable" => "parties"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "Title";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "phone",
	"m_strTable" => "parties"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "Phone";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "contact",
	"m_strTable" => "parties"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "Contact Name";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "co_name",
	"m_strTable" => "parties"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "Company";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "addr1",
	"m_strTable" => "parties"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "Address line 1";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "addr2",
	"m_strTable" => "parties"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "Address line 2";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "city",
	"m_strTable" => "parties"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "City";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "state",
	"m_strTable" => "parties"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "State";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "postal",
	"m_strTable" => "parties"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "ZIP Code";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "idparties",
	"m_strTable" => "parties"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "parties";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "idparties";
$proto28["m_columns"][] = "name";
$proto28["m_columns"][] = "salutation";
$proto28["m_columns"][] = "phone";
$proto28["m_columns"][] = "contact";
$proto28["m_columns"][] = "co_name";
$proto28["m_columns"][] = "addr1";
$proto28["m_columns"][] = "addr2";
$proto28["m_columns"][] = "city";
$proto28["m_columns"][] = "state";
$proto28["m_columns"][] = "postal";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_alias"] = "";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = "0";
$proto29["m_inBrackets"] = "0";
$proto29["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "parties"
));

$proto31["m_column"]=$obj;
$proto31["m_bAsc"] = 1;
$proto31["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto31);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

return $obj;
}
$queryData_parties = createSqlQuery_parties();
$tdataparties[".sqlquery"] = $queryData_parties;



include_once(getabspath("include/parties_events.php"));
$tableEvents["parties"] = new eventclass_parties;
$tdataparties[".hasEvents"] = true;

?>
