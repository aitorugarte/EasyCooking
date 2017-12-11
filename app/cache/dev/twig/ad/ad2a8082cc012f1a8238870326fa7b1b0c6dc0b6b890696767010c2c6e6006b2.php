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
        $__internal_3f580e95644c33773fa28cb5baf1ed21fa10cf6f9d442b8bf9ab01ee6ce0dd86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f580e95644c33773fa28cb5baf1ed21fa10cf6f9d442b8bf9ab01ee6ce0dd86->enter($__internal_3f580e95644c33773fa28cb5baf1ed21fa10cf6f9d442b8bf9ab01ee6ce0dd86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3f580e95644c33773fa28cb5baf1ed21fa10cf6f9d442b8bf9ab01ee6ce0dd86->leave($__internal_3f580e95644c33773fa28cb5baf1ed21fa10cf6f9d442b8bf9ab01ee6ce0dd86_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4eca3aa3b7b9d54365c14f835333d00f28a0c6a760e567616a0895ca7b3858d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eca3aa3b7b9d54365c14f835333d00f28a0c6a760e567616a0895ca7b3858d6->enter($__internal_4eca3aa3b7b9d54365c14f835333d00f28a0c6a760e567616a0895ca7b3858d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4eca3aa3b7b9d54365c14f835333d00f28a0c6a760e567616a0895ca7b3858d6->leave($__internal_4eca3aa3b7b9d54365c14f835333d00f28a0c6a760e567616a0895ca7b3858d6_prof);

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
