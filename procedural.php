<?php<font></font>

$link=mysql_connect('localhost','root','');<fo></fo>
 <font></font>

$result=mysql_query('USE universitas');<font></font>
               <font></font>

$result=mysql_query('SELECT * FROM mahasiswa_ilkom');<font></font>
while ($row=mysql_fetch_array($result, MYSQL_NUM))<font></font>
 {<font></font>
   echo "$row[0] $row[1] $row[2] $row[3] $row[4]";<font></font>
   echo "<br />";<font></font>
 }<font></font>
?>