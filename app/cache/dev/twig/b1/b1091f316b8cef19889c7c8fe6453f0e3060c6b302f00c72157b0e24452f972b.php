<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d3caa8cea35237c267b3e33abd03498d29fa8b1d095349910f17268c6d760d30 extends Twig_Template
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
        $__internal_a2bcf1bfe7719fa9e01aa53a9360709cddbb1ddeb30566184b240ec19ca0c2fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2bcf1bfe7719fa9e01aa53a9360709cddbb1ddeb30566184b240ec19ca0c2fe->enter($__internal_a2bcf1bfe7719fa9e01aa53a9360709cddbb1ddeb30566184b240ec19ca0c2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2bcf1bfe7719fa9e01aa53a9360709cddbb1ddeb30566184b240ec19ca0c2fe->leave($__internal_a2bcf1bfe7719fa9e01aa53a9360709cddbb1ddeb30566184b240ec19ca0c2fe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4321aa17e847efb418c3ec9c29b716b5e4c28befa62cbe54ca91926126a4bbc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4321aa17e847efb418c3ec9c29b716b5e4c28befa62cbe54ca91926126a4bbc9->enter($__internal_4321aa17e847efb418c3ec9c29b716b5e4c28befa62cbe54ca91926126a4bbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4321aa17e847efb418c3ec9c29b716b5e4c28befa62cbe54ca91926126a4bbc9->leave($__internal_4321aa17e847efb418c3ec9c29b716b5e4c28befa62cbe54ca91926126a4bbc9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2bf52a1aed40bf6a56379e393e88bb42d011d86411787e12c7af3d95a961b287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bf52a1aed40bf6a56379e393e88bb42d011d86411787e12c7af3d95a961b287->enter($__internal_2bf52a1aed40bf6a56379e393e88bb42d011d86411787e12c7af3d95a961b287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2bf52a1aed40bf6a56379e393e88bb42d011d86411787e12c7af3d95a961b287->leave($__internal_2bf52a1aed40bf6a56379e393e88bb42d011d86411787e12c7af3d95a961b287_prof);

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
