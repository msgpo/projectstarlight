<?php

$pgsqlconnection=pg_connect("host=127.0.0.1 dbname=df_lms user=df_lms password=donutfortress");

if(isset($_GET['keyword'])){
    $keyword = 	trim($_GET['keyword']) ;
$keyword = mysqli_real_escape_string($dbc, $keyword);

$query = "SELECT * FROM sport WHERE sport_name = '$keyword'";

//echo $query;
$result = pg_query ($pgsqlconnection, $query);
if($result)
{
	
    if(pg_affected_rows($dbc)!=0)
	{
	echo '<table border="0" cellpadding="0" cellspacing="0" class="mytable boxshadow">';
	echo '<tr bgcolor="#66cc44"><th>Name</th><th>Gender</th><th>Options</th></tr>';
        while($row = pg_fetch_assoc($result))
		 {
			echo '<tr><td>'.$row['sport_name'].'</td>' . '<nobr>';
			echo '</tr>';
		 }
	echo '</table>';
    }
	else 
	{
       // echo 'No Results for :"'.$_GET['keyword'].'"';
	   echo '<img border="0" width="490" alt="Record not found!." title="Record not found!" src=' . '"img/WITW-BHMS/record-not-found-wenhern.png" style="border:1px solid #ccc; ">';
			echo '<br>';
			echo '<span class="boxshadow" style="background:#fff">';
			echo 'Unofficial lodger with last name ' . $_GET['keyword'] . ' was not found.';
			echo '</span>';
    }
  
}
}else {
    echo 'Parameter Missing';
}




?>