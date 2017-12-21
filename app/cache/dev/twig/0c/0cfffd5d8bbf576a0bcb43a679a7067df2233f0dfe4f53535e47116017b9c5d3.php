<?php

/* CookerCookingBundle:Cook:showIngr.html.twig */
class __TwigTemplate_8e1c2e168e86c33e653fb6fcdd6759dfef4cecd392b33167c2a387a196229e29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::sidebar.html.twig", "CookerCookingBundle:Cook:showIngr.html.twig", 2);
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
        $__internal_52bb0e09a8c337bec21f4dc87c8e864a12e7eb6b30c4e7d30488f8da92f6f4cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52bb0e09a8c337bec21f4dc87c8e864a12e7eb6b30c4e7d30488f8da92f6f4cc->enter($__internal_52bb0e09a8c337bec21f4dc87c8e864a12e7eb6b30c4e7d30488f8da92f6f4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:showIngr.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52bb0e09a8c337bec21f4dc87c8e864a12e7eb6b30c4e7d30488f8da92f6f4cc->leave($__internal_52bb0e09a8c337bec21f4dc87c8e864a12e7eb6b30c4e7d30488f8da92f6f4cc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3bb05d1045e9cf83ee9116f25011e1c14369f5565c694a3f1e89dfbc69a2b375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb05d1045e9cf83ee9116f25011e1c14369f5565c694a3f1e89dfbc69a2b375->enter($__internal_3bb05d1045e9cf83ee9116f25011e1c14369f5565c694a3f1e89dfbc69a2b375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["ingrediente"] ?? $this->getContext($context, "ingrediente")), "nombre", array()), "html", null, true);
        
        $__internal_3bb05d1045e9cf83ee9116f25011e1c14369f5565c694a3f1e89dfbc69a2b375->leave($__internal_3bb05d1045e9cf83ee9116f25011e1c14369f5565c694a3f1e89dfbc69a2b375_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_044f51663583c4da48c6c174b9297aea4a21242c7ee637f2ef6cbfdc0a827a9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_044f51663583c4da48c6c174b9297aea4a21242c7ee637f2ef6cbfdc0a827a9e->enter($__internal_044f51663583c4da48c6c174b9297aea4a21242c7ee637f2ef6cbfdc0a827a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<h1>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Recetas para el ingrediente:", array(), "messages");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ingrediente"] ?? $this->getContext($context, "ingrediente")), "nombre", array()), "html", null, true);
        echo "</h1>
\t
\t<ul>
\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recetas"] ?? $this->getContext($context, "recetas")));
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            // line 10
            echo "\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
            echo "</a></li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t</ul>

";
        
        $__internal_044f51663583c4da48c6c174b9297aea4a21242c7ee637f2ef6cbfdc0a827a9e->leave($__internal_044f51663583c4da48c6c174b9297aea4a21242c7ee637f2ef6cbfdc0a827a9e_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle:Cook:showIngr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 12,  66 => 10,  62 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Cook/showIngr.html.twig #}
{% extends 'CookerCookingBundle::sidebar.html.twig' %}
{% block title %}{{ ingrediente.nombre }}{% endblock %}

{% block body %}
\t<h1>{% trans %}Recetas para el ingrediente:{% endtrans %} {{ ingrediente.nombre }}</h1>
\t
\t<ul>
\t{% for receta in recetas %}
\t<li><a href=\"{{ path('cooker_cook_showReceta', { 'id': receta.id }) }}\">{{ receta.nombre }}</a></li>
\t{% endfor %}
\t</ul>

{% endblock %}
", "CookerCookingBundle:Cook:showIngr.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/showIngr.html.twig");
    }
}
