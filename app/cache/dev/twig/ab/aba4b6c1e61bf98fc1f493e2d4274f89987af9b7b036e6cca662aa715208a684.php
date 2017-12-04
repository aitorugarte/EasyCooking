<?php

/* CookerCookingBundle:Default:index.html.twig */
class __TwigTemplate_7bff7bd9d622912df93cb0f23ac5bc30662d635d263c206c1929f90745d5e686 extends Twig_Template
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
        $__internal_c5a4ab5202c551551da6a9f2dd8b2f91d930b0391e6611df0b158daaf1b20bd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5a4ab5202c551551da6a9f2dd8b2f91d930b0391e6611df0b158daaf1b20bd5->enter($__internal_c5a4ab5202c551551da6a9f2dd8b2f91d930b0391e6611df0b158daaf1b20bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_c5a4ab5202c551551da6a9f2dd8b2f91d930b0391e6611df0b158daaf1b20bd5->leave($__internal_c5a4ab5202c551551da6a9f2dd8b2f91d930b0391e6611df0b158daaf1b20bd5_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle:Default:index.html.twig";
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
", "CookerCookingBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Default/index.html.twig");
    }
}
