<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_08376dfef13fae8630944fbbe37a6b70aeb78ef495b9098d87f4bd42b6fcba67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_25d5374a4dd8f01ac57178af8f085064b0aa4437c2beeb74b80dd9d44ab66f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25d5374a4dd8f01ac57178af8f085064b0aa4437c2beeb74b80dd9d44ab66f5c->enter($__internal_25d5374a4dd8f01ac57178af8f085064b0aa4437c2beeb74b80dd9d44ab66f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25d5374a4dd8f01ac57178af8f085064b0aa4437c2beeb74b80dd9d44ab66f5c->leave($__internal_25d5374a4dd8f01ac57178af8f085064b0aa4437c2beeb74b80dd9d44ab66f5c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ff5c1de5e79b7249546f206968192fa162b797cb79cfb8cbf07829c1d547beb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff5c1de5e79b7249546f206968192fa162b797cb79cfb8cbf07829c1d547beb->enter($__internal_8ff5c1de5e79b7249546f206968192fa162b797cb79cfb8cbf07829c1d547beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8ff5c1de5e79b7249546f206968192fa162b797cb79cfb8cbf07829c1d547beb->leave($__internal_8ff5c1de5e79b7249546f206968192fa162b797cb79cfb8cbf07829c1d547beb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_731088c8f5aacad948af7fc423b3ee79267e689fd5e14e780f068369af3bacb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_731088c8f5aacad948af7fc423b3ee79267e689fd5e14e780f068369af3bacb2->enter($__internal_731088c8f5aacad948af7fc423b3ee79267e689fd5e14e780f068369af3bacb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_731088c8f5aacad948af7fc423b3ee79267e689fd5e14e780f068369af3bacb2->leave($__internal_731088c8f5aacad948af7fc423b3ee79267e689fd5e14e780f068369af3bacb2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
