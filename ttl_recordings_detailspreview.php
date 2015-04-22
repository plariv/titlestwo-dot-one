<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

include("include/ttl_recordings_variables.php");

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
$layout->blocks["bare"][] = "detailspreviewgrid";$page_layouts["ttl_recordings_detailspreview"] = $layout;


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
		$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["idttl_recordings"]));
		$keylink.="&key2=".htmlspecialchars(rawurlencode(@$data["ttl_actions_idttl_actions"]));

	
	//	idttl_recordings - 
		    $value = "";
				if (IsNumberType(GetFieldType("idttl_recordings")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"idttl_recordings", ""),"field=idttl%5Frecordings".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"idttl_recordings", ""),"field=idttl%5Frecordings".$keylink,"",MODE_PRINT);
			$row["idttl_recordings_value"] = $value;
	//	Mortgage - 
		    $value = "";
				if (IsNumberType(GetFieldType("Mortgage")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"Mortgage", ""),"field=Mortgage".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"Mortgage", ""),"field=Mortgage".$keylink,"",MODE_PRINT);
			$row["Mortgage_value"] = $value;
	//	Discharge recorded (Y/N) - 
		    $value = "";
				if (IsNumberType(GetFieldType("Discharge recorded (Y/N)")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"Discharge recorded (Y/N)", ""),"field=Discharge+recorded+%28Y%2FN%29".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"Discharge recorded (Y/N)", ""),"field=Discharge+recorded+%28Y%2FN%29".$keylink,"",MODE_PRINT);
			$row["Discharge_recorded__Y_N__value"] = $value;
	//	Recording Date - Short Date
		    $value = "";
				if (IsNumberType(GetFieldType("Recording Date")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"Recording Date", "Short Date"),"field=Recording+Date".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"Recording Date", "Short Date"),"field=Recording+Date".$keylink,"",MODE_PRINT);
			$row["Recording_Date_value"] = $value;
	//	Book - 
		    $value = "";
				if (IsNumberType(GetFieldType("Book")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"Book", ""),"field=Book".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"Book", ""),"field=Book".$keylink,"",MODE_PRINT);
			$row["Book_value"] = $value;
	//	Page - 
		    $value = "";
				if (IsNumberType(GetFieldType("Page")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"Page", ""),"field=Page".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"Page", ""),"field=Page".$keylink,"",MODE_PRINT);
			$row["Page_value"] = $value;
	//	Account Number - 
		    $value = "";
				if (IsNumberType(GetFieldType("Account Number")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"Account Number", ""),"field=Account+Number".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"Account Number", ""),"field=Account+Number".$keylink,"",MODE_PRINT);
			$row["Account_Number_value"] = $value;
	$rowinfo[] = $row;
	}
	$xt->assign_loopsection("details_row",$rowinfo);
}

$xt->display("ttl_recordings_detailspreview.htm");

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