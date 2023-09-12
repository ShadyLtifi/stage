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

/* opportinute/_form.html.twig */
class __TwigTemplate_0a203de4c18e8816359a8abf83f0a5bd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opportinute/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opportinute/_form.html.twig"));

        // line 1
        echo "<style>
    .fixed-width-label {
        display: inline-block;
        width: 150px; /* Ajoutez une largeur appropriée */
    }
</style>

<div class=\"card align-items-center\" style=\"font-family: 'Microsoft Tai Le'; width: 620px; height: auto;\">
    <div class=\"card-body\" >


 ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

        <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "NomFaculte", [], "any", false, false, false, 15), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "NomFaculte", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "NomFaculte", [], "any", false, false, false, 19), 'errors');
        echo "
                </div>
            </div>
        </div>
  

         <div class=\"form-group row\" style=\"margin-top: 20px\">
    <label class=\"fixed-width-label\">";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "DateDebut", [], "any", false, false, false, 26), 'label');
        echo "</label>
    <div class=\"col-sm-10\">
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "DateDebut", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control", "type" => "date"]]);
        echo "
        <div style=\"color: red\">
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "DateDebut", [], "any", false, false, false, 30), 'errors');
        echo "
        </div>
    </div>
</div>

    <div class=\"form-group row\" style=\"margin-top: 20px\">
    <label class=\"fixed-width-label\">";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "Datefin", [], "any", false, false, false, 36), 'label');
        echo "</label>
    <div class=\"col-sm-10\">
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "Datefin", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control", "type" => "date"]]);
        echo "
        <div style=\"color: red\">
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "Datefin", [], "any", false, false, false, 40), 'errors');
        echo "
        </div>
    </div>
</div>
      
  
      <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "description", [], "any", false, false, false, 47), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "description", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "description", [], "any", false, false, false, 51), 'errors');
        echo "
                </div>
            </div>
        </div>

    <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "Titre", [], "any", false, false, false, 57), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "Titre", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "Titre", [], "any", false, false, false, 61), 'errors');
        echo "
                </div>
            </div>
        </div>
  
  
<br>

 <button class=\"btn btn-outline-success\" style=\"margin-bottom: 10px\">";
        // line 69
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 69, $this->source); })()), "Ajouter")) : ("Ajouter")), "html", null, true);
        echo "</button>
       
     <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_opportinute_index");
        echo "\"class=\"btn btn-outline-secondary\" style=\"margin-bottom: 10px\">Retour</a>

      ";
        // line 73
        echo twig_include($this->env, $context, "opportinute/_delete_form.html.twig");
        echo "
        ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), 'form_end');
        echo "

  </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "opportinute/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 74,  171 => 73,  166 => 71,  161 => 69,  150 => 61,  145 => 59,  140 => 57,  131 => 51,  126 => 49,  121 => 47,  111 => 40,  106 => 38,  101 => 36,  92 => 30,  87 => 28,  82 => 26,  72 => 19,  67 => 17,  62 => 15,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    .fixed-width-label {
        display: inline-block;
        width: 150px; /* Ajoutez une largeur appropriée */
    }
</style>

<div class=\"card align-items-center\" style=\"font-family: 'Microsoft Tai Le'; width: 620px; height: auto;\">
    <div class=\"card-body\" >


 {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

        <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">{{ form_label(form.NomFaculte) }}</label>
            <div class=\"col-sm-10\">
                {{ form_widget(form.NomFaculte, {'attr': {'class': 'form-control'}}) }}
                <div style=\"color: red\">
                    {{ form_errors(form.NomFaculte) }}
                </div>
            </div>
        </div>
  

         <div class=\"form-group row\" style=\"margin-top: 20px\">
    <label class=\"fixed-width-label\">{{ form_label(form.DateDebut) }}</label>
    <div class=\"col-sm-10\">
        {{ form_widget(form.DateDebut, {'attr': {'class': 'form-control', 'type': 'date'}}) }}
        <div style=\"color: red\">
            {{ form_errors(form.DateDebut) }}
        </div>
    </div>
</div>

    <div class=\"form-group row\" style=\"margin-top: 20px\">
    <label class=\"fixed-width-label\">{{ form_label(form.Datefin) }}</label>
    <div class=\"col-sm-10\">
        {{ form_widget(form.Datefin, {'attr': {'class': 'form-control', 'type': 'date'}}) }}
        <div style=\"color: red\">
            {{ form_errors(form.Datefin) }}
        </div>
    </div>
</div>
      
  
      <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">{{ form_label(form.description) }}</label>
            <div class=\"col-sm-10\">
                {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
                <div style=\"color: red\">
                    {{ form_errors(form.description) }}
                </div>
            </div>
        </div>

    <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">{{ form_label(form.Titre) }}</label>
            <div class=\"col-sm-10\">
                {{ form_widget(form.Titre, {'attr': {'class': 'form-control'}}) }}
                <div style=\"color: red\">
                    {{ form_errors(form.Titre) }}
                </div>
            </div>
        </div>
  
  
<br>

 <button class=\"btn btn-outline-success\" style=\"margin-bottom: 10px\">{{ button_label|default('Ajouter') }}</button>
       
     <a href=\"{{ path('app_opportinute_index') }}\"class=\"btn btn-outline-secondary\" style=\"margin-bottom: 10px\">Retour</a>

      {{ include('opportinute/_delete_form.html.twig') }}
        {{ form_end(form) }}

  </div>
</div>", "opportinute/_form.html.twig", "C:\\Users\\user\\Desktop\\Esprit\\stage\\stagee-master\\templates\\opportinute\\_form.html.twig");
    }
}
