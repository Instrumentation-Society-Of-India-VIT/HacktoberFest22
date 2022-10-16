// Challenge1: Your age in days
function ageInDays(){

    var birthyear= prompt("What year are u born?")
    var Days = (2022-birthyear)*365;
    console.log(Days);
    /*Now the age is printed in the console 
    but this age has to be printed on page 
    how do u do that
    ?? -> dom 
    */
   var h1 = document.createElement('h1'); 
   var display = document.createTextNode('You are'+Days +' days old');
   h1.setAttribute('id','ageInDays');
   h1.appendChild(display);
   document.getElementById('flex-box-result').appendChild(h1);
   
}

function reset(){
    
}

function generateCat(){
    var image = document.createElement('img');
    var div = document.getElementById('flex-cat-gen');
    image.src="https://cdn2.thecatapi.com/images/de8.gif";
    div.appendChild(image);
}




