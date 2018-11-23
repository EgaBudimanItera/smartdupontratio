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
                <li class="<?php if($link=="simulasi"){echo'active';}?>">
                    <a href="#" class="">
                        <span class="icon-box"> <i class="icon-suitcase"></i></span> Simulasi
                        
                    </a>
                </li>
            
            </ul>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->