<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="logo">
            <h2>
                WebJournal
            </h2>
        </div>
    </header>
    <div class="conteiner-add-post">
        <div class="flex-options">
            <div class="hour">
                <input type="text" name="date" id="date" readonly>
            </div>
            <div class="submit-post">
                <input type="submit" name="submit" id="submit" value="Enviar">
            </div>
        </div>
        <div class="info-post-textarea">
            <textarea name="info-post" id="info-post" style="width: 346px; height: 128px;"></textarea>
        </div>
    </div>
    <script src="../scripts/add.js"></script>
</body>
</html>