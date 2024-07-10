
// Function for LGU Profile Year field
$(document).ready(function() {
   
    $('#periodCovereda').change(function() {
        let selectedPeriod = $(this).val();
        document.getElementById('currentYear').innerText = selectedPeriod;
        document.getElementById('currentYearMinus1').innerText = selectedPeriod-1;
        document.getElementById('currentYearMinus2').innerText = selectedPeriod-2;

    });


});


