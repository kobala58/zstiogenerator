<?php
class Que{
  public $word = '';
  public $correct_answer = '';

  function insert($w , $c){
    $this->$word = $w;
    $this->$correct_answer = $c
  }

}

function generate_select($name){
    $x=1;
    echo"<p class='que'>".$name.
        "<input type='text' name='q".$x."> </br>"
  }

$table=$_POST["chapterlist"];
$words=$_POST["wordsnumber"];

$conn = mysqli_connect("localhost","root","","words");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$syn = "SELECT *
        FROM '$table'ORDER BY RAND() LIMIT '$words'";

$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    $x=1;
    while($row = $result->fetch_assoc()) {
        ${"q".$x} = new Que;
        ${"q".$x}-> insert($row["english_worlds"],$row["polish_words"]);
        generate_select($row["english_worlds"]);
        $x++
    }
} else {
    echo "0 results";
}
?>
