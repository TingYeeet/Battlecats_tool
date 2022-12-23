var img_element = Array.from(document.getElementsByTagName("img"));
//console.log(img_element);
while(img_element.length > 1){
    //console.log(img_element);
    let str = img_element[img_element.length-1].alt;
    //console.log(str);
    let html_or_php = str.slice(-3);
    //console.log(parseInt(html_or_php));

    let parent = img_element[img_element.length-1].parentNode;
    let wrapper = document.createElement('a');
    if(parseInt(html_or_php) <= 78)
        wrapper.href = "udi" +html_or_php+ "_page.html";
    else
        wrapper.href = "udi" +html_or_php+ "_page.php";
    //console.log(wrapper.href);

    parent.replaceChild(wrapper, img_element[img_element.length-1]);
    wrapper.appendChild(img_element[img_element.length-1]);

    img_element.pop();
}

var a = Array.from(document.getElementsByTagName("a"));
//console.log(a[0].href);

a[1].href = "../illustrated main page.html";
a[2].href = "../collab page.html";
a[3].href = "#";