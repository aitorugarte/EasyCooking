<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_e155f8e2e130f89c225475ee97949a0b3a177168d07af8b5aca8f2b464766ea7 extends Twig_Template
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
        $__internal_11c96df7bcb6b7d07db397d9e870f44fdb2870277c220bc44e7eb76b27c7c504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11c96df7bcb6b7d07db397d9e870f44fdb2870277c220bc44e7eb76b27c7c504->enter($__internal_11c96df7bcb6b7d07db397d9e870f44fdb2870277c220bc44e7eb76b27c7c504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_11c96df7bcb6b7d07db397d9e870f44fdb2870277c220bc44e7eb76b27c7c504->leave($__internal_11c96df7bcb6b7d07db397d9e870f44fdb2870277c220bc44e7eb76b27c7c504_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
