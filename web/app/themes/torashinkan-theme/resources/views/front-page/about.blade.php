<section class="container-fluid py-5" style="background: linear-gradient(
  rgba(0, 0, 0, 0.4),
  rgba(0, 0, 0, 0.4)
  ), url({{ get_template_directory_uri() . '/assets/images/mat-pattern.jpg' }}), rgba(0, 0, 0, 0.2); mix-blend-mode: multiply;"
         id="about" aria-label="about">
  <div class="container my-auto">
    <div class="row min-vh-100">
      <div class="col-sm-6 ml-auto d-flex align-items-center my-auto">
        <img class="aaa-logo my-auto"
             src="{{ get_template_directory_uri() . '/assets/images/aaa-logo-white.svg' }}"
             alt="Aikido Association of America Logo" width="353" height="361"/>
      </div>
      <div class="col-sm-6 my-auto" style="background: linear-gradient(
        rgba(0, 0, 0, 0.6),
        rgba(0, 0, 0, 0.6)
        ), url({{ get_template_directory_uri() . '/assets/images/kokyu-ho.jpg' }}) no-repeat; background-size: cover">
        <div class="m-4 text-white p-4">
          {!! the_content() !!}
        </div>
      </div>
    </div>
  </div>
</section>
