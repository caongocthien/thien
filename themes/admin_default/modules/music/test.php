<?php 

$conn = mysql_connect("localhost","root","") or die ("Loi ket noi");

mysql_select_db("nukeviet") or die("k ton tai");
$qr =mysql_query("select * from nv4_vi_music_singers ") or die("Loi truy van");

?>


<H1>DSCS</H1>
<table>
	<tr>
		<th>id</th>
		<th>Ten</th>
		<th>Time</th>
		<th>Update</th>
	</tr>
</table>