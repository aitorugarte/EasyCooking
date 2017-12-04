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
        $__internal_3e291460d0ee27a63e72cc52e6071b8e170f88d47ac6799c03b27950ba4e868e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e291460d0ee27a63e72cc52e6071b8e170f88d47ac6799c03b27950ba4e868e->enter($__internal_3e291460d0ee27a63e72cc52e6071b8e170f88d47ac6799c03b27950ba4e868e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_3e291460d0ee27a63e72cc52e6071b8e170f88d47ac6799c03b27950ba4e868e->leave($__internal_3e291460d0ee27a63e72cc52e6071b8e170f88d47ac6799c03b27950ba4e868e_prof);

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
