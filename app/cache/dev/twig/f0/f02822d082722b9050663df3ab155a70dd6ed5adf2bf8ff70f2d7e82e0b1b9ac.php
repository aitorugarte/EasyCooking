<?php

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_9561409f1fb6b4e4de82ff30f08c5bd42d36e03643ec060d9e6bbdd2cba5d548 extends Twig_Template
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
        $__internal_8062df12a7b39c034b569914e00f55c7682a2bf2b6a0f920170ae5f12f00bec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8062df12a7b39c034b569914e00f55c7682a2bf2b6a0f920170ae5f12f00bec1->enter($__internal_8062df12a7b39c034b569914e00f55c7682a2bf2b6a0f920170ae5f12f00bec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_8062df12a7b39c034b569914e00f55c7682a2bf2b6a0f920170ae5f12f00bec1->leave($__internal_8062df12a7b39c034b569914e00f55c7682a2bf2b6a0f920170ae5f12f00bec1_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "@EasyAdmin/default/field_id.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\field_id.html.twig");
    }
}
