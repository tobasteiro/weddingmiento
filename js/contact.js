function sendContact() {

	if ($('#cont-name').val() == '' || $('textarea#cont-message').val() == ''
			|| $('#cont-email').val() == '') {
		alert('Please, complete all the form');
		return;
	}

	var link = "mailto:tobasteiro@gmail.com" + "?cc=jenniebasteiro@gmail.com"
			+ "&subject=Contacted-by-"
			+ document.getElementById("cont-name").textContent + "&body="
			+ getMailContent();

	window.location.href = link;

	alert("Thanks for contacting us!!");

	$("#cont-send-button").attr('disabled', 'disabled');
}

function getMailContent() {
	return 'Guest name: ' + $('#cont-name').val() + '****' + 'Email: '
			+ $('textarea#cont-message').val() + '****' + 'Message: '
			+ $('#cont-email').val();
}

function validateEmail() {
	var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
	if (!testEmail.test($('#cont-email').val()) && $('#cont-email').val() != '') {
		alert('the email is not correct');
		$('#cont-email').val('');
		$('#cont-email').focus();
	}
}