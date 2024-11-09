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
        <?php
        /**
         * Variable is case-sensitive
         */
        $name = "Amit Verma";
        $experience = "1 year";

        // PHP Variable Rules
        echo "<h3>PHP Variable Rules:</h3>";
        echo "<ul>";
        echo "<li>1. Variables will start with a \$ sign.</li>";
        echo "<li>2. Variables can only start with a letter or an underscore (_).</li>";
        echo "<li>3. Variable body can only contain alphabets, numbers, or an underscore.</li>";
        echo "</ul>";
        ?>

        <h4><?php echo $name ?> has <?php echo $experience ?> of experience as a Software Developer.</h4>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
