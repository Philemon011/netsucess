@extends('layouts.app')

@section('meta_title', 'Netsucess — Boutique Shopify premium clé en main, prête à vendre')
@section('meta_description', 'Netsucess conçoit des boutiques Shopify premium, livrées clé en main en 7 jours. Design sur mesure, structure optimisée pour convertir dès la livraison.')


@section('content')

  <!-- ============================================
     HERO
============================================ -->
  @include('partials.home.hero')

  <!-- ============================================
     RÉALISATIONS
============================================ -->
  @include('partials.home.realisations')

  <!-- ============================================
     FEATURES / VALUE PROPS
============================================ -->
  @include('partials.home.features')

  <!-- ============================================
     RÉSULTATS (Marquee Testimonials)
============================================ -->
  @include('partials.home.resultats')

  <!-- ============================================
     PROCESSUS
============================================ -->
  @include('partials.home.processus')

  <!-- ============================================
     OFFRES / PRICING
============================================ -->
  @include('partials.home.offres')

  <!-- ============================================
     TÉMOIGNAGES (Cards)
============================================ -->
  @include('partials.home.temoignages')

  <!-- ============================================
     FAQ
============================================ -->
  @include('partials.home.faq')

  <!-- ============================================
     BLOG PREVIEW
============================================ -->
  @include('partials.home.blog-preview')

  <!-- ============================================
     CTA FINAL
============================================ -->
  @include('partials.home.cta-final')

@endsection

@section('scripts')
<script>
    // ----- Scroll reveal -----
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });
    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
</script>
@endsection