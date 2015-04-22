<?php
$tdataadmin_users=array();
	$tdataadmin_users[".NumberOfChars"]=80; 
	$tdataadmin_users[".ShortName"]="admin_users";
	$tdataadmin_users[".OwnerID"]="";
	$tdataadmin_users[".OriginalTable"]="ttwousers";


	
//	field labels
$fieldLabelsadmin_users = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadmin_users["English"]=array();
	$fieldToolTipsadmin_users["English"]=array();
	$fieldLabelsadmin_users["English"]["id"] = "Id";
	$fieldToolTipsadmin_users["English"]["id"] = "";
	$fieldLabelsadmin_users["English"]["username"] = "Username";
	$fieldToolTipsadmin_users["English"]["username"] = "";
	$fieldLabelsadmin_users["English"]["password"] = "Password";
	$fieldToolTipsadmin_users["English"]["password"] = "";
	$fieldLabelsadmin_users["English"]["active"] = "Active";
	$fieldToolTipsadmin_users["English"]["active"] = "";
	$fieldLabelsadmin_users["English"]["firstname"] = "Seller Name";
	$fieldToolTipsadmin_users["English"]["firstname"] = "";
	$fieldLabelsadmin_users["English"]["lastname"] = "Lastname";
	$fieldToolTipsadmin_users["English"]["lastname"] = "";
	$fieldLabelsadmin_users["English"]["datecreated"] = "Datecreated";
	$fieldToolTipsadmin_users["English"]["datecreated"] = "";
	$fieldLabelsadmin_users["English"]["groupmember"] = "Groupmember";
	$fieldToolTipsadmin_users["English"]["groupmember"] = "";
	$fieldLabelsadmin_users["English"]["emailaddr"] = "Emailaddr";
	$fieldToolTipsadmin_users["English"]["emailaddr"] = "";
	if (count($fieldToolTipsadmin_users["English"])){
		$tdataadmin_users[".isUseToolTips"]=true;
	}
}


	
	$tdataadmin_users[".NCSearch"]=true;

	

$tdataadmin_users[".shortTableName"] = "admin_users";
$tdataadmin_users[".nSecOptions"] = 0;
$tdataadmin_users[".recsPerRowList"] = 1;	
$tdataadmin_users[".tableGroupBy"] = "0";
$tdataadmin_users[".mainTableOwnerID"] = "";
$tdataadmin_users[".moveNext"] = 1;




$tdataadmin_users[".showAddInPopup"] = false;

$tdataadmin_users[".showEditInPopup"] = false;

$tdataadmin_users[".showViewInPopup"] = false;


$tdataadmin_users[".fieldsForRegister"] = array();

$tdataadmin_users[".listAjax"] = false;

	$tdataadmin_users[".audit"] = false;

	$tdataadmin_users[".locking"] = false;
	
$tdataadmin_users[".listIcons"] = true;
$tdataadmin_users[".inlineEdit"] = true;

$tdataadmin_users[".exportTo"] = true;

$tdataadmin_users[".printFriendly"] = true;

$tdataadmin_users[".delete"] = true;

$tdataadmin_users[".showSimpleSearchOptions"] = false;

$tdataadmin_users[".showSearchPanel"] = true;


if (isMobile()){
$tdataadmin_users[".isUseAjaxSuggest"] = false;
}else {
$tdataadmin_users[".isUseAjaxSuggest"] = true;
}

$tdataadmin_users[".rowHighlite"] = true;


// button handlers file names

$tdataadmin_users[".addPageEvents"] = false;

$tdataadmin_users[".arrKeyFields"][] = "id";

// use datepicker for search panel
$tdataadmin_users[".isUseCalendarForSearch"] = true;

// use timepicker for search panel
$tdataadmin_users[".isUseTimeForSearch"] = false;

$tdataadmin_users[".isUseiBox"] = false;



	


$tdataadmin_users[".isUseInlineAdd"] = true;

$tdataadmin_users[".isUseInlineEdit"] = true;
$tdataadmin_users[".isUseInlineJs"] = $tdataadmin_users[".isUseInlineAdd"] || $tdataadmin_users[".isUseInlineEdit"];

$tdataadmin_users[".allSearchFields"] = array();

$tdataadmin_users[".globSearchFields"][] = "username";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("username", $tdataadmin_users[".allSearchFields"]))
{
	$tdataadmin_users[".allSearchFields"][] = "username";	
}
$tdataadmin_users[".globSearchFields"][] = "password";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("password", $tdataadmin_users[".allSearchFields"]))
{
	$tdataadmin_users[".allSearchFields"][] = "password";	
}
$tdataadmin_users[".globSearchFields"][] = "firstname";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("firstname", $tdataadmin_users[".allSearchFields"]))
{
	$tdataadmin_users[".allSearchFields"][] = "firstname";	
}
$tdataadmin_users[".globSearchFields"][] = "lastname";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("lastname", $tdataadmin_users[".allSearchFields"]))
{
	$tdataadmin_users[".allSearchFields"][] = "lastname";	
}
$tdataadmin_users[".globSearchFields"][] = "datecreated";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("datecreated", $tdataadmin_users[".allSearchFields"]))
{
	$tdataadmin_users[".allSearchFields"][] = "datecreated";	
}
$tdataadmin_users[".globSearchFields"][] = "emailaddr";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("emailaddr", $tdataadmin_users[".allSearchFields"]))
{
	$tdataadmin_users[".allSearchFields"][] = "emailaddr";	
}


$tdataadmin_users[".googleLikeFields"][] = "id";
$tdataadmin_users[".googleLikeFields"][] = "username";
$tdataadmin_users[".googleLikeFields"][] = "password";
$tdataadmin_users[".googleLikeFields"][] = "active";
$tdataadmin_users[".googleLikeFields"][] = "firstname";
$tdataadmin_users[".googleLikeFields"][] = "lastname";
$tdataadmin_users[".googleLikeFields"][] = "datecreated";
$tdataadmin_users[".googleLikeFields"][] = "groupmember";
$tdataadmin_users[".googleLikeFields"][] = "emailaddr";



$tdataadmin_users[".advSearchFields"][] = "id";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("id", $tdataadmin_users[".allSearchFields"])) 
{
	$tdataadmin_users[".allSearchFields"][] = "id";	
}
$tdataadmin_users[".advSearchFields"][] = "username";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("username", $tdataadmin_users[".allSearchFields"])) 
{
	$tdataadmin_users[".allSearchFields"][] = "username";	
}
$tdataadmin_users[".advSearchFields"][] = "password";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("password", $tdataadmin_users[".allSearchFields"])) 
{
	$tdataadmin_users[".allSearchFields"][] = "password";	
}
$tdataadmin_users[".advSearchFields"][] = "active";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("active", $tdataadmin_users[".allSearchFields"])) 
{
	$tdataadmin_users[".allSearchFields"][] = "active";	
}
$tdataadmin_users[".advSearchFields"][] = "firstname";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("firstname", $tdataadmin_users[".allSearchFields"])) 
{
	$tdataadmin_users[".allSearchFields"][] = "firstname";	
}
$tdataadmin_users[".advSearchFields"][] = "lastname";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("lastname", $tdataadmin_users[".allSearchFields"])) 
{
	$tdataadmin_users[".allSearchFields"][] = "lastname";	
}
$tdataadmin_users[".advSearchFields"][] = "datecreated";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("datecreated", $tdataadmin_users[".allSearchFields"])) 
{
	$tdataadmin_users[".allSearchFields"][] = "datecreated";	
}
$tdataadmin_users[".advSearchFields"][] = "groupmember";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("groupmember", $tdataadmin_users[".allSearchFields"])) 
{
	$tdataadmin_users[".allSearchFields"][] = "groupmember";	
}
$tdataadmin_users[".advSearchFields"][] = "emailaddr";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("emailaddr", $tdataadmin_users[".allSearchFields"])) 
{
	$tdataadmin_users[".allSearchFields"][] = "emailaddr";	
}

$tdataadmin_users[".isTableType"] = "list";


	

$tdataadmin_users[".isDisplayLoading"] = true;


// Access doesn't support subqueries from the same table as main
$tdataadmin_users[".subQueriesSupAccess"] = true;





$tdataadmin_users[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdataadmin_users[".strOrderBy"] = $gstrOrderBy;
	
$tdataadmin_users[".orderindexes"] = array();

$tdataadmin_users[".sqlHead"] = "SELECT id,   username,   password,   active,   firstname,   lastname,   datecreated,   groupmember,   emailaddr";
$tdataadmin_users[".sqlFrom"] = "FROM ttwousers";
$tdataadmin_users[".sqlWhereExpr"] = "";
$tdataadmin_users[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_users[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "id";
	$tdataadmin_users[".Keys"] = $tableKeys;

$tdataadmin_users[".listFields"] = array();
$tdataadmin_users[".listFields"][] = "username";
$tdataadmin_users[".listFields"][] = "password";
$tdataadmin_users[".listFields"][] = "firstname";
$tdataadmin_users[".listFields"][] = "lastname";
$tdataadmin_users[".listFields"][] = "datecreated";
$tdataadmin_users[".listFields"][] = "emailaddr";

$tdataadmin_users[".addFields"] = array();

$tdataadmin_users[".inlineAddFields"] = array();
$tdataadmin_users[".inlineAddFields"][] = "username";
$tdataadmin_users[".inlineAddFields"][] = "password";
$tdataadmin_users[".inlineAddFields"][] = "firstname";
$tdataadmin_users[".inlineAddFields"][] = "lastname";
$tdataadmin_users[".inlineAddFields"][] = "datecreated";
$tdataadmin_users[".inlineAddFields"][] = "emailaddr";

$tdataadmin_users[".editFields"] = array();

$tdataadmin_users[".inlineEditFields"] = array();
$tdataadmin_users[".inlineEditFields"][] = "username";
$tdataadmin_users[".inlineEditFields"][] = "password";
$tdataadmin_users[".inlineEditFields"][] = "firstname";
$tdataadmin_users[".inlineEditFields"][] = "lastname";
$tdataadmin_users[".inlineEditFields"][] = "datecreated";
$tdataadmin_users[".inlineEditFields"][] = "emailaddr";

	
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
	
		
		
		
		
		
				$fdata["Index"]= 1;
				$fdata["EditParams"]="";
			
		
		
		
		
		
		
		
		
		
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
		//End validation
	
				
		
				
		
		
		
			$tdataadmin_users["id"]=$fdata;
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
		
		$fdata["bListPage"]=true; 
	
		
		$fdata["bInlineAdd"]=true; 
	
		
		$fdata["bInlineEdit"]=true; 
	
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataadmin_users["username"]=$fdata;
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
		
		$fdata["bListPage"]=true; 
	
		
		$fdata["bInlineAdd"]=true; 
	
		
		$fdata["bInlineEdit"]=true; 
	
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataadmin_users["password"]=$fdata;
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
	
				
		
				
		
		
		
			$tdataadmin_users["active"]=$fdata;
//	firstname
	$fdata = array();
	$fdata["strName"] = "firstname";
	$fdata["ownerTable"] = "ttwousers";
	$fdata["Label"]="Seller Name"; 
	
		
		
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
		
		$fdata["bListPage"]=true; 
	
		
		$fdata["bInlineAdd"]=true; 
	
		
		$fdata["bInlineEdit"]=true; 
	
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataadmin_users["firstname"]=$fdata;
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
		
		$fdata["bListPage"]=true; 
	
		
		$fdata["bInlineAdd"]=true; 
	
		
		$fdata["bInlineEdit"]=true; 
	
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataadmin_users["lastname"]=$fdata;
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
			
		$fdata["bListPage"]=true; 
	
		
		$fdata["bInlineAdd"]=true; 
	
		
		$fdata["bInlineEdit"]=true; 
	
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataadmin_users["datecreated"]=$fdata;
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
	
				
		
				
		
		
		
			$tdataadmin_users["groupmember"]=$fdata;
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
		
		$fdata["bListPage"]=true; 
	
		
		$fdata["bInlineAdd"]=true; 
	
		
		$fdata["bInlineEdit"]=true; 
	
		
		$fdata["bAdvancedSearch"]=true; 
	
		
		
	//Begin validation
	$fdata["validateAs"] = array();
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataadmin_users["emailaddr"]=$fdata;


	
$tables_data["admin_users"]=&$tdataadmin_users;
$field_labels["admin_users"] = &$fieldLabelsadmin_users;
$fieldToolTips["admin_users"] = &$fieldToolTipsadmin_users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_users"] = array();

	
// tables which are master tables for current table (detail)
$masterTablesData["admin_users"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_admin_users()
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
$queryData_admin_users = createSqlQuery_admin_users();
$tdataadmin_users[".sqlquery"] = $queryData_admin_users;



$tableEvents["admin_users"] = new eventsBase;
$tdataadmin_users[".hasEvents"] = false;

?>
