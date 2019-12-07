
      <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>NIS</th>
              <th>Nama</th>
              <th>Surat Keterangan Sakit</th>
              <th>Surat Keterangan Sakit Di Pegang Orang Tua</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>


          <?php 
            $no = 0;
            include "koneksi.php";
            $siswa=$mysqli->query("SELECT * FROM siswa");
            while($m=mysqli_fetch_array($siswa)){
            $no++;    
          ?>  

          <?php 
            include"paging.php";
            $p   = new paging_siswa;
            $batas  = 5;
            $posisi = $p->cariPosisi($batas);
            $mahasiswa=$mysqli->query("SELECT * FROM siswa 
            ORDER BY id DESC LIMIT  $posisi,$batas");
            $no=0;
            while($m=mysqli_fetch_array($siswa)){   
            $no++;
          ?>

            <tr>
              <th scope="row"><?php echo $no;?></th>
              <td><?php echo $m['Nis']; ?></td>
              <td><?php echo $m['nama']; ?></td>
              <td><img src="images/<?php echo $m['gambar'];?>" height="150"></td>
              <td><img src="images/<?php echo $m['gambar2'];?>" height="150"></td>
             
              <td> 
              <a href="index.php?page=delete&id=<?php echo $m['id'];?>"><i class="fa fa-trash-o"></i>DELETE</a>
              
               
            </td>
            </tr>

            <?php } ?>
            
          </tbody>
        </table>

      <div class="halaman">
        <nav aria-label="...">
          <ul class="pagination">

          <?php } ?>
          <?php 
              $jmldata     = mysqli_num_rows($mysqli->query("SELECT * FROM siswa"));
              $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
              $linkHalaman = $p->navHalaman($_GET['home'], $jmlhalaman);
              echo " <li  class='page-item'> $linkHalaman </li>"; 
          ?>
          
          </ul>
        </nav>
      </div>