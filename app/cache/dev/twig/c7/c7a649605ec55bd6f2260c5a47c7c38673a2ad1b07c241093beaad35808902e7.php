<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_60fa8c80a06f1df51676d53232fb2e0e1a84533aae91da00463905873205bb1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
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
        $__internal_f25600b73a556baa34de4c8fecc8117db51dfcb6c8cd832527575171373a8890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f25600b73a556baa34de4c8fecc8117db51dfcb6c8cd832527575171373a8890->enter($__internal_f25600b73a556baa34de4c8fecc8117db51dfcb6c8cd832527575171373a8890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f25600b73a556baa34de4c8fecc8117db51dfcb6c8cd832527575171373a8890->leave($__internal_f25600b73a556baa34de4c8fecc8117db51dfcb6c8cd832527575171373a8890_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d1f4e87f8ebd50b5121f85db38a18e064da64698b10cc85a768eadae772d9bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1f4e87f8ebd50b5121f85db38a18e064da64698b10cc85a768eadae772d9bd4->enter($__internal_d1f4e87f8ebd50b5121f85db38a18e064da64698b10cc85a768eadae772d9bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_d1f4e87f8ebd50b5121f85db38a18e064da64698b10cc85a768eadae772d9bd4->leave($__internal_d1f4e87f8ebd50b5121f85db38a18e064da64698b10cc85a768eadae772d9bd4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a18785a26b84cb41f168be31c1a93fa4b7821b4c0f3526f1b4da5faeb5a3e05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a18785a26b84cb41f168be31c1a93fa4b7821b4c0f3526f1b4da5faeb5a3e05->enter($__internal_6a18785a26b84cb41f168be31c1a93fa4b7821b4c0f3526f1b4da5faeb5a3e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_6a18785a26b84cb41f168be31c1a93fa4b7821b4c0f3526f1b4da5faeb5a3e05->leave($__internal_6a18785a26b84cb41f168be31c1a93fa4b7821b4c0f3526f1b4da5faeb5a3e05_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a33551a16463e22986d78362835a534b88623ecdca20140f011b1df7ee23aebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33551a16463e22986d78362835a534b88623ecdca20140f011b1df7ee23aebc->enter($__internal_a33551a16463e22986d78362835a534b88623ecdca20140f011b1df7ee23aebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a33551a16463e22986d78362835a534b88623ecdca20140f011b1df7ee23aebc->leave($__internal_a33551a16463e22986d78362835a534b88623ecdca20140f011b1df7ee23aebc_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_d8bed87d176675807626557f7f6ded253b2553a15f5184e331915f45db3416ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8bed87d176675807626557f7f6ded253b2553a15f5184e331915f45db3416ad->enter($__internal_d8bed87d176675807626557f7f6ded253b2553a15f5184e331915f45db3416ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_d8bed87d176675807626557f7f6ded253b2553a15f5184e331915f45db3416ad->leave($__internal_d8bed87d176675807626557f7f6ded253b2553a15f5184e331915f45db3416ad_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
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
", "SensioDistributionBundle::Configurator/layout.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
