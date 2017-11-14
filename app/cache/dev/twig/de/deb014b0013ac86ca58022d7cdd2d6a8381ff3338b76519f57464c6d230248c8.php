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
        $__internal_c6f3f22e23016733bc82e1d130531adfcb3c8322805aea15a2b17af5da53d0cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f3f22e23016733bc82e1d130531adfcb3c8322805aea15a2b17af5da53d0cf->enter($__internal_c6f3f22e23016733bc82e1d130531adfcb3c8322805aea15a2b17af5da53d0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_c6f3f22e23016733bc82e1d130531adfcb3c8322805aea15a2b17af5da53d0cf->leave($__internal_c6f3f22e23016733bc82e1d130531adfcb3c8322805aea15a2b17af5da53d0cf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f8b22cd7cdaa73ddf2c80ecad864cb9414c8140f62c9488a29ff47648e48d5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f8b22cd7cdaa73ddf2c80ecad864cb9414c8140f62c9488a29ff47648e48d5f->enter($__internal_7f8b22cd7cdaa73ddf2c80ecad864cb9414c8140f62c9488a29ff47648e48d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_7f8b22cd7cdaa73ddf2c80ecad864cb9414c8140f62c9488a29ff47648e48d5f->leave($__internal_7f8b22cd7cdaa73ddf2c80ecad864cb9414c8140f62c9488a29ff47648e48d5f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_12b1c918b50d6f8dfe987a0065bbe271d0953ba467184278a4460154d9b61306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b1c918b50d6f8dfe987a0065bbe271d0953ba467184278a4460154d9b61306->enter($__internal_12b1c918b50d6f8dfe987a0065bbe271d0953ba467184278a4460154d9b61306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_12b1c918b50d6f8dfe987a0065bbe271d0953ba467184278a4460154d9b61306->leave($__internal_12b1c918b50d6f8dfe987a0065bbe271d0953ba467184278a4460154d9b61306_prof);

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
