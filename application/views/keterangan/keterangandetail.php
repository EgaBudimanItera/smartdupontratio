
<!-- BEGIN PAGE -->
<div id="main-content">
  <!-- BEGIN PAGE CONTAINER-->
  <div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
      <div class="span12">
                    
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
          Data Keterangan Distribusi Tahun <?=$tahun?>
        </h3>
        <ul class="breadcrumb">
          <li>
              <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
          </li>
          <li><a href="#">Keterangan Distribusi</a><span class="divider-last">&nbsp;</span></li>
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
                    <th class="hidden-phone">Keterangan</th>
                    <th class="hidden-phone">Nilai 1</th>
                    <th class="hidden-phone">Nilai 2</th>
                    <th class="hidden-phone">Aksi</th>
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
                    <td><?=$l->ket?></td>
                    <td><?=number_format($l->n1,4,',','.')?></td>
                    <td><?=number_format($l->n2,4,',','.')?></td>
                    <td>
                      <a data-toggle="tooltip" data-placement="bottom" title="Edit Keterangan" class="btn btn-xs btn-warning" href="<?=base_url()?>keterangan/editket/<?=$l->idperiodehitung?>/<?=$l->tahun?>/<?=$l->id?>">
                        <i class="icon-pencil"></i>                
                      </a>
                    </td>
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
                    <th class="hidden-phone">Keterangan</th>
                    <th class="hidden-phone">Nilai 1</th>
                    <th class="hidden-phone">Nilai 2</th>
                    <th class="hidden-phone">Aksi</th>
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
                    <td><?=$l->ket?></td>
                    <td><?=number_format($l->n1,4,',','.')?></td>
                    <td><?=number_format($l->n2,4,',','.')?></td>
                    <td>
                      <a data-toggle="tooltip" data-placement="bottom" title="Edit Keterangan" class="btn btn-xs btn-warning" href="<?=base_url()?>keterangan/editket/<?=$l->idperiodehitung?>/<?=$l->tahun?>/<?=$l->id?>">
                        <i class="icon-pencil"></i>                
                      </a>
                    </td>
                  </tr>
                  <?php
                    }
                  ?>
                </tbody>
              </table>
            </div>
            <div class="row-fluid">
        <div class="span12">
          <!-- BEGIN EXAMPLE TABLE widget-->
          <div class="widget">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i>Return On Investment</h4>
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
                    <th class="hidden-phone">Keterangan</th>
                    <th class="hidden-phone">Nilai 1</th>
                    <th class="hidden-phone">Nilai 2</th>
                    <th class="hidden-phone">Aksi</th>
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
                    <td><?=$l->ket?></td>
                    <td><?=number_format($l->n1,4,',','.')?></td>
                    <td><?=number_format($l->n2,4,',','.')?></td>
                    <td>
                      <a data-toggle="tooltip" data-placement="bottom" title="Edit Keterangan" class="btn btn-xs btn-warning" href="<?=base_url()?>keterangan/editket/<?=$l->idperiodehitung?>/<?=$l->tahun?>/<?=$l->id?>">
                        <i class="icon-pencil"></i>                
                      </a>
                    </td>
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
  


