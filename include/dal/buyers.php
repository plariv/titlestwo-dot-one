<?php
$dalTablebuyers = array();
$dalTablebuyers["idbuyers"] = array("type"=>3,"varname"=>"idbuyers");
$dalTablebuyers["ttl_actions_idttl_actions"] = array("type"=>3,"varname"=>"ttl_actions_idttl_actions");
$dalTablebuyers["parties_idparties"] = array("type"=>3,"varname"=>"parties_idparties");
	$dalTablebuyers["idbuyers"]["key"]=true;
	$dalTablebuyers["ttl_actions_idttl_actions"]["key"]=true;
	$dalTablebuyers["parties_idparties"]["key"]=true;
$dal_info["buyers"]=&$dalTablebuyers;

?>