<script type="text/javascript">
	function simulasi(){
	    var kas=document.getElementById("kas").value;
	    var suratberharga=document.getElementById("suratberharga").value;
	    var piutang=document.getElementById("piutang").value;
	    var persediaan=document.getElementById("persediaan").value;
	    var aktivatetap=document.getElementById("aktivatetap").value;

	    var penjualan=document.getElementById("penjualan").value;
	    var hpp=document.getElementById("hpp").value;
	    var biayaoperasi=document.getElementById("biayaoperasi").value;
	    var biayabunga=document.getElementById("biayabunga").value;
	    var pph=document.getElementById("pph").value;
	    
	    var totalbiaya=parseInt(hpp)+parseInt(biayaoperasi)+parseInt(biayabunga)+parseInt(pph);
	    var labaaftertax=parseInt(penjualan)-parseInt(totalbiaya);
	    var totalaktiva=parseInt(kas)+parseInt(suratberharga)+parseInt(piutang)+parseInt(persediaan)+parseInt(aktivatetap);

	    var persenlaba;
	    var tatover;

	    if(penjualan==0){
	    	persenlaba=0;
	    }else{
	    	persenlaba=parseInt(labaaftertax)/parseInt(penjualan)*100;
	    }
	    if(totalaktiva==0){
	    	tatover=0;
	    }else{
	    	tatover=parseInt(penjualan)/parseInt(totalaktiva);
	    }

	    var roinv=parseInt(persenlaba)*parseInt(tatover);

	    document.getElementById("labaaftertax").value=labaaftertax;
	    document.getElementById("plababersih").value=persenlaba;
	    document.getElementById("tatover").value=tatover;
	    document.getElementById("roinv").value=roinv;
  	}
</script>