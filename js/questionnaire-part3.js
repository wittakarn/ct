$('#submitButton').click(function () {
    var eventData = JSON.stringify(touchs);
    $('#eventInput').val(eventData);
    $('#testForm').submit();
});