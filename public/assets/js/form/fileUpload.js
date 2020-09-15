$(document).ready(function() {
    $('#form-game').submit(function(e) {
        e.preventDefault();
        var form_data = new FormData(this);
        if (form_data.get('name') == "") {
            alert("Name of the game cant empty");
        } else if (form_data.get('price') == "") {
            alert("Price cant empty");
        } else if (isNaN(parseInt(form_data.get('price')))) {
            alert("Price mus be a number");
        } else if (form_data.get('publisher') == "") {
            alert("Publisher name cant empty")
        } else if (form_data.get('quantity') == "") {
            alert("Price cant empty");
        } else if (isNaN(parseInt(form_data.get('quantity')))) {
            alert("Quantity mus be a number");
        } else if (form_data.get('images') == null) {
            alert("Please insert image");
        } else {
            $.ajax({
                type: "POST",
                url: '',
                data: {
                    name: form_data.get('name'),
                    price: form_data.get('price'),
                    publisher: form_data.get('publisher'),
                    quantity: form_data.get('quantity'),
                    images: form_data.get('images')
                },
                success: function(data) {

                    var jsonData = JSON.parse(data);
                    if (jsonData.report) {
                        console.log(jsonData.report);
                    } else {
                        alert('Invalid Credentials!');
                    }
                }
            });
        }
    })
});