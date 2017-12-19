<?php

/* @EasyAdmin/default/field_date.html.twig */
class __TwigTemplate_8b82479ce6e91bbdda97b34ca9629fe7edcc50d205933cd635bc578e59abf2e9 extends Twig_Template
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
        $__internal_59a2cba1e6842963e8bc99928a0f06cf9a1372683b7f5162fe73b0ee10a9bf7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a2cba1e6842963e8bc99928a0f06cf9a1372683b7f5162fe73b0ee10a9bf7b->enter($__internal_59a2cba1e6842963e8bc99928a0f06cf9a1372683b7f5162fe73b0ee10a9bf7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_59a2cba1e6842963e8bc99928a0f06cf9a1372683b7f5162fe73b0ee10a9bf7b->leave($__internal_59a2cba1e6842963e8bc99928a0f06cf9a1372683b7f5162fe73b0ee10a9bf7b_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_date.html.twig";
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
", "@EasyAdmin/default/field_date.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\field_date.html.twig");
    }
}
