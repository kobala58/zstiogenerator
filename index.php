<html>
<head>
<meta charset="utf-8" />
<title></title>
<style>
form{
text-align: center;


}

</style>

</head>
<body>
<form method="POST" id="form1" >

<h3>WYBIERZ DZIAŁ</h3></br>
<select name="chapterlist" form="chapterform">
  <option value="dzial1">Dzial 1</option>
  <option value="dzial2">Dzial 2</option>
  <option value="dzial3">Dzial 3</option>
  <option value="dzial4">Dzial 4</option>

</select></br></br>

Podaj liczbę słówek jak chcesz wylosować (max 100):</br>
<input type="number" name="wordsnumber" id="a" />
<input type="submit" value="Wylosuj" />


</form>
<?php
$a=$_POST['wordsnumber'];

$polacznie=mysql_connect('localhost','root','');
$baza=mysql_select_db('words',$polacznie);

$zapytanie=mysql_query("select * FROM chapter1");


//$zapytanie=mysql_query("INSERT INTO chapter1 VALUES ('','interview1','rozmowa_kwalifikacyjna1');");

echo $zapytanie;

mysql_close($polacznie);

 ?>
</br></br></br>
<form name="wypelnianie">
<?php
 $a=$_POST['wordsnumber'];
for()


<input type="text" id="a" />

 ?>

</form>
</body>

</html>
