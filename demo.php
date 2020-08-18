<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .pass{
            color: green;
        }

        .fail{
            color: red;
        }
    </style>
</head>
<body>
<?php
    $scoreList = array(100, 55, 60, 95, 40, 30);
?>
    <ul>
        <?php foreach ($scoreList as $score) { ?>
            <?php if ($score < 60) { ?>
                <li style="color: red"><?= $score ?></li>
            <?php }else{ ?>
                <li style="color: green"><?= $score ?></li>
            <?php } ?>
        <?php } ?>
    </ul>

    <ul>
        <?php foreach ($scoreList as $score) { ?>
            <li class=" <?= ( ($score >= 60)? "pass" : "fail" ) ?> "><?= $score ?></li>
        <?php } ?>
    </ul>

    <ul>
        <?php 
            for ($i = 1; $i <= 3; $i++) { 
                echo "<li>$i</li>";
            } 
        ?>
    </ul>
</body>
</html>