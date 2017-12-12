<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_d0bcd13e8a409df123603a641872fe21b43a8daa89343941be8c75e38d510d40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2aded0c45164317b52e7d092889061cc757e875e3554559e0b27c1b0590ba826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aded0c45164317b52e7d092889061cc757e875e3554559e0b27c1b0590ba826->enter($__internal_2aded0c45164317b52e7d092889061cc757e875e3554559e0b27c1b0590ba826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2aded0c45164317b52e7d092889061cc757e875e3554559e0b27c1b0590ba826->leave($__internal_2aded0c45164317b52e7d092889061cc757e875e3554559e0b27c1b0590ba826_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e18d6009ec1d90423dc3114179b9787421e5c46c4c489005e7b35397cebae937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e18d6009ec1d90423dc3114179b9787421e5c46c4c489005e7b35397cebae937->enter($__internal_e18d6009ec1d90423dc3114179b9787421e5c46c4c489005e7b35397cebae937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e18d6009ec1d90423dc3114179b9787421e5c46c4c489005e7b35397cebae937->leave($__internal_e18d6009ec1d90423dc3114179b9787421e5c46c4c489005e7b35397cebae937_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
