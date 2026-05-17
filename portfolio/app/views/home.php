<?php require VIEW_PATH . '/layouts/header.php'; ?>

<!-- ════════════════════════════════════════════
     HERO SECTION
════════════════════════════════════════════ -->
<section class="relative min-h-screen flex items-center pt-20 overflow-hidden">

  <!-- Background Mesh -->
  <div class="absolute inset-0 bg-hero-mesh pointer-events-none"></div>
  <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-accent/10 rounded-full blur-3xl pointer-events-none animate-pulse-slow"></div>
  <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-purple/10 rounded-full blur-3xl pointer-events-none animate-pulse-slow" style="animation-delay:1.5s"></div>

  <div class="max-w-7xl mx-auto px-6 lg:px-12 w-full grid lg:grid-cols-2 gap-16 items-center py-24">

    <!-- Left: Text -->
    <div class="reveal-up">

      <div class="hero-heading-wrap mb-6">
        <!-- Badge -->
        <div class="hero-availability inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-accent/10 border border-accent/20 text-accent text-xs font-mono font-medium">
          <span class="w-1.5 h-1.5 rounded-full bg-accent animate-ping-slow"></span>
          <span data-locale-key="availability">Available for freelance work</span>
        </div>

        <div class="hero-profile-photo" aria-hidden="true">
          <span class="hero-profile-placeholder">KH</span>
          <img
            src="<?= APP_URL ?>/assets/images/profile-khaliz.jpg"
            alt=""
            onload="this.closest('.hero-profile-photo').classList.add('has-image')"
            onerror="this.remove()"
          >
        </div>

        <h1 class="hero-name font-display">
          <span data-locale-key="heroGreeting">Hi, I'm</span>
          <span class="gradient-text">Khaliz</span>
          <span class="text-gray-400">Hakam</span>
        </h1>
      </div>

      <div class="flex items-center gap-3 mb-6">
        <span class="text-lg text-gray-300 font-mono" data-locale-key="roleTitle">Web Developer</span>
        <span class="h-px flex-1 max-w-16 bg-gradient-to-r from-accent to-transparent"></span>
      </div>

      <p class="text-gray-400 text-lg leading-relaxed max-w-lg mb-10" data-locale-key="heroIntro">
        I build modern, high-performance web applications — from pixel-perfect frontends to solid PHP backends. Clean code. Real results.
      </p>

      <div class="flex flex-wrap gap-4">
        <a href="#projects" class="btn-primary group inline-flex items-center gap-2 px-7 py-3.5 rounded-full bg-gradient-to-r from-accent to-purple font-semibold text-white btn-glow hover:opacity-90 transition-all">
          <span data-locale-key="viewProjects">View Projects</span>
          <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </a>
        <a href="<?= APP_URL ?>/contact" class="btn-outline inline-flex items-center gap-2 px-7 py-3.5 rounded-full border border-white/20 font-semibold text-white hover:border-accent/50 hover:bg-accent/5 transition-all">
          <span data-locale-key="contactMe">Contact Me</span>
        </a>
      </div>

      <!-- Stats Row -->
      <div class="mt-14 flex gap-10">
        <?php foreach ([['3+', 'Years Study'], ['3+', 'Projects Done'], ['10+', 'Technologies']] as [$num, $label]): ?>
        <div>
          <div class="text-3xl font-display font-extrabold gradient-text"><?= $num ?></div>
          <div class="text-xs text-gray-500 mt-1" data-locale-key="stat<?= preg_replace('/\s+/', '', $label) ?>"><?= $label ?></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Right: Illustration / Code Window -->
    <div class="reveal-right relative flex items-center justify-center">

      <!-- Floating decoration rings -->
      <div class="absolute w-80 h-80 rounded-full border border-accent/10 animate-spin-slow"></div>
      <div class="absolute w-64 h-64 rounded-full border border-purple/10 animate-spin-slow" style="animation-direction:reverse; animation-duration:20s"></div>

      <!-- Glassmorphism code card -->
      <div class="glass-card relative z-10 w-full max-w-md p-6 rounded-2xl shadow-2xl">
        <!-- Terminal header -->
        <div class="flex items-center gap-2 mb-5 pb-4 border-b border-white/10">
          <span class="w-3 h-3 rounded-full bg-red-500/80"></span>
          <span class="w-3 h-3 rounded-full bg-yellow-500/80"></span>
          <span class="w-3 h-3 rounded-full bg-green-500/80"></span>
          <span class="ml-4 text-xs font-mono text-gray-500">Gynn.php</span>
        </div>
        <!-- Fake code -->
        <pre class="font-mono text-sm leading-7 overflow-x-auto"><code><span class="text-purple">class</span> <span class="text-accent">Developer</span> {
  <span class="text-gray-500">// Muhammad Khaliz Hakam</span>
  <span class="text-purple">public</span> <span class="text-accent">$name</span> = <span class="text-green-400">"Khaliz"</span>;
  <span class="text-purple">public</span> <span class="text-accent">$role</span> = <span class="text-green-400">"Web Developer"</span>;

  <span class="text-purple">public function</span> <span class="text-yellow-400">skills</span>(): <span class="text-accent">array</span>
  {
    <span class="text-purple">return</span> [
      <span class="text-green-400">"PHP"</span>, <span class="text-green-400">"MySQL"</span>,
      <span class="text-green-400">"HTML"</span>, <span class="text-green-400">"CSS"</span>,
      <span class="text-green-400">"JavaScript"</span>,
    ];
  }
}</code></pre>

        <!-- Cursor blink -->
        <span class="inline-block w-2 h-5 bg-accent animate-blink ml-1 rounded-sm"></span>
      </div>

      <!-- Floating tags -->
      <div class="float-tag absolute -top-4 -right-4 px-4 py-2 rounded-xl glass-card text-xs font-mono text-accent border border-accent/20 animate-float">
        &lt;/&gt; Clean Code
      </div>
      <div class="float-tag absolute -bottom-4 -left-4 px-4 py-2 rounded-xl glass-card text-xs font-mono text-purple border border-purple/20 animate-float" style="animation-delay:1s">
        ⚡ Fast & Responsive
      </div>
    </div>

  </div>

  <!-- Scroll Indicator -->
  <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-gray-600 text-xs font-mono">
    <span data-locale-key="scrollLabel">Scroll</span>
    <div class="w-px h-10 bg-gradient-to-b from-gray-600 to-transparent animate-bounce-gentle"></div>
  </div>
</section>


<!-- ════════════════════════════════════════════
     ABOUT SECTION
════════════════════════════════════════════ -->
<section id="about" class="py-28 relative">
  <div class="absolute right-0 top-0 w-96 h-96 bg-purple/5 rounded-full blur-3xl pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-6 lg:px-12">
    <!-- Section Header -->
    <div class="reveal-up mb-16 flex items-center gap-4">
      <span class="font-mono text-accent text-sm">01.</span>
      <h2 class="font-display text-3xl lg:text-4xl font-extrabold tracking-tight" data-locale-key="aboutTitle">About Me</h2>
      <div class="h-px flex-1 bg-gradient-to-r from-white/10 to-transparent hidden md:block"></div>
    </div>

    <div class="grid lg:grid-cols-5 gap-10 items-start">

      <!-- Bio Card -->
      <div class="lg:col-span-3 reveal-up">
        <div class="glass-card p-8 rounded-2xl space-y-4 text-gray-300 leading-relaxed">
          <p data-locale-html="aboutBioOne">
            Saya adalah <span class="text-white font-semibold">Muhammad Khaliz Hakam</span>, seorang web developer muda yang passionate dalam membangun aplikasi web modern. Saya menempuh pendidikan di <span class="text-accent">Universitas Indraprasta PGRI</span> jurusan Teknik Informatika, sebelumnya bersekolah di SMK Karya Teladan jurusan Akuntansi.
          </p>
          <p data-locale-key="aboutBioTwo">
            Dengan dasar yang kuat di bidang akuntansi dan pengembangan web, saya membawa perspektif unik — memahami logika bisnis sekaligus membangun solusi teknologi yang efisien dan skalabel.
          </p>
          <p data-locale-key="aboutBioThree">
            Saya aktif di komunitas Karang Taruna dan IRMI, yang melatih kemampuan kepemimpinan, kerja tim, dan manajemen acara saya di dunia nyata.
          </p>

          <!-- Info Grid -->
          <div class="grid grid-cols-2 gap-4 pt-4 border-t border-white/10 text-sm">
            <?php
            $info = [
              ['📍 Location',  'Jakarta Selatan, DKI Jakarta'],
              ['🎓 Degree',    'Teknik Informatika'],
              ['🏫 University','Unindra PGRI'],
              ['📧 Email',     'khalizhakam85@gmail.com'],
            ];
            foreach ($info as [$key, $val]):
            ?>
            <div>
              <div class="text-gray-500 text-xs mb-1"><?= $key ?></div>
              <div class="text-white font-medium text-xs"><?= $val ?></div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <!-- Education Timeline -->
      <div class="lg:col-span-2 reveal-right space-y-4">
        <h3 class="text-sm font-mono text-gray-500 uppercase tracking-widest mb-6" data-locale-key="educationTitle">Education</h3>

        <?php
        $edu = [
          ['Universitas Indraprasta PGRI', 'Teknik Informatika', 'Present', '#3B82F6'],
          ['SMK Karya Teladan',             'Accountancy',         '2020 – 2023', '#8B5CF6'],
        ];
        foreach ($edu as [$school, $major, $year, $color]):
        ?>
        <div class="glass-card p-6 rounded-xl border-l-2 hover:scale-[1.01] transition-transform" style="border-color:<?= $color ?>">
          <div class="text-xs font-mono mb-2" style="color:<?= $color ?>"><?= $year ?></div>
          <div class="font-semibold text-white"><?= $school ?></div>
          <div class="text-sm text-gray-400 mt-1"><?= $major ?></div>
        </div>
        <?php endforeach; ?>

        <!-- Org -->
        <h3 class="text-sm font-mono text-gray-500 uppercase tracking-widest mt-8 mb-6" data-locale-key="experienceTitle">Experience</h3>
        <div class="glass-card p-6 rounded-xl border-l-2 border-green-500 hover:scale-[1.01] transition-transform">
          <div class="text-xs font-mono text-green-400 mb-2">Feb 2022 – May 2022</div>
          <div class="font-semibold text-white">Jakarta Konsultan Indonesia</div>
          <div class="text-sm text-gray-400 mt-1">Member — Microsoft Excel & Accounting</div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════
     SKILLS SECTION
════════════════════════════════════════════ -->
<section id="skills" class="py-28 relative bg-surface/30">
  <div class="absolute left-0 top-1/2 w-72 h-72 bg-accent/5 rounded-full blur-3xl pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-6 lg:px-12">
    <div class="reveal-up mb-16 flex items-center gap-4">
      <span class="font-mono text-accent text-sm">02.</span>
      <h2 class="font-display text-3xl lg:text-4xl font-extrabold tracking-tight" data-locale-key="skillsTitle">Skills & Tools</h2>
      <div class="h-px flex-1 bg-gradient-to-r from-white/10 to-transparent hidden md:block"></div>
    </div>

    <?php
    $skillGroups = [
      'Frontend' => [
        ['HTML5',       '#E34F26', '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622L5.412 4.41l.698 8.01h9.126l-.326 3.426-2.91.804-2.955-.81-.188-2.11H6.248l.33 4.171L12 19.351l5.379-1.443.744-8.157H8.531z"/></svg>'],
        ['CSS3',        '#1572B6', '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.565-2.438L1.5 0zm17.09 4.413L5.41 4.41l.213 2.622 10.125.002-.255 2.716h-6.64l.24 2.573h6.182l-.366 3.523-2.91.804-2.956-.81-.188-2.11h-2.61l.29 3.855L12 19.288l5.373-1.53L18.59 4.414z"/></svg>'],
        ['JavaScript',  '#F7DF1E', '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517.855.51 2.004.675 3.207.405.783-.226 1.458-.691 1.811-1.411.51-.93.402-2.07.397-3.346.012-2.054 0-4.109 0-6.179l.004-.056z"/></svg>'],
        ['Tailwind CSS','#06B6D4', '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z"/></svg>'],
      ],
      'Backend & Database' => [
        ['PHP',         '#777BB4', '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M7.01 10.207h-.944l-.515 2.648h.838c.556 0 .97-.105 1.242-.314.272-.21.455-.559.55-1.049.092-.47.05-.802-.124-.995-.175-.193-.527-.29-1.047-.29zM12 5.688C5.373 5.688 0 8.514 0 12s5.373 6.313 12 6.313S24 15.486 24 12c0-3.486-5.373-6.312-12-6.312zm-3.022 7.215c-.42.394-1.044.59-1.87.59h-.972l-.232 1.932H4.36l.968-5.014h2.16c.797 0 1.376.195 1.734.584.358.388.463.959.316 1.711l-.012.063c-.16.76-.465 1.34-.908 1.734l.36.35zm5.65.802h-1.21l-.346 1.72h-1.51l.968-5.014h2.456c.78 0 1.35.195 1.71.585.36.39.45.97.27 1.72l-.02.06c-.15.73-.47 1.31-.92 1.73l-.39.38-.01.819zm5.02-1.802h-.94l-.515 2.648h.838c.556 0 .97-.105 1.242-.314.272-.21.455-.559.55-1.049.092-.47.05-.802-.124-.995-.175-.193-.527-.29-1.047-.29z"/></svg>'],
        ['MySQL',       '#4479A1', '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M16.405 5.501c-.115 0-.193.014-.274.033v.013h.014c.054.104.146.18.214.273.054.107.1.214.154.32l.014-.015c.094-.066.14-.172.14-.333-.04-.047-.046-.094-.08-.133-.04-.04-.107-.06-.18-.06zM5.77 18.695h-.927a50.854 50.854 0 00-.27-4.41l-1.344 4.41H2.15l-1.34-4.41a50.696 50.696 0 00-.274 4.41H0C.07 17.3.19 15.6.38 14.054h1.4l1.287 4.28 1.287-4.28H5.78c.11 1.5.23 3.2.3 4.64zm0 0"/></svg>'],
        ['Microsoft Excel','#217346','<svg viewBox="0 0 24 24" fill="currentColor"><path d="M23 1.5q.41 0 .7.3.3.29.3.7v19q0 .41-.3.7-.29.3-.7.3H7q-.41 0-.7-.3-.3-.29-.3-.7v-4.5H1q-.41 0-.7-.3Q0 16.41 0 16V8q0-.41.3-.7Q.59 7 1 7h5V2.5q0-.41.3-.7.29-.3.7-.3zM6 8H1v8h5zm2.5 4.5L11 17h2.25L10 12l3-4.5h-2L9 11.25 6.75 7.5H4.5L7.5 12 4.5 16.5h2.25zM14 17h5v-1.5h-3v-2h3v-1.5h-3V10h3V8.5h-5z"/></svg>'],
        ['Accounting',  '#10B981', '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>'],
      ],
      'Soft Skills' => [
        ['Customer Service','#F59E0B','<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/></svg>'],
        ['Teamwork',    '#8B5CF6', '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>'],
        ['Discipline',  '#EC4899', '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>'],
        ['Honest',      '#14B8A6', '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>'],
      ],
    ];
    ?>

    <?php foreach ($skillGroups as $groupName => $skills): ?>
    <div class="mb-12 reveal-up">
      <h3 class="text-sm font-mono text-gray-500 uppercase tracking-widest mb-6"><?= $groupName ?></h3>
      <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
        <?php foreach ($skills as [$name, $color, $icon]): ?>
        <div class="skill-card glass-card p-5 rounded-xl flex flex-col items-center gap-3 text-center group cursor-default hover:scale-105 transition-all duration-300"
             style="--skill-color: <?= $color ?>">
          <div class="w-10 h-10 rounded-lg flex items-center justify-center transition-all duration-300 skill-icon"
               style="background: <?= $color ?>22; color: <?= $color ?>">
            <?= $icon ?>
          </div>
          <span class="text-sm font-semibold text-gray-300 group-hover:text-white transition-colors"><?= $name ?></span>
          <!-- Glow on hover -->
          <div class="skill-glow absolute inset-0 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none"
               style="box-shadow: 0 0 30px <?= $color ?>22; background: radial-gradient(circle at center, <?= $color ?>08, transparent 70%)"></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endforeach; ?>

  </div>
</section>


<!-- ════════════════════════════════════════════
     PROJECTS SECTION
════════════════════════════════════════════ -->
<section id="projects" class="py-28 relative">
  <div class="absolute right-0 bottom-0 w-96 h-96 bg-purple/5 rounded-full blur-3xl pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-6 lg:px-12">
    <div class="reveal-up mb-6 flex items-center gap-4">
      <span class="font-mono text-accent text-sm">03.</span>
      <h2 class="font-display text-3xl lg:text-4xl font-extrabold tracking-tight" data-locale-key="projectsTitle">Projects</h2>
      <div class="h-px flex-1 bg-gradient-to-r from-white/10 to-transparent hidden md:block"></div>
    </div>
    <p class="text-gray-400 mb-14 reveal-up" data-locale-key="projectsIntro">A selection of what I've been building.</p>

    <?php if (!empty($featuredProjects)): ?>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php foreach ($featuredProjects as $project): ?>
      <div class="project-card group glass-card rounded-2xl overflow-hidden hover:-translate-y-1 transition-all duration-500 reveal-up">
        <!-- Image -->
        <div class="relative overflow-hidden h-44 bg-surface-2">
          <?php if ($project['image']): ?>
          <img src="<?= APP_URL ?>/assets/images/<?= htmlspecialchars($project['image']) ?>"
               alt="<?= htmlspecialchars($project['title']) ?>"
               class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
          <?php else: ?>
          <div class="w-full h-full flex items-center justify-center">
            <span class="text-4xl font-display font-extrabold gradient-text opacity-30"><?= strtoupper(substr($project['title'],0,2)) ?></span>
          </div>
          <?php endif; ?>
          <!-- Overlay -->
          <div class="absolute inset-0 bg-gradient-to-t from-bg via-bg/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-4 gap-3">
            <?php if ($project['demo_url']): ?>
            <a href="<?= htmlspecialchars($project['demo_url']) ?>" target="_blank"
               class="px-4 py-2 rounded-full bg-accent text-white text-xs font-semibold hover:bg-accent/80">Live Demo</a>
            <?php endif; ?>
            <?php if ($project['github_url']): ?>
            <a href="<?= htmlspecialchars($project['github_url']) ?>" target="_blank"
               class="px-4 py-2 rounded-full bg-white/10 text-white text-xs font-semibold hover:bg-white/20">GitHub</a>
            <?php endif; ?>
          </div>
        </div>

        <!-- Info -->
        <div class="p-5">
          <h3 class="font-display font-bold text-lg mb-2 group-hover:gradient-text transition-all"><?= htmlspecialchars($project['title']) ?></h3>
          <p class="text-sm text-gray-400 mb-4 line-clamp-2"><?= htmlspecialchars($project['description']) ?></p>
          <!-- Stack pills -->
          <div class="flex flex-wrap gap-2">
            <?php foreach (explode(',', $project['tech_stack']) as $tech): ?>
            <span class="px-2.5 py-1 rounded-full bg-accent/10 text-accent text-xs font-mono border border-accent/20"><?= trim($tech) ?></span>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <?php else: ?>
    <!-- Placeholder cards when DB has no projects yet -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php
      $placeholders = [
        ['Portfolio Website',  'A modern developer portfolio built with PHP MVC and Tailwind CSS. Clean, responsive, and lightning fast.',  'PHP, MySQL, Tailwind', '#3B82F6'],
        ['Sunday Market App',  'Event management system for Karang Taruna community markets — scheduling, donations, and member management.', 'PHP, MySQL, JS',       '#8B5CF6'],
        ['Accounting Tracker', 'Personal finance tracker with Microsoft Excel integration for small businesses and freelancers.',             'PHP, Excel, MySQL',    '#10B981'],
      ];
      foreach ($placeholders as [$title, $desc, $stack, $color]):
      ?>
      <div class="project-card group glass-card rounded-2xl overflow-hidden hover:-translate-y-1 transition-all duration-500 reveal-up">
        <div class="relative h-44 flex items-center justify-center" style="background: <?= $color ?>11">
          <span class="text-5xl font-display font-extrabold opacity-20" style="color:<?= $color ?>"><?= substr($title,0,2) ?></span>
          <div class="absolute inset-0 bg-gradient-to-t from-bg/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4 gap-3">
            <span class="px-4 py-2 rounded-full bg-white/10 text-white text-xs font-semibold">Coming Soon</span>
          </div>
        </div>
        <div class="p-5">
          <h3 class="font-display font-bold text-lg mb-2"><?= $title ?></h3>
          <p class="text-sm text-gray-400 mb-4"><?= $desc ?></p>
          <div class="flex flex-wrap gap-2">
            <?php foreach (explode(',', $stack) as $tech): ?>
            <span class="px-2.5 py-1 rounded-full text-xs font-mono border" style="background:<?= $color ?>18; color:<?= $color ?>; border-color:<?= $color ?>33"><?= trim($tech) ?></span>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <div class="text-center mt-12 reveal-up">
      <a href="<?= APP_URL ?>/projects" class="inline-flex items-center gap-2 px-7 py-3.5 rounded-full border border-white/20 font-semibold text-white hover:border-accent/50 hover:bg-accent/5 transition-all">
        <span data-locale-key="viewAllProjects">View All Projects</span>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
        </svg>
      </a>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════
     CTA BANNER
════════════════════════════════════════════ -->
<section class="py-20 relative overflow-hidden">
  <div class="absolute inset-0 bg-gradient-to-r from-accent/10 to-purple/10"></div>
  <div class="absolute inset-0 bg-hero-mesh pointer-events-none"></div>

  <div class="relative max-w-4xl mx-auto px-6 text-center reveal-up">
    <h2 class="font-display text-3xl lg:text-5xl font-extrabold tracking-tight mb-6">
      <span data-locale-key="ctaTitle">Let's Build Something</span> <span class="gradient-text" data-locale-key="ctaHighlight">Amazing</span>
    </h2>
    <p class="text-gray-400 text-lg mb-10" data-locale-key="ctaIntro">
      I'm open to freelance projects, internships, and full-time opportunities. Let's talk!
    </p>
    <a href="<?= APP_URL ?>/contact" class="inline-flex items-center gap-3 px-8 py-4 rounded-full bg-gradient-to-r from-accent to-purple text-lg font-bold text-white btn-glow hover:opacity-90 transition-all">
      <span data-locale-key="getInTouch">Get In Touch</span>
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
      </svg>
    </a>
  </div>
</section>

<?php require VIEW_PATH . '/layouts/footer.php'; ?>
