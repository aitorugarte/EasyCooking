<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_566afe1593c5a8794f9cf98c044f0758d37fa89229094f9149722b5853fe78a3 extends Twig_Template
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
        $__internal_a2196d6d6a6a614546cbd6c2646bb111fe781e1fe6e2c287d686a5b24a2e491e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2196d6d6a6a614546cbd6c2646bb111fe781e1fe6e2c287d686a5b24a2e491e->enter($__internal_a2196d6d6a6a614546cbd6c2646bb111fe781e1fe6e2c287d686a5b24a2e491e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a2196d6d6a6a614546cbd6c2646bb111fe781e1fe6e2c287d686a5b24a2e491e->leave($__internal_a2196d6d6a6a614546cbd6c2646bb111fe781e1fe6e2c287d686a5b24a2e491e_prof);

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