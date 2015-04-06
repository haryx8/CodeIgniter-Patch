<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CodeIgniter - Layout</title>
	</head>
	
	<body>	
		<div id="container" class="container">
			<span id="top"></span>
			<p>
				<code>this is from set layout -> application/views/layouts/default.php</code>
			</p>
			<?=$content_for_layout ?>
		</div>
		
		<div id="footer">
			<div>{elapsed_time}Sec/ {memory_usage}</div>
		</div>
	</body>
</html>