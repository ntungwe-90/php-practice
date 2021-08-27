<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>
<!-- PHP SYNTAX -->
<?php
echo "WELCOME TO PHP SYNTAX!";


// php comment
//  single-line comment

# single-line comment

/*
 multiple-lines comment block
that spans over multiple
lines
*/

// You can also use comments to leave out parts of a code line
$x = 5 /* + 15 */ + 5;
echo $x;

#declaring variables
<?php
$txt = "Hello Cameroon am coming soon!";
$x = 10;
$y = 18.5;

?>

<?php
$txt = "palace hostel";
echo "I love $txt!";
?>
#php ecko statement
<?php
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm  learning PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";

?>

#data types
#php string
<?php
$x = "Hello America!";
$y = 'Hello Africa!';

echo $x;
echo "<br>";
echo $y;
?>
#string length
<?php
echo strlen("Hello world!"); // outputs 12
?>
#string count words
<?php
echo str_word_count("Hello world am back!"); // outputs 4
?>


# php intergers
<?php
$x = 28962;
var_dump($x);
?>

# php float
<?php
$x = 28.970;
var_dump($x);
?>


# php boolian
$x = true;
$y = false;

#php array
<?php
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>

#php object
class Car {
  function Car() {
      $this->model = "VW";
  }
}

// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;
?>

#The if Else Statement
<?php
$i = age("H");

if ($i < "20") {
    echo "I am an adult!";
} elseif ($i < "40") {
    echo "I am still an adult!";
} else {
    echo "Have a good night!";
}
?>

</body>
</html>