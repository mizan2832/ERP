$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$("#save").click(function(e) {
    e.preventDefault();
    let data = {
                 "_token": $('#token').val(),
                full_name:$("#full_name").val(),
                short_name:$("#short_name").val(),
                email:$("#email").val(),
                party_type:$("#party_type").val(),
                address:$("#address").val(),
                tag_company:$("#tag_company").val(),
                credit_limit:$("#credit_limit").val(),
                supplier:$("#supplier").val(),
                country:$("#country").val(),
                buffer_days:$("#buffer_days").val(),
                website:$("#website").val(),
                status:$("#status").val(),
                partial:$("#partial").val(),
                bank:$("#bank").val(),
                team:$(" team").val()

            }

    $.ajax({
        type    :'POST',
        dataType:'json',
        url     :'buyer/add',
        data    : data,
        success:function(response){
            console.log(response);
            showAllBuyer();
            $("#full_name").val('');
            $("#short_name").val('');
            $("#email").val('');
            $("#party_type").val('');
            $("#address").val('');
            $("#tag_company").val('');
            $("#credit_limit").val('');
            $("#supplier").val('');
            $("#country").val('');
            $("#buffer_days").val('');
            $("#website").val('');
            $("#status").val('');
            $("#partial").val('');
            $("#bank").val('');
            $("#team").val('');

        }
    })

})

function showAllBuyer(){
    $.ajax({
        type:"GET",
        dataType:'JSON',
        url: "buyer/list",
        success:function(response){
            console.log(response);
        }
    })
}