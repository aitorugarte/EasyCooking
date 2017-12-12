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
        $__internal_073edc6b27c21736b1201617e769abc01a8a804ec9e7753d7a3d99b8f8a269f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_073edc6b27c21736b1201617e769abc01a8a804ec9e7753d7a3d99b8f8a269f3->enter($__internal_073edc6b27c21736b1201617e769abc01a8a804ec9e7753d7a3d99b8f8a269f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_073edc6b27c21736b1201617e769abc01a8a804ec9e7753d7a3d99b8f8a269f3->leave($__internal_073edc6b27c21736b1201617e769abc01a8a804ec9e7753d7a3d99b8f8a269f3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6d1dbb4bb460918f18ca08ba9ffcc5a7e402624e166c525dfa24876c3f54415f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d1dbb4bb460918f18ca08ba9ffcc5a7e402624e166c525dfa24876c3f54415f->enter($__internal_6d1dbb4bb460918f18ca08ba9ffcc5a7e402624e166c525dfa24876c3f54415f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6d1dbb4bb460918f18ca08ba9ffcc5a7e402624e166c525dfa24876c3f54415f->leave($__internal_6d1dbb4bb460918f18ca08ba9ffcc5a7e402624e166c525dfa24876c3f54415f_prof);

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
