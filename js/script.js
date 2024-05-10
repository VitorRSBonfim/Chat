
console.log("asdsd");

let idUser = document.getElementById('idUser').innerHTML;

idUserint = parseInt(idUser);

$(document).ready(function(){

    $("#lista-amigos li").find("p").click(function(){
        
        id = $(this).attr("id");
        console.log(id);
      
        buscarMensagens();//alert(id)
       

    });


});    

function buscarMensagens() {

    console.log("Entrou em func")
    console.log(idUser);

    $.ajax({
        
        url: "msg.php",
        method: "POST",     
        dataType: "Json",
        data: {id: id},
        
        success: function (response) {
            
            console.log(response);

            //console.log(msg);

            ////console.log(response.length);
            ////console.log(response)

            for ( i = 0; i < response.length; i++) {
                
                if ( response[i].ID_Mensagem_UsuarioSender == idUserint && response[i].ID_Mensagem_UsuarioReceiver == id ) {

                    $("#chat").append(`
                    <div class="pai-me">
                        <div class="bg-me" >
                            <p class="p-me" >${response[i].Mensagem}</p>
                        
                            <p class="hora"> ${(response[i].Data_Mensagem).substring(11)}</p>
                        </div>
                        
                    </div>
                    `); 
                       
                } else if (response[i].ID_Mensagem_UsuarioSender == id && response[i].ID_Mensagem_UsuarioReceiver == idUserint) {
                    $("#chat").append(`
                    <div class="pai-not-me" >
                        <div class="bg-not-me" >
                            <p class="p-not-me" >${response[i].Mensagem}</p>
                            <p class="hora"> ${(response[i].Data_Mensagem).substring(11)}</p>
                        </div>
                    </div>

                    `); 
                }
                
             
            }
            
            contDb = response.length;
            console.log(contDb)

            // 

            

            setInterval(() => {
                
                $.ajax({
                    type: "POST",
                    url: "msg.php",
                    data: {id: id},
                    dataType: "Json",
                    success: function (response) {

                        console.log(contDb)
                        console.log(idUserint)
                        

                        if ( response.length > contDb ) {

                            if ( response[contDb].ID_Mensagem_UsuarioSender == idUserint && response[contDb].ID_Mensagem_UsuarioReceiver == id ) {

                                $("#chat").append(`
                                <div class="pai-me">
                                    <div class="bg-me" >
                                        <p class="p-me" >${response[contDb].Mensagem}</p>
                                    
                                        <p class="hora"> ${(response[contDb].Data_Mensagem).substring(11)}</p>
                                    </div>
                                    
                                </div>
                                `); 
                                   
                            } else if (response[contDb].ID_Mensagem_UsuarioSender == id && response[contDb].ID_Mensagem_UsuarioReceiver == idUserint) {
                                $("#chat").append(`
                                <div class="pai-not-me" >
                                    <div class="bg-not-me" >
                                        <p class="p-not-me" >${response[contDb].Mensagem}</p>
                                        <p class="hora"> ${(response[contDb].Data_Mensagem).substring(11)}</p>
                                    </div>
                                </div>
            
                                `); 
                            }

                            contDb = response.length;
                        }
     
                       
                    }
                });

            }, 500);

        },

    })       


}

$('#form-msg').submit(function(e){ // Pegando todo o form usando Jquery e atribuindo uma função no submit

    e.preventDefault(); // Cancelando a ação padrão (refresh da pag)

    msg = $('#msg').val(); // Pegando elemento e depois o value de input com id == "msg" 
    //console.log(msg);

    $.ajax({
        type: "POST",
        url: "enviarMensagem.php",
        data: {msg: msg, id: id},
        
        success: function (response) {
            //console.log(response)
           
        }
        
    });
    

    

})





// Pegando Mensagens

/*

setInterval(() => {
    //console.log('a')
}, 1000);

*/




/* Abrindo de acordo com click */

/*

$(document).ready(function() {

    $("#chat-abrir").click(function () {

        


    }) 

})

*/

/*  Pegando Notificações */










