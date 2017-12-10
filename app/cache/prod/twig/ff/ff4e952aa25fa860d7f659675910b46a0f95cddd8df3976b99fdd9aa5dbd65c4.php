<?php

/* @EasyAdmin/default/field_raw.html.twig */
class __TwigTemplate_3010c3356b666ba59026ac894f055a2952375fbab3a7fb7dd9d839727331ceda extends Twig_Template
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
        // line 1
        echo ($context["value"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_raw.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@EasyAdmin/default/field_raw.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\field_raw.html.twig");
    }
}
