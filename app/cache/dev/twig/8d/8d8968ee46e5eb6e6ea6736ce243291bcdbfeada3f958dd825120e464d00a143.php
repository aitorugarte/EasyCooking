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
        $__internal_86549db949c86f03fa12406c648a2c144949b8a71cf264126cd4e9a31605101c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86549db949c86f03fa12406c648a2c144949b8a71cf264126cd4e9a31605101c->enter($__internal_86549db949c86f03fa12406c648a2c144949b8a71cf264126cd4e9a31605101c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86549db949c86f03fa12406c648a2c144949b8a71cf264126cd4e9a31605101c->leave($__internal_86549db949c86f03fa12406c648a2c144949b8a71cf264126cd4e9a31605101c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_88e445f4217863255b142320a161c7aaf5af773d13b17f48d0cafaa23877ef91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88e445f4217863255b142320a161c7aaf5af773d13b17f48d0cafaa23877ef91->enter($__internal_88e445f4217863255b142320a161c7aaf5af773d13b17f48d0cafaa23877ef91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_88e445f4217863255b142320a161c7aaf5af773d13b17f48d0cafaa23877ef91->leave($__internal_88e445f4217863255b142320a161c7aaf5af773d13b17f48d0cafaa23877ef91_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_db63c97e2ef0dc07132b490ee2cac4b91ba71d1e6d5a35d05c3afcdab9cdc3a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db63c97e2ef0dc07132b490ee2cac4b91ba71d1e6d5a35d05c3afcdab9cdc3a7->enter($__internal_db63c97e2ef0dc07132b490ee2cac4b91ba71d1e6d5a35d05c3afcdab9cdc3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_db63c97e2ef0dc07132b490ee2cac4b91ba71d1e6d5a35d05c3afcdab9cdc3a7->leave($__internal_db63c97e2ef0dc07132b490ee2cac4b91ba71d1e6d5a35d05c3afcdab9cdc3a7_prof);

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
