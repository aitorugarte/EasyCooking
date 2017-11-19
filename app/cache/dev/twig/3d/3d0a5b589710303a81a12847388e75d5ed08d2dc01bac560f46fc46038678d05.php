<?php

/* CookerCookingBundle:Cook:ingredientes.html.twig */
class __TwigTemplate_e1daeca4cd348132df78f0b6e05fa4a26d9888e9e7b811dd979139a1cd125d03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "CookerCookingBundle:Cook:ingredientes.html.twig", 2);
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
        $__internal_fdf1b385c3adef8b44348023c857d72e7a8ca29142e2d5bf829249d8bddafdd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdf1b385c3adef8b44348023c857d72e7a8ca29142e2d5bf829249d8bddafdd9->enter($__internal_fdf1b385c3adef8b44348023c857d72e7a8ca29142e2d5bf829249d8bddafdd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:ingredientes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdf1b385c3adef8b44348023c857d72e7a8ca29142e2d5bf829249d8bddafdd9->leave($__internal_fdf1b385c3adef8b44348023c857d72e7a8ca29142e2d5bf829249d8bddafdd9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_023f0c1ce070abcf9b9da7bf03c9bee1d8f213092da07b8087b9ccd8c9a545c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_023f0c1ce070abcf9b9da7bf03c9bee1d8f213092da07b8087b9ccd8c9a545c9->enter($__internal_023f0c1ce070abcf9b9da7bf03c9bee1d8f213092da07b8087b9ccd8c9a545c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Ingredientes";
        
        $__internal_023f0c1ce070abcf9b9da7bf03c9bee1d8f213092da07b8087b9ccd8c9a545c9->leave($__internal_023f0c1ce070abcf9b9da7bf03c9bee1d8f213092da07b8087b9ccd8c9a545c9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bef1e26ea8eca64a2245ca3c1167ef2622ef1b8f5279686a97e86c5a27e1157c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bef1e26ea8eca64a2245ca3c1167ef2622ef1b8f5279686a97e86c5a27e1157c->enter($__internal_bef1e26ea8eca64a2245ca3c1167ef2622ef1b8f5279686a97e86c5a27e1157c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<ul class=\"lista2\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ingredientes"] ?? $this->getContext($context, "ingredientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ingrediente"]) {
            // line 8
            echo "      <li class=\"elemento2\">  
                <h4><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_show2", array("id" => $this->getAttribute($context["ingrediente"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingrediente"], "nombre", array()), "html", null, true);
            echo "</a></h4>
\t </li>  
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingrediente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_bef1e26ea8eca64a2245ca3c1167ef2622ef1b8f5279686a97e86c5a27e1157c->leave($__internal_bef1e26ea8eca64a2245ca3c1167ef2622ef1b8f5279686a97e86c5a27e1157c_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle:Cook:ingredientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
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
<ul class=\"lista2\">
    {% for ingrediente in ingredientes %}
      <li class=\"elemento2\">  
                <h4><a href=\"{{ path('cooker_cook_show2', { 'id': ingrediente.id }) }}\">{{ ingrediente.nombre }}</a></h4>
\t </li>  
    {% endfor %}
{% endblock %}
", "CookerCookingBundle:Cook:ingredientes.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/ingredientes.html.twig");
    }
}
