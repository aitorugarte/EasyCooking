<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_df58981b57036f7c17d503df2830623538fe972fd72628108287c6db3cddafb3 extends Twig_Template
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
        $__internal_bc2e9bd36d7189002e305d07783b0a2bbe1e0e270ed05bc8b29aa035aa05cb0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc2e9bd36d7189002e305d07783b0a2bbe1e0e270ed05bc8b29aa035aa05cb0a->enter($__internal_bc2e9bd36d7189002e305d07783b0a2bbe1e0e270ed05bc8b29aa035aa05cb0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_bc2e9bd36d7189002e305d07783b0a2bbe1e0e270ed05bc8b29aa035aa05cb0a->leave($__internal_bc2e9bd36d7189002e305d07783b0a2bbe1e0e270ed05bc8b29aa035aa05cb0a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1deabd8cb8d5e0faa30b24174fdcc44f39c393ce68a2e328ed8217afe728ff9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1deabd8cb8d5e0faa30b24174fdcc44f39c393ce68a2e328ed8217afe728ff9c->enter($__internal_1deabd8cb8d5e0faa30b24174fdcc44f39c393ce68a2e328ed8217afe728ff9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1deabd8cb8d5e0faa30b24174fdcc44f39c393ce68a2e328ed8217afe728ff9c->leave($__internal_1deabd8cb8d5e0faa30b24174fdcc44f39c393ce68a2e328ed8217afe728ff9c_prof);

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
