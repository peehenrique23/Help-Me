    //Constantes Global
    const clear = "";
    
    function validasenha(){
        //Variaveis locais
        var pass1 = (document.getElementById("pass1").value);
        var pass2 = (document.getElementById("pass2").value);

        if(pass1 != pass2){
            document.getElementById("res-pass").innerHTML = 'Senhas não são iguais';
            document.getElementById("pass2").value = clear;
        }
        else{
            document.getElementById("res-pass").innerHTML = "";
        }
    }

    function validaemail(){
        //Variaveis locais
        var email = (document.getElementById("email").value);
        var css = document.getElementById("email");
        var check = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        
        if (check.test(email) == false) 
        {
            document.getElementById("res-email").innerHTML = "Ops. E-mail inválido :O";
            document.getElementById("email").value = clear;
        }
        else{
            document.getElementById("res-email").innerHTML = "";
        }
    }

    function validauser(){
        //Variaveis locais
        var user    = (document.getElementById("user").value);
        var xmlhttp = new XMLHttpRequest();
        if (user != ""){
        xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
             let position = this.response.search('ZH');
             if(position > 0){
                document.getElementById("res-login").innerHTML = "Esse user já está sendo usado :(" ;
                document.getElementById("user").value = clear;
            }
             else{
                document.getElementById("res-login").innerHTML = "";
            }
            }
        }
        }
        xmlhttp.open("GET","getuser.php?q="+user,true);
        xmlhttp.send();
    }

    function validauser2(){
        //Variaveis locais
        var user    = (document.getElementById("user").value);
        var xmlhttp = new XMLHttpRequest();
        if (user != ""){
        xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
             let position = this.response.search('ZG');
             if(position > 0){
                document.getElementById("res-login").innerHTML = "Esse user não existe :(" ;
                document.getElementById("user").value = clear;
            }
             else{
                document.getElementById("res-login").innerHTML = "";
            }
            }
        }
        }
        xmlhttp.open("GET","getuser.php?q="+user,true);
        xmlhttp.send();
    }

   
   
   /*let pass1 = (document.getElementById("pass1").value);
    let pass2 = (document.getElementById("pass2").value);

    if(pass1 === pass2){
        document.getElementById("message").innerHTML = 'Senhas conferem';
    }
    else{
        document.getElementById("message").innerHTML = 'Senhas n conferem';
    }*/
