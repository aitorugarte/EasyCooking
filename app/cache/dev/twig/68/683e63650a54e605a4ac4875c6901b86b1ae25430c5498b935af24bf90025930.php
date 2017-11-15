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
        $__internal_4ed8caddf2c61c22db974bde75cfa68e25742ddb00735303891864849a96a442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ed8caddf2c61c22db974bde75cfa68e25742ddb00735303891864849a96a442->enter($__internal_4ed8caddf2c61c22db974bde75cfa68e25742ddb00735303891864849a96a442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ed8caddf2c61c22db974bde75cfa68e25742ddb00735303891864849a96a442->leave($__internal_4ed8caddf2c61c22db974bde75cfa68e25742ddb00735303891864849a96a442_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ae7243553a41c0b6258402a1b735058261aa95f402e85822662f1a6fbdb5c6df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae7243553a41c0b6258402a1b735058261aa95f402e85822662f1a6fbdb5c6df->enter($__internal_ae7243553a41c0b6258402a1b735058261aa95f402e85822662f1a6fbdb5c6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ae7243553a41c0b6258402a1b735058261aa95f402e85822662f1a6fbdb5c6df->leave($__internal_ae7243553a41c0b6258402a1b735058261aa95f402e85822662f1a6fbdb5c6df_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e38d552498303e81bce0ed1e5f57439708df36b32b82713b9b22b4d5f8143ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e38d552498303e81bce0ed1e5f57439708df36b32b82713b9b22b4d5f8143ba3->enter($__internal_e38d552498303e81bce0ed1e5f57439708df36b32b82713b9b22b4d5f8143ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e38d552498303e81bce0ed1e5f57439708df36b32b82713b9b22b4d5f8143ba3->leave($__internal_e38d552498303e81bce0ed1e5f57439708df36b32b82713b9b22b4d5f8143ba3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e211af22dbe634766214010e6ccbaa4a780733fd44c2c32aa6a904c6bc7e3848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e211af22dbe634766214010e6ccbaa4a780733fd44c2c32aa6a904c6bc7e3848->enter($__internal_e211af22dbe634766214010e6ccbaa4a780733fd44c2c32aa6a904c6bc7e3848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e211af22dbe634766214010e6ccbaa4a780733fd44c2c32aa6a904c6bc7e3848->leave($__internal_e211af22dbe634766214010e6ccbaa4a780733fd44c2c32aa6a904c6bc7e3848_prof);

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
