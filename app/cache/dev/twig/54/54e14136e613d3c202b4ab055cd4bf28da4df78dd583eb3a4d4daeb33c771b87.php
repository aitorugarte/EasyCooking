<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_9607a16c8674d493df982b9f0101ba888bd4fdee1b21e045fee5ebb0a863cf07 extends Twig_Template
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
        $__internal_d54d38cad58ab9c5b780e7cb2a8c98b4ac3f35a4a22ae2516ec9570d9987a4b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d54d38cad58ab9c5b780e7cb2a8c98b4ac3f35a4a22ae2516ec9570d9987a4b5->enter($__internal_d54d38cad58ab9c5b780e7cb2a8c98b4ac3f35a4a22ae2516ec9570d9987a4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d54d38cad58ab9c5b780e7cb2a8c98b4ac3f35a4a22ae2516ec9570d9987a4b5->leave($__internal_d54d38cad58ab9c5b780e7cb2a8c98b4ac3f35a4a22ae2516ec9570d9987a4b5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
