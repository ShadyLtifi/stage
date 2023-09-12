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

/* candidature/show.html.twig */
class __TwigTemplate_d569f5f9eb47d1315b70222aceb00133 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/admin.html.twig", "candidature/show.html.twig", 1);
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

        echo "Candidature
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div class=\"container my-2\" style=\"font-family:'Microsoft Tai Le'\">

\t\t<h1 class=\"mb-2\" style=\"
\t\t\t      display: flex;
\t\t\t      flex-direction: column;
\t\t\t      align-items: center;
\t\t\t      min-height: 100%;\">Candidature</h1>

\t\t<div class=\"card mb-2\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<br>
\t\t\t\t<br>
\t\t\t\t<table class=\"table table-sm\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t    <th>Id Etudiant</th>
\t\t\t\t\t\t\t<td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 25, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 25), "idEtudiant", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t    <th>Titre</th>
\t\t\t\t\t\t\t<td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 29, $this->source); })()), "Opportinute", [], "any", false, false, false, 29), "Titre", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t    <th>Résultat</th>
\t\t\t\t\t\t\t<td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 33, $this->source); })()), "resultat", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t<div class=\"btn-toolbar\" role=\"toolbar\">
\t\t\t\t\t\t<div class=\"btn-group\">

\t\t\t\t\t\t\t<a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["candidature"]) || array_key_exists("candidature", $context) ? $context["candidature"] : (function () { throw new RuntimeError('Variable "candidature" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
        echo "\" class=\"btn btn-outline-success mx-1\" style=\"margin-bottom: 10px\">Modifier</a>
\t\t\t\t\t\t\t<a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_index");
        echo "\" class=\"btn btn-outline-secondary mx-1\" style=\"margin-bottom: 10px\">Retour</a>

\t\t\t\t\t\t\t";
        // line 44
        echo twig_include($this->env, $context, "candidature/_delete_form.html.twig");
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "candidature/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 44,  138 => 42,  134 => 41,  123 => 33,  116 => 29,  109 => 25,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/admin.html.twig' %}

{% block title %}Candidature
{% endblock %}

{% block body %}
\t<div class=\"container my-2\" style=\"font-family:'Microsoft Tai Le'\">

\t\t<h1 class=\"mb-2\" style=\"
\t\t\t      display: flex;
\t\t\t      flex-direction: column;
\t\t\t      align-items: center;
\t\t\t      min-height: 100%;\">Candidature</h1>

\t\t<div class=\"card mb-2\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<br>
\t\t\t\t<br>
\t\t\t\t<table class=\"table table-sm\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t    <th>Id Etudiant</th>
\t\t\t\t\t\t\t<td>{{ candidature.EtudiantEsprit.idEtudiant }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t    <th>Titre</th>
\t\t\t\t\t\t\t<td>{{ candidature.Opportinute.Titre }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t    <th>Résultat</th>
\t\t\t\t\t\t\t<td>{{ candidature.resultat }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t<div class=\"btn-toolbar\" role=\"toolbar\">
\t\t\t\t\t\t<div class=\"btn-group\">

\t\t\t\t\t\t\t<a href=\"{{ path('app_candidature_edit', {'id': candidature.id}) }}\" class=\"btn btn-outline-success mx-1\" style=\"margin-bottom: 10px\">Modifier</a>
\t\t\t\t\t\t\t<a href=\"{{ path('app_candidature_index') }}\" class=\"btn btn-outline-secondary mx-1\" style=\"margin-bottom: 10px\">Retour</a>

\t\t\t\t\t\t\t{{ include('candidature/_delete_form.html.twig') }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t{% endblock %}

", "candidature/show.html.twig", "C:\\Users\\user\\Desktop\\Esprit\\stage\\stagee-master\\templates\\candidature\\show.html.twig");
    }
}
