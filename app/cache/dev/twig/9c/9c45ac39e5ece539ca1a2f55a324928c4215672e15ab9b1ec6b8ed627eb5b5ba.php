<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_fa9fc7fc68e959c9b8b04dd52c797d7d0ec91ff43ffecad681c018f5b963f53e extends Twig_Template
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
        $__internal_1f37d5556bd7ba97640defd9f2d9a2874816054fba9e23a6a0edd492fc9e7cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f37d5556bd7ba97640defd9f2d9a2874816054fba9e23a6a0edd492fc9e7cfa->enter($__internal_1f37d5556bd7ba97640defd9f2d9a2874816054fba9e23a6a0edd492fc9e7cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_1f37d5556bd7ba97640defd9f2d9a2874816054fba9e23a6a0edd492fc9e7cfa->leave($__internal_1f37d5556bd7ba97640defd9f2d9a2874816054fba9e23a6a0edd492fc9e7cfa_prof);

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
