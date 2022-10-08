
<style media="screen">

  html .heading-tb,
  html .lnk-tb,
  html .text-color-tb {
    color: #bbb !important;
  }
  html .text-color-dark-tb {
    color: rgba(4, 31, 43, 0.75) !important;
  }

  html .heading.heading-tb h1,
  html .heading.heading-tb h2,
  html .heading.heading-tb h3,
  html .heading.heading-tb h4,
  html .heading.heading-tb h5,
  html .heading.heading-tb h6 {
    border-color: #666;
  }

  html .background-color-light-tb {
    background-color: #e8e8e8 !important;
  }

  html .background-color-dark-tb {
    background-color: rgba(4, 31, 43, 0.75) !important;
  }

  ul.history li .thumb {
    background: transparent url(<?=base_url("assets/img/demos/history-thumb.png")?>) no-repeat 0 0;
  }

  ul.history li .thumb .img-background-1,
  ul.history li .thumb .img-background-2,
  ul.history li .thumb .img-background-3,
  ul.history li .thumb .img-background-4
  {
    position: relative;
    z-index: 1;
    top: 0px;

    border-radius: 150px;
    margin: 7px 8px;
    width: 145px;
    height: 145px;
  }

  .thumb-color-1 {
    color: #3f506c;
  }
  html .panel-group.panel-group-primary .bg-panel-1,
  ul.history li .thumb .img-background-1 {
    background-color: #3f506c!important;
  }
  ul.history li .featured-box .border-top-1 {
    border-top-color: #3f506c!important;
  }

  .thumb-color-2 {
    color: #fec92b;
  }
  html .panel-group.panel-group-primary .bg-panel-2,
  ul.history li .thumb .img-background-2 {
    background-color: #fec92b!important;
  }
  ul.history li .featured-box .border-top-2 {
    border-top-color: #fec92b!important;
  }

  .thumb-color-3 {
    color: #e23b59;
  }
  html .panel-group.panel-group-primary .bg-panel-3,
  ul.history li .thumb .img-background-3 {
    background-color: #e23b59!important;
  }
  ul.history li .featured-box .border-top-3 {
    border-top-color: #e23b59!important;
  }

  .thumb-color-4 {
    color: #115e8c;
  }
  html .panel-group.panel-group-primary .bg-panel-4,
  ul.history li .thumb .img-background-4 {
    background-color: #115e8c!important;
  }
  ul.history li .featured-box .border-top-4 {
    border-top-color: #115e8c!important;
  }

  ul.history li .thumb .text-thumb {
    position: absolute;
      top: 65px;
      left: 50px;
      z-index: 2;
      color: #041f2b;

      font-size: 30px;
  }
</style>

<!-- section sejarah -->
<section id="profil-perusahaan" class="section section-no-border background-color-light-tb m-none">
  <div class="container">

    <div class="row center">
      <div class="col-md-12">
        <h2>Profil Perusahaan</h2>
        <p class="custom-section-sub-title"><?=$aplikasi->nama_unit?></p>
      </div>
    </div>


    <div class="row">
      <div class="col-md-12">
        <div class="tabs">

          <ul class="nav nav-tabs nav-justified tabs-simple">
            <li class="active">
              <a href="#sejarah-perusahaan" data-toggle="tab" class="text-color-dark-tb semi-bold text-center">Sejarah Perusashaan</a>
            </li>
            <li>
              <a href="#visi-misi" data-toggle="tab" class="text-color-dark-tb semi-bold text-center">Visi & Misi</a>
            </li>
            <li>
              <a href="#nilai-nilai" data-toggle="tab" class="text-color-dark-tb semi-bold text-center">Nilai-Nilai Perusashaan</a>
            </li>
          </ul>

          <div class="tab-content">

            <div id="sejarah-perusahaan" class="tab-pane active">
              <ul class="history">
								<li class="appear-animation" data-appear-animation="fadeInUp">
									<div class="thumb">
                    <div class="img-background-1">&nbsp;</div>
                    <h4 class="text-thumb text-color-light"><strong>2012</strong></h4>
									</div>
									<div class="featured-box">
										<div class="border-top-1 box-content">
											<h4 class="thumb-color-1"><strong>2012</strong></h4>

                      <p class="justify">PT Lintas Maritim Jaya Didirikan pada tahun 2012 berdasarkan akta No. 54 Tanggal 12 Juni 2012 yang dibuat oleh Notaris Edison Jingga, SH di Jakarta. PT LINTAS MARITIM JAYA merupakan perusahaan pelayaran swasta nasional di bidang jasa penyewaan Tugboat dan Tongkang (Tug and Barge) untuk pengangkutan komoditas dan sumber daya alam di Indonesia yang secara geografis merupakan negara maritim.</p>
                      <p class="justify">Nama PT LINTAS MARITIM JAYA mengandung arti dan cita-cita menjadi perusahaan pelayaran yang tangguh dalam melintasi perairan nasional dan dapat terus berjaya di masa pertumbuhan yang berkelanjutan.</p>
										</div>
									</div>
								</li>
								<li class="appear-animation" data-appear-animation="fadeInUp">
                  <div class="thumb">
                    <div class="img-background-2">&nbsp;</div>
                    <h4 class="text-thumb text-color-light"><strong>2019</strong></h4>
									</div>
									<div class="featured-box">
										<div class="border-top-2 box-content">
											<h4 class="thumb-color-2"><strong>2019</strong></h4>

                      <p class="justify">Pada akhir tahun 2019 PT LINTAS MARITIM JAYA melakukan perubahan manajemen dan kepemilikan saham.</p>
											<p class="justify">Perubahan ini menjadikan perusahaan ini lebih kuat dan mapan dalam pendanaan serta dukungan sumber daya manusia yang lebih hebat karena bergabungnya sumber daya manusia yang berpengalaman di bidangnya.</p>
                      <p class="justify">Walaupun PT LINTAS MARITIM JAYA relatif baru di dunia Pelayaran, namun manajemen merasa yakin akan kemampuan perusahaan karena besarnya dukungan finansial dan sumber daya manusia yang handal.</p>
										</div>
									</div>
								</li>
								<li class="appear-animation" data-appear-animation="fadeInUp">
                  <div class="thumb">
                    <div class="img-background-3">&nbsp;</div>
                    <h4 class="text-thumb text-color-light"><strong>2020</strong></h4>
									</div>
									<div class="featured-box">
										<div class="border-top-3 box-content">
											<h4 class="thumb-color-3"><strong>2020</strong></h4>
											<p class="justify">Atas dasar gagasan dan saran dari Bapak Wibowo maka pada awal tahun 2020 PT LINTAS MARITIM JAYA melakukan investasi untuk pembelian 1 set Kapal Tugboat dan Tongkang yang akan dioperasikan untuk pengangkutan komoditas Nikel di daerah Sulawesi Tenggara dan sekitarnya untuk melayani kebutuhan angkutan antara tambang dan smelter yang ada di wilayah Sulawesi.</p>
                      <p class="justify">Semakin bertumbuhnya kebutuhan armada pengangkutan nickel ore yang sangat besar di Sulawesi Tenggara dan ditunjang ukuran Tongkang yang memadai dan sumber daya manusia yang tangguh menjadikan setiap pengangkutan armada milik PT LINTAS MARITIM JAYA menjadi efektif dan efisien.</p>
										</div>
									</div>
								</li>
								<li class="appear-animation" data-appear-animation="fadeInUp">
                  <div class="thumb">
                    <div class="img-background-4">&nbsp;</div>
                    <h4 class="text-thumb text-color-light"><strong>2021</strong></h4>
									</div>
									<div class="featured-box">
										<div class="border-top-4 box-content">
											<h4 class="thumb-color-4"><strong>2021</strong></h4>
											<p class="justify">Dalam perkembangan usahanya PT LINTAS MARITIM JAYA tidak terlepas dari peran Bapak Wibowo yang mulai menjabat sebagai Komisaris Utama PT Lintas Maritim Perkasa sejak tahun 2021.</p>
                      <p class="justify">Sebagaimana diketahui pertumbuhan akan permintaan atas Komoditas Nikel seiring dengan transformasi banyak negara di dunia dalam kampanye Revolusi Hijau, Komoditas Nickel Ore menjadi salah satu komoditas pokok untuk menunjang menuju transformasi energi tersebut, yang digunakan komponen penting untuk baterai listrik, yang kemudian akan digunakan salah satunya untuk mobil listrik yang ramah lingkungan.</p>
                      <p class="justify">Bapak Wibowo yang jeli melihat peluang atas hal tersebut, dan melihat bahwa peta geografis wilayah Sulawesi, yang mana jarak antara tambang nikel menuju smelter lebih ekonomis menggunakan angkutan laut, sehingga PT. LINTAS MARITIM JAYA dalam bisnisnya lebih mengkonsentrasikan armadanya untuk melayani pengangkutan komoditas Nikel di wilayah perairan Sulawesi.</p>
										</div>
									</div>
								</li>
							</ul>
            </div>

            <div id="visi-misi" class="tab-pane">
              <p class="center m-none">
                <b>VISI</b>
              </p>

              <p class="justify" style="margin:10px 30px 0px 30px;">Untuk mewujudkan cita-cita dan harapan ketika didirikan PT LINTAS MARITIM JAYA mempunyai visi, misi dan nilai-nilai perusahaan yang senantiasa kami pegang teguh.</p>

              <hr>

              <p class="center m-none" style="padding:0px 0px 10px 0px;">
                <b>MISI</b>
              </p>
              <ul>
                <li>Bekerja untuk menciptakan masa depan yang lebih baik setiap hari.</li>
                <li>Menyediakan armada yang tangguh, terpelihara, tepat waktu, dan fokus pada efisiensi serta keselamatan.</li>
                <li>Senatiasa fokus pada kebutuhan dan kepuasan pelanggan melalui pelayanan yang berkualitas dan terus ditingkatkan untuk mencapai kepuasan pelanggan.</li>
              </ul>
            </div>



            <div id="nilai-nilai" class="tab-pane">
              <div class="panel-group panel-group-primary" id="accordion1">
								<div class="panel panel-default">
									<div class="bg-panel-1 panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne">
												INTEGRITAS
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="accordion-body collapse in">
										<div class="panel-body">
											<p>Bersikap jujur dan menunjukkan kepatuhan yang konsisten dan tanpa kompromi terhadap prinsip dan nilai moral dan etika yang kuat.</p>
										</div>
									</div>
								</div>
							</div>

              <div class="panel-group panel-group-primary" id="accordion2">
								<div class="panel panel-default">
									<div class="bg-panel-2 panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
												RESPEK
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="accordion-body collapse">
										<div class="panel-body">
											<p class="m-none">Berperilaku dan bertindak positif kepada setiap orang dan kebijakan yang dibuat oleh perusahaan.</p>
                      <p>Menghargai kualitas hasil kerja yang baik dan bernilai.</p>
										</div>
									</div>
								</div>
							</div>

              <div class="panel-group panel-group-primary" id="accordion3">
								<div class="panel panel-default">
									<div class="bg-panel-3 panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree">
												TANGGUNG JAWAB
											</a>
										</h4>
									</div>
									<div id="collapseThree" class="accordion-body collapse">
										<div class="panel-body">
											<p>Senantiasa menjunjung tinggi dan berkomitmen untuk melaksanakan apa yang menjadi kewajiban.</p>
										</div>
									</div>
								</div>
							</div>

              <div class="panel-group panel-group-primary" id="accordion4">
								<div class="panel panel-default">
									<div class="bg-panel-4 panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="#collapseFour">
												INNOVASI
											</a>
										</h4>
									</div>
									<div id="collapseFour" class="accordion-body collapse">
										<div class="panel-body">
											<p>Tidak pernah berhenti untuk menciptakan dan memperbaiki pelayanan, proses bisnis, dan sistem yang baru.</p>
										</div>
									</div>
								</div>
							</div>
            </div>

          </div>
        </div>
      </div>

    </div>

  </div>

</section>


<!-- section tentang kami -->
<!-- <section id="about-us" class="section section-no-border background-color-light m-none">
  <div class="container">
    <div class="row center">
      <div class="col-md-12">
        <h2>Tentang Kami</h2>
        <p class="custom-section-sub-title"><?=$aplikasi->nama_unit?></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="owl-carousel mb-none" data-plugin-options="{'items': 1, 'loop': false, 'dots': false, 'nav': false}">
          <div>
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
              <div class="testimonial testimonial-with-quotes testimonial-style-2 custom-testimonial-style-1 center mb-none">
                <p>
                  Didirikan pada tahun 2012 berdasarkan akta No. 54 Tanggal 12 Juni 2012 yang dibuat oleh Notaris Edison Jingga, SH di Jakarta. PT LINTAS MARITIM JAYA merupakan perusahaan pelayaran swasta nasional di bidang jasa penyewaan Tugboat dan Tongkang (Tug and Barge) untuk pengangkutan komoditas dan sumber daya alam di Indonesia yang secara geografis merupakan negara maritim.
                </p>

                <p>
                  Nama PT LINTAS MARITIM JAYA mengandung arti dan cita-cita menjadi perusahaan pelayaran yang tangguh dalam melintasi perairan nasional dan dapat terus berjaya di masa pertumbuhan yang berkelanjutan.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->


<!-- section visi dan misi -->
<!-- <section id="visi-misi" class="section section-no-border background-color-light-tb m-none">
  <div class="container">
    <div class="row center">
      <div class="col-md-12">
        <h2>Visi dan Misi</h2>
        <p class="custom-section-sub-title"><?=$aplikasi->nama_unit?></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="owl-carousel mb-none" data-plugin-options="{'items': 1, 'loop': false, 'dots': false, 'nav': false}">
          <div>
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
              <div class="testimonial testimonial-with-quotes testimonial-style-2 custom-testimonial-style-1 center mb-none">
                <p class="center m-none">
                  <b>Visi</b>
                </p>
                <p>
                   Untuk mewujudkan cita-cita dan harapan ketika didirikan PT LINTAS MARITIM JAYA mempunyai visi, misi dan nilai-nilai perusahaan yang senantiasa kami pegang teguh.
                </p>

                <p class="center m-none">
                  <b>Misi</b>
                </p>
                <ul style="text-align: left">
                  <li>Bekerja untuk menciptakan masa depan yang lebih baik setiap hari.</li>
                  <li>Menyediakan armada yang tangguh, terpelihara, tepat waktu, dan fokus pada efisiensi serta keselamatan.</li>
                  <li>Senatiasa fokus pada kebutuhan dan kepuasan pelanggan melalui pelayanan yang berkualitas dan terus ditingkatkan untuk mencapai kepuasan pelanggan.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->


<!-- section nilai nilai -->
<!-- <section id="nilai-nilai" class="section section-no-border background-color-light m-none">
  <div class="container">

    <div class="row center">
      <div class="col-md-12">
        <h2>Nilai-Nilai Perusahaan</h2>
        <p class="custom-section-sub-title"><?=$aplikasi->nama_unit?></p>
      </div>
    </div>

  </div>
</section> -->
