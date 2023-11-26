<?php
    include_once('config.php') ;
    if(isset( $_POST['submit'] )){
        $date = $_POST['info-date'];
        $post = $_POST['info-post'];

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v6.4.2/css/all.css">
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
        <form action="add.php" method="POST" enctype="multipart/form-data">
            <div class="flex-options">
                <div class="hour">
                    <label for="date"><i class="fa-regular fa-calendar"></i></label>
                    <input type="text" name="info-date" id="date" readonly>
                </div>
                <div class="submit-post">
                    <input type="submit" name="submit" id="submit" value="Enviar">
                </div>
            </div>
            <div class="info-post-textarea">
                <textarea name="info-post" id="info-post" style="width: 346px; height: 128px;"></textarea>
            </div>
            <div class="info-post-name">
                <label for="info-name"><i class="fa-solid fa-user fa-fade"></i></label>
                <input type="text" name="info-nome" id="info-nome" placeholder="Nome">
            </div>
            <div class="info-post-image">
                <label for="info-img"><i class="fa-solid fa-image"></i></label>
                <input type="file" name="info-img" id="info-img">
            </div>
        </form>
    </div>
    <script src="../scripts/add.js"></script>
</body>
</html>