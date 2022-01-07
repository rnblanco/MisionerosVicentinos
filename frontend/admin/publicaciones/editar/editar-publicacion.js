var img;
var title="";
var body="";
var seccion = "";
var id= document.getElementById('ids').value;
var tipo = document.getElementById('tipo').value;


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

function r() {
    location.href = "index.php";
}

//Quitar la posibilidad de copiar en titulo y cuerpo
window.onload = function() {
    var title = document.getElementById('title');
    title.onpaste = function(e) {
      e.preventDefault();
    }
    var body = document.getElementById('body');
    body.onpaste = function(e) {
      e.preventDefault();
    }

}
// Validaciones para < > . & y números en el titulo
// / 48-57 numeros / 38 & / 46 . / 60 < / 61 = / 62 > /
function tprotection(str){
    
    if(document.getElementById('title').value.length>=100){
        return false;   
    }
    else {

        var iKeyCode = (str.which) ? str.which : str.keyCode
        if ( iKeyCode> 47 && iKeyCode < 58 || iKeyCode==61 || iKeyCode == 62 || iKeyCode == 60 || iKeyCode == 46 || iKeyCode == 38 || iKeyCode == 34)
            return false;
        return true; 
    }
    
    
}
// Validaciones para < > . & y números en el cuerpo
// / 38 & / 46 . / 60 < / 61 = / 62 > /
function bprotection(str){

    var iKeyCode = (str.which) ? str.which : str.keyCode

    if (iKeyCode == 60 || iKeyCode==61 || iKeyCode == 62 || iKeyCode == 38|| iKeyCode == 34)
        return false;
    return true;
    
}
// Validaciones para llenar el formulario
function validate1(val) {
    f = document.getElementById('file');
    v1 = document.getElementById("title");
    v2 = document.getElementById("body");
    v3 = document.getElementById("img");
    v4 = document.getElementById('seccion');

    flag1 = true;
    flag2 = true;
    flag3 = true;
    flag4 = true;

    switch (val){
        
        case 1:
            if(v1.value == "") {
                v1.style.borderColor = "red";
                flag1 = false;
            }
            else {
                v1.style.borderColor = "green";
                title=v1.value;
                flag1 = true;
            }
        break;

        case 2:
            if(v2.value == "") {
                v2.style.borderColor = "red";
                flag2 = false;
            }
            else {
                v2.style.borderColor = "green";
                body=v2.value;
                flag2 = true;
            }
        break;

        case 3:
            if(v3.value == "") {
                v3.style.borderColor = "red";
                flag3 = false;
            }
            else {
                f.style.borderColor = "green";
                v3.style.borderColor = "green";
                flag3 = true;
                img=v3.value;
            }
        break;

        case 4:
            if(v4.value==""){
                v4.style.borderColor='red'; 
                flag4=false;
            }
            else{
                flag4=true;
                seccion = v4.value;
                v4.style.borderColor='green'; 
            }
        break;

        case 0:
            if(v1.value == "") {
                v1.style.borderColor = "red";
                flag1 = false;
            }
            else {
                v1.style.borderColor = "green";
                flag1 = true;
                tile=v1.value;
            }
            if(v2.value == "") {
                v2.style.borderColor = "red";
                flag2 = false;
            }
            else {
                v2.style.borderColor = "green";
                flag2 = true;
                body=v2.value;
            }
            if(v3.value == "") {
                v3.style.borderColor = "red";
                f.style.borderColor = "red";
                flag3 = false;
            }
            else {
                f.style.borderColor = "green";
                v3.style.borderColor = "green";
                flag3 = true;
                img=v3.value;
            }
            if(v4.value==""){
                v4.style.borderColor='red'; 
                flag4=false;
            }
            else{
                flag4=true;
                seccion = v4.value;
                v4.style.borderColor='green'; 
            }
                
        break;
    }
    
    flag = flag1 && flag2 && flag3 && flag4;
    
    return flag;

}
    
$(document).ready(function(){
    
        $(".next").click(function(e){
            e.preventDefault();

            //con imagen
            if( validate1(1) == true && validate1(2) == true && validate1(3) == true && validate1(4) == true ){

                var name = document.getElementById("img").files[0].name;
                var ext = name.split('.').pop().toLowerCase();

                if(jQuery.inArray(ext, ['png','jpg','jpeg']) == -1){
                    Swal.fire({type:"error", title:"Extensión de imagen no permitida, utiliza: png, jpg, jpeg"});
                }

                else {
                    var oFReader = new FileReader();
                    oFReader.readAsDataURL(document.getElementById("img").files[0]);
                    var f = document.getElementById("img").files[0];
                    var fsize = f.size;
                    
                    if(fsize > 2000000){
                        Swal.fire({type:"error", title:"Imagen demasiado grande"});
                    }
                    else{  
                        img = document.getElementById('img').files[0];
                        var form_data = new FormData();
                        form_data.append("img", img);
                        form_data.append("seccion", seccion);form_data.append("title", title);form_data.append("body", body);form_data.append("id",id);form_data.append("cimagen","true");           
                        $.ajax({
                            url:'../../../../backend/publicacion/editar-publicacion.php',
                            data:form_data,
                            cache: false,
                            contentType: false,
                            processData: false,
                            type:'post',
                            success:function(){
                                Swal.fire('¡Publicación editada correctamente! ','','success').then((result)=>{
                                    if(result.value){
                                        if(tipo==3|tipo==2){
                                            window.location.href = "../publicaciones.php";
                                        }
                                        else{
                                            window.location.href = "../../mis-publicaciones/mis-publicaciones.php";
                                        }
                                    }
                                });           
                            }, error:function(){
                                Swal.fire('La publicación no fue editada con imagen','','error');
                            }   
                        });   
                    }
                }
            }
            //sin imagen
            else if( validate1(1) == true && validate1(2) == true && validate1(4) == true && validate1(3) == false ){
                var form_data = new FormData();
                form_data.append("seccion", seccion);form_data.append("title", title);form_data.append("body", body);form_data.append("id",id);                
                $.ajax({
                    url:'../../../../backend/publicacion/editar-publicacion.php',
                    data:form_data,
                    cache: false,
                    contentType: false,
                    processData: false,
                    type:'post',
                    success:function(){
                        Swal.fire('¡Publicación editada correctamente! ','','success').then((result)=>{
                            if(result.value){
                                if(tipo==3|tipo==2){
                                    window.location.href = "../publicaciones.php";
                                }
                                else{
                                    window.location.href = "../../mis-publicaciones/mis-publicaciones.php";
                                }
                            }
                        });           
                    }, error:function(){
                        Swal.fire('No has hecho cambios en la publicación','','error');
                    }   
                });
            }
            else{
                Swal.fire('Por favor rellena todos los datos requeridos','','error');
            }
        });
        
});

$(document).on("click", ".browse", function() {
    var file = $(this).parents().find(".file");
    file.trigger("click");
  });

$('input[type="file"]').change(function(e) {
    var fileName = e.target.files[0].name;
    $("#file").val(fileName);
  
    var reader = new FileReader();
    reader.onload = function(e) {
      // get loaded data and render thumbnail.
      document.getElementById("preview").src = e.target.result;
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
    
    validate1(0);
});