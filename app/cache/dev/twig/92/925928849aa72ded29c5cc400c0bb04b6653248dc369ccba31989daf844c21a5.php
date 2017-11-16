<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_ba26e614fddc4f8022092da591c45bf7c6e3c668ccfbe491f0f6416fcefda12a extends Twig_Template
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
        $__internal_4b7f2bf9d2d58b2ab83486e79ac0c5bcd8072e40634bfbb796c3a91b5e68a7e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7f2bf9d2d58b2ab83486e79ac0c5bcd8072e40634bfbb796c3a91b5e68a7e9->enter($__internal_4b7f2bf9d2d58b2ab83486e79ac0c5bcd8072e40634bfbb796c3a91b5e68a7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_4b7f2bf9d2d58b2ab83486e79ac0c5bcd8072e40634bfbb796c3a91b5e68a7e9->leave($__internal_4b7f2bf9d2d58b2ab83486e79ac0c5bcd8072e40634bfbb796c3a91b5e68a7e9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
