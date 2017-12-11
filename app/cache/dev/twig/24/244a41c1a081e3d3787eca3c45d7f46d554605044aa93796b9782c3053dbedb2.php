<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_c46e0b8a4e5458e0367c0fb4900ab21881a3f1480f98bf8daa81018a70a2a2cf extends Twig_Template
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
        $__internal_a6b73d33d1e7f6a6bb61bc34299a0d6d79ba64a41c880555601761fbe07d047e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b73d33d1e7f6a6bb61bc34299a0d6d79ba64a41c880555601761fbe07d047e->enter($__internal_a6b73d33d1e7f6a6bb61bc34299a0d6d79ba64a41c880555601761fbe07d047e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_a6b73d33d1e7f6a6bb61bc34299a0d6d79ba64a41c880555601761fbe07d047e->leave($__internal_a6b73d33d1e7f6a6bb61bc34299a0d6d79ba64a41c880555601761fbe07d047e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
