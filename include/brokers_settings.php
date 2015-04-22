<?php
$tdatabrokers=array();
	$tdatabrokers[".NumberOfChars"]=80; 
	$tdatabrokers[".ShortName"]="brokers";
	$tdatabrokers[".OwnerID"]="";
	$tdatabrokers[".OriginalTable"]="brokers";


	
//	field labels
$fieldLabelsbrokers = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbrokers["English"]=array();
	$fieldToolTipsbrokers["English"]=array();
	$fieldLabelsbrokers["English"]["idbrokers"] = "Idbrokers";
	$fieldToolTipsbrokers["English"]["idbrokers"] = "";
	$fieldLabelsbrokers["English"]["ttl_actions_idttl_actions"] = "Ttl Actions Idttl Actions";
	$fieldToolTipsbrokers["English"]["ttl_actions_idttl_actions"] = "";
	$fieldLabelsbrokers["English"]["agents_idagents"] = "Agents Idagents";
	$fieldToolTipsbrokers["English"]["agents_idagents"] = "";
	$fieldLabelsbrokers["English"]["name"] = "Name";
	$fieldToolTipsbrokers["English"]["name"] = "";
	$fieldLabelsbrokers["English"]["phone"] = "Phone";
	$fieldToolTipsbrokers["English"]["phone"] = "";
	$fieldLabelsbrokers["English"]["co_name"] = "Company Name";
	$fieldToolTipsbrokers["English"]["co_name"] = "";
	$fieldLabelsbrokers["English"]["addr1"] = "Address 1";
	$fieldToolTipsbrokers["English"]["addr1"] = "";
	$fieldLabelsbrokers["English"]["addr2"] = "Address 2";
	$fieldToolTipsbrokers["English"]["addr2"] = "";
	$fieldLabelsbrokers["English"]["city"] = "City";
	$fieldToolTipsbrokers["English"]["city"] = "";
	$fieldLabelsbrokers["English"]["state"] = "State";
	$fieldToolTipsbrokers["English"]["state"] = "";
	$fieldLabelsbrokers["English"]["postal"] = "ZIP Code";
	$fieldToolTipsbrokers["English"]["postal"] = "";
	if (count($fieldToolTipsbrokers["English"])){
		$tdatabrokers[".isUseToolTips"]=true;
	}
}


	
	$tdatabrokers[".NCSearch"]=true;

	

$tdatabrokers[".shortTableName"] = "brokers";
$tdatabrokers[".nSecOptions"] = 0;
$tdatabrokers[".recsPerRowList"] = 1;	
$tdatabrokers[".tableGroupBy"] = "0";
$tdatabrokers[".mainTableOwnerID"] = "";
$tdatabrokers[".moveNext"] = 1;




$tdatabrokers[".showAddInPopup"] = false;

$tdatabrokers[".showEditInPopup"] = false;

$tdatabrokers[".showViewInPopup"] = false;


$tdatabrokers[".fieldsForRegister"] = array();

$tdatabrokers[".listAjax"] = false;

	$tdatabrokers[".audit"] = false;

	$tdatabrokers[".locking"] = false;
	
$tdatabrokers[".listIcons"] = true;
$tdatabrokers[".edit"] = true;
$tdatabrokers[".view"] = true;



$tdatabrokers[".delete"] = true;

$tdatabrokers[".showSimpleSearchOptions"] = true;

$tdatabrokers[".showSearchPanel"] = true;


if (isMobile()){
$tdatabrokers[".isUseAjaxSuggest"] = false;
}else {
$tdatabrokers[".isUseAjaxSuggest"] = true;
}

$tdatabrokers[".rowHighlite"] = true;


// button handlers file names

$tdatabrokers[".addPageEvents"] = false;

$tdatabrokers[".arrKeyFields"][] = "idbrokers";

// use datepicker for search panel
$tdatabrokers[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdatabrokers[".isUseTimeForSearch"] = false;

$tdatabrokers[".isUseiBox"] = false;



	



$tdatabrokers[".isUseInlineJs"] = $tdatabrokers[".isUseInlineAdd"] || $tdatabrokers[".isUseInlineEdit"];

$tdatabrokers[".allSearchFields"] = array();

$tdatabrokers[".globSearchFields"][] = "name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("name", $tdatabrokers[".allSearchFields"]))
{
	$tdatabrokers[".allSearchFields"][] = "name";	
}
$tdatabrokers[".globSearchFields"][] = "phone";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("phone", $tdatabrokers[".allSearchFields"]))
{
	$tdatabrokers[".allSearchFields"][] = "phone";	
}
$tdatabrokers[".globSearchFields"][] = "co_name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("co_name", $tdatabrokers[".allSearchFields"]))
{
	$tdatabrokers[".allSearchFields"][] = "co_name";	
}
$tdatabrokers[".globSearchFields"][] = "addr1";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("addr1", $tdatabrokers[".allSearchFields"]))
{
	$tdatabrokers[".allSearchFields"][] = "addr1";	
}
$tdatabrokers[".globSearchFields"][] = "addr2";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("addr2", $tdatabrokers[".allSearchFields"]))
{
	$tdatabrokers[".allSearchFields"][] = "addr2";	
}
$tdatabrokers[".globSearchFields"][] = "city";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("city", $tdatabrokers[".allSearchFields"]))
{
	$tdatabrokers[".allSearchFields"][] = "city";	
}
$tdatabrokers[".globSearchFields"][] = "state";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("state", $tdatabrokers[".allSearchFields"]))
{
	$tdatabrokers[".allSearchFields"][] = "state";	
}
$tdatabrokers[".globSearchFields"][] = "postal";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("postal", $tdatabrokers[".allSearchFields"]))
{
	$tdatabrokers[".allSearchFields"][] = "postal";	
}


$tdatabrokers[".googleLikeFields"][] = "name";
$tdatabrokers[".googleLikeFields"][] = "phone";
$tdatabrokers[".googleLikeFields"][] = "co_name";
$tdatabrokers[".googleLikeFields"][] = "addr1";
$tdatabrokers[".googleLikeFields"][] = "addr2";
$tdatabrokers[".googleLikeFields"][] = "city";
$tdatabrokers[".googleLikeFields"][] = "state";
$tdatabrokers[".googleLikeFields"][] = "postal";



$tdatabrokers[".advSearchFields"][] = "name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("name", $tdatabrokers[".allSearchFields"])) 
{
	$tdatabrokers[".allSearchFields"][] = "name";	
}
$tdatabrokers[".advSearchFields"][] = "phone";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("phone", $tdatabrokers[".allSearchFields"])) 
{
	$tdatabrokers[".allSearchFields"][] = "phone";	
}
$tdatabrokers[".advSearchFields"][] = "co_name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("co_name", $tdatabrokers[".allSearchFields"])) 
{
	$tdatabrokers[".allSearchFields"][] = "co_name";	
}
$tdatabrokers[".advSearchFields"][] = "addr1";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("addr1", $tdatabrokers[".allSearchFields"])) 
{
	$tdatabrokers[".allSearchFields"][] = "addr1";	
}
$tdatabrokers[".advSearchFields"][] = "addr2";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("addr2", $tdatabrokers[".allSearchFields"])) 
{
	$tdatabrokers[".allSearchFields"][] = "addr2";	
}
$tdatabrokers[".advSearchFields"][] = "city";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("city", $tdatabrokers[".allSearchFields"])) 
{
	$tdatabrokers[".allSearchFields"][] = "city";	
}
$tdatabrokers[".advSearchFields"][] = "state";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("state", $tdatabrokers[".allSearchFields"])) 
{
	$tdatabrokers[".allSearchFields"][] = "state";	
}
$tdatabrokers[".advSearchFields"][] = "postal";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("postal", $tdatabrokers[".allSearchFields"])) 
{
	$tdatabrokers[".allSearchFields"][] = "postal";	
}

$tdatabrokers[".isTableType"] = "list";


	

$tdatabrokers[".isDisplayLoading"] = true;


// Access doesn't support subqueries from the same table as main
$tdatabrokers[".subQueriesSupAccess"] = true;





$tdatabrokers[".pageSize"] = 60;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdatabrokers[".strOrderBy"] = $gstrOrderBy;
	
$tdatabrokers[".orderindexes"] = array();

$tdatabrokers[".sqlHead"] = "SELECT brokers.idbrokers,  brokers.ttl_actions_idttl_actions,  brokers.agents_idagents,  agents.name,  agents.phone,  agents.co_name,  agents.addr1,  agents.addr2,  agents.city,  agents.`state`,  agents.postal";
$tdatabrokers[".sqlFrom"] = "FROM brokers  LEFT OUTER JOIN agents ON brokers.agents_idagents = agents.idagents";
$tdatabrokers[".sqlWhereExpr"] = "";
$tdatabrokers[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 60;
$arrRPP[] = 250;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabrokers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabrokers[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "idbrokers";
	$tdatabrokers[".Keys"] = $tableKeys;

$tdatabrokers[".listFields"] = array();
$tdatabrokers[".listFields"][] = "name";
$tdatabrokers[".listFields"][] = "phone";
$tdatabrokers[".listFields"][] = "co_name";
$tdatabrokers[".listFields"][] = "addr1";
$tdatabrokers[".listFields"][] = "addr2";
$tdatabrokers[".listFields"][] = "city";
$tdatabrokers[".listFields"][] = "state";
$tdatabrokers[".listFields"][] = "postal";

$tdatabrokers[".addFields"] = array();
$tdatabrokers[".addFields"][] = "agents_idagents";

$tdatabrokers[".inlineAddFields"] = array();

$tdatabrokers[".editFields"] = array();
$tdatabrokers[".editFields"][] = "agents_idagents";

$tdatabrokers[".inlineEditFields"] = array();

	
//	idbrokers
	$fdata = array();
	$fdata["strName"] = "idbrokers";
	$fdata["ownerTable"] = "brokers";
	$fdata["Label"]="Idbrokers"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		$fdata["AutoInc"]=true;
	
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "idbrokers";
	
		$fdata["FullName"]= "brokers.idbrokers";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 1;
				$fdata["EditParams"]="";
			
		
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				
		
				
		
		
		
			$tdatabrokers["idbrokers"]=$fdata;
//	ttl_actions_idttl_actions
	$fdata = array();
	$fdata["strName"] = "ttl_actions_idttl_actions";
	$fdata["ownerTable"] = "brokers";
	$fdata["Label"]="Ttl Actions Idttl Actions"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "ttl_actions_idttl_actions";
	
		$fdata["FullName"]= "brokers.ttl_actions_idttl_actions";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 2;
				$fdata["EditParams"]="";
			
		
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				
		
				
		
		
		
			$tdatabrokers["ttl_actions_idttl_actions"]=$fdata;
//	agents_idagents
	$fdata = array();
	$fdata["strName"] = "agents_idagents";
	$fdata["ownerTable"] = "brokers";
	$fdata["Label"]="Agents Idagents"; 
	
		
		
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
				
								$fdata["LinkField"]="idagents";
	$fdata["LinkFieldType"]=3;
	$fdata["DisplayField"]="name";
				$fdata["LookupTable"]="agents";
	$fdata["LookupOrderBy"]="";
													$fdata["FastType"]=true; 
							
					
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "agents_idagents";
	
		$fdata["FullName"]= "brokers.agents_idagents";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 3;
				
		
		$fdata["bAddPage"]=true; 
	
		
		$fdata["bEditPage"]=true; 
	
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatabrokers["agents_idagents"]=$fdata;
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
	
		$fdata["FullName"]= "agents.name";
	
		
		
		
		
		
				$fdata["Index"]= 4;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatabrokers["name"]=$fdata;
//	phone
	$fdata = array();
	$fdata["strName"] = "phone";
	$fdata["ownerTable"] = "agents";
	$fdata["Label"]="Phone"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "phone";
	
		$fdata["FullName"]= "agents.phone";
	
		
		
		
		
		
				$fdata["Index"]= 5;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatabrokers["phone"]=$fdata;
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
	
		$fdata["FullName"]= "agents.co_name";
	
		
		
		
		
		
				$fdata["Index"]= 6;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatabrokers["co_name"]=$fdata;
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
	
		$fdata["FullName"]= "agents.addr1";
	
		
		
		
		
		
				$fdata["Index"]= 7;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatabrokers["addr1"]=$fdata;
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
	
		$fdata["FullName"]= "agents.addr2";
	
		
		
		
		
		
				$fdata["Index"]= 8;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatabrokers["addr2"]=$fdata;
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
	
		$fdata["FullName"]= "agents.city";
	
		
		
		
		
		
				$fdata["Index"]= 9;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatabrokers["city"]=$fdata;
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
	
		$fdata["FullName"]= "agents.`state`";
	
		
		
		
		
		
				$fdata["Index"]= 10;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatabrokers["state"]=$fdata;
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
	
		$fdata["FullName"]= "agents.postal";
	
		
		
		
		
		
				$fdata["Index"]= 11;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatabrokers["postal"]=$fdata;


	
$tables_data["brokers"]=&$tdatabrokers;
$field_labels["brokers"] = &$fieldLabelsbrokers;
$fieldToolTips["brokers"] = &$fieldToolTipsbrokers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["brokers"] = array();

	
// tables which are master tables for current table (detail)
$masterTablesData["brokers"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="agents";
	$masterTablesData["brokers"][$mIndex] = array(
		  "mDataSourceTable"=>"agents"
		, "mOriginalTable" => $strOriginalDetailsTable
		, "mShortTable" => "agents"
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
		$masterTablesData["brokers"][$mIndex]["masterKeys"][]="idagents";
		$masterTablesData["brokers"][$mIndex]["detailKeys"][]="agents_idagents";

$mIndex = 2-1;
			$strOriginalDetailsTable="ttl_actions";
	$masterTablesData["brokers"][$mIndex] = array(
		  "mDataSourceTable"=>"ttl_actions"
		, "mOriginalTable" => $strOriginalDetailsTable
		, "mShortTable" => "ttl_actions"
		, "masterKeys" => array()
		, "detailKeys" => array()
		, "dispChildCount" => "0"
		, "hideChild" => "1"	
		, "dispInfo" => "0"								
		, "previewOnList" => 1
		, "previewOnAdd" => 1
		, "previewOnEdit" => 1
		, "previewOnView" => 1
	);	
		$masterTablesData["brokers"][$mIndex]["masterKeys"][]="idttl_actions";
		$masterTablesData["brokers"][$mIndex]["detailKeys"][]="ttl_actions_idttl_actions";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_brokers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "brokers.idbrokers,  brokers.ttl_actions_idttl_actions,  brokers.agents_idagents,  agents.name,  agents.phone,  agents.co_name,  agents.addr1,  agents.addr2,  agents.city,  agents.`state`,  agents.postal";
$proto0["m_strFrom"] = "FROM brokers  LEFT OUTER JOIN agents ON brokers.agents_idagents = agents.idagents";
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
	"m_strName" => "idbrokers",
	"m_strTable" => "brokers"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ttl_actions_idttl_actions",
	"m_strTable" => "brokers"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "agents_idagents",
	"m_strTable" => "brokers"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "agents"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "phone",
	"m_strTable" => "agents"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "co_name",
	"m_strTable" => "agents"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "addr1",
	"m_strTable" => "agents"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "addr2",
	"m_strTable" => "agents"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "city",
	"m_strTable" => "agents"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "state",
	"m_strTable" => "agents"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "postal",
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
$proto28["m_strName"] = "brokers";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "idbrokers";
$proto28["m_columns"][] = "ttl_actions_idttl_actions";
$proto28["m_columns"][] = "agents_idagents";
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
$proto32["m_strName"] = "agents";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "idagents";
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
$proto33["m_sql"] = "brokers.agents_idagents = agents.idagents";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "agents_idagents",
	"m_strTable" => "brokers"
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "= agents.idagents";
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
$queryData_brokers = createSqlQuery_brokers();
$tdatabrokers[".sqlquery"] = $queryData_brokers;



include_once(getabspath("include/brokers_events.php"));
$tableEvents["brokers"] = new eventclass_brokers;
$tdatabrokers[".hasEvents"] = true;

?>
