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
        $__internal_d43c754fe50659c9c2d9b835b4a4dacc8d76bebc14fe585d941a6280e24c3f2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d43c754fe50659c9c2d9b835b4a4dacc8d76bebc14fe585d941a6280e24c3f2c->enter($__internal_d43c754fe50659c9c2d9b835b4a4dacc8d76bebc14fe585d941a6280e24c3f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d43c754fe50659c9c2d9b835b4a4dacc8d76bebc14fe585d941a6280e24c3f2c->leave($__internal_d43c754fe50659c9c2d9b835b4a4dacc8d76bebc14fe585d941a6280e24c3f2c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_735ef1c66f618762e9266f2e4cc55ef7b1ae4ba592a5447b08988bb58d1a0900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_735ef1c66f618762e9266f2e4cc55ef7b1ae4ba592a5447b08988bb58d1a0900->enter($__internal_735ef1c66f618762e9266f2e4cc55ef7b1ae4ba592a5447b08988bb58d1a0900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_735ef1c66f618762e9266f2e4cc55ef7b1ae4ba592a5447b08988bb58d1a0900->leave($__internal_735ef1c66f618762e9266f2e4cc55ef7b1ae4ba592a5447b08988bb58d1a0900_prof);

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
