<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f492cb492156c9f972a8de01df4b158f7757e607c029cd381c2b31fbf7b282b6 extends Twig_Template
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
        $__internal_041a12b4f842cd5d230af30c88d75ec12453ca2e09235f80822b5fdc3f1bfbf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_041a12b4f842cd5d230af30c88d75ec12453ca2e09235f80822b5fdc3f1bfbf2->enter($__internal_041a12b4f842cd5d230af30c88d75ec12453ca2e09235f80822b5fdc3f1bfbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_041a12b4f842cd5d230af30c88d75ec12453ca2e09235f80822b5fdc3f1bfbf2->leave($__internal_041a12b4f842cd5d230af30c88d75ec12453ca2e09235f80822b5fdc3f1bfbf2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5231be432874f2a82cd2b485142f7cbe92185c6b3e8e179610b7b10b09a28aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5231be432874f2a82cd2b485142f7cbe92185c6b3e8e179610b7b10b09a28aa2->enter($__internal_5231be432874f2a82cd2b485142f7cbe92185c6b3e8e179610b7b10b09a28aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5231be432874f2a82cd2b485142f7cbe92185c6b3e8e179610b7b10b09a28aa2->leave($__internal_5231be432874f2a82cd2b485142f7cbe92185c6b3e8e179610b7b10b09a28aa2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_20f3e19d961d2a2a343ac2c8279d074ec4625629f4d6f7e12d3bc644719ececf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f3e19d961d2a2a343ac2c8279d074ec4625629f4d6f7e12d3bc644719ececf->enter($__internal_20f3e19d961d2a2a343ac2c8279d074ec4625629f4d6f7e12d3bc644719ececf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_20f3e19d961d2a2a343ac2c8279d074ec4625629f4d6f7e12d3bc644719ececf->leave($__internal_20f3e19d961d2a2a343ac2c8279d074ec4625629f4d6f7e12d3bc644719ececf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c5273c89a78a42474dd0825d87fa620a18d3c52101d2d95e5318374eea061d66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5273c89a78a42474dd0825d87fa620a18d3c52101d2d95e5318374eea061d66->enter($__internal_c5273c89a78a42474dd0825d87fa620a18d3c52101d2d95e5318374eea061d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c5273c89a78a42474dd0825d87fa620a18d3c52101d2d95e5318374eea061d66->leave($__internal_c5273c89a78a42474dd0825d87fa620a18d3c52101d2d95e5318374eea061d66_prof);

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
