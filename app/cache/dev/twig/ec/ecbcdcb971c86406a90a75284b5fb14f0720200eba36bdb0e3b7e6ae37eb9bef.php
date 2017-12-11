<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_5874258645544b1b28a47887f9a48d95f7d8c54dbc8290bae882d2203642a22b extends Twig_Template
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
        $__internal_5dead27393ba78adf1e0e2f6f31fea6d0cd79d0a9cac52bea29ea092c2d498ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dead27393ba78adf1e0e2f6f31fea6d0cd79d0a9cac52bea29ea092c2d498ca->enter($__internal_5dead27393ba78adf1e0e2f6f31fea6d0cd79d0a9cac52bea29ea092c2d498ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_5dead27393ba78adf1e0e2f6f31fea6d0cd79d0a9cac52bea29ea092c2d498ca->leave($__internal_5dead27393ba78adf1e0e2f6f31fea6d0cd79d0a9cac52bea29ea092c2d498ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
