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

/* admin_fac/show.html.twig */
class __TwigTemplate_05b335edfb77359fc6553b59498ee966 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_fac/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_fac/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/admin.html.twig", "admin_fac/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "AdminFac";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container my-2\" style=\"font-family:'Microsoft Tai Le'\">

<h1 class=\"mb-2\" style=\"
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100%;\">Admin Faculté ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_fac"]) || array_key_exists("admin_fac", $context) ? $context["admin_fac"] : (function () { throw new RuntimeError('Variable "admin_fac" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</h1>
    <div class=\"card mb-2\">
        <div class=\"card-body\">
<br> <br>
    <table class=\"table table-sm\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_fac"]) || array_key_exists("admin_fac", $context) ? $context["admin_fac"] : (function () { throw new RuntimeError('Variable "admin_fac" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
         

            <tr>
                <th>Email</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_fac"]) || array_key_exists("admin_fac", $context) ? $context["admin_fac"] : (function () { throw new RuntimeError('Variable "admin_fac" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
            </tr>
         
            <tr>
                <th>Nom</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_fac"]) || array_key_exists("admin_fac", $context) ? $context["admin_fac"] : (function () { throw new RuntimeError('Variable "admin_fac" does not exist.', 31, $this->source); })()), "nom", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_fac"]) || array_key_exists("admin_fac", $context) ? $context["admin_fac"] : (function () { throw new RuntimeError('Variable "admin_fac" does not exist.', 35, $this->source); })()), "prenom", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NomFaculté</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_fac"]) || array_key_exists("admin_fac", $context) ? $context["admin_fac"] : (function () { throw new RuntimeError('Variable "admin_fac" does not exist.', 39, $this->source); })()), "nomFaculte", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_fac"]) || array_key_exists("admin_fac", $context) ? $context["admin_fac"] : (function () { throw new RuntimeError('Variable "admin_fac" does not exist.', 43, $this->source); })()), "adresse", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    <br>     
<div class=\"d-flex justify-content-center\">
<div class=\"btn-toolbar\" role=\"toolbar\">
\t<div class=\"btn-group\">

    <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_fac_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["admin_fac"]) || array_key_exists("admin_fac", $context) ? $context["admin_fac"] : (function () { throw new RuntimeError('Variable "admin_fac" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52)]), "html", null, true);
        echo "\"class=\"btn btn-outline-success mx-1\" style=\"margin-bottom: 10px\">Modifier</a>
    
   

     <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_fac_index");
        echo "\"class=\"btn btn-outline-secondary mx-1\" style=\"margin-bottom: 10px\">Retour</a>
 ";
        // line 57
        echo twig_include($this->env, $context, "admin_fac/_delete_form.html.twig");
        echo "
     </div>
     </div>

    </div>
    </div>
      </div>  
   
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin_fac/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 57,  164 => 56,  157 => 52,  145 => 43,  138 => 39,  131 => 35,  124 => 31,  116 => 26,  107 => 20,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/admin.html.twig' %}

{% block title %}AdminFac{% endblock %}

{% block body %}
<div class=\"container my-2\" style=\"font-family:'Microsoft Tai Le'\">

<h1 class=\"mb-2\" style=\"
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100%;\">Admin Faculté {{ admin_fac.id }}</h1>
    <div class=\"card mb-2\">
        <div class=\"card-body\">
<br> <br>
    <table class=\"table table-sm\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ admin_fac.id }}</td>
            </tr>
         

            <tr>
                <th>Email</th>
                <td>{{ admin_fac.email }}</td>
            </tr>
         
            <tr>
                <th>Nom</th>
                <td>{{ admin_fac.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ admin_fac.prenom }}</td>
            </tr>
            <tr>
                <th>NomFaculté</th>
                <td>{{ admin_fac.nomFaculte }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ admin_fac.adresse }}</td>
            </tr>
        </tbody>
    </table>
    <br>     
<div class=\"d-flex justify-content-center\">
<div class=\"btn-toolbar\" role=\"toolbar\">
\t<div class=\"btn-group\">

    <a href=\"{{ path('app_admin_fac_edit', {'id': admin_fac.id}) }}\"class=\"btn btn-outline-success mx-1\" style=\"margin-bottom: 10px\">Modifier</a>
    
   

     <a href=\"{{ path('app_admin_fac_index') }}\"class=\"btn btn-outline-secondary mx-1\" style=\"margin-bottom: 10px\">Retour</a>
 {{ include('admin_fac/_delete_form.html.twig') }}
     </div>
     </div>

    </div>
    </div>
      </div>  
   
{% endblock %}
", "admin_fac/show.html.twig", "C:\\Users\\user\\Desktop\\Esprit\\stage\\stagee-master\\templates\\admin_fac\\show.html.twig");
    }
}
