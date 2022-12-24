<html>

<head>
    <meta charset="UTF-8">
    <title> Choose Had Cats</title>
    <link rel="stylesheet" href="../General Style.css">
    <link rel="stylesheet" href="./table css.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
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

            $sql = "SELECT * FROM `user` WHERE `名字`='battlecats'";
            $result = mysqli_query($link, $sql);
            $data = mysqli_fetch_assoc($result);
            $all_cats = json_decode($data["擁有貓"]);
            
            $sql = "SELECT * FROM `user` WHERE `名字`='user1'";
            $result = mysqli_query($link, $sql);
            $data = mysqli_fetch_assoc($result);
            $none_cats = json_decode($data["未擁有貓"]);
            $had_cats = json_decode($data["擁有貓"]);
        }
        else{
            echo "不正確連接資料庫</br>" . mysqli_connect_error();
        }
    ?>
    <div class="main_content">
        <br><br><br>
        <form method="post" action="party making.php">
            <input type="hidden" id="none_cats_input" value="" name="none_cats_input">
            <input type="hidden" id="had_cats_input" value="" name="had_cats_input">
            <input type="text" id="cats_party_input" value=<?php echo $data["貓編組"] ?> name="cats_party_input">
            <input type="hidden" id="cats_party_index" value="0" name="cats_party_index">
            <input type="submit" id="submit" value="確認">
        </form>
        <table id="main_table">
            <thead>
                <tr>
                    <th style='color:white;'>未擁有</th>
                    <th style='color:white;'>已擁有</th>
                </tr>
            </thead>
            <tbody>    
                <?php
                for($i = 0;$i<count($all_cats);$i++){
                    print("<tr>");
                    print("<td>");
                    for($j = 0;$j<count($all_cats[$i]);$j++){
                        if(in_array($all_cats[$i][$j],$none_cats[$i])){
                            print("<img src=\"../cats_squre/".$all_cats[$i][$j].".png\" style=\"\" id=\"".$all_cats[$i][$j]."_none_img\" class=\"none_cats_img\">");
                        }else{
                            print("<img src=\"../cats_squre/".$all_cats[$i][$j].".png\" style=\"display:none;\" id=\"".$all_cats[$i][$j]."_none_img\" class=\"none_cats_img\">");
                        }
                    }
                    print("</td><td>");
                    for($j = 0;$j<count($all_cats[$i]);$j++){
                        if(in_array($all_cats[$i][$j],$had_cats[$i])){
                            print("<img src=\"../cats_squre/".$all_cats[$i][$j].".png\" style=\"\" id=\"".$all_cats[$i][$j]."_had_img\" class=\"had_cats_img\">");
                        }else{
                            print("<img src=\"../cats_squre/".$all_cats[$i][$j].".png\" style=\"display:none;\" id=\"".$all_cats[$i][$j]."_had_img\" class=\"had_cats_img\">");
                        }
                    }
                    print("</td>");
                    print("</tr>");
                }
                ?>
            </tbody>
        </table>
    </div>

    <footer class="main_footer">
        <p><a href="#logo">回到頁首↑</a></p>
    </footer>

    <br>
</body>
<script src="./choosing.js"></script>
</html>