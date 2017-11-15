<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_58ae2dea50044848d8b4c0759bd76f9b4b1305d214a9d3fbb901eb2749a31a67 extends Twig_Template
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
        $__internal_48a13005ec319ebe204ec34da22cfafd973697aaff9a6c22a25fbb73493164bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a13005ec319ebe204ec34da22cfafd973697aaff9a6c22a25fbb73493164bd->enter($__internal_48a13005ec319ebe204ec34da22cfafd973697aaff9a6c22a25fbb73493164bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_48a13005ec319ebe204ec34da22cfafd973697aaff9a6c22a25fbb73493164bd->leave($__internal_48a13005ec319ebe204ec34da22cfafd973697aaff9a6c22a25fbb73493164bd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
