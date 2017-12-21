<?php

/* layout.html.twig */
class __TwigTemplate_63bc7c330123279c315c4a700b5ac697cff8548fa7f163aa2a0f6d0810c9b7b7 extends Twig_Template
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
        $__internal_4743af322268c87ae81373d7b9696c612f2bed1fbda21a203db97e2a46f1c217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4743af322268c87ae81373d7b9696c612f2bed1fbda21a203db97e2a46f1c217->enter($__internal_4743af322268c87ae81373d7b9696c612f2bed1fbda21a203db97e2a46f1c217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_4743af322268c87ae81373d7b9696c612f2bed1fbda21a203db97e2a46f1c217->leave($__internal_4743af322268c87ae81373d7b9696c612f2bed1fbda21a203db97e2a46f1c217_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e8dbaa9402a7a8d78e488499231e207ecaa5a2bb292d82135066d26aa39e9c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e8dbaa9402a7a8d78e488499231e207ecaa5a2bb292d82135066d26aa39e9c1->enter($__internal_5e8dbaa9402a7a8d78e488499231e207ecaa5a2bb292d82135066d26aa39e9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_5e8dbaa9402a7a8d78e488499231e207ecaa5a2bb292d82135066d26aa39e9c1->leave($__internal_5e8dbaa9402a7a8d78e488499231e207ecaa5a2bb292d82135066d26aa39e9c1_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_08207d4aa55e041ebd25189971ccaffb1dd707668f549f5bbe1ddf5c70b73bbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08207d4aa55e041ebd25189971ccaffb1dd707668f549f5bbe1ddf5c70b73bbc->enter($__internal_08207d4aa55e041ebd25189971ccaffb1dd707668f549f5bbe1ddf5c70b73bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_08207d4aa55e041ebd25189971ccaffb1dd707668f549f5bbe1ddf5c70b73bbc->leave($__internal_08207d4aa55e041ebd25189971ccaffb1dd707668f549f5bbe1ddf5c70b73bbc_prof);

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
