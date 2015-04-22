<?php
$tdataproperties=array();
	$tdataproperties[".NumberOfChars"]=80; 
	$tdataproperties[".ShortName"]="properties";
	$tdataproperties[".OwnerID"]="";
	$tdataproperties[".OriginalTable"]="properties";


	
//	field labels
$fieldLabelsproperties = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsproperties["English"]=array();
	$fieldToolTipsproperties["English"]=array();
	$fieldLabelsproperties["English"]["idproperties"] = "Idproperties";
	$fieldToolTipsproperties["English"]["idproperties"] = "";
	$fieldLabelsproperties["English"]["Address_line_1"] = "Address line 1";
	$fieldToolTipsproperties["English"]["Address line 1"] = "";
	$fieldLabelsproperties["English"]["Address_line_2"] = "Address line 2";
	$fieldToolTipsproperties["English"]["Address line 2"] = "";
	$fieldLabelsproperties["English"]["City"] = "City";
	$fieldToolTipsproperties["English"]["City"] = "";
	$fieldLabelsproperties["English"]["State"] = "State";
	$fieldToolTipsproperties["English"]["State"] = "";
	$fieldLabelsproperties["English"]["ZIP_Code"] = "ZIP Code";
	$fieldToolTipsproperties["English"]["ZIP Code"] = "";
	$fieldLabelsproperties["English"]["Platte_Number"] = "Platte Number";
	$fieldToolTipsproperties["English"]["Platte Number"] = "";
	$fieldLabelsproperties["English"]["Plot_Number"] = "Plot Number";
	$fieldToolTipsproperties["English"]["Plot Number"] = "";
	$fieldLabelsproperties["English"]["Longitude"] = "Longitude";
	$fieldToolTipsproperties["English"]["Longitude"] = "";
	$fieldLabelsproperties["English"]["Latitude"] = "Latitude";
	$fieldToolTipsproperties["English"]["Latitude"] = "";
	$fieldLabelsproperties["English"]["examiner"] = "Examiner";
	$fieldToolTipsproperties["English"]["examiner"] = "";
	$fieldLabelsproperties["English"]["filecabinet"] = "Filecabinet";
	$fieldToolTipsproperties["English"]["filecabinet"] = "";
	$fieldLabelsproperties["English"]["whencreated"] = "Whencreated";
	$fieldToolTipsproperties["English"]["whencreated"] = "";
	$fieldLabelsproperties["English"]["idttl_actions"] = "Idttl Actions";
	$fieldToolTipsproperties["English"]["idttl_actions"] = "";
	$fieldLabelsproperties["English"]["properties_idproperties"] = "Properties Idproperties";
	$fieldToolTipsproperties["English"]["properties_idproperties"] = "";
	if (count($fieldToolTipsproperties["English"])){
		$tdataproperties[".isUseToolTips"]=true;
	}
}


	
	$tdataproperties[".NCSearch"]=true;

	

$tdataproperties[".shortTableName"] = "properties";
$tdataproperties[".nSecOptions"] = 0;
$tdataproperties[".recsPerRowList"] = 1;	
$tdataproperties[".tableGroupBy"] = "0";
$tdataproperties[".mainTableOwnerID"] = "";
$tdataproperties[".moveNext"] = 1;




$tdataproperties[".showAddInPopup"] = false;

$tdataproperties[".showEditInPopup"] = false;

$tdataproperties[".showViewInPopup"] = false;


$tdataproperties[".fieldsForRegister"] = array();

$tdataproperties[".listAjax"] = false;

	$tdataproperties[".audit"] = false;

	$tdataproperties[".locking"] = false;
	
$tdataproperties[".listIcons"] = true;
$tdataproperties[".edit"] = true;




$tdataproperties[".showSimpleSearchOptions"] = true;

$tdataproperties[".showSearchPanel"] = true;


if (isMobile()){
$tdataproperties[".isUseAjaxSuggest"] = false;
}else {
$tdataproperties[".isUseAjaxSuggest"] = true;
}

$tdataproperties[".rowHighlite"] = true;


// button handlers file names

$tdataproperties[".addPageEvents"] = false;

$tdataproperties[".arrKeyFields"][] = "idproperties";

// use datepicker for search panel
$tdataproperties[".isUseCalendarForSearch"] = true;

// use timepicker for search panel
$tdataproperties[".isUseTimeForSearch"] = false;

$tdataproperties[".isUseiBox"] = false;



	

$tdataproperties[".useDetailsPreview"] = true;	


$tdataproperties[".isUseInlineJs"] = $tdataproperties[".isUseInlineAdd"] || $tdataproperties[".isUseInlineEdit"];

$tdataproperties[".allSearchFields"] = array();

$tdataproperties[".globSearchFields"][] = "Address line 1";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Address line 1", $tdataproperties[".allSearchFields"]))
{
	$tdataproperties[".allSearchFields"][] = "Address line 1";	
}
$tdataproperties[".globSearchFields"][] = "Address line 2";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Address line 2", $tdataproperties[".allSearchFields"]))
{
	$tdataproperties[".allSearchFields"][] = "Address line 2";	
}
$tdataproperties[".globSearchFields"][] = "City";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("City", $tdataproperties[".allSearchFields"]))
{
	$tdataproperties[".allSearchFields"][] = "City";	
}
$tdataproperties[".globSearchFields"][] = "State";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("State", $tdataproperties[".allSearchFields"]))
{
	$tdataproperties[".allSearchFields"][] = "State";	
}
$tdataproperties[".globSearchFields"][] = "ZIP Code";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ZIP Code", $tdataproperties[".allSearchFields"]))
{
	$tdataproperties[".allSearchFields"][] = "ZIP Code";	
}
$tdataproperties[".globSearchFields"][] = "Platte Number";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Platte Number", $tdataproperties[".allSearchFields"]))
{
	$tdataproperties[".allSearchFields"][] = "Platte Number";	
}
$tdataproperties[".globSearchFields"][] = "Plot Number";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Plot Number", $tdataproperties[".allSearchFields"]))
{
	$tdataproperties[".allSearchFields"][] = "Plot Number";	
}


$tdataproperties[".googleLikeFields"][] = "Address line 1";
$tdataproperties[".googleLikeFields"][] = "Address line 2";
$tdataproperties[".googleLikeFields"][] = "City";
$tdataproperties[".googleLikeFields"][] = "State";
$tdataproperties[".googleLikeFields"][] = "ZIP Code";
$tdataproperties[".googleLikeFields"][] = "Platte Number";
$tdataproperties[".googleLikeFields"][] = "Plot Number";
$tdataproperties[".googleLikeFields"][] = "Longitude";
$tdataproperties[".googleLikeFields"][] = "Latitude";
$tdataproperties[".googleLikeFields"][] = "idproperties";
$tdataproperties[".googleLikeFields"][] = "examiner";
$tdataproperties[".googleLikeFields"][] = "filecabinet";
$tdataproperties[".googleLikeFields"][] = "whencreated";
$tdataproperties[".googleLikeFields"][] = "idttl_actions";
$tdataproperties[".googleLikeFields"][] = "properties_idproperties";



$tdataproperties[".advSearchFields"][] = "Address line 1";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Address line 1", $tdataproperties[".allSearchFields"])) 
{
	$tdataproperties[".allSearchFields"][] = "Address line 1";	
}
$tdataproperties[".advSearchFields"][] = "Address line 2";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Address line 2", $tdataproperties[".allSearchFields"])) 
{
	$tdataproperties[".allSearchFields"][] = "Address line 2";	
}
$tdataproperties[".advSearchFields"][] = "City";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("City", $tdataproperties[".allSearchFields"])) 
{
	$tdataproperties[".allSearchFields"][] = "City";	
}
$tdataproperties[".advSearchFields"][] = "State";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("State", $tdataproperties[".allSearchFields"])) 
{
	$tdataproperties[".allSearchFields"][] = "State";	
}
$tdataproperties[".advSearchFields"][] = "ZIP Code";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ZIP Code", $tdataproperties[".allSearchFields"])) 
{
	$tdataproperties[".allSearchFields"][] = "ZIP Code";	
}
$tdataproperties[".advSearchFields"][] = "Platte Number";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Platte Number", $tdataproperties[".allSearchFields"])) 
{
	$tdataproperties[".allSearchFields"][] = "Platte Number";	
}
$tdataproperties[".advSearchFields"][] = "Plot Number";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Plot Number", $tdataproperties[".allSearchFields"])) 
{
	$tdataproperties[".allSearchFields"][] = "Plot Number";	
}
$tdataproperties[".advSearchFields"][] = "Longitude";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Longitude", $tdataproperties[".allSearchFields"])) 
{
	$tdataproperties[".allSearchFields"][] = "Longitude";	
}
$tdataproperties[".advSearchFields"][] = "Latitude";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Latitude", $tdataproperties[".allSearchFields"])) 
{
	$tdataproperties[".allSearchFields"][] = "Latitude";	
}
$tdataproperties[".advSearchFields"][] = "idproperties";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("idproperties", $tdataproperties[".allSearchFields"])) 
{
	$tdataproperties[".allSearchFields"][] = "idproperties";	
}
$tdataproperties[".advSearchFields"][] = "examiner";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("examiner", $tdataproperties[".allSearchFields"])) 
{
	$tdataproperties[".allSearchFields"][] = "examiner";	
}
$tdataproperties[".advSearchFields"][] = "filecabinet";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("filecabinet", $tdataproperties[".allSearchFields"])) 
{
	$tdataproperties[".allSearchFields"][] = "filecabinet";	
}
$tdataproperties[".advSearchFields"][] = "whencreated";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("whencreated", $tdataproperties[".allSearchFields"])) 
{
	$tdataproperties[".allSearchFields"][] = "whencreated";	
}
$tdataproperties[".advSearchFields"][] = "idttl_actions";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("idttl_actions", $tdataproperties[".allSearchFields"])) 
{
	$tdataproperties[".allSearchFields"][] = "idttl_actions";	
}
$tdataproperties[".advSearchFields"][] = "properties_idproperties";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("properties_idproperties", $tdataproperties[".allSearchFields"])) 
{
	$tdataproperties[".allSearchFields"][] = "properties_idproperties";	
}

$tdataproperties[".isTableType"] = "list";


	

$tdataproperties[".isDisplayLoading"] = true;


// Access doesn't support subqueries from the same table as main
$tdataproperties[".subQueriesSupAccess"] = true;

	



$tdataproperties[".pageSize"] = 60;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdataproperties[".strOrderBy"] = $gstrOrderBy;
	
$tdataproperties[".orderindexes"] = array();

$tdataproperties[".sqlHead"] = "SELECT properties.propaddr1 AS `Address line 1`,  properties.propaddr2 AS `Address line 2`,  properties.propcity AS City,  properties.propstate AS `State`,  properties.proppostal AS `ZIP Code`,  properties.propplatte AS `Platte Number`,  properties.proplot AS `Plot Number`,  properties.proplong AS Longitude,  properties.proplat AS Latitude,  properties.idproperties,  ttl_actions.examiner,  ttl_actions.filecabinet,  ttl_actions.whencreated,  ttl_actions.idttl_actions,  ttl_actions.properties_idproperties";
$tdataproperties[".sqlFrom"] = "FROM properties  LEFT OUTER JOIN ttl_actions ON properties.idproperties = ttl_actions.properties_idproperties";
$tdataproperties[".sqlWhereExpr"] = "";
$tdataproperties[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 60;
$arrRPP[] = 250;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproperties[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproperties[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "idproperties";
	$tdataproperties[".Keys"] = $tableKeys;

$tdataproperties[".listFields"] = array();
$tdataproperties[".listFields"][] = "Address line 1";
$tdataproperties[".listFields"][] = "Address line 2";
$tdataproperties[".listFields"][] = "City";
$tdataproperties[".listFields"][] = "State";
$tdataproperties[".listFields"][] = "ZIP Code";
$tdataproperties[".listFields"][] = "Platte Number";
$tdataproperties[".listFields"][] = "Plot Number";

$tdataproperties[".addFields"] = array();
$tdataproperties[".addFields"][] = "Address line 1";
$tdataproperties[".addFields"][] = "Address line 2";
$tdataproperties[".addFields"][] = "City";
$tdataproperties[".addFields"][] = "State";
$tdataproperties[".addFields"][] = "ZIP Code";
$tdataproperties[".addFields"][] = "Platte Number";
$tdataproperties[".addFields"][] = "Plot Number";

$tdataproperties[".inlineAddFields"] = array();

$tdataproperties[".editFields"] = array();
$tdataproperties[".editFields"][] = "Address line 1";
$tdataproperties[".editFields"][] = "Address line 2";
$tdataproperties[".editFields"][] = "City";
$tdataproperties[".editFields"][] = "State";
$tdataproperties[".editFields"][] = "ZIP Code";
$tdataproperties[".editFields"][] = "Platte Number";
$tdataproperties[".editFields"][] = "Plot Number";

$tdataproperties[".inlineEditFields"] = array();

	
//	Address line 1
	$fdata = array();
	$fdata["strName"] = "Address line 1";
	$fdata["ownerTable"] = "properties";
	$fdata["Label"]="Address line 1"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Address_line_1";
	
		$fdata["FullName"]= "properties.propaddr1";
	
		
		
		
		
		
				$fdata["Index"]= 1;
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
	
		
				
		
		
		
			$tdataproperties["Address line 1"]=$fdata;
//	Address line 2
	$fdata = array();
	$fdata["strName"] = "Address line 2";
	$fdata["ownerTable"] = "properties";
	$fdata["Label"]="Address line 2"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Address_line_2";
	
		$fdata["FullName"]= "properties.propaddr2";
	
		
		
		
		
		
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
	
		
				
		
		
		
			$tdataproperties["Address line 2"]=$fdata;
//	City
	$fdata = array();
	$fdata["strName"] = "City";
	$fdata["ownerTable"] = "properties";
	$fdata["Label"]="City"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "City";
	
		$fdata["FullName"]= "properties.propcity";
	
		
		
		
		
		
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
	
		
				
		
		
		
			$tdataproperties["City"]=$fdata;
//	State
	$fdata = array();
	$fdata["strName"] = "State";
	$fdata["ownerTable"] = "properties";
	$fdata["Label"]="State"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "State";
	
		$fdata["FullName"]= "properties.propstate";
	
		
		
		
		
		
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
	
		
				
		
		
		
			$tdataproperties["State"]=$fdata;
//	ZIP Code
	$fdata = array();
	$fdata["strName"] = "ZIP Code";
	$fdata["ownerTable"] = "properties";
	$fdata["Label"]="ZIP Code"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "ZIP_Code";
	
		$fdata["FullName"]= "properties.proppostal";
	
		
		
		
		
		
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
	
		
				
		
		
		
			$tdataproperties["ZIP Code"]=$fdata;
//	Platte Number
	$fdata = array();
	$fdata["strName"] = "Platte Number";
	$fdata["ownerTable"] = "properties";
	$fdata["Label"]="Platte Number"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Platte_Number";
	
		$fdata["FullName"]= "properties.propplatte";
	
		
		
		
		
		
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
	
		
				
		
		
		
			$tdataproperties["Platte Number"]=$fdata;
//	Plot Number
	$fdata = array();
	$fdata["strName"] = "Plot Number";
	$fdata["ownerTable"] = "properties";
	$fdata["Label"]="Plot Number"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Plot_Number";
	
		$fdata["FullName"]= "properties.proplot";
	
		
		
		
		
		
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
	
		
				
		
		
		
			$tdataproperties["Plot Number"]=$fdata;
//	Longitude
	$fdata = array();
	$fdata["strName"] = "Longitude";
	$fdata["ownerTable"] = "properties";
	$fdata["Label"]="Longitude"; 
	
		
		
	$fdata["FieldType"]= 13;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Longitude";
	
		$fdata["FullName"]= "properties.proplong";
	
		
		
		
		
		
				$fdata["Index"]= 8;
				$fdata["EditParams"]="";
			
		
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				
		
				
		
		
		
			$tdataproperties["Longitude"]=$fdata;
//	Latitude
	$fdata = array();
	$fdata["strName"] = "Latitude";
	$fdata["ownerTable"] = "properties";
	$fdata["Label"]="Latitude"; 
	
		
		
	$fdata["FieldType"]= 13;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Latitude";
	
		$fdata["FullName"]= "properties.proplat";
	
		
		
		
		
		
				$fdata["Index"]= 9;
				$fdata["EditParams"]="";
			
		
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				
		
				
		
		
		
			$tdataproperties["Latitude"]=$fdata;
//	idproperties
	$fdata = array();
	$fdata["strName"] = "idproperties";
	$fdata["ownerTable"] = "properties";
	$fdata["Label"]="Idproperties"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		$fdata["AutoInc"]=true;
	
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "idproperties";
	
		$fdata["FullName"]= "properties.idproperties";
	
		
		
		
		
		
				$fdata["Index"]= 10;
				$fdata["EditParams"]="";
			
		
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
		//End validation
	
				
		
				
		
		
		
			$tdataproperties["idproperties"]=$fdata;
//	examiner
	$fdata = array();
	$fdata["strName"] = "examiner";
	$fdata["ownerTable"] = "ttl_actions";
	$fdata["Label"]="Examiner"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "examiner";
	
		$fdata["FullName"]= "ttl_actions.examiner";
	
		
		
		
		
		
				$fdata["Index"]= 11;
				$fdata["EditParams"]="";
			
		
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				
		
				
		
		
		
			$tdataproperties["examiner"]=$fdata;
//	filecabinet
	$fdata = array();
	$fdata["strName"] = "filecabinet";
	$fdata["ownerTable"] = "ttl_actions";
	$fdata["Label"]="Filecabinet"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "filecabinet";
	
		$fdata["FullName"]= "ttl_actions.filecabinet";
	
		
		
		
		
		
				$fdata["Index"]= 12;
				$fdata["EditParams"]="";
			
		
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				
		
				
		
		
		
			$tdataproperties["filecabinet"]=$fdata;
//	whencreated
	$fdata = array();
	$fdata["strName"] = "whencreated";
	$fdata["ownerTable"] = "ttl_actions";
	$fdata["Label"]="Whencreated"; 
	
		
		
	$fdata["FieldType"]= 7;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Date";
	$fdata["ViewFormat"]= "Short Date";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "whencreated";
	
		$fdata["FullName"]= "ttl_actions.whencreated";
	
		
		
		
		
		
				$fdata["Index"]= 13;
		$fdata["DateEditType"] = 13; 
	$fdata["InitialYearFactor"] = 20; 
	$fdata["LastYearFactor"] = 20; 
			
		
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				
		
				
		
		
		
			$tdataproperties["whencreated"]=$fdata;
//	idttl_actions
	$fdata = array();
	$fdata["strName"] = "idttl_actions";
	$fdata["ownerTable"] = "ttl_actions";
	$fdata["Label"]="Idttl Actions"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		$fdata["AutoInc"]=true;
	
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "idttl_actions";
	
		$fdata["FullName"]= "ttl_actions.idttl_actions";
	
		
		
		
		
		
				$fdata["Index"]= 14;
				$fdata["EditParams"]="";
			
		
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
		//End validation
	
				
		
				
		
		
		
			$tdataproperties["idttl_actions"]=$fdata;
//	properties_idproperties
	$fdata = array();
	$fdata["strName"] = "properties_idproperties";
	$fdata["ownerTable"] = "ttl_actions";
	$fdata["Label"]="Properties Idproperties"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "properties_idproperties";
	
		$fdata["FullName"]= "ttl_actions.properties_idproperties";
	
		
		
		
		
		
				$fdata["Index"]= 15;
				$fdata["EditParams"]="";
			
		
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
		//End validation
	
				
		
				
		
		
		
			$tdataproperties["properties_idproperties"]=$fdata;


	
$tables_data["properties"]=&$tdataproperties;
$field_labels["properties"] = &$fieldLabelsproperties;
$fieldToolTips["properties"] = &$fieldToolTipsproperties;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["properties"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="ttl_actions";
	$detailsTablesData["properties"][$dIndex] = array(
		  "dDataSourceTable"=>"ttl_actions"
		, "dOriginalTable"=>$strOriginalDetailsTable
		, "dShortTable"=>"ttl_actions"
		, "masterKeys"=>array()
		, "detailKeys"=>array()
		, "dispChildCount"=> "0"
		, "hideChild"=>"0"
		, "sqlHead"=>"SELECT ttl_actions.idttl_actions,  ttl_actions.ttlnumb,  ttl_actions.whencreated,  ttl_actions.examiner,  ttl_actions.filecabinet,  ttl_actions.properties_idproperties,  ttl_actions.titleconame,  ttl_actions.titlepolicy,  ttl_actions.titlephone,  ttl_actions.titleremit,  ttl_actions.titleatty,  ttl_actions.titlerefatty,  ttl_actions.titlerecv,  ttl_actions.closesched_date,  ttl_actions.closesched_time,  ttl_actions.sellprice,  ttl_actions.deposit,  ttl_actions.loanamt,  ttl_actions.refi_purch,  ttl_actions.res_comm,  ttl_actions.file_status,  ttl_actions.file_archlocation,  properties.propaddr1,  properties.propaddr2,  properties.propcity,  properties.propstate,  properties.proppostal,  properties.propplatte,  properties.proplot,  ttl_actions.client1,  ttl_actions.client2,  ttl_actions.claddr1,  ttl_actions.claddr2,  ttl_actions.clphone1,  ttl_actions.clphone2,  ttl_actions.tenant,  properties.idproperties,  ttl_actions.matter,  ttl_actions.staffatty"	
		, "sqlFrom"=>"FROM ttl_actions  INNER JOIN properties ON ttl_actions.properties_idproperties = properties.idproperties"	
		, "sqlWhere"=>""
		, "sqlTail"=>""
		, "groupBy"=>"0"
		, "previewOnList" => 1
		, "previewOnAdd" => 1
		, "previewOnEdit" => 0
		, "previewOnView" => 0
	);
	
			$detailsTablesData["properties"][$dIndex]["previewOnAdd"] = false;
	
		$detailsTablesData["properties"][$dIndex]["masterKeys"][]="idproperties";
		$detailsTablesData["properties"][$dIndex]["detailKeys"][]="properties_idproperties";


	
// tables which are master tables for current table (detail)
$masterTablesData["properties"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_properties()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "properties.propaddr1 AS `Address line 1`,  properties.propaddr2 AS `Address line 2`,  properties.propcity AS City,  properties.propstate AS `State`,  properties.proppostal AS `ZIP Code`,  properties.propplatte AS `Platte Number`,  properties.proplot AS `Plot Number`,  properties.proplong AS Longitude,  properties.proplat AS Latitude,  properties.idproperties,  ttl_actions.examiner,  ttl_actions.filecabinet,  ttl_actions.whencreated,  ttl_actions.idttl_actions,  ttl_actions.properties_idproperties";
$proto0["m_strFrom"] = "FROM properties  LEFT OUTER JOIN ttl_actions ON properties.idproperties = ttl_actions.properties_idproperties";
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
	"m_strName" => "propaddr1",
	"m_strTable" => "properties"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "Address line 1";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "propaddr2",
	"m_strTable" => "properties"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "Address line 2";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "propcity",
	"m_strTable" => "properties"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "City";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "propstate",
	"m_strTable" => "properties"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "State";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "proppostal",
	"m_strTable" => "properties"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "ZIP Code";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "propplatte",
	"m_strTable" => "properties"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "Platte Number";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "proplot",
	"m_strTable" => "properties"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "Plot Number";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "proplong",
	"m_strTable" => "properties"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "Longitude";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "proplat",
	"m_strTable" => "properties"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "Latitude";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "idproperties",
	"m_strTable" => "properties"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "examiner",
	"m_strTable" => "ttl_actions"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "filecabinet",
	"m_strTable" => "ttl_actions"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "whencreated",
	"m_strTable" => "ttl_actions"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "idttl_actions",
	"m_strTable" => "ttl_actions"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "properties_idproperties",
	"m_strTable" => "ttl_actions"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto35=array();
$proto35["m_link"] = "SQLL_MAIN";
			$proto36=array();
$proto36["m_strName"] = "properties";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "idproperties";
$proto36["m_columns"][] = "propaddr1";
$proto36["m_columns"][] = "propaddr2";
$proto36["m_columns"][] = "propcity";
$proto36["m_columns"][] = "propstate";
$proto36["m_columns"][] = "proppostal";
$proto36["m_columns"][] = "propplatte";
$proto36["m_columns"][] = "proplot";
$proto36["m_columns"][] = "proplong";
$proto36["m_columns"][] = "proplat";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_alias"] = "";
$proto37=array();
$proto37["m_sql"] = "";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "";
$proto37["m_havingmode"] = "0";
$proto37["m_inBrackets"] = "0";
$proto37["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto37);

$proto35["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto35);

$proto0["m_fromlist"][]=$obj;
												$proto39=array();
$proto39["m_link"] = "SQLL_LEFTJOIN";
			$proto40=array();
$proto40["m_strName"] = "ttl_actions";
$proto40["m_columns"] = array();
$proto40["m_columns"][] = "idttl_actions";
$proto40["m_columns"][] = "ttlnumb";
$proto40["m_columns"][] = "whencreated";
$proto40["m_columns"][] = "examiner";
$proto40["m_columns"][] = "filecabinet";
$proto40["m_columns"][] = "properties_idproperties";
$proto40["m_columns"][] = "titleconame";
$proto40["m_columns"][] = "titlepolicy";
$proto40["m_columns"][] = "titlephone";
$proto40["m_columns"][] = "titleremit";
$proto40["m_columns"][] = "titleatty";
$proto40["m_columns"][] = "titlerefatty";
$proto40["m_columns"][] = "titlerecv";
$proto40["m_columns"][] = "closesched_date";
$proto40["m_columns"][] = "closesched_time";
$proto40["m_columns"][] = "sellprice";
$proto40["m_columns"][] = "deposit";
$proto40["m_columns"][] = "loanamt";
$proto40["m_columns"][] = "refi_purch";
$proto40["m_columns"][] = "res_comm";
$proto40["m_columns"][] = "file_status";
$proto40["m_columns"][] = "file_archlocation";
$proto40["m_columns"][] = "client1";
$proto40["m_columns"][] = "client2";
$proto40["m_columns"][] = "claddr1";
$proto40["m_columns"][] = "claddr2";
$proto40["m_columns"][] = "clphone1";
$proto40["m_columns"][] = "clphone2";
$proto40["m_columns"][] = "tenant";
$proto40["m_columns"][] = "matter";
$proto40["m_columns"][] = "staffatty";
$obj = new SQLTable($proto40);

$proto39["m_table"] = $obj;
$proto39["m_alias"] = "";
$proto41=array();
$proto41["m_sql"] = "properties.idproperties = ttl_actions.properties_idproperties";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "idproperties",
	"m_strTable" => "properties"
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "= ttl_actions.properties_idproperties";
$proto41["m_havingmode"] = "0";
$proto41["m_inBrackets"] = "0";
$proto41["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto41);

$proto39["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto39);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

return $obj;
}
$queryData_properties = createSqlQuery_properties();
$tdataproperties[".sqlquery"] = $queryData_properties;



$tableEvents["properties"] = new eventsBase;
$tdataproperties[".hasEvents"] = false;

?>
