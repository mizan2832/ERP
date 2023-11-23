
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});
function saveMenu(menu_name) {
    let data = {
        "top_menu" : $('#top_menu').val(),
    }
    $.ajax({
        type    : 'POST',
        dataType:'JSON',
        url     :'menu/'+menu_name,
        data    : data,
        success : function (response) {
            showMenuList('mastermenu');
            $("#top_menu").val('');
        }
    })
}

function showMenuList(menu_url){
    $.ajax({
        type:"GET",
        dataType:'JSON',
        url: ""+menu_url,
        success:function(data){
            console.log(data);
            $(".menu_table tbody").html("");
            var se = 1;
            for (let i = 0; i < data.length; i++) {
                let menuRow = "<tr>";
                    menuRow += "<td>" + (se++) + "</td>";
                    menuRow += "<td>" + data[i].top_menu_name + "</td>";
                    menuRow += "</tr>";
                    $('.menu_table tbody').append(menuRow);
                }
        }
    })
}

function getMenuData(menu_name,id,bg_color){
    let menu_id     = id;
    let bg_color    = bg_color;
    let menu_name   = menu_name;

    let data = {
        menu_id        : id,
        menu_type_name : menu_name,
        bg_color       : bg_color
    }

    $.ajax({
        type: 'GET',
        dataType :'JSON',
        url:
    })


}







