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
        $__internal_96f8ee7e0453bdb2b776c27af5f487eecd49ce22a0963073b89a3cc199fada32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f8ee7e0453bdb2b776c27af5f487eecd49ce22a0963073b89a3cc199fada32->enter($__internal_96f8ee7e0453bdb2b776c27af5f487eecd49ce22a0963073b89a3cc199fada32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_96f8ee7e0453bdb2b776c27af5f487eecd49ce22a0963073b89a3cc199fada32->leave($__internal_96f8ee7e0453bdb2b776c27af5f487eecd49ce22a0963073b89a3cc199fada32_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c3edd5a018b5ce28685d91c8741116ee9d0f2b78995ea866b948b59593af1bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c3edd5a018b5ce28685d91c8741116ee9d0f2b78995ea866b948b59593af1bf->enter($__internal_4c3edd5a018b5ce28685d91c8741116ee9d0f2b78995ea866b948b59593af1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_4c3edd5a018b5ce28685d91c8741116ee9d0f2b78995ea866b948b59593af1bf->leave($__internal_4c3edd5a018b5ce28685d91c8741116ee9d0f2b78995ea866b948b59593af1bf_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc1ece9f54f743f79df3eb37e4bdae64f6a77e3e9fbd1103cdd9105162ec854d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc1ece9f54f743f79df3eb37e4bdae64f6a77e3e9fbd1103cdd9105162ec854d->enter($__internal_dc1ece9f54f743f79df3eb37e4bdae64f6a77e3e9fbd1103cdd9105162ec854d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dc1ece9f54f743f79df3eb37e4bdae64f6a77e3e9fbd1103cdd9105162ec854d->leave($__internal_dc1ece9f54f743f79df3eb37e4bdae64f6a77e3e9fbd1103cdd9105162ec854d_prof);

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
