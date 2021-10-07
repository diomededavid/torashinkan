@php $title = get_the_title(); @endphp

<section class="min-vh-100" style="background: linear-gradient(
  rgba(0, 0, 0, 0.4),
  rgba(0, 0, 0, 0.4)
  ), url({{get_the_post_thumbnail_url(get_the_ID(),'large')}}) no-repeat; background-size: cover;"
         id="{{  strtolower( $title ) }}">
  <div class="block-top -black edge--bottom">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="text-white display-4 text-left">{{the_title()}}</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12 d-flex align-middle text-white">
        <div class="my-auto">
          {!! the_content() !!}
        </div>
      </div>
    </div>
  </div>
  <div class="block-bottom -black edge--top--reverse">
    <div class="container">
      <div class="row">
        <div class="col-6  offset-6 text-right float-right">
          {!! get_the_excerpt() !!}
        </div>
      </div>
    </div>
  </div>
</section>
