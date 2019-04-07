<body>
<main id="">
	<div class="container-fluid">
		<div id="brand-search">
			<nav id="nav-transp">
				<div class="nav-wrapper">
					<a href="#!" class="brand-logo hide-on-med-and-up">BaLang</a>
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
					<ul class="right log-link hide-on-med-and-down">
						<li><a href="#"><i class="material-icons right">person</i>LOGIN</a></li>
					</ul>
					<ul class="side-nav" id="mobile-demo">
						<li><a href="#" class="blue-text"><i class="material-icons blue-text right">person</i>LOGIN</a></li>
						<li>
							<!-- <form action="#">
												<div class="input-field">
																		<input id="cari-side" class="validate" type="text">
																		<label class="active label-cari-side" for="cari">Pencarian<i class="material-icons blue-text right">search</i></label>
												</div>
							</form> -->
							<form action="#">
								<div class="file-field input-field">
									<div class="waves-effect waves-light btn-small blue-text right">
										<i class="material-icons right">search</i>
									</div>
									<div class="file-path-wrapper">
										<input id="cari-side" class="validate blue-text" type="text">
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
				<a class="waves-effect waves-light btn blue" href="<?php echo base_url()."ketemu"; ?>">UMUMKAN</a>
				<h4 class="white-text text-darken-2 detail-ann">Kehilangan Barang?</h4><br>
				
				<div class="row">
					<div class="col s8 col m4 offset-s2 offset-m4">
						<form action="<?php echo base_url()."hilang"; ?>">
							<div class="input-field">
								<input id="cari" class="validate" type="text">
								<label class="active label-cari" for="cari">Pencarian<i class="material-icons right">search</i></label>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div id="category">
		<br><br>
			<h3 class="center-align category-head blue-text text-darken-3">Kategori Barang</h3>
			<div class="row">
				<div class="col l3 s12 m6"><a href="#"><span class="glyph-icon flaticon-clock"></span><br><span class="caption-icon">Aksesoris</span></a></div>
				<div class="col l3 s12 m6"><a href="#"><span class="glyph-icon flaticon-hooded-jacket"></span><br><span class="caption-icon">Pakaian</span></a></div>
				<div class="col l3 s12 m6"><a href="#"><span class="glyph-icon flaticon-interface-1"></span><br><span class="caption-icon">Dokumen</span></a></div>
				<div class="col l3 s12 m6"><a href="#"><span class="glyph-icon flaticon-agenda"></span><br><span class="caption-icon">Buku & Binder</span></a></div>
			</div>
			<div class="row">
				<div class="col l3 s12 m6"><a href="#"><span class="glyph-icon flaticon-technology"></span><br><span class="caption-icon">Elektronik</span></a></div>
				<div class="col l3 s12 m6"><a href="#"><span class="glyph-icon flaticon-car"></span><br><span class="caption-icon">Kunci</span></a></div>
				<div class="col l3 s12 m6"><a href="#"><span class="glyph-icon flaticon-money"></span><br><span class="caption-icon">Dompet & Uang</span></a></div>
				<div class="col l3 s12 m6"><a href="#"><span class="glyph-icon flaticon-interface"></span><br><span class="caption-icon">Tanpa Kategori</span></a></div>
			</div>
		</div>
	</div>
	</main>

	<br><br><br>