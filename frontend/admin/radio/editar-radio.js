var pais="";
var texto="";
var id="";


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
    var title = document.getElementById('pais');
    title.onpaste = function(e) {
      e.preventDefault();
    }
    var body = document.getElementById('texto');
    body.onpaste = function(e) {
      e.preventDefault();
    }

}
// Validaciones para < > . & y números en el titulo
// / 48-57 numeros / 38 & / 46 . / 60 < / 61 = / 62 > /
function tprotection(str){

        var iKeyCode = (str.which) ? str.which : str.keyCode
        if (  iKeyCode==61 || iKeyCode == 62 || iKeyCode == 60 || iKeyCode == 46 || iKeyCode == 38|| iKeyCode == 34 )
            return false;
        return true; 
    
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
    v1 = document.getElementById("pais");
    v2 = document.getElementById("texto");
    v4 = document.getElementById("ids");

    flag1 = true;
    flag2 = true;
    flag4 = true;

    switch (val){
        
        case 1:
            if(v1.value == "") {
                v1.style.borderColor = "red";
                flag1 = false;
            }
            else {
                v1.style.borderColor = "green";
                pais=v1.value;
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
                texto=v2.value;
                flag2 = true;
            }
        break;
        case 4:
            if(v4.value == "") {
                v4.style.borderColor = "red";
                flag4 = false;
            }
            else {
                v4.style.borderColor = "green";
                id=v4.value;
                flag4 = true;
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
                pais=v1.value;
            }
            if(v2.value == "") {
                v2.style.borderColor = "red";
                flag2 = false;
            }
            else {
                v2.style.borderColor = "green";
                flag2 = true;
                texto=v2.value;
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
            if(v4.value == "") {
                v4.style.borderColor = "red";
                flag4 = false;
            }
            else {
                v4.style.borderColor = "green";
                id=v4.value;
                flag4 = true;
            }
                
        break;
    }
    
    flag = flag1 && flag2 && flag4;
    
    return flag;

}
    
$(document).ready(function(){
    
        $(".next").click(function(e){
            e.preventDefault();

            //con imagen
            if( validate1(1) && validate1(2) && validate1(4)){

                        var form_data = new FormData();
                        form_data.append("texto", texto);form_data.append("enlace", pais);form_data.append("id",id);
                        $.ajax({
                            url:'../../../backend/radio/editar-radio.php',
                            data:form_data,
                            cache: false,
                            contentType: false,
                            processData: false,
                            type:'post',
                            success:function(){
                                Swal.fire('Radio editada correctamente! ','','success').then((result)=>{
                                    if(result.value){
                                        location.reload(true);
                                    }
                                });           
                            }, error:function(){
                                Swal.fire('No has hecho cambios en la Radio','','error');
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