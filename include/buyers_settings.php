<?php
$tdatabuyers=array();
	$tdatabuyers[".NumberOfChars"]=80; 
	$tdatabuyers[".ShortName"]="buyers";
	$tdatabuyers[".OwnerID"]="";
	$tdatabuyers[".OriginalTable"]="buyers";


	
//	field labels
$fieldLabelsbuyers = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbuyers["English"]=array();
	$fieldToolTipsbuyers["English"]=array();
	$fieldLabelsbuyers["English"]["idbuyers"] = "Idbuyers";
	$fieldToolTipsbuyers["English"]["idbuyers"] = "";
	$fieldLabelsbuyers["English"]["city"] = "City";
	$fieldToolTipsbuyers["English"]["city"] = "";
	$fieldLabelsbuyers["English"]["state"] = "State";
	$fieldToolTipsbuyers["English"]["state"] = "";
	$fieldLabelsbuyers["English"]["phone"] = "Phone";
	$fieldToolTipsbuyers["English"]["phone"] = "";
	$fieldLabelsbuyers["English"]["co_name"] = "Company Name";
	$fieldToolTipsbuyers["English"]["co_name"] = "";
	$fieldLabelsbuyers["English"]["ttl_actions_idttl_actions"] = "Ttl Actions Idttl Actions";
	$fieldToolTipsbuyers["English"]["ttl_actions_idttl_actions"] = "";
	$fieldLabelsbuyers["English"]["parties_idparties"] = "Parties Idparties";
	$fieldToolTipsbuyers["English"]["parties_idparties"] = "";
	$fieldLabelsbuyers["English"]["name"] = "Name";
	$fieldToolTipsbuyers["English"]["name"] = "";
	$fieldLabelsbuyers["English"]["addr1"] = "Address 1";
	$fieldToolTipsbuyers["English"]["addr1"] = "";
	$fieldLabelsbuyers["English"]["addr2"] = "Address 2";
	$fieldToolTipsbuyers["English"]["addr2"] = "";
	$fieldLabelsbuyers["English"]["postal"] = "ZIP Code";
	$fieldToolTipsbuyers["English"]["postal"] = "";
	if (count($fieldToolTipsbuyers["English"])){
		$tdatabuyers[".isUseToolTips"]=true;
	}
}


	
	$tdatabuyers[".NCSearch"]=true;

	

$tdatabuyers[".shortTableName"] = "buyers";
$tdatabuyers[".nSecOptions"] = 0;
$tdatabuyers[".recsPerRowList"] = 1;	
$tdatabuyers[".tableGroupBy"] = "0";
$tdatabuyers[".mainTableOwnerID"] = "";
$tdatabuyers[".moveNext"] = 1;




$tdatabuyers[".showAddInPopup"] = false;

$tdatabuyers[".showEditInPopup"] = false;

$tdatabuyers[".showViewInPopup"] = false;


$tdatabuyers[".fieldsForRegister"] = array();

$tdatabuyers[".listAjax"] = false;

	$tdatabuyers[".audit"] = false;

	$tdatabuyers[".locking"] = false;
	
$tdatabuyers[".listIcons"] = true;
$tdatabuyers[".edit"] = true;
$tdatabuyers[".view"] = true;



$tdatabuyers[".delete"] = true;

$tdatabuyers[".showSimpleSearchOptions"] = true;

$tdatabuyers[".showSearchPanel"] = true;


if (isMobile()){
$tdatabuyers[".isUseAjaxSuggest"] = false;
}else {
$tdatabuyers[".isUseAjaxSuggest"] = true;
}

$tdatabuyers[".rowHighlite"] = true;


// button handlers file names

$tdatabuyers[".addPageEvents"] = false;

$tdatabuyers[".arrKeyFields"][] = "idbuyers";
$tdatabuyers[".arrKeyFields"][] = "ttl_actions_idttl_actions";
$tdatabuyers[".arrKeyFields"][] = "parties_idparties";

// use datepicker for search panel
$tdatabuyers[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdatabuyers[".isUseTimeForSearch"] = false;

$tdatabuyers[".isUseiBox"] = false;



	



$tdatabuyers[".isUseInlineJs"] = $tdatabuyers[".isUseInlineAdd"] || $tdatabuyers[".isUseInlineEdit"];

$tdatabuyers[".allSearchFields"] = array();

$tdatabuyers[".globSearchFields"][] = "postal";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("postal", $tdatabuyers[".allSearchFields"]))
{
	$tdatabuyers[".allSearchFields"][] = "postal";	
}
$tdatabuyers[".globSearchFields"][] = "co_name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("co_name", $tdatabuyers[".allSearchFields"]))
{
	$tdatabuyers[".allSearchFields"][] = "co_name";	
}
$tdatabuyers[".globSearchFields"][] = "addr1";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("addr1", $tdatabuyers[".allSearchFields"]))
{
	$tdatabuyers[".allSearchFields"][] = "addr1";	
}
$tdatabuyers[".globSearchFields"][] = "addr2";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("addr2", $tdatabuyers[".allSearchFields"]))
{
	$tdatabuyers[".allSearchFields"][] = "addr2";	
}
$tdatabuyers[".globSearchFields"][] = "name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("name", $tdatabuyers[".allSearchFields"]))
{
	$tdatabuyers[".allSearchFields"][] = "name";	
}
$tdatabuyers[".globSearchFields"][] = "phone";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("phone", $tdatabuyers[".allSearchFields"]))
{
	$tdatabuyers[".allSearchFields"][] = "phone";	
}
$tdatabuyers[".globSearchFields"][] = "city";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("city", $tdatabuyers[".allSearchFields"]))
{
	$tdatabuyers[".allSearchFields"][] = "city";	
}
$tdatabuyers[".globSearchFields"][] = "state";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("state", $tdatabuyers[".allSearchFields"]))
{
	$tdatabuyers[".allSearchFields"][] = "state";	
}


$tdatabuyers[".googleLikeFields"][] = "idbuyers";
$tdatabuyers[".googleLikeFields"][] = "ttl_actions_idttl_actions";
$tdatabuyers[".googleLikeFields"][] = "parties_idparties";
$tdatabuyers[".googleLikeFields"][] = "name";
$tdatabuyers[".googleLikeFields"][] = "addr2";
$tdatabuyers[".googleLikeFields"][] = "co_name";
$tdatabuyers[".googleLikeFields"][] = "addr1";
$tdatabuyers[".googleLikeFields"][] = "postal";
$tdatabuyers[".googleLikeFields"][] = "phone";
$tdatabuyers[".googleLikeFields"][] = "city";
$tdatabuyers[".googleLikeFields"][] = "state";



$tdatabuyers[".advSearchFields"][] = "idbuyers";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("idbuyers", $tdatabuyers[".allSearchFields"])) 
{
	$tdatabuyers[".allSearchFields"][] = "idbuyers";	
}
$tdatabuyers[".advSearchFields"][] = "ttl_actions_idttl_actions";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ttl_actions_idttl_actions", $tdatabuyers[".allSearchFields"])) 
{
	$tdatabuyers[".allSearchFields"][] = "ttl_actions_idttl_actions";	
}
$tdatabuyers[".advSearchFields"][] = "parties_idparties";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("parties_idparties", $tdatabuyers[".allSearchFields"])) 
{
	$tdatabuyers[".allSearchFields"][] = "parties_idparties";	
}
$tdatabuyers[".advSearchFields"][] = "name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("name", $tdatabuyers[".allSearchFields"])) 
{
	$tdatabuyers[".allSearchFields"][] = "name";	
}
$tdatabuyers[".advSearchFields"][] = "addr2";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("addr2", $tdatabuyers[".allSearchFields"])) 
{
	$tdatabuyers[".allSearchFields"][] = "addr2";	
}
$tdatabuyers[".advSearchFields"][] = "co_name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("co_name", $tdatabuyers[".allSearchFields"])) 
{
	$tdatabuyers[".allSearchFields"][] = "co_name";	
}
$tdatabuyers[".advSearchFields"][] = "addr1";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("addr1", $tdatabuyers[".allSearchFields"])) 
{
	$tdatabuyers[".allSearchFields"][] = "addr1";	
}
$tdatabuyers[".advSearchFields"][] = "postal";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("postal", $tdatabuyers[".allSearchFields"])) 
{
	$tdatabuyers[".allSearchFields"][] = "postal";	
}
$tdatabuyers[".advSearchFields"][] = "phone";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("phone", $tdatabuyers[".allSearchFields"])) 
{
	$tdatabuyers[".allSearchFields"][] = "phone";	
}
$tdatabuyers[".advSearchFields"][] = "city";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("city", $tdatabuyers[".allSearchFields"])) 
{
	$tdatabuyers[".allSearchFields"][] = "city";	
}
$tdatabuyers[".advSearchFields"][] = "state";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("state", $tdatabuyers[".allSearchFields"])) 
{
	$tdatabuyers[".allSearchFields"][] = "state";	
}

$tdatabuyers[".isTableType"] = "list";


	

$tdatabuyers[".isDisplayLoading"] = true;


// Access doesn't support subqueries from the same table as main
$tdatabuyers[".subQueriesSupAccess"] = true;





$tdatabuyers[".pageSize"] = 60;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdatabuyers[".strOrderBy"] = $gstrOrderBy;
	
$tdatabuyers[".orderindexes"] = array();

$tdatabuyers[".sqlHead"] = "SELECT buyers.idbuyers,  buyers.ttl_actions_idttl_actions,  buyers.parties_idparties,  parties.name,  parties.phone,  parties.co_name,  parties.addr1,  parties.addr2,  parties.city,  parties.`state`,  parties.postal";
$tdatabuyers[".sqlFrom"] = "FROM buyers  LEFT OUTER JOIN parties ON buyers.parties_idparties = parties.idparties";
$tdatabuyers[".sqlWhereExpr"] = "";
$tdatabuyers[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 60;
$arrRPP[] = 250;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabuyers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabuyers[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "idbuyers";
	$tableKeys[] = "ttl_actions_idttl_actions";
	$tableKeys[] = "parties_idparties";
	$tdatabuyers[".Keys"] = $tableKeys;

$tdatabuyers[".listFields"] = array();
$tdatabuyers[".listFields"][] = "name";
$tdatabuyers[".listFields"][] = "phone";
$tdatabuyers[".listFields"][] = "co_name";
$tdatabuyers[".listFields"][] = "addr1";
$tdatabuyers[".listFields"][] = "addr2";
$tdatabuyers[".listFields"][] = "city";
$tdatabuyers[".listFields"][] = "state";
$tdatabuyers[".listFields"][] = "postal";

$tdatabuyers[".addFields"] = array();
$tdatabuyers[".addFields"][] = "parties_idparties";

$tdatabuyers[".inlineAddFields"] = array();

$tdatabuyers[".editFields"] = array();
$tdatabuyers[".editFields"][] = "parties_idparties";

$tdatabuyers[".inlineEditFields"] = array();

	
//	idbuyers
	$fdata = array();
	$fdata["strName"] = "idbuyers";
	$fdata["ownerTable"] = "buyers";
	$fdata["Label"]="Idbuyers"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		$fdata["AutoInc"]=true;
	
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "idbuyers";
	
		$fdata["FullName"]= "buyers.idbuyers";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 1;
				$fdata["EditParams"]="";
			
		
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				
		
				
		
		
		
			$tdatabuyers["idbuyers"]=$fdata;
//	ttl_actions_idttl_actions
	$fdata = array();
	$fdata["strName"] = "ttl_actions_idttl_actions";
	$fdata["ownerTable"] = "buyers";
	$fdata["Label"]="Ttl Actions Idttl Actions"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "ttl_actions_idttl_actions";
	
		$fdata["FullName"]= "buyers.ttl_actions_idttl_actions";
	
		
		
		
		
		
				$fdata["Index"]= 2;
				$fdata["EditParams"]="";
			
		
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
		//End validation
	
				
		
				
		
		
		
			$tdatabuyers["ttl_actions_idttl_actions"]=$fdata;
//	parties_idparties
	$fdata = array();
	$fdata["strName"] = "parties_idparties";
	$fdata["ownerTable"] = "buyers";
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
	
		$fdata["FullName"]= "buyers.parties_idparties";
	
		
		
		
		
		
				$fdata["Index"]= 3;
				
		
		$fdata["bAddPage"]=true; 
	
		
		$fdata["bEditPage"]=true; 
	
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
						
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatabuyers["parties_idparties"]=$fdata;
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
	
		
				
		
		
		
			$tdatabuyers["name"]=$fdata;
//	phone
	$fdata = array();
	$fdata["strName"] = "phone";
	$fdata["ownerTable"] = "parties";
	$fdata["Label"]="Phone"; 
	
		
		
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
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("US Phone Number");	
						
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatabuyers["phone"]=$fdata;
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
	
		
				
		
		
		
			$tdatabuyers["co_name"]=$fdata;
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
	
		
				
		
		
		
			$tdatabuyers["addr1"]=$fdata;
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
	
		
				
		
		
		
			$tdatabuyers["addr2"]=$fdata;
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
	
		
				
		
		
		
			$tdatabuyers["city"]=$fdata;
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
	
		
				
		
		
		
			$tdatabuyers["state"]=$fdata;
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
	
		
				
		
		
		
			$tdatabuyers["postal"]=$fdata;


	
$tables_data["buyers"]=&$tdatabuyers;
$field_labels["buyers"] = &$fieldLabelsbuyers;
$fieldToolTips["buyers"] = &$fieldToolTipsbuyers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["buyers"] = array();

	
// tables which are master tables for current table (detail)
$masterTablesData["buyers"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="ttl_actions";
	$masterTablesData["buyers"][$mIndex] = array(
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
		$masterTablesData["buyers"][$mIndex]["masterKeys"][]="idttl_actions";
		$masterTablesData["buyers"][$mIndex]["detailKeys"][]="ttl_actions_idttl_actions";

$mIndex = 2-1;
			$strOriginalDetailsTable="parties";
	$masterTablesData["buyers"][$mIndex] = array(
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
		$masterTablesData["buyers"][$mIndex]["masterKeys"][]="idparties";
		$masterTablesData["buyers"][$mIndex]["detailKeys"][]="parties_idparties";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_buyers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "buyers.idbuyers,  buyers.ttl_actions_idttl_actions,  buyers.parties_idparties,  parties.name,  parties.phone,  parties.co_name,  parties.addr1,  parties.addr2,  parties.city,  parties.`state`,  parties.postal";
$proto0["m_strFrom"] = "FROM buyers  LEFT OUTER JOIN parties ON buyers.parties_idparties = parties.idparties";
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
	"m_strName" => "idbuyers",
	"m_strTable" => "buyers"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ttl_actions_idttl_actions",
	"m_strTable" => "buyers"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "parties_idparties",
	"m_strTable" => "buyers"
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
$proto28["m_strName"] = "buyers";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "idbuyers";
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
$proto33["m_sql"] = "buyers.parties_idparties = parties.idparties";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "parties_idparties",
	"m_strTable" => "buyers"
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
$queryData_buyers = createSqlQuery_buyers();
$tdatabuyers[".sqlquery"] = $queryData_buyers;



include_once(getabspath("include/buyers_events.php"));
$tableEvents["buyers"] = new eventclass_buyers;
$tdatabuyers[".hasEvents"] = true;

?>
