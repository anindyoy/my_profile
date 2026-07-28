<?php
// Include translations
require_once 'translations.php';
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="<?php echo $t['site_description']; ?>"
    />
    <meta
      name="keywords"
      content="Anindyo Yudhistiro, Web Developer, Full-Stack Developer, PHP Developer, Laravel, Tailwind CSS, Portfolio"
    />
    <meta name="author" content="Anindyo Yudhistiro" />

    <meta
      property="og:title"
      content="<?php echo $t['site_title']; ?>"
    />
    <meta
      property="og:description"
      content="<?php echo $t['og_description']; ?>"
    />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://anindyo.in/" />
    <meta
      property="og:image"
      content="[GANTI DENGAN URL GAMBAR PROFIL/LOGO ANDA]"
    />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@[NAMA_AKUN_TWITTER_ANDA]" />
    <meta name="twitter:creator" content="@[NAMA_AKUN_TWITTER_ANDA]" />
    <meta name="twitter:title" content="<?php echo $t['site_title']; ?>" />
    <meta
      name="twitter:description"
      content="<?php echo $t['twitter_description']; ?>"
    />

    <!-- <meta
      name="twitter:image"
      content="[GANTI DENGAN URL GAMBAR PROFIL/LOGO ANDA]"
    /> -->

    <title><?php echo $t['site_title']; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;900&display=swap');

      * {
        font-family: 'Inter', sans-serif;
      }

      .dark-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
      }

      .glow-on-hover {
        transition: all 0.3s ease;
      }

      .glow-on-hover:hover {
        box-shadow: 0 0 30px rgba(59, 130, 246, 0.5);
        border-color: rgba(59, 130, 246, 0.5);
      }

      .tech-badge {
        transition: all 0.3s ease;
      }

      .tech-badge:hover {
        transform: scale(1.1);
        background: rgba(59, 130, 246, 0.2);
      }

      @keyframes float {
        0%,
        100% {
          transform: translateY(0px);
        }
        50% {
          transform: translateY(-20px);
        }
      }

      .floating {
        animation: float 6s ease-in-out infinite;
      }

      .grid-pattern {
        background-image: linear-gradient(
            rgba(59, 130, 246, 0.1) 1px,
            transparent 1px
          ),
          linear-gradient(90deg, rgba(59, 130, 246, 0.1) 1px, transparent 1px);
        background-size: 50px 50px;
      }

      .code-line {
        font-family: 'Courier New', monospace;
        color: #60a5fa;
      }
    </style>
  </head>
  <body class="bg-gray-900 text-gray-100">
    <!-- Language Switcher -->
    <div class="fixed top-4 right-4 z-50">
      <a href="?lang=id" class="px-3 py-1 rounded-lg text-sm font-semibold transition <?php echo $lang == 'id' ? 'bg-blue-600 text-white' : 'bg-gray-800 text-gray-400 hover:text-white'; ?>">
        ID
      </a>
      <a href="?lang=en" class="px-3 py-1 rounded-lg text-sm font-semibold transition <?php echo $lang == 'en' ? 'bg-blue-600 text-white' : 'bg-gray-800 text-gray-400 hover:text-white'; ?>">
        EN
      </a>
    </div>

    <!-- Hero Section -->
    <section
      id="home"
      class="min-h-screen flex items-center justify-center relative overflow-hidden pt-10"
    >
      <div class="absolute inset-0 grid-pattern opacity-20"></div>

      <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="grid md:grid-cols-2 gap-12 items-center">
          <div>
            <div class="text-blue-500 text-lg mb-4 code-line">
              <developer>
            </div>

            <p class="text-gray-400 text-lg mb-2"><?php echo $t['hero_greeting']; ?></p>

            <h1 class="text-6xl md:text-7xl font-black mb-6">
              <span class="text-white"><?php echo $t['hero_name_1']; ?></span><br />
              <span
                class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-cyan-400"
              >
                <?php echo $t['hero_name_2']; ?>
              </span>
            </h1>

            <p class="text-xl text-gray-400 mb-8 leading-relaxed">
              <?php echo $t['hero_description']; ?>
            </p>

            <div class="flex flex-wrap gap-4 mb-6">
              <a
                href="sistembisnis"
                target="_blank"
                rel="noopener noreferrer"
                class="bg-blue-600 hover:bg-blue-700 px-8 py-4 rounded-lg font-semibold transition flex items-center gap-2"
              >
                <i class="fas fa-list"></i>
                <?php echo $t['product_link']; ?>
              </a>
              <a
                href="#tech"
                class="border border-gray-700 hover:border-blue-500 px-8 py-4 rounded-lg font-semibold transition flex items-center gap-2"
              >
                <i class="fas fa-code"></i>
                <?php echo $t['btn_skills']; ?>
              </a>
            </div>

            <div class="text-blue-500 text-lg code-line">
              </developer>
            </div>
          </div>

          <div class="hidden md:block">
            <div class="dark-card p-8 rounded-2xl glow-on-hover floating">
              <div class="space-y-4">
                <div class="flex items-center gap-3">
                  <div class="w-3 h-3 rounded-full bg-red-500"></div>
                  <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                  <div class="w-3 h-3 rounded-full bg-green-500"></div>
                </div>
                <div class="text-sm space-y-2 font-mono">
                  <div>
                    <span class="text-purple-400">class</span>
                    <span class="text-yellow-400">Developer</span> {
                  </div>
                  <div class="pl-4">
                    <span class="text-blue-400">public</span>
                    <span class="text-green-400">$name</span> =
                    <span class="text-orange-400">"Anindyo"</span>;
                  </div>
                  <div class="pl-4">
                    <span class="text-blue-400">public</span>
                    <span class="text-green-400">$skills</span> = [
                  </div>
                  <div class="pl-8">
                    <span class="text-orange-400">"PHP"</span>,
                  </div>
                  <div class="pl-8">
                    <span class="text-orange-400">"Laravel"</span>,
                  </div>
                  <div class="pl-8">
                    <span class="text-orange-400">"MySQL"</span>,
                  </div>
                  <div class="pl-8">
                    <span class="text-orange-400">"JavaScript"</span>
                  </div>
                  <div class="pl-4">];</div>
                  <div>}</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 px-4 bg-gray-800/50">
      <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-4xl md:text-5xl font-black mb-4">
            <span class="text-blue-500">//</span> <?php echo $t['about_title']; ?>
          </h2>
          <p class="text-gray-400 text-lg">
            <?php echo $t['about_subtitle']; ?>
          </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
          <div class="dark-card p-8 rounded-xl glow-on-hover">
            <div class="text-4xl mb-4 text-blue-500">
              <i class="fas fa-laptop-code"></i>
            </div>
            <h3 class="text-2xl font-bold mb-3"><?php echo $t['experience_title']; ?></h3>
            <p class="text-gray-400">
              <?php echo $t['experience_desc']; ?>
            </p>
          </div>

          <div class="dark-card p-8 rounded-xl glow-on-hover">
            <div class="text-4xl mb-4 text-cyan-400">
              <i class="fas fa-code"></i>
            </div>
            <h3 class="text-2xl font-bold mb-3"><?php echo $t['clean_code_title']; ?></h3>
            <p class="text-gray-400">
              <?php echo $t['clean_code_desc']; ?>
            </p>
          </div>

          <div class="dark-card p-8 rounded-xl glow-on-hover">
            <div class="text-4xl mb-4 text-purple-400">
              <i class="fas fa-rocket"></i>
            </div>
            <h3 class="text-2xl font-bold mb-3"><?php echo $t['performance_title']; ?></h3>
            <p class="text-gray-400">
              <?php echo $t['performance_desc']; ?>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Tech Stack Section -->
    <section id="tech" class="py-20 px-4">
      <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-4xl md:text-5xl font-black mb-4">
            <span class="text-blue-500">//</span> <?php echo $t['tech_title']; ?>
          </h2>
          <p class="text-gray-400 text-lg"><?php echo $t['tech_subtitle']; ?></p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 mb-12">
          <div class="dark-card p-8 rounded-xl">
            <h3 class="text-2xl font-bold mb-6 flex items-center gap-3">
              <i class="fas fa-server text-blue-500"></i>
              <?php echo $t['backend_title']; ?>
            </h3>
            <div class="flex flex-wrap gap-3">
              <a
                href="https://www.php.net/"
                target="_blank"
                rel="noopener noreferrer"
                class="tech-badge bg-gray-800 px-4 py-2 rounded-lg border border-gray-700"
              >
                <i class="fab fa-php text-purple-400 mr-2"></i>PHP
              </a>
              <a
                href="https://laravel.com/"
                target="_blank"
                rel="noopener noreferrer"
                class="tech-badge bg-gray-800 px-4 py-2 rounded-lg border border-gray-700"
              >
                <i class="fab fa-laravel text-red-400 mr-2"></i>Laravel
              </a>
              <a
                href="https://livewire.laravel.com/"
                target="_blank"
                rel="noopener noreferrer"
                class="tech-badge bg-gray-800 px-4 py-2 rounded-lg border border-gray-700"
              >
                <i class="fas fa-bolt text-pink-400 mr-2"></i>Livewire </a
              ><a
                href="https://www.mysql.com/"
                target="_blank"
                rel="noopener noreferrer"
                class="tech-badge bg-gray-800 px-4 py-2 rounded-lg border border-gray-700"
              >
                <i class="fas fa-database text-blue-400 mr-2"></i>MySQL </a
              ><a
                href="https://restfulapi.net/"
                target="_blank"
                rel="noopener noreferrer"
                class="tech-badge bg-gray-800 px-4 py-2 rounded-lg border border-gray-700"
              >
                <i class="fas fa-plug text-green-400 mr-2"></i>RESTful API
              </a>
            </div>
          </div>

          <div class="dark-card p-8 rounded-xl">
            <h3 class="text-2xl font-bold mb-6 flex items-center gap-3">
              <i class="fas fa-palette text-cyan-400"></i>
              <?php echo $t['frontend_title']; ?>
            </h3>
            <div class="flex flex-wrap gap-3">
              <a
                href="https://developer.mozilla.org/en-US/docs/Web/HTML"
                target="_blank"
                rel="noopener noreferrer"
                class="tech-badge bg-gray-800 px-4 py-2 rounded-lg border border-gray-700"
              >
                <i class="fab fa-html5 text-orange-400 mr-2"></i>HTML5
              </a>
              <a
                href="https://developer.mozilla.org/en-US/docs/Web/CSS"
                target="_blank"
                rel="noopener noreferrer"
                class="tech-badge bg-gray-800 px-4 py-2 rounded-lg border border-gray-700"
              >
                <i class="fab fa-css3-alt text-blue-400 mr-2"></i>CSS3
              </a>
              <a
                href="https://developer.mozilla.org/en-US/docs/Web/JavaScript"
                target="_blank"
                rel="noopener noreferrer"
                class="tech-badge bg-gray-800 px-4 py-2 rounded-lg border border-gray-700"
              >
                <i class="fab fa-js text-yellow-400 mr-2"></i>JavaScript
              </a>
              <a
                href="https://alpinejs.dev/"
                target="_blank"
                rel="noopener noreferrer"
                class="tech-badge bg-gray-800 px-4 py-2 rounded-lg border border-gray-700"
              >
                <i class="fas fa-mountain text-teal-400 mr-2"></i>Alpine.js
              </a>
              <a
                href="https://tailwindcss.com/"
                target="_blank"
                rel="noopener noreferrer"
                class="tech-badge bg-gray-800 px-4 py-2 rounded-lg border border-gray-700"
              >
                <i class="fas fa-wind text-cyan-400 mr-2"></i>Tailwind CSS
              </a>
              <a
                href="https://getbootstrap.com/"
                target="_blank"
                rel="noopener noreferrer"
                class="tech-badge bg-gray-800 px-4 py-2 rounded-lg border border-gray-700"
              >
                <i class="fab fa-bootstrap text-purple-400 mr-2"></i>Bootstrap
              </a>
            </div>
          </div>
        </div>

        <div class="dark-card p-8 rounded-xl">
          <h3 class="text-2xl font-bold mb-6 flex items-center gap-3">
            <i class="fas fa-tools text-purple-400"></i>
            <?php echo $t['tools_title']; ?>
          </h3>
          <div class="flex flex-wrap gap-3">
            <a
              href="https://github.com/anindyoy"
              target="_blank"
              rel="noopener noreferrer"
              class="tech-badge bg-gray-800 px-4 py-2 rounded-lg border border-gray-700"
            >
              <i class="fab fa-github text-white mr-2"></i>GitHub
            </a>
            <a
              href="https://code.visualstudio.com/"
              target="_blank"
              rel="noopener noreferrer"
              class="tech-badge bg-gray-800 px-4 py-2 rounded-lg border border-gray-700"
            >
              <i class="fas fa-code text-blue-400 mr-2"></i>VS Code
            </a>
            <a
              href="https://www.postman.com/"
              target="_blank"
              rel="noopener noreferrer"
              class="tech-badge bg-gray-800 px-4 py-2 rounded-lg border border-gray-700"
            >
              <i class="fas fa-rocket text-orange-500 mr-2"></i>Postman
            </a>
            <a
              href="https://herd.laravel.com/"
              target="_blank"
              rel="noopener noreferrer"
              class="tech-badge bg-gray-800 px-4 py-2 rounded-lg border border-gray-700"
            >
              <i class="fab fa-laravel text-red-400 mr-2"></i>Laravel Herd
            </a>
            <a
              href="https://mailtrap.io/"
              target="_blank"
              rel="noopener noreferrer"
              class="tech-badge bg-gray-800 px-4 py-2 rounded-lg border border-gray-700"
            >
              <i class="fas fa-envelope text-green-400 mr-2"></i>Mailtrap
            </a>
            <a
              href="https://dbeaver.io/"
              target="_blank"
              rel="noopener noreferrer"
              class="tech-badge bg-gray-800 px-4 py-2 rounded-lg border border-gray-700"
            >
              <i class="fas fa-database text-yellow-400 mr-2"></i>DBeaver
            </a>
            <a
              href="https://clickup.com/"
              target="_blank"
              rel="noopener noreferrer"
              class="tech-badge bg-gray-800 px-4 py-2 rounded-lg border border-gray-700"
            >
              <i class="fas fa-tasks text-purple-400 mr-2"></i>ClickUp
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 px-4 bg-gray-800/50">
      <div class="max-w-4xl mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-4xl md:text-5xl font-black mb-4">
            <span class="text-blue-500">//</span> <?php echo $t['contact_title']; ?>
          </h2>
          <p class="text-gray-400 text-lg">
            <?php echo $t['contact_subtitle']; ?>
          </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
          <a
            href="mailto:anindyo.yudhistiro@gmail.com"
            class="dark-card p-8 rounded-xl glow-on-hover group"
          >
            <div
              class="text-5xl mb-4 text-blue-500 group-hover:scale-110 transition"
            >
              <i class="fas fa-envelope"></i>
            </div>
            <h3 class="text-2xl font-bold mb-2"><?php echo $t['email_title']; ?></h3>
            <p class="text-gray-400 break-all"><?php echo $t['email_desc']; ?></p>
            <div class="mt-4 text-blue-500 flex items-center gap-2">
              <?php echo $t['email_link']; ?> <i class="fas fa-arrow-right"></i>
            </div>
          </a>

          <a
            href="https://wa.me/6285678513359"
            target="_blank"
            class="dark-card p-8 rounded-xl glow-on-hover group"
          >
            <div
              class="text-5xl mb-4 text-green-500 group-hover:scale-110 transition"
            >
              <i class="fab fa-whatsapp"></i>
            </div>
            <h3 class="text-2xl font-bold mb-2"><?php echo $t['whatsapp_title']; ?></h3>
            <p class="text-gray-400"><?php echo $t['whatsapp_desc']; ?></p>
            <div class="mt-4 text-green-500 flex items-center gap-2">
              <?php echo $t['whatsapp_link']; ?> <i class="fas fa-arrow-right"></i>
            </div>
          </a>
        </div>

        <div class="mt-12 dark-card p-8 rounded-xl text-center">
          <p class="text-gray-300 text-lg leading-relaxed">
            <span class="text-blue-500 font-bold">"</span>
            <?php echo $t['quote']; ?>
            <span class="text-blue-500 font-bold">"</span>
          </p>
        </div>

        <div class="mt-8 text-center">
          <a
            href="https://wa.me/6285678513359"
            target="_blank"
            class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 px-8 py-4 rounded-lg font-semibold transition transform hover:scale-105"
          >
            <i class="fab fa-whatsapp"></i>
            <?php echo $t['btn_contact']; ?>
          </a>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 px-4 border-t border-gray-800">
      <div class="max-w-7xl mx-auto text-center">
        <div class="text-2xl font-bold mb-4">
          <span class="text-blue-500"><</span>
          <span class="text-white">Anindyo Yudhistiro</span>
          <span class="text-blue-500">/></span>
        </div>
        <p class="text-gray-400 mb-4"><?php echo $t['footer_tagline']; ?></p>
        <div class="flex justify-center gap-6 text-2xl">
          <a
            href="mailto:anindyo.yudhistiro@gmail.com"
            class="hover:text-blue-500 transition"
          >
            <i class="fas fa-envelope"></i>
          </a>
          <a
            href="https://wa.me/6285678513359"
            target="_blank"
            class="hover:text-green-500 transition"
          >
            <i class="fab fa-whatsapp"></i>
          </a>
        </div>
        <p class="text-gray-600 text-sm mt-6">
          <?php echo $t['copyright']; ?>
        </p>
      </div>
    </footer>

    <script>
      // Dynamic year
      document.getElementById('currentYear').textContent =
        new Date().getFullYear()

      // Smooth scroll
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
          e.preventDefault()
          const target = document.querySelector(this.getAttribute('href'))
          if (target) {
            target.scrollIntoView({
              behavior: 'smooth',
              block: 'start'
            })
          }
        })
      })

      // Active nav highlight
      window.addEventListener('scroll', () => {
        const sections = document.querySelectorAll('section[id]')
        const scrollY = window.pageYOffset

        sections.forEach(section => {
          const sectionHeight = section.offsetHeight
          const sectionTop = section.offsetTop - 100
          const sectionId = section.getAttribute('id')

          if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
            document
              .querySelector(`nav a[href*=${sectionId}]`)
              ?.classList.add('text-blue-500')
          } else {
            document
              .querySelector(`nav a[href*=${sectionId}]`)
              ?.classList.remove('text-blue-500')
          }
        })
      })
    </script>
  </body>
</html>