// Start Fetching Clients data
function clientsFetchdata() {
var tabledata;
	$.ajax({
		type: "POST",
		url: 'assets/submit.php',
        data: "mode=" + "1",
		async: false,
		success: function(gettablecontent){
				tabledata = gettablecontent;
			}
	});
	// alert(tabledata);
	document.getElementById('tdata').innerHTML=tabledata;
}
// End Fetching Clients data


// Start Inserting Clients data
$('#clientform').on('submit',function(e){
e.preventDefault();
$.ajax({
    type: "POST",
    url: "assets/submit.php",
    data: $("#clientform").serialize()+'&mode='+"2",
    cache: false,
    success: function(html) {
		getresponse = html;
		formresponse(getresponse);
		if(getresponse == '1'){document.getElementById('clientform').reset();}
    }
    });
});
// End Inserting Clients data

// Start Fetching Products data
function productsFetchdata() {
var tabledata;
	$.ajax({
		type: "POST",
		url: 'assets/submit.php',
        data: "mode=" + "3",
		async: false,
		success: function(gettablecontent){
				tabledata = gettablecontent;
			}
	});
	// alert(tabledata);
	document.getElementById('tdata').innerHTML=tabledata;  
}
// End Fetching Products data


// Start Inserting Products data
$('#productform').on('submit',function(e){
e.preventDefault();
$.ajax({
    type: "POST",
    url: "assets/submit.php",
    data: $("#productform").serialize()+'&mode='+"4",
    cache: false,
    success: function(html) {
		getresponse = html;
		formresponse(getresponse);
		if(getresponse == '1'){document.getElementById('productform').reset();}
    }
    });
});
// End Inserting Products data

// Start Fetching Invoices data
function invoicesFetchdata() {
var tabledata;
	$.ajax({
		type: "POST",
		url: 'assets/submit.php',
        data: "mode=" + "5",
		async: false,
		success: function(gettablecontent){
				tabledata = gettablecontent;
			}
	});
	// alert(tabledata);
	document.getElementById('tdata').innerHTML=tabledata;  
}
// End Fetching Invoices data


// Start Inserting Invoices data
$('#invoiceform').on('submit',function(e){
e.preventDefault();
$.ajax({
    type: "POST",
    url: "assets/submit.php",
    data: $("#invoiceform").serialize()+'&mode='+"6",
    cache: false,
    success: function(html) {
		getresponse = html;
		formresponse(getresponse);
		if(getresponse == '1'){document.getElementById('invoiceform').reset();}
    }
    });
});
// End Inserting Invoices data

// Start Fetching Payments data
function paymentsFetchdata() {
var tabledata;
	$.ajax({
		type: "POST",
		url: 'assets/submit.php',
        data: "mode=" + "7",
		async: false,
		success: function(gettablecontent){
				tabledata = gettablecontent;
			}
	});
	// alert(tabledata);
	document.getElementById('tdata').innerHTML=tabledata;  
}
// End Fetching Payments data


// Start Inserting Payments data
$('#paymentform').on('submit',function(e){
e.preventDefault();
$.ajax({
    type: "POST",
    url: "assets/submit.php",
    data: $("#paymentform").serialize()+'&mode='+"8",
    cache: false,
    success: function(html) {
		getresponse = html;
		formresponse(getresponse);
		if(getresponse == '1'){document.getElementById('paymentform').reset();}
    }
    });
});
// End Inserting Payments data

// Start Fetching Recurringinvoices data
function recurringFetchdata() {
var tabledata;
	$.ajax({
		type: "POST",
		url: 'assets/submit.php',
        data: "mode=" + "9",
		async: false,
		success: function(gettablecontent){
				tabledata = gettablecontent;
			}
	});
	// alert(tabledata);
	document.getElementById('tdata').innerHTML=tabledata;  
}
// End Fetching Recurringinvoices data


// Start Inserting Recurringinvoices data
$('#recurringform').on('submit',function(e){
e.preventDefault();
$.ajax({
    type: "POST",
    url: "assets/submit.php",
    data: $("#recurringform").serialize()+'&mode='+"10",
    cache: false,
    success: function(html) {
		getresponse = html;
		formresponse(getresponse);
		if(getresponse == '1'){document.getElementById('recurringform').reset();}
    }
    });
});
// End Inserting Recurringinvoices data

// Start Fetching Credits data
function creditsFetchdata() {
var tabledata;
	$.ajax({
		type: "POST",
		url: 'assets/submit.php',
        data: "mode=" + "11",
		async: false,
		success: function(gettablecontent){
				tabledata = gettablecontent;
			}
	});
	// alert(tabledata);
	document.getElementById('tdata').innerHTML=tabledata;  
}
// End Fetching Credits data


// Start Inserting Credits data
$('#creditform').on('submit',function(e){
e.preventDefault();
$.ajax({
    type: "POST",
    url: "assets/submit.php",
    data: $("#creditform").serialize()+'&mode='+"12",
    cache: false,
    success: function(html) {
		getresponse = html;
		formresponse(getresponse);
		if(getresponse == '1'){document.getElementById('creditform').reset();}
    }
    });
});
// End Inserting Credits data

// Start Fetching Quotes data
function quotesFetchdata() {
var tabledata;
	$.ajax({
		type: "POST",
		url: 'assets/submit.php',
        data: "mode=" + "13",
		async: false,
		success: function(gettablecontent){
				tabledata = gettablecontent;
			}
	});
	// alert(tabledata);
	document.getElementById('tdata').innerHTML=tabledata;  
}
// End Fetching Quotes data


// Start Inserting Quotes data
$('#quoteform').on('submit',function(e){
e.preventDefault();
$.ajax({
    type: "POST",
    url: "assets/submit.php",
    data: $("#quoteform").serialize()+'&mode='+"14",
    cache: false,
    success: function(html) {
		getresponse = html;
		formresponse(getresponse);
		if(getresponse == '1'){document.getElementById('quoteform').reset();}
    }
    });
});
// End Inserting Quotes data

// Start Fetching Projects data
function projectsFetchdata() {
var tabledata;
	$.ajax({
		type: "POST",
		url: 'assets/submit.php',
        data: "mode=" + "15",
		async: false,
		success: function(gettablecontent){
				tabledata = gettablecontent;
			}
	});
	// alert(tabledata);
	document.getElementById('tdata').innerHTML=tabledata;  
}
// End Fetching Projects data


// Start Inserting Projects data
$('#projectform').on('submit',function(e){
e.preventDefault();
$.ajax({
    type: "POST",
    url: "assets/submit.php",
    data: $("#projectform").serialize()+'&mode='+"16",
    cache: false,
    success: function(html) {
		getresponse = html;
		formresponse(getresponse);
		if(getresponse == '1'){document.getElementById('projectform').reset();}
    }
    });
});
// End Inserting Projects data

// Start Fetching Tasks data
function tasksFetchdata() {
var tabledata;
	$.ajax({
		type: "POST",
		url: 'assets/submit.php',
        data: "mode=" + "17",
		async: false,
		success: function(gettablecontent){
				tabledata = gettablecontent;
			}
	});
	// alert(tabledata);
	document.getElementById('tdata').innerHTML=tabledata;  
}
// End Fetching Tasks data


// Start Inserting Tasks data
$('#taskform').on('submit',function(e){
e.preventDefault();
$.ajax({
    type: "POST",
    url: "assets/submit.php",
    data: $("#taskform").serialize()+'&mode='+"18",
    cache: false,
    success: function(html) {
		getresponse = html;
		formresponse(getresponse);
		if(getresponse == '1'){document.getElementById('taskform').reset();}
    }
    });
});
// End Inserting Tasks data

// Start Fetching Expenses data
function expensesFetchdata() {
var tabledata;
	$.ajax({
		type: "POST",
		url: 'assets/submit.php',
        data: "mode=" + "19",
		async: false,
		success: function(gettablecontent){
				tabledata = gettablecontent;
			}
	});
	// alert(tabledata);
	document.getElementById('tdata').innerHTML=tabledata;  
}
// End Fetching Expenses data


// Start Inserting Expenses data
$('#expenseform').on('submit',function(e){
e.preventDefault();
$.ajax({
    type: "POST",
    url: "assets/submit.php",
    data: $("#expenseform").serialize()+'&mode='+"20",
    cache: false,
    success: function(html) {
		getresponse = html;
		formresponse(getresponse);
		if(getresponse == '1'){document.getElementById('expenseform').reset();}
    }
    });
});
// End Inserting Expenses data


// Start Fetching Vendors data
function vendorsFetchdata() {
var tabledata;
	$.ajax({
		type: "POST",
		url: 'assets/submit.php',
        data: "mode=" + "21",
		async: false,
		success: function(gettablecontent){
				tabledata = gettablecontent;
			}
	});
	// alert(tabledata);
	document.getElementById('tdata').innerHTML=tabledata;  
}
// End Fetching Vendors data


// Start Inserting Vendors data
$('#vendorform').on('submit',function(e){
e.preventDefault();
$.ajax({
    type: "POST",
    url: "assets/submit.php",
    data: $("#vendorform").serialize()+'&mode='+"22",
    cache: false,
    success: function(html) {
		getresponse = html;
		formresponse(getresponse);
		if(getresponse == '1'){document.getElementById('vendorform').reset();}
    }
    });
});
// End Inserting Vendors data

// Start Fetching Proposals data
function proposalsFetchdata() {
var tabledata;
	$.ajax({
		type: "POST",
		url: 'assets/submit.php',
        data: "mode=" + "23",
		async: false,
		success: function(gettablecontent){
				tabledata = gettablecontent;
			}
	});
	// alert(tabledata);
	document.getElementById('tdata').innerHTML=tabledata;  
}
// End Fetching Proposals data


// Start Inserting Proposals data
$('#proposalform').on('submit',function(e){
e.preventDefault();
$.ajax({
    type: "POST",
    url: "assets/submit.php",
    data: $("#proposalform").serialize()+'&mode='+"24",
    cache: false,
    success: function(html) {
		getresponse = html;
		formresponse(getresponse);
		if(getresponse == '1'){document.getElementById('proposalform').reset();}
    }
    });
});
// End Inserting Proposals data

// Start Fetching Upcominginvoices data
function upinvoicesFetchdata() {
var tabledata;
	$.ajax({
		type: "POST",
		url: 'assets/submit.php',
        data: "mode=" + "25",
		async: false,
		success: function(gettablecontent){
				tabledata = gettablecontent;
			}
	});
	// alert(tabledata);
	document.getElementById('updata').innerHTML=tabledata;
}
// End Fetching Upcominginvoices data


// Start Fetching Invoicespastdue data
function invoicespastFetchdata() {
var tabledata;
	$.ajax({
		type: "POST",
		url: 'assets/submit.php',
        data: "mode=" + "26",
		async: false,
		success: function(gettablecontent){
				tabledata = gettablecontent;
			}
	});
	// alert(tabledata);
	document.getElementById('pastdata').innerHTML=tabledata;
}
// End Fetching Invoicespastdue data


// Start Fetching ClientName data
function clientnamefetch() {
var options;
	$.ajax({
		type: "POST",
		url: 'assets/submit.php',
        data: "mode=" + "27",
		async: false,
		success: function(gettablecontent){
				options = gettablecontent;
			}
	});
	// alert(tabledata);
	document.getElementById('select_name').innerHTML= '<option value="" selected> </option>' + options;
}
// End Fetching ClientName data


// Start Fetching invoice_Email_Phone data
function selectinvoicedata() {
	var inputs = $(select_name).val();
	$.ajax({
		type: "POST",
		url: "assets/submit.php",
		data: "fetchdata=" + inputs + "&mode=" + "28",
		dataType: 'json',
		cache: false,
		success: function(getcontent) {
			$('#select_email').val(getcontent[0]);
			$('#select_Phone').val(getcontent[1]);
			//alert(outputfromserver[0]);
		}
    });
}
// End Fetching invoice_Email_Phone data


// Start Fetching Payment_ClientName from invoice
function invoicenamefetch() {
var options;
	$.ajax({
		type: "POST",
		url: 'assets/submit.php',
        data: "mode=" + "29",
		async: false,
		success: function(gettablecontent){
				options = gettablecontent;
			}
	});
	// alert(tabledata);
	document.getElementById('select_name').innerHTML= '<option value="" selected> </option>' + options;
}
// End Fetching Payment_ClientName from invoice


// Start Fetching Payment_invoice_num from invoice
function selectinvoicenum() {
	var inputs = $(select_name).val();
	$.ajax({
		type: "POST",
		url: "assets/submit.php",
		data: "fetchdata=" + inputs + "&mode=" + "30",
		dataType: 'json',
		cache: false,
		success: function(getcontent) {
			$('#invoice_num').val(getcontent[0]);
			//alert(outputfromserver[0]);
		}
    });
}
// End Fetching Payment_invoice_num from invoice


// Start Fetching Item from Products
function itemfetch() {
var options;
	$.ajax({
		type: "POST",
		url: 'assets/submit.php',
        data: "mode=" + "31",
		async: false,
		success: function(gettablecontent){
				options = gettablecontent;
			}
	});
	// alert(tabledata);
	document.getElementById('select_item').innerHTML= '<option value=""> </option>' + options;
}
// End Fetching Item from Products


// Start Fetching QuoteNumber from Quotes
function quotenumfetch() {
var options;
	$.ajax({
		type: "POST",
		url: 'assets/submit.php',
        data: "mode=" + "32",
		async: false,
		success: function(gettablecontent){
				options = gettablecontent;
			}
	});
	// alert(tabledata);
	document.getElementById('select_quote').innerHTML= '<option value="" selected> </option>' + options;
}
// End Fetching QuoteNumber from Quotes


// Start Fetching ProjectName from Project
function projectnamefetch() {
var options;
	$.ajax({
		type: "POST",
		url: 'assets/submit.php',
        data: "mode=" + "33",
		async: false,
		success: function(gettablecontent){
				options = gettablecontent;
			}
	});
	// alert(tabledata);
	document.getElementById('select_projectname').innerHTML= '<option value="" selected> </option>' + options;
}
// End Fetching ProjectName from Project


// Start Fetching VendorsName from Vendors
function vendornamefetch() {
var options;
	$.ajax({
		type: "POST",
		url: 'assets/submit.php',
        data: "mode=" + "34",
		async: false,
		success: function(gettablecontent){
				options = gettablecontent;
			}
	});
	// alert(tabledata);
	document.getElementById('select_vendorname').innerHTML= '<option value="" selected> </option>' + options;
}
// End Fetching VendorsName from Vendors


// Start Fetching ClientName from Quotes
function quoteCnamefetch() {
	var inputs = $(select_quote).val();
	$.ajax({
		type: "POST",
		url: "assets/submit.php",
		data: "fetchdata=" + inputs + "&mode=" + "35",
		dataType: 'json',
		cache: false,
		success: function(getcontent) {
			$('#quote_clientname').val(getcontent[0]);
			//alert(outputfromserver[0]);
		}
    });
}
// End Fetching QuoteName from Quotes


// Start Fetching ProjectName from Project
function taskpnamefetch() {
	var inputs = $(select_name).val();
	$.ajax({
		type: "POST",
		url: "assets/submit.php",
		data: "fetchdata=" + inputs + "&mode=" + "36",
		dataType: 'json',
		cache: false,
		success: function(getcontent) {
			$('#task_projectname').val(getcontent[0]);
			//alert(outputfromserver[0]);
		}
    });
}
// End Fetching ProjectName from Project