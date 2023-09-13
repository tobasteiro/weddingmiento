function showConfirmed() {
	$("#rsvp-confirmed").css("display", "block");
	$("#rsvp-confirmation-footer").css("display", "none");
	$("#rsvp-submit-section").css("display", "block");
	$("#rsvp-confirmation-footer").css("display", "none");
}

function hideConfirmed() {
	$("#rsvp-confirmed").css("display", "none");
	$("#rsvp-confirmation-footer").css("display", "block");
	$("#rsvp-submit-section").css("display", "block");
	$("#rsvp-confirmation-footer").css("display", "none");
}

function enableDateName() {
	$("#date-name-input").attr("disabled", false);
}

function disableDateName() {
	$("#date-name-input").val("");
	$("#date-name-input").attr("disabled", "disabled");
}

function confirmRsvp(isConfirmed) {
	if(isConfirmed) {
		alert("you already submit your RSVP. Thanks!");
	} else {
		var link = "mailto:tobasteiro@gmail.com" + "?cc=jenniebasteiro@gmail.com"
		+ "&subject=Wedding-RSVP-" + document.getElementById("guest-name").textContent + "&body="
		+ getMailContent();
		
		window.location.href = link;
		
		insertRSVP();
	}

}

function insertRSVP() {
	$.ajax({
	    data: 'date-name=' + $('#date-name-input').val()
	    	+ '&food-restrictions=' + $('textarea#food-restrictions-text').val()
	    	+ '&is-confirmed=' + $('#rsvp-yes-confirmation').is(':checked')
	    	+ '&guestId=1234',
	    url: '/wordpress/confirmrsvp/',
	    method: 'POST',
	    success: function(msg) {
	        alert(msg);
	    }
	});
}
function getMailContent() {
	   if($('#rsvp-yes-confirmation').is(':checked')) {
		   return $('#date-name-input').val() + "****"
			+ $('textarea#food-restrictions-text').val();
	   } else {
		   return "not-making"
	   }
}