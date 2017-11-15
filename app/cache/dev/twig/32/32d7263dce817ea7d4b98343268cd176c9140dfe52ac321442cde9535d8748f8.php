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
        $__internal_02a69adf59e3efa8b55bd19dd3a6521edebf9f8d7eff4b95a62a249d9b2e90b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a69adf59e3efa8b55bd19dd3a6521edebf9f8d7eff4b95a62a249d9b2e90b2->enter($__internal_02a69adf59e3efa8b55bd19dd3a6521edebf9f8d7eff4b95a62a249d9b2e90b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_02a69adf59e3efa8b55bd19dd3a6521edebf9f8d7eff4b95a62a249d9b2e90b2->leave($__internal_02a69adf59e3efa8b55bd19dd3a6521edebf9f8d7eff4b95a62a249d9b2e90b2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_659c9e0ec5736ee43379a64a5711afb77e61a042f56787d6317a934871e541ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659c9e0ec5736ee43379a64a5711afb77e61a042f56787d6317a934871e541ec->enter($__internal_659c9e0ec5736ee43379a64a5711afb77e61a042f56787d6317a934871e541ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_659c9e0ec5736ee43379a64a5711afb77e61a042f56787d6317a934871e541ec->leave($__internal_659c9e0ec5736ee43379a64a5711afb77e61a042f56787d6317a934871e541ec_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_b25eb399219a078d8ed0d7436135528c7fc6aebed00a4802a0572759c9affeaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b25eb399219a078d8ed0d7436135528c7fc6aebed00a4802a0572759c9affeaf->enter($__internal_b25eb399219a078d8ed0d7436135528c7fc6aebed00a4802a0572759c9affeaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b25eb399219a078d8ed0d7436135528c7fc6aebed00a4802a0572759c9affeaf->leave($__internal_b25eb399219a078d8ed0d7436135528c7fc6aebed00a4802a0572759c9affeaf_prof);

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
