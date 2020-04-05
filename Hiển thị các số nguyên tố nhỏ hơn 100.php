<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Hiển thị các số nguyên tố nhỏ hơn 100:</h1>

<?php

    function isPrime($number){
        $x=true;
        if ($number<2){
            $x=false;
        }elseif ($number==2){
            $x=true;
        }elseif ($number%2==0){
            $x=false;
        }else{
            for ($i=3;$i<$number-1;$i++){
                if ($number%$i==0){
                    $x=false;
                    break;
                }
            }
        }
        if ($x==true){
            echo $number."-";
        }
    }
    for ($j=0;$j<100;$j++){
        isPrime($j);
    }
    function checkPrime($n){
    $x = 1;
    for($i=2;$i<=sqrt($n);$i++) {
        if($n%$i==0 && $n>2){
            $x = 0;
        }
    }
    return $x;
    }
    function inSNT($n){

        $N=2;
        $count =0;
        $ketqua = "";
        while($count<$n) {
            if(checkPrime($N)==1) {
                $ketqua .= $N."-";
                $count++;
            }
            $N++;
        }
        return $ketqua;
    }


?>
<form action="Hiển%20thị%20các%20số%20nguyên%20tố%20nhỏ%20hơn%20100.php" method="post">
    <label>Nhập số nguyên tố cần in ra:</label>
    <input type="text" name="number"><br>
    <input type="submit" name="submit" value="Kiểm tra">
    <label>Hiển thị:</label>
    <span><?php
        if(isset($_POST["submit"]))
        {
            $n = $_POST["number"];
            $ketqua = inSNT($n);
            echo $ketqua;
        }


        ?></span>
</form>

</body>
</html>