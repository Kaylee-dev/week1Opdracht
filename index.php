<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="date.css">
        <title>Time</title>
    </head>
    <body>
        <div class="time">
            <?php 
            $t = date("H");
                if ($t < "6") {
                    echo "<h2>Goede nacht!</h2>";
                    echo date('<p>H:i</p>');
                    ?>
                    <img src="images/night.png">
                    <?php 
                    } elseif ($t < "12") {
                        echo "<h2>Goede morgen!</h2>";
                        echo date('<p>H:i</p>');
                    ?>
                    <img src="images/morning.png">
                    <?php 
                       } elseif ($t < "18") {
                            echo "<h2>Goede middag!</h2>";
                            echo date('<p>H:i</p>');
                    ?>
                    <img src="images/afternoon.png">
                    <?php 
                        }elseif ($t < "0") {
                            echo "<h2>Goede avond!</h2>";
                            echo date('<p>H:i</p>');
                            ?>
                            <img src="images/evening.png">
                          <?php } ?>
                    
            <!-- ?> -->
        </div>
        
    </body>
</html>