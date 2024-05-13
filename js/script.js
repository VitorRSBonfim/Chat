
console.log("asdsd");

let idUser = document.getElementById('idUser').innerHTML;
let menuSide = document.getElementById('menuSide');
let bntAbirMenu = document.getElementById('btnMenuSide');

bntAbirMenu.addEventListener("click" ,function () {
    menuSide.classList.toggle("oppen");
} )

idUserint = parseInt(idUser);

$(document).ready(function(){

    $("#lista-amigos li").find("p").click(function(){


        
        
        $("#chat").empty();
        $("#nome").empty();

        id = $(this).attr("id");
        nome = $(this).text();
        $("#nome").append(nome);
        console.log(id);
        console.log(nome)
        buscarMensagens();//alert(id)
       
        
       

    });


});    

function scrollBottom() {

    var wtf = $('#chat');
    var height = wtf[0].scrollHeight;
    wtf.scrollTop(height);
    console.log(height)
    

}

function buscarMensagens() {

    console.log("Entrou em func")
    console.log(idUser);

    $.ajax({
        
        url: "msg.php",
        method: "POST",     
        dataType: "Json",
        data: {id: id},
        
        success: function (response) {

            scrollBottom()
            
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

                    scrollBottom()
                    
                       
                } else if (response[i].ID_Mensagem_UsuarioSender == id && response[i].ID_Mensagem_UsuarioReceiver == idUserint) {
                    $("#chat").append(`
                    <div class="pai-not-me" >
                        <div class="bg-not-me" >
                            <p class="p-not-me" >${response[i].Mensagem}</p>
                            <p class="hora"> ${(response[i].Data_Mensagem).substring(11)}</p>
                        </div>
                    </div>

                    `); 

                    scrollBottom()
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

                                scrollBottom()
                                   
                            } else if (response[contDb].ID_Mensagem_UsuarioSender == id && response[contDb].ID_Mensagem_UsuarioReceiver == idUserint) {
                                $("#chat").append(`
                                <div class="pai-not-me" >
                                    <div class="bg-not-me" >
                                        <p class="p-not-me" >${response[contDb].Mensagem}</p>
                                        <p class="hora"> ${(response[contDb].Data_Mensagem).substring(11)}</p>
                                    </div>
                                </div>
            
                                `); 

                                scrollBottom()
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
    console.log(msg);

    $.ajax({
        type: "POST",
        url: "sendMsg.php",
        data: {msg: msg, id: id},
        
        success: function (response) {
            console.log(response)
        }
        
    });
    

    

})

// Menu Side






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










