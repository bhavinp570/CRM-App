<?php

$con = mysqli_connect('localhost','root','','ds');
if(mysqli_connect_errno($con))
{
	echo 'Failed to connect to database: '.mysqli_connect_error();
}

mysqli_select_db($con,"ds");


switch($_POST['fetchdata']){

case 1: // Start Fetching Clients data
		$sql = "SELECT * FROM clients WHERE Date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'";
		
		$result = mysqli_query($con, $sql) or die(mysql_error());
		?>
		<thead>
			<tr>
				<th>Name</th>
				<th>Contact</th>
				<th>Email</th>
				<th>Balance</th>
				<th>Date</th>
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
				<td><?php echo $row['Balance']; ?></td>
				<td><?php echo $row['Date']; ?></td>
			</tr>
		 
		<?php } ?>
		
		</tbody>
	
		<?php 
		break;
		// End Fetching Clients data
		
		
case 2:// Start Fetching Products data
		$sql = "SELECT * FROM products WHERE Date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'";
		$result = mysqli_query($con, $sql) or die(mysql_error());
		?>
		<thead>
			<tr>
				<th>Product</th>
				<th>Notes</th>
				<th>Cost</th>
				<th>Date</th>
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
				<td><?php echo $row['Date']; ?></td>
			</tr>
		<?php } ?>
		
		</tbody>
		
		<?php
		break;
		// End Fetching Products data


case 3: // Start Fetching Invoices data
		$sql = "SELECT * FROM invoices WHERE Date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'";
		$result = mysqli_query($con, $sql) or die(mysql_error());
		?>
		<thead>
			<tr>
				<th>Client Name</th>
				<th>Invoice Number</th>
				<th>Invoice Date</th>
				<th>Amount</th>
				<th>Status</th>
				<th>Due Date</th>
				<th>Balance</th>
				<th>Date</th>
			</tr>
		</thead> 
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($result))
		{ ?>
			<tr>
				<td><?php echo $row['ClientName']; ?></td>
				<td><?php echo $row['Invoice']; ?></td>
				<td><?php echo $row['InvoiceDate']; ?></td>
				<td><?php echo $row['Amount']; ?></td>
				<td><?php echo $row['Status']; ?></td>
				<td><?php echo $row['DueDate']; ?></td>
				<td><?php echo $row['Balance']; ?></td>
				<td><?php echo $row['Date']; ?></td>
			</tr>
		<?php } ?>
		
		</tbody>
		
		<?php
		break;
		// End Fetching Invoices data
		
		
case 4: // Start Fetching Payments data
		$sql = "SELECT * FROM payments WHERE Date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'";
		$result = mysqli_query($con, $sql) or die(mysql_error());
		?>
		<thead>
			<tr>
				<th>Invoice Number</th>
				<th>Client Name</th>
				<th>Transaction Reference</th>
				<th>Payment Date</th>
				<th>Amount</th>
				<th>Status</th>
				<th>Date</th>
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
				<td><?php echo $row['Date']; ?></td>
			</tr>
		<?php } ?>
		
		</tbody>
		
		<?php
		break;
		// End Fetching Payments data
		

case 5: // Start Fetching Recurringinvoices data
		$sql = "SELECT * FROM recurringinvoices WHERE Date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'";
		$result = mysqli_query($con, $sql) or die(mysql_error());
		?>
		<thead>
			<tr>
				<th>Client Name</th>
				<th>Contact</th>
				<th>Email</th>
				<th>Start Date</th>
				<th>Last Login</th>
				<th>Status</th>
				<th>Date</th>
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
				<td><?php echo $row['Status']; ?></td>
				<td><?php echo $row['Date']; ?></td>
			</tr>
		<?php } ?>
		
		</tbody>
		
		<?php
		break;
		// End Fetching Recurringinvoices data
		

case 6: // Start Fetching Credits data
		$sql = "SELECT * FROM credits WHERE Date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'";
		$result = mysqli_query($con, $sql) or die(mysql_error());
		?>
		<thead>
			<tr>
				<th>Client Name</th>
				<th>Amount</th>
				<th>Balance</th>
				<th>Date</th>
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
				<td><?php echo $row['Date']; ?></td>
			</tr>
		<?php } ?>
		
		</tbody>
		
		<?php
		break;
		// End Fetching Credits data
		

case 7: // Start Fetching Quotes data
		$sql = "SELECT * FROM quotes WHERE Date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'";
		$result = mysqli_query($con, $sql) or die(mysql_error());
		?>
		<thead>
			<tr>
				<th>Client Name</th>
				<th>Quote</th>
				<th>Quote Date</th>
				<th>Amount</th>
				<th>Status</th>
				<th>Date</th>
			</tr>
		</thead> 
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($result))
		{ ?>
			<tr>
				<td><?php echo $row['ClientName']; ?></td>
				<td><?php echo $row['Quote']; ?></td>
				<td><?php echo $row['QuoteDate']; ?></td>
				<td><?php echo $row['Amount']; ?></td>
				<td><?php echo $row['Status']; ?></td>
				<td><?php echo $row['Date']; ?></td>
			</tr>
		<?php } ?>
		
		</tbody>
		
		<?php
		break;
		// End Fetching Quotes data
			

case 8: // Start Fetching Projects data
		$sql = "SELECT * FROM projects WHERE Date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'";
		$result = mysqli_query($con, $sql) or die(mysql_error());
		?>
		<thead>
			<tr>
				<th>Client Name</th>
				<th>Project Name</th>
				<th>Due Date</th>
				<th>Budgeted Hours</th>
				<th>Task Rate</th>
				<th>Date</th>
			</tr>
		</thead> 
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($result))
		{ ?>
			<tr>
				<td><?php echo $row['ClientName']; ?></td>
				<td><?php echo $row['ProjectName']; ?></td>
				<td><?php echo $row['DueDate']; ?></td>
				<td><?php echo $row['BudgetedHours']; ?></td>
				<td><?php echo $row['TaskRate']; ?></td>
				<td><?php echo $row['Date']; ?></td>
			</tr>
		<?php } ?>
		
		</tbody>
		
		<?php
		break;
		// End Fetching Projects data
		
	

case 9: // Start Fetching Tasks data
		$sql = "SELECT * FROM tasks WHERE Date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'";
		$result = mysqli_query($con, $sql) or die(mysql_error());
		?>
		<thead>
			<tr>
				<th>Client Name</th>
				<th>Project</th>
				<th>Date</th>
				<th>Description</th>
				<th>Status</th>
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
		$sql = "SELECT * FROM expenses WHERE Date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'";
		$result = mysqli_query($con, $sql) or die(mysql_error());
		?>
		<thead>
			<tr>
				<th>Vendor</th>
				<th>Client Name</th>
				<th>Date</th>
				<th>Amount</th>
				<th>Status</th>
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
				<td><?php echo $row['Status']; ?></td>
			</tr>
		<?php } ?>
		
		</tbody>
		
		<?php
		break;
		// End Fetching Expenses data
		
	

case 11: // Start Fetching Vendors data
		$sql = "SELECT * FROM vendors WHERE Date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'";
		$result = mysqli_query($con, $sql) or die(mysql_error());
		?>
		<thead>
			<tr>
				<th>Vendor Name</th>
				<th>City</th>
				<th>Date</th>
			</tr>
		</thead> 
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($result))
		{ ?>
			<tr>
				<td><?php echo $row['VendorName']; ?></td>
				<td><?php echo $row['City']; ?></td>
				<td><?php echo $row['Date']; ?></td>
			</tr>
		<?php } ?>
		
		</tbody>
		
		<?php
		break;
		// End Fetching Vendors data
		


case 12: // Start Fetching Proposals data
		//$sql = "SELECT * FROM proposals";
			
		$sql = "SELECT * FROM proposals p JOIN quotes q ON p.Quote=q.Quote WHERE Date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'";
		
		$result = mysqli_query($con, $sql) or die(mysql_error());
		?>
		<thead>
			<tr>
				<th>Client Name</th>
				<th>Quote</th>
				<th>Template</th>
				<th>Content</th>
				<th>Date</th>
			</tr>
		</thead> 
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($result))
		{ ?>
			<tr>
				<td><?php echo $row['ClientName']; ?></td>
				<td><?php echo $row['Quote']; ?></td>
				<td><?php echo $row['Template']; ?></td>
				<td><?php echo $row['Content']; ?></td>
				<td><?php echo $row['Date']; ?></td>
			</tr>
		<?php } ?>
		
		</tbody>
		
		<?php
		break;
		// End Fetching Proposals data
		

		
default: ?>
		<thead>
			<tr>
				<th></th>
				<th></th>
			</tr>
		</thead> 
		<tbody>
			<tr>
				<td></td>
				<td></td>
			</tr>
		</tbody>
		<?php
}

	mysqli_close($con);
?>