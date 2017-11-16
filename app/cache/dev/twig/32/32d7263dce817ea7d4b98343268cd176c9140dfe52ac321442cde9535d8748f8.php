<?php

/* ::layout.html.twig */
class __TwigTemplate_302d6d9e713e4245142e57b2f3b59f8fcbd5d94378062e49217f7eae35e06c71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4ebe1182780a55b318bb4da798c8f4d2b513f815388419e57267f87b1cfb14d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ebe1182780a55b318bb4da798c8f4d2b513f815388419e57267f87b1cfb14d->enter($__internal_c4ebe1182780a55b318bb4da798c8f4d2b513f815388419e57267f87b1cfb14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 2
        echo "<!doctype html>
<html>
\t<head>
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t</head>
\t<body>
\t\t";
        // line 8
        $this->displayBlock('body', $context, $blocks);
        // line 9
        echo "\t</body>
</html>";
        
        $__internal_c4ebe1182780a55b318bb4da798c8f4d2b513f815388419e57267f87b1cfb14d->leave($__internal_c4ebe1182780a55b318bb4da798c8f4d2b513f815388419e57267f87b1cfb14d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d388d4c21cec541cd4770a0bd37195d4fd4226bcc3df65e7a26b55988cb97b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d388d4c21cec541cd4770a0bd37195d4fd4226bcc3df65e7a26b55988cb97b66->enter($__internal_d388d4c21cec541cd4770a0bd37195d4fd4226bcc3df65e7a26b55988cb97b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_d388d4c21cec541cd4770a0bd37195d4fd4226bcc3df65e7a26b55988cb97b66->leave($__internal_d388d4c21cec541cd4770a0bd37195d4fd4226bcc3df65e7a26b55988cb97b66_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_57890a8358a113e28bd3c802d8ae78c19b16ed22c7bd49bb81fb733de5e94925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57890a8358a113e28bd3c802d8ae78c19b16ed22c7bd49bb81fb733de5e94925->enter($__internal_57890a8358a113e28bd3c802d8ae78c19b16ed22c7bd49bb81fb733de5e94925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_57890a8358a113e28bd3c802d8ae78c19b16ed22c7bd49bb81fb733de5e94925->leave($__internal_57890a8358a113e28bd3c802d8ae78c19b16ed22c7bd49bb81fb733de5e94925_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  45 => 5,  37 => 9,  35 => 8,  29 => 5,  24 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layout.html.twig #}
<!doctype html>
<html>
\t<head>
\t\t<title>{% block title %}Default title{% endblock %}</title>
\t</head>
\t<body>
\t\t{% block body %}{% endblock %}
\t</body>
</html>", "::layout.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\app/Resources\\views/layout.html.twig");
    }
}
