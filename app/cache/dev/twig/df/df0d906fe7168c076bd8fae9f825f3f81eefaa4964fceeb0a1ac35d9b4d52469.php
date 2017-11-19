<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_62c1bcfd9d93daca2545583053af38daed66420e92c8e37ceda6f6b6a5ab76c0 extends Twig_Template
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
        $__internal_3bb00bf43473fe128eb0b8240d3246c5ab96518b1cb80b4c342a90e5816236b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb00bf43473fe128eb0b8240d3246c5ab96518b1cb80b4c342a90e5816236b1->enter($__internal_3bb00bf43473fe128eb0b8240d3246c5ab96518b1cb80b4c342a90e5816236b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3bb00bf43473fe128eb0b8240d3246c5ab96518b1cb80b4c342a90e5816236b1->leave($__internal_3bb00bf43473fe128eb0b8240d3246c5ab96518b1cb80b4c342a90e5816236b1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c547be73196593aa2086abc28454ab05f9f496c8d39234dda9a0d0376ae8bbf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c547be73196593aa2086abc28454ab05f9f496c8d39234dda9a0d0376ae8bbf7->enter($__internal_c547be73196593aa2086abc28454ab05f9f496c8d39234dda9a0d0376ae8bbf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c547be73196593aa2086abc28454ab05f9f496c8d39234dda9a0d0376ae8bbf7->leave($__internal_c547be73196593aa2086abc28454ab05f9f496c8d39234dda9a0d0376ae8bbf7_prof);

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
