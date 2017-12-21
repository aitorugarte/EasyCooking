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
        $__internal_9f63cb15d6d3ab4cb34c105d0b056219141a27781366c833d608e7b5d8165ea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f63cb15d6d3ab4cb34c105d0b056219141a27781366c833d608e7b5d8165ea8->enter($__internal_9f63cb15d6d3ab4cb34c105d0b056219141a27781366c833d608e7b5d8165ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9f63cb15d6d3ab4cb34c105d0b056219141a27781366c833d608e7b5d8165ea8->leave($__internal_9f63cb15d6d3ab4cb34c105d0b056219141a27781366c833d608e7b5d8165ea8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae277b2821acbe1d0538c4ab4c8e531b4f1b4500830855a27e69f6ac7fe155cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae277b2821acbe1d0538c4ab4c8e531b4f1b4500830855a27e69f6ac7fe155cf->enter($__internal_ae277b2821acbe1d0538c4ab4c8e531b4f1b4500830855a27e69f6ac7fe155cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ae277b2821acbe1d0538c4ab4c8e531b4f1b4500830855a27e69f6ac7fe155cf->leave($__internal_ae277b2821acbe1d0538c4ab4c8e531b4f1b4500830855a27e69f6ac7fe155cf_prof);

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
