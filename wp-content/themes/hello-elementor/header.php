<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package HelloElementor
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$viewport_content = apply_filters( 'hello_elementor_viewport_content', 'width=device-width, initial-scale=1' );
$enable_skip_link = apply_filters( 'hello_elementor_enable_skip_link', true );
$skip_link_url = apply_filters( 'hello_elementor_skip_link_url', '#content' );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="<?php echo esc_attr( $viewport_content ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php if ( $enable_skip_link ) { ?>
<a class="skip-link screen-reader-text" href="<?php echo esc_url( $skip_link_url ); ?>"><?php echo esc_html__( 'Skip to content', 'hello-elementor' ); ?></a>
<?php } ?>

<?php
if ( hello_elementor_display_header_footer() ) {
	?>
	<!-- FLOATING NAVBAR PILL -->
	<div class="navbar-container">
	  <nav class="navbar">
	    <a href="<?php echo esc_url( home_url('/') ); ?>" class="logo"><span class="logo-dot"></span>PROFESIONAL <span>INDONESIA</span></a>
	    <ul class="nav-links" id="navLinks">
	      <li><a href="<?php echo esc_url( home_url('/') ); ?>" class="<?php echo (is_front_page() || is_home()) ? 'active' : ''; ?>">Home</a></li>
	      <li><a href="<?php echo esc_url( home_url('/tentang-kami/') ); ?>" class="<?php echo is_page('tentang-kami') ? 'active' : ''; ?>">Tentang Kami</a></li>
	      <li><a href="<?php echo esc_url( home_url('/#layanan') ); ?>">Layanan</a></li>
	      <li><a href="<?php echo esc_url( home_url('/list-personel/') ); ?>" class="<?php echo (is_page('list-personel') || is_page('personel') || is_page('detail-personel')) ? 'active' : ''; ?>">Personel</a></li>
	      <li><a href="<?php echo esc_url( home_url('/#event') ); ?>">Event</a></li>
	      <li><a href="<?php echo esc_url( home_url('/portofolio-foto/') ); ?>" class="<?php echo (is_page('portofolio') || is_page('portofolio-foto') || is_page('portofolio-video')) ? 'active' : ''; ?>">Portofolio</a></li>
	      <li><a href="<?php echo esc_url( home_url('/artikel/') ); ?>" class="<?php echo (is_page('artikel') || is_singular('post')) ? 'active' : ''; ?>">Artikel</a></li>
	      <?php 
	      if (!session_id()) { @session_start(); }
	      if (isset($_SESSION['personel_id'])) : ?>
	        <li><a href="<?php echo esc_url( home_url('/dashboard-personel/') ); ?>" class="<?php echo is_page('dashboard-personel') ? 'active' : ''; ?>" style="color: var(--gold);">Dashboard</a></li>
	      <?php endif; ?>
	      <li class="mobile-cta-li"><a href="https://wa.me/6285771002233" class="nav-cta-mobile" target="_blank" rel="noopener">Konsultasi Gratis</a></li>
	    </ul>
	    <div class="nav-right-actions">
	      <a href="https://wa.me/6285771002233" class="nav-cta" target="_blank" rel="noopener">Konsultasi Gratis</a>
	      <button class="menu-toggle" id="menuToggle" aria-label="Toggle Menu">
	        <span class="bar"></span>
	        <span class="bar"></span>
	        <span class="bar"></span>
	      </button>
	    </div>
	  </nav>
	</div>

	<script>
	(function() {
	  const menuToggle = document.getElementById('menuToggle');
	  const navLinks = document.getElementById('navLinks');
	  
	  if (menuToggle && navLinks) {
	    menuToggle.addEventListener('click', function(e) {
	      e.stopPropagation();
	      menuToggle.classList.toggle('active');
	      navLinks.classList.toggle('active');
	    });
	    
	    document.addEventListener('click', function(e) {
	      if (!navLinks.contains(e.target) && !menuToggle.contains(e.target)) {
	        menuToggle.classList.remove('active');
	        navLinks.classList.remove('active');
	      }
	    });
	    
	    const links = navLinks.querySelectorAll('a');
	    links.forEach(link => {
	      link.addEventListener('click', function() {
	        menuToggle.classList.remove('active');
	        navLinks.classList.remove('active');
	      });
	    });
	  }
	})();
	</script>
	<?php
}
