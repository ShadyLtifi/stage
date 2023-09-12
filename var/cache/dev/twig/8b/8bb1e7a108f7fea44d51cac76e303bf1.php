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

/* admin_fac/_formadd.html.twig */
class __TwigTemplate_d23bb7f7782333fe1a6c20c45881be92 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_fac/_formadd.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_fac/_formadd.html.twig"));

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
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

        <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), 'errors');
        echo "
                </div>
            </div>
        </div>

        <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "prenom", [], "any", false, false, false, 23), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "prenom", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "prenom", [], "any", false, false, false, 27), 'errors');
        echo "
                </div>
            </div>
        </div>
        
   

         <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "nomFaculte", [], "any", false, false, false, 35), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "nomFaculte", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "nomFaculte", [], "any", false, false, false, 39), 'errors');
        echo "
                </div>
            </div>
        </div>


         <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "email", [], "any", false, false, false, 46), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "email", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "email", [], "any", false, false, false, 50), 'errors');
        echo "
                </div>
            </div>
        </div>


         <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "password", [], "any", false, false, false, 57), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "password", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control", "type" => "password"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "password", [], "any", false, false, false, 61), 'errors');
        echo "
                </div>
            </div>
        </div>

         <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "adresse", [], "any", false, false, false, 67), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "adresse", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "adresse", [], "any", false, false, false, 71), 'errors');
        echo "
                </div>
            </div>
        </div>
        <br>
        
    <div class=\"d-flex justify-content-center\">
        <button class=\"btn btn-outline-success mx-1\" style=\"margin-bottom: 10px\">";
        // line 78
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 78, $this->source); })()), "Ajouter")) : ("Ajouter")), "html", null, true);
        echo "</button>
       
     <a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_fac_index");
        echo "\"class=\"btn btn-outline-danger mx-1\" style=\"margin-bottom: 10px\">Annuler</a>

   
        ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), 'form_end');
        echo "
        </div>
 
   </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin_fac/_formadd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 83,  184 => 80,  179 => 78,  169 => 71,  164 => 69,  159 => 67,  150 => 61,  145 => 59,  140 => 57,  130 => 50,  125 => 48,  120 => 46,  110 => 39,  105 => 37,  100 => 35,  89 => 27,  84 => 25,  79 => 23,  70 => 17,  65 => 15,  60 => 13,  54 => 10,  43 => 1,);
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
            <label class=\"fixed-width-label\">{{ form_label(form.nom) }}</label>
            <div class=\"col-sm-10\">
                {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
                <div style=\"color: red\">
                    {{ form_errors(form.nom) }}
                </div>
            </div>
        </div>

        <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">{{ form_label(form.prenom) }}</label>
            <div class=\"col-sm-10\">
                {{ form_widget(form.prenom, {'attr': {'class': 'form-control'}}) }}
                <div style=\"color: red\">
                    {{ form_errors(form.prenom) }}
                </div>
            </div>
        </div>
        
   

         <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">{{ form_label(form.nomFaculte) }}</label>
            <div class=\"col-sm-10\">
                {{ form_widget(form.nomFaculte, {'attr': {'class': 'form-control'}}) }}
                <div style=\"color: red\">
                    {{ form_errors(form.nomFaculte) }}
                </div>
            </div>
        </div>


         <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">{{ form_label(form.email) }}</label>
            <div class=\"col-sm-10\">
                {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                <div style=\"color: red\">
                    {{ form_errors(form.email) }}
                </div>
            </div>
        </div>


         <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">{{ form_label(form.password) }}</label>
            <div class=\"col-sm-10\">
                {{ form_widget(form.password, {'attr': {'class': 'form-control' , 'type': 'password'}}) }}
                <div style=\"color: red\">
                    {{ form_errors(form.password) }}
                </div>
            </div>
        </div>

         <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">{{ form_label(form.adresse) }}</label>
            <div class=\"col-sm-10\">
                {{ form_widget(form.adresse, {'attr': {'class': 'form-control'}}) }}
                <div style=\"color: red\">
                    {{ form_errors(form.adresse) }}
                </div>
            </div>
        </div>
        <br>
        
    <div class=\"d-flex justify-content-center\">
        <button class=\"btn btn-outline-success mx-1\" style=\"margin-bottom: 10px\">{{ button_label|default('Ajouter') }}</button>
       
     <a href=\"{{ path('app_admin_fac_index') }}\"class=\"btn btn-outline-danger mx-1\" style=\"margin-bottom: 10px\">Annuler</a>

   
        {{ form_end(form) }}
        </div>
 
   </div>
</div>", "admin_fac/_formadd.html.twig", "C:\\Users\\user\\Desktop\\Esprit\\stage\\stagee-master\\templates\\admin_fac\\_formadd.html.twig");
    }
}
