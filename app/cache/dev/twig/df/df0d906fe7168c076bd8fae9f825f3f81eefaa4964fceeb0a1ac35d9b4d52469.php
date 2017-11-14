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
        $__internal_42b890d08b4ab5033ff81961edda035c0b1699d725d769f08e7bf39bb4b70781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42b890d08b4ab5033ff81961edda035c0b1699d725d769f08e7bf39bb4b70781->enter($__internal_42b890d08b4ab5033ff81961edda035c0b1699d725d769f08e7bf39bb4b70781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_42b890d08b4ab5033ff81961edda035c0b1699d725d769f08e7bf39bb4b70781->leave($__internal_42b890d08b4ab5033ff81961edda035c0b1699d725d769f08e7bf39bb4b70781_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_45901a212dbb41d3b9925974992c7ce8d472937935acb14f992128343111d393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45901a212dbb41d3b9925974992c7ce8d472937935acb14f992128343111d393->enter($__internal_45901a212dbb41d3b9925974992c7ce8d472937935acb14f992128343111d393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_45901a212dbb41d3b9925974992c7ce8d472937935acb14f992128343111d393->leave($__internal_45901a212dbb41d3b9925974992c7ce8d472937935acb14f992128343111d393_prof);

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
