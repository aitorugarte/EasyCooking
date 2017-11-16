<?php

/* CookerCookingBundle::layout.html.twig */
class __TwigTemplate_a64ed364333730eae6cbe18ed506cf687fb0d46ebea9c5c87415ee80468c263f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "CookerCookingBundle::layout.html.twig", 2);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e09f65faeead790bf23783f748fc98d31505e97ecff9ea03a59fc194ea51e4e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e09f65faeead790bf23783f748fc98d31505e97ecff9ea03a59fc194ea51e4e1->enter($__internal_e09f65faeead790bf23783f748fc98d31505e97ecff9ea03a59fc194ea51e4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e09f65faeead790bf23783f748fc98d31505e97ecff9ea03a59fc194ea51e4e1->leave($__internal_e09f65faeead790bf23783f748fc98d31505e97ecff9ea03a59fc194ea51e4e1_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_8ff2661fcd75124be19202abbe3ac202605c60301e0c80cea227752a48200148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff2661fcd75124be19202abbe3ac202605c60301e0c80cea227752a48200148->enter($__internal_8ff2661fcd75124be19202abbe3ac202605c60301e0c80cea227752a48200148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "    ¿Qué ponemos aquí?
";
        
        $__internal_8ff2661fcd75124be19202abbe3ac202605c60301e0c80cea227752a48200148->leave($__internal_8ff2661fcd75124be19202abbe3ac202605c60301e0c80cea227752a48200148_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/layout.html.twig #}
{% extends '::base.html.twig' %}

{% block sidebar %}
    ¿Qué ponemos aquí?
{% endblock %}
", "CookerCookingBundle::layout.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/layout.html.twig");
    }
}
