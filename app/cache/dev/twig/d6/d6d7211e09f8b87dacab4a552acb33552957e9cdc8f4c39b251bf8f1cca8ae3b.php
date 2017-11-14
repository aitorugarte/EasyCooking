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
        $__internal_968887e0f19c3a71ba84902f80dd1742fc937a56dd596eb31ce4b5b89ac7442a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_968887e0f19c3a71ba84902f80dd1742fc937a56dd596eb31ce4b5b89ac7442a->enter($__internal_968887e0f19c3a71ba84902f80dd1742fc937a56dd596eb31ce4b5b89ac7442a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_968887e0f19c3a71ba84902f80dd1742fc937a56dd596eb31ce4b5b89ac7442a->leave($__internal_968887e0f19c3a71ba84902f80dd1742fc937a56dd596eb31ce4b5b89ac7442a_prof);

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
