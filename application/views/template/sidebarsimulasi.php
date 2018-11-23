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
                    <a href="<?=base_url()?>simulasi" class="">
                        <span class="icon-box"> <i class="icon-home"></i></span> Dashboard
                        
                    </a>
                </li>
                <li class="<?php if($link=="simulasi"){echo'active';}?>">
                    <a href="<?=base_url()?>simulasi/simulasi" class="">
                        <span class="icon-box"> <i class="icon-suitcase"></i></span> Simulasi
                        
                    </a>
                </li>
            	<li class="<?php if($link=="dupontumum"){echo'active';}?>">
                    <a href="<?=base_url()?>simulasi/viewdupont" class="">
                        <span class="icon-box"> <i class="icon-book"></i></span> Rasio Du Pont 
                        
                    </a>
                </li>
                <li class="<?php if($link=="distribusiumum"){echo'active';}?>">
                    <a href="<?=base_url()?>simulasi/viewdistribusi" class="">
                        <span class="icon-box"> <i class="icon-tasks"></i></span> Distribusi Rasio 
                        
                    </a>
                </li>
            </ul>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->