{{-- <style>
    footer { padding: 80px 0 32px; border-top: 1px solid var(--border); margin-top: 80px; }
    .footer-top { display: grid; grid-template-columns: 2fr 1fr 1fr; gap: 48px; margin-bottom: 48px; }
    .footer-brand p { color: var(--text-secondary); font-size: 14px; line-height: 1.7; margin-top: 16px; max-width: 300px; }
    .footer-contact { display: flex; align-items: center; gap: 8px; margin-top: 20px; color: var(--text-secondary); font-size: 14px; }
    .footer-contact svg { width: 16px; height: 16px; color: var(--accent); flex-shrink: 0; }
    .footer-col h4 { font-size: 14px; font-weight: 600; color: var(--text-primary); margin-bottom: 20px; }
    .footer-col ul { display: flex; flex-direction: column; gap: 12px; }
    .footer-col ul li a { font-size: 14px; color: var(--text-secondary); transition: color var(--transition); }
    .footer-col ul li a:hover { color: var(--accent); }
    .footer-bottom { display: flex; align-items: center; justify-content: space-between; padding-top: 32px; border-top: 1px solid var(--border); }
    .footer-bottom p { font-size: 13px; color: var(--text-muted); }
    @media (max-width: 768px) {
        .footer-top { grid-template-columns: 1fr; gap: 32px; }
        .footer-bottom { flex-direction: column; gap: 8px; text-align: center; }
    }
</style>

<footer>
    <div class="container">
        <div class="footer-top">
            <div class="footer-brand">
                <div class="navbar-logo">Net<span style="color:var(--accent);">Sucess</span></div>
                <p>L'équipe Netsucess reste disponible 24h/24 et 7j/7 pour répondre à toutes vos questions, via WhatsApp ou par e-mail.</p>
                <div class="footer-contact">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                        <polyline points="22,6 12,13 2,6"/>
                    </svg>
                    contact@netsucess.com
                </div>
            </div>
            <div class="footer-col">
                <h4>Navigation</h4>
                <ul>
                    <li><a href="{{ route('home') }}#realisations">Nos réalisations</a></li>
                    <li><a href="{{ route('home') }}#processus">Notre Processus</a></li>
                    <li><a href="{{ route('home') }}#offres">Nos offres</a></li>
                    <li><a href="{{ route('blog.index') }}">Blog</a></li>
                    <li><a href="{{ route('home') }}#faq">FAQ</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Légal</h4>
                <ul>
                    <li><a href="#">Mentions légales</a></li>
                    <li><a href="#">Politique de confidentialité</a></li>
                    <li><a href="#">Politique de remboursement</a></li>
                    <li><a href="#">CGU / CGV</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Tous droits réservés — © {{ date('Y') }} Netsucess</p>
            <p>Fait avec 🌿 par <em>Philémon Etounde</em></p>
        </div>
    </div>
</footer> --}}


<style>
/* ============================================
       FOOTER
    ============================================ */
    footer {
      background: var(--bg-card);
      border-top: 1px solid var(--border);
      padding: 60px 0 32px;
    }

    .footer-top {
      display: grid;
      grid-template-columns: 1.5fr 1fr 1fr;
      gap: 60px;
      margin-bottom: 48px;
    }

    .footer-brand .navbar-logo {
      font-size: 24px;
      margin-bottom: 14px;
    }

    .footer-brand p {
      font-size: 14px;
      color: var(--text-secondary);
      line-height: 1.7;
      max-width: 280px;
      margin-bottom: 20px;
    }

    .footer-contact {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 13px;
      color: var(--text-muted);
    }

    .footer-contact svg {
      color: var(--accent);
      width: 15px;
      height: 15px;
    }

    .footer-col h4 {
      font-size: 13px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      color: var(--text-muted);
      margin-bottom: 18px;
    }

    .footer-col ul {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .footer-col ul li a {
      font-size: 14px;
      color: var(--text-secondary);
      transition: var(--transition);
    }

    .footer-col ul li a:hover {
      color: var(--accent);
    }

    .footer-bottom {
      border-top: 1px solid var(--border);
      padding-top: 28px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 12px;
    }

    .footer-bottom p {
      font-size: 13px;
      color: var(--text-muted);
    }

    .footer-bottom a {
      color: var(--accent);
    }
    .footer-bottom em {
      color: var(--accent);
      font-style: normal;
    }


       /* ============================================
       RESPONSIVE
    ============================================ */
    @media (max-width: 900px) {
      .realisations-grid {
        grid-template-columns: 1fr;
      }

      .features-layout {
        grid-template-columns: 1fr;
        gap: 48px;
      }

      .steps-grid {
        grid-template-columns: 1fr;
      }

      .steps-grid::before {
        display: none;
      }

      .pricing-grid {
        grid-template-columns: 1fr;
        max-width: 480px;
      }

      .temoignages-grid {
        grid-template-columns: 1fr;
      }

      .footer-top {
        grid-template-columns: 1fr;
        gap: 36px;
      }

      .navbar-links,
      .navbar-actions {
        display: none;
      }

      .navbar-toggle {
        display: flex;
      }
    }

    @media (max-width: 640px) {
      section {
        padding: 72px 0;
      }

      .hero {
        padding: 100px 0 60px;
      }

      .hero-actions {
        flex-direction: column;
        align-items: center;
      }

      .cta-box {
        padding: 48px 24px;
      }

      .hero-pills {
        gap: 6px;
      }
    }


    .pricing-badge {
  display: inline-flex;
  align-items: center;
  gap: 6px;

  padding: 6px 14px;
  border-radius: 999px;

  background: var(--accent);
  color: #0a0f0c;

  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.05em;
  text-transform: uppercase;
}

.pricing-badge svg {
  width: 14px;
  height: 14px;
  color: var(--accentjaune);
}

    </style>


 <!-- ============================================
     FOOTER
============================================ -->
  <footer>
    <div class="container">
      <div class="footer-top">
        <div class="footer-brand">
          <div class="navbar-logo">Net<span style="color:var(--accent);">Sucess</span></div>
          <p>L'équipe Netsucess reste disponible 24h/24 et 7j/7 pour répondre à toutes vos questions, via WhatsApp ou
            par e-mail.</p>
          <div class="footer-contact">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
              <polyline points="22,6 12,13 2,6" />
            </svg>
            contact@Netsucess.com
          </div>
        </div>
        <div class="footer-col">
          <h4>Navigation</h4>
          <ul>
            <li><a href="#realisations">Nos réalisations</a></li>
            <li><a href="#processus">Notre Processus</a></li>
            <li><a href="#offres">Nos offres</a></li>
            <li><a href="#faq">F.A.Q</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Légal</h4>
          <ul>
            <li><a href="#">Mentions légales</a></li>
            <li><a href="#">Politique de confidentialité</a></li>
            <li><a href="#">Politique de remboursement</a></li>
            <li><a href="#">CGU / CGV</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>Tous droits réservés — © 2026 Netsucess</p>
        <p>Fait avec 🌿 par  <em>Philémon Etounde</em></p>
      </div>
    </div>
  </footer>