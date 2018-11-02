
<!-- BEGIN PAGE -->
<div id="main-content">
  <!-- BEGIN PAGE CONTAINER-->
  <div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
      <div class="span12">
                    
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
          Data Perusahaan
        </h3>
        <ul class="breadcrumb">
          <li>
              <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
          </li>
          <li><a href="#">Perusahaan</a><span class="divider-last">&nbsp;</span></li>
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
              <div>
                <button type="button" class="btn btn-primary" onclick="self.history.back()">
                    <i class="icon-arrow-left"></i> Kembali
                  </button>
                <a href="<?=base_url()?>lk/formtambahdetail/<?=$listlk->id?>" class="btn btn-primary">Tambah Data Detail</a>

              </div>
             <br>
             <div id="info-alert"><?=@$this->session->flashdata('msg')?></div>

              <table class="table table-striped table-bordered" id="sample_1">
                <thead>
                  <tr>
                    <th class="hidden-phone" colspan="2">Nama Perusahaan</th>
                    <th class="hidden-phone" colspan="5"><?=$listlk->namaperusahaan?></th>
                  </tr>
                  <tr>
                    <th class="hidden-phone" colspan="2">Tahun</th>
                    <th class="hidden-phone" colspan="5"><?=$listlk->tahun?></th>
                  </tr>
                  <tr>
                    <th class="hidden-phone" colspan="7">&nbsp</th>
                    
                  </tr>
                  <tr>
                    <th class="hidden-phone">No</th>
                    <th class="hidden-phone">Nama Akun</th>
                    <th class="hidden-phone">D/K</th>
                    <th class="hidden-phone">Jumlah</th>
                    <th class="hidden-phone">Jenis Akun</th>
                    <th class="hidden-phone">Jenis Laporan</th>
                    <th class="hidden-phone">Aksi</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
//0=kas 1=surat berharga 2=piutang dagang 3=persediaan 4=aktiva tetap 5=penjualan 6=hpp 7=biaya operasi 8=biaya bunga 9=pajak penghasilan 10=laba stlh pajak 11=laba bersih
                    $no = 1;
                    foreach ($list as $l) {
                      if($l->jenislaporan=='0'){
                        $jenislaporan="Neraca";
                      }else{
                        $jenislaporan="Laba Rugi";
                      };
                      if($l->jenisakun==0){
                        $jenisakun="Kas";
                      }elseif($l->jenisakun==1){
                        $jenisakun="Surat Berharga";
                      }elseif($l->jenisakun==2){
                        $jenisakun="Piutang Dagang";
                      }elseif($l->jenisakun==3){
                        $jenisakun="Persediaan";
                      }elseif($l->jenisakun==4){
                        $jenisakun="Aktiva Tetap";
                      }elseif($l->jenisakun==5){
                        $jenisakun="Penjualan";
                      }elseif($l->jenisakun==6){
                        $jenisakun="HPP";
                      }elseif($l->jenisakun==7){
                        $jenisakun="Biaya Operasi";
                      }elseif($l->jenisakun==8){
                        $jenisakun="Biaya Bunga";
                      }elseif($l->jenisakun==9){
                        $jenisakun="Pph";
                      }elseif($l->jenisakun==10){
                        $jenisakun="Laba stlh Pajak";
                      }elseif($l->jenisakun==11){
                        $jenisakun="Laba Bersih";
                      }elseif($l->jenisakun==12){
                        $jenisakun="Lain-lain";
                      }
                  ?>
                  <tr>
                    <td><?=$no++?>.</td>
                    <td><?=$l->namaakun?></td>
                    <td><?=$l->dk?></td>
                    <td><?=number_format($l->jumlah,0,',','.')?></td>
                    <td><?=$jenisakun?></td>
                    <td><?=$jenislaporan?></td>
                    <td>
                      <a data-toggle="tooltip" data-placement="bottom" title="Hapus" onclick="return confirm('yakin akan menghapus data ini?')" class="btn btn-xs btn-danger" href="<?=base_url()?>lk/hapusdetail/<?=$l->idlk?>/<?=$l->id?>" >
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
  


