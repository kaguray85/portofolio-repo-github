<?php require VIEW_PATH . '/layouts/header.php'; ?>

<!-- ── Page Hero ─────────────────────────────── -->
<section class="pt-40 pb-12 relative overflow-hidden">
  <div class="absolute inset-0 bg-hero-mesh pointer-events-none"></div>
  <div class="max-w-7xl mx-auto px-6 lg:px-12 text-center reveal-up">
    <span class="font-mono text-accent text-sm block mb-4">Get In Touch</span>
    <h1 class="font-display text-4xl lg:text-6xl font-extrabold tracking-tight mb-6">
      Say <span class="gradient-text">Hello</span>
    </h1>
    <p class="text-gray-400 text-lg max-w-lg mx-auto">
      Have a project in mind? Let's talk. I'm always open to discussing new opportunities.
    </p>
  </div>
</section>

<!-- ── Contact Section ───────────────────────── -->
<section class="pb-28">
  <div class="max-w-5xl mx-auto px-6 lg:px-12">
    <div class="grid lg:grid-cols-5 gap-12 items-start">

      <!-- Left: Info -->
      <div class="lg:col-span-2 reveal-up space-y-6">

        <!-- Contact Cards -->
        <?php
        $contacts = [
          ['📧', 'Email', 'khalizhakam85@gmail.com', 'mailto:khalizhakam85@gmail.com'],
          ['📱', 'Phone', '+62 815 8522 4508',       'tel:+6281585224508'],
          ['📍', 'Location', 'Jakarta Selatan, DKI Jakarta', '#'],
        ];
        foreach ($contacts as [$icon, $label, $value, $href]):
        ?>
        <a href="<?= $href ?>" class="glass-card block p-5 rounded-xl hover:border-accent/30 border border-white/5 transition-all group">
          <div class="flex items-center gap-4">
            <div class="w-10 h-10 rounded-lg bg-accent/10 flex items-center justify-center text-lg group-hover:bg-accent/20 transition-colors"><?= $icon ?></div>
            <div>
              <div class="text-xs text-gray-500 font-mono mb-1"><?= $label ?></div>
              <div class="text-sm font-semibold text-white"><?= $value ?></div>
            </div>
          </div>
        </a>
        <?php endforeach; ?>

        <!-- Social Links -->
        <div class="pt-4">
          <p class="text-xs text-gray-500 font-mono mb-4 uppercase tracking-widest">Social</p>
          <div class="flex gap-4">
            <a href="https://github.com/" target="_blank" class="social-icon w-10 h-10 glass-card rounded-lg flex items-center justify-center text-gray-400 hover:text-white transition-colors">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/></svg>
            </a>
            <a href="https://linkedin.com/" target="_blank" class="social-icon w-10 h-10 glass-card rounded-lg flex items-center justify-center text-gray-400 hover:text-white transition-colors">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Right: Form -->
      <div class="lg:col-span-3 reveal-right">
        <div class="glass-card p-8 lg:p-10 rounded-2xl">
          <h2 class="font-display text-2xl font-bold mb-8">Send a Message</h2>

          <!-- Alert Container -->
          <div id="form-alert" class="hidden mb-6 p-4 rounded-xl text-sm font-medium"></div>

          <!-- Form -->
          <div id="contact-form" class="space-y-5">
            <div>
              <label class="block text-xs font-mono text-gray-400 mb-2 uppercase tracking-widest">Your Name</label>
              <input id="name" type="text" placeholder="Muhammad Khaliz"
                     class="form-input w-full bg-surface-2 border border-white/10 rounded-xl px-4 py-3.5 text-white placeholder-gray-600 focus:outline-none focus:border-accent/50 transition-colors text-sm" />
            </div>

            <div>
              <label class="block text-xs font-mono text-gray-400 mb-2 uppercase tracking-widest">Email Address</label>
              <input id="email" type="email" placeholder="hello@example.com"
                     class="form-input w-full bg-surface-2 border border-white/10 rounded-xl px-4 py-3.5 text-white placeholder-gray-600 focus:outline-none focus:border-accent/50 transition-colors text-sm" />
            </div>

            <div>
              <label class="block text-xs font-mono text-gray-400 mb-2 uppercase tracking-widest">Message</label>
              <textarea id="message" rows="5" placeholder="Tell me about your project..."
                        class="form-input w-full bg-surface-2 border border-white/10 rounded-xl px-4 py-3.5 text-white placeholder-gray-600 focus:outline-none focus:border-accent/50 transition-colors text-sm resize-none"></textarea>
              <div class="text-right text-xs text-gray-600 mt-1"><span id="char-count">0</span>/2000</div>
            </div>

            <button id="submit-btn" onclick="submitForm()"
                    class="w-full py-4 rounded-xl bg-gradient-to-r from-accent to-purple font-bold text-white btn-glow hover:opacity-90 transition-all flex items-center justify-center gap-3">
              <span id="btn-text">Send Message</span>
              <svg id="btn-icon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
              </svg>
              <svg id="btn-spinner" class="w-5 h-5 animate-spin hidden" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/>
              </svg>
            </button>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
const APP_URL = '<?= APP_URL ?>';

// Char counter
document.getElementById('message').addEventListener('input', function() {
  document.getElementById('char-count').textContent = this.value.length;
});

async function submitForm() {
  const btn      = document.getElementById('submit-btn');
  const btnText  = document.getElementById('btn-text');
  const spinner  = document.getElementById('btn-spinner');
  const icon     = document.getElementById('btn-icon');
  const alert    = document.getElementById('form-alert');

  const name    = document.getElementById('name').value.trim();
  const email   = document.getElementById('email').value.trim();
  const message = document.getElementById('message').value.trim();

  // Client-side validation
  if (name.length < 2)    return showAlert('error', 'Name must be at least 2 characters.');
  if (!isValidEmail(email)) return showAlert('error', 'Please enter a valid email address.');
  if (message.length < 10) return showAlert('error', 'Message must be at least 10 characters.');

  // Loading state
  btn.disabled = true;
  btnText.textContent = 'Sending...';
  spinner.classList.remove('hidden');
  icon.classList.add('hidden');

  try {
    const body = new URLSearchParams({ name, email, message });
    const res  = await fetch(APP_URL + '/contact/send', {
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
      body
    });

    const data = await res.json();

    if (data.success) {
      showAlert('success', '✓ Message sent! I\'ll get back to you soon.');
      document.getElementById('name').value    = '';
      document.getElementById('email').value   = '';
      document.getElementById('message').value = '';
      document.getElementById('char-count').textContent = '0';
    } else {
      const msg = data.errors ? data.errors.join(' ') : (data.message || 'Something went wrong.');
      showAlert('error', msg);
    }
  } catch (e) {
    showAlert('error', 'Network error. Please try again.');
  } finally {
    btn.disabled = false;
    btnText.textContent = 'Send Message';
    spinner.classList.add('hidden');
    icon.classList.remove('hidden');
  }
}

function showAlert(type, msg) {
  const el = document.getElementById('form-alert');
  el.className = 'mb-6 p-4 rounded-xl text-sm font-medium ' +
    (type === 'success'
      ? 'bg-green-500/10 border border-green-500/20 text-green-400'
      : 'bg-red-500/10 border border-red-500/20 text-red-400');
  el.textContent = msg;
  el.classList.remove('hidden');
  el.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
}

function isValidEmail(e) {
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(e);
}
</script>

<?php require VIEW_PATH . '/layouts/footer.php'; ?>
