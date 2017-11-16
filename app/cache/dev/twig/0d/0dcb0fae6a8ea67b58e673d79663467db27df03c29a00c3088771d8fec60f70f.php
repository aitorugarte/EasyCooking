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
        $__internal_0fdeb7922606a2bc9eb1572c4c7aa2a3c538de4cb5108c3735075b986956e4d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fdeb7922606a2bc9eb1572c4c7aa2a3c538de4cb5108c3735075b986956e4d0->enter($__internal_0fdeb7922606a2bc9eb1572c4c7aa2a3c538de4cb5108c3735075b986956e4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fdeb7922606a2bc9eb1572c4c7aa2a3c538de4cb5108c3735075b986956e4d0->leave($__internal_0fdeb7922606a2bc9eb1572c4c7aa2a3c538de4cb5108c3735075b986956e4d0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2d67f6f3825fb81229efed65daeefdaf6db3916f73142748515467b80c050ed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d67f6f3825fb81229efed65daeefdaf6db3916f73142748515467b80c050ed5->enter($__internal_2d67f6f3825fb81229efed65daeefdaf6db3916f73142748515467b80c050ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2d67f6f3825fb81229efed65daeefdaf6db3916f73142748515467b80c050ed5->leave($__internal_2d67f6f3825fb81229efed65daeefdaf6db3916f73142748515467b80c050ed5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d51066b9a101c125f2b1c331ca4e385b193c07d1b86182d6c599caf78d4e7705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d51066b9a101c125f2b1c331ca4e385b193c07d1b86182d6c599caf78d4e7705->enter($__internal_d51066b9a101c125f2b1c331ca4e385b193c07d1b86182d6c599caf78d4e7705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d51066b9a101c125f2b1c331ca4e385b193c07d1b86182d6c599caf78d4e7705->leave($__internal_d51066b9a101c125f2b1c331ca4e385b193c07d1b86182d6c599caf78d4e7705_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f16b1b5299b81f1ec78cbdbd2ab6b18c1cf8c2cf6e7cf73ca30d8bff06aec403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f16b1b5299b81f1ec78cbdbd2ab6b18c1cf8c2cf6e7cf73ca30d8bff06aec403->enter($__internal_f16b1b5299b81f1ec78cbdbd2ab6b18c1cf8c2cf6e7cf73ca30d8bff06aec403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f16b1b5299b81f1ec78cbdbd2ab6b18c1cf8c2cf6e7cf73ca30d8bff06aec403->leave($__internal_f16b1b5299b81f1ec78cbdbd2ab6b18c1cf8c2cf6e7cf73ca30d8bff06aec403_prof);

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
