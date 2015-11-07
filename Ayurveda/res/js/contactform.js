
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

  var feedback = {
    name: name,
    email: email,
    message: message
  }

  $.post("/sendemail", feedback, function(result) {
    $("#feedbackName").val("");
    $("#feedbackEmail").val("");
    $("#feedbackMessage").val("");

    var currentHeight = $("#feedbackForm").height();
    $("#feedbackForm").hide();
    $("#thankYouNote").show();
    $("#thankYouNote").height(currentHeight);
    $("#thankYouNote").css("line-height", currentHeight + "px");
  });
}

function clearError(inputId) {
  $(inputId).attr("class", "noerror");
}