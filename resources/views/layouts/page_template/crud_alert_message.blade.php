@if(session('status'))
<div class="alert alert-success">{{session('status')}}</div>
@endif

<!-- Submit and update alert banner -->
@if(session('Success'))
<div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<script>
    // Auto close alert after 5 seconds
    setTimeout(function() {
        $('#success-alert').fadeOut('slow');
    }, 5000); // 5000 milliseconds = 5 seconds
</script>
@endif

<!-- Delete alert banner -->
@if(session('Delete'))
<div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<script>
    // Auto close alert after 5 seconds
    setTimeout(function() {
        $('#success-alert').fadeOut('slow');
    }, 5000); // 5000 milliseconds = 5 seconds
</script>
@endif


<!-- error alert -->
@if(session('error'))
<div id="error-alert" class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('error') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<script>
    // Automatically close the alert after a few seconds
    setTimeout(function() {
        $('#error-alert').alert('close');
    }, 5000); // 5000 milliseconds = 5 seconds
</script>
@endif