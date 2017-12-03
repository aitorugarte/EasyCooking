<?php

/* CookerCookingBundle:Cook:showPlato.html.twig */
class __TwigTemplate_bbf3b1e7763f7db8da94cdf5579e2e4214c17a3065c2ad9f71e9259d823ca1db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "CookerCookingBundle:Cook:showPlato.html.twig", 2);
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
        $__internal_1b1aa67c055bd82618f49c801c4a6e0685b5ae5bdcfc7f57cbc55e1dd92beb86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b1aa67c055bd82618f49c801c4a6e0685b5ae5bdcfc7f57cbc55e1dd92beb86->enter($__internal_1b1aa67c055bd82618f49c801c4a6e0685b5ae5bdcfc7f57cbc55e1dd92beb86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:showPlato.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b1aa67c055bd82618f49c801c4a6e0685b5ae5bdcfc7f57cbc55e1dd92beb86->leave($__internal_1b1aa67c055bd82618f49c801c4a6e0685b5ae5bdcfc7f57cbc55e1dd92beb86_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb5f17e67683b9d777ca9377ae5e426ead5105c24411a89935cacab205e1f3b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb5f17e67683b9d777ca9377ae5e426ead5105c24411a89935cacab205e1f3b0->enter($__internal_bb5f17e67683b9d777ca9377ae5e426ead5105c24411a89935cacab205e1f3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["plato"] ?? $this->getContext($context, "plato")), "nombre", array()), "html", null, true);
        
        $__internal_bb5f17e67683b9d777ca9377ae5e426ead5105c24411a89935cacab205e1f3b0->leave($__internal_bb5f17e67683b9d777ca9377ae5e426ead5105c24411a89935cacab205e1f3b0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea233bda66c456d681ed1aa60f444c48039e2590105bd2b2917ebd725947408b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea233bda66c456d681ed1aa60f444c48039e2590105bd2b2917ebd725947408b->enter($__internal_ea233bda66c456d681ed1aa60f444c48039e2590105bd2b2917ebd725947408b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<h1>Recetas para el plato: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["plato"] ?? $this->getContext($context, "plato")), "nombre", array()), "html", null, true);
        echo "</h1>
\t
\t<ul class=\"lista\">
\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recetas"] ?? $this->getContext($context, "recetas")));
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            // line 11
            echo "\t<li class=\"elemento\">
\t\t <header>
         <h3><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
            echo "</a></h3>
         </header>
\t\t\t<img class=\"imgPeq\" src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "imagen", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
            echo "\" />
            <div class=\"snippet\">
                <p style=\"margin-left: 5px;margin-right: 5px;\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "detalles", array(0 => 50), "method"), "html", null, true);
            echo "</p>
                <p><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">Seguir leyendo...</a></p>
            </div>
\t\t\t  <footer class=\"meta\">
                <p>Comentarios: -</p>
            </footer>\t</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t</ul>

";
        
        $__internal_ea233bda66c456d681ed1aa60f444c48039e2590105bd2b2917ebd725947408b->leave($__internal_ea233bda66c456d681ed1aa60f444c48039e2590105bd2b2917ebd725947408b_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle:Cook:showPlato.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 24,  88 => 18,  84 => 17,  77 => 15,  70 => 13,  66 => 11,  62 => 10,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Cook/showPlato.html.twig #}
{% extends 'CookerCookingBundle::layout.html.twig' %}
{% block title %}{{plato.nombre}}{% endblock %}

{% block body %}

<h1>Recetas para el plato: {{ plato.nombre }}</h1>
\t
\t<ul class=\"lista\">
\t{% for receta in recetas %}
\t<li class=\"elemento\">
\t\t <header>
         <h3><a href=\"{{ path('cooker_cook_showReceta', { 'id': receta.id }) }}\">{{ receta.nombre }}</a></h3>
         </header>
\t\t\t<img class=\"imgPeq\" src=\"{{receta.imagen}}\" alt=\"{{receta.nombre}}\" />
            <div class=\"snippet\">
                <p style=\"margin-left: 5px;margin-right: 5px;\">{{ receta.detalles(50) }}</p>
                <p><a href=\"{{ path('cooker_cook_showReceta', { 'id': receta.id }) }}\">Seguir leyendo...</a></p>
            </div>
\t\t\t  <footer class=\"meta\">
                <p>Comentarios: -</p>
            </footer>\t</li>
\t{% endfor %}
\t</ul>

{% endblock %}
", "CookerCookingBundle:Cook:showPlato.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/showPlato.html.twig");
    }
}
