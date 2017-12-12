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
        $__internal_805ad1252f3d7ef2391353afca65af186eada8d10c78bcab00e003ee81479d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_805ad1252f3d7ef2391353afca65af186eada8d10c78bcab00e003ee81479d2c->enter($__internal_805ad1252f3d7ef2391353afca65af186eada8d10c78bcab00e003ee81479d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_805ad1252f3d7ef2391353afca65af186eada8d10c78bcab00e003ee81479d2c->leave($__internal_805ad1252f3d7ef2391353afca65af186eada8d10c78bcab00e003ee81479d2c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a5a6d7c47cf5552a7208ee507ddc5e6e0b56a4968d2f6837e480700e591d103e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5a6d7c47cf5552a7208ee507ddc5e6e0b56a4968d2f6837e480700e591d103e->enter($__internal_a5a6d7c47cf5552a7208ee507ddc5e6e0b56a4968d2f6837e480700e591d103e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a5a6d7c47cf5552a7208ee507ddc5e6e0b56a4968d2f6837e480700e591d103e->leave($__internal_a5a6d7c47cf5552a7208ee507ddc5e6e0b56a4968d2f6837e480700e591d103e_prof);

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
