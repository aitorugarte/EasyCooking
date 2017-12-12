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
        $__internal_30bf6baac1bdf4ad2850a7206aead916e3c807a0a4d93c6d231584047f6dd97e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30bf6baac1bdf4ad2850a7206aead916e3c807a0a4d93c6d231584047f6dd97e->enter($__internal_30bf6baac1bdf4ad2850a7206aead916e3c807a0a4d93c6d231584047f6dd97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_30bf6baac1bdf4ad2850a7206aead916e3c807a0a4d93c6d231584047f6dd97e->leave($__internal_30bf6baac1bdf4ad2850a7206aead916e3c807a0a4d93c6d231584047f6dd97e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_05b854da720723cb5f71703f738e2e869e98d5ef1457708c0680fd3752af10c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b854da720723cb5f71703f738e2e869e98d5ef1457708c0680fd3752af10c6->enter($__internal_05b854da720723cb5f71703f738e2e869e98d5ef1457708c0680fd3752af10c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_05b854da720723cb5f71703f738e2e869e98d5ef1457708c0680fd3752af10c6->leave($__internal_05b854da720723cb5f71703f738e2e869e98d5ef1457708c0680fd3752af10c6_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e54dee7e104b67cfae2156b171ad2c491516fbc909cc7b8e9c0cfbfd509d9b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e54dee7e104b67cfae2156b171ad2c491516fbc909cc7b8e9c0cfbfd509d9b7->enter($__internal_3e54dee7e104b67cfae2156b171ad2c491516fbc909cc7b8e9c0cfbfd509d9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3e54dee7e104b67cfae2156b171ad2c491516fbc909cc7b8e9c0cfbfd509d9b7->leave($__internal_3e54dee7e104b67cfae2156b171ad2c491516fbc909cc7b8e9c0cfbfd509d9b7_prof);

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
