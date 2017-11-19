<?php

/* @CookerCooking/Cook/principal.html.twig */
class __TwigTemplate_95ab2b2f6c29426fcd6a4b4a192e3def8229cdef994557944288039d1966c1ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "@CookerCooking/Cook/principal.html.twig", 2);
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
        $__internal_412879f25f327b543966aa3b7e03053c85fd17d9bc2b608469a0b499011a8e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_412879f25f327b543966aa3b7e03053c85fd17d9bc2b608469a0b499011a8e0e->enter($__internal_412879f25f327b543966aa3b7e03053c85fd17d9bc2b608469a0b499011a8e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Cook/principal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_412879f25f327b543966aa3b7e03053c85fd17d9bc2b608469a0b499011a8e0e->leave($__internal_412879f25f327b543966aa3b7e03053c85fd17d9bc2b608469a0b499011a8e0e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_be412a1b37f0aeb6842d02d66a9fda4239aeff278123ef4e0a27de988b95a131 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be412a1b37f0aeb6842d02d66a9fda4239aeff278123ef4e0a27de988b95a131->enter($__internal_be412a1b37f0aeb6842d02d66a9fda4239aeff278123ef4e0a27de988b95a131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "P&aacutegina de bienvenida";
        
        $__internal_be412a1b37f0aeb6842d02d66a9fda4239aeff278123ef4e0a27de988b95a131->leave($__internal_be412a1b37f0aeb6842d02d66a9fda4239aeff278123ef4e0a27de988b95a131_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7de944691691b2dd2dc5f2398b57799957ed406cd6608d1b9850edd95cc90326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de944691691b2dd2dc5f2398b57799957ed406cd6608d1b9850edd95cc90326->enter($__internal_7de944691691b2dd2dc5f2398b57799957ed406cd6608d1b9850edd95cc90326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t";
        // line 7
        $context["cont"] = 0;
        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recetas"] ?? $this->getContext($context, "recetas")));
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            // line 9
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recetas"] ?? $this->getContext($context, "recetas")));
            foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
                if ((($context["cont"] ?? $this->getContext($context, "cont")) < 2)) {
                    // line 10
                    echo "\t";
                    if (($this->getAttribute($context["receta"], "tipo_plato", array()) == "Primero")) {
                        // line 11
                        echo "<article class=\"receta\">
\t<div class=\"date\" style=\"text-align:right\"><time datetime=\"";
                        // line 12
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["receta"], "date", array()), "c"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["receta"], "date", array()), "l j F Y"), "html", null, true);
                        echo "</time></div>
\t<header>
\t\t<h2><a href=\"";
                        // line 14
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_show", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
                        echo "</a></h2>
\t</header>

\t<div class=\"snippet\">
\t\t<p>";
                        // line 18
                        echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "detalles", array(0 => 200), "method"), "html", null, true);
                        echo "</p>
\t\t<p class=\"continue\"><a href=\"";
                        // line 19
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_show", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
                        echo "\">Seguir leyendo...</a></p>
\t</div>

\t<footer class=\"meta\">
\t\t<p>Comentarios: -</p>
\t</footer>
</article>
\t\t";
                        // line 26
                        $context["cont"] = (($context["cont"] ?? $this->getContext($context, "cont")) + 1);
                        // line 27
                        echo "\t";
                    }
                    // line 28
                    echo "      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
";
        
        $__internal_7de944691691b2dd2dc5f2398b57799957ed406cd6608d1b9850edd95cc90326->leave($__internal_7de944691691b2dd2dc5f2398b57799957ed406cd6608d1b9850edd95cc90326_prof);

    }

    public function getTemplateName()
    {
        return "@CookerCooking/Cook/principal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 31,  117 => 29,  110 => 28,  107 => 27,  105 => 26,  95 => 19,  91 => 18,  82 => 14,  75 => 12,  72 => 11,  69 => 10,  63 => 9,  58 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
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
{% block title %}P&aacutegina de bienvenida{% endblock %}

{% block body %}

\t{% set cont = 0 %}
    {% for receta in recetas %}
\t{% for receta in recetas if cont < 2 %}
\t{% if receta.tipo_plato == 'Primero' %}
<article class=\"receta\">
\t<div class=\"date\" style=\"text-align:right\"><time datetime=\"{{ receta.date|date('c') }}\">{{ receta.date|date('l j F Y') }}</time></div>
\t<header>
\t\t<h2><a href=\"{{ path('cooker_cook_show', { 'id': receta.id }) }}\">{{ receta.nombre }}</a></h2>
\t</header>

\t<div class=\"snippet\">
\t\t<p>{{ receta.detalles(200) }}</p>
\t\t<p class=\"continue\"><a href=\"{{ path('cooker_cook_show', { 'id': receta.id }) }}\">Seguir leyendo...</a></p>
\t</div>

\t<footer class=\"meta\">
\t\t<p>Comentarios: -</p>
\t</footer>
</article>
\t\t{% set cont = cont + 1 %}
\t{% endif %}
      {% endfor %}

{% endfor %}

{% endblock %}
", "@CookerCooking/Cook/principal.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\principal.html.twig");
    }
}
