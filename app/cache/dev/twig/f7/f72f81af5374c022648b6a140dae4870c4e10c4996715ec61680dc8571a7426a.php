<?php

/* @CookerCooking/Default/index.html.twig */
class __TwigTemplate_c1489b981867d9819db74befaea4f5f3253ff031f4af9a22ef02f55e7f5ddb06 extends Twig_Template
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
        $__internal_d6e3d892681c938cf6dce3a12416bcbcd0f78df571e00d1c8e56fc997c92ad3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e3d892681c938cf6dce3a12416bcbcd0f78df571e00d1c8e56fc997c92ad3b->enter($__internal_d6e3d892681c938cf6dce3a12416bcbcd0f78df571e00d1c8e56fc997c92ad3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_d6e3d892681c938cf6dce3a12416bcbcd0f78df571e00d1c8e56fc997c92ad3b->leave($__internal_d6e3d892681c938cf6dce3a12416bcbcd0f78df571e00d1c8e56fc997c92ad3b_prof);

    }

    public function getTemplateName()
    {
        return "@CookerCooking/Default/index.html.twig";
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
", "@CookerCooking/Default/index.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
