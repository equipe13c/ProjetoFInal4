function formataCampo(campo, Mascara, evento) { 
        var boleanoMascara; 

        var Digitato = evento.keyCode;
        exp = /\-|\.|\/|\(|\)| /g
        campoSoNumeros = campo.value.toString().replace( exp, "" ); 

        var posicaoCampo = 0;    
        var NovoValorCampo="";
        var TamanhoMascara = campoSoNumeros.length;; 

        if (Digitato != 8) { // backspace 
                for(i=0; i<= TamanhoMascara; i++) { 
                        boleanoMascara  = ((Mascara.charAt(i) == "-") || (Mascara.charAt(i) == ".")
                                                                || (Mascara.charAt(i) == "/")) 
                        boleanoMascara  = boleanoMascara || ((Mascara.charAt(i) == "(") 
                                                                || (Mascara.charAt(i) == ")") || (Mascara.charAt(i) == " ")) 
                        if (boleanoMascara) { 
                                NovoValorCampo += Mascara.charAt(i); 
                                  TamanhoMascara++;
                        }else { 
                                NovoValorCampo += campoSoNumeros.charAt(posicaoCampo); 
                                posicaoCampo++; 
                          }              
                  }      
                campo.value = NovoValorCampo;
                  return true; 
        }else { 
                return true; 
        }
}
function mascaraInteiro(){
        if (event.keyCode < 48 || event.keyCode > 57){
                event.returnValue = false;
                return false;
        }
        return true;
}
function MascaraData(data){
        if(mascaraInteiro(data)==false){
                event.returnValue = false;
        }       
        return formataCampo(data, '00/00/0000', event);
}
function letras(){
  tecla = event.keyCode;  
    if (tecla >= 33 && tecla <= 64 || tecla >= 91 && tecla <= 93 || tecla >= 123 && tecla <= 159 || tecla >= 162 && tecla <= 191 ){   
        return false;  
    }else{  
       return true;  
    }  
}
function letrasNumeros(){
  tecla = event.keyCode;  
    if (tecla >= 33 && tecla <= 47 || tecla >= 91 && tecla <= 93 || tecla >= 123 && tecla <= 159 || tecla >= 162 && tecla <= 191 ){   
        return false;  
    }else{  
       return true;  
    }  
}
function validarData(campo){
var expReg = /^(([0-2]\d|[3][0-1])\/([0]\d|[1][0-2])\/[1-2][0-9]\d{2})$/;
var msgErro = 'Formato inválido de data.';
if ((campo.value.match(expReg)) && (campo.value!='')){
var dia = campo.value.substring(0,2);
var mes = campo.value.substring(3,5);
var ano = campo.value.substring(6,10);
if(mes==4 || mes==6 || mes==9 || mes==11 && dia > 30){
alert("Dia incorreto !!! O mês especificado contém no máximo 30 dias.");
campo.value="";
return false;
} else{
if(ano%4!=0 && mes==2 && dia>28){
alert("Data incorreta!! O mês especificado contém no máximo 28 dias.");
campo.value="";
return false;
} else{
if(ano%4==0 && mes==2 && dia>29){
alert("Data incorreta!! O mês especificado contém no máximo 29 dias.");
campo.value="";
return false;
}
else{	
return true;
}}}} else {
alert(msgErro);
campo.value = "";
campo.focus();
return false;
}}
function atualizarCaptcha(){
    var campo = document.getElementById("captcha2");
    campo.innerHTML = '<img src="captcha.php?l=180&a=50&tf=20&ql=6"id="captcha" >';
}