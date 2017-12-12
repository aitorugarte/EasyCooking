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
        $__internal_c05d782518ad169fcbbd6f298e3e903f9c8cf9786b25ee729938bfc4a806da10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c05d782518ad169fcbbd6f298e3e903f9c8cf9786b25ee729938bfc4a806da10->enter($__internal_c05d782518ad169fcbbd6f298e3e903f9c8cf9786b25ee729938bfc4a806da10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c05d782518ad169fcbbd6f298e3e903f9c8cf9786b25ee729938bfc4a806da10->leave($__internal_c05d782518ad169fcbbd6f298e3e903f9c8cf9786b25ee729938bfc4a806da10_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0c0a34cf094c623475973d3617b863133cd564bb848fb969d101cafc8bd01964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0a34cf094c623475973d3617b863133cd564bb848fb969d101cafc8bd01964->enter($__internal_0c0a34cf094c623475973d3617b863133cd564bb848fb969d101cafc8bd01964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0c0a34cf094c623475973d3617b863133cd564bb848fb969d101cafc8bd01964->leave($__internal_0c0a34cf094c623475973d3617b863133cd564bb848fb969d101cafc8bd01964_prof);

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
