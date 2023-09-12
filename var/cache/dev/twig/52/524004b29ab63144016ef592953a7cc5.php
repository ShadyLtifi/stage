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

/* baseFront.html.twig */
class __TwigTemplate_4ede58d800f9b3803ec916e5f74e75be extends Template
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
            'hero' => [$this, 'block_hero'],
            'main' => [$this, 'block_main'],
            'why' => [$this, 'block_why'],
            'about' => [$this, 'block_about'],
            'contact' => [$this, 'block_contact'],
            'footer' => [$this, 'block_footer'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

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

  <!-- Favicons -->
  <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/tr.png"), "html", null, true);
        echo "\" rel=\"icon\">
  <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/tr.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  ";
        // line 20
        $this->displayBlock('css', $context, $blocks);
        // line 99
        echo "  <!-- =======================================================
  * Template Name: Flexor
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  ";
        // line 109
        $this->displayBlock('nav', $context, $blocks);
        // line 154
        echo "  <!-- ======= Hero Section ======= -->
  ";
        // line 155
        $this->displayBlock('hero', $context, $blocks);
        // line 167
        echo "
  ";
        // line 168
        $this->displayBlock('main', $context, $blocks);
        // line 356
        echo "  <!-- ======= Footer ======= -->
  ";
        // line 357
        $this->displayBlock('footer', $context, $blocks);
        // line 413
        echo "  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Vendor JS Files -->
  ";
        // line 416
        $this->displayBlock('js', $context, $blocks);
        // line 479
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

        echo " <title>ESPRIT-Mobilité Internationale</title> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 21
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <style>
        /* Styles pour le conteneur du carrousel */
        .carrousel-container {
            overflow: hidden;
            width: 100%;
            max-width: 800px; /* Ajustez la largeur selon vos besoins */
            margin: 0 auto;
            position: relative;
        }

        /* Styles pour le carrousel */
        .carrousel {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .carte {
            flex: 0 0 100%;
            padding: 20px;
            text-align: center;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            background-color:grey ; /* Rouge transparent */
            margin-right: 20px;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        /* Styles pour les boutons de navigation */
        .btn-prev, .btn-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            padding: 10px 15px;
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            cursor: pointer;
            border: none;
            border-radius: 50%;
            font-size: 24px;
            z-index: 1;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-prev:hover, .btn-next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .btn-prev {
            left: 10px;
        }

        .btn-next {
            right: 10px;
        }

        /* Styles pour le contenu de la carte */
        .carte h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #fff; /* Texte en blanc */
        }

        .carte p {
            font-size: 16px;
            line-height: 1.5;
            color: #fff; /* Texte en blanc */
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 109
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 110
        echo "  <!-- ======= Top Bar ======= -->
  <section id=\"topbar\" class=\"d-flex align-items-center\">
    <div class=\"container d-flex justify-content-center justify-content-md-between\">
      <div class=\"contact-info d-flex align-items-center\">
        <i class=\"bi bi-envelope d-flex align-items-center\"><a href=\"mailto:contact@esprit.tn\">contact@esprit.tn</a></i>
        <i class=\"bi bi-phone d-flex align-items-center ms-4\"><span>+216 70 250 000</span></i>
      </div>

      <div class=\"cta d-none d-md-flex align-items-center\">
        <a href=\"#values\" class=\"scrollto\">Get Started</a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"d-flex align-items-center\">
    <div class=\"container d-flex align-items-center justify-content-between\">

      <div class=\"logo\">
        <h1><img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-esprit-2.b8fedba0.png"), "html", null, true);
        echo " \"  alt=\"logo\"></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href=\"index.html\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->
      </div>

      <nav id=\"navbar\" class=\"navbar\">
        <ul>
          <li><a class=\"nav-link scrollto active\" href=\"#hero\">Accueil</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#values\">Programme Mobilité</a></li>
      
          <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
          <li class=\"dropdown\"><a href=\"#\"><span>Se Connecter</span> <i class=\"bi bi-chevron-down\"></i></a>
            <ul>
               <li><a href=\"";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_loginEtudiant");
        echo "\">Espace Etudiant</a></li>
              <li><a href=\"";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_loginEs");
        echo "\">Espace Administration Esprit</a></li>
              <li><a href=\"";
        // line 144
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

    // line 155
    public function block_hero($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hero"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hero"));

        // line 156
        echo "  <section id=\"hero\" class=\"d-flex flex-column justify-content-center align-items-center\">
    <div class=\"container\" data-aos=\"fade-in\">
      <h1>Mobilité Internationale</h1>
      
      <div class=\"d-flex align-items-center\">
        <i class=\"bx bxs-right-arrow-alt get-started-icon\"></i>
        <a href=\"#values\" class=\"btn-get-started scrollto\">Get Started</a>
      </div>
    </div>
  </section><!-- End Hero -->
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 168
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 169
        echo "  <main id=\"main\">

    <!-- ======= Why Us Section ======= -->
    ";
        // line 172
        $this->displayBlock('why', $context, $blocks);
        // line 224
        echo "    <!-- ======= About Section ======= -->
    ";
        // line 225
        $this->displayBlock('about', $context, $blocks);
        // line 276
        echo "    <!-- ======= Contact Section ======= -->
    ";
        // line 277
        $this->displayBlock('contact', $context, $blocks);
        // line 354
        echo "  </main><!-- End #main -->
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 172
    public function block_why($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "why"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "why"));

        echo "   
    <section id=\"why-us\" class=\"why-us\">
      <div class=\"container\">

        <div class=\"row\">
          <div class=\"col-xl-4 col-lg-5\" data-aos=\"fade-up\">
            <div class=\"content\">
              <h3>Expérience à l'international ?</h3>
              <p>
                Faire une partie de son cursus à l’étranger signifie s’ouvrir sur de nouvelles cultures, 
                être curieux et audacieux, savoir surmonter une forme d’inconnu. Dans un monde globalisé dans lequel évoluera le futur ingénieur,
                 il s’agit d’une expérience irremplaçable. 
                 ESPRIT a tissé des liens de partenariat avec des établissements d’enseignement supérieur étrangers permettant aux étudiants encours de scolarité de poursuivre des options spécifiques au sein de l’établissement partenaire(double cursus ou double diplôme). 
              </p>
              <div class=\"text-center\">
                <a href=\"#\" class=\"more-btn\">Learn More <i class=\"bx bx-chevron-right\"></i></a>
              </div>
            </div>
          </div>
          <div class=\"col-xl-8 col-lg-7 d-flex\">
            <div class=\"icon-boxes d-flex flex-column justify-content-center\">
              <div class=\"row\">
                <div class=\"col-xl-4 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                  <div class=\"icon-box mt-4 mt-xl-0\">
                    <i class=\"bx bx-receipt\"></i>
                    <h4>Quand ?</h4>
                    <p>Pour un semestre d’étude dans une des universités partenaires et un stage, qui remplacent la 5ème année à Esprit, l’étudiant obtient alors le diplôme d’ingénieur d’Esprit.
                      Pour 2 années complètes : l’étudiant obtient conjointement deux diplômes : le diplôme d’Esprit et celui du Master de l’institution partenaire étrangère.</p>
                  </div>
                </div>
                <div class=\"col-xl-4 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                  <div class=\"icon-box mt-4 mt-xl-0\">
                    <i class=\"bx bx-cube-alt\"></i>
                    <h4>Comment ?</h4>
                    <p>Au cours de la 4eme année les élèves sont avertis par mail des procédures de sélection. Le départ vers une université partenaire ne peut se faire qu’à travers la procédure de l’école. Des aides financières peuvent être obtenues qui aideront l’étudiant à faire aboutir son projet.</p>
                  </div>
                </div>
                <div class=\"col-xl-4 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                  <div class=\"icon-box mt-4 mt-xl-0\">
                    <i class=\"bx bx-images\"></i>
                    <h4>Où ?</h4>
                    <p>Vous pouvez consultez le catalogue de la Mobilité Internationale</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 225
    public function block_about($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "about"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "about"));

        // line 226
        echo "   <section id=\"values\" class=\"values\">
  <div class=\"container\">
    <div class=\"row\">
 <div class=\"carrousel-container\">
        <button class=\"btn-prev\">←</button>
        <div class=\"carrousel\">
            ";
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["opportinute"]);
        foreach ($context['_seq'] as $context["_key"] => $context["opportinute"]) {
            // line 233
            echo "            <div class=\"carte\">
                <h2 style=\"color: #A91818;\">";
            // line 234
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportinute"], "Titre", [], "any", false, false, false, 234), "html", null, true);
            echo "</h2>
                  <p>";
            // line 235
            ((twig_get_attribute($this->env, $this->source, $context["opportinute"], "DateDebut", [], "any", false, false, false, 235)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportinute"], "DateDebut", [], "any", false, false, false, 235), "Y-m-d"), "html", null, true))) : (print ("")));
            echo " - ";
            ((twig_get_attribute($this->env, $this->source, $context["opportinute"], "Datefin", [], "any", false, false, false, 235)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportinute"], "Datefin", [], "any", false, false, false, 235), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</p>
                <p>";
            // line 236
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportinute"], "description", [], "any", false, false, false, 236), "html", null, true);
            echo "</p>
                <p><a href= \"";
            // line 237
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("loginEtudiant"), "html", null, true);
            echo "\"><i class=\"bi bi-arrow-right\"></i>S'inscrire à notre programme</a><p>
            </div>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opportinute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        echo "            <!-- Ajoutez davantage de cartes ici -->
        </div>
        <button class=\"btn-next\">→</button>
    </div>

    </div>
  </div>
</section>

    <!-- End Values Section -->

    <!-- ======= Clients Section ======= -->
    <section id=\"clients\" class=\"clients\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"clients-slider swiper\">
          <div class=\"swiper-wrapper align-items-center\">
            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-1.png\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-2.png\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-3.png\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-4.jpg\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-5.jpg\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-6.png\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-7.jpg\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-8.png\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-9.jpg\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-10.jpg\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-11.jpg\" class=\"img-fluid\" alt=\"\"></div>

          </div>
          <div class=\"swiper-pagination\"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 277
    public function block_contact($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contact"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contact"));

        // line 278
        echo "    <section id=\"contact\" class=\"contact\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2 data-aos=\"fade-up\">Contact</h2>
          <p data-aos=\"fade-up\">Envoyez vos questions à propos la mobilité internationale ou vos suggestions pour qu'on puisse rester à votre écoute.</p>
        </div>

        <div class=\"row justify-content-center\">

          <div class=\"col-xl-3 col-lg-4 mt-4\" data-aos=\"fade-up\">
            <div class=\"info-box\">
              <i class=\"bx bx-map\"></i>
              <h3>Our Address</h3>
              <p>Résidence Essalem II , Av. Fethi Zouhir, Cebalat Ben Ammar 2083
               
              </p>
            </div>
          </div>

          <div class=\"col-xl-3 col-lg-4 mt-4\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"info-box\">
              <i class=\"bx bx-envelope\"></i>
              <h3>Email Us</h3>
              <p>info@esprit.tn<br>contact@esprit.tn
                <br>
                <br>
                <br>
                </p>
            </div>
          </div>
          <div class=\"col-xl-3 col-lg-4 mt-4\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"info-box\">
              <i class=\"bx bx-phone-call\"></i>
              <h3>Call Us</h3>
              <p>+216 70 685 685
                <br>
                <br>
                <br>
                <br>
              </p>
            </div>
          </div>
        </div>

        <div class=\"row justify-content-center\" data-aos=\"fade-up\" data-aos-delay=\"300\">
          <div class=\"col-xl-9 col-lg-12 mt-4\">
            <form action=\"forms/contact.php\" method=\"post\" role=\"form\" class=\"php-email-form\">
              <div class=\"row\">
                <div class=\"col-md-6 form-group\">
                  <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\" required>
                </div>
                <div class=\"col-md-6 form-group mt-3 mt-md-0\">
                  <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Your Email\" required>
                </div>
              </div>
              <div class=\"form-group mt-3\">
                <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Subject\" required>
              </div>
              <div class=\"form-group mt-3\">
                <textarea class=\"form-control\" name=\"message\" rows=\"5\" placeholder=\"Message\" required></textarea>
              </div>
              <div class=\"my-3\">
                <div class=\"loading\">Loading</div>
                <div class=\"error-message\"></div>
                <div class=\"sent-message\">Your message has been sent. Thank you!</div>
              </div>
              <div class=\"text-center\"><button type=\"submit\">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 357
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 358
        echo "  <footer id=\"footer\">

    <div class=\"footer-top\">
      <div class=\"container\">
        <div class=\"row\">

          <div class=\"col-lg-3 col-md-6 footer-contact\">
            <h3>Esprit</h3>
            <p>
              Résidence Essalem II <br>
              Av. Fethi Zouhir<br>
              Cebalat Ben Ammar 2083<br><br>
              <strong>Phone:</strong> +216 70 685 685<br>
              <strong>Email:</strong> contact@esprit.tn<br>
            </p>
          </div>

          <div class=\"col-lg-4 col-md-6 footer-links\">
            <h4>Useful Links</h4>
            <ul>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Accueil</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">A propos</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Programme Mobilité</a></li>
          
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class=\"container d-lg-flex py-4\">

      <div class=\"me-lg-auto text-center text-lg-start\">
        <div class=\"copyright\">
          &copy; Copyright <strong><span>ESPRIT</span></strong>. All Rights Reserved
        </div>
        <div class=\"credits\">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/ -->
          Designed by <strong><span> SummerTeam.</span></strong>
        </div>
      </div>
      <div class=\"social-links text-center text-lg-right pt-3 pt-lg-0\">
        <a href=\"https://twitter.com/Esprit_News\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
        <a href=\"https://www.facebook.com/esprit.tn\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
        <a href=\"https://www.instagram.com/esprit_ingenieur/\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
        <a href=\"https://www.youtube.com/channel/UCJ5wuQ9AQYtpf9Arieu3iXA\" class=\"youtube\"><i class=\"bx bxl-youtube\"></i></a>
        <a href=\"https://www.linkedin.com/company/esprit_2\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 416
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 417
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

  <!-- Template Main JS File -->
  <script src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
    <script>
        const carrousel = document.querySelector('.carrousel');
        const cartes = document.querySelectorAll('.carte');
        const btnPrev = document.querySelector('.btn-prev');
        const btnNext = document.querySelector('.btn-next');

        let index = 0;
        let autoSlideInterval;

        // Fonction pour passer à la carte suivante
        function nextSlide() {
            index = (index + 1) % cartes.length;
            updateCarrousel();
        }

        // Fonction pour activer l'animation automatique
        function startAutoSlide() {
            autoSlideInterval = setInterval(nextSlide, 3000); // Change de carte toutes les 3 secondes
        }

        // Fonction pour arrêter l'animation automatique
        function stopAutoSlide() {
            clearInterval(autoSlideInterval);
        }

        btnPrev.addEventListener('click', () => {
            stopAutoSlide();
            index = (index - 1 + cartes.length) % cartes.length;
            updateCarrousel();
            startAutoSlide();
        });

        btnNext.addEventListener('click', () => {
            stopAutoSlide();
            nextSlide();
            startAutoSlide();
        });

        // Démarrez l'animation automatique au chargement de la page
        startAutoSlide();

        function updateCarrousel() {
            const offsetX = -index * 100; // Largeur de la carte
            carrousel.style.transform = `translateX(\${offsetX}%)`;

            // Réinitialisez la transformation pour toutes les cartes
            cartes.forEach((carte, i) => {
                carte.style.transform = i === index ? 'scale(1)' : 'scale(0.9)';
                carte.style.boxShadow = i === index ? '0px 4px 8px rgba(0, 0, 0, 0.2)' : 'none';
            });
        }
    </script>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "baseFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  784 => 425,  778 => 422,  774 => 421,  770 => 420,  766 => 419,  762 => 418,  757 => 417,  747 => 416,  683 => 358,  673 => 357,  588 => 278,  578 => 277,  533 => 240,  524 => 237,  520 => 236,  514 => 235,  510 => 234,  507 => 233,  503 => 232,  495 => 226,  485 => 225,  415 => 172,  404 => 354,  402 => 277,  399 => 276,  397 => 225,  394 => 224,  392 => 172,  387 => 169,  377 => 168,  357 => 156,  347 => 155,  327 => 144,  323 => 143,  319 => 142,  303 => 129,  282 => 110,  272 => 109,  192 => 29,  186 => 26,  182 => 25,  178 => 24,  174 => 23,  170 => 22,  165 => 21,  155 => 20,  136 => 8,  124 => 479,  122 => 416,  117 => 413,  115 => 357,  112 => 356,  110 => 168,  107 => 167,  105 => 155,  102 => 154,  100 => 109,  88 => 99,  86 => 20,  80 => 17,  74 => 14,  70 => 13,  64 => 9,  62 => 8,  53 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  {% block title %} <title>ESPRIT-Mobilité Internationale</title> {% endblock %}
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"{{ asset('assets/img/tr.png') }}\" rel=\"icon\">
  <link href=\"{{ asset('assets/img/tr.png') }}\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  {% block css %}
  <link href=\"{{ asset('assets/vendor/aos/aos.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"{{ asset('assets/css/style1.css') }}\" rel=\"stylesheet\">
  <style>
        /* Styles pour le conteneur du carrousel */
        .carrousel-container {
            overflow: hidden;
            width: 100%;
            max-width: 800px; /* Ajustez la largeur selon vos besoins */
            margin: 0 auto;
            position: relative;
        }

        /* Styles pour le carrousel */
        .carrousel {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .carte {
            flex: 0 0 100%;
            padding: 20px;
            text-align: center;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            background-color:grey ; /* Rouge transparent */
            margin-right: 20px;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        /* Styles pour les boutons de navigation */
        .btn-prev, .btn-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            padding: 10px 15px;
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            cursor: pointer;
            border: none;
            border-radius: 50%;
            font-size: 24px;
            z-index: 1;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-prev:hover, .btn-next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .btn-prev {
            left: 10px;
        }

        .btn-next {
            right: 10px;
        }

        /* Styles pour le contenu de la carte */
        .carte h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #fff; /* Texte en blanc */
        }

        .carte p {
            font-size: 16px;
            line-height: 1.5;
            color: #fff; /* Texte en blanc */
        }
    </style>
{% endblock %}
  <!-- =======================================================
  * Template Name: Flexor
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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
        <a href=\"#values\" class=\"scrollto\">Get Started</a>
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
          <li><a class=\"nav-link scrollto active\" href=\"#hero\">Accueil</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#values\">Programme Mobilité</a></li>
      
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
  <!-- ======= Hero Section ======= -->
  {% block hero %}
  <section id=\"hero\" class=\"d-flex flex-column justify-content-center align-items-center\">
    <div class=\"container\" data-aos=\"fade-in\">
      <h1>Mobilité Internationale</h1>
      
      <div class=\"d-flex align-items-center\">
        <i class=\"bx bxs-right-arrow-alt get-started-icon\"></i>
        <a href=\"#values\" class=\"btn-get-started scrollto\">Get Started</a>
      </div>
    </div>
  </section><!-- End Hero -->
  {% endblock %}

  {% block main %}
  <main id=\"main\">

    <!-- ======= Why Us Section ======= -->
    {% block why %}   
    <section id=\"why-us\" class=\"why-us\">
      <div class=\"container\">

        <div class=\"row\">
          <div class=\"col-xl-4 col-lg-5\" data-aos=\"fade-up\">
            <div class=\"content\">
              <h3>Expérience à l'international ?</h3>
              <p>
                Faire une partie de son cursus à l’étranger signifie s’ouvrir sur de nouvelles cultures, 
                être curieux et audacieux, savoir surmonter une forme d’inconnu. Dans un monde globalisé dans lequel évoluera le futur ingénieur,
                 il s’agit d’une expérience irremplaçable. 
                 ESPRIT a tissé des liens de partenariat avec des établissements d’enseignement supérieur étrangers permettant aux étudiants encours de scolarité de poursuivre des options spécifiques au sein de l’établissement partenaire(double cursus ou double diplôme). 
              </p>
              <div class=\"text-center\">
                <a href=\"#\" class=\"more-btn\">Learn More <i class=\"bx bx-chevron-right\"></i></a>
              </div>
            </div>
          </div>
          <div class=\"col-xl-8 col-lg-7 d-flex\">
            <div class=\"icon-boxes d-flex flex-column justify-content-center\">
              <div class=\"row\">
                <div class=\"col-xl-4 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                  <div class=\"icon-box mt-4 mt-xl-0\">
                    <i class=\"bx bx-receipt\"></i>
                    <h4>Quand ?</h4>
                    <p>Pour un semestre d’étude dans une des universités partenaires et un stage, qui remplacent la 5ème année à Esprit, l’étudiant obtient alors le diplôme d’ingénieur d’Esprit.
                      Pour 2 années complètes : l’étudiant obtient conjointement deux diplômes : le diplôme d’Esprit et celui du Master de l’institution partenaire étrangère.</p>
                  </div>
                </div>
                <div class=\"col-xl-4 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                  <div class=\"icon-box mt-4 mt-xl-0\">
                    <i class=\"bx bx-cube-alt\"></i>
                    <h4>Comment ?</h4>
                    <p>Au cours de la 4eme année les élèves sont avertis par mail des procédures de sélection. Le départ vers une université partenaire ne peut se faire qu’à travers la procédure de l’école. Des aides financières peuvent être obtenues qui aideront l’étudiant à faire aboutir son projet.</p>
                  </div>
                </div>
                <div class=\"col-xl-4 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                  <div class=\"icon-box mt-4 mt-xl-0\">
                    <i class=\"bx bx-images\"></i>
                    <h4>Où ?</h4>
                    <p>Vous pouvez consultez le catalogue de la Mobilité Internationale</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->
    {% endblock %}
    <!-- ======= About Section ======= -->
    {% block about %}
   <section id=\"values\" class=\"values\">
  <div class=\"container\">
    <div class=\"row\">
 <div class=\"carrousel-container\">
        <button class=\"btn-prev\">←</button>
        <div class=\"carrousel\">
            {% for opportinute in opportinute %}
            <div class=\"carte\">
                <h2 style=\"color: #A91818;\">{{ opportinute.Titre }}</h2>
                  <p>{{ opportinute.DateDebut ? opportinute.DateDebut|date('Y-m-d') : '' }} - {{ opportinute.Datefin ? opportinute.Datefin|date('Y-m-d') : ''}}</p>
                <p>{{ opportinute.description }}</p>
                <p><a href= \"{{ asset('loginEtudiant') }}\"><i class=\"bi bi-arrow-right\"></i>S'inscrire à notre programme</a><p>
            </div>
           {% endfor %}
            <!-- Ajoutez davantage de cartes ici -->
        </div>
        <button class=\"btn-next\">→</button>
    </div>

    </div>
  </div>
</section>

    <!-- End Values Section -->

    <!-- ======= Clients Section ======= -->
    <section id=\"clients\" class=\"clients\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"clients-slider swiper\">
          <div class=\"swiper-wrapper align-items-center\">
            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-1.png\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-2.png\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-3.png\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-4.jpg\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-5.jpg\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-6.png\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-7.jpg\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-8.png\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-9.jpg\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-10.jpg\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-11.jpg\" class=\"img-fluid\" alt=\"\"></div>

          </div>
          <div class=\"swiper-pagination\"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->
    {% endblock %}
    <!-- ======= Contact Section ======= -->
    {% block contact %}
    <section id=\"contact\" class=\"contact\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2 data-aos=\"fade-up\">Contact</h2>
          <p data-aos=\"fade-up\">Envoyez vos questions à propos la mobilité internationale ou vos suggestions pour qu'on puisse rester à votre écoute.</p>
        </div>

        <div class=\"row justify-content-center\">

          <div class=\"col-xl-3 col-lg-4 mt-4\" data-aos=\"fade-up\">
            <div class=\"info-box\">
              <i class=\"bx bx-map\"></i>
              <h3>Our Address</h3>
              <p>Résidence Essalem II , Av. Fethi Zouhir, Cebalat Ben Ammar 2083
               
              </p>
            </div>
          </div>

          <div class=\"col-xl-3 col-lg-4 mt-4\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"info-box\">
              <i class=\"bx bx-envelope\"></i>
              <h3>Email Us</h3>
              <p>info@esprit.tn<br>contact@esprit.tn
                <br>
                <br>
                <br>
                </p>
            </div>
          </div>
          <div class=\"col-xl-3 col-lg-4 mt-4\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"info-box\">
              <i class=\"bx bx-phone-call\"></i>
              <h3>Call Us</h3>
              <p>+216 70 685 685
                <br>
                <br>
                <br>
                <br>
              </p>
            </div>
          </div>
        </div>

        <div class=\"row justify-content-center\" data-aos=\"fade-up\" data-aos-delay=\"300\">
          <div class=\"col-xl-9 col-lg-12 mt-4\">
            <form action=\"forms/contact.php\" method=\"post\" role=\"form\" class=\"php-email-form\">
              <div class=\"row\">
                <div class=\"col-md-6 form-group\">
                  <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\" required>
                </div>
                <div class=\"col-md-6 form-group mt-3 mt-md-0\">
                  <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Your Email\" required>
                </div>
              </div>
              <div class=\"form-group mt-3\">
                <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Subject\" required>
              </div>
              <div class=\"form-group mt-3\">
                <textarea class=\"form-control\" name=\"message\" rows=\"5\" placeholder=\"Message\" required></textarea>
              </div>
              <div class=\"my-3\">
                <div class=\"loading\">Loading</div>
                <div class=\"error-message\"></div>
                <div class=\"sent-message\">Your message has been sent. Thank you!</div>
              </div>
              <div class=\"text-center\"><button type=\"submit\">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
    {% endblock %}
  </main><!-- End #main -->
  {% endblock %}
  <!-- ======= Footer ======= -->
  {% block footer %}
  <footer id=\"footer\">

    <div class=\"footer-top\">
      <div class=\"container\">
        <div class=\"row\">

          <div class=\"col-lg-3 col-md-6 footer-contact\">
            <h3>Esprit</h3>
            <p>
              Résidence Essalem II <br>
              Av. Fethi Zouhir<br>
              Cebalat Ben Ammar 2083<br><br>
              <strong>Phone:</strong> +216 70 685 685<br>
              <strong>Email:</strong> contact@esprit.tn<br>
            </p>
          </div>

          <div class=\"col-lg-4 col-md-6 footer-links\">
            <h4>Useful Links</h4>
            <ul>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Accueil</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">A propos</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Programme Mobilité</a></li>
          
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class=\"container d-lg-flex py-4\">

      <div class=\"me-lg-auto text-center text-lg-start\">
        <div class=\"copyright\">
          &copy; Copyright <strong><span>ESPRIT</span></strong>. All Rights Reserved
        </div>
        <div class=\"credits\">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/ -->
          Designed by <strong><span> SummerTeam.</span></strong>
        </div>
      </div>
      <div class=\"social-links text-center text-lg-right pt-3 pt-lg-0\">
        <a href=\"https://twitter.com/Esprit_News\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
        <a href=\"https://www.facebook.com/esprit.tn\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
        <a href=\"https://www.instagram.com/esprit_ingenieur/\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
        <a href=\"https://www.youtube.com/channel/UCJ5wuQ9AQYtpf9Arieu3iXA\" class=\"youtube\"><i class=\"bx bxl-youtube\"></i></a>
        <a href=\"https://www.linkedin.com/company/esprit_2\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->
  {% endblock %}
  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Vendor JS Files -->
  {% block js %}
  <script src=\"{{ asset('assets/vendor/aos/aos.js') }}\"></script>
  <script src=\"{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
  <script src=\"{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}\"></script>
  <script src=\"{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}\"></script>
  <script src=\"{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}\"></script>
  <script src=\"{{ asset('assets/vendor/php-email-form/validate.js') }}\"></script>

  <!-- Template Main JS File -->
  <script src=\"{{ asset('assets/js/main.js') }}\"></script>
    <script>
        const carrousel = document.querySelector('.carrousel');
        const cartes = document.querySelectorAll('.carte');
        const btnPrev = document.querySelector('.btn-prev');
        const btnNext = document.querySelector('.btn-next');

        let index = 0;
        let autoSlideInterval;

        // Fonction pour passer à la carte suivante
        function nextSlide() {
            index = (index + 1) % cartes.length;
            updateCarrousel();
        }

        // Fonction pour activer l'animation automatique
        function startAutoSlide() {
            autoSlideInterval = setInterval(nextSlide, 3000); // Change de carte toutes les 3 secondes
        }

        // Fonction pour arrêter l'animation automatique
        function stopAutoSlide() {
            clearInterval(autoSlideInterval);
        }

        btnPrev.addEventListener('click', () => {
            stopAutoSlide();
            index = (index - 1 + cartes.length) % cartes.length;
            updateCarrousel();
            startAutoSlide();
        });

        btnNext.addEventListener('click', () => {
            stopAutoSlide();
            nextSlide();
            startAutoSlide();
        });

        // Démarrez l'animation automatique au chargement de la page
        startAutoSlide();

        function updateCarrousel() {
            const offsetX = -index * 100; // Largeur de la carte
            carrousel.style.transform = `translateX(\${offsetX}%)`;

            // Réinitialisez la transformation pour toutes les cartes
            cartes.forEach((carte, i) => {
                carte.style.transform = i === index ? 'scale(1)' : 'scale(0.9)';
                carte.style.boxShadow = i === index ? '0px 4px 8px rgba(0, 0, 0, 0.2)' : 'none';
            });
        }
    </script>
  {% endblock %}
</body>

</html>", "baseFront.html.twig", "C:\\Users\\user\\Desktop\\Esprit\\stage\\stagee-master\\templates\\baseFront.html.twig");
    }
}
