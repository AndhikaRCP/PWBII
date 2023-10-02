<?php 
//Handling POST DATA
if(isset($_POST['bilangan1']) && isset($_POST['bilangan2'])) {
    $bil1 = $_POST['bilangan1'];
    $bil2 = $_POST['bilangan2'];
    echo "Hasil Perkalian : ".$bil1." x " . $bil2 ." = " .($bil1 * $bil2);
}

//Handling GET DATA
if(isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    echo "Hasil Pencarian dengan kata kunci : " .$keyword;
}
?>
<!-- Pengertian
    POST : method post harus di eksekui menggunakan form, dan data yang di kirimkan tidak bisa terlihat oleh  url
            method post cenderung lebih aman jika digunakan untuk data yang bersifat penting
    GET : method get tidak harus di eksekusi menggunaka form, yakni dengan cara mengubah value dari queri yang di kirimkan oleh url
            selain itu data yang di kirimkan akan terlihat di url
        method get lebih digunakan untuk searching data, sehingga lebih mudah di index oleh mesin pencarian 

-->