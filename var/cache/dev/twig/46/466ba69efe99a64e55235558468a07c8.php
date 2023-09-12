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

/* admin_esprit/index.html.twig */
class __TwigTemplate_cf422d338d8b1ac1916f10b8492b0a70 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_esprit/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_esprit/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/admin.html.twig", "admin_esprit/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
      min-height: 100%;\">Admin Esprit </h1>
    <div class=\"card mb-2\">
        <div class=\"card-body\">
<br> 
    <table class=\"table table-sm\">
        <thead>
            <tr>
                
                <th>Email</th>
        
                <th>IdEsprit</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Cin</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["admin_esprits"]) || array_key_exists("admin_esprits", $context) ? $context["admin_esprits"] : (function () { throw new RuntimeError('Variable "admin_esprits" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["admin_esprit"]) {
            // line 31
            echo "            <tr>
              
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin_esprit"], "email", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
               
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin_esprit"], "idEsprit", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin_esprit"], "nom", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin_esprit"], "prenom", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin_esprit"], "cin", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_esprit_show", ["id" => twig_get_attribute($this->env, $this->source, $context["admin_esprit"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" class=\"btn btn-outline-success btn-sm mr-2\"><i class=\"bi bi-chat-left-text\"></i></a>
                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_esprit_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["admin_esprit"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" class=\"btn btn-outline-secondary btn-sm\"><i class=\"bi bi-pencil-square\"></i></a>
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_esprit_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["admin_esprit"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\" class=\"d-inline\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["admin_esprit"], "id", [], "any", false, false, false, 43))), "html", null, true);
            echo "\">
                        <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\"><i class=\"bi bi-trash\"></i></button>
                    
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            echo "            <tr>
                <td colspan=\"9\">Table vide</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin_esprit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </tbody>
    </table>
<div class=\"d-flex justify-content-center\">
    <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_esprit_new");
        echo "\">  <i class=\"bi bi-person-fill-add\" style=\"font-size: 55px;\"></i></a>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin_esprit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 55,  156 => 52,  147 => 48,  137 => 43,  133 => 42,  129 => 41,  125 => 40,  120 => 38,  116 => 37,  112 => 36,  108 => 35,  103 => 33,  99 => 31,  94 => 30,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/admin.html.twig' %}



{% block body %}
  <div class=\"container my-2\" style=\"font-family:'Microsoft Tai Le'\">

<h1 class=\"mb-2\" style=\"
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100%;\">Admin Esprit </h1>
    <div class=\"card mb-2\">
        <div class=\"card-body\">
<br> 
    <table class=\"table table-sm\">
        <thead>
            <tr>
                
                <th>Email</th>
        
                <th>IdEsprit</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Cin</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for admin_esprit in admin_esprits %}
            <tr>
              
                <td>{{ admin_esprit.email }}</td>
               
                <td>{{ admin_esprit.idEsprit }}</td>
                <td>{{ admin_esprit.nom }}</td>
                <td>{{ admin_esprit.prenom }}</td>
                <td>{{ admin_esprit.cin }}</td>
                <td>
                    <a href=\"{{ path('app_admin_esprit_show', {'id': admin_esprit.id}) }}\" class=\"btn btn-outline-success btn-sm mr-2\"><i class=\"bi bi-chat-left-text\"></i></a>
                    <a href=\"{{ path('app_admin_esprit_edit', {'id': admin_esprit.id}) }}\" class=\"btn btn-outline-secondary btn-sm\"><i class=\"bi bi-pencil-square\"></i></a>
                    <a href=\"{{ path('app_admin_esprit_delete', {'id': admin_esprit.id}) }}\" class=\"d-inline\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ admin_esprit.id) }}\">
                        <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\"><i class=\"bi bi-trash\"></i></button>
                    
            </tr>
        {% else %}
            <tr>
                <td colspan=\"9\">Table vide</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
<div class=\"d-flex justify-content-center\">
    <a href=\"{{ path('app_admin_esprit_new') }}\">  <i class=\"bi bi-person-fill-add\" style=\"font-size: 55px;\"></i></a>
</div>
{% endblock %}
", "admin_esprit/index.html.twig", "C:\\Users\\user\\Desktop\\Esprit\\stage-master\\templates\\admin_esprit\\index.html.twig");
    }
}
