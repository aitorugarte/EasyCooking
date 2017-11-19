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
        $__internal_a6cad4fc695d9f15cc81d56cd2370ae8f86671b919c36d499281a37479602fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6cad4fc695d9f15cc81d56cd2370ae8f86671b919c36d499281a37479602fa9->enter($__internal_a6cad4fc695d9f15cc81d56cd2370ae8f86671b919c36d499281a37479602fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6cad4fc695d9f15cc81d56cd2370ae8f86671b919c36d499281a37479602fa9->leave($__internal_a6cad4fc695d9f15cc81d56cd2370ae8f86671b919c36d499281a37479602fa9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_859b065943e557982094a2de3f31d567f9f042c2793b0a9508d9c081b3993d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_859b065943e557982094a2de3f31d567f9f042c2793b0a9508d9c081b3993d2f->enter($__internal_859b065943e557982094a2de3f31d567f9f042c2793b0a9508d9c081b3993d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_859b065943e557982094a2de3f31d567f9f042c2793b0a9508d9c081b3993d2f->leave($__internal_859b065943e557982094a2de3f31d567f9f042c2793b0a9508d9c081b3993d2f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6cab9012e740169f450920c5e6fe31fdba6a4717310f731295dc6aeafe1b0ec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cab9012e740169f450920c5e6fe31fdba6a4717310f731295dc6aeafe1b0ec6->enter($__internal_6cab9012e740169f450920c5e6fe31fdba6a4717310f731295dc6aeafe1b0ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6cab9012e740169f450920c5e6fe31fdba6a4717310f731295dc6aeafe1b0ec6->leave($__internal_6cab9012e740169f450920c5e6fe31fdba6a4717310f731295dc6aeafe1b0ec6_prof);

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
