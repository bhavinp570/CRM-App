// Start Fetching data From Reports
function FetchReport() {
	var tabledata;
	var inputs = $(select_data).val();
	$.ajax({
		type: "POST",
		url: "assets/reports.php",
		data: "fetchdata=" + inputs,
		async: false,
		success: function(gettablecontent){
				tabledata = gettablecontent;
			}
	});
	document.getElementById('order-table').innerHTML=tabledata;
}
// End Fetching data From Reports