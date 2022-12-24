<html>

<head>
    <meta charset="UTF-8">
    <title>Party Making</title>
    <link rel="stylesheet" href="../General Style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./table css.css">
</head>

<body>
    <br>

    <a href="../home page.html" class="logo" id="logo">
        <img src="../another image/logo.png" alt="logo.png">
    </a>

    <br><br>

    <div class="main_navbar">
        <div class="dropdown">
            <a href="../illustrated main page.html"><button class="dropbtn">圖鑑</button></a>
        </div>
        <div class="dropdown">
            <a href="../collab page.html"><button class="dropbtn">聯組</button></a>
        </div>
        <div class="dropdown">
            <a href="../organize cats page/choose had.php"><button class="dropbtn">編成紀錄</button></a>
        </div>
    </div>
    <?php
        $host = 'localhost';
        $dbuser ='root';
        $dbpassword = '';
        $dbname = 'test';
        $link = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
        if($link){
            mysqli_query($link,'SET NAMES utf8');

            $cat_party_raw = $_POST["cats_party_input"];
            $none_cats = json_decode($post_none);
            $had_cats = json_decode($post_had);
            $sql = "UPDATE `user` SET `貓編組`='$cat_party_raw' WHERE `名字`='user1'";
            $result = mysqli_query($link, $sql);

        }
        else{
            echo "不正確連接資料庫</br>" . mysqli_connect_error();
        }
    ?>

    <div class="main_content">

    </div>
    <footer class="main_footer">
        <p><a href="#logo">回到頁首↑</a></p>
    </footer>

    <br>
</body>

</html>