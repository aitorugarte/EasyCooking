<?php

/* CookerCookingBundle:Cook:showPlato.html.twig */
class __TwigTemplate_c6fd63b26532686901519b757f0cfdb08711bc7b4519cdf41c201f25136fb6df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::sidebar.html.twig", "CookerCookingBundle:Cook:showPlato.html.twig", 2);
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
        $__internal_306bb87fba1439d06c024923a3a0ad59472a2668a0ac624a76fcdc5898dcaf9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306bb87fba1439d06c024923a3a0ad59472a2668a0ac624a76fcdc5898dcaf9a->enter($__internal_306bb87fba1439d06c024923a3a0ad59472a2668a0ac624a76fcdc5898dcaf9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:showPlato.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_306bb87fba1439d06c024923a3a0ad59472a2668a0ac624a76fcdc5898dcaf9a->leave($__internal_306bb87fba1439d06c024923a3a0ad59472a2668a0ac624a76fcdc5898dcaf9a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9007ed8e220baff931b606d80f90e5b63609f0c0fdcb132f0200aceb2f00224b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9007ed8e220baff931b606d80f90e5b63609f0c0fdcb132f0200aceb2f00224b->enter($__internal_9007ed8e220baff931b606d80f90e5b63609f0c0fdcb132f0200aceb2f00224b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["plato"] ?? $this->getContext($context, "plato")), "nombre", array()), "html", null, true);
        
        $__internal_9007ed8e220baff931b606d80f90e5b63609f0c0fdcb132f0200aceb2f00224b->leave($__internal_9007ed8e220baff931b606d80f90e5b63609f0c0fdcb132f0200aceb2f00224b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbb75a6676821de0795c94deb8ca897abf8c19ae3fa5acb78fef8af60b7eb137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb75a6676821de0795c94deb8ca897abf8c19ae3fa5acb78fef8af60b7eb137->enter($__internal_dbb75a6676821de0795c94deb8ca897abf8c19ae3fa5acb78fef8af60b7eb137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<h1>Recetas para el plato: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["plato"] ?? $this->getContext($context, "plato")), "nombre", array()), "html", null, true);
        echo "</h1>

 \t<div class=\"ib-container\" id=\"ib-container\">

\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recetas"] ?? $this->getContext($context, "recetas")));
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            // line 12
            echo "
\t<article>
\t\t<header>
\t\t\t<h3><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
            echo "</a></h3>
\t\t</header>
\t\t<img class=\"imgPeq\" src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "imagen", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
            echo "\" />
\t\t<div class=\"snippet\">
\t\t\t<p style=\"margin-left: 5px;margin-right: 5px;\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "detalles", array(0 => 50), "method"), "html", null, true);
            echo "</p>
\t\t\t<p><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">Seguir leyendo...</a></p>
\t\t</div>
\t\t<footer class=\"meta\">
\t\t\t<p>Comentarios: -</p>
\t\t</footer>

\t</article>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
\t</div>

";
        
        $__internal_dbb75a6676821de0795c94deb8ca897abf8c19ae3fa5acb78fef8af60b7eb137->leave($__internal_dbb75a6676821de0795c94deb8ca897abf8c19ae3fa5acb78fef8af60b7eb137_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle:Cook:showPlato.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 28,  90 => 20,  86 => 19,  79 => 17,  72 => 15,  67 => 12,  63 => 11,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Cook/showPlato.html.twig #}
{% extends 'CookerCookingBundle::sidebar.html.twig' %}
{% block title %}{{plato.nombre}}{% endblock %}

{% block body %}

<h1>Recetas para el plato: {{ plato.nombre }}</h1>

 \t<div class=\"ib-container\" id=\"ib-container\">

\t{% for receta in recetas %}

\t<article>
\t\t<header>
\t\t\t<h3><a href=\"{{ path('cooker_cook_showReceta', { 'id': receta.id }) }}\">{{ receta.nombre }}</a></h3>
\t\t</header>
\t\t<img class=\"imgPeq\" src=\"{{receta.imagen}}\" alt=\"{{receta.nombre}}\" />
\t\t<div class=\"snippet\">
\t\t\t<p style=\"margin-left: 5px;margin-right: 5px;\">{{ receta.detalles(50) }}</p>
\t\t\t<p><a href=\"{{ path('cooker_cook_showReceta', { 'id': receta.id }) }}\">Seguir leyendo...</a></p>
\t\t</div>
\t\t<footer class=\"meta\">
\t\t\t<p>Comentarios: -</p>
\t\t</footer>

\t</article>
\t{% endfor %}

\t</div>

{% endblock %}
", "CookerCookingBundle:Cook:showPlato.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/showPlato.html.twig");
    }
}
