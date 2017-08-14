var submitForm = $("#userInfoForm");

submitForm.validate({
    rules: {
        "name": {
            required: true,
            minlength: 1,
        },
        "phone": {
            required: true,
            minlength: 1,
        },
        "favoriteColor[]": {
            required: true,
            minlength: 2,
            maxlength: 2
        }
    },
    messages: {
        "name": "โปรดระบุ",
        "phone": "โปรดระบุ",
        "favoriteColor[]": {
            required: "โปรดระบุให้ครบ 2 สี",
            minlength: "โปรดระบุให้ครบ 2 สี",
            maxlength: "โปรดระบุเพียง 2 สีเท่านั้น",
        }
    },
    errorElement: "em",
    errorPlacement: function (error, element) {
        // Add the `help-block` class to the error element
        error.addClass("help-block");
        if (element.prop("type") === "checkbox") {
            error.insertAfter(element.parent("div").parent("div"));
        } else {
            error.insertAfter(element);
        }
    },
});