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
        $__internal_809b6b990555d158edd8edd93fcb63187484979b44e1a8589841523741505dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_809b6b990555d158edd8edd93fcb63187484979b44e1a8589841523741505dac->enter($__internal_809b6b990555d158edd8edd93fcb63187484979b44e1a8589841523741505dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_809b6b990555d158edd8edd93fcb63187484979b44e1a8589841523741505dac->leave($__internal_809b6b990555d158edd8edd93fcb63187484979b44e1a8589841523741505dac_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f67c57c02be4dd8f8d86494691c81ce333daadbb13c63de8f43ef79836a3a657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f67c57c02be4dd8f8d86494691c81ce333daadbb13c63de8f43ef79836a3a657->enter($__internal_f67c57c02be4dd8f8d86494691c81ce333daadbb13c63de8f43ef79836a3a657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f67c57c02be4dd8f8d86494691c81ce333daadbb13c63de8f43ef79836a3a657->leave($__internal_f67c57c02be4dd8f8d86494691c81ce333daadbb13c63de8f43ef79836a3a657_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7d6a1e1806768484a47da13e7328e0807b042cb9cb811ced855d71415ee3201e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d6a1e1806768484a47da13e7328e0807b042cb9cb811ced855d71415ee3201e->enter($__internal_7d6a1e1806768484a47da13e7328e0807b042cb9cb811ced855d71415ee3201e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7d6a1e1806768484a47da13e7328e0807b042cb9cb811ced855d71415ee3201e->leave($__internal_7d6a1e1806768484a47da13e7328e0807b042cb9cb811ced855d71415ee3201e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5cb88611667f3adf6c09720834e48b22bbc3952c57907571c8ade1eef5d51596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cb88611667f3adf6c09720834e48b22bbc3952c57907571c8ade1eef5d51596->enter($__internal_5cb88611667f3adf6c09720834e48b22bbc3952c57907571c8ade1eef5d51596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5cb88611667f3adf6c09720834e48b22bbc3952c57907571c8ade1eef5d51596->leave($__internal_5cb88611667f3adf6c09720834e48b22bbc3952c57907571c8ade1eef5d51596_prof);

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
