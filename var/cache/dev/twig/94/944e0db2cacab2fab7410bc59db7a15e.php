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

/* security/loginEs.html.twig */
class __TwigTemplate_975bce19a113503eb7ee4825c2fb3275 extends Template
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
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/loginEs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/loginEs.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->

\t";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/tr.png"), "html", null, true);
        echo "\" rel=\"icon\">
\t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/tr.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">
\t<!-- Google font -->
\t<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("http://fonts.googleapis.com/css?family=Playfair+Display:900"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("http://fonts.googleapis.com/css?family=Alice:400,700"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  ";
        // line 16
        $this->displayBlock('css', $context, $blocks);
        // line 51
        echo "</head>

<body>
  ";
        // line 54
        $this->displayBlock('nav', $context, $blocks);
        // line 99
        echo "\t";
        $this->displayBlock('main', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "<title>Login Admin Esprit</title>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 17
        echo "\t<!-- Bootstrap -->
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />

\t<!-- Custom stlylesheet -->
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
  <!-- Vendor CSS Files -->

   <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/animate.css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <!-- Template Main CSS File -->
  <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t<!--[if lt IE 9]>
\t\t  <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
\t\t  <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t\t<![endif]-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 54
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 55
        echo "  <!-- ======= Top Bar ======= -->
  <section id=\"topbar\" class=\"d-flex align-items-center\">
    <div class=\"container d-flex justify-content-center justify-content-md-between\">
      <div class=\"contact-info d-flex align-items-center\">
        <i class=\"bi bi-envelope d-flex align-items-center\"><a href=\"mailto:contact@esprit.tn\">contact@esprit.tn</a></i>
        <i class=\"bi bi-phone d-flex align-items-center ms-4\"><span>+216 70 250 000</span></i>
      </div>

      <div class=\"cta d-none d-md-flex align-items-center\">
        <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        echo "\" class=\"scrollto\">Get Started</a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"d-flex align-items-center\">
    <div class=\"container d-flex align-items-center justify-content-between\">

      <div class=\"logo\">
        <h1><img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-esprit-2.b8fedba0.png"), "html", null, true);
        echo " \"  alt=\"logo\"></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href=\"index.html\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->
      </div>

      <nav id=\"navbar\" class=\"navbar\">
        <ul>
          <li><a class=\"nav-link scrollto \" href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        echo "\">Accueil</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#\">Programme Mobilité</a></li>
      
          <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
          <li class=\"dropdown\"><a href=\"#\"><span>Se Connecter</span> <i class=\"bi bi-chevron-down\"></i></a>
            <ul>
               <li><a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_loginEtudiant");
        echo "\">Espace Etudiant</a></li>
              <li><a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_loginEs");
        echo "\">Espace Administration Esprit</a></li>
              <li><a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Espace Faculte</a></li>
            </ul>
          </li>
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
\t\t\t\t\t\t\t\t<h2>Espace Admin Esprit</h2>
\t\t\t\t\t\t\t\t<p>Se connecter</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

<form method=\"post\">
    ";
        // line 113
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 113, $this->source); })())) {
            // line 114
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 114, $this->source); })()), "messageKey", [], "any", false, false, false, 114), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 114, $this->source); })()), "messageData", [], "any", false, false, false, 114), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 116
        echo "
    ";
        // line 117
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "user", [], "any", false, false, false, 117)) {
            // line 118
            echo "        <div class=\"mb-3\">
            You are logged in as ";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "user", [], "any", false, false, false, 119), "userIdentifier", [], "any", false, false, false, 119), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
        </div>
    ";
        }
        // line 122
        echo "
    <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
    <label for=\"inputEmail\">Email</label>
    <input type=\"email\" value=\"";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 125, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
    <label for=\"inputPassword\">Password</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
    >
<div class=\"text-center\" style=\"margin-top: 20px;\">
    <button class=\"btn btn-lg btn-danger\" type=\"submit\">
       Connexion
    </button>
</form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/loginEs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 130,  359 => 125,  354 => 122,  346 => 119,  343 => 118,  341 => 117,  338 => 116,  332 => 114,  330 => 113,  315 => 100,  305 => 99,  285 => 89,  281 => 88,  277 => 87,  268 => 81,  258 => 74,  245 => 64,  234 => 55,  224 => 54,  206 => 43,  201 => 41,  195 => 38,  191 => 37,  187 => 36,  183 => 35,  179 => 34,  175 => 33,  170 => 31,  166 => 30,  162 => 29,  158 => 28,  154 => 27,  150 => 26,  146 => 25,  142 => 24,  136 => 21,  130 => 18,  127 => 17,  117 => 16,  98 => 10,  87 => 99,  85 => 54,  80 => 51,  78 => 16,  74 => 15,  70 => 14,  65 => 12,  60 => 11,  58 => 10,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->

\t{% block title %}<title>Login Admin Esprit</title>{% endblock %}
\t<link href=\"{{ asset('assets/img/tr.png') }}\" rel=\"icon\">
\t<link href=\"{{ asset('assets/img/tr.png') }}\" rel=\"apple-touch-icon\">
\t<!-- Google font -->
\t<link href=\"{{ asset('http://fonts.googleapis.com/css?family=Playfair+Display:900') }}\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"{{ asset('http://fonts.googleapis.com/css?family=Alice:400,700') }}\" rel=\"stylesheet\" type=\"text/css\" />
  {% block css %}
\t<!-- Bootstrap -->
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\" />

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

  <link href=\"{{ asset('assets/vendor/aos/aos.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"{{ asset('assets/css/style1.css') }}\" rel=\"stylesheet\">
  <!-- Template Main CSS File -->
  <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\">
\t<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t<!--[if lt IE 9]>
\t\t  <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
\t\t  <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t\t<![endif]-->
{% endblock %}
</head>

<body>
  {% block nav %}
  <!-- ======= Top Bar ======= -->
  <section id=\"topbar\" class=\"d-flex align-items-center\">
    <div class=\"container d-flex justify-content-center justify-content-md-between\">
      <div class=\"contact-info d-flex align-items-center\">
        <i class=\"bi bi-envelope d-flex align-items-center\"><a href=\"mailto:contact@esprit.tn\">contact@esprit.tn</a></i>
        <i class=\"bi bi-phone d-flex align-items-center ms-4\"><span>+216 70 250 000</span></i>
      </div>

      <div class=\"cta d-none d-md-flex align-items-center\">
        <a href=\"{{ path('app_front') }}\" class=\"scrollto\">Get Started</a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"d-flex align-items-center\">
    <div class=\"container d-flex align-items-center justify-content-between\">

      <div class=\"logo\">
        <h1><img src=\"{{ asset('assets/img/logo-esprit-2.b8fedba0.png') }} \"  alt=\"logo\"></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href=\"index.html\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->
      </div>

      <nav id=\"navbar\" class=\"navbar\">
        <ul>
          <li><a class=\"nav-link scrollto \" href=\"{{ path('app_front') }}\">Accueil</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#\">Programme Mobilité</a></li>
      
          <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
          <li class=\"dropdown\"><a href=\"#\"><span>Se Connecter</span> <i class=\"bi bi-chevron-down\"></i></a>
            <ul>
               <li><a href=\"{{ path('app_loginEtudiant') }}\">Espace Etudiant</a></li>
              <li><a href=\"{{ path('app_loginEs') }}\">Espace Administration Esprit</a></li>
              <li><a href=\"{{ path('app_login') }}\">Espace Faculte</a></li>
            </ul>
          </li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  {% endblock %}
\t{% block main %}
\t<div id=\"booking\" class=\"section\">
\t\t<div class=\"section-center\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"booking-form\">
\t\t\t\t\t\t<div class=\"booking-bg\">
\t\t\t\t\t\t\t<div class=\"form-header\">
\t\t\t\t\t\t\t\t<h2>Espace Admin Esprit</h2>
\t\t\t\t\t\t\t\t<p>Se connecter</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

<form method=\"post\">
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if app.user %}
        <div class=\"mb-3\">
            You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% endif %}

    <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
    <label for=\"inputEmail\">Email</label>
    <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
    <label for=\"inputPassword\">Password</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"{{ csrf_token('authenticate') }}\"
    >
<div class=\"text-center\" style=\"margin-top: 20px;\">
    <button class=\"btn btn-lg btn-danger\" type=\"submit\">
       Connexion
    </button>
</form>
{% endblock %}
", "security/loginEs.html.twig", "C:\\Users\\user\\Desktop\\Esprit\\stage-master\\templates\\security\\loginEs.html.twig");
    }
}
