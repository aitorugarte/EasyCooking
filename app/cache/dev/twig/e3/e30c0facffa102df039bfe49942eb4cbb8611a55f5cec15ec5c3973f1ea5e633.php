<?php

/* EasyAdminBundle:default:label_null.html.twig */
class __TwigTemplate_d68212891ee6b69b202e83148bac723a0b7e825db22647e698a30fc356009cc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c87c7fcc095c889cbc4dc7dc8845e02951ec722ef7e3a4794632071428c26c82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c87c7fcc095c889cbc4dc7dc8845e02951ec722ef7e3a4794632071428c26c82->enter($__internal_c87c7fcc095c889cbc4dc7dc8845e02951ec722ef7e3a4794632071428c26c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_c87c7fcc095c889cbc4dc7dc8845e02951ec722ef7e3a4794632071428c26c82->leave($__internal_c87c7fcc095c889cbc4dc7dc8845e02951ec722ef7e3a4794632071428c26c82_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_null.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"label\">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:label_null.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\javiereguiluz\\easyadmin-bundle\\src/Resources/views/default/label_null.html.twig");
    }
}
