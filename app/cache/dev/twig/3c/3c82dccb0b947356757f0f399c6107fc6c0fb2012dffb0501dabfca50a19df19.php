<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_c3aa079ac0f62f002fbb82c00d18898bfad31203a71c3642bf65d0347fdd0345 extends Twig_Template
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
        $__internal_2e2f2dad7cb3f733fb9c1601494b570e6871d8554bffdf56d7479fe67bb1db5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e2f2dad7cb3f733fb9c1601494b570e6871d8554bffdf56d7479fe67bb1db5b->enter($__internal_2e2f2dad7cb3f733fb9c1601494b570e6871d8554bffdf56d7479fe67bb1db5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_2e2f2dad7cb3f733fb9c1601494b570e6871d8554bffdf56d7479fe67bb1db5b->leave($__internal_2e2f2dad7cb3f733fb9c1601494b570e6871d8554bffdf56d7479fe67bb1db5b_prof);

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
