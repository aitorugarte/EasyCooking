<?php

/* CookerCookingBundle:Cook:ingredientes.html.twig */
class __TwigTemplate_948acaafe07b613d1c32d48a0432f623a32e0317d441c2a729139aba79023647 extends Twig_Template
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
        $__internal_0b019f005928fc9dcbfcd1a43323587bd0263adba9797322be9f1131371cba54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b019f005928fc9dcbfcd1a43323587bd0263adba9797322be9f1131371cba54->enter($__internal_0b019f005928fc9dcbfcd1a43323587bd0263adba9797322be9f1131371cba54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:ingredientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b019f005928fc9dcbfcd1a43323587bd0263adba9797322be9f1131371cba54->leave($__internal_0b019f005928fc9dcbfcd1a43323587bd0263adba9797322be9f1131371cba54_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_929f27224a2170ad00aa4e5e090936687466a0030c49cad54120a6f30826da09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_929f27224a2170ad00aa4e5e090936687466a0030c49cad54120a6f30826da09->enter($__internal_929f27224a2170ad00aa4e5e090936687466a0030c49cad54120a6f30826da09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Ingredientes";
        
        $__internal_929f27224a2170ad00aa4e5e090936687466a0030c49cad54120a6f30826da09->leave($__internal_929f27224a2170ad00aa4e5e090936687466a0030c49cad54120a6f30826da09_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbab8d149483a4db0f0020081059f8141b102053aabb212a6117bddd94774f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbab8d149483a4db0f0020081059f8141b102053aabb212a6117bddd94774f9d->enter($__internal_dbab8d149483a4db0f0020081059f8141b102053aabb212a6117bddd94774f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dbab8d149483a4db0f0020081059f8141b102053aabb212a6117bddd94774f9d->leave($__internal_dbab8d149483a4db0f0020081059f8141b102053aabb212a6117bddd94774f9d_prof);

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
