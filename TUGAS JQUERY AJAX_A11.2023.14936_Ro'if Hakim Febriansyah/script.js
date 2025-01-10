function tampilwaktu() {
    var waktu = new Date();
    var hari = waktu.getDate();
    var bulan = waktu.getMonth() + 1;
    var tahun = waktu.getFullYear();
    var tanggal = hari + "/" + bulan + "/" + tahun;
    document.getElementById('tanggal').innerHTML = tanggal;
    setTimeout(tampilwaktu, 1000);
};

function tampiljam() {
    var waktu = new Date();
    var jam = waktu.getHours().toString().padStart(2, '0');
    var menit = waktu.getMinutes().toString().padStart(2, '0');
    var detik = waktu.getSeconds().toString().padStart(2, '0');
        var waktu_jam =jam + ":" + menit + ":" + detik;
    document.getElementById('jam').innerHTML = waktu_jam;
    setTimeout(tampiljam, 1000);
};

document.getElementById('togglemode').addEventListener('click', function () {
    const button = this;
    const icon = document.getElementById('iconmode');
    const nav = document.getElementById('nav');
    const hero = document.getElementById('hero');
    const judul = document.getElementById('brand');
    const link1 = document.getElementById('link1');
    const link2 = document.getElementById('link2');
    const link3 = document.getElementById('link3');
    const article = document.getElementById('article');
    const gallery = document.getElementById('gallery');
    const footer = document.getElementById('footer');
    const dashboard = document.getElementById('dashboard');



    if (icon.classList.contains('bi-moon-fill')) {
        // Ganti ke mode gelap
        button.classList.replace('btn-light', 'btn-dark');
        button.classList.replace('text-dark', 'text-light');
        icon.classList.replace('bi-moon-fill', 'bi-brightness-high-fill');
        hero.classList.replace('bg-dark', 'bg-light');
        article.classList.replace('bg-primary', 'bg-info');
        gallery.classList.replace('bg-dark', 'bg-light');
        gallery.classList.replace('text-light', 'text-dark');
        footer.classList.replace('bg-dark', 'bg-light');
        footer.classList.replace('text-light', 'text-dark');
        nav.classList.replace('bg-dark', 'bg-light');
        nav.classList.replace('border-white', 'border-dark');
        judul.classList.replace('text-light', 'text-dark');
        link1.classList.replace('text-light', 'text-dark');
        link2.classList.replace('text-light', 'text-dark');
        link3.classList.replace('text-light', 'text-dark');
        localStorage.setItem('theme', 'dark'); // Simpan preferensi
    } else {
        // Ganti ke mode terang
        button.classList.replace('btn-dark', 'btn-light');
        button.classList.replace('text-light', 'text-dark');
        icon.classList.replace('bi-brightness-high-fill', 'bi-moon-fill');
        hero.classList.replace('bg-light', 'bg-dark');
        article.classList.replace('bg-info', 'bg-primary');
        gallery.classList.replace('bg-light', 'bg-dark');
        gallery.classList.replace('text-dark', 'text-light');
        footer.classList.replace('bg-light', 'bg-dark');
        footer.classList.replace('text-dark', 'text-light');
        nav.classList.replace('border-dark','border-white');
        nav.classList.replace('bg-light', 'bg-dark');
        judul.classList.replace('text-dark','text-light');
        link1.classList.replace('text-dark','text-light');
        link2.classList.replace('text-dark','text-light');
        link3.classList.replace('text-dark','text-light');
        localStorage.setItem('theme', 'light'); // Simpan preferensi
    }
});

tampilwaktu();
tampiljam();