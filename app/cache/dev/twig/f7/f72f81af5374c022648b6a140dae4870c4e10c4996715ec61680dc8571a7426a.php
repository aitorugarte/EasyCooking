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
        $__internal_88ae7333a898926de75b802cf2363bcc5840134faf1e01dea7a37409da7894de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ae7333a898926de75b802cf2363bcc5840134faf1e01dea7a37409da7894de->enter($__internal_88ae7333a898926de75b802cf2363bcc5840134faf1e01dea7a37409da7894de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_88ae7333a898926de75b802cf2363bcc5840134faf1e01dea7a37409da7894de->leave($__internal_88ae7333a898926de75b802cf2363bcc5840134faf1e01dea7a37409da7894de_prof);

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
