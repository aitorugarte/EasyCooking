<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_da7b5833d3f7dd1885e7378aba2b08be5ec27370f6f08da10ca4d9c6ba66a22d extends Twig_Template
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
        $__internal_7bf69e75dc6174e7e5b1aa51072da8fde6b584dd7f1c8f3360895e15f93d1d78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf69e75dc6174e7e5b1aa51072da8fde6b584dd7f1c8f3360895e15f93d1d78->enter($__internal_7bf69e75dc6174e7e5b1aa51072da8fde6b584dd7f1c8f3360895e15f93d1d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_7bf69e75dc6174e7e5b1aa51072da8fde6b584dd7f1c8f3360895e15f93d1d78->leave($__internal_7bf69e75dc6174e7e5b1aa51072da8fde6b584dd7f1c8f3360895e15f93d1d78_prof);

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