
<table border="1px">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Status</th>
	</tr>
	<?php
	$student = new student();
	$query = $student->listStudent();
	while ($row=mysqli_fetch_assoc($query)) {
		
	?>
	<tr>
		<td><?php echo $row['studentID'];?></td>
		<td><?php echo $row['studentName'];?></td>
		<td><?php echo $row['studentStatus'];?></td>
	</tr>
	<?php
			}

	?>
</table>