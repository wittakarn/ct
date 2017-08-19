var submitForm = $("#userInfoForm");

submitForm.validate({
    rules: {
        "name": {
            required: true,
            minlength: 1,
        },
        "email": {
            required: true,
            email: true
        },
        "password": {
            required: true,
            minlength: 5
        },
        "confirm_password": {
            required: true,
            minlength: 5,
            equalTo: "#ps"
        },
        "phone": {
            required: true,
            minlength: 1,
        },
        "favoriteColor": {
            required: true,
        }
    },
    messages: {
        "name": "ข้อมูลต้องระบุ",
        "email": {
            required: "ข้อมูลต้องระบุ",
            email: "โปรดใส่ Email ให้ถูกต้อง"
        },
        "password": {
            required: "ข้อมูลต้องระบุ",
            minlength: "รหัสผ่านต้องมีอย่างน้อย 5 ตัวอักษร"
        },
        "confirm_password": {
            required: "ข้อมูลต้องระบุ",
            minlength: "รหัสผ่านต้องมีอย่างน้อย 5 ตัวอักษร",
            equalTo: "ยืนยันรหัสผ่าน ต้องตรงกับรหัสผ่านที่ระบุด้านบน"
        },
        "phone": "ข้อมูลต้องระบุ",
        "favoriteColor": {
            required: "ข้อมูลต้องระบุ",
        }
    },
    errorElement: "em",
    errorPlacement: function (error, element) {
        // Add the `help-block` class to the error element
        error.addClass("help-block");
        if (element.prop("type") === "radio") {
            try{
                error.insertAfter(element.parent("div").parent("div").children().children().last());
            }catch(err){
                error.insertAfter(element);
            }
        } else {
            error.insertAfter(element);
        }
    },
});