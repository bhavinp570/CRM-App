<?php

$con = mysqli_connect('localhost','root','','ds');
if(mysqli_connect_errno($con))
{
	echo 'Failed to connect to database: '.mysqli_connect_error();
}

mysqli_select_db($con,"ds");

switch($_POST['mode']){

case 1: // Start Fetching Clients data
		$sql = "SELECT * FROM clients";
		$result = mysqli_query($con, $sql) or die(mysql_error());

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
		<?php }
		break;
		// End Fetching Clients data
		
case 2: // Start Inserting Clients data
		$sql = "insert into clients(ClientName, VatNumber, Email, Phone, Website, Street, AptSuit, City, StateProvince, PostalCode, Country) values ('".$_POST['name']."','".$_POST['vatnumber']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['website']."','".$_POST['street']."','".$_POST['apt']."','".$_POST['city']."','".$_POST['state']."','".$_POST['postalcode']."','".$_POST['select']."')";
		if(mysqli_query($con, $sql) or die(mysql_error())){
			echo "1";
		}else {
			echo "0";
		}
		break;
		// End Inserting Clients data
		
case 3:// Start Fetching Products data
		$sql = "SELECT * FROM products";
		$result = mysqli_query($con, $sql) or die(mysql_error());

		while ($row = mysqli_fetch_array($result))
		{ ?>
			<tr>
				<td><?php echo $row['Product']; ?></td>
				<td><?php echo $row['Notes']; ?></td>
				<td><?php echo $row['Cost']; ?></td>
			</tr>
		<?php }
		break;
		// End Fetching Products data

case 4: // Start Inserting Products data
		$sql = "insert into products(Product, Cost, Notes) values ('".$_POST['product']."','".$_POST['cost']."','".$_POST['notes']."')";
		if(mysqli_query($con, $sql) or die(mysql_error())){
			echo "1";
		}else {
			echo "0";
		}
		break;
		// End Inserting Products data

case 5: // Start Fetching Invoices data
		$sql = "SELECT * FROM invoices";
		$result = mysqli_query($con, $sql) or die(mysql_error());

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
		<?php }
		break;
		// End Fetching Invoices data
		
case 6: // Start Inserting Invoices data
		$sql = "insert into invoices(ClientName, Email, Phone, Invoice, InvoiceDate, Po, DueDate, PartialDepo, Discount, Item, Description, UnitCost, Quantity, Currency, PrivateNotes, Terms, PublicNotes, Footer) values ('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['invoice']."','".$_POST['invoicedate']."','".$_POST['po']."','".$_POST['duedate']."','".$_POST['partial']."','".$_POST['discount']."','".$_POST['item']."','".$_POST['description']."','".$_POST['unitcost']."','".$_POST['quantity']."','".$_POST['currency']."','".$_POST['private']."','".$_POST['terms']."','".$_POST['public']."','".$_POST['footer']."')";
		if(mysqli_query($con, $sql) or die(mysql_error())){
			echo "1";
		}else {
			echo "0";
		}
		break;
		// End Inserting Invoices data
		
case 7: // Start Fetching Payments data
		$sql = "SELECT * FROM payments";
		$result = mysqli_query($con, $sql) or die(mysql_error());

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
		<?php }
		break;
		// End Fetching Payments data
		
case 8: // Start Inserting Payments data
		$sql = "insert into payments(ClientName, Invoice, Amount, PaymentType, PaymentDate, TransactionReference, PrivateNotes, Currency, ExchangeRate, ConvertedAmount) values ('".$_POST['name']."','".$_POST['invoice']."','".$_POST['amount']."','".$_POST['paymenttype']."','".$_POST['paymentdate']."','".$_POST['transaction']."','".$_POST['currency']."','".$_POST['exchange']."','".$_POST['converted']."','".$_POST['private']."')";
		if(mysqli_query($con, $sql) or die(mysql_error())){
			echo "1";
		}else {
			echo "0";
		}
		break;
		// End Inserting Payments data

case 9: // Start Fetching Recurringinvoices data
		$sql = "SELECT * FROM recurringinvoices";
		$result = mysqli_query($con, $sql) or die(mysql_error());

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
		<?php }
		break;
		// End Fetching Recurringinvoices data
		
case 10: // Start Inserting Recurringinvoices data
		$sql = "insert into recurringinvoices(ClientName, Email, Phone, Po, Frequency, AutoBill, StartDate, EndDate, DueDate, Currency, Discount, Item, Description, UnitCost, Quantity, PublicNotes, PrivateNotes, Terms, Footer) values ('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['po']."','".$_POST['frequency']."','".$_POST['autobill']."','".$_POST['startdate']."','".$_POST['enddate']."','".$_POST['duedate']."','".$_POST['currency']."','".$_POST['discount']."','".$_POST['item']."','".$_POST['description']."','".$_POST['unitcost']."','".$_POST['quantity']."','".$_POST['publicnotes']."','".$_POST['privatenotes']."','".$_POST['terms']."','".$_POST['footer']."')";
		if(mysqli_query($con, $sql) or die(mysql_error())){
			echo "1";
		}else {
			echo "0";
		}
		break;
		// End Inserting Recurringinvoices data	

case 11: // Start Fetching Credits data
		$sql = "SELECT * FROM credits";
		$result = mysqli_query($con, $sql) or die(mysql_error());

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
		<?php }
		break;
		// End Fetching Credits data
		
case 12: // Start Inserting Credits data
		$sql = "insert into credits(ClientName, Amount, CreditDate, PublicNotes, PrivateNotes) values ('".$_POST['name']."','".$_POST['amount']."','".$_POST['creditdate']."','".$_POST['publicnotes']."','".$_POST['privatenotes']."')";
		if(mysqli_query($con, $sql) or die(mysql_error())){
			echo "1";
		}else {
			echo "0";
		}
		break;
		// End Inserting Credits data

case 13: // Start Fetching Quotes data
		$sql = "SELECT * FROM quotes";
		$result = mysqli_query($con, $sql) or die(mysql_error());

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
		<?php }
		break;
		// End Fetching Quotes data
		
case 14: // Start Inserting Quotes data
		$sql = "insert into quotes(ClientName, Email, Phone, QuoteDate, Quote, Po, ValidUntil, PartialDepo, Discount, Item, Description, UnitCost, Quantity, Currency, PrivateNotes, Terms, PublicNotes, 	Footer) values ('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['quotedate']."','".$_POST['quote']."','".$_POST['po']."','".$_POST['validuntil']."','".$_POST['partial']."','".$_POST['discount']."','".$_POST['item']."','".$_POST['description']."','".$_POST['unitcost']."','".$_POST['quantity']."','".$_POST['currency']."','".$_POST['privatenotes']."','".$_POST['terms']."','".$_POST['publicnotes']."','".$_POST['footer']."')";
		if(mysqli_query($con, $sql) or die(mysql_error())){
			echo "1";
		}else {
			echo "0";
		}
		break;
		// End Inserting Quotes data	

case 15: // Start Fetching Projects data
		$sql = "SELECT * FROM projects";
		$result = mysqli_query($con, $sql) or die(mysql_error());

		while ($row = mysqli_fetch_array($result))
		{ ?>
			<tr>
				<td><?php echo $row['ProjectName']; ?></td>
				<td><?php echo $row['ClientName']; ?></td>
				<td><?php echo $row['DueDate']; ?></td>
				<td><?php echo $row['BudgetedHours']; ?></td>
				<td><?php echo $row['TaskRate']; ?></td>
			</tr>
		<?php }
		break;
		// End Fetching Projects data
		
case 16: // Start Inserting Projects data
		$sql = "insert into projects(ClientName, DueDate, BudgetedHours, TaskRate, ProjectName, PrivateNotes) values ('".$_POST['name']."','".$_POST['duedate']."','".$_POST['budgetedhours']."','".$_POST['taskrate']."','".$_POST['projectname']."','".$_POST['privatenotes']."')";
		if(mysqli_query($con, $sql) or die(mysql_error())){
			echo "1";
		}else {
			echo "0";
		}
		break;
		// End Inserting Projects data	

case 17: // Start Fetching Tasks data
		$sql = "SELECT * FROM tasks";
		$result = mysqli_query($con, $sql) or die(mysql_error());

		while ($row = mysqli_fetch_array($result))
		{ ?>
			<tr>
				<td><?php echo $row['ClientName']; ?></td>
				<td><?php echo $row['Project']; ?></td>
				<td><?php echo $row['Date']; ?></td>
				<td><?php echo $row['Description']; ?></td>
				<td><?php echo $row['Status']; ?></td>
			</tr>
		<?php }
		break;
		// End Fetching Tasks data
		
case 18: // Start Inserting Tasks data
		$sql = "insert into tasks(ClientName, Project, Description) values ('".$_POST['name']."','".$_POST['project']."','".$_POST['description']."')";
		if(mysqli_query($con, $sql) or die(mysql_error())){
			echo "1";
		}else {
			echo "0";
		}
		break;
		// End Inserting Tasks data	

case 19: // Start Fetching Expenses data
		$sql = "SELECT * FROM expenses";
		$result = mysqli_query($con, $sql) or die(mysql_error());

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
		<?php }
		break;
		// End Fetching Expenses data
		
case 20: // Start Inserting Expenses data
		$sql = "insert into expenses(Vendor, Amount, Currency, ClientName, Date, PublicNotes, PrivateNotes) values ('".$_POST['vendor']."','".$_POST['amount']."','".$_POST['currency']."','".$_POST['client']."','".$_POST['date']."','".$_POST['publicnotes']."','".$_POST['privatenotes']."')";
		if(mysqli_query($con, $sql) or die(mysql_error())){
			echo "1";
		}else {
			echo "0";
		}
		break;
		// End Inserting Expenses data	

case 21: // Start Fetching Vendors data
		$sql = "SELECT * FROM vendors";
		$result = mysqli_query($con, $sql) or die(mysql_error());

		while ($row = mysqli_fetch_array($result))
		{ ?>
			<tr>
				<td><?php echo $row['VendorName']; ?></td>
				<td><?php echo $row['City']; ?></td>
				<td><?php echo $row['Phone']; ?></td>
				<td><?php echo $row['Email']; ?></td>
				<td><?php echo $row['DateCreated']; ?></td>
			</tr>
		<?php }
		break;
		// End Fetching Vendors data
		
case 22: // Start Inserting Vendors data
		$sql = "insert into vendors(VendorName, VatNumber, Email, Phone, Website, Currency, PrivateNotes, Street, AptSuit, City, StateProvince, PostalCode, Country) values ('".$_POST['name']."','".$_POST['vatnumber']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['website']."','".$_POST['currency']."','".$_POST['privatenotes']."','".$_POST['street']."','".$_POST['apt']."','".$_POST['city']."','".$_POST['state']."','".$_POST['postalcode']."','".$_POST['country']."')";
		if(mysqli_query($con, $sql) or die(mysql_error())){
			echo "1";
		}else {
			echo "0";
		}
		break;
		// End Inserting Vendors data

case 23: // Start Fetching Proposals data
		//$sql = "SELECT * FROM proposals";
		
		$sql = "SELECT * FROM proposals p JOIN quotes q ON p.Quote=q.Quote";
		
		$result = mysqli_query($con, $sql) or die(mysql_error());

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
		<?php }
		break;
		// End Fetching Proposals data
		
case 24: // Start Inserting Proposals data
		$sql = "insert into proposals(Quote, Template, PrivateNotes) values ('".$_POST['quote']."','".$_POST['template']."','".$_POST['privatenotes']."')";
		if(mysqli_query($con, $sql) or die(mysql_error())){
			echo "1";
		}else {
			echo "0";
		}
		break;
		// End Inserting Proposals data		
		
case 25: // Start Fetching Upcominginvoices data
		$sql = "SELECT * FROM upcominginvoices";
		$result = mysqli_query($con, $sql) or die(mysql_error());

		while ($row = mysqli_fetch_array($result))
		{ ?>
			<tr>
				<td><?php echo $row['InvoiceNumber']; ?></td>
				<td><?php echo $row['ClientName']; ?></td>
				<td><?php echo $row['InvoiceDate']; ?></td>
				<td><?php echo $row['Due']; ?></td>
			</tr>
		<?php }
		break;
		// End Fetching Upcominginvoices data

case 26: // Start Fetching Invoicespastdue data
		$sql = "SELECT * FROM invoicespastdue";
		$result = mysqli_query($con, $sql) or die(mysql_error());

		while ($row = mysqli_fetch_array($result))
		{ ?>
			<tr>
				<td><?php echo $row['InvoiceNumber']; ?></td>
				<td><?php echo $row['ClientName']; ?></td>
				<td><?php echo $row['InvoiceDate']; ?></td>
				<td><?php echo $row['Due']; ?></td>
			</tr>
		<?php }
		break;
		// End Fetching Invoicespastdue data	

case 27: // Start Fetching ClientName from clients
		$sql = "SELECT ClientName FROM clients";
		$result = mysqli_query($con, $sql) or die(mysql_error());

		while ($row = mysqli_fetch_array($result))
		{ ?>
			<option value="<?php echo $row['ClientName']; ?>"><?php echo $row['ClientName']; ?></option>
		<?php }
		break;
		// End Fetching ClientName from clients
	
	
case 28: // Start Fetching Invoice_Email_Phone from clients

		$temp4 = $_POST['fetchdata'];
		$sql = "SELECT Email,Phone FROM clients WHERE ClientName = '$temp4'";
		$result = mysqli_query($con, $sql) or die(mysql_error());

		$row2 = mysqli_fetch_array($result);
		echo json_encode($row2);
		break;
		// End Fetching Invoice_Email_Phone from clients


case 29: // Start Fetching Payment_ClientName from invoice 
		$sql = "SELECT ClientName FROM invoices";
		$result = mysqli_query($con, $sql) or die(mysql_error());

		while ($row = mysqli_fetch_array($result))
		{ ?>
			<option value="<?php echo $row['ClientName']; ?>"><?php echo $row['ClientName']; ?></option>
		<?php }
		break;
		// End Fetching Payment_ClientName from invoice		
		
		
case 30: // Start Fetching Payment_invoice_num from invoice
		$temp4 = $_POST['fetchdata'];
		$sql = "SELECT 	Invoice FROM invoices WHERE ClientName = '$temp4'";
		$result = mysqli_query($con, $sql) or die(mysql_error());

		$row2 = mysqli_fetch_array($result);
		echo json_encode($row2);
		break;
		// End Fetching Payment_invoice_num from invoice
		
case 31: // Start Fetching Item from Products
		$sql = "SELECT Product FROM products";
		$result = mysqli_query($con, $sql) or die(mysql_error());

		while ($row = mysqli_fetch_array($result))
		{ ?>
			<option value="<?php echo $row['Product']; ?>"><?php echo $row['Product']; ?></option>
		<?php }
		break;
		// End Fetching Item from Products		


case 32: // Start Fetching QuoteNumber from Quotes
		$sql = "SELECT Quote FROM quotes";
		$result = mysqli_query($con, $sql) or die(mysql_error());

		while ($row = mysqli_fetch_array($result))
		{ ?>
			<option value="<?php echo $row['Quote']; ?>"><?php echo $row['Quote']; ?></option>
		<?php }
		break;
		// End Fetching QuoteNumber from Quotes
	
			
case 33: // Start Fetching ProjectName from Project
		$sql = "SELECT ProjectName FROM projects";
		$result = mysqli_query($con, $sql) or die(mysql_error());

		while ($row = mysqli_fetch_array($result))
		{ ?>
			<option value="<?php echo $row['ProjectName']; ?>"><?php echo $row['ProjectName']; ?></option>
		<?php }
		break;
		// End Fetching ProjectName from Project


case 34: // Start Fetching VendorsName from Vendors
		$sql = "SELECT VendorName FROM vendors";
		$result = mysqli_query($con, $sql) or die(mysql_error());

		while ($row = mysqli_fetch_array($result))
		{ ?>
			<option value="<?php echo $row['VendorName']; ?>"><?php echo $row['VendorName']; ?></option>
		<?php }
		break;
		// End Fetching VendorsName from Vendors
	
case 35: // Start Fetching QuoteName from Quotes
		$temp4 = $_POST['fetchdata'];
		$sql = "SELECT 	ClientName FROM quotes WHERE Quote = '$temp4'";
		$result = mysqli_query($con, $sql) or die(mysql_error());

		$row2 = mysqli_fetch_array($result);
		echo json_encode($row2);
		break;
		// End Fetching QuoteName from Quotes


case 36: // Start Fetching ProjectName from Project
		$temp4 = $_POST['fetchdata'];
		$sql = "SELECT 	ProjectName FROM projects WHERE ClientName= '$temp4'";
		$result = mysqli_query($con, $sql) or die(mysql_error());

		$row2 = mysqli_fetch_array($result);
		echo json_encode($row2);
		break;
		// End Fetching ProjectName from Project
		
default: echo "None Selected";
}

	mysqli_close($con);
?>