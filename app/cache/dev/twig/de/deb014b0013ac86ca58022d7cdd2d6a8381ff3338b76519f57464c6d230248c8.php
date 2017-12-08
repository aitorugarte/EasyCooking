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
        $__internal_3426422387e164ec441502d955b676cb84c9a94068a15e8c91d9dfd192a1bc71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3426422387e164ec441502d955b676cb84c9a94068a15e8c91d9dfd192a1bc71->enter($__internal_3426422387e164ec441502d955b676cb84c9a94068a15e8c91d9dfd192a1bc71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_3426422387e164ec441502d955b676cb84c9a94068a15e8c91d9dfd192a1bc71->leave($__internal_3426422387e164ec441502d955b676cb84c9a94068a15e8c91d9dfd192a1bc71_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_90063b5949a5da2ef5c53a962f148fc5c85bbbe57cf8b3c3f01d3121e22ff502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90063b5949a5da2ef5c53a962f148fc5c85bbbe57cf8b3c3f01d3121e22ff502->enter($__internal_90063b5949a5da2ef5c53a962f148fc5c85bbbe57cf8b3c3f01d3121e22ff502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_90063b5949a5da2ef5c53a962f148fc5c85bbbe57cf8b3c3f01d3121e22ff502->leave($__internal_90063b5949a5da2ef5c53a962f148fc5c85bbbe57cf8b3c3f01d3121e22ff502_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_99686bdf75855ff1379cd6b1133706edaaed55a3841063b437ef097b1eb03951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99686bdf75855ff1379cd6b1133706edaaed55a3841063b437ef097b1eb03951->enter($__internal_99686bdf75855ff1379cd6b1133706edaaed55a3841063b437ef097b1eb03951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_99686bdf75855ff1379cd6b1133706edaaed55a3841063b437ef097b1eb03951->leave($__internal_99686bdf75855ff1379cd6b1133706edaaed55a3841063b437ef097b1eb03951_prof);

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
