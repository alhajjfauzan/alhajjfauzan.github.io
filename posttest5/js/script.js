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
    const query = document.getElementById("search").value.toLowerCase();
    const h3Elements = document.querySelectorAll(".kartupage h3");
    h3Elements.forEach(h3 => {
        const kartupage = h3.closest(".kartupage"); 
        if (h3.textContent.toLowerCase().includes(query)) {
            kartupage.style.display = "";  
        } else {
            kartupage.style.display = "none"; 
        }
    });
}
