<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_79477d4a4b47b4d802f4521efedf06e84d8065840e0c71d7e38b2b56f236d3e4 extends Twig_Template
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
        $__internal_6627089c4935e6ffc496c0f1eee73958c859f1dad001b406bb1cc88c1bcaa745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6627089c4935e6ffc496c0f1eee73958c859f1dad001b406bb1cc88c1bcaa745->enter($__internal_6627089c4935e6ffc496c0f1eee73958c859f1dad001b406bb1cc88c1bcaa745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_6627089c4935e6ffc496c0f1eee73958c859f1dad001b406bb1cc88c1bcaa745->leave($__internal_6627089c4935e6ffc496c0f1eee73958c859f1dad001b406bb1cc88c1bcaa745_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
