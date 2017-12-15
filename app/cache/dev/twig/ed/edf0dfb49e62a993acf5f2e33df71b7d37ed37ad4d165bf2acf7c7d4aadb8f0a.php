<?php

/* CookerCookingBundle:Cook:ingredientes.html.twig */
class __TwigTemplate_94190beb97b54eb0e3070255f93f62588033e268b992b3b0840362d6f68731ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::sidebar.html.twig", "CookerCookingBundle:Cook:ingredientes.html.twig", 2);
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
        $__internal_c4e03a745c1b471eb5cdc25a21748c12696e4c0f46690b45ed9247fc8d994422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e03a745c1b471eb5cdc25a21748c12696e4c0f46690b45ed9247fc8d994422->enter($__internal_c4e03a745c1b471eb5cdc25a21748c12696e4c0f46690b45ed9247fc8d994422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:ingredientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4e03a745c1b471eb5cdc25a21748c12696e4c0f46690b45ed9247fc8d994422->leave($__internal_c4e03a745c1b471eb5cdc25a21748c12696e4c0f46690b45ed9247fc8d994422_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e609e20d20cbed69d80ac859f235e13c879a0be6458a3f33340cf5a5565e05dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e609e20d20cbed69d80ac859f235e13c879a0be6458a3f33340cf5a5565e05dc->enter($__internal_e609e20d20cbed69d80ac859f235e13c879a0be6458a3f33340cf5a5565e05dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Ingredientes";
        
        $__internal_e609e20d20cbed69d80ac859f235e13c879a0be6458a3f33340cf5a5565e05dc->leave($__internal_e609e20d20cbed69d80ac859f235e13c879a0be6458a3f33340cf5a5565e05dc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_59fbaa429d671697313b8bfbdb208e975db6b4e36ff87762ae44d99bda6e7dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59fbaa429d671697313b8bfbdb208e975db6b4e36ff87762ae44d99bda6e7dfb->enter($__internal_59fbaa429d671697313b8bfbdb208e975db6b4e36ff87762ae44d99bda6e7dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<h2>&iquest;Busca alg&uacute;n ingrediente en particular?</h2>
<br>
<ul class=\"lista2\">
\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ingredientes"] ?? $this->getContext($context, "ingredientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ingrediente"]) {
            // line 11
            echo "\t<li class=\"elemento2\">
\t\t<h4><a href=\"";
            // line 12
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
        // line 15
        echo "</ul>
\t";
        
        $__internal_59fbaa429d671697313b8bfbdb208e975db6b4e36ff87762ae44d99bda6e7dfb->leave($__internal_59fbaa429d671697313b8bfbdb208e975db6b4e36ff87762ae44d99bda6e7dfb_prof);

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
        return array (  77 => 15,  66 => 12,  63 => 11,  59 => 10,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
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
{% extends 'CookerCookingBundle::sidebar.html.twig' %}
{% block title %}Lista de Ingredientes{% endblock %}

{% block body %}

<h2>&iquest;Busca alg&uacute;n ingrediente en particular?</h2>
<br>
<ul class=\"lista2\">
\t{% for ingrediente in ingredientes %}
\t<li class=\"elemento2\">
\t\t<h4><a href=\"{{ path('cooker_cook_showIngr', { 'id': ingrediente.id }) }}\">{{ ingrediente.nombre }}</a></h4>
\t</li>
\t{% endfor %}
</ul>
\t{% endblock %}
", "CookerCookingBundle:Cook:ingredientes.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\ingredientes.html.twig");
    }
}
