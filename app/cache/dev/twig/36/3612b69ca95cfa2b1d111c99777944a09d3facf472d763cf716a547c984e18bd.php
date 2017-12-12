<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b6131bd90daccf5af172ed490836fefa13892b9078781615be9d963a3411b4b0 extends Twig_Template
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
        $__internal_f3f56578e71ef844697789eb080ecb74a3ce9fdfd5a7385321ec36e2122dfb62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3f56578e71ef844697789eb080ecb74a3ce9fdfd5a7385321ec36e2122dfb62->enter($__internal_f3f56578e71ef844697789eb080ecb74a3ce9fdfd5a7385321ec36e2122dfb62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3f56578e71ef844697789eb080ecb74a3ce9fdfd5a7385321ec36e2122dfb62->leave($__internal_f3f56578e71ef844697789eb080ecb74a3ce9fdfd5a7385321ec36e2122dfb62_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_11d40a5cccba51850669de9b9f0a0a494fa9966fb6de0c0303adfecf15dc8136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11d40a5cccba51850669de9b9f0a0a494fa9966fb6de0c0303adfecf15dc8136->enter($__internal_11d40a5cccba51850669de9b9f0a0a494fa9966fb6de0c0303adfecf15dc8136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_11d40a5cccba51850669de9b9f0a0a494fa9966fb6de0c0303adfecf15dc8136->leave($__internal_11d40a5cccba51850669de9b9f0a0a494fa9966fb6de0c0303adfecf15dc8136_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_078e674bdcf39f214f5819d4cfd11fdf91825b5005e0702ddb3ad0ccd03d5bb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_078e674bdcf39f214f5819d4cfd11fdf91825b5005e0702ddb3ad0ccd03d5bb1->enter($__internal_078e674bdcf39f214f5819d4cfd11fdf91825b5005e0702ddb3ad0ccd03d5bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_078e674bdcf39f214f5819d4cfd11fdf91825b5005e0702ddb3ad0ccd03d5bb1->leave($__internal_078e674bdcf39f214f5819d4cfd11fdf91825b5005e0702ddb3ad0ccd03d5bb1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4cdf4af459ebb4c54d7d4940832fda346219545b95259c93ad31fd4416706ebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cdf4af459ebb4c54d7d4940832fda346219545b95259c93ad31fd4416706ebc->enter($__internal_4cdf4af459ebb4c54d7d4940832fda346219545b95259c93ad31fd4416706ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4cdf4af459ebb4c54d7d4940832fda346219545b95259c93ad31fd4416706ebc->leave($__internal_4cdf4af459ebb4c54d7d4940832fda346219545b95259c93ad31fd4416706ebc_prof);

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
