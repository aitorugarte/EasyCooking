<?php

/* @EasyAdmin/default/field_smallint.html.twig */
class __TwigTemplate_17da0091ee85912f8c039683b63cc22f0bdface6475b94659f820d7484f3426e extends Twig_Template
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
        $__internal_f1b5ba1ae0f4c3808b1eed2d80e4bd8d6c1a6d9d83065543656dc7d801478d48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1b5ba1ae0f4c3808b1eed2d80e4bd8d6c1a6d9d83065543656dc7d801478d48->enter($__internal_f1b5ba1ae0f4c3808b1eed2d80e4bd8d6c1a6d9d83065543656dc7d801478d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_smallint.html.twig"));

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
        
        $__internal_f1b5ba1ae0f4c3808b1eed2d80e4bd8d6c1a6d9d83065543656dc7d801478d48->leave($__internal_f1b5ba1ae0f4c3808b1eed2d80e4bd8d6c1a6d9d83065543656dc7d801478d48_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_smallint.html.twig";
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
", "@EasyAdmin/default/field_smallint.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\field_smallint.html.twig");
    }
}
