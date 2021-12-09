function pdf(id){

    var form_data = new FormData();
    form_data.append("id", id);
         
    $.ajax({
        url:'convertToPdf.php',
        data:form_data,
        cache: false,
        contentType: false,
        processData: false,
        type:'post',
        success:function(data){
            Swal.fire('¡Pdf creado!','','success').then((result)=>{
                if(result.value){
                    window.location.href = data + ".pdf";
                }
            });           
        }, error:function(){
            Swal.fire('No pdf :(','','error');
        } 
    });  
}