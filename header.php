<!doctype html>
  <html ⚡ lang="id">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
      <meta name="description" content="This is the AMP Boilerplate.">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
      <link rel="preload" as="script" href="https://cdn.ampproject.org/v0.js">
      <script async src="https://cdn.ampproject.org/v0.js"></script>
      <!-- Import other AMP Extensions here -->
      <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
      <style amp-custom>
        <?php 
          // include('amp-preview.css');
          include('style.css');
        ?>
      </style>
      <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
      <?php wp_head(); ?>
    </head>
<body>
  
<header class="mega-menu full-width fixed">
  <div class="container-fluid">
    <div class="row">
      <div class="header">
        <div class="container">
          <nav class="main-menu" id="main-menu">
            <!-- Mobile Menu -->
            <label for="mobile" id="mobile-menu">
              <a href="#" title="AMP CSS Navigation">
                <amp-img
                  alt="AMP CSS Navigation"
                  title="AMP CSS Navigation"
                  src="https://www.ampcssframework.com/assets/img/logo/logo.png"
                  width="21"
                  height="24"
                  class="img-logo">
                </amp-img>
                <span class="logo">AMP <strong>CSS</strong> FRAMEWORK</span>
              </a>
              <span class="main-menu-dropdown-icon">
                <i class="hamburger"></i>
              </span>
            </label>
        
            <input type="checkbox" id="mobile">
        
            <!-- Main menu -->
            <ul class="main-menu">
              <!-- Left links -->
              <li class="main-menu-logo">
                <a href="#" title="AMP CSS Navigation">
                  <amp-img
                    alt="AMP CSS Navigation"
                    title="AMP CSS Navigation"
                    src="https://www.ampcssframework.com/assets/img/logo/logo.png"
                    width="28"
                    height="32"
                    class="img-logo">
                  </amp-img>
                  <span class="logo">AMP <strong>CSS</strong> FRAMEWORK</span>
                </a>
              </li>

              <li>
                <a href="#" title="...">Single link</a>
              </li>
          
              <li class="main-menu-dropdown">
                <a title="AMP · CSS Framework Dropdown">
                  Dropdown
                  <span class="main-menu-dropdown-icon">
                    <i class="arrow-down"></i>
                  </span>
                </a>
                <label class="main-menu-dropdown-icon" for="main-menu-dropdown-list-1">
                  <i class="arrow-down arrow-down-mobile"></i>
                </label>
                <input type="checkbox" id="main-menu-dropdown-list-1">
            
                <ul class="main-menu-dropdown-list">
                  <li><a href="#" title="AMP CSS Framework">1</a></li>
                  <li><a href="#" title="AMP CSS Framework">2</a></li>
                  <li><a href="#" title="AMP CSS Framework">3</a></li>
                  <li><a href="#" title="AMP CSS Framework">4</a></li>
                </ul>
              </li>
          
              <!-- Right links -->
              <li class="main-menu-right">
                <a href="#" title="...">Single link</a>
              </li>
            </ul>
            <!-- /main-menu -->
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>