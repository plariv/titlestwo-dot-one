<?php
include_once(getabspath("include/properties_settings.php"));

function DisplayMasterTableInfo_properties($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	$oldTableName=$strTableName;
	$strTableName="properties";

//$strSQL = "SELECT  properties.propaddr1 AS `Address line 1`,  properties.propaddr2 AS `Address line 2`,  properties.propcity AS City,  properties.propstate AS `State`,  properties.proppostal AS `ZIP Code`,  properties.propplatte AS `Platte Number`,  properties.proplot AS `Plot Number`,  properties.proplong AS Longitude,  properties.proplat AS Latitude,  properties.idproperties,  ttl_actions.examiner,  ttl_actions.filecabinet,  ttl_actions.whencreated,  ttl_actions.idttl_actions,  ttl_actions.properties_idproperties  FROM properties  LEFT OUTER JOIN ttl_actions ON properties.idproperties = ttl_actions.properties_idproperties  ";

$sqlHead="SELECT properties.propaddr1 AS `Address line 1`,  properties.propaddr2 AS `Address line 2`,  properties.propcity AS City,  properties.propstate AS `State`,  properties.proppostal AS `ZIP Code`,  properties.propplatte AS `Platte Number`,  properties.proplot AS `Plot Number`,  properties.proplong AS Longitude,  properties.proplat AS Latitude,  properties.idproperties,  ttl_actions.examiner,  ttl_actions.filecabinet,  ttl_actions.whencreated,  ttl_actions.idttl_actions,  ttl_actions.properties_idproperties";
$sqlFrom="FROM properties  LEFT OUTER JOIN ttl_actions ON properties.idproperties = ttl_actions.properties_idproperties";
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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["properties_masterlist"] = $layout;


if($detailtable=="ttl_actions")
{
		$where.= GetFullFieldName("idproperties")."=".make_db_value("idproperties",$keys[1-1]);
	$showKeys .= " "."Idproperties".": ".$keys[1-1];
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
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["idproperties"]));
	


//	Address line 1 - 
			$value="";
				if (IsNumberType(GetFieldType("Address line 1")))
				$value = "<span class='runner-field-number'>".ProcessLargeText(GetData($data,"Address line 1", ""),"field=Address+line+1".$keylink).'</span>';
			else 
				$value = ProcessLargeText(GetData($data,"Address line 1", ""),"field=Address+line+1".$keylink);
			$xt->assign("Address_line_1_mastervalue",$value);

//	Address line 2 - 
			$value="";
				if (IsNumberType(GetFieldType("Address line 2")))
				$value = "<span class='runner-field-number'>".ProcessLargeText(GetData($data,"Address line 2", ""),"field=Address+line+2".$keylink).'</span>';
			else 
				$value = ProcessLargeText(GetData($data,"Address line 2", ""),"field=Address+line+2".$keylink);
			$xt->assign("Address_line_2_mastervalue",$value);

//	City - 
			$value="";
				if (IsNumberType(GetFieldType("City")))
				$value = "<span class='runner-field-number'>".ProcessLargeText(GetData($data,"City", ""),"field=City".$keylink).'</span>';
			else 
				$value = ProcessLargeText(GetData($data,"City", ""),"field=City".$keylink);
			$xt->assign("City_mastervalue",$value);

//	State - 
			$value="";
				if (IsNumberType(GetFieldType("State")))
				$value = "<span class='runner-field-number'>".ProcessLargeText(GetData($data,"State", ""),"field=State".$keylink).'</span>';
			else 
				$value = ProcessLargeText(GetData($data,"State", ""),"field=State".$keylink);
			$xt->assign("State_mastervalue",$value);

//	ZIP Code - 
			$value="";
				if (IsNumberType(GetFieldType("ZIP Code")))
				$value = "<span class='runner-field-number'>".ProcessLargeText(GetData($data,"ZIP Code", ""),"field=ZIP+Code".$keylink).'</span>';
			else 
				$value = ProcessLargeText(GetData($data,"ZIP Code", ""),"field=ZIP+Code".$keylink);
			$xt->assign("ZIP_Code_mastervalue",$value);

//	Platte Number - 
			$value="";
				if (IsNumberType(GetFieldType("Platte Number")))
				$value = "<span class='runner-field-number'>".ProcessLargeText(GetData($data,"Platte Number", ""),"field=Platte+Number".$keylink).'</span>';
			else 
				$value = ProcessLargeText(GetData($data,"Platte Number", ""),"field=Platte+Number".$keylink);
			$xt->assign("Platte_Number_mastervalue",$value);

//	Plot Number - 
			$value="";
				if (IsNumberType(GetFieldType("Plot Number")))
				$value = "<span class='runner-field-number'>".ProcessLargeText(GetData($data,"Plot Number", ""),"field=Plot+Number".$keylink).'</span>';
			else 
				$value = ProcessLargeText(GetData($data,"Plot Number", ""),"field=Plot+Number".$keylink);
			$xt->assign("Plot_Number_mastervalue",$value);

	$layout = GetPageLayout("properties", 'masterlist');
	if($layout)
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
			
	$xt->display("properties_masterlist.htm");
	
	$strTableName=$oldTableName;
}

?>