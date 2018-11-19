
<!-- BEGIN PAGE -->
<div id="main-content">
  <!-- BEGIN PAGE CONTAINER-->
  <div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
      <div class="span12">
                    
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
          Data Laporan Keuangan
        </h3>
        <ul class="breadcrumb">
          <li>
              <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
          </li>
          <li><a href="#">Laporan Keuangan</a><span class="divider-last">&nbsp;</span></li>
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
                <h4><i class="icon-reorder"></i>Data</h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
             <div><a href="<?=base_url()?>lk/formtambah" class="btn btn-primary">Tambah Data</a></div>
             <br>
             <div id="info-alert"><?=@$this->session->flashdata('msg')?></div>

              <table class="table table-striped table-bordered" id="sample_1">
                <thead>
                  <tr>
                    <th class="hidden-phone">No</th>
                    <th class="hidden-phone">ID Perusahaan</th>
                    <th class="hidden-phone">Nama Perusahaan</th>
                    <th class="hidden-phone">Tahun</th>
                    <th class="hidden-phone">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                 <?php
                    $no = 1;
                    foreach ($list as $l) {
                  ?>
                  <tr>
                    <td><?=$no++?>.</td>
                    <td><?=$l->idperusahaan?></td>
                    <td><?=$l->namaperusahaan?></td>
                    <td><?=$l->tahun?></td>
                    <td>
                      <?php
                      if($l->statushitung==0){
                      ?><a data-toggle="tooltip" data-placement="bottom" title="Hitung" class="btn btn-xs btn-primary" href="<?=base_url()?>dupont/formhitung/<?=$l->id?>">
                        <i class="icon-tasks"></i>                
                      </a>
                      <?php
                      }else{
                      ?>
                      <a data-toggle="tooltip" data-placement="bottom" title="Detail" class="btn btn-xs btn-warning" href="<?=base_url()?>dupont/formdetail/<?=$l->id?>">
                        <i class="icon-eye-open"></i>                
                      </a>
                      <a data-toggle="tooltip" data-placement="bottom" title="Upload Gambar Dupont" class="btn btn-xs btn-success" href="<?=base_url()?>dupont/formupload/<?=$l->id?>">
                        <i class="icon-upload"></i>                
                      </a>
                      <?php
                      }
                      ?>
                      <a data-toggle="tooltip" data-placement="bottom" title="Hapus" onclick="return confirm('yakin akan menghapus data ini?')" class="btn btn-xs btn-danger" href="<?=base_url()?>lk/hapus/<?=$l->id?>" >
                        <i class="icon-trash"></i>  
                      </a>
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
  


