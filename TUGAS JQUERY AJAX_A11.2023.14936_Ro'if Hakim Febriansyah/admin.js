document.getElementById('togglemode').addEventListener('click', function () {
    const button = this;
    const icon = document.getElementById('iconmode');
    const nav = document.getElementById('nav');
    const judul = document.getElementById('brand');
    const link1 = document.getElementById('link1');
    const link2 = document.getElementById('link2');
    const link3 = document.getElementById('link3');
    const footer = document.getElementById('footer');
    const dashboard = document.getElementById('content');

    if (icon.classList.contains('bi-moon-fill')) {
        // Ganti ke mode gelap
        button.classList.replace('btn-light', 'btn-dark');
        button.classList.replace('text-dark', 'text-light');
        icon.classList.replace('bi-moon-fill', 'bi-brightness-high-fill');
        footer.classList.replace('bg-dark', 'bg-light');
        footer.classList.replace('text-light', 'text-dark');
        footer.classList.replace('border-light', 'border-dark');
        dashboard.classList.replace('bg-dark', 'bg-light');
        dashboard.classList.replace('text-light', 'text-dark');
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
        footer.classList.replace('bg-light', 'bg-dark');
        footer.classList.replace('text-dark', 'text-light');
        footer.classList.replace('border-dark', 'border-light');
        nav.classList.replace('border-dark','border-white');
        nav.classList.replace('bg-light', 'bg-dark');
        judul.classList.replace('text-dark','text-light');
        link1.classList.replace('text-dark','text-light');
        link2.classList.replace('text-dark','text-light');
        dashboard.classList.replace('bg-light','bg-dark');
        dashboard.classList.replace('text-dark', 'text-light');
        link3.classList.replace('text-dark','text-light');
        localStorage.setItem('theme', 'light'); // Simpan preferensi
    }
});
