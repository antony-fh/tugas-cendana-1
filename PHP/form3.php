<!DOCTYPE html>
<html>
<head>
	<title>Form 3102</title>
</head>
<body>
	<form action="act3.php" method="post">
		<table>
			<?php
			for ($i=1; $i <=10 ; $i++) { 
				?>

				<tr>
					<td>
						<label for="angka"><?php echo $i;?></label>
					</td>
					<td>
					<input type="text" name="angka[]">
					</td>
				</tr>

				<?php
			}
			?>
			<!-- <tr>
				<td>
					<label for="angka">2</label>
				</td>
				<td>
					<input type="text" name="angka[]">
				</td>
			</tr>
			<tr>
				<td>
					<label for="angka">3</label>
				</td>
				<td>
					<input type="text" name="angka[]">
				</td>
			</tr>
			<tr>
				<td>
					<label for="angka">4</label>
				</td>
				<td>
					<input type="text" name="angka[]">
				</td>
			</tr>
			<tr>
				<td>
					<label for="angka">5</label>
				</td>
				<td>
					<input type="text" name="angka[]">
				</td>
			</tr>
			<tr>
				<td>
					<label for="angka">6</label>
				</td>
				<td>
					<input type="text" name="angka[]">
				</td>
			</tr>
			<tr>
				<td>
					<label for="angka">7</label>
				</td>
				<td>
					<input type="text" name="angka[]">
				</td>
			</tr>
			<tr>
				<td>
					<label for="angka">8</label>
				</td>
				<td>
					<input type="text" name="angka[]">
				</td>
			</tr>
			<tr>
				<td>
					<label for="angka">9</label>
				</td>
				<td>
					<input type="text" name="angka[]">
				</td>
			</tr>
			<tr>
				<td>
					<label for="angka">10</label>
				</td>
				<td>
					<input type="text" name="angka[]">
				</td>
			</tr> -->
			<tr>
				<td>
					<input type="submit" value="3102">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
