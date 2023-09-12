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

/* account/index.html.twig */
class __TwigTemplate_51ff4cf2bca83cb85a9960353883d772 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'nav' => [$this, 'block_nav'],
            'about' => [$this, 'block_about'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "account/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 4
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
        // line 23
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
          \t<li>
\t\t\t\t\t\t\t\t<a class=\"nav-link scrollto\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_index");
        echo "\">Mes dépots</a>
\t\t\t\t\t\t\t</li>
          <li class=\"dropdown\">
\t\t\t\t\t\t<a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">

\t\t\t\t\t\t\t<span class=\"d-none d-md-block dropdown-toggle ps-2\">";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "nom", [], "any", false, false, false, 40), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "prenom", [], "any", false, false, false, 41), "html", null, true);
        echo "</span>
\t\t\t\t\t
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<!-- End Profile Iamge Icon -->

\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\t<h6>Bienvenu
\t\t\t\t\t\t\t\t\t";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "nom", [], "any", false, false, false, 49), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "prenom", [], "any", false, false, false, 50), "html", null, true);
        echo "</h6>
\t\t\t\t\t\t\t\t<span>Etudiant</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-person\"></i>
\t\t\t\t\t\t\t\t\t<span>Profile</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-box-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">Déconnexion</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
</li>
\t\t\t\t\t\t</ul><!-- End Profile Dropdown Items --></li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 85
    public function block_about($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "about"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "about"));

        // line 86
        echo "   <section id=\"values\" class=\"values\">
  <div class=\"container\">
    <div class=\"row\">
 <div class=\"carrousel-container\">
        <button class=\"btn-prev\">←</button>
        <div class=\"carrousel\">
            ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["opportinute"]);
        foreach ($context['_seq'] as $context["_key"] => $context["opportinute"]) {
            // line 93
            echo "            <div class=\"carte\">
                <h2 style=\"color: #A91818;\">";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportinute"], "Titre", [], "any", false, false, false, 94), "html", null, true);
            echo "</h2>
            
                  <p>";
            // line 96
            ((twig_get_attribute($this->env, $this->source, $context["opportinute"], "DateDebut", [], "any", false, false, false, 96)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportinute"], "DateDebut", [], "any", false, false, false, 96), "Y-m-d"), "html", null, true))) : (print ("")));
            echo " - ";
            ((twig_get_attribute($this->env, $this->source, $context["opportinute"], "Datefin", [], "any", false, false, false, 96)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportinute"], "Datefin", [], "any", false, false, false, 96), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</p>
                <p>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportinute"], "description", [], "any", false, false, false, 97), "html", null, true);
            echo "</p>
                <p><a href= \"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidature_create", ["id" => twig_get_attribute($this->env, $this->source, $context["opportinute"], "id", [], "any", false, false, false, 98)]), "html", null, true);
            echo "\"><i class=\"bi bi-arrow-right\"></i>Remplir le Formulaire</a><p>
            </div>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opportinute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
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

    public function getTemplateName()
    {
        return "account/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 101,  218 => 98,  214 => 97,  208 => 96,  203 => 94,  200 => 93,  196 => 92,  188 => 86,  178 => 85,  154 => 69,  132 => 50,  128 => 49,  117 => 41,  113 => 40,  105 => 35,  90 => 23,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

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
          \t<li>
\t\t\t\t\t\t\t\t<a class=\"nav-link scrollto\" href=\"{{ path('app_dashboard_index') }}\">Mes dépots</a>
\t\t\t\t\t\t\t</li>
          <li class=\"dropdown\">
\t\t\t\t\t\t<a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">

\t\t\t\t\t\t\t<span class=\"d-none d-md-block dropdown-toggle ps-2\">{{ app.user.nom}}
\t\t\t\t\t\t\t\t{{ app.user.prenom}}</span>
\t\t\t\t\t
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<!-- End Profile Iamge Icon -->

\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\t<h6>Bienvenu
\t\t\t\t\t\t\t\t\t{{ app.user.nom}}
\t\t\t\t\t\t\t\t\t{{ app.user.prenom}}</h6>
\t\t\t\t\t\t\t\t<span>Etudiant</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-person\"></i>
\t\t\t\t\t\t\t\t\t<span>Profile</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('app_logout') }}\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-box-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">Déconnexion</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
</li>
\t\t\t\t\t\t</ul><!-- End Profile Dropdown Items --></li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  {% endblock %}


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
                <p><a href= \"{{  path('candidature_create',{'id': opportinute.id}) }}\"><i class=\"bi bi-arrow-right\"></i>Remplir le Formulaire</a><p>
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
", "account/index.html.twig", "C:\\Users\\user\\Desktop\\Esprit\\stage-master\\templates\\account\\index.html.twig");
    }
}
