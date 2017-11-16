<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_9764227d5ded63f3725b8acb81b0cce965bc5b46f69eb3c91ecfef635fc0d66f extends Twig_Template
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
        $__internal_cec0372fb9841ca6a1456f281ff774f37622c5c2a8f5d50da51c2871a7232250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cec0372fb9841ca6a1456f281ff774f37622c5c2a8f5d50da51c2871a7232250->enter($__internal_cec0372fb9841ca6a1456f281ff774f37622c5c2a8f5d50da51c2871a7232250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_cec0372fb9841ca6a1456f281ff774f37622c5c2a8f5d50da51c2871a7232250->leave($__internal_cec0372fb9841ca6a1456f281ff774f37622c5c2a8f5d50da51c2871a7232250_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
