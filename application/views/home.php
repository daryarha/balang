<div id="brand-search">
  <nav id="nav-transp">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo hide-on-med-and-up">BaLang</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right log-link hide-on-med-and-down">
        <?php if($this->session->userdata('prev')==1){ ?>
        <li><a class="dropdown-button dropdown-lostfound" href="#" data-activates="formlostfound3">List Kehilangan & Menemukan<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-button dropdown-lostfound" href="#" data-activates="formlostfound1">Form Kehilangan & Menemukan<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="<?php echo base_url()."admin/"; ?>">Postmu</a></li>
        <li><a class="dropdown-button dropdown-account" href="#" data-activates="account"><i class="material-icons right">account_circle</i><?php echo $this->session->userdata('nama');?></a></li>
        <ul id="formlostfound3" class="dropdown-content blue darken-4">
          <li><a href="<?php echo base_url()."admin/list_kehilangan"; ?>">List Kehilangan</a></li>
          <li><a href="<?php echo base_url()."admin/list_menemukan"; ?>">List Menemukan</a></li>
        </ul>
        <ul id="formlostfound1" class="dropdown-content blue darken-4">
          <li><a href="<?php echo base_url()."admin/form_kehilangan"; ?>">Form Kehilangan</a></li>
          <li><a href="<?php echo base_url()."admin/form_menemukan"; ?>">Form Menemukan</a></li>
        </ul>
        <ul id="account" class="dropdown-content blue darken-4">
          <li><a href="<?php echo base_url()."admin/logout"; ?>">Logout</a></li>
        </ul>
        <?php }else if($this->session->userdata('prev')==2){ ?>
        <li><a class="dropdown-button dropdown-lostfound" href="#" data-activates="formlostfound1">Form Kehilangan & Menemukan<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="<?php echo base_url()."user/"; ?>">Postmu</a></li>
        <li><a class="dropdown-button dropdown-account" href="#" data-activates="account"><i class="material-icons right">account_circle</i><?php echo $this->session->userdata('nama');?></a></li>
        <ul id="formlostfound1" class="dropdown-content blue darken-4">
          <li><a href="<?php echo base_url()."user/form_kehilangan"; ?>">Form Kehilangan</a></li>
          <li><a href="<?php echo base_url()."user/form_menemukan"; ?>">Form Menemukan</a></li>
        </ul>
        <ul id="account" class="dropdown-content blue darken-4">
          <li><a href="<?php echo base_url()."user/logout"; ?>">Logout</a></li>
        </ul>
        <?php }else{ ?>
        <li><a href="http://bem.filkom.ub.ac.id/auth/?auth_id=f991dd807d921db88eb4d664c4749438">
        <i class="material-icons right">person</i>LOGIN</a></li><?php } ?>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <?php if($this->session->userdata('prev')==1){ ?>
        <li><a class="dropdown-button dropdown-lostfound" href="#" data-activates="formlostfound4">List Kehilangan & Menemukan<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-button dropdown-lostfound" href="#!" data-activates="formlostfound2">Form<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="<?php echo base_url()."admin/"; ?>">Postmu</a></li>
        <li><a class="dropdown-button dropdown-account" href="#!" data-activates="account2"><i class="material-icons right">account_circle</i><?php echo $this->session->userdata('nama');?></a></li>
        <ul id="formlostfound4" class="dropdown-content blue darken-4">
          <li><a href="<?php echo base_url()."admin/list_kehilangan"; ?>">List Kehilangan</a></li>
          <li><a href="<?php echo base_url()."admin/list_menemukan"; ?>">List Menemukan</a></li>
        </ul>
        <ul id="formlostfound2" class="dropdown-content blue darken-4">
          <li><a href="<?php echo base_url()."admin/form_kehilangan"; ?>">Form Kehilangan</a></li>
          <li><a href="<?php echo base_url()."admin/form_menemukan"; ?>">Form Menemukan</a></li>
        </ul>
        <ul id="account2" class="dropdown-content blue darken-4">
          <li><a href="<?php echo base_url()."admin/logout"; ?>">Logout</a></li>
        </ul>
        <?php }else if($this->session->userdata('prev')==2){ ?>
        <li><a class="dropdown-button dropdown-lostfound" href="#" data-activates="formlostfound2">Form<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="<?php echo base_url()."user/"; ?>">Postmu</a></li>
        <li><a class="dropdown-button dropdown-account" href="#" data-activates="account2"><i class="material-icons right">account_circle</i><?php echo $this->session->userdata('nama');?></a></li>
        <ul id="formlostfound2" class="dropdown-content blue darken-4">
          <li><a href="<?php echo base_url()."user/form_kehilangan"; ?>">Form Kehilangan</a></li>
          <li><a href="<?php echo base_url()."user/form_menemukan"; ?>">Form Menemukan</a></li>
        </ul>
        <ul id="account2" class="dropdown-content blue darken-4">
          <li><a href="<?php echo base_url()."user/logout"; ?>">Logout</a></li>
        </ul>
        <?php }else{ ?>
        <li><a href="http://bem.filkom.ub.ac.id/auth/?auth_id=f991dd807d921db88eb4d664c4749438" class="blue-text"><i class="material-icons blue-text right">person</i>LOGIN</a></li>
          <?php } ?>
        <li>
          <form action="#"  method="get">
            <div class="file-field input-field">
              <div class="waves-effect waves-light btn-small blue-text right">
                <i class="material-icons right">search</i>
              </div>
              <div class="file-path-wrapper">
                <input id="cari-side" name="cari" class="validate blue-text" type="text">
                <label class="active label-cari-side" for="cari-side" style="margin-left: 10px">Pencarian</label>
              </div>
            </div>
          </form>
        </li>
      </ul>
    </div>
  </nav>
  <div id="main-announcement">
    <h3 class="logo">BALANG</h3>
    <h5>Barang Hilang</h5>
    <h4 class="white-text text-darken-2 detail-ann">Menemukan Barang?</h4><br>
    <a class="waves-effect waves-light btn blue" href="http://bem.filkom.ub.ac.id/auth/?auth_id=f991dd807d921db88eb4d664c4749438">UMUMKAN</a>
    <h4 class="white-text text-darken-2 detail-ann">Kehilangan Barang?</h4><br>
    
    <div class="row">
      <div class="col s8 col m4 offset-s2 offset-m4">
        <form action="#" method="get">
          <div class="input-field">
            <input id="cari" name="cari" class="validate" type="text">
            <label class="active label-cari" for="cari">Pencarian<i class="material-icons right">search</i></label>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col s12">
    <br>
    <ul class="tabs"><!-- 
      <li class="tab"><a href="#brg-kehilangan"><span class="blue-text text-darken-2">Kehilangan</span></a></li>
      <li class="tab"><a href="#brg-ditemukan"><span class="blue-text text-darken-2">Ditemukan</span></a></li> -->
    </ul>
  </div>
</div>
<div id="brg-kehilangan">
  <div class="container">
    <div class="row">
      <?php
      if($data2!=null){
       foreach ($data2 as $hilang) {?>
      
      <div class="col s12 m4">
        
        <div class="card medium">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="<?php echo $hilang['link_gambar'];?>">
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
              Nama pemilik: <?php echo $hilang['nama_pemilik'];?><br>
            CP: <?php echo $hilang['contact_person'];?><br></p>
          </div>
          <div class="card-action">
            <p class="info">CP: <?php echo $hilang['contact_person'];?></p>
          </div>
        </div>
        
      </div>


      <?php }
    }else{ ?>
    <p class="center blue-text darken-4"> Sudah dicari tidak ada?<br>
    <a class="waves-effect waves-light btn btn-file" href="http://bem.filkom.ub.ac.id/auth/?auth_id=f991dd807d921db88eb4d664c4749438">UMUMKAN</a></p>
    <?php } ?>
      
      
    </div>
    
                             <div class="pagination_links"> 
                                 <?php echo $linkKehilangan; ?> </div> 
  </div>
</div>
<div id="brg-ditemukan" class="col s12">
  <div class="container">
    <div class="row">
      <?php
      if($data!=null){
       foreach ($data as $ketemu) {?>
      <div class="col s12 m4">
        <div class="card medium">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="<?php echo $ketemu['link_gambar'];?>">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4"><?php echo $ketemu['nama_barang'];?><i class="material-icons right">more_vert</i></span>
            <p class="info">Dipost oleh: <?php echo $ketemu['nama_penemu'];?></p>
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
              Nama penemu: <?php echo $ketemu['nama_penemu'];?><br>
            CP: <?php echo $ketemu['contact_person'];?><br></p>
          </div>
          <div class="card-action">
            <p class="info">CP: <?php echo $ketemu['contact_person'];?></p>
          </div>
        </div>
        
      </div>
      <?php }
    }else{ ?>

    <p class="center blue-text darken-4"> Sudah dicari tidak ada?<br>
    <a class="waves-effect waves-light btn btn-file" href="http://bem.filkom.ub.ac.id/auth/?auth_id=f991dd807d921db88eb4d664c4749438">UMUMKAN</a></p>
    <?php } ?>
    </div>
    
                             <div class="pagination_links"> 
                                 <?php echo $linkMenemukan; ?> </div> 
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