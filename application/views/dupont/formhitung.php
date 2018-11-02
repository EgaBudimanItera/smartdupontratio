
<!-- BEGIN PAGE -->
<div id="main-content">
  <!-- BEGIN PAGE CONTAINER-->
  <div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
      <div class="span12">
                    
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
          Data Du Pont Rasio
        </h3>
        <ul class="breadcrumb">
          <li>
              <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
          </li>
          <li><a href="#">Du Pont Rasio</a><span class="divider">&nbsp;</span></li>
          <li><a href="#">Tambah Data</a><span class="divider-last">&nbsp;</span></li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
      </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div id="page" class="dashboard"> 
       <!--  <?=var_dump($rasio)?> -->
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
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th class="hidden-phone span4" >Nama Perusahaan</th>
                      <th class="hidden-phone span8" ><?=$rasio["namaperusahaan"]?></th>
                    </tr>
                    <tr>
                      <th class="hidden-phone" >Tahun</th>
                      <th class="hidden-phone" ><?=$rasio["tahun"]?></th>
                    </tr>
                  </thead>
                </table>
                <br>
              </div>
            </div>
            <!-- END EXAMPLE TABLE widget-->
          </div>
        </div>  
        <form action="<?=base_url()?>dupont/prosessimpan" role="form" method="post" class="form-horizontal">
          <div class="row-fluid">
            <div class="span4">
              <!-- BEGIN EXAMPLE TABLE widget-->
              <div class="widget">
                <div class="widget-title">
                    <h4><i class="icon-reorder"></i>Aktiva Lancar</h4>
                    <span class="tools">
                        <a href="javascript:;" class="icon-chevron-down"></a>
                        <a href="javascript:;" class="icon-remove"></a>
                    </span>
                </div>
                <div class="widget-body">
                  <div class="control-group primary">
                    <label class="control-label" for="inputWarning">Kas</label>
                    <div class="controls">
                       <input type="hidden" class="span12" id="idlk" required name="idlk" value="<?=$rasio["idlk"]?>" />
                       <input type="hidden" class="span12" id="kas1" required name="kas1" value="<?=$rasio["kas"]?>" />
                       <input type="text" class="span12" id="kas2" required name="kas2" value="<?=number_format($rasio["kas"],0,',','.')?>" readonly />
                       <span class="help-inline"></span>
                    </div>
                  </div> 
                  <div class="control-group primary">
                    <label class="control-label" for="inputWarning">Surat Berharga</label>
                    <div class="controls">
                       <input type="hidden" class="span12" id="suratberharga1" required name="suratberharga1" value="<?=$rasio["suratberharga"]?>"  />
                       <input type="text" class="span12" id="suratberharga2" required name="suratberharga2" value="<?=number_format($rasio["suratberharga"],0,',','.')?>" readonly />
                       <span class="help-inline"></span>
                    </div>
                  </div> 
                  <div class="control-group primary">
                    <label class="control-label" for="inputWarning">Piutang Dagang</label>
                    <div class="controls">
                       <input type="hidden" class="span12" id="piutangdagang1" required name="piutangdagang1" value="<?=$rasio["piutang"]?>" readonly />
                       <input type="text" class="span12" id="piutangdagang2" required name="piutangdagang2" value="<?=number_format($rasio["piutang"],0,',','.')?>" readonly />
                       <span class="help-inline"></span>
                    </div>
                  </div>  
                  <div class="control-group primary">
                    <label class="control-label" for="inputWarning">Persediaan</label>
                    <div class="controls">
                       <input type="hidden" class="span12" id="persediaan1" required name="persediaan1" value="<?=$rasio["persediaan"]?>" readonly />
                       <input type="text" class="span12" id="persediaan2" required name="persediaan2" value="<?=number_format($rasio["persediaan"],0,',','.')?>" readonly />
                       <span class="help-inline"></span>
                    </div>
                  </div>  
                </div>
              </div>
              <!-- END EXAMPLE TABLE widget-->
            </div>
            <div class="span4">
              <!-- BEGIN EXAMPLE TABLE widget-->
              <div class="widget">
                <div class="widget-title">
                    <h4><i class="icon-reorder"></i>Aktiva Lancar</h4>
                    <span class="tools">
                        <a href="javascript:;" class="icon-chevron-down"></a>
                        <a href="javascript:;" class="icon-remove"></a>
                    </span>
                </div>
                <div class="widget-body">
                  <div class="control-group primary">
                    <label class="control-label" for="inputWarning">Nilai Buku</label>
                    <div class="controls">
                       <input type="hidden" class="span12" id="nilaibuku1" required name="nilaibuku1" value="<?=$rasio["aktivatetap"]?>" readonly />
                       <input type="text" class="span12" id="nilaibuku2" required name="nilaibuku2" value="<?=number_format($rasio["aktivatetap"],0,',','.')?>" readonly />
                       <span class="help-inline"></span>
                    </div>
                  </div> 
                </div>
              </div>
              <!-- END EXAMPLE TABLE widget-->
            </div>
            <div class="span4">
              <!-- BEGIN EXAMPLE TABLE widget-->
              <div class="widget">
                <div class="widget-title">
                    <h4><i class="icon-reorder"></i>Total Aktiva</h4>
                    <span class="tools">
                        <a href="javascript:;" class="icon-chevron-down"></a>
                        <a href="javascript:;" class="icon-remove"></a>
                    </span>
                </div>
                <div class="widget-body">
                  
                  <div class="control-group primary">
                    <label class="control-label" for="inputWarning">Total Aktiva Lancar</label>
                    <div class="controls">
                       <input type="hidden" class="span12" id="totalaktivalancar1" required name="totalaktivalancar1" value="<?=$rasio["aktivalancar"]?>" readonly />
                        <input type="text" class="span12" id="totalaktivalancar2" required name="totalaktivalancar2" value="<?=number_format($rasio["aktivalancar"],0,',','.')?>" readonly />
                       <span class="help-inline"></span>
                    </div>
                  </div>
                  <div class="control-group primary">
                    <label class="control-label" for="inputWarning">Total Nilai Buku</label>
                    <div class="controls">
                       <input type="hidden" class="span12" id="totalaktivatetap1" required name="totalaktivatetap1" value="<?=$rasio["aktivatetap"]?>" readonly />
                       <input type="text" class="span12" id="totalaktivatetap2" required name="totalaktivatetap2" value="<?=number_format($rasio["aktivatetap"],0,',','.')?>" readonly />
                       <span class="help-inline"></span>
                    </div>
                  </div> 
                  <hr>
                  <div class="control-group primary">
                    <label class="control-label" for="inputWarning">Total Aktiva</label>
                    <div class="controls">
                       <input type="hidden" class="span12" id="totalaktiva1" required name="totalaktiva1" value="<?=$rasio["totalaktiva"]?>" readonly />
                       <input type="text" class="span12" id="totalaktiva2" required name="totalaktiva2" value="<?=number_format($rasio["totalaktiva"],0,',','.')?>" readonly />
                       <span class="help-inline"></span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END EXAMPLE TABLE widget-->
            </div>
          </div> 
          <div class="row-fluid">
            <div class="span4">
              <!-- BEGIN EXAMPLE TABLE widget-->
              <div class="widget">
                <div class="widget-title">
                    <h4><i class="icon-reorder"></i>Penjualan</h4>
                    <span class="tools">
                        <a href="javascript:;" class="icon-chevron-down"></a>
                        <a href="javascript:;" class="icon-remove"></a>
                    </span>
                </div>
                <div class="widget-body">
                  <div class="control-group primary">
                    <label class="control-label" for="inputWarning">Penjualan</label>
                    <div class="controls">
                       <input type="hidden" class="span12" id="Penjualan1" required name="Penjualan1" value="<?=$rasio["penjualan"]?>" readonly />
                       <input type="text" class="span12" id="Penjualan2" required name="Penjualan2" value="<?=number_format($rasio["penjualan"],0,',','.')?>" readonly />
                       <span class="help-inline"></span>
                    </div>
                  </div> 
                </div>
              </div>
              <!-- END EXAMPLE TABLE widget-->
            </div>
            <div class="span4">
              <!-- BEGIN EXAMPLE TABLE widget-->
              <div class="widget">
                <div class="widget-title">
                    <h4><i class="icon-reorder"></i>Total Biaya</h4>
                    <span class="tools">
                        <a href="javascript:;" class="icon-chevron-down"></a>
                        <a href="javascript:;" class="icon-remove"></a>
                    </span>
                </div>
                <div class="widget-body">
                  <div class="control-group primary">
                    <label class="control-label" for="inputWarning">Harga Pokok Penjualan</label>
                    <div class="controls">
                       <input type="hidden" class="span12" id="hpp1" required name="hpp1" value="<?=$rasio["hpp"]?>" readonly />
                       <input type="text" class="span12" id="hpp2" required name="hpp2" value="<?=number_format($rasio["hpp"],0,',','.')?>" readonly />
                       <span class="help-inline"></span>
                    </div>
                  </div> 
                  
                  <div class="control-group primary">
                    <label class="control-label" for="inputWarning">Biaya Operasi</label>
                    <div class="controls">
                       <input type="hidden" class="span12" id="biayaoperasi1" required name="biayaoperasi1" value="<?=$rasio["biayaoperasi"]?>" readonly />
                       <input type="text" class="span12" id="biayaoperasi2" required name="biayaoperasi2" value="<?=number_format($rasio["biayaoperasi"],0,',','.')?>" readonly />
                       <span class="help-inline"></span>
                    </div>
                  </div> 
                   <div class="control-group primary">
                    <label class="control-label" for="inputWarning">Biaya Bunga</label>
                    <div class="controls">
                       <input type="hidden" class="span12" id="biayabunga1" required name="biayabunga1" value="<?=$rasio["biayabunga"]?>" readonly />
                       <input type="text" class="span12" id="biayabunga2" required name="biayabunga2" value="<?=number_format($rasio["biayabunga"],0,',','.')?>" readonly />
                       <span class="help-inline"></span>
                    </div>
                  </div>
                   <div class="control-group primary">
                    <label class="control-label" for="inputWarning">Pajak Penghasilan</label>
                    <div class="controls">
                       <input type="hidden" class="span12" id="pph1" required name="pph1" value="<?=$rasio["pph"]?>" readonly />
                       <input type="text" class="span12" id="pph2" required name="pph2" value="<?=number_format($rasio["pph"],0,',','.')?>" readonly />
                       <span class="help-inline"></span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END EXAMPLE TABLE widget-->
            </div>
            <div class="span4">
              <!-- BEGIN EXAMPLE TABLE widget-->
              <div class="widget">
                <div class="widget-title">
                    <h4><i class="icon-reorder"></i>Laba Setelah Pajak</h4>
                    <span class="tools">
                        <a href="javascript:;" class="icon-chevron-down"></a>
                        <a href="javascript:;" class="icon-remove"></a>
                    </span>
                </div>
                <div class="widget-body">
                  
                  <div class="control-group primary">
                    <label class="control-label" for="inputWarning">Total Penjualan</label>
                    <div class="controls">
                       <input type="hidden" class="span12" id="totalpenjualan1" required name="totalpenjualan1" value="<?=$rasio["penjualan"]?>" readonly />
                       <input type="text" class="span12" id="totalpenjualan2" required name="totalpenjualan2" value="<?=number_format($rasio["penjualan"],0,',','.')?>" readonly />
                       <span class="help-inline"></span>
                    </div>
                  </div>
                  <div class="control-group primary">
                    <label class="control-label" for="inputWarning">Total Biaya</label>
                    <div class="controls">
                       <input type="hidden" class="span12" id="totalbiaya1" required name="totalbiaya1" value="<?=$rasio["totalbiaya"]?>" readonly />
                       <input type="text" class="span12" id="totalbiaya2" required name="totalbiaya2" value="<?=number_format($rasio["totalbiaya"],0,',','.')?>" readonly />
                       <span class="help-inline"></span>
                    </div>
                  </div> 
                  <div class="control-group primary">
                    <label class="control-label" for="inputWarning">Total Laba Setelah Pajak</label>
                    <div class="controls">
                       <input type="hidden" class="span12" id="labasetelahpajak1" required name="labasetelahpajak1" value="<?=$rasio["laba"]?>" readonly />
                       <input type="text" class="span12" id="labasetelahpajak2" required name="labasetelahpajak2" value="<?=number_format($rasio["laba"],0,',','.')?>" readonly />
                       <span class="help-inline"></span>
                    </div>
                  </div> 
                  <hr>
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
                    <h4><i class="icon-reorder"></i>Rasio</h4>
                    <span class="tools">
                        <a href="javascript:;" class="icon-chevron-down"></a>
                        <a href="javascript:;" class="icon-remove"></a>
                    </span>
                </div>
                <div class="widget-body">
                  <div class="control-group primary">
                    <label class="control-label" for="inputWarning">% Laba Bersih</label>
                    <div class="controls">
                       <input type="hidden" class="span6" id="plababersih1" required name="plababersih1" value="<?=$rasio["persenlaba"]?>" readonly />
                       <input type="text" class="span6" id="plababersih2" required name="plababersih2" value="<?=number_format($rasio["persenlaba"],5,',','.')?>" readonly />
                       <span class="help-inline"></span>
                    </div>
                  </div> 
                  <div class="control-group primary">
                    <label class="control-label" for="inputWarning">Total Aset Turn Over</label>
                    <div class="controls">
                       <input type="hidden" class="span6" id="tato1" required name="tato1" value="<?=$rasio["tato"]?>" readonly />
                       <input type="text" class="span6" id="tato2" required name="tato2" value="<?=number_format($rasio["tato"],5,',','.')?>" readonly />
                       <span class="help-inline"></span>
                    </div>
                  </div> 
                  <div class="control-group primary">
                    <label class="control-label" for="inputWarning">Return On Investment</label>
                    <div class="controls">
                       <input type="hidden" class="span6" id="roi1" required name="roi1" value="<?=$rasio["roi"]?>" readonly />
                       <input type="text" class="span6" id="roi2" required name="roi2" value="<?=number_format($rasio["roi"],0,',','.')?>" readonly />
                       <span class="help-inline"></span>
                    </div>
                  </div> 
                  <div class="form-actions">
                    <button type="submit" class="btn btn-primary"><i class="icon-ok"></i>Simpan Data</button>
                    <!-- <button type="reset" class="btn btn-warning"><i class="icon-remove"></i>Hapus Data</button> -->
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


  


