<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_8fba5c5697898b39c7af9b84e38757e94be5dbc7c0075c3b2301dbb9029262d9 extends Twig_Template
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
        $__internal_95bc177695709a4bd2c7b703555684252858e2890562bfbcaf479501b34d340c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95bc177695709a4bd2c7b703555684252858e2890562bfbcaf479501b34d340c->enter($__internal_95bc177695709a4bd2c7b703555684252858e2890562bfbcaf479501b34d340c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95bc177695709a4bd2c7b703555684252858e2890562bfbcaf479501b34d340c->leave($__internal_95bc177695709a4bd2c7b703555684252858e2890562bfbcaf479501b34d340c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5d4491f5ea19756d91401055c1f465ec56f993c1663626056d626221016aabe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5d4491f5ea19756d91401055c1f465ec56f993c1663626056d626221016aabe->enter($__internal_e5d4491f5ea19756d91401055c1f465ec56f993c1663626056d626221016aabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e5d4491f5ea19756d91401055c1f465ec56f993c1663626056d626221016aabe->leave($__internal_e5d4491f5ea19756d91401055c1f465ec56f993c1663626056d626221016aabe_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_74e1bf230df9e46ee7942535930a1d77ef7a0ad387a4089bf6ff10dc7aec6a1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e1bf230df9e46ee7942535930a1d77ef7a0ad387a4089bf6ff10dc7aec6a1b->enter($__internal_74e1bf230df9e46ee7942535930a1d77ef7a0ad387a4089bf6ff10dc7aec6a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_74e1bf230df9e46ee7942535930a1d77ef7a0ad387a4089bf6ff10dc7aec6a1b->leave($__internal_74e1bf230df9e46ee7942535930a1d77ef7a0ad387a4089bf6ff10dc7aec6a1b_prof);

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
