<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Arrays</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
         <?php
           $marks = array(
            "amit"=>"54",
            "kp"=>"95",
            "shubham"=>1000,
            "demo"=>["43","32","32","d","43","43","32"]
           );
           
           foreach ($marks as $mark=> $value) {
            if (is_array($value)) {
                $value = implode(", ", $value);
            }
            echo "$mark's marks are $value<br>";
            
         }
         ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
