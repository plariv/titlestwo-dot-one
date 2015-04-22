<?php
$dalTableagents = array();
$dalTableagents["idagents"] = array("type"=>3,"varname"=>"idagents");
$dalTableagents["name"] = array("type"=>200,"varname"=>"name");
$dalTableagents["salutation"] = array("type"=>200,"varname"=>"salutation");
$dalTableagents["phone"] = array("type"=>200,"varname"=>"phone");
$dalTableagents["contact"] = array("type"=>200,"varname"=>"contact");
$dalTableagents["co_name"] = array("type"=>200,"varname"=>"co_name");
$dalTableagents["addr1"] = array("type"=>200,"varname"=>"addr1");
$dalTableagents["addr2"] = array("type"=>200,"varname"=>"addr2");
$dalTableagents["city"] = array("type"=>200,"varname"=>"city");
$dalTableagents["state"] = array("type"=>200,"varname"=>"state");
$dalTableagents["postal"] = array("type"=>200,"varname"=>"postal");
	$dalTableagents["idagents"]["key"]=true;
$dal_info["agents"]=&$dalTableagents;

?>