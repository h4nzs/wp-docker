<?php
/**
 * The template for displaying the footer.
 *
 * Contains the body & html closing tags.
 *
 * @package HelloElementor
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( hello_elementor_display_header_footer() ) {
	?>
	<!-- FLOATING WHATSAPP -->
	<div class="wa-float-wrapper">
	  <div class="wa-pulse-bg"></div>
	  <div class="wa-float-pill" id="wa-btn">
	    <i class="fab fa-whatsapp wa-icon"></i>
	    <span class="wa-text">Hubungi Kami</span>
	  </div>
	</div>

	<!-- FOOTER -->
	<footer>
	  <div class="footer-grid">
	    <div class="footer-brand">
	      <a href="<?php echo esc_url( home_url('/') ); ?>" class="logo" style="margin-bottom: 16px;"><span class="logo-dot"></span>PROFESIONAL <span>INDONESIA</span></a>
	      <p>Complete media &amp; event production solutions. Tim kreatif profesional yang tersebar di seluruh Indonesia.</p>
	      <div class="footer-socials">
	        <a href="https://www.facebook.com/Profesional.Indonesia.OnoVoda/" target="_blank" aria-label="Facebook">
	          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
	        </a>
	        <a href="https://www.youtube.com/@Profesional-Indonesia" target="_blank" aria-label="YouTube">
	          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="5" width="20" height="14" rx="3"/><polygon points="10 9 16 12 10 15 10 9" fill="currentColor" stroke="none"/></svg>
	        </a>
	        <a href="https://www.instagram.com/profesional_indonesia_" target="_blank" aria-label="Instagram">
	          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="0.6" fill="currentColor" stroke="none"/></svg>
	        </a>
	      </div>
	    </div>
	    <div class="footer-col">
	      <h5>Layanan</h5>
	      <a href="#">Company Profile</a>
	      <a href="#">Wedding &amp; Pre-Wedding</a>
	      <a href="#">Event Production</a>
	      <a href="#">Video Klip</a>
	    </div>
	    <div class="footer-col">
	      <h5>Personel</h5>
	      <a href="#">Fotografer</a>
	      <a href="#">Videografer</a>
	      <a href="#">Pilot Drone</a>
	      <a href="#">Editor &amp; VFX</a>
	    </div>
	    <div class="footer-col">
	      <h5>Kontak</h5>
	      <a href="#">PT Ono Voda Pro</a>
	      <a href="#">WA 0857 7100 2233</a>
	      <a href="#">Artikel</a>
	      <a href="#">Tentang Kami</a>
	    </div>
	  </div>
	  <div class="footer-bottom">
	    <span>&copy; 2026 Profesional Indonesia. All rights reserved.</span>
	    <span>Made in Indonesia</span>
	  </div>
	</footer>

	<script>
	  // WA Button Redirect — dynamic from CTA settings
	  var waBtn = document.getElementById('wa-btn');
	  if (waBtn) {
	    waBtn.addEventListener('click', function() {
	      window.open('<?php echo esc_js(get_wa_url()); ?>', '_blank');
	    });
	  }
	</script>
	<?php
}
?>

<?php wp_footer(); ?>

</body>
</html>
