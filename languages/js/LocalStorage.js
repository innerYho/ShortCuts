
var city = 0;
city = localStorage.getItem('citySession') ? localStorage.getItem('citySession') : localStorage.setItem('citySession', 1);
if (city == 1) {
    alert(city)
} else if (city == 2) {
    alert(city)
}
function elegir(id) {
    if (id == 'btnTytBgt') {
        document.getElementById('tytBgtIzq').style.display = "block";
        document.getElementById('tytBqllDere').style.display = "none";
        localStorage.setItem('citySession', 1);

    } else if (id == 'btnTytBqll') {
        document.getElementById('tytBgtDere').style.display = "none";
        document.getElementById('tytBqllDere').style.display = "block";
        // localStorage.setItem('BqllSession', 'Bqll');
        // localStorage.removeItem('BgtSession');
        localStorage.setItem('citySession', 2);
    }
}
