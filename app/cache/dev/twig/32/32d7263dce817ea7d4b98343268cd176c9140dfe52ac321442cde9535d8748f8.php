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
        $__internal_c03b1c21b3fc36a9640fe80e1921bfe21e192d186eaf7cc2f7517a01d02bb273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c03b1c21b3fc36a9640fe80e1921bfe21e192d186eaf7cc2f7517a01d02bb273->enter($__internal_c03b1c21b3fc36a9640fe80e1921bfe21e192d186eaf7cc2f7517a01d02bb273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_c03b1c21b3fc36a9640fe80e1921bfe21e192d186eaf7cc2f7517a01d02bb273->leave($__internal_c03b1c21b3fc36a9640fe80e1921bfe21e192d186eaf7cc2f7517a01d02bb273_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1e0688fc9cd6fd9f15c13e69c95b479cc187dab322070e7ad20ace2d3a9d884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e0688fc9cd6fd9f15c13e69c95b479cc187dab322070e7ad20ace2d3a9d884->enter($__internal_f1e0688fc9cd6fd9f15c13e69c95b479cc187dab322070e7ad20ace2d3a9d884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_f1e0688fc9cd6fd9f15c13e69c95b479cc187dab322070e7ad20ace2d3a9d884->leave($__internal_f1e0688fc9cd6fd9f15c13e69c95b479cc187dab322070e7ad20ace2d3a9d884_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ebb64c2598dd4cecc4196f674484d59a701061685f0aebaf860f4bdf58e983e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ebb64c2598dd4cecc4196f674484d59a701061685f0aebaf860f4bdf58e983e->enter($__internal_2ebb64c2598dd4cecc4196f674484d59a701061685f0aebaf860f4bdf58e983e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2ebb64c2598dd4cecc4196f674484d59a701061685f0aebaf860f4bdf58e983e->leave($__internal_2ebb64c2598dd4cecc4196f674484d59a701061685f0aebaf860f4bdf58e983e_prof);

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
