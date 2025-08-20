
document.querySelectorAll('.item-row').forEach(row => {
    let modalQtd = 0;
    const input = row.querySelector('.quantity-input');
    const btnMais = row.querySelector('.round-right');
    const btnMenos = row.querySelector('.round-left');


    // Botão de aumentar
    btnMais.addEventListener('click', () => {
        modalQtd++;
        input.value = modalQtd;
        atualizarTotal();
    });

    // Botão de diminuir
    btnMenos.addEventListener('click', () => {
        modalQtd--;
        if (modalQtd < 0) {
            modalQtd = 0;
        }
        input.value = modalQtd;
        atualizarTotal();
    });


});

// Função para somar todos os valores
function atualizarTotal() {
    let total = 0;

    document.querySelectorAll('.item-row').forEach(row => {
        const quantidade = parseInt(row.querySelector('.quantity-input').value) || 0;
        const preco = parseFloat(row.querySelector('.item-info').dataset.price);
        total += quantidade * preco;
    });

    document.querySelector('.senacoins-total').textContent = total;
}