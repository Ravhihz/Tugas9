<html>
<head>
<title>Test JQUERY</title>
<script src="<?php echo base_url('assets/jquery/jquery.js')?>"></script>
<script>
$(document).ready(function(){
	$('$div1').css('background-color','red');
	$('.big').css('background-color)','yellow');
	$('$div3').css('background-color','green');
	%('p').css('background-color','blue');
	$('div,p').css('color','orange');
	$('a.strong').css('font-size','20px');
	});
});
</script>
</head>
<body>
<h1>Contoh jquery</h1>
<p>klik dong</p>
<a class='strong'>klik lagi dong</a>
<a class="strong">coba lagi</a>
<div class='small' id='div1'>ini ukuran kecil>/div>
<div class='medium' id='div2'>ini ukuran sedang>/div>
<div class='big' id='div3'>ini ukuran besar>/div>
</body>
</html>