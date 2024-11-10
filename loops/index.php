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
        <h2>Loops :</h2>
        <div class="row">
            <div class="col-md-6">
                <h3>For Loop :</h3>
                <?php
                for ($i = 0; $i < 5; $i++) {
                    echo $i . "<br>";
                }
                ?>
            </div>
            <div class="col-md-6">
                <h3>While Loop :</h3>
                <?php
                $i = 0;
                while ($i < 5) {
                    echo $i . "<br>";
                    $i++;
                }
                ?>
            </div>
            <div>
                <h3>Do-While Loop :</h3>
                <?php
                    $i = 0;
                    do {
                        echo $i ."<br>";
                        $i++;
                        } while ($i < 5);
                ?>
            </div>
            <div>
                <h3>foreach Loop :</h3>
                <?php
                    $fruits = array("Apple", "Banana", "Cherry", "Date");
                    foreach ($fruits as $ind=> $fruits_name) {
                        echo $ind ." ".$fruits_name."<br>";
                    }

                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>
