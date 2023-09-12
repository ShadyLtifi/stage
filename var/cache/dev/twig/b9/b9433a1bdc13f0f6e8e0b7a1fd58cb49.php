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

/* etudiant_esprit/_formadd.html.twig */
class __TwigTemplate_0abd10c96da55eaee3dd651b5bb4d6fd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant_esprit/_formadd.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant_esprit/_formadd.html.twig"));

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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "idEtudiant", [], "any", false, false, false, 13), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "idEtudiant", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "idEtudiant", [], "any", false, false, false, 17), 'errors');
        echo "
                </div>
            </div>
        </div>

        <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "nom", [], "any", false, false, false, 27), 'errors');
        echo "
                </div>
            </div>
        </div>

       

        <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "prenom", [], "any", false, false, false, 35), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "prenom", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "prenom", [], "any", false, false, false, 39), 'errors');
        echo "
                </div>
            </div>
        </div>
        
   

         <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "cin", [], "any", false, false, false, 47), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "cin", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "cin", [], "any", false, false, false, 51), 'errors');
        echo "
                </div>
            </div>
        </div>


         <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "email", [], "any", false, false, false, 58), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "email", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "email", [], "any", false, false, false, 62), 'errors');
        echo "
                </div>
            </div>
        </div>


         <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "password", [], "any", false, false, false, 69), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "password", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control", "type" => "password"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "password", [], "any", false, false, false, 73), 'errors');
        echo "
                </div>
            </div>
        </div>

         <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "date_naissance", [], "any", false, false, false, 79), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "date_naissance", [], "any", false, false, false, 81), 'widget');
        echo "
                <div style=\"color: red\">
                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "date_naissance", [], "any", false, false, false, 83), 'errors');
        echo "
                </div>
            </div>
        </div>




         <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "moyenne1", [], "any", false, false, false, 92), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "moyenne1", [], "any", false, false, false, 94), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "moyenne1", [], "any", false, false, false, 96), 'errors');
        echo "
                </div>
            </div>
        </div>



         <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "moyenne2", [], "any", false, false, false, 104), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "moyenne2", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "moyenne2", [], "any", false, false, false, 108), 'errors');
        echo "
                </div>
            </div>
        </div>



         <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "moyenne3", [], "any", false, false, false, 116), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "moyenne3", [], "any", false, false, false, 118), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "moyenne3", [], "any", false, false, false, 120), 'errors');
        echo "
                </div>
            </div>
        </div>

         <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "niveauFR", [], "any", false, false, false, 126), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "niveauFR", [], "any", false, false, false, 128), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "niveauFR", [], "any", false, false, false, 130), 'errors');
        echo "
                </div>
            </div>
        </div>


         <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "niveauAN", [], "any", false, false, false, 137), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "niveauAN", [], "any", false, false, false, 139), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "niveauAN", [], "any", false, false, false, 141), 'errors');
        echo "
                </div>
            </div>
        </div>

        <br>
        




   
  ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), 'widget');
        echo "
    <button class=\"btn btn-outline-success\" style=\"margin-bottom: 10px\">";
        // line 154
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 154, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
    <a href=\"";
        // line 155
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etudiant_esprit_index");
        echo "\"class=\"btn btn-outline-danger mx-1\" style=\"margin-bottom: 10px\">Annuler</a>

     
";
        // line 158
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), 'form_end');
        echo "
 </div>
</div>



";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "etudiant_esprit/_formadd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 158,  316 => 155,  312 => 154,  308 => 153,  293 => 141,  288 => 139,  283 => 137,  273 => 130,  268 => 128,  263 => 126,  254 => 120,  249 => 118,  244 => 116,  233 => 108,  228 => 106,  223 => 104,  212 => 96,  207 => 94,  202 => 92,  190 => 83,  185 => 81,  180 => 79,  171 => 73,  166 => 71,  161 => 69,  151 => 62,  146 => 60,  141 => 58,  131 => 51,  126 => 49,  121 => 47,  110 => 39,  105 => 37,  100 => 35,  89 => 27,  84 => 25,  79 => 23,  70 => 17,  65 => 15,  60 => 13,  54 => 10,  43 => 1,);
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
            <label class=\"fixed-width-label\">{{ form_label(form.idEtudiant) }}</label>
            <div class=\"col-sm-10\">
                {{ form_widget(form.idEtudiant, {'attr': {'class': 'form-control'}}) }}
                <div style=\"color: red\">
                    {{ form_errors(form.idEtudiant) }}
                </div>
            </div>
        </div>

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
            <label class=\"fixed-width-label\">{{ form_label(form.cin) }}</label>
            <div class=\"col-sm-10\">
                {{ form_widget(form.cin, {'attr': {'class': 'form-control'}}) }}
                <div style=\"color: red\">
                    {{ form_errors(form.cin) }}
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
            <label class=\"fixed-width-label\">{{form_label(form.date_naissance)}}</label>
            <div class=\"col-sm-10\">
                {{  form_widget(form.date_naissance)  }}
                <div style=\"color: red\">
                    {{ form_errors(form.date_naissance) }}
                </div>
            </div>
        </div>




         <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">{{ form_label(form.moyenne1) }}</label>
            <div class=\"col-sm-10\">
                {{ form_widget(form.moyenne1, {'attr': {'class': 'form-control'}}) }}
                <div style=\"color: red\">
                    {{ form_errors(form.moyenne1) }}
                </div>
            </div>
        </div>



         <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">{{ form_label(form.moyenne2) }}</label>
            <div class=\"col-sm-10\">
                {{ form_widget(form.moyenne2, {'attr': {'class': 'form-control'}}) }}
                <div style=\"color: red\">
                    {{ form_errors(form.moyenne2) }}
                </div>
            </div>
        </div>



         <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">{{ form_label(form.moyenne3) }}</label>
            <div class=\"col-sm-10\">
                {{ form_widget(form.moyenne3, {'attr': {'class': 'form-control'}}) }}
                <div style=\"color: red\">
                    {{ form_errors(form.moyenne3) }}
                </div>
            </div>
        </div>

         <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">{{ form_label(form.niveauFR) }}</label>
            <div class=\"col-sm-10\">
                {{ form_widget(form.niveauFR, {'attr': {'class': 'form-control'}}) }}
                <div style=\"color: red\">
                    {{ form_errors(form.niveauFR) }}
                </div>
            </div>
        </div>


         <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">{{ form_label(form.niveauAN) }}</label>
            <div class=\"col-sm-10\">
                {{ form_widget(form.niveauAN, {'attr': {'class': 'form-control'}}) }}
                <div style=\"color: red\">
                    {{ form_errors(form.niveauAN) }}
                </div>
            </div>
        </div>

        <br>
        




   
  {{ form_widget(form) }}
    <button class=\"btn btn-outline-success\" style=\"margin-bottom: 10px\">{{ button_label|default('Save') }}</button>
    <a href=\"{{ path('app_etudiant_esprit_index') }}\"class=\"btn btn-outline-danger mx-1\" style=\"margin-bottom: 10px\">Annuler</a>

     
{{ form_end(form) }}
 </div>
</div>



", "etudiant_esprit/_formadd.html.twig", "C:\\Users\\user\\Desktop\\Esprit\\stage\\stagee-master\\templates\\etudiant_esprit\\_formadd.html.twig");
    }
}
