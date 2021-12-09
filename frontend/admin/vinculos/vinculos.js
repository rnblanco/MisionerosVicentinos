function del(id){
    var form_data = new FormData();
    form_data.append("id", id);
    
        Swal.fire({
            type: 'info',
            title: '¿Estás seguro de eliminar el vínculo?',
            showCancelButton: true,
            showConfirmButton:true,
            cancelButtonText:'No',
            confirmButtonText:'Si',
        })
        $('.swal2-confirm').click(function(e){
            e.preventDefault();
            $.ajax({
                url:'../../../backend/vinculo/eliminar-vinculo.php',
                data:form_data,
                cache: false,
                contentType: false,
                processData: false,
                type:'post',
                success:function(){
                    Swal.fire('Vínculo eliminado correctamente! ','','success').then((result)=>{
                        if(result.value){
                            window.location.href = "vinculos.php";
                        }
                    });           
                }, error:function(){
                    Swal.fire('¡El vínculo no pudo ser eliminado!','','error');
                }   
            });
        });
        $('.swal2-cancel').click(function(e){
            e.preventDefault();
            Swal.close();
        });
}

//Quitar la posibilidad de dar click derecho
$(document).bind("contextmenu",function(e) {
    e.preventDefault();
});

//Quitar la posibilidad de dar CTRL+F12
$(document).keydown(function(e){
    if(e.which === 123){
       return false;
    }
});