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
        $__internal_50c540ee80ba16a8452f8df64438298590859af0a0d5b977b6b9c963daae86be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50c540ee80ba16a8452f8df64438298590859af0a0d5b977b6b9c963daae86be->enter($__internal_50c540ee80ba16a8452f8df64438298590859af0a0d5b977b6b9c963daae86be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:ingredientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50c540ee80ba16a8452f8df64438298590859af0a0d5b977b6b9c963daae86be->leave($__internal_50c540ee80ba16a8452f8df64438298590859af0a0d5b977b6b9c963daae86be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_98f16bd6f474d1abf21244d992cf27dfe85d16ffc05d7649f001169b71678892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98f16bd6f474d1abf21244d992cf27dfe85d16ffc05d7649f001169b71678892->enter($__internal_98f16bd6f474d1abf21244d992cf27dfe85d16ffc05d7649f001169b71678892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Ingredientes";
        
        $__internal_98f16bd6f474d1abf21244d992cf27dfe85d16ffc05d7649f001169b71678892->leave($__internal_98f16bd6f474d1abf21244d992cf27dfe85d16ffc05d7649f001169b71678892_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_668fa5e3c89d92be3d62212495f02da493b85cf4ece6792bb861e42797be7a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_668fa5e3c89d92be3d62212495f02da493b85cf4ece6792bb861e42797be7a52->enter($__internal_668fa5e3c89d92be3d62212495f02da493b85cf4ece6792bb861e42797be7a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_668fa5e3c89d92be3d62212495f02da493b85cf4ece6792bb861e42797be7a52->leave($__internal_668fa5e3c89d92be3d62212495f02da493b85cf4ece6792bb861e42797be7a52_prof);

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
