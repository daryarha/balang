
<div class="row">
  <div class="col s12">
    <br>
    <ul class="tabs">
      <li class="tab"><a href="#brg-kehilangan"><span class="blue-text text-darken-2">Kehilangan</span></a></li>
      <li class="tab"><a href="#brg-ditemukan"><span class="blue-text text-darken-2">Ditemukan</span></a></li>
    </ul>
  </div>
</div>
<div id="brg-kehilangan">
  <div class="container">
    <div class="row">

          <?php foreach ($data2 as $hilang) {?>
      <div class="col s12 m4">
        
        <div class="card medium">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="#">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4"><?php echo $hilang['nama_barang'];?><i class="material-icons right">more_vert</i></span>
            <p class="info">Dipost oleh: <?php echo $hilang['nama_pemilik'];?></p>
          </div>
          <div class="card-reveal card-reveal-wrap">
            <span class="card-title grey-text text-darken-4"><?php echo $hilang['nama_barang'];?><i class="material-icons right">close</i></span>
            <p>Detail barang: <br>
              <br>
              <?php $date = date_create($hilang['waktu'])->format('j F Y H:i');?>
              Warna: <?php echo $hilang['warna'];?><br>
              Ciri khusus: <?php echo $hilang['ciri_khusus'];?><br>
              Waktu & tempat kehilangan: <br><?php echo $date." ".$hilang['tempat_kehilangan'];?><br>
              Info tambahan: <?php echo $hilang['info_tambahan'];?><br>
            CP: <?php echo $hilang['contact_person'];?><br></p>
          </div>
          <div class="card-action">
            <p class="info">CP: <?php echo $hilang['contact_person'];?></p>
          </div>
        </div>
        
      </div>

          <?php } ?>
          

      
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
  <div class="container">
    <div class="row">
          <?php foreach ($data as $ketemu) {?>

      <div class="col s12 m4">
        <div class="card medium">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="#">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4"><?php echo $ketemu['nama_barang'];?><i class="material-icons right">more_vert</i></span>
            <p class="info">Dipost oleh: <?php echo $ketemu['nama_pemilik'];?></p>
          </div>
          <div class="card-reveal card-reveal-wrap">
            <span class="card-title grey-text text-darken-4"><?php echo $ketemu['nama_barang'];?><i class="material-icons right">close</i></span>
            <p>Detail barang: <br>
              <br>
              <?php $date = date_create($ketemu['waktu'])->format('j F Y H:i');?>
              Warna: <?php echo $ketemu['warna'];?><br>
              Ciri khusus: <?php echo $ketemu['ciri_khusus'];?><br>
              Waktu & tempat menemukan: <br><?php echo $date." ".$ketemu['tempat_menemukan'];?><br>
              Info tambahan: <?php echo $ketemu['info_tambahan'];?><br>
            CP: <?php echo $ketemu['contact_person'];?><br></p>
          </div>
          <div class="card-action">
            <p class="info">CP: <?php echo $ketemu['contact_person'];?></p>
          </div>
        </div>
        
      </div>
          <?php } ?>

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