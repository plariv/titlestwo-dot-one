<?php

$dal_info=array();


function CustomQuery($dalSQL)
{
	global $conn;
	$rs = db_query($dalSQL,$conn);
	  return $rs;
}

function UsersTableName()
{
	return "`ttwousers`";
}


/**
  * Data Access Layer.
  */
class tDAL
{
	var $agents;
	var $ttl_actions;
	var $properties;
	var $brokers;
	var $buyers;
	var $parties;
	var $sellers;
	var $ttl_recordings;
	var $ttlaction_notes;
	var $lastfilenumbers;
	var $search5;
	var $ttwousers;
	var $titlestwo1_uggroups;
	var $titlestwo1_ugmembers;
	var $titlestwo1_ugrights;
	var $sellersactions;
	var $buyersactions;
	var $lstTables;
	var $Table=array();

	function FillTablesList()
	{
		if($this->lstTables)
			return;
	  $this->lstTables[]=array("name"=>"agents","varname"=>"agents");
	  $this->lstTables[]=array("name"=>"ttl_actions","varname"=>"ttl_actions");
	  $this->lstTables[]=array("name"=>"properties","varname"=>"properties");
	  $this->lstTables[]=array("name"=>"brokers","varname"=>"brokers");
	  $this->lstTables[]=array("name"=>"buyers","varname"=>"buyers");
	  $this->lstTables[]=array("name"=>"parties","varname"=>"parties");
	  $this->lstTables[]=array("name"=>"sellers","varname"=>"sellers");
	  $this->lstTables[]=array("name"=>"ttl_recordings","varname"=>"ttl_recordings");
	  $this->lstTables[]=array("name"=>"ttlaction_notes","varname"=>"ttlaction_notes");
	  $this->lstTables[]=array("name"=>"lastfilenumbers","varname"=>"lastfilenumbers");
	  $this->lstTables[]=array("name"=>"search5","varname"=>"search5");
	  $this->lstTables[]=array("name"=>"ttwousers","varname"=>"ttwousers");
	  $this->lstTables[]=array("name"=>"titlestwo1_uggroups","varname"=>"titlestwo1_uggroups");
	  $this->lstTables[]=array("name"=>"titlestwo1_ugmembers","varname"=>"titlestwo1_ugmembers");
	  $this->lstTables[]=array("name"=>"titlestwo1_ugrights","varname"=>"titlestwo1_ugrights");
	  $this->lstTables[]=array("name"=>"sellersactions","varname"=>"sellersactions");
	  $this->lstTables[]=array("name"=>"buyersactions","varname"=>"buyersactions");
	}

	/**
      * Returns table object by table name.
      * @intellisense
      */
	function & Table($strTable)
	{
		$this->FillTablesList();
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper($strTable)==strtoupper($tbl["name"]))
			{
				$this->CreateClass($tbl);
				return $this->{$tbl["varname"]};
			}
		}
//	check table names without dbo. and other prefixes
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper(cutprefix($strTable))==strtoupper(cutprefix($tbl["name"])))
			{
				$this->CreateClass($tbl);
				return $this->{$tbl["varname"]};
			}
		}
		$dummy=null;
		return $dummy;
	}
	function CreateClass(&$tbl)
	{
		if($this->{$tbl["varname"]})
			return;
//	load table info
		global $dal_info;
		include(getabspath("include/dal/".GoodFieldName($tbl["name"]).".php"));
//	create class and object

		$str = "class class_".GoodFieldName($tbl["name"])." extends tDALTable  {";
		foreach($dal_info[$tbl["name"]] as $fld)
		{
			$str.=' var $'.$fld["varname"].'; ';
		}
		$str.=' function class_'.GoodFieldName($tbl["name"]).'()
			{
				$this->m_TableName = \''.escapesq($tbl["name"]).'\';
			}
		};';
		eval($str);
		$classname="class_".GoodFieldName($tbl["name"]);
		$this->{$tbl["varname"]} = new $classname;
		$this->Table[$tbl["name"]]=&$this->{$tbl["varname"]};
	}
	
	/**
      * Returns list of table names.
      * @intellisense
      */
	function GetTablesList()
	{
		$this->FillTablesList();
		$res=array();
		foreach($this->lstTables as $tbl)
			$res[]=$tbl["name"];
		return $res;
	}
	
	/**
      * Get list of table fields by table name.
      * @intellisense
      */
	function GetFieldsList($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldsList();
	}
	
	/**
      * Get field type by table name and field name.
      * @intellisense
      */
	function GetFieldType($table,$field)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldType($field);
	}

	/**
      * Get table key fields by table name.
      * @intellisense
      */
	function GetDBTableKeys($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetDBTableKeys();
	}
}

$dal = new tDAL;

/**
  *  Data Access Layer table class.
  */ 
class tDALTable
{
	var $m_TableName;
	var $Param = array();
	var $Value = array();

	/**
      * Get table key fields.
      * @intellisense
      */
	function GetDBTableKeys()
	{
		global $dal_info;
		if(!array_key_exists($this->m_TableName,$dal_info) || !is_array($dal_info[$this->m_TableName]))
		{
			return array();
		}
		$ret=array();
		foreach($dal_info[$this->m_TableName] as $fname=>$f)
		{
			if(@$f["key"])
				$ret[]=$fname;
		}
		return $ret;
	}
	
	/**
      * Get list of table fields.
      * @intellisense
      */
	function GetFieldsList()
	{
		global $dal_info;
		return array_keys($dal_info[$this->m_TableName]);
	}

	/**
      * Get field type.
      * @intellisense
      */
	function GetFieldType($field)
	{
		global $dal_info;
		if(!array_key_exists($field,$dal_info[$this->m_TableName]))
			return 200;
		return $dal_info[$this->m_TableName][$field]["type"];
	}
	
	function PrepareValue($value,$type)
	{
	
		if(IsDateFieldType($type))
			return db_datequotes($value);
		if (NeedQuotes($type))
			return db_prepare_string($value);
		else
			return (0+$value);
	}
	
	/**
      * Get table name.
      * @intellisense
      */
	function TableName()
	{
		return AddTableWrappers($this->m_TableName);
	} 

	function Execute_Query($blobs,$dalSQL,$tableinfo)
	{
	global $conn;
				db_exec($dalSQL,$conn);
	}

	/**
      * Add new record to the table.
      * @intellisense
      */
	function Add() 
	{
		global $conn,$dal_info;
		$insertFields="";
		$insertValues="";
		$tableinfo = &$dal_info[$this->m_TableName];
		$blobs = array();
//	prepare parameters		
		foreach($tableinfo as $fieldname=>$fld)
		{
			if(isset($this->{$fld['varname']}))
			{
				$this->Value[$fieldname] = $this->{$fld['varname']};
			}
			foreach($this->Value as $field=>$value)
			{
				if (strtoupper($field)!=strtoupper($fieldname))
					continue;
				$insertFields.= AddFieldWrappers($fieldname).",";
				$insertValues.= $this->PrepareValue($value,$fld["type"]) . ",";
				break;
			}
		}
//	prepare and exec SQL
		if ($insertFields!="" && $insertValues!="")		
		{
			$insertFields = substr($insertFields,0,-1);
			$insertValues = substr($insertValues,0,-1);
			$dalSQL = "insert into ".AddTableWrappers($this->m_TableName)." (".$insertFields.") values (".$insertValues.")";
			$this->Execute_Query($blobs,$dalSQL,$tableinfo);
		}
//	cleanup		
	    $this->Reset();
	}

	/**
      * Query all records from the table.
      * @intellisense
      */
	function QueryAll()
	{
		global $conn;
		$dalSQL = "select * from ".AddTableWrappers($this->m_TableName);
		$rs = db_query($dalSQL,$conn);
		return $rs;
	}

	/**
      * Do a custom query on the table.
      * @intellisense
      */
	function Query($swhere="",$orderby="")
	{
		global $conn;
		if ($swhere)
			$swhere = " where ".$swhere;
		if ($orderby)
			$orderby = " order by ".$orderby;
		$dalSQL = "select * from ".AddTableWrappers($this->m_TableName).$swhere.$orderby;
		$rs = db_query($dalSQL,$conn);
		return $rs;
	}

	/**
      * Delete a record from the table.
      * @intellisense
      */
	function Delete()
	{
		global $conn,$dal_info;
		$deleteFields="";
		$tableinfo = &$dal_info[$this->m_TableName];
//	prepare parameters		
		foreach($tableinfo as $fieldname=>$fld)
		{
			if(isset($this->{$fld['varname']}))
			{
				$this->Param[$fieldname] = $this->{$fld['varname']};
			}
			
			foreach($this->Param as $field=>$value)
			{
				if (strtoupper($field)!=strtoupper($fieldname))
					continue;
				$deleteFields.= AddFieldWrappers($fieldname)."=". $this->PrepareValue($value,$fld["type"]) . " and ";
				break;
			}
		}
//	do delete
		if ($deleteFields)
		{
			$deleteFields = substr($deleteFields,0,-5);
			$dalSQL = "delete from ".AddTableWrappers($this->m_TableName)." where ".$deleteFields;
			db_exec($dalSQL,$conn);
		}
	
//	cleanup
	    $this->Reset();
	}

	/**
      * Reset table object.
      * @intellisense
      */
	function Reset()
	{
		$this->Value=array();
		$this->Param=array();
		global $dal_info;
		$tableinfo = &$dal_info[$this->m_TableName];
//	prepare parameters		
		foreach($tableinfo as $fieldname=>$fld)
		{
			unset($this->{$fld["varname"]});
		}
	}	

	/**
      * Update record in the table.
      * @intellisense
      */
	function Update()
	{
		global $conn,$dal_info;
		$tableinfo = &$dal_info[$this->m_TableName];
		$updateParam = "";
		$updateValue = "";
		$blobs = array();

		foreach($tableinfo as $fieldname=>$fld)
		{
			$command='if(isset($this->'.$fld['varname'].')) { ';
			if($fld["key"])
				$command.='$this->Param[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			else
				$command.='$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.=' }';
			eval($command);
			if(!$fld["key"] && !array_key_exists(strtoupper($fieldname),array_change_key_case($this->Param,CASE_UPPER)))
			{
				foreach($this->Value as $field=>$value)
				{
					if (strtoupper($field)!=strtoupper($fieldname))
						continue;
					$updateValue.= AddFieldWrappers($fieldname)."=".$this->PrepareValue($value,$fld["type"]) . ", ";
					break;
				}
			}
			else
			{
				foreach($this->Param as $field=>$value)
				{
					if (strtoupper($field)!=strtoupper($fieldname))
						continue;
					$updateParam.= AddFieldWrappers($fieldname)."=".$this->PrepareValue($value,$fld["type"]) . " and ";
					break;
				}
			}
		}

//	construct SQL and do update	
		if ($updateParam)
			$updateParam = substr($updateParam,0,-5);
		if ($updateValue)
			$updateValue = substr($updateValue,0,-2);
		if ($updateValue && $updateParam)
		{
			$dalSQL = "update ".AddTableWrappers($this->m_TableName)." set ".$updateValue." where ".$updateParam;
			$this->Execute_Query($blobs,$dalSQL,$tableinfo);
		}

//	cleanup
		$this->Reset();
	}

	function FetchByID()
	{
		global $conn,$dal_info;
		$tableinfo = &$dal_info[$this->m_TableName];

		$dal_where="";
		foreach($tableinfo as $fieldname=>$fld)
		{
			$command='if(isset($this->'.$fld['varname'].')) { ';
			$command.='$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.=' }';
			eval($command);
			foreach($this->Param as $field=>$value)
			{
				if (strtoupper($field)!=strtoupper($fieldname))
				continue;
				$dal_where.= AddFieldWrappers($fieldname)."=".$this->PrepareValue($value,$fld["type"]) . " and ";
				break;
			}
		}
		// cleanup
		$this->Reset();
		// construct and run SQL
		if ($dal_where)
			$dal_where = " where ".substr($dal_where,0,-5);
		$dalSQL = "select * from ".AddTableWrappers($this->m_TableName).$dal_where;
		$rs = db_query($dalSQL,$conn);
		return $rs;
	}
}


class DalRecordset
{
	
	var $m_rs;
	var $m_fields;
	var $m_eof;
	
	function Fields($field="")
	{
		if(!$field)
			return $this->m_fields;
		return $this->Field($field);
	}
	
	function Field($field)
	{
		if($this->m_eof)
			return false;
		foreach($this->m_fields as $name=>$value)
		{
			if(!strcasecmp($name,$field))
				return $value;
		}
		return false;
	}
	function DalRecordset($rs)
	{
		$this->m_rs=$rs;
		$this->MoveNext();
	}
	function EOF()
	{
		return $this->m_eof;
	}
	
	function MoveNext()
	{
		if(!$this->m_eof)
			$this->m_fields=db_fetch_array($this->m_rs);
		$this->m_eof = !$this->m_fields;
		return !$this->m_eof;
	}
}

function cutprefix($table)
{
	$pos=strpos($table,".");
	if($pos===false)
		return $table;
	return substr($table,$pos+1);
}

function escapesq($str)
{
	return str_replace(array("\\","'"),array("\\\\","\\'"),$str);
}

?>