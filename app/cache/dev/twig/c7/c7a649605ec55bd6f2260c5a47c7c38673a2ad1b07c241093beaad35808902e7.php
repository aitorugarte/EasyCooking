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
        $__internal_9229f02835d977588bf085177dc42abd70e3723a6a9e2f702aa0ba1203dad86b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9229f02835d977588bf085177dc42abd70e3723a6a9e2f702aa0ba1203dad86b->enter($__internal_9229f02835d977588bf085177dc42abd70e3723a6a9e2f702aa0ba1203dad86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9229f02835d977588bf085177dc42abd70e3723a6a9e2f702aa0ba1203dad86b->leave($__internal_9229f02835d977588bf085177dc42abd70e3723a6a9e2f702aa0ba1203dad86b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_300652ae3ad53cc633b051a16b4f110ad4fad031f860998623509671349c5a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_300652ae3ad53cc633b051a16b4f110ad4fad031f860998623509671349c5a87->enter($__internal_300652ae3ad53cc633b051a16b4f110ad4fad031f860998623509671349c5a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_300652ae3ad53cc633b051a16b4f110ad4fad031f860998623509671349c5a87->leave($__internal_300652ae3ad53cc633b051a16b4f110ad4fad031f860998623509671349c5a87_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_924ccf38d8a2672ab9d3aeca3620207cd6a7dfba01d19b90522d288d7a8eea6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_924ccf38d8a2672ab9d3aeca3620207cd6a7dfba01d19b90522d288d7a8eea6d->enter($__internal_924ccf38d8a2672ab9d3aeca3620207cd6a7dfba01d19b90522d288d7a8eea6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_924ccf38d8a2672ab9d3aeca3620207cd6a7dfba01d19b90522d288d7a8eea6d->leave($__internal_924ccf38d8a2672ab9d3aeca3620207cd6a7dfba01d19b90522d288d7a8eea6d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_eec3db44b774b7ebd6e2b6914bf274754551e00c243ee53fdfa203df27472166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec3db44b774b7ebd6e2b6914bf274754551e00c243ee53fdfa203df27472166->enter($__internal_eec3db44b774b7ebd6e2b6914bf274754551e00c243ee53fdfa203df27472166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_eec3db44b774b7ebd6e2b6914bf274754551e00c243ee53fdfa203df27472166->leave($__internal_eec3db44b774b7ebd6e2b6914bf274754551e00c243ee53fdfa203df27472166_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_5dfc6a0dcbccd3d0c47aa6bc53d695b1265ea369cededc9edb384e7f5f99a720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dfc6a0dcbccd3d0c47aa6bc53d695b1265ea369cededc9edb384e7f5f99a720->enter($__internal_5dfc6a0dcbccd3d0c47aa6bc53d695b1265ea369cededc9edb384e7f5f99a720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_5dfc6a0dcbccd3d0c47aa6bc53d695b1265ea369cededc9edb384e7f5f99a720->leave($__internal_5dfc6a0dcbccd3d0c47aa6bc53d695b1265ea369cededc9edb384e7f5f99a720_prof);

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
