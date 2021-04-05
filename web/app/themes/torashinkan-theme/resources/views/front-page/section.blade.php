<section class="container-fluid slanted-div" style="background: linear-gradient(
  rgba(0, 0, 0, 0.4),
  rgba(0, 0, 0, 0.4)
  ), url({{get_the_post_thumbnail_url(get_the_ID(),'large')}}) no-repeat; background-size: cover;" id="{{ $post->post_name }}">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="text-white display-4" style="margin-top: 136px;">{{the_title()}}</h2>
      </div>
    </div>
      <div class="row">
        <div class="col-12 d-flex align-middle text-white min-vh-100">
          <div class="my-auto">
            {!! the_content() !!}
        </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 pt-5">
          <h4 class="text-white text-right" style="z-index: 2">
              {!! get_the_excerpt() !!}
          </h4>
        </div>
      </div>
    </div>
</section>
