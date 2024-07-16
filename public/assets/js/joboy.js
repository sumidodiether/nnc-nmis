
let profileId;

// Function for LGU Profile Year field
$(document).ready(function() {
   
    $('#periodCovereda').change(function() {
        let selectedPeriod = $(this).val();
        document.getElementById('currentYear').innerText = selectedPeriod;
        document.getElementById('currentYearMinus1').innerText = selectedPeriod-1;
        document.getElementById('currentYearMinus2').innerText = selectedPeriod-2;

    });


});

$(function() {
    // Submit LGU Profile
    $('#lgu-submit').on('click', function(e) {
        document.getElementById('status').value = 1;
        $('#lgu-profile-form').submit();
    });

    // Draft LGU Profile
    $('#lgu-draft').on('click', function(e) {
        document.getElementById('status').value = 2;
        $('#lgu-profile-form').submit();
    });

    // $('#lgu-submit-edit').on('click', function(e) {
    //     document.getElementById('status').value = 1;
    //     $('#lgu-profile-form-edit').submit();
    // });

    // // Draft LGU Profile
    // $('#lgu-draft-edit').on('click', function(e) {
    //     document.getElementById('status').value = 2;
    //     $('#lgu-profile-form-edit').submit();
    // });

});




// Submit Edit function
function myFunction(id){
    window.location.href = "lguprofile/"+ id +"/edit";

}


//Delete Entry

function openModal(id) {
    profileId = id; // Store the ID
    $('#deleteModal').modal('show'); // Show the modal
}

function confirmDelete(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // console.log(profileId);
    if (profileId) { // Check if profileId has been set
        $.ajax({
            url: "lguprofile/" + profileId + "/delete", // Ensure the URL is correct
            type: 'GET',
            success: function(result) {
                setTimeout(function() {
                    window.location.reload(); // Reload the page after a delay
                }, 2000); // Delay before reload (2 seconds)
                $('#successAlert').removeClass('d-none').fadeIn(); // Show success alert
               
            },
            error: function(xhr) {
                alert('Error deleting profile: ' + xhr.responseText);
            }
        });
        $('#deleteModal').modal('hide'); // Hide the modal
    }
};


