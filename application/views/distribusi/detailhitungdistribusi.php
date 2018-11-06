
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
     <!--  <?php var_dump($la)?> -->
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
                  <?php
                    $no=1;
                    foreach($listnpm as $l){
                  ?>
                  <tr>
                    <td><?=$no++?></td>
                    <td><?=$l->tahun?></td>
                    <td><?=$l->namaperusahaan?></td>
                    <td><?=number_format($l->persenlababersih,4,',','.')?></td>
                  </tr>
                  <?php
                    }
                  ?>
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
                  <?php
                    $no=1;
                    foreach($listtato as $l){
                  ?>
                  <tr>
                    <td><?=$no++?></td>
                    <td><?=$l->tahun?></td>
                    <td><?=$l->namaperusahaan?></td>
                    <td><?=number_format($l->tato,4,',','.')?></td>
                  </tr>
                  <?php
                    }
                  ?> 
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
                  <?php
                    $no=1;
                    foreach($listroi as $l){
                  ?>
                  <tr>
                    <td><?=$no++?></td>
                    <td><?=$l->tahun?></td>
                    <td><?=$l->namaperusahaan?></td>
                    <td><?=number_format($l->roi,4,',','.')?></td>
                  </tr>
                  <?php
                    }
                  ?> 
                </tbody>
              </table>
            </div>
          </div>
          <!-- END EXAMPLE TABLE widget-->
        </div>
      </div>  
      <form action="<?=base_url()?>distribusi/simpandetail" role="form" method="post" class="form-horizontal">
      <div class="row-fluid">
        <div class="span4">
          <!-- BEGIN EXAMPLE TABLE widget-->
          <div class="widget">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i>Distribusi NPM</h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
              <div class="control-group primary">
                <label class="control-label" for="inputWarning" >Jumlah Perusahaan</label>
                <div class="controls">
                   <input type="text" class="span12" readonly value="<?=$jumlahperusahaan?>" name="jumlahperusahaannpm" />
                   <input type="hidden" class="span12" readonly value="<?=$id?>" name="idperiode" />
                   <input type="hidden" class="span12" readonly value="<?=$tahun?>" name="tahun" />
                   <p class="help-block"></p>
                </div>
              </div>  

              <div class="control-group primary">
                <label class="control-label" for="inputWarning" >nilai k NPM</label>
                <div class="controls">
                  <input type="text" class="span12" readonly value="<?=$la['k']?>" name="knpm" />
                </div>
                
              </div>  
              <div class="control-group primary">
                <label class="control-label" for="inputWarning" >Nilai Tertinggi NPM</label>
                <div class="controls">
                  <input type="text" class="span12" readonly value="<?=number_format($la['n2npm'],4,',','.')?>" name="n2npm" />
                </div>
                
              </div>  
              <div class="control-group primary">
                <label class="control-label" for="inputWarning" >Nilai Terendah NPM</label>
                <div class="controls">
                  <input type="text" class="span12" readonly value="<?=number_format($la['n1npm'],4,',','.')?>" name="n1npm" />
                </div>
              </div>  
              <div class="control-group primary">
                <label class="control-label" for="inputWarning" >Wilayah NPM</label>
                <div class="controls">
                  <input type="text" class="span12" readonly value="<?=number_format($la['rnpm'],4,',','.')?>" name="rnpm" />
                </div>
              </div> 
              <div class="control-group primary">
                <label class="control-label" for="inputWarning" >Nilai c NPM</label>
                <div class="controls">
                  <input type="text" class="span12" readonly value="<?=number_format($la['cnpm'],4,',','.')?>" name="cnpm" />
                </div>
              </div>
              <div class="form-actions">
                  
              </div>  
            </div>
          </div>
          <!-- END EXAMPLE TABLE widget-->
        </div>
        <div class="span4">
          <!-- BEGIN EXAMPLE TABLE widget-->
          <div class="widget">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i>Distribusi TATO</h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
              <div class="control-group primary">
                <label class="control-label" for="inputWarning" >Jumlah Perusahaan</label>
                <div class="controls">
                   <input type="text" class="span12" readonly value="<?=$jumlahperusahaan?>" name="jumlahperusahaantato" />
                   <p class="help-block"></p>
                </div>
              </div> 
              <div class="control-group primary">
                <label class="control-label" for="inputWarning" >Nilai k TATO</label>
                <div class="controls">
                  <input type="text" class="span12" readonly value="<?=$la['k']?>" name="ktato" />
                </div>
                
              </div>   
              <div class="control-group primary">
                <label class="control-label" for="inputWarning" >Nilai Tertinggi TATO</label>
                <div class="controls">
                  <input type="text" class="span12" readonly value="<?=number_format($la['n2tato'],4,',','.')?>" name="n2tato" />
                </div>
                
              </div>  
              <div class="control-group primary">
                <label class="control-label" for="inputWarning" >Nilai Terendah TATO</label>
                <div class="controls">
                  <input type="text" class="span12" readonly value="<?=number_format($la['n1tato'],4,',','.')?>" name="n1tato" />
                </div>
              </div>  
              <div class="control-group primary">
                <label class="control-label" for="inputWarning" >Wilayah TATO</label>
                <div class="controls">
                  <input type="text" class="span12" readonly value="<?=number_format($la['rtato'],4,',','.')?>" name="rtato" />
                </div>
              </div> 
              <div class="control-group primary">
                <label class="control-label" for="inputWarning" >Nilai c TATO</label>
                <div class="controls">
                  <input type="text" class="span12" readonly value="<?=number_format($la['ctato'],4,',','.')?>" name="ctato" />
                </div>
              </div> 
              <div class="form-actions">
                  
              </div> 
            </div>
          </div>
          <!-- END EXAMPLE TABLE widget-->
        </div>
        <div class="span4">
          <!-- BEGIN EXAMPLE TABLE widget-->
          <div class="widget">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i>Distribusi ROI</h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
              <div class="control-group primary">
                <label class="control-label" for="inputWarning" >Jumlah Perusahaan</label>
                <div class="controls">
                   <input type="text" class="span12" readonly value="<?=$jumlahperusahaan?>" name="jumlahperusahaanroi" />
                   <p class="help-block"></p>
                </div>
              </div>  
              <div class="control-group primary">
                <label class="control-label" for="inputWarning" >Nilai k ROI</label>
                <div class="controls">
                  <input type="text" class="span12" readonly value="<?=$la['k']?>" name="kroi" />
                </div>
                
              </div>
              <div class="control-group primary">
                <label class="control-label" for="inputWarning" >Nilai Tertinggi ROI</label>
                <div class="controls">
                  <input type="text" class="span12" readonly value="<?=number_format($la['n2roi'],4,',','.')?>" name="n2roi" />
                </div>
                
              </div>  
              <div class="control-group primary">
                <label class="control-label" for="inputWarning" >Nilai Terendah ROI</label>
                <div class="controls">
                  <input type="text" class="span12" readonly value="<?=number_format($la['n1roi'],4,',','.')?>" name="n1roi" />
                </div>
              </div>  
              <div class="control-group primary">
                <label class="control-label" for="inputWarning" >Wilayah ROI</label>
                <div class="controls">
                  <input type="text" class="span12" readonly value="<?=number_format($la['rroi'],4,',','.')?>" name="rroi" />
                </div>
              </div> 
              <div class="control-group primary">
                <label class="control-label" for="inputWarning" >Nilai c ROI</label>
                <div class="controls">
                  <input type="text" class="span12" readonly value="<?=number_format($la['croi'],4,',','.')?>" name="croi" />
                </div>
              </div>
              <div class="form-actions">
                 
                  
              </div> 
            </div>
          </div>
          <!-- END EXAMPLE TABLE widget-->
        </div>
      </div>    
     
      </form>              
    </div>
    <!-- END PAGE CONTENT-->
  </div>
  <!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->
  


