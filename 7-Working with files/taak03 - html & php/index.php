
<html>
<head>
<?php  
require 'C:\Users\diego\OneDrive - ROCvA, ROCvF en VOvA\jaar1\php-basic-c0\7-Working with files\taak03 - html & php\database.php';
$leeftijd = 17;
?>
</head>
<body>

    <div class="menu">
        <?php include 'C:\Users\diego\OneDrive - ROCvA, ROCvF en VOvA\jaar1\php-basic-c0\7-Working with files\taak03 - html & php\menu.php'; ?> 
    </div>

    <div id="leeftijdChecker">
        <?php
            if($leeftijd < 16 ){
                echo "<h6>Je bent te jong om deze pagina te bekijken</h6>";
            }
            if($leeftijd >= 16){
                echo "<h6>permission granted</h6>";
            }
        ?>
    </div>

</body>
</html>