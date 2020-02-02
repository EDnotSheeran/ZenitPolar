class ZenitPolar{
    static encode(text){
//ZENIT    
    //Minuscula
        text = text.replace('z','p');
        text = text.replace('e','o');
        text = text.replace('n','l');
        text = text.replace('i','a');
        text = text.replace('t','r');
    //Maiuscula
        text = text.replace('Z','P');
        text = text.replace('E','O');
        text = text.replace('N','L');
        text = text.replace('I','A');
        text = text.replace('T','R');
    //Retorno
        return text;
    }
}
