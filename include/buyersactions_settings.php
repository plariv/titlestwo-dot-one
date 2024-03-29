<?php
$tdatabuyersactions=array();
	$tdatabuyersactions[".NumberOfChars"]=80; 
	$tdatabuyersactions[".ShortName"]="buyersactions";
	$tdatabuyersactions[".OwnerID"]="";
	$tdatabuyersactions[".OriginalTable"]="buyersactions";


	
//	field labels
$fieldLabelsbuyersactions = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbuyersactions["English"]=array();
	$fieldToolTipsbuyersactions["English"]=array();
	$fieldLabelsbuyersactions["English"]["idbuyers"] = "Idbuyers";
	$fieldToolTipsbuyersactions["English"]["idbuyers"] = "";
	$fieldLabelsbuyersactions["English"]["ttl_actions_idttl_actions"] = "Ttl Actions Idttl Actions";
	$fieldToolTipsbuyersactions["English"]["ttl_actions_idttl_actions"] = "";
	$fieldLabelsbuyersactions["English"]["parties_idparties"] = "Parties Idparties";
	$fieldToolTipsbuyersactions["English"]["parties_idparties"] = "";
	$fieldLabelsbuyersactions["English"]["idparties"] = "Idparties";
	$fieldToolTipsbuyersactions["English"]["idparties"] = "";
	$fieldLabelsbuyersactions["English"]["name"] = "Name";
	$fieldToolTipsbuyersactions["English"]["name"] = "";
	if (count($fieldToolTipsbuyersactions["English"])){
		$tdatabuyersactions[".isUseToolTips"]=true;
	}
}


	
	$tdatabuyersactions[".NCSearch"]=true;

	

$tdatabuyersactions[".shortTableName"] = "buyersactions";
$tdatabuyersactions[".nSecOptions"] = 0;
$tdatabuyersactions[".recsPerRowList"] = 1;	
$tdatabuyersactions[".tableGroupBy"] = "0";
$tdatabuyersactions[".mainTableOwnerID"] = "";
$tdatabuyersactions[".moveNext"] = 1;




$tdatabuyersactions[".showAddInPopup"] = false;

$tdatabuyersactions[".showEditInPopup"] = false;

$tdatabuyersactions[".showViewInPopup"] = false;


$tdatabuyersactions[".fieldsForRegister"] = array();

$tdatabuyersactions[".listAjax"] = false;

	$tdatabuyersactions[".audit"] = false;

	$tdatabuyersactions[".locking"] = false;
	
$tdatabuyersactions[".listIcons"] = true;




$tdatabuyersactions[".showSimpleSearchOptions"] = false;

$tdatabuyersactions[".showSearchPanel"] = true;


if (isMobile()){
$tdatabuyersactions[".isUseAjaxSuggest"] = false;
}else {
$tdatabuyersactions[".isUseAjaxSuggest"] = true;
}

$tdatabuyersactions[".rowHighlite"] = true;


// button handlers file names

$tdatabuyersactions[".addPageEvents"] = false;

$tdatabuyersactions[".arrKeyFields"][] = "ttl_actions_idttl_actions";

// use datepicker for search panel
$tdatabuyersactions[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdatabuyersactions[".isUseTimeForSearch"] = false;

$tdatabuyersactions[".isUseiBox"] = false;



	

$tdatabuyersactions[".useDetailsPreview"] = true;	


$tdatabuyersactions[".isUseInlineJs"] = $tdatabuyersactions[".isUseInlineAdd"] || $tdatabuyersactions[".isUseInlineEdit"];

$tdatabuyersactions[".allSearchFields"] = array();

$tdatabuyersactions[".globSearchFields"][] = "name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("name", $tdatabuyersactions[".allSearchFields"]))
{
	$tdatabuyersactions[".allSearchFields"][] = "name";	
}


$tdatabuyersactions[".googleLikeFields"][] = "idbuyers";
$tdatabuyersactions[".googleLikeFields"][] = "ttl_actions_idttl_actions";
$tdatabuyersactions[".googleLikeFields"][] = "parties_idparties";
$tdatabuyersactions[".googleLikeFields"][] = "idparties";
$tdatabuyersactions[".googleLikeFields"][] = "name";



$tdatabuyersactions[".advSearchFields"][] = "idbuyers";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("idbuyers", $tdatabuyersactions[".allSearchFields"])) 
{
	$tdatabuyersactions[".allSearchFields"][] = "idbuyers";	
}
$tdatabuyersactions[".advSearchFields"][] = "ttl_actions_idttl_actions";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ttl_actions_idttl_actions", $tdatabuyersactions[".allSearchFields"])) 
{
	$tdatabuyersactions[".allSearchFields"][] = "ttl_actions_idttl_actions";	
}
$tdatabuyersactions[".advSearchFields"][] = "parties_idparties";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("parties_idparties", $tdatabuyersactions[".allSearchFields"])) 
{
	$tdatabuyersactions[".allSearchFields"][] = "parties_idparties";	
}
$tdatabuyersactions[".advSearchFields"][] = "idparties";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("idparties", $tdatabuyersactions[".allSearchFields"])) 
{
	$tdatabuyersactions[".allSearchFields"][] = "idparties";	
}
$tdatabuyersactions[".advSearchFields"][] = "name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("name", $tdatabuyersactions[".allSearchFields"])) 
{
	$tdatabuyersactions[".allSearchFields"][] = "name";	
}

$tdatabuyersactions[".isTableType"] = "list";


	



// Access doesn't support subqueries from the same table as main
$tdatabuyersactions[".subQueriesSupAccess"] = true;

	



$tdatabuyersactions[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdatabuyersactions[".strOrderBy"] = $gstrOrderBy;
	
$tdatabuyersactions[".orderindexes"] = array();

$tdatabuyersactions[".sqlHead"] = "SELECT idbuyers,   ttl_actions_idttl_actions,   parties_idparties,   idparties,   name";
$tdatabuyersactions[".sqlFrom"] = "FROM buyersactions";
$tdatabuyersactions[".sqlWhereExpr"] = "";
$tdatabuyersactions[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabuyersactions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabuyersactions[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "ttl_actions_idttl_actions";
	$tdatabuyersactions[".Keys"] = $tableKeys;

$tdatabuyersactions[".listFields"] = array();
$tdatabuyersactions[".listFields"][] = "name";

$tdatabuyersactions[".addFields"] = array();

$tdatabuyersactions[".inlineAddFields"] = array();

$tdatabuyersactions[".editFields"] = array();

$tdatabuyersactions[".inlineEditFields"] = array();

	
//	idbuyers
	$fdata = array();
	$fdata["strName"] = "idbuyers";
	$fdata["ownerTable"] = "buyersactions";
	$fdata["Label"]="Idbuyers"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "idbuyers";
	
		$fdata["FullName"]= "idbuyers";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 1;
				$fdata["EditParams"]="";
			
		
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				
		
				
		
		
		
			$tdatabuyersactions["idbuyers"]=$fdata;
//	ttl_actions_idttl_actions
	$fdata = array();
	$fdata["strName"] = "ttl_actions_idttl_actions";
	$fdata["ownerTable"] = "buyersactions";
	$fdata["Label"]="Ttl Actions Idttl Actions"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "ttl_actions_idttl_actions";
	
		$fdata["FullName"]= "ttl_actions_idttl_actions";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 2;
				$fdata["EditParams"]="";
			
		
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				
		
				
		
		
		
			$tdatabuyersactions["ttl_actions_idttl_actions"]=$fdata;
//	parties_idparties
	$fdata = array();
	$fdata["strName"] = "parties_idparties";
	$fdata["ownerTable"] = "buyersactions";
	$fdata["Label"]="Parties Idparties"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "parties_idparties";
	
		$fdata["FullName"]= "parties_idparties";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 3;
				$fdata["EditParams"]="";
			
		
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				
		
				
		
		
		
			$tdatabuyersactions["parties_idparties"]=$fdata;
//	idparties
	$fdata = array();
	$fdata["strName"] = "idparties";
	$fdata["ownerTable"] = "buyersactions";
	$fdata["Label"]="Idparties"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "idparties";
	
		$fdata["FullName"]= "idparties";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 4;
				$fdata["EditParams"]="";
			
		
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				
		
				
		
		
		
			$tdatabuyersactions["idparties"]=$fdata;
//	name
	$fdata = array();
	$fdata["strName"] = "name";
	$fdata["ownerTable"] = "buyersactions";
	$fdata["Label"]="Name"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "name";
	
		$fdata["FullName"]= "name";
	
		
		
		
		
		
				$fdata["Index"]= 5;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=60";
		
		$fdata["bListPage"]=true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatabuyersactions["name"]=$fdata;


	
$tables_data["buyersactions"]=&$tdatabuyersactions;
$field_labels["buyersactions"] = &$fieldLabelsbuyersactions;
$fieldToolTips["buyersactions"] = &$fieldToolTipsbuyersactions;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["buyersactions"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="ttl_actions";
	$detailsTablesData["buyersactions"][$dIndex] = array(
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
	
		
		$detailsTablesData["buyersactions"][$dIndex]["masterKeys"][]="ttl_actions_idttl_actions";
		$detailsTablesData["buyersactions"][$dIndex]["detailKeys"][]="idttl_actions";


	
// tables which are master tables for current table (detail)
$masterTablesData["buyersactions"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_buyersactions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idbuyers,   ttl_actions_idttl_actions,   parties_idparties,   idparties,   name";
$proto0["m_strFrom"] = "FROM buyersactions";
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
	"m_strTable" => "buyersactions"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ttl_actions_idttl_actions",
	"m_strTable" => "buyersactions"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "parties_idparties",
	"m_strTable" => "buyersactions"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "idparties",
	"m_strTable" => "buyersactions"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "buyersactions"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "buyersactions";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "idbuyers";
$proto16["m_columns"][] = "ttl_actions_idttl_actions";
$proto16["m_columns"][] = "parties_idparties";
$proto16["m_columns"][] = "idparties";
$proto16["m_columns"][] = "name";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_alias"] = "";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = "0";
$proto17["m_inBrackets"] = "0";
$proto17["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

return $obj;
}
$queryData_buyersactions = createSqlQuery_buyersactions();
$tdatabuyersactions[".sqlquery"] = $queryData_buyersactions;



$tableEvents["buyersactions"] = new eventsBase;
$tdatabuyersactions[".hasEvents"] = false;

?>
