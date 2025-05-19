<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Notebook</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- http://localhost/php-notebook/ -->
<div class="wrapper">
    <?php include_once './header.php' ?>
    <main class="page">
        <div class="container">   
            <ul class="accordion-menu">
                <li>
                    <?php include './topics/01-local-server.php' ?>
                </li>
                <li>
                    <?php include './topics/02-output.php' ?>
                </li>
                <li>
                    <?php include './topics/03-comments.php' ?>
                </li>
                <li>
                    <?php include './topics/04-variables.php' ?>
                </li>
                <li>
                    <?php include './topics/05-data-types.php' ?> 
                </li>
                <li>
                    <?php include './topics/06-conditions.php' ?>
                </li>
                <li>
                    <?php include './topics/07-arithmetic-operators.php' ?>
                </li>
                <li>
                    <?php include './topics/08-loops.php' ?>
                </li>
                <li>
                    <?php include './topics/09-include-require.php' ?>    
                </li>
                <li>
                    <?php include './topics/10-functions.php' ?>    
                </li>
                <li>
                    <?php include './topics/11-string-functions.php' ?>
                </li>
                <li>
                    <?php include './topics/12-date-functions.php' ?>
                </li>
            </ul>
        </div>
    </main>
</div>
</body>
<script src="./script.js"></script>
</html>