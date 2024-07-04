<!DOCTYPE html>
<html>
<body>

<?php
$txt1 = "Learn PHP and get it well";
$txt2 = "W3Schools.com";
$x = 5;
$y = 40;

echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
print("Print". $x ."". $y ."</br>");
echo $x + $y ."</br>";
echo strlen($txt1)."</br>";
echo str_word_count($txt1) ."</br>";
echo strpos($txt1,"get")."</br>";
echo strtoupper($txt1)."</br>";
echo(pi())."</br>";
echo(min(0, 150, 30, 20, -8, -200)."</br>");
echo(max(0, 150, 30, 20, -8, -200)."</br>");
echo(abs(-6.7)."</br>");
echo(sqrt(64)."</br>");
echo(round(0.60)."</br>");
echo(round(0.49)."</br>");
echo(rand(10, 100)."</br>");



echo "<br>";

define("GREETING", "Welcome to W3Schools.com!", true);
echo GREETING;

?>

</body>
</html>
