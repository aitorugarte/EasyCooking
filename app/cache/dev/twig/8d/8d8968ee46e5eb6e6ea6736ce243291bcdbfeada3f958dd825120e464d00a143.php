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
        $__internal_222567a6fbe1e51a42b802dcd06438a7ddc556a4decdcfd89888a689d9b2c489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_222567a6fbe1e51a42b802dcd06438a7ddc556a4decdcfd89888a689d9b2c489->enter($__internal_222567a6fbe1e51a42b802dcd06438a7ddc556a4decdcfd89888a689d9b2c489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_222567a6fbe1e51a42b802dcd06438a7ddc556a4decdcfd89888a689d9b2c489->leave($__internal_222567a6fbe1e51a42b802dcd06438a7ddc556a4decdcfd89888a689d9b2c489_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_77193c7c590f44a08d81e7947473ab7e33befe933518c5f9e0ee5ba44dff7e67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77193c7c590f44a08d81e7947473ab7e33befe933518c5f9e0ee5ba44dff7e67->enter($__internal_77193c7c590f44a08d81e7947473ab7e33befe933518c5f9e0ee5ba44dff7e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_77193c7c590f44a08d81e7947473ab7e33befe933518c5f9e0ee5ba44dff7e67->leave($__internal_77193c7c590f44a08d81e7947473ab7e33befe933518c5f9e0ee5ba44dff7e67_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_145b9957ce34cf5009ed8321b427563a6f02aa5855e2048b570983606f01cce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_145b9957ce34cf5009ed8321b427563a6f02aa5855e2048b570983606f01cce3->enter($__internal_145b9957ce34cf5009ed8321b427563a6f02aa5855e2048b570983606f01cce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_145b9957ce34cf5009ed8321b427563a6f02aa5855e2048b570983606f01cce3->leave($__internal_145b9957ce34cf5009ed8321b427563a6f02aa5855e2048b570983606f01cce3_prof);

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
