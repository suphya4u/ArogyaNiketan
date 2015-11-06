
function submitFeedback() {
  var name = $("#feedbackName").val();
  var email = $("#feedbackEmail").val();
  var message = $("#feedbackMessage").val();
  var hasErrors = false;

  if (name == "") {
	$("#feedbackName").attr("class", "error");
	hasErrors = true;
  }

  if (email == "") {
	$("#feedbackEmail").attr("class", "error");
	hasErrors = true;
  }

  if (message == "") {
	$("#feedbackMessage").attr("class", "error");
	hasErrors = true;
  }

  if (hasErrors) {
    return;
  }

  var request = new XMLHttpRequest();
  request.open("POST", "/sendemail", true);

  request.onreadystatechange = function() {
    if(request.readyState == 4 && request.status == 200) {
      // TODO: Replace this with useful content.
      alert(request.responseText);
    }
  }
  request.send(null);
}

function clearError(inputId) {
  $(inputId).attr("class", "noerror");
}