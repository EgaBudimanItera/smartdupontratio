
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
              <img src="<?=base_url()?>assets/11.jpg">
              <br><br>
              <img src="<?=base_url()?>assets/12.jpg">
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
  


