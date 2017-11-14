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
        $__internal_c8deb4e8dc51364fff1fb60edeb58fb2e7e8d52ed7c5301868746c7147a0f492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8deb4e8dc51364fff1fb60edeb58fb2e7e8d52ed7c5301868746c7147a0f492->enter($__internal_c8deb4e8dc51364fff1fb60edeb58fb2e7e8d52ed7c5301868746c7147a0f492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c8deb4e8dc51364fff1fb60edeb58fb2e7e8d52ed7c5301868746c7147a0f492->leave($__internal_c8deb4e8dc51364fff1fb60edeb58fb2e7e8d52ed7c5301868746c7147a0f492_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a71e9fad64c20f5fe84d74a3756cd7e1c6be0aa29f4a6fe8648ff92b1f5b6fb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a71e9fad64c20f5fe84d74a3756cd7e1c6be0aa29f4a6fe8648ff92b1f5b6fb3->enter($__internal_a71e9fad64c20f5fe84d74a3756cd7e1c6be0aa29f4a6fe8648ff92b1f5b6fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a71e9fad64c20f5fe84d74a3756cd7e1c6be0aa29f4a6fe8648ff92b1f5b6fb3->leave($__internal_a71e9fad64c20f5fe84d74a3756cd7e1c6be0aa29f4a6fe8648ff92b1f5b6fb3_prof);

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
