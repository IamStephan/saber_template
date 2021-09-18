<?php
  class SiteConfig {
    /**
     * Proxied Data
     * =============
     * Some data is only available AFTER the before borders
     * are done. So I'm passing these values as references
     * from the point that they are actually available (borders)
     */
    private $thePage;
    private $cmsPageData;
    private $siteTokens;

    /**
     * Collections
     * ===========
     */
    private $noSilo = array(
      "insulation",
      "refer",
      "opinion",
      "sitemap",
      "service-area",
      "privacy-policy",
      "free-estimate"
    );
    private $modulePages = array(
      "opinion",
      "before-after",
      "photo-gallery",
      "refer",
      "meet-the-team",
      "news-and-events",
      "blog",
      "reviews",
      "awards",
      "press-release",
      "crew-review",
      "case-studies",
      "affiliations",
      "technical-papers",
      "case-studies",
      "search",
      "service-area",
      "homeshows",
      "about-us",
      "testimonials",
      "free-estimate"
    );
    private $contentHeaderImages = array(
      // Will add links when transfer happens (Not 1-to-1 mapping of services in devsite)
      // "about-us",
      // "basement-waterproofing",
      // "commercial-foundation-contractor",
      // "seismic",
      // "foundation-repair",
      // "concrete-lifting",
      // "crawl-space-repair",
      // "sump-pump",
      // "radon-gas-mitigation",
      // "flood-vents",
      // "service-area",
      "default" => "https://www.saberfoundations.com/core/images/templates/health/headers/wall-crack-silo-test.jpg"
    );
    private $devLinks = array(
      // Css files
      "global.css" => "https://combinatronics.com/IamStephan/saber_template/master/prod/global.css",
      "home.css" => "https://combinatronics.com/IamStephan/saber_template/master/prod/home.css",
      "content.css" => "https://combinatronics.com/IamStephan/saber_template/master/prod/content.css",

      // JS Files
      "dev_tools.js" => "https://combinatronics.com/IamStephan/saber_template/master/prod/dev_tools.js",
      "home.js" => "https://combinatronics.com/IamStephan/saber_template/master/prod/home.js",
      "content.js" => "https://combinatronics.com/IamStephan/saber_template/master/prod/content.js"
    );
    private $prodLinks = array(
      "favicon.ico" => "https://dc69b531ebf7a086ce97-290115cc0d6de62a29c33db202ae565c.ssl.cf1.rackcdn.com/300/favicon.ico",

      // Fonts
      "fonts.preconnect" => "https://fonts.gstatic.com",
      "fonts.css" => "https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;800;900&display=swap",

      // scripts
      "jquery.js" => "https://cdn.treehouseinternetgroup.com/cms_core/assets/js/jquery.min.js"
    );

    /**
     * Helper properties
     * =================
     */
    public $pageType;
    public $isCityPage;
    public $isDevelopment = true;


    /**
     * Switches
     * ==========
     * These are used to render content based on page conditions such as:
     *    - Page Type
     *    - Collection of pages
     *    - Specific pages
     */
    public $showSilo = true;
    public $showBreadcrumbs = true;
    public $showServiceAreas = true;
    public $showContentHeader = true;

    function __construct($thePage, &$cmsPageData, &$siteTokens) {
      $this->thePage = $thePage;
      $this->cmsPageData = &$cmsPageData;
      $this->siteTokens = &$siteTokens;
      $this->isCityPage = (strpos($thePage, 'service-area') !== false) && (strpos($thePage, '/') !== false);

      $this->handleSetters();
      $this->handleSwitches();
      $this->handleCustomTokenCreation();
    }


    /**
     * SETTERS
     * ========================
     */
    private function handleSetters() {
      $this->set_pageType();
    }

    private function set_pageType() {
      if($this->thePage == "index") {
        $this->pageType = 'HOME';
      } else if($this->substr_in_array($macroPages, $thePage)) {
        $this->pageType = 'CONTENT';
      } else {
        // This should be UKNOWN
        $this->pageType = 'CONTENT';
      }
    }


    /**
     * SWITCH HANDLERS
     * ========================
     */
    private function handleSwitches() {
      $this->set_showSilo_switch();
      $this->set_showBreadcrumbs_switch();
      $this->set_showServiceAreas_switch();
      $this->set_showContentHeader_switch();
    }

    private function set_showSilo_switch() {
      if($this->substr_in_array($this->noSilo, $this->thePage) || $this->isCityPage) {
        $this->showSilo = false;
      }
    }

    private function set_showBreadcrumbs_switch() {
      if(strpos($this->thePage, 'free-estimate') !== false) {
        $this->showBreadcrumbs = false;
      }
    }

    private function set_showServiceAreas_switch() {
      if((strpos($this->thePage, 'service-area') !== false)) {
        // Don't show service area section in service area pages
        $this->showServiceAreas = false;
      }
    }

    private function set_showContentHeader_switch() {
      if(strpos($this->thePage, 'free-estimate') !== false) {
        // Don't show content header in the free estimate page
        $this->showContentHeader = false;
      }
    }


    /**
     * CUSTOM TOKEN CREATION
     * =======================
     */
    private function handleCustomTokenCreation() {
      // Tags injection
      $this->create_TopInject_token();
      $this->create_BottomInject_token();
      
      // Links Generation
      $this->create_TopNavLinks_token();
      $this->create_BottomNavLinks_token();

      // Content header
      $this->create_ContentHeaderTitle_token();
      $this->create_ContentHeaderImage_token();
    }

    private function create_TopInject_token() {
      $topData = "";

      // Insert favicon
      $topData .= $this->generateLinkTag($this->prodLinks['favicon.ico'], "icon");
      // Insert CSS reset
      $topData .= $this->generateLinkTag($this->devLinks['global.css']);

      // Insert fonts
      $topData .= $this->generateLinkTag($this->prodLinks['fonts.preconnect'], "preconnect");
      $topData .= $this->generateLinkTag($this->prodLinks['fonts.css'], "stylesheet");

      // Page type based injection
      switch($this->pageType) { 
        case "HOME": {
          $topData .= $this->generateLinkTag($this->devLinks['home.css']);
          break;
        }

        
        case "CONTENT": {
          $topData .= $this->generateLinkTag($this->devLinks['content.css']);

          // Free estimate page requires jquery
          if(strpos($this->thePage, 'free-estimate') !== false) {
            $topData .= $this->generateScriptTag($this->prodLinks['jquery.js']);
          }
        }

        /**
         * When the page is unknown, its best
         * to treat it as a CONTENT type
         */
        default: {
          $topData .= $this->generateLinkTag($this->devLinks['content.css']);
        }
      }

      $this->siteTokens['[[top-inject]]'] = $topData;
    }

    private function create_BottomInject_token() {
      $bottomData = "";

      // Page type based injection
      switch($this->pageType) { 
        case "HOME": {
          $bottomData .= $this->generateScriptTag($this->devLinks['home.js']);
          break;
        }

        /**
         * When the page is unknown, its best
         * to treat it as a CONTENT type
         */
        case "CONTENT":
        default: {
          $bottomData .= $this->generateScriptTag($this->devLinks['content.js']);
        }
      }

      // Insert dev_tools reset
      if($this->isDevelopment) {
        $bottomData .= $this->generateScriptTag($this->devLinks['dev_tools.js']);
      }

      $this->siteTokens['[[bottom-inject]]'] = $bottomData;
    }

    private function create_TopNavLinks_token() {
      $topNav = new nav();
      $topNav->superTemplateId = 20;
      $topNav->superMode = 'top';
      $topNav->superItems = array(
        'Services' => array(
          'class' => 'columned',
          'target' => 'services'
        ),
        17856 => array(
          'class' => 'simple',
          'children' => array(32810,114693,17850,17853,17857,17859,40112,29188,31194,231032)
        ),
        32810 => array(
          'grandchildren' => false
        ),
        'Service Area' => array(
          'target' => 'map',
        ),
        'Free Quote' => array(
          'class' => 'free-estimate',
          'target' => 'contact'
        ),
        43049 => array(
          'grandchildren' => true
        )
      );

      $this->siteTokens['[[top-nav-links]]'] = $topNav->generateSuperMarkup();
    }

    private function create_BottomNavLinks_token() {
      $bottomNav = new nav();
      $bottomNav->superMode = 'bottom';

      $this->siteTokens['[[bottom-nav-links]]'] = $bottomNav->generateSuperMarkup();
    }

    private function create_ContentHeaderTitle_token() {
      $title = "";

      // Only when content header is needed
      if($this->showContentHeader) {
        /**
         * NOTE:
         * ======
         * cmsPageData['page.name'] does not work in this context.
         * 
         * So as a work around I'm trying to mimic its behaviour
         * and it seems to be consistent with cmsPageData['page.name']
         */
        $title = $this->convertToTitleCase(
          $this->getUrlLastString($this->thePage)
        );
      }

      $this->siteTokens['[[content-header-title]]'] = $title;
    }

    private function create_ContentHeaderImage_token() {
      $content = "";

      // Only when content header is needed
      if($this->showContentHeader) {
        switch(true) {
          // Example implementation (There isn't a 1-to-1 mapping to saber from the dev site):
          // case stristr($this->thePage,"about-us"): {
          //   $content = $this->generateImageTag($this->contentHeaderImages['about-us'], "img object-cover-");
          //   break;
          // }
          default: {
            $content = $this->generateImageTag($this->contentHeaderImages['default'], "img object-cover-");
          }
        }
      }

      $this->siteTokens['[[content-header-img]]'] = $content;
    }


     /**
     * UTILITIES
     * =======================
     */
    
    /**
     * Returns true when there is a substr match inside an array
     * 
     * NOTE:
     * ====
     * The naming of this utility is not consistent with the rest of
     * the naming convention. It's more of an extension of php's built-in
     * functions. So it made more sense to keep to that convention and not to mine
     */
    function substr_in_array($haystack, $needle) {
      for($i = 0; $i < count($haystack); $i++) {
        $string_pos = strpos($needle, $haystack[$i]);
  
        if ($string_pos !== false) {
          return true;
        }
      }
  
      return false;
    }

    function generateScriptTag($src) {
      return str_replace(array("\\r", "\\n"), '',sprintf("
        <script type=\"text/javascript\" src=\"%s\"></script>
      ", $src));
    }

    function generateLinkTag($href, $rel = "stylesheet") {
      return str_replace(array("\\r", "\\n"), '',sprintf("
        <link href=\"%s\" rel=\"%s\" ></link>
      ", $href, $rel));
    }

    function generateImageTag($src, $classList = "") {
      return str_replace(array("\\r", "\\n"), '',sprintf("
        <img src=\"%s\" class=\"%s\" />
      ", $src, $classList));
    }

    // This function gets the last item from an url
    // e.g. "/somedata/that/goes/deep" => "deep"
    function getUrlLastString($url) {
      $urlArr = explode('/', $url);
      $urlArrLength = count($urlArr);

      return str_replace(".html", "", $urlArr[$urlArrLength - 1]);
    }

    // This converts a hyphened string to title case
    // e.g. "some-nice-text" => "Some Nice Text"
    function convertToTitleCase($stringData) {
      return ucwords(str_replace("-", " ", $stringData));
    }

    function getSVGFromCDN($svgName) {
      $baseUrl = 'https://cdn.treehouseinternetgroup.com/cms_images/755/';

      echo file_get_contents($baseUrl . $svgName);
    }
  };
?>