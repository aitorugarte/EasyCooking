<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_a5cb19232bfb18869f916dbe8fcccbed45fc3df31f256b3729c0697989d5a0fa extends Twig_Template
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
        $__internal_dff8141a5956501bfad1281fbc08beca9278d2c20a61a2ac7b2b2d92ac7a6051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff8141a5956501bfad1281fbc08beca9278d2c20a61a2ac7b2b2d92ac7a6051->enter($__internal_dff8141a5956501bfad1281fbc08beca9278d2c20a61a2ac7b2b2d92ac7a6051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_dff8141a5956501bfad1281fbc08beca9278d2c20a61a2ac7b2b2d92ac7a6051->leave($__internal_dff8141a5956501bfad1281fbc08beca9278d2c20a61a2ac7b2b2d92ac7a6051_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
