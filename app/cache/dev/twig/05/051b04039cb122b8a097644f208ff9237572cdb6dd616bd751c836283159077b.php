<?php

/* CookerCookingBundle:Cook:principal.html.twig */
class __TwigTemplate_bcf6618e5f8d1ad4c7bce489a7b949ea5dea32f8a8e75d4639b8af5aa532767f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "CookerCookingBundle:Cook:principal.html.twig", 2);
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
        $__internal_094ac3cbc7df88c4c4e1526c8c9fade735abc4c38cd6e4e4a9999f1ccef1efc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_094ac3cbc7df88c4c4e1526c8c9fade735abc4c38cd6e4e4a9999f1ccef1efc2->enter($__internal_094ac3cbc7df88c4c4e1526c8c9fade735abc4c38cd6e4e4a9999f1ccef1efc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:principal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_094ac3cbc7df88c4c4e1526c8c9fade735abc4c38cd6e4e4a9999f1ccef1efc2->leave($__internal_094ac3cbc7df88c4c4e1526c8c9fade735abc4c38cd6e4e4a9999f1ccef1efc2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5da1536ca5451283e4c7caaefbe511dd44748c2924c24c8b72eb7a14fdfd078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5da1536ca5451283e4c7caaefbe511dd44748c2924c24c8b72eb7a14fdfd078->enter($__internal_b5da1536ca5451283e4c7caaefbe511dd44748c2924c24c8b72eb7a14fdfd078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Página de bienvenida";
        
        $__internal_b5da1536ca5451283e4c7caaefbe511dd44748c2924c24c8b72eb7a14fdfd078->leave($__internal_b5da1536ca5451283e4c7caaefbe511dd44748c2924c24c8b72eb7a14fdfd078_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f267e9d38cf1e3ef611402cf526c41419df43606fb6a7f81f3ed166302dc9c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f267e9d38cf1e3ef611402cf526c41419df43606fb6a7f81f3ed166302dc9c9->enter($__internal_1f267e9d38cf1e3ef611402cf526c41419df43606fb6a7f81f3ed166302dc9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1f267e9d38cf1e3ef611402cf526c41419df43606fb6a7f81f3ed166302dc9c9->leave($__internal_1f267e9d38cf1e3ef611402cf526c41419df43606fb6a7f81f3ed166302dc9c9_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle:Cook:principal.html.twig";
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
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Cook/principal.html.twig #}
{% extends 'CookerCookingBundle::layout.html.twig' %}
{% block title %}Página de bienvenida{% endblock %}

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
", "CookerCookingBundle:Cook:principal.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/principal.html.twig");
    }
}
