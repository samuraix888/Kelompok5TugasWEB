

    <section class="container">
              <div class="row">
                  <div class="col-sm-7 text-center">
                  <form name="form_mahasiwa" action="" method="post" enctype="multipart/form-data">

<div class="form-group">
  <label for="Nis">NIS</label>
  <input type="text"  maxlength="18" onkeypress="return hanyaAngka(event)" class="form-control" id="Nis" placeholder="Nomor Indux Siswa" name="nis" required>
  <script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
	</script>


</div>

<div class="form-group">
  <label for="Nama">Nama</label>
  <input type="text "  maxlength="25"  onkeypress="return huruf(event)" class="form-control" id="nama" placeholder="Nama" name="nama" required  >
  <script>
  function huruf(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
        if ((charCode < 65 || charCode > 90)&&(charCode < 97 || charCode > 122)&&charCode>32)
            return false;
        return true;
}
</script>


</div>


<div class="form-group">
  <label  for="Gambar">Foto Surat Ijin</label>
  <div class="row">
  <div class="col-sm-7 text-center">
    <input  type="file" accept="image/*" class="form-control" id="gambar" name="gambar" required >
</div>
</div>
</div>

<div class="form-group">
  <label for="Gambar">Foto Surat Ijin Bersama Orang tua</label>
  <div class="row">
  <div class="col-sm-7 text-center">
  <input type="file" accept="image/*" class="form-control" id="gambar2" name="gambar2" required>
  <div>
</div>
</div>

<br/><br/>


</div>

<div class="form-group row">
				<label class="col-sm-2 col-form-label">&nbsp;</label>
				<div class="col-sm-10 texr-center">
        <button type="reset" class="btn btn-danger">Reset</button>
  <button type="submit" name="simpan" class="btn btn-primary">Save</button>
				</div>

</form>                        
                  </div>
              </div>

             </section>

<?php
$d = $_POST;
$f = $_FILES;
include "koneksi.php";
if(isset($d['simpan'])){
  $nis = $d['nis'];
  $nama = $d['nama'];
  $gambar = $f['gambar']['name'];
  $gambar2 = $f['gambar2']['name'];
  move_uploaded_file($f['gambar']['tmp_name'], "./images/".$gambar);
  move_uploaded_file($f['gambar2']['tmp_name'], "./images/".$gambar2);
  $q = mysqli_query($mysqli, "INSERT INTO siswa(Nis, nama, gambar, gambar2) VALUES('$nis', '$nama', '$gambar', '$gambar2')");
  echo "<script>alert('foto berhasil di upload');window.location.href='berhasil_simpan.php'</script>";
  // header('location:berhasil_simpan.php');
}

?>