function validaCampo() {
    if (document.cadastro_veiculo.modelo_veiculo.value == "") {
        alert("O campo modelo é obrigatório!");
        return false;
    } else
    if (document.cadastro_veiculo.ano_veiculo.value == "") {
        alert("O campo ano é obrigatório!");
        return false;
    } else
    if (document.cadastro_veiculo.preco_veiculo.value == "") {
        alert("O campo preço é obrigatório!");
        return false;
    } else
    return true;
}