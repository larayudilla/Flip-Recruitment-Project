<html>
	<head>
		<title>Flip Native | List disburs</title>
		<link rel="stylesheet" href="/soal-native/assets/css/bootstrap.css" />
		<script type="text/javascript" src="/soal-native/assets/js/bootstrap.js"></script>
	</head>
	<body>
		<div class="row">
			<div class="col-md-4"><h3>List disburs</h3><a  href="/soal-native/?">Back to form disburs </a>
				<table class="table table-responsive">
					<tr>
						<td>Detail</td>
						<td>Status disburs</td>
						<td>Time served</td>
						<td>Receipt</td>
						<td>Created at</td>
						<td>Request</td>
						<td>Response</td>
					</tr>
					<?php 

						foreach ($rs as $disburs => $list)
						{
							echo '<tr><td><a  href="?flip=tampil-data&i='.$list['id_disburs'].'">'.$list['id_disburs'].'</a></td><td>'.$list['status_disburs'].'</td><td>'.$list['time_served'].'</td><td>'.$list['receipt'].'</td><td>'.$list['created_at'].'</td><td>'.$list['request'].'</td><td>'.$list['response'].'</td></tr>';
						}

					?>
				</table>
			</div>
		</div>
	</body>
</html>
