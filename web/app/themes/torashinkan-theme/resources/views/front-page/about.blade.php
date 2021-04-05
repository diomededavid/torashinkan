<section class="container-fluid" style="background: linear-gradient(
  rgba(0, 0, 0, 0.4),
  rgba(0, 0, 0, 0.4)
  ), url({{ get_template_directory_uri() . '/assets/images/mat-pattern.jpg' }}), rgba(0, 0, 0, 0.2); mix-blend-mode: multiply;" id="about" aria-label="about">
  <div class="container">
    <div class="row vh-100">
      <div class="col-sm-4 ml-auto d-flex align-items-center">
        <img
          class="aaa-logo"
          src="{{ get_template_directory_uri() . '/assets/images/aaa-logo-white.svg' }}"
          alt="Aikido Association of America Logo"/>
        </div>
      <div class="col-sm-8 my-auto" style="background: linear-gradient(
        rgba(0, 0, 0, 0.6),
        rgba(0, 0, 0, 0.6)
        ), url({{ get_template_directory_uri() . '/assets/images/kokyu-ho.jpg' }}) no-repeat; min-height: 667px">
        <div class="m-4 text-white p-4">
            {!! the_content() !!}
        </div>
      </div>
  </div>
</section>
