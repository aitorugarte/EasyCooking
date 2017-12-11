<?php

/* layout.html.twig */
class __TwigTemplate_63bc7c330123279c315c4a700b5ac697cff8548fa7f163aa2a0f6d0810c9b7b7 extends Twig_Template
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
        $__internal_461d0974291362b96f5189efa1f8f9d57ff87ee907faff91cb3144d421bc7106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_461d0974291362b96f5189efa1f8f9d57ff87ee907faff91cb3144d421bc7106->enter($__internal_461d0974291362b96f5189efa1f8f9d57ff87ee907faff91cb3144d421bc7106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_461d0974291362b96f5189efa1f8f9d57ff87ee907faff91cb3144d421bc7106->leave($__internal_461d0974291362b96f5189efa1f8f9d57ff87ee907faff91cb3144d421bc7106_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_30e1fa0e41638e3677eb9e417a79d420be1d28b1a344c671a6ac42cfc308dcb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e1fa0e41638e3677eb9e417a79d420be1d28b1a344c671a6ac42cfc308dcb6->enter($__internal_30e1fa0e41638e3677eb9e417a79d420be1d28b1a344c671a6ac42cfc308dcb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_30e1fa0e41638e3677eb9e417a79d420be1d28b1a344c671a6ac42cfc308dcb6->leave($__internal_30e1fa0e41638e3677eb9e417a79d420be1d28b1a344c671a6ac42cfc308dcb6_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5a2ae4465bc89b9efaa05031d2a014a1fa1933f4e4950876e0e5c1554b7f221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5a2ae4465bc89b9efaa05031d2a014a1fa1933f4e4950876e0e5c1554b7f221->enter($__internal_c5a2ae4465bc89b9efaa05031d2a014a1fa1933f4e4950876e0e5c1554b7f221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c5a2ae4465bc89b9efaa05031d2a014a1fa1933f4e4950876e0e5c1554b7f221->leave($__internal_c5a2ae4465bc89b9efaa05031d2a014a1fa1933f4e4950876e0e5c1554b7f221_prof);

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
