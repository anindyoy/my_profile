<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

// Language configuration
$lang = isset($_GET['lang']) ? $_GET['lang'] : (isset($_SESSION['lang']) ? $_SESSION['lang'] : 'id');
$_SESSION['lang'] = $lang;

// Translation arrays
$translations = [
  'id' => [
    // Meta tags
    'site_title' => 'Anindyo Yudhistiro - Web Developer',
    'site_description' => 'Anindyo Yudhistiro - Full-Stack Web Developer berpengalaman yang berspesialisasi dalam membangun aplikasi web modern dan skalabel menggunakan PHP, Laravel, dan teknologi terkini.',
    'og_description' => 'Full-Stack Web Developer berpengalaman yang berspesialisasi dalam membangun aplikasi web yang skalabel, modern, dan ramah pengguna menggunakan PHP dan teknologi terkini.',
    'twitter_description' => 'Full-Stack Web Developer berpengalaman yang berspesialisasi dalam membangun aplikasi web yang skalabel, modern, dan ramah pengguna.',

    // Hero Section
    'hero_greeting' => 'Hi, nama saya',
    'hero_name_1' => 'Anindyo',
    'hero_name_2' => 'Yudhistiro',
    'hero_description' => 'Saya adalah Full-Stack Web Developer berpengalaman yang berspesialisasi dalam membangun aplikasi web yang skalabel, modern, dan ramah pengguna menggunakan PHP dan teknologi terkini.',
    'btn_contact' => 'Hubungi Saya',
    'btn_skills' => 'Lihat Keahlian',

    // About Section
    'about_title' => 'Tentang Saya',
    'about_subtitle' => 'Berkomitmen menciptakan solusi digital',
    'experience_title' => 'Pengalaman',
    'experience_desc' => 'Berpengalaman dalam mengembangkan berbagai aplikasi web mulai dari sistem informasi hingga platform e-commerce yang kompleks.',
    'clean_code_title' => 'Kode Bersih',
    'clean_code_desc' => 'Menulis kode yang bersih, mudah dirawat, dan terdokumentasi dengan baik mengikuti best practices dan design patterns.',
    'performance_title' => 'Performa',
    'performance_desc' => 'Berfokus pada optimasi performa aplikasi untuk memberikan pengalaman pengguna yang cepat dan responsif.',

    // Tech Stack Section
    'tech_title' => 'Tech Stack',
    'tech_subtitle' => 'Teknologi yang saya gunakan',
    'backend_title' => 'Backend Development',
    'frontend_title' => 'Frontend Development',
    'tools_title' => 'Tools & Lainnya',

    // Contact Section
    'contact_title' => 'Mari Bekerja Sama',
    'contact_subtitle' => 'Ada proyek dalam pikiran? Mari kita wujudkan!',
    'email_title' => 'Email',
    'email_desc' => 'anindyo.yudhistiro@gmail.com',
    'email_link' => 'Kirim Email',
    'whatsapp_title' => 'WhatsApp',
    'whatsapp_desc' => '0856-7851-3359',
    'whatsapp_link' => 'Chat Sekarang',
    'quote' => 'Saya siap membantu mewujudkan ide-ide Anda menjadi aplikasi web yang powerful. Mari diskusikan proyek Anda dan bagaimana saya bisa membantu Anda mencapai tujuan.',
    'product_link' => 'Lihat Karya Saya',

    // Footer
    'footer_tagline' => 'Full-Stack Web Developer | PHP Expert',
    'copyright' => '© <span id="currentYear"></span> Anindyo Yudhistiro. Dibuat dengan passion & kode.',
  ],

  'en' => [
    // Meta tags
    'site_title' => 'Anindyo Yudhistiro - Web Developer',
    'site_description' => 'Anindyo Yudhistiro - Experienced Full-Stack Web Developer specializing in building scalable, modern, and user-friendly web applications using PHP, Laravel, and cutting-edge technologies.',
    'og_description' => 'Experienced Full-Stack Web Developer specializing in building scalable, modern, and user-friendly web applications using PHP and cutting-edge technologies.',
    'twitter_description' => 'Experienced Full-Stack Web Developer specializing in building scalable, modern, and user-friendly web applications.',

    // Hero Section
    'hero_greeting' => 'Hi, my name is',
    'hero_name_1' => 'Anindyo',
    'hero_name_2' => 'Yudhistiro',
    'hero_description' => 'I\'m an Experienced Full-Stack Web Developer specializing in building scalable, modern, and user-friendly web applications using PHP and cutting-edge technologies.',
    'btn_contact' => 'Get in Touch',
    'btn_skills' => 'View Skills',

    // About Section
    'about_title' => 'About Me',
    'about_subtitle' => 'Passionate about creating digital solutions',
    'experience_title' => 'Experience',
    'experience_desc' => 'Experienced in developing various web applications from information systems to complex e-commerce platforms.',
    'clean_code_title' => 'Clean Code',
    'clean_code_desc' => 'Writing clean, maintainable, and well-documented code following best practices and design patterns.',
    'performance_title' => 'Performance',
    'performance_desc' => 'Focused on application performance optimization to deliver fast and responsive user experience.',

    // Tech Stack Section
    'tech_title' => 'Tech Stack',
    'tech_subtitle' => 'Technologies I work with',
    'backend_title' => 'Backend Development',
    'frontend_title' => 'Frontend Development',
    'tools_title' => 'Tools & Others',

    // Contact Section
    'contact_title' => 'Let\'s Work Together',
    'contact_subtitle' => 'Have a project in mind? Let\'s make it happen!',
    'email_title' => 'Email',
    'email_desc' => 'anindyo.yudhistiro@gmail.com',
    'email_link' => 'Send Email',
    'whatsapp_title' => 'WhatsApp',
    'whatsapp_desc' => '0856-7851-3359',
    'whatsapp_link' => 'Chat Now',
    'quote' => 'I\'m ready to help bring your ideas to life as powerful web applications. Let\'s discuss your project and how I can help you achieve your goals.',
    'product_link' => 'Checkout My Products',

    // Footer
    'footer_tagline' => 'Full-Stack Web Developer | PHP Expert',
    'copyright' => '© <span id="currentYear"></span> Anindyo Yudhistiro. Built with passion & code.',
  ]
];

$t = $translations[$lang];
?>