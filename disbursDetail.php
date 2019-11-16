<html>
	<head>
		<title>Native MVC Example</title>
		<link rel="stylesheet" href="/soal-native/assets/css/bootstrap.css" />
		<script type="text/javascript" src="/soal-native/assets/js/bootstrap.js"></script>
	</head>
	<body>
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4">&nbsp;</div>
				<div class="col-md-4"><h3>Detail log disburs</h3><a  href="/soal-native/?">Back to form disburs </a> | <a href="/soal-native/?flip=tampil-data">Show list disburs</a><br><br>
					<?php 

						echo 'id_disburs:' . $rs['id_disburs'] . '<br/>';
						echo 'time_served:' . $rs['time_served'] . '<br/>';
						echo 'receipt:' . $rs['receipt'] . '<br/>';
						echo 'status_disburs:' . $rs['status_disburs'] . '<br/>';
						echo 'api:' . $rs['api'] . '<br/>';
						echo 'created_at:' . $rs['created_at'] . '<br/>';
						echo 'updated_at:' . $rs['updated_at'] . '<br/>';
						echo 'request:' . $rs['request'] . '<br/>';
						echo 'response:' . $rs['response'] . '<br/>';
					


					?>
				</div>
				<div class="col-md-4">&nbsp;</div>
			</div>
		</div>
	</body>
</html>

<html>
<head></head>

<body>



</body>
</html>