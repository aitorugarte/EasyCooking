<?php

/* CookerCookingBundle:Cook:ingredientes.html.twig */
class __TwigTemplate_e2917715ca670f33803b1c957b0dabaef14edd61eaf644281a171c9a60e27ae2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::sidebar.html.twig", "CookerCookingBundle:Cook:ingredientes.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CookerCookingBundle::sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53e8233fdf4723a29b35c3443e1bc08df274ce19aadd84ecb163c88c805e8ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53e8233fdf4723a29b35c3443e1bc08df274ce19aadd84ecb163c88c805e8ead->enter($__internal_53e8233fdf4723a29b35c3443e1bc08df274ce19aadd84ecb163c88c805e8ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:ingredientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53e8233fdf4723a29b35c3443e1bc08df274ce19aadd84ecb163c88c805e8ead->leave($__internal_53e8233fdf4723a29b35c3443e1bc08df274ce19aadd84ecb163c88c805e8ead_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_12e5ace6ebeea540f44fe64fd04f186efc22e44cb34d87c96bee096f45d03974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12e5ace6ebeea540f44fe64fd04f186efc22e44cb34d87c96bee096f45d03974->enter($__internal_12e5ace6ebeea540f44fe64fd04f186efc22e44cb34d87c96bee096f45d03974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Lista de Ingredientes", array(), "messages");
        
        $__internal_12e5ace6ebeea540f44fe64fd04f186efc22e44cb34d87c96bee096f45d03974->leave($__internal_12e5ace6ebeea540f44fe64fd04f186efc22e44cb34d87c96bee096f45d03974_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a31e1b17d85b8b5b54a74b5a2a6a0429db368eb3488e84703b3648a40d858e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a31e1b17d85b8b5b54a74b5a2a6a0429db368eb3488e84703b3648a40d858e6b->enter($__internal_a31e1b17d85b8b5b54a74b5a2a6a0429db368eb3488e84703b3648a40d858e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<h2>";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("&iquest;Busca alg&uacute;n ingrediente en particular?", array(), "messages");
        echo "</h2>
<br>
<ul class=\"lista2\">
\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ingredientes"] ?? $this->getContext($context, "ingredientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ingrediente"]) {
            // line 11
            echo "\t<li class=\"elemento2\">
\t\t<h4><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showIngr", array("id" => $this->getAttribute($context["ingrediente"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingrediente"], "nombre", array()), "html", null, true);
            echo "</a></h4>
\t</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingrediente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</ul>
\t";
        
        $__internal_a31e1b17d85b8b5b54a74b5a2a6a0429db368eb3488e84703b3648a40d858e6b->leave($__internal_a31e1b17d85b8b5b54a74b5a2a6a0429db368eb3488e84703b3648a40d858e6b_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle:Cook:ingredientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 15,  69 => 12,  66 => 11,  62 => 10,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Cook/ingredientes.html.twig #}
{% extends 'CookerCookingBundle::sidebar.html.twig' %}
{% block title %}{% trans %}Lista de Ingredientes{% endtrans %}{% endblock %}

{% block body %}

<h2>{% trans %}&iquest;Busca alg&uacute;n ingrediente en particular?{% endtrans %}</h2>
<br>
<ul class=\"lista2\">
\t{% for ingrediente in ingredientes %}
\t<li class=\"elemento2\">
\t\t<h4><a href=\"{{ path('cooker_cook_showIngr', { 'id': ingrediente.id }) }}\">{{ ingrediente.nombre }}</a></h4>
\t</li>
\t{% endfor %}
</ul>
\t{% endblock %}
", "CookerCookingBundle:Cook:ingredientes.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/ingredientes.html.twig");
    }
}
