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
            margin-top: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 75%;
        }
        div.conteiner-search div.search input[type=search]{
            padding: 20px 10px;
            width: 100%;
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
    <div class="conteiner-search">
        <div class="search">
            <input type="search" name="search" id="search" placeholder="search">
        </div>
        <div class="btn">
            <input type="submit" name="submit" value="Search">
        </div>
    </div>
</body>
</html>