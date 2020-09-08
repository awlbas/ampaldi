<!doctype html>
  <html ⚡ lang="id">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
      <meta name="description" content="This is the AMP Boilerplate.">
      <link rel="preload" as="script" href="https://cdn.ampproject.org/v0.js">
      <script async src="https://cdn.ampproject.org/v0.js"></script>
      <!-- Import other AMP Extensions here -->
      <script async custom-element="amp-mega-menu" src="https://cdn.ampproject.org/v0/amp-mega-menu-0.1.js"></script>
      <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
      <script async custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js"></script>
      <style amp-custom>
        <?php include('amp-preview.css'); ?>
      </style>
      <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
      <?php wp_head(); ?>
    </head>
<body>
  
<header>
  <amp-mega-menu id="mega-menu" height="64" layout="fixed-height">
    <nav class="nav-wrapper">
        <ul id="nav-mobile" class="left">
          <li>
            <span role="button"><h6>HOME</h6></span>
            <div role="dialog">
              <ul> <li>item 1</li><li>item 2</li><li>item 3</li> </ul>
            </div>
          </li>
          <li>
            <span role="button"><h6>ABOUT</h6></span>
            <div role="dialog">
              <ul> <li>item 4</li><li>item 5</li><li>item 6</li> </ul>
            </div>
          </li>
          <li>
            <span role="button"><h6>CONTACT</h6></span>
            <div role="dialog">
              <ul> <li>item 7</li><li>item 8</li><li>item 9</li> </ul>
            </div>
          </li>
        </ul>
      </nav>
  </amp-mega-menu>
  <button class="sidebar-open-btn" on="tap:sidebar">=</button>
</header>
<amp-sidebar id="sidebar" layout="nodisplay">
  <amp-accordion>
    <!-- list of menu items here -->
    <section>
      <h4>menu item</h4>
      <div>more content</div>
    </section>
  </amp-accordion>
</amp-sidebar>
