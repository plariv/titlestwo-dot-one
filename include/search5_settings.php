<?php
$tdatasearch5=array();
	$tdatasearch5[".NumberOfChars"]=80; 
	$tdatasearch5[".ShortName"]="search5";
	$tdatasearch5[".OwnerID"]="";
	$tdatasearch5[".OriginalTable"]="search5";


	
//	field labels
$fieldLabelssearch5 = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssearch5["English"]=array();
	$fieldToolTipssearch5["English"]=array();
	$fieldLabelssearch5["English"]["idttl_actions"] = "Idttl Actions";
	$fieldToolTipssearch5["English"]["idttl_actions"] = "";
	$fieldLabelssearch5["English"]["FileNumber"] = "File Number";
	$fieldToolTipssearch5["English"]["FileNumber"] = "";
	$fieldLabelssearch5["English"]["NameOfSeller"] = "Name Of Seller";
	$fieldToolTipssearch5["English"]["NameOfSeller"] = "";
	$fieldLabelssearch5["English"]["NameOfBuyer"] = "Name Of Buyer";
	$fieldToolTipssearch5["English"]["NameOfBuyer"] = "";
	$fieldLabelssearch5["English"]["NameOfBroker"] = "Name Of Broker";
	$fieldToolTipssearch5["English"]["NameOfBroker"] = "";
	$fieldLabelssearch5["English"]["BrokerCo"] = "Broker Co";
	$fieldToolTipssearch5["English"]["BrokerCo"] = "";
	$fieldLabelssearch5["English"]["PropAddress"] = "Prop Address";
	$fieldToolTipssearch5["English"]["PropAddress"] = "";
	$fieldLabelssearch5["English"]["City"] = "City";
	$fieldToolTipssearch5["English"]["City"] = "";
	$fieldLabelssearch5["English"]["MortgageBy"] = "Mortgage By";
	$fieldToolTipssearch5["English"]["MortgageBy"] = "";
	$fieldLabelssearch5["English"]["Client_A"] = "Client A";
	$fieldToolTipssearch5["English"]["Client A"] = "";
	$fieldLabelssearch5["English"]["Client_B"] = "Client B";
	$fieldToolTipssearch5["English"]["Client B"] = "";
	$fieldLabelssearch5["English"]["Tenant"] = "Tenant";
	$fieldToolTipssearch5["English"]["Tenant"] = "";
	$fieldLabelssearch5["English"]["Matter"] = "Matter";
	$fieldToolTipssearch5["English"]["Matter"] = "";
	if (count($fieldToolTipssearch5["English"])){
		$tdatasearch5[".isUseToolTips"]=true;
	}
}


	
	$tdatasearch5[".NCSearch"]=true;

	

$tdatasearch5[".shortTableName"] = "search5";
$tdatasearch5[".nSecOptions"] = 0;
$tdatasearch5[".recsPerRowList"] = 1;	
$tdatasearch5[".tableGroupBy"] = "0";
$tdatasearch5[".mainTableOwnerID"] = "";
$tdatasearch5[".moveNext"] = 1;




$tdatasearch5[".showAddInPopup"] = false;

$tdatasearch5[".showEditInPopup"] = false;

$tdatasearch5[".showViewInPopup"] = false;


$tdatasearch5[".fieldsForRegister"] = array();

$tdatasearch5[".listAjax"] = false;

	$tdatasearch5[".audit"] = false;

	$tdatasearch5[".locking"] = false;
	
$tdatasearch5[".listIcons"] = true;




$tdatasearch5[".showSimpleSearchOptions"] = false;

$tdatasearch5[".showSearchPanel"] = true;


if (isMobile()){
$tdatasearch5[".isUseAjaxSuggest"] = false;
}else {
$tdatasearch5[".isUseAjaxSuggest"] = true;
}

$tdatasearch5[".rowHighlite"] = true;


// button handlers file names

$tdatasearch5[".addPageEvents"] = false;

$tdatasearch5[".arrKeyFields"][] = "idttl_actions";

// use datepicker for search panel
$tdatasearch5[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdatasearch5[".isUseTimeForSearch"] = false;

$tdatasearch5[".isUseiBox"] = false;



	

$tdatasearch5[".useDetailsPreview"] = true;	


$tdatasearch5[".isUseInlineJs"] = $tdatasearch5[".isUseInlineAdd"] || $tdatasearch5[".isUseInlineEdit"];

$tdatasearch5[".allSearchFields"] = array();

$tdatasearch5[".globSearchFields"][] = "FileNumber";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("FileNumber", $tdatasearch5[".allSearchFields"]))
{
	$tdatasearch5[".allSearchFields"][] = "FileNumber";	
}
$tdatasearch5[".globSearchFields"][] = "NameOfSeller";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("NameOfSeller", $tdatasearch5[".allSearchFields"]))
{
	$tdatasearch5[".allSearchFields"][] = "NameOfSeller";	
}
$tdatasearch5[".globSearchFields"][] = "NameOfBuyer";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("NameOfBuyer", $tdatasearch5[".allSearchFields"]))
{
	$tdatasearch5[".allSearchFields"][] = "NameOfBuyer";	
}
$tdatasearch5[".globSearchFields"][] = "NameOfBroker";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("NameOfBroker", $tdatasearch5[".allSearchFields"]))
{
	$tdatasearch5[".allSearchFields"][] = "NameOfBroker";	
}
$tdatasearch5[".globSearchFields"][] = "BrokerCo";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("BrokerCo", $tdatasearch5[".allSearchFields"]))
{
	$tdatasearch5[".allSearchFields"][] = "BrokerCo";	
}
$tdatasearch5[".globSearchFields"][] = "PropAddress";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("PropAddress", $tdatasearch5[".allSearchFields"]))
{
	$tdatasearch5[".allSearchFields"][] = "PropAddress";	
}
$tdatasearch5[".globSearchFields"][] = "City";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("City", $tdatasearch5[".allSearchFields"]))
{
	$tdatasearch5[".allSearchFields"][] = "City";	
}
$tdatasearch5[".globSearchFields"][] = "MortgageBy";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("MortgageBy", $tdatasearch5[".allSearchFields"]))
{
	$tdatasearch5[".allSearchFields"][] = "MortgageBy";	
}
$tdatasearch5[".globSearchFields"][] = "Client A";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Client A", $tdatasearch5[".allSearchFields"]))
{
	$tdatasearch5[".allSearchFields"][] = "Client A";	
}
$tdatasearch5[".globSearchFields"][] = "Client B";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Client B", $tdatasearch5[".allSearchFields"]))
{
	$tdatasearch5[".allSearchFields"][] = "Client B";	
}
$tdatasearch5[".globSearchFields"][] = "Tenant";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Tenant", $tdatasearch5[".allSearchFields"]))
{
	$tdatasearch5[".allSearchFields"][] = "Tenant";	
}
$tdatasearch5[".globSearchFields"][] = "Matter";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Matter", $tdatasearch5[".allSearchFields"]))
{
	$tdatasearch5[".allSearchFields"][] = "Matter";	
}


$tdatasearch5[".googleLikeFields"][] = "FileNumber";
$tdatasearch5[".googleLikeFields"][] = "NameOfSeller";
$tdatasearch5[".googleLikeFields"][] = "NameOfBuyer";
$tdatasearch5[".googleLikeFields"][] = "NameOfBroker";
$tdatasearch5[".googleLikeFields"][] = "BrokerCo";
$tdatasearch5[".googleLikeFields"][] = "PropAddress";
$tdatasearch5[".googleLikeFields"][] = "City";
$tdatasearch5[".googleLikeFields"][] = "MortgageBy";
$tdatasearch5[".googleLikeFields"][] = "Client A";
$tdatasearch5[".googleLikeFields"][] = "Client B";
$tdatasearch5[".googleLikeFields"][] = "Tenant";
$tdatasearch5[".googleLikeFields"][] = "Matter";



$tdatasearch5[".advSearchFields"][] = "FileNumber";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("FileNumber", $tdatasearch5[".allSearchFields"])) 
{
	$tdatasearch5[".allSearchFields"][] = "FileNumber";	
}
$tdatasearch5[".advSearchFields"][] = "NameOfSeller";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("NameOfSeller", $tdatasearch5[".allSearchFields"])) 
{
	$tdatasearch5[".allSearchFields"][] = "NameOfSeller";	
}
$tdatasearch5[".advSearchFields"][] = "NameOfBuyer";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("NameOfBuyer", $tdatasearch5[".allSearchFields"])) 
{
	$tdatasearch5[".allSearchFields"][] = "NameOfBuyer";	
}
$tdatasearch5[".advSearchFields"][] = "NameOfBroker";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("NameOfBroker", $tdatasearch5[".allSearchFields"])) 
{
	$tdatasearch5[".allSearchFields"][] = "NameOfBroker";	
}
$tdatasearch5[".advSearchFields"][] = "BrokerCo";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("BrokerCo", $tdatasearch5[".allSearchFields"])) 
{
	$tdatasearch5[".allSearchFields"][] = "BrokerCo";	
}
$tdatasearch5[".advSearchFields"][] = "PropAddress";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("PropAddress", $tdatasearch5[".allSearchFields"])) 
{
	$tdatasearch5[".allSearchFields"][] = "PropAddress";	
}
$tdatasearch5[".advSearchFields"][] = "City";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("City", $tdatasearch5[".allSearchFields"])) 
{
	$tdatasearch5[".allSearchFields"][] = "City";	
}
$tdatasearch5[".advSearchFields"][] = "MortgageBy";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("MortgageBy", $tdatasearch5[".allSearchFields"])) 
{
	$tdatasearch5[".allSearchFields"][] = "MortgageBy";	
}
$tdatasearch5[".advSearchFields"][] = "Client A";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Client A", $tdatasearch5[".allSearchFields"])) 
{
	$tdatasearch5[".allSearchFields"][] = "Client A";	
}
$tdatasearch5[".advSearchFields"][] = "Client B";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Client B", $tdatasearch5[".allSearchFields"])) 
{
	$tdatasearch5[".allSearchFields"][] = "Client B";	
}
$tdatasearch5[".advSearchFields"][] = "Tenant";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Tenant", $tdatasearch5[".allSearchFields"])) 
{
	$tdatasearch5[".allSearchFields"][] = "Tenant";	
}
$tdatasearch5[".advSearchFields"][] = "Matter";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Matter", $tdatasearch5[".allSearchFields"])) 
{
	$tdatasearch5[".allSearchFields"][] = "Matter";	
}

$tdatasearch5[".isTableType"] = "list";


	

$tdatasearch5[".isDisplayLoading"] = true;


// Access doesn't support subqueries from the same table as main
$tdatasearch5[".subQueriesSupAccess"] = true;

	



$tdatasearch5[".pageSize"] = 20;

$gstrOrderBy = "ORDER BY FileNumber DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdatasearch5[".strOrderBy"] = $gstrOrderBy;
	
$tdatasearch5[".orderindexes"] = array();
$tdatasearch5[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "FileNumber");

$tdatasearch5[".sqlHead"] = "SELECT idttl_actions,  FileNumber,  NameOfSeller,  NameOfBuyer,  NameOfBroker,  BrokerCo,  PropAddress,  City,  MortgageBy,  `Client A`,  `Client B`,  Tenant,  Matter";
$tdatasearch5[".sqlFrom"] = "FROM search5";
$tdatasearch5[".sqlWhereExpr"] = "";
$tdatasearch5[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasearch5[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasearch5[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "idttl_actions";
	$tdatasearch5[".Keys"] = $tableKeys;

$tdatasearch5[".listFields"] = array();
$tdatasearch5[".listFields"][] = "FileNumber";
$tdatasearch5[".listFields"][] = "NameOfSeller";
$tdatasearch5[".listFields"][] = "NameOfBuyer";
$tdatasearch5[".listFields"][] = "NameOfBroker";
$tdatasearch5[".listFields"][] = "BrokerCo";
$tdatasearch5[".listFields"][] = "PropAddress";
$tdatasearch5[".listFields"][] = "City";
$tdatasearch5[".listFields"][] = "MortgageBy";
$tdatasearch5[".listFields"][] = "Client A";
$tdatasearch5[".listFields"][] = "Client B";
$tdatasearch5[".listFields"][] = "Tenant";
$tdatasearch5[".listFields"][] = "Matter";

$tdatasearch5[".addFields"] = array();

$tdatasearch5[".inlineAddFields"] = array();

$tdatasearch5[".editFields"] = array();

$tdatasearch5[".inlineEditFields"] = array();

	
//	idttl_actions
	$fdata = array();
	$fdata["strName"] = "idttl_actions";
	$fdata["ownerTable"] = "search5";
	$fdata["Label"]="Idttl Actions"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "idttl_actions";
	
		$fdata["FullName"]= "idttl_actions";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 1;
				$fdata["EditParams"]="";
			
		
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				
		
				
		
		
		
			$tdatasearch5["idttl_actions"]=$fdata;
//	FileNumber
	$fdata = array();
	$fdata["strName"] = "FileNumber";
	$fdata["ownerTable"] = "search5";
	$fdata["Label"]="File Number"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "FileNumber";
	
		$fdata["FullName"]= "FileNumber";
	
		
		
		
		
		
				$fdata["Index"]= 2;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=6";
		
		$fdata["bListPage"]=true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatasearch5["FileNumber"]=$fdata;
//	NameOfSeller
	$fdata = array();
	$fdata["strName"] = "NameOfSeller";
	$fdata["ownerTable"] = "search5";
	$fdata["Label"]="Name Of Seller"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "NameOfSeller";
	
		$fdata["FullName"]= "NameOfSeller";
	
		
		
		
		
		
				$fdata["Index"]= 3;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=60";
		
		$fdata["bListPage"]=true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatasearch5["NameOfSeller"]=$fdata;
//	NameOfBuyer
	$fdata = array();
	$fdata["strName"] = "NameOfBuyer";
	$fdata["ownerTable"] = "search5";
	$fdata["Label"]="Name Of Buyer"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "NameOfBuyer";
	
		$fdata["FullName"]= "NameOfBuyer";
	
		
		
		
		
		
				$fdata["Index"]= 4;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=60";
		
		$fdata["bListPage"]=true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatasearch5["NameOfBuyer"]=$fdata;
//	NameOfBroker
	$fdata = array();
	$fdata["strName"] = "NameOfBroker";
	$fdata["ownerTable"] = "search5";
	$fdata["Label"]="Name Of Broker"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "NameOfBroker";
	
		$fdata["FullName"]= "NameOfBroker";
	
		
		
		
		
		
				$fdata["Index"]= 5;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=60";
		
		$fdata["bListPage"]=true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatasearch5["NameOfBroker"]=$fdata;
//	BrokerCo
	$fdata = array();
	$fdata["strName"] = "BrokerCo";
	$fdata["ownerTable"] = "search5";
	$fdata["Label"]="Broker Co"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "BrokerCo";
	
		$fdata["FullName"]= "BrokerCo";
	
		
		
		
		
		
				$fdata["Index"]= 6;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=60";
		
		$fdata["bListPage"]=true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatasearch5["BrokerCo"]=$fdata;
//	PropAddress
	$fdata = array();
	$fdata["strName"] = "PropAddress";
	$fdata["ownerTable"] = "search5";
	$fdata["Label"]="Prop Address"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "PropAddress";
	
		$fdata["FullName"]= "PropAddress";
	
		
		
		
		
		
				$fdata["Index"]= 7;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=45";
		
		$fdata["bListPage"]=true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatasearch5["PropAddress"]=$fdata;
//	City
	$fdata = array();
	$fdata["strName"] = "City";
	$fdata["ownerTable"] = "search5";
	$fdata["Label"]="City"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "City";
	
		$fdata["FullName"]= "City";
	
		
		
		
		
		
				$fdata["Index"]= 8;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=45";
		
		$fdata["bListPage"]=true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatasearch5["City"]=$fdata;
//	MortgageBy
	$fdata = array();
	$fdata["strName"] = "MortgageBy";
	$fdata["ownerTable"] = "search5";
	$fdata["Label"]="Mortgage By"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "MortgageBy";
	
		$fdata["FullName"]= "MortgageBy";
	
		
		
		
		
		
				$fdata["Index"]= 9;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=45";
		
		$fdata["bListPage"]=true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatasearch5["MortgageBy"]=$fdata;
//	Client A
	$fdata = array();
	$fdata["strName"] = "Client A";
	$fdata["ownerTable"] = "search5";
	$fdata["Label"]="Client A"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Client_A";
	
		$fdata["FullName"]= "`Client A`";
	
		
		
		
		
		
				$fdata["Index"]= 10;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=60";
		
		$fdata["bListPage"]=true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatasearch5["Client A"]=$fdata;
//	Client B
	$fdata = array();
	$fdata["strName"] = "Client B";
	$fdata["ownerTable"] = "search5";
	$fdata["Label"]="Client B"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Client_B";
	
		$fdata["FullName"]= "`Client B`";
	
		
		
		
		
		
				$fdata["Index"]= 11;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=60";
		
		$fdata["bListPage"]=true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatasearch5["Client B"]=$fdata;
//	Tenant
	$fdata = array();
	$fdata["strName"] = "Tenant";
	$fdata["ownerTable"] = "search5";
	$fdata["Label"]="Tenant"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Tenant";
	
		$fdata["FullName"]= "Tenant";
	
		
		
		
		
		
				$fdata["Index"]= 12;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=45";
		
		$fdata["bListPage"]=true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatasearch5["Tenant"]=$fdata;
//	Matter
	$fdata = array();
	$fdata["strName"] = "Matter";
	$fdata["ownerTable"] = "search5";
	$fdata["Label"]="Matter"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Matter";
	
		$fdata["FullName"]= "Matter";
	
		
		
		
		
		
				$fdata["Index"]= 13;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=60";
		
		$fdata["bListPage"]=true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatasearch5["Matter"]=$fdata;


	
$tables_data["search5"]=&$tdatasearch5;
$field_labels["search5"] = &$fieldLabelssearch5;
$fieldToolTips["search5"] = &$fieldToolTipssearch5;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["search5"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="ttl_actions";
	$detailsTablesData["search5"][$dIndex] = array(
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
		, "previewOnAdd" => 0
		, "previewOnEdit" => 0
		, "previewOnView" => 0
	);
	
		
		$detailsTablesData["search5"][$dIndex]["masterKeys"][]="idttl_actions";
		$detailsTablesData["search5"][$dIndex]["detailKeys"][]="idttl_actions";


	
// tables which are master tables for current table (detail)
$masterTablesData["search5"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_search5()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idttl_actions,  FileNumber,  NameOfSeller,  NameOfBuyer,  NameOfBroker,  BrokerCo,  PropAddress,  City,  MortgageBy,  `Client A`,  `Client B`,  Tenant,  Matter";
$proto0["m_strFrom"] = "FROM search5";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY FileNumber DESC";
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
	"m_strName" => "idttl_actions",
	"m_strTable" => "search5"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "FileNumber",
	"m_strTable" => "search5"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "NameOfSeller",
	"m_strTable" => "search5"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "NameOfBuyer",
	"m_strTable" => "search5"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "NameOfBroker",
	"m_strTable" => "search5"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "BrokerCo",
	"m_strTable" => "search5"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "PropAddress",
	"m_strTable" => "search5"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "City",
	"m_strTable" => "search5"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "MortgageBy",
	"m_strTable" => "search5"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Client A",
	"m_strTable" => "search5"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Client B",
	"m_strTable" => "search5"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "Tenant",
	"m_strTable" => "search5"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Matter",
	"m_strTable" => "search5"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto31=array();
$proto31["m_link"] = "SQLL_MAIN";
			$proto32=array();
$proto32["m_strName"] = "search5";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "idttl_actions";
$proto32["m_columns"][] = "FileNumber";
$proto32["m_columns"][] = "NameOfSeller";
$proto32["m_columns"][] = "NameOfBuyer";
$proto32["m_columns"][] = "NameOfBroker";
$proto32["m_columns"][] = "BrokerCo";
$proto32["m_columns"][] = "PropAddress";
$proto32["m_columns"][] = "City";
$proto32["m_columns"][] = "MortgageBy";
$proto32["m_columns"][] = "Client A";
$proto32["m_columns"][] = "Client B";
$proto32["m_columns"][] = "Tenant";
$proto32["m_columns"][] = "Matter";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_alias"] = "";
$proto33=array();
$proto33["m_sql"] = "";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "";
$proto33["m_havingmode"] = "0";
$proto33["m_inBrackets"] = "0";
$proto33["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "FileNumber",
	"m_strTable" => "search5"
));

$proto35["m_column"]=$obj;
$proto35["m_bAsc"] = 0;
$proto35["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto35);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

return $obj;
}
$queryData_search5 = createSqlQuery_search5();
$tdatasearch5[".sqlquery"] = $queryData_search5;



$tableEvents["search5"] = new eventsBase;
$tdatasearch5[".hasEvents"] = false;

?>
