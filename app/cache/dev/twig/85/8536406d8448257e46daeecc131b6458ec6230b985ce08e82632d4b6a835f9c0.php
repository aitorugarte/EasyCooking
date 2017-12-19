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
        $__internal_1e6a878e84ac213000038b702566ff7d53a017684be68c03d017137c2c93b8db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e6a878e84ac213000038b702566ff7d53a017684be68c03d017137c2c93b8db->enter($__internal_1e6a878e84ac213000038b702566ff7d53a017684be68c03d017137c2c93b8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e6a878e84ac213000038b702566ff7d53a017684be68c03d017137c2c93b8db->leave($__internal_1e6a878e84ac213000038b702566ff7d53a017684be68c03d017137c2c93b8db_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e2b09ef624189441795ab0c9044e64ed57237e471d82b16644ae8af3f5a71175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b09ef624189441795ab0c9044e64ed57237e471d82b16644ae8af3f5a71175->enter($__internal_e2b09ef624189441795ab0c9044e64ed57237e471d82b16644ae8af3f5a71175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_e2b09ef624189441795ab0c9044e64ed57237e471d82b16644ae8af3f5a71175->leave($__internal_e2b09ef624189441795ab0c9044e64ed57237e471d82b16644ae8af3f5a71175_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e501782d268454a455eedc1ab2f0a0019d9adddd0a81ba4b550145c8e5bfdf9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e501782d268454a455eedc1ab2f0a0019d9adddd0a81ba4b550145c8e5bfdf9a->enter($__internal_e501782d268454a455eedc1ab2f0a0019d9adddd0a81ba4b550145c8e5bfdf9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_e501782d268454a455eedc1ab2f0a0019d9adddd0a81ba4b550145c8e5bfdf9a->leave($__internal_e501782d268454a455eedc1ab2f0a0019d9adddd0a81ba4b550145c8e5bfdf9a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_316ad55ff28a96b08424f9059d66f3c1b85fd542c950df5b168d7e09aa19008b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_316ad55ff28a96b08424f9059d66f3c1b85fd542c950df5b168d7e09aa19008b->enter($__internal_316ad55ff28a96b08424f9059d66f3c1b85fd542c950df5b168d7e09aa19008b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_316ad55ff28a96b08424f9059d66f3c1b85fd542c950df5b168d7e09aa19008b->leave($__internal_316ad55ff28a96b08424f9059d66f3c1b85fd542c950df5b168d7e09aa19008b_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_4fae9544f8dd64b16912ea95f815663f6ff41a25722a40367bbc5aba85e6950d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fae9544f8dd64b16912ea95f815663f6ff41a25722a40367bbc5aba85e6950d->enter($__internal_4fae9544f8dd64b16912ea95f815663f6ff41a25722a40367bbc5aba85e6950d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_4fae9544f8dd64b16912ea95f815663f6ff41a25722a40367bbc5aba85e6950d->leave($__internal_4fae9544f8dd64b16912ea95f815663f6ff41a25722a40367bbc5aba85e6950d_prof);

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
