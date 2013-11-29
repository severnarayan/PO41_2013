// просто вывод лол в виде алерта в js
function getmessage() {  
alert('lol');
}


/*
вытаскиваем через дом элементы с айдишками 
@
пихаем в переменную 
@
выводим алертом
*/

// запись данных из тега в переменную
function tagtoperem() {      
var a=document.getElementById('divid');
alert (a.innerHTML );
}

//смена цвета текста
function colorchange() {
document.getElementById('idtext').style.color="blue";
}

//смена текста с заданным тегом
function textchange() { 
document.getElementById("idtext").innerHTML="ALLAHU AKBARU";
}

//смена позиции текста, 
function textposition() {
var a=document.getElementById('idtext').innerHTML;;
document.getElementById("idtext").innerHTML=document.getElementById("divid").innerHTML;
document.getElementById("divid").innerHTML=a;
}