<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_788f3070aabb872fe42f5472357202a84a84697b34e3710deb88ad537cdac756 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6392dd0ffe6658f195d6063c4ff3962444f05c382f643649ce3ba3083ef944f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6392dd0ffe6658f195d6063c4ff3962444f05c382f643649ce3ba3083ef944f->enter($__internal_a6392dd0ffe6658f195d6063c4ff3962444f05c382f643649ce3ba3083ef944f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6392dd0ffe6658f195d6063c4ff3962444f05c382f643649ce3ba3083ef944f->leave($__internal_a6392dd0ffe6658f195d6063c4ff3962444f05c382f643649ce3ba3083ef944f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f4763d8be8357ce7d8ebb1a0c6a9a3dab0e855c2ed282c5d6b20aa393d5d951c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4763d8be8357ce7d8ebb1a0c6a9a3dab0e855c2ed282c5d6b20aa393d5d951c->enter($__internal_f4763d8be8357ce7d8ebb1a0c6a9a3dab0e855c2ed282c5d6b20aa393d5d951c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f4763d8be8357ce7d8ebb1a0c6a9a3dab0e855c2ed282c5d6b20aa393d5d951c->leave($__internal_f4763d8be8357ce7d8ebb1a0c6a9a3dab0e855c2ed282c5d6b20aa393d5d951c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7da559757e7448e98a6eaabf0293760c6d3595ace44ca5c1be0d0416fcbb1fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7da559757e7448e98a6eaabf0293760c6d3595ace44ca5c1be0d0416fcbb1fcb->enter($__internal_7da559757e7448e98a6eaabf0293760c6d3595ace44ca5c1be0d0416fcbb1fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7da559757e7448e98a6eaabf0293760c6d3595ace44ca5c1be0d0416fcbb1fcb->leave($__internal_7da559757e7448e98a6eaabf0293760c6d3595ace44ca5c1be0d0416fcbb1fcb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9a2e7c8adea0a60af62f3f044a78c63160d6d903289f9d1bd516e611926c7f6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a2e7c8adea0a60af62f3f044a78c63160d6d903289f9d1bd516e611926c7f6d->enter($__internal_9a2e7c8adea0a60af62f3f044a78c63160d6d903289f9d1bd516e611926c7f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9a2e7c8adea0a60af62f3f044a78c63160d6d903289f9d1bd516e611926c7f6d->leave($__internal_9a2e7c8adea0a60af62f3f044a78c63160d6d903289f9d1bd516e611926c7f6d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
