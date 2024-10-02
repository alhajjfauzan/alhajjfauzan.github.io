function darklight() {
    var element = document.body;
    element.classList.toggle("darkm");

    var img = document.getElementById('lightdark');
    if (element.classList.contains("darkm")) {
        img.src ="img/bulan.png";
        trans
    } else {
        img.src = "img/matahari.png";
    }
}
    function peringatan(){
        alert("belum tersedia")
    }
        document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.querySelector('.hamburger');
    const menu = document.querySelector('.menu');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        menu.classList.toggle('active');
    });

    document.querySelectorAll('.connec').forEach(item => {
        item.addEventListener('click', () => {
            hamburger.classList.remove('active');
            menu.classList.remove('active');
        });
    });
});
function searchInH3() {
    // Ambil nilai input dari pengguna
    const query = document.getElementById("search").value.toLowerCase();
    
    // Ambil semua elemen <h3> yang ada di dalam .kartupage
    const h3Elements = document.querySelectorAll(".kartupage h3");
    
    // Loop melalui setiap <h3> dan periksa apakah cocok dengan query
    h3Elements.forEach(h3 => {
        const kartupage = h3.closest(".kartupage");  // Ambil elemen induk .kartupage
        
        if (h3.textContent.toLowerCase().includes(query)) {
            kartupage.style.display = "";  // Tampilkan elemen jika cocok
        } else {
            kartupage.style.display = "none";  // Sembunyikan elemen jika tidak cocok
        }
    });
}
