<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


session_start();

if(isset($_POST['submit'])){
$host = "localhost";
$username = "root";
$password= "";
$database="library";

try{

    $connection = new PDO("mysql:host=localhost;dbname=library","root",""); //veritabanına bağlan
    $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // hataları istisna olarak al.
    echo "veritabanına bağlandı.";

    $kitap_adi = $_POST['kitap_adi'];
    $kitap_konu = $_POST['kitap_konu'];    //kullanıcıdan gelen verileri aldık.
    $kitap_ozet = $_POST['kitap_ozet'];
    $kitap_yil = $_POST['kitap_yil'];

    //veritabanında kitap var mı,yok mu kontrol et, books tablosunda

    $checkQuery = "SELECT * FROM books WHERE kitap_adi = :kitap_adi";
    $checkStmt = $connection -> prepare($checkQuery);
    $checkStmt -> execute (['kitap_adi' => $kitap_adi]);

    if($checkStmt -> rowCount() > 0){
        echo "Bu kitap zaten mevcut";
    }

    else{
        // kitabı veritabanına ekle

        $insertQuery = "INSERT INTO books (kitap_adi, kitap_konu, kitap_ozet, kitap_yil) VALUES (:kitap_adi, :kitap_konu, :kitap_ozet, :kitap_yil)";
        $insertStmt = $connection ->prepare($insertQuery);
        $result = $insertStmt -> execute([
            'kitap_adi' => $kitap_adi,
            'kitap_konu' => $kitap_konu,
            'kitap_ozet' => $kitap_ozet,
            'kitap_yil' => $kitap_yil,
        ]);

        if ($result) {
            echo "Kitap başarıyla yüklendi.";
        } else {
            echo "Kitap eklenemedi.";
        }
    }





}

catch (PDOException $ex){

    echo "Hata: ". $ex->getMessage(); 

}


}



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Form gönderildi.";
} else {
    echo "Form gönderilmedi.";
}





?>





<html>
    <head>
        <title>Kütüphane Sistemi</title>
    </head>

    <body>
        <form action="kitap.php" method="POST">
            Kitap Adı: <input type="text" name="kitap_adi"><br>
            Kitap Konu: <input type="text" name="kitap_konu"><br>
            Kitap Özet: <textarea name="kitap_ozet"></textarea><br>
            Yayınlandığı Yıl: <input type="text" name="kitap_yil"><br>
            <button type="submit" name="submit">Gönder</button>
        </form>
    </body>
</html>