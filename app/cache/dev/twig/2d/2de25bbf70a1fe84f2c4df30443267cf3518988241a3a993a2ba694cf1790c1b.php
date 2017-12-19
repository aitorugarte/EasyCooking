<?php

/* CookerCookingBundle:Default:index.html.twig */
class __TwigTemplate_ec6323a7f1fbb442e71752d697b8da98b2cb43edc2425996232d4027457fac66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b37ca6bafa73d569f846636477eb63ee9d4f8f78fb94dfe5511765fabd4e8faa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b37ca6bafa73d569f846636477eb63ee9d4f8f78fb94dfe5511765fabd4e8faa->enter($__internal_b37ca6bafa73d569f846636477eb63ee9d4f8f78fb94dfe5511765fabd4e8faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_b37ca6bafa73d569f846636477eb63ee9d4f8f78fb94dfe5511765fabd4e8faa->leave($__internal_b37ca6bafa73d569f846636477eb63ee9d4f8f78fb94dfe5511765fabd4e8faa_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "CookerCookingBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Default/index.html.twig");
    }
}
