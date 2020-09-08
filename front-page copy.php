<?php get_header(); ?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 text-center">GILANG LEMINDO SEJAHTERA</h1>
    <p class="lead text-center">CUSTOMIZE ADHESIVE MANUFACTURER & DISTRIBUTOR</p>
  </div>
</div>

<div class="container">
  <div class="row">
    <?php for ($x = 0; $x <= 1; $x++) : ?>
      <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card text-white bg-dark h-100">
          <div class="card-header">Header</div>
          <amp-img 
            src="<?= get_template_directory_uri(); ?>/assets/images/paul-summers.jpg" 
            width="400" height="250" layout="responsive" class="card-img-top" alt="...">
          </amp-img>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card text-white bg-dark h-100">
          <div class="card-header">Header</div>
          <amp-img 
            src="<?= get_template_directory_uri(); ?>/assets/images/paul-summers.jpg" 
            width="400" height="250" layout="responsive" class="card-img-top" alt="...">
          </amp-img>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
    <?php endfor?>
  </div>
</div>

<div class="">
  <?php for ($x = 0; $x <= 5; $x++) : ?>
    <div class="-sm">
      <div class="card text-white bg-dark h-100">
        <div class="card-header">Header</div>
        <amp-img 
          src="<?= get_template_directory_uri(); ?>/assets/images/paul-summers.jpg" 
          width="400" height="250" layout="responsive" class="card-img-top" alt="...">
        </amp-img>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
    </div>
    <?php endfor?>
</div>

<!--  -->
  <div class="">
    <div class="-sv">
      <?php for ($x = 0; $x <= 50; $x++) : ?> 
        <div class="-sm">
          <div class="card text-white bg-dark h-100">
            <!-- <div class="card-header">Edisi 19 | 10-17 Juli 2020</div> -->
            <amp-img 
              src="<?= get_template_directory_uri(); ?>/assets/images/paul-summers.jpg" 
              width="400" height="400" layout="responsive" class="card-img-top" alt="...">
            </amp-img>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
            </div>
            <div class="card-footer">
              <small class="text-muted">Oleh: Author</small>
            </div>
          </div>
        </div>
      <?php endfor?>
    </div>
  </div>
</div>

<?php get_footer(); ?>


<!-- carousel -->
<!--  
<section class="land-see-hero-container mx-auto mb3 relative overflow-hidden">

  <div class="land-see-hero-left absolute">
    <amp-carousel 
      id="land-see-hero-left" 
      class="land-see-hero-carousel mx-auto" 
      width="1290" height="680" layout="responsive" 
      [slide]="selectedSlide" 
      on="slideChange:AMP.setState({selectedSlide: event.index})" 
      noloading="" controls="" loop="" type="slides">

      <div class="land-see-hero-content mx-auto relative">
        <amp-img 
          class="cover land-see-hero-image land-see-cover-position-top" 
          alt="Bold Coast Cottage" width="1290" height="680" layout="responsive" 
          src="<?= get_template_directory_uri(); ?>/assets/images/maine.jpg">
        </amp-img>

        <div class="land-see-hero-typography mx-auto center z2 absolute">
          <a 
            class="land-see-post-category land-see-page-navigation underline caps max-width-1 sm-hide md-hide lg-hide" 
            href="stories.amp.html?category&#x3D;interiors#land-see-interiors">
            Interiors
          </a>
          <h1 class="land-see-hero-title ampstart-title-md">
            <a class="text-decoration-none" href="kim-myeong.amp.html">Bold Coast Cottage in Main</a>
          </h1>
          <p class="land-see-hero-caption ampstart-caption mx-auto max-width-3 pt1 mb3">
            My travels in Main have taken me to many destinations<br>
            not in the standard visitor’s guide.
          </p>
          <a class="land-see-hero-button text-decoration-none relative" href="kim-myeong.amp.html">
            Read More
          </a>
        </div>
      </div>
      
      <div class="land-see-hero-content mx-auto relative">
        <amp-img 
          class="cover land-see-hero-image land-see-cover-position-bottom" 
          alt="Designer Kim Myeong" width="1290" height="680" layout="responsive" 
          src="<?= get_template_directory_uri(); ?>/assets/images/shoe-designer.jpg">
        </amp-img>
        <div class="land-see-hero-typography mx-auto center z2 absolute">
          <a class="land-see-post-category land-see-page-navigation underline caps max-width-1 sm-hide md-hide lg-hide" href="stories.amp.html?category&#x3D;fashion#land-see-fashion">
            Fashion
          </a>
          <h1 class="land-see-hero-title ampstart-title-md">
            <a class="text-decoration-none" href="kim-myeong.amp.html">Designer Kim Myeong</a>
          </h1>
          <p class="land-see-hero-caption ampstart-caption mx-auto max-width-3 pt1 mb3">
            Relatively new to the industry, footwear designer Kim Myeong uses a unique<br>
            mix of color, texture, and material to make her shoes the must-haves of this year.
          </p>
          <a class="land-see-hero-button text-decoration-none relative" href="kim-myeong.amp.html">
            Read More
          </a>
        </div>
      </div>

      <div class="land-see-hero-content mx-auto relative">
        <amp-img 
          class="cover land-see-hero-image land-see-cover-position-top" 
          alt="Skykomish River Valley " width="1290" height="680" layout="responsive" 
          src="<?= get_template_directory_uri(); ?>/assets/images/paul-summers.jpg">
        </amp-img>
        <div class="land-see-hero-typography mx-auto center z2 absolute">
          <a class="land-see-post-category land-see-page-navigation underline caps max-width-1 sm-hide md-hide lg-hide" href="stories.amp.html?category&#x3D;design#land-see-design">
            Design
          </a>
          <h1 class="land-see-hero-title ampstart-title-md">
            <a class="text-decoration-none" href="kim-myeong.amp.html">Nature's Inspiration</a>
          </h1>
          <p class="land-see-hero-caption ampstart-caption mx-auto max-width-3 pt1 mb3">
            Habitant lobortis dolor, dictumst feugiat pede diam, minim turpis ut, quam<br>
            sociosqu egestas sed lorem auctor dui. Venenatis deserunt nulla.
          </p>
          <a class="land-see-hero-button text-decoration-none relative" href="kim-myeong.amp.html">
            Read More
          </a>
        </div>
      </div>
    </amp-carousel>
  </div>

  <div class="land-see-hero-main mx-auto">
    <amp-carousel 
      id="land-see-hero-main" 
      class="land-see-hero-carousel mx-auto" 
      media="(min-width: 40.06rem)" 
      width="1290" 
      height="680" 
      layout="responsive" 
      [slide]="selectedSlide" 
      on="slideChange:AMP.setState({selectedSlide: event.index})" 
      noloading="" controls="" loop="" type="slides">

      <div class="land-see-hero-content mx-auto relative">
        <amp-img 
          class="cover land-see-hero-image land-see-cover-position-bottom" 
          alt="Designer Kim Myeong" width="1290" height="680" layout="responsive" 
          src="<?= get_template_directory_uri(); ?>/assets/images/shoe-designer.jpg">
        </amp-img>
        <div class="land-see-hero-typography mx-auto center z2 absolute">
          <a class="land-see-post-category land-see-page-navigation underline caps max-width-1 sm-hide md-hide lg-hide" href="stories.amp.html?category&#x3D;fashion#land-see-fashion">
            Fashion
          </a>
          <h1 class="land-see-hero-title ampstart-title-md">
            <a class="text-decoration-none" href="kim-myeong.amp.html">Designer Kim Myeong</a>
          </h1>
          <p class="land-see-hero-caption ampstart-caption mx-auto max-width-3 pt1 mb3">
            Relatively new to the industry, footwear designer Kim Myeong uses a unique<br>
            mix of color, texture, and material to make her shoes the must-haves of this year.
          </p>
          <a class="land-see-hero-button text-decoration-none relative" href="kim-myeong.amp.html">
            Read More
          </a>
        </div>
      </div>

      <div class="land-see-hero-content mx-auto relative">
        <amp-img 
          class="cover land-see-hero-image land-see-cover-position-top" 
          alt="Skykomish River Valley " width="1290" height="680" layout="responsive" 
          src="<?= get_template_directory_uri(); ?>/assets/images/paul-summers.jpg">
        </amp-img>
        <div class="land-see-hero-typography mx-auto center z2 absolute">
          <a class="land-see-post-category land-see-page-navigation underline caps max-width-1 sm-hide md-hide lg-hide" href="stories.amp.html?category&#x3D;design#land-see-design">
            Design
          </a>
          <h1 class="land-see-hero-title ampstart-title-md">
            <a class="text-decoration-none" href="kim-myeong.amp.html">Nature's Inspiration</a>
          </h1>
          <p class="land-see-hero-caption ampstart-caption mx-auto max-width-3 pt1 mb3">
            Habitant lobortis dolor, dictumst feugiat pede diam, minim turpis ut, quam<br>
            sociosqu egestas sed lorem auctor dui. Venenatis deserunt nulla.
          </p>
          <a class="land-see-hero-button text-decoration-none relative" href="kim-myeong.amp.html">
            Read More
          </a>
        </div>
      </div>

      <div class="land-see-hero-content mx-auto relative">
        <amp-img 
          class="cover land-see-hero-image land-see-cover-position-top" 
          alt="Bold Coast Cottage" width="1290" height="680" layout="responsive" 
          src="<?= get_template_directory_uri(); ?>/assets/images/maine.jpg">
        </amp-img>
        <div class="land-see-hero-typography mx-auto center z2 absolute">
          <a class="land-see-post-category land-see-page-navigation underline caps max-width-1 sm-hide md-hide lg-hide" href="stories.amp.html?category&#x3D;interiors#land-see-interiors">
            Interiors
          </a>
          <h1 class="land-see-hero-title ampstart-title-md">
            <a class="text-decoration-none" href="kim-myeong.amp.html">Bold Coast Cottage in Main</a>
          </h1>
          <p class="land-see-hero-caption ampstart-caption mx-auto max-width-3 pt1 mb3">
            My travels in Main have taken me to many destinations<br
            >not in the standard visitor’s guide.
          </p>
          <a class="land-see-hero-button text-decoration-none relative" href="kim-myeong.amp.html">
            Read More
          </a>
        </div>
      </div>
    </amp-carousel>
  </div>

  <div class="land-see-hero-main mx-auto">
    <amp-carousel 
      id="land-see-hero-main-small" 
      class="land-see-hero-carousel mx-auto" 
      media="(max-width: 40rem)" 
      width="auto" 
      height="570" 
      layout="fixed-height" 
      [slide]="selectedSlide" 
      on="slideChange:AMP.setState({selectedSlide: event.index})" 
      noloading="" controls="" loop="" type="slides">

      <div class="land-see-hero-content mx-auto relative">
        <amp-img 
        class="cover land-see-hero-image land-see-cover-position-top" 
        alt="Designer Kim Myeong" width="auto" height="278" layout="fixed-height" 
        src="<?= get_template_directory_uri(); ?>/assets/images/shoe-designer-centered.jpg">
        </amp-img>
        <div class="land-see-hero-typography mx-auto center z2 ">
          <a class="land-see-post-category land-see-page-navigation underline caps max-width-1 sm-hide md-hide lg-hide" href="stories.amp.html?category&#x3D;fashion#land-see-fashion">
            Fashion
          </a>
          <h1 class="land-see-hero-title ampstart-title-md">
            <a class="text-decoration-none" href="kim-myeong.amp.html">Designer<br>Kim Myeong</a>
          </h1>
          <p class="land-see-hero-caption ampstart-caption mx-auto max-width-3 pt1 mb3">
            Relatively new to the industry, footwear designer Kim Myeong uses a unique mix of color, texture, and material to make her shoes the must-haves of this year.
          </p>
          <a class="land-see-hero-button text-decoration-none relative" href="kim-myeong.amp.html">
            Read More
          </a>
        </div>
      </div>

      <div class="land-see-hero-content mx-auto relative">
        <amp-img 
          class="cover land-see-hero-image" 
          alt="Skykomish River Valley" width="auto" height="278" layout="fixed-height" 
          src="<?= get_template_directory_uri(); ?>/assets/images/paul-summers.jpg">
        </amp-img>
        <div class="land-see-hero-typography mx-auto center z2 ">
          <a class="land-see-post-category land-see-page-navigation underline caps max-width-1 sm-hide md-hide lg-hide" href="stories.amp.html?category&#x3D;design#land-see-design">Design</a>
          <h1 class="land-see-hero-title ampstart-title-md">
            <a class="text-decoration-none" href="kim-myeong.amp.html">Nature's Inspiration</a>
          </h1>
          <p class="land-see-hero-caption ampstart-caption mx-auto max-width-3 pt1 mb3">
            Habitant lobortis dolor, dictumst feugiat pede diam, minim turpis ut, quam sociosqu egestas sed lorem auctor dui. Venenatis deserunt nulla.
          </p>
          <a class="land-see-hero-button text-decoration-none relative" href="kim-myeong.amp.html">
            Read More
          </a>
        </div>
      </div>

      <div class="land-see-hero-content mx-auto relative">
        <amp-img 
        class="cover land-see-hero-image land-see-cover-position-top" 
        alt="Bold Coast Cottage" width="auto" height="278" layout="fixed-height" s
        rc="<?= get_template_directory_uri(); ?>/assets/images/maine.jpg">
        </amp-img>
        <div class="land-see-hero-typography mx-auto center z2 ">
          <a class="land-see-post-category land-see-page-navigation underline caps max-width-1 sm-hide md-hide lg-hide" href="stories.amp.html?category&#x3D;interiors#land-see-interiors">
            Interiors
          </a>
          <h1 class="land-see-hero-title ampstart-title-md">
            <a class="text-decoration-none" href="kim-myeong.amp.html">Bold Coast Cottage in Main</a>
          </h1>
          <p class="land-see-hero-caption ampstart-caption mx-auto max-width-3 pt1 mb3">
            My travels in Main have taken me to many destinations not in the standard visitor’s guide.
          </p>
          <a class="land-see-hero-button text-decoration-none relative" href="kim-myeong.amp.html">
            Read More
          </a>
        </div>
      </div>
    </amp-carousel>

    <div class="land-see-hero-progress mt2 center">
      <button on="tap:AMP.setState({selectedSlide: 0})" class="px0">
        <amp-img 
          [class]="selectedSlide &#x3D;&#x3D; 0 ? &#39;land-see-progress-indicator land-see-selected-slide&#39; : &#39;land-see-progress-indicator&#39;" 
          class="land-see-progress-indicator land-see-selected-slide" 
          alt="Go to slide 1" width="7" height="7" layout="fixed" 
          src="<?= get_template_directory_uri(); ?>/assets/images/structure/carousel-progress-indicator.svg">
        </amp-img>
      </button>
      <button on="tap:AMP.setState({selectedSlide: 1})" class="px1">
        <amp-img 
          [class]="selectedSlide &#x3D;&#x3D; 1 ? &#39;land-see-progress-indicator land-see-selected-slide&#39; : &#39;land-see-progress-indicator&#39;" 
          class="land-see-progress-indicator" alt="Go to slide 2" width="7" height="7" layout="fixed" 
          src="<?= get_template_directory_uri(); ?>/assets/images/structure/carousel-progress-indicator.svg">
        </amp-img>
      </button>
      <button on="tap:AMP.setState({selectedSlide: 2})" class="px0">
        <amp-img 
          [class]="selectedSlide &#x3D;&#x3D; 2 ? &#39;land-see-progress-indicator land-see-selected-slide&#39; : &#39;land-see-progress-indicator&#39;" 
          class="land-see-progress-indicator" alt="Go to slide 3" width="7" height="7" layout="fixed" 
          src="<?= get_template_directory_uri(); ?>/assets/images/structure/carousel-progress-indicator.svg">
        </amp-img>
      </button>
    </div>
  </div>
  
  <div class="land-see-hero-right absolute">
    <amp-carousel 
    id="land-see-hero-right" 
    class="land-see-hero-carousel mx-auto" 
    width="1290" 
    height="680" 
    layout="responsive" 
    [slide]="selectedSlide" 
    on="slideChange:AMP.setState({selectedSlide: event.index})" 
    noloading="" controls="" loop="" type="slides">

      <div class="land-see-hero-content mx-auto relative">
        <amp-img 
          class="cover land-see-hero-image land-see-cover-position-top" 
          alt="Skykomish River Valley " width="1290" height="680" layout="responsive" 
          src="<?= get_template_directory_uri(); ?>/assets/images/paul-summers.jpg">
        </amp-img>
        <div class="land-see-hero-typography mx-auto center z2 absolute">
          <a class="land-see-post-category land-see-page-navigation underline caps max-width-1 sm-hide md-hide lg-hide" href="stories.amp.html?category&#x3D;design#land-see-design">
            Design
          </a>
          <h1 class="land-see-hero-title ampstart-title-md">
            <a class="text-decoration-none" href="kim-myeong.amp.html">Nature's Inspiration</a>
          </h1>
          <p class="land-see-hero-caption ampstart-caption mx-auto max-width-3 pt1 mb3">
            Habitant lobortis dolor, dictumst feugiat pede diam, minim turpis ut, quam<br>
            sociosqu egestas sed lorem auctor dui. Venenatis deserunt nulla.
          </p>
          <a class="land-see-hero-button text-decoration-none relative" href="kim-myeong.amp.html">
            Read More
          </a>
        </div>
      </div>

      <div class="land-see-hero-content mx-auto relative">
        <amp-img 
          class="cover land-see-hero-image land-see-cover-position-top" 
          alt="Bold Coast Cottage" width="1290" height="680" layout="responsive" 
          src="<?= get_template_directory_uri(); ?>/assets/images/maine.jpg">
        </amp-img>
        <div class="land-see-hero-typography mx-auto center z2 absolute">
          <a class="land-see-post-category land-see-page-navigation underline caps max-width-1 sm-hide md-hide lg-hide" href="stories.amp.html?category&#x3D;interiors#land-see-interiors">Interiors</a>
          <h1 class="land-see-hero-title ampstart-title-md">
            <a class="text-decoration-none" href="kim-myeong.amp.html">Bold Coast Cottage in Main</a>
          </h1>
          <p class="land-see-hero-caption ampstart-caption mx-auto max-width-3 pt1 mb3">
            My travels in Main have taken me to many destinations<br>
            not in the standard visitor’s guide.
          </p>
          <a class="land-see-hero-button text-decoration-none relative" href="kim-myeong.amp.html">
            Read More
          </a>
        </div>
      </div>

      <div class="land-see-hero-content mx-auto relative">
        <amp-img 
          class="cover land-see-hero-image land-see-cover-position-bottom" 
          alt="Designer Kim Myeong" width="1290" height="680" layout="responsive" 
          src="<?= get_template_directory_uri(); ?>/assets/images/shoe-designer.jpg">
        </amp-img>
        <div class="land-see-hero-typography mx-auto center z2 absolute">
          <a class="land-see-post-category land-see-page-navigation underline caps max-width-1 sm-hide md-hide lg-hide" href="stories.amp.html?category&#x3D;fashion#land-see-fashion">Fashion</a>
          <h1 class="land-see-hero-title ampstart-title-md">
            <a class="text-decoration-none" href="kim-myeong.amp.html">Designer Kim Myeong</a></h1>
          <p class="land-see-hero-caption ampstart-caption mx-auto max-width-3 pt1 mb3">
            Relatively new to the industry, footwear designer Kim Myeong uses a unique<br>
            mix of color, texture, and material to make her shoes the must-haves of this year.
          </p>
          <a class="land-see-hero-button text-decoration-none relative" href="kim-myeong.amp.html">
            Read More
          </a>
        </div>
      </div>

    </amp-carousel>
  </div>

</section>
-->

<!-- 
<div class="container mt-5">
<?php  
    if( have_posts() ){
      while( have_posts() ) {
        the_post();
        the_content();
      }
    }
  ?>
</div>
 -->
 
<!--  
<div class="container">
  
  <div class="card-deck">

    <div class="card">
      <amp-img 
        src="<?= get_template_directory_uri(); ?>/assets/images/paul-summers.jpg" 
        width="400" height="200" layout="responsive" class="card-img-top" alt="...">
      </amp-img>
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>

    <div class="card">
      <amp-img 
        src="<?= get_template_directory_uri(); ?>/assets/images/paul-summers.jpg" 
        width="400" height="200" layout="responsive" class="card-img-top" alt="...">
      </amp-img>
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>

    <div class="card">
      <amp-img 
        src="<?= get_template_directory_uri(); ?>/assets/images/paul-summers.jpg" 
        width="400" height="200" layout="responsive" class="card-img-top" alt="...">
      </amp-img>
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>

  </div>

</div>
-->

<!--  
  <div class="container">
    
    <div class="row row-cols-1 row-cols-md-1">
      <div class="col mb-4">
        <div class="card">
          <amp-img 
            src="<?= get_template_directory_uri(); ?>/assets/images/paul-summers.jpg" 
            width="400" height="200" layout="responsive" class="card-img-top" alt="...">
          </amp-img>  
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card">
          <amp-img 
            src="<?= get_template_directory_uri(); ?>/assets/images/paul-summers.jpg" 
            width="400" height="200" layout="responsive" class="card-img-top" alt="...">
          </amp-img>  
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card">
          <amp-img 
            src="<?= get_template_directory_uri(); ?>/assets/images/paul-summers.jpg" 
            width="400" height="200" layout="responsive" class="card-img-top" alt="...">
          </amp-img>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card">
          <amp-img 
            src="<?= get_template_directory_uri(); ?>/assets/images/paul-summers.jpg" 
            width="400" height="200" layout="responsive" class="card-img-top" alt="...">
          </amp-img>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
          </div>
        </div>
      </div>
    </div>
  
  </div>
-->

<!--  
<div class="container">
  <h3><b>EDITORIAL</b></h3>
  <hr>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="card">
        <amp-img 
          src="<?= get_template_directory_uri(); ?>/assets/images/paul-summers.jpg" 
          width="400" height="300" layout="responsive" class="card-img-top" alt="...">
        </amp-img>  
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="card">
        <amp-img 
          src="<?= get_template_directory_uri(); ?>/assets/images/paul-summers.jpg" 
          width="400" height="300" layout="responsive" class="card-img-top" alt="...">
        </amp-img>  
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="card">
        <amp-img 
          src="<?= get_template_directory_uri(); ?>/assets/images/paul-summers.jpg" 
          width="400" height="300" layout="responsive" class="card-img-top" alt="...">
        </amp-img>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="card">
        <amp-img 
          src="<?= get_template_directory_uri(); ?>/assets/images/paul-summers.jpg" 
          width="400" height="300" layout="responsive" class="card-img-top" alt="...">
        </amp-img>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
        </div>
      </div>
    </div>
  </div>
</div>
-->

<!-- 
<section class="-sh"> 
  <div class="-o_"> 
    <div class="-sp"> 
      <div class="-sv -sg"> 
        <a target="_blank" rel="noopener" href="https://amp-article.herokuapp.com/" title="Too much choice"> 
          <div class="-sm"> 
            <h4>Too much choice</h4> 
            <span class="-n"> 
              <div class="ap-a-ico -i"> 
                <svg>
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#external"></use>
                </svg> 
              </div> 
              <span class="-r">Open Use Case</span> 
            </span> 
          </div> 
          <amp-img 
          src="/static/img/case-grid-choices.jpg" layout="responsive" width="200" height="220" 
          alt="Screenshot of use case: Too much choice" 
          srcset="https://amp.dev/static/img/case-grid-choices.jpg?width=220&amp;hash=bc814c48682b061bdd5f7f089df84088621f3d37 220w, https://amp.dev/static/img/case-grid-choices.jpg?width=470&amp;hash=bc814c48682b061bdd5f7f089df84088621f3d37 470w, https://amp.dev/static/img/case-grid-choices.jpg?width=680&amp;hash=bc814c48682b061bdd5f7f089df84088621f3d37 680w" 
          class="i-amphtml-layout-responsive i-amphtml-layout-size-defined i-amphtml-element i-amphtml-layout" 
          i-amphtml-layout="responsive" style="--loader-delay-offset:407ms !important;">
            
            <i-amphtml-sizer style="display:block;padding-top:110.0000%;" slot="i-amphtml-svc"></i-amphtml-sizer>
            
            <img decoding="async" sizes="(max-width: 1920px) 704px, 100vw" 
            alt="Screenshot of use case: Too much choice" 
            src="/static/img/case-grid-choices.jpg" 
            srcset="https://amp.dev/static/img/case-grid-choices.jpg?width=220&amp;hash=bc814c48682b061bdd5f7f089df84088621f3d37 220w, https://amp.dev/static/img/case-grid-choices.jpg?width=470&amp;hash=bc814c48682b061bdd5f7f089df84088621f3d37 470w, https://amp.dev/static/img/case-grid-choices.jpg?width=680&amp;hash=bc814c48682b061bdd5f7f089df84088621f3d37 680w" 
            class="i-amphtml-fill-content i-amphtml-replaced-content">
          
          </amp-img> 
        </a> 
      </div>
    </div>
  </div> 
</section>
 -->

 <!-- 
<div class="-sv">
  <a target="_blank" rel="noopener" href="https://amp-article.herokuapp.com/" title="Too much choice"> 
    <div class="-sm"> 
      <h4>Too much choice</h4> 
      <span class="-n"> 
        <div class="ap-a-ico -i"> 
          <svg>
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#external"></use>
          </svg> 
        </div> 
        <span class="-r">Open Use Case</span> 
      </span> 
    </div> 
    <amp-img 
    src="/static/img/case-grid-choices.jpg" layout="responsive" width="200" height="220" 
    alt="Screenshot of use case: Too much choice" 
    srcset="https://amp.dev/static/img/case-grid-choices.jpg?width=220&amp;hash=bc814c48682b061bdd5f7f089df84088621f3d37 220w, https://amp.dev/static/img/case-grid-choices.jpg?width=470&amp;hash=bc814c48682b061bdd5f7f089df84088621f3d37 470w, https://amp.dev/static/img/case-grid-choices.jpg?width=680&amp;hash=bc814c48682b061bdd5f7f089df84088621f3d37 680w" 
    class="i-amphtml-layout-responsive i-amphtml-layout-size-defined i-amphtml-element i-amphtml-layout" 
    i-amphtml-layout="responsive" style="--loader-delay-offset:407ms !important;">
      
      <i-amphtml-sizer style="display:block;padding-top:110.0000%;" slot="i-amphtml-svc"></i-amphtml-sizer>
      
      <img decoding="async" sizes="(max-width: 1920px) 704px, 100vw" 
      alt="Screenshot of use case: Too much choice" 
      src="/static/img/case-grid-choices.jpg" 
      srcset="https://amp.dev/static/img/case-grid-choices.jpg?width=220&amp;hash=bc814c48682b061bdd5f7f089df84088621f3d37 220w, https://amp.dev/static/img/case-grid-choices.jpg?width=470&amp;hash=bc814c48682b061bdd5f7f089df84088621f3d37 470w, https://amp.dev/static/img/case-grid-choices.jpg?width=680&amp;hash=bc814c48682b061bdd5f7f089df84088621f3d37 680w" 
      class="i-amphtml-fill-content i-amphtml-replaced-content">
    
    </amp-img> 
  </a> 
</div>
 -->


 <div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
        <div class="card text-center">
          <div class="card-header">
            <i class="fas fa-clock"></i>
          </div>
          <div class="card-body">
            <h6 class="card-title">Senin – Jum'at, 08:00 – 17:00</h6>
          </div>
          <div class="card-footer text-muted btn-primary">BUSINESS HOURS</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
        <div class="card text-center">
          <div class="card-header">
            <i class="fab fa-whatsapp-square"></i>
          </div>
          <div class="card-body">
            <h6 class="card-title">+62 895 1955 7788</h6>
          </div>
          <div class="card-footer text-muted btn-primary">WHATSAPP</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
        <div class="card text-center">
          <div class="card-header">
            <i class="fas fa-phone"></i>
          </div>
          <div class="card-body">
            <h6 class="card-title">(021) 5575 0345 – 46</h6>
          </div>
          <div class="card-footer text-muted btn-primary">TELEPON</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
        <div class="contact-item">
          <i class="fas fa-wrench"></i>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
        <div class="contact-item">
          <i class="fas fa-envelope"></i>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
        <div class="contact-item">
          <i class="fas fa-map-marked-alt"></i>
        </div>
      </div>
    </div>
    </div>
</div>

<div class="card-group">

<div class="card text-center">
  <div class="card-body bg-primary pb-3 pt-3">
    <i class="fas fa-clock fa-8x" style="color: white"></i>
  </div>
  <div class="card-body pb-3 pt-3">
    <span class="font-weight-bold">Senin – Jum'at, 08:00 – 17:00</span>
  </div>
  <div class="card-footer btn-primary">BUSINESS HOURS</div>
</div>

<div class="card text-center">
  <div class="card-body bg-primary pb-3 pt-3">
    <i class="fab fa-whatsapp-square fa-8x" style="color: white"></i>
  </div>
  <div class="card-body pb-3 pt-3">
    <span class="font-weight-bold">+62 895 1955 7788</span>
  </div>
  <div class="card-footer btn-primary">WHATSAPP</div>
</div>

<div class="card text-center">
  <div class="card-body bg-primary pb-3 pt-3">
    <i class="fas fa-phone fa-8x" style="color: white"></i>
  </div>
  <div class="card-body pb-3 pt-3">
    <span class="font-weight-bold">(021) 5575 0345 – 46</span>
  </div>
  <div class="card-footer btn-primary">TELEPON</div>
</div>

</div>