    //Constantes Global
    const clear = "";
    
    function validasenha(){
        //Variaveis locais
        var pass1 = (document.getElementById("pass1").value);
        var pass2 = (document.getElementById("pass2").value);

        if(pass1 != pass2){
            document.getElementById("message").innerHTML = 'Senhas não são iguais';
            document.getElementById("pass2").value = clear;
        }
        else{
            document.getElementById("message").innerHTML = "";
        }
    }

    function validaemail(){
        //Variaveis locais
        var email = (document.getElementById("email").value);
        var css = document.getElementById("email");
        var check = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        
        if (check.test(email) == false) 
        {
            css.style.borderColor = 'red';
            css.style.outline = 0;
        }
        else{
            document.getElementById("message").innerHTML = "";
            css.style.borderColor = "rgb(6, 105, 222)";
            css.style.outline = 1;
        }
    }

    function validauser(){
        //Variaveis locais
        var user    = (document.getElementById("user").value);
        var xmlhttp = new XMLHttpRequest();

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
