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
        $__internal_1567f356fc936e6f5edd2cc09fa61f1d7e2a42bbf43d3e85250bb5f70b8fb29f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1567f356fc936e6f5edd2cc09fa61f1d7e2a42bbf43d3e85250bb5f70b8fb29f->enter($__internal_1567f356fc936e6f5edd2cc09fa61f1d7e2a42bbf43d3e85250bb5f70b8fb29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1567f356fc936e6f5edd2cc09fa61f1d7e2a42bbf43d3e85250bb5f70b8fb29f->leave($__internal_1567f356fc936e6f5edd2cc09fa61f1d7e2a42bbf43d3e85250bb5f70b8fb29f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_131db018f1dcbc8b51d5d4b14e5c3e9699bbdd45e417dfa52351fccdbb410481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_131db018f1dcbc8b51d5d4b14e5c3e9699bbdd45e417dfa52351fccdbb410481->enter($__internal_131db018f1dcbc8b51d5d4b14e5c3e9699bbdd45e417dfa52351fccdbb410481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_131db018f1dcbc8b51d5d4b14e5c3e9699bbdd45e417dfa52351fccdbb410481->leave($__internal_131db018f1dcbc8b51d5d4b14e5c3e9699bbdd45e417dfa52351fccdbb410481_prof);

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
