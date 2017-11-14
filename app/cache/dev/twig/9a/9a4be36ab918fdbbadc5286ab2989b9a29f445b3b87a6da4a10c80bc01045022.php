<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b63be36b5aa491306582639f9e4399b013cf8bea8fe94de3e5332e5dbc9abd0b extends Twig_Template
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
        $__internal_714c7b79d7f37bbcfbbc73c64e526ab266905954e8a463ffdb146b88ed37ea86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_714c7b79d7f37bbcfbbc73c64e526ab266905954e8a463ffdb146b88ed37ea86->enter($__internal_714c7b79d7f37bbcfbbc73c64e526ab266905954e8a463ffdb146b88ed37ea86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_714c7b79d7f37bbcfbbc73c64e526ab266905954e8a463ffdb146b88ed37ea86->leave($__internal_714c7b79d7f37bbcfbbc73c64e526ab266905954e8a463ffdb146b88ed37ea86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
