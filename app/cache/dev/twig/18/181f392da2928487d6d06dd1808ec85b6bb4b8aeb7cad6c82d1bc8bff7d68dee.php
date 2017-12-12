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
        $__internal_36fe4c76ee11c81673e0710593906e1ff87cd254fb9e3380be222f968ea3098d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36fe4c76ee11c81673e0710593906e1ff87cd254fb9e3380be222f968ea3098d->enter($__internal_36fe4c76ee11c81673e0710593906e1ff87cd254fb9e3380be222f968ea3098d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_36fe4c76ee11c81673e0710593906e1ff87cd254fb9e3380be222f968ea3098d->leave($__internal_36fe4c76ee11c81673e0710593906e1ff87cd254fb9e3380be222f968ea3098d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_753264a142598189add957246246d0cfe3ca6827aecc08a898a2fba5c0dea7b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_753264a142598189add957246246d0cfe3ca6827aecc08a898a2fba5c0dea7b7->enter($__internal_753264a142598189add957246246d0cfe3ca6827aecc08a898a2fba5c0dea7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_753264a142598189add957246246d0cfe3ca6827aecc08a898a2fba5c0dea7b7->leave($__internal_753264a142598189add957246246d0cfe3ca6827aecc08a898a2fba5c0dea7b7_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d527846107e859b5c11bb4c6b0372392369fc91943a2b8f090beb0d2965c837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d527846107e859b5c11bb4c6b0372392369fc91943a2b8f090beb0d2965c837->enter($__internal_2d527846107e859b5c11bb4c6b0372392369fc91943a2b8f090beb0d2965c837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2d527846107e859b5c11bb4c6b0372392369fc91943a2b8f090beb0d2965c837->leave($__internal_2d527846107e859b5c11bb4c6b0372392369fc91943a2b8f090beb0d2965c837_prof);

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
