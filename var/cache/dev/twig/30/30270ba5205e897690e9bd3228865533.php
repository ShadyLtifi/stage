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

/* etudiant_esprit/index.html.twig */
class __TwigTemplate_08c4a3aad69be5223e671b13376f114f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant_esprit/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant_esprit/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/admin.html.twig", "etudiant_esprit/index.html.twig", 1);
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

        echo "EtudiantEsprit index";
        
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
        echo " <div class=\"container my-2\" style=\"font-family:'Microsoft Tai Le'\">

<h1 class=\"mb-2\" style=\"
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100%;\">Liste Etudiants Esprit </h1>
    <div class=\"card mb-2\">
        <div class=\"card-body\">
<br> 
    <table class=\"table table-sm\">
        <thead>
            <tr>
            
                <th>Id Esprit</th>
                <th>Email</th>
                

                <th>Nom</th>
                <th>Prenom</th>
                <th>Cin</th>
                <th>Date_naissance</th>
                <th>Moyenne S1</th>
                <th>Moyenne S2</th>
                <th>Moyenne S3</th>
                <th>Niveau Français</th>
                <th>Niveau Anglais</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["etudiant_esprits"]) || array_key_exists("etudiant_esprits", $context) ? $context["etudiant_esprits"] : (function () { throw new RuntimeError('Variable "etudiant_esprits" does not exist.', 37, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["etudiant_esprit"]) {
            // line 38
            echo "            <tr>
               
           <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant_esprit"], "idEtudiant", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant_esprit"], "email", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
          
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant_esprit"], "nom", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant_esprit"], "prenom", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant_esprit"], "cin", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            ((twig_get_attribute($this->env, $this->source, $context["etudiant_esprit"], "dateNaissance", [], "any", false, false, false, 46)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant_esprit"], "dateNaissance", [], "any", false, false, false, 46), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant_esprit"], "moyenne1", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant_esprit"], "moyenne2", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant_esprit"], "moyenne3", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant_esprit"], "niveauFR", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["etudiant_esprit"], "niveauAN", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
           
                <td>
                    <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etudiant_esprit_show", ["id" => twig_get_attribute($this->env, $this->source, $context["etudiant_esprit"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\" class=\"btn btn-outline-success btn-sm mr-2\"><i class=\"bi bi-chat-left-text\"></i></a>
                    <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etudiant_esprit_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["etudiant_esprit"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\"class=\"btn btn-outline-secondary btn-sm\"><i class=\"bi bi-pencil-square\"></i></a>
                      <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etudiant_esprit_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["etudiant_esprit"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\"class=\"d-inline\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["etudiant_esprit"], "id", [], "any", false, false, false, 57))), "html", null, true);
            echo "\">
                        <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\"><i class=\"bi bi-trash\"></i></button>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 62
            echo "            <tr>
                <td colspan=\"14\">Liste vide</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etudiant_esprit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "        </tbody>
    </table>
    <br> <br> <br> <br> 
<div class=\"d-flex justify-content-center\">
    <a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etudiant_esprit_new");
        echo "\" >  <i class=\"bi bi-person-fill-add\" style=\"font-size: 55px;\"></i></a>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "etudiant_esprit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 70,  208 => 66,  199 => 62,  189 => 57,  185 => 56,  181 => 55,  177 => 54,  171 => 51,  167 => 50,  163 => 49,  159 => 48,  155 => 47,  151 => 46,  147 => 45,  143 => 44,  139 => 43,  134 => 41,  130 => 40,  126 => 38,  121 => 37,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/admin.html.twig' %}

{% block title %}EtudiantEsprit index{% endblock %}

{% block body %}
 <div class=\"container my-2\" style=\"font-family:'Microsoft Tai Le'\">

<h1 class=\"mb-2\" style=\"
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100%;\">Liste Etudiants Esprit </h1>
    <div class=\"card mb-2\">
        <div class=\"card-body\">
<br> 
    <table class=\"table table-sm\">
        <thead>
            <tr>
            
                <th>Id Esprit</th>
                <th>Email</th>
                

                <th>Nom</th>
                <th>Prenom</th>
                <th>Cin</th>
                <th>Date_naissance</th>
                <th>Moyenne S1</th>
                <th>Moyenne S2</th>
                <th>Moyenne S3</th>
                <th>Niveau Français</th>
                <th>Niveau Anglais</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for etudiant_esprit in etudiant_esprits %}
            <tr>
               
           <td>{{ etudiant_esprit.idEtudiant }}</td>
                <td>{{ etudiant_esprit.email }}</td>
          
                <td>{{ etudiant_esprit.nom }}</td>
                <td>{{ etudiant_esprit.prenom }}</td>
                <td>{{ etudiant_esprit.cin }}</td>
                <td>{{ etudiant_esprit.dateNaissance ? etudiant_esprit.dateNaissance|date('Y-m-d') : '' }}</td>
                <td>{{ etudiant_esprit.moyenne1 }}</td>
                <td>{{ etudiant_esprit.moyenne2 }}</td>
                <td>{{ etudiant_esprit.moyenne3 }}</td>
                <td>{{ etudiant_esprit.niveauFR }}</td>
                <td>{{ etudiant_esprit.niveauAN }}</td>
           
                <td>
                    <a href=\"{{ path('app_etudiant_esprit_show', {'id': etudiant_esprit.id}) }}\" class=\"btn btn-outline-success btn-sm mr-2\"><i class=\"bi bi-chat-left-text\"></i></a>
                    <a href=\"{{ path('app_etudiant_esprit_edit', {'id': etudiant_esprit.id}) }}\"class=\"btn btn-outline-secondary btn-sm\"><i class=\"bi bi-pencil-square\"></i></a>
                      <a href=\"{{ path('app_etudiant_esprit_delete', {'id': etudiant_esprit.id}) }}\"class=\"d-inline\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ etudiant_esprit.id) }}\">
                        <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\"><i class=\"bi bi-trash\"></i></button>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"14\">Liste vide</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <br> <br> <br> <br> 
<div class=\"d-flex justify-content-center\">
    <a href=\"{{ path('app_etudiant_esprit_new') }}\" >  <i class=\"bi bi-person-fill-add\" style=\"font-size: 55px;\"></i></a>
    </div>
{% endblock %}
", "etudiant_esprit/index.html.twig", "C:\\Users\\user\\Desktop\\Esprit\\stage-master\\templates\\etudiant_esprit\\index.html.twig");
    }
}
