<?php

$con = mysqli_connect('localhost','root','') or die ("erro");
$banco = mysqli_select_db($con,'app') or die ("erro");
mysqli_set_charset($con,'utf8');

$sql = 'select * from login';

$result =mysqli_query($con,$sql);

while($dados=mysqli_fetch_array($result))
{
echo $dados['usuario'];
echo "  ";
echo $dados['senha'];
echo "<br>";
}
?>
