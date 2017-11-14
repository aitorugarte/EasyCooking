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
        $__internal_a6b0c6daab6e13e38548bfdb340e1f22e517ce63655c6697abfbe7eb24582ac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b0c6daab6e13e38548bfdb340e1f22e517ce63655c6697abfbe7eb24582ac5->enter($__internal_a6b0c6daab6e13e38548bfdb340e1f22e517ce63655c6697abfbe7eb24582ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a6b0c6daab6e13e38548bfdb340e1f22e517ce63655c6697abfbe7eb24582ac5->leave($__internal_a6b0c6daab6e13e38548bfdb340e1f22e517ce63655c6697abfbe7eb24582ac5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e46f688c885a219375e0e67ef20253c3ac66f873df3f58d1af18e82bf5ee3a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e46f688c885a219375e0e67ef20253c3ac66f873df3f58d1af18e82bf5ee3a9c->enter($__internal_e46f688c885a219375e0e67ef20253c3ac66f873df3f58d1af18e82bf5ee3a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e46f688c885a219375e0e67ef20253c3ac66f873df3f58d1af18e82bf5ee3a9c->leave($__internal_e46f688c885a219375e0e67ef20253c3ac66f873df3f58d1af18e82bf5ee3a9c_prof);

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
