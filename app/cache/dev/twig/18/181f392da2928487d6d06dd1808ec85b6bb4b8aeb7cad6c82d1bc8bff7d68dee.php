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
        $__internal_5a3459aae17ec0441d20a7f32ca4471c692cacc34acf8c40693c9d5c5f88da60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a3459aae17ec0441d20a7f32ca4471c692cacc34acf8c40693c9d5c5f88da60->enter($__internal_5a3459aae17ec0441d20a7f32ca4471c692cacc34acf8c40693c9d5c5f88da60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_5a3459aae17ec0441d20a7f32ca4471c692cacc34acf8c40693c9d5c5f88da60->leave($__internal_5a3459aae17ec0441d20a7f32ca4471c692cacc34acf8c40693c9d5c5f88da60_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd706b54ba84268b7390eb67388d377d06daf19b6efc17fcd5fdac5e47a1bf8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd706b54ba84268b7390eb67388d377d06daf19b6efc17fcd5fdac5e47a1bf8b->enter($__internal_cd706b54ba84268b7390eb67388d377d06daf19b6efc17fcd5fdac5e47a1bf8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_cd706b54ba84268b7390eb67388d377d06daf19b6efc17fcd5fdac5e47a1bf8b->leave($__internal_cd706b54ba84268b7390eb67388d377d06daf19b6efc17fcd5fdac5e47a1bf8b_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_62318c320273c43435699913c0ba0b1a3d5be48dd8a11e603e54fcae8ff64cd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62318c320273c43435699913c0ba0b1a3d5be48dd8a11e603e54fcae8ff64cd3->enter($__internal_62318c320273c43435699913c0ba0b1a3d5be48dd8a11e603e54fcae8ff64cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_62318c320273c43435699913c0ba0b1a3d5be48dd8a11e603e54fcae8ff64cd3->leave($__internal_62318c320273c43435699913c0ba0b1a3d5be48dd8a11e603e54fcae8ff64cd3_prof);

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
