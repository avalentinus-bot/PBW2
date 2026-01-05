// Menunggu semua konten HTML dimuat sebelum menjalankan script
document.addEventListener('DOMContentLoaded', () => {

    // === FUNGSI THEME SWITCHER ===

    const darkBtn = document.getElementById('dark-btn');
    const lightBtn = document.getElementById('light-btn');
    const body = document.body;

    // Fungsi untuk menerapkan tema
    const applyTheme = (theme) => {
        if (theme === 'dark') {
            body.classList.add('dark-mode');
        } else {
            body.classList.remove('dark-mode');
        }
    };

    // Cek tema yang tersimpan di localStorage saat halaman dimuat
    const savedTheme = localStorage.getItem('theme') || 'light'; // Default 'light'
    applyTheme(savedTheme);

    // Event listener untuk tombol Dark
    darkBtn.addEventListener('click', () => {
        applyTheme('dark');
        localStorage.setItem('theme', 'dark'); // Simpan pilihan
    });

    // Event listener untuk tombol Light
    lightBtn.addEventListener('click', () => {
        applyTheme('light');
        localStorage.setItem('theme', 'light'); // Simpan pilihan
    });


    // === FUNGSI TANGGAL & WAKTU (Hanya di Halaman Home) ===

    const dateTimeElement = document.getElementById('datetime');

    // Cek apakah elemen #datetime ada di halaman ini
    if (dateTimeElement) {
        // Fungsi untuk mengupdate waktu
        const updateDateTime = () => {
            const now = new Date();
            
            // Format: 4/11/2025 10:36:46
            const date = now.toLocaleDateString('en-GB'); // Format d/M/yyyy
            const time = now.toLocaleTimeString('it-IT'); // Format HH:mm:ss
            
            dateTimeElement.textContent = `${date} ${time}`;
        };

        // Panggil fungsi sekali saat memuat
        updateDateTime();
        
        // Update waktu setiap detik (1000 ms)
        setInterval(updateDateTime, 1000);
    }

});