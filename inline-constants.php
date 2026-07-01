<?php
// COMPANY_PROFILE_CSS
if (!defined('COMPANY_PROFILE_CSS')) {
    define('COMPANY_PROFILE_CSS', <<<'INLINE_ASSET'
/* ===== COMPANY PROFILE PAGE ===== */

/* Glow Blobs (reuse same keys) */
.cp-blob {
  position: fixed;
  border-radius: 50%;
  filter: blur(130px);
  opacity: 0.12;
  pointer-events: none;
  z-index: 0;
  animation: cpMorph 12s ease-in-out infinite alternate;
}
.cp-blob--l {
  width: 450px; height: 450px;
  background: var(--orange);
  top: 3%; left: -160px;
}
.cp-blob--r {
  width: 500px; height: 500px;
  background: var(--gold);
  bottom: 8%; right: -180px;
  animation-delay: 4s;
}
@keyframes cpMorph {
  0%   { border-radius: 50% 50% 60% 40% / 50% 60% 40% 50%; transform: translate(0,0) scale(1); }
  50%  { border-radius: 40% 60% 45% 55% / 55% 40% 60% 45%; transform: translate(25px,-25px) scale(1.06); }
  100% { border-radius: 55% 45% 35% 65% / 40% 55% 45% 60%; transform: translate(-15px,15px) scale(0.94); }
}

/* Scroll Reveal */
.cp-reveal {
  opacity: 0;
  transform: translateY(40px);
  transition: opacity .6s cubic-bezier(.25,.46,.45,.94), transform .6s cubic-bezier(.25,.46,.45,.94);
}
.cp-reveal.show {
  opacity: 1;
  transform: translateY(0);
}
.cp-reveal-zoom {
  opacity: 0;
  transform: scale(.92);
  transition: opacity .5s ease, transform .5s ease;
}
.cp-reveal-zoom.show {
  opacity: 1;
  transform: scale(1);
}

/* Section common */
.cp-section {
  position: relative;
  z-index: 1;
  max-width: 1200px;
  margin: 0 auto;
  padding: 90px 40px;
}
.cp-hero {
  padding-top: 140px;
  padding-bottom: 50px;
}
.cp-hero__inner {
  text-align: center;
  max-width: 780px;
  margin: 0 auto;
}
.cp-hero__tag {
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 11px;
  letter-spacing: 3px;
  text-transform: uppercase;
  color: var(--orange);
  display: inline-block;
  margin-bottom: 14px;
}
.cp-hero__title {
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 42px;
  color: #fff;
  line-height: 1.15;
  margin-bottom: 18px;
}
.cp-hero__title span {
  background: var(--grad-primary);
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
}
.cp-hero__desc {
  font-size: 15px;
  color: var(--text-dim);
  line-height: 1.85;
  max-width: 600px;
  margin: 0 auto;
}

/* Divider */
.cp-divider {
  max-width: 80px;
  margin: 0 auto 60px;
  height: 2px;
  background: var(--grad-primary);
  border-radius: 4px;
  opacity: .5;
}

/* Video Showcase */
.cp-video-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
  margin-bottom: 60px;
}

.cp-video-card {
  background: var(--card-bg);
  border: 1px solid var(--border);
  border-radius: 18px;
  overflow: hidden;
  transition: all .35s ease;
  cursor: pointer;
}
.cp-video-card:hover {
  transform: translateY(-5px);
  border-color: rgba(255,210,117,0.15);
  box-shadow: 0 16px 40px rgba(0,0,0,.3);
}

.cp-video-card__thumb {
  position: relative;
  aspect-ratio: 16/9;
  overflow: hidden;
  background: #0d0b12;
}
.cp-video-card__thumb img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform .5s ease;
}
.cp-video-card:hover .cp-video-card__thumb img {
  transform: scale(1.06);
}

.cp-video-card__play {
  position: absolute;
  inset: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(0,0,0,0.2);
  transition: background .3s ease;
}
.cp-video-card:hover .cp-video-card__play {
  background: rgba(0,0,0,0.05);
}

.cp-video-card__play-icon {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  background: rgba(212,175,55,0.85);
  color: #000;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 18px;
  transition: all .3s ease;
  box-shadow: 0 4px 18px rgba(212,175,55,0.25);
}
.cp-video-card:hover .cp-video-card__play-icon {
  transform: scale(1.1);
  background: var(--accent);
}
.cp-video-card__play-icon svg {
  width: 20px;
  height: 20px;
  fill: #000;
  margin-left: 2px;
}

.cp-video-card__body {
  padding: 14px 16px;
  border-top: 1px solid var(--border);
}
.cp-video-card__title {
  font-family: var(--font-heading);
  font-weight: 600;
  font-size: 13px;
  color: var(--gold);
  margin-bottom: 4px;
}
.cp-video-card__author {
  font-size: 11px;
  color: var(--text-dim);
}
.cp-video-card__author a {
  color: var(--accent);
}
.cp-video-card__author a:hover {
  color: var(--gold);
}

/* Content */
.cp-content {
  max-width: 900px;
  margin: 0 auto;
}
.cp-content h2 {
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 26px;
  color: #fff;
  margin-bottom: 18px;
  line-height: 1.3;
}
.cp-content h2 .hl {
  background: var(--grad-primary);
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
}
.cp-content h3 {
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 18px;
  color: var(--gold);
  margin-bottom: 12px;
  margin-top: 32px;
}
.cp-content p {
  font-size: 15px;
  color: var(--text-dim);
  line-height: 1.85;
  margin-bottom: 16px;
}
.cp-content ul,
.cp-content ol {
  padding-left: 24px;
  margin-bottom: 20px;
}
.cp-content li {
  font-size: 15px;
  color: var(--text-dim);
  line-height: 1.85;
  margin-bottom: 8px;
}
.cp-content li strong {
  color: var(--text-main);
}
.cp-content hr {
  margin: 36px 0;
  border: none;
  height: 1px;
  background: var(--border);
}

/* Service List */
.cp-service-list {
  display: grid;
  gap: 14px;
  margin-bottom: 20px;
}
.cp-service-item {
  background: var(--card-bg);
  border: 1px solid var(--border);
  border-left: 3px solid var(--accent);
  border-radius: 12px;
  padding: 18px 22px;
  transition: all .25s ease;
}
.cp-service-item:hover {
  background: rgba(212,175,55,0.03);
  border-color: rgba(255,210,117,0.1);
}
.cp-service-item strong {
  display: block;
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 13px;
  color: var(--gold);
  margin-bottom: 4px;
}
.cp-service-item span {
  font-size: 13px;
  color: var(--text-dim);
  line-height: 1.6;
}

/* Steps */
.cp-steps {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
  margin: 20px 0 32px;
}
.cp-step {
  background: var(--card-bg);
  border: 1px solid var(--border);
  border-radius: 16px;
  padding: 22px;
  text-align: center;
  transition: all .25s ease;
}
.cp-step:hover {
  transform: translateY(-3px);
  border-color: rgba(255,210,117,0.1);
}
.cp-step__num {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  margin: 0 auto 12px;
  background: var(--grad-primary);
  color: #000;
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 16px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.cp-step h4 {
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 13px;
  color: var(--gold);
  margin-bottom: 6px;
}
.cp-step p {
  font-size: 12px;
  color: var(--text-dim);
  line-height: 1.6;
}

/* FAQ */
.cp-faq-item {
  background: var(--card-bg);
  border: 1px solid var(--border);
  border-radius: 14px;
  margin-bottom: 12px;
  overflow: hidden;
  transition: all .25s ease;
}
.cp-faq-item__q {
  padding: 16px 20px;
  cursor: pointer;
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-family: var(--font-heading);
  font-weight: 600;
  font-size: 14px;
  color: var(--text-main);
  transition: all .25s ease;
  user-select: none;
}
.cp-faq-item__q:hover {
  color: var(--gold);
}
.cp-faq-item__q .arrow {
  font-size: 18px;
  color: var(--accent);
  transition: transform .3s ease;
}
.cp-faq-item__q.open .arrow {
  transform: rotate(180deg);
}
.cp-faq-item__a {
  max-height: 0;
  overflow: hidden;
  transition: max-height .35s ease, padding .35s ease;
  padding: 0 20px;
  font-size: 13px;
  color: var(--text-dim);
  line-height: 1.7;
}
.cp-faq-item__a.open {
  max-height: 300px;
  padding: 0 20px 16px;
}

/* CTA Box */
.cp-cta {
  text-align: center;
  padding: 50px 40px;
  margin-top: 40px;
  background: var(--card-bg);
  border: 1px solid var(--border);
  border-radius: 24px;
  position: relative;
  overflow: hidden;
}
.cp-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(circle at 70% 60%, rgba(212,175,55,.06), transparent 60%);
  pointer-events: none;
}
.cp-cta h2 {
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 24px;
  color: #fff;
  margin-bottom: 10px;
}
.cp-cta p {
  font-size: 15px;
  color: var(--text-dim);
  margin-bottom: 22px;
}
.cp-cta .cp-wa-btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 15px;
  padding: 16px 34px;
  border-radius: 50px;
  background: var(--grad-primary);
  color: #000 !important;
  box-shadow: 0 10px 30px rgba(179,134,34,0.3);
  transition: all .25s ease;
  text-decoration: none;
}
.cp-cta .cp-wa-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 14px 36px rgba(179,134,34,0.4);
}

/* Video Modal */
.cp-modal {
  display: none;
  position: fixed;
  z-index: 99999;
  inset: 0;
  padding: 30px;
}
.cp-modal__backdrop {
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.92);
  backdrop-filter: blur(6px);
}
.cp-modal__content {
  position: relative;
  max-width: 900px;
  margin: 5% auto;
  z-index: 2;
}
.cp-modal__close {
  position: absolute;
  right: -8px;
  top: -36px;
  font-size: 36px;
  color: #fff;
  cursor: pointer;
  z-index: 3;
  transition: all .25s ease;
  background: none;
  border: none;
  line-height: 1;
}
.cp-modal__close:hover {
  color: var(--accent);
  transform: rotate(90deg);
}
.cp-modal__wrap {
  position: relative;
  padding-bottom: 56.25%;
  height: 0;
  overflow: hidden;
  border-radius: 16px;
  background: #000;
  border: 1px solid var(--border);
}
.cp-modal__wrap iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: none;
}

/* Responsive */
@media (max-width: 1024px) {
  .cp-video-grid { grid-template-columns: repeat(2, 1fr); }
  .cp-steps { grid-template-columns: repeat(2, 1fr); }
  .cp-hero__title { font-size: 36px; }
  .cp-section { padding: 70px 30px; }
  .cp-cta { padding: 40px 24px; }
}

@media (max-width: 768px) {
  .cp-section { padding: 56px 22px; }
  .cp-hero { padding-top: 120px; }
  .cp-hero__title { font-size: 30px; }
  .cp-hero__desc { font-size: 14px; }
  .cp-video-grid { grid-template-columns: 1fr; }
  .cp-steps { grid-template-columns: 1fr; }
  .cp-content h2 { font-size: 22px; }
  .cp-service-item { padding: 14px 16px; }
  .cp-modal { padding: 16px; }
  .cp-modal__content { margin: 15% auto; }
  .cp-modal__close { right: 0; top: -32px; font-size: 30px; }
}

@media (max-width: 600px) {
  .cp-hero__title { font-size: 28px; }
  .cp-section { padding: 50px 18px; }
  .cp-cta { padding: 32px 18px; }
  .cp-cta h2 { font-size: 20px; }
}

INLINE_ASSET
    );
}
// VIDEO_KLIP_CSS
if (!defined('VIDEO_KLIP_CSS')) {
    define('VIDEO_KLIP_CSS', <<<'INLINE_ASSET'
/* ===== VIDEO KLIP STYLES ===== */

.page-video-klip {
  position: relative;
  z-index: 1;
  max-width: 1200px;
  margin: 0 auto;
  padding-left: 40px;
  padding-right: 40px;
}
@media (max-width: 768px) {
  .page-video-klip {
    padding-left: 20px;
    padding-right: 20px;
  }
}

/* Background glows */
.page-video-klip .fluid-glow {
  position: fixed;
  width: 500px;
  height: 500px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(179, 134, 34, 0.08) 0%, rgba(255, 210, 117, 0.02) 50%, transparent 100%);
  filter: blur(80px);
  pointer-events: none;
  z-index: 0;
  animation: pulseGlowVK 15s ease-in-out infinite alternate;
}
.page-video-klip .glow-left {
  top: -150px;
  left: -150px;
}
.page-video-klip .glow-right {
  bottom: -150px;
  right: -150px;
  animation-delay: -5s;
}
@keyframes pulseGlowVK {
  0% { transform: scale(1) translate(0, 0); }
  50% { transform: scale(1.15) translate(30px, -30px); }
  100% { transform: scale(0.9) translate(-15px, 15px); }
}

/* Hero section */
.page-video-klip .hero {
  padding-top: 100px;
  padding-bottom: 50px;
}
.page-video-klip .hero__inner {
  text-align: center;
  max-width: 800px;
  margin: 0 auto;
}
.page-video-klip .hero__tag {
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 11px;
  letter-spacing: 3px;
  text-transform: uppercase;
  color: var(--orange);
  display: inline-block;
  margin-bottom: 18px;
}
.page-video-klip .hero__title {
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 48px;
  color: #fff;
  line-height: 1.15;
  margin-bottom: 20px;
  letter-spacing: -1px;
}
.page-video-klip .hero__title span {
  background: var(--grad-primary);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
.page-video-klip .hero__desc {
  font-size: 16px;
  color: var(--text-dim);
  line-height: 1.85;
  max-width: 640px;
  margin: 0 auto;
}

.page-video-klip .divider {
  max-width: 80px;
  margin: 0 auto 60px;
  height: 2px;
  background: var(--grad-primary);
  border-radius: 4px;
  opacity: 0.5;
}

/* Video showcase */
.page-video-klip .video-showcase {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
  margin-bottom: 60px;
}
.page-video-klip .video-card {
  background: var(--card-bg);
  border: 1px solid var(--border);
  border-radius: 20px;
  overflow: hidden;
  transition: all 0.35s ease;
  cursor: pointer;
  position: relative;
  z-index: 1;
}
.page-video-klip .video-card:hover {
  transform: translateY(-6px);
  border-color: var(--gold);
  box-shadow: 0 16px 40px rgba(0,0,0,0.4), 0 0 20px rgba(255,210,117,0.1);
}
.page-video-klip .video-card__thumb {
  position: relative;
  aspect-ratio: 16/9;
  overflow: hidden;
  background: #0d0b12;
}
.page-video-klip .video-card__thumb img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.5s ease;
}
.page-video-klip .video-card:hover .video-card__thumb img {
  transform: scale(1.06);
}
.page-video-klip .video-card__play {
  position: absolute;
  inset: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(0, 0, 0, 0.35);
  transition: background 0.3s ease;
}
.page-video-klip .video-card:hover .video-card__play {
  background: rgba(0, 0, 0, 0.15);
}
.page-video-klip .video-card__play-icon {
  width: 52px;
  height: 52px;
  border-radius: 50%;
  background: var(--grad-primary);
  color: #121017;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 18px;
  transition: all 0.3s ease;
  box-shadow: 0 4px 12px rgba(179,134,34,0.3);
}
.page-video-klip .video-card:hover .video-card__play-icon {
  transform: scale(1.1);
}
.page-video-klip .video-card__play-icon svg {
  width: 22px;
  height: 22px;
  fill: #121017;
  margin-left: 2px;
}
.page-video-klip .video-card__body {
  padding: 16px 20px;
  border-top: 1px solid var(--border);
}
.page-video-klip .video-card__title {
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 15px;
  color: #fff;
  margin-bottom: 6px;
  transition: color 0.3s ease;
}
.page-video-klip .video-card:hover .video-card__title {
  color: var(--gold);
}
.page-video-klip .video-card__author {
  font-size: 12px;
  color: var(--text-dim);
}
.page-video-klip .video-card__author a {
  color: var(--accent);
  font-weight: 500;
}
.page-video-klip .video-card__author a:hover {
  color: var(--gold);
}

/* Sections */
.page-video-klip .section {
  position: relative;
  z-index: 1;
  max-width: 1200px;
  margin: 0 auto;
  padding-top: 90px;
  padding-bottom: 90px;
}

/* Content section */
.page-video-klip .content-section {
  max-width: 900px;
  margin: 0 auto;
}
.page-video-klip .content-section h2 {
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 32px;
  color: #fff;
  margin-bottom: 24px;
  line-height: 1.3;
  letter-spacing: -0.5px;
}
.page-video-klip .content-section h2 .hl {
  background: var(--grad-primary);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
.page-video-klip .content-section h3 {
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 22px;
  color: var(--gold);
  margin-bottom: 16px;
  margin-top: 48px;
  letter-spacing: -0.3px;
}
.page-video-klip .content-section p {
  font-size: 16px;
  color: var(--text-dim);
  line-height: 1.85;
  margin-bottom: 20px;
}
.page-video-klip .content-section ul, .page-video-klip .content-section ol {
  padding-left: 24px;
  margin-bottom: 24px;
}
.page-video-klip .content-section li {
  font-size: 15.5px;
  color: var(--text-dim);
  line-height: 1.85;
  margin-bottom: 10px;
}
.page-video-klip .content-section li strong {
  color: var(--text-main);
}
.page-video-klip .content-section hr {
  margin: 48px 0;
  border: none;
  height: 1px;
  background: var(--border);
}
.page-video-klip .service-list {
  display: grid;
  gap: 16px;
  margin-bottom: 24px;
}
.page-video-klip .service-item {
  background: var(--card-bg);
  border: 1px solid var(--border);
  border-left: 3px solid var(--accent);
  border-radius: 16px;
  padding: 20px 24px;
  transition: all 0.25s ease;
}
.page-video-klip .service-item:hover {
  background: rgba(212,175,55,0.03);
  border-color: rgba(255,210,117,0.15);
  transform: translateX(4px);
}
.page-video-klip .service-item strong {
  display: block;
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 15px;
  color: var(--gold);
  margin-bottom: 6px;
}
.page-video-klip .service-item span {
  font-size: 14px;
  color: var(--text-dim);
  line-height: 1.6;
}

/* Steps */
.page-video-klip .steps {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
  margin: 24px 0 40px;
}
.page-video-klip .step-card {
  background: var(--card-bg);
  border: 1px solid var(--border);
  border-radius: 20px;
  padding: 28px 24px;
  text-align: center;
  transition: all 0.25s ease;
}
.page-video-klip .step-card:hover {
  transform: translateY(-4px);
  border-color: rgba(255,210,117,0.15);
  box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}
.page-video-klip .step-card__num {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  margin: 0 auto 16px;
  background: var(--grad-primary);
  color: #121017;
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 18px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 4px 12px rgba(179,134,34,0.3);
}
.page-video-klip .step-card h4 {
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 15px;
  color: var(--gold);
  margin-bottom: 10px;
}
.page-video-klip .step-card p {
  font-size: 13px;
  color: var(--text-dim);
  line-height: 1.6;
}

/* FAQ */
.page-video-klip .faq-item {
  background: var(--card-bg);
  border: 1px solid var(--border);
  border-radius: 16px;
  margin-bottom: 16px;
  overflow: hidden;
  transition: all 0.25s ease;
}
.page-video-klip .faq-item__q {
  padding: 20px 24px;
  cursor: pointer;
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-family: var(--font-heading);
  font-weight: 600;
  font-size: 15px;
  color: var(--text-main);
  transition: all 0.25s ease;
}
.page-video-klip .faq-item__q:hover {
  color: var(--gold);
}
.page-video-klip .faq-item__q .arrow {
  font-size: 18px;
  color: var(--accent);
  transition: transform 0.3s ease;
}
.page-video-klip .faq-item__q.open .arrow {
  transform: rotate(180deg);
}
.page-video-klip .faq-item__a {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.35s ease, padding 0.35s ease;
  padding: 0 24px;
  font-size: 14px;
  color: var(--text-dim);
  line-height: 1.7;
}
.page-video-klip .faq-item__a.open {
  max-height: 300px;
  padding: 0 24px 20px;
}

/* CTA Box */
.page-video-klip .cta-box {
  text-align: center;
  padding: 60px 40px;
  margin-top: 60px;
  background: var(--card-bg);
  border: 1px solid var(--border);
  border-radius: 32px;
  position: relative;
  overflow: hidden;
}
.page-video-klip .cta-box::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(circle at 70% 60%, rgba(212, 175, 55, 0.08), transparent 60%);
  pointer-events: none;
}
.page-video-klip .cta-box h2 {
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 28px;
  color: #fff;
  margin-bottom: 12px;
}
.page-video-klip .cta-box p {
  font-size: 16px;
  color: var(--text-dim);
  margin-bottom: 28px;
}
.page-video-klip .cta-box .wa-link {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 15px;
  padding: 16px 36px;
  border-radius: 50px;
  background: var(--grad-primary);
  color: #121017;
  box-shadow: 0 10px 30px rgba(179, 134, 34, 0.3);
  transition: all 0.25s ease;
}
.page-video-klip .cta-box .wa-link:hover {
  transform: translateY(-2px);
  box-shadow: 0 14px 36px rgba(179, 134, 34, 0.4);
}

/* Video Modal */
.page-video-klip .video-modal {
  display: none;
  position: fixed;
  z-index: 99999;
  inset: 0;
  padding: 30px;
}
.page-video-klip .video-modal__backdrop {
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.92);
  backdrop-filter: blur(6px);
}
.page-video-klip .video-modal__content {
  position: relative;
  max-width: 900px;
  margin: 5% auto;
  z-index: 2;
}
.page-video-klip .video-modal__close {
  position: absolute;
  right: -8px;
  top: -36px;
  font-size: 36px;
  color: #fff;
  cursor: pointer;
  z-index: 3;
  transition: all 0.25s ease;
  background: none;
  border: none;
}
.page-video-klip .video-modal__close:hover {
  color: var(--accent);
  transform: rotate(90deg);
}
.page-video-klip .video-modal__wrap {
  position: relative;
  padding-bottom: 56.25%;
  height: 0;
  overflow: hidden;
  border-radius: 16px;
  background: #000;
  border: 1px solid var(--border);
}
.page-video-klip .video-modal__wrap iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: none;
}

/* Responsive */
@media (max-width: 1024px) {
  .page-video-klip .video-showcase {
    grid-template-columns: repeat(2, 1fr);
  }
  .page-video-klip .steps {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 768px) {
  .page-video-klip .section {
    padding-top: 56px;
    padding-bottom: 56px;
  }
  .page-video-klip .hero {
    padding-top: 60px;
  }
  .page-video-klip .hero__title {
    font-size: 32px;
  }
  .page-video-klip .hero__desc {
    font-size: 14.5px;
  }
  .page-video-klip .video-showcase {
    grid-template-columns: 1fr;
  }
  .page-video-klip .steps {
    grid-template-columns: 1fr;
  }
  .page-video-klip .content-section h2 {
    font-size: 24px;
  }
  .page-video-klip .video-modal {
    padding: 16px;
  }
  .page-video-klip .video-modal__content {
    margin: 15% auto;
  }
  .page-video-klip .video-modal__close {
    right: 0;
    top: -32px;
    font-size: 30px;
  }
}

INLINE_ASSET
    );
}
// TENTANG_KAMI_CSS
if (!defined('TENTANG_KAMI_CSS')) {
    define('TENTANG_KAMI_CSS', <<<'INLINE_ASSET'
/* ===== TENTANG KAMI PAGE ===== */

/* Glow Blobs */
.glow-blob {
  position: fixed;
  border-radius: 50%;
  filter: blur(130px);
  opacity: 0.12;
  pointer-events: none;
  z-index: 0;
  animation: morphBlob 12s ease-in-out infinite alternate;
}
.glow-blob--left {
  width: 450px; height: 450px;
  background: var(--accent);
  top: 5%; left: -150px;
}
.glow-blob--right {
  width: 500px; height: 500px;
  background: var(--gold);
  bottom: 10%; right: -180px;
  animation-delay: 3s;
}
@keyframes morphBlob {
  0%   { border-radius: 50% 50% 60% 40% / 50% 60% 40% 50%; transform: translate(0,0) scale(1); }
  50%  { border-radius: 40% 60% 50% 50% / 60% 40% 60% 40%; transform: translate(30px,-30px) scale(1.05); }
  100% { border-radius: 55% 45% 40% 60% / 45% 55% 45% 55%; transform: translate(-20px,20px) scale(0.95); }
}

/* Section common */
.tk-section {
  position: relative;
  z-index: 1;
  max-width: 1200px;
  margin: 0 auto;
  padding: 100px 40px;
}
.tk-section--sm {
  padding: 60px 40px;
}
.tk-sec-header {
  text-align: center;
  margin-bottom: 56px;
}
.tk-sec-tag {
  display: inline-block;
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 12px;
  letter-spacing: 2.5px;
  text-transform: uppercase;
  color: var(--accent);
  margin-bottom: 12px;
}
.tk-sec-header h2 {
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 40px;
  color: #fff;
  line-height: 1.2;
}
.tk-sec-header h2 span {
  background: var(--grad-primary);
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
}
.tk-sec-desc {
  font-size: 15px;
  color: var(--text-dim);
  max-width: 600px;
  margin: 16px auto 0;
  line-height: 1.7;
}

/* Hero */
.tk-hero {
  padding-top: 140px;
}
.tk-hero__grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 60px;
  align-items: center;
}
.tk-hero__tag {
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 12px;
  letter-spacing: 2.5px;
  text-transform: uppercase;
  color: var(--accent);
  display: inline-block;
  margin-bottom: 16px;
}
.tk-hero__title {
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 58px;
  color: #fff;
  line-height: 1.08;
  margin-bottom: 20px;
}
.tk-hero__title span {
  background: var(--grad-primary);
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
}
.tk-hero__desc {
  font-size: 16px;
  color: var(--text-dim);
  line-height: 1.8;
  margin-bottom: 32px;
  max-width: 520px;
}
.tk-hero__desc strong {
  color: var(--text-main);
  font-weight: 600;
}
.tk-hero__actions {
  display: flex;
  gap: 16px;
  flex-wrap: wrap;
}
.tk-hero__image {
  position: relative;
  border-radius: 30px;
  overflow: hidden;
  border: 1px solid var(--border);
  box-shadow: 0 20px 60px rgba(0,0,0,0.4);
}
.tk-hero__image img {
  width: 100%;
  height: 450px;
  object-fit: cover;
  transition: transform .6s ease;
}
.tk-hero__image:hover img {
  transform: scale(1.04);
}
.tk-hero__image::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, transparent 50%, rgba(9,8,12,0.6));
  pointer-events: none;
}

/* Buttons */
.tk-btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 14.5px;
  padding: 16px 32px;
  border-radius: 50px;
  border: none;
  cursor: pointer;
  transition: all .25s ease;
  text-decoration: none;
}
.tk-btn--primary {
  background: var(--grad-primary);
  color: #000 !important;
  box-shadow: 0 10px 25px rgba(212, 152, 42, 0.3);
}
.tk-btn--primary:hover {
  color: #000 !important;
  transform: translateY(-2px);
  box-shadow: 0 16px 35px rgba(212, 152, 42, 0.4);
}
.tk-btn--ghost {
  background: rgba(255,255,255,0.02);
  color: var(--text-main);
  border: 1px solid var(--border);
}
.tk-btn--ghost:hover {
  border-color: var(--gold);
  background: rgba(255, 179, 71, 0.04);
  transform: translateY(-2px);
}

/* Divider */
.tk-divider {
  max-width: 120px;
  margin: 0 auto;
  height: 2px;
  background: var(--grad-primary);
  border-radius: 4px;
  opacity: .5;
}

/* Services */
.tk-services-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 60px;
  align-items: center;
}
.tk-service-list {
  list-style: none;
  display: grid;
  gap: 10px;
}
.tk-service-list li {
  display: flex;
  align-items: center;
  gap: 12px;
  font-size: 15px;
  color: var(--text-main);
  padding: 12px 16px;
  background: var(--card-bg);
  border: 1px solid var(--border);
  border-radius: 16px;
  transition: all .3s ease;
  font-weight: 500;
}
.tk-service-list li:hover {
  border-color: rgba(255, 179, 71, 0.2);
  transform: translateX(6px);
}
.tk-service-list .tk-icon {
  width: 32px;
  height: 32px;
  border-radius: 50%;
  background: var(--grad-primary);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 14px;
  color: #000;
  flex-shrink: 0;
}
.tk-services-image {
  border-radius: 30px;
  overflow: hidden;
  border: 1px solid var(--border);
  box-shadow: 0 20px 60px rgba(0,0,0,0.4);
}
.tk-services-image img {
  width: 100%;
  height: 420px;
  object-fit: cover;
  transition: transform .6s ease;
}
.tk-services-image:hover img {
  transform: scale(1.04);
}
.tk-service-link {
  display: block;
  margin-top: 28px;
  text-align: center;
}

/* Team */
.tk-team-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 60px;
  align-items: center;
}
.tk-team-image {
  border-radius: 30px;
  overflow: hidden;
  border: 1px solid var(--border);
  box-shadow: 0 20px 60px rgba(0,0,0,0.4);
}
.tk-team-image img {
  width: 100%;
  height: 420px;
  object-fit: cover;
  transition: transform .6s ease;
}
.tk-team-image:hover img {
  transform: scale(1.04);
}
.tk-team-text {
  font-size: 15px;
  color: var(--text-dim);
  line-height: 1.7;
  margin-bottom: 8px;
}
.tk-check-list {
  list-style: none;
  display: grid;
  gap: 12px;
  margin: 20px 0 28px;
}
.tk-check-list li {
  display: flex;
  align-items: center;
  gap: 12px;
  font-size: 15px;
  color: var(--text-main);
  padding: 10px 16px;
  background: rgba(18,16,23,0.5);
  border: 1px solid var(--border);
  border-radius: 14px;
  font-weight: 500;
  transition: all .3s ease;
}
.tk-check-list li:hover {
  border-color: rgba(255, 179, 71, 0.2);
  background: var(--card-bg);
  transform: translateX(6px);
}
.tk-check-list .tk-check {
  width: 26px;
  height: 26px;
  border-radius: 50%;
  background: var(--grad-primary);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 12px;
  color: #000;
  flex-shrink: 0;
}

/* Why Us */
.tk-why-text {
  text-align: center;
  max-width: 700px;
  margin: 0 auto;
  font-size: 18px;
  color: var(--text-dim);
  line-height: 1.8;
}
.tk-why-text strong {
  color: var(--text-main);
}
.tk-why-cta {
  text-align: center;
  margin-top: 36px;
}

/* Responsive */
@media (max-width: 1024px) {
  .tk-hero__title { font-size: 44px; }
  .tk-hero__grid,
  .tk-services-grid,
  .tk-team-grid {
    grid-template-columns: 1fr;
    gap: 40px;
  }
  .tk-hero__image img,
  .tk-services-image img,
  .tk-team-image img {
    height: 320px;
  }
  .tk-section { padding: 80px 30px; }
  .tk-hero { padding-top: 130px; }
}

@media (max-width: 768px) {
  .tk-section { padding: 60px 24px; }
  .tk-hero { padding-top: 120px; }
  .tk-hero__title { font-size: 36px; }
  .tk-sec-header h2 { font-size: 32px; }
  .tk-hero__image img,
  .tk-services-image img,
  .tk-team-image img {
    height: 260px;
  }
  .tk-service-link { text-align: left; }
}

@media (max-width: 600px) {
  .tk-hero__title { font-size: 32px; }
  .tk-sec-header h2 { font-size: 28px; }
  .tk-hero__actions { flex-direction: column; }
  .tk-btn { width: 100%; justify-content: center; }
  .tk-section { padding: 50px 18px; }
  .tk-service-list li,
  .tk-check-list li {
    font-size: 14px;
    padding: 10px 14px;
  }
}

INLINE_ASSET
    );
}
// PORTFOLIO_CSS
if (!defined('PORTFOLIO_CSS')) {
    define('PORTFOLIO_CSS', <<<'INLINE_ASSET'
/* Base Styles */
:root {
  --bg: #09080c;
  --card-bg: #121017;
  --gold: #ffd275;
  --orange: #b38622;
  --accent: #d4af37;
  --text-main: #f3f1f6;
  --text-dim: #9b98a6;
  --border: rgba(212, 134, 34, 0.08);
  --grad-primary: linear-gradient(135deg, #b38622 0%, #ffd275 100%);
  --font-heading: 'Plus Jakarta Sans', sans-serif;
}
* { margin: 0; padding: 0; box-sizing: border-box; }
html { scroll-behavior: smooth; }
body {
  background-color: var(--bg) !important;
  color: var(--text-main) !important;
  font-family: 'Inter', sans-serif;
  overflow-x: hidden;
  position: relative;
  line-height: 1.6;
}

/* Liquid blob background glows */
.fluid-glow {
  position: absolute; border-radius: 50%;
  filter: blur(130px); z-index: 0; pointer-events: none; opacity: 0.15;
}
.glow-left { top: 10%; left: -100px; width: 450px; height: 450px; background: var(--orange); }
.glow-right { top: 50%; right: -150px; width: 500px; height: 500px; background: var(--gold); }

h1, h2, h3, h4 { font-family: var(--font-heading); font-weight: 800; }

/* Floating navbar styles inherited from main style.css */

/* WhatsApp Floating Wrapper */
.wa-float-wrapper {
  position: fixed; bottom: 30px; right: 30px; z-index: 2000;
  display: flex; align-items: center; justify-content: flex-end;
}
.wa-pulse-bg {
  position: absolute;
  width: 64px; height: 64px; border-radius: 50%;
  z-index: 1; pointer-events: none; opacity: 0.45; background-color: #25D366;
  animation: wa-glow-pulse 2s infinite ease-out, wa-pulse-color 6s infinite ease-in-out;
  right: 0;
}
.wa-float-pill {
  position: relative; z-index: 2;
  width: 64px; height: 64px; border-radius: 50px;
  background-color: #25D366;
  display: flex; align-items: center; justify-content: center;
  cursor: pointer; transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
  overflow: hidden; white-space: nowrap; padding: 0 17px; gap: 0;
  animation: wa-button-pulse 6s infinite ease-in-out;
}
.wa-float-pill::before {
  content: ""; position: absolute; top: -60%; left: -60%;
  width: 220%; height: 220%; background-color: var(--accent);
  transform: rotate(-45deg) translateY(-120%);
  z-index: 1; pointer-events: none;
  animation: wa-slide-diagonal 6s infinite ease-in-out;
}
.wa-icon {
  font-size: 30px; flex-shrink: 0; display: flex; align-items: center; justify-content: center;
  position: relative; z-index: 2; animation: wa-content-color 6s infinite ease-in-out;
}
.wa-text {
  font-family: var(--font-heading); font-size: 15px; font-weight: 700;
  max-width: 0; opacity: 0; transition: max-width 0.35s ease, opacity 0.2s ease, margin-left 0.35s ease;
  flex-shrink: 0; position: relative; z-index: 2;
  animation: wa-content-color 6s infinite ease-in-out;
}
.wa-float-pill:hover {
  animation: none; background-color: #25D366; color: #ffffff;
  transform: scale(1.05); width: 195px; padding: 0 24px 0 20px;
  box-shadow: 0 10px 35px rgba(37, 211, 102, 0.6);
}
.wa-float-pill:hover::before { animation: none; transform: rotate(-45deg) translateY(-120%); opacity: 0; }
.wa-float-pill:hover .wa-icon, .wa-float-pill:hover .wa-text { animation: none; color: #ffffff; }
.wa-float-pill:hover .wa-text { max-width: 130px; opacity: 1; margin-left: 12px; }

@keyframes wa-glow-pulse {
  0% { transform: scale(1); opacity: 0.5; box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7); }
  70% { transform: scale(1.6); opacity: 0; box-shadow: 0 0 0 15px rgba(37, 211, 102, 0); }
  100% { transform: scale(1); opacity: 0; box-shadow: 0 0 0 0 rgba(37, 211, 102, 0); }
}
@keyframes wa-button-pulse {
  0%, 15%, 85%, 100% { transform: scale(1); box-shadow: 0 8px 30px rgba(37, 211, 102, 0.45); }
  40%, 60% { transform: scale(1.08); box-shadow: 0 8px 30px rgba(212, 175, 55, 0.6); }
}
@keyframes wa-slide-diagonal {
  0%, 15% { transform: rotate(-45deg) translateY(-120%); }
  40%, 60% { transform: rotate(-45deg) translateY(0%); }
  85%, 100% { transform: rotate(-45deg) translateY(-120%); }
}
@keyframes wa-content-color {
  0%, 27.4% { color: #ffffff; }
  27.5%, 72.5% { color: #121017; }
  72.6%, 100% { color: #ffffff; }
}
@keyframes wa-pulse-color {
  0%, 27.4% { background-color: #25D366; }
  27.5%, 72.5% { background-color: var(--accent); }
  72.6%, 100% { background-color: #25D366; }
}

/* ===== FOOTER ===== */
footer {
  background: #070609; padding: 80px 40px 40px;
  border-top: 1px solid var(--border);
  position: relative; z-index: 1;
}
.footer-grid {
  display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; gap: 50px;
  max-width: 1100px; margin: 0 auto 60px;
}
.footer-brand p { color: var(--text-dim); font-size: 13.5px; line-height: 1.7; margin: 20px 0; max-width: 280px; }
.footer-socials { display: flex; gap: 12px; }
.footer-socials a {
  width: 38px; height: 38px; border-radius: 50%;
  border: 1px solid var(--border);
  display: flex; align-items: center; justify-content: center;
  color: var(--text-dim); text-decoration: none;
  transition: all 0.3s;
}
.footer-socials a:hover { border-color: var(--gold); color: var(--gold); background: rgba(255, 179, 71, 0.04); }
.footer-col h5 { color: #fff; font-size: 14.5px; margin-bottom: 24px; font-weight: 700; font-family: var(--font-heading); }
.footer-col a { display: block; color: var(--text-dim); text-decoration: none; font-size: 13.5px; margin-bottom: 12px; transition: color 0.2s; }
.footer-col a:hover { color: var(--gold); }
.footer-bottom {
  max-width: 1100px; margin: 0 auto; padding-top: 30px; border-top: 1px solid var(--border);
  display: flex; justify-content: space-between; align-items: center;
  color: var(--text-dim); font-size: 13px;
}

/* Scroll Reveal Animations */
.reveal {
  opacity: 0; transform: translateY(40px);
  transition: opacity 0.8s cubic-bezier(0.2, 0.8, 0.2, 1), transform 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
}
.reveal.active { opacity: 1; transform: translateY(0); }
.reveal-zoom {
  opacity: 0; transform: scale(0.9);
  transition: opacity 0.8s cubic-bezier(0.2, 0.8, 0.2, 1), transform 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
}
.reveal-zoom.active { opacity: 1; transform: scale(1); }

/* =========================================
   PORTOFOLIO SPECIFIC STYLES
   ========================================= */
.porto-section {
  padding: 160px 40px 100px;
  max-width: 1200px; margin: 0 auto;
  position: relative; z-index: 1;
}
.porto-header {
  text-align: center; margin-bottom: 40px;
}
.porto-header h1 {
  font-size: 48px; color: #fff; margin-bottom: 12px;
}
.porto-header p {
  color: var(--text-dim); font-size: 16px;
}

/* Toggle Menu */
.porto-toggle-container {
  display: flex; justify-content: center; margin-bottom: 40px;
}
.porto-toggle-bg {
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.1);
  padding: 6px; border-radius: 100px;
  display: inline-flex; gap: 8px;
}
.porto-toggle-btn {
  padding: 14px 32px;
  border-radius: 100px;
  font-family: var(--font-heading); font-size: 14.5px; font-weight: 700;
  color: var(--text-dim);
  text-decoration: none; cursor: pointer; transition: all 0.3s;
  border: none; background: transparent;
}
.porto-toggle-btn.active {
  background: #f3f1f6;
  color: #121017;
  box-shadow: 0 4px 15px rgba(255, 255, 255, 0.15);
}
.porto-toggle-btn:not(.active):hover {
  color: #fff;
}

/* Category Filters */
.porto-filters {
  display: flex; flex-wrap: wrap; justify-content: center; gap: 12px; margin-bottom: 50px;
}
.porto-filter-btn {
  padding: 10px 22px;
  border-radius: 100px;
  font-family: var(--font-heading); font-size: 13.5px; font-weight: 600;
  background: #1e1c24;
  color: #fff;
  border: 1px solid rgba(255, 255, 255, 0.05);
  cursor: pointer; transition: all 0.3s;
}
.porto-filter-btn:hover {
  background: #2a2733;
}
.porto-filter-btn.active {
  background: var(--grad-primary);
  color: #121017;
  border-color: transparent;
  box-shadow: 0 4px 15px rgba(255, 179, 71, 0.25);
}

/* Search and Sort */
.porto-controls-area {
  display: flex; flex-direction: column; align-items: center; margin-bottom: 50px;
}
.porto-search-wrap {
  display: flex; width: 100%; max-width: 800px;
  background: linear-gradient(145deg, #16131d, #100e14);
  border: 1px solid var(--border);
  border-radius: 12px;
  overflow: hidden;
  box-shadow: inset 2px 2px 5px rgba(255,255,255,0.02), 0 10px 30px rgba(0,0,0,0.4);
  margin-bottom: 20px;
}
.porto-search-input {
  flex: 1; padding: 18px 24px;
  background: transparent; border: none; outline: none;
  color: var(--text-main); font-size: 15px; font-family: 'Inter', sans-serif;
}
.porto-search-input::placeholder {
  color: var(--text-dim);
}
.porto-search-btn {
  padding: 0 36px;
  background: var(--grad-primary);
  border: none;
  color: #121017; font-family: var(--font-heading); font-size: 14.5px; font-weight: 800;
  cursor: pointer; transition: opacity 0.3s;
}
.porto-search-btn:hover {
  opacity: 0.9;
}

.porto-sort-wrap {
  display: flex; justify-content: flex-end; width: 100%; max-width: 800px;
}
.porto-sort-select {
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid var(--border);
  color: var(--text-main);
  padding: 10px 16px;
  border-radius: 8px;
  font-family: 'Inter', sans-serif; font-size: 13px;
  outline: none; cursor: pointer;
}
.porto-sort-select option {
  background: var(--bg);
  color: var(--text-main);
}

/* Grid Layout */
.porto-grid {
  display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; max-width: 1200px; margin: 0 auto;
}

/* Card */
.porto-card {
  background: linear-gradient(145deg, #16131d, #100e14);
  border: 1px solid var(--border);
  border-radius: 20px;
  box-shadow: inset 2px 2px 5px rgba(255,255,255,0.02), 4px 4px 15px rgba(0,0,0,0.3);
  overflow: hidden;
  display: flex; flex-direction: column;
  transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
  cursor: pointer;
}
.porto-card:hover {
  transform: translateY(-6px);
  border-color: var(--gold);
  box-shadow: 0 15px 40px rgba(0,0,0,0.5);
}
.porto-card-img {
  width: 100%; height: 220px;
  object-fit: cover;
  transition: transform 0.5s ease;
}
.porto-card:hover .porto-card-img {
  transform: scale(1.05);
}
.porto-card-img-wrap {
  overflow: hidden; position: relative;
}
.porto-card-content {
  padding: 20px;
  display: flex; flex-direction: column; flex: 1;
}
.porto-card-title {
  color: var(--gold);
  font-family: var(--font-heading);
  font-size: 16px; font-weight: 700;
  line-height: 1.4; margin-bottom: 16px;
  display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;
  flex: 1;
}
.porto-card-footer {
  display: flex; justify-content: space-between; align-items: center;
  border-top: 1px solid rgba(255,255,255,0.05);
  padding-top: 12px;
}
.porto-card-author {
  font-size: 12.5px; color: var(--text-main); display: flex; align-items: center; gap: 6px; font-weight: 500;
}
.porto-card-author i { color: var(--text-dim); font-size: 11px; }
.porto-card-date {
  font-size: 12px; color: var(--text-dim);
}

/* Load More Button Wrapper */
.porto-load-wrap {
  display: flex; justify-content: center; margin-top: 50px;
}
.porto-btn-outline {
  background: transparent;
  border: 1px solid var(--border);
  color: var(--gold);
  padding: 14px 36px;
  border-radius: 100px;
  font-family: var(--font-heading);
  font-weight: 700; font-size: 14px;
  cursor: pointer; transition: all 0.3s;
}
.porto-btn-outline:hover {
  background: var(--grad-primary);
  color: #121017;
  border-color: transparent;
  box-shadow: 0 5px 20px rgba(255, 179, 71, 0.2);
}

/* ===== RESPONSIVE ===== */
@media (max-width: 1200px) {
  .porto-grid { grid-template-columns: repeat(3, 1fr); padding: 0 20px; }
}
@media (max-width: 1024px) {
  .footer-grid { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 900px) {
  .porto-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 600px) {
  .porto-grid { grid-template-columns: 1fr; }
  .porto-toggle-btn { padding: 12px 20px; font-size: 13px; }
  .porto-search-wrap { flex-direction: column; border-radius: 12px; }
  .porto-search-btn { padding: 16px; border-radius: 0 0 12px 12px; }
  .porto-search-input { padding: 16px; border-radius: 12px 12px 0 0; }
  .footer-grid { grid-template-columns: 1fr; gap: 30px; }
  .footer-bottom { flex-direction: column; gap: 14px; text-align: center; }
  .porto-section { padding-left: 24px; padding-right: 24px; }
}

INLINE_ASSET
    );
}
// DIRECTORY_CSS
if (!defined('DIRECTORY_CSS')) {
    define('DIRECTORY_CSS', <<<'INLINE_ASSET'
/* DIRECTORY PANEL AND MAP LAYOUT */
#app-body {
  position: fixed;
  top: 64px;
  left: 0;
  right: 0;
  bottom: 0;
  display: grid;
  grid-template-columns: 1fr 432px;
  overflow: hidden;
}

#map-panel {
  position: relative;
  overflow: hidden;
}

#map {
  width: 100%;
  height: 100%;
  background: #09080c;
}

#map-panel::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 80px;
  background: linear-gradient(to bottom, rgba(9,8,12,0.4), transparent);
  pointer-events: none;
  z-index: 500;
}

#map-count-badge {
  position: absolute;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  background: rgba(9, 8, 12, 0.88);
  border: 1px solid var(--border);
  border-radius: 99px;
  padding: 6px 16px;
  font-size: 12px;
  color: var(--text-dim);
  z-index: 500;
  backdrop-filter: blur(10px);
  white-space: nowrap;
  pointer-events: none;
}

#map-count-badge span {
  color: var(--gold);
  font-weight: 700;
}

/* CUSTOM MAP PIN MARKERS */
.custom-map-pin {
  width: 34px;
  height: 34px;
  border-radius: 50% 50% 50% 0;
  transform: rotate(-45deg);
  display: flex;
  align-items: center;
  justify-content: center;
  border: 2px solid rgba(255, 210, 117, 0.35);
  background: linear-gradient(135deg, #1a1525, #0f0d15);
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.5);
}

.custom-map-pin i {
  transform: rotate(45deg);
  color: var(--gold-dim);
  font-size: 11px;
}

.custom-map-pin.pin-active {
  background: var(--grad-primary);
  border-color: var(--gold);
  box-shadow: 0 0 0 4px rgba(255, 210, 117, 0.25), 0 4px 16px rgba(179, 134, 34, 0.6);
}

.custom-map-pin.pin-active i {
  color: #121017;
}

.custom-map-pin.pin-current-page {
  background: linear-gradient(135deg, #1d1830, #16131d);
  border-color: var(--gold);
  box-shadow: 0 0 0 3px rgba(255, 210, 117, 0.18), 0 2px 12px rgba(179, 134, 34, 0.35);
}

.custom-map-pin.pin-current-page i {
  color: var(--gold);
}

.custom-map-pin.pin-dimmed {
  opacity: 0.32;
  border-color: rgba(255, 210, 117, 0.12);
}

/* LEAFLET POPUPS */
.leaflet-popup-content-wrapper {
  background: rgba(15, 13, 21, 0.97) !important;
  border: 1px solid var(--border) !important;
  border-radius: var(--radius) !important;
  box-shadow: var(--shadow-glow) !important;
  backdrop-filter: blur(20px);
  color: var(--text) !important;
  padding: 0 !important;
}

.leaflet-popup-content {
  margin: 0 !important;
  width: auto !important;
}

.leaflet-popup-tip {
  background: rgba(15, 13, 21, 0.97) !important;
}

.leaflet-popup-close-button {
  color: var(--text-dim) !important;
  font-size: 16px !important;
  top: 8px !important;
  right: 10px !important;
}

.popup-inner {
  padding: 14px 16px;
  min-width: 200px;
}

.popup-name {
  font-family: var(--font-heading);
  font-size: 14px;
  font-weight: 700;
  color: var(--gold);
  margin-bottom: 4px;
}

.popup-location {
  font-size: 11px;
  color: var(--text-dim);
  margin-bottom: 8px;
  display: flex;
  align-items: center;
  gap: 5px;
}

.popup-tags {
  display: flex;
  flex-wrap: wrap;
  gap: 4px;
  margin-bottom: 10px;
}

.popup-tags .tag-pill {
  font-size: 10px;
  padding: 2px 7px;
  border-radius: 99px;
  background: rgba(255, 210, 117, 0.1);
  border: 1px solid rgba(255, 210, 117, 0.2);
  color: var(--gold);
}

.popup-btn {
  display: block;
  width: 100%;
  padding: 7px 0;
  background: var(--grad-primary);
  border: none;
  border-radius: 8px;
  color: #121017;
  font-family: var(--font-heading);
  font-size: 12px;
  font-weight: 700;
  cursor: pointer;
  transition: var(--transition);
}

.popup-btn:hover {
  opacity: 0.9;
  transform: translateY(-1px);
}

/* ACCORDION SIDEBAR PANEL */
#accordion-panel {
  display: flex;
  flex-direction: column;
  overflow: hidden;
  border-left: 1px solid var(--border);
  background: var(--bg-2);
}

#accordion-panel-header {
  padding: 12px 14px 10px;
  border-bottom: 1px solid var(--border);
  flex-shrink: 0;
  background: rgba(9, 8, 12, 0.5);
}

.panel-header-row {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.panel-title {
  font-family: var(--font-heading);
  font-size: 12px;
  font-weight: 700;
  color: var(--text-dim);
  letter-spacing: 0.6px;
  text-transform: uppercase;
}

.panel-count {
  font-size: 12px;
  color: var(--text-muted);
}

.panel-count strong {
  color: var(--gold);
}

#accordion-list {
  flex: 1;
  overflow-y: auto;
  overflow-x: hidden;
  padding: 7px 8px;
  display: flex;
  flex-direction: column;
  gap: 4px;
  transition: opacity 0.2s ease;
}

#accordion-list.fading {
  opacity: 0;
}

/* ACCORDION CARDS */
.accordion-item {
  background: linear-gradient(145deg, #12101a, #0e0c16);
  border: 1px solid var(--border);
  border-radius: 12px;
  overflow: hidden;
  transition: border-color 0.25s ease;
  flex-shrink: 0;
}

.accordion-item:hover {
  border-color: var(--border-hover);
}

.accordion-item.is-active {
  border-color: rgba(255, 210, 117, 0.35);
  box-shadow: 0 0 20px rgba(255, 210, 117, 0.07);
}

.accordion-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 9px 11px;
  cursor: pointer;
  user-select: none;
  gap: 8px;
  min-height: 58px;
}

.accordion-header:focus-visible {
  outline: 2px solid var(--gold-dim);
  outline-offset: -2px;
}

.accordion-header-left {
  display: flex;
  align-items: center;
  gap: 9px;
  flex: 1;
  min-width: 0;
}

.accordion-avatar-wrap {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  overflow: hidden;
  flex-shrink: 0;
  border: 2px solid var(--border);
  background: linear-gradient(135deg, #1a1525, #0e0c16);
  display: flex;
  align-items: center;
  justify-content: center;
}

.accordion-avatar-wrap img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

.avatar-placeholder {
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, rgba(179,134,34,0.2), rgba(255,210,117,0.1));
}

.avatar-placeholder i {
  color: var(--gold-dim);
  font-size: 15px;
}

.accordion-identity {
  flex: 1;
  min-width: 0;
}

.accordion-name {
  font-family: var(--font-heading);
  font-size: 12px;
  font-weight: 700;
  color: var(--text);
  display: block;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  margin-bottom: 3px;
}

.pers-tags {
  display: flex;
  flex-wrap: wrap;
  gap: 3px;
}

.tag-chip {
  font-size: 9px;
  font-weight: 600;
  font-family: var(--font-heading);
  padding: 2px 5px;
  border-radius: 99px;
  letter-spacing: 0.3px;
  text-transform: uppercase;
}

.tag-chip.tag-foto {
  background: rgba(100, 160, 255, 0.12);
  border: 1px solid rgba(100, 160, 255, 0.25);
  color: #7eb5ff;
}

.tag-chip.tag-video {
  background: rgba(255, 140, 80, 0.12);
  border: 1px solid rgba(255, 140, 80, 0.25);
  color: #ffab70;
}

.tag-chip.tag-drone {
  background: rgba(100, 220, 160, 0.12);
  border: 1px solid rgba(100, 220, 160, 0.25);
  color: #6ddfa0;
}

.tag-chip.tag-editor {
  background: rgba(200, 120, 255, 0.12);
  border: 1px solid rgba(200, 120, 255, 0.25);
  color: #c878ff;
}

.tag-chip.tag-animator {
  background: rgba(255, 100, 160, 0.12);
  border: 1px solid rgba(255, 100, 160, 0.25);
  color: #ff80b0;
}

.accordion-header-right {
  display: flex;
  align-items: center;
  gap: 5px;
  flex-shrink: 0;
}

.pers-badge {
  font-size: 9px;
  font-weight: 700;
  font-family: var(--font-heading);
  padding: 2px 7px;
  border-radius: 6px;
  background: rgba(255, 210, 117, 0.1);
  border: 1px solid rgba(255, 210, 117, 0.22);
  color: var(--gold);
  white-space: nowrap;
}

.accordion-map-btn, .accordion-toggle-btn {
  width: 26px;
  height: 26px;
  border-radius: 7px;
  border: 1px solid var(--border);
  background: rgba(255, 255, 255, 0.04);
  color: var(--text-dim);
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 10px;
  transition: var(--transition);
  flex-shrink: 0;
}

.accordion-map-btn:hover {
  border-color: var(--gold-dim);
  color: var(--gold);
  background: rgba(255, 210, 117, 0.08);
}

.accordion-toggle-btn:hover {
  border-color: var(--border-hover);
  color: var(--text);
}

.accordion-toggle-btn i {
  transition: transform 0.3s ease;
}

.accordion-item.is-active .accordion-toggle-btn i {
  transform: rotate(180deg);
}

.accordion-body {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.45s cubic-bezier(0.4, 0, 0.2, 1);
}

.accordion-item.is-active .accordion-body {
  max-height: 800px;
}

.accordion-body-inner {
  padding: 0 11px 13px;
  border-top: 1px solid var(--border);
}

.accordion-content-grid {
  display: grid;
  grid-template-columns: 108px 1fr;
  gap: 12px;
  padding-top: 12px;
}

.accordion-profile-left {
  display: flex;
  flex-direction: column;
  gap: 9px;
}

.accordion-profile-photo-wrap {
  width: 100%;
  aspect-ratio: 3/4;
  border-radius: 9px;
  overflow: hidden;
  border: 1px solid var(--border);
  background: #1a1525;
  display: flex;
  align-items: center;
  justify-content: center;
}

.accordion-profile-photo-wrap img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.accordion-profile-details {
  display: flex;
  flex-direction: column;
  gap: 5px;
}

.accordion-detail-item {
  display: flex;
  align-items: flex-start;
  gap: 5px;
  font-size: 11px;
  color: var(--text-dim);
  line-height: 1.4;
}

.accordion-detail-item i {
  color: var(--gold-dim);
  font-size: 10px;
  margin-top: 2px;
  flex-shrink: 0;
}

.accordion-profile-right {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  gap: 10px;
}

.accordion-section-title {
  font-family: var(--font-heading);
  font-size: 11px;
  font-weight: 700;
  color: var(--text-dim);
  text-transform: uppercase;
  letter-spacing: 0.5px;
  margin-bottom: 5px;
}

.portfolio-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 3px;
  margin-bottom: 9px;
}

.portfolio-thumb {
  aspect-ratio: 1;
  border-radius: 5px;
  overflow: hidden;
  background: #1a1525;
}

.portfolio-thumb img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.3s ease;
  display: block;
}

.portfolio-thumb img:hover {
  transform: scale(1.06);
}

.portfolio-fallback {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 5px;
  padding: 12px 8px;
  border-radius: 9px;
  border: 1px dashed var(--border);
  background: rgba(255, 255, 255, 0.02);
  text-align: center;
  margin-bottom: 9px;
}

.portfolio-fallback i {
  color: var(--text-muted);
  font-size: 17px;
}

.portfolio-fallback p {
  font-size: 11px;
  color: var(--text-muted);
}

.accordion-actions {
  display: flex;
  gap: 5px;
}

.accordion-btn-wa, .accordion-btn-profile {
  flex: 1;
  padding: 7px 5px;
  border-radius: 7px;
  font-family: var(--font-heading);
  font-size: 10px;
  font-weight: 800;
  text-decoration: none;
  text-align: center;
  letter-spacing: 0.4px;
  transition: var(--transition);
  white-space: nowrap;
}

.accordion-btn-wa {
  background: linear-gradient(135deg, #25d366, #1da851);
  color: #fff;
  border: none;
}

.accordion-btn-wa:hover {
  opacity: 0.9;
  transform: translateY(-1px);
  box-shadow: 0 4px 12px rgba(37, 211, 102, 0.3);
}

.accordion-btn-profile {
  background: transparent;
  color: var(--gold);
  border: 1px solid rgba(255, 210, 117, 0.3);
}

.accordion-btn-profile:hover {
  background: rgba(255, 210, 117, 0.08);
  border-color: var(--gold);
  transform: translateY(-1px);
}

/* EMPTY SEARCH STATE */
#empty-state {
  display: none;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 12px;
  padding: 40px 20px;
  text-align: center;
}

#empty-state.show {
  display: flex;
}

#empty-state i {
  font-size: 34px;
  color: var(--text-muted);
}

#empty-state h3 {
  font-family: var(--font-heading);
  font-size: 15px;
  color: var(--text-dim);
}

#empty-state p {
  font-size: 12px;
  color: var(--text-muted);
}

/* PAGINATION CONTROLS */
.pagination-wrapper {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 9px;
  padding: 11px 10px 11px;
  border-top: 1px solid var(--border);
  flex-shrink: 0;
  background: rgba(9, 8, 12, 0.5);
}

.pagination-info {
  font-size: 11px;
  color: var(--text-dim);
}

.pagination-controls {
  display: flex;
  align-items: center;
  gap: 5px;
  flex-wrap: wrap;
  justify-content: center;
}

.page-btn {
  min-width: 32px;
  height: 32px;
  border-radius: 8px;
  background: linear-gradient(145deg, #16131d, #100e14);
  border: 1px solid var(--border);
  color: var(--text-dim);
  font-family: var(--font-heading);
  font-size: 12px;
  font-weight: 700;
  cursor: pointer;
  transition: all 0.25s ease;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0 7px;
}

.page-btn:hover:not(:disabled) {
  border-color: var(--gold);
  color: var(--gold);
  background: rgba(255, 210, 117, 0.06);
}

.page-btn.active {
  background: var(--grad-primary);
  color: #121017;
  border-color: transparent;
  box-shadow: 0 4px 14px rgba(255, 122, 26, 0.22);
}

.page-btn:disabled {
  opacity: 0.3;
  cursor: not-allowed;
}

.page-btn.page-prev, .page-btn.page-next {
  font-size: 10px;
}

/* FILTERS GRID ON SIDEBAR */
.filter-container-panel {
  display: flex;
  flex-direction: column;
  gap: 8px;
  margin-top: 10px;
}

.filter-dropdowns-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 8px;
}

.filter-search-wrap {
  position: relative;
  width: 100%;
}

.filter-search-wrap i {
  position: absolute;
  left: 12px;
  top: 50%;
  transform: translateY(-50%);
  font-size: 12px;
  color: var(--text-dim);
  pointer-events: none;
}

#search-input {
  width: 100%;
  height: 36px;
  padding: 0 12px 0 34px;
  background: rgba(255, 255, 255, 0.04);
  border: 1px solid var(--border);
  border-radius: 8px;
  color: var(--text);
  font-family: var(--font-body);
  font-size: 12px;
  transition: var(--transition);
  outline: none;
}

#search-input::placeholder {
  color: var(--text-muted);
}

#search-input:focus {
  border-color: var(--gold-dim);
  background: rgba(255, 210, 117, 0.04);
  box-shadow: 0 0 0 3px rgba(255, 210, 117, 0.08);
}

.filter-select {
  height: 36px;
  padding: 0 24px 0 10px;
  background: rgba(255, 255, 255, 0.04);
  border: 1px solid var(--border);
  border-radius: 8px;
  color: var(--text);
  font-family: var(--font-body);
  font-size: 12px;
  cursor: pointer;
  outline: none;
  appearance: none;
  -webkit-appearance: none;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='6' viewBox='0 0 10 6'%3E%3Cpath d='M1 1l4 4 4-4' stroke='%237a7090' stroke-width='1.5' fill='none' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right 9px center;
  width: 100%;
  transition: var(--transition);
}

.filter-select:focus {
  border-color: var(--gold-dim);
  background-color: rgba(255, 210, 117, 0.04);
}

.filter-select option {
  background: #1a1525;
  color: var(--text);
}

#btn-reset-filter {
  height: 36px;
  padding: 0 12px;
  border-radius: 8px;
  border: 1px solid rgba(255, 100, 100, 0.25);
  background: rgba(255, 100, 100, 0.06);
  color: #ff8080;
  font-size: 12px;
  font-family: var(--font-body);
  cursor: pointer;
  width: 100%;
  transition: var(--transition);
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 5px;
}

#btn-reset-filter:hover {
  border-color: rgba(255, 100, 100, 0.5);
  background: rgba(255, 100, 100, 0.12);
}

/* RESPONSIVE LAYOUT BREAKPOINTS */
@media(max-width:900px) {
  #app-body {
    grid-template-columns: 1fr;
    grid-template-rows: 38vh 1fr;
    top: 56px;
  }
  #accordion-panel {
    border-left: none;
    border-top: 1px solid var(--border);
  }
}

INLINE_ASSET
    );
}
// VIDEO_PRODUK_IKLAN_CSS
if (!defined('VIDEO_PRODUK_IKLAN_CSS')) {
    define('VIDEO_PRODUK_IKLAN_CSS', <<<'INLINE_ASSET'
/* ===== VIDEO PRODUK & BRANDING IKLAN STYLES ===== */

.page-video-produk-iklan {
  position: relative;
  z-index: 1;
  max-width: 1200px;
  margin: 0 auto;
  padding-left: 40px;
  padding-right: 40px;
}
@media (max-width: 768px) {
  .page-video-produk-iklan {
    padding-left: 20px;
    padding-right: 20px;
  }
}

/* Background glows */
.page-video-produk-iklan .fluid-glow {
  position: fixed;
  width: 500px;
  height: 500px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(179, 134, 34, 0.08) 0%, rgba(255, 210, 117, 0.02) 50%, transparent 100%);
  filter: blur(80px);
  pointer-events: none;
  z-index: 0;
  animation: pulseGlowVPI 15s ease-in-out infinite alternate;
}
.page-video-produk-iklan .glow-left {
  top: -150px;
  left: -150px;
}
.page-video-produk-iklan .glow-right {
  bottom: -150px;
  right: -150px;
  animation-delay: -5s;
}
@keyframes pulseGlowVPI {
  0% { transform: scale(1) translate(0, 0); }
  50% { transform: scale(1.15) translate(30px, -30px); }
  100% { transform: scale(0.9) translate(-15px, 15px); }
}

/* Hero section */
.page-video-produk-iklan .hero {
  padding-top: 100px;
  padding-bottom: 50px;
}
.page-video-produk-iklan .hero__inner {
  text-align: center;
  max-width: 800px;
  margin: 0 auto;
}
.page-video-produk-iklan .hero__tag {
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 11px;
  letter-spacing: 3px;
  text-transform: uppercase;
  color: var(--orange);
  display: inline-block;
  margin-bottom: 18px;
}
.page-video-produk-iklan .hero__title {
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 48px;
  color: #fff;
  line-height: 1.15;
  margin-bottom: 20px;
  letter-spacing: -1px;
}
.page-video-produk-iklan .hero__title span {
  background: var(--grad-primary);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
.page-video-produk-iklan .hero__desc {
  font-size: 16px;
  color: var(--text-dim);
  line-height: 1.85;
  max-width: 640px;
  margin: 0 auto;
}

.page-video-produk-iklan .divider {
  max-width: 80px;
  margin: 0 auto 60px;
  height: 2px;
  background: var(--grad-primary);
  border-radius: 4px;
  opacity: 0.5;
}

/* Video showcase */
.page-video-produk-iklan .video-showcase {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
  margin-bottom: 60px;
}
.page-video-produk-iklan .video-card {
  background: var(--card-bg);
  border: 1px solid var(--border);
  border-radius: 20px;
  overflow: hidden;
  transition: all 0.35s ease;
  cursor: pointer;
  position: relative;
  z-index: 1;
}
.page-video-produk-iklan .video-card:hover {
  transform: translateY(-6px);
  border-color: var(--gold);
  box-shadow: 0 16px 40px rgba(0,0,0,0.4), 0 0 20px rgba(255,210,117,0.1);
}
.page-video-produk-iklan .video-card__thumb {
  position: relative;
  aspect-ratio: 16/9;
  overflow: hidden;
  background: #0d0b12;
}
.page-video-produk-iklan .video-card__thumb img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.5s ease;
}
.page-video-produk-iklan .video-card:hover .video-card__thumb img {
  transform: scale(1.06);
}
.page-video-produk-iklan .video-card__play {
  position: absolute;
  inset: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(0, 0, 0, 0.35);
  transition: background 0.3s ease;
}
.page-video-produk-iklan .video-card:hover .video-card__play {
  background: rgba(0, 0, 0, 0.15);
}
.page-video-produk-iklan .video-card__play-icon {
  width: 52px;
  height: 52px;
  border-radius: 50%;
  background: var(--grad-primary);
  color: #121017;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 18px;
  transition: all 0.3s ease;
  box-shadow: 0 4px 12px rgba(179,134,34,0.3);
}
.page-video-produk-iklan .video-card:hover .video-card__play-icon {
  transform: scale(1.1);
}
.page-video-produk-iklan .video-card__play-icon svg {
  width: 22px;
  height: 22px;
  fill: #121017;
  margin-left: 2px;
}
.page-video-produk-iklan .video-card__body {
  padding: 16px 20px;
  border-top: 1px solid var(--border);
}
.page-video-produk-iklan .video-card__title {
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 15px;
  color: #fff;
  margin-bottom: 6px;
  transition: color 0.3s ease;
}
.page-video-produk-iklan .video-card:hover .video-card__title {
  color: var(--gold);
}
.page-video-produk-iklan .video-card__author {
  font-size: 12px;
  color: var(--text-dim);
}
.page-video-produk-iklan .video-card__author a {
  color: var(--accent);
  font-weight: 500;
}
.page-video-produk-iklan .video-card__author a:hover {
  color: var(--gold);
}

/* Sections */
.page-video-produk-iklan .section {
  position: relative;
  z-index: 1;
  max-width: 1200px;
  margin: 0 auto;
  padding-top: 90px;
  padding-bottom: 90px;
}

/* Photo Section */
.page-video-produk-iklan .photo-section {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 30px;
  align-items: center;
  margin: 40px 0;
}
.page-video-produk-iklan .photo-section__img {
  border-radius: 18px;
  overflow: hidden;
  border: 1px solid var(--border);
  transition: all 0.35s ease;
}
.page-video-produk-iklan .photo-section__img:hover {
  border-color: rgba(255, 210, 117, 0.15);
  box-shadow: 0 16px 40px rgba(0, 0, 0, .3);
}
.page-video-produk-iklan .photo-section__img img {
  width: 100%;
  height: auto;
  transition: transform 0.5s ease;
}
.page-video-produk-iklan .photo-section__img:hover img {
  transform: scale(1.03);
}
.page-video-produk-iklan .photo-section__info h3 {
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 22px;
  color: #fff;
  margin-bottom: 12px;
}
.page-video-produk-iklan .photo-section__info h3 span {
  background: var(--grad-primary);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
.page-video-produk-iklan .photo-section__info p {
  font-size: 14px;
  color: var(--text-dim);
  line-height: 1.8;
  margin-bottom: 10px;
}
.page-video-produk-iklan .photo-section__info .credit {
  font-size: 12px;
  color: var(--text-dim);
}
.page-video-produk-iklan .photo-section__info .credit a {
  color: var(--accent);
}
.page-video-produk-iklan .photo-section__info .credit a:hover {
  color: var(--gold);
}

/* Content section */
.page-video-produk-iklan .content-section {
  max-width: 900px;
  margin: 0 auto;
}
.page-video-produk-iklan .content-section h2 {
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 32px;
  color: #fff;
  margin-bottom: 24px;
  line-height: 1.3;
  letter-spacing: -0.5px;
}
.page-video-produk-iklan .content-section h2 .hl {
  background: var(--grad-primary);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
.page-video-produk-iklan .content-section h3 {
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 22px;
  color: var(--gold);
  margin-bottom: 16px;
  margin-top: 48px;
  letter-spacing: -0.3px;
}
.page-video-produk-iklan .content-section p {
  font-size: 16px;
  color: var(--text-dim);
  line-height: 1.85;
  margin-bottom: 20px;
}
.page-video-produk-iklan .content-section ul, .page-video-produk-iklan .content-section ol {
  padding-left: 24px;
  margin-bottom: 24px;
}
.page-video-produk-iklan .content-section li {
  font-size: 15.5px;
  color: var(--text-dim);
  line-height: 1.85;
  margin-bottom: 10px;
}
.page-video-produk-iklan .content-section li strong {
  color: var(--text-main);
}
.page-video-produk-iklan .content-section hr {
  margin: 48px 0;
  border: none;
  height: 1px;
  background: var(--border);
}
.page-video-produk-iklan .service-list {
  display: grid;
  gap: 16px;
  margin-bottom: 24px;
}
.page-video-produk-iklan .service-item {
  background: var(--card-bg);
  border: 1px solid var(--border);
  border-left: 3px solid var(--accent);
  border-radius: 16px;
  padding: 20px 24px;
  transition: all 0.25s ease;
}
.page-video-produk-iklan .service-item:hover {
  background: rgba(212,175,55,0.03);
  border-color: rgba(255,210,117,0.15);
  transform: translateX(4px);
}
.page-video-produk-iklan .service-item strong {
  display: block;
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 15px;
  color: var(--gold);
  margin-bottom: 6px;
}
.page-video-produk-iklan .service-item span {
  font-size: 14px;
  color: var(--text-dim);
  line-height: 1.6;
}

/* Steps (5 columns) */
.page-video-produk-iklan .steps {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 16px;
  margin: 24px 0 40px;
}
.page-video-produk-iklan .step-card {
  background: var(--card-bg);
  border: 1px solid var(--border);
  border-radius: 20px;
  padding: 24px 16px;
  text-align: center;
  transition: all 0.25s ease;
}
.page-video-produk-iklan .step-card:hover {
  transform: translateY(-4px);
  border-color: rgba(255,210,117,0.15);
  box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}
.page-video-produk-iklan .step-card__num {
  width: 44px;
  height: 44px;
  border-radius: 50%;
  margin: 0 auto 14px;
  background: var(--grad-primary);
  color: #121017;
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 16px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 4px 12px rgba(179,134,34,0.3);
}
.page-video-produk-iklan .step-card h4 {
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 14px;
  color: var(--gold);
  margin-bottom: 8px;
}
.page-video-produk-iklan .step-card p {
  font-size: 12px;
  color: var(--text-dim);
  line-height: 1.5;
}

/* FAQ */
.page-video-produk-iklan .faq-item {
  background: var(--card-bg);
  border: 1px solid var(--border);
  border-radius: 16px;
  margin-bottom: 16px;
  overflow: hidden;
  transition: all 0.25s ease;
}
.page-video-produk-iklan .faq-item__q {
  padding: 20px 24px;
  cursor: pointer;
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-family: var(--font-heading);
  font-weight: 600;
  font-size: 15px;
  color: var(--text-main);
  transition: all 0.25s ease;
}
.page-video-produk-iklan .faq-item__q:hover {
  color: var(--gold);
}
.page-video-produk-iklan .faq-item__q .arrow {
  font-size: 18px;
  color: var(--accent);
  transition: transform 0.3s ease;
}
.page-video-produk-iklan .faq-item__q.open .arrow {
  transform: rotate(180deg);
}
.page-video-produk-iklan .faq-item__a {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.35s ease, padding 0.35s ease;
  padding: 0 24px;
  font-size: 14px;
  color: var(--text-dim);
  line-height: 1.7;
}
.page-video-produk-iklan .faq-item__a.open {
  max-height: 300px;
  padding: 0 24px 20px;
}

/* CTA Box */
.page-video-produk-iklan .cta-box {
  text-align: center;
  padding: 60px 40px;
  margin-top: 60px;
  background: var(--card-bg);
  border: 1px solid var(--border);
  border-radius: 32px;
  position: relative;
  overflow: hidden;
}
.page-video-produk-iklan .cta-box::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(circle at 70% 60%, rgba(212, 175, 55, 0.08), transparent 60%);
  pointer-events: none;
}
.page-video-produk-iklan .cta-box h2 {
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 28px;
  color: #fff;
  margin-bottom: 12px;
}
.page-video-produk-iklan .cta-box p {
  font-size: 16px;
  color: var(--text-dim);
  margin-bottom: 28px;
}
.page-video-produk-iklan .cta-box .wa-link {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 15px;
  padding: 16px 36px;
  border-radius: 50px;
  background: var(--grad-primary);
  color: #121017;
  box-shadow: 0 10px 30px rgba(179, 134, 34, 0.3);
  transition: all 0.25s ease;
}
.page-video-produk-iklan .cta-box .wa-link:hover {
  transform: translateY(-2px);
  box-shadow: 0 14px 36px rgba(179, 134, 34, 0.4);
}

/* Video Modal */
.page-video-produk-iklan .video-modal {
  display: none;
  position: fixed;
  z-index: 99999;
  inset: 0;
  padding: 30px;
}
.page-video-produk-iklan .video-modal__backdrop {
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.92);
  backdrop-filter: blur(6px);
}
.page-video-produk-iklan .video-modal__content {
  position: relative;
  max-width: 900px;
  margin: 5% auto;
  z-index: 2;
}
.page-video-produk-iklan .video-modal__close {
  position: absolute;
  right: -8px;
  top: -36px;
  font-size: 36px;
  color: #fff;
  cursor: pointer;
  z-index: 3;
  transition: all 0.25s ease;
  background: none;
  border: none;
}
.page-video-produk-iklan .video-modal__close:hover {
  color: var(--accent);
  transform: rotate(90deg);
}
.page-video-produk-iklan .video-modal__wrap {
  position: relative;
  padding-bottom: 56.25%;
  height: 0;
  overflow: hidden;
  border-radius: 16px;
  background: #000;
  border: 1px solid var(--border);
}
.page-video-produk-iklan .video-modal__wrap iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: none;
}

/* Responsive */
@media (max-width: 1024px) {
  .page-video-produk-iklan .video-showcase {
    grid-template-columns: repeat(2, 1fr);
  }
  .page-video-produk-iklan .photo-section {
    grid-template-columns: 1fr;
  }
  .page-video-produk-iklan .steps {
    grid-template-columns: repeat(3, 1fr);
  }
}
@media (max-width: 768px) {
  .page-video-produk-iklan .section {
    padding-top: 56px;
    padding-bottom: 56px;
  }
  .page-video-produk-iklan .hero {
    padding-top: 60px;
  }
  .page-video-produk-iklan .hero__title {
    font-size: 32px;
  }
  .page-video-produk-iklan .hero__desc {
    font-size: 14.5px;
  }
  .page-video-produk-iklan .video-showcase {
    grid-template-columns: 1fr;
  }
  .page-video-produk-iklan .steps {
    grid-template-columns: 1fr;
  }
  .page-video-produk-iklan .content-section h2 {
    font-size: 24px;
  }
  .page-video-produk-iklan .video-modal {
    padding: 16px;
  }
  .page-video-produk-iklan .video-modal__content {
    margin: 15% auto;
  }
  .page-video-produk-iklan .video-modal__close {
    right: 0;
    top: -32px;
    font-size: 30px;
  }
}

INLINE_ASSET
    );
}
// DOKUMENTASI_EVENT_CSS
if (!defined('DOKUMENTASI_EVENT_CSS')) {
    define('DOKUMENTASI_EVENT_CSS', <<<'INLINE_ASSET'
/* ===== DOKUMENTASI EVENT STYLES ===== */

.page-dokumentasi-event {
  position: relative;
  z-index: 1;
  max-width: 1200px;
  margin: 0 auto;
  padding-left: 40px;
  padding-right: 40px;
}
@media (max-width: 768px) {
  .page-dokumentasi-event {
    padding-left: 20px;
    padding-right: 20px;
  }
}

/* Background glows */
.page-dokumentasi-event .fluid-glow {
  position: fixed;
  width: 500px;
  height: 500px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(179, 134, 34, 0.08) 0%, rgba(255, 210, 117, 0.02) 50%, transparent 100%);
  filter: blur(80px);
  pointer-events: none;
  z-index: 0;
  animation: pulseGlowDE 15s ease-in-out infinite alternate;
}
.page-dokumentasi-event .glow-left {
  top: -150px;
  left: -150px;
}
.page-dokumentasi-event .glow-right {
  bottom: -150px;
  right: -150px;
  animation-delay: -5s;
}
@keyframes pulseGlowDE {
  0% { transform: scale(1) translate(0, 0); }
  50% { transform: scale(1.15) translate(30px, -30px); }
  100% { transform: scale(0.9) translate(-15px, 15px); }
}

/* Hero section */
.page-dokumentasi-event .hero {
  padding-top: 100px;
  padding-bottom: 50px;
}
.page-dokumentasi-event .hero__inner {
  text-align: center;
  max-width: 800px;
  margin: 0 auto;
}
.page-dokumentasi-event .hero__tag {
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 11px;
  letter-spacing: 3px;
  text-transform: uppercase;
  color: var(--orange);
  display: inline-block;
  margin-bottom: 18px;
}
.page-dokumentasi-event .hero__title {
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 48px;
  color: #fff;
  line-height: 1.15;
  margin-bottom: 20px;
  letter-spacing: -1px;
}
.page-dokumentasi-event .hero__title span {
  background: var(--grad-primary);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
.page-dokumentasi-event .hero__desc {
  font-size: 16px;
  color: var(--text-dim);
  line-height: 1.85;
  max-width: 640px;
  margin: 0 auto;
}

.page-dokumentasi-event .divider {
  max-width: 80px;
  margin: 0 auto 60px;
  height: 2px;
  background: var(--grad-primary);
  border-radius: 4px;
  opacity: 0.5;
}

/* Video showcase */
.page-dokumentasi-event .video-showcase {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
  margin-bottom: 60px;
}
.page-dokumentasi-event .video-card {
  background: var(--card-bg);
  border: 1px solid var(--border);
  border-radius: 20px;
  overflow: hidden;
  transition: all 0.35s ease;
  cursor: pointer;
  position: relative;
  z-index: 1;
}
.page-dokumentasi-event .video-card:hover {
  transform: translateY(-6px);
  border-color: var(--gold);
  box-shadow: 0 16px 40px rgba(0,0,0,0.4), 0 0 20px rgba(255,210,117,0.1);
}
.page-dokumentasi-event .video-card__thumb {
  position: relative;
  aspect-ratio: 16/9;
  overflow: hidden;
  background: #0d0b12;
}
.page-dokumentasi-event .video-card__thumb img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.5s ease;
}
.page-dokumentasi-event .video-card:hover .video-card__thumb img {
  transform: scale(1.06);
}
.page-dokumentasi-event .video-card__play {
  position: absolute;
  inset: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(0, 0, 0, 0.35);
  transition: background 0.3s ease;
}
.page-dokumentasi-event .video-card:hover .video-card__play {
  background: rgba(0, 0, 0, 0.15);
}
.page-dokumentasi-event .video-card__play-icon {
  width: 52px;
  height: 52px;
  border-radius: 50%;
  background: var(--grad-primary);
  color: #121017;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 18px;
  transition: all 0.3s ease;
  box-shadow: 0 4px 12px rgba(179,134,34,0.3);
}
.page-dokumentasi-event .video-card:hover .video-card__play-icon {
  transform: scale(1.1);
}
.page-dokumentasi-event .video-card__play-icon svg {
  width: 22px;
  height: 22px;
  fill: #121017;
  margin-left: 2px;
}
.page-dokumentasi-event .video-card__body {
  padding: 16px 20px;
  border-top: 1px solid var(--border);
}
.page-dokumentasi-event .video-card__title {
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 15px;
  color: #fff;
  margin-bottom: 6px;
  transition: color 0.3s ease;
}
.page-dokumentasi-event .video-card:hover .video-card__title {
  color: var(--gold);
}
.page-dokumentasi-event .video-card__author {
  font-size: 12px;
  color: var(--text-dim);
}
.page-dokumentasi-event .video-card__author a {
  color: var(--accent);
  font-weight: 500;
}
.page-dokumentasi-event .video-card__author a:hover {
  color: var(--gold);
}

/* Sections */
.page-dokumentasi-event .section {
  position: relative;
  z-index: 1;
  max-width: 1200px;
  margin: 0 auto;
  padding-top: 90px;
  padding-bottom: 90px;
}

/* Content section */
.page-dokumentasi-event .content-section {
  max-width: 900px;
  margin: 0 auto;
}
.page-dokumentasi-event .content-section h2 {
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 32px;
  color: #fff;
  margin-bottom: 24px;
  line-height: 1.3;
  letter-spacing: -0.5px;
}
.page-dokumentasi-event .content-section h2 .hl {
  background: var(--grad-primary);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
.page-dokumentasi-event .content-section h3 {
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 22px;
  color: var(--gold);
  margin-bottom: 16px;
  margin-top: 48px;
  letter-spacing: -0.3px;
}
.page-dokumentasi-event .content-section p {
  font-size: 16px;
  color: var(--text-dim);
  line-height: 1.85;
  margin-bottom: 20px;
}
.page-dokumentasi-event .content-section ul, .page-dokumentasi-event .content-section ol {
  padding-left: 24px;
  margin-bottom: 24px;
}
.page-dokumentasi-event .content-section li {
  font-size: 15.5px;
  color: var(--text-dim);
  line-height: 1.85;
  margin-bottom: 10px;
}
.page-dokumentasi-event .content-section li strong {
  color: var(--text-main);
}
.page-dokumentasi-event .content-section hr {
  margin: 48px 0;
  border: none;
  height: 1px;
  background: var(--border);
}
.page-dokumentasi-event .service-list {
  display: grid;
  gap: 16px;
  margin-bottom: 24px;
}
.page-dokumentasi-event .service-item {
  background: var(--card-bg);
  border: 1px solid var(--border);
  border-left: 3px solid var(--accent);
  border-radius: 16px;
  padding: 20px 24px;
  transition: all 0.25s ease;
}
.page-dokumentasi-event .service-item:hover {
  background: rgba(212,175,55,0.03);
  border-color: rgba(255,210,117,0.15);
  transform: translateX(4px);
}
.page-dokumentasi-event .service-item strong {
  display: block;
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 15px;
  color: var(--gold);
  margin-bottom: 6px;
}
.page-dokumentasi-event .service-item span {
  font-size: 14px;
  color: var(--text-dim);
  line-height: 1.6;
}

/* Steps (5 columns) */
.page-dokumentasi-event .steps {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 16px;
  margin: 24px 0 40px;
}
.page-dokumentasi-event .step-card {
  background: var(--card-bg);
  border: 1px solid var(--border);
  border-radius: 20px;
  padding: 24px 16px;
  text-align: center;
  transition: all 0.25s ease;
}
.page-dokumentasi-event .step-card:hover {
  transform: translateY(-4px);
  border-color: rgba(255,210,117,0.15);
  box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}
.page-dokumentasi-event .step-card__num {
  width: 44px;
  height: 44px;
  border-radius: 50%;
  margin: 0 auto 14px;
  background: var(--grad-primary);
  color: #121017;
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 16px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 4px 12px rgba(179,134,34,0.3);
}
.page-dokumentasi-event .step-card h4 {
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 14px;
  color: var(--gold);
  margin-bottom: 8px;
}
.page-dokumentasi-event .step-card p {
  font-size: 12px;
  color: var(--text-dim);
  line-height: 1.5;
}

/* FAQ */
.page-dokumentasi-event .faq-item {
  background: var(--card-bg);
  border: 1px solid var(--border);
  border-radius: 16px;
  margin-bottom: 16px;
  overflow: hidden;
  transition: all 0.25s ease;
}
.page-dokumentasi-event .faq-item__q {
  padding: 20px 24px;
  cursor: pointer;
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-family: var(--font-heading);
  font-weight: 600;
  font-size: 15px;
  color: var(--text-main);
  transition: all 0.25s ease;
}
.page-dokumentasi-event .faq-item__q:hover {
  color: var(--gold);
}
.page-dokumentasi-event .faq-item__q .arrow {
  font-size: 18px;
  color: var(--accent);
  transition: transform 0.3s ease;
}
.page-dokumentasi-event .faq-item__q.open .arrow {
  transform: rotate(180deg);
}
.page-dokumentasi-event .faq-item__a {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.35s ease, padding 0.35s ease;
  padding: 0 24px;
  font-size: 14px;
  color: var(--text-dim);
  line-height: 1.7;
}
.page-dokumentasi-event .faq-item__a.open {
  max-height: 300px;
  padding: 0 24px 20px;
}

/* CTA Box */
.page-dokumentasi-event .cta-box {
  text-align: center;
  padding: 60px 40px;
  margin-top: 60px;
  background: var(--card-bg);
  border: 1px solid var(--border);
  border-radius: 32px;
  position: relative;
  overflow: hidden;
}
.page-dokumentasi-event .cta-box::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(circle at 70% 60%, rgba(212, 175, 55, 0.08), transparent 60%);
  pointer-events: none;
}
.page-dokumentasi-event .cta-box h2 {
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 28px;
  color: #fff;
  margin-bottom: 12px;
}
.page-dokumentasi-event .cta-box p {
  font-size: 16px;
  color: var(--text-dim);
  margin-bottom: 28px;
}
.page-dokumentasi-event .cta-box .wa-link {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 15px;
  padding: 16px 36px;
  border-radius: 50px;
  background: var(--grad-primary);
  color: #121017;
  box-shadow: 0 10px 30px rgba(179, 134, 34, 0.3);
  transition: all 0.25s ease;
}
.page-dokumentasi-event .cta-box .wa-link:hover {
  transform: translateY(-2px);
  box-shadow: 0 14px 36px rgba(179, 134, 34, 0.4);
}

/* Video Modal */
.page-dokumentasi-event .video-modal {
  display: none;
  position: fixed;
  z-index: 99999;
  inset: 0;
  padding: 30px;
}
.page-dokumentasi-event .video-modal__backdrop {
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.92);
  backdrop-filter: blur(6px);
}
.page-dokumentasi-event .video-modal__content {
  position: relative;
  max-width: 900px;
  margin: 5% auto;
  z-index: 2;
}
.page-dokumentasi-event .video-modal__close {
  position: absolute;
  right: -8px;
  top: -36px;
  font-size: 36px;
  color: #fff;
  cursor: pointer;
  z-index: 3;
  transition: all 0.25s ease;
  background: none;
  border: none;
}
.page-dokumentasi-event .video-modal__close:hover {
  color: var(--accent);
  transform: rotate(90deg);
}
.page-dokumentasi-event .video-modal__wrap {
  position: relative;
  padding-bottom: 56.25%;
  height: 0;
  overflow: hidden;
  border-radius: 16px;
  background: #000;
  border: 1px solid var(--border);
}
.page-dokumentasi-event .video-modal__wrap iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: none;
}

/* Responsive */
@media (max-width: 1024px) {
  .page-dokumentasi-event .video-showcase {
    grid-template-columns: repeat(2, 1fr);
  }
  .page-dokumentasi-event .steps {
    grid-template-columns: repeat(3, 1fr);
  }
}
@media (max-width: 768px) {
  .page-dokumentasi-event .section {
    padding-top: 56px;
    padding-bottom: 56px;
  }
  .page-dokumentasi-event .hero {
    padding-top: 60px;
  }
  .page-dokumentasi-event .hero__title {
    font-size: 32px;
  }
  .page-dokumentasi-event .hero__desc {
    font-size: 14.5px;
  }
  .page-dokumentasi-event .video-showcase {
    grid-template-columns: 1fr;
  }
  .page-dokumentasi-event .steps {
    grid-template-columns: 1fr;
  }
  .page-dokumentasi-event .content-section h2 {
    font-size: 24px;
  }
  .page-dokumentasi-event .video-modal {
    padding: 16px;
  }
  .page-dokumentasi-event .video-modal__content {
    margin: 15% auto;
  }
  .page-dokumentasi-event .video-modal__close {
    right: 0;
    top: -32px;
    font-size: 30px;
  }
}

INLINE_ASSET
    );
}
// EVENT_PRODUCTION_CSS
if (!defined('EVENT_PRODUCTION_CSS')) {
    define('EVENT_PRODUCTION_CSS', <<<'INLINE_ASSET'
/* ===== EVENT PRODUCTION & EVENT ORGANIZER STYLES ===== */

.page-event-production {
  position: relative;
  z-index: 1;
  max-width: 1200px;
  margin: 0 auto;
  padding-left: 40px;
  padding-right: 40px;
}
@media (max-width: 768px) {
  .page-event-production {
    padding-left: 20px;
    padding-right: 20px;
  }
}

/* Background glows */
.page-event-production .fluid-glow {
  position: fixed;
  width: 500px;
  height: 500px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(179, 134, 34, 0.08) 0%, rgba(255, 210, 117, 0.02) 50%, transparent 100%);
  filter: blur(80px);
  pointer-events: none;
  z-index: 0;
  animation: pulseGlowEP 15s ease-in-out infinite alternate;
}
.page-event-production .glow-left {
  top: -150px;
  left: -150px;
}
.page-event-production .glow-right {
  bottom: -150px;
  right: -150px;
  animation-delay: -5s;
}
@keyframes pulseGlowEP {
  0% { transform: scale(1) translate(0, 0); }
  50% { transform: scale(1.15) translate(30px, -30px); }
  100% { transform: scale(0.9) translate(-15px, 15px); }
}

/* Hero section */
.page-event-production .hero {
  padding-top: 100px;
  padding-bottom: 50px;
}
.page-event-production .hero__inner {
  text-align: center;
  max-width: 800px;
  margin: 0 auto;
}
.page-event-production .hero__tag {
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 11px;
  letter-spacing: 3px;
  text-transform: uppercase;
  color: var(--orange);
  display: inline-block;
  margin-bottom: 18px;
}
.page-event-production .hero__title {
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 48px;
  color: #fff;
  line-height: 1.15;
  margin-bottom: 20px;
  letter-spacing: -1px;
}
.page-event-production .hero__title span {
  background: var(--grad-primary);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
.page-event-production .hero__desc {
  font-size: 16px;
  color: var(--text-dim);
  line-height: 1.85;
  max-width: 640px;
  margin: 0 auto;
}

.page-event-production .divider {
  max-width: 80px;
  margin: 0 auto 60px;
  height: 2px;
  background: var(--grad-primary);
  border-radius: 4px;
  opacity: 0.5;
}

/* Video showcase */
.page-event-production .video-showcase {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
  margin-bottom: 60px;
}
.page-event-production .video-card {
  background: var(--card-bg);
  border: 1px solid var(--border);
  border-radius: 20px;
  overflow: hidden;
  transition: all 0.35s ease;
  cursor: pointer;
  position: relative;
  z-index: 1;
}
.page-event-production .video-card:hover {
  transform: translateY(-6px);
  border-color: var(--gold);
  box-shadow: 0 16px 40px rgba(0,0,0,0.4), 0 0 20px rgba(255,210,117,0.1);
}
.page-event-production .video-card__thumb {
  position: relative;
  aspect-ratio: 16/9;
  overflow: hidden;
  background: #0d0b12;
}
.page-event-production .video-card__thumb img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.5s ease;
}
.page-event-production .video-card:hover .video-card__thumb img {
  transform: scale(1.06);
}
.page-event-production .video-card__play {
  position: absolute;
  inset: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(0, 0, 0, 0.35);
  transition: background 0.3s ease;
}
.page-event-production .video-card:hover .video-card__play {
  background: rgba(0, 0, 0, 0.15);
}
.page-event-production .video-card__play-icon {
  width: 52px;
  height: 52px;
  border-radius: 50%;
  background: var(--grad-primary);
  color: #121017;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 18px;
  transition: all 0.3s ease;
  box-shadow: 0 4px 12px rgba(179,134,34,0.3);
}
.page-event-production .video-card:hover .video-card__play-icon {
  transform: scale(1.1);
}
.page-event-production .video-card__play-icon svg {
  width: 22px;
  height: 22px;
  fill: #121017;
  margin-left: 2px;
}
.page-event-production .video-card__body {
  padding: 16px 20px;
  border-top: 1px solid var(--border);
}
.page-event-production .video-card__title {
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 15px;
  color: #fff;
  margin-bottom: 6px;
  transition: color 0.3s ease;
}
.page-event-production .video-card:hover .video-card__title {
  color: var(--gold);
}
.page-event-production .video-card__author {
  font-size: 12px;
  color: var(--text-dim);
}
.page-event-production .video-card__author a {
  color: var(--accent);
  font-weight: 500;
}
.page-event-production .video-card__author a:hover {
  color: var(--gold);
}

/* Sections */
.page-event-production .section {
  position: relative;
  z-index: 1;
  max-width: 1200px;
  margin: 0 auto;
  padding-top: 90px;
  padding-bottom: 90px;
}

/* Content section */
.page-event-production .content-section {
  max-width: 900px;
  margin: 0 auto;
}
.page-event-production .content-section h2 {
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 32px;
  color: #fff;
  margin-bottom: 24px;
  line-height: 1.3;
  letter-spacing: -0.5px;
}
.page-event-production .content-section h2 .hl {
  background: var(--grad-primary);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
.page-event-production .content-section h3 {
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 22px;
  color: var(--gold);
  margin-bottom: 16px;
  margin-top: 48px;
  letter-spacing: -0.3px;
}
.page-event-production .content-section p {
  font-size: 16px;
  color: var(--text-dim);
  line-height: 1.85;
  margin-bottom: 20px;
}
.page-event-production .content-section ul, .page-event-production .content-section ol {
  padding-left: 24px;
  margin-bottom: 24px;
}
.page-event-production .content-section li {
  font-size: 15.5px;
  color: var(--text-dim);
  line-height: 1.85;
  margin-bottom: 10px;
}
.page-event-production .content-section li strong {
  color: var(--text-main);
}
.page-event-production .content-section hr {
  margin: 48px 0;
  border: none;
  height: 1px;
  background: var(--border);
}
.page-event-production .service-list {
  display: grid;
  gap: 16px;
  margin-bottom: 24px;
}
.page-event-production .service-item {
  background: var(--card-bg);
  border: 1px solid var(--border);
  border-left: 3px solid var(--accent);
  border-radius: 16px;
  padding: 20px 24px;
  transition: all 0.25s ease;
}
.page-event-production .service-item:hover {
  background: rgba(212,175,55,0.03);
  border-color: rgba(255,210,117,0.15);
  transform: translateX(4px);
}
.page-event-production .service-item strong {
  display: block;
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 15px;
  color: var(--gold);
  margin-bottom: 6px;
}
.page-event-production .service-item span {
  font-size: 14px;
  color: var(--text-dim);
  line-height: 1.6;
}

/* Steps */
.page-event-production .steps {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
  margin: 24px 0 40px;
}
.page-event-production .step-card {
  background: var(--card-bg);
  border: 1px solid var(--border);
  border-radius: 20px;
  padding: 28px 24px;
  text-align: center;
  transition: all 0.25s ease;
}
.page-event-production .step-card:hover {
  transform: translateY(-4px);
  border-color: rgba(255,210,117,0.15);
  box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}
.page-event-production .step-card__num {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  margin: 0 auto 16px;
  background: var(--grad-primary);
  color: #121017;
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 18px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 4px 12px rgba(179,134,34,0.3);
}
.page-event-production .step-card h4 {
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 15px;
  color: var(--gold);
  margin-bottom: 10px;
}
.page-event-production .step-card p {
  font-size: 13px;
  color: var(--text-dim);
  line-height: 1.6;
}

/* FAQ */
.page-event-production .faq-item {
  background: var(--card-bg);
  border: 1px solid var(--border);
  border-radius: 16px;
  margin-bottom: 16px;
  overflow: hidden;
  transition: all 0.25s ease;
}
.page-event-production .faq-item__q {
  padding: 20px 24px;
  cursor: pointer;
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-family: var(--font-heading);
  font-weight: 600;
  font-size: 15px;
  color: var(--text-main);
  transition: all 0.25s ease;
}
.page-event-production .faq-item__q:hover {
  color: var(--gold);
}
.page-event-production .faq-item__q .arrow {
  font-size: 18px;
  color: var(--accent);
  transition: transform 0.3s ease;
}
.page-event-production .faq-item__q.open .arrow {
  transform: rotate(180deg);
}
.page-event-production .faq-item__a {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.35s ease, padding 0.35s ease;
  padding: 0 24px;
  font-size: 14px;
  color: var(--text-dim);
  line-height: 1.7;
}
.page-event-production .faq-item__a.open {
  max-height: 300px;
  padding: 0 24px 20px;
}

/* CTA Box */
.page-event-production .cta-box {
  text-align: center;
  padding: 60px 40px;
  margin-top: 60px;
  background: var(--card-bg);
  border: 1px solid var(--border);
  border-radius: 32px;
  position: relative;
  overflow: hidden;
}
.page-event-production .cta-box::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(circle at 70% 60%, rgba(212, 175, 55, 0.08), transparent 60%);
  pointer-events: none;
}
.page-event-production .cta-box h2 {
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 28px;
  color: #fff;
  margin-bottom: 12px;
}
.page-event-production .cta-box p {
  font-size: 16px;
  color: var(--text-dim);
  margin-bottom: 28px;
}
.page-event-production .cta-box .wa-link {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 15px;
  padding: 16px 36px;
  border-radius: 50px;
  background: var(--grad-primary);
  color: #121017;
  box-shadow: 0 10px 30px rgba(179, 134, 34, 0.3);
  transition: all 0.25s ease;
}
.page-event-production .cta-box .wa-link:hover {
  transform: translateY(-2px);
  box-shadow: 0 14px 36px rgba(179, 134, 34, 0.4);
}

/* Video Modal */
.page-event-production .video-modal {
  display: none;
  position: fixed;
  z-index: 99999;
  inset: 0;
  padding: 30px;
}
.page-event-production .video-modal__backdrop {
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.92);
  backdrop-filter: blur(6px);
}
.page-event-production .video-modal__content {
  position: relative;
  max-width: 900px;
  margin: 5% auto;
  z-index: 2;
}
.page-event-production .video-modal__close {
  position: absolute;
  right: -8px;
  top: -36px;
  font-size: 36px;
  color: #fff;
  cursor: pointer;
  z-index: 3;
  transition: all 0.25s ease;
  background: none;
  border: none;
}
.page-event-production .video-modal__close:hover {
  color: var(--accent);
  transform: rotate(90deg);
}
.page-event-production .video-modal__wrap {
  position: relative;
  padding-bottom: 56.25%;
  height: 0;
  overflow: hidden;
  border-radius: 16px;
  background: #000;
  border: 1px solid var(--border);
}
.page-event-production .video-modal__wrap iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: none;
}

/* Responsive */
@media (max-width: 1024px) {
  .page-event-production .video-showcase {
    grid-template-columns: repeat(2, 1fr);
  }
  .page-event-production .steps {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 768px) {
  .page-event-production .section {
    padding-top: 56px;
    padding-bottom: 56px;
  }
  .page-event-production .hero {
    padding-top: 60px;
  }
  .page-event-production .hero__title {
    font-size: 32px;
  }
  .page-event-production .hero__desc {
    font-size: 14.5px;
  }
  .page-event-production .video-showcase {
    grid-template-columns: 1fr;
  }
  .page-event-production .steps {
    grid-template-columns: 1fr;
  }
  .page-event-production .content-section h2 {
    font-size: 24px;
  }
  .page-event-production .video-modal {
    padding: 16px;
  }
  .page-event-production .video-modal__content {
    margin: 15% auto;
  }
  .page-event-production .video-modal__close {
    right: 0;
    top: -32px;
    font-size: 30px;
  }
}

INLINE_ASSET
    );
}
// LANDING_CSS
if (!defined('LANDING_CSS')) {
    define('LANDING_CSS', <<<'INLINE_ASSET'
:root {
    --bg: #09080c;
    --card-bg: #121017;
    --gold: #ffd275;
    --orange: #b38622;
    --accent: #d4af37;
    --text-main: #f3f1f6;
    --text-dim: #9b98a6;
    --border: rgba(212, 134, 34, 0.08);
    --grad-primary: linear-gradient(135deg, #b38622 0%, #ffd275 100%);
    --font-heading: 'Plus Jakarta Sans', sans-serif;
  }

  * { margin: 0; padding: 0; box-sizing: border-box; }
  html { scroll-behavior: smooth; }
  body {
    background-color: var(--bg);
    color: var(--text-main);
    font-family: 'Inter', sans-serif;
    overflow-x: hidden;
    position: relative;
  }

  /* Liquid blob background glows */
  .fluid-glow {
    position: absolute; border-radius: 50%;
    filter: blur(130px); z-index: 0; pointer-events: none; opacity: 0.15;
  }
  .glow-left { top: 10%; left: -100px; width: 450px; height: 450px; background: var(--orange); }
  .glow-right { top: 50%; right: -150px; width: 500px; height: 500px; background: var(--gold); }

  h1, h2, h3, h4 { font-family: var(--font-heading); font-weight: 800; }

  /* Floating navbar styles inherited from main style.css */

  /* ===== HERO (Organic Split Layout with BG Image) ===== */
  .hero-wrapper {
    max-width: 100%;
    background-color: var(--bg);
    position: relative;
    overflow: hidden;
    border-bottom: 1px solid var(--border);
  }
  .hero-bg-overlay {
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background-image: url('https://images.unsplash.com/photo-1511578314322-379afb476865?w=1600&q=80');
    background-size: cover;
    background-position: center;
    opacity: 0.3;
    z-index: 0;
    pointer-events: none;
  }
  .hero-inner {
    max-width: 1200px;
    margin: 0 auto;
    padding: 180px 40px 110px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 60px;
    position: relative;
    z-index: 1;
  }
  .hero-content {
    flex: 1.2;
  }
  .hero-eyebrow {
    display: inline-flex; align-items: center; gap: 8px;
    padding: 6px 16px;
    background: rgba(255, 179, 71, 0.06);
    border: 1px solid rgba(255, 179, 71, 0.15);
    border-radius: 50px;
    font-size: 13px; font-weight: 600; color: var(--gold);
    margin-bottom: 28px;
  }
  .hero-eyebrow::before {
    content: ""; width: 6px; height: 6px; border-radius: 50%; background: var(--orange);
  }
  .hero-content h1 {
    font-size: 58px; line-height: 1.1; font-weight: 800; color: #fff;
    margin-bottom: 24px; letter-spacing: -1px;
  }
  .hero-content h1 span {
    background: var(--grad-primary);
    -webkit-background-clip: text; background-clip: text; color: transparent;
  }
  .hero-sub {
    font-size: 16px; color: var(--text-dim); line-height: 1.7;
    margin-bottom: 40px; max-width: 540px;
  }
  .hero-actions { display: flex; gap: 16px; flex-wrap: wrap; margin-bottom: 48px;}
  
  .btn-fluid-primary {
    padding: 16px 32px; border-radius: 50px;
    background: var(--grad-primary); color: #121017 !important;
    font-family: var(--font-heading); font-weight: 700; font-size: 14.5px;
    text-decoration: none; display: inline-flex; align-items: center; gap: 8px;
    box-shadow: 0 10px 25px rgba(255, 122, 26, 0.3);
    transition: transform 0.25s, box-shadow 0.25s;
  }
  .btn-fluid-primary:hover { transform: translateY(-2px); box-shadow: 0 12px 30px rgba(255, 122, 26, 0.45); }

  .btn-fluid-secondary {
    padding: 16px 30px; border-radius: 50px;
    border: 1px solid var(--border);
    background: rgba(255,255,255,0.02);
    color: var(--text-main);
    font-family: var(--font-heading); font-weight: 600; font-size: 14.5px;
    text-decoration: none; transition: border-color 0.25s, background-color 0.25s;
  }
  .btn-fluid-secondary:hover { border-color: var(--gold); background: rgba(255,179,71,0.04); }

  /* Enlarged button revisions */
  .btn-enlarged {
    padding: 18px 38px;
    font-size: 15.5px;
  }
  .btn-enlarged-secondary {
    padding: 18px 36px;
    font-size: 15.5px;
  }

  /* Hero Stats Overlapping cards */
  .hero-stats-row {
    display: flex; gap: 24px;
  }
  .stat-bubble {
    background: rgba(18, 16, 23, 0.45);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border: 1px solid rgba(255, 179, 71, 0.12);
    border-radius: 20px;
    padding: 16px 24px;
    display: flex; flex-direction: column;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    transition: transform 0.3s ease, border-color 0.3s ease;
  }
  .stat-bubble:hover {
    transform: translateY(-2px);
    border-color: rgba(255, 179, 71, 0.25);
  }
  .stat-bubble h3 { font-size: 26px; color: var(--gold); }
  .stat-bubble span { font-size: 12px; color: var(--text-main); margin-top: 2px; }

  /* Hero Right Side: Dynamic morphing blob image */
  .hero-visual-area {
    flex: 0.8;
    display: flex; justify-content: center; align-items: center;
    position: relative;
  }
  .fluid-blob {
    width: 380px; height: 380px;
    border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
    animation: blob-bounce 10s ease-in-out infinite;
    overflow: hidden;
    position: relative;
    border: 3px solid rgba(255, 179, 71, 0.3);
    box-shadow: 0 20px 50px rgba(0,0,0,0.4), 0 0 40px rgba(255, 122, 26, 0.15);
  }
  @keyframes blob-bounce {
    0%, 100% { border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; }
    50% { border-radius: 40% 60% 70% 30% / 50% 60% 30% 70%; }
  }
  .fluid-blob img {
    width: 100%; height: 100%; object-fit: cover;
    filter: saturate(1.05) contrast(1.05);
  }
  
  /* Floating label overlay next to blob */
  .floating-blob-label {
    position: absolute; bottom: 20px; left: -20px;
    background: rgba(18, 16, 23, 0.8);
    backdrop-filter: blur(12px);
    border: 1px solid var(--border);
    padding: 16px 20px;
    border-radius: 20px;
    box-shadow: 0 15px 30px rgba(0,0,0,0.3);
    z-index: 2;
  }
  .floating-blob-label h4 { font-size: 14px; color: #fff; margin-bottom: 2px; }
  .floating-blob-label span { font-size: 12px; color: var(--gold); font-weight: 500; }

  /* ===== SECTION SETUP ===== */
  section {
    max-width: 1200px; margin: 0 auto;
    padding: 100px 40px;
    position: relative; z-index: 1;
  }
  .sec-header {
    margin-bottom: 60px;
  }
  .sec-tag {
    font-size: 12px; font-weight: 700; color: var(--orange);
    text-transform: uppercase; letter-spacing: 2px;
    display: block; margin-bottom: 12px;
  }
  .sec-header h2 { font-size: 40px; color: #fff; }
  .sec-header h2 span {
    background: var(--grad-primary);
    -webkit-background-clip: text; background-clip: text; color: transparent;
  }
  .sec-desc { color: var(--text-dim); font-size: 15px; line-height: 1.7; margin-top: 10px; max-width: 600px; }

  /* Interactive Search Box */
  .search-container { max-width: 580px; margin-bottom: 50px; }
  .search-box {
    display: flex; align-items: center; gap: 10px;
    background: #25232e;
    border: 1px solid var(--border);
    padding: 6px 6px 6px 22px;
    border-radius: 100px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
  }
  .search-box input {
    flex: 1; background: none; border: none; outline: none;
    color: var(--text-main); font-size: 14px; padding: 10px 0;
  }
  .search-box input::placeholder { color: var(--text-dim); }
  .search-btn {
    padding: 12px 28px; border-radius: 100px;
    background: var(--grad-primary); border: none;
    font-weight: 700; font-family: var(--font-heading); font-size: 13px; color: #121017; cursor: pointer;
  }

  /* ===== LAYANAN (Full Width Rows & Imagery) ===== */
  .services-flex-grid {
    display: flex;
    flex-direction: column;
    gap: 30px;
  }
  .svc-card {
    background: var(--card-bg);
    border: 1px solid var(--border);
    border-radius: 30px;
    padding: 30px 40px;
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 40px;
    min-height: 250px;
    width: 100%;
    box-shadow: 0 15px 45px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s, border-color 0.3s;
    position: relative;
  }
  .svc-card:hover {
    transform: translateY(-5px); border-color: rgba(255, 179, 71, 0.25);
  }
  .svc-img-wrapper {
    width: 320px; height: 190px; border-radius: 20px; overflow: hidden; flex-shrink: 0;
    box-shadow: 0 8px 25px rgba(0,0,0,0.4);
  }
  .svc-img-wrapper img {
    width: 100%; height: 100%; object-fit: cover;
    transition: transform 0.5s;
  }
  .svc-card:hover .svc-img-wrapper img {
    transform: scale(1.05);
  }
  .svc-details { flex: 1; }
  
  .svc-num {
    font-family: var(--font-heading); font-size: 13px; color: var(--orange);
    display: block; margin-bottom: 12px; font-weight: 700;
  }
  .svc-card h3 { font-size: 24px; color: #fff; margin-bottom: 12px; }
  .svc-card p { font-size: 14px; color: var(--text-dim); line-height: 1.6; margin-bottom: 20px; }
  
  .svc-link {
    font-family: var(--font-heading); font-size: 13.5px; color: var(--gold); text-decoration: none; font-weight: 700;
    display: inline-flex; align-items: center; gap: 6px;
  }
  .svc-link::after { content: "â†’"; transition: transform 0.2s; }
  .svc-link:hover::after { transform: translateX(4px); }

  /* ===== PORTOFOLIO (Rounded Masonry Carousel) ===== */
  .portfolio-masonry {
    display: grid; grid-template-columns: repeat(3, 1fr); grid-auto-rows: 240px; gap: 24px; grid-auto-flow: dense;
  }
  .port-card {
    border-radius: 24px; overflow: hidden;
    position: relative; border: 1px solid var(--border);
    box-shadow: 0 15px 40px rgba(0,0,0,0.3);
    cursor: pointer;
    height: 100%;
  }
  .port-card.tall { grid-row: span 2; }
  .port-card.wide { grid-column: span 2; }
  .port-card img {
    width: 100%; height: 100%; object-fit: cover;
    transition: transform 0.5s;
  }
  .port-card:hover img { transform: scale(1.03); }
  
  .port-gradient {
    position: absolute; inset: 0;
    background: linear-gradient(180deg, transparent 40%, rgba(18,16,23,0.92) 100%);
    display: flex; flex-direction: column; justify-content: flex-end;
    padding: 24px;
    opacity: 0; transition: opacity 0.3s;
  }
  .port-card:hover .port-gradient { opacity: 1; }
  .port-gradient h4 { font-size: 16px; color: #fff; margin-bottom: 2px; }
  .port-gradient span { font-size: 12px; color: var(--gold); font-weight: 500; }
  
  .port-play-indicator {
    position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
    width: 52px; height: 52px; border-radius: 50%;
    background: rgba(255, 255, 255, 0.15); backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.25);
    display: flex; align-items: center; justify-content: center;
    color: #fff; opacity: 0; transition: all 0.3s;
  }
  .port-card:hover .port-play-indicator {
    opacity: 1; background: var(--gold); border-color: var(--gold); color: #121017;
  }

  /* ===== PERSONEL (Floating Bubble Roster) ===== */
  .bubble-roster-layout {
    display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;
  }
  .bubble-card {
    background: var(--card-bg);
    border: 1px solid var(--border);
    border-radius: 30px;
    padding: 30px;
    display: flex; align-items: center; gap: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    transition: transform 0.3s, border-color 0.3s;
  }
  .bubble-card:hover {
    transform: translateY(-5px); border-color: var(--gold);
  }
  .bubble-avatar-frame {
    width: 70px; height: 70px; border-radius: 50%;
    overflow: hidden; border: 2px solid var(--border);
    flex-shrink: 0; transition: border-color 0.3s;
  }
  .bubble-card:hover .bubble-avatar-frame { border-color: var(--gold); }
  .bubble-avatar-frame img {
    width: 100%; height: 100%; object-fit: cover;
  }
  .bubble-info h4 { font-size: 17px; color: #fff; margin-bottom: 2px; }
  .bubble-info p { font-size: 12.5px; color: var(--text-dim); margin-bottom: 6px; }
  .bubble-badge {
    font-size: 11px; font-weight: 700; color: var(--gold);
    display: inline-block; padding: 2px 8px; background: rgba(255, 179, 71, 0.05);
    border-radius: 30px; border: 1px solid rgba(255, 179, 71, 0.2);
  }

  /* ===== EVENT RENTALS (Vertical Scrollable Neumorphic Voucher Pills) ===== */
  .event-vouchers-list {
    display: flex;
    flex-direction: column;
    gap: 18px;
    max-height: 380px;
    overflow-y: auto;
    padding: 32px 24px;
    margin: 0;
    background: linear-gradient(145deg, #100e14, #18151f); /* Brushed metallic slate base */
    border-radius: 24px;
    border: 5px solid rgba(212, 134, 34, 0.25); /* Deep gold plate outline */
    position: relative;
    /* Neumorphic pressed shadow: top-left dark shadow, bottom-right bright gold reflection */
    box-shadow:
      inset 8px 8px 20px #040305,
      inset -8px -8px 20px #4e3f28, /* Rich gold specular reflection */
      0 1px 2px rgba(212, 134, 34, 0.1); /* Outer lip glow */
    scroll-behavior: smooth;
    scrollbar-width: thin;
    scrollbar-color: var(--orange) rgba(18, 16, 23, 0.5); /* Deep gold thumb */
  }
  /* Top gradient fade â€” content sinks into darkness at top */
  .event-vouchers-list::before {
    content: "";
    position: sticky;
    top: -32px;
    left: 0; right: 0;
    height: 36px;
    margin: -32px -24px 0;
    background: linear-gradient(180deg, #100e14 30%, transparent 100%);
    border-radius: 24px 24px 0 0;
    z-index: 2;
    pointer-events: none;
  }
  /* Bottom gradient fade â€” content sinks into darkness at bottom */
  .event-vouchers-list::after {
    content: "";
    position: sticky;
    bottom: -32px;
    left: 0; right: 0;
    height: 36px;
    margin: 0 -24px -32px;
    background: linear-gradient(0deg, #18151f 30%, transparent 100%);
    border-radius: 0 0 24px 24px;
    z-index: 2;
    pointer-events: none;
  }
  .event-vouchers-list::-webkit-scrollbar {
    width: 6px;
  }
  .event-vouchers-list::-webkit-scrollbar-track {
    background: rgba(18, 16, 23, 0.3);
    border-radius: 10px;
  }
  .event-vouchers-list::-webkit-scrollbar-thumb {
    background: var(--orange); /* Deep gold thumb */
    border-radius: 10px;
  }
  .voucher-pill {
    display: flex; align-items: center; justify-content: space-between;
    background: linear-gradient(145deg, #24202b, #15131a); /* Convex metallic gradient */
    border-radius: 100px;
    padding: 14px 16px 14px 28px;
    border: 1px solid rgba(212, 134, 34, 0.18); /* Deep gold border */
    /* Raised pill â€” stands out from the sunken tray floor with neumorphic shadows */
    box-shadow:
      6px 6px 15px #050407,
      -6px -6px 15px #3a3223, /* Warm gold highlight reflection */
      0 1px 0 rgba(255, 255, 255, 0.03); /* Inner lip highlight */
    transition: all 0.3s ease;
  }
  .voucher-pill:hover {
    transform: translateY(-3px);
    background: linear-gradient(145deg, #2c2735, #1b1822);
    border-color: rgba(255, 210, 117, 0.45); /* Brighter champagne gold border */
    box-shadow:
      8px 8px 20px #030204,
      -8px -8px 20px #4c3f29; /* Stronger warm gold highlight */
  }
  .voucher-left {
    display: flex; align-items: center; gap: 20px;
    flex: 1;
  }
  .voucher-circle-thumb {
    width: 52px; height: 52px; border-radius: 50%; overflow: hidden;
    border: 1px solid var(--border);
    flex-shrink: 0;
  }
  .voucher-circle-thumb img { width: 100%; height: 100%; object-fit: cover; }
  .voucher-details {
    flex: 1;
    padding-right: 20px;
  }
  .voucher-details h4 { font-size: 16px; color: #fff; font-weight: 700; font-family: var(--font-heading); }
  .voucher-details p { font-size: 12.5px; color: var(--text-dim); margin-top: 4px; line-height: 1.4; }
  
  .voucher-right {
    display: flex; align-items: center;
    flex-shrink: 0;
  }
  .btn-voucher-action {
    padding: 12px 24px; border-radius: 50px;
    background: var(--card-bg); border: 1px solid rgba(212, 134, 34, 0.35); /* Rich gold border */
    color: #fff; font-family: var(--font-heading); font-size: 12px; font-weight: 700;
    text-decoration: none; text-transform: uppercase;
    transition: all 0.3s;
    box-shadow: 3px 3px 6px #040306, -3px -3px 6px #24202b;
  }
  .voucher-pill:hover .btn-voucher-action {
    background: linear-gradient(135deg, #b38622 0%, #ffd275 100%); /* Metallic gold gradient */
    border-color: #ffd275;
    color: #121017;
    box-shadow: 0 4px 15px rgba(212, 134, 34, 0.5); /* Heavy golden aura */
  }

  /* ===== CLIENTS SLIDER ===== */
  .clients-strip-box {
    padding: 50px 0; border-top: 1px solid var(--border); border-bottom: 1px solid var(--border);
    margin-top: 60px;
  }
  .clients-strip-inner {
    display: flex; align-items: center; justify-content: space-between;
    flex-wrap: wrap; gap: 24px;
  }
  .clients-label-txt { font-family: var(--font-heading); font-size: 14px; color: var(--text-dim); text-transform: uppercase; letter-spacing: 0.5px; }
  .clients-track-names { display: flex; flex-wrap: wrap; gap: 40px; }
  .clients-track-names div { font-size: 13.5px; font-weight: 700; color: var(--text-dim); opacity: 0.6; }

  /* ===== CTA BANNER (Fluid Card) ===== */
  .cta-section-container {
    padding: 80px 40px;
  }
  .cta-fluid-card {
    max-width: 1100px; margin: 0 auto;
    background: var(--grad-primary);
    border-radius: 40px;
    padding: 80px 40px;
    text-align: center;
    position: relative; overflow: hidden;
    box-shadow: 0 20px 50px rgba(255, 122, 26, 0.2);
  }
  
  /* Decorative fluid circles inside CTA */
  .cta-fluid-card::before, .cta-fluid-card::after {
    content: ""; position: absolute; border-radius: 50%;
    background: rgba(255, 255, 255, 0.08); pointer-events: none;
  }
  .cta-fluid-card::before { width: 300px; height: 300px; top: -150px; left: -100px; }
  .cta-fluid-card::after { width: 250px; height: 250px; bottom: -100px; right: -80px; }

  .cta-fluid-card h2 { font-size: 38px; color: #121017; margin-bottom: 16px; }
  .cta-fluid-card p { color: #121017; font-size: 15.5px; margin-bottom: 36px; max-width: 500px; margin-left: auto; margin-right: auto; opacity: 0.85; }
  .btn-cta-dark {
    padding: 16px 36px; border-radius: 50px;
    background: #121017; color: #fff;
    font-family: var(--font-heading); font-weight: 700; font-size: 14.5px;
    text-decoration: none; display: inline-flex; align-items: center; gap: 8px;
    box-shadow: 0 10px 25px rgba(18, 16, 23, 0.3);
    transition: transform 0.25s;
    position: relative; z-index: 2;
  }
  .btn-cta-dark:hover { transform: translateY(-2px); }

  /* ===== FOOTER ===== */
  footer {
    background: #070609; padding: 80px 40px 40px;
    border-top: 1px solid var(--border);
  }
  .footer-grid {
    display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; gap: 50px;
    max-width: 1100px; margin: 0 auto 60px;
  }
  .footer-brand p { color: var(--text-dim); font-size: 13.5px; line-height: 1.7; margin: 20px 0; max-width: 280px; }
  .footer-socials { display: flex; gap: 12px; }
  .footer-socials a {
    width: 38px; height: 38px; border-radius: 50%;
    border: 1px solid var(--border);
    display: flex; align-items: center; justify-content: center;
    color: var(--text-dim); text-decoration: none;
    transition: all 0.3s;
  }
  .footer-socials a:hover { border-color: var(--gold); color: var(--gold); background: rgba(255, 179, 71, 0.04); }
  
  .footer-col h5 { color: #fff; font-size: 14.5px; margin-bottom: 24px; font-weight: 700; }
  .footer-col a { display: block; color: var(--text-dim); text-decoration: none; font-size: 13.5px; margin-bottom: 12px; transition: color 0.2s; }
  .footer-col a:hover { color: var(--gold); }
  
  .footer-bottom {
    max-width: 1100px; margin: 0 auto; padding-top: 30px; border-top: 1px solid var(--border);
    display: flex; justify-content: space-between; align-items: center;
    color: var(--text-dim); font-size: 13px;
  }

  /* WhatsApp Floating Wrapper */
  .wa-float-wrapper {
    position: fixed; bottom: 30px; right: 30px; z-index: 200;
    display: flex; align-items: center; justify-content: flex-end;
  }
  /* Pulsing Background Wave */
  .wa-pulse-bg {
    position: absolute;
    width: 64px; height: 64px; border-radius: 50%;
    z-index: 1;
    pointer-events: none;
    opacity: 0.45;
    background-color: #25D366;
    /* Combines 2s radar scale pulse with 6s color sync slide */
    animation: 
      wa-glow-pulse 2s infinite ease-out,
      wa-pulse-color 6s infinite ease-in-out;
    right: 0;
  }
  /* Main Interactive Button */
  .wa-float-pill {
    position: relative; z-index: 2;
    width: 64px; height: 64px; border-radius: 50px;
    background-color: #25D366; /* Base Green */
    display: flex; align-items: center; justify-content: center;
    cursor: pointer;
    transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    overflow: hidden;
    white-space: nowrap;
    padding: 0 17px;
    gap: 0;
    /* Scale, shadow and state pulsing */
    animation: wa-button-pulse 6s infinite ease-in-out;
  }
  /* Sliding Gold Background Overlay */
  .wa-float-pill::before {
    content: "";
    position: absolute;
    top: -60%;
    left: -60%;
    width: 220%;
    height: 220%;
    background-color: var(--accent); /* Gold color */
    transform: rotate(-45deg) translateY(-120%); /* Start off-screen top-left */
    z-index: 1;
    pointer-events: none;
    /* Smooth diagonal sliding animation */
    animation: wa-slide-diagonal 6s infinite ease-in-out;
  }
  .wa-icon {
    font-size: 30px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    z-index: 2;
    /* Synchronized color transition */
    animation: wa-content-color 6s infinite ease-in-out;
  }
  .wa-text {
    font-family: var(--font-heading);
    font-size: 15px; font-weight: 700;
    max-width: 0; opacity: 0;
    transition: max-width 0.35s ease, opacity 0.2s ease, margin-left 0.35s ease;
    flex-shrink: 0;
    position: relative;
    z-index: 2;
    /* Synchronized color transition */
    animation: wa-content-color 6s infinite ease-in-out;
  }
  .wa-float-pill:hover {
    animation: none; /* Pause pulsing when hovered */
    background-color: #25D366; /* Lock to WhatsApp green on interaction */
    color: #ffffff;
    transform: scale(1.05); /* Stable expanded state */
    width: 195px;
    padding: 0 24px 0 20px;
    box-shadow: 0 10px 35px rgba(37, 211, 102, 0.6);
  }
  .wa-float-pill:hover::before {
    animation: none;
    transform: rotate(-45deg) translateY(-120%);
    opacity: 0;
  }
  .wa-float-pill:hover .wa-icon,
  .wa-float-pill:hover .wa-text {
    animation: none; /* Stop color shifting on hover */
    color: #ffffff; /* Lock to white text/icon */
  }
  .wa-float-pill:hover .wa-text {
    max-width: 130px; opacity: 1;
    margin-left: 12px;
  }
  /* Pulsing Gelombang Animation */
  @keyframes wa-glow-pulse {
    0% {
      transform: scale(1);
      opacity: 0.5;
      box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
    }
    70% {
      transform: scale(1.6);
      opacity: 0;
      box-shadow: 0 0 0 15px rgba(37, 211, 102, 0);
    }
    100% {
      transform: scale(1);
      opacity: 0;
      box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
    }
  }

  /* Pulsing Container Animation (Scale + Box Shadow Sync) */
  @keyframes wa-button-pulse {
    0%, 15%, 85%, 100% {
      transform: scale(1);
      box-shadow: 0 8px 30px rgba(37, 211, 102, 0.45);
    }
    40%, 60% {
      transform: scale(1.08); /* Gentle scale up when gold covers */
      box-shadow: 0 8px 30px rgba(212, 175, 55, 0.6);
    }
  }

  /* Diagonal Sliding Animation */
  @keyframes wa-slide-diagonal {
    0%, 15% {
      /* Green state: Gold overlay is completely off-screen at top-left */
      transform: rotate(-45deg) translateY(-120%);
    }
    40%, 60% {
      /* Gold state: Gold overlay slides down and covers the button */
      transform: rotate(-45deg) translateY(0%);
    }
    85%, 100% {
      /* Return to Green state: Gold overlay slides back up-left to top-left */
      transform: rotate(-45deg) translateY(-120%);
    }
  }

  /* Content Color Interval Animation */
  @keyframes wa-content-color {
    0%, 27.4% {
      color: #ffffff; /* White text/icon on green background */
    }
    27.5%, 72.5% {
      color: #121017; /* Dark text/icon on gold background */
    }
    72.6%, 100% {
      color: #ffffff; /* White text/icon on green background */
    }
  }

  /* Wave Color Sync Animation */
  @keyframes wa-pulse-color {
    0%, 27.4% {
      background-color: #25D366;
    }
    27.5%, 72.5% {
      background-color: var(--accent); /* Sync to gold pulse */
    }
    72.6%, 100% {
      background-color: #25D366;
    }
  }

  /* ===== RESPONSIVE FLUID LAYOUTS ===== */
  @media (max-width: 1024px) {
    .hero-inner { flex-direction: column; text-align: center; padding-top: 140px; gap: 40px; }
    .hero-content { display: flex; flex-direction: column; align-items: center; }
    .hero-actions { justify-content: center; }
    .hero-stats-row { justify-content: center; }
    .hero-visual-area { width: 100%; }
    .fluid-blob { width: 320px; height: 320px; }
    .floating-blob-label { left: 50%; transform: translateX(-50%); bottom: -20px; }

    .svc-card {
      padding: 30px;
    }
    .svc-img-wrapper {
      width: 260px;
      height: 170px;
    }

    .portfolio-masonry { grid-template-columns: 1fr 1fr; }
    .port-card.wide { grid-column: span 1; }
    .bubble-roster-layout { grid-template-columns: 1fr 1fr; }
    .footer-grid { grid-template-columns: 1fr 1fr; }
    section { padding: 80px 24px; }
    .event-vouchers-list {
      padding: 20px 18px;
      border-radius: 22px;
    }
    .event-vouchers-list::before {
      top: -20px;
      margin: -20px -18px 0;
    }
    .event-vouchers-list::after {
      bottom: -20px;
      margin: 0 -18px -20px;
    }
    footer { padding: 60px 24px 20px; }
  }

  @media (max-width: 768px) {
    .svc-card {
      flex-direction: column;
      align-items: flex-start;
      gap: 24px;
    }
    .svc-img-wrapper {
      width: 100%;
      height: 200px;
    }
  }

  @media (max-width: 600px) {
    .hero-content h1 { font-size: 40px; }
    .hero-stats-row { flex-direction: column; gap: 14px; width: 100%; }
    .stat-bubble { align-items: center; }
    .portfolio-masonry { grid-template-columns: 1fr; }
    .bubble-roster-layout { grid-template-columns: 1fr; }
    .voucher-pill {
      flex-direction: column;
      align-items: flex-start;
      gap: 16px;
      border-radius: 24px;
      padding: 20px;
    }
    .voucher-right {
      width: 100%;
      display: flex;
      justify-content: flex-end;
    }
    .event-vouchers-list {
      max-height: 480px;
      padding: 16px 12px;
      border-radius: 20px;
    }
    .event-vouchers-list::before {
      top: -16px;
      margin: -16px -12px 0;
    }
    .event-vouchers-list::after {
      bottom: -16px;
      margin: 0 -12px -16px;
    }
    .cta-fluid-card { padding: 50px 20px; border-radius: 30px; }
    .cta-fluid-card h2 { font-size: 28px; }
    .footer-grid { grid-template-columns: 1fr; gap: 30px; }
    .footer-bottom { flex-direction: column; gap: 14px; text-align: center; }
  }

  /* Scroll Reveal Animations */
  .reveal {
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 0.8s cubic-bezier(0.2, 0.8, 0.2, 1), transform 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
    will-change: opacity, transform;
  }
  .reveal.active {
    opacity: 1;
    transform: translateY(0);
  }
  .reveal-zoom {
    opacity: 0;
    transform: scale(0.9);
    transition: opacity 0.8s cubic-bezier(0.2, 0.8, 0.2, 1), transform 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
    will-change: opacity, transform;
  }
  .reveal-zoom.active {
    opacity: 1;
    transform: scale(1);
  }

  /* Staggering delays for cards in grids */
  .services-flex-grid .svc-card:nth-child(1) { transition-delay: 0ms; }
  .services-flex-grid .svc-card:nth-child(2) { transition-delay: 100ms; }
  .services-flex-grid .svc-card:nth-child(3) { transition-delay: 200ms; }
  .services-flex-grid .svc-card:nth-child(4) { transition-delay: 300ms; }
  .services-flex-grid .svc-card:nth-child(5) { transition-delay: 400ms; }
  .services-flex-grid .svc-card:nth-child(6) { transition-delay: 500ms; }

  .bubble-roster-layout .bubble-card:nth-child(1) { transition-delay: 0ms; }
  .bubble-roster-layout .bubble-card:nth-child(2) { transition-delay: 100ms; }
  .bubble-roster-layout .bubble-card:nth-child(3) { transition-delay: 200ms; }
  .bubble-roster-layout .bubble-card:nth-child(4) { transition-delay: 300ms; }
  .bubble-roster-layout .bubble-card:nth-child(5) { transition-delay: 400ms; }
  .bubble-roster-layout .bubble-card:nth-child(6) { transition-delay: 500ms; }

  .portfolio-masonry .port-card:nth-child(1) { transition-delay: 0ms; }
  .portfolio-masonry .port-card:nth-child(2) { transition-delay: 150ms; }
  .portfolio-masonry .port-card:nth-child(3) { transition-delay: 300ms; }
  .portfolio-masonry .port-card:nth-child(4) { transition-delay: 0ms; }
  .portfolio-masonry .port-card:nth-child(5) { transition-delay: 150ms; }
  .portfolio-masonry .port-card:nth-child(6) { transition-delay: 300ms; }

  /* ===== QUICK NAVIGATION GRID ===== */
  .quick-nav-section {
    padding: 60px 40px 40px;
    max-width: 1200px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
  }
  .quick-nav-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
    margin-top: 0;
    min-height: 70vh; /* Takes up 70% of viewport height */
  }
  .quick-nav-card {
    background: var(--card-bg);
    border: 1px solid var(--border);
    border-radius: 32px;
    padding: 48px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: space-between;
    text-decoration: none;
    color: inherit;
    transition: transform 0.4s cubic-bezier(0.2, 0.8, 0.2, 1), border-color 0.4s ease, box-shadow 0.4s ease;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
    position: relative;
    overflow: hidden;
  }
  .quick-nav-card:hover {
    transform: scale(1.04) translateY(-4px);
    border-color: var(--gold);
    box-shadow: 
      0 20px 50px rgba(0, 0, 0, 0.5), 
      0 0 30px rgba(255, 210, 117, 0.15);
  }
  .quick-nav-card::before {
    content: "";
    position: absolute;
    inset: 0;
    z-index: 1;
    background-size: cover;
    background-position: center;
    transition: transform 0.6s cubic-bezier(0.2, 0.8, 0.2, 1), filter 0.6s ease;
    filter: brightness(0.4) saturate(0.7);
  }
  .quick-nav-card:hover::before {
    transform: scale(1.06);
    filter: brightness(0.55) saturate(1.0);
  }
  
  .quick-nav-card.card-kreatif::before {
    background-image: linear-gradient(180deg, rgba(18, 16, 23, 0.2) 0%, rgba(18, 16, 23, 0.95) 100%), url('https://images.unsplash.com/photo-1492691527719-9d1e07e534b4?w=600&q=80');
  }
  .quick-nav-card.card-fasilitas::before {
    background-image: linear-gradient(180deg, rgba(18, 16, 23, 0.2) 0%, rgba(18, 16, 23, 0.95) 100%), url('https://images.unsplash.com/photo-1511578314322-379afb476865?w=600&q=80');
  }
  .quick-nav-card.card-kru::before {
    background-image: linear-gradient(180deg, rgba(18, 16, 23, 0.2) 0%, rgba(18, 16, 23, 0.95) 100%), url('https://images.unsplash.com/photo-1506157786151-b8491531f063?w=600&q=80');
  }
  .quick-nav-card.card-portofolio::before {
    background-image: linear-gradient(180deg, rgba(18, 16, 23, 0.2) 0%, rgba(18, 16, 23, 0.95) 100%), url('https://images.unsplash.com/photo-1516035069371-29a1b244cc32?w=600&q=80');
  }

  .quick-nav-icon-box {
    width: 80px;
    height: 80px;
    border-radius: 20px;
    background: rgba(255, 179, 71, 0.05);
    border: 1px solid rgba(255, 179, 71, 0.15);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--gold);
    font-size: 36px;
    flex-shrink: 0;
    transition: background 0.3s ease, color 0.3s ease, border-color 0.3s ease;
    position: relative;
    z-index: 2;
  }
  .quick-nav-card:hover .quick-nav-icon-box {
    background: var(--grad-primary);
    color: #121017;
    border-color: transparent;
    box-shadow: 0 0 15px var(--gold);
  }
  .quick-nav-details {
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin-top: 40px; /* distance to push details to the bottom */
    position: relative;
    z-index: 2;
  }
  .quick-nav-details h3 {
    font-size: 26px;
    color: #fff;
    font-weight: 800;
    transition: color 0.3s ease;
    letter-spacing: -0.5px;
  }
  .quick-nav-card:hover .quick-nav-details h3 {
    color: var(--gold);
  }
  .quick-nav-details p {
    font-size: 15px;
    color: var(--text-dim);
    line-height: 1.6;
  }

  .quick-nav-grid .quick-nav-card:nth-child(1) { transition-delay: 0ms; }
  .quick-nav-grid .quick-nav-card:nth-child(2) { transition-delay: 100ms; }
  .quick-nav-grid .quick-nav-card:nth-child(3) { transition-delay: 200ms; }
  .quick-nav-grid .quick-nav-card:nth-child(4) { transition-delay: 300ms; }

  @media (max-width: 1024px) {
    .quick-nav-grid {
      min-height: 50vh;
      gap: 20px;
    }
    .quick-nav-card {
      padding: 36px;
    }
    .quick-nav-details h3 {
      font-size: 22px;
    }
  }

  @media (max-width: 768px) {
    .quick-nav-section {
      padding: 40px 24px 20px;
    }
    .quick-nav-grid {
      grid-template-columns: 1fr;
      gap: 20px;
      min-height: auto;
      margin-top: 0;
    }
    .quick-nav-card {
      padding: 30px;
      min-height: auto;
      flex-direction: row;
      align-items: center;
      gap: 20px;
      border-radius: 20px;
    }
    .quick-nav-icon-box {
      width: 60px;
      height: 60px;
      font-size: 26px;
      border-radius: 14px;
    }
    .quick-nav-details {
      margin-top: 0;
      gap: 4px;
    }
    .quick-nav-details h3 {
      font-size: 20px;
    }
    .quick-nav-details p {
      font-size: 13.5px;
    }
  }
INLINE_ASSET
    );
}
// WEDDING_CSS
if (!defined('WEDDING_CSS')) {
    define('WEDDING_CSS', <<<'INLINE_ASSET'
/* ===== WEDDING & PRAWEDDING PAGE ===== */

/* Glow Blobs */
.wd-blob {
  position: fixed;
  border-radius: 50%;
  filter: blur(130px);
  opacity: 0.12;
  pointer-events: none;
  z-index: 0;
  animation: wdMorph 12s ease-in-out infinite alternate;
}
.wd-blob--l {
  width: 450px; height: 450px;
  background: var(--orange);
  top: 3%; left: -160px;
}
.wd-blob--r {
  width: 500px; height: 500px;
  background: var(--gold);
  bottom: 8%; right: -180px;
  animation-delay: 4s;
}
@keyframes wdMorph {
  0%   { border-radius: 50% 50% 60% 40% / 50% 60% 40% 50%; transform: translate(0,0) scale(1); }
  50%  { border-radius: 40% 60% 45% 55% / 55% 40% 60% 45%; transform: translate(25px,-25px) scale(1.06); }
  100% { border-radius: 55% 45% 35% 65% / 40% 55% 45% 60%; transform: translate(-15px,15px) scale(0.94); }
}

/* Scroll Reveal */
.wd-reveal {
  opacity: 0;
  transform: translateY(40px);
  transition: opacity .6s cubic-bezier(.25,.46,.45,.94), transform .6s cubic-bezier(.25,.46,.45,.94);
}
.wd-reveal.show {
  opacity: 1;
  transform: translateY(0);
}
.wd-reveal-zoom {
  opacity: 0;
  transform: scale(.92);
  transition: opacity .5s ease, transform .5s ease;
}
.wd-reveal-zoom.show {
  opacity: 1;
  transform: scale(1);
}

/* Section common */
.wd-section {
  position: relative;
  z-index: 1;
  max-width: 1200px;
  margin: 0 auto;
  padding: 90px 40px;
}
.wd-hero {
  padding-top: 140px;
  padding-bottom: 50px;
}
.wd-hero__inner {
  text-align: center;
  max-width: 780px;
  margin: 0 auto;
}
.wd-hero__tag {
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 11px;
  letter-spacing: 3px;
  text-transform: uppercase;
  color: var(--orange);
  display: inline-block;
  margin-bottom: 14px;
}
.wd-hero__title {
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 44px;
  color: #fff;
  line-height: 1.2;
  margin-bottom: 18px;
}
.wd-hero__title span {
  background: var(--grad-primary);
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
}
.wd-hero__desc {
  font-size: 15px;
  color: var(--text-dim);
  line-height: 1.85;
  max-width: 600px;
  margin: 0 auto;
}

/* Divider */
.wd-divider {
  max-width: 80px;
  margin: 0 auto 60px;
  height: 2px;
  background: var(--grad-primary);
  border-radius: 4px;
  opacity: .5;
}

/* Photo Duo Grid */
.wd-photo-duo {
  display: grid;
  grid-template-columns: 3fr 2fr;
  gap: 24px;
  margin-bottom: 60px;
  align-items: stretch;
}
.wd-photo-card {
  position: relative;
  border-radius: 20px;
  overflow: hidden;
  border: 1px solid var(--border);
  background: var(--card-bg);
  transition: all .35s ease;
}
.wd-photo-card:hover {
  transform: translateY(-4px);
  border-color: rgba(255,210,117,0.15);
  box-shadow: 0 16px 40px rgba(0,0,0,.3);
}
.wd-photo-card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform .5s ease;
}
.wd-photo-card:hover img {
  transform: scale(1.04);
}
.wd-photo-card__cap {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 40px 20px 16px;
  background: linear-gradient(transparent, rgba(0,0,0,.7));
  font-family: var(--font-heading);
  font-size: 12px;
  color: var(--gold);
  letter-spacing: 1px;
}
.wd-photo-card:first-child {
  grid-row: span 2;
}
.wd-photo-card--tall {
  min-height: 400px;
}
.wd-photo-card--slim {
  min-height: 190px;
}

/* Shorts Video Section */
.wd-shorts {
  max-width: 500px;
  margin: 0 auto 60px;
  text-align: center;
}
.wd-shorts h3 {
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 16px;
  color: var(--gold);
  margin-bottom: 18px;
  text-align: center;
}
.wd-shorts-card {
  background: var(--card-bg);
  border: 1px solid var(--border);
  border-radius: 20px;
  overflow: hidden;
  cursor: pointer;
  transition: all .35s ease;
}
.wd-shorts-card:hover {
  transform: translateY(-4px);
  border-color: rgba(255,210,117,0.15);
  box-shadow: 0 16px 40px rgba(0,0,0,.3);
}
.wd-shorts-card__thumb {
  position: relative;
  aspect-ratio: 9/16;
  overflow: hidden;
  background: #0d0b12;
}
.wd-shorts-card__thumb img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform .5s ease;
}
.wd-shorts-card:hover .wd-shorts-card__thumb img {
  transform: scale(1.04);
}
.wd-shorts-card__play {
  position: absolute;
  inset: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(0,0,0,0.25);
  transition: background .3s ease;
}
.wd-shorts-card:hover .wd-shorts-card__play {
  background: rgba(0,0,0,0.1);
}
.wd-shorts-card__play-icon {
  width: 56px;
  height: 56px;
  border-radius: 50%;
  background: rgba(212,175,55,0.9);
  color: #000;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all .3s ease;
  box-shadow: 0 4px 20px rgba(212,175,55,0.3);
}
.wd-shorts-card:hover .wd-shorts-card__play-icon {
  transform: scale(1.1);
  background: var(--accent);
}
.wd-shorts-card__play-icon svg {
  width: 24px;
  height: 24px;
  fill: #000;
  margin-left: 3px;
}
.wd-shorts-card__body {
  padding: 14px 18px;
  border-top: 1px solid var(--border);
}
.wd-shorts-card__body strong {
  font-family: var(--font-heading);
  font-size: 13px;
  color: var(--gold);
  display: block;
  margin-bottom: 2px;
}
.wd-shorts-card__body small {
  font-size: 11px;
  color: var(--text-dim);
}
.wd-shorts-card__body small a {
  color: var(--accent);
}
.wd-shorts-card__body small a:hover {
  color: var(--gold);
}

/* Content */
.wd-content {
  max-width: 900px;
  margin: 0 auto;
}
.wd-content h2 {
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 26px;
  color: #fff;
  margin-bottom: 18px;
  line-height: 1.3;
}
.wd-content h2 .hl {
  background: var(--grad-primary);
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
}
.wd-content h3 {
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 18px;
  color: var(--gold);
  margin-bottom: 12px;
  margin-top: 32px;
}
.wd-content p {
  font-size: 15px;
  color: var(--text-dim);
  line-height: 1.85;
  margin-bottom: 16px;
}
.wd-content ul {
  padding-left: 24px;
  margin-bottom: 20px;
}
.wd-content li {
  font-size: 15px;
  color: var(--text-dim);
  line-height: 1.85;
  margin-bottom: 8px;
}
.wd-content li strong {
  color: var(--text-main);
}
.wd-content hr {
  margin: 36px 0;
  border: none;
  height: 1px;
  background: var(--border);
}

/* Packages */
.wd-packages {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
  margin: 24px 0;
}
.wd-package {
  background: var(--card-bg);
  border: 1px solid var(--border);
  border-radius: 18px;
  padding: 28px 22px;
  text-align: center;
  transition: all .3s ease;
  position: relative;
}
.wd-package:hover {
  transform: translateY(-5px);
  border-color: rgba(255,210,117,0.15);
  box-shadow: 0 14px 35px rgba(0,0,0,.3);
}
.wd-package__icon {
  font-size: 32px;
  margin-bottom: 10px;
}
.wd-package h4 {
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 16px;
  color: var(--gold);
  margin-bottom: 8px;
}
.wd-package p {
  font-size: 13px;
  color: var(--text-dim);
  line-height: 1.6;
  margin: 0;
}

/* Service List */
.wd-service-list {
  display: grid;
  gap: 14px;
  margin-bottom: 20px;
}
.wd-service-item {
  background: var(--card-bg);
  border: 1px solid var(--border);
  border-left: 3px solid var(--accent);
  border-radius: 12px;
  padding: 18px 22px;
  transition: all .25s ease;
}
.wd-service-item:hover {
  background: rgba(212,175,55,0.03);
  border-color: rgba(255,210,117,0.1);
}
.wd-service-item strong {
  display: block;
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 13px;
  color: var(--gold);
  margin-bottom: 4px;
}
.wd-service-item span {
  font-size: 13px;
  color: var(--text-dim);
  line-height: 1.6;
}

/* CTA Box */
.wd-cta {
  text-align: center;
  padding: 50px 40px;
  margin-top: 40px;
  background: var(--card-bg);
  border: 1px solid var(--border);
  border-radius: 24px;
  position: relative;
  overflow: hidden;
}
.wd-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(circle at 70% 60%, rgba(212,175,55,.06), transparent 60%);
  pointer-events: none;
}
.wd-cta h2 {
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 24px;
  color: #fff;
  margin-bottom: 10px;
}
.wd-cta p {
  font-size: 15px;
  color: var(--text-dim);
  margin-bottom: 22px;
}
.wd-cta .wd-wa-btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 15px;
  padding: 16px 34px;
  border-radius: 50px;
  background: var(--grad-primary);
  color: #000 !important;
  box-shadow: 0 10px 30px rgba(179,134,34,0.3);
  transition: all .25s ease;
  text-decoration: none;
}
.wd-cta .wd-wa-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 14px 36px rgba(179,134,34,0.4);
}

/* Video Modal (shorts/vertical) */
.wd-modal {
  display: none;
  position: fixed;
  z-index: 99999;
  inset: 0;
  padding: 30px;
}
.wd-modal__backdrop {
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.92);
  backdrop-filter: blur(6px);
}
.wd-modal__content {
  position: relative;
  max-width: 500px;
  margin: 5% auto;
  z-index: 2;
}
.wd-modal__close {
  position: absolute;
  right: -8px;
  top: -36px;
  font-size: 36px;
  color: #fff;
  cursor: pointer;
  z-index: 3;
  transition: all .25s ease;
  background: none;
  border: none;
  line-height: 1;
}
.wd-modal__close:hover {
  color: var(--accent);
  transform: rotate(90deg);
}
.wd-modal__wrap {
  position: relative;
  padding-bottom: 177.78%;
  height: 0;
  overflow: hidden;
  border-radius: 16px;
  background: #000;
  border: 1px solid var(--border);
}
.wd-modal__wrap iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: none;
}

/* Responsive */
@media (max-width: 1024px) {
  .wd-photo-duo { grid-template-columns: 1fr; }
  .wd-photo-card:first-child { grid-row: span 1; }
  .wd-packages { grid-template-columns: repeat(2, 1fr); }
  .wd-hero__title { font-size: 38px; }
  .wd-section { padding: 70px 30px; }
  .wd-cta { padding: 40px 24px; }
}

@media (max-width: 768px) {
  .wd-section { padding: 56px 22px; }
  .wd-hero { padding-top: 120px; }
  .wd-hero__title { font-size: 30px; }
  .wd-hero__desc { font-size: 14px; }
  .wd-packages { grid-template-columns: 1fr; }
  .wd-content h2 { font-size: 22px; }
  .wd-service-item { padding: 14px 16px; }
  .wd-modal { padding: 16px; }
  .wd-modal__content { margin: 15% auto; }
  .wd-modal__close { right: 0; top: -32px; font-size: 30px; }
}

@media (max-width: 600px) {
  .wd-hero__title { font-size: 28px; }
  .wd-section { padding: 50px 18px; }
  .wd-cta { padding: 32px 18px; }
  .wd-cta h2 { font-size: 20px; }
}

INLINE_ASSET
    );
}
// LANDING_JS
if (!defined('LANDING_JS')) {
    define('LANDING_JS', <<<'INLINE_ASSET'
// Scroll Reveal Animation
document.addEventListener('DOMContentLoaded', () => {
  const reveals = document.querySelectorAll('.reveal, .reveal-zoom');
  
  const revealOptions = {
    threshold: 0.15,
    rootMargin: '0px 0px -50px 0px'
  };
  
  const revealOnScroll = new IntersectionObserver(function(entries, observer) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('active');
        observer.unobserve(entry.target);
      }
    });
  }, revealOptions);
  
  reveals.forEach(reveal => {
    revealOnScroll.observe(reveal);
  });
});
INLINE_ASSET
    );
}
// PORTFOLIO_JS
if (!defined('PORTFOLIO_JS')) {
    define('PORTFOLIO_JS', <<<'INLINE_ASSET'
jQuery(document).ready(function($) {
    let currentType = 'image'; // 'image' or 'video'
    let currentCategory = 'semua';
    let currentSearch = '';
    let currentSort = 'newest_post';
    let currentOffset = 0;

    const $grid = $('#portfolio-grid-container');
    const $loadMoreBtn = $('#portfolio-load-more');

    function fetchPortfolios(isAppend = false) {
        if (!isAppend) {
            currentOffset = 0;
            $grid.css('opacity', '0.5');
        }

        $.ajax({
            url: portfolio_ajax_obj.ajax_url,
            type: 'POST',
            data: {
                action: 'portfolio_content_ajax',
                type: currentType,
                category: currentCategory,
                search: currentSearch,
                sort: currentSort,
                offset: currentOffset
            },
            success: function(response) {
                $grid.css('opacity', '1');
                if (isAppend) {
                    if (response.trim() === '') {
                        $loadMoreBtn.hide();
                    } else {
                        $grid.append(response);
                        currentOffset += 12;
                    }
                } else {
                    $grid.html(response);
                    currentOffset = 12;
                    $loadMoreBtn.show();
                }

                // If response is shorter or empty, hide the load more button
                let newItemsCount = $(response).filter('.porto-card').length;
                if (newItemsCount < 12) {
                    $loadMoreBtn.hide();
                } else {
                    $loadMoreBtn.show();
                }
            },
            error: function() {
                $grid.css('opacity', '1');
            }
        });
    }

    // Toggle Foto / Video
    $('.porto-toggle-btn').on('click', function(e) {
        e.preventDefault();
        $('.porto-toggle-btn').removeClass('active');
        $(this).addClass('active');

        let isVideo = $(this).text().toLowerCase().includes('video');
        currentType = isVideo ? 'video' : 'image';
        fetchPortfolios(false);
    });

    // Category Filters
    $('.porto-filter-btn').on('click', function(e) {
        e.preventDefault();
        $('.porto-filter-btn').removeClass('active');
        $(this).addClass('active');

        currentCategory = $(this).data('category') || 'semua';
        fetchPortfolios(false);
    });

    // Search trigger
    $('.porto-search-btn').on('click', function(e) {
        e.preventDefault();
        currentSearch = $('.porto-search-input').val();
        fetchPortfolios(false);
    });

    $('.porto-search-input').on('keypress', function(e) {
        if (e.which === 13) { // Enter key
            e.preventDefault();
            currentSearch = $(this).val();
            fetchPortfolios(false);
        }
    });

    // Sort select
    $('.porto-sort-select').on('change', function() {
        currentSort = $(this).val();
        fetchPortfolios(false);
    });

    // Load More button
    $loadMoreBtn.on('click', function(e) {
        e.preventDefault();
        fetchPortfolios(true);
    });

    // Initial Fetch
    fetchPortfolios(false);

    // Scroll Reveal Animation (IntersectionObserver)
    const reveals = document.querySelectorAll('.reveal, .reveal-zoom');
    const revealOptions = {
        threshold: 0.15,
        rootMargin: "0px 0px -50px 0px"
    };
    
    const revealOnScroll = new IntersectionObserver(function(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target);
            }
        });
    }, revealOptions);
    
    reveals.forEach(reveal => {
        revealOnScroll.observe(reveal);
    });
});

INLINE_ASSET
    );
}
// DIRECTORY_JS
if (!defined('DIRECTORY_JS')) {
    define('DIRECTORY_JS', <<<'INLINE_ASSET'
/* DIRECTORY INTERACTIVE MAP & PANEL LOGIC */
jQuery(document).ready(function($) {
  /* ============================================================
     BASE 20 REAL PERSONNEL
  ============================================================ */
  const BASE_PERSONNEL = [
    { name:'isai-0071-F', lat:-6.2250, lng:106.9000, location:'Jakarta Timur, DKI Jakarta', tags:['Fotografer'], badge:'1-3Jt', icon:'fa-camera', gender:'Male', province:'DKI Jakarta', city:'Jakarta Timur', photo:'https://images.unsplash.com/photo-1583195764036-6dc248ac07d9?w=600&q=80', age:30, porto:0 },
    { name:'Dani-0069-FV', lat:-6.1751, lng:106.8272, location:'Jakarta Pusat, DKI Jakarta', tags:['Fotografer','Videografer'], badge:'< 1Jt', icon:'fa-video', gender:'Male', province:'DKI Jakarta', city:'Jakarta Pusat', photo:'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?w=600&q=80', age:39, porto:3 },
    { name:'Krisnhha-0068-D', lat:-7.1603, lng:112.6566, location:'Gresik, Jawa Timur', tags:['Drone'], badge:'1-3Jt', icon:'fa-paper-plane', gender:'Male', province:'Jawa Timur', city:'Gresik', photo:'https://images.unsplash.com/photo-1473968512647-3e447244af8f?w=600&q=80', age:20, porto:1 },
    { name:'Deni-0067-FVDE', lat:-6.9175, lng:107.6191, location:'Bandung, Jawa Barat', tags:['Fotografer','Videografer','Drone','Editor'], badge:'1-3Jt', icon:'fa-video', gender:'Male', province:'Jawa Barat', city:'Bandung', photo:'https://images.unsplash.com/photo-1516214104703-d2a1462c0ce6?w=600&q=80', age:null, porto:0 },
    { name:'gunawan-0066-FVE', lat:-6.1104, lng:106.1622, location:'Serang, Banten', tags:['Fotografer','Videografer','Editor'], badge:'< 1Jt', icon:'fa-camera', gender:'Male', province:'Banten', city:'Serang', photo:null, age:22, porto:0 },
    { name:'Ali-0065-FVDA', lat:-6.5971, lng:106.7986, location:'Bogor, Jawa Barat', tags:['Fotografer','Videografer','Drone','Animator'], badge:'1-3Jt', icon:'fa-paper-plane', gender:'Male', province:'Jawa Barat', city:'Bogor', photo:'https://images.unsplash.com/photo-1543269664-7eef42226a21?w=600&q=80', age:41, porto:0 },
    { name:'Rania-0064-FE', lat:-6.2088, lng:106.8456, location:'Jakarta Selatan, DKI Jakarta', tags:['Fotografer','Editor'], badge:'1-3Jt', icon:'fa-camera', gender:'Female', province:'DKI Jakarta', city:'Jakarta Selatan', photo:'https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?w=600&q=80', age:27, porto:5 },
    { name:'Budi-0063-VD', lat:-7.2575, lng:112.7521, location:'Surabaya, Jawa Timur', tags:['Videografer','Drone'], badge:'1-3Jt', icon:'fa-video', gender:'Male', province:'Jawa Timur', city:'Surabaya', photo:'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600&q=80', age:34, porto:7 },
    { name:'Sari-0062-FVE', lat:-8.6705, lng:115.2126, location:'Denpasar, Bali', tags:['Fotografer','Videografer','Editor'], badge:'3-5Jt', icon:'fa-camera', gender:'Female', province:'Bali', city:'Denpasar', photo:'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=600&q=80', age:29, porto:12 },
    { name:'Hendra-0061-D', lat:-7.0051, lng:110.4381, location:'Semarang, Jawa Tengah', tags:['Drone'], badge:'1-3Jt', icon:'fa-paper-plane', gender:'Male', province:'Jawa Tengah', city:'Semarang', photo:'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=600&q=80', age:31, porto:3 },
    { name:'Maya-0060-FV', lat:3.5896, lng:98.6736, location:'Medan, Sumatera Utara', tags:['Fotografer','Videografer'], badge:'< 1Jt', icon:'fa-camera', gender:'Female', province:'Sumatera Utara', city:'Medan', photo:'https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?w=600&q=80', age:25, porto:2 },
    { name:'Rizky-0059-FVDE', lat:-7.7956, lng:110.3695, location:'Yogyakarta', tags:['Fotografer','Videografer','Drone','Editor'], badge:'3-5Jt', icon:'fa-video', gender:'Male', province:'DI Yogyakarta', city:'Yogyakarta', photo:'https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?w=600&q=80', age:28, porto:9 },
    { name:'Nadia-0058-FE', lat:-6.3021, lng:107.3008, location:'Bekasi, Jawa Barat', tags:['Fotografer','Editor'], badge:'1-3Jt', icon:'fa-camera', gender:'Female', province:'Jawa Barat', city:'Bekasi', photo:'https://images.unsplash.com/photo-1517841905240-472988babdf9?w=600&q=80', age:23, porto:4 },
    { name:'Fajar-0057-VDA', lat:-7.5755, lng:110.8243, location:'Solo, Jawa Tengah', tags:['Videografer','Drone','Animator'], badge:'1-3Jt', icon:'fa-paper-plane', gender:'Male', province:'Jawa Tengah', city:'Solo', photo:'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=600&q=80', age:35, porto:6 },
    { name:'Putri-0056-F', lat:-6.2615, lng:106.9991, location:'Bekasi, Jawa Barat', tags:['Fotografer'], badge:'< 1Jt', icon:'fa-camera', gender:'Female', province:'Jawa Barat', city:'Bekasi', photo:'https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=600&q=80', age:21, porto:1 },
    { name:'Wahyu-0055-VE', lat:-8.1085, lng:114.3658, location:'Banyuwangi, Jawa Timur', tags:['Videografer','Editor'], badge:'1-3Jt', icon:'fa-video', gender:'Male', province:'Jawa Timur', city:'Banyuwangi', photo:'https://images.unsplash.com/photo-1552058544-f2b08422138a?w=600&q=80', age:33, porto:5 },
    { name:'Citra-0054-FVD', lat:-5.1477, lng:119.4327, location:'Makassar, Sulawesi Selatan', tags:['Fotografer','Videografer','Drone'], badge:'1-3Jt', icon:'fa-paper-plane', gender:'Female', province:'Sulawesi Selatan', city:'Makassar', photo:'https://images.unsplash.com/photo-1509967419530-da38b4704bc6?w=600&q=80', age:26, porto:3 },
    { name:'Eko-0053-FVDE', lat:-6.1944, lng:106.8229, location:'Jakarta Barat, DKI Jakarta', tags:['Fotografer','Videografer','Drone','Editor'], badge:'3-5Jt', icon:'fa-video', gender:'Male', province:'DKI Jakarta', city:'Jakarta Barat', photo:'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=600&q=80', age:38, porto:15 },
    { name:'Leni-0052-F', lat:-0.9191, lng:119.8707, location:'Palu, Sulawesi Tengah', tags:['Fotografer'], badge:'< 1Jt', icon:'fa-camera', gender:'Female', province:'Sulawesi Tengah', city:'Palu', photo:'https://images.unsplash.com/photo-1499952127939-9bbf5af6c51c?w=600&q=80', age:24, porto:0 },
    { name:'Arif-0051-VDA', lat:-7.9839, lng:112.6214, location:'Malang, Jawa Timur', tags:['Videografer','Drone','Animator'], badge:'1-3Jt', icon:'fa-paper-plane', gender:'Male', province:'Jawa Timur', city:'Malang', photo:'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=600&q=80', age:30, porto:8 }
  ];

  /* ============================================================
     GENERATE 45 MORE ENTRIES (total ~65)
  ============================================================ */
  (function() {
    const names = ['Agus','Bagas','Cahyo','Dita','Elsa','Fauzi','Gita','Hafiz','Irma','Jihan','Kurnia','Oki','Tono','Umar','Vina','Xandra','Yogi','Zahra','Ardi','Guntur','Indra','Joko','Dewi'];
    const genderMap = {Agus:'Male',Bagas:'Male',Cahyo:'Male',Dita:'Female',Elsa:'Female',Fauzi:'Male',Gita:'Female',Hafiz:'Male',Irma:'Female',Jihan:'Female',Kurnia:'Male',Oki:'Male',Tono:'Male',Umar:'Male',Vina:'Female',Xandra:'Female',Yogi:'Male',Zahra:'Female',Ardi:'Male',Guntur:'Male',Indra:'Male',Joko:'Male',Dewi:'Female'};
    const skillCombos = [
      {tags:['Fotografer'],icon:'fa-camera'},
      {tags:['Videografer'],icon:'fa-video'},
      {tags:['Drone'],icon:'fa-paper-plane'},
      {tags:['Editor'],icon:'fa-film'},
      {tags:['Fotografer','Videografer'],icon:'fa-video'},
      {tags:['Fotografer','Editor'],icon:'fa-camera'},
      {tags:['Videografer','Drone'],icon:'fa-paper-plane'},
      {tags:['Fotografer','Videografer','Editor'],icon:'fa-video'},
      {tags:['Videografer','Drone','Animator'],icon:'fa-paper-plane'},
      {tags:['Fotografer','Videografer','Drone'],icon:'fa-paper-plane'},
      {tags:['Fotografer','Videografer','Drone','Editor'],icon:'fa-video'},
      {tags:['Fotografer','Videografer','Drone','Animator'],icon:'fa-paper-plane'},
      {tags:['Videografer','Editor'],icon:'fa-video'},
      {tags:['Fotografer','Videografer','Drone','Editor'],icon:'fa-video'}
    ];
    const cityPool = [
      {city:'Palembang',province:'Sumatera Selatan',lat:-2.9761,lng:104.7754},
      {city:'Pekanbaru',province:'Riau',lat:0.5071,lng:101.4478},
      {city:'Padang',province:'Sumatera Barat',lat:-0.9198,lng:100.3531},
      {city:'Jambi',province:'Jambi',lat:-1.6101,lng:103.6131},
      {city:'Bengkulu',province:'Bengkulu',lat:-3.8004,lng:102.2655},
      {city:'Bandar Lampung',province:'Lampung',lat:-5.4294,lng:105.2610},
      {city:'Pontianak',province:'Kalimantan Barat',lat:-0.0263,lng:109.3425},
      {city:'Balikpapan',province:'Kalimantan Timur',lat:-1.2654,lng:116.8312},
      {city:'Samarinda',province:'Kalimantan Timur',lat:-0.5022,lng:117.1536},
      {city:'Banjarmasin',province:'Kalimantan Selatan',lat:-3.3194,lng:114.5908},
      {city:'Palangkaraya',province:'Kalimantan Tengah',lat:-2.2161,lng:113.9135},
      {city:'Manado',province:'Sulawesi Utara',lat:1.4748,lng:124.8421},
      {city:'Gorontalo',province:'Gorontalo',lat:0.5435,lng:123.0595},
      {city:'Kendari',province:'Sulawesi Tenggara',lat:-3.9985,lng:122.5129},
      {city:'Mataram',province:'Nusa Tenggara Barat',lat:-8.5833,lng:116.1167},
      {city:'Kupang',province:'Nusa Tenggara Timur',lat:-10.1771,lng:123.6070},
      {city:'Ambon',province:'Maluku',lat:-3.6954,lng:128.1814},
      {city:'Jayapura',province:'Papua',lat:-2.5337,lng:140.7181},
      {city:'Sorong',province:'Papua Barat',lat:-0.8617,lng:131.2520},
      {city:'Ternate',province:'Maluku Utara',lat:0.7833,lng:127.3667},
      {city:'Mamuju',province:'Sulawesi Barat',lat:-2.6750,lng:118.8867},
      {city:'Madiun',province:'Jawa Timur',lat:-7.6298,lng:111.5239},
      {city:'Depok',province:'Jawa Barat',lat:-6.4025,lng:106.7942},
      {city:'Tangerang',province:'Banten',lat:-6.1781,lng:106.6300},
      {city:'Jakarta Utara',province:'DKI Jakarta',lat:-6.1382,lng:106.8663}
    ];
    const badges = ['< 1Jt','1-3Jt','1-3Jt','1-3Jt','3-5Jt','3-5Jt','5Jt+'];
    const malePhotos = [
      'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=600&q=80',
      'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=600&q=80',
      'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=600&q=80',
      'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600&q=80',
      'https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?w=600&q=80',
      'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=600&q=80',
      'https://images.unsplash.com/photo-1552058544-f2b08422138a?w=600&q=80',
      'https://images.unsplash.com/photo-1543269664-7eef42226a21?w=600&q=80',
      'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?w=600&q=80',
      'https://images.unsplash.com/photo-1516214104703-d2a1462c0ce6?w=600&q=80',
      'https://images.unsplash.com/photo-1473968512647-3e447244af8f?w=600&q=80',
      'https://images.unsplash.com/photo-1583195764036-6dc248ac07d9?w=600&q=80'
    ];
    const femalePhotos = [
      'https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?w=600&q=80',
      'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=600&q=80',
      'https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?w=600&q=80',
      'https://images.unsplash.com/photo-1517841905240-472988babdf9?w=600&q=80',
      'https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=600&q=80',
      'https://images.unsplash.com/photo-1499952127939-9bbf5af6c51c?w=600&q=80',
      'https://images.unsplash.com/photo-1509967419530-da38b4704bc6?w=600&q=80'
    ];

    let id = 50;
    let ni = 0, ci = 0, ski = 0, bi = 0, mpi = 0, fpi = 0;

    for (let i = 0; i < 45; i++) {
      const firstName = names[ni % names.length];
      const gender = genderMap[firstName];
      const skill = skillCombos[ski % skillCombos.length];
      const cityEntry = cityPool[ci % cityPool.length];
      const badge = badges[bi % badges.length];
      const skillCode = skill.tags.map(t=>({Fotografer:'F',Videografer:'V',Drone:'D',Editor:'E',Animator:'A'}[t])).join('');
      const name = `${firstName}-00${String(id).padStart(2,'0')}-${skillCode}`;
      const porto = [0,0,1,2,3,4,5,6,7,8,0,1,2,3][i % 14];
      const age = 19 + (i * 7 % 27);
      const photo = gender === 'Male' ? malePhotos[mpi % malePhotos.length] : femalePhotos[fpi % femalePhotos.length];
      const latJitter = (i % 3 - 1) * 0.04;
      const lngJitter = (i % 5 - 2) * 0.04;

      BASE_PERSONNEL.push({
        name, lat: cityEntry.lat + latJitter, lng: cityEntry.lng + lngJitter,
        location: `${cityEntry.city}, ${cityEntry.province}`,
        tags: skill.tags, badge, icon: skill.icon, gender,
        province: cityEntry.province, city: cityEntry.city,
        photo, age, porto
      });

      id--; ni++; ci++; ski++; bi++;
      if (gender === 'Male') mpi++; else fpi++;
    }
  })();

  const personnelData = BASE_PERSONNEL;

  /* ============================================================
     PORTFOLIO IMAGES
  ============================================================ */
  const portoImages = [
    'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=400&q=80',
    'https://images.unsplash.com/photo-1540039155733-5bb30b53aa14?w=400&q=80',
    'https://images.unsplash.com/photo-1492684223066-81342ee5ff30?w=400&q=80',
    'https://images.unsplash.com/photo-1506157786151-b8491531f063?w=400&q=80',
    'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&q=80'
  ];

  /* ============================================================
     HELPERS
  ============================================================ */
  function getTagClass(tag){return{Fotografer:'tag-foto',Videografer:'tag-video',Drone:'tag-drone',Editor:'tag-editor',Animator:'tag-animator'}[tag]||'tag-foto';}
  function safeId(name){return 'acc-'+name.replace(/[^a-zA-Z0-9_-]/g,'_');}

  /* ============================================================
     BUILD ACCORDION HTML
  ============================================================ */
  function buildAccordionHTML(p){
    const avatarHTML=p.photo
      ?`<img src="${p.photo}" alt="${p.name}" loading="lazy" onerror="this.parentNode.innerHTML='<div class=\\'avatar-placeholder\\'><i class=\\'fas fa-user\\'></i></div>'">`
      :`<div class="avatar-placeholder"><i class="fas fa-user"></i></div>`;
    const tagsHTML=p.tags.map(t=>`<span class="tag-chip ${getTagClass(t)}">${t}</span>`).join('');
    const fullPhotoHTML=p.photo
      ?`<img src="${p.photo}" alt="${p.name}" loading="lazy" style="width:100%;height:100%;object-fit:cover;">`
      :`<div style="display:flex;align-items:center;justify-content:center;width:100%;height:100%;"><i class="fas fa-user" style="color:var(--text-muted);font-size:26px;"></i></div>`;
    const ageText=(p.age!==null&&p.age!==undefined)?`${p.age} tahun`:'Usia tidak tertera';
    let portoHTML;
    if(p.porto>0){
      const thumbs=Array.from({length:Math.min(p.porto,6)}).map((_,i)=>`<div class="portfolio-thumb"><img src="${portoImages[i%portoImages.length]}" alt="Karya ${i+1}" loading="lazy"></div>`).join('');
      portoHTML=`<div class="portfolio-grid">${thumbs}</div>`;
    }else{
      portoHTML=`<div class="portfolio-fallback"><i class="fas fa-image"></i><p>Belum ada karya</p></div>`;
    }
    return `
  <div class="accordion-item" id="${safeId(p.name)}" data-name="${p.name}" data-tags='${JSON.stringify(p.tags)}' data-gender="${p.gender}" data-province="${p.province}" data-city="${p.city}">
    <div class="accordion-header" tabindex="0" role="button" aria-expanded="false">
      <div class="accordion-header-left">
        <div class="accordion-avatar-wrap">${avatarHTML}</div>
        <div class="accordion-identity">
          <span class="accordion-name">${p.name}</span>
          <div class="pers-tags">${tagsHTML}</div>
        </div>
      </div>
      <div class="accordion-header-right">
        <div class="pers-badge">${p.badge}</div>
        <button class="accordion-map-btn" title="Lihat di peta" data-name="${p.name}"><i class="fas fa-map-marker-alt"></i></button>
        <button class="accordion-toggle-btn"><i class="fas fa-chevron-down"></i></button>
      </div>
    </div>
    <div class="accordion-body">
      <div class="accordion-body-inner">
        <div class="accordion-content-grid">
          <div class="accordion-profile-left">
            <div class="accordion-profile-photo-wrap">${fullPhotoHTML}</div>
            <div class="accordion-profile-details">
              <div class="accordion-detail-item"><i class="fas fa-map-marker-alt"></i><span>${p.location}</span></div>
              <div class="accordion-detail-item"><i class="fas fa-birthday-cake"></i><span>${ageText}</span></div>
            </div>
          </div>
          <div class="accordion-profile-right">
            <div>
              <h4 class="accordion-section-title">Karya Portofolio</h4>
              <div style="font-size:11px;color:var(--text-dim);margin-bottom:7px;">${p.porto} karya</div>
              ${portoHTML}
            </div>
            <div class="accordion-actions">
              <a href="https://wa.me/6285771002233" class="accordion-btn-wa" target="_blank" rel="noopener">KONSULTASI WA</a>
              <a href="#" class="accordion-btn-profile">LIHAT PROFIL</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>`;
  }

  /* ============================================================
     INIT ACCORDION
  ============================================================ */
  const accordionList=document.getElementById('accordion-list');
  const emptyState=document.getElementById('empty-state');
  
  if (accordionList) {
    personnelData.forEach(p=>{
      const w=document.createElement('div');
      w.innerHTML=buildAccordionHTML(p).trim();
      accordionList.appendChild(w.firstElementChild);
    });
  }

  /* ============================================================
     MAP INIT
  ============================================================ */
  const mapElement = document.getElementById('map');
  if (mapElement) {
    const map=L.map('map',{center:[-2.5,118],zoom:5,zoomControl:false,attributionControl:false});
    L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png',{maxZoom:19,subdomains:'abcd'}).addTo(map);
    L.control.zoom({position:'bottomright'}).addTo(map);
    L.control.attribution({prefix:'<a href="https://carto.com/attribution" style="color:#555">&copy; CARTO</a>'}).addTo(map);

    function createPinIcon(p,cls=''){
      return L.divIcon({className:'',html:`<div class="custom-map-pin ${cls}"><i class="fas ${p.icon||'fa-camera'}"></i></div>`,iconSize:[34,34],iconAnchor:[17,34],popupAnchor:[0,-34]});
    }

    function buildPopupHTML(p){
      return `<div class="popup-inner"><div class="popup-name">${p.name}</div><div class="popup-location"><i class="fas fa-map-marker-alt" style="color:var(--gold-dim)"></i>${p.location}</div><div class="popup-tags">${p.tags.map(t=>`<span class="tag-pill">${t}</span>`).join('')}</div><button class="popup-btn" onclick="expandFromMap(decodeURIComponent('${encodeURIComponent(p.name)}'))">Lihat Detail</button></div>`;
    }

    const markers={};
    personnelData.forEach(p=>{
      const m=L.marker([p.lat,p.lng],{icon:createPinIcon(p),title:p.name});
      m.bindPopup(buildPopupHTML(p),{maxWidth:240,minWidth:200});
      m._pinActive=false;
      m.addTo(map);
      m.on('click',()=>expandFromMap(p.name));
      markers[p.name]=m;
    });

    /* ============================================================
       PAGINATION STATE
    ============================================================ */
    const ITEMS_PER_PAGE=8;
    let currentPage=1;
    let filteredData=[...personnelData];

    /* ============================================================
       ACC OPEN/CLOSE
    ============================================================ */
    function openAcc(item){item.classList.add('is-active');item.querySelector('.accordion-header').setAttribute('aria-expanded','true');}
    function closeAcc(item){item.classList.remove('is-active');item.querySelector('.accordion-header').setAttribute('aria-expanded','false');}
    function closeAllAcc(){document.querySelectorAll('.accordion-item.is-active').forEach(closeAcc);}

    /* ============================================================
       MARKER STYLES
    ============================================================ */
    function updateMarkerStyles(pageNames){
      const filteredNames=new Set(filteredData.map(p=>p.name));
      personnelData.forEach(p=>{
        const m=markers[p.name];if(!m)return;
        if(!filteredNames.has(p.name)){m.setIcon(createPinIcon(p,'pin-dimmed'));return;}
        if(m._pinActive){m.setIcon(createPinIcon(p,'pin-active'));return;}
        if(pageNames&&pageNames.has(p.name)){m.setIcon(createPinIcon(p,'pin-current-page'));return;}
        m.setIcon(createPinIcon(p,''));
      });
    }

    /* ============================================================
       RENDER PAGE
    ============================================================ */
    function renderPage(page,skipFly){
      currentPage=page;
      const pageData=filteredData.slice((page-1)*ITEMS_PER_PAGE,page*ITEMS_PER_PAGE);
      const pageNames=new Set(pageData.map(p=>p.name));
      accordionList.classList.add('fading');
      setTimeout(()=>{
        document.querySelectorAll('.accordion-item').forEach(item=>{
          const n=item.getAttribute('data-name');
          item.style.display=pageNames.has(n)?'':'none';
          closeAcc(item);
        });
        updateMarkerStyles(pageNames);
        updatePaginationUI();
        accordionList.classList.remove('fading');
        if(!skipFly&&pageData.length>0){
          const bounds=pageData.map(p=>[p.lat,p.lng]);
          if(bounds.length===1)map.flyTo(bounds[0],12,{animate:true,duration:0.8});
          else map.flyToBounds(bounds,{padding:[50,50],maxZoom:9,animate:true,duration:0.8});
        }
        accordionList.scrollTop=0;
      },180);
    }

    /* ============================================================
       PAGINATION UI
    ============================================================ */
    function updatePaginationUI(){
      const tp=Math.max(1,Math.ceil(filteredData.length/ITEMS_PER_PAGE));
      const s=filteredData.length>0?(currentPage-1)*ITEMS_PER_PAGE+1:0;
      const e=Math.min(currentPage*ITEMS_PER_PAGE,filteredData.length);
      document.getElementById('pagination-info').textContent=filteredData.length>0
        ?`Menampilkan ${s}\u2013${e} dari ${filteredData.length} personel`
        :'Tidak ada personel ditemukan';
      document.getElementById('btn-prev').disabled=currentPage<=1;
      document.getElementById('btn-next').disabled=currentPage>=tp||filteredData.length===0;
      const ctrl=document.getElementById('pagination-controls');
      ctrl.querySelectorAll('.page-num').forEach(b=>b.remove());
      const nb=document.getElementById('btn-next');
      let sp=Math.max(1,currentPage-2),ep=Math.min(tp,sp+4);
      if(ep-sp<4)sp=Math.max(1,ep-4);
      for(let i=sp;i<=ep;i++){
        const btn=document.createElement('button');
        btn.className='page-btn page-num'+(i===currentPage?' active':'');
        btn.textContent=i;
        btn.addEventListener('click',()=>renderPage(i));
        nb.before(btn);
      }
      document.getElementById('total-count-num').textContent=filteredData.length;
      document.getElementById('map-shown-count').textContent=filteredData.length;
      filteredData.length===0?emptyState.classList.add('show'):emptyState.classList.remove('show');
    }

    /* ============================================================
       EXPAND FROM MAP
    ============================================================ */
    window.expandFromMap=function(name){
      const idx=filteredData.findIndex(p=>p.name===name);
      if(idx<0)return;
      const page=Math.floor(idx/ITEMS_PER_PAGE)+1;
      Object.values(markers).forEach(m=>m._pinActive=false);
      if(markers[name])markers[name]._pinActive=true;
      const person=personnelData.find(p=>p.name===name);
      if(person)map.flyTo([person.lat,person.lng],13,{animate:true,duration:0.8});
      if(page!==currentPage){
        currentPage=page;
        const pd=filteredData.slice((page-1)*ITEMS_PER_PAGE,page*ITEMS_PER_PAGE);
        const pn=new Set(pd.map(p=>p.name));
        accordionList.classList.add('fading');
        setTimeout(()=>{
          document.querySelectorAll('.accordion-item').forEach(item=>{
            const n=item.getAttribute('data-name');
            item.style.display=pn.has(n)?'':'none';
            closeAcc(item);
          });
          updateMarkerStyles(pn);updatePaginationUI();
          accordionList.classList.remove('fading');
          setTimeout(()=>openAndScrollTo(name),60);
        },180);
      }else{
        const pd=filteredData.slice((currentPage-1)*ITEMS_PER_PAGE,currentPage*ITEMS_PER_PAGE);
        updateMarkerStyles(new Set(pd.map(p=>p.name)));
        openAndScrollTo(name);
      }
    };

    function openAndScrollTo(name){
      const item=document.getElementById(safeId(name));
      if(!item)return;
      closeAllAcc();openAcc(item);
      setTimeout(()=>item.scrollIntoView({behavior:'smooth',block:'nearest'}),80);
    }

    /* ============================================================
       ACCORDION EVENTS
    ============================================================ */
    accordionList.addEventListener('click',function(e){
      const mb=e.target.closest('.accordion-map-btn');
      if(mb){
        e.stopPropagation();
        const name=mb.getAttribute('data-name');
        const person=personnelData.find(p=>p.name===name);
        if(!person)return;
        Object.values(markers).forEach(m=>m._pinActive=false);
        markers[name]._pinActive=true;
        const pd=filteredData.slice((currentPage-1)*ITEMS_PER_PAGE,currentPage*ITEMS_PER_PAGE);
        updateMarkerStyles(new Set(pd.map(p=>p.name)));
        map.flyTo([person.lat,person.lng],13,{animate:true,duration:0.8});
        setTimeout(()=>markers[name].openPopup(),900);
        return;
      }
      const header=e.target.closest('.accordion-header');
      if(header){
        const item=header.closest('.accordion-item');if(!item)return;
        const wasActive=item.classList.contains('is-active');
        closeAllAcc();
        if(!wasActive){
          openAcc(item);
          const name=item.getAttribute('data-name');
          const person=personnelData.find(p=>p.name===name);
          if(person)map.flyTo([person.lat,person.lng],13,{animate:true,duration:0.8});
        }
      }
    });

    accordionList.addEventListener('keydown',function(e){
      if(e.key==='Enter'||e.key===' '){const h=e.target.closest('.accordion-header');if(h){e.preventDefault();h.click();}}
    });

    /* ============================================================
       PAGINATION BUTTONS
    ============================================================ */
    document.getElementById('btn-prev').addEventListener('click',()=>{if(currentPage>1)renderPage(currentPage-1);});
    document.getElementById('btn-next').addEventListener('click',()=>{const tp=Math.ceil(filteredData.length/ITEMS_PER_PAGE);if(currentPage<tp)renderPage(currentPage+1);});

    /* ============================================================
       FILTERS
    ============================================================ */
    function applyFilters(){
      const search=document.getElementById('search-input').value.trim().toLowerCase();
      const cat=document.getElementById('filter-category').value;
      const gen=document.getElementById('filter-gender').value;
      const prov=document.getElementById('filter-province').value;
      const city=document.getElementById('filter-city').value;
      filteredData=personnelData.filter(p=>{
        if(search&&!(p.name+' '+p.location+' '+p.tags.join(' ')).toLowerCase().includes(search))return false;
        if(cat&&!p.tags.includes(cat))return false;
        if(gen&&p.gender!==gen)return false;
        if(prov&&p.province!==prov)return false;
        if(city&&p.city!==city)return false;
        return true;
      });
      renderPage(1);
    }

    let deb;
    document.getElementById('search-input').addEventListener('input',()=>{clearTimeout(deb);deb=setTimeout(applyFilters,280);});
    ['filter-category','filter-gender','filter-province','filter-city'].forEach(id=>{document.getElementById(id).addEventListener('change',applyFilters);});
    document.getElementById('btn-reset-filter').addEventListener('click',()=>{
      document.getElementById('search-input').value='';
      ['filter-category','filter-gender','filter-province','filter-city'].forEach(id=>document.getElementById(id).value='');
      applyFilters();
    });

    /* ============================================================
       INITIAL RENDER
    ============================================================ */
    renderPage(1,true);
    try{map.fitBounds(personnelData.map(p=>[p.lat,p.lng]),{padding:[40,40]});}catch(err){}
  }
});

INLINE_ASSET
    );
}
