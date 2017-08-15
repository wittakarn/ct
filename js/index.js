var signInForm = $("#signInForm");

signInForm.validate({
    rules: {
        "email": {
            required: true
        },
        "password": {
            required: true,
        }
    },
    messages: {
        "email": {
            required: "ข้อมูลต้องระบุ",
        },
        "password": {
            required: "ข้อมูลต้องระบุ",
        }
    },
    errorElement: "em",
    errorPlacement: function (error, element) {
        // Add the `help-block` class to the error element
        error.addClass("help-block");
        error.insertAfter(element);
    },
});