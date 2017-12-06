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
        $__internal_5e63a126ed7faccc24bdc741e08c4ecff43dd03f91a2eca0dfe952fdd0c9707a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e63a126ed7faccc24bdc741e08c4ecff43dd03f91a2eca0dfe952fdd0c9707a->enter($__internal_5e63a126ed7faccc24bdc741e08c4ecff43dd03f91a2eca0dfe952fdd0c9707a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5e63a126ed7faccc24bdc741e08c4ecff43dd03f91a2eca0dfe952fdd0c9707a->leave($__internal_5e63a126ed7faccc24bdc741e08c4ecff43dd03f91a2eca0dfe952fdd0c9707a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5bba9102c8d6d07eb5ee001ea74fd3003f515b7c267b7951667e5f991e8373f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bba9102c8d6d07eb5ee001ea74fd3003f515b7c267b7951667e5f991e8373f5->enter($__internal_5bba9102c8d6d07eb5ee001ea74fd3003f515b7c267b7951667e5f991e8373f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5bba9102c8d6d07eb5ee001ea74fd3003f515b7c267b7951667e5f991e8373f5->leave($__internal_5bba9102c8d6d07eb5ee001ea74fd3003f515b7c267b7951667e5f991e8373f5_prof);

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
