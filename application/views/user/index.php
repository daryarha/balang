
<div class="row">
  <div class="col s12">
    <br>
    <ul class="tabs">
      <li class="tab"><a href="#brg-kehilangan"><span class="blue-text text-darken-2">Kehilangan</span></a></li>
      <li class="tab"><a href="#brg-ditemukan"><span class="blue-text text-darken-2">Menemukan</span></a></li>
    </ul>
  </div>
</div>
<div id="brg-kehilangan">
  <div class="<?php if($data2!=null){ echo "container";} else{echo "container-fluid";}?>">
    <br>
  <h4><div class="center title-form">Post Kehilangan Barangmu</div></h4>
  <br><?php if($data2==null){ echo "<br><br>";}?>
      <table id="data" class="bordered highlight nowrap responsive-table"  style="width: 100%">
        <thead>
          <tr>
              <th >Nim</th>
              <th >Nama pemilik</th>
              <th >Nama barang</th>
              <th >Kategori</th>
              <th >Warna</th>
              <th >Ciri khusus</th>
              <th >Waktu</th>
              <?php if($data2!=null){ echo "<th> Tempat Kehilangan </th>";}?>
              <th >Email</th>
              <th >Contact person</th>
              <th >Info tambahan</th>
              <th >Link Gambar</th>
              <th>Fungsi</th>
          </tr>
        </thead>


        <tbody>
        <?php if($data2!=null){?>
        <?php foreach ($data2 as $kehilangan) {?>
        <tr>
            <td><?php echo $kehilangan['nim']; ?></td>
            <td><?php echo $kehilangan['nama_pemilik']; ?></td>
            <td><?php echo $kehilangan['nama_barang']; ?></td>
            <td><?php echo $kehilangan['nama_kategori']; ?></td>
            <td><?php echo $kehilangan['warna']; ?></td>
            <td><?php echo $kehilangan['ciri_khusus']; ?></td>
            <td><?php echo $kehilangan['waktu']; ?></td>
            <td><?php echo $kehilangan['tempat_kehilangan']; ?></td>
            <td><?php echo $kehilangan['email']; ?></td>
            <td><?php echo $kehilangan['contact_person']; ?></td>
            <td><?php echo $kehilangan['info_tambahan']; ?></td>
            <td><?php echo $kehilangan['link_gambar']; ?></td>
            <td>
          <a href="<?php echo base_url()."user/edit_kehilangan/".$kehilangan['id_kehilangan']; ?>"><span class="blue-text text-darken-2"><i class="material-icons">edit</i></span></a>
          <a href="#pilihan" class="modal-trigger"><span class="red-text text-darken-2"><i class="material-icons">delete</i></span></a></td>
        </tr>
        <?php } }else{?>
        <tr class="odd">
          <td colspan="12" class="dataTables_empty" valign="top">Tidak ada data
          </td>
        </tr>
         <?php }?>
        </tbody>
      </table>
      <br><br><br><br><?php if($data2==null){ echo "<br><br>";}?>
  <div id="pilihan" class="modal white-text red darken-4">
    <div class="modal-content">
      <h5>Menghapus data</h5>
      <p>Apakah anda yakin ingin menghapus data barang ini?</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Tidak</a>
      <a href="<?php echo base_url()."user/delete_kehilangan/".$kehilangan['id_kehilangan']; ?>" class="modal-action modal-close waves-effect waves-green btn-flat">Ya</a>
    </div>
  </div>
    <!--
  <ul class="pagination center">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul> -->
</div>
</div>
<div id="brg-ditemukan" class="col s12">
  <div class="<?php if($data!=null){ echo "container";} else{echo "container-fluid";}?>">
     <br>
  <h4><div class="center title-form">Post Menemukan Barangmu</div></h4>
  <br>  <?php if($data==null){ echo "<br><br>";}?>
      <table id="data2" class="bordered highlight nowrap responsive-table" style="width: 100%">
        <thead>
          <tr>
              <th >Nim</th>
              <th >Nama penemu</th>
              <th >Nama barang</th>
              <th >Kategori</th>
              <th >Warna</th>
              <th >Ciri khusus</th>
              <th >Waktu</th>
              <?php if($data!=null){ echo "<th> Tempat Menemukan </th>";}?>
              <th >Email</th>
              <th >Contact person</th>
              <th >Info tambahan</th>
              <th >Link Gambar</th>
              <th>Fungsi</th>
          </tr>
        </thead>


        <tbody>
        <?php if($data!=null){?>
        <?php foreach ($data as $menemukan) {?>
        <tr>
            <td><?php echo $menemukan['nim']; ?></td>
            <td><?php echo $menemukan['nama_penemu']; ?></td>
            <td><?php echo $menemukan['nama_barang']; ?></td>
            <td><?php echo $menemukan['nama_kategori']; ?></td>
            <td><?php echo $menemukan['warna']; ?></td>
            <td><?php echo $menemukan['ciri_khusus']; ?></td>
            <td><?php echo $menemukan['waktu']; ?></td>
            <td><?php echo $menemukan['tempat_menemukan']; ?></td>
            <td><?php echo $menemukan['contact_person']; ?></td>
            <td><?php echo $menemukan['email']; ?></td>
            <td><?php echo $menemukan['info_tambahan']; ?></td>
            <td><?php echo $menemukan['link_gambar']; ?></td>
            <td>
          <a href="<?php echo base_url()."user/edit_menemukan/".$menemukan['id_menemukan']; ?>"><span class="blue-text text-darken-2"><i class="material-icons">edit</i></span></a>
          <a href="#pilihan2" class="modal-trigger"><span class="red-text text-darken-2"><i class="material-icons">delete</i></span></a></td>
        </tr>
        <?php } }else{?>
        <tr class="odd">
          <td colspan="12" class="dataTables_empty center" valign="top">Tidak ada data
          </td>
        </tr>
         <?php }?>
        </tbody>
      </table>
            
      <br><br><br><br><?php if($data==null){ echo "<br><br>";}?>
  <div id="pilihan2" class="modal white-text red darken-4">
    <div class="modal-content">
      <h5>Menghapus data</h5>
      <p>Apakah anda yakin ingin menghapus data barang ini?</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Tidak</a>
      <a href="<?php echo base_url()."user/delete_menemukan/".$menemukan['id_menemukan']; ?>" class="modal-action modal-close waves-effect waves-green btn-flat">Ya</a>
    </div>
  </div>
      <!-- 
  <ul class="pagination center">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul> -->
</div>
</div>