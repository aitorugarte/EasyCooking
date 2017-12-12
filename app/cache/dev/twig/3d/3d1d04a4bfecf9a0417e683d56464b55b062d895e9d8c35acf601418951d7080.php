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
        $__internal_bab13cf69d570fbebc84873ca0aee76ab5d9544f7330f04f89c0fc85bf698d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bab13cf69d570fbebc84873ca0aee76ab5d9544f7330f04f89c0fc85bf698d2c->enter($__internal_bab13cf69d570fbebc84873ca0aee76ab5d9544f7330f04f89c0fc85bf698d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_bab13cf69d570fbebc84873ca0aee76ab5d9544f7330f04f89c0fc85bf698d2c->leave($__internal_bab13cf69d570fbebc84873ca0aee76ab5d9544f7330f04f89c0fc85bf698d2c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_834050c2a85ed6dffca3dbda5477647753110ba8ea773043a5d303a87061f29d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_834050c2a85ed6dffca3dbda5477647753110ba8ea773043a5d303a87061f29d->enter($__internal_834050c2a85ed6dffca3dbda5477647753110ba8ea773043a5d303a87061f29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_834050c2a85ed6dffca3dbda5477647753110ba8ea773043a5d303a87061f29d->leave($__internal_834050c2a85ed6dffca3dbda5477647753110ba8ea773043a5d303a87061f29d_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb02fdde1347d5102feddadc16926450528441e5bc4dbf30a3db355b32658f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb02fdde1347d5102feddadc16926450528441e5bc4dbf30a3db355b32658f44->enter($__internal_cb02fdde1347d5102feddadc16926450528441e5bc4dbf30a3db355b32658f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cb02fdde1347d5102feddadc16926450528441e5bc4dbf30a3db355b32658f44->leave($__internal_cb02fdde1347d5102feddadc16926450528441e5bc4dbf30a3db355b32658f44_prof);

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
