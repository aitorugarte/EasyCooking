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
        $__internal_292cd9545f69689ae44f4f0684fa11fbaa5521595a15a8838b750a07d20573c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_292cd9545f69689ae44f4f0684fa11fbaa5521595a15a8838b750a07d20573c9->enter($__internal_292cd9545f69689ae44f4f0684fa11fbaa5521595a15a8838b750a07d20573c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_292cd9545f69689ae44f4f0684fa11fbaa5521595a15a8838b750a07d20573c9->leave($__internal_292cd9545f69689ae44f4f0684fa11fbaa5521595a15a8838b750a07d20573c9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_688c4f217a6586b93413e6639143dc5dfa06014c81e2b52e87679d5c41d81352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_688c4f217a6586b93413e6639143dc5dfa06014c81e2b52e87679d5c41d81352->enter($__internal_688c4f217a6586b93413e6639143dc5dfa06014c81e2b52e87679d5c41d81352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_688c4f217a6586b93413e6639143dc5dfa06014c81e2b52e87679d5c41d81352->leave($__internal_688c4f217a6586b93413e6639143dc5dfa06014c81e2b52e87679d5c41d81352_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e67ee44e0315827f52531f570559e5a5b7a395f427059c635bbb6fd9e5084c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e67ee44e0315827f52531f570559e5a5b7a395f427059c635bbb6fd9e5084c4->enter($__internal_8e67ee44e0315827f52531f570559e5a5b7a395f427059c635bbb6fd9e5084c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8e67ee44e0315827f52531f570559e5a5b7a395f427059c635bbb6fd9e5084c4->leave($__internal_8e67ee44e0315827f52531f570559e5a5b7a395f427059c635bbb6fd9e5084c4_prof);

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
