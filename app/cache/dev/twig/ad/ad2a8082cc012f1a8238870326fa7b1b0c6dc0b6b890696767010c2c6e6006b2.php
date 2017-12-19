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
        $__internal_514ecb2b417b2975c7eb72787ebbc35a5fd0a4492230f9733fff7f269df9898f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_514ecb2b417b2975c7eb72787ebbc35a5fd0a4492230f9733fff7f269df9898f->enter($__internal_514ecb2b417b2975c7eb72787ebbc35a5fd0a4492230f9733fff7f269df9898f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_514ecb2b417b2975c7eb72787ebbc35a5fd0a4492230f9733fff7f269df9898f->leave($__internal_514ecb2b417b2975c7eb72787ebbc35a5fd0a4492230f9733fff7f269df9898f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d59f2ed869e4713c6399dbe30e61d3105548859b41c0d9eac92579aaaee15004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d59f2ed869e4713c6399dbe30e61d3105548859b41c0d9eac92579aaaee15004->enter($__internal_d59f2ed869e4713c6399dbe30e61d3105548859b41c0d9eac92579aaaee15004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d59f2ed869e4713c6399dbe30e61d3105548859b41c0d9eac92579aaaee15004->leave($__internal_d59f2ed869e4713c6399dbe30e61d3105548859b41c0d9eac92579aaaee15004_prof);

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
