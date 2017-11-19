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
        $__internal_cf0669cf71e9f13db20660eb5fc1b5b0a60fd2a8edfa31750f16c5c6a0b42b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf0669cf71e9f13db20660eb5fc1b5b0a60fd2a8edfa31750f16c5c6a0b42b6e->enter($__internal_cf0669cf71e9f13db20660eb5fc1b5b0a60fd2a8edfa31750f16c5c6a0b42b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:principal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf0669cf71e9f13db20660eb5fc1b5b0a60fd2a8edfa31750f16c5c6a0b42b6e->leave($__internal_cf0669cf71e9f13db20660eb5fc1b5b0a60fd2a8edfa31750f16c5c6a0b42b6e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_42863c9a590f2a160e9d19ccbc263e8a22c19df9e0b44ab073956aea769a108a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42863c9a590f2a160e9d19ccbc263e8a22c19df9e0b44ab073956aea769a108a->enter($__internal_42863c9a590f2a160e9d19ccbc263e8a22c19df9e0b44ab073956aea769a108a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "P&aacutegina de bienvenida";
        
        $__internal_42863c9a590f2a160e9d19ccbc263e8a22c19df9e0b44ab073956aea769a108a->leave($__internal_42863c9a590f2a160e9d19ccbc263e8a22c19df9e0b44ab073956aea769a108a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f60137d8a8eed615ead448dbbc6479b514ac70ef6d551bcb0b1718ce474a5aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f60137d8a8eed615ead448dbbc6479b514ac70ef6d551bcb0b1718ce474a5aa9->enter($__internal_f60137d8a8eed615ead448dbbc6479b514ac70ef6d551bcb0b1718ce474a5aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f60137d8a8eed615ead448dbbc6479b514ac70ef6d551bcb0b1718ce474a5aa9->leave($__internal_f60137d8a8eed615ead448dbbc6479b514ac70ef6d551bcb0b1718ce474a5aa9_prof);

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
", "CookerCookingBundle:Cook:principal.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\principal.html.twig");
    }
}
