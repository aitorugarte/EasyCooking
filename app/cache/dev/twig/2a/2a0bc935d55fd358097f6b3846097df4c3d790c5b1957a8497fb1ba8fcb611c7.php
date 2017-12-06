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
        $__internal_c4ae88742eaadd3103b804ef74978f12ad6f7745ea4caaf420d45867fe0d2d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ae88742eaadd3103b804ef74978f12ad6f7745ea4caaf420d45867fe0d2d3e->enter($__internal_c4ae88742eaadd3103b804ef74978f12ad6f7745ea4caaf420d45867fe0d2d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_c4ae88742eaadd3103b804ef74978f12ad6f7745ea4caaf420d45867fe0d2d3e->leave($__internal_c4ae88742eaadd3103b804ef74978f12ad6f7745ea4caaf420d45867fe0d2d3e_prof);

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
