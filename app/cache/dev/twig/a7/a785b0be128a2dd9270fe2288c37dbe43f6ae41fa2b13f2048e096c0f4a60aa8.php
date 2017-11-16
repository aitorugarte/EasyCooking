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
        $__internal_19ef2a3d0097c3be74f91aa6966deabc363b6120b3fe5a5c44affe58653a073e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ef2a3d0097c3be74f91aa6966deabc363b6120b3fe5a5c44affe58653a073e->enter($__internal_19ef2a3d0097c3be74f91aa6966deabc363b6120b3fe5a5c44affe58653a073e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19ef2a3d0097c3be74f91aa6966deabc363b6120b3fe5a5c44affe58653a073e->leave($__internal_19ef2a3d0097c3be74f91aa6966deabc363b6120b3fe5a5c44affe58653a073e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_69f7b63c332468b7144bc5696122ad0be809aa2b9e7a36a6f67f78ba77eb67bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f7b63c332468b7144bc5696122ad0be809aa2b9e7a36a6f67f78ba77eb67bf->enter($__internal_69f7b63c332468b7144bc5696122ad0be809aa2b9e7a36a6f67f78ba77eb67bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_69f7b63c332468b7144bc5696122ad0be809aa2b9e7a36a6f67f78ba77eb67bf->leave($__internal_69f7b63c332468b7144bc5696122ad0be809aa2b9e7a36a6f67f78ba77eb67bf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bff1e2f2b692598433cb0ff11c76558936fec27c2eef8da9fc51676d689a4cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bff1e2f2b692598433cb0ff11c76558936fec27c2eef8da9fc51676d689a4cbd->enter($__internal_bff1e2f2b692598433cb0ff11c76558936fec27c2eef8da9fc51676d689a4cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bff1e2f2b692598433cb0ff11c76558936fec27c2eef8da9fc51676d689a4cbd->leave($__internal_bff1e2f2b692598433cb0ff11c76558936fec27c2eef8da9fc51676d689a4cbd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1765ecd7fc4bef062cd3fa303438c796d312551cd60b0c40f3adf36492aec583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1765ecd7fc4bef062cd3fa303438c796d312551cd60b0c40f3adf36492aec583->enter($__internal_1765ecd7fc4bef062cd3fa303438c796d312551cd60b0c40f3adf36492aec583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1765ecd7fc4bef062cd3fa303438c796d312551cd60b0c40f3adf36492aec583->leave($__internal_1765ecd7fc4bef062cd3fa303438c796d312551cd60b0c40f3adf36492aec583_prof);

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
