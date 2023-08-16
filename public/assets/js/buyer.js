$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#full_name_input,#partyType_input,#team_input,#email_input,#status_input').on('keyup', function(){ getBuyers(); });

function getBuyers() {
    $.ajax({
        type: "GET",
        data: {
          'full_name_input':$('#full_name_input').val(),
          'partyType_input': $("#partyType_input").val(),
          'email_input': $("#email_input").val(),
          'team_input': $("#team_input").val(),
          'status_input': $("#status_input").val(),
        },
        url: "buyer/search",
        success:function(data) {
          $('.buyer_table tbody').html(data);
        }
      });

}


//buyer search end


//buyer add
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
                team:$("#team").val()

            }

    $.ajax({
        type    :'POST',
        dataType:'json',
        url     :'buyer/add',
        data    : data,
        success:function(response){
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
        success:function(data){
            $(".buyer_table tbody").html("");
            for (let i = 0; i < data.length; i++) {
                let buyerRow = "<tr>";
                    buyerRow += "<td>" + data[i].full_name + "</td>";
                    buyerRow += "<td>" + data[i].party_type + "</td>";
                    buyerRow += "<td>" + data[i].email + "</td>";
                    buyerRow += "<td>" + data[i].team + "</td>";
                    buyerRow += "<td>" + data[i].status + "</td>";
                    buyerRow += "</tr>";
                    $('.buyer_table tbody').append(buyerRow);
                }
        }
    })
}

//buyer add end


