<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c7412417e6a8f3aae2a536ed46e5617ab93d4d3dd80bf2e9dd552d54c0f2b2ff extends Twig_Template
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
        $__internal_00673eb6f440e1978ac33c7bb82d13d9d7e7aa69da09a185c06b28c2e53fdb3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00673eb6f440e1978ac33c7bb82d13d9d7e7aa69da09a185c06b28c2e53fdb3b->enter($__internal_00673eb6f440e1978ac33c7bb82d13d9d7e7aa69da09a185c06b28c2e53fdb3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_00673eb6f440e1978ac33c7bb82d13d9d7e7aa69da09a185c06b28c2e53fdb3b->leave($__internal_00673eb6f440e1978ac33c7bb82d13d9d7e7aa69da09a185c06b28c2e53fdb3b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
