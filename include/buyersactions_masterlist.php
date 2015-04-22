<?php
include_once(getabspath("include/buyersactions_settings.php"));

function DisplayMasterTableInfo_buyersactions($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	$oldTableName=$strTableName;
	$strTableName="buyersactions";

//$strSQL = "SELECT idbuyers,   ttl_actions_idttl_actions,   parties_idparties,   idparties,   name  FROM buyersactions ";

$sqlHead="SELECT idbuyers,   ttl_actions_idttl_actions,   parties_idparties,   idparties,   name";
$sqlFrom="FROM buyersactions";
$sqlWhere="";
$sqlTail="";

$where="";
$mKeys = array();
$showKeys = "";

global $page_styles, $page_layouts, $page_layout_names, $container_styles;

$layout = new TLayout("masterlist","Extravaganza1Orange","MobileOrange");
$layout->blocks["bare"] = array();
$layout->containers["0"] = array();

$layout->containers["0"][] = array("name"=>"masterlistheader","block"=>"","substyle"=>1);


$layout->skins["0"] = "empty";
$layout->blocks["bare"][] = "0";
$layout->containers["mastergrid"] = array();

$layout->containers["mastergrid"][] = array("name"=>"masterlistfields","block"=>"","substyle"=>1);


$layout->skins["mastergrid"] = "grid";
$layout->blocks["bare"][] = "mastergrid";$page_layouts["buyersactions_masterlist"] = $layout;


if($detailtable=="ttl_actions")
{
		$where.= GetFullFieldName("ttl_actions_idttl_actions")."=".make_db_value("ttl_actions_idttl_actions",$keys[1-1]);
	$showKeys .= " "."Ttl Actions Idttl Actions".": ".$keys[1-1];
	$xt->assign('showKeys',$showKeys);
	
}
	if(!$where)
	{
		$strTableName=$oldTableName;
		return;
	}
	$str = SecuritySQL("Search");
	if(strlen($str))
		$where.=" and ".$str;

	$strWhere=whereAdd($sqlWhere,$where);
	if(strlen($strWhere))
		$strWhere=" where ".$strWhere." ";
	$strSQL= $sqlHead.' '.$sqlFrom.$strWhere.$sqlTail;

//	$strSQL=AddWhere($strSQL,$where);
	LogInfo($strSQL);
	$rs=db_query($strSQL,$conn);
	$data=db_fetch_array($rs);
	if(!$data)
	{
		$strTableName=$oldTableName;
		return;
	}
	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["ttl_actions_idttl_actions"]));
	


//	name - 
			$value="";
				if (IsNumberType(GetFieldType("name")))
				$value = "<span class='runner-field-number'>".ProcessLargeText(GetData($data,"name", ""),"field=name".$keylink).'</span>';
			else 
				$value = ProcessLargeText(GetData($data,"name", ""),"field=name".$keylink);
			$xt->assign("name_mastervalue",$value);

	$layout = GetPageLayout("buyersactions", 'masterlist');
	if($layout)
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
			
	$xt->display("buyersactions_masterlist.htm");
	
	$strTableName=$oldTableName;
}

?>