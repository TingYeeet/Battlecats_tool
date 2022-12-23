var party_table_tr = $(".party_table_tr");
var party_cats_img, had_cats = $(".had_cats");
var cats_party_list = $("#cats_party_input").val(), had_cats_list = [];
cats_party_list = JSON.parse(cats_party_list);
var cats_party_index = parseInt($("#cats_party_index").val());

for (let i = 0; i < had_cats.length; i++) {
    had_cats_list.push(had_cats[i].src.split("/").pop().split(".")[0]);
    $(had_cats[i]).click(function () {
        put_in_party(had_cats_list[i]);
    });
}

refresh();

function put_out_party(img_src, index) {
    if (img_src == "uni_blank")
        return;

    for (let i = 0; i < 10; i++) {
        $(party_cats_img[i]).unbind();
    }

    for (let i = index; i < 9; i++) {
        party_cats_img[i].src = party_cats_img[i + 1].src;
    }

    party_cats_img[9].src = "../cats_squre/uni_blank.png";
    $(had_cats[had_cats_list.indexOf(img_src)]).show();
    cats_party_list[cats_party_index].splice(cats_party_list[cats_party_index].indexOf(img_src), 1);

    refresh();
}

function put_in_party(img_src) {
    if (cats_party_list[cats_party_index].length < 10) {
        for (let i = 0; i < 10; i++) {
            $(party_cats_img[i]).unbind();
        }

        $(had_cats[had_cats_list.indexOf(img_src)]).hide();
        party_cats_img[cats_party_list[cats_party_index].length].src = "../cats_squre/" + img_src + ".png";
        cats_party_list[cats_party_index].push(img_src);
        refresh();
    }
}

function refresh() {
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
}
