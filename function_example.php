<!DOCTYPE html>
<html>
    <body>
        <?php
        function setHeight($minheight=50)
        {
            echo "the Hight is $minheight </br>";
        }
        function sum($x,$y)
        {
            $z=$x+$y;
            return $z;
        }
        echo "4+7=".sum(4,7)."<br>";
        echo "2+5=".sum(2,5)."<br>";
        echo "8+9=".sum(8,9)."<br>";
        ?>
    </body>
</html>