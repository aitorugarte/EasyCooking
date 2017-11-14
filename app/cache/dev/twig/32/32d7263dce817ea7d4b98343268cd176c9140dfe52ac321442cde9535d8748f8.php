<?php

/* ::layout.html.twig */
class __TwigTemplate_302d6d9e713e4245142e57b2f3b59f8fcbd5d94378062e49217f7eae35e06c71 extends Twig_Template
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
        $__internal_5bd135d01a451a9085835d7e2a45db11eee17889695d2178dbbc245ce16f6441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd135d01a451a9085835d7e2a45db11eee17889695d2178dbbc245ce16f6441->enter($__internal_5bd135d01a451a9085835d7e2a45db11eee17889695d2178dbbc245ce16f6441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_5bd135d01a451a9085835d7e2a45db11eee17889695d2178dbbc245ce16f6441->leave($__internal_5bd135d01a451a9085835d7e2a45db11eee17889695d2178dbbc245ce16f6441_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ade1b3104a69c46f90c05d738e5b7f74f9bb0e002f5778d04f2f326fc79ccdb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade1b3104a69c46f90c05d738e5b7f74f9bb0e002f5778d04f2f326fc79ccdb5->enter($__internal_ade1b3104a69c46f90c05d738e5b7f74f9bb0e002f5778d04f2f326fc79ccdb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_ade1b3104a69c46f90c05d738e5b7f74f9bb0e002f5778d04f2f326fc79ccdb5->leave($__internal_ade1b3104a69c46f90c05d738e5b7f74f9bb0e002f5778d04f2f326fc79ccdb5_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_192da2974cc75adba69866da6d95d201fda017aff60b227899783210a7b208de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_192da2974cc75adba69866da6d95d201fda017aff60b227899783210a7b208de->enter($__internal_192da2974cc75adba69866da6d95d201fda017aff60b227899783210a7b208de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_192da2974cc75adba69866da6d95d201fda017aff60b227899783210a7b208de->leave($__internal_192da2974cc75adba69866da6d95d201fda017aff60b227899783210a7b208de_prof);

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
