<?php

/* CookerCookingBundle:Cook:ingredientes.html.twig */
class __TwigTemplate_fc1399cfe866550c0cdbfe1b405ec06435459d5f9725f45af650303ee469f4e6 extends Twig_Template
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
        $__internal_4c8734a4dbd8bcb6e3a9938a75c3b1d647582b8dab1d1a4e98170fd2c482b7af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c8734a4dbd8bcb6e3a9938a75c3b1d647582b8dab1d1a4e98170fd2c482b7af->enter($__internal_4c8734a4dbd8bcb6e3a9938a75c3b1d647582b8dab1d1a4e98170fd2c482b7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:ingredientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c8734a4dbd8bcb6e3a9938a75c3b1d647582b8dab1d1a4e98170fd2c482b7af->leave($__internal_4c8734a4dbd8bcb6e3a9938a75c3b1d647582b8dab1d1a4e98170fd2c482b7af_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa87b6b1ce1c41a5661dbbab29fce512cf3f86e75d55a18dfceeb3510797ca84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa87b6b1ce1c41a5661dbbab29fce512cf3f86e75d55a18dfceeb3510797ca84->enter($__internal_fa87b6b1ce1c41a5661dbbab29fce512cf3f86e75d55a18dfceeb3510797ca84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Ingredientes";
        
        $__internal_fa87b6b1ce1c41a5661dbbab29fce512cf3f86e75d55a18dfceeb3510797ca84->leave($__internal_fa87b6b1ce1c41a5661dbbab29fce512cf3f86e75d55a18dfceeb3510797ca84_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b22136974840b0eace6f14b3bd631207258c4f1a28b4e460fcd3919c6c0edb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b22136974840b0eace6f14b3bd631207258c4f1a28b4e460fcd3919c6c0edb4->enter($__internal_8b22136974840b0eace6f14b3bd631207258c4f1a28b4e460fcd3919c6c0edb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ingredientes"] ?? $this->getContext($context, "ingredientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ingrediente"]) {
            // line 7
            echo "        <article class=\"receta\">
            <header>
                <h2>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingrediente"], "nombre", array()), "html", null, true);
            echo "</h2>
            </header>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingrediente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8b22136974840b0eace6f14b3bd631207258c4f1a28b4e460fcd3919c6c0edb4->leave($__internal_8b22136974840b0eace6f14b3bd631207258c4f1a28b4e460fcd3919c6c0edb4_prof);

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
        return array (  62 => 9,  58 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
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
    {% for ingrediente in ingredientes %}
        <article class=\"receta\">
            <header>
                <h2>{{ ingrediente.nombre }}</h2>
            </header>
    {% endfor %}
{% endblock %}
", "CookerCookingBundle:Cook:ingredientes.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/ingredientes.html.twig");
    }
}
