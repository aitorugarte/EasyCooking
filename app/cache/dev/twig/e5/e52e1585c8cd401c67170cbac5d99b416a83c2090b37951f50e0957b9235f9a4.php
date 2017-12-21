<?php

/* CookerCookingBundle:Cook:platos.html.twig */
class __TwigTemplate_3f1e2c58ebf8cdb0fe8d884c95a63388d1fa6e31881a91512a298abf469742d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::sidebar.html.twig", "CookerCookingBundle:Cook:platos.html.twig", 2);
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
        $__internal_de9b9738f39d891f84202eb0ea9339dbc58ded22afb71398596066d30c019a11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de9b9738f39d891f84202eb0ea9339dbc58ded22afb71398596066d30c019a11->enter($__internal_de9b9738f39d891f84202eb0ea9339dbc58ded22afb71398596066d30c019a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:platos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de9b9738f39d891f84202eb0ea9339dbc58ded22afb71398596066d30c019a11->leave($__internal_de9b9738f39d891f84202eb0ea9339dbc58ded22afb71398596066d30c019a11_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfa26944ded983418018684d597b084c4cc609ac1c0592f4e90f1b8093404998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfa26944ded983418018684d597b084c4cc609ac1c0592f4e90f1b8093404998->enter($__internal_cfa26944ded983418018684d597b084c4cc609ac1c0592f4e90f1b8093404998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Tipos", array(), "messages");
        
        $__internal_cfa26944ded983418018684d597b084c4cc609ac1c0592f4e90f1b8093404998->leave($__internal_cfa26944ded983418018684d597b084c4cc609ac1c0592f4e90f1b8093404998_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3363a54ac94b7bf7efcdefadde7b166e5fc62f6451e38c31ca59852bb388723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3363a54ac94b7bf7efcdefadde7b166e5fc62f6451e38c31ca59852bb388723->enter($__internal_a3363a54ac94b7bf7efcdefadde7b166e5fc62f6451e38c31ca59852bb388723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t
\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["platos"] ?? $this->getContext($context, "platos")));
        foreach ($context['_seq'] as $context["_key"] => $context["plato"]) {
            // line 8
            echo "\t";
            $context["tipo"] = $this->getAttribute($context["plato"], "nombre", array());
            // line 9
            echo "
\t<h2>Recetas para el tipo: ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["plato"], "nombre", array()), "html", null, true);
            echo "</h2>
\t<ul>
\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recetas"] ?? $this->getContext($context, "recetas")));
            foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
                if ((($context["tipo"] ?? $this->getContext($context, "tipo")) == $this->getAttribute($this->getAttribute($context["receta"], "tipo_plato", array()), "nombre", array()))) {
                    // line 13
                    echo "
\t<li><a href=\"";
                    // line 14
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
                    echo "</a></li>
\t
\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t</ul>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t

";
        
        $__internal_a3363a54ac94b7bf7efcdefadde7b166e5fc62f6451e38c31ca59852bb388723->leave($__internal_a3363a54ac94b7bf7efcdefadde7b166e5fc62f6451e38c31ca59852bb388723_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle:Cook:platos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 19,  91 => 17,  79 => 14,  76 => 13,  71 => 12,  66 => 10,  63 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Cook/platos.html.twig #}
{% extends 'CookerCookingBundle::sidebar.html.twig' %}
{% block title %}{% trans %}Tipos{% endtrans %}{% endblock %}

{% block body %}
\t
\t{% for plato in platos %}
\t{% set tipo = plato.nombre %}

\t<h2>Recetas para el tipo: {{ plato.nombre }}</h2>
\t<ul>
\t{% for receta in recetas if tipo == receta.tipo_plato.nombre %}

\t<li><a href=\"{{ path('cooker_cook_showReceta', { 'id': receta.id }) }}\">{{ receta.nombre }}</a></li>
\t
\t{% endfor %}
\t</ul>
\t{% endfor %}
\t

{% endblock %}
", "CookerCookingBundle:Cook:platos.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\platos.html.twig");
    }
}
