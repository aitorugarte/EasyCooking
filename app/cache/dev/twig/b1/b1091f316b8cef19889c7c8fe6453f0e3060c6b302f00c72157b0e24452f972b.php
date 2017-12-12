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
        $__internal_650dd8ed9f4f4a7c31c741141d0c0db67e8e45c05da1c6b2caffa891c2817eba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_650dd8ed9f4f4a7c31c741141d0c0db67e8e45c05da1c6b2caffa891c2817eba->enter($__internal_650dd8ed9f4f4a7c31c741141d0c0db67e8e45c05da1c6b2caffa891c2817eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_650dd8ed9f4f4a7c31c741141d0c0db67e8e45c05da1c6b2caffa891c2817eba->leave($__internal_650dd8ed9f4f4a7c31c741141d0c0db67e8e45c05da1c6b2caffa891c2817eba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d39d50797d7cd3da30ae67f49d7046d1c72acb4b42b28d0010f2c8eaf998916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d39d50797d7cd3da30ae67f49d7046d1c72acb4b42b28d0010f2c8eaf998916->enter($__internal_8d39d50797d7cd3da30ae67f49d7046d1c72acb4b42b28d0010f2c8eaf998916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8d39d50797d7cd3da30ae67f49d7046d1c72acb4b42b28d0010f2c8eaf998916->leave($__internal_8d39d50797d7cd3da30ae67f49d7046d1c72acb4b42b28d0010f2c8eaf998916_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c623dfcd5eb4cf32757e1e0d6edd61f854e96a4389f75954ed24bb4cf680421a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c623dfcd5eb4cf32757e1e0d6edd61f854e96a4389f75954ed24bb4cf680421a->enter($__internal_c623dfcd5eb4cf32757e1e0d6edd61f854e96a4389f75954ed24bb4cf680421a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c623dfcd5eb4cf32757e1e0d6edd61f854e96a4389f75954ed24bb4cf680421a->leave($__internal_c623dfcd5eb4cf32757e1e0d6edd61f854e96a4389f75954ed24bb4cf680421a_prof);

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
