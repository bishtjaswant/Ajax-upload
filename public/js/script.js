$(function() {
    
          $('#btnsubmit').on('click',  function(event) {
              event.preventDefault();
            
                 var form = $('#form')[0];

                 var data = new FormData( form );
  
                  $('.percentage').html('');
                  $('.progress-bar').css('width','0%');  
                
             
                             $.ajax({
                                type: "POST",
                                enctype: 'multipart/form-data',
                                url: 'process.php',
                                data: data,
                                processData: false,
                                contentType: false,
                                cache: false,
                                timeout: 600000,
                                xhr: function() {
                                
                                     var xhr= new XMLHttpRequest();
                                     var percent =0;
                                    
                                    xhr.upload.addEventListener("progress", function(e) {
                                        percent = Math.round((e.loaded/e.total)*100);
                                        $('.percentage').html(percent+'%');
                                        $('.progress-bar').css('width', percent+'%');  
                                    });

                                    return xhr;

                                },
                                success : function(response) { console.log(response);},
                                error : function(response) { console.log(response);}
                             })
               
                 
          });


}); 