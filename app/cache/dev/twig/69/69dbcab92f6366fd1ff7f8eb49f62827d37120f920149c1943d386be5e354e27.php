<?php

/* @SensioDistribution/Configurator/final.html.twig */
class __TwigTemplate_da4eea937b90058c84a84f444d7094287e0c5f10e14a4e7a980c24dbdbf85679 extends Twig_Template
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
        $__internal_c1858f02eb6498f0a30e11cdf8d7c7753ab0f361d377faac4c356528233534ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1858f02eb6498f0a30e11cdf8d7c7753ab0f361d377faac4c356528233534ee->enter($__internal_c1858f02eb6498f0a30e11cdf8d7c7753ab0f361d377faac4c356528233534ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/final.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1858f02eb6498f0a30e11cdf8d7c7753ab0f361d377faac4c356528233534ee->leave($__internal_c1858f02eb6498f0a30e11cdf8d7c7753ab0f361d377faac4c356528233534ee_prof);

    }

    // line 3
    public function block_content_class($context, array $blocks = array())
    {
        $__internal_ee8affb756bb8127fb9e684bca185a335f71d0b0e96ea3381af3865f6eeaacc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee8affb756bb8127fb9e684bca185a335f71d0b0e96ea3381af3865f6eeaacc6->enter($__internal_ee8affb756bb8127fb9e684bca185a335f71d0b0e96ea3381af3865f6eeaacc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_class"));

        echo "config_done";
        
        $__internal_ee8affb756bb8127fb9e684bca185a335f71d0b0e96ea3381af3865f6eeaacc6->leave($__internal_ee8affb756bb8127fb9e684bca185a335f71d0b0e96ea3381af3865f6eeaacc6_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_af1b8e262d348f3b9aa3401acb1e77e57df067a9cf92591e78504243903780c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1b8e262d348f3b9aa3401acb1e77e57df067a9cf92591e78504243903780c9->enter($__internal_af1b8e262d348f3b9aa3401acb1e77e57df067a9cf92591e78504243903780c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_af1b8e262d348f3b9aa3401acb1e77e57df067a9cf92591e78504243903780c9->leave($__internal_af1b8e262d348f3b9aa3401acb1e77e57df067a9cf92591e78504243903780c9_prof);

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
