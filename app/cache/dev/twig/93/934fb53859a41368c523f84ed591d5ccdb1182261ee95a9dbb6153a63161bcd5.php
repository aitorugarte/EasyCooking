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
        $__internal_9ad73e334bd2f9685720081de2d3b6992ad1cdc03b724ff1e23333540498c948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ad73e334bd2f9685720081de2d3b6992ad1cdc03b724ff1e23333540498c948->enter($__internal_9ad73e334bd2f9685720081de2d3b6992ad1cdc03b724ff1e23333540498c948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:recetas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ad73e334bd2f9685720081de2d3b6992ad1cdc03b724ff1e23333540498c948->leave($__internal_9ad73e334bd2f9685720081de2d3b6992ad1cdc03b724ff1e23333540498c948_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4d193a9bd10fc8f172b6e9903bfa676a65d110ffff7b79491d15617d98ba2f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4d193a9bd10fc8f172b6e9903bfa676a65d110ffff7b79491d15617d98ba2f5->enter($__internal_f4d193a9bd10fc8f172b6e9903bfa676a65d110ffff7b79491d15617d98ba2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Recetas";
        
        $__internal_f4d193a9bd10fc8f172b6e9903bfa676a65d110ffff7b79491d15617d98ba2f5->leave($__internal_f4d193a9bd10fc8f172b6e9903bfa676a65d110ffff7b79491d15617d98ba2f5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f00a65f90c8d10e7efac7c11228687fd483984f71f7007cfb2134c7ffd5ea0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f00a65f90c8d10e7efac7c11228687fd483984f71f7007cfb2134c7ffd5ea0e->enter($__internal_9f00a65f90c8d10e7efac7c11228687fd483984f71f7007cfb2134c7ffd5ea0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<ul class=\"lista\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recetas"] ?? $this->getContext($context, "recetas")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            // line 9
            echo "\t<li class=\"elemento\">
            <header>
                <h3><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_show", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
            echo "</a></h3>
            </header>
\t\t\t<img class=\"imgPeq\" src=\"/css/images/";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "id", array()), "html", null, true);
            echo ".jpg\" alt=\"foto\" />
            <div class=\"snippet\">
                <p style=\"margin-left: 5px;margin-right: 5px;\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "detalles", array(0 => 50), "method"), "html", null, true);
            echo "</p>
                <p><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_show", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">Seguir leyendo...</a></p>
            </div>
\t\t\t  <footer class=\"meta\">
                <p>Comentarios: -</p>
            </footer>
\t</li>
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
        
        $__internal_9f00a65f90c8d10e7efac7c11228687fd483984f71f7007cfb2134c7ffd5ea0e->leave($__internal_9f00a65f90c8d10e7efac7c11228687fd483984f71f7007cfb2134c7ffd5ea0e_prof);

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
        return array (  94 => 23,  82 => 16,  78 => 15,  73 => 13,  66 => 11,  62 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
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
    {% for receta in recetas %}
\t<li class=\"elemento\">
            <header>
                <h3><a href=\"{{ path('cooker_cook_show', { 'id': receta.id }) }}\">{{ receta.nombre }}</a></h3>
            </header>
\t\t\t<img class=\"imgPeq\" src=\"/css/images/{{receta.id}}.jpg\" alt=\"foto\" />
            <div class=\"snippet\">
                <p style=\"margin-left: 5px;margin-right: 5px;\">{{ receta.detalles(50) }}</p>
                <p><a href=\"{{ path('cooker_cook_show', { 'id': receta.id }) }}\">Seguir leyendo...</a></p>
            </div>
\t\t\t  <footer class=\"meta\">
                <p>Comentarios: -</p>
            </footer>
\t</li>
    {% else %}
        <p>No hay entradas en este blog</p>
    {% endfor %}
{% endblock %}
", "CookerCookingBundle:Cook:recetas.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/recetas.html.twig");
    }
}
