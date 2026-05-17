<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($title ?? APP_NAME) ?></title>
  <meta name="description" content="Muhammad Khaliz Hakam — Web Developer portfolio. Building modern web applications with PHP, MySQL, HTML, CSS & JavaScript." />

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            bg:        '#0B0F19',
            surface:   '#111827',
            'surface-2':'#1a2236',
            accent:    '#3B82F6',
            purple:    '#8B5CF6',
          },
          fontFamily: {
            sans:    ['"Syne"', 'sans-serif'],
            mono:    ['"JetBrains Mono"', 'monospace'],
            display: ['"Clash Display"', '"Syne"', 'sans-serif'],
          },
          backgroundImage: {
            'glow-blue':   'radial-gradient(circle at 50% 50%, rgba(59,130,246,0.15) 0%, transparent 70%)',
            'glow-purple': 'radial-gradient(circle at 50% 50%, rgba(139,92,246,0.15) 0%, transparent 70%)',
            'hero-mesh':   'radial-gradient(at 27% 37%, hsla(215,98%,61%,0.1) 0px, transparent 50%), radial-gradient(at 97% 21%, hsla(266,98%,72%,0.1) 0px, transparent 50%)',
          },
        }
      }
    }
  </script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?= APP_URL ?>/assets/css/main.css?v=<?= filemtime(ROOT_PATH . '/public/assets/css/main.css') ?>" />
</head>

<body class="bg-bg text-white antialiased font-sans overflow-x-hidden">

  <!-- ── Noise Overlay ────────────────────── -->
  <div class="noise-overlay" aria-hidden="true"></div>

  <!-- ── Navigation ────────────────────────── -->
  <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500">
    <div class="max-w-7xl mx-auto px-6 lg:px-12 flex items-center justify-between h-20">

      <!-- Logo -->
      <a href="<?= APP_URL ?>/" class="group flex items-center gap-2">
        <span class="brand-mark" aria-hidden="true">
          <span class="brand-mark-k">K</span>
          <span class="brand-mark-h">H</span>
        </span>
        <span class="font-display font-700 text-lg tracking-tight text-white group-hover:text-accent transition-colors">Khaliz<span class="text-accent">.</span></span>
      </a>

      <!-- Desktop Nav -->
      <ul class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-400">
        <li><a href="<?= APP_URL ?>/"          class="nav-link hover:text-white transition-colors" data-locale-key="navHome">Home</a></li>
        <li><a href="<?= APP_URL ?>/#about"    class="nav-link hover:text-white transition-colors" data-locale-key="navAbout">About</a></li>
        <li><a href="<?= APP_URL ?>/#skills"   class="nav-link hover:text-white transition-colors" data-locale-key="navSkills">Skills</a></li>
        <li><a href="<?= APP_URL ?>/#projects" class="nav-link hover:text-white transition-colors" data-locale-key="navProjects">Projects</a></li>
        <li><a href="<?= APP_URL ?>/contact"   class="nav-link hover:text-white transition-colors" data-locale-key="navContact">Contact</a></li>
      </ul>

      <!-- Controls + CTA -->
      <div class="hidden md:flex items-center gap-3">
        <div class="nav-controls" aria-label="Theme and language controls">
          <button type="button" id="theme-toggle" class="theme-toggle" aria-label="Toggle theme" aria-pressed="false">
            <span class="theme-icon theme-icon-sun" aria-hidden="true"></span>
            <span class="theme-icon theme-icon-moon" aria-hidden="true"></span>
          </button>
          <div class="locale-switcher" role="group" aria-label="Language switcher">
            <button type="button" class="locale-option is-active" data-locale="id" aria-label="Bahasa Indonesia" aria-pressed="true">
              <span class="locale-flag locale-flag-id" aria-hidden="true"></span>
            </button>
            <button type="button" class="locale-option" data-locale="en" aria-label="English" aria-pressed="false">
              <span class="locale-flag locale-flag-us" aria-hidden="true"></span>
            </button>
          </div>
        </div>
        <a href="<?= APP_URL ?>/contact" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-gradient-to-r from-accent to-purple text-sm font-semibold text-white hover:opacity-90 transition-all btn-glow" data-locale-key="hireMe">
          Hire Me
        </a>
      </div>

      <!-- Mobile Menu Toggle -->
      <button id="menu-toggle" class="md:hidden w-9 h-9 flex flex-col items-center justify-center gap-1.5 group" aria-label="Toggle menu">
        <span class="burger-line w-6 h-px bg-white transition-all"></span>
        <span class="burger-line w-4 h-px bg-white transition-all"></span>
        <span class="burger-line w-6 h-px bg-white transition-all"></span>
      </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-surface/95 backdrop-blur-xl border-t border-white/5 px-6 py-6 space-y-4">
      <a href="<?= APP_URL ?>/"          class="block text-gray-300 hover:text-white transition-colors" data-locale-key="navHome">Home</a>
      <a href="<?= APP_URL ?>/#about"    class="block text-gray-300 hover:text-white transition-colors" data-locale-key="navAbout">About</a>
      <a href="<?= APP_URL ?>/#skills"   class="block text-gray-300 hover:text-white transition-colors" data-locale-key="navSkills">Skills</a>
      <a href="<?= APP_URL ?>/#projects" class="block text-gray-300 hover:text-white transition-colors" data-locale-key="navProjects">Projects</a>
      <a href="<?= APP_URL ?>/contact"   class="block text-gray-300 hover:text-white transition-colors" data-locale-key="navContact">Contact</a>
      <div class="flex flex-wrap items-center gap-3 pt-2">
        <div class="nav-controls" aria-label="Theme and language controls">
          <button type="button" id="theme-toggle-mobile" class="theme-toggle" aria-label="Toggle theme" aria-pressed="false">
            <span class="theme-icon theme-icon-sun" aria-hidden="true"></span>
            <span class="theme-icon theme-icon-moon" aria-hidden="true"></span>
          </button>
          <div class="locale-switcher" role="group" aria-label="Language switcher">
            <button type="button" class="locale-option is-active" data-locale="id" aria-label="Bahasa Indonesia" aria-pressed="true">
              <span class="locale-flag locale-flag-id" aria-hidden="true"></span>
            </button>
            <button type="button" class="locale-option" data-locale="en" aria-label="English" aria-pressed="false">
              <span class="locale-flag locale-flag-us" aria-hidden="true"></span>
            </button>
          </div>
        </div>
        <a href="<?= APP_URL ?>/contact" class="inline-flex px-5 py-2.5 rounded-full bg-gradient-to-r from-accent to-purple text-sm font-semibold text-white" data-locale-key="hireMe">Hire Me</a>
      </div>
    </div>
  </nav>

  <!-- ── Main Content ───────────────────────── -->
  <main>
