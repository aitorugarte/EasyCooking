<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_7874052c15dae4075e16a4a56c85c17c3e7784573d6b5760baf4552d0e949973 extends Twig_Template
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
        $__internal_3bafe34cca20a6d16af19fccc04b57044d80a1f28a9ff501a6c72b758108ab27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bafe34cca20a6d16af19fccc04b57044d80a1f28a9ff501a6c72b758108ab27->enter($__internal_3bafe34cca20a6d16af19fccc04b57044d80a1f28a9ff501a6c72b758108ab27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_3bafe34cca20a6d16af19fccc04b57044d80a1f28a9ff501a6c72b758108ab27->leave($__internal_3bafe34cca20a6d16af19fccc04b57044d80a1f28a9ff501a6c72b758108ab27_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
