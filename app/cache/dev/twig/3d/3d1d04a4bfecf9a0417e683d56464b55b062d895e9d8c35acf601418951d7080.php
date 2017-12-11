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
        $__internal_832288dcc14cadc6145428d9836f975a03e1c9345291e41d6a34d2f17d41e074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832288dcc14cadc6145428d9836f975a03e1c9345291e41d6a34d2f17d41e074->enter($__internal_832288dcc14cadc6145428d9836f975a03e1c9345291e41d6a34d2f17d41e074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_832288dcc14cadc6145428d9836f975a03e1c9345291e41d6a34d2f17d41e074->leave($__internal_832288dcc14cadc6145428d9836f975a03e1c9345291e41d6a34d2f17d41e074_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d1f772315fce74ad85a707b7cb12b8a8e1de4cc73b6527e05a6dee7f1dabf26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d1f772315fce74ad85a707b7cb12b8a8e1de4cc73b6527e05a6dee7f1dabf26->enter($__internal_2d1f772315fce74ad85a707b7cb12b8a8e1de4cc73b6527e05a6dee7f1dabf26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_2d1f772315fce74ad85a707b7cb12b8a8e1de4cc73b6527e05a6dee7f1dabf26->leave($__internal_2d1f772315fce74ad85a707b7cb12b8a8e1de4cc73b6527e05a6dee7f1dabf26_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e83fa1c10b0666eee30dd88c0692738621655c13777e47dc7a5f25c430db78b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e83fa1c10b0666eee30dd88c0692738621655c13777e47dc7a5f25c430db78b->enter($__internal_5e83fa1c10b0666eee30dd88c0692738621655c13777e47dc7a5f25c430db78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5e83fa1c10b0666eee30dd88c0692738621655c13777e47dc7a5f25c430db78b->leave($__internal_5e83fa1c10b0666eee30dd88c0692738621655c13777e47dc7a5f25c430db78b_prof);

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
