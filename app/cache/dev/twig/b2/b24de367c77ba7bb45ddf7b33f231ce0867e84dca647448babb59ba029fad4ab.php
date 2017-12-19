<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_59e8a9d7e7140c31cb1e3beaf05f81e3032fbc3206a7b992f0fdad3d1f44fb37 extends Twig_Template
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
        $__internal_1c46a3d78a8ac9f8746f496304b031e55b382eb4cb498d0c5dda19679300f2e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c46a3d78a8ac9f8746f496304b031e55b382eb4cb498d0c5dda19679300f2e9->enter($__internal_1c46a3d78a8ac9f8746f496304b031e55b382eb4cb498d0c5dda19679300f2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1c46a3d78a8ac9f8746f496304b031e55b382eb4cb498d0c5dda19679300f2e9->leave($__internal_1c46a3d78a8ac9f8746f496304b031e55b382eb4cb498d0c5dda19679300f2e9_prof);

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
