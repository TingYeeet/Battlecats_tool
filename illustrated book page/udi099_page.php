<html>

<head>
    <meta charset="UTF-8">
    <title>No.100</title>
    <link rel="stylesheet" href="../General Style.css">
    <link rel="stylesheet" href="./table style.css">
</head>

<body>
    <?php
        $host = 'localhost';
        $dbuser ='root';
        $dbpassword = '';
        $dbname = 'test';
        $link = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
        if($link){
            mysqli_query($link,'SET NAMES utf8');
            // echo "正確連接資料庫";

            $sql = "SELECT * FROM `cat_status` WHERE `編號`='udi099_f'";
            $result = mysqli_query($link, $sql);
            $data_f = mysqli_fetch_assoc($result);
            $collab_info_f = json_decode($data_f["聯組"]);
            //echo(count($collab_info));

            $sql = "SELECT * FROM `cat_status` WHERE `編號`='udi099_c'";
            $result = mysqli_query($link, $sql);
            $data_c = mysqli_fetch_assoc($result);
            $collab_info_c = json_decode($data_c["聯組"]);
            //echo($data_c["編號"]. " ");

            $sql = "SELECT * FROM `cat_status` WHERE `編號`='udi099_s'";
            $result = mysqli_query($link, $sql);
            $data_s = mysqli_fetch_assoc($result);
            $collab_info_s = json_decode($data_s["聯組"]);
            //echo($data_s["編號"]. " ");
        }
        else{
            echo "不正確連接資料庫</br>" . mysqli_connect_error();
        }
    ?>

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

    <div class="main_content">
        <br><br>

        <table>
            <tr id="deeper_color">
                <td><?php echo($data_f["編號"]); ?></td>
                <td colspan="7"><?php echo($data_f["名字"]); ?></td>
            </tr>
            <tr>
                <td rowspan="3" id="deeper_color">基本</td>
                <td rowspan="3"><img src="../cats/<?php echo($data_f["編號"]); ?>.png" alt="<?php echo(explode("_",$data_f["編號"])[0]); ?>"></td>
                <td id="deeper_color">HP</td><td><?php echo($data_f["HP"]); ?></td>
                <td id="deeper_color">KB</td><td><?php echo($data_f["KB"]); ?></td>
                <td id="deeper_color">攻擊頻率</td><td><?php echo($data_f["攻擊頻率"]); ?>秒</td>
            </tr>
            <tr>
                <td id="deeper_color">攻擊力</td><td><?php echo($data_f["攻擊力"]); ?></td>
                <td id="deeper_color">跑速</td><td><?php echo($data_f["跑速"]); ?></td>
                <td id="deeper_color">攻擊間隔</td><td><?php echo($data_f["攻擊間隔"]); ?>秒</td>
            </tr>
            <tr>
                <td id="deeper_color">DPS</td><td><?php echo($data_f["DPS"]); ?></td>
                <td id="deeper_color">射程</td><td><?php echo($data_f["射程"]); ?></td>
                <td id="deeper_color">再生產</td><td><?php echo($data_f["再生產"]); ?>秒</td>
            </tr>
            <tr>
                <td id="deeper_color">Max level</td><td><?php echo($data_f["Max level"]); ?></td>
                <td id="deeper_color">範圍</td><td><?php echo($data_f["範圍"]); ?></td>
                <td id="deeper_color">召喚金額</td><td colspan="3"><?php echo($data_f["召喚金額"]); ?></td>
            </tr>
            <tr>
                <td id="deeper_color">特性</td><td colspan="7"><?php echo($data_f["特性"]); ?></td>
            </tr>
            <tr>
                <td id="deeper_color">開放條件</td><td colspan="7"><?php echo($data_f["開放條件"]); ?></td>
            </tr>

            <?php
                if(count($collab_info_f) == 0){
                    print("<td id=\"deeper_color\" rowspan=\"" .(2 * count($collab_info_f)). "\">聯組資訊</td>");
                    print("<td colspan=\"7\">-</td>");
                }
                else{
                    print("<tr><td id=\"deeper_color\" rowspan=\"".(2 * count($collab_info_f))."\">聯組資訊</td>");
                    print("<td id=\"deeper_color\" colspan=\"7\">".($collab_info_f[0]->{'effect'})."</td></tr>");
                    print("<tr><td colspan=\"7\">");
                    $member = $collab_info_f[0]->{'member'};
                    for($i=0;$i<count($member);$i++){
                        print("<img src=\"../cats/".$member[$i].".png\" style=\"width:200px;\" alt=\"".(explode("_", $member[$i]))[0]."\">");
                    }
                    print("</td></tr>");

                    for($i=1;$i<count($collab_info_f);$i++){
                        print("<tr><td id=\"deeper_color\" colspan=\"7\">".$collab_info_f[$i]->{'effect'}."</td></tr>");
                        $member = $collab_info_f[$i]->{'member'};
                        print("<tr><td colspan=\"7\">");
                        for($i=0;$i<count($member);$i++){
                            print("<img src=\"../cats/".$member[$i].".png\" style=\"width:200px;\" alt=\"".(explode("_", $member[$i]))[0]."\">");
                        }
                        print("</td></tr>");
                    }
                }
            ?>
        </table>

        <br><br><br>

        <table>
            <tr id="deeper_color">
                <td><?php echo($data_c["編號"]); ?></td>
                <td colspan="7"><?php echo($data_c["名字"]); ?></td>
            </tr>
            <tr>
                <td rowspan="3" id="deeper_color">基本</td>
                <td rowspan="3"><img src="../cats/<?php echo($data_c["編號"]); ?>.png" alt="<?php echo(explode("_",$data_c["編號"])[0]); ?>"></td>
                <td id="deeper_color">HP</td><td><?php echo($data_c["HP"]); ?></td>
                <td id="deeper_color">KB</td><td><?php echo($data_c["KB"]); ?></td>
                <td id="deeper_color">攻擊頻率</td><td><?php echo($data_c["攻擊頻率"]); ?>秒</td>
            </tr>
            <tr>
                <td id="deeper_color">攻擊力</td><td><?php echo($data_c["攻擊力"]); ?></td>
                <td id="deeper_color">跑速</td><td><?php echo($data_c["跑速"]); ?></td>
                <td id="deeper_color">攻擊間隔</td><td><?php echo($data_c["攻擊間隔"]); ?>秒</td>
            </tr>
            <tr>
                <td id="deeper_color">DPS</td><td><?php echo($data_c["DPS"]); ?></td>
                <td id="deeper_color">射程</td><td><?php echo($data_c["射程"]); ?></td>
                <td id="deeper_color">再生產</td><td><?php echo($data_c["再生產"]); ?>秒</td>
            </tr>
            <tr>
                <td id="deeper_color">Max level</td><td><?php echo($data_c["Max level"]); ?></td>
                <td id="deeper_color">範圍</td><td><?php echo($data_c["範圍"]); ?></td>
                <td id="deeper_color">召喚金額</td><td colspan="3"><?php echo($data_c["召喚金額"]); ?></td>
            </tr>
            <tr>
                <td id="deeper_color">特性</td><td colspan="7"><?php echo($data_c["特性"]); ?></td>
            </tr>
            <tr>
                <td id="deeper_color">開放條件</td><td colspan="7"><?php echo($data_c["開放條件"]); ?></td>
            </tr>

            <?php
                if(count($collab_info_c) == 0){
                    print("<td id=\"deeper_color\" rowspan=\"" .(2 * count($collab_info_c)). "\">聯組資訊</td>");
                    print("<td colspan=\"7\">-</td>");
                }
                else{
                    print("<tr><td id=\"deeper_color\" rowspan=\"".(2 * count($collab_info_c))."\">聯組資訊</td>");
                    print("<td id=\"deeper_color\" colspan=\"7\">".($collab_info_c[0]->{'effect'})."</td></tr>");
                    print("<tr><td colspan=\"7\">");
                    $member = $collab_info_c[0]->{'member'};
                    for($i=0;$i<count($member);$i++){
                        print("<img src=\"../cats/".$member[$i].".png\" style=\"width:200px;\" alt=\"".(explode("_", $member[$i]))[0]."\">");
                    }
                    print("</td></tr>");

                    for($i=1;$i<count($collab_info_c);$i++){
                        print("<tr><td id=\"deeper_color\" colspan=\"7\">".$collab_info_c[$i]->{'effect'}."</td></tr>");
                        $member = $collab_info_c[$i]->{'member'};
                        print("<tr><td colspan=\"7\">");
                        for($i=0;$i<count($member);$i++){
                            print("<img src=\"../cats/".$member[$i].".png\" style=\"width:200px;\" alt=\"".(explode("_", $member[$i]))[0]."\">");
                        }
                        print("</td></tr>");
                    }
                }
            ?>
        </table>

        <br><br><br>

        <table>
            <tr id="deeper_color">
                <td><?php echo($data_s["編號"]); ?></td>
                <td colspan="7"><?php echo($data_s["名字"]); ?></td>
            </tr>
            <tr>
                <td rowspan="3" id="deeper_color">基本</td>
                <td rowspan="3"><img src="../cats/<?php echo($data_s["編號"]); ?>.png" alt="<?php echo(explode("_",$data_s["編號"])[0]); ?>"></td>
                <td id="deeper_color">HP</td><td><?php echo($data_s["HP"]); ?></td>
                <td id="deeper_color">KB</td><td><?php echo($data_s["KB"]); ?></td>
                <td id="deeper_color">攻擊頻率</td><td><?php echo($data_s["攻擊頻率"]); ?>秒</td>
            </tr>
            <tr>
                <td id="deeper_color">攻擊力</td><td><?php echo($data_s["攻擊力"]); ?></td>
                <td id="deeper_color">跑速</td><td><?php echo($data_s["跑速"]); ?></td>
                <td id="deeper_color">攻擊間隔</td><td><?php echo($data_s["攻擊間隔"]); ?>秒</td>
            </tr>
            <tr>
                <td id="deeper_color">DPS</td><td><?php echo($data_s["DPS"]); ?></td>
                <td id="deeper_color">射程</td><td><?php echo($data_s["射程"]); ?></td>
                <td id="deeper_color">再生產</td><td><?php echo($data_s["再生產"]); ?>秒</td>
            </tr>
            <tr>
                <td id="deeper_color">Max level</td><td><?php echo($data_s["Max level"]); ?></td>
                <td id="deeper_color">範圍</td><td><?php echo($data_s["範圍"]); ?></td>
                <td id="deeper_color">召喚金額</td><td colspan="3"><?php echo($data_s["召喚金額"]); ?></td>
            </tr>
            <tr>
                <td id="deeper_color">特性</td><td colspan="7"><?php echo($data_s["特性"]); ?></td>
            </tr>
            <tr>
                <td id="deeper_color">開放條件</td><td colspan="7"><?php echo($data_s["開放條件"]); ?></td>
            </tr>

            <?php
                if(count($collab_info_s) == 0){
                    print("<td id=\"deeper_color\" rowspan=\"" .(2 * count($collab_info_s)). "\">聯組資訊</td>");
                    print("<td colspan=\"7\">-</td>");
                }
                else{
                    print("<tr><td id=\"deeper_color\" rowspan=\"".(2 * count($collab_info_s))."\">聯組資訊</td>");
                    print("<td id=\"deeper_color\" colspan=\"7\">".($collab_info_s[0]->{'effect'})."</td></tr>");
                    print("<tr><td colspan=\"7\">");
                    $member = $collab_info_s[0]->{'member'};
                    for($i=0;$i<count($member);$i++){
                        print("<img src=\"../cats/".$member[$i].".png\" style=\"width:200px;\" alt=\"".(explode("_", $member[$i]))[0]."\">");
                    }
                    print("</td></tr>");

                    for($i=1;$i<count($collab_info_s);$i++){
                        print("<tr><td id=\"deeper_color\" colspan=\"7\">".$collab_info_s[$i]->{'effect'}."</td></tr>");
                        $member = $collab_info_s[$i]->{'member'};
                        print("<tr><td colspan=\"7\">");
                        for($i=0;$i<count($member);$i++){
                            print("<img src=\"../cats/".$member[$i].".png\" style=\"width:200px;\" alt=\"".(explode("_", $member[$i]))[0]."\">");
                        }
                        print("</td></tr>");
                    }
                }
            ?>
        </table>

        <br><br><br>
    </div>

    <footer class="main_footer">
        <p><a href="#logo">回到頁首↑</a></p>
    </footer>

    <br>
</body>

<script src="./img insert href.js"></script>

</html>