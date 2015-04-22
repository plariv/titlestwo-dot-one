<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/ttl_recordings_variables.php");

add_nocache_headers();
//	check if logged in
if(!@$_SESSION["UserID"] || !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}

$layout = new TLayout("view2","Extravaganza1Orange","MobileOrange");
$layout->blocks["top"] = array();
$layout->skins["pdf"] = "empty";
$layout->blocks["top"][] = "pdf";
$layout->containers["view"] = array();

$layout->containers["view"][] = array("name"=>"viewheader","block"=>"","substyle"=>2);


$layout->containers["view"][] = array("name"=>"wrapper","block"=>"","substyle"=>1);


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"viewfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"viewbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["view"] = "1";
$layout->blocks["top"][] = "view";
$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["ttl_recordings_view"] = $layout;




include('include/xtempl.php');
include('classes/runnerpage.php');
include("classes/searchclause.php");
$xt = new Xtempl();


$query = $gQuery->Copy();

$filename = "";	
$message = "";
$key = array();
$next = array();
$prev = array();
$all = postvalue("all");
$pdf = postvalue("pdf");
$mypage = 1;

//Show view page as popUp or not
$inlineview = (postvalue("onFly") ? true : false);

//If show view as popUp, get parent Id
if($inlineview)
	$parId = postvalue("parId");
else
	$parId = 0;

//Set page id	
if(postvalue("id"))
	$id = postvalue("id");
else
	$id = 1;

//$isNeedSettings = true;//($inlineview && postvalue("isNeedSettings") == 'true') || (!$inlineview);	
	
// assign an id			
$xt->assign("id",$id);

//array of params for classes
$params = array("pageType" => PAGE_VIEW, "id" =>$id, "tName"=>$strTableName);
$params["xt"] = &$xt;
//Get array of tabs for edit page
$params['useTabsOnView'] = useTabsOnView($strTableName);
if($params['useTabsOnView'])
	$params['arrViewTabs'] = GetViewTabs($strTableName);
$pageObject = new RunnerPage($params);

// SearchClause class stuff
$pageObject->searchClauseObj->parseRequest();
$_SESSION[$strTableName.'_advsearch'] = serialize($pageObject->searchClauseObj);

// proccess big google maps

// add button events if exist
$pageObject->addButtonHandlers();

//For show detail tables on master page view
$dpParams = array();
if($pageObject->isShowDetailTables && !isMobile())
{
	$ids = $id;
	$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array();
}


//	Before Process event
if($eventObj->exists("BeforeProcessView"))
	$eventObj->BeforeProcessView($conn);

$strWhereClause = '';
$strHavingClause = '';
if(!$all)
{
//	show one record only
	$keys=array();
	$strWhereClause="";
	$keys["idttl_recordings"]=postvalue("editid1");
	$keys["ttl_actions_idttl_actions"]=postvalue("editid2");
	$strWhereClause = KeyWhere($keys);
	$strSQL = gSQLWhere($strWhereClause);
}
else
{
	if ($_SESSION[$strTableName."_SelectedSQL"]!="" && @$_REQUEST["records"]=="") 
	{
		$strSQL = $_SESSION[$strTableName."_SelectedSQL"];
		$strWhereClause=@$_SESSION[$strTableName."_SelectedWhere"];
	}
	else
	{
		$strWhereClause=@$_SESSION[$strTableName."_where"];
		$strHavingClause=@$_SESSION[$strTableName."_having"];
		$strSearchCriteria=@$_SESSION[$strTableName."_criteria"];
		$strSQL=gSQLWhere($strWhereClause, $strHavingClause, $strSearchCriteria);
	}
//	order by
	$strOrderBy=$_SESSION[$strTableName."_order"];
	if(!$strOrderBy)
		$strOrderBy=$gstrOrderBy;
	$strSQL.=" ".trim($strOrderBy);
}

$strSQLbak = $strSQL;
if($eventObj->exists("BeforeQueryView"))
	$eventObj->BeforeQueryView($strSQL,$strWhereClause);
if($strSQLbak == $strSQL)
{
	$strSQL=gSQLWhere($strWhereClause,$strHavingClause);
	if($all)
	{
		$numrows=gSQLRowCount($strWhereClause,$strHavingClause, $strSearchCriteria);
		$strSQL.=" ".trim($strOrderBy);
	}
}
else
{
//	changed $strSQL - old style	
	if($all)
	{
		$numrows=GetRowCount($strSQL);
	}
}

if(!$all)
{
	LogInfo($strSQL);
	$rs=db_query($strSQL,$conn);
}
else
{
//	 Pagination:
	$nPageSize=0;
	if(@$_REQUEST["records"]=="page" && $numrows)
	{
		$mypage=(integer)@$_SESSION[$strTableName."_pagenumber"];
		$nPageSize=(integer)@$_SESSION[$strTableName."_pagesize"];
		if($numrows<=($mypage-1)*$nPageSize)
			$mypage=ceil($numrows/$nPageSize);
		if(!$nPageSize)
			$nPageSize=$gPageSize;
		if(!$mypage)
			$mypage=1;
		$strSQL.=" limit ".(($mypage-1)*$nPageSize).",".$nPageSize;
	}
	$rs=db_query($strSQL,$conn);
}

$data=db_fetch_array($rs);

if($eventObj->exists("ProcessValuesView"))
	$eventObj->ProcessValuesView($data);

$out = "";
$first = true;

$fieldsArr = array();
$arr = array();
$arr['fName'] = "idttl_recordings";
$arr['viewFormat'] = ViewFormat("idttl_recordings", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Mortgage";
$arr['viewFormat'] = ViewFormat("Mortgage", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Discharge recorded (Y/N)";
$arr['viewFormat'] = ViewFormat("Discharge recorded (Y/N)", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Recording Date";
$arr['viewFormat'] = ViewFormat("Recording Date", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Book";
$arr['viewFormat'] = ViewFormat("Book", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Page";
$arr['viewFormat'] = ViewFormat("Page", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Account Number";
$arr['viewFormat'] = ViewFormat("Account Number", $strTableName);
$fieldsArr[] = $arr;

$mainTableOwnerID = GetTableData($strTableName,".mainTableOwnerID",'');
$ownerIdValue="";

$pageObject->setGoogleMapsParams($fieldsArr);

while($data)
{
	$xt->assign("show_key1", htmlspecialchars(GetData($data,"idttl_recordings", "")));
	$xt->assign("show_key2", htmlspecialchars(GetData($data,"ttl_actions_idttl_actions", "")));

	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["idttl_recordings"]));
	$keylink.="&key2=".htmlspecialchars(rawurlencode(@$data["ttl_actions_idttl_actions"]));

////////////////////////////////////////////
//idttl_recordings - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"idttl_recordings", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="idttl_recordings")
		$ownerIdValue=$value;
	$xt->assign("idttl_recordings_value",$value);
	if(!$pageObject->isAppearOnTabs("idttl_recordings"))
		$xt->assign("idttl_recordings_fieldblock",true);
	else
		$xt->assign("idttl_recordings_tabfieldblock",true);
////////////////////////////////////////////
//Mortgage - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"Mortgage", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="Mortgage")
		$ownerIdValue=$value;
	$xt->assign("Mortgage_value",$value);
	if(!$pageObject->isAppearOnTabs("Mortgage"))
		$xt->assign("Mortgage_fieldblock",true);
	else
		$xt->assign("Mortgage_tabfieldblock",true);
////////////////////////////////////////////
//Discharge recorded (Y/N) - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"Discharge recorded (Y/N)", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="Discharge recorded (Y/N)")
		$ownerIdValue=$value;
	$xt->assign("Discharge_recorded__Y_N__value",$value);
	if(!$pageObject->isAppearOnTabs("Discharge recorded (Y/N)"))
		$xt->assign("Discharge_recorded__Y_N__fieldblock",true);
	else
		$xt->assign("Discharge_recorded__Y_N__tabfieldblock",true);
////////////////////////////////////////////
//Recording Date - Short Date
	
	$value="";
	$value = ProcessLargeText(GetData($data,"Recording Date", "Short Date"),"","",MODE_VIEW);
	if($mainTableOwnerID=="Recording Date")
		$ownerIdValue=$value;
	$xt->assign("Recording_Date_value",$value);
	if(!$pageObject->isAppearOnTabs("Recording Date"))
		$xt->assign("Recording_Date_fieldblock",true);
	else
		$xt->assign("Recording_Date_tabfieldblock",true);
////////////////////////////////////////////
//Book - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"Book", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="Book")
		$ownerIdValue=$value;
	$xt->assign("Book_value",$value);
	if(!$pageObject->isAppearOnTabs("Book"))
		$xt->assign("Book_fieldblock",true);
	else
		$xt->assign("Book_tabfieldblock",true);
////////////////////////////////////////////
//Page - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"Page", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="Page")
		$ownerIdValue=$value;
	$xt->assign("Page_value",$value);
	if(!$pageObject->isAppearOnTabs("Page"))
		$xt->assign("Page_fieldblock",true);
	else
		$xt->assign("Page_tabfieldblock",true);
////////////////////////////////////////////
//Account Number - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"Account Number", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="Account Number")
		$ownerIdValue=$value;
	$xt->assign("Account_Number_value",$value);
	if(!$pageObject->isAppearOnTabs("Account Number"))
		$xt->assign("Account_Number_fieldblock",true);
	else
		$xt->assign("Account_Number_tabfieldblock",true);

/*$jsKeysObj = 'window.recKeysObj = {';
	$jsKeysObj .= "'".jsreplace("idttl_recordings")."': '".(jsreplace(@$data["idttl_recordings"]))."', ";
	$jsKeysObj .= "'".jsreplace("ttl_actions_idttl_actions")."': '".(jsreplace(@$data["ttl_actions_idttl_actions"]))."', ";
$jsKeysObj = substr($jsKeysObj, 0, strlen($jsKeysObj)-2);
$jsKeysObj .= '};';
$pageObject->AddJsCode($jsKeysObj);	
*/
/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && !isMobile())
{
	if(count($dpParams['ids']))
	{
		$xt->assign("detail_tables",true);
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
	}
	
	$dControlsMap = array();
	
	for($d=0;$d<count($dpParams['ids']);$d++)
	{
		$options = array();
		//array of params for classes
		$options["mode"] = LIST_DETAILS;
		$options["pageType"] = PAGE_LIST;
		$options["masterPageType"] = PAGE_VIEW;
		$options["mainMasterPageType"] = PAGE_VIEW;
		$options['masterTable'] = "ttl_recordings";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		include("include/".GetTableURL($strTableName)."_settings.php");
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
		{
			$strTableName = "ttl_recordings";
			continue;
		}
		
		$layout = GetPageLayout(GoodFieldName($strTableName), PAGE_LIST);
		if($layout)
		{
			$rtl = $xt->getReadingOrder() == 'RTL' ? 'RTL' : '';
			$xt->cssFiles[] = array("stylepath" => "styles/".$layout->style.'/style'.$rtl
				, "pagestylepath" => "pagestyles/".$layout->name.$rtl);
			$xt->IEcssFiles[] = array("stylepathIE" => "styles/".$layout->style.'/styleIE');
		}
		
		$options['xt'] = new Xtempl();
		$options['id'] = $dpParams['ids'][$d];
		$options['flyId'] = $pageObject->genId()+1;
		$mkr = 1;
		foreach($mKeys[$strTableName] as $mk)
			$options['masterKeysReq'][$mkr++] = $data[$mk];
		
		$listPageObject = ListPage::createListPage($strTableName, $options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		
		// show page
		if(!$pdf && $listPageObject->permis[$strTableName]['search'] && $listPageObject->rowsFound)
		{
			//set page events
			foreach($listPageObject->eventsObject->events as $event => $name)
				$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
			
			//add detail settings to master settings
			$listPageObject->fillSetCntrlMaps();
			$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];
			$dControlsMap[$strTableName] = $listPageObject->controlsMap;
			foreach($listPageObject->jsSettings['global']['shortTNames'] as $keySet=>$val)
			{
				if(!array_key_exists($keySet,$pageObject->settingsMap["globalSettings"]['shortTNames']))
					$pageObject->settingsMap["globalSettings"]['shortTNames'][$keySet] = $val;
			}
			
			//Add detail's js files to master's files
			$pageObject->copyAllJSFiles($listPageObject->grabAllJSFiles());
			
			//Add detail's css files to master's files
			$pageObject->copyAllCSSFiles($listPageObject->grabAllCSSFiles());
		
			$xtParams = array("method"=>'showPage', "params"=> false);
			$xtParams['object'] = $listPageObject;
			$xt->assign("displayDetailTable_".GoodFieldName($listPageObject->tName), $xtParams);
		
			$pageObject->controlsMap['dpTablesParams'][] = array('tName'=>$strTableName, 'id'=>$options['id']);
		}
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$strTableName = "ttl_recordings";
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin prepare for Next Prev button
if(!@$_SESSION[$strTableName."_noNextPrev"] && !$inlineview && !$pdf)
{
	$pageObject->getNextPrevRecordKeys($data,"Search",$next,$prev);
}
//End prepare for Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


if ($pageObject->googleMapCfg['isUseGoogleMap'])
{
	$pageObject->initGmaps();
}

$pageObject->addCommonJs();

//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

if(!$inlineview)
{
	$pageObject->body["begin"].="<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>\r\n";
		$pageObject->body["begin"].= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";		
	
	$pageObject->jsSettings['tableSettings'][$strTableName]["keys"] = $keys;
	$pageObject->jsSettings['tableSettings'][$strTableName]["prevKeys"] = $prev;
	$pageObject->jsSettings['tableSettings'][$strTableName]["nextKeys"] = $next; 
	
	// assign body end
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	
	$xt->assign("body",$pageObject->body);
	$xt->assign("flybody",true);
}
else
{
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("flybody",$pageObject->body);
	$xt->assign("body",true);
	$xt->assign("pdflink_block",false);
	
	$pageObject->fillSetCntrlMaps();
	
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;
}
$xt->assign("style_block",true);
$xt->assign("stylefiles_block",true);

$editlink="";
$editkeys=array();
	$editkeys["editid1"]=postvalue("editid1");
	$editkeys["editid2"]=postvalue("editid2");
foreach($editkeys as $key=>$val)
{
	if($editlink)
		$editlink.="&";
	$editlink.=$key."=".$val;
}
$xt->assign("editlink_attrs","id=\"editLink".$id."\" name=\"editLink".$id."\" onclick=\"window.location.href='ttl_recordings_edit.php?".$editlink."'\"");

$strPerm = GetUserPermissions($strTableName);
if(CheckSecurity($ownerIdValue,"Edit") && !$inlineview && strpos($strPerm, "E")!==false)
	$xt->assign("edit_button",true);
else	
	$xt->assign("edit_button",false);

if(!$pdf && !$all && !$inlineview)
{
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin show Next Prev button
    $nextlink=$prevlink="";
	if(count($next))
    {
		$xt->assign("next_button",true);
	 		$nextlink .="editid1=".htmlspecialchars(rawurlencode($next[1]));
	 		$nextlink .="&";
		$nextlink .="editid2=".htmlspecialchars(rawurlencode($next[2]));
		$xt->assign("nextbutton_attrs","id=\"nextButton".$id."\"");
	}
	else 
		$xt->assign("next_button",false);
	if(count($prev))
	{
		$xt->assign("prev_button",true);
			$prevlink .="editid1=".htmlspecialchars(rawurlencode($prev[1]));
			$prevlink .="&";
		$prevlink .="editid2=".htmlspecialchars(rawurlencode($prev[2]));
		$xt->assign("prevbutton_attrs","id=\"prevButton".$id."\"");
	}
    else 
		$xt->assign("prev_button",false);
//End show Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$xt->assign("back_button",true);
	$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
}

$oldtemplatefile = $pageObject->templatefile;

if(!$all)
{
	if($eventObj->exists("BeforeShowView"))
		$eventObj->BeforeShowView($xt,$pageObject->templatefile,$data);
	
	if(!$pdf)
	{
		if(!$inlineview)
			$xt->display($pageObject->templatefile);
		else{
				$xt->load_template($pageObject->templatefile);
				$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
				if(count($pageObject->includes_css))
					$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
				if(count($pageObject->includes_cssIE))
					$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);				
				$returnJSON['idStartFrom'] = $id+1;
				echo (my_json_encode($returnJSON)); 
			}
	}
	break;
}
}


?>
