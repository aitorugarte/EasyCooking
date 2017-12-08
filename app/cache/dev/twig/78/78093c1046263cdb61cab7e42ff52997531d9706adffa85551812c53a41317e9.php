<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_bb4ce0647bb5359d919a6184de903e934946f08d91f3cffa9d7eb23413d62739 extends Twig_Template
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
        $__internal_be81f03e2ebc0cb3c6c7d42c658598862fc7f6e21badc21dc8e11d0491dbbf0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be81f03e2ebc0cb3c6c7d42c658598862fc7f6e21badc21dc8e11d0491dbbf0d->enter($__internal_be81f03e2ebc0cb3c6c7d42c658598862fc7f6e21badc21dc8e11d0491dbbf0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_be81f03e2ebc0cb3c6c7d42c658598862fc7f6e21badc21dc8e11d0491dbbf0d->leave($__internal_be81f03e2ebc0cb3c6c7d42c658598862fc7f6e21badc21dc8e11d0491dbbf0d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
