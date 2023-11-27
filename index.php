<?php
    include_once('pages/config.php');
    $read = mysqli_query($conn, "SELECT * FROM posts ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>WebJournal</title>
</head>
<body>
    <header class="header">
        <div class="logo">
            <h2>
                <a href="index.php" style="text-decoration: none; color: #23abff;">WebJournal</a>
            </h2>
        </div>
    </header>
    <div class="conteiner">
        <div class="posts">
            <?php while($user_data = mysqli_fetch_assoc($read)) { ?>
                <div class="post">
                    <div class="userName">
                        <div class="userImg"></div>
                        <h4><?php echo $user_data['nome'] ?></h4>
                    </div>
                    <div class="imgPost">
                        <img src="pages/<?php echo $user_data['path'] ?>">
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>