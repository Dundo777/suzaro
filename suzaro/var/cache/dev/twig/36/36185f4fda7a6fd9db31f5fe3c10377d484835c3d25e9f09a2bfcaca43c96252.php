<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_48cbaa7ef04311aca651ab912e0f7e0c5741ae411a6be8827b898d2b5edabe19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4302a0caf3e036452400b5c98239d8850b1c6f69173f1fd1405101493c9b5f8 = $this->env->getExtension("native_profiler");
        $__internal_a4302a0caf3e036452400b5c98239d8850b1c6f69173f1fd1405101493c9b5f8->enter($__internal_a4302a0caf3e036452400b5c98239d8850b1c6f69173f1fd1405101493c9b5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4302a0caf3e036452400b5c98239d8850b1c6f69173f1fd1405101493c9b5f8->leave($__internal_a4302a0caf3e036452400b5c98239d8850b1c6f69173f1fd1405101493c9b5f8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b2a10a04301e4e2367a26a299d7f3097b6f5b4e8e20ec9bcf7c9344d42230f53 = $this->env->getExtension("native_profiler");
        $__internal_b2a10a04301e4e2367a26a299d7f3097b6f5b4e8e20ec9bcf7c9344d42230f53->enter($__internal_b2a10a04301e4e2367a26a299d7f3097b6f5b4e8e20ec9bcf7c9344d42230f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b2a10a04301e4e2367a26a299d7f3097b6f5b4e8e20ec9bcf7c9344d42230f53->leave($__internal_b2a10a04301e4e2367a26a299d7f3097b6f5b4e8e20ec9bcf7c9344d42230f53_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_60c079bf11f76846cc9f68c66e3a205cc67361513b3e99013abb0e3c23297dbe = $this->env->getExtension("native_profiler");
        $__internal_60c079bf11f76846cc9f68c66e3a205cc67361513b3e99013abb0e3c23297dbe->enter($__internal_60c079bf11f76846cc9f68c66e3a205cc67361513b3e99013abb0e3c23297dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_60c079bf11f76846cc9f68c66e3a205cc67361513b3e99013abb0e3c23297dbe->leave($__internal_60c079bf11f76846cc9f68c66e3a205cc67361513b3e99013abb0e3c23297dbe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bf9a93720b73fa97c06994abc948fe709965b73473857bd66fd7e7e33c2bafb3 = $this->env->getExtension("native_profiler");
        $__internal_bf9a93720b73fa97c06994abc948fe709965b73473857bd66fd7e7e33c2bafb3->enter($__internal_bf9a93720b73fa97c06994abc948fe709965b73473857bd66fd7e7e33c2bafb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bf9a93720b73fa97c06994abc948fe709965b73473857bd66fd7e7e33c2bafb3->leave($__internal_bf9a93720b73fa97c06994abc948fe709965b73473857bd66fd7e7e33c2bafb3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
