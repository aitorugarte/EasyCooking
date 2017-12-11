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
        $__internal_f84488e99619d91604aabc3c0e4babb26f54cc011c40213f485b91574189358a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84488e99619d91604aabc3c0e4babb26f54cc011c40213f485b91574189358a->enter($__internal_f84488e99619d91604aabc3c0e4babb26f54cc011c40213f485b91574189358a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:ingredientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f84488e99619d91604aabc3c0e4babb26f54cc011c40213f485b91574189358a->leave($__internal_f84488e99619d91604aabc3c0e4babb26f54cc011c40213f485b91574189358a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_07b002d243c707296ffbdab975ca01bea73ffa69d250263c024ad0bdd4b2907b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b002d243c707296ffbdab975ca01bea73ffa69d250263c024ad0bdd4b2907b->enter($__internal_07b002d243c707296ffbdab975ca01bea73ffa69d250263c024ad0bdd4b2907b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Ingredientes";
        
        $__internal_07b002d243c707296ffbdab975ca01bea73ffa69d250263c024ad0bdd4b2907b->leave($__internal_07b002d243c707296ffbdab975ca01bea73ffa69d250263c024ad0bdd4b2907b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd867676a470cc9d67af28efca097bef584c818d366d5608519c7bc0f4d011fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd867676a470cc9d67af28efca097bef584c818d366d5608519c7bc0f4d011fc->enter($__internal_fd867676a470cc9d67af28efca097bef584c818d366d5608519c7bc0f4d011fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fd867676a470cc9d67af28efca097bef584c818d366d5608519c7bc0f4d011fc->leave($__internal_fd867676a470cc9d67af28efca097bef584c818d366d5608519c7bc0f4d011fc_prof);

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
