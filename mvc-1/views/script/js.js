$(document).ready(function() {
    $("#submit").click(function() {

        var firstName = $("#firstName").val();

        if(firstName=='') {
            alert("Please fill all fields.");
            return false;
        }

        $.ajax({
            type: "POST",
            url: "../controllers/return_value.php",
            data: {
                firstName: firstName,
            },
            cache: false,
            success: function(data) {
                // alert('<tr><td>' + data + '</td></tr>');
                location.reload();
                $('#target').empty().append(data);

                // document.getElementById('butt').innerHTML="Вы ввели: "+data + "<br>";
            },
            error: function(xhr, status, error) {
                console.error(xhr);
            }
        });

    });
});
