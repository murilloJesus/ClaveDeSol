let lgpdhtml = `
<div class="hold-lgpd">
    <div class="lgpd">
        <p>Nós armazenamos dados para melhorar a sua experiência de navegação. Ao utilizar nossos serviços, você concorda com o uso de cookies? 🍪
            <a href="https://www.gov.br/cidadania/pt-br/acesso-a-informacao/lgpd" target="_blank">Saiba mais aqui</a>
        </p>
        <button id="lgpdAccept">Aceito os Cookies</button>
    </div>
</div>`;

//coloquei a função inteira dentro do Jquery para ela só iniciar ao final da leitura do DOM
//alterei a função para jquery (velocidade e praticidade)
//resolve o problema com o menu
$(function(){
    let lscontent = localStorage.getItem('lgpd');

    if (!lscontent) {
        $('body').append(lgpdhtml);

        $("#lgpdAccept").on('click', () => {
           $('.hold-lgpd').remove();
            localStorage.setItem('lgpd', 'Preenchido')
        })
    }
})
