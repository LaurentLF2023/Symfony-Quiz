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

/* quizz/edit.html.twig */
class __TwigTemplate_9bb437d67c6920496f4f98baa09aa175 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quizz/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quizz/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quizz/edit.html.twig", 1);
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

        echo "Hello QuizzController!
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t<div class=\"div\" style=\"flex: 2;\">
\t\t<h1>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>
\t\t";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["categorie_form"]) || array_key_exists("categorie_form", $context) ? $context["categorie_form"] : (function () { throw new RuntimeError('Variable "categorie_form" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
\t\t<strong>";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["categorie_form"]) || array_key_exists("categorie_form", $context) ? $context["categorie_form"] : (function () { throw new RuntimeError('Variable "categorie_form" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), 'label');
        echo "</strong>
\t\t<div style=\"display: flex; column-gap: 2rem;\">
\t\t\t<div style=\"flex: 2;\">";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["categorie_form"]) || array_key_exists("categorie_form", $context) ? $context["categorie_form"] : (function () { throw new RuntimeError('Variable "categorie_form" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), 'widget');
        echo "</div>
\t\t\t<div style=\"flex: 1;\">
\t\t\t\t<button type=\"submit\">Sauvegarder modification</button>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["categorie_form"]) || array_key_exists("categorie_form", $context) ? $context["categorie_form"] : (function () { throw new RuntimeError('Variable "categorie_form" does not exist.', 18, $this->source); })()), 'form_end');
        echo "


\t\t";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["question_form"]) || array_key_exists("question_form", $context) ? $context["question_form"] : (function () { throw new RuntimeError('Variable "question_form" does not exist.', 21, $this->source); })()), 'form_start');
        echo "
\t\t<strong>";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["question_form"]) || array_key_exists("question_form", $context) ? $context["question_form"] : (function () { throw new RuntimeError('Variable "question_form" does not exist.', 22, $this->source); })()), "question", [], "any", false, false, false, 22), 'label');
        echo "</strong>
\t\t<div style=\"display: flex; column-gap: 2rem;\">
\t\t\t<div style=\"flex: 2;\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["question_form"]) || array_key_exists("question_form", $context) ? $context["question_form"] : (function () { throw new RuntimeError('Variable "question_form" does not exist.', 24, $this->source); })()), "question", [], "any", false, false, false, 24), 'widget');
        echo "</div>
\t\t\t<div style=\"flex: 1;\">
\t\t\t\t<button type=\"submit\">Nouvelle Question</button>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["question_form"]) || array_key_exists("question_form", $context) ? $context["question_form"] : (function () { throw new RuntimeError('Variable "question_form" does not exist.', 29, $this->source); })()), 'form_end');
        echo "

\t\t";
        // line 31
        if ( !twig_test_empty((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 31, $this->source); })()))) {
            // line 32
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 32, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 33
                echo "\t\t\t\t<ul style=\"margin-bottom: 1em; font-size: 1.4em\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<strong>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 35), "html", null, true);
                echo "</strong>
\t\t\t\t\t\t<a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\">Edit</a>
\t\t\t\t\t</li>
\t\t\t\t\t<ul style=\"margin-left: 2em\">
\t\t\t\t\t\t";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "reponses", [], "any", false, false, false, 39));
                foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                    // line 40
                    echo "\t\t\t\t\t\t\t<li>";
                    echo ((twig_get_attribute($this->env, $this->source, $context["reponse"], "reponseexpected", [], "any", false, false, false, 40)) ? ("✅") : ("❌"));
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 40), "html", null, true);
                    echo "</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "\t\t\t\t\t</ul>
\t\t\t\t</ul>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t\t";
        } else {
            // line 46
            echo "\t\t\t<h1>No question here yet</h1>
\t\t";
        }
        // line 48
        echo "

\t\t<form method=\"post\" action=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quizz_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51))), "html", null, true);
        echo "\">
\t\t\t<button class=\"btn delete\">Delete Quizz</button>
\t\t</form>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "quizz/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 51,  196 => 50,  192 => 48,  188 => 46,  185 => 45,  177 => 42,  167 => 40,  163 => 39,  157 => 36,  153 => 35,  149 => 33,  144 => 32,  142 => 31,  137 => 29,  129 => 24,  124 => 22,  120 => 21,  114 => 18,  106 => 13,  101 => 11,  97 => 10,  93 => 9,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello QuizzController!
{% endblock %}

{% block body %}

\t<div class=\"div\" style=\"flex: 2;\">
\t\t<h1>{{ categorie.name }}</h1>
\t\t{{ form_start(categorie_form)}}
\t\t<strong>{{form_label(categorie_form.name)}}</strong>
\t\t<div style=\"display: flex; column-gap: 2rem;\">
\t\t\t<div style=\"flex: 2;\">{{ form_widget(categorie_form.name) }}</div>
\t\t\t<div style=\"flex: 1;\">
\t\t\t\t<button type=\"submit\">Sauvegarder modification</button>
\t\t\t</div>
\t\t</div>
\t\t{{ form_end(categorie_form) }}


\t\t{{ form_start(question_form) }}
\t\t<strong>{{form_label(question_form.question)}}</strong>
\t\t<div style=\"display: flex; column-gap: 2rem;\">
\t\t\t<div style=\"flex: 2;\">{{ form_widget(question_form.question) }}</div>
\t\t\t<div style=\"flex: 1;\">
\t\t\t\t<button type=\"submit\">Nouvelle Question</button>
\t\t\t</div>
\t\t</div>
\t\t{{ form_end(question_form) }}

\t\t{% if questions is not empty %}
\t\t\t{% for question in questions %}
\t\t\t\t<ul style=\"margin-bottom: 1em; font-size: 1.4em\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<strong>{{ question.question}}</strong>
\t\t\t\t\t\t<a href=\"{{path('app_question_edit', {'id': question.id})}}\">Edit</a>
\t\t\t\t\t</li>
\t\t\t\t\t<ul style=\"margin-left: 2em\">
\t\t\t\t\t\t{% for reponse in question.reponses %}
\t\t\t\t\t\t\t<li>{{(reponse.reponseexpected) ? '✅': '❌'}}{{reponse.reponse}}</li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t</ul>
\t\t\t{% endfor %}
\t\t{% else %}
\t\t\t<h1>No question here yet</h1>
\t\t{% endif %}


\t\t<form method=\"post\" action=\"{{ path('app_quizz_delete', {'id': categorie.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ categorie.id) }}\">
\t\t\t<button class=\"btn delete\">Delete Quizz</button>
\t\t</form>
\t</div>
{% endblock %}
", "quizz/edit.html.twig", "/home/laurentlf/epitech/projets/semestre2/quiz/W-PHP-502-NAN-2-1-Quiz-marius.le-houezec-lacaze/templates/quizz/edit.html.twig");
    }
}
