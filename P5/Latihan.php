<?php 
   //url itu tidak case sensitif.yang artinya jika mengetik url,tidak akan mengubah alamat url meski huruf besar atau kecil
   //Session storage expired ketika browser ditutup 
   // local storage tidak bisa expired
   //cookie itu akan selalu mengikuti ketika membuka website lainnya
   //ketika membuka website lainnya, cookie selbelumnya akan di kirim ke website yang akan kita bbuka selanjutnya
 /**
  * 
  Method untuk pengelolaan data di php ada 2 yaitu POST dan GET
  method di taruh di sebagai value dari atribut method di tag form 
  selain itu untuk pengelolaan data, meski menyantukan action( page target untuk method nya )
  */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman 1 </title>
</head>

<body>
    <form method="POST" action="globalVariabel.php">
        <input type="text" name="name" id="name">
        <button type="submit">Kirim</button>
    </form>
</body>

</html>

<?php 
    if(isset($_POST['name'])) {
          $username = $_POST['name'];
    echo $username;
    }
  
?>