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
        div.conteiner div.posts div.post{
            margin-top: 20px;
        }
        div.conteiner div.posts div.post div.userName{
            display: flex;
        }
        div.conteiner div.posts div.post div.userName div#userImg{
            height: 30px;
            width: 30px;
            border-radius: 50px;
        }
        @media only screen and (max-width: 900px){
            div.conteiner div.posts div.post{
                text-align: center;
            }
            div.conteiner div.posts div.post div.userName{
                align-items: center;
                justify-content: center;
            }
            div.conteiner div.posts div.post div.imgPost img{
                height: 50%;
                width: 50%;
            }
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
                        <img id="imgPost" src="pages/<?php echo $user_data['path'] ?>">
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>