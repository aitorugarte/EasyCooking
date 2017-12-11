<?php

/* EasyAdminBundle:default:field_datetimetz.html.twig */
class __TwigTemplate_4dfd01f16196d77dbbeeb8d8efe7c714dead9e8df26b495c00f23a8ede7a5576 extends Twig_Template
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
        $__internal_1d081d986f0a5b6a11cdfff1423fa0d883d159c69d25ac0efb1b96bd16e20962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d081d986f0a5b6a11cdfff1423fa0d883d159c69d25ac0efb1b96bd16e20962->enter($__internal_1d081d986f0a5b6a11cdfff1423fa0d883d159c69d25ac0efb1b96bd16e20962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_1d081d986f0a5b6a11cdfff1423fa0d883d159c69d25ac0efb1b96bd16e20962->leave($__internal_1d081d986f0a5b6a11cdfff1423fa0d883d159c69d25ac0efb1b96bd16e20962_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetimetz.html.twig";
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
        return new Twig_Source("{{ value|date(field_options.format) }}
", "EasyAdminBundle:default:field_datetimetz.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\javiereguiluz\\easyadmin-bundle\\src/Resources/views/default/field_datetimetz.html.twig");
    }
}
