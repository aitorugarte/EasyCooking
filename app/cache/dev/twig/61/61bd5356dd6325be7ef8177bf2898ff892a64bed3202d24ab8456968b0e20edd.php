<?php

/* EasyAdminBundle:default:label_empty.html.twig */
class __TwigTemplate_4f6007306ffc87d57531bf8372ffbcb0011ae45098b012e8f0195511c30183e3 extends Twig_Template
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
        $__internal_f8c0bc40b9be27bf8a0d087704a5775d7b51c2c7ed5a4af0f99af11fe9f81839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8c0bc40b9be27bf8a0d087704a5775d7b51c2c7ed5a4af0f99af11fe9f81839->enter($__internal_f8c0bc40b9be27bf8a0d087704a5775d7b51c2c7ed5a4af0f99af11fe9f81839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_f8c0bc40b9be27bf8a0d087704a5775d7b51c2c7ed5a4af0f99af11fe9f81839->leave($__internal_f8c0bc40b9be27bf8a0d087704a5775d7b51c2c7ed5a4af0f99af11fe9f81839_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_empty.html.twig";
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
        return new Twig_Source("<span class=\"label label-empty\">{{ 'label.empty'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:label_empty.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\javiereguiluz\\easyadmin-bundle\\src/Resources/views/default/label_empty.html.twig");
    }
}
