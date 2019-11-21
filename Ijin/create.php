
<?php
$Nis = $_POST['Nis'];
$nama = $_POST['nama'];
$gambar = $_FILES['gambar']['name'];
$gambar2 = $_FILES['gambar2']['name'];
$mysqli->query("INSERT INTO siswa(Nis,nama,gambar,gambar2) VALUES('$Nis','$nama','$gambar','$gambar2')");
move_uploaded_file($_FILES['gambar']['tmp_name'],'images/'.$gambar);
move_uploaded_file($_FILES['gambar2']['tmp_name'],'images/'.$gambar2);
header('location:index.php');
    //Cek Ektensi
    //$ekstensiGambarvalid = ['jpg','jpeg','png'];
    //$ekstensiGambar = explode('.',$namafile);
    //$ekstensiGambar = strtolower(end($ekstensiGambar));
    //if(!in_array($ekstensiGambar, $ekstensiGambarvalid) ) {
    //    echo" <script>
      //      alert('salah')
        
        //</script>"
        //return false;



    //}




?>