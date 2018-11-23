
<!-- BEGIN PAGE -->
<div id="main-content">
  <!-- BEGIN PAGE CONTAINER-->
  <div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
      <div class="span12">
                    
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
          Simulasi Dupont
        </h3>
        <ul class="breadcrumb">
          <li>
              <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
          </li>
          <li><a href="#">Simulasi</a><span class="divider-last">&nbsp;</span></li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
      </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div id="page" class="dashboard">                                                              
      
      <div class="row-fluid">
        <div class="span6">
          <!-- BEGIN EXAMPLE TABLE widget-->
          <div class="widget">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i>Aktiva</h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
                <div class="control-group primary">
                    <label class="control-label span4" for="inputWarning">Kas</label>
                    <input type="number" class="span8" id="kas" required name="kas" /> 
                </div>
                <div class="control-group primary">
                    <label class="control-label span4" for="inputWarning">Surat Berharga</label>
                    <input type="number" class="span8" id="suratberharga" required name="suratberharga" /> 
                </div>
                <div class="control-group primary">
                    <label class="control-label span4" for="inputWarning">Piutang</label>
                    <input type="number" class="span8" id="piutang" required name="piutang" /> 
                </div>
                <div class="control-group primary">
                    <label class="control-label span4" for="inputWarning">Persediaan</label>
                    <input type="number" class="span8" id="persediaan" required name="persediaan" /> 
                </div>
                <hr>
                <div class="control-group primary">
                    <label class="control-label span4" for="inputWarning">Nilai Buku Aktiva Tetap</label>
                    <input type="number" class="span8" id="aktivatetap" required name="aktivatetap" /> 
                </div>
                <hr>
            </div>
          </div>
          <!-- END EXAMPLE TABLE widget-->
        </div>
        <div class="span6">
          <!-- BEGIN EXAMPLE TABLE widget-->
          <div class="widget">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i>Laba Rugi</h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
                <div class="control-group primary">
                    <label class="control-label span4" for="inputWarning">Penjualan</label>
                    <input type="number" class="span8" id="penjualan" required name="penjualan" /> 
                </div>
                <hr>
                <div class="control-group primary">
                    <label class="control-label span4" for="inputWarning">Harga Pokok Penjualan</label>
                    <input type="number" class="span8" id="hpp" required name="hpp" /> 
                </div>
                <div class="control-group primary">
                    <label class="control-label span4" for="inputWarning">Biaya Operasional</label>
                    <input type="number" class="span8" id="biayaoperasi" required name="biayaoperasi" /> 
                </div>
                <div class="control-group primary">
                    <label class="control-label span4" for="inputWarning">Biaya Bunga</label>
                    <input type="number" class="span8" id="biayabunga" required name="biayabunga" /> 
                </div>
               
                <div class="control-group primary">
                    <label class="control-label span4" for="inputWarning">Pajak Penghasilan</label>
                    <input type="number" class="span8" id="pph" required name="pph" /> 
                </div>

                <hr>
                <div class="control-group primary">
                    <label class="control-label span4" for="inputWarning">Laba Setelah Pajak</label>
                    <input type="number" class="span8" id="labaaftertax" readonly="" name="labaaftertax" /> 
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary" onclick="simulasi()"><i class="icon-ok"></i>Hitung Simulasi</button>
                    <!-- <button type="reset" class="btn btn-warning"><i class="icon-remove"></i>Hapus Data</button> -->
                </div>
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
                <h4><i class="icon-reorder"></i>Hasil Simulasi</h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
                <div class="control-group primary">
                    <label class="control-label span4" for="inputWarning">% Laba Bersih</label>
                    <input type="text" class="span8" readonly id="plababersih" required name="plababersih" /> 
                </div>
                <div class="control-group primary">
                    <label class="control-label span4" for="inputWarning">Total Aset Turn Over</label>
                    <input type="text" class="span8"readonly  id="tatover" required name="tatover" /> 
                </div>
                <div class="control-group primary">
                    <label class="control-label span4" for="inputWarning">Return On Investment</label>
                    <input type="text" class="span8" readonly id="roinv" required name="roinv" /> 
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
  


