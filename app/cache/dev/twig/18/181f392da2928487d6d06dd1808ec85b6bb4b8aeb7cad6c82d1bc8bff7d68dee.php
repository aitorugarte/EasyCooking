<?php

/* ::layout.html.twig */
class __TwigTemplate_a0156bbc9a0d01d5fd7486e5e1913ebd617e68bc8adf4c2d035e0b6ef678291e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_535ed2c6aeb0ae3f9cae7a8eefb3777bd257d21f93f5b0e66737f72a33d19699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_535ed2c6aeb0ae3f9cae7a8eefb3777bd257d21f93f5b0e66737f72a33d19699->enter($__internal_535ed2c6aeb0ae3f9cae7a8eefb3777bd257d21f93f5b0e66737f72a33d19699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 2
        echo "<!doctype html>
<html>
\t<head>
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t</head>
\t<body>
\t\t";
        // line 8
        $this->displayBlock('body', $context, $blocks);
        // line 9
        echo "\t</body>
</html>";
        
        $__internal_535ed2c6aeb0ae3f9cae7a8eefb3777bd257d21f93f5b0e66737f72a33d19699->leave($__internal_535ed2c6aeb0ae3f9cae7a8eefb3777bd257d21f93f5b0e66737f72a33d19699_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_49312dfc43d2a1450fcbd0e23552785f64cbf862e44864dcecaaf16e961f8264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49312dfc43d2a1450fcbd0e23552785f64cbf862e44864dcecaaf16e961f8264->enter($__internal_49312dfc43d2a1450fcbd0e23552785f64cbf862e44864dcecaaf16e961f8264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_49312dfc43d2a1450fcbd0e23552785f64cbf862e44864dcecaaf16e961f8264->leave($__internal_49312dfc43d2a1450fcbd0e23552785f64cbf862e44864dcecaaf16e961f8264_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecaa67b80cd800dc58ca2b16ec369a0100a428e53a214c00a23308b8e70a158e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecaa67b80cd800dc58ca2b16ec369a0100a428e53a214c00a23308b8e70a158e->enter($__internal_ecaa67b80cd800dc58ca2b16ec369a0100a428e53a214c00a23308b8e70a158e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ecaa67b80cd800dc58ca2b16ec369a0100a428e53a214c00a23308b8e70a158e->leave($__internal_ecaa67b80cd800dc58ca2b16ec369a0100a428e53a214c00a23308b8e70a158e_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  45 => 5,  37 => 9,  35 => 8,  29 => 5,  24 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layout.html.twig #}
<!doctype html>
<html>
\t<head>
\t\t<title>{% block title %}Default title{% endblock %}</title>
\t</head>
\t<body>
\t\t{% block body %}{% endblock %}
\t</body>
</html>", "::layout.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\app/Resources\\views/layout.html.twig");
    }
}
