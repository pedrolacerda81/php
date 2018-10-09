// Página de Funções JS;
function navegarEm5s(e) {
    e.preventDefault() /* importante */
    console.log('Saindo em 5s ...')
    setTimeout(() => {
         // const link = e.targuet
        window.location.href = e.target.href /* e.target é o link ;) */
    }, 5000)
}

const selecionar = seletor => document.querySelectorAll(seletor)
        .forEach(e => e.classList.add('selected'))
selecionar('[link]')