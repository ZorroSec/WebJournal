<?php
    include_once('pages/config.php');
    $read = mysqli_query($conn, "SELECT * FROM posts ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v6.4.2/css/all.css">
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
            background: #23abff;
            margin-right: 3px;
            border-radius: 50px;
        }
        div.conteiner div.posts div.post{
            text-align: left;
        }
        div.conteiner div.posts div.post div.userName{
            align-items: center;
            justify-content: center;
        }
        div.conteiner div.posts div.post div.imgPost img{
            height: 50%;
            width: 50%;
        }
        div.break{
            margin: auto;
            margin-top: 10px;
            border-bottom: 6px solid rgba(51,51,51,0.2);
            width: 500px;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
            border-top-right-radius: 20px;
            border-top-left-radius: 20px
        }
    </style>
</head>
<body>
    <header class="header" style="justify-content: space-between;">
        <div class="logo">
            <h2>
                <a href="index.php" style="text-decoration: none; color: #23abff;">WebJournal</a>
            </h2>
        </div>
        <div class="link">
            <a href="pages/search.php" style="text-decoration: none; color: #23abff;"><i class="fa-solid fa-magnifying-glass fa-lg"></i></a>
        </div>
        <div class="link">
            <a href="pages/add.php" style="text-decoration: none; color: #23abff;"><i class="fa-solid fa-plus fa-lg"></i></a>
        </div>
        <div class="link">
            <a href="pages/blog.php" style="text-decoration: none; color: #23abff;"><i class="fa-solid fa-blog"></i></a>
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
                    <div class="subtitlePost">
                        <p><?php echo $user_data['post'] ?></p>
                    </div>
                    <br>
                    <hr style="width: 500px; margin: auto;">
                    <!-- <div class="break"></div> -->
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>