<?php
$tdataadmin_members=array();
	$tdataadmin_members[".NumberOfChars"]=80; 
	$tdataadmin_members[".ShortName"]="admin_members";
	$tdataadmin_members[".OwnerID"]="";
	$tdataadmin_members[".OriginalTable"]="ttwousers";


	
//	field labels
$fieldLabelsadmin_members = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadmin_members["English"]=array();
	$fieldToolTipsadmin_members["English"]=array();
	$fieldLabelsadmin_members["English"]["id"] = "Id";
	$fieldToolTipsadmin_members["English"]["id"] = "";
	$fieldLabelsadmin_members["English"]["username"] = "Username";
	$fieldToolTipsadmin_members["English"]["username"] = "";
	$fieldLabelsadmin_members["English"]["password"] = "Password";
	$fieldToolTipsadmin_members["English"]["password"] = "";
	$fieldLabelsadmin_members["English"]["active"] = "Active";
	$fieldToolTipsadmin_members["English"]["active"] = "";
	$fieldLabelsadmin_members["English"]["firstname"] = "Firstname";
	$fieldToolTipsadmin_members["English"]["firstname"] = "";
	$fieldLabelsadmin_members["English"]["lastname"] = "Lastname";
	$fieldToolTipsadmin_members["English"]["lastname"] = "";
	$fieldLabelsadmin_members["English"]["datecreated"] = "Datecreated";
	$fieldToolTipsadmin_members["English"]["datecreated"] = "";
	$fieldLabelsadmin_members["English"]["groupmember"] = "Groupmember";
	$fieldToolTipsadmin_members["English"]["groupmember"] = "";
	$fieldLabelsadmin_members["English"]["emailaddr"] = "Emailaddr";
	$fieldToolTipsadmin_members["English"]["emailaddr"] = "";
	if (count($fieldToolTipsadmin_members["English"])){
		$tdataadmin_members[".isUseToolTips"]=true;
	}
}


	
	$tdataadmin_members[".NCSearch"]=true;

	

$tdataadmin_members[".shortTableName"] = "admin_members";
$tdataadmin_members[".nSecOptions"] = 0;
$tdataadmin_members[".recsPerRowList"] = 1;	
$tdataadmin_members[".tableGroupBy"] = "0";
$tdataadmin_members[".mainTableOwnerID"] = "";
$tdataadmin_members[".moveNext"] = 1;




$tdataadmin_members[".showAddInPopup"] = false;

$tdataadmin_members[".showEditInPopup"] = false;

$tdataadmin_members[".showViewInPopup"] = false;


$tdataadmin_members[".fieldsForRegister"] = array();

$tdataadmin_members[".listAjax"] = false;

	$tdataadmin_members[".audit"] = false;

	$tdataadmin_members[".locking"] = false;
	
$tdataadmin_members[".listIcons"] = true;




$tdataadmin_members[".showSimpleSearchOptions"] = false;

$tdataadmin_members[".showSearchPanel"] = true;


if (isMobile()){
$tdataadmin_members[".isUseAjaxSuggest"] = false;
}else {
$tdataadmin_members[".isUseAjaxSuggest"] = true;
}

$tdataadmin_members[".rowHighlite"] = true;


// button handlers file names

$tdataadmin_members[".addPageEvents"] = false;

$tdataadmin_members[".arrKeyFields"][] = "id";

// use datepicker for search panel
$tdataadmin_members[".isUseCalendarForSearch"] = true;

// use timepicker for search panel
$tdataadmin_members[".isUseTimeForSearch"] = false;

$tdataadmin_members[".isUseiBox"] = false;



	



$tdataadmin_members[".isUseInlineJs"] = $tdataadmin_members[".isUseInlineAdd"] || $tdataadmin_members[".isUseInlineEdit"];

$tdataadmin_members[".allSearchFields"] = array();

$tdataadmin_members[".globSearchFields"][] = "username";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("username", $tdataadmin_members[".allSearchFields"]))
{
	$tdataadmin_members[".allSearchFields"][] = "username";	
}
$tdataadmin_members[".globSearchFields"][] = "password";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("password", $tdataadmin_members[".allSearchFields"]))
{
	$tdataadmin_members[".allSearchFields"][] = "password";	
}
$tdataadmin_members[".globSearchFields"][] = "firstname";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("firstname", $tdataadmin_members[".allSearchFields"]))
{
	$tdataadmin_members[".allSearchFields"][] = "firstname";	
}
$tdataadmin_members[".globSearchFields"][] = "lastname";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("lastname", $tdataadmin_members[".allSearchFields"]))
{
	$tdataadmin_members[".allSearchFields"][] = "lastname";	
}
$tdataadmin_members[".globSearchFields"][] = "datecreated";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("datecreated", $tdataadmin_members[".allSearchFields"]))
{
	$tdataadmin_members[".allSearchFields"][] = "datecreated";	
}
$tdataadmin_members[".globSearchFields"][] = "emailaddr";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("emailaddr", $tdataadmin_members[".allSearchFields"]))
{
	$tdataadmin_members[".allSearchFields"][] = "emailaddr";	
}


$tdataadmin_members[".googleLikeFields"][] = "id";
$tdataadmin_members[".googleLikeFields"][] = "username";
$tdataadmin_members[".googleLikeFields"][] = "password";
$tdataadmin_members[".googleLikeFields"][] = "active";
$tdataadmin_members[".googleLikeFields"][] = "firstname";
$tdataadmin_members[".googleLikeFields"][] = "lastname";
$tdataadmin_members[".googleLikeFields"][] = "datecreated";
$tdataadmin_members[".googleLikeFields"][] = "groupmember";
$tdataadmin_members[".googleLikeFields"][] = "emailaddr";



$tdataadmin_members[".advSearchFields"][] = "id";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("id", $tdataadmin_members[".allSearchFields"])) 
{
	$tdataadmin_members[".allSearchFields"][] = "id";	
}
$tdataadmin_members[".advSearchFields"][] = "username";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("username", $tdataadmin_members[".allSearchFields"])) 
{
	$tdataadmin_members[".allSearchFields"][] = "username";	
}
$tdataadmin_members[".advSearchFields"][] = "password";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("password", $tdataadmin_members[".allSearchFields"])) 
{
	$tdataadmin_members[".allSearchFields"][] = "password";	
}
$tdataadmin_members[".advSearchFields"][] = "active";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("active", $tdataadmin_members[".allSearchFields"])) 
{
	$tdataadmin_members[".allSearchFields"][] = "active";	
}
$tdataadmin_members[".advSearchFields"][] = "firstname";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("firstname", $tdataadmin_members[".allSearchFields"])) 
{
	$tdataadmin_members[".allSearchFields"][] = "firstname";	
}
$tdataadmin_members[".advSearchFields"][] = "lastname";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("lastname", $tdataadmin_members[".allSearchFields"])) 
{
	$tdataadmin_members[".allSearchFields"][] = "lastname";	
}
$tdataadmin_members[".advSearchFields"][] = "datecreated";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("datecreated", $tdataadmin_members[".allSearchFields"])) 
{
	$tdataadmin_members[".allSearchFields"][] = "datecreated";	
}
$tdataadmin_members[".advSearchFields"][] = "groupmember";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("groupmember", $tdataadmin_members[".allSearchFields"])) 
{
	$tdataadmin_members[".allSearchFields"][] = "groupmember";	
}
$tdataadmin_members[".advSearchFields"][] = "emailaddr";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("emailaddr", $tdataadmin_members[".allSearchFields"])) 
{
	$tdataadmin_members[".allSearchFields"][] = "emailaddr";	
}

$tdataadmin_members[".isTableType"] = "list";


	

$tdataadmin_members[".isDisplayLoading"] = true;


// Access doesn't support subqueries from the same table as main
$tdataadmin_members[".subQueriesSupAccess"] = true;





$tdataadmin_members[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdataadmin_members[".strOrderBy"] = $gstrOrderBy;
	
$tdataadmin_members[".orderindexes"] = array();

$tdataadmin_members[".sqlHead"] = "SELECT id,   username,   password,   active,   firstname,   lastname,   datecreated,   groupmember,   emailaddr";
$tdataadmin_members[".sqlFrom"] = "FROM ttwousers";
$tdataadmin_members[".sqlWhereExpr"] = "";
$tdataadmin_members[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_members[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_members[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "id";
	$tdataadmin_members[".Keys"] = $tableKeys;

$tdataadmin_members[".listFields"] = array();

$tdataadmin_members[".addFields"] = array();

$tdataadmin_members[".inlineAddFields"] = array();

$tdataadmin_members[".editFields"] = array();

$tdataadmin_members[".inlineEditFields"] = array();

	
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
	
				
		
				
		
		
		
			$tdataadmin_members["id"]=$fdata;
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
	
		
		
		
		
		
				$fdata["Index"]= 2;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=15";
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataadmin_members["username"]=$fdata;
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
	
		
		
		
		
		
				$fdata["Index"]= 3;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=15";
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataadmin_members["password"]=$fdata;
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
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 4;
				$fdata["EditParams"]="";
			
		
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				
		
				
		
		
		
			$tdataadmin_members["active"]=$fdata;
//	firstname
	$fdata = array();
	$fdata["strName"] = "firstname";
	$fdata["ownerTable"] = "ttwousers";
	$fdata["Label"]="Firstname"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "firstname";
	
		$fdata["FullName"]= "firstname";
	
		
		
		
		
		
				$fdata["Index"]= 5;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=25";
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataadmin_members["firstname"]=$fdata;
//	lastname
	$fdata = array();
	$fdata["strName"] = "lastname";
	$fdata["ownerTable"] = "ttwousers";
	$fdata["Label"]="Lastname"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "lastname";
	
		$fdata["FullName"]= "lastname";
	
		
		
		
		
		
				$fdata["Index"]= 6;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=35";
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataadmin_members["lastname"]=$fdata;
//	datecreated
	$fdata = array();
	$fdata["strName"] = "datecreated";
	$fdata["ownerTable"] = "ttwousers";
	$fdata["Label"]="Datecreated"; 
	
		
		
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
			
		
		
		
		
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataadmin_members["datecreated"]=$fdata;
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
			$fdata["EditParams"].= " maxlength=4";
		
		
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				
		
				
		
		
		
			$tdataadmin_members["groupmember"]=$fdata;
//	emailaddr
	$fdata = array();
	$fdata["strName"] = "emailaddr";
	$fdata["ownerTable"] = "ttwousers";
	$fdata["Label"]="Emailaddr"; 
	
		
		
	$fdata["FieldType"]= 200;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "emailaddr";
	
		$fdata["FullName"]= "emailaddr";
	
		
		
		
		
		
				$fdata["Index"]= 9;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=60";
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataadmin_members["emailaddr"]=$fdata;


	
$tables_data["admin_members"]=&$tdataadmin_members;
$field_labels["admin_members"] = &$fieldLabelsadmin_members;
$fieldToolTips["admin_members"] = &$fieldToolTipsadmin_members;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_members"] = array();

	
// tables which are master tables for current table (detail)
$masterTablesData["admin_members"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_admin_members()
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
$queryData_admin_members = createSqlQuery_admin_members();
$tdataadmin_members[".sqlquery"] = $queryData_admin_members;



$tableEvents["admin_members"] = new eventsBase;
$tdataadmin_members[".hasEvents"] = false;

?>
