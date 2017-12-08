<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_d4bb81df393b303fec0560a0c1f416913dbbd12847f51c76cb01e854782f422e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_281b61ae462115215fcd43400b3ece12ad9765877f17f7aabff9c3341bf5c34e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_281b61ae462115215fcd43400b3ece12ad9765877f17f7aabff9c3341bf5c34e->enter($__internal_281b61ae462115215fcd43400b3ece12ad9765877f17f7aabff9c3341bf5c34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_281b61ae462115215fcd43400b3ece12ad9765877f17f7aabff9c3341bf5c34e->leave($__internal_281b61ae462115215fcd43400b3ece12ad9765877f17f7aabff9c3341bf5c34e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d88a8cc5ec5d2011b8437e279ac57febf70fc1969b0445e95fbf72ccaff4590b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d88a8cc5ec5d2011b8437e279ac57febf70fc1969b0445e95fbf72ccaff4590b->enter($__internal_d88a8cc5ec5d2011b8437e279ac57febf70fc1969b0445e95fbf72ccaff4590b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d88a8cc5ec5d2011b8437e279ac57febf70fc1969b0445e95fbf72ccaff4590b->leave($__internal_d88a8cc5ec5d2011b8437e279ac57febf70fc1969b0445e95fbf72ccaff4590b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5610ffba0f79b70911fdf47e50926567668dec3cfa6653782bef2341f4b89fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5610ffba0f79b70911fdf47e50926567668dec3cfa6653782bef2341f4b89fbd->enter($__internal_5610ffba0f79b70911fdf47e50926567668dec3cfa6653782bef2341f4b89fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5610ffba0f79b70911fdf47e50926567668dec3cfa6653782bef2341f4b89fbd->leave($__internal_5610ffba0f79b70911fdf47e50926567668dec3cfa6653782bef2341f4b89fbd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7be5635ba80cc42dfbb324908f79b553133a645a5bb3c0b71b634e8d8a84d563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7be5635ba80cc42dfbb324908f79b553133a645a5bb3c0b71b634e8d8a84d563->enter($__internal_7be5635ba80cc42dfbb324908f79b553133a645a5bb3c0b71b634e8d8a84d563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7be5635ba80cc42dfbb324908f79b553133a645a5bb3c0b71b634e8d8a84d563->leave($__internal_7be5635ba80cc42dfbb324908f79b553133a645a5bb3c0b71b634e8d8a84d563_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
