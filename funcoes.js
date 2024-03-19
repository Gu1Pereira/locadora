function Trocar(){
    let tipo = document.getElementById("veiculo").value
    if(tipo == "Básico"){
        document.getAnimationsId("imagem").src="./img/basico.png"
    }else if(tipo == "imagem"){
        document.getElementById("imagem").src="./img/esporte.png"
    }else{
        document.getElementById("imagem").src="./img/completo.png"
    }

}