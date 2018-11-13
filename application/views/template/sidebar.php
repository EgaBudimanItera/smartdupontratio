<?php
  $hakakses=$this->session->userdata('userHakakses');
?>  
	<!-- BEGIN CONTAINER -->
	<div id="container" class="row-fluid">
		<!-- BEGIN SIDEBAR -->
		<div id="sidebar" class="nav-collapse collapse">
			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
			<div class="sidebar-toggler hidden-phone"></div>
			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

			
			<!-- BEGIN SIDEBAR MENU -->
            <ul class="sidebar-menu">
                <li class="<?php if($link=='' ||$link=="dashboard"){echo'active';}?>">
                    <a href="<?=base_url()?>dashboard" class="">
                        <span class="icon-box"> <i class="icon-home"></i></span> Dashboard
                        
                    </a>
                </li>
            
                <li class="has-sub <?php if($link=='perusahaan'){echo'active';}?>">
                    <a href="javascript:;" class="">
                        <span class="icon-box"> <i class="icon-road"></i></span> File Setting
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li class="<?php if($link=='perusahaan'){echo'active';}?>"><a href="<?=base_url()?>perusahaan">List Perusahaan </a></li>
                        
                    </ul>
                </li>
                <li class="has-sub <?php if($link=='lk'){echo'active';}?>">
                    <a href="javascript:;" class="">
                        <span class="icon-box"> <i class="icon-suitcase"></i></span>Laporan Keuangan
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li class="<?php if($link=='lk'){echo'active';}?>"><a href="<?=base_url()?>lk">List Laporan Keuangan </a></li>
                    </ul>
                </li>
                <li class="has-sub <?php if($link=='dupont'||$link=='distribusi'||$link=='keterangan'){echo'active';}?>">
                    <a href="javascript:;" class="">
                        <span class="icon-box"> <i class="icon-tasks"></i></span> Perhitungan
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li class="<?php if($link=='dupont'){echo'active';}?>"><a href="<?=base_url()?>dupont">Rasio Du Pont </a></li>
                        <li class="<?php if($link=='distribusi'){echo'active';}?>"><a href="<?=base_url()?>distribusi">Distribusi</a></li>
                        <li class="<?php if($link=='keterangan'){echo'active';}?>"><a href="<?=base_url()?>keterangan">Keterangan Perhitungan</a></li>
                    </ul>
                </li>
                <li class="has-sub <?php if($link=='lapdupont'||$link=='lapdistribusi'){echo'active';}?>">
                    <a href="javascript:;" class="">
                        <span class="icon-box"> <i class="icon-tasks"></i></span> Laporan
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li class="<?php if($link=='lapdupont'){echo'active';}?>"><a href="<?=base_url()?>dupont/viewlaporan">Rasio Du Pont </a></li>
                        <li class="<?php if($link=='lapdistribusi'){echo'active';}?>"><a href="<?=base_url()?>distribusi/viewlaporan">Distribusi</a></li>
                    </ul>
                </li>
            </ul>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->