function openModelPage(url,modelName){
    $.ajax({
        method:"GET",
        dataType:"html",
        data:{url:url,modelName:modelName},
        url: "{{ URL::route('modal') }}",
        success:function($html){
            console.log($html);
        }


    })
}
