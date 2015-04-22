<?php 
class eventclass_sellers  extends eventsBase
{ 
	function eventclass_sellers()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;

		$this->events["BeforeEdit"]=true;

		$this->events["BeforeShowView"]=true;


//	onscreen events
		$this->events["sellers_snippet"] = true;
		$this->events["sellers_snippet1"] = true;


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values,&$message,$inline)
{

		
// Place event code here.
unset($values["name"]);
unset($values["phone"]);
unset($values["co_name"]);
unset($values["addr1"]);
unset($values["addr2"]);
unset($values["city"]);
unset($values["state"]);
unset($values["postal"]);

// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values,$where,&$oldvalues,&$keys,&$message,$inline)
{

		    

// Place event code here.

unset($values["name"]);
unset($values["phone"]);
unset($values["co_name"]);
unset($values["addr1"]);
unset($values["addr2"]);
unset($values["city"]);
unset($values["state"]);
unset($values["postal"]);

// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowView(&$xt,&$templatefile,&$values)
{

		
//**********  Check if specific record exists  ************
global $conn;
$strSQLExists = "select * from ttl_actions where idttl_actions= ";
$strSQLExists.= "'".$values["ttl_actions_idttl_actions"]."'";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists);
if($data)
{
	// if record exists do something
  $ttlnumber=$data["ttlnumb"];
  $xt->assign("ttlnumber",$ttlnumber);
}
else
{
	// if dont exist do something else
}





// Place event code here.
// Use "Add Action" button to add code snippets.


;		
} // function BeforeShowView

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events
function sellers_snippet(&$params)
{
    // Put your code here.
global $dal, $strTableName;
echo "Seller Activity<br>";
if ($_SESSION[$strTableName."_masterkey1"])
{
  $tblMaster = $dal->Table("ttl_actions");
  $rs = $tblMaster->Query("ttl_actions_idttl_actions=".$_SESSION[$strTableName."_masterkey1"],"");

  if ($data = db_fetch_array($rs))

  {

    echo "Title File Number: ".$data["ttlnumb"]."<br>";
    echo "Property: ".$data["propaddr1"]."<br>";

  }

}

;
}
function sellers_snippet1(&$params)
{
    // Put your code here.
global $dal, $strTableName;
if ($_SESSION[$strTableName."_masterkey1"])
{
  $tblttl_actions = $dal->Table("ttl_actions");
  $rs = $tblttl_actions->Query("idttl_actions=".$_SESSION[$strTableName.
    "_masterkey1"],"");
  if ($data = db_fetch_array($rs))
  {
    echo "Title file number: ".$data["ttlnumb"]."<br>";
  }

}
;
}

} 
?>
