$('#submitButton').click(function () {
    var eventData = JSON.stringify(pressure);
    $('#eventInput').val(eventData);
    $('#userInfoForm').submit();
});