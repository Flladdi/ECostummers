let shporta = [];
let totali = 0;

function shtoProdukt(emri, cmimi) {
    shporta.push({ emri: emri, cmimi: cmimi });
    totali += cmimi;
    document.getElementById('cart-count').innerText = shporta.length;
    document.querySelector('.add-to-cart').style.backgroundColor = 'red'; // Ndrysho ngjyrën e butonit në të kuq
    shfaqProduktetNeTabel();
}

function fshiProdukt(index) {
    totali -= shporta[index].cmimi;
    shporta.splice(index, 1);
    document.getElementById('cart-count').innerText = shporta.length;
    shfaqProduktetNeTabel();
}

function shfaqProduktetNeTabel() {
    let tabela = document.getElementById('shporta-tabela');
    tabela.innerHTML = '';
    shporta.forEach((produkt, index) => {
        let rreshti = tabela.insertRow();
        let cell1 = rreshti.insertCell(0);
        let cell2 = rreshti.insertCell(1);
        cell1.innerText = produkt.emri;
        cell2.innerText = produkt.cmimi + '$';
        
    });
    document.getElementById('totali-shportes').innerText = totali;
}
document.querySelector('.cart').addEventListener('click', function() {
    document.getElementById('slide-menu').classList.toggle('open');
});
function mbyllShporten() {
    document.querySelector('.cart-container').classList.remove('show');
}

function fshijShporten() {
    shporta = [];
    totali = 0;
    shfaqProduktetNeTabel();
    document.getElementById('cart-count').innerText = '0';
}

function fshiProdukt(index) {
    totali -= shporta[index].cmimi;
    shporta.splice(index, 1);
    document.getElementById('cart-count').innerText = shporta.length;
    shfaqProduktetNeTabel();
}
function mbyllSlideMenu() {
    document.getElementById('slide-menu').style.right = '-100%';
}




