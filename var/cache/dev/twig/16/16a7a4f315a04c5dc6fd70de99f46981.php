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

/* candidature/_form.html.twig */
class __TwigTemplate_2359b9379796ff48f1f29071a0c28d28 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/_form.html.twig"));

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
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t<label class=\"fixed-width-label\">";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "Opportinute", [], "any", false, false, false, 15), 'label');
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "Opportinute", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "Opportinute", [], "any", false, false, false, 19), 'errors');
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t<label class=\"fixed-width-label\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 25), 'label');
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 29), 'errors');
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t<label class=\"fixed-width-label\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "resultat", [], "any", false, false, false, 35), 'label');
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "resultat", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "resultat", [], "any", false, false, false, 39), 'errors');
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<br>
\t\t<button class=\"btn btn-outline-success\" style=\"margin-bottom: 10px\">";
        // line 45
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 45, $this->source); })()), "Ajouter")) : ("Ajouter")), "html", null, true);
        echo "</button>

\t\t<a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_index");
        echo "\" class=\"btn btn-outline-secondary\" style=\"margin-bottom: 10px\">Retour</a>

\t\t";
        // line 49
        echo twig_include($this->env, $context, "candidature/_delete_form.html.twig");
        echo "
\t\t";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'form_end');
        echo "

\t</div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "candidature/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 50,  129 => 49,  124 => 47,  119 => 45,  110 => 39,  105 => 37,  100 => 35,  91 => 29,  86 => 27,  81 => 25,  72 => 19,  67 => 17,  62 => 15,  56 => 12,  43 => 1,);
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

\t\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t<label class=\"fixed-width-label\">{{ form_label(form.resultat) }}</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t{{ form_widget(form.resultat, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t{{ form_errors(form.resultat) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<br>
\t\t<button class=\"btn btn-outline-success\" style=\"margin-bottom: 10px\">{{ button_label|default('Ajouter') }}</button>

\t\t<a href=\"{{ path('app_candidature_index') }}\" class=\"btn btn-outline-secondary\" style=\"margin-bottom: 10px\">Retour</a>

\t\t{{ include('candidature/_delete_form.html.twig') }}
\t\t{{ form_end(form) }}

\t</div>
</div>
", "candidature/_form.html.twig", "C:\\Users\\user\\Desktop\\Esprit\\stage\\stagee-master\\templates\\candidature\\_form.html.twig");
    }
}
