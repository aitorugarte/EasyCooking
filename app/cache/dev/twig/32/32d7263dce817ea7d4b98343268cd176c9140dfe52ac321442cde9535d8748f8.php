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
        $__internal_edd18cbfed3e0f7758ab8a41fcf1da1dc46db0c32f775170e47b17059be7f4a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edd18cbfed3e0f7758ab8a41fcf1da1dc46db0c32f775170e47b17059be7f4a8->enter($__internal_edd18cbfed3e0f7758ab8a41fcf1da1dc46db0c32f775170e47b17059be7f4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_edd18cbfed3e0f7758ab8a41fcf1da1dc46db0c32f775170e47b17059be7f4a8->leave($__internal_edd18cbfed3e0f7758ab8a41fcf1da1dc46db0c32f775170e47b17059be7f4a8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f620e1fc4d296b8147a75df9e2d8139ebc9cc7668e764964e46eb9d468eea1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f620e1fc4d296b8147a75df9e2d8139ebc9cc7668e764964e46eb9d468eea1c->enter($__internal_4f620e1fc4d296b8147a75df9e2d8139ebc9cc7668e764964e46eb9d468eea1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_4f620e1fc4d296b8147a75df9e2d8139ebc9cc7668e764964e46eb9d468eea1c->leave($__internal_4f620e1fc4d296b8147a75df9e2d8139ebc9cc7668e764964e46eb9d468eea1c_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_a02de138be56848b0280b5a22cb190a7cdad392479aded46d44dd64b51f441fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a02de138be56848b0280b5a22cb190a7cdad392479aded46d44dd64b51f441fe->enter($__internal_a02de138be56848b0280b5a22cb190a7cdad392479aded46d44dd64b51f441fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a02de138be56848b0280b5a22cb190a7cdad392479aded46d44dd64b51f441fe->leave($__internal_a02de138be56848b0280b5a22cb190a7cdad392479aded46d44dd64b51f441fe_prof);

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
