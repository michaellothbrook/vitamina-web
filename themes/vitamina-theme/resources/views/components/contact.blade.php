<section class="section-contact" style="background-image: url('<?php echo $options_contact_benefits['contact_benefits_background']['url'] ?>');">
  <div class=" container">
    <div class="wrapper text-center">
      <h1 class="section-contact__title">{!! $options_contact_benefits['contact_benefits_title'] !!}</h1>
    </div>
    <div class="section-contact__content row text-center">
      <div class="col-md-6">
        <div class="card mb-3">
          <div class="row no-gutters align-items-center">
            <div class="col-md-4">
              <img src="<?php echo $options_contact_benefits['options_contact']['contact_image']['url'] ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">{!! $options_contact_benefits['options_contact']['contact_title'] !!}</h5>
                <p class="card-text">{!! $options_contact_benefits['options_contact']['contact_content'] !!}</p>
              </div>
              <div class="card-footer">
                <a class="btn btn-primary btn-sm " href="{!! $options_contact_benefits['options_contact']['contact_cta']['url'] !!}" role="button">
                  {!! $options_contact_benefits['options_contact']['contact_cta']['title'] !!}
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card mb-3">
          <div class="row no-gutters align-items-center">
            <div class="col-md-4">
              <img src="<?php echo $options_contact_benefits['options_benefits']['benefits_image']['url'] ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">{!! $options_contact_benefits['options_benefits']['benefits_title'] !!}</h5>
                <p class="card-text">{!! $options_contact_benefits['options_benefits']['benefits_content'] !!}</p>
              </div>
              <div class="card-footer">
                <a class="btn btn-primary btn-sm " href="{!! $options_contact_benefits['options_benefits']['contact_cta']['url'] !!}" role="button">
                  {!! $options_contact_benefits['options_benefits']['benefits_cta']['title'] !!}
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>