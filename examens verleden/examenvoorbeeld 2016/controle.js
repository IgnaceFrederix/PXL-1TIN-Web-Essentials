$(document).ready(function() {
    $('#knop').click(function(event) {
        var inhoud = $('#tekstvak').val();
        var controle1 = parseInt(inhoud);
        if(controle1 != 'NaN' && (controle1 >= 0 && controle1 <= 10)) {
            alert("De invoer is goed, gefeliciflapstaart!");
        } else {
        	
            event.preventDefault();
            alert("De invoer is niet correct! Probeer het nog eens.");
            $('#tekstvak').val("");
        }
    });
});