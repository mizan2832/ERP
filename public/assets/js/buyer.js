$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#full_name_input,#partyType_input,#team_input,#email_input,#status_input').on('keyup', function(){ getBuyers(); });

function getBuyers() {
    $full_name_input = $('#full_name_input').val();
    $.ajax({
        type: "GET",
        data: {
          'full_name_input': $full_name_input,
          'partyType_input': $("#partyType_input").val(),
          'email_input': $("#email_input").val(),
          'team_input': $("#team_input").val(),
          'status_input': $("#status_input").val(),
        },
        url: "buyer/search",
        success:function(data) {
            // console.log(data);
          $('.buyer_table tbody').html(data);
        }
      });

}
//buyer search end

//buyer add
$("#save").click(function(e) {
    e.preventDefault();
    let data = {
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
                web:$("#web").val(),
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
            $("#web").val('');
            $("#status").val('');
            $("#partial").val('');
            $("#bank").val('');
            $("#team").val('');

        },
        error : function(data) {
            let response = data.responseJSON;
            let all_errors = response.errors;

            // Object.keys(all_errors).forEach(key => {
            //     var locate_this = all_errors[key].toString().indexOf("field");
            //     var mess = all_errors[key].toString();
            //     // console.log(mess);
            //     $("."+key+"_error").append("! This " + mess.slice(locate_this,all_errors[key].toString().length));
            //     console.log(key, all_errors[key]);
            //   });

        }
    })
})

function showAllBuyer(){
    $.ajax({
        type:"GET",
        dataType:'JSON',
        url: "buyer/list",
        success:function(data){
            console.log(data);
            $(".buyer_table tbody").html("");
            var se = 1;
            for (let i = 0; i < data.length; i++) {
                let buyerRow = "<tr onclick=fetchBuyer("+ data[i].id +")>";
                    buyerRow += "<td>" + (se++) + "</td>";
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


//buyer mandetory field

$('label[for="contact"]').css('color','Green');
$('label[for="short"]').css('color','Green');
$('label[for="company"]').css('color','Green');
$('label[for="partyType"]').css('color','Green');
$('label[for="address"]').css('color','Green');
$('label[for="company"]').css('color','Green');
$('label[for="status"]').css('color','Green');

//start fetch data on click row

function fetchBuyer($id) {
    $.ajax({
        method:"GET",
        dataType:'JSON',
        url: "buyer/fetch",
        data:{id:$id},
        success:function(response) {
            $("#full_name").val(response.full_name);
            $("#short_name").val(response.short_name);
            $("#email").val(response.email);
            $("#party_type").val(response.party_type);
            $("#address").val(response.address);
            $("#tag_company").val(response.tag_company);
            $("#credit_limit").val(response.credit_limit);
            $("#supplier").val(response.supplier);
            $("#country").val(response.country);
            $("#buffer_days").val(response.buffer_days);
            $("#web").val(response.web);
            $("#status").val(response.status);
            $("#partial").val(response.partial);
            $("#bank").val(response.bank);
            $("#team").val(response.team);
            $("#row_id").val(response.id);
            document.querySelector('#update').disabled = false;
            document.querySelector('#delete').disabled = false;


        }
    })
}

//end fetch data on click row

//update buyer

function updateBuyer() {
    let id = $("#row_id").val();
    let data = {
        "_token": $('#token').val(),
       id : id,
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
       web:$("#web").val(),
       status:$("#status").val(),
       partial:$("#partial").val(),
       bank:$("#bank").val(),
       team:$("#team").val()

   }
    $.ajax({
        method:"PUT",
        dataType:'JSON',
        url: "buyer/update",
        data: data,
        success:function(response) {
            showAllBuyer();
            $("#full_name").val("");
            $("#short_name").val("");
            $("#email").val("");
            $("#party_type").val("");
            $("#address").val("");
            $("#tag_company").val("");
            $("#credit_limit").val("");
            $("#supplier").val("");
            $("#country").val("");
            $("#buffer_days").val("");
            $("#web").val("");
            $("#status").val("");
            $("#partial").val("");
            $("#bank").val("");
            $("#team").val("");
            $("#row_id").val("");
            document.querySelector('#update').disabled = true;


        }
    })
}
function deleteBuyer() {
    let id = $("#row_id").val();

    $.ajax({
        method:"DELETE",
        dataType:'JSON',
        url: "buyer/delete/"+id,
        success:function(response) {
            showAllBuyer();
            $("#full_name").val("");
            $("#short_name").val("");
            $("#email").val("");
            $("#party_type").val("");
            $("#address").val("");
            $("#tag_company").val("");
            $("#credit_limit").val("");
            $("#supplier").val("");
            $("#country").val("");
            $("#buffer_days").val("");
            $("#web").val("");
            $("#status").val("");
            $("#partial").val("");
            $("#bank").val("");
            $("#team").val("");
            $("#row_id").val("");
            document.querySelector('#delete').disabled = true;
        }
    })
}

//end update buyer

//refresh statt

function resetFormBuyer() {
            showAllBuyer();
            $("#full_name").val("");
            $("#short_name").val("");
            $("#email").val("");
            $("#party_type").val("");
            $("#address").val("");
            $("#tag_company").val("");
            $("#credit_limit").val("");
            $("#supplier").val("");
            $("#country").val("");
            $("#buffer_days").val("");
            $("#web").val("");
            $("#status").val("");
            $("#partial").val("");
            $("#bank").val("");
            $("#team").val("");
            $("#row_id").val("");
        }


//refresh end



