<!DOCTYPE html>
<html>
<head>
	<title>Color Picker</title>
	<style>
		.color-sample {
			font-size: 24px;
			padding: 20px;
			border: 1px solid #ccc;
			width: 50%;
			margin: 40px auto;
			text-align: center;
		}
	</style>
</head>
<body>
	<form action="" method="post">
		<input type="color" name="color" required>
		<input type="submit" value="Select Color">
	</form>

	<div class="color-sample" id="color-sample">
		<?php if (isset($_POST['color'])): ?>
			<?php $color = $_POST['color']; ?>
			<span style="color: <?php echo $color; ?>;">Your Selected Color</span>
		<?php else: ?>
			<span>Select a color</span>
		<?php endif; ?>
	</div>

	<script>
		// Optional AJAX enhancement
		const form = document.querySelector('form');
		form.addEventListener('submit', (e) => {
			e.preventDefault();
			const colorInput = document.querySelector('input[type="color"]');
			const color = colorInput.value;
			const xhr = new XMLHttpRequest();
			xhr.open('POST', '', true);
			xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			xhr.onload = function() {
				if (xhr.status === 200) {
					document.querySelector('#color-sample').innerHTML = `
						<span style="color: ${color};">Your Selected Color</span>
					`;
				}
			};
			xhr.send(color=${color});
		});
	</script>
</body>
</html>