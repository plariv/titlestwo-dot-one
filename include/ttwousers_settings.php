<?php
$tdatattwousers=array();
	$tdatattwousers[".NumberOfChars"]=80; 
	$tdatattwousers[".ShortName"]="ttwousers";
	$tdatattwousers[".OwnerID"]="";
	$tdatattwousers[".OriginalTable"]="ttwousers";


	
//	field labels
$fieldLabelsttwousers = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsttwousers["English"]=array();
	$fieldToolTipsttwousers["English"]=array();
	$fieldLabelsttwousers["English"]["id"] = "Id";
	$fieldToolTipsttwousers["English"]["id"] = "";
	$fieldLabelsttwousers["English"]["username"] = "Username";
	$fieldToolTipsttwousers["English"]["username"] = "";
	$fieldLabelsttwousers["English"]["password"] = "Password";
	$fieldToolTipsttwousers["English"]["password"] = "";
	$fieldLabelsttwousers["English"]["active"] = "Active";
	$fieldToolTipsttwousers["English"]["active"] = "";
	$fieldLabelsttwousers["English"]["firstname"] = "First Name";
	$fieldToolTipsttwousers["English"]["firstname"] = "";
	$fieldLabelsttwousers["English"]["lastname"] = "Last Name";
	$fieldToolTipsttwousers["English"]["lastname"] = "";
	$fieldLabelsttwousers["English"]["datecreated"] = "Date Created";
	$fieldToolTipsttwousers["English"]["datecreated"] = "";
	$fieldLabelsttwousers["English"]["groupmember"] = "Groupmember";
	$fieldToolTipsttwousers["English"]["groupmember"] = "";
	$fieldLabelsttwousers["English"]["emailaddr"] = "email";
	$fieldToolTipsttwousers["English"]["emailaddr"] = "";
	if (count($fieldToolTipsttwousers["English"])){
		$tdatattwousers[".isUseToolTips"]=true;
	}
}


	
	$tdatattwousers[".NCSearch"]=true;

	

$tdatattwousers[".shortTableName"] = "ttwousers";
$tdatattwousers[".nSecOptions"] = 0;
$tdatattwousers[".recsPerRowList"] = 1;	
$tdatattwousers[".tableGroupBy"] = "0";
$tdatattwousers[".mainTableOwnerID"] = "";
$tdatattwousers[".moveNext"] = 1;




$tdatattwousers[".showAddInPopup"] = false;

$tdatattwousers[".showEditInPopup"] = false;

$tdatattwousers[".showViewInPopup"] = false;


$tdatattwousers[".fieldsForRegister"] = array();

$tdatattwousers[".listAjax"] = false;

	$tdatattwousers[".audit"] = false;

	$tdatattwousers[".locking"] = false;
	
$tdatattwousers[".listIcons"] = true;
$tdatattwousers[".edit"] = true;



$tdatattwousers[".delete"] = true;

$tdatattwousers[".showSimpleSearchOptions"] = false;

$tdatattwousers[".showSearchPanel"] = true;


if (isMobile()){
$tdatattwousers[".isUseAjaxSuggest"] = false;
}else {
$tdatattwousers[".isUseAjaxSuggest"] = true;
}

$tdatattwousers[".rowHighlite"] = true;


// button handlers file names

$tdatattwousers[".addPageEvents"] = false;

$tdatattwousers[".arrKeyFields"][] = "id";

// use datepicker for search panel
$tdatattwousers[".isUseCalendarForSearch"] = true;

// use timepicker for search panel
$tdatattwousers[".isUseTimeForSearch"] = false;

$tdatattwousers[".isUseiBox"] = false;



	



$tdatattwousers[".isUseInlineJs"] = $tdatattwousers[".isUseInlineAdd"] || $tdatattwousers[".isUseInlineEdit"];

$tdatattwousers[".allSearchFields"] = array();



$tdatattwousers[".googleLikeFields"][] = "id";
$tdatattwousers[".googleLikeFields"][] = "username";
$tdatattwousers[".googleLikeFields"][] = "password";
$tdatattwousers[".googleLikeFields"][] = "active";
$tdatattwousers[".googleLikeFields"][] = "firstname";
$tdatattwousers[".googleLikeFields"][] = "lastname";
$tdatattwousers[".googleLikeFields"][] = "datecreated";
$tdatattwousers[".googleLikeFields"][] = "groupmember";
$tdatattwousers[".googleLikeFields"][] = "emailaddr";



$tdatattwousers[".advSearchFields"][] = "id";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("id", $tdatattwousers[".allSearchFields"])) 
{
	$tdatattwousers[".allSearchFields"][] = "id";	
}
$tdatattwousers[".advSearchFields"][] = "username";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("username", $tdatattwousers[".allSearchFields"])) 
{
	$tdatattwousers[".allSearchFields"][] = "username";	
}
$tdatattwousers[".advSearchFields"][] = "password";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("password", $tdatattwousers[".allSearchFields"])) 
{
	$tdatattwousers[".allSearchFields"][] = "password";	
}
$tdatattwousers[".advSearchFields"][] = "active";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("active", $tdatattwousers[".allSearchFields"])) 
{
	$tdatattwousers[".allSearchFields"][] = "active";	
}
$tdatattwousers[".advSearchFields"][] = "firstname";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("firstname", $tdatattwousers[".allSearchFields"])) 
{
	$tdatattwousers[".allSearchFields"][] = "firstname";	
}
$tdatattwousers[".advSearchFields"][] = "lastname";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("lastname", $tdatattwousers[".allSearchFields"])) 
{
	$tdatattwousers[".allSearchFields"][] = "lastname";	
}
$tdatattwousers[".advSearchFields"][] = "datecreated";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("datecreated", $tdatattwousers[".allSearchFields"])) 
{
	$tdatattwousers[".allSearchFields"][] = "datecreated";	
}
$tdatattwousers[".advSearchFields"][] = "groupmember";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("groupmember", $tdatattwousers[".allSearchFields"])) 
{
	$tdatattwousers[".allSearchFields"][] = "groupmember";	
}
$tdatattwousers[".advSearchFields"][] = "emailaddr";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("emailaddr", $tdatattwousers[".allSearchFields"])) 
{
	$tdatattwousers[".allSearchFields"][] = "emailaddr";	
}

$tdatattwousers[".isTableType"] = "list";


	

$tdatattwousers[".isDisplayLoading"] = true;


// Access doesn't support subqueries from the same table as main
$tdatattwousers[".subQueriesSupAccess"] = true;





$tdatattwousers[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdatattwousers[".strOrderBy"] = $gstrOrderBy;
	
$tdatattwousers[".orderindexes"] = array();

$tdatattwousers[".sqlHead"] = "SELECT id,   username,   password,   active,   firstname,   lastname,   datecreated,   groupmember,   emailaddr";
$tdatattwousers[".sqlFrom"] = "FROM ttwousers";
$tdatattwousers[".sqlWhereExpr"] = "";
$tdatattwousers[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatattwousers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatattwousers[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "id";
	$tdatattwousers[".Keys"] = $tableKeys;

$tdatattwousers[".listFields"] = array();
$tdatattwousers[".listFields"][] = "emailaddr";
$tdatattwousers[".listFields"][] = "groupmember";
$tdatattwousers[".listFields"][] = "username";
$tdatattwousers[".listFields"][] = "password";
$tdatattwousers[".listFields"][] = "active";
$tdatattwousers[".listFields"][] = "firstname";
$tdatattwousers[".listFields"][] = "lastname";
$tdatattwousers[".listFields"][] = "datecreated";

$tdatattwousers[".addFields"] = array();
$tdatattwousers[".addFields"][] = "username";
$tdatattwousers[".addFields"][] = "password";
$tdatattwousers[".addFields"][] = "firstname";
$tdatattwousers[".addFields"][] = "lastname";
$tdatattwousers[".addFields"][] = "emailaddr";

$tdatattwousers[".inlineAddFields"] = array();

$tdatattwousers[".editFields"] = array();
$tdatattwousers[".editFields"][] = "username";
$tdatattwousers[".editFields"][] = "password";
$tdatattwousers[".editFields"][] = "firstname";
$tdatattwousers[".editFields"][] = "lastname";
$tdatattwousers[".editFields"][] = "emailaddr";

$tdatattwousers[".inlineEditFields"] = array();

	
//	id
	$fdata = array();
	$fdata["strName"] = "id";
	$fdata["ownerTable"] = "ttwousers";
	$fdata["Label"]="Id"; 
	
		
		
	$fdata["FieldType"]= 3;
	
		$fdata["AutoInc"]=true;
	
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "id";
	
		$fdata["FullName"]= "id";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 1;
				$fdata["EditParams"]="";
			
		
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				
		
				
		
		
		
			$tdatattwousers["id"]=$fdata;
//	username
	$fdata = array();
	$fdata["strName"] = "username";
	$fdata["ownerTable"] = "ttwousers";
	$fdata["Label"]="Username"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "username";
	
		$fdata["FullName"]= "username";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 2;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=15";
		
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		
		$fdata["bEditPage"]=true; 
	
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatattwousers["username"]=$fdata;
//	password
	$fdata = array();
	$fdata["strName"] = "password";
	$fdata["ownerTable"] = "ttwousers";
	$fdata["Label"]="Password"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "password";
	
		$fdata["FullName"]= "password";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 3;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=15";
		
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		
		$fdata["bEditPage"]=true; 
	
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatattwousers["password"]=$fdata;
//	active
	$fdata = array();
	$fdata["strName"] = "active";
	$fdata["ownerTable"] = "ttwousers";
	$fdata["Label"]="Active"; 
	
		
		
	$fdata["FieldType"]= 16;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "active";
	
		$fdata["FullName"]= "active";
	
		
		
		
		
		
				$fdata["Index"]= 4;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatattwousers["active"]=$fdata;
//	firstname
	$fdata = array();
	$fdata["strName"] = "firstname";
	$fdata["ownerTable"] = "ttwousers";
	$fdata["Label"]="First Name"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "firstname";
	
		$fdata["FullName"]= "firstname";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 5;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=25";
		
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		
		$fdata["bEditPage"]=true; 
	
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatattwousers["firstname"]=$fdata;
//	lastname
	$fdata = array();
	$fdata["strName"] = "lastname";
	$fdata["ownerTable"] = "ttwousers";
	$fdata["Label"]="Last Name"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "lastname";
	
		$fdata["FullName"]= "lastname";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 6;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=35";
		
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		
		$fdata["bEditPage"]=true; 
	
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatattwousers["lastname"]=$fdata;
//	datecreated
	$fdata = array();
	$fdata["strName"] = "datecreated";
	$fdata["ownerTable"] = "ttwousers";
	$fdata["Label"]="Date Created"; 
	
		
		
	$fdata["FieldType"]= 135;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Date";
	$fdata["ViewFormat"]= "Short Date";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "datecreated";
	
		$fdata["FullName"]= "datecreated";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 7;
		$fdata["DateEditType"] = 13; 
	$fdata["InitialYearFactor"] = 20; 
	$fdata["LastYearFactor"] = 20; 
			
		$fdata["bListPage"]=true; 
	
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatattwousers["datecreated"]=$fdata;
//	groupmember
	$fdata = array();
	$fdata["strName"] = "groupmember";
	$fdata["ownerTable"] = "ttwousers";
	$fdata["Label"]="Groupmember"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "groupmember";
	
		$fdata["FullName"]= "groupmember";
	
		
		
		
		
		
				$fdata["Index"]= 8;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatattwousers["groupmember"]=$fdata;
//	emailaddr
	$fdata = array();
	$fdata["strName"] = "emailaddr";
	$fdata["ownerTable"] = "ttwousers";
	$fdata["Label"]="email"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "emailaddr";
	
		$fdata["FullName"]= "emailaddr";
	
		
		
		
		
		
				$fdata["Index"]= 9;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		
		$fdata["bEditPage"]=true; 
	
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdatattwousers["emailaddr"]=$fdata;


	
$tables_data["ttwousers"]=&$tdatattwousers;
$field_labels["ttwousers"] = &$fieldLabelsttwousers;
$fieldToolTips["ttwousers"] = &$fieldToolTipsttwousers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ttwousers"] = array();

	
// tables which are master tables for current table (detail)
$masterTablesData["ttwousers"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ttwousers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   username,   password,   active,   firstname,   lastname,   datecreated,   groupmember,   emailaddr";
$proto0["m_strFrom"] = "FROM ttwousers";
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
	"m_strName" => "id",
	"m_strTable" => "ttwousers"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "ttwousers"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "ttwousers"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "ttwousers"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "firstname",
	"m_strTable" => "ttwousers"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "lastname",
	"m_strTable" => "ttwousers"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "datecreated",
	"m_strTable" => "ttwousers"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "groupmember",
	"m_strTable" => "ttwousers"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "emailaddr",
	"m_strTable" => "ttwousers"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "ttwousers";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "id";
$proto24["m_columns"][] = "username";
$proto24["m_columns"][] = "password";
$proto24["m_columns"][] = "active";
$proto24["m_columns"][] = "firstname";
$proto24["m_columns"][] = "lastname";
$proto24["m_columns"][] = "datecreated";
$proto24["m_columns"][] = "groupmember";
$proto24["m_columns"][] = "emailaddr";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_alias"] = "";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = "0";
$proto25["m_inBrackets"] = "0";
$proto25["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

return $obj;
}
$queryData_ttwousers = createSqlQuery_ttwousers();
$tdatattwousers[".sqlquery"] = $queryData_ttwousers;



$tableEvents["ttwousers"] = new eventsBase;
$tdatattwousers[".hasEvents"] = false;

?>
