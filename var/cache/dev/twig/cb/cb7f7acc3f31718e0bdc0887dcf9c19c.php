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

/* opportinute/candidature.html.twig */
class __TwigTemplate_5bf874230acb2ed6e105b601a759bd46 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'nav' => [$this, 'block_nav'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opportinute/candidature.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opportinute/candidature.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

\t\t";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "\t\t<meta content=\"\" name=\"description\">
\t\t<meta
\t\tcontent=\"\" name=\"keywords\">

\t\t<!-- Favicons -->
\t\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/tr.png"), "html", null, true);
        echo "\" rel=\"icon\">
\t\t<link
\t\thref=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/tr.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

\t\t<!-- Google Fonts -->
\t\t<link
\t\thref=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t<!-- Vendor CSS Files -->
\t\t";
        // line 25
        $this->displayBlock('css', $context, $blocks);
        // line 107
        echo "\t\t<!-- =======================================================
\t\t  * Template Name: Flexor
\t\t  * Updated: Jul 27 2023 with Bootstrap v5.3.1
\t\t  * Template URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
\t\t  * Author: BootstrapMade.com
\t\t  * License: https://bootstrapmade.com/license/
\t\t  ======================================================== -->
\t</head>

\t<body>
\t\t";
        // line 117
        $this->displayBlock('nav', $context, $blocks);
        // line 208
        echo "\t\t\t<br>
\t\t\t<br>

     

\t\t\t<div class=\"container d-flex justify-content-center align-items-center\" >
\t\t\t\t<div class=\"card\" style=\"font-family: 'Microsoft Tai Le'; width: 590px; height: auto; background-color: #f5f5f5;\">
\t\t\t\t\t<div class=\"card-body text-center\">

\t\t\t\t\t\t<h1>Formulaire de candidature</h1>
\t\t\t\t\t\t";
        // line 218
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 218, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
<div style=\"width: 80%; margin: 0 auto;\">
\t\t\t\t\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t\t\t\t\t<label class=\"fixed-width-label\">";
        // line 221
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 221, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 221), "nom", [], "any", false, false, false, 221), 'label');
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 223
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 223), "nom", [], "any", false, false, false, 223), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t\t\t\t\t";
        // line 225
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 225, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 225), "nom", [], "any", false, false, false, 225), 'errors');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t\t\t\t\t<label class=\"fixed-width-label\">";
        // line 231
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 231, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 231), "prenom", [], "any", false, false, false, 231), 'label');
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 233
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 233, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 233), "prenom", [], "any", false, false, false, 233), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t\t\t\t\t";
        // line 235
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 235), "prenom", [], "any", false, false, false, 235), 'errors');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t\t\t\t\t<label class=\"fixed-width-label\">";
        // line 241
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 241, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 241), "idEtudiant", [], "any", false, false, false, 241), 'label', ["label" => "Identifiant de l'étudiant"]);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 243
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 243), "idEtudiant", [], "any", false, false, false, 243), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t\t\t\t\t";
        // line 245
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 245, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 245), "idEtudiant", [], "any", false, false, false, 245), 'errors');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t\t\t\t\t<label class=\"fixed-width-label\">";
        // line 251
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 251, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 251), "email", [], "any", false, false, false, 251), 'label');
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 253
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 253, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 253), "email", [], "any", false, false, false, 253), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t\t\t\t\t";
        // line 255
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 255, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 255), "email", [], "any", false, false, false, 255), 'errors');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t\t\t\t\t<label class=\"fixed-width-label\">";
        // line 261
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 261, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 261), "cin", [], "any", false, false, false, 261), 'label', ["label" => "CIN"]);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 263
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 263, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 263), "cin", [], "any", false, false, false, 263), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t\t\t\t\t";
        // line 265
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 265, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 265), "cin", [], "any", false, false, false, 265), 'errors');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t\t\t\t\t<label class=\"fixed-width-label\">";
        // line 270
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 270, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 270), "date_naissance", [], "any", false, false, false, 270), 'label', ["label" => "Date de naissance"]);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 272
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 272, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 272), "date_naissance", [], "any", false, false, false, 272), 'widget', ["attr" => ["class" => "form-control", "type" => "date"]]);
        echo "
\t\t\t\t\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t\t\t\t\t";
        // line 274
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 274, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 274), "date_naissance", [], "any", false, false, false, 274), 'errors');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t\t\t\t\t<label class=\"fixed-width-label\">";
        // line 280
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 280, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 280), "moyenne1", [], "any", false, false, false, 280), 'label', ["label" => "Moyenne S1"]);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 282
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 282, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 282), "moyenne1", [], "any", false, false, false, 282), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t\t\t\t\t";
        // line 284
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 284, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 284), "moyenne1", [], "any", false, false, false, 284), 'errors');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t\t\t\t\t<label class=\"fixed-width-label\">";
        // line 290
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 290, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 290), "moyenne2", [], "any", false, false, false, 290), 'label', ["label" => "Moyenne S2"]);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 292
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 292, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 292), "moyenne2", [], "any", false, false, false, 292), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t\t\t\t\t";
        // line 294
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 294, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 294), "moyenne2", [], "any", false, false, false, 294), 'errors');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t\t\t\t\t<label class=\"fixed-width-label\">";
        // line 300
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 300, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 300), "moyenne3", [], "any", false, false, false, 300), 'label', ["label" => "Moyenne S3"]);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 302
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 302, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 302), "moyenne3", [], "any", false, false, false, 302), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t\t\t\t\t";
        // line 304
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 304, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 304), "moyenne3", [], "any", false, false, false, 304), 'errors');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t\t\t\t\t<label class=\"fixed-width-label\">";
        // line 311
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 311, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 311), "niveauFR", [], "any", false, false, false, 311), 'label', ["label" => "Niveau Français"]);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 313
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 313, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 313), "niveauFR", [], "any", false, false, false, 313), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t\t\t\t\t";
        // line 315
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 315, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 315), "niveauFR", [], "any", false, false, false, 315), 'errors');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t\t\t\t\t<label class=\"fixed-width-label\">";
        // line 321
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 321, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 321), "niveauAn", [], "any", false, false, false, 321), 'label', ["label" => "Niveau Anglais"]);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 323
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 323, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 323), "niveauAn", [], "any", false, false, false, 323), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t\t\t\t\t";
        // line 325
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 325, $this->source); })()), "EtudiantEsprit", [], "any", false, false, false, 325), "niveauAn", [], "any", false, false, false, 325), 'errors');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Soumettre</button>
\t\t\t\t\t\t";
        // line 332
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 332, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "\t\t\t<title>ESPRIT-Mobilité Internationale</title>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 25
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 26
        echo "\t\t\t<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link
\t\t\thref=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t\t<!-- Template Main CSS File -->
\t\t\t<link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<style>
\t\t\t\t/* Styles pour le conteneur du carrousel */
\t\t\t\t.carrousel-container {
\t\t\t\t\toverflow: hidden;
\t\t\t\t\twidth: 100%;
\t\t\t\t\tmax-width: 800px; /* Ajustez la largeur selon vos besoins */
\t\t\t\t\tmargin: 0 auto;
\t\t\t\t\tposition: relative;
\t\t\t\t}

\t\t\t\t/* Styles pour le carrousel */
\t\t\t\t.carrousel {
\t\t\t\t\tdisplay: flex;
\t\t\t\t\ttransition: transform 0.5s ease-in-out;
\t\t\t\t}

\t\t\t\t.carte {
\t\t\t\t\tflex: 0 0 100%;
\t\t\t\t\tpadding: 20px;
\t\t\t\t\ttext-align: center;
\t\t\t\t\tbox-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
\t\t\t\t\tborder-radius: 10px;
\t\t\t\t\tbackground-color: grey; /* Rouge transparent */
\t\t\t\t\tmargin-right: 20px;
\t\t\t\t\ttransition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
\t\t\t\t}

\t\t\t\t/* Styles pour les boutons de navigation */
\t\t\t\t.btn-prev,
\t\t\t\t.btn-next {
\t\t\t\t\tposition: absolute;
\t\t\t\t\ttop: 50%;
\t\t\t\t\ttransform: translateY(-50%);
\t\t\t\t\tpadding: 10px 15px;
\t\t\t\t\tbackground-color: rgba(0, 0, 0, 0.5);
\t\t\t\t\tcolor: #fff;
\t\t\t\t\tcursor: pointer;
\t\t\t\t\tborder: none;
\t\t\t\t\tborder-radius: 50%;
\t\t\t\t\tfont-size: 24px;
\t\t\t\t\tz-index: 1;
\t\t\t\t\ttransition: background-color 0.3s ease-in-out;
\t\t\t\t}

\t\t\t\t.btn-prev:hover,
\t\t\t\t.btn-next:hover {
\t\t\t\t\tbackground-color: rgba(0, 0, 0, 0.8);
\t\t\t\t}

\t\t\t\t.btn-prev {
\t\t\t\t\tleft: 10px;
\t\t\t\t}

\t\t\t\t.btn-next {
\t\t\t\t\tright: 10px;
\t\t\t\t}

\t\t\t\t/* Styles pour le contenu de la carte */
\t\t\t\t.carte h2 {
\t\t\t\t\tfont-size: 24px;
\t\t\t\t\tmargin-bottom: 10px;
\t\t\t\t\tcolor: #fff; /* Texte en blanc */
\t\t\t\t}

\t\t\t\t.carte p {
\t\t\t\t\tfont-size: 16px;
\t\t\t\t\tline-height: 1.5;
\t\t\t\t\tcolor: #fff; /* Texte en blanc */
\t\t\t\t}
\t\t\t</style>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 117
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 118
        echo "\t\t\t<!-- ======= Top Bar ======= -->
\t\t\t<section id=\"topbar\" class=\"d-flex align-items-center\">
\t\t\t\t<div class=\"container d-flex justify-content-center justify-content-md-between\">
\t\t\t\t\t<div class=\"contact-info d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"bi bi-envelope d-flex align-items-center\">
\t\t\t\t\t\t\t<a href=\"mailto:contact@esprit.tn\">contact@esprit.tn</a>
\t\t\t\t\t\t</i>
\t\t\t\t\t\t<i class=\"bi bi-phone d-flex align-items-center ms-4\">
\t\t\t\t\t\t\t<span>+216 70 250 000</span>
\t\t\t\t\t\t</i>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"cta d-none d-md-flex align-items-center\">
\t\t\t\t\t\t<a href=\"#\" class=\"scrollto\">Get Started</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>

\t\t\t<!-- ======= Header ======= -->
\t\t\t<header id=\"header\" class=\"d-flex align-items-center\">
\t\t\t\t<div class=\"container d-flex align-items-center justify-content-between\">

\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t<h1><img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-esprit-2.b8fedba0.png"), "html", null, true);
        echo " \" alt=\"logo\"></h1>
\t\t\t\t\t\t<!-- Uncomment below if you prefer to use an image logo -->
\t\t\t\t\t\t<!-- <a href=\"index.html\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->
\t\t\t\t\t</div>

\t\t\t\t\t<nav id=\"navbar\" class=\"navbar\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"nav-link scrollto active\" href=\"";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
        echo "\">Accueil</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"nav-link scrollto\" href=\"#\">Programme Mobilité</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"nav-link scrollto\" href=\"";
        // line 156
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_index");
        echo "\">Mes dépots</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li class=\"nav-item dropdown pe-3\">

\t\t\t\t\t\t\t\t<a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">

\t\t\t\t\t\t\t\t\t<span class=\"d-none d-md-block dropdown-toggle ps-2\">";
        // line 163
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 163, $this->source); })()), "user", [], "any", false, false, false, 163), "nom", [], "any", false, false, false, 163), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 164
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 164, $this->source); })()), "user", [], "any", false, false, false, 164), "prenom", [], "any", false, false, false, 164), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<!-- End Profile Iamge Icon -->

\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t\t<h6>Bienvenu
\t\t\t\t\t\t\t\t\t\t\t";
        // line 171
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 171, $this->source); })()), "user", [], "any", false, false, false, 171), "nom", [], "any", false, false, false, 171), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 172
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 172, $this->source); })()), "user", [], "any", false, false, false, 172), "prenom", [], "any", false, false, false, 172), "html", null, true);
        echo "</h6>
\t\t\t\t\t\t\t\t\t\t<span>Admin</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-person\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Profile</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"";
        // line 191
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-box-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">Déconnexion</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<!-- End Profile Dropdown Items -->
\t\t\t\t\t\t\t\t<i class=\"bi bi-list mobile-nav-toggle\"></i>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</nav>
\t\t\t\t\t\t<!-- .navbar -->

\t\t\t\t\t</div>
\t\t\t\t</header>
\t\t\t\t<!-- End Header -->
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "opportinute/candidature.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  588 => 191,  566 => 172,  562 => 171,  552 => 164,  548 => 163,  538 => 156,  528 => 149,  517 => 141,  492 => 118,  482 => 117,  400 => 35,  394 => 32,  389 => 30,  385 => 29,  381 => 28,  377 => 27,  372 => 26,  362 => 25,  351 => 9,  341 => 8,  326 => 332,  316 => 325,  311 => 323,  306 => 321,  297 => 315,  292 => 313,  287 => 311,  277 => 304,  272 => 302,  267 => 300,  258 => 294,  253 => 292,  248 => 290,  239 => 284,  234 => 282,  229 => 280,  220 => 274,  215 => 272,  210 => 270,  202 => 265,  197 => 263,  192 => 261,  183 => 255,  178 => 253,  173 => 251,  164 => 245,  159 => 243,  154 => 241,  145 => 235,  140 => 233,  135 => 231,  126 => 225,  121 => 223,  116 => 221,  110 => 218,  98 => 208,  96 => 117,  84 => 107,  82 => 25,  76 => 22,  69 => 18,  64 => 16,  57 => 11,  55 => 8,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

\t\t{% block title %}
\t\t\t<title>ESPRIT-Mobilité Internationale</title>
\t\t{% endblock %}
\t\t<meta content=\"\" name=\"description\">
\t\t<meta
\t\tcontent=\"\" name=\"keywords\">

\t\t<!-- Favicons -->
\t\t<link href=\"{{ asset('assets/img/tr.png') }}\" rel=\"icon\">
\t\t<link
\t\thref=\"{{ asset('assets/img/tr.png') }}\" rel=\"apple-touch-icon\">

\t\t<!-- Google Fonts -->
\t\t<link
\t\thref=\"{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}\" rel=\"stylesheet\">

\t\t<!-- Vendor CSS Files -->
\t\t{% block css %}
\t\t\t<link href=\"{{ asset('assets/vendor/aos/aos.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}\" rel=\"stylesheet\">
\t\t\t<link
\t\t\thref=\"{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}\" rel=\"stylesheet\">

\t\t\t<!-- Template Main CSS File -->
\t\t\t<link href=\"{{ asset('assets/css/style1.css') }}\" rel=\"stylesheet\">
\t\t\t<style>
\t\t\t\t/* Styles pour le conteneur du carrousel */
\t\t\t\t.carrousel-container {
\t\t\t\t\toverflow: hidden;
\t\t\t\t\twidth: 100%;
\t\t\t\t\tmax-width: 800px; /* Ajustez la largeur selon vos besoins */
\t\t\t\t\tmargin: 0 auto;
\t\t\t\t\tposition: relative;
\t\t\t\t}

\t\t\t\t/* Styles pour le carrousel */
\t\t\t\t.carrousel {
\t\t\t\t\tdisplay: flex;
\t\t\t\t\ttransition: transform 0.5s ease-in-out;
\t\t\t\t}

\t\t\t\t.carte {
\t\t\t\t\tflex: 0 0 100%;
\t\t\t\t\tpadding: 20px;
\t\t\t\t\ttext-align: center;
\t\t\t\t\tbox-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
\t\t\t\t\tborder-radius: 10px;
\t\t\t\t\tbackground-color: grey; /* Rouge transparent */
\t\t\t\t\tmargin-right: 20px;
\t\t\t\t\ttransition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
\t\t\t\t}

\t\t\t\t/* Styles pour les boutons de navigation */
\t\t\t\t.btn-prev,
\t\t\t\t.btn-next {
\t\t\t\t\tposition: absolute;
\t\t\t\t\ttop: 50%;
\t\t\t\t\ttransform: translateY(-50%);
\t\t\t\t\tpadding: 10px 15px;
\t\t\t\t\tbackground-color: rgba(0, 0, 0, 0.5);
\t\t\t\t\tcolor: #fff;
\t\t\t\t\tcursor: pointer;
\t\t\t\t\tborder: none;
\t\t\t\t\tborder-radius: 50%;
\t\t\t\t\tfont-size: 24px;
\t\t\t\t\tz-index: 1;
\t\t\t\t\ttransition: background-color 0.3s ease-in-out;
\t\t\t\t}

\t\t\t\t.btn-prev:hover,
\t\t\t\t.btn-next:hover {
\t\t\t\t\tbackground-color: rgba(0, 0, 0, 0.8);
\t\t\t\t}

\t\t\t\t.btn-prev {
\t\t\t\t\tleft: 10px;
\t\t\t\t}

\t\t\t\t.btn-next {
\t\t\t\t\tright: 10px;
\t\t\t\t}

\t\t\t\t/* Styles pour le contenu de la carte */
\t\t\t\t.carte h2 {
\t\t\t\t\tfont-size: 24px;
\t\t\t\t\tmargin-bottom: 10px;
\t\t\t\t\tcolor: #fff; /* Texte en blanc */
\t\t\t\t}

\t\t\t\t.carte p {
\t\t\t\t\tfont-size: 16px;
\t\t\t\t\tline-height: 1.5;
\t\t\t\t\tcolor: #fff; /* Texte en blanc */
\t\t\t\t}
\t\t\t</style>
\t\t{% endblock %}
\t\t<!-- =======================================================
\t\t  * Template Name: Flexor
\t\t  * Updated: Jul 27 2023 with Bootstrap v5.3.1
\t\t  * Template URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
\t\t  * Author: BootstrapMade.com
\t\t  * License: https://bootstrapmade.com/license/
\t\t  ======================================================== -->
\t</head>

\t<body>
\t\t{% block nav %}
\t\t\t<!-- ======= Top Bar ======= -->
\t\t\t<section id=\"topbar\" class=\"d-flex align-items-center\">
\t\t\t\t<div class=\"container d-flex justify-content-center justify-content-md-between\">
\t\t\t\t\t<div class=\"contact-info d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"bi bi-envelope d-flex align-items-center\">
\t\t\t\t\t\t\t<a href=\"mailto:contact@esprit.tn\">contact@esprit.tn</a>
\t\t\t\t\t\t</i>
\t\t\t\t\t\t<i class=\"bi bi-phone d-flex align-items-center ms-4\">
\t\t\t\t\t\t\t<span>+216 70 250 000</span>
\t\t\t\t\t\t</i>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"cta d-none d-md-flex align-items-center\">
\t\t\t\t\t\t<a href=\"#\" class=\"scrollto\">Get Started</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>

\t\t\t<!-- ======= Header ======= -->
\t\t\t<header id=\"header\" class=\"d-flex align-items-center\">
\t\t\t\t<div class=\"container d-flex align-items-center justify-content-between\">

\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t<h1><img src=\"{{ asset('assets/img/logo-esprit-2.b8fedba0.png') }} \" alt=\"logo\"></h1>
\t\t\t\t\t\t<!-- Uncomment below if you prefer to use an image logo -->
\t\t\t\t\t\t<!-- <a href=\"index.html\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->
\t\t\t\t\t</div>

\t\t\t\t\t<nav id=\"navbar\" class=\"navbar\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"nav-link scrollto active\" href=\"{{ path('app_account') }}\">Accueil</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"nav-link scrollto\" href=\"#\">Programme Mobilité</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"nav-link scrollto\" href=\"{{ path('app_dashboard_index') }}\">Mes dépots</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li class=\"nav-item dropdown pe-3\">

\t\t\t\t\t\t\t\t<a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">

\t\t\t\t\t\t\t\t\t<span class=\"d-none d-md-block dropdown-toggle ps-2\">{{ app.user.nom}}
\t\t\t\t\t\t\t\t\t\t{{ app.user.prenom}}</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<!-- End Profile Iamge Icon -->

\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t\t<h6>Bienvenu
\t\t\t\t\t\t\t\t\t\t\t{{ app.user.nom}}
\t\t\t\t\t\t\t\t\t\t\t{{ app.user.prenom}}</h6>
\t\t\t\t\t\t\t\t\t\t<span>Admin</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-person\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Profile</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('app_logout') }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-box-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\">Déconnexion</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<!-- End Profile Dropdown Items -->
\t\t\t\t\t\t\t\t<i class=\"bi bi-list mobile-nav-toggle\"></i>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</nav>
\t\t\t\t\t\t<!-- .navbar -->

\t\t\t\t\t</div>
\t\t\t\t</header>
\t\t\t\t<!-- End Header -->
\t\t\t{% endblock %}
\t\t\t<br>
\t\t\t<br>

     

\t\t\t<div class=\"container d-flex justify-content-center align-items-center\" >
\t\t\t\t<div class=\"card\" style=\"font-family: 'Microsoft Tai Le'; width: 590px; height: auto; background-color: #f5f5f5;\">
\t\t\t\t\t<div class=\"card-body text-center\">

\t\t\t\t\t\t<h1>Formulaire de candidature</h1>
\t\t\t\t\t\t{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
<div style=\"width: 80%; margin: 0 auto;\">
\t\t\t\t\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t\t\t\t\t<label class=\"fixed-width-label\">{{ form_label(form.EtudiantEsprit.nom ) }}</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t{{ form_widget(form.EtudiantEsprit.nom, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t\t\t\t\t{{ form_errors(form.EtudiantEsprit.nom) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t\t\t\t\t<label class=\"fixed-width-label\">{{ form_label(form.EtudiantEsprit.prenom) }}</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t{{ form_widget(form.EtudiantEsprit.prenom, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t\t\t\t\t{{ form_errors(form.EtudiantEsprit.prenom) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t\t\t\t\t<label class=\"fixed-width-label\">{{ form_label(form.EtudiantEsprit.idEtudiant , 'Identifiant de l\\'étudiant') }}</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t{{ form_widget(form.EtudiantEsprit.idEtudiant, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t\t\t\t\t{{ form_errors(form.EtudiantEsprit.idEtudiant) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t\t\t\t\t<label class=\"fixed-width-label\">{{ form_label(form.EtudiantEsprit.email) }}</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t{{ form_widget(form.EtudiantEsprit.email, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t\t\t\t\t{{ form_errors(form.EtudiantEsprit.email) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t\t\t\t\t<label class=\"fixed-width-label\">{{ form_label(form.EtudiantEsprit.cin , 'CIN') }}</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t{{ form_widget(form.EtudiantEsprit.cin, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t\t\t\t\t{{ form_errors(form.EtudiantEsprit.cin) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t\t\t\t\t<label class=\"fixed-width-label\">{{ form_label(form.EtudiantEsprit.date_naissance , 'Date de naissance') }}</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t{{ form_widget(form.EtudiantEsprit.date_naissance, {'attr': {'class': 'form-control', 'type': 'date'}}) }}
\t\t\t\t\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t\t\t\t\t{{ form_errors(form.EtudiantEsprit.date_naissance) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t\t\t\t\t<label class=\"fixed-width-label\">{{ form_label(form.EtudiantEsprit.moyenne1 , 'Moyenne S1') }}</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t{{ form_widget(form.EtudiantEsprit.moyenne1, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t\t\t\t\t{{ form_errors(form.EtudiantEsprit.moyenne1) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t\t\t\t\t<label class=\"fixed-width-label\">{{ form_label(form.EtudiantEsprit.moyenne2 , 'Moyenne S2') }}</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t{{ form_widget(form.EtudiantEsprit.moyenne2, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t\t\t\t\t{{ form_errors(form.EtudiantEsprit.moyenne2) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t\t\t\t\t<label class=\"fixed-width-label\">{{ form_label(form.EtudiantEsprit.moyenne3 , 'Moyenne S3') }}</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t{{ form_widget(form.EtudiantEsprit.moyenne3, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t\t\t\t\t{{ form_errors(form.EtudiantEsprit.moyenne3) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t\t\t\t\t<label class=\"fixed-width-label\">{{ form_label(form.EtudiantEsprit.niveauFR , 'Niveau Français') }}</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t{{ form_widget(form.EtudiantEsprit.niveauFR, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t\t\t\t\t{{ form_errors(form.EtudiantEsprit.niveauFR) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group row\" style=\"margin-top: 20px\">
\t\t\t\t\t\t\t<label class=\"fixed-width-label\">{{ form_label(form.EtudiantEsprit.niveauAn , 'Niveau Anglais') }}</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t{{ form_widget(form.EtudiantEsprit.niveauAn, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t\t\t<div style=\"color: red\">
\t\t\t\t\t\t\t\t\t{{ form_errors(form.EtudiantEsprit.niveauAn) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Soumettre</button>
\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
", "opportinute/candidature.html.twig", "C:\\Users\\user\\Desktop\\Esprit\\stage\\stagee-master\\templates\\opportinute\\candidature.html.twig");
    }
}
