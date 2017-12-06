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
        $__internal_b8934280d3885f410ff4993ee8b8f10b2f882eb446a5601f4e13e2fc26c24661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8934280d3885f410ff4993ee8b8f10b2f882eb446a5601f4e13e2fc26c24661->enter($__internal_b8934280d3885f410ff4993ee8b8f10b2f882eb446a5601f4e13e2fc26c24661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_b8934280d3885f410ff4993ee8b8f10b2f882eb446a5601f4e13e2fc26c24661->leave($__internal_b8934280d3885f410ff4993ee8b8f10b2f882eb446a5601f4e13e2fc26c24661_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7fbe7f7e2b869e191c39f5476b9ea47327938bea1b0557bf1c747b4c0b911127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fbe7f7e2b869e191c39f5476b9ea47327938bea1b0557bf1c747b4c0b911127->enter($__internal_7fbe7f7e2b869e191c39f5476b9ea47327938bea1b0557bf1c747b4c0b911127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_7fbe7f7e2b869e191c39f5476b9ea47327938bea1b0557bf1c747b4c0b911127->leave($__internal_7fbe7f7e2b869e191c39f5476b9ea47327938bea1b0557bf1c747b4c0b911127_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f2ca431fd4782e615022614b555bdf140a00420e0619888f2a59f435b68ec2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f2ca431fd4782e615022614b555bdf140a00420e0619888f2a59f435b68ec2f->enter($__internal_8f2ca431fd4782e615022614b555bdf140a00420e0619888f2a59f435b68ec2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8f2ca431fd4782e615022614b555bdf140a00420e0619888f2a59f435b68ec2f->leave($__internal_8f2ca431fd4782e615022614b555bdf140a00420e0619888f2a59f435b68ec2f_prof);

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
