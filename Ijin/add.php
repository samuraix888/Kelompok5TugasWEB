

    <section class="container">
              <div class="row">
                  <div class="col-sm-7 text-center">
                  <form name="form_mahasiwa" action="index.php?page=create" method="post" enctype="multipart/form-data">

<div class="form-group">
  <label for="Nis">NIS</label>
  <input type="text"  maxlength="18" onkeypress="return hanyaAngka(event)" class="form-control" id="Nis" placeholder="Nomor Indux Siswa" name="Nis" required>
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
    <input  type="file" class="form-control" id="gambar" name="gambar" required >
</div>
</div>
</div>

<div class="form-group">
  <label for="Gambar">Foto Surat Ijin Bersama Orang tua</label>
  <div class="row">
  <div class="col-sm-7 text-center">
  <input type="file" class="form-control" id="gambar2" name="gambar2" required>
  <div>
</div>
</div>

<br/><br/>

<div class="row">
  <div class="col-sm-20 text-Center">
<div class="form-group">
   <button type="reset" class="btn btn-danger">Reset</button>
  <button type="submit" class="btn btn-primary">Save</button>
</div>
</div>
</div>


</form>                        
                  </div>
              </div>

             </section>
