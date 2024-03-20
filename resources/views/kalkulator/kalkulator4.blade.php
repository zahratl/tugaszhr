<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1><a href="{{url('/kalkulator1')}}">KALKULATOR 1</a></h1>
<h1><a href="{{url('/calc1')}}">KALKULATOR 2</a></h1>
<h2>Kalkulator Sederhana</h2>
<form action="" method="post" name="form1">
    <input type="text" name="a" id=""><br><br>
    <input type="button" value="1" onClick="form1.a.value+='1'">
    <input type="button" value="2" onClick="form1.a.value+='2'">
    <input type="button" value="3" onClick="form1.a.value+='3'"><br>
    <input type="button" value="4" onClick="form1.a.value+='4'">
    <input type="button" value="5" onClick="form1.a.value+='5'">
    <input type="button" value="6" onClick="form1.a.value+='6'"><br>
    <input type="button" value="7" onClick="form1.a.value+='7'">
    <input type="button" value="8" onClick="form1.a.value+='8'">
    <input type="button" value="9" onClick="form1.a.value+='9'"><br>
    <input type="button" value="0" onClick="form1.a.value+='0'">
    <input type="button" value="+" onClick="form1.a.value+='+'">
    <input type="button" value="-" onClick="form1.a.value+='-'"><br>
    <input type="button" value="*" onClick="form1.a.value+='*'">
    <input type="button" value="/" onClick="form1.a.value+='/'">
    <input type="button"  value="c" onClick="form1.a.value=''">
    <input type="button" value="=" onClick="form1.a.value=eval(form1.a.value)">

</form>    
    
</body>
</html>