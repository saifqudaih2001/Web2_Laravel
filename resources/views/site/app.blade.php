
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
    'DEME_SITE |@yield('title','DEME_SITE')
    </title>

    {{--include styles --}}
    @include('site.partials.styles')

    <!-- ==== WOW JS ==== -->
    <script src="assets/js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
  </head>
  <body>
    
    {{--include header --}}
    @include('site.partials.header')
    
    {{--include hero --}}
    @include('site.partials.hero')

     @yield('content')
    {{--include features --}}
    @include('site.partials.features')
    
    {{--include about --}}
    @include('site.partials.about')

   

    {{--include pricing --}}
    @include('site.partials.pricing')
    
    {{--include faq --}}
    @include('site.partials.faq')
    
    {{--include testimonials --}}
    @include('site.partials.testimonials')
    
    {{--include team --}}
    @include('site.partials.team')

   

    {{--include contact --}}
    @include('site.partials.contact')

    {{--include footer --}}
    @include('site.partials.footer')

    {{--include backtotop --}}
    @include('site.partials.backtotop')

    {{--include script --}}
    @include('site.partials.scripts')

    <!-- ====== All Scripts -->

    
  </body>
</html>
