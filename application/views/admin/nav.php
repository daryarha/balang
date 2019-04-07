<nav>
  <div class="nav-wrapper blue darken-4">
    <a href="#!" class="brand-logo">BaLang</a>
    <a href="#" data-activates="side-nav-user" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
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
    </ul>
    <ul class="side-nav blue darken-4" id="side-nav-user">
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
    </ul>
  </div>
</nav>