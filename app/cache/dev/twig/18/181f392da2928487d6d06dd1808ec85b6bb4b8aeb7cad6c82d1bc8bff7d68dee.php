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
        $__internal_b12c17f6ceb5f22586a490eef96771c41b25cf66747659eb974e59fcb17bc8f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b12c17f6ceb5f22586a490eef96771c41b25cf66747659eb974e59fcb17bc8f9->enter($__internal_b12c17f6ceb5f22586a490eef96771c41b25cf66747659eb974e59fcb17bc8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_b12c17f6ceb5f22586a490eef96771c41b25cf66747659eb974e59fcb17bc8f9->leave($__internal_b12c17f6ceb5f22586a490eef96771c41b25cf66747659eb974e59fcb17bc8f9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ffd3d50d353cabbcf8703ea05afee65d066c5ea23de63895444aa1f8ce039c9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd3d50d353cabbcf8703ea05afee65d066c5ea23de63895444aa1f8ce039c9f->enter($__internal_ffd3d50d353cabbcf8703ea05afee65d066c5ea23de63895444aa1f8ce039c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_ffd3d50d353cabbcf8703ea05afee65d066c5ea23de63895444aa1f8ce039c9f->leave($__internal_ffd3d50d353cabbcf8703ea05afee65d066c5ea23de63895444aa1f8ce039c9f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_52896cecff87f3c8cc2f926c1704192857816db6d77b44e005cd74a617249e5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52896cecff87f3c8cc2f926c1704192857816db6d77b44e005cd74a617249e5c->enter($__internal_52896cecff87f3c8cc2f926c1704192857816db6d77b44e005cd74a617249e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_52896cecff87f3c8cc2f926c1704192857816db6d77b44e005cd74a617249e5c->leave($__internal_52896cecff87f3c8cc2f926c1704192857816db6d77b44e005cd74a617249e5c_prof);

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
