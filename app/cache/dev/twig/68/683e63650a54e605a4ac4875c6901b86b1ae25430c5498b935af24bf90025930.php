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
        $__internal_6807356fd8b09d4e5e5b0c491365960b5b430c901a6dc5e43a048302371a79de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6807356fd8b09d4e5e5b0c491365960b5b430c901a6dc5e43a048302371a79de->enter($__internal_6807356fd8b09d4e5e5b0c491365960b5b430c901a6dc5e43a048302371a79de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6807356fd8b09d4e5e5b0c491365960b5b430c901a6dc5e43a048302371a79de->leave($__internal_6807356fd8b09d4e5e5b0c491365960b5b430c901a6dc5e43a048302371a79de_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_73f0550c53324f8e53c518bf52e3f5254bb2bb75a946ed626d49ec07a9da2807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73f0550c53324f8e53c518bf52e3f5254bb2bb75a946ed626d49ec07a9da2807->enter($__internal_73f0550c53324f8e53c518bf52e3f5254bb2bb75a946ed626d49ec07a9da2807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_73f0550c53324f8e53c518bf52e3f5254bb2bb75a946ed626d49ec07a9da2807->leave($__internal_73f0550c53324f8e53c518bf52e3f5254bb2bb75a946ed626d49ec07a9da2807_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f37eacc9a6ab3b49349dcb5f0a06675d5f79b6dcda16e4ace38bda690c38ae05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f37eacc9a6ab3b49349dcb5f0a06675d5f79b6dcda16e4ace38bda690c38ae05->enter($__internal_f37eacc9a6ab3b49349dcb5f0a06675d5f79b6dcda16e4ace38bda690c38ae05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f37eacc9a6ab3b49349dcb5f0a06675d5f79b6dcda16e4ace38bda690c38ae05->leave($__internal_f37eacc9a6ab3b49349dcb5f0a06675d5f79b6dcda16e4ace38bda690c38ae05_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_517032d04c0a07a19e5f4fb21e5343c0da7387aa8d08cc9ebfe0b76c9ca1e032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_517032d04c0a07a19e5f4fb21e5343c0da7387aa8d08cc9ebfe0b76c9ca1e032->enter($__internal_517032d04c0a07a19e5f4fb21e5343c0da7387aa8d08cc9ebfe0b76c9ca1e032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_517032d04c0a07a19e5f4fb21e5343c0da7387aa8d08cc9ebfe0b76c9ca1e032->leave($__internal_517032d04c0a07a19e5f4fb21e5343c0da7387aa8d08cc9ebfe0b76c9ca1e032_prof);

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
