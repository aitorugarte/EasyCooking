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
        $__internal_afe329e9265e93e097f4101468322d848d10010531fa1deccc9d845f1e8a25a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afe329e9265e93e097f4101468322d848d10010531fa1deccc9d845f1e8a25a6->enter($__internal_afe329e9265e93e097f4101468322d848d10010531fa1deccc9d845f1e8a25a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afe329e9265e93e097f4101468322d848d10010531fa1deccc9d845f1e8a25a6->leave($__internal_afe329e9265e93e097f4101468322d848d10010531fa1deccc9d845f1e8a25a6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1da5c478afdab59ff7cdbb7401169a133a761a92a726471e6828fdc194d98bde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1da5c478afdab59ff7cdbb7401169a133a761a92a726471e6828fdc194d98bde->enter($__internal_1da5c478afdab59ff7cdbb7401169a133a761a92a726471e6828fdc194d98bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1da5c478afdab59ff7cdbb7401169a133a761a92a726471e6828fdc194d98bde->leave($__internal_1da5c478afdab59ff7cdbb7401169a133a761a92a726471e6828fdc194d98bde_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_043755cb853aaec0347cb40faae336368a5ac0de4c31b60927e5f68c8ff0b80a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_043755cb853aaec0347cb40faae336368a5ac0de4c31b60927e5f68c8ff0b80a->enter($__internal_043755cb853aaec0347cb40faae336368a5ac0de4c31b60927e5f68c8ff0b80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_043755cb853aaec0347cb40faae336368a5ac0de4c31b60927e5f68c8ff0b80a->leave($__internal_043755cb853aaec0347cb40faae336368a5ac0de4c31b60927e5f68c8ff0b80a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0f3b74e2e20181e425d62d5a0a6927959cfaf9a07409e3d300a690ca1df350c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f3b74e2e20181e425d62d5a0a6927959cfaf9a07409e3d300a690ca1df350c9->enter($__internal_0f3b74e2e20181e425d62d5a0a6927959cfaf9a07409e3d300a690ca1df350c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0f3b74e2e20181e425d62d5a0a6927959cfaf9a07409e3d300a690ca1df350c9->leave($__internal_0f3b74e2e20181e425d62d5a0a6927959cfaf9a07409e3d300a690ca1df350c9_prof);

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
