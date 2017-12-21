<?php

/* CookerCookingBundle:Cook:principal.html.twig */
class __TwigTemplate_e7953e4481515de67b997be8c74d703d22e883a9ce38553915edfacc1cd3434b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::sidebar.html.twig", "CookerCookingBundle:Cook:principal.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CookerCookingBundle::sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe537cf300b5bdc298d025483f3fd4e8e9bf29bd8e90da003ab175f19be9ee43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe537cf300b5bdc298d025483f3fd4e8e9bf29bd8e90da003ab175f19be9ee43->enter($__internal_fe537cf300b5bdc298d025483f3fd4e8e9bf29bd8e90da003ab175f19be9ee43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:principal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe537cf300b5bdc298d025483f3fd4e8e9bf29bd8e90da003ab175f19be9ee43->leave($__internal_fe537cf300b5bdc298d025483f3fd4e8e9bf29bd8e90da003ab175f19be9ee43_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca0a23d1175b1d3d2293c7f968b1122915f08fc09e68e99d3e8ab4db16ac50ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca0a23d1175b1d3d2293c7f968b1122915f08fc09e68e99d3e8ab4db16ac50ba->enter($__internal_ca0a23d1175b1d3d2293c7f968b1122915f08fc09e68e99d3e8ab4db16ac50ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Pagina de bienvenida", array(), "messages");
        
        $__internal_ca0a23d1175b1d3d2293c7f968b1122915f08fc09e68e99d3e8ab4db16ac50ba->leave($__internal_ca0a23d1175b1d3d2293c7f968b1122915f08fc09e68e99d3e8ab4db16ac50ba_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8aca325cbf852691bde295ed2c9a49e7c655108ef2f25e0e4352726d9be5c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8aca325cbf852691bde295ed2c9a49e7c655108ef2f25e0e4352726d9be5c35->enter($__internal_f8aca325cbf852691bde295ed2c9a49e7c655108ef2f25e0e4352726d9be5c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
   ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recetas"] ?? $this->getContext($context, "recetas")));
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            // line 8
            echo "
\t<div class=\"date\" style=\"text-align:right\"><time datetime=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["receta"], "date", array()), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["receta"], "date", array()), "l j F Y"), "html", null, true);
            echo "</time></div>
\t<header>
\t\t<h2><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["receta"], "nombre", array())), "html", null, true);
            echo "</a></h2>
\t</header>

\t<div class=\"snippet\">
\t\t<p>";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["receta"], "detalles", array(0 => 200), "method")), "html", null, true);
            echo "</p>
\t\t<p class=\"continue\"><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Seguir leyendo...", array(), "messages");
            echo "</a></p>
\t</div>

\t<footer class=\"meta\">
\t\t<p>";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Comentarios: -", array(), "messages");
            echo "</p>
\t</footer>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f8aca325cbf852691bde295ed2c9a49e7c655108ef2f25e0e4352726d9be5c35->leave($__internal_f8aca325cbf852691bde295ed2c9a49e7c655108ef2f25e0e4352726d9be5c35_prof);

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
        return array (  92 => 20,  83 => 16,  79 => 15,  70 => 11,  63 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
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
{% extends 'CookerCookingBundle::sidebar.html.twig' %}
{% block title %}{% trans %}Pagina de bienvenida{% endtrans %}{% endblock %}

{% block body %}

   {% for receta in recetas %}

\t<div class=\"date\" style=\"text-align:right\"><time datetime=\"{{ receta.date|date('c') }}\">{{ receta.date|date('l j F Y') }}</time></div>
\t<header>
\t\t<h2><a href=\"{{ path('cooker_cook_showReceta', { 'id': receta.id }) }}\">{{ receta.nombre|trans }}</a></h2>
\t</header>

\t<div class=\"snippet\">
\t\t<p>{{ receta.detalles(200)|trans }}</p>
\t\t<p class=\"continue\"><a href=\"{{ path('cooker_cook_showReceta', { 'id': receta.id }) }}\">{% trans %}Seguir leyendo...{% endtrans %}</a></p>
\t</div>

\t<footer class=\"meta\">
\t\t<p>{% trans %}Comentarios: -{% endtrans %}</p>
\t</footer>

{% endfor %}
{% endblock %}
", "CookerCookingBundle:Cook:principal.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\principal.html.twig");
    }
}
