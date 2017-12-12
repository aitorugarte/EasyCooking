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
        $__internal_43f97a1f882a0ba21b6c88f9f359e4be4f54d21decb30e69988c1994937f8ea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43f97a1f882a0ba21b6c88f9f359e4be4f54d21decb30e69988c1994937f8ea4->enter($__internal_43f97a1f882a0ba21b6c88f9f359e4be4f54d21decb30e69988c1994937f8ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_43f97a1f882a0ba21b6c88f9f359e4be4f54d21decb30e69988c1994937f8ea4->leave($__internal_43f97a1f882a0ba21b6c88f9f359e4be4f54d21decb30e69988c1994937f8ea4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_acd992fcc2064cdc653f69c12fbc88f2d291e1c2675c16c79da5fcea1536b458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acd992fcc2064cdc653f69c12fbc88f2d291e1c2675c16c79da5fcea1536b458->enter($__internal_acd992fcc2064cdc653f69c12fbc88f2d291e1c2675c16c79da5fcea1536b458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_acd992fcc2064cdc653f69c12fbc88f2d291e1c2675c16c79da5fcea1536b458->leave($__internal_acd992fcc2064cdc653f69c12fbc88f2d291e1c2675c16c79da5fcea1536b458_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_805ffb6cf671f0dc1c15ee262ffa9b370bc3665236ae04e266133373d2dc17ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_805ffb6cf671f0dc1c15ee262ffa9b370bc3665236ae04e266133373d2dc17ae->enter($__internal_805ffb6cf671f0dc1c15ee262ffa9b370bc3665236ae04e266133373d2dc17ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_805ffb6cf671f0dc1c15ee262ffa9b370bc3665236ae04e266133373d2dc17ae->leave($__internal_805ffb6cf671f0dc1c15ee262ffa9b370bc3665236ae04e266133373d2dc17ae_prof);

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
