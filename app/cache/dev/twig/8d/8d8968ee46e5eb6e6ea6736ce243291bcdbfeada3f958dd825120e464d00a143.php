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
        $__internal_026e4d6275feb7bce971f68e6517cbd4a2b390c440d7ad37d853779bea64de1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_026e4d6275feb7bce971f68e6517cbd4a2b390c440d7ad37d853779bea64de1d->enter($__internal_026e4d6275feb7bce971f68e6517cbd4a2b390c440d7ad37d853779bea64de1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_026e4d6275feb7bce971f68e6517cbd4a2b390c440d7ad37d853779bea64de1d->leave($__internal_026e4d6275feb7bce971f68e6517cbd4a2b390c440d7ad37d853779bea64de1d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff85d876cdb5227db8f6c3ecf6d2558b73c088a492ed5419cd9b07001ae93822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff85d876cdb5227db8f6c3ecf6d2558b73c088a492ed5419cd9b07001ae93822->enter($__internal_ff85d876cdb5227db8f6c3ecf6d2558b73c088a492ed5419cd9b07001ae93822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ff85d876cdb5227db8f6c3ecf6d2558b73c088a492ed5419cd9b07001ae93822->leave($__internal_ff85d876cdb5227db8f6c3ecf6d2558b73c088a492ed5419cd9b07001ae93822_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_234e7e592e067a58f3e86921311b7e315cc2741c132a801dbef4e24795be4a21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_234e7e592e067a58f3e86921311b7e315cc2741c132a801dbef4e24795be4a21->enter($__internal_234e7e592e067a58f3e86921311b7e315cc2741c132a801dbef4e24795be4a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_234e7e592e067a58f3e86921311b7e315cc2741c132a801dbef4e24795be4a21->leave($__internal_234e7e592e067a58f3e86921311b7e315cc2741c132a801dbef4e24795be4a21_prof);

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
