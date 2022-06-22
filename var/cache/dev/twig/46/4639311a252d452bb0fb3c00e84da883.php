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
class __TwigTemplate_0c1a0728358f3f3fd2950b6ecec7d632 extends Template
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
        echo "\t<style>
\t\t.example-wrapper {
\t\t\tmargin: 1em auto;
\t\t\tmax-width: 800px;
\t\t\twidth: 95%;
\t\t\tfont: 18px / 1.5 sans-serif;
\t\t}
\t\t.example-wrapper code {
\t\t\tbackground: #F5F5F5;
\t\t\tpadding: 2px 6px;
\t\t}
\t</style>

\t<div class=\"example-wrapper\">
\t\t<h1>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "</h1>
\t\t";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["categorie_form"]) || array_key_exists("categorie_form", $context) ? $context["categorie_form"] : (function () { throw new RuntimeError('Variable "categorie_form" does not exist.', 22, $this->source); })()), 'form_start');
        echo "
\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["categorie_form"]) || array_key_exists("categorie_form", $context) ? $context["categorie_form"] : (function () { throw new RuntimeError('Variable "categorie_form" does not exist.', 23, $this->source); })()), 'widget');
        echo "
\t\t<button type=\"submit\">submit</button>
\t\t";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["categorie_form"]) || array_key_exists("categorie_form", $context) ? $context["categorie_form"] : (function () { throw new RuntimeError('Variable "categorie_form" does not exist.', 25, $this->source); })()), 'form_end');
        echo "

\t\t<form method=\"post\" action=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quizz_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28))), "html", null, true);
        echo "\">
\t\t\t<button class=\"btn\">Delete</button>
\t\t</form>


\t\t";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["question_form"]) || array_key_exists("question_form", $context) ? $context["question_form"] : (function () { throw new RuntimeError('Variable "question_form" does not exist.', 33, $this->source); })()), 'form_start');
        echo "
\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["question_form"]) || array_key_exists("question_form", $context) ? $context["question_form"] : (function () { throw new RuntimeError('Variable "question_form" does not exist.', 34, $this->source); })()), 'widget');
        echo "
\t\t<button type=\"submit\">Nouvelle Question</button>
\t\t";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["question_form"]) || array_key_exists("question_form", $context) ? $context["question_form"] : (function () { throw new RuntimeError('Variable "question_form" does not exist.', 36, $this->source); })()), 'form_end');
        echo "

\t\t";
        // line 38
        if ( !twig_test_empty((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 38, $this->source); })()))) {
            // line 39
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 39, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 40
                echo "\t\t\t\t<ul>
\t\t\t\t\t<li>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 41), "html", null, true);
                echo "
\t\t\t\t\t\t<a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 42)]), "html", null, true);
                echo "\">Edit</a>
\t\t\t\t\t</li>
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "reponses", [], "any", false, false, false, 45));
                foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                    // line 46
                    echo "\t\t\t\t\t\t\t<li>";
                    echo ((twig_get_attribute($this->env, $this->source, $context["reponse"], "reponseexpected", [], "any", false, false, false, 46)) ? ("✅") : ("❌"));
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 46), "html", null, true);
                    echo "</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "\t\t\t\t\t</ul>
\t\t\t\t</ul>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "\t\t";
        } else {
            // line 52
            echo "\t\t\t<h1>No question here yet</h1>
\t\t";
        }
        // line 54
        echo "
\t</div>
</div>";
        
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
        return array (  198 => 54,  194 => 52,  191 => 51,  183 => 48,  173 => 46,  169 => 45,  163 => 42,  159 => 41,  156 => 40,  151 => 39,  149 => 38,  144 => 36,  139 => 34,  135 => 33,  127 => 28,  123 => 27,  118 => 25,  113 => 23,  109 => 22,  105 => 21,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello QuizzController!
{% endblock %}

{% block body %}
\t<style>
\t\t.example-wrapper {
\t\t\tmargin: 1em auto;
\t\t\tmax-width: 800px;
\t\t\twidth: 95%;
\t\t\tfont: 18px / 1.5 sans-serif;
\t\t}
\t\t.example-wrapper code {
\t\t\tbackground: #F5F5F5;
\t\t\tpadding: 2px 6px;
\t\t}
\t</style>

\t<div class=\"example-wrapper\">
\t\t<h1>{{ categorie.name }}</h1>
\t\t{{ form_start(categorie_form)}}
\t\t{{ form_widget(categorie_form) }}
\t\t<button type=\"submit\">submit</button>
\t\t{{ form_end(categorie_form) }}

\t\t<form method=\"post\" action=\"{{ path('app_quizz_delete', {'id': categorie.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ categorie.id) }}\">
\t\t\t<button class=\"btn\">Delete</button>
\t\t</form>


\t\t{{ form_start(question_form) }}
\t\t{{ form_widget(question_form) }}
\t\t<button type=\"submit\">Nouvelle Question</button>
\t\t{{ form_end(question_form) }}

\t\t{% if questions is not empty %}
\t\t\t{% for question in questions %}
\t\t\t\t<ul>
\t\t\t\t\t<li>{{ question.question}}
\t\t\t\t\t\t<a href=\"{{path('app_question_edit', {'id': question.id})}}\">Edit</a>
\t\t\t\t\t</li>
\t\t\t\t\t<ul>
\t\t\t\t\t\t{% for reponse in question.reponses %}
\t\t\t\t\t\t\t<li>{{(reponse.reponseexpected) ? '✅': '❌'}}{{reponse.reponse}}</li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t</ul>
\t\t\t{% endfor %}
\t\t{% else %}
\t\t\t<h1>No question here yet</h1>
\t\t{% endif %}

\t</div>
</div>{% endblock %}
", "quizz/edit.html.twig", "/home/laurentlf/epitech/projets/semestre2/quiz/W-PHP-502-NAN-2-1-Quiz-marius.le-houezec-lacaze/templates/quizz/edit.html.twig");
    }
}
