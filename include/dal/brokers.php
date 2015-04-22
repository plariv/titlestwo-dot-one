<?php
$dalTablebrokers = array();
$dalTablebrokers["idbrokers"] = array("type"=>3,"varname"=>"idbrokers");
$dalTablebrokers["ttl_actions_idttl_actions"] = array("type"=>3,"varname"=>"ttl_actions_idttl_actions");
$dalTablebrokers["agents_idagents"] = array("type"=>3,"varname"=>"agents_idagents");
	$dalTablebrokers["idbrokers"]["key"]=true;
	$dalTablebrokers["ttl_actions_idttl_actions"]["key"]=true;
	$dalTablebrokers["agents_idagents"]["key"]=true;
$dal_info["brokers"]=&$dalTablebrokers;

?>