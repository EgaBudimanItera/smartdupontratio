<script type="text/javascript" src="<?=base_url()?>assets_chart/canvasjs/canvasjs.min.js"></script>

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title: {
		fontSize :20,
		text: "Rasio Dupont"
	},
	axisY: {
		title: "Rasio",
		interval: 2,
		 valueFormatString: "#,###",
		 titleFontSize: 12,
		 labelFontSize: 10,

		// suffix: "%",
		// includeZero: false
	},
	axisX: {
		title: "Nama Perusahaan",
		titleFontSize: 12,
		labelFontSize: 10,
	},
	data: [
	{
		type: "column",
		// yValueFormatString: "#,##0.0#\"%\"",
		showInLegend: true,
		name: "series1",
        legendText: "NPM",
        indexLabelFontSize:10,
		dataPoints: [
			<?php foreach($list as $data){?>
			{ label: "<?=$data->perusahaan?>", y: <?=$data->persenlababersih?>,indexLabel:"<?=number_format($data->persenlababersih,2,',','.')?>" },

			<?php }?>	
		]
	},
	{
		type: "column",
		showInLegend: true,
		name: "series2",
        legendText: "TATO",
        indexLabelFontSize:10,
		// yValueFormatString: "#,##0.0#\"%\"",
		dataPoints: [
			<?php 
				
				foreach($list as $data){
					
			?>
			{ label: "<?=$data->perusahaan?>", y: <?=$data->tato?>,indexLabel:"<?=number_format($data->tato,2,',','.')?>"},
			<?php }?>
		]
	},
	{
		type: "column",
		showInLegend: true,
		name: "series2",
        legendText: "ROI",
        indexLabelFontSize:10,
		// yValueFormatString: "#,##0.0#\"%\"",
		dataPoints: [
			<?php 
				
				foreach($list as $data){
					
			?>
			{ label: "<?=$data->perusahaan?>", y: <?=$data->roi?>,indexLabel:"<?=number_format($data->roi,2,',','.')?>" },
			<?php }?>
		]
	}
	]
});
chart.render();

}
</script>