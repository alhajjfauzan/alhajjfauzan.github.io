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

    