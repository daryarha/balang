<body>
	  <div class="container">
  <br>
  <h4><div class="center title-form">Form Edit Menemukan Barang</div></h4>
  <br>
    <form method="post" action="<?php echo base_url('user/update_menemukan');?>">
      <div class="row">
        <div class="input-field col s12 m6">
          <input name="nim" type="text" class="validate" value="<?php echo $nim; ?>" disabled>
          <label for="nim">NIM</label>
        </div>
        <div class="input-field col s12 m6">
          <input name="nama_penemu" type="text" class="validate" value="<?php echo $nama_penemu; ?>" disabled>
          <label for="nama_penemu">Nama penemu</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6">
          <input name="nama_barang" type="text" class="validate"  data-length="15" value="value="<?php echo $nama_barang; ?>"" required>
          <label for="nama_barang">Nama barang</label>
        </div>
        <div class="input-field col s12 m3">
          <input name="warna" type="text" class="validate" data-length="20" value="value="<?php echo $warna; ?>"">
          <label for="warna">Warna</label>
        </div>
        <div class="input-field col s6 m2">
          <?php $date = date_create($waktu)->format('Y-m-d');?>
          <input name="tgl" type="text" class="datepicker" value="<?php echo $date;?>">
          <label for="tgl">Tanggal Menemukan</label>
          </div>

          <?php $hour = date_create($waktu)->format('H:i');?>
        <div class="input-field col s6 m1">
          <input name="jam" type="text" class="timepicker" value="<?php echo $hour;?>">
          <label for="jam">Jam</label>
          </div>
      </div>
        <div class="input-field col s12">
    <select name="id_kategori" required>
      <option value="" disabled>Pilih kategori barang</option>
          <?php foreach ($data as $kategori) {?>
          <option value="<?php echo $kategori['id_kategori']?>" <?php if($kategori['id_kategori']==$id_kategori){echo"selected";}?>><?php echo $kategori['nama_kategori']?></option>
          <?php } ?>
    </select>
    <label>Kategori barang</label>
  </div>
      <div class="row">
        <div class="input-field col s12 m6">
          <textarea name="ciri_khusus" class="materialize-textarea"  data-length="44"><?php echo $ciri_khusus;?></textarea>
          <label for="ciri_khusus" data-error="melebihi batas karakter">Ciri-ciri khusus</label>
          </div>
        <div class="input-field col s12 m6">
          <textarea name="tempat_menemukan" class="materialize-textarea" data-length="25" required><?php echo $tempat_menemukan;?></textarea>
          <label for="tempat_menemukan" data-error="melebihi batas karakter">Tempat menemukan</label>
          </div>
        </div>

    
    
<div class="file-field input-field">
      <div class="btn btn-file" disabled>
        <span>Foto</span>
        <input type="file" disabled>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" value="Dikarenakan keterbatasan server yang kami punya mohon sertakan link gambar pada kolom di bawah" disabled>
      </div>
    </div>


      <div class="row">
        <div class="input-field col s12 m12">
          <input name="link_gambar" type="text" class="validate"  data-length="300" required value="<?php echo $link_gambar;?>">
          <label for="link_gambar" data-error="melebihi batas karakter">Link Gambar</label>
          </div>
        </div>

      <div class="row">
        <div class="input-field col s12 m6">
          <input name="email" type="email" class="validate"  data-length="50" required value="<?php echo $email?>">
          <label for="email" data-error="melebihi batas karakter atau bukan email">Email</label>
        </div>
        <div class="input-field col s12 m6">
          <input name="contact_person" type="text" class="validate" data-length="20" required value="<?php echo $contact_person;?>">
          <label for="contact_person">Contact Person</label>
        </div>
        </div>


      <div class="row">
        <div class="input-field col s12 m12">
          <textarea name="info_tambahan" class="materialize-textarea"  data-length="50"><?php echo $info_tambahan;?></textarea>
          <label for="info_tambahan" data-error="melebihi batas karakter">Informasi Tambahan</label>
          </div>
        </div>

      <div class="row">
        <button class="btn btn-file waves-effect waves-light col s12" type="submit">UMUMKAN</button>
        </div>
    </form>
  </div>
  <br><br>