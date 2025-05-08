<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Portfolio</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script>
        window.addEventListener("scroll", () => {
            const header = document.querySelector("header");
            const sections = document.querySelectorAll("section");
            const navLinks = document.querySelectorAll("header ul li a");
            let current = "";

            if (window.scrollY > 50) {
                header.classList.add("scrolled");
            } else {
                header.classList.remove("scrolled");
            }

            sections.forEach((section) => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;

                if (
                    window.scrollY >= sectionTop - sectionHeight / 3 &&
                    window.scrollY < sectionTop + sectionHeight - sectionHeight / 3
                ) {
                    current = section.getAttribute("id");
                }
            });

            navLinks.forEach((link) => {
                link.classList.remove("active");
                if (link.getAttribute("href").includes(current)) {
                    link.classList.add("active");
                }
            });
        });
    </script>
</head>

<body>
    <header class="container">
        <div class="page-header">
            <div class="logo">
                <a href="#aboutme">Haxovica.</a>
            </div>
            <input type="checkbox" id="click">

            <label for="click" class="mainicon">
                <div class="menu">
                    <i class='bx bx-menu'></i>
                </div>
            </label>
            <ul>
                <li><a href="#aboutme" class="active">Tentang Saya</a></li>
                <li><a href="#tentanghaxovica">Tentang Haxovica</a></li>
                <li><a href="#karya">Lihat Karya</a></li>
                <li><a href="#hubungi">Hubungi</a></li>
            </ul>
            <label class="mode">
                <input type="checkbox" id="darkModeToggle">
                <i class='bx bxs-moon'></i>
                <i class='bx bxs-sun'></i>
            </label>
        </div>
    </header>

    <section id="aboutme" class="container" data-aos="slide-down">
        <div class="main">
            <div class="detail">
                <h3>Halo!</h3>
                <h1>Saya <span style="color:#f9532d;">Hashfi</span></h1>
                <h2>Motion Designer & Founder of Haxovica Studios.</h2>
                <p>Saya adalah salah satu pendiri dari Haxovica Studios.
                    Sebuah studio kreatif digital yang menyediakan layanan animasi logo, 
                    desain banner, serta berbagai kebutuhan branding.</p>
                <div class="social">
                    <a href="https://discord.gg/eFPtBz3eZW"><i class='bx bxl-discord'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="https://github.com/presidenhashfi"><i class='bx bxl-github'></i></a>
                </div>
            </div>
            <div class="img-sec">
                <div class="images">
                    <img src="foto profil.png" alt="" class="img-w">
                </div>
            </div>
        </div>
    </section>

    <section id="tentanghaxovica" class="container" data-aos="slide-right">
        <div class="main">
            <div class="detail">
                <h3>Tentang Haxovica</h3>
                <h1>Kenali <span style="color:#f9532d;">Haxovica</span></h1>
                <p>Haxovica Studios adalah studio kreatif digital yang berfokus pada visual motion dan audio branding. Kami hadir untuk membantu individu, brand, dan bisnis dalam menciptakan identitas visual yang unik dan profesional.</p>
                <h2>Layanan Kami:</h2>
                <div class="services">
                    <div class="service-item">
                        <i class="bx bx-film"></i>
                        <p>Animasi Logo & Opening</p>
                    </div>
                    <div class="service-item">
                        <i class="bx bx-image"></i>
                        <p>Desain Banner Statis & Animasi</p>
                    </div>
                    <div class="service-item">
                        <i class="bx bx-brush"></i>
                        <p>Branding Visual untuk Sosial Media</p>
                    </div>
                    <div class="service-item">
                        <i class="bx bx-music"></i>
                        <p>Jasa Sound Design, Mixing, dan Mastering</p>
                    </div>
                    <div class="service-item">
                        <i class="bx bx-package"></i>
                        <p>Paket Branding Visual + Audio (bundle)</p>
                    </div>
                </div>
            </div>
            <div class="img-sec">
                <div class="images">
                    <img src="Logo Haxovica 1.png" alt="Logo Haxovica" class="img-w">
                </div>
            </div>
        </div>
    </section>

    <section id="karya" class="container karya-section" data-aos="slide-left">
        <div class="main">
            <div class="detail">
                <h3>Portofolio Saya</h3>
                <h1>Karya Terbaik <span style="color:#f9532d;">Haxovica</span></h1>
                <h2>Berikut adalah beberapa karya yang telah saya buat.</h2>
                <div class="gallery">
                    <div class="gallery-item">
                        <img src="Portofolio Logo Midoriya .jpg" alt="Karya 1">
                        <p>Animasi Logo</p>
                    </div>
                    <div class="gallery-item">
                        <img src="Final Booster Server.gif" alt="Karya 2">
                        <p>Animasi Banner</p>
                    </div>
                    <div class="gallery-item">
                        <img src="Mockup WEB.png" alt="Karya 3">
                        <p>Branding Kit</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="hubungi" class="container hubungi-section">
        <div class="main">
            <div class="detail">
    
                <h1>Let's <span style="color:#f9532d;">Connect</span></h1>
                <p>Anda dapat menghubungi saya melalui formulir di bawah ini:</p>
                <form action="contact.php" method="POST" class="contact-form">
    <div class="input-container">
        <i class="bx bx-user"></i>
        <input type="text" name="name" placeholder="Masukkan nama lengkap Anda" required>
    </div>
    <div class="input-container">
        <i class="bx bx-envelope"></i>
        <input type="email" name="email" placeholder="Masukkan alamat email Anda" required>
    </div>
    <div class="input-container">
        <textarea name="message" placeholder="Tulis pesan Anda di sini..." required></textarea>
    </div>
    <button type="submit">Kirim Pesan</button>
</form>
                <p>Anda dapat menghubungi saya melalui salah satu alternatif kontak di bawah ini:</p>
                <div class="alternative-contact">
                    <ul>
                        <li>
                            <i class='bx bxl-whatsapp'></i>
                            <strong>WhatsApp:</strong> 
                            <a href="https://wa.me/6281234567890" target="_blank">+62 812-3456-7890</a>
                        </li>
                        <li>
                            <i class='bx bxl-gmail'></i>
                            <strong>Email:</strong> 
                            <a href="mailto:haxovicastudios@gmail.com">haxovicastudios@gmail.com</a>
                        </li>
                        <li>
                            <i class='bx bxl-discord'></i>
                            <strong>Discord:</strong> 
                            <a href="https://discord.gg/eFPtBz3eZW" target="_blank">Haxovica Studios</a>
                        </li>
                    </ul>
                    <p>Untuk diskusi lebih lanjut, kami sarankan Anda bergabung dengan <a href="https://discord.gg/eFPtBz3eZW" target="_blank">Discord Haxovica Studios</a>.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-content">
        <p>&copy; 2025 Haxovica Studios. All Rights Reserved.</p>
        <div class="social">
            <a href="https://discord.gg/eFPtBz3eZW"><i class='bx bxl-discord'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="https://github.com/presidenhashfi"><i class='bx bxl-github'></i></a>
        </div>
    </footer>

    <script>
        const darkModeToggle = document.getElementById("darkModeToggle");
        const body = document.body;

        if (localStorage.getItem("darkMode") === "enabled") {
            body.classList.add("dark-mode");
            darkModeToggle.checked = true;
        }
        darkModeToggle.addEventListener("change", () => {
            if (darkModeToggle.checked) {
                body.classList.add("dark-mode");
                localStorage.setItem("darkMode", "enabled");
            } else {
                body.classList.remove("dark-mode");
                localStorage.setItem("darkMode", "disabled");
            }
        });
    </script>
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 500, 
            once: false, 
            offset: 100, 
        });
    </script>

</body>
</html>