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

/* opportinute/index.html.twig */
class __TwigTemplate_43aafb1e63c9736a90ec4613b66e2647 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opportinute/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opportinute/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/admin.html.twig", "opportinute/index.html.twig", 1);
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

        echo "Liste des Opportinutés";
        
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
        echo "     <div class=\"container my-2\" style=\"font-family:'Microsoft Tai Le'\">

<h1 class=\"mb-2\" style=\"
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100%;\">Liste des Opportinutés </h1>

   <div class=\"card mb-2\">
        <div class=\"card-body\">
<br> 

    <table class=\"table table-sm\">
        <thead>
            <tr>
                <th>NomFaculte</th>
                <th>DateDebut</th>
                <th>Datefin</th>
                <th>Titre</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["opportinutes"]) || array_key_exists("opportinutes", $context) ? $context["opportinutes"] : (function () { throw new RuntimeError('Variable "opportinutes" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["opportinute"]) {
            // line 30
            echo "            <tr>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportinute"], "NomFaculte", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            ((twig_get_attribute($this->env, $this->source, $context["opportinute"], "DateDebut", [], "any", false, false, false, 32)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportinute"], "DateDebut", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 33
            ((twig_get_attribute($this->env, $this->source, $context["opportinute"], "Datefin", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportinute"], "Datefin", [], "any", false, false, false, 33), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportinute"], "Titre", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_opportinute_show", ["id" => twig_get_attribute($this->env, $this->source, $context["opportinute"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\"class=\"btn btn-outline-success btn-sm mr-2\"><i class=\"bi bi-chat-left-text\"></i></a>
                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_opportinute_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["opportinute"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\"class=\"btn btn-outline-secondary btn-sm\"><i class=\"bi bi-pencil-square\"></i></a>
                     <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_opportinute_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["opportinute"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\"class=\"d-inline\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["opportinute"], "id", [], "any", false, false, false, 39))), "html", null, true);
            echo "\">
                        <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\"><i class=\"bi bi-trash\"></i></button>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "            <tr>
                <td colspan=\"6\">Liste vide</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opportinute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>

<div class=\"d-flex justify-content-center\">
    <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_opportinute_new");
        echo "\"  >  <i class=\"bi bi-person-fill-add\" style=\"font-size: 55px;\"></i></a>
     </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "opportinute/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 52,  169 => 48,  160 => 44,  150 => 39,  146 => 38,  142 => 37,  138 => 36,  133 => 34,  129 => 33,  125 => 32,  121 => 31,  118 => 30,  113 => 29,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/admin.html.twig' %}

{% block title %}Liste des Opportinutés{% endblock %}

{% block body %}
     <div class=\"container my-2\" style=\"font-family:'Microsoft Tai Le'\">

<h1 class=\"mb-2\" style=\"
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100%;\">Liste des Opportinutés </h1>

   <div class=\"card mb-2\">
        <div class=\"card-body\">
<br> 

    <table class=\"table table-sm\">
        <thead>
            <tr>
                <th>NomFaculte</th>
                <th>DateDebut</th>
                <th>Datefin</th>
                <th>Titre</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for opportinute in opportinutes %}
            <tr>
                <td>{{ opportinute.NomFaculte }}</td>
                <td>{{ opportinute.DateDebut ? opportinute.DateDebut|date('Y-m-d') : '' }}</td>
                <td>{{ opportinute.Datefin ? opportinute.Datefin|date('Y-m-d') : '' }}</td>
                <td>{{ opportinute.Titre }}</td>
                <td>
                    <a href=\"{{ path('app_opportinute_show', {'id': opportinute.id}) }}\"class=\"btn btn-outline-success btn-sm mr-2\"><i class=\"bi bi-chat-left-text\"></i></a>
                    <a href=\"{{ path('app_opportinute_edit', {'id': opportinute.id}) }}\"class=\"btn btn-outline-secondary btn-sm\"><i class=\"bi bi-pencil-square\"></i></a>
                     <a href=\"{{ path('app_opportinute_delete', {'id': opportinute.id}) }}\"class=\"d-inline\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ opportinute.id) }}\">
                        <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\"><i class=\"bi bi-trash\"></i></button>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">Liste vide</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

<div class=\"d-flex justify-content-center\">
    <a href=\"{{ path('app_opportinute_new') }}\"  >  <i class=\"bi bi-person-fill-add\" style=\"font-size: 55px;\"></i></a>
     </div>
{% endblock %}
", "opportinute/index.html.twig", "C:\\Users\\user\\Desktop\\Esprit\\stage-master\\templates\\opportinute\\index.html.twig");
    }
}
