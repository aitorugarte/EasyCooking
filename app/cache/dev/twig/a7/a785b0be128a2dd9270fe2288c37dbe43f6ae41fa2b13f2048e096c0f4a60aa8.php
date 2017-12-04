<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e4d70fa4b26812d0270b58d85759914e4f58f09509c07ef3d8768d1fff4610e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_29b3d6f55a6a00704a9ab003f25f6a3f478eb2b21eed9fca10d2f06a8d55c6e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29b3d6f55a6a00704a9ab003f25f6a3f478eb2b21eed9fca10d2f06a8d55c6e4->enter($__internal_29b3d6f55a6a00704a9ab003f25f6a3f478eb2b21eed9fca10d2f06a8d55c6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29b3d6f55a6a00704a9ab003f25f6a3f478eb2b21eed9fca10d2f06a8d55c6e4->leave($__internal_29b3d6f55a6a00704a9ab003f25f6a3f478eb2b21eed9fca10d2f06a8d55c6e4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cdbf7874008c4723c8bf55e2a39cac15d7b539bbf52ed42fa6a59a1ac51103ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdbf7874008c4723c8bf55e2a39cac15d7b539bbf52ed42fa6a59a1ac51103ff->enter($__internal_cdbf7874008c4723c8bf55e2a39cac15d7b539bbf52ed42fa6a59a1ac51103ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cdbf7874008c4723c8bf55e2a39cac15d7b539bbf52ed42fa6a59a1ac51103ff->leave($__internal_cdbf7874008c4723c8bf55e2a39cac15d7b539bbf52ed42fa6a59a1ac51103ff_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f6a5d79147158fbed0b19009ecb60fe967b10aa39d457d09b0e40dc859257eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a5d79147158fbed0b19009ecb60fe967b10aa39d457d09b0e40dc859257eb5->enter($__internal_f6a5d79147158fbed0b19009ecb60fe967b10aa39d457d09b0e40dc859257eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f6a5d79147158fbed0b19009ecb60fe967b10aa39d457d09b0e40dc859257eb5->leave($__internal_f6a5d79147158fbed0b19009ecb60fe967b10aa39d457d09b0e40dc859257eb5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f05d651e580ae5fe4a68a98bd664efce6ec7fdac18b0cebf603c0b645e6370f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f05d651e580ae5fe4a68a98bd664efce6ec7fdac18b0cebf603c0b645e6370f3->enter($__internal_f05d651e580ae5fe4a68a98bd664efce6ec7fdac18b0cebf603c0b645e6370f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f05d651e580ae5fe4a68a98bd664efce6ec7fdac18b0cebf603c0b645e6370f3->leave($__internal_f05d651e580ae5fe4a68a98bd664efce6ec7fdac18b0cebf603c0b645e6370f3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
