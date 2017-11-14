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
        $__internal_9c2b0d6f6a8c525a0c4b8059ed5477cf7b8cc3191b00e9f58176243946d9288d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c2b0d6f6a8c525a0c4b8059ed5477cf7b8cc3191b00e9f58176243946d9288d->enter($__internal_9c2b0d6f6a8c525a0c4b8059ed5477cf7b8cc3191b00e9f58176243946d9288d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_9c2b0d6f6a8c525a0c4b8059ed5477cf7b8cc3191b00e9f58176243946d9288d->leave($__internal_9c2b0d6f6a8c525a0c4b8059ed5477cf7b8cc3191b00e9f58176243946d9288d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b4e91641787b5c98c19de78d46f9f2170abead2506f746da4551bd5bc6b819c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b4e91641787b5c98c19de78d46f9f2170abead2506f746da4551bd5bc6b819c->enter($__internal_5b4e91641787b5c98c19de78d46f9f2170abead2506f746da4551bd5bc6b819c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_5b4e91641787b5c98c19de78d46f9f2170abead2506f746da4551bd5bc6b819c->leave($__internal_5b4e91641787b5c98c19de78d46f9f2170abead2506f746da4551bd5bc6b819c_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_02d818ef30d4abe8261d8074eb45a71adbad3b7a5eca76aa24f4b026e0d04feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d818ef30d4abe8261d8074eb45a71adbad3b7a5eca76aa24f4b026e0d04feb->enter($__internal_02d818ef30d4abe8261d8074eb45a71adbad3b7a5eca76aa24f4b026e0d04feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_02d818ef30d4abe8261d8074eb45a71adbad3b7a5eca76aa24f4b026e0d04feb->leave($__internal_02d818ef30d4abe8261d8074eb45a71adbad3b7a5eca76aa24f4b026e0d04feb_prof);

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
