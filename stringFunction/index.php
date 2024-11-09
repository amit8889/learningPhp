<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>
            String Functions :  
        </h2>
        <?php
            $php_info = "PHP (Hypertext Preprocessor) is a widely-used, open-source scripting language especially suited for web development. It is fast, flexible, and pragmatic. PHP powers many popular websites and applications like WordPress, Facebook, and Wikipedia. PHP is a server-side language, meaning it runs on the web server to process the logic and then sends the output to the client browser. With PHP, you can easily interact with databases, handle form submissions, manage sessions, and more.";
            echo $php_info;
        ?>

        <p> <strong >Length :</strong> <?php echo strlen($php_info)?></p>
        <p> <strong >Word :</strong> <?php echo str_word_count($php_info)?></p>
        <p> <strong >Reverse :</strong> <?php echo strrev($php_info)?></p>
        <p> <strong >Search :</strong> <?php echo strpos($php_info,"scr")?></p>
        <p> <strong >Replace (PHP with Java):</strong> <?php echo str_replace("PHP","JAVA",$php_info)?></p>
        <p> <strong >Repeat :</strong> <?php echo str_repeat($php_info,3)?></p>
        <span style="background-color: blueviolet; "> <strong >Ltrim :</strong> <?php echo ltrim("     hello      ")?></span>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
