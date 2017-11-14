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
        $__internal_0705bd574b0cca0042e0bbbfce05a9d7cdf154d03ee12b030c33b326bd5b58cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0705bd574b0cca0042e0bbbfce05a9d7cdf154d03ee12b030c33b326bd5b58cf->enter($__internal_0705bd574b0cca0042e0bbbfce05a9d7cdf154d03ee12b030c33b326bd5b58cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0705bd574b0cca0042e0bbbfce05a9d7cdf154d03ee12b030c33b326bd5b58cf->leave($__internal_0705bd574b0cca0042e0bbbfce05a9d7cdf154d03ee12b030c33b326bd5b58cf_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_103ad9b33af282ec0dafcf881cdf179ec8ca65a96bf884aac42ec31c3b11fcfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103ad9b33af282ec0dafcf881cdf179ec8ca65a96bf884aac42ec31c3b11fcfd->enter($__internal_103ad9b33af282ec0dafcf881cdf179ec8ca65a96bf884aac42ec31c3b11fcfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_103ad9b33af282ec0dafcf881cdf179ec8ca65a96bf884aac42ec31c3b11fcfd->leave($__internal_103ad9b33af282ec0dafcf881cdf179ec8ca65a96bf884aac42ec31c3b11fcfd_prof);

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
