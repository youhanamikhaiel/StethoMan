<?php
require "CONN.php";

//$user_ID=urldecode($_POST['doctorid']);;
$user_ID=201301111;

$user_mail = urldecode($_POST['email']);
$user_mobile = urldecode($_POST['mobile']);
$user_password = urldecode($_POST['password']);
$user_awards = urldecode($_POST['awards']);
//$image = $_POST['image'];

$mysql_qry = "UPDATE doctor SET Mail ='".$user_mail."' , Mobile ='".$user_mobile."', Img ='".$image."', Password='".$user_password."', Education='".$user_awards."'  WHERE DoctorID ='".$user_ID."' ";

echo $mysql_qry;
$retval = mysql_query( $mysql_qry);
if(! $retval )
{
  die("Could not update data: " . mysql_error());
}
else echo "Updated data successfully\n";

?>	



