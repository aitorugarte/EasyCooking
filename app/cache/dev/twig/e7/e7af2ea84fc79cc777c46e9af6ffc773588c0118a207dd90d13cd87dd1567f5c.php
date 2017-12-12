<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8c79dc4721822c3da769f6e883fd81b1d7f92d660e13d05deff15f545a258dab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f606c3689a79a3554edd85362ff3d262578d090996b1d46941e329c3fe6f6e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f606c3689a79a3554edd85362ff3d262578d090996b1d46941e329c3fe6f6e6->enter($__internal_6f606c3689a79a3554edd85362ff3d262578d090996b1d46941e329c3fe6f6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f606c3689a79a3554edd85362ff3d262578d090996b1d46941e329c3fe6f6e6->leave($__internal_6f606c3689a79a3554edd85362ff3d262578d090996b1d46941e329c3fe6f6e6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2384e7729a6969c512f0dc1e5f3d550310d250dca90a6bb1191d1c3487a3d89b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2384e7729a6969c512f0dc1e5f3d550310d250dca90a6bb1191d1c3487a3d89b->enter($__internal_2384e7729a6969c512f0dc1e5f3d550310d250dca90a6bb1191d1c3487a3d89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2384e7729a6969c512f0dc1e5f3d550310d250dca90a6bb1191d1c3487a3d89b->leave($__internal_2384e7729a6969c512f0dc1e5f3d550310d250dca90a6bb1191d1c3487a3d89b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_46dab79b525d7500d594c1d935583d4cd089f7b7a07159ff4e2429b3db4dddc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46dab79b525d7500d594c1d935583d4cd089f7b7a07159ff4e2429b3db4dddc8->enter($__internal_46dab79b525d7500d594c1d935583d4cd089f7b7a07159ff4e2429b3db4dddc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_46dab79b525d7500d594c1d935583d4cd089f7b7a07159ff4e2429b3db4dddc8->leave($__internal_46dab79b525d7500d594c1d935583d4cd089f7b7a07159ff4e2429b3db4dddc8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0f71303106149f0966b309bd10a934ea6c3df4891d51b5df1c3afa09707d8c60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f71303106149f0966b309bd10a934ea6c3df4891d51b5df1c3afa09707d8c60->enter($__internal_0f71303106149f0966b309bd10a934ea6c3df4891d51b5df1c3afa09707d8c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0f71303106149f0966b309bd10a934ea6c3df4891d51b5df1c3afa09707d8c60->leave($__internal_0f71303106149f0966b309bd10a934ea6c3df4891d51b5df1c3afa09707d8c60_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
