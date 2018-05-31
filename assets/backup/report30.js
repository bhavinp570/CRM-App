// Start Fetching Clients data
function clientsFetchdata() {
	var tabledata;
	var inputs = $(reportsfetch).val();
	$.ajax({
		type: "POST",
		url: 'assets/reportsdata.php',
        data: "fetchdata=" + inputs,
		async: false,
		success: function(gettablecontent){
				tabledata = gettablecontent;
			}
	});
	// alert(tabledata);
	/* if(inputs > '0'){document.getElementById('inithidden').style.display = "block";}
	else{document.getElementById('inithidden').style.display = "none";} */
	
	document.getElementById('order-table').innerHTML=tabledata;
}
// End Fetching Clients data