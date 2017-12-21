<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_4b9cab1f5724fc96fa09c0e94c12e946aebe8a776c3ab58370b4b8f4f757d6b6 extends Twig_Template
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
        $__internal_7bf44ae414c1ad1f7b0a9ce321f6b7b2dba9fb4291f87cd69734a660b8370ebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf44ae414c1ad1f7b0a9ce321f6b7b2dba9fb4291f87cd69734a660b8370ebb->enter($__internal_7bf44ae414c1ad1f7b0a9ce321f6b7b2dba9fb4291f87cd69734a660b8370ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_7bf44ae414c1ad1f7b0a9ce321f6b7b2dba9fb4291f87cd69734a660b8370ebb->leave($__internal_7bf44ae414c1ad1f7b0a9ce321f6b7b2dba9fb4291f87cd69734a660b8370ebb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
