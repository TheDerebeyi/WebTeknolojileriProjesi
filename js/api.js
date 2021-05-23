var sorgular = ["Interstellar", "The Office", "Vikings", "Blade Runner (1982)", "Gibi"]
var kategori = ["Tüm Zamanların En İyisi", "En İyi Komedi", "En İyi Savaş Temalı", "En İyi Bilim Kurgu", "En İyi Yerli"]

async function getData(tableRow1, tableRow2, tableRow3, index) {
    var url = "https://imdb8.p.rapidapi.com/auto-complete?q=" + sorgular[index];
    const api_cevap = await fetch(url, {
        "method": "GET",
        "headers": {
            "x-rapidapi-key": "4bc779833amsh744a0f1d5c87820p15c1b1jsn4a0b6d07a64a",
            "x-rapidapi-host": "imdb8.p.rapidapi.com"
        }
    });
    const veri = await api_cevap.json();

    let td = document.createElement("td");
    td.innerHTML = kategori[index];

    tableRow1.appendChild(td);

    let td2 = document.createElement("td");
    td2.innerHTML = veri.d[0].l;

    tableRow2.appendChild(td2);

    let td3 = document.createElement("td");
    td3.style.padding = 20;
    tableRow3.appendChild(td3);

    let img = document.createElement("img");
    td3.appendChild(img);

    img.src = veri.d[0].i.imageUrl;
    img.width = 240;
}

for (var i = 0; i < sorgular.length; i++) {
    if (i % 3 == 0) {
        var tr = document.createElement("tr");
        document.getElementById("tablo1").appendChild(tr);
        var tr2 = document.createElement("tr");
        document.getElementById("tablo1").appendChild(tr2);
        var tr3 = document.createElement("tr");
        document.getElementById("tablo1").appendChild(tr3);
    }

    getData(tr, tr2, tr3, i);
}