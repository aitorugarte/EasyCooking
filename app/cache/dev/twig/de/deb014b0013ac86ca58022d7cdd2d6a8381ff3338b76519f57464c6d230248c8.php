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
        $__internal_95f73b523605915910bce4168e352da4c5d1ff076223e199c1a82e8124e85030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95f73b523605915910bce4168e352da4c5d1ff076223e199c1a82e8124e85030->enter($__internal_95f73b523605915910bce4168e352da4c5d1ff076223e199c1a82e8124e85030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_95f73b523605915910bce4168e352da4c5d1ff076223e199c1a82e8124e85030->leave($__internal_95f73b523605915910bce4168e352da4c5d1ff076223e199c1a82e8124e85030_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d40e3aed15699c1ce25883881c31a559f08b991a7dbef6b365ff61180e23db0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d40e3aed15699c1ce25883881c31a559f08b991a7dbef6b365ff61180e23db0->enter($__internal_2d40e3aed15699c1ce25883881c31a559f08b991a7dbef6b365ff61180e23db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_2d40e3aed15699c1ce25883881c31a559f08b991a7dbef6b365ff61180e23db0->leave($__internal_2d40e3aed15699c1ce25883881c31a559f08b991a7dbef6b365ff61180e23db0_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_520f3f7a4738717836b80b3a4a1320c68ef49847d1c08f8683c79b692f1234e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_520f3f7a4738717836b80b3a4a1320c68ef49847d1c08f8683c79b692f1234e2->enter($__internal_520f3f7a4738717836b80b3a4a1320c68ef49847d1c08f8683c79b692f1234e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_520f3f7a4738717836b80b3a4a1320c68ef49847d1c08f8683c79b692f1234e2->leave($__internal_520f3f7a4738717836b80b3a4a1320c68ef49847d1c08f8683c79b692f1234e2_prof);

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
