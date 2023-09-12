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

/* admin_esprit/_formadd.html.twig */
class __TwigTemplate_80da0836bff6be510f994f6fa4abbea2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_esprit/_formadd.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_esprit/_formadd.html.twig"));

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
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), 'errors');
        echo "
                </div>
            </div>
        </div>

         <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "prenom", [], "any", false, false, false, 24), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "prenom", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "prenom", [], "any", false, false, false, 28), 'errors');
        echo "
                </div>
            </div>
        </div>
        

         <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "idEsprit", [], "any", false, false, false, 35), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "idEsprit", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "idEsprit", [], "any", false, false, false, 39), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "cin", [], "any", false, false, false, 67), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "cin", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "cin", [], "any", false, false, false, 71), 'errors');
        echo "
                </div>
            </div>
        </div>
        <br>
        
       <div class=\"d-flex justify-content-center\">
         ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'widget');
        echo "
    <button class=\"btn btn-outline-success\" style=\"margin-bottom: 10px\">";
        // line 79
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 79, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
    
     <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_esprit_index");
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
        return "admin_esprit/_formadd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 83,  188 => 81,  183 => 79,  179 => 78,  169 => 71,  164 => 69,  159 => 67,  150 => 61,  145 => 59,  140 => 57,  130 => 50,  125 => 48,  120 => 46,  110 => 39,  105 => 37,  100 => 35,  90 => 28,  85 => 26,  80 => 24,  71 => 18,  66 => 16,  61 => 14,  56 => 12,  43 => 1,);
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
            <label class=\"fixed-width-label\">{{ form_label(form.idEsprit) }}</label>
            <div class=\"col-sm-10\">
                {{ form_widget(form.idEsprit, {'attr': {'class': 'form-control'}}) }}
                <div style=\"color: red\">
                    {{ form_errors(form.idEsprit) }}
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
            <label class=\"fixed-width-label\">{{ form_label(form.cin) }}</label>
            <div class=\"col-sm-10\">
                {{ form_widget(form.cin, {'attr': {'class': 'form-control'}}) }}
                <div style=\"color: red\">
                    {{ form_errors(form.cin) }}
                </div>
            </div>
        </div>
        <br>
        
       <div class=\"d-flex justify-content-center\">
         {{ form_widget(form) }}
    <button class=\"btn btn-outline-success\" style=\"margin-bottom: 10px\">{{ button_label|default('Save') }}</button>
    
     <a href=\"{{ path('app_admin_esprit_index') }}\"class=\"btn btn-outline-danger mx-1\" style=\"margin-bottom: 10px\">Annuler</a>
         
        {{ form_end(form) }}
 </div>
   </div>
</div>", "admin_esprit/_formadd.html.twig", "C:\\Users\\user\\Desktop\\Esprit\\stage\\stagee-master\\templates\\admin_esprit\\_formadd.html.twig");
    }
}
