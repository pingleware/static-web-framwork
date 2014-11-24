<?php 
/**
 *	This is where you store the metadata for each page. 
 *	Included before the objectd and view. 
 *	You can store constants in the APPVARS file that is awlays included
 */

class config{
	$this->pageTitle 			= "PAGE TITLE"; 
	$this->pageDescription 		= "PAGE DESCRIPTION"; 

	$this->stylesheets 			= array(); //Stores the stylesheets you want to include for this model/view
	$this->javascript 			= array(); 
}
?>