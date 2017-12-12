<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_8bfea18e871773f1de32ba9ec16a7c19b38cd9ef2f5a3d3cd2d33fba768a3e56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f53aa7ab3fcf6a914229b9785abfce0dad0558d552704b473cc763b966fbe7bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f53aa7ab3fcf6a914229b9785abfce0dad0558d552704b473cc763b966fbe7bb->enter($__internal_f53aa7ab3fcf6a914229b9785abfce0dad0558d552704b473cc763b966fbe7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f53aa7ab3fcf6a914229b9785abfce0dad0558d552704b473cc763b966fbe7bb->leave($__internal_f53aa7ab3fcf6a914229b9785abfce0dad0558d552704b473cc763b966fbe7bb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d08b988143c95a65a94d1ec5940af4a271abc112ef6b34db7d657c4001d2168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d08b988143c95a65a94d1ec5940af4a271abc112ef6b34db7d657c4001d2168->enter($__internal_6d08b988143c95a65a94d1ec5940af4a271abc112ef6b34db7d657c4001d2168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6d08b988143c95a65a94d1ec5940af4a271abc112ef6b34db7d657c4001d2168->leave($__internal_6d08b988143c95a65a94d1ec5940af4a271abc112ef6b34db7d657c4001d2168_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_35b67646b2dbdee2c6f67e657559e4589536b0394cd3cac9b65d0c9f17bd4bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b67646b2dbdee2c6f67e657559e4589536b0394cd3cac9b65d0c9f17bd4bdc->enter($__internal_35b67646b2dbdee2c6f67e657559e4589536b0394cd3cac9b65d0c9f17bd4bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_35b67646b2dbdee2c6f67e657559e4589536b0394cd3cac9b65d0c9f17bd4bdc->leave($__internal_35b67646b2dbdee2c6f67e657559e4589536b0394cd3cac9b65d0c9f17bd4bdc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
