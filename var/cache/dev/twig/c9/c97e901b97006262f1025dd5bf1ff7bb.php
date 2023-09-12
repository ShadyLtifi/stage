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

/* candidature/search.html.twig */
class __TwigTemplate_4a0d1afc64a135a9f8c154892e2d152c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/search.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/search.html.twig"));

        $this->parent = $this->loadTemplate("admin/admin.html.twig", "candidature/search.html.twig", 1);
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

        // line 4
        echo "    Résultats de la Recherche
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"container my-2\" style=\"font-family:'Microsoft Tai Le'\">
        <h1 class=\"mb-2\" style=\"
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100%;\">Résultats de la recherche des candidatures pour les facultés de titre : </h1>
             <h1 class=\"mb-2\" style=\"
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100%;\">";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["Titre"]) || array_key_exists("Titre", $context) ? $context["Titre"] : (function () { throw new RuntimeError('Variable "Titre" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "</h1>


        <div class=\"card mb-2\">
            <div class=\"card-body\">
                <table class=\"table table-sm\">
                    <thead>
                        <tr>
                            <th>Id Etudiant</th>
                            <th>Score</th>
                            <th>Résultats</th>

                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["candidatures"]) || array_key_exists("candidatures", $context) ? $context["candidatures"] : (function () { throw new RuntimeError('Variable "candidatures" does not exist.', 33, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["candidature"]) {
            // line 34
            echo "                        <tr>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "EtudiantEsprit", [], "any", false, false, false, 35), "idEtudiant", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                            <td>
                                <form class=\"score-form\">
                                    <input type=\"hidden\" name=\"moyenne1\" value=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "EtudiantEsprit", [], "any", false, false, false, 38), "moyenne1", [], "any", false, false, false, 38), "html", null, true);
            echo "\">
                                    <input type=\"hidden\" name=\"moyenne2\" value=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "EtudiantEsprit", [], "any", false, false, false, 39), "moyenne2", [], "any", false, false, false, 39), "html", null, true);
            echo "\">
                                    <input type=\"hidden\" name=\"moyenne3\" value=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "EtudiantEsprit", [], "any", false, false, false, 40), "moyenne3", [], "any", false, false, false, 40), "html", null, true);
            echo "\">
                                    <input type=\"hidden\" name=\"niveauFR\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "EtudiantEsprit", [], "any", false, false, false, 41), "niveauFR", [], "any", false, false, false, 41), "html", null, true);
            echo "\">
                                    <input type=\"hidden\" name=\"niveauAn\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["candidature"], "EtudiantEsprit", [], "any", false, false, false, 42), "niveauAn", [], "any", false, false, false, 42), "html", null, true);
            echo "\">
                                    <input type=\"text\" name=\"score\" value=\"\" readonly>
                                </form>
                            </td>
                  
           <td>
        <form class=\"update-form\" method=\"post\" action=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidature_modif", ["id" => twig_get_attribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\">
            <select name=\"resultat\">
                <option value=\"EnCoursDExecution\" ";
            // line 50
            if ((twig_get_attribute($this->env, $this->source, $context["candidature"], "resultat", [], "any", false, false, false, 50) == "EnCoursDExecution")) {
                echo "selected";
            }
            echo ">En cours d'exécution</option>
                <option value=\"Accepté(e)\" ";
            // line 51
            if ((twig_get_attribute($this->env, $this->source, $context["candidature"], "resultat", [], "any", false, false, false, 51) == "Accepté(e)")) {
                echo "selected";
            }
            echo ">Accepté(e)</option>
                <option value=\"Refusé(e)\" ";
            // line 52
            if ((twig_get_attribute($this->env, $this->source, $context["candidature"], "resultat", [], "any", false, false, false, 52) == "Refusé(e)")) {
                echo "selected";
            }
            echo ">Refusé(e)</option>
            </select>
            <button type=\"button\" class=\"btn btn-primary save-button\">Enregistrer</button>
        </form>
</td>
            
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            echo "                        <tr>
                            <td colspan=\"2\">Aucun résultat trouvé</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                    </tbody>
                </table>
                        <button type=\"button\" class=\"btn btn-outline-info sort-students-btn\">Trier par score décroissant</button>
            </div>
        </div>
    </div>

    <script src=\"https://code.jquery.com/jquery-3.6.0.js\"></script>
  <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

    <script>
        \$(document).ready(function() {
            // Variable pour suivre l'état du tri
            var isSorted = false;

            // Fonction pour calculer le score
            function calculateScore(formData) {
                var score = 0;

                formData.forEach(function(item) {
                    if (item.name === 'niveauFR' || item.name === 'niveauAn') {
                        switch (item.value) {
                            case 'a1':
                                score += 3;
                                break;
                            case 'a2':
                                score += 6;
                                break;
                            case 'b1':
                                score += 9;
                                break;
                            case 'b2':
                                score += 12;
                                break;
                            case 'c1':
                                score += 15;
                                break;
                            default:
                                // Gestion d'une valeur inconnue
                                break;
                        }
                    } else {
                        var numericValue = parseFloat(item.value);
                        if (!isNaN(numericValue)) {
                            score += numericValue;
                        }
                    }
                });

                return score;
            }

            // Fonction pour trier les étudiants par score décroissant
            function sortStudentsByScore() {
                // Si la liste est déjà triée, afficher une alerte et sortir
                if (isSorted) {
                    alert(\"La liste est déjà triée.\");
                    return;
                }

                var students = \$('.score-form').toArray();

                students.sort(function(a, b) {
                    var scoreA = calculateScore(\$(a).serializeArray());
                    var scoreB = calculateScore(\$(b).serializeArray());
                    return scoreB - scoreA; // Tri décroissant
                });

                // Réinsérez les étudiants triés dans le tableau
                var tbody = \$('tbody');
                students.forEach(function(studentForm) {
                    tbody.append(\$(studentForm).closest('tr'));
                });

                // Mettre à jour les champs \"Score\" et les notifications après le tri
                \$('.score-form').each(function() {
                    var formData = \$(this).serializeArray();
                    var score = calculateScore(formData);
                    \$(this).find('input[name=\"score\"]').val(score);

                  
                });

                // Mettre à jour l'état du tri
                isSorted = true;
            }

            // Écouteur d'événement pour le bouton de tri
            \$('.sort-students-btn').click(function() {
                sortStudentsByScore();
            });

            // Calcul initial des scores
            \$('.calculate-score-btn').click(function() {
                \$('.score-form').each(function() {
                    var formData = \$(this).serializeArray();
                    var score = calculateScore(formData);
                    \$(this).find('input[name=\"score\"]').val(score);
                });
            });
        });

// Écouteur d'événement pour le champ \"Résultats\" lorsqu'il change de valeur
\$(document).ready(function() {
   \$('.save-button').click(function() {
    var form = \$(this).closest('.update-form');
    var selectedResultat = form.find('select[name=\"resultat\"]').val();
    
    // Create an object to send in the AJAX request
    var requestData = {
        resultat: selectedResultat // Add the 'resultat' field to the data
    };
    
    // Enregistrez la mise à jour automatiquement via Ajax
    \$.ajax({
        type: 'POST',
        url: form.attr('action'),
        data: JSON.stringify(requestData), // Send the data as JSON
        contentType: 'application/json', // Set the content type to JSON
        success: function(response) {
            // Gérez la réponse après la mise à jour si nécessaire
        },
        error: function(error) {
            // Gérez les erreurs si nécessaire
        }
    });
});

});


    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "candidature/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 76,  222 => 75,  218 => 74,  214 => 73,  210 => 72,  200 => 64,  191 => 60,  176 => 52,  170 => 51,  164 => 50,  159 => 48,  150 => 42,  146 => 41,  142 => 40,  138 => 39,  134 => 38,  128 => 35,  125 => 34,  120 => 33,  102 => 18,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/admin.html.twig' %}

{% block title %}
    Résultats de la Recherche
{% endblock %}

{% block body %}
    <div class=\"container my-2\" style=\"font-family:'Microsoft Tai Le'\">
        <h1 class=\"mb-2\" style=\"
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100%;\">Résultats de la recherche des candidatures pour les facultés de titre : </h1>
             <h1 class=\"mb-2\" style=\"
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100%;\">{{ Titre }}</h1>


        <div class=\"card mb-2\">
            <div class=\"card-body\">
                <table class=\"table table-sm\">
                    <thead>
                        <tr>
                            <th>Id Etudiant</th>
                            <th>Score</th>
                            <th>Résultats</th>

                        </tr>
                    </thead>
                    <tbody>
                        {% for candidature in candidatures %}
                        <tr>
                            <td>{{ candidature.EtudiantEsprit.idEtudiant }}</td>
                            <td>
                                <form class=\"score-form\">
                                    <input type=\"hidden\" name=\"moyenne1\" value=\"{{ candidature.EtudiantEsprit.moyenne1 }}\">
                                    <input type=\"hidden\" name=\"moyenne2\" value=\"{{ candidature.EtudiantEsprit.moyenne2 }}\">
                                    <input type=\"hidden\" name=\"moyenne3\" value=\"{{ candidature.EtudiantEsprit.moyenne3 }}\">
                                    <input type=\"hidden\" name=\"niveauFR\" value=\"{{ candidature.EtudiantEsprit.niveauFR }}\">
                                    <input type=\"hidden\" name=\"niveauAn\" value=\"{{ candidature.EtudiantEsprit.niveauAn }}\">
                                    <input type=\"text\" name=\"score\" value=\"\" readonly>
                                </form>
                            </td>
                  
           <td>
        <form class=\"update-form\" method=\"post\" action=\"{{ path('app_candidature_modif', {'id': candidature.id}) }}\">
            <select name=\"resultat\">
                <option value=\"EnCoursDExecution\" {% if candidature.resultat == 'EnCoursDExecution' %}selected{% endif %}>En cours d'exécution</option>
                <option value=\"Accepté(e)\" {% if candidature.resultat == 'Accepté(e)' %}selected{% endif %}>Accepté(e)</option>
                <option value=\"Refusé(e)\" {% if candidature.resultat == 'Refusé(e)' %}selected{% endif %}>Refusé(e)</option>
            </select>
            <button type=\"button\" class=\"btn btn-primary save-button\">Enregistrer</button>
        </form>
</td>
            
                        </tr>
                        {% else %}
                        <tr>
                            <td colspan=\"2\">Aucun résultat trouvé</td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
                        <button type=\"button\" class=\"btn btn-outline-info sort-students-btn\">Trier par score décroissant</button>
            </div>
        </div>
    </div>

    <script src=\"https://code.jquery.com/jquery-3.6.0.js\"></script>
  <script src=\"{{ asset('asset/vendor/glightbox/js/glightbox.min.js') }}\"></script>
    <script src=\"{{ asset('asset/vendor/swiper/swiper-bundle.min.js') }}\"></script>
     <script src=\"{{ asset('assets/vendor/aos/aos.js') }}\"></script>
  <script src=\"{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}\"></script>
  <script src=\"{{ asset('assets/vendor/php-email-form/validate.js') }}\"></script>

    <script>
        \$(document).ready(function() {
            // Variable pour suivre l'état du tri
            var isSorted = false;

            // Fonction pour calculer le score
            function calculateScore(formData) {
                var score = 0;

                formData.forEach(function(item) {
                    if (item.name === 'niveauFR' || item.name === 'niveauAn') {
                        switch (item.value) {
                            case 'a1':
                                score += 3;
                                break;
                            case 'a2':
                                score += 6;
                                break;
                            case 'b1':
                                score += 9;
                                break;
                            case 'b2':
                                score += 12;
                                break;
                            case 'c1':
                                score += 15;
                                break;
                            default:
                                // Gestion d'une valeur inconnue
                                break;
                        }
                    } else {
                        var numericValue = parseFloat(item.value);
                        if (!isNaN(numericValue)) {
                            score += numericValue;
                        }
                    }
                });

                return score;
            }

            // Fonction pour trier les étudiants par score décroissant
            function sortStudentsByScore() {
                // Si la liste est déjà triée, afficher une alerte et sortir
                if (isSorted) {
                    alert(\"La liste est déjà triée.\");
                    return;
                }

                var students = \$('.score-form').toArray();

                students.sort(function(a, b) {
                    var scoreA = calculateScore(\$(a).serializeArray());
                    var scoreB = calculateScore(\$(b).serializeArray());
                    return scoreB - scoreA; // Tri décroissant
                });

                // Réinsérez les étudiants triés dans le tableau
                var tbody = \$('tbody');
                students.forEach(function(studentForm) {
                    tbody.append(\$(studentForm).closest('tr'));
                });

                // Mettre à jour les champs \"Score\" et les notifications après le tri
                \$('.score-form').each(function() {
                    var formData = \$(this).serializeArray();
                    var score = calculateScore(formData);
                    \$(this).find('input[name=\"score\"]').val(score);

                  
                });

                // Mettre à jour l'état du tri
                isSorted = true;
            }

            // Écouteur d'événement pour le bouton de tri
            \$('.sort-students-btn').click(function() {
                sortStudentsByScore();
            });

            // Calcul initial des scores
            \$('.calculate-score-btn').click(function() {
                \$('.score-form').each(function() {
                    var formData = \$(this).serializeArray();
                    var score = calculateScore(formData);
                    \$(this).find('input[name=\"score\"]').val(score);
                });
            });
        });

// Écouteur d'événement pour le champ \"Résultats\" lorsqu'il change de valeur
\$(document).ready(function() {
   \$('.save-button').click(function() {
    var form = \$(this).closest('.update-form');
    var selectedResultat = form.find('select[name=\"resultat\"]').val();
    
    // Create an object to send in the AJAX request
    var requestData = {
        resultat: selectedResultat // Add the 'resultat' field to the data
    };
    
    // Enregistrez la mise à jour automatiquement via Ajax
    \$.ajax({
        type: 'POST',
        url: form.attr('action'),
        data: JSON.stringify(requestData), // Send the data as JSON
        contentType: 'application/json', // Set the content type to JSON
        success: function(response) {
            // Gérez la réponse après la mise à jour si nécessaire
        },
        error: function(error) {
            // Gérez les erreurs si nécessaire
        }
    });
});

});


    </script>
{% endblock %}
", "candidature/search.html.twig", "C:\\Users\\user\\Desktop\\Esprit\\stage\\stagee-master\\templates\\candidature\\search.html.twig");
    }
}
