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
        $__internal_8c48dd9b6adbd27cfc90cd04f15fa47bd17dc22d1ed636f47d8b0b1b7c0c8757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c48dd9b6adbd27cfc90cd04f15fa47bd17dc22d1ed636f47d8b0b1b7c0c8757->enter($__internal_8c48dd9b6adbd27cfc90cd04f15fa47bd17dc22d1ed636f47d8b0b1b7c0c8757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8c48dd9b6adbd27cfc90cd04f15fa47bd17dc22d1ed636f47d8b0b1b7c0c8757->leave($__internal_8c48dd9b6adbd27cfc90cd04f15fa47bd17dc22d1ed636f47d8b0b1b7c0c8757_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ea35175d6c2f446d123bb5f52a85a02162a760a8f97f0b59283c88605e717c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ea35175d6c2f446d123bb5f52a85a02162a760a8f97f0b59283c88605e717c0->enter($__internal_9ea35175d6c2f446d123bb5f52a85a02162a760a8f97f0b59283c88605e717c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9ea35175d6c2f446d123bb5f52a85a02162a760a8f97f0b59283c88605e717c0->leave($__internal_9ea35175d6c2f446d123bb5f52a85a02162a760a8f97f0b59283c88605e717c0_prof);

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
