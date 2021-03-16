// import { Dropzone } from "dropzone";

$(function(){

    if ($("#drophere").length > 0){
        let csrfToken = $('meta[name="csrf-token"]').attr('content');
        let uniqueSecret = $('input[name="uniqueSecret"]').attr('value');
        
        let myDropzone = new Dropzone("#drophere", {
            
            url: '/announcement/images/upload', 
            
            params:{
                _token: csrfToken,
                uniqueSecret: uniqueSecret
            },

            addRemoveLinks: true
        });

      myDropzone.on("success", function(file,response){
            file.serverId = response.id;
        });

        myDropzone.on("removedfile", function(file){
            $.ajax({
                type: 'DELETE',
                url: '/announcement/images/remove',
                data: {
                    _token: csrfToken,
                    id: file.serverId,
                    uniqueSecret: uniqueSecret
                },
                dataType: 'json'
            });
        
        });
    } 
})