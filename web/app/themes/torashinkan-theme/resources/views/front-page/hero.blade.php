<section class="container-fluid hero-image" style="background-image: url({{ get_the_post_thumbnail_url(get_the_ID(),'large')}});">
    <div class="container bottom-space">
        <div class="row">
            <div class="col-lg-6 col-sm-12 text-white intro">
                {!! get_the_content() !!}
            </div>
        </div>
      <div class="row">
              <div class="col-12 d-flex align-items-end vh-60">
                  <img class="aikido-emblem"
                       src="{{ get_template_directory_uri() . '/assets/images/aikido-kangi.svg' }}" alt="Aikido" />
                  <img class="spirit ml-auto"  src="{{ get_template_directory_uri() . '/assets/images/spirit-of-tiger.svg' }}" alt="Spirit of the Tiger" />
              </div>
      </div>
    </div>
</section>
