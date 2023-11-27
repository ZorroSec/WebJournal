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
    <style>
        div.conteiner{
            padding: 10px;
            font-family: Arial, Helvetica, sans-serif;
        }
        div.conteiner div.posts div.post div.userName{
            display: flex;
        }
        div.conteiner div.posts div.post div.userName div#userImg{
            height: 30px;
            width: 30px;
            border-radius: 50px;
        }
    </style>
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
                        <div id="userImg"></div>
                        <p><?php echo $user_data['nome'] ?></p>
                    </div>
                    <div class="imgPost">
                        <img src="pages/<?php echo $user_data['path'] ?>" height="100%" width="50%">
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>