<?php

/* @CookerCooking/Cook/platos.html.twig */
class __TwigTemplate_c9dc21d1d654c02c1cd5c01b74d6075258842f463dada597e25535236798ef2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::sidebar.html.twig", "@CookerCooking/Cook/platos.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CookerCookingBundle::sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1601403f31e825cee8c7518ca49e46e1181443a9a42e0e7531b4314434966f01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1601403f31e825cee8c7518ca49e46e1181443a9a42e0e7531b4314434966f01->enter($__internal_1601403f31e825cee8c7518ca49e46e1181443a9a42e0e7531b4314434966f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Cook/platos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1601403f31e825cee8c7518ca49e46e1181443a9a42e0e7531b4314434966f01->leave($__internal_1601403f31e825cee8c7518ca49e46e1181443a9a42e0e7531b4314434966f01_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2d657f208412ba33663519f84ddc1340c53bb00bc6ed694895c59dcd581f2aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d657f208412ba33663519f84ddc1340c53bb00bc6ed694895c59dcd581f2aa->enter($__internal_f2d657f208412ba33663519f84ddc1340c53bb00bc6ed694895c59dcd581f2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Tipos";
        
        $__internal_f2d657f208412ba33663519f84ddc1340c53bb00bc6ed694895c59dcd581f2aa->leave($__internal_f2d657f208412ba33663519f84ddc1340c53bb00bc6ed694895c59dcd581f2aa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a6ab40ae452ee3612f1533b098bb216a403fdb6376afbb8283e6827979c5aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a6ab40ae452ee3612f1533b098bb216a403fdb6376afbb8283e6827979c5aba->enter($__internal_8a6ab40ae452ee3612f1533b098bb216a403fdb6376afbb8283e6827979c5aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t
\t
\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["platos"] ?? $this->getContext($context, "platos")));
        foreach ($context['_seq'] as $context["_key"] => $context["plato"]) {
            // line 9
            echo "\t";
            $context["tipo"] = $this->getAttribute($context["plato"], "nombre", array());
            // line 10
            echo "
\t<h2>Recetas para el tipo: ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["plato"], "nombre", array()), "html", null, true);
            echo "</h2>
\t<ul>
\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recetas"] ?? $this->getContext($context, "recetas")));
            foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
                if ((($context["tipo"] ?? $this->getContext($context, "tipo")) == $this->getAttribute($this->getAttribute($context["receta"], "tipo_plato", array()), "nombre", array()))) {
                    // line 14
                    echo "
\t<li><a href=\"";
                    // line 15
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
                    echo "</a></li>
\t
\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t</ul>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t

";
        
        $__internal_8a6ab40ae452ee3612f1533b098bb216a403fdb6376afbb8283e6827979c5aba->leave($__internal_8a6ab40ae452ee3612f1533b098bb216a403fdb6376afbb8283e6827979c5aba_prof);

    }

    public function getTemplateName()
    {
        return "@CookerCooking/Cook/platos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 20,  92 => 18,  80 => 15,  77 => 14,  72 => 13,  67 => 11,  64 => 10,  61 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
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
{% extends 'CookerCookingBundle::sidebar.html.twig' %}
{% block title %}Tipos{% endblock %}

{% block body %}
\t
\t
\t{% for plato in platos %}
\t{% set tipo = plato.nombre %}

\t<h2>Recetas para el tipo: {{ plato.nombre }}</h2>
\t<ul>
\t{% for receta in recetas if tipo == receta.tipo_plato.nombre %}

\t<li><a href=\"{{ path('cooker_cook_showReceta', { 'id': receta.id }) }}\">{{ receta.nombre }}</a></li>
\t
\t{% endfor %}
\t</ul>
\t{% endfor %}
\t

{% endblock %}
", "@CookerCooking/Cook/platos.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\platos.html.twig");
    }
}
