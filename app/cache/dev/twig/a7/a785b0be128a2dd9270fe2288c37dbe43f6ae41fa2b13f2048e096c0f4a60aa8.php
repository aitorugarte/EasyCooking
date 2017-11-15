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
        $__internal_9b7dc05ca7017741a95546b5740057562ff638f7b4b21c9c47d10c10e8acb14a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b7dc05ca7017741a95546b5740057562ff638f7b4b21c9c47d10c10e8acb14a->enter($__internal_9b7dc05ca7017741a95546b5740057562ff638f7b4b21c9c47d10c10e8acb14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b7dc05ca7017741a95546b5740057562ff638f7b4b21c9c47d10c10e8acb14a->leave($__internal_9b7dc05ca7017741a95546b5740057562ff638f7b4b21c9c47d10c10e8acb14a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e30140c676ccf1aad0b95c34f1f2b6cfd1c2330e2c64cb705397a414277c66de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e30140c676ccf1aad0b95c34f1f2b6cfd1c2330e2c64cb705397a414277c66de->enter($__internal_e30140c676ccf1aad0b95c34f1f2b6cfd1c2330e2c64cb705397a414277c66de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e30140c676ccf1aad0b95c34f1f2b6cfd1c2330e2c64cb705397a414277c66de->leave($__internal_e30140c676ccf1aad0b95c34f1f2b6cfd1c2330e2c64cb705397a414277c66de_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9a22529a783bace04eb1208cda9c4a887ba789c6def5474e47fc6eec32d15f50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a22529a783bace04eb1208cda9c4a887ba789c6def5474e47fc6eec32d15f50->enter($__internal_9a22529a783bace04eb1208cda9c4a887ba789c6def5474e47fc6eec32d15f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9a22529a783bace04eb1208cda9c4a887ba789c6def5474e47fc6eec32d15f50->leave($__internal_9a22529a783bace04eb1208cda9c4a887ba789c6def5474e47fc6eec32d15f50_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d45e398893042b808b133a7b98a620150d50da2bc2b9f3064a6cd87a222703e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d45e398893042b808b133a7b98a620150d50da2bc2b9f3064a6cd87a222703e9->enter($__internal_d45e398893042b808b133a7b98a620150d50da2bc2b9f3064a6cd87a222703e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d45e398893042b808b133a7b98a620150d50da2bc2b9f3064a6cd87a222703e9->leave($__internal_d45e398893042b808b133a7b98a620150d50da2bc2b9f3064a6cd87a222703e9_prof);

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
