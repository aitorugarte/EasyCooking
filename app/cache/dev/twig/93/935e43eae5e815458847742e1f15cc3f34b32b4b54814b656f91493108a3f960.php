<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_7ef58a478308abd94754703e0461aa81c1428067ea1586c0e1b2afc3170c3fba extends Twig_Template
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
        $__internal_9842b5e5ee46841722dd17b4b1435a8c62bbaafaab1f1a3b8b91b60e4498c693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9842b5e5ee46841722dd17b4b1435a8c62bbaafaab1f1a3b8b91b60e4498c693->enter($__internal_9842b5e5ee46841722dd17b4b1435a8c62bbaafaab1f1a3b8b91b60e4498c693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9842b5e5ee46841722dd17b4b1435a8c62bbaafaab1f1a3b8b91b60e4498c693->leave($__internal_9842b5e5ee46841722dd17b4b1435a8c62bbaafaab1f1a3b8b91b60e4498c693_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
