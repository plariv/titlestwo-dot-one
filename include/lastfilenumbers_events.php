<?php 
class eventclass_lastfilenumbers  extends eventsBase
{ 
	function eventclass_lastfilenumbers()
	{
	// fill list of events

//	onscreen events
		$this->events["lastfilenumbers_snippet"] = true;
		$this->events["lastfilenumbers_snippet0"] = true;
		$this->events["lastfilenumbers_snippet1"] = true;


	}
// Captchas functions	

//	handlers
//	onscreen events
function lastfilenumbers_snippet(&$params)
{
// Put your code here.
echo "You can set the next assigned title file number for each year.";

;
}
function lastfilenumbers_snippet0(&$params)
{
// Put your code here.
echo "Your message";

;
}
function lastfilenumbers_snippet1(&$params)
{
    // Put your code here.
echo "You can change the next assigned file number for any year.";
echo "Click ADD button to add a new year."

;
}

} 
?>
