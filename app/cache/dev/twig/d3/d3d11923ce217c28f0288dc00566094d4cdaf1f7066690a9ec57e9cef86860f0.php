<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_87ad7ccb09ae96c6b81c0d3b49ba3df9a5f5219fe6a69b7132d4040de3b56f54 extends Twig_Template
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
        $__internal_f48ce7fa310881fb02cee9100a47374b01e27137acec249ba4bfd87e578f06bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f48ce7fa310881fb02cee9100a47374b01e27137acec249ba4bfd87e578f06bd->enter($__internal_f48ce7fa310881fb02cee9100a47374b01e27137acec249ba4bfd87e578f06bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_f48ce7fa310881fb02cee9100a47374b01e27137acec249ba4bfd87e578f06bd->leave($__internal_f48ce7fa310881fb02cee9100a47374b01e27137acec249ba4bfd87e578f06bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
