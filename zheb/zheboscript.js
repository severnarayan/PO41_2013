function getmessage() {  // просто вывод лол в виде алерта в js
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
alert (a.innerHTML );  // тип выводит внутри хтмл))))000
}
//смена цвета текста
function colorchange() { //не уверен, насчет необходимости здесь ретурна
document.getElementById('idtext').style.color="blue";
}
//смена текста с заданным тегом
function textchange() { 
document.getElementById("idtext").innerHTML="ALLAHU AKBARU";
}

