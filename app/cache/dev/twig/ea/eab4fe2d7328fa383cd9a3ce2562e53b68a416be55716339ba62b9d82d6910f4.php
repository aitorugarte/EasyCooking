<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_cd44a388c0fe289d8bcc20536112787769f1eec45febcc0b7a6895cb144def45 extends Twig_Template
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
        $__internal_7d0a6e13b9dc0cabb44fba0b611244e304b3a786b066f9e2b4cfc58e0ab48f1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d0a6e13b9dc0cabb44fba0b611244e304b3a786b066f9e2b4cfc58e0ab48f1d->enter($__internal_7d0a6e13b9dc0cabb44fba0b611244e304b3a786b066f9e2b4cfc58e0ab48f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_7d0a6e13b9dc0cabb44fba0b611244e304b3a786b066f9e2b4cfc58e0ab48f1d->leave($__internal_7d0a6e13b9dc0cabb44fba0b611244e304b3a786b066f9e2b4cfc58e0ab48f1d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
