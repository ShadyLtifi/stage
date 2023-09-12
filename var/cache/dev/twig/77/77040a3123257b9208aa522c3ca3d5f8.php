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

/* admin/admin.html.twig */
class __TwigTemplate_d2770fae2c262e1cfe6de42234a99586 extends Template
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
            'header' => [$this, 'block_header'],
            'aside' => [$this, 'block_aside'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

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
        echo "    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">
     <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/tr.png"), "html", null, true);
        echo "\" rel=\"icon\">
  <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/tr.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.gstatic.com"), "html", null, true);
        echo "\" rel=\"preconnect\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet"), "html", null, true);
        echo "\">
    ";
        // line 17
        $this->displayBlock('css', $context, $blocks);
        // line 33
        echo "
</head>

<body>

<!-- ======= Header ======= -->
";
        // line 39
        $this->displayBlock('header', $context, $blocks);
        // line 107
        echo "
<!-- ======= Sidebar ======= -->
";
        // line 109
        $this->displayBlock('aside', $context, $blocks);
        // line 221
        echo "<main id=\"main\" class=\"main\" style=\"
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100%;\">
    ";
        // line 226
        $this->displayBlock('body', $context, $blocks);
        // line 230
        echo "</main><!-- End #main -->
<!-- ======= Footer ======= -->
";
        // line 232
        $this->displayBlock('footer', $context, $blocks);
        // line 242
        echo "<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>
";
        // line 243
        $this->displayBlock('js', $context, $blocks);
        // line 266
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

        echo "<title>Dashboard - Mobilité</title>";
        
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
        echo "    <!-- Vendor CSS Files -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/css/flashy.css"), "html", null, true);
        echo "\">


        <!-- Template Main CSS File -->
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 39
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 40
        echo "<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

    <div class=\"d-flex align-items-center justify-content-between\">
        <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin"), "html", null, true);
        echo "\" class=\"logo d-flex align-items-center\">
            <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-esprit-2.b8fedba0.png"), "html", null, true);
        echo "\"  style=\"max-width: 150px; max-height: 200px; margin-top: 5px;\">
       
        </a>
        <i class=\"bi bi-list toggle-sidebar-btn\"></i>
    </div><!-- End Logo -->

    <nav class=\"header-nav ms-auto\">
        <ul class=\"d-flex align-items-center\">

            <li class=\"nav-item d-block d-lg-none\">
                <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
                    <i class=\"bi bi-search\"></i>
                </a>
            </li><!-- End Search Icon-->

          <li class=\"nav-item dropdown pe-3\">

\t\t\t\t\t\t\t<a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">

\t\t\t\t\t\t\t\t<span class=\"d-none d-md-block dropdown-toggle ps-2\">";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "nom", [], "any", false, false, false, 63), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64), "prenom", [], "any", false, false, false, 64), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- End Profile Iamge Icon -->

\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t<h6>Bienvenu
\t\t\t\t\t\t\t\t\t\t";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71), "nom", [], "any", false, false, false, 71), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72), "prenom", [], "any", false, false, false, 72), "html", null, true);
        echo "</h6>
\t\t\t\t\t\t\t\t\t<span>Admin</span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-person\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Profile</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-box-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">Déconnexion</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<!-- End Profile Dropdown Items -->
                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 109
    public function block_aside($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "aside"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "aside"));

        // line 110
        echo "<aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dashboard"), "html", null, true);
        echo "\">
                <i class=\"bi bi-grid\"></i>
                <span>Tableau de bord</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <!-- Gestion des Utilisateurs -->
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\" ";
        // line 123
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN_FAC")) {
            echo " onclick=\"showAlert()\" ";
        }
        echo ">
\t\t\t\t\t\t\t<i class=\"bi bi-people-fill\"></i>
\t\t\t\t\t\t\t<span>Gestion des Utilisateurs</span>
\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down ms-auto\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul id=\"components-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
\t\t\t\t\t\t\t";
        // line 129
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN_ESPRIT")) {
            // line 130
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("etudiant/esprit"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-person\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Etudiants</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/esprit"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-person\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Admin Esprit</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 141
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Components Nav -->

\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\" ";
        // line 146
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN_FAC")) {
            echo " onclick=\"showAlert()\" ";
        }
        echo ">
\t\t\t\t\t\t\t<i class=\"bi bi-buildings-fill\"></i>
\t\t\t\t\t\t\t<span>Gestions des Facultés</span>
\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down ms-auto\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul id=\"forms-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
\t\t\t\t\t\t\t";
        // line 152
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN_ESPRIT")) {
            // line 153
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 154
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/fac"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-person\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Admin Faculté</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 160
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Forms Nav -->

\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"bi bi-gift\"></i>
\t\t\t\t\t\t\t<span>Gestion des Opportunités</span>
\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down ms-auto\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul id=\"tables-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
\t\t\t\t\t\t\t";
        // line 171
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN_ESPRIT") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN_FAC"))) {
            // line 172
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 173
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("opportinute"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Opportunités</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 179
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Tables Nav -->

\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#produit-nav\" data-bs-toggle=\"collapse\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"bi bi-person-bounding-box\"></i>
\t\t\t\t\t\t\t<span>Gestion des Candidatures</span>
\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down ms-auto\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul id=\"produit-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
\t\t\t\t\t\t\t";
        // line 190
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN_ESPRIT") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN_FAC"))) {
            // line 191
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 192
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("candidature"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-person-plus-fill\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Candidats</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 198
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Charts Nav -->

        <li class=\"nav-heading\">Pages</li>

        <br>
        <br>
        <br>
        <br>
        <br>

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 211
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
                <i class=\"bi bi-box-arrow-in-right\"></i>
                <span>Log-out</span>
            </a>
        </li><!-- End Login Page Nav -->

    </ul>

</aside>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 226
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 227
        echo "        <div><i class=\"bi bi-exclamation-lg\"></i> Bienvenue <i class=\"bi bi-exclamation-lg\"></i></div>
        <div><i class=\"bi bi-globe\"></i> Mobilité Internationnalle <i class=\"bi bi-globe\"></i></div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 232
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 233
        echo "<footer id=\"footer\" class=\"footer\">
    <div class=\"copyright\">
        &copy; Copyright <strong><span>ESPRIT</span></strong>. All Rights Reserved
    </div>
    <div class=\"credits\">
        Designed by SummerTeam team 
    </div>
</footer><!-- End Footer -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 243
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 244
        echo "<!-- Vendor JS Files -->
<script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/chart.js/chart.umd.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

    <!-- Load Flashy default JavaScript -->
    <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/js/flashy.js"), "html", null, true);
        echo "\"></script>
    <!-- Include Flashy default partial -->
   
\t\t\t<script>
\t\t\t\tfunction showAlert() {
alert(\"Vous n'avez pas la permission d'accéder à cette section.\");
}
\t\t\t</script>
<!-- Template Main JS File -->
<script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  610 => 264,  598 => 255,  592 => 252,  588 => 251,  584 => 250,  580 => 249,  576 => 248,  572 => 247,  568 => 246,  564 => 245,  561 => 244,  551 => 243,  533 => 233,  523 => 232,  511 => 227,  501 => 226,  481 => 211,  466 => 198,  457 => 192,  454 => 191,  452 => 190,  439 => 179,  430 => 173,  427 => 172,  425 => 171,  412 => 160,  403 => 154,  400 => 153,  398 => 152,  387 => 146,  380 => 141,  371 => 135,  364 => 131,  361 => 130,  359 => 129,  348 => 123,  337 => 115,  330 => 110,  320 => 109,  294 => 91,  272 => 72,  268 => 71,  258 => 64,  254 => 63,  232 => 44,  228 => 43,  223 => 40,  213 => 39,  200 => 30,  193 => 26,  189 => 25,  185 => 24,  181 => 23,  177 => 22,  173 => 21,  169 => 20,  165 => 19,  162 => 18,  152 => 17,  133 => 8,  121 => 266,  119 => 243,  116 => 242,  114 => 232,  110 => 230,  108 => 226,  101 => 221,  99 => 109,  95 => 107,  93 => 39,  85 => 33,  83 => 17,  79 => 16,  75 => 15,  69 => 12,  65 => 11,  61 => 9,  59 => 8,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    {% block title %}<title>Dashboard - Mobilité</title>{% endblock %}
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">
     <link href=\"{{ asset('assets/img/tr.png') }}\" rel=\"icon\">
  <link href=\"{{ asset('assets/img/tr.png') }}\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"{{ asset('https://fonts.gstatic.com') }}\" rel=\"preconnect\">
    <link href=\"{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet') }}\">
    {% block css %}
    <!-- Vendor CSS Files -->
    <link href=\"{{ asset('asset/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('asset/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('asset/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('asset/vendor/quill/quill.snow.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('asset/vendor/quill/quill.bubble.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('asset/vendor/remixicon/remixicon.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('asset/vendor/simple-datatables/style.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/mercuryseriesflashy/css/flashy.css') }}\">


        <!-- Template Main CSS File -->
    <link href=\"{{ asset('asset/css/style.css') }}\" rel=\"stylesheet\">

    {% endblock %}

</head>

<body>

<!-- ======= Header ======= -->
{% block header %}
<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

    <div class=\"d-flex align-items-center justify-content-between\">
        <a href=\"{{ asset('admin') }}\" class=\"logo d-flex align-items-center\">
            <img src=\"{{ asset('assets/img/logo-esprit-2.b8fedba0.png') }}\"  style=\"max-width: 150px; max-height: 200px; margin-top: 5px;\">
       
        </a>
        <i class=\"bi bi-list toggle-sidebar-btn\"></i>
    </div><!-- End Logo -->

    <nav class=\"header-nav ms-auto\">
        <ul class=\"d-flex align-items-center\">

            <li class=\"nav-item d-block d-lg-none\">
                <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
                    <i class=\"bi bi-search\"></i>
                </a>
            </li><!-- End Search Icon-->

          <li class=\"nav-item dropdown pe-3\">

\t\t\t\t\t\t\t<a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">

\t\t\t\t\t\t\t\t<span class=\"d-none d-md-block dropdown-toggle ps-2\">{{ app.user.nom}}
\t\t\t\t\t\t\t\t\t{{ app.user.prenom}}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- End Profile Iamge Icon -->

\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t<h6>Bienvenu
\t\t\t\t\t\t\t\t\t\t{{ app.user.nom}}
\t\t\t\t\t\t\t\t\t\t{{ app.user.prenom}}</h6>
\t\t\t\t\t\t\t\t\t<span>Admin</span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-person\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Profile</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('app_logout') }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-box-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">Déconnexion</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<!-- End Profile Dropdown Items -->
                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->
{% endblock %}

<!-- ======= Sidebar ======= -->
{% block aside %}
<aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{ asset('dashboard') }}\">
                <i class=\"bi bi-grid\"></i>
                <span>Tableau de bord</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <!-- Gestion des Utilisateurs -->
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\" {% if is_granted('ROLE_ADMIN_FAC') %} onclick=\"showAlert()\" {% endif %}>
\t\t\t\t\t\t\t<i class=\"bi bi-people-fill\"></i>
\t\t\t\t\t\t\t<span>Gestion des Utilisateurs</span>
\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down ms-auto\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul id=\"components-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN_ESPRIT') %}
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('etudiant/esprit') }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-person\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Etudiants</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('admin/esprit') }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-person\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Admin Esprit</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Components Nav -->

\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\" {% if is_granted('ROLE_ADMIN_FAC') %} onclick=\"showAlert()\" {% endif %}>
\t\t\t\t\t\t\t<i class=\"bi bi-buildings-fill\"></i>
\t\t\t\t\t\t\t<span>Gestions des Facultés</span>
\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down ms-auto\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul id=\"forms-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN_ESPRIT') %}
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('admin/fac') }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-person\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Admin Faculté</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Forms Nav -->

\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"bi bi-gift\"></i>
\t\t\t\t\t\t\t<span>Gestion des Opportunités</span>
\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down ms-auto\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul id=\"tables-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN_ESPRIT') or is_granted('ROLE_ADMIN_FAC') %}
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('opportinute') }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-circle\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Opportunités</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Tables Nav -->

\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link collapsed\" data-bs-target=\"#produit-nav\" data-bs-toggle=\"collapse\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"bi bi-person-bounding-box\"></i>
\t\t\t\t\t\t\t<span>Gestion des Candidatures</span>
\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down ms-auto\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul id=\"produit-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN_ESPRIT') or is_granted('ROLE_ADMIN_FAC') %}
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('candidature') }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-person-plus-fill\"></i>
\t\t\t\t\t\t\t\t\t\t<span>Candidats</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- End Charts Nav -->

        <li class=\"nav-heading\">Pages</li>

        <br>
        <br>
        <br>
        <br>
        <br>

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"{{ path('app_logout') }}\">
                <i class=\"bi bi-box-arrow-in-right\"></i>
                <span>Log-out</span>
            </a>
        </li><!-- End Login Page Nav -->

    </ul>

</aside>
{% endblock %}
<main id=\"main\" class=\"main\" style=\"
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100%;\">
    {% block body %}
        <div><i class=\"bi bi-exclamation-lg\"></i> Bienvenue <i class=\"bi bi-exclamation-lg\"></i></div>
        <div><i class=\"bi bi-globe\"></i> Mobilité Internationnalle <i class=\"bi bi-globe\"></i></div>
    {% endblock %}
</main><!-- End #main -->
<!-- ======= Footer ======= -->
{% block footer %}
<footer id=\"footer\" class=\"footer\">
    <div class=\"copyright\">
        &copy; Copyright <strong><span>ESPRIT</span></strong>. All Rights Reserved
    </div>
    <div class=\"credits\">
        Designed by SummerTeam team 
    </div>
</footer><!-- End Footer -->
{% endblock %}
<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>
{% block js %}
<!-- Vendor JS Files -->
<script src=\"{{ asset('asset/vendor/apexcharts/apexcharts.min.js') }}\"></script>
<script src=\"{{ asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
<script src=\"{{ asset('asset/vendor/chart.js/chart.umd.js') }}\"></script>
<script src=\"{{ asset('asset/vendor/echarts/echarts.min.js') }}\"></script>
<script src=\"{{ asset('asset/vendor/quill/quill.min.js') }}\"></script>
<script src=\"{{ asset('asset/vendor/simple-datatables/simple-datatables.js') }}\"></script>
<script src=\"{{ asset('asset/vendor/tinymce/tinymce.min.js') }}\"></script>
<script src=\"{{ asset('asset/vendor/php-email-form/validate.js') }}\"></script>

    <!-- Load Flashy default JavaScript -->
    <script src=\"{{ asset('bundles/mercuryseriesflashy/js/flashy.js') }}\"></script>
    <!-- Include Flashy default partial -->
   
\t\t\t<script>
\t\t\t\tfunction showAlert() {
alert(\"Vous n'avez pas la permission d'accéder à cette section.\");
}
\t\t\t</script>
<!-- Template Main JS File -->
<script src=\"{{ asset('asset/js/main.js')}}\"></script>
{% endblock %}
</body>

</html>", "admin/admin.html.twig", "C:\\Users\\user\\Desktop\\Esprit\\stage-master\\templates\\admin\\admin.html.twig");
    }
}
