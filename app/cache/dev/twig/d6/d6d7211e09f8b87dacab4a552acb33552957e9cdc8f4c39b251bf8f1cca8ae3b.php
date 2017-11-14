<?php

/* BloggerBlogBundle:Default:index.html.twig */
class __TwigTemplate_78e702999c89b2861f0e899b3ceaffdac40c26b288ac93dfccb59cc2be90ea50 extends Twig_Template
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
        $__internal_e0df6c3aeefee53eb374a36452c1e75d9adb22b849efc8228be873592ddc57ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0df6c3aeefee53eb374a36452c1e75d9adb22b849efc8228be873592ddc57ef->enter($__internal_e0df6c3aeefee53eb374a36452c1e75d9adb22b849efc8228be873592ddc57ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_e0df6c3aeefee53eb374a36452c1e75d9adb22b849efc8228be873592ddc57ef->leave($__internal_e0df6c3aeefee53eb374a36452c1e75d9adb22b849efc8228be873592ddc57ef_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Default:index.html.twig";
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
", "BloggerBlogBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Blogger\\BlogBundle/Resources/views/Default/index.html.twig");
    }
}
