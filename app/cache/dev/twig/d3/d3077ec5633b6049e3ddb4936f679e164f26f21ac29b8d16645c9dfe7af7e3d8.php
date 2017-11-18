<?php

/* CookerCookingBundle:Cook:recetas.html.twig */
class __TwigTemplate_d5b0768a46e788e8713115e34c55801b019d9b9c0ea58e7547b4d1b47f28b224 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "CookerCookingBundle:Cook:recetas.html.twig", 2);
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
        $__internal_2a3cdaa2ddaf312982beaff36a1040a3d037c60d8efa0542408845eebd66fee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a3cdaa2ddaf312982beaff36a1040a3d037c60d8efa0542408845eebd66fee0->enter($__internal_2a3cdaa2ddaf312982beaff36a1040a3d037c60d8efa0542408845eebd66fee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:recetas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a3cdaa2ddaf312982beaff36a1040a3d037c60d8efa0542408845eebd66fee0->leave($__internal_2a3cdaa2ddaf312982beaff36a1040a3d037c60d8efa0542408845eebd66fee0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_85b7da81d746bfa2cb3538087d9ccfd70272ef4ae9ab13888b5275257f927478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b7da81d746bfa2cb3538087d9ccfd70272ef4ae9ab13888b5275257f927478->enter($__internal_85b7da81d746bfa2cb3538087d9ccfd70272ef4ae9ab13888b5275257f927478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Recetas";
        
        $__internal_85b7da81d746bfa2cb3538087d9ccfd70272ef4ae9ab13888b5275257f927478->leave($__internal_85b7da81d746bfa2cb3538087d9ccfd70272ef4ae9ab13888b5275257f927478_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3e2fdc5775bbbec2ef929c4ee7e57e0f3ff64b73495c76b608ee6234a7dae42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e2fdc5775bbbec2ef929c4ee7e57e0f3ff64b73495c76b608ee6234a7dae42->enter($__internal_c3e2fdc5775bbbec2ef929c4ee7e57e0f3ff64b73495c76b608ee6234a7dae42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<ul id=\"lista\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recetas"] ?? $this->getContext($context, "recetas")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            // line 9
            echo "\t<li id=\"elemento\">
            <header>
                <h2><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_show", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
            echo "</a></h2>
            </header>
\t\t\t<img class=\"imgPeq\" src=\"/images/fondo.jpg\" alt=\"d\" />
            <div class=\"snippet\">
                <p>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "detalles", array(0 => 200), "method"), "html", null, true);
            echo "</p>
                <p class=\"continue\"><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_show", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">Seguir leyendo...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comentarios: -</p>
            </footer>
\t</li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "        <p>No hay entradas en este blog</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c3e2fdc5775bbbec2ef929c4ee7e57e0f3ff64b73495c76b608ee6234a7dae42->leave($__internal_c3e2fdc5775bbbec2ef929c4ee7e57e0f3ff64b73495c76b608ee6234a7dae42_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle:Cook:recetas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  79 => 16,  75 => 15,  66 => 11,  62 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
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

<ul id=\"lista\">
    {% for receta in recetas %}
\t<li id=\"elemento\">
            <header>
                <h2><a href=\"{{ path('cooker_cook_show', { 'id': receta.id }) }}\">{{ receta.nombre }}</a></h2>
            </header>
\t\t\t<img class=\"imgPeq\" src=\"/images/fondo.jpg\" alt=\"d\" />
            <div class=\"snippet\">
                <p>{{ receta.detalles(200) }}</p>
                <p class=\"continue\"><a href=\"{{ path('cooker_cook_show', { 'id': receta.id }) }}\">Seguir leyendo...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comentarios: -</p>
            </footer>
\t</li>
    {% else %}
        <p>No hay entradas en este blog</p>
    {% endfor %}
{% endblock %}
", "CookerCookingBundle:Cook:recetas.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/recetas.html.twig");
    }
}
