<?php

$con = mysqli_connect('localhost','root','','ds');
if(mysqli_connect_errno($con))
{
	echo 'Failed to connect to database: '.mysqli_connect_error();
}

mysqli_select_db($con,"ds");

switch($_POST['fetchdata']){

case Client: // Start Fetching Clients data
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
		break;
		// End Fetching Clients data
		
		
case 2:// Start Fetching Products data
		$sql = "SELECT * FROM products";
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
				<td><?php echo $row['Product']; ?></td>
				<td><?php echo $row['Notes']; ?></td>
				<td><?php echo $row['Cost']; ?></td>
			</tr>
		<?php } ?>
		
		</tbody>
		
		<?php
		break;
		// End Fetching Products data


case 3: // Start Fetching Invoices data
		$sql = "SELECT * FROM invoices";
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
				<td><?php echo $row['Invoice']; ?></td>
				<td><?php echo $row['ClientName']; ?></td>
				<td><?php echo $row['InvoiceDate']; ?></td>
				<td><?php echo $row['Amount']; ?></td>
				<td><?php echo $row['Balance']; ?></td>
				<td><?php echo $row['DueDate']; ?></td>
				<td><?php echo $row['Status']; ?></td>
			</tr>
		<?php } ?>
		
		</tbody>
		
		<?php
		break;
		// End Fetching Invoices data
		
		
case 4: // Start Fetching Payments data
		$sql = "SELECT * FROM payments";
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
				<td><?php echo $row['Invoice']; ?></td>
				<td><?php echo $row['ClientName']; ?></td>
				<td><?php echo $row['TransactionReference']; ?></td>
				<td><?php echo $row['PaymentDate']; ?></td>
				<td><?php echo $row['Amount']; ?></td>
				<td><?php echo $row['Status']; ?></td>
			</tr>
		<?php } ?>
		
		</tbody>
		
		<?php
		break;
		// End Fetching Payments data
		

case 5: // Start Fetching Recurringinvoices data
		$sql = "SELECT * FROM recurringinvoices";
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
				<td><?php echo $row['Phone']; ?></td>
				<td><?php echo $row['Email']; ?></td>
				<td><?php echo $row['StartDate']; ?></td>
				<td><?php echo $row['LastLogin']; ?></td>
				<td><?php echo $row['PrivateNotes']; ?></td>
				<td><?php echo $row['Status']; ?></td>
			</tr>
		<?php } ?>
		
		</tbody>
		
		<?php
		break;
		// End Fetching Recurringinvoices data
		

case 6: // Start Fetching Credits data
		$sql = "SELECT * FROM credits";
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
				<td><?php echo $row['Amount']; ?></td>
				<td><?php echo $row['Balance']; ?></td>
				<td><?php echo $row['CreditDate']; ?></td>
				<td><?php echo $row['PublicNotes']; ?></td>
				<td><?php echo $row['PrivateNotes']; ?></td>
			</tr>
		<?php } ?>
		
		</tbody>
		
		<?php
		break;
		// End Fetching Credits data
		

case 7: // Start Fetching Quotes data
		$sql = "SELECT * FROM quotes";
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
				<td><?php echo $row['Quote']; ?></td>
				<td><?php echo $row['ClientName']; ?></td>
				<td><?php echo $row['QuoteDate']; ?></td>
				<td><?php echo $row['Amount']; ?></td>
				<td><?php echo $row['ValidUntil']; ?></td>
				<td><?php echo $row['Status']; ?></td>
			</tr>
		<?php } ?>
		
		</tbody>
		
		<?php
		break;
		// End Fetching Quotes data
			

case 8: // Start Fetching Projects data
		$sql = "SELECT * FROM projects";
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
				<td><?php echo $row['ProjectName']; ?></td>
				<td><?php echo $row['ClientName']; ?></td>
				<td><?php echo $row['DueDate']; ?></td>
				<td><?php echo $row['BudgetedHours']; ?></td>
				<td><?php echo $row['TaskRate']; ?></td>
			</tr>
		<?php } ?>
		
		</tbody>
		
		<?php
		break;
		// End Fetching Projects data
		
	

case 9: // Start Fetching Tasks data
		$sql = "SELECT * FROM tasks";
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
				<td><?php echo $row['Project']; ?></td>
				<td><?php echo $row['Date']; ?></td>
				<td><?php echo $row['Description']; ?></td>
				<td><?php echo $row['Status']; ?></td>
			</tr>
		<?php } ?>
		
		</tbody>
		
		<?php
		break;
		// End Fetching Tasks data
		


case 10: // Start Fetching Expenses data
		$sql = "SELECT * FROM expenses";
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
				<td><?php echo $row['Vendor']; ?></td>
				<td><?php echo $row['ClientName']; ?></td>
				<td><?php echo $row['Date']; ?></td>
				<td><?php echo $row['Amount']; ?></td>
				<td><?php echo $row['PublicNotes']; ?></td>
				<td><?php echo $row['Status']; ?></td>
			</tr>
		<?php } ?>
		
		</tbody>
		
		<?php
		break;
		// End Fetching Expenses data
		
	

case 11: // Start Fetching Vendors data
		$sql = "SELECT * FROM vendors";
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
				<td><?php echo $row['VendorName']; ?></td>
				<td><?php echo $row['City']; ?></td>
				<td><?php echo $row['Phone']; ?></td>
				<td><?php echo $row['Email']; ?></td>
				<td><?php echo $row['DateCreated']; ?></td>
			</tr>
		<?php } ?>
		
		</tbody>
		
		<?php
		break;
		// End Fetching Vendors data
		


case 12: // Start Fetching Proposals data
		//$sql = "SELECT * FROM proposals";
			
		$sql = "SELECT * FROM proposals p JOIN quotes q ON p.Quote=q.Quote";
		
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
				<td><?php echo $row['Quote']; ?></td>
				<td><?php echo $row['ClientName']; ?></td>
				<td><?php echo $row['Template']; ?></td>
				<td><?php echo $row['DateCreated']; ?></td>
				<td><?php echo $row['Content']; ?></td>
				<td><?php echo $row['PrivateNotes']; ?></td>
			</tr>
		<?php } ?>
		
		</tbody>
		
		<?php
		break;
		// End Fetching Proposals data
		

		
default: echo "None Selected";
}

	mysqli_close($con);
?>