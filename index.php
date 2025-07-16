<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HBrowser</title>
    <link rel="stylesheet" href="Theme/main.css">
    <link rel="icon" type="image/x-icon" href="Theme/icon/HB.ico">
</head>
<body>
    <div class="vhs-container">
        <div class="vhs-noise"></div>
        <div class="content">
            <h1 class="retro-title">HBrowser v1.0</h1>
            <p class="blink">Welcome to the Retro Terminal Browser!</p>
            <p class="description">
                🚀 HBrowser is a stylized terminal browser for white/gray hat enthusiasts.  
                🌐 Search with DuckDuckGo, use advanced commands (e.g., :udeath), and enjoy the retro vibe!  
                💾 Download the demo
            </p>

            <!-- Download Section -->
            <div class="download-section">
                <p>📅 Date: <?php echo date('F d, Y H:i'); ?> CEST</p>
                <a href="Download/HBrowser.rar" download class="download-btn">Download Demo 🚀</a>
                <p class="note">* Requires Windows. Size: ~50MB. 📥</p>
            </div>

            <!-- Dev Section -->
            <div class="dev-section">
                <h2>Dev Info 👨‍💻</h2>
                <p>Created by: NyxVaultX</p>
                <p>GitHub: <a href="https://github.com/NyxVaultX" target="_blank">https://github.com/NyxVaultX</a> 🌐</p>
            </div>

            <!-- Avatar Section -->
            <div class="avatar-section">
                <h2>NyxVaultX 👤</h2>
                <img src="Theme/icon/hh1.jpg" alt="NyxValutX" class="avatar-img">
                <p>Programmer&Balckhat 🧥</p>
            </div>

            <!-- Changelog Section -->
            <div class="changelog-section">
                <h2>Changelog 📝</h2>
                <ul>
                    <li>v1.0 (July 16, 2025): Initial release with :udeath commands 🎉</li>
                    <li>v0.9 (July 15, 2025): Added HTTPS analysis 🛡️</li>
                    <li>v0.8 (July 14, 2025): Basic terminal UI completed 🖥️</li>
                </ul>
            </div>

            <!-- Translator Section -->
            <div class="translator-section">
                <h2>Translator 🌍</h2>
                <button id="lang-toggle" class="lang-btn">Switch to Polish 🇵🇱</button>
                <p id="lang-note">Current language: English 🇬🇧</p>
            </div>
        </div>
    </div>
    <script src="Theme/app.js"></script>
</body>
</html>