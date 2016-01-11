<?php

/* SuzaroBundle::oprema_zau.html.twig */
class __TwigTemplate_ba959e132b5c38f7d5e6060b4f48fa6d5b81a6f05f86ca85734d1e56d9226a20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SuzaroBundle::oprema_zau.html.twig", 1);
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
        $__internal_1ee93cd73c1564d023fc2bda4be1dd031f8fd833f1cea62b98b4048ee59c840e = $this->env->getExtension("native_profiler");
        $__internal_1ee93cd73c1564d023fc2bda4be1dd031f8fd833f1cea62b98b4048ee59c840e->enter($__internal_1ee93cd73c1564d023fc2bda4be1dd031f8fd833f1cea62b98b4048ee59c840e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuzaroBundle::oprema_zau.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ee93cd73c1564d023fc2bda4be1dd031f8fd833f1cea62b98b4048ee59c840e->leave($__internal_1ee93cd73c1564d023fc2bda4be1dd031f8fd833f1cea62b98b4048ee59c840e_prof);

    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        $__internal_063a096cf448508322d06af064c08e9125dbce603e60059bde1b90f179d8fd83 = $this->env->getExtension("native_profiler");
        $__internal_063a096cf448508322d06af064c08e9125dbce603e60059bde1b90f179d8fd83->enter($__internal_063a096cf448508322d06af064c08e9125dbce603e60059bde1b90f179d8fd83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 4
        echo "  <style>
    th, td {
      text-align: center !important;
    }
  </style>
";
        
        $__internal_063a096cf448508322d06af064c08e9125dbce603e60059bde1b90f179d8fd83->leave($__internal_063a096cf448508322d06af064c08e9125dbce603e60059bde1b90f179d8fd83_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8c50f65a47cdceb49c785f62ae82d7c0045e1a47ac660a453ae3b95de9fde07 = $this->env->getExtension("native_profiler");
        $__internal_c8c50f65a47cdceb49c785f62ae82d7c0045e1a47ac660a453ae3b95de9fde07->enter($__internal_c8c50f65a47cdceb49c785f62ae82d7c0045e1a47ac660a453ae3b95de9fde07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<div class=\"form-group\">
  <label for=\"sel\">Odaberite opremu: </label>
  <select class=\"form-control\" id=\"sel\">
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["oprema"]) ? $context["oprema"] : $this->getContext($context, "oprema")));
        foreach ($context['_seq'] as $context["_key"] => $context["op"]) {
            // line 15
            echo "      <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["op"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["op"], "naziv", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["op"], "inventar_broj", array()), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['op'], $context['_parent'], $context['loop']);
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
        <th>Korisnik</th>
        <th>Datum</th>
        <th>Vraćeno</th>
      </tr>
    </thead>
    <tbody id=\"tbody\">
    </tbody>
  </table>
</div>

";
        
        $__internal_c8c50f65a47cdceb49c785f62ae82d7c0045e1a47ac660a453ae3b95de9fde07->leave($__internal_c8c50f65a47cdceb49c785f62ae82d7c0045e1a47ac660a453ae3b95de9fde07_prof);

    }

    // line 38
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_fc1485a83664e92436cb55619faf47523d93b6ade876220c71bf985b74bc37db = $this->env->getExtension("native_profiler");
        $__internal_fc1485a83664e92436cb55619faf47523d93b6ade876220c71bf985b74bc37db->enter($__internal_fc1485a83664e92436cb55619faf47523d93b6ade876220c71bf985b74bc37db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 39
        echo "  <script>
    \$(document).on('click', '#load', function() {
      var id = \$(\"#sel\").val();
      \$.ajax({
      url: \"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("oprema_koristenje_ajax");
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
                ' + obj.korisnik.korisnicko_ime + '\\
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
        
        $__internal_fc1485a83664e92436cb55619faf47523d93b6ade876220c71bf985b74bc37db->leave($__internal_fc1485a83664e92436cb55619faf47523d93b6ade876220c71bf985b74bc37db_prof);

    }

    public function getTemplateName()
    {
        return "SuzaroBundle::oprema_zau.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 43,  114 => 39,  108 => 38,  82 => 17,  69 => 15,  65 => 14,  60 => 11,  54 => 10,  42 => 4,  36 => 3,  11 => 1,);
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
/*   <label for="sel">Odaberite opremu: </label>*/
/*   <select class="form-control" id="sel">*/
/*     {% for op in oprema %}*/
/*       <option value="{{op.id}}">{{op.naziv}} - {{op.inventar_broj}}</option>*/
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
/*         <th>Korisnik</th>*/
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
/*       url: "{{path('oprema_koristenje_ajax')}}",*/
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
/*                 ' + obj.korisnik.korisnicko_ime + '\*/
/*                 </td>\*/
/*               ');  */
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
