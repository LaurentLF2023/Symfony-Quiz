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

/* mailer/doneQuiz.html.twig */
class __TwigTemplate_d58b963d49778045aaccc9942bd44860 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mailer/doneQuiz.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mailer/doneQuiz.html.twig"));

        // line 1
        echo "<h1> Bonjour ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 1, $this->source); })()), "toName", [], "any", false, false, false, 1), "html", null, true);
        echo " ! My_quiz est content de vous voir ! </h1>

<p>Vous avez jouer à ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["cond"]) || array_key_exists("cond", $context) ? $context["cond"] : (function () { throw new RuntimeError('Variable "cond" does not exist.', 3, $this->source); })()), "html", null, true);
        echo " quiz ! Bravo ! Voulez-vous jouer encore?</p> 
    <br>
<a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        echo "\">
    <span>Faire plus de quiz</span>
</a>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "mailer/doneQuiz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 5,  49 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1> Bonjour {{ email.toName }} ! My_quiz est content de vous voir ! </h1>

<p>Vous avez jouer à {{cond}} quiz ! Bravo ! Voulez-vous jouer encore?</p> 
    <br>
<a href=\"{{path('app_homepage')}}\">
    <span>Faire plus de quiz</span>
</a>", "mailer/doneQuiz.html.twig", "/home/laurentlf/epitech/projets/semestre2/quiz/W-PHP-502-NAN-2-1-Quiz-marius.le-houezec-lacaze/templates/mailer/doneQuiz.html.twig");
    }
}
