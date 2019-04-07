
  <div class="<?php if($data!=null){ echo "container";} else{echo "container-fluid";}?>">
  <br><br><br>
  <h4><div class="center title-form">List Kehilangan Barang</div></h4>
  <br><?php if($data==null){ echo "<br><br>";}?>
      <table id="data" class="bordered highlight  display nowrap responsive-table">
        <thead>
          <tr>
              <th >Nim</th>
              <th >Nama pemilik</th>
              <th >Nama barang</th>
              <th >Kategori</th>
              <th >Warna</th>
              <th >Ciri khusus</th>
              <th >Waktu</th>
              <?php if($data!=null){ echo "<th> Tempat Kehilangan </th>";}?>
              <th>Email</th>
              <th >Contact person</th>
              <th >Info tambahan</th>
              <th >Link Gambar</th>
              <th>Fungsi</th>
          </tr>
        </thead>


        <tbody>
        <?php if($data!=null){?>
        <?php foreach ($data as $kehilangan) {?>
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
          <a href="<?php echo base_url()."admin/edit_kehilangan/".$kehilangan['id_kehilangan']; ?>"><span class="blue-text text-darken-2"><i class="material-icons">edit</i></span></a>
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
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Tidak</a>
      <a href="<?php echo base_url()."admin/delete_kehilangan/".$kehilangan['id_kehilangan']; ?>" class="modal-action modal-close waves-effect waves-green btn-flat">Ya</a>
    </div>
  </div>
</div>
