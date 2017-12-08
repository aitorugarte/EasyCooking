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
        $__internal_190b99a9f16c947c36eac2dc644f46ad218178ca6cae83c4bdc8d02dad30062d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_190b99a9f16c947c36eac2dc644f46ad218178ca6cae83c4bdc8d02dad30062d->enter($__internal_190b99a9f16c947c36eac2dc644f46ad218178ca6cae83c4bdc8d02dad30062d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_190b99a9f16c947c36eac2dc644f46ad218178ca6cae83c4bdc8d02dad30062d->leave($__internal_190b99a9f16c947c36eac2dc644f46ad218178ca6cae83c4bdc8d02dad30062d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9dae9fbbfb330f51809c30643c82cb546381e62ca307583c23b75b17bab812d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dae9fbbfb330f51809c30643c82cb546381e62ca307583c23b75b17bab812d4->enter($__internal_9dae9fbbfb330f51809c30643c82cb546381e62ca307583c23b75b17bab812d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9dae9fbbfb330f51809c30643c82cb546381e62ca307583c23b75b17bab812d4->leave($__internal_9dae9fbbfb330f51809c30643c82cb546381e62ca307583c23b75b17bab812d4_prof);

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
