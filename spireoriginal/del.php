<?php

mysql_connect('localhost','root','');
mysql_select_db('spire');
$del=mysql_query('delete from feedback where uid=\'rate\');

if($del)
echo."database is successfully deleted".;
else

echo."database is not successfully deleted".;

?>