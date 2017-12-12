<?php

/* CookerCookingBundle:Cook:showPlato.html.twig */
class __TwigTemplate_c6fd63b26532686901519b757f0cfdb08711bc7b4519cdf41c201f25136fb6df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "CookerCookingBundle:Cook:showPlato.html.twig", 2);
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
        $__internal_b0d603cdbe4b61c89682321629f40e67499afce63dadac31dbd0ca6aafb2cc3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d603cdbe4b61c89682321629f40e67499afce63dadac31dbd0ca6aafb2cc3d->enter($__internal_b0d603cdbe4b61c89682321629f40e67499afce63dadac31dbd0ca6aafb2cc3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:showPlato.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0d603cdbe4b61c89682321629f40e67499afce63dadac31dbd0ca6aafb2cc3d->leave($__internal_b0d603cdbe4b61c89682321629f40e67499afce63dadac31dbd0ca6aafb2cc3d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a44d8b4641b39ac7ca441f4c621ae36cb3f07bb608c9d83350ae02e1bda7157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a44d8b4641b39ac7ca441f4c621ae36cb3f07bb608c9d83350ae02e1bda7157->enter($__internal_9a44d8b4641b39ac7ca441f4c621ae36cb3f07bb608c9d83350ae02e1bda7157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["plato"] ?? $this->getContext($context, "plato")), "nombre", array()), "html", null, true);
        
        $__internal_9a44d8b4641b39ac7ca441f4c621ae36cb3f07bb608c9d83350ae02e1bda7157->leave($__internal_9a44d8b4641b39ac7ca441f4c621ae36cb3f07bb608c9d83350ae02e1bda7157_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b8291232e391f2e2feb834dd370c959ba2a513f2e9a61476e6d64034294bdd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b8291232e391f2e2feb834dd370c959ba2a513f2e9a61476e6d64034294bdd4->enter($__internal_0b8291232e391f2e2feb834dd370c959ba2a513f2e9a61476e6d64034294bdd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0b8291232e391f2e2feb834dd370c959ba2a513f2e9a61476e6d64034294bdd4->leave($__internal_0b8291232e391f2e2feb834dd370c959ba2a513f2e9a61476e6d64034294bdd4_prof);

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
", "CookerCookingBundle:Cook:showPlato.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/showPlato.html.twig");
    }
}
