
  <div class="<?php if($data!=null){ echo "container";} else{echo "container-fluid";}?>">
  <br><br><br>
  <h4><div class="center title-form">List Menemukan Barang</div></h4>
  <br><?php if($data==null){ echo "<br><br>";}?>
      <table id="data" class="bordered highlight  display nowrap responsive-table">
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
            <td><?php echo $menemukan['email']; ?></td>
            <td><?php echo $menemukan['contact_person']; ?></td>
            <td><?php echo $menemukan['info_tambahan']; ?></td>
            <td><?php echo $menemukan['link_gambar']; ?></td>
            <td>
          <a href="<?php echo base_url()."admin/edit_menemukan/".$menemukan['id_menemukan']; ?>"><span class="blue-text text-darken-2"><i class="material-icons">edit</i></span></a>
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
            
      <br><br><br><br><?php if($data==null){ echo "<br><br>";}?>
  <div id="pilihan" class="modal white-text red darken-4">
    <div class="modal-content">
      <h5>Menghapus data</h5>
      <p>Apakah anda yakin ingin menghapus data barang ini?</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Tidak</a>
      <a href="<?php echo base_url()."admin/delete_menemukan/".$menemukan['id_menemukan']; ?>" class="modal-action modal-close waves-effect waves-green btn-flat">Ya</a>
    </div>
  </div>
</div>
<br>
