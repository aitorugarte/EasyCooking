<?php

/* CookerCookingBundle:Cook:showIngr.html.twig */
class __TwigTemplate_ebe5e79a3e2adfc9c8026eef2fb6eb286bdb26e04f2eb8a3288feaa4f7d62484 extends Twig_Template
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
        $__internal_ae1ac3e62dfd7cb79479a45c04d5ca723026ad4b3d34c25c63d5623dd6f70cd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae1ac3e62dfd7cb79479a45c04d5ca723026ad4b3d34c25c63d5623dd6f70cd3->enter($__internal_ae1ac3e62dfd7cb79479a45c04d5ca723026ad4b3d34c25c63d5623dd6f70cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:showIngr.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae1ac3e62dfd7cb79479a45c04d5ca723026ad4b3d34c25c63d5623dd6f70cd3->leave($__internal_ae1ac3e62dfd7cb79479a45c04d5ca723026ad4b3d34c25c63d5623dd6f70cd3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8111e7ef59cfccee2c01168cb72a7791fb2d3b74896c2e83f9336ef392099199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8111e7ef59cfccee2c01168cb72a7791fb2d3b74896c2e83f9336ef392099199->enter($__internal_8111e7ef59cfccee2c01168cb72a7791fb2d3b74896c2e83f9336ef392099199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["ingrediente"] ?? $this->getContext($context, "ingrediente")), "nombre", array()), "html", null, true);
        
        $__internal_8111e7ef59cfccee2c01168cb72a7791fb2d3b74896c2e83f9336ef392099199->leave($__internal_8111e7ef59cfccee2c01168cb72a7791fb2d3b74896c2e83f9336ef392099199_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_892a6e56ff0067e09005e372c67d62b5574d92e18c4a6264c6b7ebc028c4e3e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_892a6e56ff0067e09005e372c67d62b5574d92e18c4a6264c6b7ebc028c4e3e8->enter($__internal_892a6e56ff0067e09005e372c67d62b5574d92e18c4a6264c6b7ebc028c4e3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_892a6e56ff0067e09005e372c67d62b5574d92e18c4a6264c6b7ebc028c4e3e8->leave($__internal_892a6e56ff0067e09005e372c67d62b5574d92e18c4a6264c6b7ebc028c4e3e8_prof);

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
", "CookerCookingBundle:Cook:showIngr.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\showIngr.html.twig");
    }
}
