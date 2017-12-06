<?php

/* CookerCookingBundle:Cook:showIngr.html.twig */
class __TwigTemplate_60cfce3621be4ee883f3331b225f23f18344831c86626ad855c3806fff7337c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "CookerCookingBundle:Cook:showIngr.html.twig", 2);
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
        $__internal_c76f7460b8b25288fb280793ee015d8e10c92152e749e99f871b791ab0dd5e59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c76f7460b8b25288fb280793ee015d8e10c92152e749e99f871b791ab0dd5e59->enter($__internal_c76f7460b8b25288fb280793ee015d8e10c92152e749e99f871b791ab0dd5e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:showIngr.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c76f7460b8b25288fb280793ee015d8e10c92152e749e99f871b791ab0dd5e59->leave($__internal_c76f7460b8b25288fb280793ee015d8e10c92152e749e99f871b791ab0dd5e59_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d9a7c3da132ed653246c769ef664003770f4860541a26c90acf794eb2da5f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d9a7c3da132ed653246c769ef664003770f4860541a26c90acf794eb2da5f32->enter($__internal_6d9a7c3da132ed653246c769ef664003770f4860541a26c90acf794eb2da5f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["ingrediente"] ?? $this->getContext($context, "ingrediente")), "nombre", array()), "html", null, true);
        
        $__internal_6d9a7c3da132ed653246c769ef664003770f4860541a26c90acf794eb2da5f32->leave($__internal_6d9a7c3da132ed653246c769ef664003770f4860541a26c90acf794eb2da5f32_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f27e4588466771e0ca5347f444359b1657f8bba8b8404fe444044697a58a6c20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f27e4588466771e0ca5347f444359b1657f8bba8b8404fe444044697a58a6c20->enter($__internal_f27e4588466771e0ca5347f444359b1657f8bba8b8404fe444044697a58a6c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<h1>Recetas para el ingrediente: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ingrediente"] ?? $this->getContext($context, "ingrediente")), "nombre", array()), "html", null, true);
        echo "</h1>
\t
\t<ul>
\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recetas"] ?? $this->getContext($context, "recetas")));
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            // line 10
            echo "\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
            echo "</a></li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t</ul>

";
        
        $__internal_f27e4588466771e0ca5347f444359b1657f8bba8b8404fe444044697a58a6c20->leave($__internal_f27e4588466771e0ca5347f444359b1657f8bba8b8404fe444044697a58a6c20_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle:Cook:showIngr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 12,  64 => 10,  60 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Cook/showIngr.html.twig #}
{% extends 'CookerCookingBundle::layout.html.twig' %}
{% block title %}{{ ingrediente.nombre }}{% endblock %}

{% block body %}
\t<h1>Recetas para el ingrediente: {{ ingrediente.nombre }}</h1>
\t
\t<ul>
\t{% for receta in recetas %}
\t<li><a href=\"{{ path('cooker_cook_showReceta', { 'id': receta.id }) }}\">{{ receta.nombre }}</a></li>
\t{% endfor %}
\t</ul>

{% endblock %}
", "CookerCookingBundle:Cook:showIngr.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/showIngr.html.twig");
    }
}
