function openModelPage(url,modelName){
    $.ajax({
        method:"GET",
        dataType:"json",
        data:{url:url,modelName:modelName},
        url: "modal",
        success:function(data){
            console.log(data);
        }


    })
}
