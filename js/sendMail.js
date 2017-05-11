$('#sendMail').click(function() {
    $.ajax({
        type: 'POST',
        url: 'sendMail.php',
        data: { message: $('#message').val(),
                email: $('#yemail').val(),
                name: $('#yname').val()
         },
        success: function()
        {
            //$('#curriculum').html(data);
            alert("Thank You for your valuable message.")
        }
    });
});