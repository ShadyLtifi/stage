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

/* etudiant_esprit/_form.html.twig */
class __TwigTemplate_44a3f11199d4df4510c9670dfd191720 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant_esprit/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant_esprit/_form.html.twig"));

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
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "prenom", [], "any", false, false, false, 33), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "prenom", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "prenom", [], "any", false, false, false, 37), 'errors');
        echo "
                </div>
            </div>
        </div>
        
   

         <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "cin", [], "any", false, false, false, 45), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "cin", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "cin", [], "any", false, false, false, 49), 'errors');
        echo "
                </div>
            </div>
        </div>


         <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "email", [], "any", false, false, false, 56), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "email", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "email", [], "any", false, false, false, 60), 'errors');
        echo "
                </div>
            </div>
        </div>


         <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "password", [], "any", false, false, false, 67), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "password", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control", "type" => "password"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "password", [], "any", false, false, false, 71), 'errors');
        echo "
                </div>
            </div>
        </div>

         <div class=\"form-group row\" style=\"margin-top: 20px\">
    <label class=\"fixed-width-label\">";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "date_naissance", [], "any", false, false, false, 77), 'label');
        echo "</label>
    <div class=\"col-sm-10\">
        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "date_naissance", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control", "type" => "date"]]);
        echo "
        <div style=\"color: red\">
            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "date_naissance", [], "any", false, false, false, 81), 'errors');
        echo "
        </div>
    </div>
</div>


         <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "moyenne1", [], "any", false, false, false, 88), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "moyenne1", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "moyenne1", [], "any", false, false, false, 92), 'errors');
        echo "
                </div>
            </div>
        </div>



         <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "moyenne2", [], "any", false, false, false, 100), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "moyenne2", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "moyenne2", [], "any", false, false, false, 104), 'errors');
        echo "
                </div>
            </div>
        </div>



         <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "moyenne3", [], "any", false, false, false, 112), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "moyenne3", [], "any", false, false, false, 114), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "moyenne3", [], "any", false, false, false, 116), 'errors');
        echo "
                </div>
            </div>
        </div>

         <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "niveauFR", [], "any", false, false, false, 122), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "niveauFR", [], "any", false, false, false, 124), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "niveauFR", [], "any", false, false, false, 126), 'errors');
        echo "
                </div>
            </div>
        </div>


         <div class=\"form-group row\" style=\"margin-top: 20px\">
            <label class=\"fixed-width-label\">";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "niveauAN", [], "any", false, false, false, 133), 'label');
        echo "</label>
            <div class=\"col-sm-10\">
                ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "niveauAN", [], "any", false, false, false, 135), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div style=\"color: red\">
                    ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "niveauAN", [], "any", false, false, false, 137), 'errors');
        echo "
                </div>
            </div>
        </div>

        <br>
        




   
  ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), 'widget');
        echo "
    <button class=\"btn btn-outline-success\" style=\"margin-bottom: 10px\">";
        // line 150
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 150, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
    <a href=\"";
        // line 151
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_etudiant_esprit_index");
        echo "\"class=\"btn btn-outline-secondary\" style=\"margin-bottom: 10px\">Retour</a>

      ";
        // line 153
        echo twig_include($this->env, $context, "etudiant_esprit/_delete_form.html.twig");
        echo "
";
        // line 154
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), 'form_end');
        echo "
 </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "etudiant_esprit/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 154,  317 => 153,  312 => 151,  308 => 150,  304 => 149,  289 => 137,  284 => 135,  279 => 133,  269 => 126,  264 => 124,  259 => 122,  250 => 116,  245 => 114,  240 => 112,  229 => 104,  224 => 102,  219 => 100,  208 => 92,  203 => 90,  198 => 88,  188 => 81,  183 => 79,  178 => 77,  169 => 71,  164 => 69,  159 => 67,  149 => 60,  144 => 58,  139 => 56,  129 => 49,  124 => 47,  119 => 45,  108 => 37,  103 => 35,  98 => 33,  89 => 27,  84 => 25,  79 => 23,  70 => 17,  65 => 15,  60 => 13,  54 => 10,  43 => 1,);
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
    <label class=\"fixed-width-label\">{{ form_label(form.date_naissance) }}</label>
    <div class=\"col-sm-10\">
        {{ form_widget(form.date_naissance, {'attr': {'class': 'form-control', 'type': 'date'}}) }}
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
    <a href=\"{{ path('app_etudiant_esprit_index') }}\"class=\"btn btn-outline-secondary\" style=\"margin-bottom: 10px\">Retour</a>

      {{ include('etudiant_esprit/_delete_form.html.twig') }}
{{ form_end(form) }}
 </div>
</div>", "etudiant_esprit/_form.html.twig", "C:\\Users\\user\\Desktop\\Esprit\\stage\\stagee-master\\templates\\etudiant_esprit\\_form.html.twig");
    }
}
