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

/* admin_esprit/show.html.twig */
class __TwigTemplate_00e24a42c56dd316fcc778995558d070 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_esprit/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_esprit/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/admin.html.twig", "admin_esprit/show.html.twig", 1);
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

        echo "Afficher AdminEsprit";
        
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
        echo "   <div class=\"container my-2\" style=\"font-family:'Microsoft Tai Le'\">

<h1 class=\"mb-2\" style=\"
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100%;\">Admin Esprit";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_esprit"]) || array_key_exists("admin_esprit", $context) ? $context["admin_esprit"] : (function () { throw new RuntimeError('Variable "admin_esprit" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</h1>
    <div class=\"card mb-2\">
        <div class=\"card-body\">
<br> <br>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_esprit"]) || array_key_exists("admin_esprit", $context) ? $context["admin_esprit"] : (function () { throw new RuntimeError('Variable "admin_esprit" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_esprit"]) || array_key_exists("admin_esprit", $context) ? $context["admin_esprit"] : (function () { throw new RuntimeError('Variable "admin_esprit" does not exist.', 25, $this->source); })()), "email", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
            </tr>
        
            <tr>
                <th>Password</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_esprit"]) || array_key_exists("admin_esprit", $context) ? $context["admin_esprit"] : (function () { throw new RuntimeError('Variable "admin_esprit" does not exist.', 30, $this->source); })()), "password", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>IdEsprit</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_esprit"]) || array_key_exists("admin_esprit", $context) ? $context["admin_esprit"] : (function () { throw new RuntimeError('Variable "admin_esprit" does not exist.', 34, $this->source); })()), "idEsprit", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_esprit"]) || array_key_exists("admin_esprit", $context) ? $context["admin_esprit"] : (function () { throw new RuntimeError('Variable "admin_esprit" does not exist.', 38, $this->source); })()), "nom", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_esprit"]) || array_key_exists("admin_esprit", $context) ? $context["admin_esprit"] : (function () { throw new RuntimeError('Variable "admin_esprit" does not exist.', 42, $this->source); })()), "prenom", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cin</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_esprit"]) || array_key_exists("admin_esprit", $context) ? $context["admin_esprit"] : (function () { throw new RuntimeError('Variable "admin_esprit" does not exist.', 46, $this->source); })()), "cin", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
<div class=\"d-flex justify-content-center\">
<div class=\"btn-toolbar\" role=\"toolbar\">
\t<div class=\"btn-group\">
 <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_esprit_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["admin_esprit"]) || array_key_exists("admin_esprit", $context) ? $context["admin_esprit"] : (function () { throw new RuntimeError('Variable "admin_esprit" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
        echo "\" class=\"btn btn-outline-success mx-1\" style=\"margin-bottom: 10px\">Modifier</a>
    <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_esprit_index");
        echo "\"class=\"btn btn-outline-secondary mx-1\" style=\"margin-bottom: 10px\">Retour</a>

    ";
        // line 56
        echo twig_include($this->env, $context, "admin_esprit/_delete_form.html.twig");
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
        return "admin_esprit/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 56,  165 => 54,  161 => 53,  151 => 46,  144 => 42,  137 => 38,  130 => 34,  123 => 30,  115 => 25,  108 => 21,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/admin.html.twig' %}

{% block title %}Afficher AdminEsprit{% endblock %}

{% block body %}
   <div class=\"container my-2\" style=\"font-family:'Microsoft Tai Le'\">

<h1 class=\"mb-2\" style=\"
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100%;\">Admin Esprit{{ admin_esprit.id }}</h1>
    <div class=\"card mb-2\">
        <div class=\"card-body\">
<br> <br>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ admin_esprit.id }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ admin_esprit.email }}</td>
            </tr>
        
            <tr>
                <th>Password</th>
                <td>{{ admin_esprit.password }}</td>
            </tr>
            <tr>
                <th>IdEsprit</th>
                <td>{{ admin_esprit.idEsprit }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ admin_esprit.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ admin_esprit.prenom }}</td>
            </tr>
            <tr>
                <th>Cin</th>
                <td>{{ admin_esprit.cin }}</td>
            </tr>
        </tbody>
    </table>
<div class=\"d-flex justify-content-center\">
<div class=\"btn-toolbar\" role=\"toolbar\">
\t<div class=\"btn-group\">
 <a href=\"{{ path('app_admin_esprit_edit', {'id': admin_esprit.id}) }}\" class=\"btn btn-outline-success mx-1\" style=\"margin-bottom: 10px\">Modifier</a>
    <a href=\"{{ path('app_admin_esprit_index') }}\"class=\"btn btn-outline-secondary mx-1\" style=\"margin-bottom: 10px\">Retour</a>

    {{ include('admin_esprit/_delete_form.html.twig') }}
     </div>
     </div>

    </div>
</div>
     </div>
{% endblock %}
", "admin_esprit/show.html.twig", "C:\\Users\\user\\Desktop\\Esprit\\stage\\stagee-master\\templates\\admin_esprit\\show.html.twig");
    }
}
