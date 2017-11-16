<?php

/* CookerCookingBundle:Cook:recetas.html.twig */
class __TwigTemplate_d5b0768a46e788e8713115e34c55801b019d9b9c0ea58e7547b4d1b47f28b224 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "CookerCookingBundle:Cook:recetas.html.twig", 2);
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
        $__internal_ecd62157260c217d4049c270b28e58a72b4d5aaa44ec4d5c86d040239f70a66c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd62157260c217d4049c270b28e58a72b4d5aaa44ec4d5c86d040239f70a66c->enter($__internal_ecd62157260c217d4049c270b28e58a72b4d5aaa44ec4d5c86d040239f70a66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:recetas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecd62157260c217d4049c270b28e58a72b4d5aaa44ec4d5c86d040239f70a66c->leave($__internal_ecd62157260c217d4049c270b28e58a72b4d5aaa44ec4d5c86d040239f70a66c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_68e718d0b6c1dd29f517cd0b63303a9bebb240ba0f16cb8d60332e938f1f8056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e718d0b6c1dd29f517cd0b63303a9bebb240ba0f16cb8d60332e938f1f8056->enter($__internal_68e718d0b6c1dd29f517cd0b63303a9bebb240ba0f16cb8d60332e938f1f8056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Recetas";
        
        $__internal_68e718d0b6c1dd29f517cd0b63303a9bebb240ba0f16cb8d60332e938f1f8056->leave($__internal_68e718d0b6c1dd29f517cd0b63303a9bebb240ba0f16cb8d60332e938f1f8056_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_32f9a8f59d0d1f36e5b92d0004e8c236a34500493734d45ef3241219cc44c91e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f9a8f59d0d1f36e5b92d0004e8c236a34500493734d45ef3241219cc44c91e->enter($__internal_32f9a8f59d0d1f36e5b92d0004e8c236a34500493734d45ef3241219cc44c91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recetas"] ?? $this->getContext($context, "recetas")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            // line 7
            echo "        <article class=\"receta\">
           <!-- <div class=\"date\"><time datetime=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["receta"], "date", array()), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["receta"], "date", array()), "l j F Y"), "html", null, true);
            echo "</time></div> -->
            <header>
                <h2><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_show", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
            echo "</a></h2>
            </header>

            <div class=\"snippet\">
                <p>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "detalles", array(0 => 200), "method"), "html", null, true);
            echo "</p>
                <p class=\"continue\"><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_show", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">Seguir leyendo...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comentarios: -</p>
            </footer>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "        <p>No hay entradas en este blog</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_32f9a8f59d0d1f36e5b92d0004e8c236a34500493734d45ef3241219cc44c91e->leave($__internal_32f9a8f59d0d1f36e5b92d0004e8c236a34500493734d45ef3241219cc44c91e_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle:Cook:recetas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 23,  82 => 15,  78 => 14,  69 => 10,  62 => 8,  59 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
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
    {% for receta in recetas %}
        <article class=\"receta\">
           <!-- <div class=\"date\"><time datetime=\"{{ receta.date|date('c') }}\">{{ receta.date|date('l j F Y') }}</time></div> -->
            <header>
                <h2><a href=\"{{ path('cooker_cook_show', { 'id': receta.id }) }}\">{{ receta.nombre }}</a></h2>
            </header>

            <div class=\"snippet\">
                <p>{{ receta.detalles(200) }}</p>
                <p class=\"continue\"><a href=\"{{ path('cooker_cook_show', { 'id': receta.id }) }}\">Seguir leyendo...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comentarios: -</p>
            </footer>
        </article>
    {% else %}
        <p>No hay entradas en este blog</p>
    {% endfor %}
{% endblock %}
", "CookerCookingBundle:Cook:recetas.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/recetas.html.twig");
    }
}
