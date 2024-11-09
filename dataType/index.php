<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>
            Data Type in PHP : 
        </h2>
        <?php
        // data type in type
        /**
         * String (single or double quets)
         *  Boolean
         * Integer
         * Float
         * Object
         * Array
         * Null
         * 
         */
        $name = "Amit" ;
        $age =  23;
        $isStudent = true;
        $amount = 122.10;
        $userName = ["user1","user2","user2","user3","user4","user4","user5",3323];
        $noValue = null;
        echo "Data Type in PHP ";
        echo "<br/>";
        echo  var_dump($name) ;
        echo "<br/>";
        echo var_dump($age) ;
        echo "<br/>";
        echo var_dump($isStudent) ;
        echo "<br/>";
        echo var_dump($amount) ;
        echo "<br/>";
        echo var_dump($userName) ;
        echo "<br/>";
        echo var_dump($noValue) ;
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
