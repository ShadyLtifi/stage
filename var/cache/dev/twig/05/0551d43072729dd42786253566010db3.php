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

/* candidature/_formadd.html.twig */
class __TwigTemplate_8660a93228eed1893fc5cad70e0a5fb3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/_formadd.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/_formadd.html.twig"));

        // line 1
        echo "<style>
\t.fixed-width-label {
\t\tdisplay: inline-block;
\t\twidth: 150px; /* Ajoutez une largeur appropriée */
\t}
</style>

<div class=\"card align-items-center\" style=\"font-family: 'Microsoft Tai Le'; width: 620px; height: auto;\">
\t<div class=\"card-body\">

\t\t";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t<label class=\"fixed-width-label\">";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "Opportinute", [], "any", false, false, false, 14), 'label');
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "Opportinute", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "Opportinute", [], "any", false, false, false, 18), 'errors');
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t<label class=\"fixed-width-label\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 24), 'label');
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 28), 'errors');
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t<label class=\"fixed-width-label\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "resultat", [], "any", false, false, false, 34), 'label');
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "resultat", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "resultat", [], "any", false, false, false, 38), 'errors');
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<br>

\t\t<div class=\"d-flex justify-content-center\">
\t\t\t<button class=\"btn btn-outline-success mx-1\" style=\"margin-bottom: 10px\">";
        // line 46
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 46, $this->source); })()), "Ajouter")) : ("Ajouter")), "html", null, true);
        echo "</button>

\t\t\t<a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_index");
        echo "\" class=\"btn btn-outline-danger mx-1\" style=\"margin-bottom: 10px\">Annuler</a>


\t\t\t";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form_end');
        echo "
\t\t</div>

\t</div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "candidature/_formadd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 51,  125 => 48,  120 => 46,  109 => 38,  104 => 36,  99 => 34,  90 => 28,  85 => 26,  80 => 24,  71 => 18,  66 => 16,  61 => 14,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
\t.fixed-width-label {
\t\tdisplay: inline-block;
\t\twidth: 150px; /* Ajoutez une largeur appropriée */
\t}
</style>

<div class=\"card align-items-center\" style=\"font-family: 'Microsoft Tai Le'; width: 620px; height: auto;\">
\t<div class=\"card-body\">

\t\t{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t<label class=\"fixed-width-label\">{{ form_label(form.Opportinute) }}</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t{{ form_widget(form.Opportinute, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t{{ form_errors(form.Opportinute) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t<label class=\"fixed-width-label\">{{ form_label(form.EtudiantEsprit) }}</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t{{ form_widget(form.EtudiantEsprit, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t{{ form_errors(form.EtudiantEsprit) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t<label class=\"fixed-width-label\">{{ form_label(form.resultat) }}</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t{{ form_widget(form.resultat, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t{{ form_errors(form.resultat) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<br>

\t\t<div class=\"d-flex justify-content-center\">
\t\t\t<button class=\"btn btn-outline-success mx-1\" style=\"margin-bottom: 10px\">{{ button_label|default('Ajouter') }}</button>

\t\t\t<a href=\"{{ path('app_candidature_index') }}\" class=\"btn btn-outline-danger mx-1\" style=\"margin-bottom: 10px\">Annuler</a>


\t\t\t{{ form_end(form) }}
\t\t</div>

\t</div>
</div>
", "candidature/_formadd.html.twig", "C:\\Users\\user\\Desktop\\Esprit\\stage\\stagee-master\\templates\\candidature\\_formadd.html.twig");
    }
}
