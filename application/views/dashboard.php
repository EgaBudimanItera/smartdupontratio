
<!-- BEGIN PAGE -->
<div id="main-content">
  <!-- BEGIN PAGE CONTAINER-->
  <div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
      <div class="span12">
                    
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
          Dashboard
        </h3>
        <ul class="breadcrumb">
          <li>
              <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
          </li>
          <li><a href="#">Dashboard</a><span class="divider-last">&nbsp;</span></li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
      </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div id="page" class="dashboard">                                    
                                   
      <div class="row-fluid">
        <div class="span12">
          <!-- BEGIN SITE VISITS PORTLET-->
          <div class="widget">
            <div class="widget-title">
              <h4><i class="icon-folder-close"></i> Data</h4>
              <span class="tools">
              <a href="javascript:;" class="icon-chevron-down"></a>
              <a href="javascript:;" class="icon-remove"></a>
              </span>
            </div>
            <div class="widget-body">
              <div class="row-fluid metro-overview-cont">
                <div data-desktop="span2" data-tablet="span4" class="responsive span4">
                  <div class="metro-overview turquoise-color clearfix">
                    <div class="display">
                      <i class="icon-group"></i>
                      <div class="percent"></div>
                    </div> 
                    <div class="details">
                      <div class="numbers"><?=$perusahaan?></div>
                      <div class="title">Perusahaan</div>
                    </div>
                  </div>   
                </div>  
                
                <div data-desktop="span2" data-tablet="span4" class="responsive span4">
                  <div class="metro-overview green-color clearfix">
                    <div class="display">
                      <i class="icon-book"></i>
                      <div class="percent"></div>
                    </div> 
                    <div class="details">
                      <div class="numbers"><?=$lk?></div>
                      <div class="title">Laporan Keuangan</div>
                    </div>
                  </div>   
                </div>  

                <div data-desktop="span2" data-tablet="span4" class="responsive span4">
                  <div class="metro-overview red-color clearfix">
                    <div class="display">
                      <i class="icon-book"></i>
                      <div class="percent"></div>
                    </div> 
                    <div class="details">
                      <div class="numbers"><?=$jum?></div>
                      <div class="title">Rasio Dupont</div>
                    </div>
                  </div>   
                </div>  

              </div>
              <img src="<?=base_url()?>assets/modeldupont.jpg">
              <br>
              <br>
              <p>
                Menurut (Harahap, 2004) Du Pont System merupakan suatu sistem analisis laporan keuangan yang memiliki cara sendiri dalam menganalisis laporan keuangannya. Cara sebenarnya hampir sama dengan analisis laporan keuangan biasa, namun pendekatan lebih integratif dan menggunakan komposisi laporan keuangan sebagai elemen analisisnya dengan mengurai pos-pos laporan keuangan sampai mendetail.</p>
              <p>
                Menurut (Arifin, 2004) Metode Du Pont merupakan suatu sistem analisis laporan keuangan secara integratif yang terkenal dengan metode Du Pont. Metode ini menggabung rasio aktivitas dan marjin laba terhadap penjualan, dan menunjukkan interaksi rasio-rasio dalam menentukan profitabilitas. Du Pont mengurai hubungan pos-pos laporan keuangan.
              </p>
              <p>
                Menurut Lemiyana (2015) Du Pont System adalah suatu sistem analisis yang dimaksudkan untuk menunjukkan hubungan antara return on investment, assets turn over dan profit margin. Return on investment (ROI) adalah rasio keuntungan neto sesudah pajak dengan jumlah investasi sehingga dalam Du Pont diperhitungkan juga bunga dan pajak.

              </p>
              <p>
                Tahap-tahap Dalam Melakukan Analisis Du Pont System
              </p>
              <p>
                Du Pont menganggap penting angka Return on Investment (ROI) sehingga ia memulai analisisnya dari angka ini. ROI di hitung dari dua komponen:
                <br><center><img src="<?=base_url()?>assets/imgdupo/1.jpg" style="width: 600px; height: 90px"></center>
              </p>
              <p>
                Persentase laba bersih diambil dari laporan laba/rugi sedangkan Aset turnover diambil dari Neraca. Di sini tampak sekali Du pont ingin menganalisis laporan keuangan secara integratif (terpadu). Perhitungan komponen tersebut adalah sebagai berikut:
              </p>
              <p>
                Persentase laba bersih dihitung dari:
                <br><center><img src="<?=base_url()?>assets/imgdupo/2.jpg" style="width: 600px; height: 90px"></center>
              </p>
              <p>
                Sedangkan Laba setelah pajak dihitung dari:
                <br><center><img src="<?=base_url()?>assets/imgdupo/3.jpg" style="width: 600px; height: 90px"></center>
              </p>
              <p>
                Penguraian pos-pos seperti ini akan dapat lebih memahami sumber dari rasio-rasio yang dihitung.
              </p>
               <p>
                Aset Turnover dihitung sebagai berikut:
                <br><center><img src="<?=base_url()?>assets/imgdupo/4.jpg" style="width: 600px; height: 90px"></center>
              </p>
              <p>
                Total Aset dihitung dari:
                <br><center><img src="<?=base_url()?>assets/imgdupo/5.jpg" style="width: 600px; height: 90px"></center>
              </p>
              <p>
                Aktiva lancar terdiri dari:
                <br><center><img src="<?=base_url()?>assets/imgdupo/6.jpg" style="width: 600px; height: 90px"></center>
              </p>
              <p>
                Penguraian komponen laporan keuangan menjadi komponen kecil sampai pada pos-pos individual akan membantu memberikan gambaran lebih lengkap bagi analis.
              </p>
            </div>
          </div>
          <!-- END SITE VISITS PORTLET-->
        </div>
      </div>                    
    </div>
    <!-- END PAGE CONTENT-->
  </div>
  <!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->
  


