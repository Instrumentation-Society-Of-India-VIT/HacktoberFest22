function myfunction(){
    var color,font,size;
    color=document.getElementById("color").value;
    font=document.getElementById("font").value;
    size=document.getElementById("size").value;
    document.body.style.backgroundColor=color;
    document.body.style.fontFamily=font;
    document.body.style.fontSize=size;
}