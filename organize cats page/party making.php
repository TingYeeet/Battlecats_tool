<?php session_start(); ?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Party Making</title>
    <link rel="stylesheet" href="../General Style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./table css.css">
    <style type="text/css">
        #collab_table img {
            width: 200px;
        }

        #collab_table{
        margin:auto;
        color:white;
        background-color: #8b2915;
        text-align: center;
        width:100%;

        border-style: none;
        border-collapse: collapse;
        }

        #collab_table td{
            padding:10px;
            border-style:solid;
            border-color: white;
            border-width: 1px;
        }

        #deeper_color{
            background-color: #6d2415;
        }
    </style>
</head>

<body>
    <br>
    <div class="right">
        <?php
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
            print("您好\t".$_SESSION["username"]."/<a href=\"../Login/logout.php\" style=\"color:white; text-decoration:none;\">登出</a>");
        }else{
            print("<a href=\"./Login/index.php\" style=\"color:white; text-decoration:none;\">登入</a>");
        }
        ?>
    </div>
    <a href="../home page.php" class="logo" id="logo">
        <img src="../another image/logo.png" alt="logo.png">
    </a>

    <br><br>

    <div class="main_navbar">
        <div class="dropdown">
            <a href="../illustrated main page.php"><button class="dropbtn">圖鑑</button></a>
        </div>
        <div class="dropdown">
            <a href="../collab page.php"><button class="dropbtn">聯組</button></a>
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
            $sql = "UPDATE `user` SET `未擁有貓`='$post_none',`擁有貓`='$post_had' WHERE `帳號`='".$_SESSION["account"]."'";
            $result = mysqli_query($link, $sql);

            $sql = "SELECT * FROM `user` WHERE `帳號`='".$_SESSION["account"]."'";
            $result = mysqli_query($link, $sql);
            $data = mysqli_fetch_assoc($result);
            $cat_party_raw = $data["貓編組"];
            $cats_party = json_decode($cat_party_raw);
            $party_index = 0;

            

        }
        else{
            echo "不正確連接資料庫</br>" . mysqli_connect_error();
        }
    ?>

    <br><br>
    <div class="main_content">
        <table id="party_table">
            <tbody>
                <tr>
                    <td></td>
                    <td colspan=5 id="now_party"></td>
                </tr>
                <tr class="party_table_tr">
                    <?php
                    print("<td rowspan=\"2\"><button onclick=\"press_left()\"><img src=\"../another image/left.png\" width=\"20px\"></button></td>");
                    for($i=0;$i<5;$i++){
                        if(count($cats_party[$party_index]) <= $i){
                            print("<td><img src=\"../cats_squre/uni_blank.png\" id=\"cat".$i."\" class=\"party_cats\"></td>");
                        }else{
                            print("<td><img src=\"../cats_squre/".$cats_party[$party_index][$i].".png\" id=\"cat".$i."\" class=\"party_cats\"></td>");
                        }
                    }
                    print("<td rowspan=\"2\"><button onclick=\"press_right()\"><img src=\"../another image/right.png\" width=\"20px\"></button></td>");
                    ?>
                </tr>
                <tr class="party_table_tr">
                    <?php
                    for($i=5;$i<10;$i++){
                        if(count($cats_party[$party_index]) <= $i){
                            print("<td><img src=\"../cats_squre/uni_blank.png\" id=\"cat".$i."\" class=\"party_cats\"></td>");
                        }else{
                            print("<td><img src=\"../cats_squre/".$cats_party[$party_index][$i].".png\" id=\"cat".$i."\" class=\"party_cats\"></td>");
                        }
                    }
                    ?>
                </tr>
            </tbody>
        </table>
        <form id="database_form" method="post">
            <input type="hidden" id="cats_party_input" value=<?php echo $cat_party_raw ?> name="cats_party_input">
            <input type="button" id="submit" value="儲存">
            <input type="button" id="new_party" value="新增">
            <input type="button" id="delete_party" value="刪除">
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
        <table id="collab_table">
            <tr>
                <td id="deeper_color">隊伍聯組效果</td>
            </tr>
            <tr class="effect_1">
                <td id="deeper_color">初期錢包等級提升1等</td>
            </tr>
            <tr class="effect_1">
                <td>
                    <img src="../cats/udi000_f.png">
                    <img src="../cats/udi001_f.png">
                    <img src="../cats/udi002_f.png">
                    <img src="../cats/udi003_f.png">
                    <img src="../cats/udi004_f.png">
                </td>
            </tr>
            <tr class="effect_2">
                <td id="deeper_color">擊退距離提升10%</td>
            </tr>
            <tr class="effect_2">
                <td>
                    <img src="../cats/udi000_s.png">
                    <img src="../cats/udi098_c.png">
                </td>
            </tr>
            <tr class="effect_3">
                <td id="deeper_color">擊退距離提升【小】</td>
            </tr>
            <tr class="effect_3">
                <td>
                    <img src="../cats/udi003_c.png">
                    <img src="../cats/udi094_c.png">
                </td>
            </tr>
            <tr class="effect_4">
                <td id="deeper_color">初期所持金提升500円</td>
            </tr>
            <tr class="effect_4">
                <td>
                    <img src="../cats/udi004_f.png">
                    <img src="../cats/udi095_f.png">
                    <img src="../cats/udi148_f.png">
                </td>
            </tr>
            <tr class="effect_5">
                <td id="deeper_color">超大傷害效果提升10%</td>
            </tr>
            <tr class="effect_5">
                <td>
                    <img src="../cats/udi005_c.png">
                    <img src="../cats/udi096_c.png">
                </td>
            </tr>
            <tr class="effect_6">
                <td id="deeper_color">角色血量提升20%</td>
            </tr>
            <tr class="effect_6">
                <td>
                    <img src="../cats/udi060_f.png">
                    <img src="../cats/udi088_f.png">
                    <img src="../cats/udi078_f.png">
                    <img src="../cats/udi126_f.png">
                    <img src="../cats/udi154_f.png">
                </td>
            </tr>
            <tr class="effect_7">
                <td id="deeper_color">錢包上限提升10%</td>
            </tr>
            <tr class="effect_7">
                <td>
                    <img src="../cats/udi088_f.png">
                    <img src="../cats/udi154_f.png">
                </td>
            </tr>
            <tr class="effect_8">
                <td id="deeper_color">初期所持金提升1000円</td>
            </tr>
            <tr class="effect_8">
                <td>
                    <img src="../cats/udi091_f.png">
                    <img src="../cats/udi092_f.png">
                    <img src="../cats/udi093_f.png">
                    <img src="../cats/udi094_f.png">
                    <img src="../cats/udi095_f.png">
                </td>
            </tr>
            <tr class="effect_9">
                <td id="deeper_color">初期貓咪砲充電20%</td>
            </tr>
            <tr class="effect_9">
                <td>
                    <img src="../cats/udi284_f.png">
                    <img src="../cats/udi149_s.png">
                </td>
            </tr>
            <tr class="effect_10">
                <td id="deeper_color">很耐打效果提升10%</td>
            </tr>
            <tr class="effect_10">
                <td>
                    <img src="../cats/udi148_c.png">
                    <img src="../cats/udi060_c.png">
                </td>
            </tr>
        </table>
        <br><br>
    </div>
    <script src="./party.js"></script>
    <footer class="main_footer">
        <p><a href="#logo">回到頁首↑</a></p>
    </footer>

    <br>
</body>

</html>
