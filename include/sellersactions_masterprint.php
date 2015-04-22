<?php
include_once(getabspath("include/sellersactions_settings.php"));

function DisplayMasterTableInfo_sellersactions($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	
	$oldTableName=$strTableName;
	$strTableName="sellersactions";

//$strSQL = "SELECT idsellers,   ttl_actions_idttl_actions,   parties_idparties,   idparties,   name  FROM sellersactions ";

$sqlHead="SELECT idsellers,   ttl_actions_idttl_actions,   parties_idparties,   idparties,   name";
$sqlFrom="FROM sellersactions";
$sqlWhere="";
$sqlTail="";

$where="";

global $pageObject, $page_styles, $page_layouts, $page_layout_names, $container_styles;
$layout = new TLayout("masterprint","Extravaganza1Orange","MobileOrange");
$layout->blocks["bare"] = array();
$layout->containers["0"] = array();

$layout->containers["0"][] = array("name"=>"masterprintheader","block"=>"","substyle"=>1);


$layout->skins["0"] = "empty";
$layout->blocks["bare"][] = "0";
$layout->containers["mastergrid"] = array();

$layout->containers["mastergrid"][] = array("name"=>"masterprintfields","block"=>"","substyle"=>1);


$layout->skins["mastergrid"] = "grid";
$layout->blocks["bare"][] = "mastergrid";$page_layouts["sellersactions_masterprint"] = $layout;


if($detailtable=="ttl_actions")
{
		$where.= GetFullFieldName("ttl_actions_idttl_actions")."=".make_db_value("ttl_actions_idttl_actions",$keys[1-1]);
	
}
if(!$where)
{
	$strTableName=$oldTableName;
	return;
}
	$str = SecuritySQL("Export");
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
				$value = ProcessLargeText(GetData($data,"name", ""),"field=name".$keylink,"",MODE_PRINT);
			$xt->assign("name_mastervalue",$value);
	$xt->display("sellersactions_masterprint.htm");
	$strTableName=$oldTableName;

}

?>