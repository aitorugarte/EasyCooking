<?php

/* @CookerCooking/Cook/recetas.html.twig */
class __TwigTemplate_fe99e13103632cb462de51db0dbe35f6edab80a8fcd1a1bbebb6c1f6a5cf1398 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "@CookerCooking/Cook/recetas.html.twig", 2);
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
        $__internal_668ef4546bf4a1fa30f78f74ed3f094e1b908426e6613769d747e5ea0c02b581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_668ef4546bf4a1fa30f78f74ed3f094e1b908426e6613769d747e5ea0c02b581->enter($__internal_668ef4546bf4a1fa30f78f74ed3f094e1b908426e6613769d747e5ea0c02b581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Cook/recetas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_668ef4546bf4a1fa30f78f74ed3f094e1b908426e6613769d747e5ea0c02b581->leave($__internal_668ef4546bf4a1fa30f78f74ed3f094e1b908426e6613769d747e5ea0c02b581_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_afd35aab5749483b149d5dd5e57864262dc78447a941d719b45b187c9599b5ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afd35aab5749483b149d5dd5e57864262dc78447a941d719b45b187c9599b5ae->enter($__internal_afd35aab5749483b149d5dd5e57864262dc78447a941d719b45b187c9599b5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Recetas";
        
        $__internal_afd35aab5749483b149d5dd5e57864262dc78447a941d719b45b187c9599b5ae->leave($__internal_afd35aab5749483b149d5dd5e57864262dc78447a941d719b45b187c9599b5ae_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbf7f3abe93943db092d994328a0e46ac69166b2105f8a5652ef57c58df99a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbf7f3abe93943db092d994328a0e46ac69166b2105f8a5652ef57c58df99a72->enter($__internal_bbf7f3abe93943db092d994328a0e46ac69166b2105f8a5652ef57c58df99a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<ul class=\"lista\">
\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recetas"] ?? $this->getContext($context, "recetas")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            // line 9
            echo "\t<li class=\"elemento\">
\t\t<header>
\t\t\t<h3><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
            echo "</a></h3>
\t\t</header>
\t\t<img class=\"imgPeq\" src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "imagen", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
            echo "\" />
\t\t<div class=\"snippet\">
\t\t\t<p style=\"margin-left: 5px;margin-right: 5px;\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "detalles", array(0 => 50), "method"), "html", null, true);
            echo "</p>
\t\t\t<p><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">Seguir leyendo...</a></p>
\t\t</div>
\t\t<footer class=\"meta\">
\t\t\t<p>Comentarios: -</p>
\t\t</footer>
\t</li>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "\t<p>No hay entradas en este blog</p>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</ul>
";
        
        $__internal_bbf7f3abe93943db092d994328a0e46ac69166b2105f8a5652ef57c58df99a72->leave($__internal_bbf7f3abe93943db092d994328a0e46ac69166b2105f8a5652ef57c58df99a72_prof);

    }

    public function getTemplateName()
    {
        return "@CookerCooking/Cook/recetas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 25,  96 => 23,  84 => 16,  80 => 15,  73 => 13,  66 => 11,  62 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Cook/recetas.html.twig #}
{% extends 'CookerCookingBundle::layout.html.twig' %}
{% block title %}Lista de Recetas{% endblock %}

{% block body %}

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
\t{% else %}
\t<p>No hay entradas en este blog</p>
\t{% endfor %}
</ul>
{% endblock %}
", "@CookerCooking/Cook/recetas.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\recetas.html.twig");
    }
}
