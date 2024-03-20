<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h1><center>KALKULATOR SEDERHANA</h1>
        <center>


    <form action="{{ route('hitung.store') }}"method="post">
        @csrf
        Angka Pertama : <input type="number" name="angka1" id=""><br>
        Angka Kedua   : <input type="number" name="angka2" id=""><br>
                        <input type="submit" name="op" value="+">  
                        <input type="submit"  name="op" value="-"> 
                        <input type="submit"  name="op" value="x">
                        <input type="submit"  name="op" value="/">  
                        <input type="submit"  name="op" value="Reset">
                   
                        
    </form>

    

    </center>

    <h1><center>Hasil : {{$hasil}} </center></h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>