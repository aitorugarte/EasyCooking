<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_1672aa3484044cacc679fa09d73d7e2baa990f610380742b18427bd5844b08e0 extends Twig_Template
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
        $__internal_e0b3f00cfb3f2590912aac1261f5a84c6b8499a95d36ca355d3e19810625ec93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b3f00cfb3f2590912aac1261f5a84c6b8499a95d36ca355d3e19810625ec93->enter($__internal_e0b3f00cfb3f2590912aac1261f5a84c6b8499a95d36ca355d3e19810625ec93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_e0b3f00cfb3f2590912aac1261f5a84c6b8499a95d36ca355d3e19810625ec93->leave($__internal_e0b3f00cfb3f2590912aac1261f5a84c6b8499a95d36ca355d3e19810625ec93_prof);

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
