<?php

/* CookerCookingBundle:Cook:principal.html.twig */
class __TwigTemplate_f36e70e7f7fa4cdbecea0a59bab7085492aee1d513268593a1091b25caf631f1 extends Twig_Template
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
        $__internal_8b399a77e3afbcb1968d908019aa4e6f61096badb79d97b97d23cbcf229f6f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b399a77e3afbcb1968d908019aa4e6f61096badb79d97b97d23cbcf229f6f79->enter($__internal_8b399a77e3afbcb1968d908019aa4e6f61096badb79d97b97d23cbcf229f6f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:principal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b399a77e3afbcb1968d908019aa4e6f61096badb79d97b97d23cbcf229f6f79->leave($__internal_8b399a77e3afbcb1968d908019aa4e6f61096badb79d97b97d23cbcf229f6f79_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2cbed53b2e5f58e2a123ed34b93aa0f459a38f3fe148527ab20eec8cdff8ec12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cbed53b2e5f58e2a123ed34b93aa0f459a38f3fe148527ab20eec8cdff8ec12->enter($__internal_2cbed53b2e5f58e2a123ed34b93aa0f459a38f3fe148527ab20eec8cdff8ec12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "P&aacutegina de bienvenida";
        
        $__internal_2cbed53b2e5f58e2a123ed34b93aa0f459a38f3fe148527ab20eec8cdff8ec12->leave($__internal_2cbed53b2e5f58e2a123ed34b93aa0f459a38f3fe148527ab20eec8cdff8ec12_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd460c5ba750c8b7e16ef653ead6e39509244033a078a8f5db27b66300ec60ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd460c5ba750c8b7e16ef653ead6e39509244033a078a8f5db27b66300ec60ce->enter($__internal_dd460c5ba750c8b7e16ef653ead6e39509244033a078a8f5db27b66300ec60ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
 ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["platos"] ?? $this->getContext($context, "platos")));
        foreach ($context['_seq'] as $context["_key"] => $context["plato"]) {
            // line 8
            echo "   ";
            $context["break"] = 0;
            // line 9
            echo "   ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recetas"] ?? $this->getContext($context, "recetas")));
            foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
                if ((($context["break"] ?? $this->getContext($context, "break")) < 2)) {
                    // line 10
                    echo "   ";
                    if (($this->getAttribute($this->getAttribute($context["receta"], "tipo_plato", array()), "id", array()) == $this->getAttribute($context["plato"], "id", array()))) {
                        // line 11
                        echo "
<article class=\"receta\">
\t<div class=\"date\" style=\"text-align:right\"><time datetime=\"";
                        // line 13
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["receta"], "date", array()), "c"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["receta"], "date", array()), "l j F Y"), "html", null, true);
                        echo "</time></div>
\t<header>
\t\t<h2><a href=\"";
                        // line 15
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
                        echo "</a></h2>
\t</header>

\t<div class=\"snippet\">
\t\t<p>";
                        // line 19
                        echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "detalles", array(0 => 200), "method"), "html", null, true);
                        echo "</p>
\t\t<p class=\"continue\"><a href=\"";
                        // line 20
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
                        echo "\">Seguir leyendo...</a></p>
\t</div>

\t<footer class=\"meta\">
\t\t<p>Comentarios: -</p>
\t</footer>
</article>

";
                        // line 28
                        $context["break"] = (($context["break"] ?? $this->getContext($context, "break")) + 1);
                    }
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_dd460c5ba750c8b7e16ef653ead6e39509244033a078a8f5db27b66300ec60ce->leave($__internal_dd460c5ba750c8b7e16ef653ead6e39509244033a078a8f5db27b66300ec60ce_prof);

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
        return array (  107 => 28,  96 => 20,  92 => 19,  83 => 15,  76 => 13,  72 => 11,  69 => 10,  63 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
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

 {% for plato in platos %}
   {% set break = 0 %}
   {% for receta in recetas if break < 2 %}
   {% if receta.tipo_plato.id == plato.id %}

<article class=\"receta\">
\t<div class=\"date\" style=\"text-align:right\"><time datetime=\"{{ receta.date|date('c') }}\">{{ receta.date|date('l j F Y') }}</time></div>
\t<header>
\t\t<h2><a href=\"{{ path('cooker_cook_showReceta', { 'id': receta.id }) }}\">{{ receta.nombre }}</a></h2>
\t</header>

\t<div class=\"snippet\">
\t\t<p>{{ receta.detalles(200) }}</p>
\t\t<p class=\"continue\"><a href=\"{{ path('cooker_cook_showReceta', { 'id': receta.id }) }}\">Seguir leyendo...</a></p>
\t</div>

\t<footer class=\"meta\">
\t\t<p>Comentarios: -</p>
\t</footer>
</article>

{% set break = break + 1 %}
{% endif %}
{% endfor %}
{% endfor %}
{% endblock %}
", "CookerCookingBundle:Cook:principal.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\principal.html.twig");
    }
}
