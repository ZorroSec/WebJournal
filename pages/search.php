<?php
    include_once('config.php');
    if(isset($_POST['submit'])){
        $nome = $_POST["name"];
        $search_name = mysqli_query($conn, "SELECT * FROM posts WHERE nome = '$nome'");
        print_r($search_name);
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
        div.conteiner-search{
            margin: auto;
            margin-top: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 75%;
        }
        div.conteiner-search div.search input[type=text]{
            padding: 10px 50px;
            border-radius: 20px;
            margin-right: 10px;
            border: 1px solid rgba(0,0,0,0.3);
            box-shadow: 0 0 2.2em rgba(0,0,0,.3);
            width: 100%;
        }
        div.conteiner-search div.btn input[type=submit]{
            background-color: #23abff;
            padding: 10px 15px;
            color: white;
            border-radius: 20px;
            border: none;
            margin-left: 10px;
            outline: none;
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
        <?php while($search_post = mysqli_fetch_assoc($search_name)) { ?>
            <div class="search-post">
                <div class="userName">
                    <div id="userImg"></div>
                    <p><?php echo $search_post['nome'] ?></p>
                </div>
                <div class="imgPost">
                    <img id="imgPost" src="pages/<?php echo $search_post['path'] ?>">
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