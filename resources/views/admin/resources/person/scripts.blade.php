<script>
    function deleteperson(element) {
        swal({
            title: 'Are you sure you want to delete this person?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Delete",
            closeOnConfirm: false
        }, function() {
            $(element).closest('form').submit();
        });
    }
</script>