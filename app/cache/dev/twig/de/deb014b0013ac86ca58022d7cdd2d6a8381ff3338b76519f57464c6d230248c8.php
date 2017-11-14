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
        $__internal_4e4bfff0ad8c299dc61c7687e4fa96b451065af3faa06b77ca4427eb4fc09f34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e4bfff0ad8c299dc61c7687e4fa96b451065af3faa06b77ca4427eb4fc09f34->enter($__internal_4e4bfff0ad8c299dc61c7687e4fa96b451065af3faa06b77ca4427eb4fc09f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_4e4bfff0ad8c299dc61c7687e4fa96b451065af3faa06b77ca4427eb4fc09f34->leave($__internal_4e4bfff0ad8c299dc61c7687e4fa96b451065af3faa06b77ca4427eb4fc09f34_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb46cf8b014cef6e716393ff188b3be647921b71873f73034308626418b2b384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb46cf8b014cef6e716393ff188b3be647921b71873f73034308626418b2b384->enter($__internal_eb46cf8b014cef6e716393ff188b3be647921b71873f73034308626418b2b384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_eb46cf8b014cef6e716393ff188b3be647921b71873f73034308626418b2b384->leave($__internal_eb46cf8b014cef6e716393ff188b3be647921b71873f73034308626418b2b384_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_35cbbcafb27de4a4b9afc93b61c0d62d855d5402d97b8e6de4c0ed30736a9bb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35cbbcafb27de4a4b9afc93b61c0d62d855d5402d97b8e6de4c0ed30736a9bb0->enter($__internal_35cbbcafb27de4a4b9afc93b61c0d62d855d5402d97b8e6de4c0ed30736a9bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_35cbbcafb27de4a4b9afc93b61c0d62d855d5402d97b8e6de4c0ed30736a9bb0->leave($__internal_35cbbcafb27de4a4b9afc93b61c0d62d855d5402d97b8e6de4c0ed30736a9bb0_prof);

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
