function del(idPublicacion){
    var form_data = new FormData();
    form_data.append("id", idPublicacion);
    
    Swal.fire({
        type: 'info',
        title: '¿Estás seguro de eliminar la publicación?',
        showCancelButton: true,
        showConfirmButton:true,
        cancelButtonText:'No',
        confirmButtonText:'Si',
    })
    $('.swal2-confirm').click(function(e){
        e.preventDefault();
        $.ajax({
            url:'../../../backend/publicacion/eliminar-publicacion.php',
            data:form_data,
            cache: false,
            contentType: false,
            processData: false,
            type:'post',
            success:function(){
                Swal.fire('¡Publicación eliminada correctamente! ','','success').then((result)=>{
                    if(result.value){
                        window.location.href = "mis-publicaciones.php";
                    }
                });           
            }, error:function(){
                Swal.fire('¡La publicación no pudo ser eliminada!','','error');
            }   
        });
    });
    $('.swal2-cancel').click(function(e){
        e.preventDefault();
        Swal.close();
    });

}

function delAdmin(idPublicacion){
    var form_data = new FormData();
    form_data.append("id", idPublicacion);
    
    Swal.fire({
        type: 'info',
        title: '¿Estás seguro de eliminar la publicación?',
        showCancelButton: true,
        showConfirmButton:true,
        cancelButtonText:'No',
        confirmButtonText:'Si',
    })
    $('.swal2-confirm').click(function(e){
        e.preventDefault();
        $.ajax({
            url:'../../../backend/publicacion/eliminar-publicacion.php',
            data:form_data,
            cache: false,
            contentType: false,
            processData: false,
            type:'post',
            success:function(){
                Swal.fire('¡Publicación eliminada correctamente! ','','success').then((result)=>{
                    if(result.value){
                        window.location.href = "publicaciones.php";
                    }
                });           
            }, error:function(){
                Swal.fire('¡La publicación no pudo ser eliminada!','','error');
            }   
        });
    });
    $('.swal2-cancel').click(function(e){
        e.preventDefault();
        Swal.close();
    });

}

function deshab(idPublicacion){
    var form_data = new FormData();
    form_data.append("id", idPublicacion);
    
    Swal.fire({
        type: 'info',
        title: '¿Estás seguro de deshabilitar la publicación?',
        showCancelButton: true,
        showConfirmButton:true,
        cancelButtonText:'No',
        confirmButtonText:'Si',
    })
    $('.swal2-confirm').click(function(e){
        e.preventDefault();
        $.ajax({
            url:'../../../backend/publicacion/deshabilitar-publicacion.php',
            data:form_data,
            cache: false,
            contentType: false,
            processData: false,
            type:'post',
            success:function(){
                Swal.fire('¡Publicación deshabilitada correctamente! ','','success').then((result)=>{
                    if(result.value){
                        window.location.href = "publicaciones.php";
                    }
                });           
            }, error:function(){
                Swal.fire('¡La publicación no pudo ser deshabilitada!','','error');
            }   
        });
    });
    $('.swal2-cancel').click(function(e){
        e.preventDefault();
        Swal.close();
    });
}

function hab(idPublicacion){
    var form_data = new FormData();
    form_data.append("id", idPublicacion);
    
    Swal.fire({
        type: 'info',
        title: '¿Estás seguro de habilitar la publicación?',
        showCancelButton: true,
        showConfirmButton:true,
        cancelButtonText:'No',
        confirmButtonText:'Si',
    })
    $('.swal2-confirm').click(function(e){
        e.preventDefault();
        $.ajax({
            url:'../../../backend/publicacion/habilitar-publicacion.php',
            data:form_data,
            cache: false,
            contentType: false,
            processData: false,
            type:'post',
            success:function(){
                Swal.fire('¡Publicación habilitada correctamente! ','','success').then((result)=>{
                    if(result.value){
                        window.location.href = "publicaciones.php";
                    }
                });           
            }, error:function(){
                Swal.fire('¡La publicación no pudo ser habilitada!','','error');
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