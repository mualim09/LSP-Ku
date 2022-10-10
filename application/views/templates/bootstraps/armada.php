
<style media="screen">
  @media screen and (min-width: 991px) and (max-width: 1200px) {
    .responsive-center{
      margin-left: 200px!important;
    }
  }

  @media screen and (min-width: 1200px) and (max-width: 1299px) {
    .responsive-center{
      margin-left: 270px!important;
    }
  }

  @media screen and (min-width: 1300px) {
    .responsive-center{
      margin-left: 275px!important;
    }
  }
</style>

<section id="fleets" class="section section-no-border background-color-primary m-none">
  <div class="container">
    <div class="row center">
      <div class="col-md-12">
        <h2 class="text-color-light">Operasional dan Armada</h2>
        <p class="text-color-light"><?=$aplikasi->nama_unit?></p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 responsive-center">
        <div class="owl-carousel custom-arrows-style-1 custom-nav-pos-1 mb-none" data-plugin-options="{'items': 2, 'margin': 55, 'loop': false , 'dots': true, 'nav': true, 'stagePadding': 40}">

          <div class="center">
            <span class="box-shdw-tb thumb-info custom-thumb-info-style-2">
              <span class="thumb-info-wrapper m-none">
                <a href="#fleets-1" class="popup-with-zoom-anim text-decoration-none" title="Tugboat KSD 20">
                  <img src="<?=base_url()?>assets/img/armada/tongkang.png" class="img-responsive" alt="" style="filter: brightness(120%);">
                </a>
              </span>
              <span class="thumb-info-caption background-color-tertiary center p-md">
                <h4>
                  <a href="#fleets-1" class="popup-with-zoom-anim text-decoration-none text-color-dark" title="TUGBOAT">
                    TUGBOAT
                  </a>
                </h4>
                <p class="font-weight-semibold custom-thumb-info-category">KSD 20</p>
              </span>
            </span>

            <div id="fleets-1" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-xlg">
              <div class="row">
                <div class="col-md-4 col-sm-4">
                  <img src="<?=base_url()?>assets/img/armada/tongkang.png" class="img-responsive mb-lg mt-xlg" alt="" style="filter: brightness(120%);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                </div>
                <div class="col-md-8 col-sm-8">
                  <h2 class="font-weight-semibold text-color-primary">Tugboat KSD 20</h2>
                  <!-- <p>Tahun pembuatan 2012</p> -->

                  <table class="table mt-xlg">
                    <tr>
                      <th class="font-size-sm" width="50%" style="padding:8px 0 8px 0;">TAHUN PEMBUATAN</th>
                      <th class="font-size-sm" style="padding:8px 0 8px 0">: 2012</th>
                    </tr>

                    <tr>
                      <th class="font-size-sm" width="50%" style="padding:8px 0 8px 0;">TEMPAT PEMBUATAN</th>
                      <th class="font-size-sm" style="padding:8px 0 8px 0">: BATAM</th>
                    </tr>

                    <tr>
                      <th class="font-size-sm" width="50%" style="padding:8px 0 8px 0;">TEMPAT PENDAFTARAN</th>
                      <th class="font-size-sm" style="padding:8px 0 8px 0">: BATAM</th>
                    </tr>
                  </table>

                  <table class="table m-none">
                    <tr>
                      <th class="font-size-sm" style="padding:8px 0 8px 0;">SPESIFIKASI KAPAL</th>
                    </tr>
                  </table>

                  <table class="table">
                    <thead class="thead-light">
                      <tr class="background-color-primary text-color-light">
                        <th colspan="2">Ukuran</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td width="50%">Panjang</td>
                        <td>: 22,06 M</td>
                      </tr>
                      <tr>
                        <td>Lebar</td>
                        <td>: 8,6 M</td>
                      </tr>
                      <tr>
                        <td>Dalam</td>
                        <td>: 4,3 M</td>
                      </tr>
                    </tbody>
                  </table>

                  <table class="table table-striped">
                    <thead class="thead-light">
                      <tr class="background-color-primary text-color-light">
                        <th colspan="2">Kapasitas</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td width="50%">Tonase Kotor (GT)</td>
                        <td>: 279</td>
                      </tr>
                      <tr>
                        <td>Tonase Bersih (NT)</td>
                        <td>: 84</td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
          </div>


          <div class="center">
            <span class="box-shdw-tb thumb-info custom-thumb-info-style-2">
              <span class="thumb-info-wrapper m-none">
                <a href="#fleets-2" class="popup-with-zoom-anim text-decoration-none" title="Tongkang KSD 23">
                  <img src="<?=base_url()?>assets/img/armada/tugboat.png" class="img-responsive" alt="" style="filter: brightness(200%);">
                </a>
              </span>
              <span class="thumb-info-caption background-color-tertiary center p-md">
                <h4>
                  <a href="#fleets-2" class="popup-with-zoom-anim text-decoration-none text-color-dark" title="TONGKANG">
                    TONGKANG
                  </a>
                </h4>
                <p class="font-weight-semibold custom-thumb-info-category">KSD 23</p>
              </span>
            </span>

            <div id="fleets-2" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-xlg">
              <div class="row">
                <div class="col-md-4 col-sm-4">
                  <img src="<?=base_url()?>assets/img/armada/tugboat.png" class="img-responsive mb-lg mt-xlg" alt="" style="filter: brightness(200%);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                </div>

                <div class="col-md-8 col-sm-8">
                  <h2 class="font-weight-semibold text-color-primary">Tongkang KSD 23</h2>
                  <!-- <p class="">Tahun pembuatan 2006</p> -->

                  <table class="table mt-xlg">
                    <tr>
                      <th class="font-size-sm" width="50%" style="padding:8px 0 8px 0;">TAHUN PEMBUATAN</th>
                      <th class="font-size-sm" style="padding:8px 0 8px 0">: 2006</th>
                    </tr>

                    <tr>
                      <th class="font-size-sm" width="50%" style="padding:8px 0 8px 0;">TEMPAT PEMBUATAN</th>
                      <th class="font-size-sm" style="padding:8px 0 8px 0">: SINGAPURA</th>
                    </tr>

                    <tr>
                      <th class="font-size-sm" width="50%" style="padding:8px 0 8px 0;">TEMPAT PENDAFTARAN</th>
                      <th class="font-size-sm" style="padding:8px 0 8px 0">: BATAM</th>
                    </tr>
                  </table>

                  <table class="table m-none">
                    <tr>
                      <th class="font-size-sm" style="padding:8px 0 8px 0;">SPESIFIKASI KAPAL</th>
                    </tr>
                  </table>

                  <table class="table table-striped">
                    <thead class="thead-light">
                      <tr class="background-color-primary text-color-light">
                        <th colspan="2">Ukuran</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td width="50%">Panjang</td>
                        <td>: 100,95 M</td>
                      </tr>
                      <tr>
                        <td>Lebar</td>
                        <td>: 27,43 M</td>
                      </tr>
                      <tr>
                        <td>Dalam</td>
                        <td>: 6,40 M</td>
                      </tr>
                    </tbody>
                  </table>

                  <table class="table table-striped">
                    <thead class="thead-light">
                      <tr class="background-color-primary text-color-light">
                        <th colspan="2">Kapasitas</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td width="50%">Tonase Kotor (GT)</td>
                        <td>: 4.370</td>
                      </tr>
                      <tr>
                        <td>Tonase Bersih (NT)</td>
                        <td>: 1311</td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
