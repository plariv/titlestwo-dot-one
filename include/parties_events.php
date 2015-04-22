<?php 
class eventclass_parties  extends eventsBase
{ 
	function eventclass_parties()
	{
	// fill list of events

//	onscreen events
		$this->events["parties_snippet"] = true;
		$this->events["parties_list_msg_ByrSlrAddBk"] = true;


	}
// Captchas functions	

//	handlers
//	onscreen events
function parties_snippet(&$params)
{
// Put your code here.
echo "Adress Book for Sellers and Buyers";

;
}
function parties_list_msg_ByrSlrAddBk(&$params)
{
// Put your code here.
echo "Address Book for Buyers and Sellers";

;
}

} 
?>
