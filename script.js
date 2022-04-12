
    let pass1 = (document.getElementById("pass1").value);
    let pass2 = (document.getElementById("pass2").value);

    if(pass1 === pass2){
        document.getElementById("message").innerHTML = 'Senhas conferem';
    }
    else{
        document.getElementById("message").innerHTML = 'Senhas n conferem';
    }
