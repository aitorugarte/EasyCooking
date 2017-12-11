<?php

/* @SensioDistribution/Configurator/final.html.twig */
class __TwigTemplate_a1bd936b0a5b2a24e68d34e9d528baa059456cbab51a93fa8624a7c43549877c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "@SensioDistribution/Configurator/final.html.twig", 1);
        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_185205530af75f3323ed98a6b6dfe590ba5e305b7c982051320da32186a98b64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185205530af75f3323ed98a6b6dfe590ba5e305b7c982051320da32186a98b64->enter($__internal_185205530af75f3323ed98a6b6dfe590ba5e305b7c982051320da32186a98b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/final.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_185205530af75f3323ed98a6b6dfe590ba5e305b7c982051320da32186a98b64->leave($__internal_185205530af75f3323ed98a6b6dfe590ba5e305b7c982051320da32186a98b64_prof);

    }

    // line 3
    public function block_content_class($context, array $blocks = array())
    {
        $__internal_af8d68121a65ad280307b4f551ebc8a0d924fe3bc2dba8a999c015cdf696017c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af8d68121a65ad280307b4f551ebc8a0d924fe3bc2dba8a999c015cdf696017c->enter($__internal_af8d68121a65ad280307b4f551ebc8a0d924fe3bc2dba8a999c015cdf696017c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_class"));

        echo "config_done";
        
        $__internal_af8d68121a65ad280307b4f551ebc8a0d924fe3bc2dba8a999c015cdf696017c->leave($__internal_af8d68121a65ad280307b4f551ebc8a0d924fe3bc2dba8a999c015cdf696017c_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_5fa2e62e82651702a8fd0c0e8da533709403f6ab91b78343ee82e4db337fe258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fa2e62e82651702a8fd0c0e8da533709403f6ab91b78343ee82e4db337fe258->enter($__internal_5fa2e62e82651702a8fd0c0e8da533709403f6ab91b78343ee82e4db337fe258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <div class=\"step\">
        <h1>Well done!</h1>
        ";
        // line 7
        if (($context["is_writable"] ?? $this->getContext($context, "is_writable"))) {
            // line 8
            echo "        <h2>Your distribution is configured!</h2>
        ";
        } else {
            // line 10
            echo "        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        ";
        }
        // line 12
        echo "        <h3>
            <span>
                ";
        // line 14
        if (($context["is_writable"] ?? $this->getContext($context, "is_writable"))) {
            // line 15
            echo "                    Your parameters.yml file has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, ($context["yml_path"] ?? $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>):
                ";
        } else {
            // line 17
            echo "                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, ($context["yml_path"] ?? $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>:
                ";
        }
        // line 19
        echo "            </span>
        </h3>

        <textarea class=\"symfony-configuration\">";
        // line 22
        echo twig_escape_filter($this->env, ($context["parameters"] ?? $this->getContext($context, "parameters")), "html", null, true);
        echo "</textarea>

        ";
        // line 24
        if (($context["welcome_url"] ?? $this->getContext($context, "welcome_url"))) {
            // line 25
            echo "            <ul>
                <li><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, ($context["welcome_url"] ?? $this->getContext($context, "welcome_url")), "html", null, true);
            echo "\">Go to the Welcome page</a></li>
            </ul>
        ";
        }
        // line 29
        echo "    </div>
";
        
        $__internal_5fa2e62e82651702a8fd0c0e8da533709403f6ab91b78343ee82e4db337fe258->leave($__internal_5fa2e62e82651702a8fd0c0e8da533709403f6ab91b78343ee82e4db337fe258_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 29,  100 => 26,  97 => 25,  95 => 24,  90 => 22,  85 => 19,  79 => 17,  73 => 15,  71 => 14,  67 => 12,  63 => 10,  59 => 8,  57 => 7,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SensioDistributionBundle::Configurator/layout.html.twig\" %}

{% block content_class %}config_done{% endblock %}
{% block content %}
    <div class=\"step\">
        <h1>Well done!</h1>
        {% if is_writable %}
        <h2>Your distribution is configured!</h2>
        {% else %}
        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        {% endif %}
        <h3>
            <span>
                {% if is_writable %}
                    Your parameters.yml file has been overwritten with these parameters (in <em>{{ yml_path }}</em>):
                {% else %}
                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>{{ yml_path }}</em>:
                {% endif %}
            </span>
        </h3>

        <textarea class=\"symfony-configuration\">{{ parameters }}</textarea>

        {% if welcome_url %}
            <ul>
                <li><a href=\"{{ welcome_url }}\">Go to the Welcome page</a></li>
            </ul>
        {% endif %}
    </div>
{% endblock %}
", "@SensioDistribution/Configurator/final.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle\\Resources\\views\\Configurator\\final.html.twig");
    }
}
