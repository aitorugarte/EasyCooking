<?php

/* @EasyAdmin/default/field_bigint.html.twig */
class __TwigTemplate_55230d18e9abaa48b6d62ef0222fe58f0c4ed7bf6f3baed3c38e0390d8e6bee4 extends Twig_Template
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
        $__internal_d7c5dc6ac3a3ff76012158ea7e4bb4d84dd56d199958ec0281df75c4f6a7f485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c5dc6ac3a3ff76012158ea7e4bb4d84dd56d199958ec0281df75c4f6a7f485->enter($__internal_d7c5dc6ac3a3ff76012158ea7e4bb4d84dd56d199958ec0281df75c4f6a7f485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_bigint.html.twig"));

        // line 1
        if ($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array()), ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_d7c5dc6ac3a3ff76012158ea7e4bb4d84dd56d199958ec0281df75c4f6a7f485->leave($__internal_d7c5dc6ac3a3ff76012158ea7e4bb4d84dd56d199958ec0281df75c4f6a7f485_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_bigint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if field_options.format %}
    {{ field_options.format|format(value) }}
{% else %}
    {{ value|number_format }}
{% endif %}
", "@EasyAdmin/default/field_bigint.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\field_bigint.html.twig");
    }
}
