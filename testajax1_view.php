<html> <head> <title>Test AJAX</title>
<script src=<?php echo base_url(assets/jquery/jquery.js')?>"></script>
<script>
$(document).ready(function(){
	$('.btn').click(function(event){
		ambildata();
	});
});
function ambildata(){
	$.ajax({
	url		: "<?php echo site_url('TestAjax1/ambilData')?>/", 
	type	: "GET",
	dataType: "HTML",
	success	: function(data)
	{
		$('#data').html(data);
	},
	error	: function(jqXHR, textStatus, errorThrown)
	{
		alert ('Error get data from ajax');
	}
	});
}
</script> </head> <body> <h1>Test AJAX</h1>
<div id='data'>Text ini akan berganti jika tombol diklik</div>
<input type='button' name='btn' value='Test Ajax' class='btn'>
</body> </html>