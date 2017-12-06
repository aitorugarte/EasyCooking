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
        $__internal_8d01ba34b0d8cc6522d3993e102b5d46fa8a904ca6590a2330a719bf70cb014b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d01ba34b0d8cc6522d3993e102b5d46fa8a904ca6590a2330a719bf70cb014b->enter($__internal_8d01ba34b0d8cc6522d3993e102b5d46fa8a904ca6590a2330a719bf70cb014b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_8d01ba34b0d8cc6522d3993e102b5d46fa8a904ca6590a2330a719bf70cb014b->leave($__internal_8d01ba34b0d8cc6522d3993e102b5d46fa8a904ca6590a2330a719bf70cb014b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_30888f37e01ad7f03b032359a5fd5b44dd561457357d8eb270bd659ac550c48f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30888f37e01ad7f03b032359a5fd5b44dd561457357d8eb270bd659ac550c48f->enter($__internal_30888f37e01ad7f03b032359a5fd5b44dd561457357d8eb270bd659ac550c48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_30888f37e01ad7f03b032359a5fd5b44dd561457357d8eb270bd659ac550c48f->leave($__internal_30888f37e01ad7f03b032359a5fd5b44dd561457357d8eb270bd659ac550c48f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3faf3eb40577ecdfd9148c655f1930a61a0656bba0af65d41aecb5d5898d18a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3faf3eb40577ecdfd9148c655f1930a61a0656bba0af65d41aecb5d5898d18a->enter($__internal_d3faf3eb40577ecdfd9148c655f1930a61a0656bba0af65d41aecb5d5898d18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d3faf3eb40577ecdfd9148c655f1930a61a0656bba0af65d41aecb5d5898d18a->leave($__internal_d3faf3eb40577ecdfd9148c655f1930a61a0656bba0af65d41aecb5d5898d18a_prof);

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
