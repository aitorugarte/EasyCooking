<?php

/* CookerCookingBundle:Cook:show.html.twig */
class __TwigTemplate_0fdc192394ad5854be84221c5a26ca7208e3d86a7194852998625fc7144d34e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "CookerCookingBundle:Cook:show.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CookerCookingBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbcc24ed21776aaebc6a21c520ea66fee1bde326b82e2029cb3172f5cfbc0aa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbcc24ed21776aaebc6a21c520ea66fee1bde326b82e2029cb3172f5cfbc0aa5->enter($__internal_fbcc24ed21776aaebc6a21c520ea66fee1bde326b82e2029cb3172f5cfbc0aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbcc24ed21776aaebc6a21c520ea66fee1bde326b82e2029cb3172f5cfbc0aa5->leave($__internal_fbcc24ed21776aaebc6a21c520ea66fee1bde326b82e2029cb3172f5cfbc0aa5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3563e300068b9137f9424faa622a293e83ec4cae5da1622915b98522cf0b0f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3563e300068b9137f9424faa622a293e83ec4cae5da1622915b98522cf0b0f2->enter($__internal_b3563e300068b9137f9424faa622a293e83ec4cae5da1622915b98522cf0b0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Detalles de la receta";
        
        $__internal_b3563e300068b9137f9424faa622a293e83ec4cae5da1622915b98522cf0b0f2->leave($__internal_b3563e300068b9137f9424faa622a293e83ec4cae5da1622915b98522cf0b0f2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d641beb5b6c76d0c108957091bbc076c1f95d8e210cfe690a52455937dea720e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d641beb5b6c76d0c108957091bbc076c1f95d8e210cfe690a52455937dea720e->enter($__internal_d641beb5b6c76d0c108957091bbc076c1f95d8e210cfe690a52455937dea720e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "nombre", array()), "html", null, true);
        echo "</h1>
\t<div class=\"date\">
\t\t";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "date", array()), "d-m-Y"), "html", null, true);
        echo "
\t</div>
\t<div class=\"body\">
\t\t";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "detalles", array()), "html", null, true);
        echo "
\t</div>
\t
\t<br><br><br>

\t<section class=\"previous-comments\">
\t\t<h3>Comentarios</h3>
\t\t";
        // line 18
        $this->loadTemplate("CookerCookingBundle:Comment:list.html.twig", "CookerCookingBundle:Cook:show.html.twig", 18)->display(array_merge($context, array("comments" => ($context["comments"] ?? $this->getContext($context, "comments")))));
        // line 19
        echo "\t</section>

\t<section class=\"comments\" id=\"comments\">
\t
\t<h3>Añadir comentario</h3>
\t\t";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("CookerCookingBundle:Comment:new", array("receta_id" => $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "id", array()))));
        echo "
\t</section>
\t
\t</section>
\t";
        // line 28
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "
";
        
        $__internal_d641beb5b6c76d0c108957091bbc076c1f95d8e210cfe690a52455937dea720e->leave($__internal_d641beb5b6c76d0c108957091bbc076c1f95d8e210cfe690a52455937dea720e_prof);

    }

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f1a54ab76815fbf6c47c457a57962f1f05458bb30fbfbfe13bc9a441ae1f53c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a54ab76815fbf6c47c457a57962f1f05458bb30fbfbfe13bc9a441ae1f53c7->enter($__internal_f1a54ab76815fbf6c47c457a57962f1f05458bb30fbfbfe13bc9a441ae1f53c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 29
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
        
        $__internal_f1a54ab76815fbf6c47c457a57962f1f05458bb30fbfbfe13bc9a441ae1f53c7->leave($__internal_f1a54ab76815fbf6c47c457a57962f1f05458bb30fbfbfe13bc9a441ae1f53c7_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle:Cook:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 30,  108 => 29,  102 => 28,  94 => 32,  92 => 28,  85 => 24,  78 => 19,  76 => 18,  66 => 11,  60 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Cook/show.html.twig #}
{% extends 'CookerCookingBundle::layout.html.twig' %}
{% block title %}Detalles de la receta{% endblock %}

{% block body %}
\t<h1>{{ receta.nombre }}</h1>
\t<div class=\"date\">
\t\t{{ receta.date|date('d-m-Y') }}
\t</div>
\t<div class=\"body\">
\t\t{{ receta.detalles }}
\t</div>
\t
\t<br><br><br>

\t<section class=\"previous-comments\">
\t\t<h3>Comentarios</h3>
\t\t{% include 'CookerCookingBundle:Comment:list.html.twig' with { 'comments': comments } %}
\t</section>

\t<section class=\"comments\" id=\"comments\">
\t
\t<h3>Añadir comentario</h3>
\t\t{{ render(controller( 'CookerCookingBundle:Comment:new', { 'receta_id': receta.id } )) }}
\t</section>
\t
\t</section>
\t{% block stylesheets %}
\t{{ parent() }}
\t<link href=\"{{ asset('css/blog.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
\t{% endblock %}

{% endblock %}
", "CookerCookingBundle:Cook:show.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\show.html.twig");
    }
}
