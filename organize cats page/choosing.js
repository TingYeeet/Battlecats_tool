var none_temp = document.getElementsByClassName("none_cats_img")
var had_temp = document.getElementsByClassName("had_cats_img");
var none_list = [], had_list = [];
var cats_temp = [];

for (let i = 0; i < none_temp.length; i++) {
    let img_src = none_temp[i].src.split("/").pop().split(".")[0];
    if (none_temp[i].style.display != "none")
        cats_temp.push(img_src);
    if (i % 3 == 2) {
        none_list.push(cats_temp);
        cats_temp = [];
    }

    if (img_src.includes('f')) {
        none_temp[i].addEventListener("click", function () {
            f_none_click(img_src.split("_")[0], parseInt(i / 3));
        });
    } else if (img_src.includes('c')) {
        none_temp[i].addEventListener("click", function () {
            c_none_click(img_src.split("_")[0], parseInt(i / 3));
        });
    } else if (img_src.includes('s')) {
        none_temp[i].addEventListener("click", function () {
            s_none_click(img_src.split("_")[0], parseInt(i / 3));
        });
    }
}

cats_temp = [];

for (let i = 0; i < had_temp.length; i++) {
    let img_src = had_temp[i].src.split("/").pop().split(".")[0];
    if (had_temp[i].style.display != "none")
        cats_temp.push(img_src);
    if (i % 3 == 2) {
        had_list.push(cats_temp);
        cats_temp = [];
    }

    if (img_src.includes('f')) {
        had_temp[i].addEventListener("click", function () {
            f_had_click(img_src.split("_")[0], parseInt(i / 3));
        });
    } else if (img_src.includes('c')) {
        had_temp[i].addEventListener("click", function () {
            c_had_click(img_src.split("_")[0], parseInt(i / 3));
        });
    } else if (img_src.includes('s')) {
        had_temp[i].addEventListener("click", function () {
            s_had_click(img_src.split("_")[0], parseInt(i / 3));
        });
    }
}

upgrade_hidden_input();
//--------------------------------------------------------------------------
function f_none_click(uni, index) {
    document.getElementById(uni + "_f00_none_img").style = "display:none";
    document.getElementById(uni + "_f00_had_img").style = "";
    had_list[index].push(none_list[index].shift());
    upgrade_hidden_input();
}

function c_none_click(uni, index) {
    document.getElementById(uni + "_c00_none_img").style = "display:none";
    document.getElementById(uni + "_c00_had_img").style = "";
    f_none_click(uni, index);
    if (none_list[index].length > 1)
        had_list[index].push(none_list[index].shift());
    upgrade_hidden_input();
}

function s_none_click(uni, index) {
    document.getElementById(uni + "_s00_none_img").style = "display:none";
    document.getElementById(uni + "_s00_had_img").style = "";
    c_none_click(uni, index);
    if (none_list[index].length > 0)
        had_list[index].push(none_list[index].shift());
    upgrade_hidden_input();
}
//--------------------------------------------------------------------------
function f_had_click(uni, index) {
    document.getElementById(uni + "_f00_none_img").style = "";
    document.getElementById(uni + "_f00_had_img").style = "display:none";
    c_had_click(uni, index);
    if (had_list[index].length > 0)
        none_list[index].unshift(had_list[index].pop());
    upgrade_hidden_input();
}

function c_had_click(uni, index) {
    document.getElementById(uni + "_c00_none_img").style = "";
    document.getElementById(uni + "_c00_had_img").style = "display:none";
    s_had_click(uni, index);
    if (had_list[index].length > 1)
        none_list[index].unshift(had_list[index].pop());
    upgrade_hidden_input();
}

function s_had_click(uni, index) {
    document.getElementById(uni + "_s00_none_img").style = "";
    document.getElementById(uni + "_s00_had_img").style = "display:none";
    none_list[index].unshift(had_list[index].pop());
    upgrade_hidden_input();
}
//--------------------------------------------------------------------------
function upgrade_hidden_input() {
    $("#none_cats_input").val(JSON.stringify(none_list));
    $("#had_cats_input").val(JSON.stringify(had_list));
}