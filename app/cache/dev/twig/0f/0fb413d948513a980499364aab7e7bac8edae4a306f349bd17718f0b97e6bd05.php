<?php

/* @BloggerBlog/Default/index.html.twig */
class __TwigTemplate_411cb7ac7a3f171196393a8f6670365f9810bdfc2b375c70c039fc321439d444 extends Twig_Template
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
        $__internal_6e552042302368e02951a79e4efab00650763387b974456e3952c6479064d56a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e552042302368e02951a79e4efab00650763387b974456e3952c6479064d56a->enter($__internal_6e552042302368e02951a79e4efab00650763387b974456e3952c6479064d56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_6e552042302368e02951a79e4efab00650763387b974456e3952c6479064d56a->leave($__internal_6e552042302368e02951a79e4efab00650763387b974456e3952c6479064d56a_prof);

    }

    public function getTemplateName()
    {
        return "@BloggerBlog/Default/index.html.twig";
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
        return new Twig_Source("Hello World!
", "@BloggerBlog/Default/index.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Blogger\\BlogBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
