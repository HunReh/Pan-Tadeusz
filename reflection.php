<?php

$con=pg_connect("host=sbazy dbname=s173393 user=s173393 password=");
$querry="select reflection from PanTadeusz";
$querry="insert into PanTadeusz(title,reflection) values('$title','$reflection')";
$result=pg_exec($con,$querry);

if($result){
echo("Done");
}
else{
echo("Fail");
}
?>