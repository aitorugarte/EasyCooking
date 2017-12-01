<?php

/* CookerCookingBundle:Cook:platos.html.twig */
class __TwigTemplate_c9b0aff0740cc9b3e809d4fb5e1d4df76ac64a7da6797228aa85bcd9020bf88f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "CookerCookingBundle:Cook:platos.html.twig", 2);
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
        $__internal_7669b1b383131fb2fba102e3fa80ab02dc32700c294a75a08a2eac65fc4d2529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7669b1b383131fb2fba102e3fa80ab02dc32700c294a75a08a2eac65fc4d2529->enter($__internal_7669b1b383131fb2fba102e3fa80ab02dc32700c294a75a08a2eac65fc4d2529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:platos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7669b1b383131fb2fba102e3fa80ab02dc32700c294a75a08a2eac65fc4d2529->leave($__internal_7669b1b383131fb2fba102e3fa80ab02dc32700c294a75a08a2eac65fc4d2529_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_963802a55ad2ec4d8cbbc9d2fae68d40c45492f476b8657ab38f558b24f4b8a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_963802a55ad2ec4d8cbbc9d2fae68d40c45492f476b8657ab38f558b24f4b8a2->enter($__internal_963802a55ad2ec4d8cbbc9d2fae68d40c45492f476b8657ab38f558b24f4b8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Tipos";
        
        $__internal_963802a55ad2ec4d8cbbc9d2fae68d40c45492f476b8657ab38f558b24f4b8a2->leave($__internal_963802a55ad2ec4d8cbbc9d2fae68d40c45492f476b8657ab38f558b24f4b8a2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb91d069024f04ef861007694ee2a76df1d49e40308c2a57e13af13bdb4551fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb91d069024f04ef861007694ee2a76df1d49e40308c2a57e13af13bdb4551fb->enter($__internal_fb91d069024f04ef861007694ee2a76df1d49e40308c2a57e13af13bdb4551fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t
\t<ul>
\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["platos"] ?? $this->getContext($context, "platos")));
        foreach ($context['_seq'] as $context["_key"] => $context["plato"]) {
            // line 9
            echo "\t<h1>Recetas para el tipo: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plato"], "nombre", array()), "html", null, true);
            echo "</h1>
   \t";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recetas"] ?? $this->getContext($context, "recetas")));
            foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
                // line 11
                echo "
\t<li><a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
                echo "</a></li>
\t
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t</ul>

";
        
        $__internal_fb91d069024f04ef861007694ee2a76df1d49e40308c2a57e13af13bdb4551fb->leave($__internal_fb91d069024f04ef861007694ee2a76df1d49e40308c2a57e13af13bdb4551fb_prof);

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
        return array (  90 => 16,  84 => 15,  73 => 12,  70 => 11,  66 => 10,  61 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
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
{% extends 'CookerCookingBundle::layout.html.twig' %}
{% block title %}Tipos{% endblock %}

{% block body %}
\t
\t<ul>
\t{% for plato in platos %}
\t<h1>Recetas para el tipo: {{ plato.nombre }}</h1>
   \t{% for receta in recetas %}

\t<li><a href=\"{{ path('cooker_cook_showReceta', { 'id': receta.id }) }}\">{{ receta.nombre }}</a></li>
\t
\t{% endfor %}
\t{% endfor %}
\t</ul>

{% endblock %}
", "CookerCookingBundle:Cook:platos.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/platos.html.twig");
    }
}
