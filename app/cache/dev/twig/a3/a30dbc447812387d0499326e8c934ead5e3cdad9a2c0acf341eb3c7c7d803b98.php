<?php

/* @CookerCooking/Cook/recetas.html.twig */
class __TwigTemplate_fe99e13103632cb462de51db0dbe35f6edab80a8fcd1a1bbebb6c1f6a5cf1398 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "@CookerCooking/Cook/recetas.html.twig", 2);
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
        $__internal_45574b4f690237fd6cbb2dfa2d7ec13da4cb1c70e2b651a6511224e1c29466ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45574b4f690237fd6cbb2dfa2d7ec13da4cb1c70e2b651a6511224e1c29466ac->enter($__internal_45574b4f690237fd6cbb2dfa2d7ec13da4cb1c70e2b651a6511224e1c29466ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Cook/recetas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45574b4f690237fd6cbb2dfa2d7ec13da4cb1c70e2b651a6511224e1c29466ac->leave($__internal_45574b4f690237fd6cbb2dfa2d7ec13da4cb1c70e2b651a6511224e1c29466ac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_59cf8b0411ca037603726c44c44b7fc8cd216a315cbb40fa2ac4094da9d6da52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59cf8b0411ca037603726c44c44b7fc8cd216a315cbb40fa2ac4094da9d6da52->enter($__internal_59cf8b0411ca037603726c44c44b7fc8cd216a315cbb40fa2ac4094da9d6da52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Recetas";
        
        $__internal_59cf8b0411ca037603726c44c44b7fc8cd216a315cbb40fa2ac4094da9d6da52->leave($__internal_59cf8b0411ca037603726c44c44b7fc8cd216a315cbb40fa2ac4094da9d6da52_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_05728d0bd0c1087b0fce755130a3441bc865babaf00f51653026b37c14938921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05728d0bd0c1087b0fce755130a3441bc865babaf00f51653026b37c14938921->enter($__internal_05728d0bd0c1087b0fce755130a3441bc865babaf00f51653026b37c14938921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recetas"] ?? $this->getContext($context, "recetas")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            // line 7
            echo "        <article class=\"receta\">
            <header>
                <h2><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_show", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
            echo "</a></h2>
            </header>

            <div class=\"snippet\">
                <p>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "detalles", array(0 => 200), "method"), "html", null, true);
            echo "</p>
                <p class=\"continue\"><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_show", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">Seguir leyendo...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comentarios: -</p>
            </footer>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            echo "        <p>No hay entradas en este blog</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_05728d0bd0c1087b0fce755130a3441bc865babaf00f51653026b37c14938921->leave($__internal_05728d0bd0c1087b0fce755130a3441bc865babaf00f51653026b37c14938921_prof);

    }

    public function getTemplateName()
    {
        return "@CookerCooking/Cook/recetas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 22,  76 => 14,  72 => 13,  63 => 9,  59 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Cook/recetas.html.twig #}
{% extends 'CookerCookingBundle::layout.html.twig' %}
{% block title %}Lista de Recetas{% endblock %}

{% block body %}
    {% for receta in recetas %}
        <article class=\"receta\">
            <header>
                <h2><a href=\"{{ path('cooker_cook_show', { 'id': receta.id }) }}\">{{ receta.nombre }}</a></h2>
            </header>

            <div class=\"snippet\">
                <p>{{ receta.detalles(200) }}</p>
                <p class=\"continue\"><a href=\"{{ path('cooker_cook_show', { 'id': receta.id }) }}\">Seguir leyendo...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comentarios: -</p>
            </footer>
        </article>
    {% else %}
        <p>No hay entradas en este blog</p>
    {% endfor %}
{% endblock %}
", "@CookerCooking/Cook/recetas.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\recetas.html.twig");
    }
}
