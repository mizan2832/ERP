$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$("#save").click(function() {
    let full_name = $("#full_name").val();
    let short_name = $("#short_name").val();
    let email = $("#email").val();
    let party_type = $("#party_type").val();
    let address = $("#address").val();
    let tag_company = $("#tag_company").val();
    let credit_limit = $("#credit_limit").val();
    let supplier = $("#supplier").val();
    let country = $("#country").val();
    let  = $("#").val();
})
