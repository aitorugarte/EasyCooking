<?php

/* @CookerCooking/Cook/showPlato.html.twig */
class __TwigTemplate_ab86a37e2a3d143b4dd51637b68b717a7d0bbc9254157ba12def9a89964cf3e0 extends Twig_Template
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
        $__internal_9d3da3dd31d9cca7a8510516f15a4a95da30d021365bb64244aacd3ec9a9621b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d3da3dd31d9cca7a8510516f15a4a95da30d021365bb64244aacd3ec9a9621b->enter($__internal_9d3da3dd31d9cca7a8510516f15a4a95da30d021365bb64244aacd3ec9a9621b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Cook/showPlato.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d3da3dd31d9cca7a8510516f15a4a95da30d021365bb64244aacd3ec9a9621b->leave($__internal_9d3da3dd31d9cca7a8510516f15a4a95da30d021365bb64244aacd3ec9a9621b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b59717c14cd2c2ea8dbc992009fad144bedca92188e459e5f8062619e91d6c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b59717c14cd2c2ea8dbc992009fad144bedca92188e459e5f8062619e91d6c1->enter($__internal_4b59717c14cd2c2ea8dbc992009fad144bedca92188e459e5f8062619e91d6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["plato"] ?? $this->getContext($context, "plato")), "nombre", array()), "html", null, true);
        
        $__internal_4b59717c14cd2c2ea8dbc992009fad144bedca92188e459e5f8062619e91d6c1->leave($__internal_4b59717c14cd2c2ea8dbc992009fad144bedca92188e459e5f8062619e91d6c1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_86b5a4ad01aaacac388ff68a1b90a7be62ede4a7a4480c4f5b0550ca163ec403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86b5a4ad01aaacac388ff68a1b90a7be62ede4a7a4480c4f5b0550ca163ec403->enter($__internal_86b5a4ad01aaacac388ff68a1b90a7be62ede4a7a4480c4f5b0550ca163ec403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_86b5a4ad01aaacac388ff68a1b90a7be62ede4a7a4480c4f5b0550ca163ec403->leave($__internal_86b5a4ad01aaacac388ff68a1b90a7be62ede4a7a4480c4f5b0550ca163ec403_prof);

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
