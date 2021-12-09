function del(id,tipo){
    var form_data = new FormData();
    form_data.append("id", id);
    
    if(tipo==3){

        Swal.fire({
            type: 'info',
            title: '¿Estás seguro de eliminar el usuario?',
            showCancelButton: true,
            showConfirmButton:true,
            cancelButtonText:'No',
            confirmButtonText:'Si',
        })
        $('.swal2-confirm').click(function(e){
            e.preventDefault();
            $.ajax({
                url:'../../../backend/usuario/eliminar-usuario.php',
                data:form_data,
                cache: false,
                contentType: false,
                processData: false,
                type:'post',
                success:function(){
                    Swal.fire('Usuario eliminado correctamente! ','','success').then((result)=>{
                        if(result.value){
                            window.location.href = "escritores.php";
                        }
                    });           
                }, error:function(){
                    Swal.fire('¡El usuario no pudo ser eliminado!','','error');
                }   
            });
        });
        $('.swal2-cancel').click(function(e){
            e.preventDefault();
            Swal.close();
        });
    }
    else{

        Swal.fire({
            type: 'info',
            title: '¿Estás seguro de eliminar el escritor?',
            showCancelButton: true,
            showConfirmButton:true,
            cancelButtonText:'No',
            confirmButtonText:'Si',
        })
        $('.swal2-confirm').click(function(e){
            e.preventDefault();
            $.ajax({
                url:'../../../backend/usuario/eliminar-usuario.php',
                data:form_data,
                cache: false,
                contentType: false,
                processData: false,
                type:'post',
                success:function(){
                    Swal.fire('Escritor eliminado correctamente! ','','success').then((result)=>{
                        if(result.value){
                            window.location.href = "escritores.php";
                        }
                    });           
                }, error:function(){
                    Swal.fire('¡El escritor no pudo ser eliminado!','','error');
                }   
            });
        });
        $('.swal2-cancel').click(function(e){
            e.preventDefault();
            Swal.close();
        });
    }
    
}

function deshab(id){
    var form_data = new FormData();
    form_data.append("id", id);
    
    Swal.fire({
        type: 'info',
        title: '¿Estás seguro de deshabilitar el escritor?',
        showCancelButton: true,
        showConfirmButton:true,
        cancelButtonText:'No',
        confirmButtonText:'Si',
    })
    $('.swal2-confirm').click(function(e){
        e.preventDefault();
        $.ajax({
            url:'../../../backend/usuario/deshabilitar-usuario.php',
            data:form_data,
            cache: false,
            contentType: false,
            processData: false,
            type:'post',
            success:function(){
                Swal.fire('Escritor deshabilitado correctamente! ','','success').then((result)=>{
                    if(result.value){
                        window.location.href = "escritores.php";
                    }
                });           
            }, error:function(){
                Swal.fire('¡El escritor no pudo ser deshabilitado!','','error');
            }   
        });
    });
    $('.swal2-cancel').click(function(e){
        e.preventDefault();
        Swal.close();
    });
}

function hab(id){
    var form_data = new FormData();
    form_data.append("id", id);
    
    Swal.fire({
        type: 'info',
        title: '¿Estás seguro de habilitar el escritor?',
        showCancelButton: true,
        showConfirmButton:true,
        cancelButtonText:'No',
        confirmButtonText:'Si',
    })
    $('.swal2-confirm').click(function(e){
        e.preventDefault();
        $.ajax({
            url:'../../../backend/usuario/habilitar-usuario.php',
            data:form_data,
            cache: false,
            contentType: false,
            processData: false,
            type:'post',
            success:function(){
                Swal.fire('Escritor habilitado correctamente! ','','success').then((result)=>{
                    if(result.value){
                        window.location.href = "escritores.php";
                    }
                });           
            }, error:function(){
                Swal.fire('¡El escritor no pudo ser habilitado!','','error');
            }   
        });
    });
    $('.swal2-cancel').click(function(e){
        e.preventDefault();
        Swal.close();
    });

}

function deshabAdmin(id){
    var form_data = new FormData();
    form_data.append("id", id);
    
    Swal.fire({
        type: 'info',
        title: '¿Estás seguro de deshabilitar el usuario?',
        showCancelButton: true,
        showConfirmButton:true,
        cancelButtonText:'No',
        confirmButtonText:'Si',
    })
    $('.swal2-confirm').click(function(e){
        e.preventDefault();
        $.ajax({
            url:'../../../backend/usuario/deshabilitar-usuario.php',
            data:form_data,
            cache: false,
            contentType: false,
            processData: false,
            type:'post',
            success:function(){
                Swal.fire('Usuario deshabilitado correctamente! ','','success').then((result)=>{
                    if(result.value){
                        window.location.href = "escritores.php";
                    }
                });           
            }, error:function(){
                Swal.fire('¡El usuario no pudo ser deshabilitado!','','error');
            }   
        });
    });
    $('.swal2-cancel').click(function(e){
        e.preventDefault();
        Swal.close();
    });
}

function habAdmin(id){
    var form_data = new FormData();
    form_data.append("id", id);
    
    Swal.fire({
        type: 'info',
        title: '¿Estás seguro de habilitar el usuario?',
        showCancelButton: true,
        showConfirmButton:true,
        cancelButtonText:'No',
        confirmButtonText:'Si',
    })
    $('.swal2-confirm').click(function(e){
        e.preventDefault();
        $.ajax({
            url:'../../../backend/usuario/habilitar-usuario.php',
            data:form_data,
            cache: false,
            contentType: false,
            processData: false,
            type:'post',
            success:function(){
                Swal.fire('Usuario habilitado correctamente! ','','success').then((result)=>{
                    if(result.value){
                        window.location.href = "escritores.php";
                    }
                });           
            }, error:function(){
                Swal.fire('¡El usuario no pudo ser habilitado!','','error');
            }   
        });
    });
    $('.swal2-cancel').click(function(e){
        e.preventDefault();
        Swal.close();
    });

}