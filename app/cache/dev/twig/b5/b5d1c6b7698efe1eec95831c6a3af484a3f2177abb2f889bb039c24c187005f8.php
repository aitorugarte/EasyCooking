<?php

/* CookerCookingBundle:Cook:ingredientes.html.twig */
class __TwigTemplate_e2917715ca670f33803b1c957b0dabaef14edd61eaf644281a171c9a60e27ae2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "CookerCookingBundle:Cook:ingredientes.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CookerCookingBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75dd71f80dd11e3f5713b589c18c78adef375c8d3228cc408be76049cbcfcd5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75dd71f80dd11e3f5713b589c18c78adef375c8d3228cc408be76049cbcfcd5d->enter($__internal_75dd71f80dd11e3f5713b589c18c78adef375c8d3228cc408be76049cbcfcd5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:ingredientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75dd71f80dd11e3f5713b589c18c78adef375c8d3228cc408be76049cbcfcd5d->leave($__internal_75dd71f80dd11e3f5713b589c18c78adef375c8d3228cc408be76049cbcfcd5d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_856c4985cda93fe2c0240df65de6b4b6aeda3e37fd152802968b9007e80791e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_856c4985cda93fe2c0240df65de6b4b6aeda3e37fd152802968b9007e80791e3->enter($__internal_856c4985cda93fe2c0240df65de6b4b6aeda3e37fd152802968b9007e80791e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Ingredientes";
        
        $__internal_856c4985cda93fe2c0240df65de6b4b6aeda3e37fd152802968b9007e80791e3->leave($__internal_856c4985cda93fe2c0240df65de6b4b6aeda3e37fd152802968b9007e80791e3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f2efefb48001df1156d505938e3f8dfea8e669a2c02cdfa25c9ae053378dd09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f2efefb48001df1156d505938e3f8dfea8e669a2c02cdfa25c9ae053378dd09->enter($__internal_9f2efefb48001df1156d505938e3f8dfea8e669a2c02cdfa25c9ae053378dd09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<ul class=\"lista2\">
\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ingredientes"] ?? $this->getContext($context, "ingredientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ingrediente"]) {
            // line 8
            echo "\t<li class=\"elemento2\">
\t\t<h4><a href=\"";
            // line 9
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
        // line 12
        echo "\t";
        
        $__internal_9f2efefb48001df1156d505938e3f8dfea8e669a2c02cdfa25c9ae053378dd09->leave($__internal_9f2efefb48001df1156d505938e3f8dfea8e669a2c02cdfa25c9ae053378dd09_prof);

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
        return array (  74 => 12,  63 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
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
{% extends 'CookerCookingBundle::layout.html.twig' %}
{% block title %}Lista de Ingredientes{% endblock %}

{% block body %}
<ul class=\"lista2\">
\t{% for ingrediente in ingredientes %}
\t<li class=\"elemento2\">
\t\t<h4><a href=\"{{ path('cooker_cook_showIngr', { 'id': ingrediente.id }) }}\">{{ ingrediente.nombre }}</a></h4>
\t</li>
\t{% endfor %}
\t{% endblock %}
", "CookerCookingBundle:Cook:ingredientes.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/ingredientes.html.twig");
    }
}
