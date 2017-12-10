<?php

/* CookerCookingBundle:Cook:ingredientes.html.twig */
class __TwigTemplate_e1daeca4cd348132df78f0b6e05fa4a26d9888e9e7b811dd979139a1cd125d03 extends Twig_Template
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
        $__internal_86cd716f49fca4622978ea5b263ec629a74600e3767acad91124045e19a62649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86cd716f49fca4622978ea5b263ec629a74600e3767acad91124045e19a62649->enter($__internal_86cd716f49fca4622978ea5b263ec629a74600e3767acad91124045e19a62649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:ingredientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86cd716f49fca4622978ea5b263ec629a74600e3767acad91124045e19a62649->leave($__internal_86cd716f49fca4622978ea5b263ec629a74600e3767acad91124045e19a62649_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8cc45e9e0c835d925057e81f1ae18503423c6490fc44dddff36a7bbeb4d32ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc45e9e0c835d925057e81f1ae18503423c6490fc44dddff36a7bbeb4d32ccb->enter($__internal_8cc45e9e0c835d925057e81f1ae18503423c6490fc44dddff36a7bbeb4d32ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Ingredientes";
        
        $__internal_8cc45e9e0c835d925057e81f1ae18503423c6490fc44dddff36a7bbeb4d32ccb->leave($__internal_8cc45e9e0c835d925057e81f1ae18503423c6490fc44dddff36a7bbeb4d32ccb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef03eb7a0e9346159e29df90f8bad9d5ec503c449414a32fbdbaffcc6b24ec49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef03eb7a0e9346159e29df90f8bad9d5ec503c449414a32fbdbaffcc6b24ec49->enter($__internal_ef03eb7a0e9346159e29df90f8bad9d5ec503c449414a32fbdbaffcc6b24ec49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ef03eb7a0e9346159e29df90f8bad9d5ec503c449414a32fbdbaffcc6b24ec49->leave($__internal_ef03eb7a0e9346159e29df90f8bad9d5ec503c449414a32fbdbaffcc6b24ec49_prof);

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
