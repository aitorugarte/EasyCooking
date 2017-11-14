<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_a54f8f8a3747e69a2b9abf980a391a93f48765a00a5c0fd1aa4b6e2bf03db986 extends Twig_Template
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
        $__internal_93763c120fe9c2cf7a1fafe29be04f5f9ae0c7c8f25c5aec6fc52d9beb14e5a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93763c120fe9c2cf7a1fafe29be04f5f9ae0c7c8f25c5aec6fc52d9beb14e5a0->enter($__internal_93763c120fe9c2cf7a1fafe29be04f5f9ae0c7c8f25c5aec6fc52d9beb14e5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_93763c120fe9c2cf7a1fafe29be04f5f9ae0c7c8f25c5aec6fc52d9beb14e5a0->leave($__internal_93763c120fe9c2cf7a1fafe29be04f5f9ae0c7c8f25c5aec6fc52d9beb14e5a0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
