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

/* opportinute/show.html.twig */
class __TwigTemplate_fb022e899b18e78bb174bb759f01fdf7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opportinute/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opportinute/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/admin.html.twig", "opportinute/show.html.twig", 1);
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

        echo "Opportinute";
        
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
        echo "  <div class=\"container my-2\" style=\"font-family:'Microsoft Tai Le'\">

<h1 class=\"mb-2\" style=\"
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100%;\">Opportinute</h1>

    <div class=\"card mb-2\">
        <div class=\"card-body\">
<br> <br>
    <table class=\"table table-sm\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["opportinute"]) || array_key_exists("opportinute", $context) ? $context["opportinute"] : (function () { throw new RuntimeError('Variable "opportinute" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NomFaculte</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["opportinute"]) || array_key_exists("opportinute", $context) ? $context["opportinute"] : (function () { throw new RuntimeError('Variable "opportinute" does not exist.', 25, $this->source); })()), "NomFaculte", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DateDebut</th>
                <td>";
        // line 29
        ((twig_get_attribute($this->env, $this->source, (isset($context["opportinute"]) || array_key_exists("opportinute", $context) ? $context["opportinute"] : (function () { throw new RuntimeError('Variable "opportinute" does not exist.', 29, $this->source); })()), "DateDebut", [], "any", false, false, false, 29)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["opportinute"]) || array_key_exists("opportinute", $context) ? $context["opportinute"] : (function () { throw new RuntimeError('Variable "opportinute" does not exist.', 29, $this->source); })()), "DateDebut", [], "any", false, false, false, 29), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Datefin</th>
                <td>";
        // line 33
        ((twig_get_attribute($this->env, $this->source, (isset($context["opportinute"]) || array_key_exists("opportinute", $context) ? $context["opportinute"] : (function () { throw new RuntimeError('Variable "opportinute" does not exist.', 33, $this->source); })()), "Datefin", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["opportinute"]) || array_key_exists("opportinute", $context) ? $context["opportinute"] : (function () { throw new RuntimeError('Variable "opportinute" does not exist.', 33, $this->source); })()), "Datefin", [], "any", false, false, false, 33), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["opportinute"]) || array_key_exists("opportinute", $context) ? $context["opportinute"] : (function () { throw new RuntimeError('Variable "opportinute" does not exist.', 37, $this->source); })()), "Titre", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

<div class=\"d-flex justify-content-center\">
<div class=\"btn-toolbar\" role=\"toolbar\">
\t<div class=\"btn-group\">


    <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_opportinute_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["opportinute"]) || array_key_exists("opportinute", $context) ? $context["opportinute"] : (function () { throw new RuntimeError('Variable "opportinute" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
        echo "\"class=\"btn btn-outline-success mx-1\" style=\"margin-bottom: 10px\">Modifier</a>
    <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_opportinute_index");
        echo "\"class=\"btn btn-outline-secondary mx-1\" style=\"margin-bottom: 10px\">Retour</a>

    ";
        // line 50
        echo twig_include($this->env, $context, "opportinute/_delete_form.html.twig");
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
        return "opportinute/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 50,  150 => 48,  146 => 47,  133 => 37,  126 => 33,  119 => 29,  112 => 25,  105 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/admin.html.twig' %}

{% block title %}Opportinute{% endblock %}

{% block body %}
  <div class=\"container my-2\" style=\"font-family:'Microsoft Tai Le'\">

<h1 class=\"mb-2\" style=\"
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100%;\">Opportinute</h1>

    <div class=\"card mb-2\">
        <div class=\"card-body\">
<br> <br>
    <table class=\"table table-sm\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ opportinute.id }}</td>
            </tr>
            <tr>
                <th>NomFaculte</th>
                <td>{{ opportinute.NomFaculte }}</td>
            </tr>
            <tr>
                <th>DateDebut</th>
                <td>{{ opportinute.DateDebut ? opportinute.DateDebut|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Datefin</th>
                <td>{{ opportinute.Datefin ? opportinute.Datefin|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>{{ opportinute.Titre }}</td>
            </tr>
        </tbody>
    </table>

<div class=\"d-flex justify-content-center\">
<div class=\"btn-toolbar\" role=\"toolbar\">
\t<div class=\"btn-group\">


    <a href=\"{{ path('app_opportinute_edit', {'id': opportinute.id}) }}\"class=\"btn btn-outline-success mx-1\" style=\"margin-bottom: 10px\">Modifier</a>
    <a href=\"{{ path('app_opportinute_index') }}\"class=\"btn btn-outline-secondary mx-1\" style=\"margin-bottom: 10px\">Retour</a>

    {{ include('opportinute/_delete_form.html.twig') }}


         </div>
     </div>

    </div>
    </div>
      </div> 
{% endblock %}
", "opportinute/show.html.twig", "C:\\Users\\user\\Desktop\\Esprit\\stage\\stagee-master\\templates\\opportinute\\show.html.twig");
    }
}
