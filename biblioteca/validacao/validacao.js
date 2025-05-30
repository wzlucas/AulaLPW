function validarCampos() {
    //Capturar os valores informados pelo usuário
    var titulo = document.getElementById('titulo').value;
    var autor = document.getElementById('autor').value;
    var genero = document.getElementById('genero').value;
    var paginas = document.getElementById('paginas').value;

    //alert(titulo + ' - ' + autor + ' - ' + genero + ' - ' + paginas);

    erros = [];
    if(titulo == '') 
        erros.push('Informe o título!');
    if(autor == '')
        erros.push('Informe o autor!');
    if(genero == '')
        erros.push('Informe o genêro!');
    if(paginas == '')
        erros.push('Informe o número de páginas!');
    else (paginas == 0)
        erros.push('número de páginas não pode ser 0!');

        

    if(erros.length > 0){
        //alert(erros.join("\n"));
        document.getElementById('mensagemErro').innerHTML = erros.join("<br>");

        return false;
    }
    
    return true;
}

    