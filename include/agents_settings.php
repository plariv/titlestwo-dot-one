<?php
$tdataagents=array();
	$tdataagents[".NumberOfChars"]=80; 
	$tdataagents[".ShortName"]="agents";
	$tdataagents[".OwnerID"]="";
	$tdataagents[".OriginalTable"]="agents";


	
//	field labels
$fieldLabelsagents = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsagents["English"]=array();
	$fieldToolTipsagents["English"]=array();
	$fieldLabelsagents["English"]["name"] = "Name";
	$fieldToolTipsagents["English"]["name"] = "";
	$fieldLabelsagents["English"]["salutation"] = "Title";
	$fieldToolTipsagents["English"]["salutation"] = "";
	$fieldLabelsagents["English"]["phone"] = "Phone";
	$fieldToolTipsagents["English"]["phone"] = "";
	$fieldLabelsagents["English"]["contact"] = "Contact Name";
	$fieldToolTipsagents["English"]["contact"] = "";
	$fieldLabelsagents["English"]["co_name"] = "Company Name";
	$fieldToolTipsagents["English"]["co_name"] = "";
	$fieldLabelsagents["English"]["addr1"] = "Address 1";
	$fieldToolTipsagents["English"]["addr1"] = "";
	$fieldLabelsagents["English"]["addr2"] = "Address 2";
	$fieldToolTipsagents["English"]["addr2"] = "";
	$fieldLabelsagents["English"]["city"] = "City";
	$fieldToolTipsagents["English"]["city"] = "";
	$fieldLabelsagents["English"]["state"] = "State";
	$fieldToolTipsagents["English"]["state"] = "";
	$fieldLabelsagents["English"]["postal"] = "ZIP Code";
	$fieldToolTipsagents["English"]["postal"] = "";
	$fieldLabelsagents["English"]["idagents"] = "Idagents";
	$fieldToolTipsagents["English"]["idagents"] = "";
	if (count($fieldToolTipsagents["English"])){
		$tdataagents[".isUseToolTips"]=true;
	}
}


	
	$tdataagents[".NCSearch"]=true;

	

$tdataagents[".shortTableName"] = "agents";
$tdataagents[".nSecOptions"] = 0;
$tdataagents[".recsPerRowList"] = 1;	
$tdataagents[".tableGroupBy"] = "0";
$tdataagents[".mainTableOwnerID"] = "";
$tdataagents[".moveNext"] = 1;




$tdataagents[".showAddInPopup"] = false;

$tdataagents[".showEditInPopup"] = false;

$tdataagents[".showViewInPopup"] = false;


$tdataagents[".fieldsForRegister"] = array();

$tdataagents[".listAjax"] = false;

	$tdataagents[".audit"] = false;

	$tdataagents[".locking"] = false;
	
$tdataagents[".listIcons"] = true;
$tdataagents[".edit"] = true;




$tdataagents[".showSimpleSearchOptions"] = true;

$tdataagents[".showSearchPanel"] = true;


if (isMobile()){
$tdataagents[".isUseAjaxSuggest"] = false;
}else {
$tdataagents[".isUseAjaxSuggest"] = true;
}

$tdataagents[".rowHighlite"] = true;


// button handlers file names

$tdataagents[".addPageEvents"] = false;

$tdataagents[".arrKeyFields"][] = "idagents";

// use datepicker for search panel
$tdataagents[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdataagents[".isUseTimeForSearch"] = false;

$tdataagents[".isUseiBox"] = false;



	

$tdataagents[".useDetailsPreview"] = true;	


$tdataagents[".isUseInlineJs"] = $tdataagents[".isUseInlineAdd"] || $tdataagents[".isUseInlineEdit"];

$tdataagents[".allSearchFields"] = array();

$tdataagents[".globSearchFields"][] = "name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("name", $tdataagents[".allSearchFields"]))
{
	$tdataagents[".allSearchFields"][] = "name";	
}
$tdataagents[".globSearchFields"][] = "salutation";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("salutation", $tdataagents[".allSearchFields"]))
{
	$tdataagents[".allSearchFields"][] = "salutation";	
}
$tdataagents[".globSearchFields"][] = "phone";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("phone", $tdataagents[".allSearchFields"]))
{
	$tdataagents[".allSearchFields"][] = "phone";	
}
$tdataagents[".globSearchFields"][] = "contact";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("contact", $tdataagents[".allSearchFields"]))
{
	$tdataagents[".allSearchFields"][] = "contact";	
}
$tdataagents[".globSearchFields"][] = "co_name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("co_name", $tdataagents[".allSearchFields"]))
{
	$tdataagents[".allSearchFields"][] = "co_name";	
}
$tdataagents[".globSearchFields"][] = "addr1";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("addr1", $tdataagents[".allSearchFields"]))
{
	$tdataagents[".allSearchFields"][] = "addr1";	
}
$tdataagents[".globSearchFields"][] = "addr2";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("addr2", $tdataagents[".allSearchFields"]))
{
	$tdataagents[".allSearchFields"][] = "addr2";	
}
$tdataagents[".globSearchFields"][] = "city";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("city", $tdataagents[".allSearchFields"]))
{
	$tdataagents[".allSearchFields"][] = "city";	
}
$tdataagents[".globSearchFields"][] = "state";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("state", $tdataagents[".allSearchFields"]))
{
	$tdataagents[".allSearchFields"][] = "state";	
}
$tdataagents[".globSearchFields"][] = "postal";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("postal", $tdataagents[".allSearchFields"]))
{
	$tdataagents[".allSearchFields"][] = "postal";	
}


$tdataagents[".googleLikeFields"][] = "name";
$tdataagents[".googleLikeFields"][] = "salutation";
$tdataagents[".googleLikeFields"][] = "phone";
$tdataagents[".googleLikeFields"][] = "contact";
$tdataagents[".googleLikeFields"][] = "co_name";
$tdataagents[".googleLikeFields"][] = "addr1";
$tdataagents[".googleLikeFields"][] = "addr2";
$tdataagents[".googleLikeFields"][] = "city";
$tdataagents[".googleLikeFields"][] = "state";
$tdataagents[".googleLikeFields"][] = "postal";
$tdataagents[".googleLikeFields"][] = "idagents";



$tdataagents[".advSearchFields"][] = "name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("name", $tdataagents[".allSearchFields"])) 
{
	$tdataagents[".allSearchFields"][] = "name";	
}
$tdataagents[".advSearchFields"][] = "salutation";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("salutation", $tdataagents[".allSearchFields"])) 
{
	$tdataagents[".allSearchFields"][] = "salutation";	
}
$tdataagents[".advSearchFields"][] = "phone";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("phone", $tdataagents[".allSearchFields"])) 
{
	$tdataagents[".allSearchFields"][] = "phone";	
}
$tdataagents[".advSearchFields"][] = "contact";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("contact", $tdataagents[".allSearchFields"])) 
{
	$tdataagents[".allSearchFields"][] = "contact";	
}
$tdataagents[".advSearchFields"][] = "co_name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("co_name", $tdataagents[".allSearchFields"])) 
{
	$tdataagents[".allSearchFields"][] = "co_name";	
}
$tdataagents[".advSearchFields"][] = "addr1";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("addr1", $tdataagents[".allSearchFields"])) 
{
	$tdataagents[".allSearchFields"][] = "addr1";	
}
$tdataagents[".advSearchFields"][] = "addr2";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("addr2", $tdataagents[".allSearchFields"])) 
{
	$tdataagents[".allSearchFields"][] = "addr2";	
}
$tdataagents[".advSearchFields"][] = "city";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("city", $tdataagents[".allSearchFields"])) 
{
	$tdataagents[".allSearchFields"][] = "city";	
}
$tdataagents[".advSearchFields"][] = "state";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("state", $tdataagents[".allSearchFields"])) 
{
	$tdataagents[".allSearchFields"][] = "state";	
}
$tdataagents[".advSearchFields"][] = "postal";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("postal", $tdataagents[".allSearchFields"])) 
{
	$tdataagents[".allSearchFields"][] = "postal";	
}
$tdataagents[".advSearchFields"][] = "idagents";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("idagents", $tdataagents[".allSearchFields"])) 
{
	$tdataagents[".allSearchFields"][] = "idagents";	
}

$tdataagents[".isTableType"] = "list";


	

$tdataagents[".isDisplayLoading"] = true;


// Access doesn't support subqueries from the same table as main
$tdataagents[".subQueriesSupAccess"] = true;

	



$tdataagents[".pageSize"] = 60;

$gstrOrderBy = "ORDER BY name";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdataagents[".strOrderBy"] = $gstrOrderBy;
	
$tdataagents[".orderindexes"] = array();
$tdataagents[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "name");

$tdataagents[".sqlHead"] = "SELECT name,  salutation,  phone,  contact,  co_name,  addr1,  addr2,  city,  `state`,  postal,  idagents";
$tdataagents[".sqlFrom"] = "FROM agents";
$tdataagents[".sqlWhereExpr"] = "";
$tdataagents[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 60;
$arrRPP[] = 250;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataagents[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataagents[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "idagents";
	$tdataagents[".Keys"] = $tableKeys;

$tdataagents[".listFields"] = array();
$tdataagents[".listFields"][] = "name";
$tdataagents[".listFields"][] = "salutation";
$tdataagents[".listFields"][] = "phone";
$tdataagents[".listFields"][] = "contact";
$tdataagents[".listFields"][] = "co_name";
$tdataagents[".listFields"][] = "addr1";
$tdataagents[".listFields"][] = "addr2";
$tdataagents[".listFields"][] = "city";
$tdataagents[".listFields"][] = "state";
$tdataagents[".listFields"][] = "postal";

$tdataagents[".addFields"] = array();
$tdataagents[".addFields"][] = "name";
$tdataagents[".addFields"][] = "phone";
$tdataagents[".addFields"][] = "contact";
$tdataagents[".addFields"][] = "co_name";
$tdataagents[".addFields"][] = "addr1";
$tdataagents[".addFields"][] = "addr2";
$tdataagents[".addFields"][] = "city";
$tdataagents[".addFields"][] = "state";
$tdataagents[".addFields"][] = "postal";

$tdataagents[".inlineAddFields"] = array();

$tdataagents[".editFields"] = array();
$tdataagents[".editFields"][] = "name";
$tdataagents[".editFields"][] = "salutation";
$tdataagents[".editFields"][] = "phone";
$tdataagents[".editFields"][] = "contact";
$tdataagents[".editFields"][] = "co_name";
$tdataagents[".editFields"][] = "addr1";
$tdataagents[".editFields"][] = "addr2";
$tdataagents[".editFields"][] = "city";
$tdataagents[".editFields"][] = "state";
$tdataagents[".editFields"][] = "postal";

$tdataagents[".inlineEditFields"] = array();

	
//	name
	$fdata = array();
	$fdata["strName"] = "name";
	$fdata["ownerTable"] = "agents";
	$fdata["Label"]="Name"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "name";
	
		$fdata["FullName"]= "name";
	
		
		
		
		
		
				$fdata["Index"]= 1;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=45";
		
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		
		$fdata["bEditPage"]=true; 
	
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataagents["name"]=$fdata;
//	salutation
	$fdata = array();
	$fdata["strName"] = "salutation";
	$fdata["ownerTable"] = "agents";
	$fdata["Label"]="Title"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "salutation";
	
		$fdata["FullName"]= "salutation";
	
		
		
		
		
		
				$fdata["Index"]= 2;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		
		
		$fdata["bEditPage"]=true; 
	
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataagents["salutation"]=$fdata;
//	phone
	$fdata = array();
	$fdata["strName"] = "phone";
	$fdata["ownerTable"] = "agents";
	$fdata["Label"]="Phone"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "Phone Number";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "phone";
	
		$fdata["FullName"]= "phone";
	
		
		
		
		
		
				$fdata["Index"]= 3;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		
		$fdata["bEditPage"]=true; 
	
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataagents["phone"]=$fdata;
//	contact
	$fdata = array();
	$fdata["strName"] = "contact";
	$fdata["ownerTable"] = "agents";
	$fdata["Label"]="Contact Name"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "contact";
	
		$fdata["FullName"]= "contact";
	
		
		
		
		
		
				$fdata["Index"]= 4;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		
		$fdata["bEditPage"]=true; 
	
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataagents["contact"]=$fdata;
//	co_name
	$fdata = array();
	$fdata["strName"] = "co_name";
	$fdata["ownerTable"] = "agents";
	$fdata["Label"]="Company Name"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "co_name";
	
		$fdata["FullName"]= "co_name";
	
		
		
		
		
		
				$fdata["Index"]= 5;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		
		$fdata["bEditPage"]=true; 
	
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataagents["co_name"]=$fdata;
//	addr1
	$fdata = array();
	$fdata["strName"] = "addr1";
	$fdata["ownerTable"] = "agents";
	$fdata["Label"]="Address 1"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "addr1";
	
		$fdata["FullName"]= "addr1";
	
		
		
		
		
		
				$fdata["Index"]= 6;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		
		$fdata["bEditPage"]=true; 
	
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataagents["addr1"]=$fdata;
//	addr2
	$fdata = array();
	$fdata["strName"] = "addr2";
	$fdata["ownerTable"] = "agents";
	$fdata["Label"]="Address 2"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "addr2";
	
		$fdata["FullName"]= "addr2";
	
		
		
		
		
		
				$fdata["Index"]= 7;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		
		$fdata["bEditPage"]=true; 
	
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataagents["addr2"]=$fdata;
//	city
	$fdata = array();
	$fdata["strName"] = "city";
	$fdata["ownerTable"] = "agents";
	$fdata["Label"]="City"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "city";
	
		$fdata["FullName"]= "city";
	
		
		
		
		
		
				$fdata["Index"]= 8;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		
		$fdata["bEditPage"]=true; 
	
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataagents["city"]=$fdata;
//	state
	$fdata = array();
	$fdata["strName"] = "state";
	$fdata["ownerTable"] = "agents";
	$fdata["Label"]="State"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "state";
	
		$fdata["FullName"]= "`state`";
	
		
		
		
		
		
				$fdata["Index"]= 9;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		
		$fdata["bEditPage"]=true; 
	
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataagents["state"]=$fdata;
//	postal
	$fdata = array();
	$fdata["strName"] = "postal";
	$fdata["ownerTable"] = "agents";
	$fdata["Label"]="ZIP Code"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "postal";
	
		$fdata["FullName"]= "postal";
	
		
		
		
		
		
				$fdata["Index"]= 10;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		
		$fdata["bEditPage"]=true; 
	
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataagents["postal"]=$fdata;
//	idagents
	$fdata = array();
	$fdata["strName"] = "idagents";
	$fdata["ownerTable"] = "agents";
	$fdata["Label"]="Idagents"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		$fdata["AutoInc"]=true;
	
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "idagents";
	
		$fdata["FullName"]= "idagents";
	
		
		
		
		
		
				$fdata["Index"]= 11;
				$fdata["EditParams"]="";
			
		
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
		//End validation
	
				
		
				
		
		
		
			$tdataagents["idagents"]=$fdata;


	
$tables_data["agents"]=&$tdataagents;
$field_labels["agents"] = &$fieldLabelsagents;
$fieldToolTips["agents"] = &$fieldToolTipsagents;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["agents"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="brokers";
	$detailsTablesData["agents"][$dIndex] = array(
		  "dDataSourceTable"=>"brokers"
		, "dOriginalTable"=>$strOriginalDetailsTable
		, "dShortTable"=>"brokers"
		, "masterKeys"=>array()
		, "detailKeys"=>array()
		, "dispChildCount"=> "0"
		, "hideChild"=>"0"
		, "sqlHead"=>"SELECT brokers.idbrokers,  brokers.ttl_actions_idttl_actions,  brokers.agents_idagents,  agents.name,  agents.phone,  agents.co_name,  agents.addr1,  agents.addr2,  agents.city,  agents.`state`,  agents.postal"	
		, "sqlFrom"=>"FROM brokers  LEFT OUTER JOIN agents ON brokers.agents_idagents = agents.idagents"	
		, "sqlWhere"=>""
		, "sqlTail"=>""
		, "groupBy"=>"0"
		, "previewOnList" => 1
		, "previewOnAdd" => 0
		, "previewOnEdit" => 0
		, "previewOnView" => 0
	);
	
		
		$detailsTablesData["agents"][$dIndex]["masterKeys"][]="idagents";
		$detailsTablesData["agents"][$dIndex]["detailKeys"][]="agents_idagents";


	
// tables which are master tables for current table (detail)
$masterTablesData["agents"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_agents()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "name,  salutation,  phone,  contact,  co_name,  addr1,  addr2,  city,  `state`,  postal,  idagents";
$proto0["m_strFrom"] = "FROM agents";
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
	"m_strTable" => "agents"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "salutation",
	"m_strTable" => "agents"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "phone",
	"m_strTable" => "agents"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "contact",
	"m_strTable" => "agents"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "co_name",
	"m_strTable" => "agents"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "addr1",
	"m_strTable" => "agents"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "addr2",
	"m_strTable" => "agents"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "city",
	"m_strTable" => "agents"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "state",
	"m_strTable" => "agents"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "postal",
	"m_strTable" => "agents"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "idagents",
	"m_strTable" => "agents"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "agents";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "idagents";
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
	"m_strTable" => "agents"
));

$proto31["m_column"]=$obj;
$proto31["m_bAsc"] = 1;
$proto31["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto31);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

return $obj;
}
$queryData_agents = createSqlQuery_agents();
$tdataagents[".sqlquery"] = $queryData_agents;



include_once(getabspath("include/agents_events.php"));
$tableEvents["agents"] = new eventclass_agents;
$tdataagents[".hasEvents"] = true;

?>
