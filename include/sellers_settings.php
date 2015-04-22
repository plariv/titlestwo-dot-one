<?php
$tdatasellers=array();
	$tdatasellers[".NumberOfChars"]=80; 
	$tdatasellers[".ShortName"]="sellers";
	$tdatasellers[".OwnerID"]="";
	$tdatasellers[".OriginalTable"]="sellers";


	
//	field labels
$fieldLabelssellers = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssellers["English"]=array();
	$fieldToolTipssellers["English"]=array();
	$fieldLabelssellers["English"]["idsellers"] = "Idsellers";
	$fieldToolTipssellers["English"]["idsellers"] = "";
	$fieldLabelssellers["English"]["phone"] = "Seller Name";
	$fieldToolTipssellers["English"]["phone"] = "";
	$fieldLabelssellers["English"]["city"] = "City";
	$fieldToolTipssellers["English"]["city"] = "";
	$fieldLabelssellers["English"]["state"] = "State";
	$fieldToolTipssellers["English"]["state"] = "";
	$fieldLabelssellers["English"]["ttl_actions_idttl_actions"] = "Ttl Actions Idttl Actions";
	$fieldToolTipssellers["English"]["ttl_actions_idttl_actions"] = "";
	$fieldLabelssellers["English"]["parties_idparties"] = "Parties Idparties";
	$fieldToolTipssellers["English"]["parties_idparties"] = "";
	$fieldLabelssellers["English"]["name"] = "Name";
	$fieldToolTipssellers["English"]["name"] = "";
	$fieldLabelssellers["English"]["co_name"] = "Company Name";
	$fieldToolTipssellers["English"]["co_name"] = "";
	$fieldLabelssellers["English"]["addr1"] = "Address 1";
	$fieldToolTipssellers["English"]["addr1"] = "";
	$fieldLabelssellers["English"]["addr2"] = "Address 2";
	$fieldToolTipssellers["English"]["addr2"] = "";
	$fieldLabelssellers["English"]["postal"] = "ZIP Code";
	$fieldToolTipssellers["English"]["postal"] = "";
	if (count($fieldToolTipssellers["English"])){
		$tdatasellers[".isUseToolTips"]=true;
	}
}


	
	$tdatasellers[".NCSearch"]=true;

	

$tdatasellers[".shortTableName"] = "sellers";
$tdatasellers[".nSecOptions"] = 0;
$tdatasellers[".recsPerRowList"] = 1;	
$tdatasellers[".tableGroupBy"] = "0";
$tdatasellers[".mainTableOwnerID"] = "";
$tdatasellers[".moveNext"] = 1;




$tdatasellers[".showAddInPopup"] = false;

$tdatasellers[".showEditInPopup"] = false;

$tdatasellers[".showViewInPopup"] = false;


$tdatasellers[".fieldsForRegister"] = array();

$tdatasellers[".listAjax"] = false;

	$tdatasellers[".audit"] = false;

	$tdatasellers[".locking"] = false;
	
$tdatasellers[".listIcons"] = true;
$tdatasellers[".edit"] = true;
$tdatasellers[".view"] = true;



$tdatasellers[".delete"] = true;

$tdatasellers[".showSimpleSearchOptions"] = true;

$tdatasellers[".showSearchPanel"] = true;


if (isMobile()){
$tdatasellers[".isUseAjaxSuggest"] = false;
}else {
$tdatasellers[".isUseAjaxSuggest"] = true;
}

$tdatasellers[".rowHighlite"] = true;


// button handlers file names

$tdatasellers[".addPageEvents"] = false;

$tdatasellers[".arrKeyFields"][] = "idsellers";
$tdatasellers[".arrKeyFields"][] = "ttl_actions_idttl_actions";
$tdatasellers[".arrKeyFields"][] = "parties_idparties";

// use datepicker for search panel
$tdatasellers[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdatasellers[".isUseTimeForSearch"] = false;

$tdatasellers[".isUseiBox"] = false;



	



$tdatasellers[".isUseInlineJs"] = $tdatasellers[".isUseInlineAdd"] || $tdatasellers[".isUseInlineEdit"];

$tdatasellers[".allSearchFields"] = array();

$tdatasellers[".globSearchFields"][] = "name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("name", $tdatasellers[".allSearchFields"]))
{
	$tdatasellers[".allSearchFields"][] = "name";	
}
$tdatasellers[".globSearchFields"][] = "phone";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("phone", $tdatasellers[".allSearchFields"]))
{
	$tdatasellers[".allSearchFields"][] = "phone";	
}
$tdatasellers[".globSearchFields"][] = "co_name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("co_name", $tdatasellers[".allSearchFields"]))
{
	$tdatasellers[".allSearchFields"][] = "co_name";	
}
$tdatasellers[".globSearchFields"][] = "addr1";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("addr1", $tdatasellers[".allSearchFields"]))
{
	$tdatasellers[".allSearchFields"][] = "addr1";	
}
$tdatasellers[".globSearchFields"][] = "addr2";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("addr2", $tdatasellers[".allSearchFields"]))
{
	$tdatasellers[".allSearchFields"][] = "addr2";	
}
$tdatasellers[".globSearchFields"][] = "city";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("city", $tdatasellers[".allSearchFields"]))
{
	$tdatasellers[".allSearchFields"][] = "city";	
}
$tdatasellers[".globSearchFields"][] = "state";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("state", $tdatasellers[".allSearchFields"]))
{
	$tdatasellers[".allSearchFields"][] = "state";	
}
$tdatasellers[".globSearchFields"][] = "postal";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("postal", $tdatasellers[".allSearchFields"]))
{
	$tdatasellers[".allSearchFields"][] = "postal";	
}


$tdatasellers[".googleLikeFields"][] = "idsellers";
$tdatasellers[".googleLikeFields"][] = "ttl_actions_idttl_actions";
$tdatasellers[".googleLikeFields"][] = "parties_idparties";
$tdatasellers[".googleLikeFields"][] = "name";
$tdatasellers[".googleLikeFields"][] = "phone";
$tdatasellers[".googleLikeFields"][] = "co_name";
$tdatasellers[".googleLikeFields"][] = "addr1";
$tdatasellers[".googleLikeFields"][] = "addr2";
$tdatasellers[".googleLikeFields"][] = "city";
$tdatasellers[".googleLikeFields"][] = "state";
$tdatasellers[".googleLikeFields"][] = "postal";



$tdatasellers[".advSearchFields"][] = "idsellers";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("idsellers", $tdatasellers[".allSearchFields"])) 
{
	$tdatasellers[".allSearchFields"][] = "idsellers";	
}
$tdatasellers[".advSearchFields"][] = "ttl_actions_idttl_actions";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ttl_actions_idttl_actions", $tdatasellers[".allSearchFields"])) 
{
	$tdatasellers[".allSearchFields"][] = "ttl_actions_idttl_actions";	
}
$tdatasellers[".advSearchFields"][] = "parties_idparties";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("parties_idparties", $tdatasellers[".allSearchFields"])) 
{
	$tdatasellers[".allSearchFields"][] = "parties_idparties";	
}
$tdatasellers[".advSearchFields"][] = "name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("name", $tdatasellers[".allSearchFields"])) 
{
	$tdatasellers[".allSearchFields"][] = "name";	
}
$tdatasellers[".advSearchFields"][] = "phone";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("phone", $tdatasellers[".allSearchFields"])) 
{
	$tdatasellers[".allSearchFields"][] = "phone";	
}
$tdatasellers[".advSearchFields"][] = "co_name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("co_name", $tdatasellers[".allSearchFields"])) 
{
	$tdatasellers[".allSearchFields"][] = "co_name";	
}
$tdatasellers[".advSearchFields"][] = "addr1";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("addr1", $tdatasellers[".allSearchFields"])) 
{
	$tdatasellers[".allSearchFields"][] = "addr1";	
}
$tdatasellers[".advSearchFields"][] = "addr2";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("addr2", $tdatasellers[".allSearchFields"])) 
{
	$tdatasellers[".allSearchFields"][] = "addr2";	
}
$tdatasellers[".advSearchFields"][] = "city";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("city", $tdatasellers[".allSearchFields"])) 
{
	$tdatasellers[".allSearchFields"][] = "city";	
}
$tdatasellers[".advSearchFields"][] = "state";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("state", $tdatasellers[".allSearchFields"])) 
{
	$tdatasellers[".allSearchFields"][] = "state";	
}
$tdatasellers[".advSearchFields"][] = "postal";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("postal", $tdatasellers[".allSearchFields"])) 
{
	$tdatasellers[".allSearchFields"][] = "postal";	
}

$tdatasellers[".isTableType"] = "list";


	

$tdatasellers[".isDisplayLoading"] = true;


// Access doesn't support subqueries from the same table as main
$tdatasellers[".subQueriesSupAccess"] = true;





$tdatasellers[".pageSize"] = 60;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdatasellers[".strOrderBy"] = $gstrOrderBy;
	
$tdatasellers[".orderindexes"] = array();

$tdatasellers[".sqlHead"] = "SELECT sellers.idsellers,  sellers.ttl_actions_idttl_actions,  sellers.parties_idparties,  parties.name,  parties.phone,  parties.co_name,  parties.addr1,  parties.addr2,  parties.city,  parties.`state`,  parties.postal";
$tdatasellers[".sqlFrom"] = "FROM sellers  LEFT OUTER JOIN parties ON sellers.parties_idparties = parties.idparties";
$tdatasellers[".sqlWhereExpr"] = "";
$tdatasellers[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 60;
$arrRPP[] = 250;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasellers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasellers[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "idsellers";
	$tableKeys[] = "ttl_actions_idttl_actions";
	$tableKeys[] = "parties_idparties";
	$tdatasellers[".Keys"] = $tableKeys;

$tdatasellers[".listFields"] = array();
$tdatasellers[".listFields"][] = "name";
$tdatasellers[".listFields"][] = "phone";
$tdatasellers[".listFields"][] = "co_name";
$tdatasellers[".listFields"][] = "addr1";
$tdatasellers[".listFields"][] = "addr2";
$tdatasellers[".listFields"][] = "city";
$tdatasellers[".listFields"][] = "state";
$tdatasellers[".listFields"][] = "postal";

$tdatasellers[".addFields"] = array();
$tdatasellers[".addFields"][] = "parties_idparties";

$tdatasellers[".inlineAddFields"] = array();

$tdatasellers[".editFields"] = array();
$tdatasellers[".editFields"][] = "parties_idparties";

$tdatasellers[".inlineEditFields"] = array();

	
//	idsellers
	$fdata = array();
	$fdata["strName"] = "idsellers";
	$fdata["ownerTable"] = "sellers";
	$fdata["Label"]="Idsellers"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		$fdata["AutoInc"]=true;
	
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "idsellers";
	
		$fdata["FullName"]= "sellers.idsellers";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 1;
				$fdata["EditParams"]="";
			
		
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				
		
				
		
		
		
			$tdatasellers["idsellers"]=$fdata;
//	ttl_actions_idttl_actions
	$fdata = array();
	$fdata["strName"] = "ttl_actions_idttl_actions";
	$fdata["ownerTable"] = "sellers";
	$fdata["Label"]="Ttl Actions Idttl Actions"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "ttl_actions_idttl_actions";
	
		$fdata["FullName"]= "sellers.ttl_actions_idttl_actions";
	
		
		
		
		
		
				$fdata["Index"]= 2;
				$fdata["EditParams"]="";
			
		
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
		//End validation
	
				
		
				
		
		
		
			$tdatasellers["ttl_actions_idttl_actions"]=$fdata;
//	parties_idparties
	$fdata = array();
	$fdata["strName"] = "parties_idparties";
	$fdata["ownerTable"] = "sellers";
	$fdata["Label"]="Parties Idparties"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Lookup wizard";
	$fdata["ViewFormat"]= "";
	
		
		$fdata["LookupType"]=1;
	$fdata["pLookupType"] = 1;
	$fdata["freeInput"] = 0;	
	$fdata["autoCompleteFieldsOnEdit"] = 0;
	$fdata["autoCompleteFields"] = array();
									$fdata["LCType"]= 1;
				
								$fdata["LinkField"]="idparties";
	$fdata["LinkFieldType"]=3;
	$fdata["DisplayField"]="name";
				$fdata["LookupTable"]="parties";
	$fdata["LookupOrderBy"]="";
													$fdata["FastType"]=true; 
							
					
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "parties_idparties";
	
		$fdata["FullName"]= "sellers.parties_idparties";
	
		
		
		
		
		
				$fdata["Index"]= 3;
				
		
		$fdata["bAddPage"]=true; 
	
		
		$fdata["bEditPage"]=true; 
	
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
						
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatasellers["parties_idparties"]=$fdata;
//	name
	$fdata = array();
	$fdata["strName"] = "name";
	$fdata["ownerTable"] = "parties";
	$fdata["Label"]="Name"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "name";
	
		$fdata["FullName"]= "parties.name";
	
		
		
		
		
		
				$fdata["Index"]= 4;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatasellers["name"]=$fdata;
//	phone
	$fdata = array();
	$fdata["strName"] = "phone";
	$fdata["ownerTable"] = "parties";
	$fdata["Label"]="Seller Name"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "phone";
	
		$fdata["FullName"]= "parties.phone";
	
		
		
		
		
		
				$fdata["Index"]= 5;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatasellers["phone"]=$fdata;
//	co_name
	$fdata = array();
	$fdata["strName"] = "co_name";
	$fdata["ownerTable"] = "parties";
	$fdata["Label"]="Company Name"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "co_name";
	
		$fdata["FullName"]= "parties.co_name";
	
		
		
		
		
		
				$fdata["Index"]= 6;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatasellers["co_name"]=$fdata;
//	addr1
	$fdata = array();
	$fdata["strName"] = "addr1";
	$fdata["ownerTable"] = "parties";
	$fdata["Label"]="Address 1"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "addr1";
	
		$fdata["FullName"]= "parties.addr1";
	
		
		
		
		
		
				$fdata["Index"]= 7;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatasellers["addr1"]=$fdata;
//	addr2
	$fdata = array();
	$fdata["strName"] = "addr2";
	$fdata["ownerTable"] = "parties";
	$fdata["Label"]="Address 2"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "addr2";
	
		$fdata["FullName"]= "parties.addr2";
	
		
		
		
		
		
				$fdata["Index"]= 8;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatasellers["addr2"]=$fdata;
//	city
	$fdata = array();
	$fdata["strName"] = "city";
	$fdata["ownerTable"] = "parties";
	$fdata["Label"]="City"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "city";
	
		$fdata["FullName"]= "parties.city";
	
		
		
		
		
		
				$fdata["Index"]= 9;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatasellers["city"]=$fdata;
//	state
	$fdata = array();
	$fdata["strName"] = "state";
	$fdata["ownerTable"] = "parties";
	$fdata["Label"]="State"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "state";
	
		$fdata["FullName"]= "parties.`state`";
	
		
		
		
		
		
				$fdata["Index"]= 10;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatasellers["state"]=$fdata;
//	postal
	$fdata = array();
	$fdata["strName"] = "postal";
	$fdata["ownerTable"] = "parties";
	$fdata["Label"]="ZIP Code"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "postal";
	
		$fdata["FullName"]= "parties.postal";
	
		
		
		
		
		
				$fdata["Index"]= 11;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatasellers["postal"]=$fdata;


	
$tables_data["sellers"]=&$tdatasellers;
$field_labels["sellers"] = &$fieldLabelssellers;
$fieldToolTips["sellers"] = &$fieldToolTipssellers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["sellers"] = array();

	
// tables which are master tables for current table (detail)
$masterTablesData["sellers"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="ttl_actions";
	$masterTablesData["sellers"][$mIndex] = array(
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
		$masterTablesData["sellers"][$mIndex]["masterKeys"][]="idttl_actions";
		$masterTablesData["sellers"][$mIndex]["detailKeys"][]="ttl_actions_idttl_actions";

$mIndex = 2-1;
			$strOriginalDetailsTable="parties";
	$masterTablesData["sellers"][$mIndex] = array(
		  "mDataSourceTable"=>"parties"
		, "mOriginalTable" => $strOriginalDetailsTable
		, "mShortTable" => "parties"
		, "masterKeys" => array()
		, "detailKeys" => array()
		, "dispChildCount" => "0"
		, "hideChild" => "0"	
		, "dispInfo" => "0"								
		, "previewOnList" => 1
		, "previewOnAdd" => 0
		, "previewOnEdit" => 0
		, "previewOnView" => 0
	);	
		$masterTablesData["sellers"][$mIndex]["masterKeys"][]="idparties";
		$masterTablesData["sellers"][$mIndex]["detailKeys"][]="parties_idparties";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_sellers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sellers.idsellers,  sellers.ttl_actions_idttl_actions,  sellers.parties_idparties,  parties.name,  parties.phone,  parties.co_name,  parties.addr1,  parties.addr2,  parties.city,  parties.`state`,  parties.postal";
$proto0["m_strFrom"] = "FROM sellers  LEFT OUTER JOIN parties ON sellers.parties_idparties = parties.idparties";
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
	"m_strName" => "idsellers",
	"m_strTable" => "sellers"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ttl_actions_idttl_actions",
	"m_strTable" => "sellers"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "parties_idparties",
	"m_strTable" => "sellers"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "parties"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "phone",
	"m_strTable" => "parties"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "co_name",
	"m_strTable" => "parties"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "addr1",
	"m_strTable" => "parties"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "addr2",
	"m_strTable" => "parties"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "city",
	"m_strTable" => "parties"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "state",
	"m_strTable" => "parties"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "postal",
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
$proto28["m_strName"] = "sellers";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "idsellers";
$proto28["m_columns"][] = "ttl_actions_idttl_actions";
$proto28["m_columns"][] = "parties_idparties";
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
												$proto31=array();
$proto31["m_link"] = "SQLL_LEFTJOIN";
			$proto32=array();
$proto32["m_strName"] = "parties";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "idparties";
$proto32["m_columns"][] = "name";
$proto32["m_columns"][] = "salutation";
$proto32["m_columns"][] = "phone";
$proto32["m_columns"][] = "contact";
$proto32["m_columns"][] = "co_name";
$proto32["m_columns"][] = "addr1";
$proto32["m_columns"][] = "addr2";
$proto32["m_columns"][] = "city";
$proto32["m_columns"][] = "state";
$proto32["m_columns"][] = "postal";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_alias"] = "";
$proto33=array();
$proto33["m_sql"] = "sellers.parties_idparties = parties.idparties";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "parties_idparties",
	"m_strTable" => "sellers"
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "= parties.idparties";
$proto33["m_havingmode"] = "0";
$proto33["m_inBrackets"] = "0";
$proto33["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

return $obj;
}
$queryData_sellers = createSqlQuery_sellers();
$tdatasellers[".sqlquery"] = $queryData_sellers;



include_once(getabspath("include/sellers_events.php"));
$tableEvents["sellers"] = new eventclass_sellers;
$tdatasellers[".hasEvents"] = true;

?>
