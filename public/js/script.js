document.addEventListener("DOMContentLoaded", function () {
    // initNavbarEvents(); // panggil DI SINI
    // Fungsi inisialisasi event navbar
    // function initNavbarEvents() {
    //     const navbarNav = document.querySelector(".navbar-nav");
    //     const hamburger = document.querySelector("#hamburger-menu");

    //     hamburger.onclick = () => {
    //         navbarNav.classList.toggle("active");
    //     };

    //     document.addEventListener("click", function (e) {
    //         if (
    //             !hamburger.contains(e.target) &&
    //             !navbarNav.contains(e.target)
    //         ) {
    //             navbarNav.classList.remove("active");
    //         }
    //     });

    //     if (typeof feather !== "undefined") {
    //         feather.replace();
    //     }
    // }

    const navbar = document.querySelector('.navbar');
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('nav-links');

    function handleResize() {
        if (window.innerWidth <= 768) {
            navbar.classList.add('mobile');
        } else {
            navbar.classList.remove('mobile');
            navLinks.classList.remove('show');
        }
    }

    window.addEventListener('resize', handleResize);
    window.addEventListener('DOMContentLoaded', handleResize);

    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('show')
    })
});

// popup sewa
document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".btn-sewa");
    const popup = document.getElementById("popup-sewa");
    const namaProdukElem = document.getElementById("popup-nama-produk");
    const jumlahElem = document.getElementById("jumlah-sewa");
    const btnKurang = document.getElementById("btn-kurang");
    const btnTambah = document.getElementById("btn-tambah");
    const btnKonfirmasi = document.getElementById("btn-konfirmasi");
    const btnBatal = document.getElementById("btn-batal");

    let selectedProduct = "";
    let jumlah = 1;

    buttons.forEach((button) => {
        button.addEventListener("click", function (e) {
            e.preventDefault();
            selectedProduct = this.getAttribute("data-nama");
            jumlah = 1;
            jumlahElem.textContent = jumlah;
            namaProdukElem.textContent = selectedProduct;
            popup.style.display = "flex";
        });
    });

    btnTambah.addEventListener("click", function () {
        jumlah++;
        jumlahElem.textContent = jumlah;
    });

    btnKurang.addEventListener("click", function () {
        if (jumlah > 1) {
            jumlah--;
            jumlahElem.textContent = jumlah;
        }
    });

    btnBatal.addEventListener("click", function () {
        popup.style.display = "none";
    });

    btnKonfirmasi.addEventListener("click", function () {
        alert(`Anda menyewa ${jumlah} unit ${selectedProduct}. Terima kasih!`);
        popup.style.display = "none";
    });
});
