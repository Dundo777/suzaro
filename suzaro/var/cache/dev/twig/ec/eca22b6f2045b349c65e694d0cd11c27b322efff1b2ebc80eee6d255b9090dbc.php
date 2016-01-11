<?php

/* SuzaroBundle::rezervacija.html.twig */
class __TwigTemplate_b7fbbebb529c5551723e8d22303cc10cee258c1ddab2f4d06239111522f211e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SuzaroBundle::rezervacija.html.twig", 1);
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
        $__internal_d41dcf49d4ffe25f7f4e585a5b656a11585670c9ef924c07b1b84c1d7d8c1040 = $this->env->getExtension("native_profiler");
        $__internal_d41dcf49d4ffe25f7f4e585a5b656a11585670c9ef924c07b1b84c1d7d8c1040->enter($__internal_d41dcf49d4ffe25f7f4e585a5b656a11585670c9ef924c07b1b84c1d7d8c1040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuzaroBundle::rezervacija.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d41dcf49d4ffe25f7f4e585a5b656a11585670c9ef924c07b1b84c1d7d8c1040->leave($__internal_d41dcf49d4ffe25f7f4e585a5b656a11585670c9ef924c07b1b84c1d7d8c1040_prof);

    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        $__internal_f22497e4caf4fec72f6cc595b6489e6d51ab91e165182055751e1969c6e8e423 = $this->env->getExtension("native_profiler");
        $__internal_f22497e4caf4fec72f6cc595b6489e6d51ab91e165182055751e1969c6e8e423->enter($__internal_f22497e4caf4fec72f6cc595b6489e6d51ab91e165182055751e1969c6e8e423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 4
        echo "  <style>
    th, td {
      text-align: center !important;
    }
  </style>
";
        
        $__internal_f22497e4caf4fec72f6cc595b6489e6d51ab91e165182055751e1969c6e8e423->leave($__internal_f22497e4caf4fec72f6cc595b6489e6d51ab91e165182055751e1969c6e8e423_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_606f9ea32f6482205d1a368c24459416ca92d5dec3e55905f631ed40ee411e8c = $this->env->getExtension("native_profiler");
        $__internal_606f9ea32f6482205d1a368c24459416ca92d5dec3e55905f631ed40ee411e8c->enter($__internal_606f9ea32f6482205d1a368c24459416ca92d5dec3e55905f631ed40ee411e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<div class=\"form-group\">
  <label for=\"korisnik\">Odaberite korisnika: </label>
  <select class=\"form-control\" id=\"korisnik\">
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
  <label for=\"korisnik\">Odaberite opremu: </label>
  <select class=\"form-control\" id=\"oprema\">
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["oprema"]) ? $context["oprema"] : $this->getContext($context, "oprema")));
        foreach ($context['_seq'] as $context["_key"] => $context["op"]) {
            // line 21
            echo "      <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["op"], "inventar_broj", array()), "html", null, true);
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
        // line 23
        echo "  </select>
  <label for=\"datum-od\">Odaberite datum početka: </label>
  <input type=\"date\" class=\"form-control\" id=\"datum-od\">
  <label for=\"datum-do\">Odaberite datum završetka: </label>
  <input type=\"date\" class=\"form-control\" id=\"datum-do\">
</div>
<button id=\"rezerviraj\" class=\"btn btn-success\">Rezerviraj</button>

";
        
        $__internal_606f9ea32f6482205d1a368c24459416ca92d5dec3e55905f631ed40ee411e8c->leave($__internal_606f9ea32f6482205d1a368c24459416ca92d5dec3e55905f631ed40ee411e8c_prof);

    }

    // line 33
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_e2db6e6deeb4d8b295c021b8d099005398e12e4d061c2230afb3f88e9e6bed06 = $this->env->getExtension("native_profiler");
        $__internal_e2db6e6deeb4d8b295c021b8d099005398e12e4d061c2230afb3f88e9e6bed06->enter($__internal_e2db6e6deeb4d8b295c021b8d099005398e12e4d061c2230afb3f88e9e6bed06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 34
        echo "  <script>
    \$(document).on('click', '#rezerviraj', function() {
      var korisnik = \$(\"#korisnik\").val();
      var oprema = \$(\"#oprema\").val();
      var datumOd = \$(\"#datum-od\").val();
      var datumDo = \$(\"#datum-do\").val();
      
      \$.ajax({
      url: \"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("rezervacija");
        echo "\",
      type: \"POST\",
      data: {
            korisnik: korisnik,
            oprema: oprema,
            datumOd: datumOd,
            datumDo: datumDo
            },
      success: function (resp) {
        alert(resp);
      }
      });
    });
  </script>
";
        
        $__internal_e2db6e6deeb4d8b295c021b8d099005398e12e4d061c2230afb3f88e9e6bed06->leave($__internal_e2db6e6deeb4d8b295c021b8d099005398e12e4d061c2230afb3f88e9e6bed06_prof);

    }

    public function getTemplateName()
    {
        return "SuzaroBundle::rezervacija.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 42,  123 => 34,  117 => 33,  102 => 23,  89 => 21,  85 => 20,  80 => 17,  69 => 15,  65 => 14,  60 => 11,  54 => 10,  42 => 4,  36 => 3,  11 => 1,);
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
/*   <label for="korisnik">Odaberite korisnika: </label>*/
/*   <select class="form-control" id="korisnik">*/
/*     {% for kor in korisnici %}*/
/*       <option value="{{kor.id}}">{{kor.korisnicko_ime}}</option>*/
/*     {%  endfor %}*/
/*   </select>*/
/*   <label for="korisnik">Odaberite opremu: </label>*/
/*   <select class="form-control" id="oprema">*/
/*     {% for op in oprema %}*/
/*       <option value="{{op.inventar_broj}}">{{op.naziv}} - {{op.inventar_broj}}</option>*/
/*     {%  endfor %}*/
/*   </select>*/
/*   <label for="datum-od">Odaberite datum početka: </label>*/
/*   <input type="date" class="form-control" id="datum-od">*/
/*   <label for="datum-do">Odaberite datum završetka: </label>*/
/*   <input type="date" class="form-control" id="datum-do">*/
/* </div>*/
/* <button id="rezerviraj" class="btn btn-success">Rezerviraj</button>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
/*   <script>*/
/*     $(document).on('click', '#rezerviraj', function() {*/
/*       var korisnik = $("#korisnik").val();*/
/*       var oprema = $("#oprema").val();*/
/*       var datumOd = $("#datum-od").val();*/
/*       var datumDo = $("#datum-do").val();*/
/*       */
/*       $.ajax({*/
/*       url: "{{path('rezervacija')}}",*/
/*       type: "POST",*/
/*       data: {*/
/*             korisnik: korisnik,*/
/*             oprema: oprema,*/
/*             datumOd: datumOd,*/
/*             datumDo: datumDo*/
/*             },*/
/*       success: function (resp) {*/
/*         alert(resp);*/
/*       }*/
/*       });*/
/*     });*/
/*   </script>*/
/* {% endblock %}*/
