<?php
$dalTableparties = array();
$dalTableparties["idparties"] = array("type"=>3,"varname"=>"idparties");
$dalTableparties["name"] = array("type"=>200,"varname"=>"name");
$dalTableparties["salutation"] = array("type"=>200,"varname"=>"salutation");
$dalTableparties["phone"] = array("type"=>200,"varname"=>"phone");
$dalTableparties["contact"] = array("type"=>200,"varname"=>"contact");
$dalTableparties["co_name"] = array("type"=>200,"varname"=>"co_name");
$dalTableparties["addr1"] = array("type"=>200,"varname"=>"addr1");
$dalTableparties["addr2"] = array("type"=>200,"varname"=>"addr2");
$dalTableparties["city"] = array("type"=>200,"varname"=>"city");
$dalTableparties["state"] = array("type"=>200,"varname"=>"state");
$dalTableparties["postal"] = array("type"=>200,"varname"=>"postal");
	$dalTableparties["idparties"]["key"]=true;
$dal_info["parties"]=&$dalTableparties;

?>