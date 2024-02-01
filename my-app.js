var app = new Framework7({
    // App root element
    el: '#app',
    // App Name
    name: 'My App',
    // Enable swipe panel
    panel: {
        swipe: true,
    },
    // Add default routes
    routes: [{
        path: '/about/',
        url: 'about.html',
    }, {
        path: '/pages/connection/',
        url: '/pages/connection/connection.php',
    }, {
        path: '/Tubes/pages/login/',
        url: 'pages/kasir/login.html',
    }, ],
    // ... other parameters
});

// function pesan() {
//   var namaPemesanan = document.getElementById('namaPemesanan').value;
//   var nomorMeja = document.getElementById('nomorMeja').value;

//   // Lakukan sesuatu dengan data yang diinput, misalnya mengirim ke server
//   console.log('Nama Pemesanan: ' + namaPemesanan);
//   console.log('Nomor Meja: ' + nomorMeja);
// }

var mainView = app.views.create('.view-main');

function pengulangan_id_pelanggan() {
    var c = 0;

    if (c <= 99999) {
        document.getElementById('nomorMeja').setAttribute('value=' + c)
    }
}