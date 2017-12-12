<?php

/* CookerCookingBundle:Cook:recetas.html.twig */
class __TwigTemplate_53951b4c438be60568fb857e26b8ddf7c41f21a666464562953c4e3af81f20d2 extends Twig_Template
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
        $__internal_1da8e680b48425c567d180615597e3eb80a3e3fffd43a0adf4ada5220919a0e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1da8e680b48425c567d180615597e3eb80a3e3fffd43a0adf4ada5220919a0e9->enter($__internal_1da8e680b48425c567d180615597e3eb80a3e3fffd43a0adf4ada5220919a0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:recetas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1da8e680b48425c567d180615597e3eb80a3e3fffd43a0adf4ada5220919a0e9->leave($__internal_1da8e680b48425c567d180615597e3eb80a3e3fffd43a0adf4ada5220919a0e9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c4eff9ccf02e8823f03d2508b7a10ba20c844029a0cf944215065b75e4bd9f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c4eff9ccf02e8823f03d2508b7a10ba20c844029a0cf944215065b75e4bd9f5->enter($__internal_4c4eff9ccf02e8823f03d2508b7a10ba20c844029a0cf944215065b75e4bd9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Recetas";
        
        $__internal_4c4eff9ccf02e8823f03d2508b7a10ba20c844029a0cf944215065b75e4bd9f5->leave($__internal_4c4eff9ccf02e8823f03d2508b7a10ba20c844029a0cf944215065b75e4bd9f5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5493862ec0a2625c6c706e424557961155ccd4caa623c90f4d2713cff5c8546f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5493862ec0a2625c6c706e424557961155ccd4caa623c90f4d2713cff5c8546f->enter($__internal_5493862ec0a2625c6c706e424557961155ccd4caa623c90f4d2713cff5c8546f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
 <ul class=\"lista\">
 \t<section class=\"ib-container\" id=\"ib-container\">
\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recetas"] ?? $this->getContext($context, "recetas")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            // line 10
            echo "
\t<article style=\"margin-right:20px; margin-top:20px;\">
\t <li class=\"elemento\">
\t\t<header>
\t\t\t<h3><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
            echo "</a></h3>
\t\t</header>
\t\t<img class=\"imgPeq\" src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "imagen", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
            echo "\" />
\t\t<div class=\"snippet\">
\t\t\t<p style=\"margin-left: 5px;margin-right: 5px;\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "detalles", array(0 => 50), "method"), "html", null, true);
            echo "</p>
\t\t\t<p><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">Seguir leyendo...</a></p>
\t\t</div>
\t\t<footer class=\"meta\">
\t\t\t<p>Comentarios: -</p>
\t\t</footer>
\t</li>
\t</article>
\t
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            echo "\t<p>No hay entradas en este blog</p>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t</section>
</ul>  
\t
";
        
        $__internal_5493862ec0a2625c6c706e424557961155ccd4caa623c90f4d2713cff5c8546f->leave($__internal_5493862ec0a2625c6c706e424557961155ccd4caa623c90f4d2713cff5c8546f_prof);

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
        return array (  108 => 30,  101 => 28,  87 => 19,  83 => 18,  76 => 16,  69 => 14,  63 => 10,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
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

 <ul class=\"lista\">
 \t<section class=\"ib-container\" id=\"ib-container\">
\t{% for receta in recetas %}

\t<article style=\"margin-right:20px; margin-top:20px;\">
\t <li class=\"elemento\">
\t\t<header>
\t\t\t<h3><a href=\"{{ path('cooker_cook_showReceta', { 'id': receta.id }) }}\">{{ receta.nombre }}</a></h3>
\t\t</header>
\t\t<img class=\"imgPeq\" src=\"{{receta.imagen}}\" alt=\"{{receta.nombre}}\" />
\t\t<div class=\"snippet\">
\t\t\t<p style=\"margin-left: 5px;margin-right: 5px;\">{{ receta.detalles(50) }}</p>
\t\t\t<p><a href=\"{{ path('cooker_cook_showReceta', { 'id': receta.id }) }}\">Seguir leyendo...</a></p>
\t\t</div>
\t\t<footer class=\"meta\">
\t\t\t<p>Comentarios: -</p>
\t\t</footer>
\t</li>
\t</article>
\t
\t{% else %}
\t<p>No hay entradas en este blog</p>
\t{% endfor %}
\t</section>
</ul>  
\t
{% endblock %}
", "CookerCookingBundle:Cook:recetas.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/recetas.html.twig");
    }
}
