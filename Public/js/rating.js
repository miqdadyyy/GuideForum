$('input[type=radio][name=star]').change(function(){
    // var rating = $(this).val();
    // var id_post =
    $.ajax({
        type: "post",
        url: '/rating/store',
        data: $('#ratingsForm').serialize(),
        success: function(response){
            if(response == "success"){
                $('#ratingsForm').hide();
                $('#success-rating').removeAttr('hidden');
            }
        }
    })
})