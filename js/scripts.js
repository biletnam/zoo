$(document).ready(function(){
	$("#age_button").click(function(){
		//alert("wdwd");
		$("#age_dialog").dialog({
			height: 200,
      		width: 300,
      		modal: true,
      		resizable: false,
      		buttons: {
      			"Ok":function(){
      				addAge();
      			}
      		},
		});
	});
	var y = $("#age_display_year span").text();
	var m = $("#age_display_month span").text();
	$("#age_month").val(m);
	$("#age_year").val(y);
}

);

function addAge(){
	$("#Animal_age").val(0);
	var month = $("#age_month").val();
	var year = $("#age_year").val();

	var age = parseInt(year*12) + parseInt(month);

	$("#age_dialog").dialog("close");
	$("#Animal_age").val(age);

	$("#age_display_year span").text(year);
	$("#age_display_month span").text(month);
}