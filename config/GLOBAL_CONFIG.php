<?php 
/**
 *	This is where you store the metadata for each page. 
 *	Included before the objectd and view. 
 *	You can store constants in the APPVARS file that is awlays included
 *
 *	All static variables can be accessed by config::$variable name
 */

class global_config{
	public static $debug				= true; 

	public static $author 				= "Josh Rogan"; 
	public static $pageTitle 			= "DEFAULT TITLE"; 
	public static $pageDescription 		= "DEFAULT DESCRIPTION"; 

	//Viewport optoins 
	public static $maxScale 			= "1.0";
	public static $userScalable			= "no"; 

	//iOS Options
	public static $ios_webapp			= "yes"; 
	public static $ios_status_bar_col	= "black"; 
	public static $ios_title			= "iOS Title";	//Inherit in page config
	public static $ios_icons			= true; 

	public static $global_stylesheets	= array("//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"); 
	public static $global_javascript	= array("//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"); 



}
?>