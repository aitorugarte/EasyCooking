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
        $__internal_528a935a91d1fcef8a162760b20c8b8b482072f9da0cc076907f5adf783fa6ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_528a935a91d1fcef8a162760b20c8b8b482072f9da0cc076907f5adf783fa6ee->enter($__internal_528a935a91d1fcef8a162760b20c8b8b482072f9da0cc076907f5adf783fa6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_528a935a91d1fcef8a162760b20c8b8b482072f9da0cc076907f5adf783fa6ee->leave($__internal_528a935a91d1fcef8a162760b20c8b8b482072f9da0cc076907f5adf783fa6ee_prof);

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
