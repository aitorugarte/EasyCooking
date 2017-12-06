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
        $__internal_28bb4c9678ceb7cce3ae4aa5402231ab6549c1f5674929c3f80111a292f522e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28bb4c9678ceb7cce3ae4aa5402231ab6549c1f5674929c3f80111a292f522e8->enter($__internal_28bb4c9678ceb7cce3ae4aa5402231ab6549c1f5674929c3f80111a292f522e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_28bb4c9678ceb7cce3ae4aa5402231ab6549c1f5674929c3f80111a292f522e8->leave($__internal_28bb4c9678ceb7cce3ae4aa5402231ab6549c1f5674929c3f80111a292f522e8_prof);

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
