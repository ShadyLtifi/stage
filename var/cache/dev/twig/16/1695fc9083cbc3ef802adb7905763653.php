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

/* candidature/index.html.twig */
class __TwigTemplate_18ab3df3b65872b1f6946f78751f015c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/admin.html.twig", "candidature/index.html.twig", 1);
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

        echo "Liste des Candidats
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
\t\t\t      min-height: 100%;\">Liste des Candidats</h1>

\t\t<div class=\"card mb-2\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<br>
\t\t\t\t<br>
\t  ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN_ESPRIT")) {
            // line 20
            echo "<form method=\"GET\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_candidatures");
            echo "\">
    <input type=\"text\" name=\"Titre\" placeholder=\"Titre de l'opportunité\">
    <button type=\"submit\">Rechercher</button>
</form>
  ";
        }
        // line 25
        echo "<br>
<br>

\t\t\t\t<table class=\"table table-sm\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<th>Id Etudiant</th>
\t\t\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t\t\t<th>Résultat</th>
\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["candidatures"]) || array_key_exists("candidatures", $context) ? $context["candidatures"] : (function () { throw new RuntimeError('Variable "candidatures" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["candidature"]) {
            // line 40
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "EtudiantEsprit", [], "any", false, false, false, 42), "idEtudiant", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "Opportinute", [], "any", false, false, false, 43), "Titre", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidature"], "resultat", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t<td>
    ";
            // line 47
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN_ESPRIT")) {
                // line 48
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_show", ["id" => twig_get_attribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\" class=\"btn btn-outline-success btn-sm mr-2\"><i class=\"bi bi-chat-left-text\"></i></a>
        <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\" class=\"btn btn-outline-secondary btn-sm\"><i class=\"bi bi-pencil-square\"></i></a>
        <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                echo "\" class=\"d-inline\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 51))), "html", null, true);
                echo "\">
                        <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\"><i class=\"bi bi-trash\"></i></button>
    ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN_FAC")) {
                // line 54
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_show", ["id" => twig_get_attribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 54)]), "html", null, true);
                echo "\"class=\"btn btn-outline-success btn-sm mr-2\"><i class=\"bi bi-chat-left-text\"></i></a>
    ";
            }
            // line 56
            echo "</td>

\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"2\">Liste vide</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t  ";
        // line 66
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN_ESPRIT")) {
            // line 67
            echo "\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t<a href=\"";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_new");
            echo "\" >  <i class=\"bi bi-person-fill-add\" style=\"font-size: 55px;\"></i></a>

\t\t\t\t</div>
\t\t\t\t  ";
        }
        // line 72
        echo "\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "candidature/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 72,  206 => 68,  203 => 67,  201 => 66,  197 => 64,  188 => 60,  180 => 56,  174 => 54,  168 => 51,  164 => 50,  160 => 49,  155 => 48,  153 => 47,  147 => 44,  143 => 43,  139 => 42,  135 => 40,  130 => 39,  114 => 25,  105 => 20,  103 => 19,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/admin.html.twig' %}

{% block title %}Liste des Candidats
{% endblock %}

{% block body %}
\t<div class=\"container my-2\" style=\"font-family:'Microsoft Tai Le'\">

\t\t<h1 class=\"mb-2\" style=\"
\t\t\t      display: flex;
\t\t\t      flex-direction: column;
\t\t\t      align-items: center;
\t\t\t      min-height: 100%;\">Liste des Candidats</h1>

\t\t<div class=\"card mb-2\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<br>
\t\t\t\t<br>
\t  {% if is_granted('ROLE_ADMIN_ESPRIT') %}
<form method=\"GET\" action=\"{{ path('search_candidatures') }}\">
    <input type=\"text\" name=\"Titre\" placeholder=\"Titre de l'opportunité\">
    <button type=\"submit\">Rechercher</button>
</form>
  {% endif %}
<br>
<br>

\t\t\t\t<table class=\"table table-sm\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<th>Id Etudiant</th>
\t\t\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t\t\t<th>Résultat</th>
\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for candidature in candidatures %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>{{ candidature.EtudiantEsprit.idEtudiant }}</td>
\t\t\t\t\t\t\t\t<td>{{ candidature.Opportinute.Titre }}</td>
\t\t\t\t\t\t\t\t<td>{{ candidature.resultat }}</td>

\t\t\t\t\t\t\t\t<td>
    {% if is_granted('ROLE_ADMIN_ESPRIT') %}
        <a href=\"{{ path('app_candidature_show', {'id': candidature.id}) }}\" class=\"btn btn-outline-success btn-sm mr-2\"><i class=\"bi bi-chat-left-text\"></i></a>
        <a href=\"{{ path('app_candidature_edit', {'id': candidature.id}) }}\" class=\"btn btn-outline-secondary btn-sm\"><i class=\"bi bi-pencil-square\"></i></a>
        <a href=\"{{ path('app_candidature_delete', {'id': candidature.id}) }}\" class=\"d-inline\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ candidature.id) }}\">
                        <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\"><i class=\"bi bi-trash\"></i></button>
    {% elseif is_granted('ROLE_ADMIN_FAC') %}
        <a href=\"{{ path('app_candidature_show', {'id': candidature.id}) }}\"class=\"btn btn-outline-success btn-sm mr-2\"><i class=\"bi bi-chat-left-text\"></i></a>
    {% endif %}
</td>

\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"2\">Liste vide</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t  {% if is_granted('ROLE_ADMIN_ESPRIT') %}
\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t<a href=\"{{ path('app_candidature_new') }}\" >  <i class=\"bi bi-person-fill-add\" style=\"font-size: 55px;\"></i></a>

\t\t\t\t</div>
\t\t\t\t  {% endif %}
\t\t\t{% endblock %}

", "candidature/index.html.twig", "C:\\Users\\user\\Desktop\\Esprit\\stage-master\\templates\\candidature\\index.html.twig");
    }
}
