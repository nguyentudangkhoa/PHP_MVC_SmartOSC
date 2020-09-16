$(document).ready(function() {


    var specialChars = "<>@!#$%^&*()_+[]{}?:;|'\"\\,./~`-="
    var check = function(string) {
        for (i = 0; i < specialChars.length; i++) {
            if (string.indexOf(specialChars[i]) > -1) {
                return true
            }
        }
        return false;
    }
    $('#form-signup').on('submit', function(e) {
        e.preventDefault();
        var form_data = new FormData(this);

        if (form_data.get('username') == "") {
            alert("Username cant empty");
        } else if (check(form_data.get('username')) == true) {
            alert("Username cant have special char");
        } else if (form_data.get('password') == "") {
            alert("Password cant empty");
        } else if (form_data.get('re_password') == "") {
            alert("ReEnter password cant empty ");
        } else if (form_data.get('re_password') != form_data.get('password')) {
            alert("ReEnter password doesnt correct with the password")
        } else {
            $.ajax({
                type: "POST",
                url: './index.php?controller=signup&action=signup',
                data: {
                    username: form_data.get('username'),
                    password: form_data.get('password'),
                    re_password: form_data.get('re_password')
                },
                success: function(data) {
                    var jsonData = JSON.parse(data);
                    if (jsonData.report) {
                        alert(jsonData.report);
                    } else {
                        alert('Invalid Credentials!');
                    }
                }
            });
        }
    })
});