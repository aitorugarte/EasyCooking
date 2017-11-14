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
        $__internal_dd3a007d416bfda4e8d1cc3854a89ff6cf349a2a39949bdc2c5dedf2b5667be3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd3a007d416bfda4e8d1cc3854a89ff6cf349a2a39949bdc2c5dedf2b5667be3->enter($__internal_dd3a007d416bfda4e8d1cc3854a89ff6cf349a2a39949bdc2c5dedf2b5667be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd3a007d416bfda4e8d1cc3854a89ff6cf349a2a39949bdc2c5dedf2b5667be3->leave($__internal_dd3a007d416bfda4e8d1cc3854a89ff6cf349a2a39949bdc2c5dedf2b5667be3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a790c94d7263797a98fbde76d4ca8322e7b3bee63589f104b5e5161289df08c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a790c94d7263797a98fbde76d4ca8322e7b3bee63589f104b5e5161289df08c->enter($__internal_0a790c94d7263797a98fbde76d4ca8322e7b3bee63589f104b5e5161289df08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0a790c94d7263797a98fbde76d4ca8322e7b3bee63589f104b5e5161289df08c->leave($__internal_0a790c94d7263797a98fbde76d4ca8322e7b3bee63589f104b5e5161289df08c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_28401bc81576ff92ed02445fc83c19dffd083243388c2cbc7c43a74a38b6c929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28401bc81576ff92ed02445fc83c19dffd083243388c2cbc7c43a74a38b6c929->enter($__internal_28401bc81576ff92ed02445fc83c19dffd083243388c2cbc7c43a74a38b6c929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_28401bc81576ff92ed02445fc83c19dffd083243388c2cbc7c43a74a38b6c929->leave($__internal_28401bc81576ff92ed02445fc83c19dffd083243388c2cbc7c43a74a38b6c929_prof);

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
