<?php

/* SuzaroBundle::korisnik_zau.html.twig */
class __TwigTemplate_4e8cc64ae6dd439116d2c9e1bf94f9b29d1c4858e23e4cded1f759ec2ddc3eb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SuzaroBundle::korisnik_zau.html.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_758160ff89f6ff4edaae5077be9ac239c40313a03dfa39588007a91f5300aeb5 = $this->env->getExtension("native_profiler");
        $__internal_758160ff89f6ff4edaae5077be9ac239c40313a03dfa39588007a91f5300aeb5->enter($__internal_758160ff89f6ff4edaae5077be9ac239c40313a03dfa39588007a91f5300aeb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuzaroBundle::korisnik_zau.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_758160ff89f6ff4edaae5077be9ac239c40313a03dfa39588007a91f5300aeb5->leave($__internal_758160ff89f6ff4edaae5077be9ac239c40313a03dfa39588007a91f5300aeb5_prof);

    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        $__internal_3a392a4f721f705e20ef458a831d19816a30682a5738c759be074321fa555285 = $this->env->getExtension("native_profiler");
        $__internal_3a392a4f721f705e20ef458a831d19816a30682a5738c759be074321fa555285->enter($__internal_3a392a4f721f705e20ef458a831d19816a30682a5738c759be074321fa555285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 4
        echo "  <style>
    th, td {
      text-align: center !important;
    }
  </style>
";
        
        $__internal_3a392a4f721f705e20ef458a831d19816a30682a5738c759be074321fa555285->leave($__internal_3a392a4f721f705e20ef458a831d19816a30682a5738c759be074321fa555285_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3197b5f9720f193958c4aaba16066d83dcda02bbf8fa4aa5b00d6412cab3c7d = $this->env->getExtension("native_profiler");
        $__internal_e3197b5f9720f193958c4aaba16066d83dcda02bbf8fa4aa5b00d6412cab3c7d->enter($__internal_e3197b5f9720f193958c4aaba16066d83dcda02bbf8fa4aa5b00d6412cab3c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<div class=\"form-group\">
  <label for=\"sel\">Odaberite korisnika: </label>
  <select class=\"form-control\" id=\"sel\">
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["korisnici"]) ? $context["korisnici"] : $this->getContext($context, "korisnici")));
        foreach ($context['_seq'] as $context["_key"] => $context["kor"]) {
            // line 15
            echo "      <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["kor"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["kor"], "korisnicko_ime", array()), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "  </select>
</div>
<button id=\"load\" class=\"btn btn-success\">Učitaj</button>
<br><br>
<div id=\"alert\" class=\"alert alert-info\" style=\"display: none\">Nema zapisa</div>
<div id=\"cont\" class=\"container-fluid\" style=\"display: none\">                 
  <table class=\"table table-striped\">
    <thead>
      <tr>
        <th>Inv broj</th>
        <th>Naziv</th>
        <th>Datum</th>
        <th>Vraćeno</th>
      </tr>
    </thead>
    <tbody id=\"tbody\">
    </tbody>
  </table>
</div>

";
        
        $__internal_e3197b5f9720f193958c4aaba16066d83dcda02bbf8fa4aa5b00d6412cab3c7d->leave($__internal_e3197b5f9720f193958c4aaba16066d83dcda02bbf8fa4aa5b00d6412cab3c7d_prof);

    }

    // line 39
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_02d47202b41983219ea043f24f268e4cb069dbd151031a668c7f4d57fb96c94b = $this->env->getExtension("native_profiler");
        $__internal_02d47202b41983219ea043f24f268e4cb069dbd151031a668c7f4d57fb96c94b->enter($__internal_02d47202b41983219ea043f24f268e4cb069dbd151031a668c7f4d57fb96c94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 40
        echo "  <script>
    \$(document).on('click', '#load', function() {
      var id = \$(\"#sel\").val();
      \$.ajax({
      url: \"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("korisnik_koristenje_ajax");
        echo "\",
      type: \"POST\",
      data: {id: id},
      success: function (r) {
        if (r.json === null) {
          \$(\"#cont\").hide();
          \$(\"#alert\").show();
        } else {
          \$(\"#alert\").hide();
          \$(\"#tbody\").html('');
          \$.each(r, function(index, element) {
            \$.each(element, function(i, obj) {
              \$(\"#tbody\").append('<tr>');
              \$(\"#tbody\").append('\\
                <td>\\
                ' + obj.oprema.inventar_broj + '\\
                </td>\\
              ');  
              \$(\"#tbody\").append('\\
                <td>\\
                ' + obj.oprema.naziv + '\\
                </td>\\
              ');
              \$(\"#tbody\").append('\\
                <td>\\
                ' + obj.vrijeme + '\\
                </td>\\
              ');
              if (obj.vraceno === '0') {
                \$(\"#tbody\").append('\\
                  <td>\\
                    <span class=\"glyphicon glyphicon-remove\"></span>\\
                  </td>\\
                ');
              } else {
                \$(\"#tbody\").append('\\
                  <td>\\
                    <span class=\"glyphicon glyphicon-ok\"></span>\\
                  </td>\\
                ');
              }
              \$(\"#tbody\").append('</tr>');
            });
          });
          \$(\"#cont\").show();
        }
      }
      });
    });
  </script>
";
        
        $__internal_02d47202b41983219ea043f24f268e4cb069dbd151031a668c7f4d57fb96c94b->leave($__internal_02d47202b41983219ea043f24f268e4cb069dbd151031a668c7f4d57fb96c94b_prof);

    }

    public function getTemplateName()
    {
        return "SuzaroBundle::korisnik_zau.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 44,  113 => 40,  107 => 39,  80 => 17,  69 => 15,  65 => 14,  60 => 11,  54 => 10,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block css %}*/
/*   <style>*/
/*     th, td {*/
/*       text-align: center !important;*/
/*     }*/
/*   </style>*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="form-group">*/
/*   <label for="sel">Odaberite korisnika: </label>*/
/*   <select class="form-control" id="sel">*/
/*     {% for kor in korisnici %}*/
/*       <option value="{{kor.id}}">{{kor.korisnicko_ime}}</option>*/
/*     {%  endfor %}*/
/*   </select>*/
/* </div>*/
/* <button id="load" class="btn btn-success">Učitaj</button>*/
/* <br><br>*/
/* <div id="alert" class="alert alert-info" style="display: none">Nema zapisa</div>*/
/* <div id="cont" class="container-fluid" style="display: none">                 */
/*   <table class="table table-striped">*/
/*     <thead>*/
/*       <tr>*/
/*         <th>Inv broj</th>*/
/*         <th>Naziv</th>*/
/*         <th>Datum</th>*/
/*         <th>Vraćeno</th>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody id="tbody">*/
/*     </tbody>*/
/*   </table>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
/*   <script>*/
/*     $(document).on('click', '#load', function() {*/
/*       var id = $("#sel").val();*/
/*       $.ajax({*/
/*       url: "{{path('korisnik_koristenje_ajax')}}",*/
/*       type: "POST",*/
/*       data: {id: id},*/
/*       success: function (r) {*/
/*         if (r.json === null) {*/
/*           $("#cont").hide();*/
/*           $("#alert").show();*/
/*         } else {*/
/*           $("#alert").hide();*/
/*           $("#tbody").html('');*/
/*           $.each(r, function(index, element) {*/
/*             $.each(element, function(i, obj) {*/
/*               $("#tbody").append('<tr>');*/
/*               $("#tbody").append('\*/
/*                 <td>\*/
/*                 ' + obj.oprema.inventar_broj + '\*/
/*                 </td>\*/
/*               ');  */
/*               $("#tbody").append('\*/
/*                 <td>\*/
/*                 ' + obj.oprema.naziv + '\*/
/*                 </td>\*/
/*               ');*/
/*               $("#tbody").append('\*/
/*                 <td>\*/
/*                 ' + obj.vrijeme + '\*/
/*                 </td>\*/
/*               ');*/
/*               if (obj.vraceno === '0') {*/
/*                 $("#tbody").append('\*/
/*                   <td>\*/
/*                     <span class="glyphicon glyphicon-remove"></span>\*/
/*                   </td>\*/
/*                 ');*/
/*               } else {*/
/*                 $("#tbody").append('\*/
/*                   <td>\*/
/*                     <span class="glyphicon glyphicon-ok"></span>\*/
/*                   </td>\*/
/*                 ');*/
/*               }*/
/*               $("#tbody").append('</tr>');*/
/*             });*/
/*           });*/
/*           $("#cont").show();*/
/*         }*/
/*       }*/
/*       });*/
/*     });*/
/*   </script>*/
/* {% endblock %}*/
