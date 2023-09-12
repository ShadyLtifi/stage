<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* formulaire.html.twig */
class __TwigTemplate_0bf5981453e4c16fdb6fb0c9c6762112 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'nav' => [$this, 'block_nav'],
            'header' => [$this, 'block_header'],
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/tr.png"), "html", null, true);
        echo "\" rel=\"icon\">
  <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/tr.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">
  <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet"), "html", null, true);
        echo "\">

  <!-- Vendor CSS Files -->
  ";
        // line 17
        $this->displayBlock('css', $context, $blocks);
        // line 35
        echo "  <!-- =======================================================
  * Template Name: Anyar
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

";
        // line 46
        $this->displayBlock('nav', $context, $blocks);
        // line 59
        echo "        
    ";
        // line 60
        $this->displayBlock('header', $context, $blocks);
        // line 98
        echo "  <br> <br> <br> <br>
\t";
        // line 99
        $this->displayBlock('main', $context, $blocks);
        // line 185
        echo "     
  <!-- ======= Footer ======= -->
  ";
        // line 187
        $this->displayBlock('footer', $context, $blocks);
        // line 248
        echo "  <div id=\"preloader\"></div>
  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Vendor JS Files -->
  ";
        // line 252
        $this->displayBlock('js', $context, $blocks);
        // line 263
        echo "</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " <title>ESPRIT</title>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 18
        echo "  <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />

\t<!-- Custom stlylesheet -->
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
  <!-- Vendor CSS Files -->
  <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/animate.css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 46
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 47
        echo "  <div id=\"topbar\" class=\"fixed-top d-flex align-items-center \">
    <div class=\"container d-flex align-items-center justify-content-center justify-content-md-between\">
      <div class=\"contact-info d-flex align-items-center\">
        <i class=\"bi bi-envelope-fill\"></i><a href=\"mailto:contact@example.com\">contact@esprit.tn</a>
        <i class=\"bi bi-phone-fill phone-icon\"></i><a>+216 70 250 000</a> 
      </div>
      <div class=\"cta d-none d-md-block\">
        <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#about"), "html", null, true);
        echo "\" class=\"scrollto\">Get Started</a>
      </div>
    </div>
  </div>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 60
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 61
        echo "  <header id=\"header\" class=\"navbar navbar-expand-lg navbar-light bg-light \">
    <div class=\"container d-flex align-items-center justify-content-between\">

      <h1 class=\"logo\"><a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("baseFront.html.twig"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-esprit-2.b8fedba0.png"), "html", null, true);
        echo " \" class=\"img-fluid\" alt=\"\" data-aos=\"zoom-in\" data-aos-delay=\"1000\"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href=index.html\" class=\"logo\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->

      <nav id=\"navbar\" class=\"navbar\">
        <ul>
          <li><a class=\"nav-link scrollto active\" href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#hero"), "html", null, true);
        echo "\">Accueil</a></li>
          <li><a class=\"nav-link scrollto\" href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#about"), "html", null, true);
        echo "\">A propos</a></li>
          <li><a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("blog.html"), "html", null, true);
        echo "\">Nos programme</a></li>
       <!-- =======    <li class=\"dropdown\"><a href=\"#\"><span>Drop Down</span> <i class=\"bi bi-chevron-down\"></i></a>
            <ul>
              <li><a href=\"#\">Drop Down 1</a></li>
              <li class=\"dropdown\"><a href=\"#\"><span>Deep Drop Down</span> <i class=\"bi bi-chevron-right\"></i></a>
                <ul>
                  <li><a href=\"#\">Deep Drop Down 1</a></li>
                  <li><a href=\"#\">Deep Drop Down 2</a></li>
                  <li><a href=\"#\">Deep Drop Down 3</a></li>
                  <li><a href=\"#\">Deep Drop Down 4</a></li>
                  <li><a href=\"#\">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href=\"#\">Drop Down 2</a></li>
              <li><a href=\"#\">Drop Down 3</a></li>
              <li><a href=\"#\">Drop Down 4</a></li>
            </ul>
          </li>======= -->
          <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 99
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 100
        echo "\t<div id=\"booking\" class=\"section\">
\t\t<div class=\"section-center\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"booking-form\">
\t\t\t\t\t\t<div class=\"booking-bg\">
\t\t\t\t\t\t\t<div class=\"form-header\">
\t\t\t\t\t\t\t\t<h2>Mobilité Internationnale</h2>
\t\t\t\t\t\t\t\t<p>Remplir le formulaire pour s'inscrire</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"form-label\">Nom</span>
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"form-label\">Prénom</span>
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"form-label\">Identifiant ESPRIT</span>
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"form-label\">Mot de passe ESPRIT</span>
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"form-label\">Specialité</span>
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option>TWIN</option>
\t\t\t\t\t\t\t\t\t\t\t<option>SIM</option>
\t\t\t\t\t\t\t\t\t\t\t<option>ERP/BI</option>
\t\t\t\t\t\t\t\t\t\t\t<option>SAE</option>
\t\t\t\t\t\t\t\t\t\t\t<option>DS</option>
\t\t\t\t\t\t\t\t\t\t\t<option>SLEAM</option>
\t\t\t\t\t\t\t\t\t\t\t<option>CLOUD</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t<span class=\"select-arrow\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"form-label\">Faculté</span>
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t<span class=\"select-arrow\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<span class=\"form-label\">CV</span>
\t\t\t\t\t\t\t\t<select class=\"form-control\" required>
\t\t\t\t\t\t\t\t\t<option value=\"\" selected hidden>Select room type</option>
\t\t\t\t\t\t\t\t\t<option>Private Room (1 to 2 People)</option>
\t\t\t\t\t\t\t\t\t<option>Family Room (1 to 4 People)</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<span class=\"select-arrow\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-btn\">
\t\t\t\t\t\t\t\t<button class=\"submit-btn\">Enregistrer</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 187
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 188
        echo "  <footer id=\"footer\">


    <div class=\"footer-top\">
      <div class=\"container\">
        <div class=\"row\">

          <div class=\"col-lg-3 col-md-6 footer-links\">
            <h4>Useful Links</h4>
            <ul>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Accueil</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">A propos</a></li> 
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Notre programme</a></li>
              
            </ul>
          </div>

          
          <div class=\"col-lg-3 col-md-6 footer-contact\">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

          <div class=\"col-lg-3 col-md-6 footer-info\">
            <h4>A propos de ESPRIT</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class=\"social-links mt-3\">
              <a href=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://twitter.com/Esprit_News\" class=\"twitter"), "html", null, true);
        echo "\"><i class=\"bx bxl-twitter\"></i></a>
              <a href=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.facebook.com/esprit.tn"), "html", null, true);
        echo "\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
              <a href=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.instagram.com/esprit_ingenieur/"), "html", null, true);
        echo "\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
              <a href=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/channel/UCJ5wuQ9AQYtpf9Arieu3iXA"), "html", null, true);
        echo "\" class=\"youtube\"><i class=\"bx bxl-youtube\"></i></a>
              <a href=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.linkedin.com/company/esprit_2"), "html", null, true);
        echo "\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class=\"container\">
      <div class=\"copyright\">
        &copy; Copyright <strong><span>ESPRIT</span></strong>. All Rights Reserved
      </div>
      <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/ -->
        Designed by <a href=\"\">SummerTeam</a>
      </div>
    </div>
  </footer><!-- End Footer -->
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 252
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 253
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

  <!-- Template Main JS File -->
  <script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  559 => 261,  553 => 258,  549 => 257,  545 => 256,  541 => 255,  537 => 254,  532 => 253,  522 => 252,  490 => 226,  486 => 225,  482 => 224,  478 => 223,  474 => 222,  438 => 188,  428 => 187,  334 => 100,  324 => 99,  288 => 72,  284 => 71,  280 => 70,  269 => 64,  264 => 61,  254 => 60,  239 => 54,  230 => 47,  220 => 46,  208 => 33,  202 => 30,  198 => 29,  194 => 28,  190 => 27,  186 => 26,  182 => 25,  178 => 24,  174 => 23,  169 => 21,  162 => 18,  152 => 17,  133 => 8,  121 => 263,  119 => 252,  113 => 248,  111 => 187,  107 => 185,  105 => 99,  102 => 98,  100 => 60,  97 => 59,  95 => 46,  82 => 35,  80 => 17,  74 => 14,  70 => 13,  66 => 12,  61 => 9,  59 => 8,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  {% block title %} <title>ESPRIT</title>{% endblock %}
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <link href=\"{{ asset('assets/img/tr.png') }}\" rel=\"icon\">
  <link href=\"{{ asset('assets/img/tr.png') }}\" rel=\"apple-touch-icon\">
  <link href=\"{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet') }}\">

  <!-- Vendor CSS Files -->
  {% block css %}
  <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\" />

\t<!-- Custom stlylesheet -->
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" />
  <!-- Vendor CSS Files -->
  <link href=\"{{ asset('assets/vendor/animate.css/animate.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/aos/aos.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/remixicon/remixicon.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\">
  {% endblock %}
  <!-- =======================================================
  * Template Name: Anyar
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

{% block nav %}
  <div id=\"topbar\" class=\"fixed-top d-flex align-items-center \">
    <div class=\"container d-flex align-items-center justify-content-center justify-content-md-between\">
      <div class=\"contact-info d-flex align-items-center\">
        <i class=\"bi bi-envelope-fill\"></i><a href=\"mailto:contact@example.com\">contact@esprit.tn</a>
        <i class=\"bi bi-phone-fill phone-icon\"></i><a>+216 70 250 000</a> 
      </div>
      <div class=\"cta d-none d-md-block\">
        <a href=\"{{ asset('#about') }}\" class=\"scrollto\">Get Started</a>
      </div>
    </div>
  </div>
  {% endblock %}
        
    {% block header %}
  <header id=\"header\" class=\"navbar navbar-expand-lg navbar-light bg-light \">
    <div class=\"container d-flex align-items-center justify-content-between\">

      <h1 class=\"logo\"><a href=\"{{ asset('baseFront.html.twig') }}\"><img src=\"{{ asset('assets/img/logo-esprit-2.b8fedba0.png') }} \" class=\"img-fluid\" alt=\"\" data-aos=\"zoom-in\" data-aos-delay=\"1000\"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href=index.html\" class=\"logo\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->

      <nav id=\"navbar\" class=\"navbar\">
        <ul>
          <li><a class=\"nav-link scrollto active\" href=\"{{ asset('#hero') }}\">Accueil</a></li>
          <li><a class=\"nav-link scrollto\" href=\"{{ asset('#about') }}\">A propos</a></li>
          <li><a href=\"{{ asset('blog.html') }}\">Nos programme</a></li>
       <!-- =======    <li class=\"dropdown\"><a href=\"#\"><span>Drop Down</span> <i class=\"bi bi-chevron-down\"></i></a>
            <ul>
              <li><a href=\"#\">Drop Down 1</a></li>
              <li class=\"dropdown\"><a href=\"#\"><span>Deep Drop Down</span> <i class=\"bi bi-chevron-right\"></i></a>
                <ul>
                  <li><a href=\"#\">Deep Drop Down 1</a></li>
                  <li><a href=\"#\">Deep Drop Down 2</a></li>
                  <li><a href=\"#\">Deep Drop Down 3</a></li>
                  <li><a href=\"#\">Deep Drop Down 4</a></li>
                  <li><a href=\"#\">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href=\"#\">Drop Down 2</a></li>
              <li><a href=\"#\">Drop Down 3</a></li>
              <li><a href=\"#\">Drop Down 4</a></li>
            </ul>
          </li>======= -->
          <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  {% endblock %}
  <br> <br> <br> <br>
\t{% block main %}
\t<div id=\"booking\" class=\"section\">
\t\t<div class=\"section-center\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"booking-form\">
\t\t\t\t\t\t<div class=\"booking-bg\">
\t\t\t\t\t\t\t<div class=\"form-header\">
\t\t\t\t\t\t\t\t<h2>Mobilité Internationnale</h2>
\t\t\t\t\t\t\t\t<p>Remplir le formulaire pour s'inscrire</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"form-label\">Nom</span>
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"form-label\">Prénom</span>
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"form-label\">Identifiant ESPRIT</span>
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"form-label\">Mot de passe ESPRIT</span>
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"form-label\">Specialité</span>
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option>TWIN</option>
\t\t\t\t\t\t\t\t\t\t\t<option>SIM</option>
\t\t\t\t\t\t\t\t\t\t\t<option>ERP/BI</option>
\t\t\t\t\t\t\t\t\t\t\t<option>SAE</option>
\t\t\t\t\t\t\t\t\t\t\t<option>DS</option>
\t\t\t\t\t\t\t\t\t\t\t<option>SLEAM</option>
\t\t\t\t\t\t\t\t\t\t\t<option>CLOUD</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t<span class=\"select-arrow\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"form-label\">Faculté</span>
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t<span class=\"select-arrow\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<span class=\"form-label\">CV</span>
\t\t\t\t\t\t\t\t<select class=\"form-control\" required>
\t\t\t\t\t\t\t\t\t<option value=\"\" selected hidden>Select room type</option>
\t\t\t\t\t\t\t\t\t<option>Private Room (1 to 2 People)</option>
\t\t\t\t\t\t\t\t\t<option>Family Room (1 to 4 People)</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<span class=\"select-arrow\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-btn\">
\t\t\t\t\t\t\t\t<button class=\"submit-btn\">Enregistrer</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
    {% endblock %}
     
  <!-- ======= Footer ======= -->
  {% block footer %}
  <footer id=\"footer\">


    <div class=\"footer-top\">
      <div class=\"container\">
        <div class=\"row\">

          <div class=\"col-lg-3 col-md-6 footer-links\">
            <h4>Useful Links</h4>
            <ul>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Accueil</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">A propos</a></li> 
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Notre programme</a></li>
              
            </ul>
          </div>

          
          <div class=\"col-lg-3 col-md-6 footer-contact\">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

          <div class=\"col-lg-3 col-md-6 footer-info\">
            <h4>A propos de ESPRIT</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class=\"social-links mt-3\">
              <a href=\"{{ asset('https://twitter.com/Esprit_News\" class=\"twitter')}}\"><i class=\"bx bxl-twitter\"></i></a>
              <a href=\"{{ asset('https://www.facebook.com/esprit.tn')}}\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
              <a href=\"{{ asset('https://www.instagram.com/esprit_ingenieur/')}}\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
              <a href=\"{{ asset('https://www.youtube.com/channel/UCJ5wuQ9AQYtpf9Arieu3iXA')}}\" class=\"youtube\"><i class=\"bx bxl-youtube\"></i></a>
              <a href=\"{{ asset('https://www.linkedin.com/company/esprit_2')}}\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class=\"container\">
      <div class=\"copyright\">
        &copy; Copyright <strong><span>ESPRIT</span></strong>. All Rights Reserved
      </div>
      <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/ -->
        Designed by <a href=\"\">SummerTeam</a>
      </div>
    </div>
  </footer><!-- End Footer -->
  {% endblock %}
  <div id=\"preloader\"></div>
  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Vendor JS Files -->
  {% block js %}
  <script src=\"{{ asset('assets/vendor/aos/aos.js')}}\"></script>
  <script src=\"{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
  <script src=\"{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}\"></script>
  <script src=\"{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}\"></script>
  <script src=\"{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}\"></script>
  <script src=\"{{ asset('assets/vendor/php-email-form/validate.js')}}\"></script>

  <!-- Template Main JS File -->
  <script src=\"{{ asset('assets/js/main.js')}}\"></script>
{% endblock %}
</body>

</html>", "formulaire.html.twig", "C:\\Users\\user\\Desktop\\Esprit\\stage\\stagee-master\\templates\\formulaire.html.twig");
    }
}
