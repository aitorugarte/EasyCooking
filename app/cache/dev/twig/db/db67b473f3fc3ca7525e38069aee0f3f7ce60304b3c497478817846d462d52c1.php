<?php

/* @CookerCooking/Default/index.html.twig */
class __TwigTemplate_dd404f105edf7ad99be923a336b1fd42921bbd27aa7416806248ebf717a4e5ab extends Twig_Template
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
        $__internal_72cd4b6f65202ee90c1127dcf51e6abca46bf6f6a35d49c64f6b1c0ecbd4db86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72cd4b6f65202ee90c1127dcf51e6abca46bf6f6a35d49c64f6b1c0ecbd4db86->enter($__internal_72cd4b6f65202ee90c1127dcf51e6abca46bf6f6a35d49c64f6b1c0ecbd4db86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_72cd4b6f65202ee90c1127dcf51e6abca46bf6f6a35d49c64f6b1c0ecbd4db86->leave($__internal_72cd4b6f65202ee90c1127dcf51e6abca46bf6f6a35d49c64f6b1c0ecbd4db86_prof);

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
