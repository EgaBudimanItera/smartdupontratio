
<!-- BEGIN PAGE -->
<div id="main-content">
  <!-- BEGIN PAGE CONTAINER-->
  <div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
      <div class="span12">
                    
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
          Data Hitung Distribusi Tahun <?=$tahun?>
        </h3>
        <ul class="breadcrumb">
          <li>
              <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
          </li>
          <li><a href="#">Hitung Distribusi</a><span class="divider-last">&nbsp;</span></li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
      </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div id="page" class="dashboard">                                                              
      
      <div class="row-fluid">
        <div class="span12">
          <!-- BEGIN EXAMPLE TABLE widget-->
          <div class="widget">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i>Net Profit Margin</h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
           
              <table class="table table-striped table-bordered" >
                <thead>
                  <tr>
                    <th class="hidden-phone">No</th>
                    <th class="hidden-phone">Tahun</th>
                    <th class="hidden-phone">Nama Perusahaan</th>
                    <th class="hidden-phone">Rasio</th>
                  </tr>
                </thead>
                
                <tbody>
                 
                </tbody>
              </table>
            </div>
          </div>
          <!-- END EXAMPLE TABLE widget-->
        </div>
      </div> 
      <div class="row-fluid">
        <div class="span12">
          <!-- BEGIN EXAMPLE TABLE widget-->
          <div class="widget">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i>Total Asset Turnover </h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
            
              <table class="table table-striped table-bordered" >
                <thead>
                  <tr>
                   <th class="hidden-phone">No</th>
                    <th class="hidden-phone">Tahun</th>
                    <th class="hidden-phone">Nama Perusahaan</th>
                    <th class="hidden-phone">Rasio</th>
                  </tr>
                </thead>
                
                <tbody>
                 
                </tbody>
              </table>
            </div>
          </div>
          <!-- END EXAMPLE TABLE widget-->
        </div>
      </div>  
      <div class="row-fluid">
        <div class="span12">
          <!-- BEGIN EXAMPLE TABLE widget-->
          <div class="widget">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i>Return on Investment (ROI)</h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
             <div id="info-alert"><?=@$this->session->flashdata('msg')?></div>
              <table class="table table-striped table-bordered" >
                <thead>
                  <tr>
                    <th class="hidden-phone">No</th>
                    <th class="hidden-phone">Tahun</th>
                    <th class="hidden-phone">Nama Perusahaan</th>
                    <th class="hidden-phone">Rasio</th>
                  </tr>
                </thead>
                
                <tbody>
                 
                </tbody>
              </table>
            </div>
          </div>
          <!-- END EXAMPLE TABLE widget-->
        </div>
      </div>  
      <div class="row-fluid">
        <div class="span6">
          <!-- BEGIN EXAMPLE TABLE widget-->
          <div class="widget">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i>Data</h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
              
              <div class="control-group primary">
                <label class="control-label" for="inputWarning" >Jumlah Perusahaan</label>
                <div class="controls">
                   <input type="text" class="span12" readonly name="jumlahperusahaan" />
                   <p class="help-block"></p>
                </div>
              </div>  
              <div class="control-group primary">
                <label class="control-label" for="inputWarning" >Nilai Tertinggi</label>
                <div class="controls">
                  <input type="text" class="span12" readonly name="n1npm" />
                  <p class="help-block">NPM</p>   
                  <input type="text" class="span12" readonly name="n1npm" />
                  <p class="help-block">TATO</p>
                  <input type="text" class="span12" readonly name="n1npm" />
                  <p class="help-block">ROI</p>
                </div>
                
              </div>  
              <div class="control-group primary">
                <label class="control-label" for="inputWarning" >Nilai Terendah</label>
                <div class="controls">
                  <input type="text" class="span12" readonly name="n1npm" />
                  <p class="help-block">NPM</p>   
                  <input type="text" class="span12" readonly name="n1npm" />
                  <p class="help-block">TATO</p>
                  <input type="text" class="span12" readonly name="n1npm" />
                  <p class="help-block">ROI</p>
                </div>
                
              </div>  
             
            </div>
          </div>
          <!-- END EXAMPLE TABLE widget-->
        </div>
        <div class="span6">
          <!-- BEGIN EXAMPLE TABLE widget-->
          <div class="widget">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i>Data</h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
              
              <div class="control-group primary">
                <label class="control-label" for="inputWarning" >Jumlah Perusahaan</label>
                <div class="controls">
                   <input type="text" class="span12" readonly name="jumlahperusahaan" />
                   <p class="help-block"></p>
                </div>
              </div>  
              <div class="control-group primary">
                <label class="control-label" for="inputWarning" >Nilai Tertinggi</label>
                <div class="controls">
                  <input type="text" class="span12" readonly name="n1npm" />
                  <p class="help-block">NPM</p>   
                  <input type="text" class="span12" readonly name="n1npm" />
                  <p class="help-block">TATO</p>
                  <input type="text" class="span12" readonly name="n1npm" />
                  <p class="help-block">ROI</p>
                </div>
                
              </div>  
              <div class="control-group primary">
                <label class="control-label" for="inputWarning" >Nilai Terendah</label>
                <div class="controls">
                  <input type="text" class="span12" readonly name="n1npm" />
                  <p class="help-block">NPM</p>   
                  <input type="text" class="span12" readonly name="n1npm" />
                  <p class="help-block">TATO</p>
                  <input type="text" class="span12" readonly name="n1npm" />
                  <p class="help-block">ROI</p>
                </div>
                
              </div>  
             
            </div>
          </div>
          <!-- END EXAMPLE TABLE widget-->
        </div>
      </div>              
    </div>
    <!-- END PAGE CONTENT-->
  </div>
  <!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->
  


