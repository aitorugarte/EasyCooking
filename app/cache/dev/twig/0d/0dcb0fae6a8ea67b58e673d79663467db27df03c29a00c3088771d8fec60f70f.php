<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d02573ad3e1931d251f7b5eb8a85540b2b7bce5f05c854983ca14b6afaa602c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_16662ca9248026a4e43291a4ca58bb59a3e80bfa55e0c3cc7f9692d1292421b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16662ca9248026a4e43291a4ca58bb59a3e80bfa55e0c3cc7f9692d1292421b7->enter($__internal_16662ca9248026a4e43291a4ca58bb59a3e80bfa55e0c3cc7f9692d1292421b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16662ca9248026a4e43291a4ca58bb59a3e80bfa55e0c3cc7f9692d1292421b7->leave($__internal_16662ca9248026a4e43291a4ca58bb59a3e80bfa55e0c3cc7f9692d1292421b7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_21c9a1e45ea8526ebb2aac70ed844c797fc523280bda6a341263f56677518d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c9a1e45ea8526ebb2aac70ed844c797fc523280bda6a341263f56677518d30->enter($__internal_21c9a1e45ea8526ebb2aac70ed844c797fc523280bda6a341263f56677518d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_21c9a1e45ea8526ebb2aac70ed844c797fc523280bda6a341263f56677518d30->leave($__internal_21c9a1e45ea8526ebb2aac70ed844c797fc523280bda6a341263f56677518d30_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_39a50c2455050e1bb6b33394d01bed9165d32094f4423ff155473f99ed3ec23b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a50c2455050e1bb6b33394d01bed9165d32094f4423ff155473f99ed3ec23b->enter($__internal_39a50c2455050e1bb6b33394d01bed9165d32094f4423ff155473f99ed3ec23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_39a50c2455050e1bb6b33394d01bed9165d32094f4423ff155473f99ed3ec23b->leave($__internal_39a50c2455050e1bb6b33394d01bed9165d32094f4423ff155473f99ed3ec23b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6183c5f35a945e4152ceb1e6a2f90391965521aba88ea4629c0c795f80032052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6183c5f35a945e4152ceb1e6a2f90391965521aba88ea4629c0c795f80032052->enter($__internal_6183c5f35a945e4152ceb1e6a2f90391965521aba88ea4629c0c795f80032052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6183c5f35a945e4152ceb1e6a2f90391965521aba88ea4629c0c795f80032052->leave($__internal_6183c5f35a945e4152ceb1e6a2f90391965521aba88ea4629c0c795f80032052_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
