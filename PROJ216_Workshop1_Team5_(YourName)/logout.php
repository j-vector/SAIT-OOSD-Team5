<!-- logout.php page 
Author Name: Megha Patel
Creation Date: November 5th, 2014
Course: OOSD Fall 2014
Description: logout function for 
//-->

<?php
    $params = session_get_cookie_params(); // it get value from  session cookie parameters..
    setcookie(session_name(), '', 0, $params['path'], $params['domain'], $params['secure'], isset($params['httponly']));  // send value of cookie
    header("Location: registration.php");
?>