<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_4e30a72b65a48105db81e4394db42f7ab7d570a054f99ae789539ee7d6204ea3 extends Twig_Template
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
        $__internal_e2e96ef2b30451fbb270261116d9e8d68cbe3a6a9a0ada74a2d7838cf5aee103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e96ef2b30451fbb270261116d9e8d68cbe3a6a9a0ada74a2d7838cf5aee103->enter($__internal_e2e96ef2b30451fbb270261116d9e8d68cbe3a6a9a0ada74a2d7838cf5aee103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e2e96ef2b30451fbb270261116d9e8d68cbe3a6a9a0ada74a2d7838cf5aee103->leave($__internal_e2e96ef2b30451fbb270261116d9e8d68cbe3a6a9a0ada74a2d7838cf5aee103_prof);

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
