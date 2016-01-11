<?php

/* SuzaroBundle::index.html.twig */
class __TwigTemplate_d441398481e89ff3817d89533256cd642c3df79b5bd8f1b22822a40cfc554c82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SuzaroBundle::index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_492d0be4655a0cc5c03a0414dc9c6a45fbc9600aba56cd8a7f8b4f193c90e73b = $this->env->getExtension("native_profiler");
        $__internal_492d0be4655a0cc5c03a0414dc9c6a45fbc9600aba56cd8a7f8b4f193c90e73b->enter($__internal_492d0be4655a0cc5c03a0414dc9c6a45fbc9600aba56cd8a7f8b4f193c90e73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuzaroBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_492d0be4655a0cc5c03a0414dc9c6a45fbc9600aba56cd8a7f8b4f193c90e73b->leave($__internal_492d0be4655a0cc5c03a0414dc9c6a45fbc9600aba56cd8a7f8b4f193c90e73b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_86614606f13d05fbcf72aa8949d56d80c149739fd61b0893641c431f1de97e25 = $this->env->getExtension("native_profiler");
        $__internal_86614606f13d05fbcf72aa8949d56d80c149739fd61b0893641c431f1de97e25->enter($__internal_86614606f13d05fbcf72aa8949d56d80c149739fd61b0893641c431f1de97e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<b>RASSUS laboratorij profila</b> - Sustav za rezervaciju opreme<br>
Martin Đaković<br>
Leon Fadljević<br>
Rafael Slekovac<br>
Ivan Dundović
";
        
        $__internal_86614606f13d05fbcf72aa8949d56d80c149739fd61b0893641c431f1de97e25->leave($__internal_86614606f13d05fbcf72aa8949d56d80c149739fd61b0893641c431f1de97e25_prof);

    }

    public function getTemplateName()
    {
        return "SuzaroBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <b>RASSUS laboratorij profila</b> - Sustav za rezervaciju opreme<br>*/
/* Martin Đaković<br>*/
/* Leon Fadljević<br>*/
/* Rafael Slekovac<br>*/
/* Ivan Dundović*/
/* {% endblock %}*/
