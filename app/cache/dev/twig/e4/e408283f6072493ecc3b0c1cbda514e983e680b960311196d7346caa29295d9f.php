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
        $__internal_b77e3e0e10f89bb1f1595575b767943988d84e5fe6319643996e9c3e1e2a6030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b77e3e0e10f89bb1f1595575b767943988d84e5fe6319643996e9c3e1e2a6030->enter($__internal_b77e3e0e10f89bb1f1595575b767943988d84e5fe6319643996e9c3e1e2a6030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b77e3e0e10f89bb1f1595575b767943988d84e5fe6319643996e9c3e1e2a6030->leave($__internal_b77e3e0e10f89bb1f1595575b767943988d84e5fe6319643996e9c3e1e2a6030_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d98647b85dc88cad60e750ac9499140220c3b7bedfc085e44dda82e2d0cb3e07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98647b85dc88cad60e750ac9499140220c3b7bedfc085e44dda82e2d0cb3e07->enter($__internal_d98647b85dc88cad60e750ac9499140220c3b7bedfc085e44dda82e2d0cb3e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Detalles de la receta";
        
        $__internal_d98647b85dc88cad60e750ac9499140220c3b7bedfc085e44dda82e2d0cb3e07->leave($__internal_d98647b85dc88cad60e750ac9499140220c3b7bedfc085e44dda82e2d0cb3e07_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_226e0092c4b378ca434f6af27a889e78a580b40e1d1a3e41addf18e3d597c599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_226e0092c4b378ca434f6af27a889e78a580b40e1d1a3e41addf18e3d597c599->enter($__internal_226e0092c4b378ca434f6af27a889e78a580b40e1d1a3e41addf18e3d597c599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <h3 style=\"float:right\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "tipo_plato", array()), "html", null, true);
        echo "</h3>
\t<h1>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "nombre", array()), "html", null, true);
        echo "</h1>

\t<div class=\"date\">
\t\t";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "date", array()), "d-m-Y"), "html", null, true);
        echo "
\t</div>
\t<img class=\"imgGran\" src=\"/css/images/";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "id", array()), "html", null, true);
        echo ".jpg\" alt=\"receta\" />

\t<h2>Ingredientes</h2>
\t<ul class=\"ingredientes\">
\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ingredientes"] ?? $this->getContext($context, "ingredientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ingrediente"]) {
            // line 18
            echo "\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_show2", array("id" => $this->getAttribute($context["ingrediente"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingrediente"], "nombre", array()), "html", null, true);
            echo "</a></li>
\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingrediente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
\t<h2>Preparación</h2>
\t<div class=\"body\">
\t\t";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "detalles", array()), "html", null, true);
        echo "
\t</div>
\t
\t<br><br><br>

\t<section class=\"previous-comments\">
\t\t<h3>Comentarios</h3>
\t\t";
        // line 30
        $this->loadTemplate("CookerCookingBundle:Comment:list.html.twig", "CookerCookingBundle:Cook:show.html.twig", 30)->display(array_merge($context, array("comentarios" => ($context["comentarios"] ?? $this->getContext($context, "comentarios")))));
        // line 31
        echo "\t</section>

\t<section class=\"coments\" id=\"coments\">
\t
\t<h3 style=\"margin-top: 40px\">Añadir comentario</h3>
\t\t";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("CookerCookingBundle:Comentario:new", array("receta_id" => $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "id", array()))));
        echo "
\t</section>
\t
\t</section>
\t";
        // line 40
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 44
        echo "
";
        
        $__internal_226e0092c4b378ca434f6af27a889e78a580b40e1d1a3e41addf18e3d597c599->leave($__internal_226e0092c4b378ca434f6af27a889e78a580b40e1d1a3e41addf18e3d597c599_prof);

    }

    // line 40
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0ca795d425459ce0fdffb38e80178020b4b2fc76ecb6d2ded22a0e0402ba6ce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ca795d425459ce0fdffb38e80178020b4b2fc76ecb6d2ded22a0e0402ba6ce3->enter($__internal_0ca795d425459ce0fdffb38e80178020b4b2fc76ecb6d2ded22a0e0402ba6ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 41
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
        
        $__internal_0ca795d425459ce0fdffb38e80178020b4b2fc76ecb6d2ded22a0e0402ba6ce3->leave($__internal_0ca795d425459ce0fdffb38e80178020b4b2fc76ecb6d2ded22a0e0402ba6ce3_prof);

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
        return array (  146 => 42,  141 => 41,  135 => 40,  127 => 44,  125 => 40,  118 => 36,  111 => 31,  109 => 30,  99 => 23,  94 => 20,  83 => 18,  79 => 17,  72 => 13,  67 => 11,  61 => 8,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Cook/showRecetas.html.twig #}
{% extends 'CookerCookingBundle::layout.html.twig' %}
{% block title %}Detalles de la receta{% endblock %}

{% block body %}

    <h3 style=\"float:right\">{{ receta.tipo_plato }}</h3>
\t<h1>{{ receta.nombre }}</h1>

\t<div class=\"date\">
\t\t{{ receta.date|date('d-m-Y') }}
\t</div>
\t<img class=\"imgGran\" src=\"/css/images/{{receta.id}}.jpg\" alt=\"receta\" />

\t<h2>Ingredientes</h2>
\t<ul class=\"ingredientes\">
\t{% for ingrediente in ingredientes %}
\t<li><a href=\"{{ path('cooker_cook_show2', { 'id': ingrediente.id }) }}\">{{ ingrediente.nombre }}</a></li>
\t {% endfor %}

\t<h2>Preparación</h2>
\t<div class=\"body\">
\t\t{{ receta.detalles }}
\t</div>
\t
\t<br><br><br>

\t<section class=\"previous-comments\">
\t\t<h3>Comentarios</h3>
\t\t{% include 'CookerCookingBundle:Comment:list.html.twig' with { 'comentarios': comentarios } %}
\t</section>

\t<section class=\"coments\" id=\"coments\">
\t
\t<h3 style=\"margin-top: 40px\">Añadir comentario</h3>
\t\t{{ render(controller( 'CookerCookingBundle:Comentario:new', { 'receta_id': receta.id } )) }}
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
