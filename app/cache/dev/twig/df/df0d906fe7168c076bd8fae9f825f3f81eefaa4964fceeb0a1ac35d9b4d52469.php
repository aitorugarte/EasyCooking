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
        $__internal_e6d35ef2abfbfd4a5e88d1c5844c6d8511004db06f17067e6e3d4cd3c624215c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d35ef2abfbfd4a5e88d1c5844c6d8511004db06f17067e6e3d4cd3c624215c->enter($__internal_e6d35ef2abfbfd4a5e88d1c5844c6d8511004db06f17067e6e3d4cd3c624215c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e6d35ef2abfbfd4a5e88d1c5844c6d8511004db06f17067e6e3d4cd3c624215c->leave($__internal_e6d35ef2abfbfd4a5e88d1c5844c6d8511004db06f17067e6e3d4cd3c624215c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cd3b3aa905c1d4ce6310256672fabf4d80d508143b2102766b5a53ecb1c9b4c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd3b3aa905c1d4ce6310256672fabf4d80d508143b2102766b5a53ecb1c9b4c9->enter($__internal_cd3b3aa905c1d4ce6310256672fabf4d80d508143b2102766b5a53ecb1c9b4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cd3b3aa905c1d4ce6310256672fabf4d80d508143b2102766b5a53ecb1c9b4c9->leave($__internal_cd3b3aa905c1d4ce6310256672fabf4d80d508143b2102766b5a53ecb1c9b4c9_prof);

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
