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
            
            $post_none = $_POST["none_cats_input"];
            $post_had = $_POST["had_cats_input"];
            $none_cats = json_decode($post_none);
            $had_cats = json_decode($post_had);
            $sql = "UPDATE `user` SET `未擁有貓`='$post_none',`擁有貓`='$post_had' WHERE `名字`='user1'";
            $result = mysqli_query($link, $sql);

            $sql = "SELECT * FROM `user` WHERE `名字`='user1'";
            $result = mysqli_query($link, $sql);
            $data = mysqli_fetch_assoc($result);
            $cats_party = json_decode($data["貓編組"]);
            $party_index = (int)$_POST["cats_party_index"];
        }
        else{
            echo "不正確連接資料庫</br>" . mysqli_connect_error();
        }
    ?>

    <div class="main_content">
        <table id="party_table">
            <tbody>
                <tr class="party_table_tr">
                    <?php
                    for($i=0;$i<5;$i++){
                        if(count($cats_party[$party_index]) <= $i){
                            print("<td><img src=\"../cats_squre/uni_blank.png\" id=\"cat".$i."\" class=\"party_cats\"></td>");
                        }else{
                            print("<td><img src=\"../cats_squre/".$cats_party[$party_index][$i].".png\" id=\"cat".$i."\" class=\"party_cats\"></td>");
                        }
                    }
                    ?>
                </tr>
                <tr class="party_table_tr">
                    <?php
                    for($i=5;$i<10;$i++){
                        if(count($cats_party[$party_index]) < $i){
                            print("<td><img src=\"../cats_squre/uni_blank.png\" id=\"cat".$i."\" class=\"party_cats\"></td>");
                        }else{
                            print("<td><img src=\"../cats_squre/".$cats_party[$party_index][$i].".png\" id=\"cat".$i."\" class=\"party_cats\"></td>");
                        }
                    }
                    ?>
                </tr>
            </tbody>
        </table>
        <form method="post" action="party making.php">
            <input type="hidden" id="none_cats_input" value=<?php echo $post_none ?> name="none_cats_input">
            <input type="hidden" id="had_cats_input" value=<?php echo $post_had ?> name="had_cats_input">
            <input type="hidden" id="cats_party_input" value=<?php echo $data["貓編組"] ?> name="cats_party_input">
            <input type="hidden" id="cats_party_index" value=<?php echo $party_index ?> name="cats_party_index">
            <input type="submit" id="submit" value="儲存">
        </form>
        <table id="had_cats_table">
            <tbody>
                <tr>
                    <td>
                        <?php
                        for($i=0;$i<count($had_cats);$i++){
                            if(count($had_cats[$i])!=0){
                                if($cats_party)
                                print("<img src=\"../cats_squre/".$had_cats[$i][count($had_cats[$i])-1].".png\" class=\"had_cats\">");
                            }
                        }
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="./party.js"></script>
    <footer class="main_footer">
        <p><a href="#logo">回到頁首↑</a></p>
    </footer>

    <br>
</body>

</html>