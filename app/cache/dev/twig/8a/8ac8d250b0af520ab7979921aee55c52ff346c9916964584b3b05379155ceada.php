<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_a763de0b7377d440e640bfb74afe0c78ad771208dd9864c24c7700b38073a9a9 extends Twig_Template
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
        $__internal_4b0bf0c072e918ede3102c8afdf5b5aa09a20a79d3af56385abd8f99d7c7a59e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b0bf0c072e918ede3102c8afdf5b5aa09a20a79d3af56385abd8f99d7c7a59e->enter($__internal_4b0bf0c072e918ede3102c8afdf5b5aa09a20a79d3af56385abd8f99d7c7a59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_4b0bf0c072e918ede3102c8afdf5b5aa09a20a79d3af56385abd8f99d7c7a59e->leave($__internal_4b0bf0c072e918ede3102c8afdf5b5aa09a20a79d3af56385abd8f99d7c7a59e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
