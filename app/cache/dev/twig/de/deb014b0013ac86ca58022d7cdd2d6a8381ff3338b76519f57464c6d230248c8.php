<?php

/* layout.html.twig */
class __TwigTemplate_953d8eb5f0d19d21de721464c4d784a756551fa66bdf244136d968ff342447cd extends Twig_Template
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
        $__internal_43347f21b9104fe9d7efa117f149d9904685b6dfde201cbcd9c44dada241e20d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43347f21b9104fe9d7efa117f149d9904685b6dfde201cbcd9c44dada241e20d->enter($__internal_43347f21b9104fe9d7efa117f149d9904685b6dfde201cbcd9c44dada241e20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_43347f21b9104fe9d7efa117f149d9904685b6dfde201cbcd9c44dada241e20d->leave($__internal_43347f21b9104fe9d7efa117f149d9904685b6dfde201cbcd9c44dada241e20d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c28a29a1d20a9d42d07e339227d72f75c82b6a9176f0562d2f7c9aa7d88f174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c28a29a1d20a9d42d07e339227d72f75c82b6a9176f0562d2f7c9aa7d88f174->enter($__internal_3c28a29a1d20a9d42d07e339227d72f75c82b6a9176f0562d2f7c9aa7d88f174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_3c28a29a1d20a9d42d07e339227d72f75c82b6a9176f0562d2f7c9aa7d88f174->leave($__internal_3c28a29a1d20a9d42d07e339227d72f75c82b6a9176f0562d2f7c9aa7d88f174_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_33e9ba4f1e25e512bcfb6e7e7ef5ff0f93878042ec049e5c2965ab0597dc1ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e9ba4f1e25e512bcfb6e7e7ef5ff0f93878042ec049e5c2965ab0597dc1ce4->enter($__internal_33e9ba4f1e25e512bcfb6e7e7ef5ff0f93878042ec049e5c2965ab0597dc1ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_33e9ba4f1e25e512bcfb6e7e7ef5ff0f93878042ec049e5c2965ab0597dc1ce4->leave($__internal_33e9ba4f1e25e512bcfb6e7e7ef5ff0f93878042ec049e5c2965ab0597dc1ce4_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
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
</html>", "layout.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\app\\Resources\\views\\layout.html.twig");
    }
}
