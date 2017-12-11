<?php

/* ::layout.html.twig */
class __TwigTemplate_a0156bbc9a0d01d5fd7486e5e1913ebd617e68bc8adf4c2d035e0b6ef678291e extends Twig_Template
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
        $__internal_215c2934724277b7b63ba29a9af98cf0de372564ee6803623d6fab859d2e2d58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_215c2934724277b7b63ba29a9af98cf0de372564ee6803623d6fab859d2e2d58->enter($__internal_215c2934724277b7b63ba29a9af98cf0de372564ee6803623d6fab859d2e2d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_215c2934724277b7b63ba29a9af98cf0de372564ee6803623d6fab859d2e2d58->leave($__internal_215c2934724277b7b63ba29a9af98cf0de372564ee6803623d6fab859d2e2d58_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_faf655e920a0c0fb8bf0770c3b631dfb581f33b2afdbfe146d7967b589c1be51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf655e920a0c0fb8bf0770c3b631dfb581f33b2afdbfe146d7967b589c1be51->enter($__internal_faf655e920a0c0fb8bf0770c3b631dfb581f33b2afdbfe146d7967b589c1be51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_faf655e920a0c0fb8bf0770c3b631dfb581f33b2afdbfe146d7967b589c1be51->leave($__internal_faf655e920a0c0fb8bf0770c3b631dfb581f33b2afdbfe146d7967b589c1be51_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_edb1013375fc9aa58750e3a72c65642228a6932b45daf930927934c9ff816803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edb1013375fc9aa58750e3a72c65642228a6932b45daf930927934c9ff816803->enter($__internal_edb1013375fc9aa58750e3a72c65642228a6932b45daf930927934c9ff816803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_edb1013375fc9aa58750e3a72c65642228a6932b45daf930927934c9ff816803->leave($__internal_edb1013375fc9aa58750e3a72c65642228a6932b45daf930927934c9ff816803_prof);

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
