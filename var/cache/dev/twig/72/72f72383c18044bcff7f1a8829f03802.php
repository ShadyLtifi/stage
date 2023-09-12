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

/* etudiant_esprit/show.html.twig */
class __TwigTemplate_9ca130729d2b1576297a07b6472712ec extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant_esprit/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant_esprit/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/admin.html.twig", "etudiant_esprit/show.html.twig", 1);
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

        echo "EtudiantEsprit";
        
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
      min-height: 100%;\">Etudiant ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etudiant_esprit"]) || array_key_exists("etudiant_esprit", $context) ? $context["etudiant_esprit"] : (function () { throw new RuntimeError('Variable "etudiant_esprit" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etudiant_esprit"]) || array_key_exists("etudiant_esprit", $context) ? $context["etudiant_esprit"] : (function () { throw new RuntimeError('Variable "etudiant_esprit" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
             <tr>
                <th>Id Etudiant</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etudiant_esprit"]) || array_key_exists("etudiant_esprit", $context) ? $context["etudiant_esprit"] : (function () { throw new RuntimeError('Variable "etudiant_esprit" does not exist.', 24, $this->source); })()), "idEtudiant", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
       
        
            <tr>
                <th>Nom</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etudiant_esprit"]) || array_key_exists("etudiant_esprit", $context) ? $context["etudiant_esprit"] : (function () { throw new RuntimeError('Variable "etudiant_esprit" does not exist.', 30, $this->source); })()), "nom", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etudiant_esprit"]) || array_key_exists("etudiant_esprit", $context) ? $context["etudiant_esprit"] : (function () { throw new RuntimeError('Variable "etudiant_esprit" does not exist.', 34, $this->source); })()), "prenom", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cin</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etudiant_esprit"]) || array_key_exists("etudiant_esprit", $context) ? $context["etudiant_esprit"] : (function () { throw new RuntimeError('Variable "etudiant_esprit" does not exist.', 38, $this->source); })()), "cin", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date_naissance</th>
                <td>";
        // line 42
        ((twig_get_attribute($this->env, $this->source, (isset($context["etudiant_esprit"]) || array_key_exists("etudiant_esprit", $context) ? $context["etudiant_esprit"] : (function () { throw new RuntimeError('Variable "etudiant_esprit" does not exist.', 42, $this->source); })()), "dateNaissance", [], "any", false, false, false, 42)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etudiant_esprit"]) || array_key_exists("etudiant_esprit", $context) ? $context["etudiant_esprit"] : (function () { throw new RuntimeError('Variable "etudiant_esprit" does not exist.', 42, $this->source); })()), "dateNaissance", [], "any", false, false, false, 42), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Moyenne1</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etudiant_esprit"]) || array_key_exists("etudiant_esprit", $context) ? $context["etudiant_esprit"] : (function () { throw new RuntimeError('Variable "etudiant_esprit" does not exist.', 46, $this->source); })()), "moyenne1", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Moyenne2</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etudiant_esprit"]) || array_key_exists("etudiant_esprit", $context) ? $context["etudiant_esprit"] : (function () { throw new RuntimeError('Variable "etudiant_esprit" does not exist.', 50, $this->source); })()), "moyenne2", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Moyenne3</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etudiant_esprit"]) || array_key_exists("etudiant_esprit", $context) ? $context["etudiant_esprit"] : (function () { throw new RuntimeError('Variable "etudiant_esprit" does not exist.', 54, $this->source); })()), "moyenne3", [], "any", false, false, false, 54), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NiveauFR</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etudiant_esprit"]) || array_key_exists("etudiant_esprit", $context) ? $context["etudiant_esprit"] : (function () { throw new RuntimeError('Variable "etudiant_esprit" does not exist.', 58, $this->source); })()), "niveauFR", [], "any", false, false, false, 58), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NiveauAN</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etudiant_esprit"]) || array_key_exists("etudiant_esprit", $context) ? $context["etudiant_esprit"] : (function () { throw new RuntimeError('Variable "etudiant_esprit" does not exist.', 62, $this->source); })()), "niveauAN", [], "any", false, false, false, 62), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <div class=\"d-flex justify-content-center\">
<div class=\"btn-toolbar\" role=\"toolbar\">
\t<div class=\"btn-group\">
    <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etudiant_esprit_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["etudiant_esprit"]) || array_key_exists("etudiant_esprit", $context) ? $context["etudiant_esprit"] : (function () { throw new RuntimeError('Variable "etudiant_esprit" does not exist.', 70, $this->source); })()), "id", [], "any", false, false, false, 70)]), "html", null, true);
        echo "\" class=\"btn btn-outline-success mx-1\" style=\"margin-bottom: 10px\">Modifier</a>
<a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etudiant_esprit_index");
        echo "\" class=\"btn btn-outline-secondary mx-1\" style=\"margin-bottom: 10px\">Retour</a>

    ";
        // line 73
        echo twig_include($this->env, $context, "etudiant_esprit/_delete_form.html.twig");
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
        return "etudiant_esprit/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 73,  194 => 71,  190 => 70,  179 => 62,  172 => 58,  165 => 54,  158 => 50,  151 => 46,  144 => 42,  137 => 38,  130 => 34,  123 => 30,  114 => 24,  107 => 20,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/admin.html.twig' %}

{% block title %}EtudiantEsprit{% endblock %}

{% block body %}
   <div class=\"container my-2\" style=\"font-family:'Microsoft Tai Le'\">

<h1 class=\"mb-2\" style=\"
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100%;\">Etudiant {{ etudiant_esprit.id }}</h1>
    <div class=\"card mb-2\">
        <div class=\"card-body\">
<br> <br>
    <table class=\"table table-sm\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ etudiant_esprit.id }}</td>
            </tr>
             <tr>
                <th>Id Etudiant</th>
                <td>{{ etudiant_esprit.idEtudiant }}</td>
            </tr>
       
        
            <tr>
                <th>Nom</th>
                <td>{{ etudiant_esprit.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ etudiant_esprit.prenom }}</td>
            </tr>
            <tr>
                <th>Cin</th>
                <td>{{ etudiant_esprit.cin }}</td>
            </tr>
            <tr>
                <th>Date_naissance</th>
                <td>{{ etudiant_esprit.dateNaissance ? etudiant_esprit.dateNaissance|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Moyenne1</th>
                <td>{{ etudiant_esprit.moyenne1 }}</td>
            </tr>
            <tr>
                <th>Moyenne2</th>
                <td>{{ etudiant_esprit.moyenne2 }}</td>
            </tr>
            <tr>
                <th>Moyenne3</th>
                <td>{{ etudiant_esprit.moyenne3 }}</td>
            </tr>
            <tr>
                <th>NiveauFR</th>
                <td>{{ etudiant_esprit.niveauFR }}</td>
            </tr>
            <tr>
                <th>NiveauAN</th>
                <td>{{ etudiant_esprit.niveauAN }}</td>
            </tr>
        </tbody>
    </table>

    <div class=\"d-flex justify-content-center\">
<div class=\"btn-toolbar\" role=\"toolbar\">
\t<div class=\"btn-group\">
    <a href=\"{{ path('app_etudiant_esprit_edit', {'id': etudiant_esprit.id}) }}\" class=\"btn btn-outline-success mx-1\" style=\"margin-bottom: 10px\">Modifier</a>
<a href=\"{{ path('app_etudiant_esprit_index') }}\" class=\"btn btn-outline-secondary mx-1\" style=\"margin-bottom: 10px\">Retour</a>

    {{ include('etudiant_esprit/_delete_form.html.twig') }}

      </div>
     </div>

    </div>
    </div>
      </div>  
   
{% endblock %}
", "etudiant_esprit/show.html.twig", "C:\\Users\\user\\Desktop\\Esprit\\stage\\stagee-master\\templates\\etudiant_esprit\\show.html.twig");
    }
}
