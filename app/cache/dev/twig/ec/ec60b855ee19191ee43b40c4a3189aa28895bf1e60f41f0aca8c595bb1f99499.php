<?php

/* @CookerCooking/Cook/list.html.twig */
class __TwigTemplate_77103592748c92eea3d814b176bca2180cb4102e4556f6594405b9b0175b8e4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "@CookerCooking/Cook/list.html.twig", 2);
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
        $__internal_0188be49fadfdb3fbe59d804befebc4d8c424efa7df1f9ef988464ef9bd080c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0188be49fadfdb3fbe59d804befebc4d8c424efa7df1f9ef988464ef9bd080c0->enter($__internal_0188be49fadfdb3fbe59d804befebc4d8c424efa7df1f9ef988464ef9bd080c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Cook/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0188be49fadfdb3fbe59d804befebc4d8c424efa7df1f9ef988464ef9bd080c0->leave($__internal_0188be49fadfdb3fbe59d804befebc4d8c424efa7df1f9ef988464ef9bd080c0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2feb0378f675da32b44b4bc3e4d77f1bc9aa25f74dfbcbd8c178861c88792f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2feb0378f675da32b44b4bc3e4d77f1bc9aa25f74dfbcbd8c178861c88792f1->enter($__internal_b2feb0378f675da32b44b4bc3e4d77f1bc9aa25f74dfbcbd8c178861c88792f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Recetas";
        
        $__internal_b2feb0378f675da32b44b4bc3e4d77f1bc9aa25f74dfbcbd8c178861c88792f1->leave($__internal_b2feb0378f675da32b44b4bc3e4d77f1bc9aa25f74dfbcbd8c178861c88792f1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6470b9fdd7bcc374cf9035c1e72b464e3067101760e63bece9e84514a8891f5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6470b9fdd7bcc374cf9035c1e72b464e3067101760e63bece9e84514a8891f5b->enter($__internal_6470b9fdd7bcc374cf9035c1e72b464e3067101760e63bece9e84514a8891f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recetas"] ?? $this->getContext($context, "recetas")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            // line 7
            echo "        <article class=\"receta\">
           <!-- <div class=\"date\"><time datetime=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["receta"], "date", array()), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["receta"], "date", array()), "l j F Y"), "html", null, true);
            echo "</time></div> -->
            <header>
                <h2><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_show", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
            echo "</a></h2>
            </header>

            <div class=\"snippet\">
                <p>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "detalles", array(0 => 200), "method"), "html", null, true);
            echo "</p>
                <p class=\"continue\"><a href=\"";
            // line 15
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
            // line 23
            echo "        <p>No hay entradas en este blog</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6470b9fdd7bcc374cf9035c1e72b464e3067101760e63bece9e84514a8891f5b->leave($__internal_6470b9fdd7bcc374cf9035c1e72b464e3067101760e63bece9e84514a8891f5b_prof);

    }

    public function getTemplateName()
    {
        return "@CookerCooking/Cook/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 23,  82 => 15,  78 => 14,  69 => 10,  62 => 8,  59 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Cook/list.html.twig #}
{% extends 'CookerCookingBundle::layout.html.twig' %}
{% block title %}Lista de Recetas{% endblock %}

{% block body %}
    {% for receta in recetas %}
        <article class=\"receta\">
           <!-- <div class=\"date\"><time datetime=\"{{ receta.date|date('c') }}\">{{ receta.date|date('l j F Y') }}</time></div> -->
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
", "@CookerCooking/Cook/list.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\list.html.twig");
    }
}
