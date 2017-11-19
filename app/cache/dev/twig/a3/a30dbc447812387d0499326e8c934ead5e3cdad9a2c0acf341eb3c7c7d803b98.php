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
        $__internal_89fc00b8585faf84f6593679dddcb74b63362dfc11d2cb7503c3e8b6292a730d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89fc00b8585faf84f6593679dddcb74b63362dfc11d2cb7503c3e8b6292a730d->enter($__internal_89fc00b8585faf84f6593679dddcb74b63362dfc11d2cb7503c3e8b6292a730d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Cook/recetas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89fc00b8585faf84f6593679dddcb74b63362dfc11d2cb7503c3e8b6292a730d->leave($__internal_89fc00b8585faf84f6593679dddcb74b63362dfc11d2cb7503c3e8b6292a730d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1cee4c42f1d9c859ca06ab98975776dac9c7b8f8237cbc7c31602a878f834065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cee4c42f1d9c859ca06ab98975776dac9c7b8f8237cbc7c31602a878f834065->enter($__internal_1cee4c42f1d9c859ca06ab98975776dac9c7b8f8237cbc7c31602a878f834065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Recetas";
        
        $__internal_1cee4c42f1d9c859ca06ab98975776dac9c7b8f8237cbc7c31602a878f834065->leave($__internal_1cee4c42f1d9c859ca06ab98975776dac9c7b8f8237cbc7c31602a878f834065_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_26d84645a7e22c0209ad8305734a4bca5092a0181910e7114d39c90d11b16bdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d84645a7e22c0209ad8305734a4bca5092a0181910e7114d39c90d11b16bdf->enter($__internal_26d84645a7e22c0209ad8305734a4bca5092a0181910e7114d39c90d11b16bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_26d84645a7e22c0209ad8305734a4bca5092a0181910e7114d39c90d11b16bdf->leave($__internal_26d84645a7e22c0209ad8305734a4bca5092a0181910e7114d39c90d11b16bdf_prof);

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
", "@CookerCooking/Cook/recetas.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\recetas.html.twig");
    }
}
