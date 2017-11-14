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
        $__internal_a3dd355d0180523f34d07c156c6b6e96d884dae220a8a14662932ce1857dfc5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3dd355d0180523f34d07c156c6b6e96d884dae220a8a14662932ce1857dfc5f->enter($__internal_a3dd355d0180523f34d07c156c6b6e96d884dae220a8a14662932ce1857dfc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3dd355d0180523f34d07c156c6b6e96d884dae220a8a14662932ce1857dfc5f->leave($__internal_a3dd355d0180523f34d07c156c6b6e96d884dae220a8a14662932ce1857dfc5f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eb4a3d3bb90209d9f2536ba7a713416f33b0b4305a1561ae4cc3ef408cd0111c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb4a3d3bb90209d9f2536ba7a713416f33b0b4305a1561ae4cc3ef408cd0111c->enter($__internal_eb4a3d3bb90209d9f2536ba7a713416f33b0b4305a1561ae4cc3ef408cd0111c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eb4a3d3bb90209d9f2536ba7a713416f33b0b4305a1561ae4cc3ef408cd0111c->leave($__internal_eb4a3d3bb90209d9f2536ba7a713416f33b0b4305a1561ae4cc3ef408cd0111c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f77a4ffb587de75af49bdb955672805e06c491aff5639893e25703456c2e9b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77a4ffb587de75af49bdb955672805e06c491aff5639893e25703456c2e9b51->enter($__internal_f77a4ffb587de75af49bdb955672805e06c491aff5639893e25703456c2e9b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f77a4ffb587de75af49bdb955672805e06c491aff5639893e25703456c2e9b51->leave($__internal_f77a4ffb587de75af49bdb955672805e06c491aff5639893e25703456c2e9b51_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bd39108a8efed1fe33a63c314ff16a085e9467367c2134bb51b4112c57c3c304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd39108a8efed1fe33a63c314ff16a085e9467367c2134bb51b4112c57c3c304->enter($__internal_bd39108a8efed1fe33a63c314ff16a085e9467367c2134bb51b4112c57c3c304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bd39108a8efed1fe33a63c314ff16a085e9467367c2134bb51b4112c57c3c304->leave($__internal_bd39108a8efed1fe33a63c314ff16a085e9467367c2134bb51b4112c57c3c304_prof);

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
