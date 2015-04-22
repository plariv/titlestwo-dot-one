<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

include("include/ttl_actions_variables.php");

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
$layout->blocks["bare"][] = "detailspreviewgrid";$page_layouts["ttl_actions_detailspreview"] = $layout;


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

if($mastertable == "properties")
{
	$where = "";
		$where.= GetFullFieldName("properties_idproperties")."=".make_db_value("properties_idproperties",$_SESSION[$strTableName."_masterkey1"]);
}
if($mastertable == "search5")
{
	$where = "";
		$where.= GetFullFieldName("idttl_actions")."=".make_db_value("idttl_actions",$_SESSION[$strTableName."_masterkey1"]);
}
if($mastertable == "sellersactions")
{
	$where = "";
		$where.= GetFullFieldName("idttl_actions")."=".make_db_value("idttl_actions",$_SESSION[$strTableName."_masterkey1"]);
}
if($mastertable == "buyersactions")
{
	$where = "";
		$where.= GetFullFieldName("idttl_actions")."=".make_db_value("idttl_actions",$_SESSION[$strTableName."_masterkey1"]);
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
		$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["idttl_actions"]));
		$keylink.="&key2=".htmlspecialchars(rawurlencode(@$data["properties_idproperties"]));

	
	//	ttlnumb - 
		    $value = "";
				if (IsNumberType(GetFieldType("ttlnumb")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"ttlnumb", ""),"field=ttlnumb".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"ttlnumb", ""),"field=ttlnumb".$keylink,"",MODE_PRINT);
			$row["ttlnumb_value"] = $value;
	//	whencreated - Short Date
		    $value = "";
				if (IsNumberType(GetFieldType("whencreated")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"whencreated", "Short Date"),"field=whencreated".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"whencreated", "Short Date"),"field=whencreated".$keylink,"",MODE_PRINT);
			$row["whencreated_value"] = $value;
	//	examiner - 
		    $value = "";
				if (IsNumberType(GetFieldType("examiner")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"examiner", ""),"field=examiner".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"examiner", ""),"field=examiner".$keylink,"",MODE_PRINT);
			$row["examiner_value"] = $value;
	//	filecabinet - 
		    $value = "";
				if (IsNumberType(GetFieldType("filecabinet")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"filecabinet", ""),"field=filecabinet".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"filecabinet", ""),"field=filecabinet".$keylink,"",MODE_PRINT);
			$row["filecabinet_value"] = $value;
	//	titleconame - 
		    $value = "";
				if (IsNumberType(GetFieldType("titleconame")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"titleconame", ""),"field=titleconame".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"titleconame", ""),"field=titleconame".$keylink,"",MODE_PRINT);
			$row["titleconame_value"] = $value;
	//	titlepolicy - 
		    $value = "";
				if (IsNumberType(GetFieldType("titlepolicy")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"titlepolicy", ""),"field=titlepolicy".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"titlepolicy", ""),"field=titlepolicy".$keylink,"",MODE_PRINT);
			$row["titlepolicy_value"] = $value;
	//	titlephone - 
		    $value = "";
				if (IsNumberType(GetFieldType("titlephone")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"titlephone", ""),"field=titlephone".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"titlephone", ""),"field=titlephone".$keylink,"",MODE_PRINT);
			$row["titlephone_value"] = $value;
	//	titleremit - Currency
		    $value = "";
				if (IsNumberType(GetFieldType("titleremit")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"titleremit", "Currency"),"field=titleremit".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"titleremit", "Currency"),"field=titleremit".$keylink,"",MODE_PRINT);
			$row["titleremit_value"] = $value;
	//	titleatty - 
		    $value = "";
				if (IsNumberType(GetFieldType("titleatty")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"titleatty", ""),"field=titleatty".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"titleatty", ""),"field=titleatty".$keylink,"",MODE_PRINT);
			$row["titleatty_value"] = $value;
	//	titlerefatty - 
		    $value = "";
				if (IsNumberType(GetFieldType("titlerefatty")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"titlerefatty", ""),"field=titlerefatty".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"titlerefatty", ""),"field=titlerefatty".$keylink,"",MODE_PRINT);
			$row["titlerefatty_value"] = $value;
	//	titlerecv - Short Date
		    $value = "";
				if (IsNumberType(GetFieldType("titlerecv")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"titlerecv", "Short Date"),"field=titlerecv".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"titlerecv", "Short Date"),"field=titlerecv".$keylink,"",MODE_PRINT);
			$row["titlerecv_value"] = $value;
	//	closesched_date - Short Date
		    $value = "";
				if (IsNumberType(GetFieldType("closesched_date")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"closesched_date", "Short Date"),"field=closesched%5Fdate".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"closesched_date", "Short Date"),"field=closesched%5Fdate".$keylink,"",MODE_PRINT);
			$row["closesched_date_value"] = $value;
	//	closesched_time - 
		    $value = "";
				if (IsNumberType(GetFieldType("closesched_time")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"closesched_time", ""),"field=closesched%5Ftime".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"closesched_time", ""),"field=closesched%5Ftime".$keylink,"",MODE_PRINT);
			$row["closesched_time_value"] = $value;
	//	sellprice - Currency
		    $value = "";
				if (IsNumberType(GetFieldType("sellprice")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"sellprice", "Currency"),"field=sellprice".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"sellprice", "Currency"),"field=sellprice".$keylink,"",MODE_PRINT);
			$row["sellprice_value"] = $value;
	//	deposit - Currency
		    $value = "";
				if (IsNumberType(GetFieldType("deposit")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"deposit", "Currency"),"field=deposit".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"deposit", "Currency"),"field=deposit".$keylink,"",MODE_PRINT);
			$row["deposit_value"] = $value;
	//	loanamt - Currency
		    $value = "";
				if (IsNumberType(GetFieldType("loanamt")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"loanamt", "Currency"),"field=loanamt".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"loanamt", "Currency"),"field=loanamt".$keylink,"",MODE_PRINT);
			$row["loanamt_value"] = $value;
	//	refi_purch - 
		    $value = "";
				if (IsNumberType(GetFieldType("refi_purch")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"refi_purch", ""),"field=refi%5Fpurch".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"refi_purch", ""),"field=refi%5Fpurch".$keylink,"",MODE_PRINT);
			$row["refi_purch_value"] = $value;
	//	res_comm - 
		    $value = "";
				if (IsNumberType(GetFieldType("res_comm")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"res_comm", ""),"field=res%5Fcomm".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"res_comm", ""),"field=res%5Fcomm".$keylink,"",MODE_PRINT);
			$row["res_comm_value"] = $value;
	//	file_status - 
		    $value = "";
				if (IsNumberType(GetFieldType("file_status")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"file_status", ""),"field=file%5Fstatus".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"file_status", ""),"field=file%5Fstatus".$keylink,"",MODE_PRINT);
			$row["file_status_value"] = $value;
	//	file_archlocation - 
		    $value = "";
				if (IsNumberType(GetFieldType("file_archlocation")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"file_archlocation", ""),"field=file%5Farchlocation".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"file_archlocation", ""),"field=file%5Farchlocation".$keylink,"",MODE_PRINT);
			$row["file_archlocation_value"] = $value;
	//	propaddr1 - 
		    $value = "";
				$value = DisplayLookupWizard("propaddr1",$data["propaddr1"],$data,$keylink,MODE_PRINT);
			$row["propaddr1_value"] = $value;
	//	propaddr2 - 
		    $value = "";
				if (IsNumberType(GetFieldType("propaddr2")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"propaddr2", ""),"field=propaddr2".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"propaddr2", ""),"field=propaddr2".$keylink,"",MODE_PRINT);
			$row["propaddr2_value"] = $value;
	//	propcity - 
		    $value = "";
				if (IsNumberType(GetFieldType("propcity")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"propcity", ""),"field=propcity".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"propcity", ""),"field=propcity".$keylink,"",MODE_PRINT);
			$row["propcity_value"] = $value;
	//	propstate - 
		    $value = "";
				if (IsNumberType(GetFieldType("propstate")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"propstate", ""),"field=propstate".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"propstate", ""),"field=propstate".$keylink,"",MODE_PRINT);
			$row["propstate_value"] = $value;
	//	proppostal - 
		    $value = "";
				if (IsNumberType(GetFieldType("proppostal")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"proppostal", ""),"field=proppostal".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"proppostal", ""),"field=proppostal".$keylink,"",MODE_PRINT);
			$row["proppostal_value"] = $value;
	//	propplatte - 
		    $value = "";
				if (IsNumberType(GetFieldType("propplatte")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"propplatte", ""),"field=propplatte".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"propplatte", ""),"field=propplatte".$keylink,"",MODE_PRINT);
			$row["propplatte_value"] = $value;
	//	proplot - 
		    $value = "";
				if (IsNumberType(GetFieldType("proplot")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"proplot", ""),"field=proplot".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"proplot", ""),"field=proplot".$keylink,"",MODE_PRINT);
			$row["proplot_value"] = $value;
	//	client1 - 
		    $value = "";
				if (IsNumberType(GetFieldType("client1")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"client1", ""),"field=client1".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"client1", ""),"field=client1".$keylink,"",MODE_PRINT);
			$row["client1_value"] = $value;
	//	client2 - 
		    $value = "";
				if (IsNumberType(GetFieldType("client2")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"client2", ""),"field=client2".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"client2", ""),"field=client2".$keylink,"",MODE_PRINT);
			$row["client2_value"] = $value;
	//	claddr1 - 
		    $value = "";
				if (IsNumberType(GetFieldType("claddr1")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"claddr1", ""),"field=claddr1".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"claddr1", ""),"field=claddr1".$keylink,"",MODE_PRINT);
			$row["claddr1_value"] = $value;
	//	claddr2 - 
		    $value = "";
				if (IsNumberType(GetFieldType("claddr2")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"claddr2", ""),"field=claddr2".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"claddr2", ""),"field=claddr2".$keylink,"",MODE_PRINT);
			$row["claddr2_value"] = $value;
	//	clphone1 - 
		    $value = "";
				if (IsNumberType(GetFieldType("clphone1")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"clphone1", ""),"field=clphone1".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"clphone1", ""),"field=clphone1".$keylink,"",MODE_PRINT);
			$row["clphone1_value"] = $value;
	//	clphone2 - 
		    $value = "";
				if (IsNumberType(GetFieldType("clphone2")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"clphone2", ""),"field=clphone2".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"clphone2", ""),"field=clphone2".$keylink,"",MODE_PRINT);
			$row["clphone2_value"] = $value;
	//	tenant - 
		    $value = "";
				if (IsNumberType(GetFieldType("tenant")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"tenant", ""),"field=tenant".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"tenant", ""),"field=tenant".$keylink,"",MODE_PRINT);
			$row["tenant_value"] = $value;
	//	matter - 
		    $value = "";
				if (IsNumberType(GetFieldType("matter")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"matter", ""),"field=matter".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"matter", ""),"field=matter".$keylink,"",MODE_PRINT);
			$row["matter_value"] = $value;
	//	staffatty - 
		    $value = "";
				if (IsNumberType(GetFieldType("staffatty")))
				$value = "<span class='runner-field-number'>".
						ProcessLargeText(GetData($data,"staffatty", ""),"field=staffatty".$keylink,"",MODE_PRINT)."</span>";
			else 
				$value = ProcessLargeText(GetData($data,"staffatty", ""),"field=staffatty".$keylink,"",MODE_PRINT);
			$row["staffatty_value"] = $value;
	$rowinfo[] = $row;
	}
	$xt->assign_loopsection("details_row",$rowinfo);
}

$xt->display("ttl_actions_detailspreview.htm");

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