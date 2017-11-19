<?php

/* CookerCookingBundle:Cook:show2.html.twig */
class __TwigTemplate_aff92e8ecbf2268ef2d82a7351c03d8d818a937ad335ae1d6b41ccd83cc23c89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "CookerCookingBundle:Cook:show2.html.twig", 2);
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
        $__internal_b74ad29f168d4928f24993440e51272bfee5af483d5f3ff2a1b535314401f8aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b74ad29f168d4928f24993440e51272bfee5af483d5f3ff2a1b535314401f8aa->enter($__internal_b74ad29f168d4928f24993440e51272bfee5af483d5f3ff2a1b535314401f8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:show2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b74ad29f168d4928f24993440e51272bfee5af483d5f3ff2a1b535314401f8aa->leave($__internal_b74ad29f168d4928f24993440e51272bfee5af483d5f3ff2a1b535314401f8aa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb42294a96431110a959734a46301496d5cb5f7d92b592ab182335f860ba45c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb42294a96431110a959734a46301496d5cb5f7d92b592ab182335f860ba45c5->enter($__internal_fb42294a96431110a959734a46301496d5cb5f7d92b592ab182335f860ba45c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["ingrediente"] ?? $this->getContext($context, "ingrediente")), "nombre", array()), "html", null, true);
        
        $__internal_fb42294a96431110a959734a46301496d5cb5f7d92b592ab182335f860ba45c5->leave($__internal_fb42294a96431110a959734a46301496d5cb5f7d92b592ab182335f860ba45c5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9ffff710fc115ed5c753757f03b6101421111f46c99ad89bdabec8745024e2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9ffff710fc115ed5c753757f03b6101421111f46c99ad89bdabec8745024e2e->enter($__internal_d9ffff710fc115ed5c753757f03b6101421111f46c99ad89bdabec8745024e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
            echo "</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "

";
        
        $__internal_d9ffff710fc115ed5c753757f03b6101421111f46c99ad89bdabec8745024e2e->leave($__internal_d9ffff710fc115ed5c753757f03b6101421111f46c99ad89bdabec8745024e2e_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle:Cook:show2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 12,  64 => 10,  60 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
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
\t<li>{{ receta.nombre }}</li>
\t{% endfor %}


{% endblock %}
", "CookerCookingBundle:Cook:show2.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/show2.html.twig");
    }
}
