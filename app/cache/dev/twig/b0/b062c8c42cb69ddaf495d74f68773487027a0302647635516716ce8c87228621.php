<?php

/* @CookerCooking/Cook/showPlato.html.twig */
class __TwigTemplate_44213c771b5a0022aed50bc8a492394b2ef8df4684d3dba25e6d43fc73279116 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "@CookerCooking/Cook/showPlato.html.twig", 2);
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
        $__internal_bbe0399a0cfb0b684fabf71121db07b43d9f40ebeda90df6b12d2b2a94007803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe0399a0cfb0b684fabf71121db07b43d9f40ebeda90df6b12d2b2a94007803->enter($__internal_bbe0399a0cfb0b684fabf71121db07b43d9f40ebeda90df6b12d2b2a94007803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Cook/showPlato.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbe0399a0cfb0b684fabf71121db07b43d9f40ebeda90df6b12d2b2a94007803->leave($__internal_bbe0399a0cfb0b684fabf71121db07b43d9f40ebeda90df6b12d2b2a94007803_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6cdd595c1621c48b8038b2ccd9f449a5ea6dc2fbd5c7f296efd8ff225f209d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cdd595c1621c48b8038b2ccd9f449a5ea6dc2fbd5c7f296efd8ff225f209d65->enter($__internal_6cdd595c1621c48b8038b2ccd9f449a5ea6dc2fbd5c7f296efd8ff225f209d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["plato"] ?? $this->getContext($context, "plato")), "nombre", array()), "html", null, true);
        
        $__internal_6cdd595c1621c48b8038b2ccd9f449a5ea6dc2fbd5c7f296efd8ff225f209d65->leave($__internal_6cdd595c1621c48b8038b2ccd9f449a5ea6dc2fbd5c7f296efd8ff225f209d65_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_aba070aabcb17212ed545c07d7b029acaae10f2948ee8013fc9b1dd2245a5958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba070aabcb17212ed545c07d7b029acaae10f2948ee8013fc9b1dd2245a5958->enter($__internal_aba070aabcb17212ed545c07d7b029acaae10f2948ee8013fc9b1dd2245a5958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<h1>Recetas para el plato: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["plato"] ?? $this->getContext($context, "plato")), "nombre", array()), "html", null, true);
        echo "</h1>

<ul class=\"lista\">
\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recetas"] ?? $this->getContext($context, "recetas")));
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            // line 11
            echo "\t<li class=\"elemento\">
\t\t<header>
\t\t\t<h3><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
            echo "</a></h3>
\t\t</header>
\t\t<img class=\"imgPeq\" src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "imagen", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
            echo "\" />
\t\t<div class=\"snippet\">
\t\t\t<p style=\"margin-left: 5px;margin-right: 5px;\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "detalles", array(0 => 50), "method"), "html", null, true);
            echo "</p>
\t\t\t<p><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">Seguir leyendo...</a></p>
\t\t</div>
\t\t<footer class=\"meta\">
\t\t\t<p>Comentarios: -</p>
\t\t</footer>
\t</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</ul>

";
        
        $__internal_aba070aabcb17212ed545c07d7b029acaae10f2948ee8013fc9b1dd2245a5958->leave($__internal_aba070aabcb17212ed545c07d7b029acaae10f2948ee8013fc9b1dd2245a5958_prof);

    }

    public function getTemplateName()
    {
        return "@CookerCooking/Cook/showPlato.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 25,  88 => 18,  84 => 17,  77 => 15,  70 => 13,  66 => 11,  62 => 10,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
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
{% extends 'CookerCookingBundle::layout.html.twig' %}
{% block title %}{{plato.nombre}}{% endblock %}

{% block body %}

<h1>Recetas para el plato: {{ plato.nombre }}</h1>

<ul class=\"lista\">
\t{% for receta in recetas %}
\t<li class=\"elemento\">
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
\t</li>
\t{% endfor %}
</ul>

{% endblock %}
", "@CookerCooking/Cook/showPlato.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\showPlato.html.twig");
    }
}
