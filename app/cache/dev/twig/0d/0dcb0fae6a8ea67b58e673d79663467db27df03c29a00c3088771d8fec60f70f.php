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
        $__internal_0172dd94f53ab8d09fc9d93775ed7d321980a302b3569b9a782d5dc3dfabfe19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0172dd94f53ab8d09fc9d93775ed7d321980a302b3569b9a782d5dc3dfabfe19->enter($__internal_0172dd94f53ab8d09fc9d93775ed7d321980a302b3569b9a782d5dc3dfabfe19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0172dd94f53ab8d09fc9d93775ed7d321980a302b3569b9a782d5dc3dfabfe19->leave($__internal_0172dd94f53ab8d09fc9d93775ed7d321980a302b3569b9a782d5dc3dfabfe19_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_50af4450a508fc0a313c239e087d55a52815e6b97297a9a51a1e7782527021bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50af4450a508fc0a313c239e087d55a52815e6b97297a9a51a1e7782527021bf->enter($__internal_50af4450a508fc0a313c239e087d55a52815e6b97297a9a51a1e7782527021bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_50af4450a508fc0a313c239e087d55a52815e6b97297a9a51a1e7782527021bf->leave($__internal_50af4450a508fc0a313c239e087d55a52815e6b97297a9a51a1e7782527021bf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d7b62eafd66724bc5496307f0f9d991347814d2d0c4ec295a59f96d8b8abca45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b62eafd66724bc5496307f0f9d991347814d2d0c4ec295a59f96d8b8abca45->enter($__internal_d7b62eafd66724bc5496307f0f9d991347814d2d0c4ec295a59f96d8b8abca45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d7b62eafd66724bc5496307f0f9d991347814d2d0c4ec295a59f96d8b8abca45->leave($__internal_d7b62eafd66724bc5496307f0f9d991347814d2d0c4ec295a59f96d8b8abca45_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9dab8f40806ccddc81d0689444b7088fed86924adcc563f2049e776a77847422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dab8f40806ccddc81d0689444b7088fed86924adcc563f2049e776a77847422->enter($__internal_9dab8f40806ccddc81d0689444b7088fed86924adcc563f2049e776a77847422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9dab8f40806ccddc81d0689444b7088fed86924adcc563f2049e776a77847422->leave($__internal_9dab8f40806ccddc81d0689444b7088fed86924adcc563f2049e776a77847422_prof);

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
