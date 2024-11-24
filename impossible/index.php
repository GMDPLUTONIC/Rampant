<?php

// Load the JSON file
$json = file_get_contents("../lists-json/impossible.json");
$list = json_decode($json, true);

// Start output buffering for HTML
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rampppant Impossible Levels List</title>
    <link rel="stylesheet" href="../assets/css/main.css">
	<link rel="icon" href="../assets/favicon/favicon.png">
    <style>
        .container { max-width: 600px; margin: 0 auto; }
        .entry { margin: 15px 0; }
        .number { font-size: 1.2em; font-weight: bold; }
        .info h2, .creator, .verifier { font-family: Arial, sans-serif; margin: 5px 0; }
    </style>
</head>
<body>
    <div class="container">
        <h1 align="center">Rampppant Impossible Levels List</h1>
        
        <?php
        // Index for the list
        $index = 0;

        // Loop through the JSON data to create demon entries
        foreach ($list as $level) {
            $index++;
            ?>
            <div class="entry">
                <div class="number">#<?= $index ?></div>
                <div class="info">
                    <h2> <?= htmlspecialchars($level['name']) ?></h2>
                    <p>ID: <?= htmlspecialchars($level['id']) ?></p>
                    <p>Creator: <?= htmlspecialchars($level['creator']) ?></p>
                    <p>WR: <?= htmlspecialchars($level['wr']) ?></p>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</body>
</html>
