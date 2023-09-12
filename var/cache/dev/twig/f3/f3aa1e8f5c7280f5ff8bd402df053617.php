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

/* admin_fac/index.html.twig */
class __TwigTemplate_7f147e15e66177cf558ddc068fa51b67 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_fac/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_fac/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/admin.html.twig", "admin_fac/index.html.twig", 1);
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

        echo "AdminFac index";
        
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
      min-height: 100%;\">Admin Faculté </h1>
    <div class=\"card mb-2\">
        <div class=\"card-body\">
<br> 
    <table class=\"table table-sm\">
        <thead>
            <tr>
               
                <th>Email</th>
            
                <th>Nom</th>
                <th>Prenom</th>
                <th>NomFaculté</th>
                <th>Adresse</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["admin_facs"]) || array_key_exists("admin_facs", $context) ? $context["admin_facs"] : (function () { throw new RuntimeError('Variable "admin_facs" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["admin_fac"]) {
            // line 31
            echo "            <tr>
              
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin_fac"], "email", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
               
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin_fac"], "nom", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin_fac"], "prenom", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin_fac"], "nomFaculte", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin_fac"], "adresse", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_fac_show", ["id" => twig_get_attribute($this->env, $this->source, $context["admin_fac"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\"class=\"btn btn-outline-success btn-sm mr-2\"><i class=\"bi bi-chat-left-text\"></i></a>
                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_fac_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["admin_fac"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\"class=\"btn btn-outline-secondary btn-sm\"><i class=\"bi bi-pencil-square\"></i></a>
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_fac_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["admin_fac"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\"class=\"d-inline\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["admin_fac"], "id", [], "any", false, false, false, 43))), "html", null, true);
            echo "\">
                        <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\"><i class=\"bi bi-trash\"></i></button>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "            <tr>
                <td colspan=\"9\">Liste vide</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin_fac'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>
<br> <br> <br> <br> 
<div class=\"d-flex justify-content-center\">
    <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_fac_new");
        echo "\" >  <i class=\"bi bi-person-fill-add\" style=\"font-size: 55px;\"></i></a>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin_fac/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 55,  175 => 51,  166 => 47,  157 => 43,  153 => 42,  149 => 41,  145 => 40,  140 => 38,  136 => 37,  132 => 36,  128 => 35,  123 => 33,  119 => 31,  114 => 30,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/admin.html.twig' %}

{% block title %}AdminFac index{% endblock %}

{% block body %}
   <div class=\"container my-2\" style=\"font-family:'Microsoft Tai Le'\">

<h1 class=\"mb-2\" style=\"
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100%;\">Admin Faculté </h1>
    <div class=\"card mb-2\">
        <div class=\"card-body\">
<br> 
    <table class=\"table table-sm\">
        <thead>
            <tr>
               
                <th>Email</th>
            
                <th>Nom</th>
                <th>Prenom</th>
                <th>NomFaculté</th>
                <th>Adresse</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for admin_fac in admin_facs %}
            <tr>
              
                <td>{{ admin_fac.email }}</td>
               
                <td>{{ admin_fac.nom }}</td>
                <td>{{ admin_fac.prenom }}</td>
                <td>{{ admin_fac.nomFaculte }}</td>
                <td>{{ admin_fac.adresse }}</td>
                <td>
                    <a href=\"{{ path('app_admin_fac_show', {'id': admin_fac.id}) }}\"class=\"btn btn-outline-success btn-sm mr-2\"><i class=\"bi bi-chat-left-text\"></i></a>
                    <a href=\"{{ path('app_admin_fac_edit', {'id': admin_fac.id}) }}\"class=\"btn btn-outline-secondary btn-sm\"><i class=\"bi bi-pencil-square\"></i></a>
                    <a href=\"{{ path('app_admin_fac_delete', {'id': admin_fac.id}) }}\"class=\"d-inline\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ admin_fac.id) }}\">
                        <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\"><i class=\"bi bi-trash\"></i></button>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"9\">Liste vide</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
<br> <br> <br> <br> 
<div class=\"d-flex justify-content-center\">
    <a href=\"{{ path('app_admin_fac_new') }}\" >  <i class=\"bi bi-person-fill-add\" style=\"font-size: 55px;\"></i></a>
    </div>
{% endblock %}
", "admin_fac/index.html.twig", "C:\\Users\\user\\Desktop\\Esprit\\stage-master\\templates\\admin_fac\\index.html.twig");
    }
}
