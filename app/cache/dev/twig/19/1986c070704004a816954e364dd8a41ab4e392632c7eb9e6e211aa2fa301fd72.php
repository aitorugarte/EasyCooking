<?php

/* @CookerCooking/Cook/ingredientes.html.twig */
class __TwigTemplate_a1f8e1a1608df86e73bbf0e77e04648aa234d9f7459a6b3dddaf69860031287a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "@CookerCooking/Cook/ingredientes.html.twig", 2);
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
        $__internal_0c477c287e6ed9a425e2aabda601bfc809c90c29e76d021f3a2c35947f2bfd44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c477c287e6ed9a425e2aabda601bfc809c90c29e76d021f3a2c35947f2bfd44->enter($__internal_0c477c287e6ed9a425e2aabda601bfc809c90c29e76d021f3a2c35947f2bfd44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Cook/ingredientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c477c287e6ed9a425e2aabda601bfc809c90c29e76d021f3a2c35947f2bfd44->leave($__internal_0c477c287e6ed9a425e2aabda601bfc809c90c29e76d021f3a2c35947f2bfd44_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_530968f538f37e5ce6bb1a27c5c502749cfea5d7e95228077897c30f4816ea08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_530968f538f37e5ce6bb1a27c5c502749cfea5d7e95228077897c30f4816ea08->enter($__internal_530968f538f37e5ce6bb1a27c5c502749cfea5d7e95228077897c30f4816ea08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Ingredientes";
        
        $__internal_530968f538f37e5ce6bb1a27c5c502749cfea5d7e95228077897c30f4816ea08->leave($__internal_530968f538f37e5ce6bb1a27c5c502749cfea5d7e95228077897c30f4816ea08_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fdbfec7da4f57a56417520b1f8a2c50f4f6fdf59d415598ba30fe9bf6a364a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fdbfec7da4f57a56417520b1f8a2c50f4f6fdf59d415598ba30fe9bf6a364a2->enter($__internal_1fdbfec7da4f57a56417520b1f8a2c50f4f6fdf59d415598ba30fe9bf6a364a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ingredientes"] ?? $this->getContext($context, "ingredientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ingrediente"]) {
            // line 7
            echo "        <article class=\"receta\">
            <header>
                <h2>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingrediente"], "nombre", array()), "html", null, true);
            echo "</h2>
            </header>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingrediente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1fdbfec7da4f57a56417520b1f8a2c50f4f6fdf59d415598ba30fe9bf6a364a2->leave($__internal_1fdbfec7da4f57a56417520b1f8a2c50f4f6fdf59d415598ba30fe9bf6a364a2_prof);

    }

    public function getTemplateName()
    {
        return "@CookerCooking/Cook/ingredientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 9,  58 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Cook/ingredientes.html.twig #}
{% extends 'CookerCookingBundle::layout.html.twig' %}
{% block title %}Lista de Ingredientes{% endblock %}

{% block body %}
    {% for ingrediente in ingredientes %}
        <article class=\"receta\">
            <header>
                <h2>{{ ingrediente.nombre }}</h2>
            </header>
    {% endfor %}
{% endblock %}
", "@CookerCooking/Cook/ingredientes.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\ingredientes.html.twig");
    }
}
