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

/* dashboardFaculte/dashboardFac.html.twig */
class __TwigTemplate_b9b160c3aa0a4f7a84f331059a1cd4b1 extends Template
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
            'body' => [$this, 'block_body'],
            'autre' => [$this, 'block_autre'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboardFaculte/dashboardFac.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboardFaculte/dashboardFac.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

\t\t";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "\t\t<meta content=\"\" name=\"description\">
\t\t<meta
\t\tcontent=\"\" name=\"keywords\">

\t\t<!-- Favicons -->
\t\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/tr.png"), "html", null, true);
        echo "\" rel=\"icon\">
\t\t<link
\t\thref=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/tr.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

\t\t<!-- Google Fonts -->
\t\t<link
\t\thref=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t<!-- Vendor CSS Files -->
\t\t";
        // line 25
        $this->displayBlock('css', $context, $blocks);
        // line 107
        echo "\t\t<!-- =======================================================
\t\t\t\t\t\t  * Template Name: Flexor
\t\t\t\t\t\t  * Updated: Jul 27 2023 with Bootstrap v5.3.1
\t\t\t\t\t\t  * Template URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
\t\t\t\t\t\t  * Author: BootstrapMade.com
\t\t\t\t\t\t  * License: https://bootstrapmade.com/license/
\t\t\t\t\t\t  ======================================================== -->
\t</head>

\t<body>
\t\t";
        // line 117
        $this->displayBlock('nav', $context, $blocks);
        // line 208
        echo "\t\t\t<!-- End of Topbar -->
\t\t\t";
        // line 209
        $this->displayBlock('body', $context, $blocks);
        // line 245
        echo "</div><!-- End of Main Content --><!-- Footer --><footer class=\"sticky-footer bg-white\"><div class=\"container my-auto\">
<div class=\"copyright text-center my-auto\">
\t&copy; Copyright
\t<strong>
\t\t<span>ESPRIT</span>
\t</strong>. All Rights Reserved
\t<br>
\tDesigned by
\t<a href=\"#\">SummerTeam</a>
</div></div></footer><!-- End of Footer --></div><!-- End of Content Wrapper --></div><!-- End of Page Wrapper --><!-- Scroll to Top Button-->";
        // line 254
        $this->displayBlock('autre', $context, $blocks);
        // line 256
        echo "<!-- Bootstrap core JavaScript-->";
        $this->displayBlock('js', $context, $blocks);
        echo "</body></html>

";
        
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

        // line 9
        echo "\t\t\t<title>ESPRIT-Mobilité Internationale</title>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 25
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 26
        echo "\t\t\t<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link
\t\t\thref=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t\t<!-- Template Main CSS File -->
\t\t\t<link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<style>
\t\t\t\t/* Styles pour le conteneur du carrousel */
\t\t\t\t.carrousel-container {
\t\t\t\t\toverflow: hidden;
\t\t\t\t\twidth: 100%;
\t\t\t\t\tmax-width: 800px; /* Ajustez la largeur selon vos besoins */
\t\t\t\t\tmargin: 0 auto;
\t\t\t\t\tposition: relative;
\t\t\t\t}

\t\t\t\t/* Styles pour le carrousel */
\t\t\t\t.carrousel {
\t\t\t\t\tdisplay: flex;
\t\t\t\t\ttransition: transform 0.5s ease-in-out;
\t\t\t\t}

\t\t\t\t.carte {
\t\t\t\t\tflex: 0 0 100%;
\t\t\t\t\tpadding: 20px;
\t\t\t\t\ttext-align: center;
\t\t\t\t\tbox-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
\t\t\t\t\tborder-radius: 10px;
\t\t\t\t\tbackground-color: grey; /* Rouge transparent */
\t\t\t\t\tmargin-right: 20px;
\t\t\t\t\ttransition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
\t\t\t\t}

\t\t\t\t/* Styles pour les boutons de navigation */
\t\t\t\t.btn-prev,
\t\t\t\t.btn-next {
\t\t\t\t\tposition: absolute;
\t\t\t\t\ttop: 50%;
\t\t\t\t\ttransform: translateY(-50%);
\t\t\t\t\tpadding: 10px 15px;
\t\t\t\t\tbackground-color: rgba(0, 0, 0, 0.5);
\t\t\t\t\tcolor: #fff;
\t\t\t\t\tcursor: pointer;
\t\t\t\t\tborder: none;
\t\t\t\t\tborder-radius: 50%;
\t\t\t\t\tfont-size: 24px;
\t\t\t\t\tz-index: 1;
\t\t\t\t\ttransition: background-color 0.3s ease-in-out;
\t\t\t\t}

\t\t\t\t.btn-prev:hover,
\t\t\t\t.btn-next:hover {
\t\t\t\t\tbackground-color: rgba(0, 0, 0, 0.8);
\t\t\t\t}

\t\t\t\t.btn-prev {
\t\t\t\t\tleft: 10px;
\t\t\t\t}

\t\t\t\t.btn-next {
\t\t\t\t\tright: 10px;
\t\t\t\t}

\t\t\t\t/* Styles pour le contenu de la carte */
\t\t\t\t.carte h2 {
\t\t\t\t\tfont-size: 24px;
\t\t\t\t\tmargin-bottom: 10px;
\t\t\t\t\tcolor: #fff; /* Texte en blanc */
\t\t\t\t}

\t\t\t\t.carte p {
\t\t\t\t\tfont-size: 16px;
\t\t\t\t\tline-height: 1.5;
\t\t\t\t\tcolor: #fff; /* Texte en blanc */
\t\t\t\t}
\t\t\t</style>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 117
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 118
        echo "\t\t\t<!-- ======= Top Bar ======= -->
\t\t\t<section id=\"topbar\" class=\"d-flex align-items-center\">
\t\t\t\t<div class=\"container d-flex justify-content-center justify-content-md-between\">
\t\t\t\t\t<div class=\"contact-info d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"bi bi-envelope d-flex align-items-center\">
\t\t\t\t\t\t\t<a href=\"mailto:contact@esprit.tn\">contact@esprit.tn</a>
\t\t\t\t\t\t</i>
\t\t\t\t\t\t<i class=\"bi bi-phone d-flex align-items-center ms-4\">
\t\t\t\t\t\t\t<span>+216 70 250 000</span>
\t\t\t\t\t\t</i>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"cta d-none d-md-flex align-items-center\">
\t\t\t\t\t\t<a href=\"#\" class=\"scrollto\">Get Started</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>

\t\t\t<!-- ======= Header ======= -->
\t\t\t<header id=\"header\" class=\"d-flex align-items-center\">
\t\t\t\t<div class=\"container d-flex align-items-center justify-content-between\">

\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t<h1><img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-esprit-2.b8fedba0.png"), "html", null, true);
        echo " \" alt=\"logo\"></h1>
\t\t\t\t\t\t<!-- Uncomment below if you prefer to use an image logo -->
\t\t\t\t\t\t<!-- <a href=\"index.html\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->
\t\t\t\t\t</div>

\t\t\t\t\t<nav id=\"navbar\" class=\"navbar\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"nav-link scrollto \" href=\"";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
        echo "\">Accueil</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"nav-link scrollto\" href=\"";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
        echo "\">Programme Mobilité</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"nav-link scrollto active\" href=\"";
        // line 156
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_index");
        echo "\">Mes dépots</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"nav-item dropdown pe-3\">

\t\t\t\t\t\t\t\t<a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">

\t\t\t\t\t\t\t\t\t<span class=\"d-none d-md-block dropdown-toggle ps-2\">";
        // line 163
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 163, $this->source); })()), "user", [], "any", false, false, false, 163), "nom", [], "any", false, false, false, 163), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 164
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 164, $this->source); })()), "user", [], "any", false, false, false, 164), "prenom", [], "any", false, false, false, 164), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<!-- End Profile Iamge Icon -->

\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t\t<h6>Bienvenu
\t\t\t\t\t\t\t\t\t\t\t";
        // line 171
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 171, $this->source); })()), "user", [], "any", false, false, false, 171), "nom", [], "any", false, false, false, 171), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 172
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 172, $this->source); })()), "user", [], "any", false, false, false, 172), "prenom", [], "any", false, false, false, 172), "html", null, true);
        echo "</h6>
\t\t\t\t\t\t\t\t\t\t<span>Etudiant</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-person\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Profile</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"";
        // line 191
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-box-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">Déconnexion</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<!-- End Profile Dropdown Items -->
\t\t\t\t\t\t\t\t<i class=\"bi bi-list mobile-nav-toggle\"></i>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</nav>
\t\t\t\t\t\t<!-- .navbar -->

\t\t\t\t\t</div>
\t\t\t\t</header>
\t\t\t\t<!-- End Header -->
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 209
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 210
        echo "\t\t\t\t<br>
\t\t\t\t<div class=\"card mb-2\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<br>

\t\t\t\t\t\t<div class=\"table-responsive text-center\">
\t\t\t\t\t\t\t<table class=\"table table-bordered table-striped\" style=\"background-color: lightgray;\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Id Etudiant</th>
\t\t\t\t\t\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t\t\t\t\t\t<th>Résultat</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>

\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["candidatures"]) || array_key_exists("candidatures", $context) ? $context["candidatures"] : (function () { throw new RuntimeError('Variable "candidatures" does not exist.', 226, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["candidature"]) {
            // line 227
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 228
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "EtudiantEsprit", [], "any", false, false, false, 228), "idEtudiant", [], "any", false, false, false, 228), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 229
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "Opportinute", [], "any", false, false, false, 229), "Titre", [], "any", false, false, false, 229), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 230
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidature"], "resultat", [], "any", false, false, false, 230), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 233
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"3\">no records found</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</body>
\t\t</body>
\t</html>
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 254
    public function block_autre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "autre"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "autre"));

        echo "<a class=\"scroll-to-top rounded\" href=\"#page-top\"><i class=\"fas fa-angle-up\"></i></a><!-- Logout Modal--><div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\"><div class=\"modal-dialog\" role=\"document\"><div class=\"modal-content\">

</div></div></div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 256
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        echo "<script src=\"vendor/jquery/jquery.min.js\"></script><script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script><!-- Core plugin JavaScript--><script src=\"vendor/jquery-easing/jquery.easing.min.js\"></script><!-- Custom scripts for all pages--><script src=\"js/sb-admin-2.min.js\"></script><!-- Page level plugins --><script src=\"vendor/datatables/dataTables.bootstrap4.min.js\"></script><!-- Page level custom scripts --><script src=\"js/demo/datatables-demo.js\"></script>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "dashboardFaculte/dashboardFac.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  510 => 256,  489 => 254,  471 => 237,  462 => 233,  454 => 230,  450 => 229,  446 => 228,  443 => 227,  438 => 226,  420 => 210,  410 => 209,  383 => 191,  361 => 172,  357 => 171,  347 => 164,  343 => 163,  333 => 156,  326 => 152,  320 => 149,  309 => 141,  284 => 118,  274 => 117,  192 => 35,  186 => 32,  181 => 30,  177 => 29,  173 => 28,  169 => 27,  164 => 26,  154 => 25,  143 => 9,  133 => 8,  119 => 256,  117 => 254,  106 => 245,  104 => 209,  101 => 208,  99 => 117,  87 => 107,  85 => 25,  79 => 22,  72 => 18,  67 => 16,  60 => 11,  58 => 8,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

\t\t{% block title %}
\t\t\t<title>ESPRIT-Mobilité Internationale</title>
\t\t{% endblock %}
\t\t<meta content=\"\" name=\"description\">
\t\t<meta
\t\tcontent=\"\" name=\"keywords\">

\t\t<!-- Favicons -->
\t\t<link href=\"{{ asset('assets/img/tr.png') }}\" rel=\"icon\">
\t\t<link
\t\thref=\"{{ asset('assets/img/tr.png') }}\" rel=\"apple-touch-icon\">

\t\t<!-- Google Fonts -->
\t\t<link
\t\thref=\"{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}\" rel=\"stylesheet\">

\t\t<!-- Vendor CSS Files -->
\t\t{% block css %}
\t\t\t<link href=\"{{ asset('assets/vendor/aos/aos.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}\" rel=\"stylesheet\">
\t\t\t<link
\t\t\thref=\"{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}\" rel=\"stylesheet\">

\t\t\t<!-- Template Main CSS File -->
\t\t\t<link href=\"{{ asset('assets/css/style1.css') }}\" rel=\"stylesheet\">
\t\t\t<style>
\t\t\t\t/* Styles pour le conteneur du carrousel */
\t\t\t\t.carrousel-container {
\t\t\t\t\toverflow: hidden;
\t\t\t\t\twidth: 100%;
\t\t\t\t\tmax-width: 800px; /* Ajustez la largeur selon vos besoins */
\t\t\t\t\tmargin: 0 auto;
\t\t\t\t\tposition: relative;
\t\t\t\t}

\t\t\t\t/* Styles pour le carrousel */
\t\t\t\t.carrousel {
\t\t\t\t\tdisplay: flex;
\t\t\t\t\ttransition: transform 0.5s ease-in-out;
\t\t\t\t}

\t\t\t\t.carte {
\t\t\t\t\tflex: 0 0 100%;
\t\t\t\t\tpadding: 20px;
\t\t\t\t\ttext-align: center;
\t\t\t\t\tbox-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
\t\t\t\t\tborder-radius: 10px;
\t\t\t\t\tbackground-color: grey; /* Rouge transparent */
\t\t\t\t\tmargin-right: 20px;
\t\t\t\t\ttransition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
\t\t\t\t}

\t\t\t\t/* Styles pour les boutons de navigation */
\t\t\t\t.btn-prev,
\t\t\t\t.btn-next {
\t\t\t\t\tposition: absolute;
\t\t\t\t\ttop: 50%;
\t\t\t\t\ttransform: translateY(-50%);
\t\t\t\t\tpadding: 10px 15px;
\t\t\t\t\tbackground-color: rgba(0, 0, 0, 0.5);
\t\t\t\t\tcolor: #fff;
\t\t\t\t\tcursor: pointer;
\t\t\t\t\tborder: none;
\t\t\t\t\tborder-radius: 50%;
\t\t\t\t\tfont-size: 24px;
\t\t\t\t\tz-index: 1;
\t\t\t\t\ttransition: background-color 0.3s ease-in-out;
\t\t\t\t}

\t\t\t\t.btn-prev:hover,
\t\t\t\t.btn-next:hover {
\t\t\t\t\tbackground-color: rgba(0, 0, 0, 0.8);
\t\t\t\t}

\t\t\t\t.btn-prev {
\t\t\t\t\tleft: 10px;
\t\t\t\t}

\t\t\t\t.btn-next {
\t\t\t\t\tright: 10px;
\t\t\t\t}

\t\t\t\t/* Styles pour le contenu de la carte */
\t\t\t\t.carte h2 {
\t\t\t\t\tfont-size: 24px;
\t\t\t\t\tmargin-bottom: 10px;
\t\t\t\t\tcolor: #fff; /* Texte en blanc */
\t\t\t\t}

\t\t\t\t.carte p {
\t\t\t\t\tfont-size: 16px;
\t\t\t\t\tline-height: 1.5;
\t\t\t\t\tcolor: #fff; /* Texte en blanc */
\t\t\t\t}
\t\t\t</style>
\t\t{% endblock %}
\t\t<!-- =======================================================
\t\t\t\t\t\t  * Template Name: Flexor
\t\t\t\t\t\t  * Updated: Jul 27 2023 with Bootstrap v5.3.1
\t\t\t\t\t\t  * Template URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
\t\t\t\t\t\t  * Author: BootstrapMade.com
\t\t\t\t\t\t  * License: https://bootstrapmade.com/license/
\t\t\t\t\t\t  ======================================================== -->
\t</head>

\t<body>
\t\t{% block nav %}
\t\t\t<!-- ======= Top Bar ======= -->
\t\t\t<section id=\"topbar\" class=\"d-flex align-items-center\">
\t\t\t\t<div class=\"container d-flex justify-content-center justify-content-md-between\">
\t\t\t\t\t<div class=\"contact-info d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"bi bi-envelope d-flex align-items-center\">
\t\t\t\t\t\t\t<a href=\"mailto:contact@esprit.tn\">contact@esprit.tn</a>
\t\t\t\t\t\t</i>
\t\t\t\t\t\t<i class=\"bi bi-phone d-flex align-items-center ms-4\">
\t\t\t\t\t\t\t<span>+216 70 250 000</span>
\t\t\t\t\t\t</i>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"cta d-none d-md-flex align-items-center\">
\t\t\t\t\t\t<a href=\"#\" class=\"scrollto\">Get Started</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>

\t\t\t<!-- ======= Header ======= -->
\t\t\t<header id=\"header\" class=\"d-flex align-items-center\">
\t\t\t\t<div class=\"container d-flex align-items-center justify-content-between\">

\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t<h1><img src=\"{{ asset('assets/img/logo-esprit-2.b8fedba0.png') }} \" alt=\"logo\"></h1>
\t\t\t\t\t\t<!-- Uncomment below if you prefer to use an image logo -->
\t\t\t\t\t\t<!-- <a href=\"index.html\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->
\t\t\t\t\t</div>

\t\t\t\t\t<nav id=\"navbar\" class=\"navbar\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"nav-link scrollto \" href=\"{{ path('app_account') }}\">Accueil</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"nav-link scrollto\" href=\"{{ path('app_account') }}\">Programme Mobilité</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"nav-link scrollto active\" href=\"{{ path('app_dashboard_index') }}\">Mes dépots</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"nav-item dropdown pe-3\">

\t\t\t\t\t\t\t\t<a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">

\t\t\t\t\t\t\t\t\t<span class=\"d-none d-md-block dropdown-toggle ps-2\">{{ app.user.nom}}
\t\t\t\t\t\t\t\t\t\t{{ app.user.prenom}}</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<!-- End Profile Iamge Icon -->

\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t\t<h6>Bienvenu
\t\t\t\t\t\t\t\t\t\t\t{{ app.user.nom}}
\t\t\t\t\t\t\t\t\t\t\t{{ app.user.prenom}}</h6>
\t\t\t\t\t\t\t\t\t\t<span>Etudiant</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-person\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Profile</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('app_logout') }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-box-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">Déconnexion</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<!-- End Profile Dropdown Items -->
\t\t\t\t\t\t\t\t<i class=\"bi bi-list mobile-nav-toggle\"></i>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</nav>
\t\t\t\t\t\t<!-- .navbar -->

\t\t\t\t\t</div>
\t\t\t\t</header>
\t\t\t\t<!-- End Header -->
\t\t\t{% endblock %}
\t\t\t<!-- End of Topbar -->
\t\t\t{% block body %}
\t\t\t\t<br>
\t\t\t\t<div class=\"card mb-2\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<br>

\t\t\t\t\t\t<div class=\"table-responsive text-center\">
\t\t\t\t\t\t\t<table class=\"table table-bordered table-striped\" style=\"background-color: lightgray;\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Id Etudiant</th>
\t\t\t\t\t\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t\t\t\t\t\t<th>Résultat</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>

\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% for candidature in candidatures %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ candidature.EtudiantEsprit.idEtudiant }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ candidature.Opportinute.Titre }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ candidature.resultat }}</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"3\">no records found</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</body>
\t\t</body>
\t</html>
</div>{% endblock %}</div><!-- End of Main Content --><!-- Footer --><footer class=\"sticky-footer bg-white\"><div class=\"container my-auto\">
<div class=\"copyright text-center my-auto\">
\t&copy; Copyright
\t<strong>
\t\t<span>ESPRIT</span>
\t</strong>. All Rights Reserved
\t<br>
\tDesigned by
\t<a href=\"#\">SummerTeam</a>
</div></div></footer><!-- End of Footer --></div><!-- End of Content Wrapper --></div><!-- End of Page Wrapper --><!-- Scroll to Top Button-->{% block autre %}<a class=\"scroll-to-top rounded\" href=\"#page-top\"><i class=\"fas fa-angle-up\"></i></a><!-- Logout Modal--><div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\"><div class=\"modal-dialog\" role=\"document\"><div class=\"modal-content\">

</div></div></div>{% endblock %}<!-- Bootstrap core JavaScript-->{% block js %}<script src=\"vendor/jquery/jquery.min.js\"></script><script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script><!-- Core plugin JavaScript--><script src=\"vendor/jquery-easing/jquery.easing.min.js\"></script><!-- Custom scripts for all pages--><script src=\"js/sb-admin-2.min.js\"></script><!-- Page level plugins --><script src=\"vendor/datatables/dataTables.bootstrap4.min.js\"></script><!-- Page level custom scripts --><script src=\"js/demo/datatables-demo.js\"></script>{% endblock %}</body></html>

", "dashboardFaculte/dashboardFac.html.twig", "C:\\Users\\user\\Desktop\\Esprit\\stage\\stagee-master\\templates\\dashboardFaculte\\dashboardFac.html.twig");
    }
}
