var al = function(currentDateTime) {

	$.ajax({
		url: 'assets/getdate.php',
		type: 'POST',
		dataType: "json",
		contentType: "application/json; charset=utf-8",
		success: function(data) {
			alert(data);
			$('#default_datetimepicker').datetimepicker({
				allowTimes: data
			});
		}
	});
};

$(function() {
	$('#default_datetimepicker').datetimepicker({
		allowTimes: [
			'08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00',
			'17:00'
		],
		formatTime: 'g:i A',
		formatDate: 'd.m.Y',
		defaultTime: '08:00',
		onChangeDateTime: al,
		timepickerScrollbar: true
	});

});