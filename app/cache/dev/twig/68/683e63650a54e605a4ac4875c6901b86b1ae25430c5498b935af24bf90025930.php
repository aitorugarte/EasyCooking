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
        $__internal_0687f3343112f436465e1d78ca16d0d108ce01c5ec2f0e80563ca5a5d844371d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0687f3343112f436465e1d78ca16d0d108ce01c5ec2f0e80563ca5a5d844371d->enter($__internal_0687f3343112f436465e1d78ca16d0d108ce01c5ec2f0e80563ca5a5d844371d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0687f3343112f436465e1d78ca16d0d108ce01c5ec2f0e80563ca5a5d844371d->leave($__internal_0687f3343112f436465e1d78ca16d0d108ce01c5ec2f0e80563ca5a5d844371d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_11b116b0fdef9953c953f827cedce295b350bd2300170e8d6f22fd4c80603597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11b116b0fdef9953c953f827cedce295b350bd2300170e8d6f22fd4c80603597->enter($__internal_11b116b0fdef9953c953f827cedce295b350bd2300170e8d6f22fd4c80603597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_11b116b0fdef9953c953f827cedce295b350bd2300170e8d6f22fd4c80603597->leave($__internal_11b116b0fdef9953c953f827cedce295b350bd2300170e8d6f22fd4c80603597_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4faea81b1b4388d79e743a5ffbdeb78d6f922203bdc7635afa99861964aab7ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4faea81b1b4388d79e743a5ffbdeb78d6f922203bdc7635afa99861964aab7ab->enter($__internal_4faea81b1b4388d79e743a5ffbdeb78d6f922203bdc7635afa99861964aab7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4faea81b1b4388d79e743a5ffbdeb78d6f922203bdc7635afa99861964aab7ab->leave($__internal_4faea81b1b4388d79e743a5ffbdeb78d6f922203bdc7635afa99861964aab7ab_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_85a2ba983c91986095989bc6595851a655835d6f58f2a96b59400b9aaa7ad085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85a2ba983c91986095989bc6595851a655835d6f58f2a96b59400b9aaa7ad085->enter($__internal_85a2ba983c91986095989bc6595851a655835d6f58f2a96b59400b9aaa7ad085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_85a2ba983c91986095989bc6595851a655835d6f58f2a96b59400b9aaa7ad085->leave($__internal_85a2ba983c91986095989bc6595851a655835d6f58f2a96b59400b9aaa7ad085_prof);

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
