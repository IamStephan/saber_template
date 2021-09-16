<?php
  class SiteConfig {
    private $thePage;
    private $cmsPageData;
    private $siteTokens;
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

    public $pageType;
    public $isCityPage;
    public $isDevelopment = true;


    /**
     * Switches
     * ==========
     * These are used to render content based on some value
     */
    public $showSilo = true;
    public $showBreadcrumbs = true;
    public $showServiceAreas = true;

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
      if((strpos($this->thePage, 'service-area') !== false) && (strpos($this->thePage, '/') !== false)) {
        // Don't show service area section in service area pages
        $this->showServiceAreas = false;
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
    }

    private function create_TopInject_token() {
      $topData = "";

      // Insert CSS reset
      $topData .= $this->generateLinkTag($this->devLinks['global.css']);

      // Page type based injection
      switch($this->pageType) { 
        case "HOME": {
          $topData .= $this->generateLinkTag($this->devLinks['home.css']);
          break;
        }

        /**
         * When the page is unknown, its best
         * to treat it as a CONTENT type
         */
        case "CONTENT":
        default: {
          $topData .= $this->generateLinkTag($this->devLinks['content.css']);
        }
      }

      $this->siteTokens['[[top-inject]]'] = $topData;
    }

    private function create_BottomInject_token() {
      $bottomData = "";

      // Insert dev_tools reset
      if($this->isDevelopment) {
        $bottomData .= $this->generateScriptTag($this->devLinks['dev_tools.js']);
      }
      
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
          'class' => 'quote',
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


     /**
     * UTILITIES
     * =======================
     */
    // Returns true when there is a substr match inside an array
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
  };
?>