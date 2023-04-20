<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Looping</title>
    </head>
    <body>
        <?php
        // while looping
        echo '<h3>While Looping<h3>';
        $i = 0;
         while ($i < 10) {
            echo $i;
            echo ', ';
            i++;
         }
         echo $i;

         //do while looping
         echo '<h3>do-while looping</h3>';
         $j = 0;
         do {
            echo $j;
            echo ', ';
         } while ($j < 10);
         echo $j;
        ?>
    </body>
</html>