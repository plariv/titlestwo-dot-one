<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 


if(!@$_SESSION["UserID"])
{ 
	return;
}
if(!IsAdmin())
{
	return;
}
$nonAdminTablesArr = array();
$nonAdminTablesArr[] = "agents";
$nonAdminTablesArr[] = "ttl_actions";
$nonAdminTablesArr[] = "brokers";
$nonAdminTablesArr[] = "buyers";
$nonAdminTablesArr[] = "parties";
$nonAdminTablesArr[] = "properties";
$nonAdminTablesArr[] = "sellers";
$nonAdminTablesArr[] = "ttl_recordings";
$nonAdminTablesArr[] = "ttlaction_notes";
$nonAdminTablesArr[] = "lastfilenumbers";
$nonAdminTablesArr[] = "search5";
$nonAdminTablesArr[] = "ttwousers";
$nonAdminTablesArr[] = "titlestwo1_uggroups";
$nonAdminTablesArr[] = "titlestwo1_ugmembers";
$nonAdminTablesArr[] = "titlestwo1_ugrights";
$nonAdminTablesArr[] = "sellersactions";
$nonAdminTablesArr[] = "buyersactions";

$cbxNames = array('add' => array('mask' => 'A', 'rightName' => 'add')
	, 'edt' => array('mask' => 'E', 'rightName' => 'edit')
	, 'del' => array('mask' => 'D', 'rightName' => 'delete')
	, 'lst' => array('mask' => 'S', 'rightName' => 'list')
	, 'exp' => array('mask' => 'P', 'rightName' => 'export')
	, 'imp' => array('mask' => 'I', 'rightName' => 'import')
	, 'adm' => array('mask' => 'M'));
	
switch(postvalue("a"))
{
	case "add":
		$sql ="insert into `titlestwo1_uggroups` (Label) values (".db_prepare_string(postvalue("name")).")";
		db_exec($sql,$conn);
		$sql = "select max(GroupID) from `titlestwo1_uggroups`";
		$rs = db_query($sql,$conn);
		$data = db_fetch_numarray($rs);
		echo "ok";
		echo $data[0];
		break;
	case "del":
		$sql ="delete from `titlestwo1_uggroups` where GroupID=".(postvalue("id")+0);
		db_exec($sql,$conn);
		$sql ="delete from `titlestwo1_ugrights` where GroupID=".(postvalue("id")+0);
		db_exec($sql,$conn);
		$sql ="delete from `titlestwo1_ugmembers` where GroupID=".(postvalue("id")+0);
		db_exec($sql,$conn);
		echo "ok";
		break;
	case "rename":
		$sql ="update `titlestwo1_uggroups` set Label=".db_prepare_string(postvalue("name"))." where GroupID=".(postvalue("id")+0);
		db_exec($sql,$conn);
		echo "ok";
		break;
	case 'saveRights':
		$error = '';
		db_exec("delete from `titlestwo1_ugrights`", $conn);
		$realTables = GetRealValues();
		if(postvalue('state'))
		{
			$state = my_json_decode(postvalue('state'));
			foreach ($state as $groupId => $groupRights)
				foreach ($groupRights as $table => $mask)
				{
					if(!array_key_exists($table, $realTables))
						continue;
					if($mask != '')
						db_exec(mysprintf("insert into `titlestwo1_ugrights` (TableName,GroupID,AccessMask) 
							values (%s, %d, %s)"
							, array(db_prepare_string(html_special_decode($realTables[$table])), $groupId, db_prepare_string($mask))), $conn);
					if(db_error($conn) != '')
						$error .= ($error == '' ? '' : ' ').db_error($conn);
				}
		}
		getJSONResult($error);
		break;
	case 'saveMembership':
		$error = '';
		$groupId = postvalue('group');
		$realUsers = GetRealValues();
		
		for($i=0;$i<count($realUsers);$i++)
		{
			if($realUsers[$i] != $_SESSION["UserID"])
				$sql = "delete from `titlestwo1_ugmembers` where UserName=%s";
			else
				$sql = "delete from `titlestwo1_ugmembers` where UserName=%s and GroupID<>-1";
			
			db_exec(mysprintf($sql, array(db_prepare_string(html_special_decode($realUsers[$i])))), $conn);	
		}
		
		if(postvalue('state'))
		{
			$state = my_json_decode(postvalue('state'));
			foreach ($state as $group => $users)
				foreach ($users as $user)
				{
					if(!array_key_exists($user, $realUsers))
						continue;
					
					db_exec(mysprintf("insert into `titlestwo1_ugmembers` (UserName, GroupID) values (%s, %d)"
						, array(db_prepare_string(html_special_decode($realUsers[$user])), $group)), $conn);
					
					if(db_error($conn) != '')
						$error .= db_error($conn);
				}
		}
		getJSONResult($error);
		break;
}

/**
 * GetRealValues
 * Form array with real users or tables names
 * @return {array} array of reaf names
 */
function GetRealValues()
{
	$result = array();
	if(postvalue('realValues'))
		$realValues = my_json_decode(postvalue('realValues'));
		foreach ($realValues as $key =>$value)
			$result[$key] = $value;
	return $result;
}

/**
 * getJSONResult
 * Form result as a JSON object according of errors
 * @param {string} list of errors
 */
function getJSONResult($error)
{
	$result['success'] = $error == '';
	$result['error'] = $error;	
	echo my_json_encode($result);
}