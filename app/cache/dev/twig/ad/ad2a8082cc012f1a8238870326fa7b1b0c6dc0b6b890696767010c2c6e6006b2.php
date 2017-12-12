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
        $__internal_b4f8b948f7042dc0c6058af9dfa54bda13c606737680cd60c9001c25cf2c596b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4f8b948f7042dc0c6058af9dfa54bda13c606737680cd60c9001c25cf2c596b->enter($__internal_b4f8b948f7042dc0c6058af9dfa54bda13c606737680cd60c9001c25cf2c596b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b4f8b948f7042dc0c6058af9dfa54bda13c606737680cd60c9001c25cf2c596b->leave($__internal_b4f8b948f7042dc0c6058af9dfa54bda13c606737680cd60c9001c25cf2c596b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_da1d9b3e26ce273d10dc0407a823213e64299d7a048e0224a542f068a584fe45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da1d9b3e26ce273d10dc0407a823213e64299d7a048e0224a542f068a584fe45->enter($__internal_da1d9b3e26ce273d10dc0407a823213e64299d7a048e0224a542f068a584fe45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_da1d9b3e26ce273d10dc0407a823213e64299d7a048e0224a542f068a584fe45->leave($__internal_da1d9b3e26ce273d10dc0407a823213e64299d7a048e0224a542f068a584fe45_prof);

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
