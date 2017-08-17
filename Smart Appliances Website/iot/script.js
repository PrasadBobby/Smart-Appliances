// Function to send IR commands
$(document).ready(function buttonClick(clicked_id)
{

    if (clicked_id == "irTVpwr"){
        $.get( "curl.php", {
        room: "185.176.43.76", button: "irTVpwr"} );  
    } 

    if (clicked_id == "irTVsrc"){
        $.get( "curl.php", {
        room: "185.176.43.76", button: "irTVsrc"} );  
    } 

    if (clicked_id == "irTVmute"){
        $.get( "curl.php", {
        room: "185.176.43.76", button: "irTVmute"} );  
    } 

    if (clicked_id == "irTVvdn"){
        $.get( "curl.php", {
        room: "185.176.43.76", button: "irTVvdn"} );  
    } 

	if (clicked_id == "irTVvup"){
        $.get( "curl.php", {
        room: "185.176.43.76", button: "irTVvup"} );  
    } 
	
    if (clicked_id == "irTVchup"){
        $.get( "curl.php", {
        room: "185.176.43.76", button: "irTVchup"} );  
    } 

	if (clicked_id == "irTVchdn"){
        $.get( "curl.php", {
        room: "185.176.43.76", button: "irTVchdn"} );  
    } 
	
    if (clicked_id == "irRECpwr"){
        $.get( "curl.php", {
        room: "185.176.43.76", button: "irRECpwr"} );  
    } 

    if (clicked_id == "irALLpwr"){
        $.get( "curl.php", {
        room: "185.176.43.76", button: "irALLpwr"} );  
    } 

	if (clicked_id == "irRECpwrON"){
        $.get( "curl.php", {
        room: "185.176.43.76", button: "irRECpwrON"} );  
    } 

	if (clicked_id == "irRECpwrOFF"){
        $.get( "curl.php", {
        room: "185.176.43.76", button: "irRECpwrOFF"} );  
    } 

    if (clicked_id == "irRECmute"){
        $.get( "curl.php", {
        room: "185.176.43.76", button: "irRECmute"} );  
    } 

    if (clicked_id == "irRECvdn"){
        $.get( "curl.php", {
        room: "185.176.43.76", button: "irRECvdn"} );  
    } 

	if (clicked_id == "irRECvup"){
        $.get( "curl.php", {
        room: "http://smarthomes.atwebpages.com/iot/index.html", button: "irRECvup"} );  
    } 
 
}