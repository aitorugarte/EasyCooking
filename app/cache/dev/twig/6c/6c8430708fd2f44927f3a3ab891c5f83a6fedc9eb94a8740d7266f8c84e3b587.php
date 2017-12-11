<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_a82435d44d5712b0b8a57d0bb3ef5699e2369fd037fe0e8f85e1e168b5c3d6bf extends Twig_Template
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
        $__internal_b8607765b0df84df01ff8a4911b7ef867226274aadbbfd8fb485909b86e249bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8607765b0df84df01ff8a4911b7ef867226274aadbbfd8fb485909b86e249bf->enter($__internal_b8607765b0df84df01ff8a4911b7ef867226274aadbbfd8fb485909b86e249bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8607765b0df84df01ff8a4911b7ef867226274aadbbfd8fb485909b86e249bf->leave($__internal_b8607765b0df84df01ff8a4911b7ef867226274aadbbfd8fb485909b86e249bf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c70e856426649517fa7593144ff4de105454eac9b2288a21f0c32db0256fd1e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c70e856426649517fa7593144ff4de105454eac9b2288a21f0c32db0256fd1e3->enter($__internal_c70e856426649517fa7593144ff4de105454eac9b2288a21f0c32db0256fd1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_c70e856426649517fa7593144ff4de105454eac9b2288a21f0c32db0256fd1e3->leave($__internal_c70e856426649517fa7593144ff4de105454eac9b2288a21f0c32db0256fd1e3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_87988c08324e63c2f5b135c51795669989bb3f5fd99bd638b030bef107c2a692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87988c08324e63c2f5b135c51795669989bb3f5fd99bd638b030bef107c2a692->enter($__internal_87988c08324e63c2f5b135c51795669989bb3f5fd99bd638b030bef107c2a692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_87988c08324e63c2f5b135c51795669989bb3f5fd99bd638b030bef107c2a692->leave($__internal_87988c08324e63c2f5b135c51795669989bb3f5fd99bd638b030bef107c2a692_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_33b39ad4c55557911bd267894026c2852d8f5cdff9b72c6163a4806121760abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b39ad4c55557911bd267894026c2852d8f5cdff9b72c6163a4806121760abc->enter($__internal_33b39ad4c55557911bd267894026c2852d8f5cdff9b72c6163a4806121760abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_33b39ad4c55557911bd267894026c2852d8f5cdff9b72c6163a4806121760abc->leave($__internal_33b39ad4c55557911bd267894026c2852d8f5cdff9b72c6163a4806121760abc_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_e8251beb8eb1283318e2e14a4fb78ebdf06b33a5988186d5cd1ba86232d74b50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8251beb8eb1283318e2e14a4fb78ebdf06b33a5988186d5cd1ba86232d74b50->enter($__internal_e8251beb8eb1283318e2e14a4fb78ebdf06b33a5988186d5cd1ba86232d74b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_e8251beb8eb1283318e2e14a4fb78ebdf06b33a5988186d5cd1ba86232d74b50->leave($__internal_e8251beb8eb1283318e2e14a4fb78ebdf06b33a5988186d5cd1ba86232d74b50_prof);

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
