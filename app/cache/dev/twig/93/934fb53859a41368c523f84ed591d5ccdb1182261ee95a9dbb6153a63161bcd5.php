<?php

/* CookerCookingBundle:Cook:recetas.html.twig */
class __TwigTemplate_bb24fcd05d3f995dfb7fb87651faf3b410d034530772bd2f631e33cb67d5396e extends Twig_Template
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
        $__internal_b10bf3d7091cc4ca202cb42e65f62a53b896e07b51d2145dc4e100ccb5d9ebe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b10bf3d7091cc4ca202cb42e65f62a53b896e07b51d2145dc4e100ccb5d9ebe8->enter($__internal_b10bf3d7091cc4ca202cb42e65f62a53b896e07b51d2145dc4e100ccb5d9ebe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:recetas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b10bf3d7091cc4ca202cb42e65f62a53b896e07b51d2145dc4e100ccb5d9ebe8->leave($__internal_b10bf3d7091cc4ca202cb42e65f62a53b896e07b51d2145dc4e100ccb5d9ebe8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_886f73a87daccd6e17739700ec65e0b69b2e8a57f01318274ea1cb1a09714ce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_886f73a87daccd6e17739700ec65e0b69b2e8a57f01318274ea1cb1a09714ce9->enter($__internal_886f73a87daccd6e17739700ec65e0b69b2e8a57f01318274ea1cb1a09714ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Recetas";
        
        $__internal_886f73a87daccd6e17739700ec65e0b69b2e8a57f01318274ea1cb1a09714ce9->leave($__internal_886f73a87daccd6e17739700ec65e0b69b2e8a57f01318274ea1cb1a09714ce9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_80d5689daa51c5e6d280899f2c1685d15fc2b001e10526a44444a8d706e7e679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d5689daa51c5e6d280899f2c1685d15fc2b001e10526a44444a8d706e7e679->enter($__internal_80d5689daa51c5e6d280899f2c1685d15fc2b001e10526a44444a8d706e7e679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recetas"] ?? $this->getContext($context, "recetas")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            // line 7
            echo "        <article class=\"receta\">
            <header>
                <h2><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_show", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
            echo "</a></h2>
            </header>

            <div class=\"snippet\">
                <p>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "detalles", array(0 => 200), "method"), "html", null, true);
            echo "</p>
                <p class=\"continue\"><a href=\"";
            // line 14
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
            // line 22
            echo "        <p>No hay entradas en este blog</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_80d5689daa51c5e6d280899f2c1685d15fc2b001e10526a44444a8d706e7e679->leave($__internal_80d5689daa51c5e6d280899f2c1685d15fc2b001e10526a44444a8d706e7e679_prof);

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
        return array (  89 => 22,  76 => 14,  72 => 13,  63 => 9,  59 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
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
