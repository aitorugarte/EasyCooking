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
        $__internal_7955ece922594f53221ab21c0ecf298a143c705252d1c515b40ee6dbcc7a6a6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7955ece922594f53221ab21c0ecf298a143c705252d1c515b40ee6dbcc7a6a6f->enter($__internal_7955ece922594f53221ab21c0ecf298a143c705252d1c515b40ee6dbcc7a6a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_7955ece922594f53221ab21c0ecf298a143c705252d1c515b40ee6dbcc7a6a6f->leave($__internal_7955ece922594f53221ab21c0ecf298a143c705252d1c515b40ee6dbcc7a6a6f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a74900b984d778b25ddc99915436920d52951873228f270ea7b715e3541453ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74900b984d778b25ddc99915436920d52951873228f270ea7b715e3541453ae->enter($__internal_a74900b984d778b25ddc99915436920d52951873228f270ea7b715e3541453ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_a74900b984d778b25ddc99915436920d52951873228f270ea7b715e3541453ae->leave($__internal_a74900b984d778b25ddc99915436920d52951873228f270ea7b715e3541453ae_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4fd527c6fa5ce3e54899484bace05bd08aa36721708e629a7defbcaa01f9ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4fd527c6fa5ce3e54899484bace05bd08aa36721708e629a7defbcaa01f9ae4->enter($__internal_d4fd527c6fa5ce3e54899484bace05bd08aa36721708e629a7defbcaa01f9ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d4fd527c6fa5ce3e54899484bace05bd08aa36721708e629a7defbcaa01f9ae4->leave($__internal_d4fd527c6fa5ce3e54899484bace05bd08aa36721708e629a7defbcaa01f9ae4_prof);

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
