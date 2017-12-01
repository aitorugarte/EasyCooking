<?php

/* CookerCookingBundle:Cook:show2.html.twig */
class __TwigTemplate_660001ba38f9f11583912845dd9ee11bc9949ee914b8b64ac2ecd0abdae3190e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "CookerCookingBundle:Cook:show2.html.twig", 2);
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
        $__internal_dd37aa7ddcd72443dbd41d4c58f91be1a1b8b278d02dfc79588e55b94ed9d27c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd37aa7ddcd72443dbd41d4c58f91be1a1b8b278d02dfc79588e55b94ed9d27c->enter($__internal_dd37aa7ddcd72443dbd41d4c58f91be1a1b8b278d02dfc79588e55b94ed9d27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:show2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd37aa7ddcd72443dbd41d4c58f91be1a1b8b278d02dfc79588e55b94ed9d27c->leave($__internal_dd37aa7ddcd72443dbd41d4c58f91be1a1b8b278d02dfc79588e55b94ed9d27c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_830bf4ff965460ffaf4822557bc4606d19bab1ff450905d56b39b94cd417cf18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_830bf4ff965460ffaf4822557bc4606d19bab1ff450905d56b39b94cd417cf18->enter($__internal_830bf4ff965460ffaf4822557bc4606d19bab1ff450905d56b39b94cd417cf18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["ingrediente"] ?? $this->getContext($context, "ingrediente")), "nombre", array()), "html", null, true);
        
        $__internal_830bf4ff965460ffaf4822557bc4606d19bab1ff450905d56b39b94cd417cf18->leave($__internal_830bf4ff965460ffaf4822557bc4606d19bab1ff450905d56b39b94cd417cf18_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_376062665110939650989a434588d03fe30ffc91993b2ffaa9a0581dc3a3813c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_376062665110939650989a434588d03fe30ffc91993b2ffaa9a0581dc3a3813c->enter($__internal_376062665110939650989a434588d03fe30ffc91993b2ffaa9a0581dc3a3813c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<h1>Recetas para el ingrediente: ";
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
        echo "

";
        
        $__internal_376062665110939650989a434588d03fe30ffc91993b2ffaa9a0581dc3a3813c->leave($__internal_376062665110939650989a434588d03fe30ffc91993b2ffaa9a0581dc3a3813c_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle:Cook:show2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 12,  64 => 10,  60 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
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
{% extends 'CookerCookingBundle::layout.html.twig' %}
{% block title %}{{ ingrediente.nombre }}{% endblock %}

{% block body %}
\t<h1>Recetas para el ingrediente: {{ ingrediente.nombre }}</h1>
\t
\t<ul>
\t{% for receta in recetas %}
\t<li><a href=\"{{ path('cooker_cook_showReceta', { 'id': receta.id }) }}\">{{ receta.nombre }}</a></li>
\t{% endfor %}


{% endblock %}
", "CookerCookingBundle:Cook:show2.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\show2.html.twig");
    }
}
