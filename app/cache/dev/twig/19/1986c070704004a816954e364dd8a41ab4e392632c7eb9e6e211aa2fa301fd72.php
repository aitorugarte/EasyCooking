<?php

/* @CookerCooking/Cook/ingredientes.html.twig */
class __TwigTemplate_a1f8e1a1608df86e73bbf0e77e04648aa234d9f7459a6b3dddaf69860031287a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "@CookerCooking/Cook/ingredientes.html.twig", 2);
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
        $__internal_31ac7b2493fccded43f0edb4b17794971f81ead8166f7ececa60d3655fbc56f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ac7b2493fccded43f0edb4b17794971f81ead8166f7ececa60d3655fbc56f5->enter($__internal_31ac7b2493fccded43f0edb4b17794971f81ead8166f7ececa60d3655fbc56f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Cook/ingredientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31ac7b2493fccded43f0edb4b17794971f81ead8166f7ececa60d3655fbc56f5->leave($__internal_31ac7b2493fccded43f0edb4b17794971f81ead8166f7ececa60d3655fbc56f5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_848afa5d0f2ee51134d55fd033c6d785cbffc50f01b5a84adbe106991321632a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_848afa5d0f2ee51134d55fd033c6d785cbffc50f01b5a84adbe106991321632a->enter($__internal_848afa5d0f2ee51134d55fd033c6d785cbffc50f01b5a84adbe106991321632a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Ingredientes";
        
        $__internal_848afa5d0f2ee51134d55fd033c6d785cbffc50f01b5a84adbe106991321632a->leave($__internal_848afa5d0f2ee51134d55fd033c6d785cbffc50f01b5a84adbe106991321632a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f111ccc16408ab312edd4363da5bd7f484a9479397b5e1646b5da613584ef180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f111ccc16408ab312edd4363da5bd7f484a9479397b5e1646b5da613584ef180->enter($__internal_f111ccc16408ab312edd4363da5bd7f484a9479397b5e1646b5da613584ef180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<ul class=\"lista2\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ingredientes"] ?? $this->getContext($context, "ingredientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ingrediente"]) {
            // line 8
            echo "      <li class=\"elemento2\">  
                <h4><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showIngr", array("id" => $this->getAttribute($context["ingrediente"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingrediente"], "nombre", array()), "html", null, true);
            echo "</a></h4>
\t </li>  
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingrediente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f111ccc16408ab312edd4363da5bd7f484a9479397b5e1646b5da613584ef180->leave($__internal_f111ccc16408ab312edd4363da5bd7f484a9479397b5e1646b5da613584ef180_prof);

    }

    public function getTemplateName()
    {
        return "@CookerCooking/Cook/ingredientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
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
    {% for ingrediente in ingredientes %}
      <li class=\"elemento2\">  
                <h4><a href=\"{{ path('cooker_cook_showIngr', { 'id': ingrediente.id }) }}\">{{ ingrediente.nombre }}</a></h4>
\t </li>  
    {% endfor %}
{% endblock %}
", "@CookerCooking/Cook/ingredientes.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\ingredientes.html.twig");
    }
}
