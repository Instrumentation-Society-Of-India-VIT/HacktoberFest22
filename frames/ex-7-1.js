function add(){
    var a,b;
    a= parseInt(document.getElementById('num1').value);
    b= parseInt(document.getElementById('num2').value);
    const res=a+b;
    document.getElementById('alert').innerHTML = 'The result is: ' + res;
}
function subtract(){
    var a,b;
    a= parseInt(document.getElementById('num1').value);
    b= parseInt(document.getElementById('num2').value);
    const res=a-b;
    document.getElementById('alert').innerHTML = 'The result is: ' + res;
}
function multiply(){
    var a,b;
    a= parseInt(document.getElementById('num1').value);
    b= parseInt(document.getElementById('num2').value);
    const res=a*b;
    document.getElementById('alert').innerHTML = 'The result is: ' + res;
}
function divide(){
    var a,b;
    a= parseInt(document.getElementById('num1').value);
    b= parseInt(document.getElementById('num2').value);
    const res=a/b;
    document.getElementById('alert').innerHTML = 'The result is: ' + res;
}
function mod(){
    var a,b;
    a= parseInt(document.getElementById('num1').value);
    b= parseInt(document.getElementById('num2').value);
    const res=a%b;
    document.getElementById('alert').innerHTML = 'The result is: ' + res;
}
function square(){
    var a;
    a= parseInt(document.getElementById('num1').value);
    const res=a*a;
    document.getElementById('alert').innerHTML = 'The result is: ' + res;
}
function factorial(){
    var a;
    a= parseInt(document.getElementById('num1').value);
    var fact=1;
    if(a!=0){
        for(i=1;i<=a;i++){
            fact*=i;
        }
    }
    res=fact;   
    document.getElementById('alert').innerHTML = 'The factorial is: ' + res;
}
function circle1(){
    var r;
    r= parseInt(document.getElementById('circle').value);
    const circumference=2*3.14*r;
    const area=3.14*r*r;
    document.getElementById('shape').innerHTML = 'The circumference is: ' + circumference.toString()+' and the area is :'+ area.toString();
}
function square1(){
    var side;
    side= parseInt(document.getElementById('side').value);
    const circumference=4*side;
    const area=side*side;
    document.getElementById('shape').innerHTML = 'The circumference is: ' + circumference.toString()+' and the area is :'+ area.toString();
}
function rectangle(){
    var a,b;
    a= parseInt(document.getElementById('Length').value);
    b= parseInt(document.getElementById('Breadth').value);
    const sum=a+b;
    const circumference=2*sum;
    const area=a*b;
    document.getElementById('shape').innerHTML = 'The circumference is: ' + circumference.toString()+' and the area is :'+ area.toString();
}

