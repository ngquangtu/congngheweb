$(document).ready(function(){
    $("#pb").change(function(){
        var idpb = $(this).val();
      
        $.ajax({
            url:'getnhanvien.php',
            type:'POST',
            data: {id:idpb},

            
            dataType: 'json',
            success:function(response){
                var len = response.length;
                // alert(len);
                $("#nv").empty();
                for( var i = 0; i<len; i++){
                    var id = response[i]['id'];
                    var name = response[i]['ten'];
                    $("#nv").append("<option value='"+id+"'>"+name+"</option>");

                }
            }

        })
    })


})