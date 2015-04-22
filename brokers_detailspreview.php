<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

include("include/brokers_variables.php");

$mode = postvalue("mode");

if(!@$_SESSION["UserID"])
{ 
	return;
}
if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{
	return;
}

include('include/xtempl.php');
$xt = new Xtempl();

$layout = new TLayout("detailspreview","Extravaganza1Orange","MobileOrange");
$layout->blocks["bare"] = array();
$layout->containers["0"] = array();

$layout->containers["0"][] = array("name"=>"detailspreviewheader","block"=>"","substyle"=>1);


$layout->containers["0"][] = array("name"=>"detailspreviewdetailsfount","block"=>"","substyle"=>1);


$layout->containers["0"][] = array("name"=>"detailspreviewdispfirst","block"=>"display_first","substyle"=>1);


$layout->skins["0"] = "empty";
$layout->blocks["bare"][] = "0";
$layout->containers["detailspreviewgrid"] = array();

$layout->containers["detailspreviewgrid"][] = array("name"=>"detailspreviewfields","block"=>"details_data","substyle"=>1);


$layout->skins["detailspreviewgrid"] = "grid";
$layout->blocks["bare"][] = "detailspreviewgrid";$page_layouts["brokers_detailspreview"] = $layout;


$recordsCounter = 0;

//	process masterkey value
$mastertable = postvalue("mastertable");
if($mastertable!="")
{
	$_SESSION[$strTableName."_mastertable"]=$mastertable;
//	copy keys to session
	$i = 1;
	while(isset($_REQUEST["masterkey".$i]))
	{
		$_SESSION[$strTableName."_masterkey".$i]=$_REQUEST["masterkey".$i];
		$i++;
	}
	if(isset($_SESSION[$strTableName."_masterkey".$i]))
		unset($_SESSION[$strTableName."_masterkey".$i]);
}
else
	$mastertable = $_SESSION[$strTableName."_mastertable"];

//$strSQL = $gstrSQL;

if($mastertable == "agents")
{
	$where = "";
		$where.= GetFullFieldName("agents_idagents")."=".make_db_value("agents_idagents",$_SESSION[$strTableName."_masterkey1"]);
}
if($mastertable == "ttl_actions")
{
	$where = "";
		$where.= GetFullFieldName("ttl_actions_idttl_actions")."=".make_db_value("ttl_actions_idttl_actions",$_SESSION[$strTableName."_masterkey1"]);
}


$str = SecuritySQL("Search");
if(strlen($str))
	$where.=" and ".$str;
$strSQL = gSQLWhere($where);

$strSQL.=" ".$gstrOrderBy;

$rowcount = gSQLRowCount($where);

$xt->assign("row_count",$rowcount);
if($rowcount) {
	$xt->assign("details_data",true);
	$rs = db_query($strSQL,$conn);

	$display_count = 10;
	if($mode == "inline")
		$display_count*=2;
	if($rowcount>$display_count+2)
	{
		$xt->assign("display_first",true);
		$xt->assign("display_count",$display_count);
	}
	else
		$display_count = $rowcount;

	$rowinfo = array();
		
	while(($data = db_fetch_array($rs)) && $recordsCounter<$display_count) {
		$recordsCounter++;
		$row = array();
		$keylink = "";
		$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["idbrokers"]));

	
	//	name - 
		    $value = "";
				if (IsNumberType(GetFieldType("name")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"name", ""),"field=name".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"name", ""),"field=name".$keylink,"",MODE_PRINT);
			$row["name_value"] = $value;
	//	phone - 
		    $value = "";
				if (IsNumberType(GetFieldType("phone")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"phone", ""),"field=phone".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"phone", ""),"field=phone".$keylink,"",MODE_PRINT);
			$row["phone_value"] = $value;
	//	co_name - 
		    $value = "";
				if (IsNumberType(GetFieldType("co_name")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"co_name", ""),"field=co%5Fname".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"co_name", ""),"field=co%5Fname".$keylink,"",MODE_PRINT);
			$row["co_name_value"] = $value;
	//	addr1 - 
		    $value = "";
				if (IsNumberType(GetFieldType("addr1")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"addr1", ""),"field=addr1".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"addr1", ""),"field=addr1".$keylink,"",MODE_PRINT);
			$row["addr1_value"] = $value;
	//	addr2 - 
		    $value = "";
				if (IsNumberType(GetFieldType("addr2")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"addr2", ""),"field=addr2".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"addr2", ""),"field=addr2".$keylink,"",MODE_PRINT);
			$row["addr2_value"] = $value;
	//	city - 
		    $value = "";
				if (IsNumberType(GetFieldType("city")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"city", ""),"field=city".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"city", ""),"field=city".$keylink,"",MODE_PRINT);
			$row["city_value"] = $value;
	//	state - 
		    $value = "";
				if (IsNumberType(GetFieldType("state")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"state", ""),"field=state".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"state", ""),"field=state".$keylink,"",MODE_PRINT);
			$row["state_value"] = $value;
	//	postal - 
		    $value = "";
				if (IsNumberType(GetFieldType("postal")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"postal", ""),"field=postal".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"postal", ""),"field=postal".$keylink,"",MODE_PRINT);
			$row["postal_value"] = $value;
	$rowinfo[] = $row;
	}
	$xt->assign_loopsection("details_row",$rowinfo);
}

$xt->display("brokers_detailspreview.htm");

if($mode!="inline"){
	echo "counterSeparator".postvalue("counter");
	$layout = GetPageLayout(GoodFieldName($strTableName), 'detailspreview');
	if($layout)
	{
		$rtl = $xt->getReadingOrder() == 'RTL' ? 'RTL' : '';
		echo "counterSeparator"."styles/".$layout->style."/style".$rtl
			."counterSeparator"."pagestyles/".$layout->name.$rtl
			."counterSeparator".$layout->style." page-".$layout->name;
	}	
}	
?>