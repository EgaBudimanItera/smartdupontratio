
<!-- BEGIN PAGE -->
<div id="main-content">
  <!-- BEGIN PAGE CONTAINER-->
  <div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
      <div class="span12">
                    
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
          Data Detail Laporan Keuangan
        </h3>
        <ul class="breadcrumb">
          <li>
              <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
          </li>
          <li><a href="#">Detail Laporan Keuangan</a><span class="divider">&nbsp;</span></li>
          <li><a href="#">Tambah Data</a><span class="divider-last">&nbsp;</span></li>
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
                <div id="info-alert"><?=@$this->session->flashdata('msg')?></div>
                <div>
                  <button type="button" class="btn btn-primary" onclick="self.history.back()">
                    <i class="icon-arrow-left"></i> Kembali
                  </button>
                </div>
                <br>
                <form action="<?=base_url()?>lk/prosessimpandetail" role="form" method="post" class="form-horizontal">
                  <div class="control-group primary">
                    <label class="control-label" for="inputWarning" >Nama Akun</label>
                    <div class="controls">
                      <input type="hidden" name="idlk" value="<?=$id?>" class="span6" id="idlk">
                      <input type="text" name="namaakun" class="span6" id="namaakun">
                      <span class="help-inline"></span>
                    </div>
                  </div> 
                  <div class="control-group primary">
                    <label class="control-label" for="inputWarning" >Saldo Normal</label>
                    <div class="controls">
                       <select name="dk" class="span6 chosen" id="dk">
                        <option value="">--Pilih--</option>
                        <option value="d">Debet</option>
                        <option value="k">Kredit</option>
                       </select>
                      
                       <span class="help-inline"></span>
                    </div>
                  </div>  
                  <div class="control-group primary">
                    <label class="control-label" for="inputWarning" >Jumlah</label>
                    <div class="controls">
                      <input type="number" name="jumlah" class="span6" id="jumlah">
                      <span class="help-inline"></span>
                    </div>
                  </div> 
                 <!--  0=kas 1=surat berharga 2=piutang dagang 3=persediaan 4=aktiva tetap 5=penjualan 6=hpp 7=biaya operasi 8=biaya bunga 9=pajak penghasilan 10=laba stlh pajak 11=laba bersih -->
                  <div class="control-group primary">
                    <label class="control-label" for="inputWarning" >Jenis Akun</label>
                    <div class="controls">
                       <select name="jenisakun" class="span6 chosen" id="jenisakun">
                        <option value="">--Pilih--</option>
                        <option value="0">Kas</option>
                        <option value="1">Surat Berharga</option>
                        <option value="2">Piutang Dagang</option>
                        <option value="3">Persediaan</option>
                        <option value="4">Aktiva Tetap</option>
                        <option value="5">Penjualan</option>
                        <option value="6">Hpp</option>
                        <option value="7">Biaya Operasi</option>
                        <option value="8">Biaya Bunga</option>
                        <option value="9">Pajak Penghasilan</option>
                        <option value="10">Laba Setelah Pajak</option>
                        <option value="11">Laba Bersih</option>
                        <option value="12">Lain-lain</option>
                       </select>
                       <span class="help-inline"></span>
                    </div>
                  </div>  
                  <div class="control-group primary">
                    <label class="control-label" for="inputWarning" >Jenis Laporan</label>
                    <div class="controls">
                       <select name="jenislaporan" class="span6 chosen" id="jenislaporan">
                        <option value="">--Pilih--</option>
                        <option value="0">Neraca</option>
                        <option value="1">Laba Rugi</option>
                       </select>
                       <span class="help-inline"></span>
                    </div>
                  </div>  
                  <div class="form-actions">
                    <button type="submit" class="btn btn-primary"><i class="icon-ok"></i>Simpan Data</button>
                    <!-- <button type="reset" class="btn btn-warning"><i class="icon-remove"></i>Hapus Data</button> -->
                  </div>
                </form>
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


  


