<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_9c591f7752e12960e66c9d089d1fea62b11cd33c8cecf47955510b8299081b91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "@SensioDistribution/Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3f01541bc59d6e2d65216550a41dc1a47f4a7aa386cdd8ca5bf30b03fbf75ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3f01541bc59d6e2d65216550a41dc1a47f4a7aa386cdd8ca5bf30b03fbf75ef->enter($__internal_d3f01541bc59d6e2d65216550a41dc1a47f4a7aa386cdd8ca5bf30b03fbf75ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3f01541bc59d6e2d65216550a41dc1a47f4a7aa386cdd8ca5bf30b03fbf75ef->leave($__internal_d3f01541bc59d6e2d65216550a41dc1a47f4a7aa386cdd8ca5bf30b03fbf75ef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_09895be712948d0f874ae4159cf2a7f529026a46c4cec8ebcf00de751a2f58bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09895be712948d0f874ae4159cf2a7f529026a46c4cec8ebcf00de751a2f58bd->enter($__internal_09895be712948d0f874ae4159cf2a7f529026a46c4cec8ebcf00de751a2f58bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_09895be712948d0f874ae4159cf2a7f529026a46c4cec8ebcf00de751a2f58bd->leave($__internal_09895be712948d0f874ae4159cf2a7f529026a46c4cec8ebcf00de751a2f58bd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_60a1536f63aa225e06df7af6485324ab761677da2be409b594999a0e4be4660d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60a1536f63aa225e06df7af6485324ab761677da2be409b594999a0e4be4660d->enter($__internal_60a1536f63aa225e06df7af6485324ab761677da2be409b594999a0e4be4660d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_60a1536f63aa225e06df7af6485324ab761677da2be409b594999a0e4be4660d->leave($__internal_60a1536f63aa225e06df7af6485324ab761677da2be409b594999a0e4be4660d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_df9df9fb8b7a89444042ca731d6827bdd5c8e4690b1372bbec9baed34598b2e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df9df9fb8b7a89444042ca731d6827bdd5c8e4690b1372bbec9baed34598b2e6->enter($__internal_df9df9fb8b7a89444042ca731d6827bdd5c8e4690b1372bbec9baed34598b2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, ($context["version"] ?? $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_df9df9fb8b7a89444042ca731d6827bdd5c8e4690b1372bbec9baed34598b2e6->leave($__internal_df9df9fb8b7a89444042ca731d6827bdd5c8e4690b1372bbec9baed34598b2e6_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_f13a96454326985d3bbf49511d88103db1fa0df7bedbdd4af0bd9949e6b25da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f13a96454326985d3bbf49511d88103db1fa0df7bedbdd4af0bd9949e6b25da6->enter($__internal_f13a96454326985d3bbf49511d88103db1fa0df7bedbdd4af0bd9949e6b25da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_f13a96454326985d3bbf49511d88103db1fa0df7bedbdd4af0bd9949e6b25da6->leave($__internal_f13a96454326985d3bbf49511d88103db1fa0df7bedbdd4af0bd9949e6b25da6_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "@SensioDistribution/Configurator/layout.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle\\Resources\\views\\Configurator\\layout.html.twig");
    }
}
