<?php 
class eventclass_buyers_actions  extends eventsBase
{ 
	function eventclass_buyers_actions()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;

		$this->events["BeforeShowView"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values,&$message,$inline)
{

		
// Place event code here.
unset ($values["name"]); 
unset ($values["phone"]);
unset ($values["co_name"]);
unset ($values["addr1"]);
unset ($values["addr2"]);
unset ($values["city"]);
unset ($values["state"]);
unset ($values["postal"]);

// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
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

} 
?>
