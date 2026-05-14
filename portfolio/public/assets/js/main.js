/* ================================================
   Portfolio — main.js
   Muhammad Khaliz Hakam
   ================================================ */

'use strict';

function runPageTransition() {
  document.body.classList.add('is-switching');
  window.setTimeout(() => document.body.classList.remove('is-switching'), 240);
}

// Theme Toggle
(function initThemeToggle() {
  const toggles = document.querySelectorAll('.theme-toggle');
  const storedTheme = localStorage.getItem('portfolio-theme');
  const prefersLight = window.matchMedia('(prefers-color-scheme: light)').matches;

  const applyTheme = (theme, animate = true) => {
    const nextTheme = theme === 'light' ? 'light' : 'dark';
    document.documentElement.setAttribute('data-theme', nextTheme);
    localStorage.setItem('portfolio-theme', nextTheme);

    toggles.forEach(toggle => {
      const isLight = nextTheme === 'light';
      toggle.setAttribute('aria-pressed', String(isLight));
      toggle.setAttribute('aria-label', isLight ? 'Switch to dark theme' : 'Switch to light theme');
    });

    if (animate) runPageTransition();
  };

  toggles.forEach(toggle => {
    toggle.addEventListener('click', () => {
      const currentTheme = document.documentElement.getAttribute('data-theme') || 'dark';
      applyTheme(currentTheme === 'light' ? 'dark' : 'light');
    });
  });

  applyTheme(storedTheme || (prefersLight ? 'light' : 'dark'), false);
})();

// Locale Switcher
(function initLocaleSwitcher() {
  const translations = {
    id: {
      navHome: 'Beranda',
      navAbout: 'Tentang',
      navSkills: 'Keahlian',
      navProjects: 'Proyek',
      navContact: 'Kontak',
      hireMe: 'Hire Me',
      availability: 'Tersedia untuk pekerjaan freelance',
      roleTitle: 'Web Developer',
      heroGreeting: 'Hai, saya',
      heroIntro: 'Saya membangun aplikasi web modern berperforma tinggi, dari frontend yang rapi sampai backend PHP yang solid. Kode bersih. Hasil nyata.',
      viewProjects: 'Lihat Proyek',
      contactMe: 'Hubungi Saya',
      statYearsStudy: 'Tahun Belajar',
      statProjectsDone: 'Proyek Selesai',
      statTechnologies: 'Teknologi',
      scrollLabel: 'Gulir',
      aboutTitle: 'Tentang Saya',
      aboutBioOne: 'Saya adalah <span class="text-white font-semibold">Muhammad Khaliz Hakam</span>, seorang web developer muda yang passionate dalam membangun aplikasi web modern. Saya menempuh pendidikan di <span class="text-accent">Universitas Indraprasta PGRI</span> jurusan Teknik Informatika, sebelumnya bersekolah di SMK Karya Teladan jurusan Akuntansi.',
      aboutBioTwo: 'Dengan dasar yang kuat di bidang akuntansi dan pengembangan web, saya membawa perspektif unik untuk memahami logika bisnis sekaligus membangun solusi teknologi yang efisien dan skalabel.',
      aboutBioThree: 'Saya aktif di komunitas Karang Taruna dan IRMI, yang melatih kemampuan kepemimpinan, kerja tim, dan manajemen acara saya di dunia nyata.',
      educationTitle: 'Pendidikan',
      experienceTitle: 'Pengalaman',
      skillsTitle: 'Keahlian & Tools',
      projectsTitle: 'Proyek',
      projectsIntro: 'Pilihan karya yang sedang saya bangun.',
      viewAllProjects: 'Lihat Semua Proyek',
      ctaTitle: 'Mari Bangun Sesuatu yang',
      ctaHighlight: 'Keren',
      ctaIntro: 'Saya terbuka untuk proyek freelance, magang, dan peluang full-time. Mari berdiskusi!',
      getInTouch: 'Hubungi Sekarang',
    },
    en: {
      navHome: 'Home',
      navAbout: 'About',
      navSkills: 'Skills',
      navProjects: 'Projects',
      navContact: 'Contact',
      hireMe: 'Hire Me',
      availability: 'Available for freelance work',
      roleTitle: 'Web Developer',
      heroGreeting: "Hi, I'm",
      heroIntro: 'I build modern, high-performance web applications - from pixel-perfect frontends to solid PHP backends. Clean code. Real results.',
      viewProjects: 'View Projects',
      contactMe: 'Contact Me',
      statYearsStudy: 'Years Study',
      statProjectsDone: 'Projects Done',
      statTechnologies: 'Technologies',
      scrollLabel: 'Scroll',
      aboutTitle: 'About Me',
      aboutBioOne: 'I am <span class="text-white font-semibold">Muhammad Khaliz Hakam</span>, a young web developer passionate about building modern web applications. I study Informatics Engineering at <span class="text-accent">Universitas Indraprasta PGRI</span>, after graduating from SMK Karya Teladan in Accounting.',
      aboutBioTwo: 'With a strong foundation in accounting and web development, I bring a practical perspective to business logic while building efficient and scalable technology solutions.',
      aboutBioThree: 'I am active in Karang Taruna and IRMI communities, where I continue to grow my leadership, teamwork, and real-world event management skills.',
      educationTitle: 'Education',
      experienceTitle: 'Experience',
      skillsTitle: 'Skills & Tools',
      projectsTitle: 'Projects',
      projectsIntro: "A selection of what I've been building.",
      viewAllProjects: 'View All Projects',
      ctaTitle: "Let's Build Something",
      ctaHighlight: 'Amazing',
      ctaIntro: "I'm open to freelance projects, internships, and full-time opportunities. Let's talk!",
      getInTouch: 'Get In Touch',
    },
  };

  const buttons = document.querySelectorAll('[data-locale]');
  const textTargets = document.querySelectorAll('[data-locale-key]');
  const htmlTargets = document.querySelectorAll('[data-locale-html]');
  if (!buttons.length || (!textTargets.length && !htmlTargets.length)) return;

  const applyLocale = (locale, animate = true) => {
    const dictionary = translations[locale] || translations.id;

    document.documentElement.lang = locale === 'id' ? 'id' : 'en';

    textTargets.forEach(target => {
      const key = target.getAttribute('data-locale-key');
      if (dictionary[key]) target.textContent = dictionary[key];
    });

    htmlTargets.forEach(target => {
      const key = target.getAttribute('data-locale-html');
      if (dictionary[key]) target.innerHTML = dictionary[key];
    });

    buttons.forEach(button => {
      const isActive = button.getAttribute('data-locale') === locale;
      button.classList.toggle('is-active', isActive);
      button.setAttribute('aria-pressed', String(isActive));
    });

    localStorage.setItem('portfolio-locale', locale);
    if (animate) runPageTransition();
  };

  buttons.forEach(button => {
    button.addEventListener('click', () => applyLocale(button.getAttribute('data-locale')));
  });

  applyLocale(localStorage.getItem('portfolio-locale') || 'id', false);
})();

// ── Navbar Scroll Effect ─────────────────────────
(function initNavbar() {
  const navbar = document.getElementById('navbar');
  if (!navbar) return;

  const onScroll = () => {
    if (window.scrollY > 30) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  };

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll(); // run on load
})();


// ── Mobile Menu Toggle ───────────────────────────
(function initMobileMenu() {
  const toggle = document.getElementById('menu-toggle');
  const menu   = document.getElementById('mobile-menu');
  if (!toggle || !menu) return;

  toggle.addEventListener('click', () => {
    const isOpen = menu.classList.toggle('hidden') === false;
    toggle.classList.toggle('open', isOpen);
    toggle.setAttribute('aria-expanded', String(isOpen));
  });

  // Close when a link is clicked
  menu.querySelectorAll('a').forEach(a => {
    a.addEventListener('click', () => {
      menu.classList.add('hidden');
      toggle.classList.remove('open');
    });
  });
})();


// ── Intersection Observer — Reveal Animations ────
(function initReveal() {
  const selector = '.reveal-up, .reveal-right';
  const elements = document.querySelectorAll(selector);

  if (!elements.length) return;

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target); // animate once
        }
      });
    },
    { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
  );

  elements.forEach(el => observer.observe(el));
})();


// ── Smooth Scroll for Anchor Links ──────────────
(function initSmoothScroll() {
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const target = document.querySelector(this.getAttribute('href'));
      if (!target) return;
      e.preventDefault();
      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
  });
})();


// ── Active Nav Link Highlighting ─────────────────
(function initActiveNav() {
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('.nav-link');
  if (!sections.length || !navLinks.length) return;

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          navLinks.forEach(link => {
            const href = link.getAttribute('href');
            if (href && href.includes('#' + entry.target.id)) {
              link.classList.add('text-white');
              link.classList.remove('text-gray-400');
            } else {
              link.classList.remove('text-white');
              link.classList.add('text-gray-400');
            }
          });
        }
      });
    },
    { threshold: 0.4 }
  );

  sections.forEach(section => observer.observe(section));
})();


// ── Cursor Glow Effect ───────────────────────────
(function initCursorGlow() {
  // Only on desktop
  if (window.matchMedia('(hover: none)').matches) return;

  const glow = document.createElement('div');
  glow.style.cssText = `
    position: fixed;
    width: 300px;
    height: 300px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(59,130,246,0.06) 0%, transparent 70%);
    pointer-events: none;
    z-index: 0;
    transform: translate(-50%, -50%);
    transition: opacity 0.3s;
  `;
  document.body.appendChild(glow);

  let raf;
  let mx = 0, my = 0;
  let cx = 0, cy = 0;

  window.addEventListener('mousemove', (e) => {
    mx = e.clientX;
    my = e.clientY;
  });

  function update() {
    cx += (mx - cx) * 0.08;
    cy += (my - cy) * 0.08;
    glow.style.left = cx + 'px';
    glow.style.top  = cy + 'px';
    raf = requestAnimationFrame(update);
  }
  update();

  // Hide when cursor leaves window
  document.addEventListener('mouseleave', () => { glow.style.opacity = '0'; });
  document.addEventListener('mouseenter', () => { glow.style.opacity = '1'; });
})();


// ── Code Block Typewriter (Hero) ─────────────────
(function initTypewriter() {
  const el = document.querySelector('#hero-cursor');
  if (!el) return;
  // The blink animation is CSS-driven, nothing needed here
})();


// ── Skill Card Glow on Hover ─────────────────────
(function initSkillHover() {
  document.querySelectorAll('.skill-card').forEach(card => {
    card.addEventListener('mouseenter', () => {
      const color = getComputedStyle(card).getPropertyValue('--skill-color').trim();
      card.style.boxShadow = `0 0 30px ${color}33, inset 0 0 30px ${color}08`;
      card.style.borderColor = `${color}44`;
    });
    card.addEventListener('mouseleave', () => {
      card.style.boxShadow = '';
      card.style.borderColor = '';
    });
  });
})();


// ── Project Card Tilt ────────────────────────────
(function initCardTilt() {
  if (window.matchMedia('(hover: none)').matches) return;

  document.querySelectorAll('.project-card').forEach(card => {
    card.addEventListener('mousemove', (e) => {
      const rect   = card.getBoundingClientRect();
      const x      = e.clientX - rect.left;
      const y      = e.clientY - rect.top;
      const cx     = rect.width  / 2;
      const cy     = rect.height / 2;
      const rotateX = ((y - cy) / cy) * -4;
      const rotateY = ((x - cx) / cx) *  4;
      card.style.transform = `perspective(800px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-4px)`;
    });
    card.addEventListener('mouseleave', () => {
      card.style.transform = '';
    });
  });
})();
