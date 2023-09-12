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

/* opportinute/_formadd.html.twig */
class __TwigTemplate_45a2865b37ba71f35b44e20f5fd4d542 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opportinute/_formadd.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opportinute/_formadd.html.twig"));

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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "NomFaculte", [], "any", false, false, false, 14), 'label');
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "NomFaculte", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "NomFaculte", [], "any", false, false, false, 18), 'errors');
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t<label class=\"fixed-width-label\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "DateDebut", [], "any", false, false, false, 25), 'label');
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "DateDebut", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control", "type" => "date"]]);
        echo "
\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "DateDebut", [], "any", false, false, false, 29), 'errors');
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t<label class=\"fixed-width-label\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "Datefin", [], "any", false, false, false, 35), 'label');
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "Datefin", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control", "type" => "date"]]);
        echo "
\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "Datefin", [], "any", false, false, false, 39), 'errors');
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t<label class=\"fixed-width-label\">";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "description", [], "any", false, false, false, 46), 'label');
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "description", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "description", [], "any", false, false, false, 50), 'errors');
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

  <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "Titre", [], "any", false, false, false, 56), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "Titre", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "Titre", [], "any", false, false, false, 60), 'errors');
        echo "
                </div>
            </div>
        </div>
\t\t<br>


\t\t<button class=\"btn btn-outline-success\" style=\"margin-bottom: 10px\">";
        // line 67
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 67, $this->source); })()), "Ajouter")) : ("Ajouter")), "html", null, true);
        echo "</button>

\t\t<a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_opportinute_index");
        echo "\" class=\"btn btn-outline-secondary\" style=\"margin-bottom: 10px\">Annuler</a>


\t\t";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_end');
        echo "


\t</div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "opportinute/_formadd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 72,  164 => 69,  159 => 67,  149 => 60,  144 => 58,  139 => 56,  130 => 50,  125 => 48,  120 => 46,  110 => 39,  105 => 37,  100 => 35,  91 => 29,  86 => 27,  81 => 25,  71 => 18,  66 => 16,  61 => 14,  55 => 11,  43 => 1,);
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
\t\t\t<label class=\"fixed-width-label\">{{ form_label(form.NomFaculte) }}</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t{{ form_widget(form.NomFaculte, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t{{ form_errors(form.NomFaculte) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t<label class=\"fixed-width-label\">{{ form_label(form.DateDebut) }}</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t{{ form_widget(form.DateDebut, {'attr': {'class': 'form-control', 'type': 'date'}}) }}
\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t{{ form_errors(form.DateDebut) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t<label class=\"fixed-width-label\">{{ form_label(form.Datefin) }}</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t{{ form_widget(form.Datefin, {'attr': {'class': 'form-control', 'type': 'date'}}) }}
\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t{{ form_errors(form.Datefin) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t<label class=\"fixed-width-label\">{{ form_label(form.description) }}</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t{{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t{{ form_errors(form.description) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

  <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">{{ form_label(form.Titre) }}</label>
            <div class=\"col-sm-10\">
                {{ form_widget(form.Titre, {'attr': {'class': 'form-control'}}) }}
                <div style=\"color: red\">
                    {{ form_errors(form.Titre) }}
                </div>
            </div>
        </div>
\t\t<br>


\t\t<button class=\"btn btn-outline-success\" style=\"margin-bottom: 10px\">{{ button_label|default('Ajouter') }}</button>

\t\t<a href=\"{{ path('app_opportinute_index') }}\" class=\"btn btn-outline-secondary\" style=\"margin-bottom: 10px\">Annuler</a>


\t\t{{ form_end(form) }}


\t</div>
</div>
", "opportinute/_formadd.html.twig", "C:\\Users\\user\\Desktop\\Esprit\\stage\\stagee-master\\templates\\opportinute\\_formadd.html.twig");
    }
}
