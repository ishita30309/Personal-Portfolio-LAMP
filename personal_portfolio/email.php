<?php
echo "<center><u><h1>Ishita Goyal-----E20CSE153</h1></u>";
$email = "demotestemail@hotmail.com";
class cException extends Exception{
public function errorMessage() 
{
global $email;
echo "Error on line ".$this->getLine()." in ".$this->getFile().": <b>$email</b> is not a valid E-Mail address";
}}

try{
if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) 
throw new cException($email);
if(strpos($email, "example") !== FALSE){
throw new Exception("$email is an example e-mail");}
echo "demotestemail@hotmail.com is a valid mail.";
}
catch (cException $e){
$e->errorMessage();}
catch (Exception $e){
$e->getMessage();
}
echo "</center>";
?>
