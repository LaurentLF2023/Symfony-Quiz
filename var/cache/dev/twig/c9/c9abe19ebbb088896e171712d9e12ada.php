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

/* mailer/index.html.twig */
class __TwigTemplate_a686e95b7c5f68e0a4c697928a0e847a extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mailer/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mailer/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mailer/index.html.twig", 1);
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

        echo "Hello MailerController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div style= \"display: flex; flex-direction: column;\">
    <div class= \"toSend\">
        <p>Envoyer un rappel pour tous les utilisateurs qui se sont connecté il y a plus d'un mois</p>
        <a class=\"button1 buttonSend\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_overMonth");
        echo "\">
        \t<span>Envoyer</span>
        </a>
    </div>
    <div class= \"toSend\">
        <p>Envoyer un rappel pour tous les utilisateurs qui se sont connecté depuis moins d'un mois</p>
        <a class=\"button1 buttonSend\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lastMonth");
        echo "\">
        \t<span>Envoyer</span>
        </a>
    </div>
    <div class= \"toSend\">
        <p>Envoyer un rappel pour tous les utilisateurs ont fait des 3 questionnaires</p>
        <a class=\"button1 buttonSend\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sendLightPlayers");
        echo "\">
        \t<span>Envoyer</span>
        </a>
    </div>
    <div class= \"toSend\">
        <p>Envoyer un rappel pour tous les utilisateurs qui fait plus de 10 questionnaires</p>
        <a class=\"button1 buttonSend\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sendMidPlayers");
        echo "\">
        \t<span>Envoyer</span>
        </a>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "mailer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 27,  111 => 21,  102 => 15,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello MailerController!{% endblock %}

{% block body %}
<div style= \"display: flex; flex-direction: column;\">
    <div class= \"toSend\">
        <p>Envoyer un rappel pour tous les utilisateurs qui se sont connecté il y a plus d'un mois</p>
        <a class=\"button1 buttonSend\" href=\"{{path('app_overMonth')}}\">
        \t<span>Envoyer</span>
        </a>
    </div>
    <div class= \"toSend\">
        <p>Envoyer un rappel pour tous les utilisateurs qui se sont connecté depuis moins d'un mois</p>
        <a class=\"button1 buttonSend\" href=\"{{path('app_lastMonth')}}\">
        \t<span>Envoyer</span>
        </a>
    </div>
    <div class= \"toSend\">
        <p>Envoyer un rappel pour tous les utilisateurs ont fait des 3 questionnaires</p>
        <a class=\"button1 buttonSend\" href=\"{{path('app_sendLightPlayers')}}\">
        \t<span>Envoyer</span>
        </a>
    </div>
    <div class= \"toSend\">
        <p>Envoyer un rappel pour tous les utilisateurs qui fait plus de 10 questionnaires</p>
        <a class=\"button1 buttonSend\" href=\"{{path('app_sendMidPlayers')}}\">
        \t<span>Envoyer</span>
        </a>
    </div>
</div>
{% endblock %}", "mailer/index.html.twig", "/home/laurentlf/epitech/projets/semestre2/quiz/W-PHP-502-NAN-2-1-Quiz-marius.le-houezec-lacaze/templates/mailer/index.html.twig");
    }
}
