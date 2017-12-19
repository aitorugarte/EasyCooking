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
        $__internal_94329acb34500696d9f149e97d85aebbd7bfe62cdcac9263fdf49320ae3325f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94329acb34500696d9f149e97d85aebbd7bfe62cdcac9263fdf49320ae3325f6->enter($__internal_94329acb34500696d9f149e97d85aebbd7bfe62cdcac9263fdf49320ae3325f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_94329acb34500696d9f149e97d85aebbd7bfe62cdcac9263fdf49320ae3325f6->leave($__internal_94329acb34500696d9f149e97d85aebbd7bfe62cdcac9263fdf49320ae3325f6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d02d16fd32a1370eef1efb3354d1f1888c2d2f91c5ab6195ccc488dea5bb8d82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02d16fd32a1370eef1efb3354d1f1888c2d2f91c5ab6195ccc488dea5bb8d82->enter($__internal_d02d16fd32a1370eef1efb3354d1f1888c2d2f91c5ab6195ccc488dea5bb8d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d02d16fd32a1370eef1efb3354d1f1888c2d2f91c5ab6195ccc488dea5bb8d82->leave($__internal_d02d16fd32a1370eef1efb3354d1f1888c2d2f91c5ab6195ccc488dea5bb8d82_prof);

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
