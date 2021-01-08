<html>

<head>
	<title>Halaman saran</title>
</head>

<body>
	<h1>Halaman Saran dari pengunjung website</h1>
	<?php
		if(isset($_GET['submit'])) {
			echo"<table border=1>
			<tr>
				<td>Nama</td>
				<td>: ".$_GET['nama']."</td>
			</tr>
			<tr>
				<td>Saran</td>
				<td>: ".$_GET['saran']."</td>
			</tr>
		</table>";
		
		}else{
			echo"<h2>Halaman ini tidak bisa dipanggil secara langsung</h2>";
		}
	?>
</body>

</html>