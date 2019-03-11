<?php

/* home/home.html.twig */
class __TwigTemplate_87989d2486e7a8b360bff0e35829e04d0b71b1fea4dc5f2ed088e89f0c9b34ce extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 81
        echo "    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue à Even'Annecy";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\"/>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "            ";
        echo twig_include($this->env, $context, "includes/header.html.twig");
        echo "
            <article id=\"home\" class=\"container\">
                <div id=\"title-home\">
                    <h3>Bienvenue dans le site officiel de la grande agence événementielle d'Annecy</h3>
                    <button type=\"button\" id=\"button-home\">Démarrer la visite</button>
                </div>
            </article>

            <article id=\"subscription\" class=\"container\">
                <div id=\"title\">
                    <h3>Souscrire à un abonnement</h3>
                    <p>4 types de Pass'Audito que pour vous !</p>
                </div>
                <div id=\"pass-subscription\" class=\"div-choices\">
                    <ul>
                        <li><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/subcard.png"), "html", null, true);
        echo "\"></li>
                        <li><p><b>Individuelle</b></p></li>
                        <li><p>Abonnement pour les adultes</p></li>
                    </ul>
                    <ul>
                        <li><img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/subcard.png"), "html", null, true);
        echo "\"></li>
                        <li><b>Couple</b></li>
                        <li><p>Abonnement pour un couple</p></li>
                    </ul>
                    <ul>
                        <li><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/subcard.png"), "html", null, true);
        echo "\"></li>
                        <li><b>Jeune</b></li>
                        <ul>
                            <li><p>18 ans et étudiant</p></li>
                            <li><p>26 ans - Adhésion offerte à partir du 2e enfant</p></li>
                            <li><p>Demandeur d'emploi</p></li>
                        </ul>
                    </ul>
                    <ul>
                        <li><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/subcard.png"), "html", null, true);
        echo "\"></li>
                        <li><b>Adhésion parrainée</b></li>
                        <li><p>Réservée aux détenteurs des cartes Cézam et Loisirs et aux personnes dont l'entreprise est adhérente à L'Audito</p></li>
                    </ul>
                </div>
            </article>
            
            <article id=\"services\" class=\"container\">
                <div id=\"title\">
                    <h3>Services</h3>
                    <p>Nous vous proposons nos meilleurs services.</p>
                </div>
                <div id=\"list-services\" class=\"div-choices\">
                    <ul>
                        <li><img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/seat.png"), "html", null, true);
        echo "\"></li>
                        <li><p><b>Réserver une place</b></p></li>
                        <li><p>Jamais trop tard pour vivre l'ambiance de nos spectacles</p></li>
                    </ul>
                    <ul>
                        <li><img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/theater.png"), "html", null, true);
        echo "\"></li>
                        <li><p><b>Réserver une salle</b></p></li>
                        <li><p>Vous êtes les bienvenus pour organiser tout type d'événement*</p></li>
                    </ul>
                </div>
                <div id=\"info\">
                    <p>*Ce service n'est pas réservé pour les particuliers.</p>
                </div>
            </article>
            ";
        // line 77
        $this->displayBlock('javascripts', $context, $blocks);
        // line 80
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "                <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/scripts/script.js"), "html", null, true);
        echo "\"></script>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  218 => 78,  209 => 77,  199 => 80,  197 => 77,  185 => 68,  177 => 63,  160 => 49,  148 => 40,  140 => 35,  132 => 30,  113 => 15,  104 => 14,  91 => 10,  82 => 9,  64 => 8,  53 => 81,  51 => 14,  47 => 12,  45 => 9,  41 => 8,  33 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# templates/home.html.twig #}
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}Bienvenue à Even'Annecy{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{asset('assets/css/style.css')}}\"/>
        {% endblock %}
    </head>
    <body>
        {% block body %}
            {{ include('includes/header.html.twig') }}
            <article id=\"home\" class=\"container\">
                <div id=\"title-home\">
                    <h3>Bienvenue dans le site officiel de la grande agence événementielle d'Annecy</h3>
                    <button type=\"button\" id=\"button-home\">Démarrer la visite</button>
                </div>
            </article>

            <article id=\"subscription\" class=\"container\">
                <div id=\"title\">
                    <h3>Souscrire à un abonnement</h3>
                    <p>4 types de Pass'Audito que pour vous !</p>
                </div>
                <div id=\"pass-subscription\" class=\"div-choices\">
                    <ul>
                        <li><img src=\"{{asset('assets/img/subcard.png')}}\"></li>
                        <li><p><b>Individuelle</b></p></li>
                        <li><p>Abonnement pour les adultes</p></li>
                    </ul>
                    <ul>
                        <li><img src=\"{{asset('assets/img/subcard.png')}}\"></li>
                        <li><b>Couple</b></li>
                        <li><p>Abonnement pour un couple</p></li>
                    </ul>
                    <ul>
                        <li><img src=\"{{asset('assets/img/subcard.png')}}\"></li>
                        <li><b>Jeune</b></li>
                        <ul>
                            <li><p>18 ans et étudiant</p></li>
                            <li><p>26 ans - Adhésion offerte à partir du 2e enfant</p></li>
                            <li><p>Demandeur d'emploi</p></li>
                        </ul>
                    </ul>
                    <ul>
                        <li><img src=\"{{asset('assets/img/subcard.png')}}\"></li>
                        <li><b>Adhésion parrainée</b></li>
                        <li><p>Réservée aux détenteurs des cartes Cézam et Loisirs et aux personnes dont l'entreprise est adhérente à L'Audito</p></li>
                    </ul>
                </div>
            </article>
            
            <article id=\"services\" class=\"container\">
                <div id=\"title\">
                    <h3>Services</h3>
                    <p>Nous vous proposons nos meilleurs services.</p>
                </div>
                <div id=\"list-services\" class=\"div-choices\">
                    <ul>
                        <li><img src=\"{{asset('assets/img/seat.png')}}\"></li>
                        <li><p><b>Réserver une place</b></p></li>
                        <li><p>Jamais trop tard pour vivre l'ambiance de nos spectacles</p></li>
                    </ul>
                    <ul>
                        <li><img src=\"{{asset('assets/img/theater.png')}}\"></li>
                        <li><p><b>Réserver une salle</b></p></li>
                        <li><p>Vous êtes les bienvenus pour organiser tout type d'événement*</p></li>
                    </ul>
                </div>
                <div id=\"info\">
                    <p>*Ce service n'est pas réservé pour les particuliers.</p>
                </div>
            </article>
            {% block javascripts %}
                <script src=\"{{asset('assets/scripts/script.js')}}\"></script>
            {% endblock %}
        {% endblock %}
    </body>
</html>", "home/home.html.twig", "C:\\wamp64\\www\\evenannecy\\templates\\home\\home.html.twig");
    }
}
