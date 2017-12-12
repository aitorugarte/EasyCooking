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
        $__internal_ea63df495ddfb47bc2f6dd4bdd87710ada7974b30651e18f3f216ee2c573a608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea63df495ddfb47bc2f6dd4bdd87710ada7974b30651e18f3f216ee2c573a608->enter($__internal_ea63df495ddfb47bc2f6dd4bdd87710ada7974b30651e18f3f216ee2c573a608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_ea63df495ddfb47bc2f6dd4bdd87710ada7974b30651e18f3f216ee2c573a608->leave($__internal_ea63df495ddfb47bc2f6dd4bdd87710ada7974b30651e18f3f216ee2c573a608_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b83ef3e1a0bc1de468737bc07aa40ccd6c2288ba23275934736e4e55c535690b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b83ef3e1a0bc1de468737bc07aa40ccd6c2288ba23275934736e4e55c535690b->enter($__internal_b83ef3e1a0bc1de468737bc07aa40ccd6c2288ba23275934736e4e55c535690b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_b83ef3e1a0bc1de468737bc07aa40ccd6c2288ba23275934736e4e55c535690b->leave($__internal_b83ef3e1a0bc1de468737bc07aa40ccd6c2288ba23275934736e4e55c535690b_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_28cd41c28c08991aedabc20cacc81df9da15dcf1b705cf1f8d758f3ff78c316a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28cd41c28c08991aedabc20cacc81df9da15dcf1b705cf1f8d758f3ff78c316a->enter($__internal_28cd41c28c08991aedabc20cacc81df9da15dcf1b705cf1f8d758f3ff78c316a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_28cd41c28c08991aedabc20cacc81df9da15dcf1b705cf1f8d758f3ff78c316a->leave($__internal_28cd41c28c08991aedabc20cacc81df9da15dcf1b705cf1f8d758f3ff78c316a_prof);

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
