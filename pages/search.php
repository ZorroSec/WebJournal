<?php
    include_once('config.php');
    if(isset($_POST['submit'])){
        $nome = $_POST["name"];
        $search_name = mysqli_query($conn, "SELECT * FROM posts WHERE nome = '$nome'");
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v6.4.2/css/all.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>WebJournal | Search User</title>
    <style>
        body{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        div.conteiner-search form{
            margin: auto;
            margin-top: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 75%;
            margin-bottom: 1em;
        }
        div.conteiner-search form div.search input[type=text]{
            padding: 10px 50px;
            border-radius: 20px;
            margin-right: 10px;
            border: 1px solid rgba(0,0,0,0.3);
            box-shadow: 0 0 2.2em rgba(0,0,0,.3);
            width: 100%;
            outline: none;
        }
        div.conteiner-search form div.btn input[type=submit]{
            background-color: #23abff;
            padding: 10px 15px;
            color: white;
            border-radius: 20px;
            border: none;
            margin-left: 10px;
            outline: none;
        }
        div.conteiner-read-search-post div.search-post{
            background-color: #fff;
            margin-top: 20px;
            width: 75%;
            padding: 1em;
            margin: auto;
            box-shadow: 1px 0 3px rgba(0,0,0,0.3);
            margin-bottom: 20px;
            border-bottom-right-radius: 15px;
        }
        div.conteiner-read-search-post div.search-post div.userName{
            display: flex;
            margin-bottom: 5px;
        }
        div.conteiner-read-search-post div.search-post div.userName div#userImg{
            height: 30px;
            width: 30px;
            background: #23abff;
            margin-right: 3px;
            border-radius: 50px;
        }
        div.conteiner-read-search-post div.search-post div.post{
            text-align: center;
        }
        div.conteiner-read-search-post div.posts div.search-post div.userName{
            align-items: center;
            justify-content: center;
        }
        div.conteiner-read-search-post div.search-post div.imgPost{
            text-align: center;
        }
        div.conteiner-read-search-post div.search-post div.imgPost img{
            height: 50%;
            width: 50%;
        }
    </style>
</head>
<body>
    <header class="header" style="justify-content: space-between;">
        <div class="logo">
            <h2>
                <a href="../index.php" style="text-decoration: none; color: #23abff;">WebJournal</a>
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
    <div class="conteiner-search">
        <form action="search.php" method="POST">

            <div class="search">
                <input type="text" name="name" id="name" placeholder="search">
            </div>
            <div class="btn">
                <input type="submit" name="submit" value="Search">
            </div>
        </form>
    </div>

    <div class="conteiner-read-search-post">
        <?php while($search_post = mysqli_fetch_assoc($GLOBALS["search_name"])) { ?>
            <div class="search-post">
                <div class="userName">
                    <div id="userImg"></div>
                    <p><?php echo $search_post['nome'] ?></p>
                </div>
                <div class="imgPost">
                    <img id="imgPost" src="<?php echo $search_post['path'] ?>">
                </div>
                <div class="subtitlePost">
                    <p><?php echo $search_post['post'] ?></p>
                </div>
                    <!-- <div class="break"></div> -->
            </div>
        <?php } ?>
    </div>
</body>
</html>