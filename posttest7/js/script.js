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

function searchInsect() {
    const input = document.getElementById('search');
    const filter = input.value.toLowerCase();
    const table = document.getElementById('insectTable');
    const tr = table.getElementsByTagName('tr');
    for (let i = 1; i < tr.length; i++) { 
        const tdNama = tr[i].getElementsByTagName('td')[2];
        const tdOrdo = tr[i].getElementsByTagName('td')[3];

        if (tdNama || tdOrdo) {
            const txtValueNama = tdNama.textContent || tdNama.innerText;
            const txtValueOrdo = tdOrdo.textContent || tdOrdo.innerText;

            if (txtValueNama.toLowerCase().indexOf(filter) > -1 || txtValueOrdo.toLowerCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none"; 
            }
        }
    }
}
