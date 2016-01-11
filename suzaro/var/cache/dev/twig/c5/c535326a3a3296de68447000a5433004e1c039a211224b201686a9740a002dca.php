<?php

/* ::base.html.twig */
class __TwigTemplate_3bad58e05955d84823525a5bd810ce5792fd31d24f27897bb74b48eb6f2b2f84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb620739196be3b2e288994da7f14513afba9bca7f25311ffd705e349eb20ea6 = $this->env->getExtension("native_profiler");
        $__internal_cb620739196be3b2e288994da7f14513afba9bca7f25311ffd705e349eb20ea6->enter($__internal_cb620739196be3b2e288994da7f14513afba9bca7f25311ffd705e349eb20ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('css', $context, $blocks);
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/suzaro/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <nav class=\"navbar navbar-inverse\">
          <div class=\"container-fluid\">
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
              <a class=\"navbar-brand\" href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">SUZARO</a>
            </div>

            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
              <ul class=\"nav navbar-nav\">
                <li class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Pregled zauzeća <span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("korisnik_koristenje");
        echo "\">Korisnik</a></li>
                    <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("oprema_koristenje");
        echo "\">Oprema</a></li>
                  </ul>
                </li>
                <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("korisnici");
        echo "\">Korisnici </a></li>
                <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("oprema");
        echo "\">Oprema </a></li>
                <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("rezervacija");
        echo "\">Nova rezervacija </a></li>
              </ul>
            </div>
          </div>
        </nav>
        <div class=\"container-fluid\">
          ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "        </div>
      
        <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/suzaro/js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/suzaro/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 45
        $this->displayBlock('javascript', $context, $blocks);
        // line 46
        echo "    </body>
</html>
";
        
        $__internal_cb620739196be3b2e288994da7f14513afba9bca7f25311ffd705e349eb20ea6->leave($__internal_cb620739196be3b2e288994da7f14513afba9bca7f25311ffd705e349eb20ea6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a7ae990c2a16d4fabd5fe3e490f9140e8cc5dc83d5ab60edca17dbe423b21ed = $this->env->getExtension("native_profiler");
        $__internal_9a7ae990c2a16d4fabd5fe3e490f9140e8cc5dc83d5ab60edca17dbe423b21ed->enter($__internal_9a7ae990c2a16d4fabd5fe3e490f9140e8cc5dc83d5ab60edca17dbe423b21ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9a7ae990c2a16d4fabd5fe3e490f9140e8cc5dc83d5ab60edca17dbe423b21ed->leave($__internal_9a7ae990c2a16d4fabd5fe3e490f9140e8cc5dc83d5ab60edca17dbe423b21ed_prof);

    }

    // line 6
    public function block_css($context, array $blocks = array())
    {
        $__internal_f649e80a0bcf818efb10f2057605fe41889b99c41af6c455ecb2c142d00b4a60 = $this->env->getExtension("native_profiler");
        $__internal_f649e80a0bcf818efb10f2057605fe41889b99c41af6c455ecb2c142d00b4a60->enter($__internal_f649e80a0bcf818efb10f2057605fe41889b99c41af6c455ecb2c142d00b4a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_f649e80a0bcf818efb10f2057605fe41889b99c41af6c455ecb2c142d00b4a60->leave($__internal_f649e80a0bcf818efb10f2057605fe41889b99c41af6c455ecb2c142d00b4a60_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff7c7d3bcd8a4ee5caff358bf58d5ea15967d3fe200a6cda4308f0ef2d3f7a9e = $this->env->getExtension("native_profiler");
        $__internal_ff7c7d3bcd8a4ee5caff358bf58d5ea15967d3fe200a6cda4308f0ef2d3f7a9e->enter($__internal_ff7c7d3bcd8a4ee5caff358bf58d5ea15967d3fe200a6cda4308f0ef2d3f7a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ff7c7d3bcd8a4ee5caff358bf58d5ea15967d3fe200a6cda4308f0ef2d3f7a9e->leave($__internal_ff7c7d3bcd8a4ee5caff358bf58d5ea15967d3fe200a6cda4308f0ef2d3f7a9e_prof);

    }

    // line 45
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_543f5190fb9ebab91bee5c633ce2098212d27717ca1f4fedef42f7798543fb98 = $this->env->getExtension("native_profiler");
        $__internal_543f5190fb9ebab91bee5c633ce2098212d27717ca1f4fedef42f7798543fb98->enter($__internal_543f5190fb9ebab91bee5c633ce2098212d27717ca1f4fedef42f7798543fb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_543f5190fb9ebab91bee5c633ce2098212d27717ca1f4fedef42f7798543fb98->leave($__internal_543f5190fb9ebab91bee5c633ce2098212d27717ca1f4fedef42f7798543fb98_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 45,  144 => 40,  133 => 6,  121 => 5,  112 => 46,  110 => 45,  106 => 44,  102 => 43,  98 => 41,  96 => 40,  87 => 34,  83 => 33,  79 => 32,  73 => 29,  69 => 28,  58 => 20,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block css %}{% endblock %}*/
/*         <link rel="stylesheet" href="{{ asset('bundles/suzaro/css/bootstrap.min.css')}}"/>*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <nav class="navbar navbar-inverse">*/
/*           <div class="container-fluid">*/
/*             <div class="navbar-header">*/
/*               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*               </button>*/
/*               <a class="navbar-brand" href="{{ path('index') }}">SUZARO</a>*/
/*             </div>*/
/* */
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*               <ul class="nav navbar-nav">*/
/*                 <li class="dropdown">*/
/*                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pregled zauzeća <span class="caret"></span></a>*/
/*                   <ul class="dropdown-menu">*/
/*                     <li><a href="{{ path('korisnik_koristenje') }}">Korisnik</a></li>*/
/*                     <li><a href="{{ path('oprema_koristenje') }}">Oprema</a></li>*/
/*                   </ul>*/
/*                 </li>*/
/*                 <li><a href="{{ path('korisnici') }}">Korisnici </a></li>*/
/*                 <li><a href="{{ path('oprema') }}">Oprema </a></li>*/
/*                 <li><a href="{{ path('rezervacija') }}">Nova rezervacija </a></li>*/
/*               </ul>*/
/*             </div>*/
/*           </div>*/
/*         </nav>*/
/*         <div class="container-fluid">*/
/*           {% block body %}{% endblock %}*/
/*         </div>*/
/*       */
/*         <script src="{{ asset('bundles/suzaro/js/jquery-2.1.4.min.js')}}"></script>*/
/*         <script src="{{ asset('bundles/suzaro/js/bootstrap.min.js')}}"></script>*/
/*         {% block javascript %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
