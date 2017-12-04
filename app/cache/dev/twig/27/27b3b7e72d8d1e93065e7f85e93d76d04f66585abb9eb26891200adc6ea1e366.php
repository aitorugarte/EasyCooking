<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_673ecf309ce9673f92ac8e50a4ee1698b0dd108b427c7dfc76237f117e1565cd extends Twig_Template
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
        $__internal_ef9fd6e89af7e098711b386662afe5dbf21d77c3c057290e3eb2a1d5fdb1e597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef9fd6e89af7e098711b386662afe5dbf21d77c3c057290e3eb2a1d5fdb1e597->enter($__internal_ef9fd6e89af7e098711b386662afe5dbf21d77c3c057290e3eb2a1d5fdb1e597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ef9fd6e89af7e098711b386662afe5dbf21d77c3c057290e3eb2a1d5fdb1e597->leave($__internal_ef9fd6e89af7e098711b386662afe5dbf21d77c3c057290e3eb2a1d5fdb1e597_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_aa59877c23281b0ac398455db44985f1f1f733860d6389b4f84d39a0099e549d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa59877c23281b0ac398455db44985f1f1f733860d6389b4f84d39a0099e549d->enter($__internal_aa59877c23281b0ac398455db44985f1f1f733860d6389b4f84d39a0099e549d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_aa59877c23281b0ac398455db44985f1f1f733860d6389b4f84d39a0099e549d->leave($__internal_aa59877c23281b0ac398455db44985f1f1f733860d6389b4f84d39a0099e549d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
