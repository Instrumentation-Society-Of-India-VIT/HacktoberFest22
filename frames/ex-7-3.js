function calculate(){
    if(confirm("Do you want to continue?")){
        var str,words,totalwords,color,cost;
    str=document.getElementById("content").value;
    words=str.match(/(\w+)/g).length;
    totalwords=5+words;
    color=document.getElementById("color").value;
    if(color=='colored'){
        cost=12*totalwords;
    }
    else{
        cost=8*totalwords;
    }
    document.getElementById("cost").innerHTML='Total cost as per choices and content : '+cost.toString();
    }
    
}