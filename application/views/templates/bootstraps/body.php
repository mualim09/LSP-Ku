
<div role="main" class="main">

  <div id="home" class="slider-container rev_slider_wrapper" style="height: 100vh;">
    <div id="revolutionSlider" class="slider manual rev_slider background-color-primary-dark">
      <ul>
        <li data-transition="fade">
          <!-- <img src="<?=base_url()?>assets/img/demos/one-page-agency/slides/slide-1.jpg"> -->
          <img src="<?=base_url()?>assets/img/slides/slider_1.jpg"
            alt=""
            data-bgposition="center center"
            data-bgfit="cover"
            data-bgrepeat="no-repeat"
            class="rev-slidebg">

          <h1 class="tp-caption text-color-primary font-weight-bold"
            data-x="['left','left','left','left']" data-hoffset="['0','0','30','85']"
            data-y="center" data-voffset="-55"
            data-start="500"
            data-fontsize="80"
            data-transform_in="y:[-300%];opacity:0;s:500;">PT LMJ</h1>

          <div class="tp-caption text-color-light"
            data-x="['left','left','left','left']" data-hoffset="['0','0','30','85']"
            data-y="['center','center','center','center']" data-voffset="['-10','-10','-10','0']"
            data-start="1500"
            data-fontsize="['18','18','18','25']"
            data-whitespace="nowrap"
            data-transform_in="y:[100%];s:500;"
            data-transform_out="opacity:0;s:500;"
            data-mask_in="x:0px;y:0px;">&nbsp;LINTAS MARITIM JAYA</div>

          <div class="tp-caption text-color-tb"
            data-x="['left','left','left','left']" data-hoffset="['0','0','30','85']"
            data-y="['center','center','center','center']" data-voffset="['15','15','15','35']"
            data-start="2000"
            data-fontsize="['12','12','12','19']"
            data-transform_in="y:[100%];opacity:0;s:500;">&nbsp;&nbsp;Akta No. 54 Tanggal 12 Juni 2012</div>

        </li>

        <li data-transition="fade">
          <img src="<?=base_url()?>assets/img/slides/slider_3.jpg"
            alt=""
            data-bgposition="center center"
            data-bgfit="cover"
            data-bgrepeat="no-repeat"
            class="rev-slidebg">

          <h1 class="tp-caption text-color-light font-weight-bold"
            data-x="['left','left','left','left']" data-hoffset="['0','0','30','85']"
            data-y="center" data-voffset="-55"
            data-start="500"
            data-fontsize="80"
            data-transform_in="y:[-300%];opacity:0;s:500;">PT LMJ</h1>

          <div class="tp-caption text-color-light"
            data-x="['left','left','left','left']" data-hoffset="['0','0','30','85']"
            data-y="['center','center','center','center']" data-voffset="['-10','-10','-10','0']"
            data-start="1500"
            data-fontsize="['18','18','18','25']"
            data-whitespace="nowrap"
            data-transform_in="y:[100%];s:500;"
            data-transform_out="opacity:0;s:500;"
            data-mask_in="x:0px;y:0px;">&nbsp;LINTAS MARITIM JAYA</div>

          <div class="tp-caption"
            data-x="['left','left','left','left']" data-hoffset="['0','0','30','85']"
            data-y="['center','center','center','center']" data-voffset="['15','15','15','35']"
            data-start="2000"
            data-fontsize="['12','12','12','19']"
            data-transform_in="y:[100%];opacity:0;s:500;">&nbsp;&nbsp;Akta No. 54 Tanggal 12 Juni 2012</div>

        </li>

      </ul>
    </div>
  </div>





  <!-- <section class="section parallax section-parallax section-no-border custom-z-index m-none" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="<?=base_url()?>assets/img/demos/one-page-agency/parallax/parallax-1.jpg"> -->
  <!-- <section class="section parallax section-parallax section-no-border custom-z-index m-none background-color-primary-dark" data-plugin-parallax data-plugin-options="{'speed': 1.5}">
    <div class="container">
      <div class="row">
        <div class="counters custom-counters">
          <div class="col-md-3 col-sm-6">
            <div class="counter">
              <i class="fa fa-users text-color-secondary"></i>
              <strong class="text-color-light" data-to="2" data-append="+">0</strong>
                <label>ARMADA</label>
              </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="counter">
              <i class="fa fa-tv text-color-secondary"></i>
              <strong class="text-color-light" data-to="14" data-append="+">0</strong>
                <label>PELANGGAN</label>
              </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="counter">
              <i class="fa fa-support text-color-secondary"></i>
              <strong class="text-color-light" data-to="3500" data-append="+">0</strong>
                <label>ANSWERED TICKETS</label>
              </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="counter">
              <i class="fa fa-clock-o text-color-secondary"></i>
              <strong class="text-color-light" data-to="3000" data-append="+">0</strong>
                <label>DEVELOPMENT HOURS</label>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <?=$this->load->view('templates/bootstraps/profil'); ?>

  <?=$this->load->view('templates/bootstraps/pengurus'); ?>

  <?=$this->load->view('templates/bootstraps/armada'); ?>

  <?=$this->load->view('templates/bootstraps/pelanggan'); ?>


  <?php
    // $this->load->view('templates/bootstraps/galeri');
  ?>


  <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
  <!-- <div id="googlemaps" class="google-map background-color-light m-none custom-contact-pos"></div> -->

  <div id="kontak" class="google-map background-color-light m-none custom-contact-pos">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.046565102942!2d106.74738881432283!3d-6.124435995565465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1d69a432fcbd%3A0x36926e394ba93111!2sLintas%20Maritim%20Jaya!5e0!3m2!1sid!2sid!4v1664469368150!5m2!1sid!2sid" allowfullscreen=""></iframe>
  </div>

  <!-- section kontak kami -->
  <section class="section section-no-border m-none p-none">
    <div class="container">
      <div class="row">
        <div class="form_kontak col-md-5 col-sm-6 custom-contact-box custom-contact-pos background-color-quaternary">
          <h2 class="text-color-light">Kontak Kami</h2>
          <div class="feature-box feature-box-style-2 custom-feature-box-style-2 mb-lg">
            <div class="feature-box-icon">
              <i class="icon-call-in icons text-color-secondary"></i>
            </div>
            <div class="feature-box-info">
              <h6 class="mb-none text-sm">Telp</h6>
              <a href="tel:<?=$aplikasi->no_telpon?>" class="text-color-light text-decoration-none"><?=$aplikasi->no_telpon?></a>
            </div>
          </div>
          <div class="feature-box feature-box-style-2 custom-feature-box-style-2 mb-xlg">
            <div class="feature-box-icon">
              <i class="icon-location-pin icons text-color-secondary"></i>
            </div>
            <div class="feature-box-info">
              <h6 class="mb-none text-sm">Alamat</h6>
              <p class="tall text-color-light"><?=$aplikasi->alamat?></p>
            </div>
          </div>

          <h5 class="text-color-light">Kirim Pesan</h5>
          <form id="contactForm" class="custom-contact-form-style-1" action="<?=base_url()?>" method="POST">
            <div class="alert alert-success hidden mt-lg" id="contactSuccess">
              <strong>Success!</strong> Your message has been sent to us.
            </div>

            <div class="alert alert-danger hidden mt-lg" id="contactError">
              <strong>Error!</strong> There was an error sending your message.
              <span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
            </div>
            <div class="row">
              <div class="form-group _divider">
                <div class="col-md-6 col-sm-6">
                  <input type="text" value=""  maxlength="100" class="form-control" name="name" id="name" placeholder="NAMA" required>
                </div>
                <div class="col-md-6 col-sm-6">
                  <input type="text" value="" maxlength="100" class="form-control" name="phone" id="phone" placeholder="TELEPHONE" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group">
                <div class="col-md-12">
                  <input type="email" value="" maxlength="100" class="form-control" name="email" id="email" placeholder="EMAIL" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group">
                <div class="col-md-12">
                  <textarea maxlength="5000" rows="7" class="form-control" name="message" id="message" placeholder="PESAN" required></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <input type="submit" value="KIRIM" class="btn btn-primary custom-btn-style-2 text-color-light custom-margin-1 pull-right" data-loading-text="Loading...">
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>

</div>
