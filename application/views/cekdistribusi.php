
<!-- BEGIN PAGE -->
<div id="main-content">
  <!-- BEGIN PAGE CONTAINER-->
  <div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
      <div class="span12">
                    
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
          Data Periode Distribusi
        </h3>
        <ul class="breadcrumb">
          <li>
              <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
          </li>
          <li><a href="#">Periode Distribusi</a><span class="divider-last">&nbsp;</span></li>
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
                <h4><i class="icon-reorder"></i>Data Rasio NPM</h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
              <table class="table table-striped table-bordered" id="sample_1">
                <thead>
                  <tr>
                    <th class="hidden-phone">No</th>
                    <th class="hidden-phone">Tahun</th>
                    <th class="hidden-phone">Nama Perusahaan</th>
                    <th class="hidden-phone">Rasio</th>
                    <th class="hidden-phone">NPM</th>
                    <th class="hidden-phone">Keterangan Distribusi</th>
                   
                  </tr>
                </thead>
                
                <tbody>
                 <?php
                    $no = 1;
                    foreach ($npm as $l) {
                  ?>
                  <tr>
                    <td><?=$no++?>.</td>
                    <td><?=$l->tahun?></td>
                    <td><?=$l->namaperusahaan?></td>
                    <td>Net Profit Margin</td>
                     <td><?=$l->persenlababersih?></td>
                    <td><?=$l->keterangan?></td>
                    
                  </tr>
                  <?php } ?>
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
                <h4><i class="icon-reorder"></i>Data Rasio TATO</h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
              <table class="table table-striped table-bordered" id="sample_1">
                <thead>
                  <tr>
                    <th class="hidden-phone">No</th>
                    <th class="hidden-phone">Tahun</th>
                    <th class="hidden-phone">Nama Perusahaan</th>
                    <th class="hidden-phone">Rasio</th>
                    <th class="hidden-phone">TATO</th>
                    <th class="hidden-phone">Keterangan Distribusi</th>
                   
                  </tr>
                </thead>
                
                <tbody>
                 <?php
                    $no = 1;
                    foreach ($tato as $l) {
                  ?>
                  <tr>
                    <td><?=$no++?>.</td>
                    <td><?=$l->tahun?></td>
                    <td><?=$l->namaperusahaan?></td>
                    <td>Total Asset Turnover (TATO)</td>
                     <td><?=$l->tato?></td>
                    <td><?=$l->keterangan?></td>
                    
                  </tr>
                  <?php } ?>
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
                <h4><i class="icon-reorder"></i>Data Rasio TATO</h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
              <table class="table table-striped table-bordered" id="sample_1">
                <thead>
                  <tr>
                    <th class="hidden-phone">No</th>
                    <th class="hidden-phone">Tahun</th>
                    <th class="hidden-phone">Nama Perusahaan</th>
                    <th class="hidden-phone">Rasio</th>
                    <th class="hidden-phone">roi</th>
                    <th class="hidden-phone">Keterangan Distribusi</th>
                   
                  </tr>
                </thead>
                
                <tbody>
                 <?php
                    $no = 1;
                    foreach ($roi as $l) {
                  ?>
                  <tr>
                    <td><?=$no++?>.</td>
                    <td><?=$l->tahun?></td>
                    <td><?=$l->namaperusahaan?></td>
                    <td>Return On Investmen (ROI)</td>
                    <td><?=$l->roi?></td>
                    <td>
                      <?php
                        $tahun=$l->tahun;
                        $roi=$l->roi;
                        $query=$this->db->query("SELECT * from ketdistribusi where rasio='2' and ketdistribusi.tahun='$tahun' and n1<='$roi' and n2>='$roi' and idperiodehitung='$idperiode'");
                        $ket=$query->row()->ket;
                        echo $ket;
                      ?>
                    </td>
                    
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
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
  


