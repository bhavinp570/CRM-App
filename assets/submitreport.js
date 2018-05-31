// Start Fetching Clients data
function clientsFetchdata() {
	var tabledata;
	var inputs = $(reportsfetch).val();
	var from_date = $('#from_date').val();
	var to_date = $('#to_date').val();
	if(from_date != '' && to_date != '')
	{
		$.ajax({
			type: "POST",
			url: 'assets/reportsdata.php',
			data: 'fetchdata=' + inputs + '&from_date=' + from_date + '&to_date=' + to_date,
			async: false,
			success: function(gettablecontent){
					//alert(gettablecontent);
					tabledata = gettablecontent;
				}
		});
		document.getElementById('order-table').innerHTML=tabledata;
		/* if(inputs > '0'){document.getElementById('inithidden').style.display = "block";} else{document.getElementById('inithidden').style.display = "none";} */
		//alert(tabledata);
	}
}
// End Fetching Clients data