<?php
  global $thePage, $cmsPageData, $siteTokens;
  $siteConfig = new SiteConfig($thePage, $csmPageData, $siteTokens);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>[[title]]</title>

    <meta name="description" content="[[description]]">
    <meta name="keywords" content="[[keywords]]">

    [[top-inject]]
  </head>

  <body>
    <nav>
      <!-- Top navigation -->
      <section class="navigation-layout">
        <!-- BG for banner -->
        <div class="banner-bg"></div>
        <div class="banner">
          <span class="serving"> Yes, We Serve This Area </span>

          <span class="number"> 1-800-922-2488 </span>
        </div>

        <!-- Super nav -->
        [[top-nav-links]]

        <div class="logo-container">
          <a href='/'>
            <img
              class="object-contain- object-left- img"
              src="https://cdn.treehouseinternetgroup.com/cms_images/755/logo.png"
            />
          </a>
          
        </div>
      </section>
    </nav>

    <main>
      <? if($siteConfig->pageType === "HOME"): ?>
      <!-- Hero Section -->
      <section class="hero space-section">
        <div class="hero-showcase">
          <img src="https://cdn.treehouseinternetgroup.com/cms_images/755/showcase.jpg" />
        </div>

        <div class="hero-content">
          <div class="hero-content-header">
            <h2 class="title">
              <span>California’s Residential </span>
              <br />
              <span>& Commercial Foundation Repair Experts</span>
            </h2>
          </div>

          <div class="hero-content-showcase">
            <img src="https://cdn.treehouseinternetgroup.com/cms_images/755/showcase.jpg" />
          </div>

          <div class="hero-main">
            <p class="hero-slogan">
              We are here to help solve your Concrete & Foundation issues
            </p>

            <div class="hero-features">
              <ul class="list">
                <li class="list-item">Foundation Repair</li>
                <li class="list-item">Crawl Space Repair</li>
                <li class="list-item">Seismic Retrofitting</li>
              </ul>

              <ul class="list">
                <li class="list-item">Concrete Leveling</li>
                <li class="list-item">Commercial Foundation</li>
                <li class="list-item">Seawall Repair</li>
              </ul>
            </div>

            <div class="hero-action">
              <a class="button" href='/free-estimate.html'>Free Estimate</a>
            </div>
          </div>

          <div class="hero-refer-wrapper">
            <div class="hero-refer">
              <p class="refer-heading">Previous Customer?</p>
              <p class="refer-text">Refer us and receive $100!</p>
              <div class="refer-action"></div>
            </div>
          </div>
        </div>
      </section>

      <!-- Services Section -->
      <section class="services-section space-section">
        <div class="item" tabindex="0">
          <div class="item-showcase">
            <img src="https://cdn.treehouseinternetgroup.com/cms_images/300/srv-img-foundation-repair.jpg" class="item-showcase-img">
          </div>

          <div class="item-content">
            <h3 class="item-content-title">Foundation Repair</h3>

            <p class="item-content-body">We will find the right solution for your foundation problems.</p>

            <div class="item-content-action">
              <a class="button">Learn more</a>
            </div>
          </div>
        </div>

        <div class="item" tabindex="0">
          <div class="item-showcase">
            <img src="https://cdn.treehouseinternetgroup.com/cms_images/300/srv-img-concrete.jpg" class="item-showcase-img">
          </div>

          <div class="item-content">
            <h3 class="item-content-title">Concrete Lifting</h3>

            <p class="item-content-body">Quickly &amp; effectively stabilize your sinking, settling concrete!</p>

            <div class="item-content-action">
              <a class="button">Learn more</a>
            </div>
          </div>
        </div>

        <div class="item" tabindex="0">
          <div class="item-showcase">
            <img src="https://cdn.treehouseinternetgroup.com/cms_images/300/srv-img-crawlspace.jpg" class="item-showcase-img">
          </div>

          <div class="item-content">
            <h3 class="item-content-title">Crawl Space Repair</h3>

            <p class="item-content-body">We offer complete crawl space encapsulation &amp; repair services.</p>

            <div class="item-content-action">
              <a class="button">Learn more</a>
            </div>
          </div>
        </div>

        <div class="item" tabindex="0">
          <div class="item-showcase">
            <img src="https://cdn.treehouseinternetgroup.com/cms_images/300/seawall-bulkhead-repair.png" class="item-showcase-img">
          </div>

          <div class="item-content">
            <h3 class="item-content-title">Seawall &amp; Bulkhead Repair</h3>

            <p class="item-content-body">
              Stabilize seawalls &amp; bulkheads with our non-invasive, durable repair services.
            </p>

            <div class="item-content-action">
              <a class="button">Learn more</a>
            </div>
          </div>
        </div>

        <div class="item" tabindex="0">
          <div class="item-showcase">
            <img src="https://d6449bb3dc657045bfc9-290115cc0d6de62a29c33db202ae565c.ssl.cf1.rackcdn.com/300/srv-img-retrofitting.jpg" class="item-showcase-img">
          </div>

          <div class="item-content">
            <h3 class="item-content-title">Seismic Retrofitting</h3>

            <p class="item-content-body">Reduce the risk of earthquake damage with professional reinforcements.</p>

            <div class="item-content-action">
              <a class="button">Learn more</a>
            </div>
          </div>
        </div>

        <div class="item" tabindex="0">
          <div class="item-showcase">
            <img src="https://cdn.treehouseinternetgroup.com/cms_images/300/srv-img-commercial.jpg" class="item-showcase-img">
          </div>

          <div class="item-content">
            <h3 class="item-content-title">Commercial Foundation</h3>

            <p class="item-content-body">We offer proven solutions for existing structures and properties.</p>

            <div class="item-content-action">
              <a class="button">Learn more</a>
            </div>
          </div>
        </div>
      </section>

      <!-- Features Section -->
      <section class="features space-section">
        <div class="features-container">
          <div class="features-content">
            <div class="features-header">
              <h2 class="title">
                <span>Why Southern California</span>

                <br>

                <span>Homeowners Choose Saber</span>
              </h2>
            </div>

            <div class="features-content-video">
              <iframe width="100%" height="100%" src="https://www.youtube.com/embed/xBmpozyUt9M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            </div>

            <div class="features-items">
              <div class="feature-item">
                <div class="item-icon"></div>

                <div class="item-text">Privately-owned & locally- operated for more than 30 years</div>
              </div>

              <div class="feature-item">
                <div class="item-icon"></div>

                <div class="item-text">Privately-owned & locally- operated for more than 30 years</div>
              </div>
            </div>
          </div>

          <div class="features-video">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/xBmpozyUt9M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
          </div>
        </div>

        <div class="features-action">
          <a class="button">More About Us</a>
        </div>
      </section>

      <!-- Social Proof Section -->
      <section class="social-proof space-section">
        <div class="social-proof-header">
          <h2 class="title">
            <span>Saber Foundation Repair</span>

            <br>

            <span>Reviews and Ratings</span>
          </h2>
        </div>

        <div class="social-proof-ratings">
          <div class="rating-item">
            <div class="rating-stars">
              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" class="rating">
                <path fill="none" d="M0 0h24v24H0z"></path>

                <path fill="currentColor" d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"></path>
              </svg>

              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" class="rating">
                <path fill="none" d="M0 0h24v24H0z"></path>

                <path fill="currentColor" d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"></path>
              </svg>

              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" class="rating">
                <path fill="none" d="M0 0h24v24H0z"></path>

                <path fill="currentColor" d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"></path>
              </svg>

              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" class="rating">
                <path fill="none" d="M0 0h24v24H0z"></path>

                <path fill="currentColor" d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"></path>
              </svg>

              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" class="rating">
                <path fill="none" d="M0 0h24v24H0z"></path>

                <path fill="currentColor" d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"></path>
              </svg>
            </div>

            <div class="rating-content">
              <div class="rating-content-body">"Would give Alvin and his crew 10 stars if possible!"</div>

              <div class="rating-content-client">Charles F from San Pedro, CA</div>
            </div>
          </div>

          <div class="rating-item">
            <div class="rating-stars">
              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" class="rating">
                <path fill="none" d="M0 0h24v24H0z"></path>

                <path fill="currentColor" d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"></path>
              </svg>

              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" class="rating">
                <path fill="none" d="M0 0h24v24H0z"></path>

                <path fill="currentColor" d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"></path>
              </svg>

              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" class="rating">
                <path fill="none" d="M0 0h24v24H0z"></path>

                <path fill="currentColor" d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"></path>
              </svg>

              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" class="rating">
                <path fill="none" d="M0 0h24v24H0z"></path>

                <path fill="currentColor" d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"></path>
              </svg>

              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" class="rating">
                <path fill="none" d="M0 0h24v24H0z"></path>

                <path fill="currentColor" d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"></path>
              </svg>
            </div>

            <div class="rating-content">
              <div class="rating-content-body">"Would give Alvin and his crew 10 stars if possible!"</div>

              <div class="rating-content-client">Charles F from San Pedro, CA</div>
            </div>
          </div>

          <div class="rating-item">
            <div class="rating-stars">
              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" class="rating">
                <path fill="none" d="M0 0h24v24H0z"></path>

                <path fill="currentColor" d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"></path>
              </svg>

              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" class="rating">
                <path fill="none" d="M0 0h24v24H0z"></path>

                <path fill="currentColor" d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"></path>
              </svg>

              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" class="rating">
                <path fill="none" d="M0 0h24v24H0z"></path>

                <path fill="currentColor" d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"></path>
              </svg>

              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" class="rating">
                <path fill="none" d="M0 0h24v24H0z"></path>

                <path fill="currentColor" d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"></path>
              </svg>

              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" class="rating">
                <path fill="none" d="M0 0h24v24H0z"></path>

                <path fill="currentColor" d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"></path>
              </svg>
            </div>

            <div class="rating-content">
              <div class="rating-content-body">"Would give Alvin and his crew 10 stars if possible!"</div>

              <div class="rating-content-client">Charles F from San Pedro, CA</div>
            </div>
          </div>
        </div>

        <div class="social-proof-action">
          <a class="button">View More Reviews</a>
        </div>
      </section>

      <!-- About Section -->
      <section class="about-section space-section">
        <div class="about-content-container">
          <h2 class="title">
            <span>Southern CA's Local Foundation</span>

            <br>

            <span>Repair & Concrete Leveling Contractor</span>
          </h2>

          <div class="about-content-showcase">
            <div class="showcase-wrapper">
              <img src="https://cdn.treehouseinternetgroup.com/cms_images/755/hands-1.png">
            </div>
          </div>

          <p>
            A foundation problem can have a huge impact on your home's safety and
            structural integrity, which is why it's essential to have foundation
            repair experts you can trust with your home. At Saber Foundation Repair,
            we have over 30 years of experience providing complete foundation repair,
            concrete leveling, crawl space encapsulation, and earthquake retrofitting
            services in California. We know what it takes to give your home the right
            solution to ensure safety and stability. As the local member of the
            international Supportworks network, we provide the highest quality
            products and services for our proven foundation and concrete repair
            solutions. If you have foundation cracks, bowing walls, foundation
            settlement, or any other issue, call us today at 951-801-4471 or contact
            us online to get a free estimate on any of our services. We provide all
            our work in Los Angeles, Long Beach, San Diego, Santa Ana, Anaheim,
            Irvine, Glendale, Chula Vista, Huntington Beach, Oxnard and throughout the
            nearby areas.
          </p>
        </div>

        <div class="about-showcase">
          <div class="showcase-wrapper">
            <img src="https://cdn.treehouseinternetgroup.com/cms_images/755/hands-1.png">
          </div>
        </div>
      </section>

      <!-- Before After Section -->
      <section class="before-after-section space-section">
        <div class="before-after-header-container">
          <h2 class="header">Recent Projects in Southern CA</h2>
        </div>

        <div class="before-after-carousal-wrapper">
          <div class="before-after-controls-container">
            <button class="control prev-control"></button>

            <button class="control next-control"></button>
          </div>

          <div class="before-after-wrapper carousel">
            <div class="before-after-container">
              <div class="before-after-slide">
                <div class="before-after-slide-content">
                  <div class="before-after-slide-body">
                    <div class="slide-showcase">
                      <img src="https://cdn.treehouseinternetgroup.com/uploads/before_after/3392/medium/before.jpg">
                    </div>

                    <div class="slide-showcase">
                      <img src="https://cdn.treehouseinternetgroup.com/uploads/before_after/3392/medium/after.jpg">
                    </div>
                  </div>
                </div>
              </div>

              <div class="before-after-slide">
                <div class="before-after-slide-content">
                  <div class="before-after-slide-body">
                    <div class="slide-showcase">
                      <img src="https://cdn.treehouseinternetgroup.com/uploads/before_after/3392/medium/pool-before.jpg">
                    </div>

                    <div class="slide-showcase">
                      <img src="https://cdn.treehouseinternetgroup.com/uploads/before_after/3392/medium/pool-after.jpg">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="before-after-action-container">
          <a class="button">View More Before & After Photos</a>
        </div>
      </section>

      <? elseif($siteConfig->pageType === "CONTENT"): ?>
      <? if($siteConfig->showContentHeader): ?>
      <section class="content-template-header space-section">
        <div class="bg-container">
          <div class="bg-img">
            [[content-header-img]]
          </div>
          <div class="bg-overlay"></div>
        </div>

        <div class="template-header-title">
          <h1>[[content-header-title]]</h1>
        </div>
      </section>
      <? endif; ?>

      <section
        class="content-template-article space-section <?= $siteConfig->showSilo ? "" : 'no-silo'; ?> <?= $siteConfig->showBreadcrumbs ? "" : 'no-breadcrumbs'; ?>"
      >
        <? if($siteConfig->showBreadcrumbs): ?>
        <nav aria-label="Breadcrumb" class="content-template-breadcrumbs">
          [[breadcrumbs]]
        </nav>
        <? endif; ?>

        <? if($siteConfig->showSilo): ?>
        <aside class="content-template-silo">
          <div class="content-template-silo-menu">
            <button id="silo-menu-button">
              Open Menu
              <span class="dropdown">
                <svg
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M6.34317 7.75732L4.92896 9.17154L12 16.2426L19.0711 9.17157L17.6569 7.75735L12 13.4142L6.34317 7.75732Z"
                    fill="currentColor"
                  />
                </svg>
              </span>
            </button>
          </div>
          <div class="content-template-silo-container" id="silo-container">
            [[single_silo_nav]]
          </div>
        </aside>
        <? endif; ?>

        <article class="content-template-main">
          <? endif; ?>
          [[content]]
          <? if($siteConfig->pageType === "CONTENT"): ?>
        </article>
      </section>
      <? endif; ?>
      
      <? if ($siteConfig->showServiceAreas): ?>
      <!-- Service Areas Section -->
      <section class="service-areas space-section">
        <div class="bg-background"></div>

        <div class="service-area-wrapper">
          <div class="service-area-list">
            <div class="service-area-list-content">
              <h2 class="service-area-title">our service area</h2>
              [[city_scroll:50]]
            </div>
          </div>

          <div class="service-area-map">
            <a href="https://www.saberfoundations.com/service-area.html"
              ><img
                loading="lazy"
                decoding="async"
                src="https://cdn.treehouseinternetgroup.com/cms_images/300/saber-two-tone-map-2019.png"
                style="width: 70%"
                width="800"
                height="825"
                alt="Saber Foundation Repair Service Area"
            /></a>
          </div>
        </div>
      </section>
      <? endif; ?>
      
      <? if($siteConfig->pageType === "HOME"): ?>
      <!-- Cred Section -->
      <section class="cred-section space-section">
        <div class="cred-controls-container">
          <button class="control prev-control"></button>

          <button class="control next-control"></button>
        </div>

        <div class="carousel cred-wrapper">
          <div class="cred-container">
            <div class="cred-slide">
              <img class="cred-img" src="https://cdn.treehouseinternetgroup.com/uploads/affiliations/logo/58e2c31ae2dc7_carlsbad-chamber-of-commerce-logo-1.png" alt="Carlsbad Chamber of Commerce">
            </div>

            <div class="cred-slide">
              <img class="cred-img" src="https://cdn.treehouseinternetgroup.com/uploads/affiliations/logo/5ca281c55f31f_sfs-chamber-large.jpg" alt="Santa Fe Springs Chamber of Commerce">
            </div>

            <div class="cred-slide">
              <img class="cred-img" src="https://cdn.treehouseinternetgroup.com/uploads/affiliations/logo/5c6ee99c46617_ebb-logo-002.png" alt="Earthquake Brace + Bolt">
            </div>

            <div class="cred-slide">
              <img class="cred-img" src="https://cdn.treehouseinternetgroup.com/uploads/affiliations/logo/5c6eea0769d98_sdar-square-002.jpg" alt="San Diego Association of Realtors">
            </div>

            <div class="cred-slide">
              <img class="cred-img" src="https://cdn.treehouseinternetgroup.com/uploads/affiliations/logo/5c6eeb11e3383_ocar-logo-002.jpg" alt="Orange County Realtors Association of Professionals">
            </div>

            <div class="cred-slide">
              <img class="cred-img" src="https://cdn.treehouseinternetgroup.com/uploads/affiliations/logo/5c6ef39a215a1_bbb-logo-002.png" alt="Better Business Bureau">
            </div>

            <div class="cred-slide">
              <img class="cred-img" src="https://cdn.treehouseinternetgroup.com/uploads/affiliations/logo/59108df723790_tbs-logo.png" alt="Basement Systems Certified Dealer Network Member">
            </div>

            <div class="cred-slide">
              <img class="cred-img" src="https://cdn.treehouseinternetgroup.com/uploads/affiliations/logo/59108c8ec5ae4_supportworks-logo.jpg" alt="Supportworks Dealer Member">
            </div>

            <div class="cred-slide">
              <img class="cred-img" src="https://cdn.treehouseinternetgroup.com/uploads/affiliations/logo/59108d70c9d24_cleanspace-badge.png" alt="Certified CleanSpace Dealer">
            </div>

            <div class="cred-slide">
              <img class="cred-img" src="https://cdn.treehouseinternetgroup.com/uploads/affiliations/logo/1404.jpg" alt="Dun &amp; Bradstreet Credibility Corp.">
            </div>
          </div>
        </div>
      </section>
      <? endif; ?>
    </main>

    <footer class="footer">
      <div class="row">
        <div class="large-7 large-push-5 columns">
          <div id="footer-links">
            [[bottom-nav-links]]
          </div>
        </div>
        
        <div class="large-5 large-pull-7 columns">
          <div id="footer-contact">
            <a href="/free-estimate.html" id="footer-btn">contact us</a>
            <p class="footer-phone">Or call us at
              <span><a href="tel:<?php echo $phonenumber; ?>" class="phone_link">[phone]</a></span>
            </p>
            <p class="footer-address"> [[display_addresses]] </p>
            <p>[license number]</p>  
          </div>
        </div>
      </div>
    </footer>

    [[bottom-inject]]
  </body>
</html>