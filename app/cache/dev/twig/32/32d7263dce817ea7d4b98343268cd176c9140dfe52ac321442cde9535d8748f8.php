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
        $__internal_d7f2bfc1a363301687566bbf5d90b5b66d655fa73cf9924426c5ab7192021abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f2bfc1a363301687566bbf5d90b5b66d655fa73cf9924426c5ab7192021abd->enter($__internal_d7f2bfc1a363301687566bbf5d90b5b66d655fa73cf9924426c5ab7192021abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_d7f2bfc1a363301687566bbf5d90b5b66d655fa73cf9924426c5ab7192021abd->leave($__internal_d7f2bfc1a363301687566bbf5d90b5b66d655fa73cf9924426c5ab7192021abd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_25c839ee2670f19679e6184cd57ef8ef04ba465a09cffd06b1a77c5748307569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25c839ee2670f19679e6184cd57ef8ef04ba465a09cffd06b1a77c5748307569->enter($__internal_25c839ee2670f19679e6184cd57ef8ef04ba465a09cffd06b1a77c5748307569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_25c839ee2670f19679e6184cd57ef8ef04ba465a09cffd06b1a77c5748307569->leave($__internal_25c839ee2670f19679e6184cd57ef8ef04ba465a09cffd06b1a77c5748307569_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9d23657dfbf8623049b02057d110f246ad3a70f331af2b667c738a7dd2cb6f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9d23657dfbf8623049b02057d110f246ad3a70f331af2b667c738a7dd2cb6f4->enter($__internal_f9d23657dfbf8623049b02057d110f246ad3a70f331af2b667c738a7dd2cb6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f9d23657dfbf8623049b02057d110f246ad3a70f331af2b667c738a7dd2cb6f4->leave($__internal_f9d23657dfbf8623049b02057d110f246ad3a70f331af2b667c738a7dd2cb6f4_prof);

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
