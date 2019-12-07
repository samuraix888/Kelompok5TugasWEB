

    <section class="container">
              <div class="row">
                  <div class="col-sm-7 text-center">
                  <?php 
                  include "koneksi.php";
                  $q = mysqli_query($mysqli, "SELECT * FROM siswa order by id desc");
                  $d = mysqli_fetch_array($q);
                  
                  ?>
                  <!-- <form name="form_mahasiwa" action="" method="post" enctype="multipart/form-data"> -->

<div class="form-group">
  <label for="Nis">NIS</label>
  <input type="text"  maxlength="18" onkeypress="return hanyaAngka(event)" class="form-control" id="Nis" placeholder="Nomor Indux Siswa" name="nis" required value="<?= $d['Nis'] ?>">
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
  <input type="text "  maxlength="25"  onkeypress="return huruf(event)" class="form-control" id="nama" placeholder="Nama" name="nama" required  value="<?= $d['nama'] ?>">
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
  <div  class="alert alert-success" >Berhasil Upload Foto</div>
    <a href="index.php">Tambah data</a>
</div>

<br/><br/>


</div>

				</div>

</form>                        
                  </div>
              </div>

             </section>

