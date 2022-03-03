<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Nama Nama </td>
            <td>: Marcellinus Calvin Gunawan</td>
        </tr>
        <tr>
            <td>ID Sels </td>
            <td>: 220286</td>
        </tr>
    </table>
    <br>
    <?php
        // $a = 1;
        // $b = 10;

        // echo $a + $b;

        // $array = array("Satu", "Dua", "Tiga");
        // $array2 = array(1, 2, 3);
        // echo $array[1]."<br>".$array2[1];

    echo "Soal 1";
    echo "<br>";
        $input = 80;

        if ($input>=80 && $input<=100) {
            echo "Nilai anda A";
        } else if($input>=60 && $input<=79){
            echo "Nilai anda B";
        } else if($input>0 && $input<=59){
            echo "Nilai anda C";
        } else{
            echo "Nilai anda belum masuk";
        }
        
        echo "<br>";
        echo "<br>";

    echo "Soal 2";
    echo "<br>";
        $mesin = "Bagus";
        $body = "Bagus";

        if ($mesin=="Bagus" && $body=="Bagus") {
            echo "Bagus";
        } else if($mesin=="Bagus" || $body=="Bagus"){
            echo "Menengah";
        } else if($mesin=="Jelek" && $body=="Jelek"){
            echo "Jelek";
        }
        
    ?>
</body>
</html>