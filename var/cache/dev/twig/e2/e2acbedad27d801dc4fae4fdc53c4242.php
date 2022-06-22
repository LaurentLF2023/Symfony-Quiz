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

/* security/base/nav.html.twig */
class __TwigTemplate_2483450895af92710becdce4985388af extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/base/nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/base/nav.html.twig"));

        // line 1
        echo "<!-- NAVBAR -->
<nav class=\"navbar\">
\t<div style=\"display: inline-flex;\">
\t\t<a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><img class=\"logo\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/myquizz.png"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t";
        // line 29
        echo "\t</div>

\t";
        // line 31
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31)) {
            // line 32
            echo "
\t\t<div class=\"sub-main\">
\t\t\t";
            // line 34
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 35
                echo "\t\t\t\t<a class=\"button1\" style=\"background: darkred;\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\">
\t\t\t\t\t<span>Panel</span>
\t\t\t\t</a>
\t\t\t";
            }
            // line 39
            echo "\t\t\t<a class=\"button1\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            echo "\">
\t\t\t\t<span>Profile</span>
\t\t\t</a>

\t\t\t<form action=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" method=\"POST\">
\t\t\t\t<button class=\"button2\">
\t\t\t\t\t<span>Logout</span>
\t\t\t\t</button>
\t\t\t</form>
\t\t</div>
\t";
        } else {
            // line 50
            echo "\t\t<div class=\"sub-main\">
\t\t\t<a class=\"button1\" href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">
\t\t\t\t<span>Inscription</span>
\t\t\t</a>

\t\t\t<a class=\"button2\" href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
\t\t\t\t<span>Connexion</span>
\t\t\t</a>
\t\t</div>
\t";
        }
        // line 60
        echo "</nav>

<div class=\"nav-logo\">
\t<img src=\"../../../../public/styles/myquizz.png\" alt=\"\"/>
</div></nav></div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "security/base/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 60,  102 => 55,  95 => 51,  92 => 50,  82 => 43,  74 => 39,  66 => 35,  64 => 34,  60 => 32,  58 => 31,  54 => 29,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- NAVBAR -->
<nav class=\"navbar\">
\t<div style=\"display: inline-flex;\">
\t\t<a href=\"{{ path('index')}}\"><img class=\"logo\" src=\"{{asset('styles/myquizz.png')}}\" alt=\"\"></a>
\t\t{# <ul class=\"navbar-links\">
\t\t\t\t\t\t\t<s></s>
\t\t\t\t\t\t\t<li class=\"navbar-dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\">Categorie</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Harry Potter</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Sigles français</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Définitions de mots</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Spécialités culinaires</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Jeux de société</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Programmation</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Sigles informatiques</a>
\t\t\t\t\t\t\t\t\t<div class=\"navbar-dropdown\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Séries TV</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Simpsons : partie 1</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Simpsons : partie 2</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Stargate</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">NCIS</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul> #}
\t</div>

\t{% if app.user %}

\t\t<div class=\"sub-main\">
\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t<a class=\"button1\" style=\"background: darkred;\" href=\"{{path('admin')}}\">
\t\t\t\t\t<span>Panel</span>
\t\t\t\t</a>
\t\t\t{% endif %}
\t\t\t<a class=\"button1\" href=\"{{path('app_profile')}}\">
\t\t\t\t<span>Profile</span>
\t\t\t</a>

\t\t\t<form action=\"{{path('app_logout')}}\" method=\"POST\">
\t\t\t\t<button class=\"button2\">
\t\t\t\t\t<span>Logout</span>
\t\t\t\t</button>
\t\t\t</form>
\t\t</div>
\t{% else %}
\t\t<div class=\"sub-main\">
\t\t\t<a class=\"button1\" href=\"{{path('app_register')}}\">
\t\t\t\t<span>Inscription</span>
\t\t\t</a>

\t\t\t<a class=\"button2\" href=\"{{path('app_login')}}\">
\t\t\t\t<span>Connexion</span>
\t\t\t</a>
\t\t</div>
\t{% endif %}
</nav>

<div class=\"nav-logo\">
\t<img src=\"../../../../public/styles/myquizz.png\" alt=\"\"/>
</div></nav></div>
", "security/base/nav.html.twig", "/home/laurentlf/epitech/projets/semestre2/quiz/W-PHP-502-NAN-2-1-Quiz-marius.le-houezec-lacaze/templates/security/base/nav.html.twig");
    }
}
