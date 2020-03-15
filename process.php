<html>
    <head>
        <title>
            Hello PHP
        </title>
    </head>

    <!-- <body>
        <?php

            $name = $_POST["name"];
            echo "Hello, " . $name;

        ?>

    </body> -->

    <body>

        <?php

        $numbers = array(5,3,7);
        $sum = 0;

        foreach($numbers as $number){
            $sum = $sum + $number;
        }

        echo $sum;


        ?>


    </body>


</html>