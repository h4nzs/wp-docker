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
	      <p>Solusi Multimedia &amp; Event Profesional. Tim Kreatif, Berpengalaman dengan alat canggih terbaru.</p>
	      <div class="footer-socials">
			<!-- Facebook -->
			<a href="https://www.facebook.com/Profesional.Indonesia.OnoVoda/" target="_blank" aria-label="Facebook">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
			</a>
			
			<!-- YouTube -->
			<a href="https://www.youtube.com/@Profesional-Indonesia" target="_blank" aria-label="YouTube">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="5" width="20" height="14" rx="3"/><polygon points="10 9 16 12 10 15 10 9" fill="currentColor" stroke="none"/></svg>
			</a>
			
			<!-- Instagram -->
			<a href="https://www.instagram.com/profesional_indonesia_" target="_blank" aria-label="Instagram">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="0.6" fill="currentColor" stroke="none"/></svg>
			</a>
			
			<!-- TikTok (Fixed) -->
			<a href="https://www.tiktok.com/@profesional_indonesia" target="_blank" aria-label="TikTok">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5"/></svg>
			</a>
			
			<!-- Threads (Fixed) -->
			<a href="https://www.threads.com/@profesional_indonesia_" target="_blank" aria-label="Threads">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a10 10 0 1 0 10 10c0-2.4-.7-4.3-2-5.7-1.4-1.3-3.2-2-5.4-2-3 0-5.5 1.7-6.7 4.4-.6 1.3-.9 2.8-.9 4.3 0 3.7 2.3 6 6 6 2.3 0 4.1-.7 5.2-2.1"/><path d="M12 8a4 4 0 1 0 0 8 4 4 0 0 0 0-8z"/><path d="M16 8v5a3 3 0 0 1-6 0v-1"/></svg>
			</a>
			
			<!-- X / Twitter (Fixed) -->
			<a href="https://x.com/Profesional_ID_" target="_blank" aria-label="X">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4l11.733 16h4.267l-11.733 -16z"/><path d="M20 4L4 20"/></svg>
			</a>
			</div>
	    </div>
	    <div class="footer-col">
	      <h5>Layanan</h5>
	      <a href="<?php echo esc_url( home_url('/company-profile/') ); ?>">Company Profile</a>
	      <a href="<?php echo esc_url( home_url('/wedding-prawedding/') ); ?>">Wedding &amp; Pre-Wedding</a>
	      <a href="<?php echo esc_url( home_url('/event-production-event-organizer/') ); ?>">Event Production</a>
	      <a href="<?php echo esc_url( home_url('/video-klip/') ); ?>">Video Klip</a>
	    </div>
	    <div class="footer-col">
	      <h5>Personel</h5>
	      <a href="<?php echo esc_url( home_url('/list-personel/?p_posisi=F') ); ?>">Fotografer</a>
	      <a href="<?php echo esc_url( home_url('/list-personel/?p_posisi=V') ); ?>">Videografer</a>
	      <a href="<?php echo esc_url( home_url('/list-personel/?p_posisi=D') ); ?>">Pilot Drone</a>
	      <a href="<?php echo esc_url( home_url('/list-personel/?p_posisi=E') ); ?>">Editor</a>
	    </div>
	    <div class="footer-col">
	      <h5>Kontak</h5>
	      <a href="#">PT Ono Voda Pro</a>
	      <a href="https://wa.me/6285771002233">WA 0857 7100 2233</a>
	      <a href="<?php echo esc_url( home_url('/artikel/') ); ?>">Artikel</a>
	      <a href="<?php echo esc_url( home_url('/tentang-kami/') ); ?>">Tentang Kami</a>
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
