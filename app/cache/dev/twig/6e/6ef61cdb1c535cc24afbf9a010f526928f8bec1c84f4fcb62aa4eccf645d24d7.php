<?php

/* @CookerCooking/Comment/create.html.twig */
class __TwigTemplate_37159a35271715b863ce0b1b7697e29804b30086cfeb6d3d853b804bf56a6800 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "@CookerCooking/Comment/create.html.twig", 3);
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
        $__internal_f03170e68525c96149200fb6b46e815e9c4102be839ea35aaaf2139e7e2b5cd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03170e68525c96149200fb6b46e815e9c4102be839ea35aaaf2139e7e2b5cd9->enter($__internal_f03170e68525c96149200fb6b46e815e9c4102be839ea35aaaf2139e7e2b5cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Comment/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f03170e68525c96149200fb6b46e815e9c4102be839ea35aaaf2139e7e2b5cd9->leave($__internal_f03170e68525c96149200fb6b46e815e9c4102be839ea35aaaf2139e7e2b5cd9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f7c6840e275c9598c0dae440d464d5100c6195debc66677c99aebb43f129866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f7c6840e275c9598c0dae440d464d5100c6195debc66677c99aebb43f129866->enter($__internal_4f7c6840e275c9598c0dae440d464d5100c6195debc66677c99aebb43f129866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_4f7c6840e275c9598c0dae440d464d5100c6195debc66677c99aebb43f129866->leave($__internal_4f7c6840e275c9598c0dae440d464d5100c6195debc66677c99aebb43f129866_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f5fb1b7459cca2ed0777ee92ea5b361f96efff8ce22febb180097198c2ae96c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f5fb1b7459cca2ed0777ee92ea5b361f96efff8ce22febb180097198c2ae96c->enter($__internal_1f5fb1b7459cca2ed0777ee92ea5b361f96efff8ce22febb180097198c2ae96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario a la receta \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comentario"] ?? $this->getContext($context, "comentario")), "receta", array()), "nombre", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CookerCookingBundle:Comentario:form.html.twig", "@CookerCooking/Comment/create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_1f5fb1b7459cca2ed0777ee92ea5b361f96efff8ce22febb180097198c2ae96c->leave($__internal_1f5fb1b7459cca2ed0777ee92ea5b361f96efff8ce22febb180097198c2ae96c_prof);

    }

    public function getTemplateName()
    {
        return "@CookerCooking/Comment/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  53 => 8,  47 => 7,  35 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Comentario/create.html.twig #}

{% extends 'CookerCookingBundle::layout.html.twig' %}

{% block title %}Añadir comentario{% endblock%}

{% block body %}
    <h1>Añadir un comentario a la receta \"{{ comentario.receta.nombre }}\"</h1>
    {% include 'CookerCookingBundle:Comentario:form.html.twig' with { 'form': form } %}
{% endblock %}
", "@CookerCooking/Comment/create.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Comment\\create.html.twig");
    }
}
