$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function saveMenu(e) {

    let data = {
        "_token": $('#token').val(),
        "top_menu" : $('#top_menu').val(),
    }
    console.log(data);
}






