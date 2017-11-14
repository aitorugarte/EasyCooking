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
        $__internal_5f675d56fbc29449269dcb3ead837a1346510bfa2f6185ff8459c783c0a90ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f675d56fbc29449269dcb3ead837a1346510bfa2f6185ff8459c783c0a90ad0->enter($__internal_5f675d56fbc29449269dcb3ead837a1346510bfa2f6185ff8459c783c0a90ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_5f675d56fbc29449269dcb3ead837a1346510bfa2f6185ff8459c783c0a90ad0->leave($__internal_5f675d56fbc29449269dcb3ead837a1346510bfa2f6185ff8459c783c0a90ad0_prof);

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
