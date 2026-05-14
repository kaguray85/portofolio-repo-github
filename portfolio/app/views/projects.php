<?php require VIEW_PATH . '/layouts/header.php'; ?>

<!-- ── Page Hero ─────────────────────────────── -->
<section class="pt-40 pb-16 relative overflow-hidden">
  <div class="absolute inset-0 bg-hero-mesh pointer-events-none"></div>
  <div class="max-w-7xl mx-auto px-6 lg:px-12 text-center reveal-up">
    <span class="font-mono text-accent text-sm block mb-4">Portfolio</span>
    <h1 class="font-display text-4xl lg:text-6xl font-extrabold tracking-tight mb-6">
      My <span class="gradient-text">Projects</span>
    </h1>
    <p class="text-gray-400 text-lg max-w-xl mx-auto">
      Things I've designed, built, and shipped.
    </p>
  </div>
</section>

<!-- ── Projects Grid ──────────────────────────── -->
<section class="pb-28">
  <div class="max-w-7xl mx-auto px-6 lg:px-12">

    <?php if (!empty($projects)): ?>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php foreach ($projects as $p): ?>
      <div class="project-card group glass-card rounded-2xl overflow-hidden hover:-translate-y-1 transition-all duration-500 reveal-up">
        <div class="relative overflow-hidden h-48 bg-surface-2">
          <?php if ($p['image']): ?>
          <img src="<?= APP_URL ?>/assets/images/<?= htmlspecialchars($p['image']) ?>"
               alt="<?= htmlspecialchars($p['title']) ?>"
               class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"/>
          <?php else: ?>
          <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-accent/10 to-purple/10">
            <span class="text-5xl font-display font-extrabold gradient-text opacity-40"><?= strtoupper(substr($p['title'],0,2)) ?></span>
          </div>
          <?php endif; ?>
          <div class="absolute inset-0 bg-gradient-to-t from-bg via-bg/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-5 gap-3">
            <?php if ($p['demo_url']): ?>
            <a href="<?= htmlspecialchars($p['demo_url']) ?>" target="_blank" class="px-4 py-2 rounded-full bg-accent text-white text-xs font-semibold">Live Demo</a>
            <?php endif; ?>
            <?php if ($p['github_url']): ?>
            <a href="<?= htmlspecialchars($p['github_url']) ?>" target="_blank" class="px-4 py-2 rounded-full bg-white/10 text-white text-xs font-semibold hover:bg-white/20">GitHub</a>
            <?php endif; ?>
          </div>
        </div>
        <div class="p-6">
          <h3 class="font-display font-bold text-xl mb-2"><?= htmlspecialchars($p['title']) ?></h3>
          <p class="text-sm text-gray-400 mb-4"><?= htmlspecialchars($p['description']) ?></p>
          <div class="flex flex-wrap gap-2">
            <?php foreach (explode(',', $p['tech_stack']) as $tech): ?>
            <span class="px-2.5 py-1 rounded-full bg-accent/10 text-accent text-xs font-mono border border-accent/20"><?= trim($tech) ?></span>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <?php else: ?>
    <div class="text-center py-24 reveal-up">
      <div class="text-6xl mb-6 opacity-30">🚀</div>
      <h3 class="text-2xl font-display font-bold mb-3">Projects Coming Soon</h3>
      <p class="text-gray-400 mb-8">I'm currently working on some exciting projects. Check back soon!</p>
      <a href="<?= APP_URL ?>/" class="inline-flex items-center gap-2 px-6 py-3 rounded-full border border-white/20 text-white hover:border-accent/50 transition-all">← Back Home</a>
    </div>
    <?php endif; ?>

  </div>
</section>

<?php require VIEW_PATH . '/layouts/footer.php'; ?>
