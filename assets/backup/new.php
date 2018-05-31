<?php
	
		
		$con = mysqli_connect('localhost','root','','ds');
		if(mysqli_connect_errno($con))
		{
			echo 'Failed to connect to database: '.mysqli_connect_error();
		}

		mysqli_select_db($con,"ds");

			
		$sql = "SELECT * FROM clients";
		$result = mysqli_query($con, $sql) or die(mysql_error());
		?>
		
		<thead>
			<tr>
				<th>Name</th>
				<th>Contact</th>
				<th>Email</th>
				<th>Date Created</th>
				<th>Last Login</th>
				<th>Balance</th>
			</tr>
		</thead> 
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($result))
		{ ?>
				
			<tr>
				<td><?php echo $row['ClientName']; ?></td>
				<td><?php echo $row['Email']; ?></td>
				<td><?php echo $row['Phone']; ?></td>
				<td><?php echo $row['DateCreated']; ?></td>
				<td><?php echo $row['LastLogin']; ?></td>
				<td><?php echo $row['Balance']; ?></td>
			</tr>
		 
		<?php } ?>
		
		</tbody>
		
		<?php
	mysqli_close($con);
?>