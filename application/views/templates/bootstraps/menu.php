<style media="screen">
	.language{
		float: right!important;
	}

	.language>select{
		margin-top: 8px!important;
		padding: 2px!important;
		border-radius: 2px!important;
		border-color: #019fdc!important;
		background: #fff!important;
		color: #093a74!important;
		/* font-weight: bold; */
	}
</style>

<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAtElement': '#header', 'stickySetTop': '0', 'stickyChangeLogo': false}">
	<div class="header-body">
		<div class="header-container container">
			<div class="header-row">
				<div class="header-column custom-divider-1">
					<div class="header-logo">
						<a href="<?=base_url()?>">
							<img alt="Ptlmj One Page Agency" width="91" height="36" src="<?=base_url()?>assets/img/logo-font.png">
						</a>
					</div>
				</div>
				<div class="header-column">
					<div class="header-row">
						<div class="header-nav header-nav-center pt-xs">
							<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
								<i class="fa fa-bars"></i>
							</button>
							<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse m-none">
								<nav class="wrapper-spy">
									<ul class="nav nav-pills" id="mainNav">
										<li class="active">
											<a href="#home" data-hash>
												 <i class="fa fa-home"></i>
												 <?php echo $this->lang->line('menu_1'); ?>
											</a>
										</li>

										<!-- <li>
											<a href="#about-us" data-hash data-hash-offset="32">
												About Us
											</a>
										</li> -->

										<!-- <li class="dropdown dropdown-primary dropdown-mega" id="headerBookNow">
											<a class="dropdown-toggle" href="#about-us" data-hash data-hash-offset="32">
												Profil
											</a>
											<ul class="dropdown-menu dm-tb">
												<li>
													<a href="#sejarah" data-hash data-hash-offset="32">Sejarah Perusahaan</a>
												</li>
												<li>
													<a href="#about-us" data-hash data-hash-offset="32">Tentang Kami</a>
												</li>
												<li>
													<a href="#visi-misi" data-hash data-hash-offset="98">Visi & Misi</a>
												</li>
												<li>
													<a href="#nilai-nilai" data-hash data-hash-offset="98">Nilai-Nilai Perusahaan</a>
												</li>
											</ul>
										</li> -->

										<li>
											<a href="#profil-perusahaan" data-hash data-hash-offset="64">
												<!-- Profil -->
												<?php echo $this->lang->line('menu_2'); ?>
											</a>
										</li>

										<li>
											<a href="#board-profil" data-hash data-hash-offset="64">
												<!-- Pengurus -->
												<?php echo $this->lang->line('menu_3'); ?>
											</a>
										</li>

										<li>
											<a href="#fleets" data-hash data-hash-offset="32">
												<!-- Armada -->
												<?php echo $this->lang->line('menu_4'); ?>
											</a>
										</li>

										<li>
											<a href="#Customer" data-hash data-hash-offset="32">
												<!-- Pelanggan -->
												<?php echo $this->lang->line('menu_5'); ?>
											</a>
										</li>

										<!-- <li>
											<a href="#gallery" data-hash data-hash-offset="32">
												Galeri
											</a>
										</li> -->

										<li>
											<a href="<?=base_url()?>assets/files/compro_lmj.pdf" target="_blank">
												 <i class="fa fa-download"></i>
												 <!-- Unduh -->
												 <?php echo $this->lang->line('menu_6'); ?>
											</a>
										</li>

										<li>
											<a href="#kontak" data-hash data-hash-offset="74">
												<!-- Kontak -->
												<?php echo $this->lang->line('menu_7'); ?>
											</a>
										</li>

										<!-- <li class="language">
											<a href="#">
												<img src="<?=base_url()?>assets/img/icons/idn.svg" alt="tera_byte">
											</a>
										</li> -->

										<li class="language">
											<select onchange="javascript:window.location.href='<?php echo base_url(); ?>languageswitcher/switchLang/'+this.value;">
											 <option value="indonesia" <?php if($this->session->userdata('site_lang') == 'indonesia') echo 'selected="selected"'; ?>>Indonesia</option>
										   <option value="english" <?php if($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>>English</option>
										  </select>
											<!-- <p><?php echo $this->lang->line('menu_test'); ?></p> -->
										</li>



									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>

				<!-- <div class="header-column custom-language">
					<div class="header-row">

						<ul class="social-icons custom-social-icons-style-1 hidden-sm hidden-xs">
							<li class="social-icons-linkedin">
								<a href="http://www.linkedin.com/" class="text-color-quaternary" target="_blank" title="Linkedin">
									<i class="fa fa-linkedin"></i>
								</a>
							</li>
						</ul>

					</div>
				</div> -->

				<!-- <div class="header-column custom-divider-1 _left">
					<div class="header-row center">

						<ul class="social-icons custom-social-icons-style-1 hidden-sm hidden-xs">
							<li class="social-icons-facebook">
								<a href="http://www.facebook.com/" class="text-color-quaternary" target="_blank" title="Facebook">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li class="social-icons-twitter">
								<a href="http://www.twitter.com/" class="text-color-quaternary" target="_blank" title="Twitter">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li class="social-icons-linkedin">
								<a href="http://www.linkedin.com/" class="text-color-quaternary" target="_blank" title="Linkedin">
									<i class="fa fa-linkedin"></i>
								</a>
							</li>
						</ul>

					</div>
				</div> -->

			</div>
		</div>
	</div>
</header>
