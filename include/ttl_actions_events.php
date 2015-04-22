<?php 
class eventclass_ttl_actions  extends eventsBase
{ 
	function eventclass_ttl_actions()
	{
	// fill list of events
		$this->events["BeforeEdit"]=true;

		$this->events["BeforeProcessAdd"]=true;


		$this->events["BeforeAdd"]=true;


//	onscreen events
		$this->events["ttl_actions_snippet1"] = true;


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values,$where,&$oldvalues,&$keys,&$message,$inline)
{

		        

// Place event code here.
global $dal;

$tblDetail = $dal->Table("properties");

$tblDetail->Value["idproperties"] = $values["idproperties"];

$tblDetail->Param["properties_idproperties"] = $values["properties_idproperties"];

$tblDetail->Update();

unset($values["idproperties"]);
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
				// Add page: Before process
function BeforeProcessAdd(&$conn)
{

		            
//*********Determine next available file number***************
global $conn;

//Retrieve and assign next title file number for current year, and increment the counter for the next one
$strSqlSelect="select substr(lastfile,-4) as lfn from lastfilenumbers where fileyear=year(now())";
$rs=CustomQuery($strSqlSelect);
$data=db_fetch_array($rs);
$str1=date("y");
$str2=($data["lfn"]+1);
$strSqlUpdate="update lastfilenumbers set lastfile=$str1".str_pad($str2, 4, '0', STR_PAD_LEFT)." where fileyear=year(now())";
$rs=CustomQuery($strSqlUpdate);
$_SESSION["lastfilenumber"]= "$str1".str_pad($str2, 4, '0', STR_PAD_LEFT);
$_SESSION["numcontenu"]=$_SESSION["lastfilenumber"]; 




// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeProcessAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values,&$message,$inline)
{

		    

$year = $_REQUEST["useyear"];
//echo "echo variable year: ".$year;
if(!($year=="")) {
      $strSqlSelect="select substr(lastfile,-4) as lfn from lastfilenumbers where fileyear=".$year;
      $rs=CustomQuery($strSqlSelect);
      $data=db_fetch_array($rs);
      $str1=substr($year,2);
      $str2=($data["lfn"]+1);
		$strTfnum=$str1.str_pad($str2, 4, '0', STR_PAD_LEFT);
      $strSqlUpdate="update lastfilenumbers set lastfile=$strTfnum where fileyear=$year";
      $rs=CustomQuery($strSqlUpdate);
      $values["ttlnumb"]= $strTfnum;
		$message = "Saved as $year title file number $strTfnum";

//      $values["numcontenu"]=$values["lastfilenumber"];
}

return true;

;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events
function ttl_actions_snippet1(&$params)
{
//create dropdown box

$str = "";
$str.= "<select id=\"useyear\" name=\"useyear\"><option value=\"\">Or select year...</option>";
$str.="<option value=\"1979\">1979</option>";
$str.="<option value=\"1980\">1980</option>";
$str.="<option value=\"1981\">1981</option>";
$str.="<option value=\"1982\">1982</option>";
$str.="<option value=\"1983\">1983</option>";
$str.="<option value=\"1984\">1984</option>";
$str.="<option value=\"1985\">1985</option>";
$str.="<option value=\"1986\">1986</option>";
$str.="<option value=\"1987\">1987</option>";
$str.="<option value=\"1988\">1988</option>";
$str.="<option value=\"1989\">1989</option>";
$str.="<option value=\"1990\">1990</option>";
$str.="<option value=\"1991\">1991</option>";
$str.="<option value=\"1992\">1992</option>";
$str.="<option value=\"1993\">1993</option>";
$str.="<option value=\"1994\">1994</option>";
$str.="<option value=\"1995\">1995</option>";
$str.="<option value=\"1996\">1996</option>";
$str.="<option value=\"1997\">1997</option>";
$str.="<option value=\"1998\">1998</option>";
$str.="<option value=\"1999\">1999</option>";
$str.="<option value=\"1999\">1999</option>";
$str.="<option value=\"1999\">1999</option>";
$str.="<option value=\"1999\">1999</option>";
$str.="<option value=\"1999\">1999</option>";
$str.="<option value=\"2000\">2000</option>";
$str.="<option value=\"2001\">2001</option>";
$str.="<option value=\"2002\">2002</option>";
$str.="<option value=\"2003\">2003</option>";
$str.="<option value=\"2004\">2004</option>";
$str.="<option value=\"2005\">2005</option>";
$str.="<option value=\"2006\">2006</option>";
$str.="<option value=\"2007\">2007</option>";
$str.="<option value=\"2008\">2008</option>";
$str.="<option value=\"2009\">2009</option>";
$str.="<option value=\"2010\">2010</option>";
$str.="</select>";
echo $str; 
;
}

} 
?>
