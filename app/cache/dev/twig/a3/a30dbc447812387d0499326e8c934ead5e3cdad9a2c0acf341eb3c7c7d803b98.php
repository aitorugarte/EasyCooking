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
        $__internal_f6f5eee9969c04361a4cbbd6ff37dc87407567291fea01a72c01c39cc24f86a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6f5eee9969c04361a4cbbd6ff37dc87407567291fea01a72c01c39cc24f86a8->enter($__internal_f6f5eee9969c04361a4cbbd6ff37dc87407567291fea01a72c01c39cc24f86a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Cook/recetas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6f5eee9969c04361a4cbbd6ff37dc87407567291fea01a72c01c39cc24f86a8->leave($__internal_f6f5eee9969c04361a4cbbd6ff37dc87407567291fea01a72c01c39cc24f86a8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1dfbb92e393542c7cf7c0aa84c8a3d0d3bc5c36cde12d6180333f3c4948ed3df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dfbb92e393542c7cf7c0aa84c8a3d0d3bc5c36cde12d6180333f3c4948ed3df->enter($__internal_1dfbb92e393542c7cf7c0aa84c8a3d0d3bc5c36cde12d6180333f3c4948ed3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Recetas";
        
        $__internal_1dfbb92e393542c7cf7c0aa84c8a3d0d3bc5c36cde12d6180333f3c4948ed3df->leave($__internal_1dfbb92e393542c7cf7c0aa84c8a3d0d3bc5c36cde12d6180333f3c4948ed3df_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e72ea50026b465fa57b21fedfaa5e05c26533e748b1bc9d43a037f9510193041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e72ea50026b465fa57b21fedfaa5e05c26533e748b1bc9d43a037f9510193041->enter($__internal_e72ea50026b465fa57b21fedfaa5e05c26533e748b1bc9d43a037f9510193041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
 <ul class=\"lista\">
 \t<section class=\"ib-container\" id=\"ib-container\">
\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recetas"] ?? $this->getContext($context, "recetas")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            // line 10
            echo "
\t<article style=\"margin-right:20px; margin-top:20px;\">
\t <li class=\"elemento\">
\t\t<header>
\t\t\t<h3><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
            echo "</a></h3>
\t\t</header>
\t\t<img class=\"imgPeq\" src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "imagen", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
            echo "\" />
\t\t<div class=\"snippet\">
\t\t\t<p style=\"margin-left: 5px;margin-right: 5px;\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "detalles", array(0 => 50), "method"), "html", null, true);
            echo "</p>
\t\t\t<p><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">Seguir leyendo...</a></p>
\t\t</div>
\t\t<footer class=\"meta\">
\t\t\t<p>Comentarios: -</p>
\t\t</footer>
\t</li>
\t</article>
\t
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            echo "\t<p>No hay entradas en este blog</p>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t</section>
</ul>  
\t
";
        
        $__internal_e72ea50026b465fa57b21fedfaa5e05c26533e748b1bc9d43a037f9510193041->leave($__internal_e72ea50026b465fa57b21fedfaa5e05c26533e748b1bc9d43a037f9510193041_prof);

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
        return array (  108 => 30,  101 => 28,  87 => 19,  83 => 18,  76 => 16,  69 => 14,  63 => 10,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
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
 \t<section class=\"ib-container\" id=\"ib-container\">
\t{% for receta in recetas %}

\t<article style=\"margin-right:20px; margin-top:20px;\">
\t <li class=\"elemento\">
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
\t</article>
\t
\t{% else %}
\t<p>No hay entradas en este blog</p>
\t{% endfor %}
\t</section>
</ul>  
\t
{% endblock %}
", "@CookerCooking/Cook/recetas.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\recetas.html.twig");
    }
}
