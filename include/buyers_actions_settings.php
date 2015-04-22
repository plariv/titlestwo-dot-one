<?php
$tdatabuyers_actions=array();
	$tdatabuyers_actions[".NumberOfChars"]=80; 
	$tdatabuyers_actions[".ShortName"]="buyers_actions";
	$tdatabuyers_actions[".OwnerID"]="";
	$tdatabuyers_actions[".OriginalTable"]="buyers";


	
//	field labels
$fieldLabelsbuyers_actions = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbuyers_actions["English"]=array();
	$fieldToolTipsbuyers_actions["English"]=array();
	$fieldLabelsbuyers_actions["English"]["idbuyers"] = "Idbuyers";
	$fieldToolTipsbuyers_actions["English"]["idbuyers"] = "";
	$fieldLabelsbuyers_actions["English"]["city"] = "City";
	$fieldToolTipsbuyers_actions["English"]["city"] = "";
	$fieldLabelsbuyers_actions["English"]["state"] = "State";
	$fieldToolTipsbuyers_actions["English"]["state"] = "";
	$fieldLabelsbuyers_actions["English"]["phone"] = "Phone";
	$fieldToolTipsbuyers_actions["English"]["phone"] = "";
	$fieldLabelsbuyers_actions["English"]["co_name"] = "Company Name";
	$fieldToolTipsbuyers_actions["English"]["co_name"] = "";
	$fieldLabelsbuyers_actions["English"]["ttl_actions_idttl_actions"] = "Title Action File";
	$fieldToolTipsbuyers_actions["English"]["ttl_actions_idttl_actions"] = "";
	$fieldLabelsbuyers_actions["English"]["parties_idparties"] = "Parties Idparties";
	$fieldToolTipsbuyers_actions["English"]["parties_idparties"] = "";
	$fieldLabelsbuyers_actions["English"]["name"] = "Name";
	$fieldToolTipsbuyers_actions["English"]["name"] = "";
	$fieldLabelsbuyers_actions["English"]["addr1"] = "Address 1";
	$fieldToolTipsbuyers_actions["English"]["addr1"] = "";
	$fieldLabelsbuyers_actions["English"]["addr2"] = "Address 2";
	$fieldToolTipsbuyers_actions["English"]["addr2"] = "";
	$fieldLabelsbuyers_actions["English"]["postal"] = "ZIP Code";
	$fieldToolTipsbuyers_actions["English"]["postal"] = "";
	if (count($fieldToolTipsbuyers_actions["English"])){
		$tdatabuyers_actions[".isUseToolTips"]=true;
	}
}


	
	$tdatabuyers_actions[".NCSearch"]=true;

	

$tdatabuyers_actions[".shortTableName"] = "buyers_actions";
$tdatabuyers_actions[".nSecOptions"] = 0;
$tdatabuyers_actions[".recsPerRowList"] = 1;	
$tdatabuyers_actions[".tableGroupBy"] = "0";
$tdatabuyers_actions[".mainTableOwnerID"] = "";
$tdatabuyers_actions[".moveNext"] = 1;




$tdatabuyers_actions[".showAddInPopup"] = false;

$tdatabuyers_actions[".showEditInPopup"] = false;

$tdatabuyers_actions[".showViewInPopup"] = false;


$tdatabuyers_actions[".fieldsForRegister"] = array();

$tdatabuyers_actions[".listAjax"] = false;

	$tdatabuyers_actions[".audit"] = false;

	$tdatabuyers_actions[".locking"] = false;
	
$tdatabuyers_actions[".listIcons"] = true;




$tdatabuyers_actions[".showSimpleSearchOptions"] = true;

$tdatabuyers_actions[".showSearchPanel"] = true;


if (isMobile()){
$tdatabuyers_actions[".isUseAjaxSuggest"] = false;
}else {
$tdatabuyers_actions[".isUseAjaxSuggest"] = true;
}

$tdatabuyers_actions[".rowHighlite"] = true;


// button handlers file names

$tdatabuyers_actions[".addPageEvents"] = false;

$tdatabuyers_actions[".arrKeyFields"][] = "idbuyers";
$tdatabuyers_actions[".arrKeyFields"][] = "ttl_actions_idttl_actions";
$tdatabuyers_actions[".arrKeyFields"][] = "parties_idparties";

// use datepicker for search panel
$tdatabuyers_actions[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdatabuyers_actions[".isUseTimeForSearch"] = false;

$tdatabuyers_actions[".isUseiBox"] = false;



	



$tdatabuyers_actions[".isUseInlineJs"] = $tdatabuyers_actions[".isUseInlineAdd"] || $tdatabuyers_actions[".isUseInlineEdit"];

$tdatabuyers_actions[".allSearchFields"] = array();

$tdatabuyers_actions[".globSearchFields"][] = "postal";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("postal", $tdatabuyers_actions[".allSearchFields"]))
{
	$tdatabuyers_actions[".allSearchFields"][] = "postal";	
}
$tdatabuyers_actions[".globSearchFields"][] = "co_name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("co_name", $tdatabuyers_actions[".allSearchFields"]))
{
	$tdatabuyers_actions[".allSearchFields"][] = "co_name";	
}
$tdatabuyers_actions[".globSearchFields"][] = "addr1";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("addr1", $tdatabuyers_actions[".allSearchFields"]))
{
	$tdatabuyers_actions[".allSearchFields"][] = "addr1";	
}
$tdatabuyers_actions[".globSearchFields"][] = "addr2";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("addr2", $tdatabuyers_actions[".allSearchFields"]))
{
	$tdatabuyers_actions[".allSearchFields"][] = "addr2";	
}
$tdatabuyers_actions[".globSearchFields"][] = "name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("name", $tdatabuyers_actions[".allSearchFields"]))
{
	$tdatabuyers_actions[".allSearchFields"][] = "name";	
}
$tdatabuyers_actions[".globSearchFields"][] = "phone";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("phone", $tdatabuyers_actions[".allSearchFields"]))
{
	$tdatabuyers_actions[".allSearchFields"][] = "phone";	
}
$tdatabuyers_actions[".globSearchFields"][] = "city";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("city", $tdatabuyers_actions[".allSearchFields"]))
{
	$tdatabuyers_actions[".allSearchFields"][] = "city";	
}
$tdatabuyers_actions[".globSearchFields"][] = "state";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("state", $tdatabuyers_actions[".allSearchFields"]))
{
	$tdatabuyers_actions[".allSearchFields"][] = "state";	
}



$tdatabuyers_actions[".panelSearchFields"][] = "co_name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("co_name", $tdatabuyers_actions[".allSearchFields"])) 
{
	$tdatabuyers_actions[".allSearchFields"][] = "co_name";	
}
$tdatabuyers_actions[".panelSearchFields"][] = "addr1";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("addr1", $tdatabuyers_actions[".allSearchFields"])) 
{
	$tdatabuyers_actions[".allSearchFields"][] = "addr1";	
}
$tdatabuyers_actions[".panelSearchFields"][] = "addr2";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("addr2", $tdatabuyers_actions[".allSearchFields"])) 
{
	$tdatabuyers_actions[".allSearchFields"][] = "addr2";	
}
$tdatabuyers_actions[".panelSearchFields"][] = "name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("name", $tdatabuyers_actions[".allSearchFields"])) 
{
	$tdatabuyers_actions[".allSearchFields"][] = "name";	
}
$tdatabuyers_actions[".panelSearchFields"][] = "city";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("city", $tdatabuyers_actions[".allSearchFields"])) 
{
	$tdatabuyers_actions[".allSearchFields"][] = "city";	
}
$tdatabuyers_actions[".panelSearchFields"][] = "state";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("state", $tdatabuyers_actions[".allSearchFields"])) 
{
	$tdatabuyers_actions[".allSearchFields"][] = "state";	
}


$tdatabuyers_actions[".advSearchFields"][] = "postal";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("postal", $tdatabuyers_actions[".allSearchFields"])) 
{
	$tdatabuyers_actions[".allSearchFields"][] = "postal";	
}
$tdatabuyers_actions[".advSearchFields"][] = "co_name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("co_name", $tdatabuyers_actions[".allSearchFields"])) 
{
	$tdatabuyers_actions[".allSearchFields"][] = "co_name";	
}
$tdatabuyers_actions[".advSearchFields"][] = "addr1";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("addr1", $tdatabuyers_actions[".allSearchFields"])) 
{
	$tdatabuyers_actions[".allSearchFields"][] = "addr1";	
}
$tdatabuyers_actions[".advSearchFields"][] = "addr2";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("addr2", $tdatabuyers_actions[".allSearchFields"])) 
{
	$tdatabuyers_actions[".allSearchFields"][] = "addr2";	
}
$tdatabuyers_actions[".advSearchFields"][] = "name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("name", $tdatabuyers_actions[".allSearchFields"])) 
{
	$tdatabuyers_actions[".allSearchFields"][] = "name";	
}
$tdatabuyers_actions[".advSearchFields"][] = "phone";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("phone", $tdatabuyers_actions[".allSearchFields"])) 
{
	$tdatabuyers_actions[".allSearchFields"][] = "phone";	
}
$tdatabuyers_actions[".advSearchFields"][] = "city";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("city", $tdatabuyers_actions[".allSearchFields"])) 
{
	$tdatabuyers_actions[".allSearchFields"][] = "city";	
}
$tdatabuyers_actions[".advSearchFields"][] = "state";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("state", $tdatabuyers_actions[".allSearchFields"])) 
{
	$tdatabuyers_actions[".allSearchFields"][] = "state";	
}

$tdatabuyers_actions[".isTableType"] = "list";


	

$tdatabuyers_actions[".isDisplayLoading"] = true;


// Access doesn't support subqueries from the same table as main
$tdatabuyers_actions[".subQueriesSupAccess"] = true;





$tdatabuyers_actions[".pageSize"] = 60;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdatabuyers_actions[".strOrderBy"] = $gstrOrderBy;
	
$tdatabuyers_actions[".orderindexes"] = array();

$tdatabuyers_actions[".sqlHead"] = "SELECT buyers.idbuyers,  buyers.ttl_actions_idttl_actions,  buyers.parties_idparties,  parties.name,  parties.phone,  parties.co_name,  parties.addr1,  parties.addr2,  parties.city,  parties.`state`,  parties.postal";
$tdatabuyers_actions[".sqlFrom"] = "FROM buyers  LEFT OUTER JOIN parties ON buyers.parties_idparties = parties.idparties  INNER JOIN ttl_actions ON buyers.ttl_actions_idttl_actions = ttl_actions.idttl_actions";
$tdatabuyers_actions[".sqlWhereExpr"] = "";
$tdatabuyers_actions[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 60;
$arrRPP[] = 250;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabuyers_actions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabuyers_actions[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "idbuyers";
	$tableKeys[] = "ttl_actions_idttl_actions";
	$tableKeys[] = "parties_idparties";
	$tdatabuyers_actions[".Keys"] = $tableKeys;

$tdatabuyers_actions[".listFields"] = array();
$tdatabuyers_actions[".listFields"][] = "ttl_actions_idttl_actions";
$tdatabuyers_actions[".listFields"][] = "name";
$tdatabuyers_actions[".listFields"][] = "co_name";
$tdatabuyers_actions[".listFields"][] = "city";

$tdatabuyers_actions[".addFields"] = array();

$tdatabuyers_actions[".inlineAddFields"] = array();

$tdatabuyers_actions[".editFields"] = array();

$tdatabuyers_actions[".inlineEditFields"] = array();

	
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
	
				
		
				
		
		
		
			$tdatabuyers_actions["idbuyers"]=$fdata;
//	ttl_actions_idttl_actions
	$fdata = array();
	$fdata["strName"] = "ttl_actions_idttl_actions";
	$fdata["ownerTable"] = "buyers";
	$fdata["Label"]="Title Action File"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "ttl_actions_idttl_actions";
	
		$fdata["FullName"]= "buyers.ttl_actions_idttl_actions";
	
		
		
		
		
		
				$fdata["Index"]= 2;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatabuyers_actions["ttl_actions_idttl_actions"]=$fdata;
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
				
		
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
						
		//End validation
	
				
		
				
		
		
		
			$tdatabuyers_actions["parties_idparties"]=$fdata;
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
	
		
		
		
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatabuyers_actions["name"]=$fdata;
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
			
		
		
		
		
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("US Phone Number");	
						
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatabuyers_actions["phone"]=$fdata;
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
	
		
		
		
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatabuyers_actions["co_name"]=$fdata;
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
			
		
		
		
		
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatabuyers_actions["addr1"]=$fdata;
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
			
		
		
		
		
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatabuyers_actions["addr2"]=$fdata;
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
	
		
		
		
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatabuyers_actions["city"]=$fdata;
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
			
		
		
		
		
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatabuyers_actions["state"]=$fdata;
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
			
		
		
		
		
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatabuyers_actions["postal"]=$fdata;


	
$tables_data["buyers_actions"]=&$tdatabuyers_actions;
$field_labels["buyers_actions"] = &$fieldLabelsbuyers_actions;
$fieldToolTips["buyers_actions"] = &$fieldToolTipsbuyers_actions;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["buyers_actions"] = array();

	
// tables which are master tables for current table (detail)
$masterTablesData["buyers_actions"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_buyers_actions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "buyers.idbuyers,  buyers.ttl_actions_idttl_actions,  buyers.parties_idparties,  parties.name,  parties.phone,  parties.co_name,  parties.addr1,  parties.addr2,  parties.city,  parties.`state`,  parties.postal";
$proto0["m_strFrom"] = "FROM buyers  LEFT OUTER JOIN parties ON buyers.parties_idparties = parties.idparties  INNER JOIN ttl_actions ON buyers.ttl_actions_idttl_actions = ttl_actions.idttl_actions";
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
												$proto35=array();
$proto35["m_link"] = "SQLL_INNERJOIN";
			$proto36=array();
$proto36["m_strName"] = "ttl_actions";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "idttl_actions";
$proto36["m_columns"][] = "ttlnumb";
$proto36["m_columns"][] = "whencreated";
$proto36["m_columns"][] = "examiner";
$proto36["m_columns"][] = "filecabinet";
$proto36["m_columns"][] = "properties_idproperties";
$proto36["m_columns"][] = "titleconame";
$proto36["m_columns"][] = "titlepolicy";
$proto36["m_columns"][] = "titlephone";
$proto36["m_columns"][] = "titleremit";
$proto36["m_columns"][] = "titleatty";
$proto36["m_columns"][] = "titlerefatty";
$proto36["m_columns"][] = "titlerecv";
$proto36["m_columns"][] = "closesched_date";
$proto36["m_columns"][] = "closesched_time";
$proto36["m_columns"][] = "sellprice";
$proto36["m_columns"][] = "deposit";
$proto36["m_columns"][] = "loanamt";
$proto36["m_columns"][] = "refi_purch";
$proto36["m_columns"][] = "res_comm";
$proto36["m_columns"][] = "file_status";
$proto36["m_columns"][] = "file_archlocation";
$proto36["m_columns"][] = "client1";
$proto36["m_columns"][] = "client2";
$proto36["m_columns"][] = "claddr1";
$proto36["m_columns"][] = "claddr2";
$proto36["m_columns"][] = "clphone1";
$proto36["m_columns"][] = "clphone2";
$proto36["m_columns"][] = "tenant";
$proto36["m_columns"][] = "matter";
$proto36["m_columns"][] = "staffatty";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_alias"] = "";
$proto37=array();
$proto37["m_sql"] = "buyers.ttl_actions_idttl_actions = ttl_actions.idttl_actions";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ttl_actions_idttl_actions",
	"m_strTable" => "buyers"
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "= ttl_actions.idttl_actions";
$proto37["m_havingmode"] = "0";
$proto37["m_inBrackets"] = "0";
$proto37["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto37);

$proto35["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto35);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

return $obj;
}
$queryData_buyers_actions = createSqlQuery_buyers_actions();
$tdatabuyers_actions[".sqlquery"] = $queryData_buyers_actions;



include_once(getabspath("include/buyers_actions_events.php"));
$tableEvents["buyers_actions"] = new eventclass_buyers_actions;
$tdatabuyers_actions[".hasEvents"] = true;

?>
