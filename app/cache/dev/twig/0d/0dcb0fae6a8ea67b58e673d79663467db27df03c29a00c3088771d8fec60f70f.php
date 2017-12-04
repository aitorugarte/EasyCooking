<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d02573ad3e1931d251f7b5eb8a85540b2b7bce5f05c854983ca14b6afaa602c8 extends Twig_Template
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
        $__internal_25147944722b6cf7d663048d9ecdfb8f6bb17cef906aa49541f8a5643b2cf715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25147944722b6cf7d663048d9ecdfb8f6bb17cef906aa49541f8a5643b2cf715->enter($__internal_25147944722b6cf7d663048d9ecdfb8f6bb17cef906aa49541f8a5643b2cf715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25147944722b6cf7d663048d9ecdfb8f6bb17cef906aa49541f8a5643b2cf715->leave($__internal_25147944722b6cf7d663048d9ecdfb8f6bb17cef906aa49541f8a5643b2cf715_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c1b8d8d79b31ed8159f4828c4dcbac459230663bd66796b4673de502de08fe14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b8d8d79b31ed8159f4828c4dcbac459230663bd66796b4673de502de08fe14->enter($__internal_c1b8d8d79b31ed8159f4828c4dcbac459230663bd66796b4673de502de08fe14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c1b8d8d79b31ed8159f4828c4dcbac459230663bd66796b4673de502de08fe14->leave($__internal_c1b8d8d79b31ed8159f4828c4dcbac459230663bd66796b4673de502de08fe14_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_988ca95b018b7073a455ac124a7a3e63ebbfdbc6937c3a7c2096218162bd8e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_988ca95b018b7073a455ac124a7a3e63ebbfdbc6937c3a7c2096218162bd8e55->enter($__internal_988ca95b018b7073a455ac124a7a3e63ebbfdbc6937c3a7c2096218162bd8e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_988ca95b018b7073a455ac124a7a3e63ebbfdbc6937c3a7c2096218162bd8e55->leave($__internal_988ca95b018b7073a455ac124a7a3e63ebbfdbc6937c3a7c2096218162bd8e55_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_28a0d479f14b77d0ea75a67b095ce79ed30bacc1bb6e702c2bf33803fb3e0a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28a0d479f14b77d0ea75a67b095ce79ed30bacc1bb6e702c2bf33803fb3e0a1e->enter($__internal_28a0d479f14b77d0ea75a67b095ce79ed30bacc1bb6e702c2bf33803fb3e0a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_28a0d479f14b77d0ea75a67b095ce79ed30bacc1bb6e702c2bf33803fb3e0a1e->leave($__internal_28a0d479f14b77d0ea75a67b095ce79ed30bacc1bb6e702c2bf33803fb3e0a1e_prof);

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
