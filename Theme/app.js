document.addEventListener('DOMContentLoaded', () => {
    // Szum VHS
    const noise = document.querySelector('.vhs-noise');
    setInterval(() => {
        noise.style.opacity = Math.random() * 0.2 + 0.05;
    }, 100);

    // Miganie tytułu
    const title = document.querySelector('.retro-title');
    setInterval(() => {
        title.style.textShadow = Math.random() > 0.5 ? '0 0 10px #ff0, 0 0 20px #f00' : '0 0 5px #ff0';
    }, 500);

    // Kliknięcie download z efektem
    const downloadBtn = document.querySelector('.download-btn');
    downloadBtn.addEventListener('click', () => {
        downloadBtn.style.transform = 'scale(1.2)';
        setTimeout(() => {
            downloadBtn.style.transform = 'scale(1)';
        }, 200);
        alert('Downloading HBrowser Demo started! 🚀');
    });

    // Przełącznik języka
    const langToggle = document.getElementById('lang-toggle');
    const langNote = document.getElementById('lang-note');
    let isEnglish = true;

    langToggle.addEventListener('click', () => {
        isEnglish = !isEnglish;
        langToggle.textContent = isEnglish ? 'Switch to Polski 🇵🇱' : 'Switch to English 🇬🇧';
        langNote.textContent = `Current language: ${isEnglish ? 'English 🇬🇧' : 'Polish 🇵🇱'}`;

        // Zmiana treści
        const description = document.querySelector('.description');
        const devSection = document.querySelector('.dev-section p:nth-child(2)');
        if (!isEnglish) {
            description.textContent = '🚀 HBrowser to stylizowana przeglądarka terminalowa dla entuzjastów white/gray hat. 🌐 Szukaj z DuckDuckGo, używaj zaawansowanych komend (np. :udeath), i ciesz się retro vibe! 💾 Pobierz demo';
            devSection.textContent = 'GitHub: <a href="https://github.com/NyxVaultX" target="_blank">https://github.com/NyxVaultX 🌐';
        } else {
            description.textContent = '🚀 HBrowser is a stylized terminal browser for white/gray hat enthusiasts. 🌐 Search with DuckDuckGo, use advanced commands (e.g., :udeath), and enjoy the retro vibe! 💾 Download the demo';
            devSection.textContent = 'GitHub: <a href="https://github.com/NyxVaultX" target="_blank">https://github.com/NyxVaultX</a> 🌐';
        }
        langToggle.style.transform = 'scale(1.1)';
        setTimeout(() => {
            langToggle.style.transform = 'scale(1)';
        }, 200);
    });
});