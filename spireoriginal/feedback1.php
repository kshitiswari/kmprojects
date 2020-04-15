<?php
$con=mysql_connect('localhost','root','');
mysql_select_db(spire,$con);
if(isset($_POST['Submit']))
{
$name=$_POST['name'];
$mob=$_POST['mob'];
$addr=$_POST['addr'];
$emi=$_POST['emi'];
$sug=$_POST['sug'];
//$rate=$_POST['rate'];
$ins="insert into feedback values('$name',$mob,'$addr','$emi','$sug')";
mysql_query($ins);

//if($x)
echo "data inserted successfully";
//else
//echo "data not inserted";
mysql_close($con);

}
?>

