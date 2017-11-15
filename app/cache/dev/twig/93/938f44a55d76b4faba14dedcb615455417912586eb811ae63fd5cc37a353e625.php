<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_6eb0441d2f8f3a515c5fb04276bb1016e18c84f2d1b3a5c6657f707419a34563 extends Twig_Template
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
        $__internal_8359e387ecad0c4e0cd8f41139e0fbb5b518981cc2fa55e2142660fd14a16bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8359e387ecad0c4e0cd8f41139e0fbb5b518981cc2fa55e2142660fd14a16bce->enter($__internal_8359e387ecad0c4e0cd8f41139e0fbb5b518981cc2fa55e2142660fd14a16bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8359e387ecad0c4e0cd8f41139e0fbb5b518981cc2fa55e2142660fd14a16bce->leave($__internal_8359e387ecad0c4e0cd8f41139e0fbb5b518981cc2fa55e2142660fd14a16bce_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_25dec1a9fa08dd76766ee6674d4a0096f9fd77975bcc762668cc231e1e47df01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25dec1a9fa08dd76766ee6674d4a0096f9fd77975bcc762668cc231e1e47df01->enter($__internal_25dec1a9fa08dd76766ee6674d4a0096f9fd77975bcc762668cc231e1e47df01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_25dec1a9fa08dd76766ee6674d4a0096f9fd77975bcc762668cc231e1e47df01->leave($__internal_25dec1a9fa08dd76766ee6674d4a0096f9fd77975bcc762668cc231e1e47df01_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8730320700154d5b82d0217eaaffff0b50d5e7846bd15c3e3a9a6ddc61c44fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8730320700154d5b82d0217eaaffff0b50d5e7846bd15c3e3a9a6ddc61c44fa->enter($__internal_f8730320700154d5b82d0217eaaffff0b50d5e7846bd15c3e3a9a6ddc61c44fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_f8730320700154d5b82d0217eaaffff0b50d5e7846bd15c3e3a9a6ddc61c44fa->leave($__internal_f8730320700154d5b82d0217eaaffff0b50d5e7846bd15c3e3a9a6ddc61c44fa_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_db6dad103dfc28f0fe489c9e3887a2b9b50a879e88124c79be0de4691ab82836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6dad103dfc28f0fe489c9e3887a2b9b50a879e88124c79be0de4691ab82836->enter($__internal_db6dad103dfc28f0fe489c9e3887a2b9b50a879e88124c79be0de4691ab82836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_db6dad103dfc28f0fe489c9e3887a2b9b50a879e88124c79be0de4691ab82836->leave($__internal_db6dad103dfc28f0fe489c9e3887a2b9b50a879e88124c79be0de4691ab82836_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_02b9bc7c55d84cd97acf2e8f4758f7b2236e224b2532751c74347f77ee2b331b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02b9bc7c55d84cd97acf2e8f4758f7b2236e224b2532751c74347f77ee2b331b->enter($__internal_02b9bc7c55d84cd97acf2e8f4758f7b2236e224b2532751c74347f77ee2b331b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_02b9bc7c55d84cd97acf2e8f4758f7b2236e224b2532751c74347f77ee2b331b->leave($__internal_02b9bc7c55d84cd97acf2e8f4758f7b2236e224b2532751c74347f77ee2b331b_prof);

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
