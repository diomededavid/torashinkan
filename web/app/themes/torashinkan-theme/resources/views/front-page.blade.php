@extends('layouts.home')
  @section('home')
    @if($featured_hero->have_posts())
      @while($featured_hero->have_posts())
        @php $featured_hero->the_post() @endphp
          @include('front-page.hero')
      @endwhile
    @endif
    @if($featured_about->have_posts())
        @while($featured_about->have_posts())
          @php $featured_about->the_post() @endphp
          @include('front-page.about')
      @endwhile
    @endif
    @if($featured_classes->have_posts())
      @while($featured_classes->have_posts())
        @php $featured_classes->the_post() @endphp
        @include('front-page.section')
    @endwhile
    @endif
@endsection
