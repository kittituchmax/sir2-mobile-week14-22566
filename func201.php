<?php
//General functions
function sayHi() {
    return"Hello, World!";
}
echo sayHi();
echo "<br />===========<br />";
?>

<?php
//Express or Anonymous functions
$message = function($hi) {
    return $hi;
};
echo $message("Hello, World2!");
?>

<?php
//Arrow functions
echo ("=========<br />");
$message =fn ($name,$age)=> "Name is". $name . ", Age is " .$age;
echo $message("Mark Zuckerberg",25);
?>