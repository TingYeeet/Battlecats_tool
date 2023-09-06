//var party_table_tr = $(".party_table_tr");
var party_cats_img, had_cats = $(".had_cats");
var cats_party_list = JSON.parse($("#cats_party_input").val()), had_cats_list = [];
var cats_party_index = 0;

for (let i = 0; i < had_cats.length; i++) {
    had_cats_list.push(had_cats[i].src.split("/").pop().split(".")[0]);
    $(had_cats[i]).click(function () {
        put_in_party(had_cats_list[i]);
    });
}

for (let i = 0; i < cats_party_list.length; i++) {
    let len = cats_party_list[i].length;
    for (let j = 0; j < len; j++) {
        if (!had_cats_list.includes(cats_party_list[i][j])) {
            cats_party_list[i].splice(j--, 1);
            len = cats_party_list[i].length;
        }
    }
}

refresh_party_had();
refresh_click();

function put_out_party(img_src, index) {
    if (img_src == "uni_blank")
        return;

    for (let i = 0; i < 10; i++) {
        $(party_cats_img[i]).unbind();
    }

    cats_party_list[cats_party_index].splice(cats_party_list[cats_party_index].indexOf(img_src), 1);

    refresh_party_had();
    refresh_click();
}

function put_in_party(img_src) {
    if (cats_party_list[cats_party_index].length >= 10)
        return;

    for (let i = 0; i < 10; i++) {
        $(party_cats_img[i]).unbind();
    }

    cats_party_list[cats_party_index].push(img_src);

    refresh_party_had();
    refresh_click();
}

function refresh_click() {
    /*party_table_tr[0].innerHTML = "";
    for (let i = 0; i < 5; i++) {
        if (cats_party_list[cats_party_index].length <= i) {
            party_table_tr[0].innerHTML += ("<td><img src=\"../cats_squre/uni_blank.png\" id=\"cat" + i + "\" class=\"party_cats\"></td>");
        } else {
            party_table_tr[0].innerHTML += ("<td><img src=\"../cats_squre/" + cats_party_list[cats_party_index][i] + ".png\" id=\"cat" + i + "\" class=\"party_cats\"></td>");
        }
    }
    party_table_tr[1].innerHTML = "";
    for (let i = 5; i < 10; i++) {
        if (cats_party_list[cats_party_index].length <= i) {
            party_table_tr[1].innerHTML += ("<td><img src=\"../cats_squre/uni_blank.png\" id=\"cat" + i + "\" class=\"party_cats\"></td>");
        } else {
            party_table_tr[1].innerHTML += ("<td><img src=\"../cats_squre/" + cats_party_list[cats_party_index][i] + ".png\" id=\"cat" + i + "\" class=\"party_cats\"></td>");
        }
    }*/

    //party_cats_img = document.getElementsByClassName("party_cats");
    party_cats_img = $(".party_cats");
    for (let i = 0; i < 10; i++) {
        $(party_cats_img[i]).click(function () {
            put_out_party(party_cats_img[i].src.split("/").pop().split(".")[0], i);
        });
    }

    $("#cats_party_input").val(JSON.stringify(cats_party_list));
}

function refresh_party_had() {
    $("#now_party").html("隊伍" + (cats_party_index + 1) + "/" + cats_party_list.length);
    for (let i = 0; i < 10; i++) {
        if (i < cats_party_list[cats_party_index].length)
            document.getElementById("cat" + i).src = "../cats_squre/" + cats_party_list[cats_party_index][i] + ".png";
        else
            document.getElementById("cat" + i).src = "../cats_squre/uni_blank.png";
    }
    for (let i = 0; i < had_cats_list.length; i++) {
        if (cats_party_list[cats_party_index].includes(had_cats_list[i])) {
            $(had_cats[i]).hide();
        } else {
            $(had_cats[i]).show();
        }
    }

    if (cats_party_list[cats_party_index].includes("uni000_f00")
            && cats_party_list[cats_party_index].includes("uni001_f00")
            && cats_party_list[cats_party_index].includes("uni002_f00")
            && cats_party_list[cats_party_index].includes("uni003_f00")
            && cats_party_list[cats_party_index].includes("uni004_f00")
        ) {
        $(".effect_1").show();
    } else {
        $(".effect_1").hide();
    }

    if (cats_party_list[cats_party_index].includes("uni000_s00")
            && cats_party_list[cats_party_index].includes("uni098_c00")
        ) {
        $(".effect_2").show();
    } else {
        $(".effect_2").hide();
    }

    if (cats_party_list[cats_party_index].includes("uni003_c00")
            && cats_party_list[cats_party_index].includes("uni094_c00")
        ) {
        $(".effect_3").show();
    } else {
        $(".effect_3").hide();
    }

    if (cats_party_list[cats_party_index].includes("uni004_f00")
            && cats_party_list[cats_party_index].includes("uni095_f00")
            && cats_party_list[cats_party_index].includes("uni148_f00")
        ) {
        $(".effect_4").show();
    } else {
        $(".effect_4").hide();
    }

    if (cats_party_list[cats_party_index].includes("uni005_c00")
            && cats_party_list[cats_party_index].includes("uni096_c00")
        ) {
        $(".effect_5").show();
    } else {
        $(".effect_5").hide();
    }

    if (cats_party_list[cats_party_index].includes("uni060_f00")
            && cats_party_list[cats_party_index].includes("uni088_f00")
            && cats_party_list[cats_party_index].includes("uni078_f00")
            && cats_party_list[cats_party_index].includes("uni126_f00")
            && cats_party_list[cats_party_index].includes("uni154_f00")
        ) {
        $(".effect_6").show();
    } else {
        $(".effect_6").hide();
    }

    if (cats_party_list[cats_party_index].includes("uni088_f00")
            && cats_party_list[cats_party_index].includes("uni154_f00")
        ) {
        $(".effect_7").show();
    } else {
        $(".effect_7").hide();
    }

    if (cats_party_list[cats_party_index].includes("uni091_f00")
            && cats_party_list[cats_party_index].includes("uni092_f00")
            && cats_party_list[cats_party_index].includes("uni093_f00")
            && cats_party_list[cats_party_index].includes("uni094_f00")
            && cats_party_list[cats_party_index].includes("uni095_f00")
        ) {
        $(".effect_8").show();
    } else {
        $(".effect_8").hide();
    }

    if (cats_party_list[cats_party_index].includes("uni284_f00")
            && cats_party_list[cats_party_index].includes("uni149_s00")
        ) {
        $(".effect_9").show();
    } else {
        $(".effect_9").hide();
    }

    if (cats_party_list[cats_party_index].includes("uni148_f00")
            && cats_party_list[cats_party_index].includes("uni060_f00")
        ) {
        $(".effect_10").show();
    } else {
        $(".effect_10").hide();
    }
}

function press_right() {
    cats_party_index++;
    if (cats_party_index == cats_party_list.length)
        cats_party_index -= cats_party_list.length;

    $("#cats_party_index").val(cats_party_index);
    refresh_party_had();
    //$("#database_form").submit();
}

function press_left() {
    cats_party_index--;
    if (cats_party_index == -1)
        cats_party_index += cats_party_list.length;

    $("#cats_party_index").val(cats_party_index);
    refresh_party_had();
    //$("#database_form").submit();
}

$("#new_party").click(function () {
    cats_party_list.push([]);
    cats_party_index = cats_party_list.length - 1;

    $("#cats_party_input").val(JSON.stringify(cats_party_list));
    refresh_party_had();
    //$("#database_form").submit();
});

$("#delete_party").click(function () {
    cats_party_list.splice(cats_party_index, 1);
    if (cats_party_list.length == 0) {
        cats_party_list.push([]);
    }
    if (cats_party_index == cats_party_list.length) {
        cats_party_index--;
    }

    $("#cats_party_input").val(JSON.stringify(cats_party_list));
    refresh_party_had();
});

$("#submit").click(function () {
    var cats_party_input = $("#cats_party_input").val();

    $.post("write party in db.php", { cats_party_input: cats_party_input });
    window.alert("儲存成功");
});
