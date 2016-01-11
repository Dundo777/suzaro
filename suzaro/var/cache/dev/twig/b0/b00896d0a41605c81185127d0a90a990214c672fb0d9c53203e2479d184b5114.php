<?php

/* SuzaroBundle::users.html.twig */
class __TwigTemplate_25958ccc58b7ed9b4885f393b91fd3e6054c6989484e5a74d97e24e606666e59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SuzaroBundle::users.html.twig", 1);
        $this->blocks = array(
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
        $__internal_142301344014ae5831a95839b35ed609e44dc927c3c90c32ff86b3a2e4104ee1 = $this->env->getExtension("native_profiler");
        $__internal_142301344014ae5831a95839b35ed609e44dc927c3c90c32ff86b3a2e4104ee1->enter($__internal_142301344014ae5831a95839b35ed609e44dc927c3c90c32ff86b3a2e4104ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuzaroBundle::users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_142301344014ae5831a95839b35ed609e44dc927c3c90c32ff86b3a2e4104ee1->leave($__internal_142301344014ae5831a95839b35ed609e44dc927c3c90c32ff86b3a2e4104ee1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_23598b52c280a592c0e5ddbf62bae3bd57d80ba49f473dd7ffac39b832b31c48 = $this->env->getExtension("native_profiler");
        $__internal_23598b52c280a592c0e5ddbf62bae3bd57d80ba49f473dd7ffac39b832b31c48->enter($__internal_23598b52c280a592c0e5ddbf62bae3bd57d80ba49f473dd7ffac39b832b31c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div id=\"success-div\" class=\"alert alert-success\" role=\"alert\" style=\"display: none\"></div>
<div id=\"error-div\" class=\"alert alert-danger\" role=\"alert\" style=\"display: none\"></div>

<h4>Korisnici <span id=\"add-modal-button\" class=\"glyphicon glyphicon-plus\" style=\"cursor: pointer\"></span></h4>
<div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resp"]) ? $context["resp"] : $this->getContext($context, "resp")));
        foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
            // line 11
            echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\" role=\"tab\" id=\"heading-";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "id", array()), "html", null, true);
            echo "\">
        <h4 class=\"panel-title\">
          <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse-";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "id", array()), "html", null, true);
            echo "\" aria-expanded=\"false\" aria-controls=\"collapse-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "id", array()), "html", null, true);
            echo "\">
            ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "korisnicko_ime", array()), "html", null, true);
            echo " 
          </a>
            <span id=\"edit-modal-button-";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "id", array()), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-pencil edit-modal-button\" style=\"cursor: pointer\"></span>
            <span id=\"delete-modal-button-";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "id", array()), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-trash delete-modal-button\" style=\"cursor: pointer\"></span>
        </h4>
      </div>
      <div id=\"collapse-";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "id", array()), "html", null, true);
            echo "\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "id", array()), "html", null, true);
            echo "\">
        <div class=\"panel-body\">
          <ul class=\"list-group\">
            <li class=\"list-group-item\">
              <span><b>Korisničko ime: </b></span>
              <span class=\"korisnik\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "korisnicko_ime", array()), "html", null, true);
            echo "</span>
            </li>
            <li class=\"list-group-item\">
              <span><b>Lozinka: </b></span>
              <span class=\"lozinka\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "lozinka", array()), "html", null, true);
            echo "</span>
            </li>
            <li class=\"list-group-item\">
              <span><b>Ime: </b></span>
              <span class=\"ime\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "ime", array()), "html", null, true);
            echo "</span>
            </li>
            <li class=\"list-group-item\">
              <span><b>Prezime: </b></span>
              <span class=\"prezime\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "prezime", array()), "html", null, true);
            echo "</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "</div>

<div class=\"modal fade\" id=\"edit-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit-modal-label\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"edit-modal-label\">Uredi podatke</h4>
      </div>
      <input type=\"hidden\" class=\"edit-modal-id\">
      <div class=\"modal-body\">
        <div class=\"input-group\">
          <span class=\"input-group-addon\" id=\"edit-korisnik-addon\">Korisničko ime</span>
          <input type=\"text\" class=\"form-control korisnik\" aria-describedby=\"edit-korisnik-addon\">
        </div>
        <br>
        <div class=\"input-group\">
          <span class=\"input-group-addon\" id=\"edit-lozinka-addon\">Lozinka</span>
          <input type=\"text\" class=\"form-control lozinka\" aria-describedby=\"edit-lozinka-addon\">
        </div>
        <br>
        <div class=\"input-group\">
          <span class=\"input-group-addon\" id=\"edit-ime-addon\">Ime</span>
          <input type=\"text\" class=\"form-control ime\" aria-describedby=\"edit-ime-addon\">
        </div>
        <br>
        <div class=\"input-group\">
          <span class=\"input-group-addon\" id=\"edit-prezime-addon\">Prezime</span>
          <input type=\"text\" class=\"form-control prezime\" aria-describedby=\"edit-prezime-addon\">
        </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Odustani</button>
        <button type=\"button\" id=\"edit-modal-save\" class=\"btn btn-primary\">Spremi promjene</button>
      </div>
    </div>
  </div>
</div>

<div class=\"modal fade\" id=\"delete-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delete-modal-label\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <input type=\"hidden\" id=\"pom-delete-id\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"delete-modal-label\">Brisanje korisnika</h4>
      </div>
      <div class=\"modal-body\"></div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Odustani</button>
        <button type=\"button\" id=\"confirm-delete\" class=\"btn btn-primary\">Obriši korisnika</button>
      </div>
    </div>
  </div>
</div>

<div class=\"modal fade\" id=\"add-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"add-modal-label\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"add-modal-label\">Dodaj novog korisnika</h4>
      </div>
      <div class=\"modal-body\">
        <div class=\"input-group\">
          <span class=\"input-group-addon\" id=\"add-korisnik-addon\">Korisničko ime</span>
          <input type=\"text\" class=\"form-control korisnik\" aria-describedby=\"add-korisnik-addon\">
        </div>
        <br>
        <div class=\"input-group\">
          <span class=\"input-group-addon\" id=\"add-lozinka-addon\">Lozinka</span>
          <input type=\"text\" class=\"form-control lozinka\" aria-describedby=\"add-lozinka-addon\">
        </div>
        <br>
        <div class=\"input-group\">
          <span class=\"input-group-addon\" id=\"add-ime-addon\">Ime</span>
          <input type=\"text\" class=\"form-control ime\" aria-describedby=\"add-ime-addon\">
        </div>
        <br>
        <div class=\"input-group\">
          <span class=\"input-group-addon\" id=\"add-prezime-addon\">Prezime</span>
          <input type=\"text\" class=\"form-control prezime\" aria-describedby=\"add-prezime-addon\">
        </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Odustani</button>
        <button type=\"button\" id=\"add-modal-save\" class=\"btn btn-primary\">Dodaj korisnika</button>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_23598b52c280a592c0e5ddbf62bae3bd57d80ba49f473dd7ffac39b832b31c48->leave($__internal_23598b52c280a592c0e5ddbf62bae3bd57d80ba49f473dd7ffac39b832b31c48_prof);

    }

    // line 138
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_c581b03363928d734e6b9f155926830d6babb65412cd72241ea7bee0a1474c7a = $this->env->getExtension("native_profiler");
        $__internal_c581b03363928d734e6b9f155926830d6babb65412cd72241ea7bee0a1474c7a->enter($__internal_c581b03363928d734e6b9f155926830d6babb65412cd72241ea7bee0a1474c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 139
        echo "<script>
  \$(document).on('click', '.edit-modal-button', function(){ 
    var id = \$(this).attr('id').substr(18);
    var korisnik = \$(this).closest('.panel-default').find('.korisnik').text();
    var lozinka = \$(this).closest('.panel-default').find('.lozinka').text();
    var ime = \$(this).closest('.panel-default').find('.ime').text();
    var prezime = \$(this).closest('.panel-default').find('.prezime').text();
    \$(\".edit-modal-id\").attr('id', id);
    \$(\"#edit-modal .korisnik\").val(korisnik);
    \$(\"#edit-modal .lozinka\").val(lozinka);
    \$(\"#edit-modal .ime\").val(ime);
    \$(\"#edit-modal .prezime\").val(prezime);
    \$(\"#edit-modal\").modal('show');
  });
  
  \$(document).on('click', '#edit-modal-save', function(){
    \$(\"#edit-modal\").prop('disabled', 'true');
    var id = \$(this).closest('.modal-content').find('.edit-modal-id').attr('id');
    var korisnik = \$(this).closest('.modal-content').find('.korisnik').val();
    var lozinka = \$(this).closest('.modal-content').find('.lozinka').val();
    var ime = \$(this).closest('.modal-content').find('.ime').val();
    var prezime = \$(this).closest('.modal-content').find('.prezime').val();
    
    var data = JSON.stringify({
      id: id,
      korisnik: korisnik,
      lozinka: lozinka,
      ime: ime,
      prezime: prezime
    });
    
    \$.ajax({
      url: \"";
        // line 171
        echo $this->env->getExtension('routing')->getPath("korisnici_uredi");
        echo "\",
      type: \"POST\",
      data:data,
      success:function (msg) {
        \$(\"#heading-\" + id + \" a\").html(korisnik);
        \$(\"#collapse-\" + id + \" .korisnik\").html(korisnik);
        \$(\"#collapse-\" + id + \" .lozinka\").html(lozinka);
        \$(\"#collapse-\" + id + \" .ime\").html(ime);
        \$(\"#collapse-\" + id + \" .prezime\").html(prezime);
        
        \$(\"#success-div\").html('Uspješno spremljene promjene!');
        \$(\"#edit-modal\").prop('disabled', 'false');
        \$(\"#edit-modal\").modal('hide');
        \$(\"#error-div\").hide();
        \$(\"#success-div\").show();
      }
    });
  });
  
  \$(document).on('click', '.delete-modal-button', function(){ 
    var id = \$(this).attr('id').substr(20);
    var korisnik = \$(this).closest('.panel-default').find('.korisnik').text();
    \$(\"#pom-delete-id\").val(id);
    \$(\"#delete-modal .modal-body\").html('Želite li sigurno obrisati korisnika: <b>' + korisnik + '</b>?');
    \$(\"#delete-modal\").modal('show');
  });
  
  \$(document).on('click', '#confirm-delete', function() {
    var id = \$(\"#pom-delete-id\").val();
    
    \$.ajax({
      url: \"";
        // line 202
        echo $this->env->getExtension('routing')->getPath("korisnici_obrisi");
        echo "\",
      type: \"POST\",
      data: {'id': id},
      success:function (msg) {
        \$(\"#collapse-\" + id).closest('.panel-default').remove();
        
        
        \$(\"#success-div\").html('Uspješno obrisan korisnik!');
        \$(\"#delete-modal\").prop('disabled', 'false');
        \$(\"#delete-modal\").modal('hide');
        \$(\"#error-div\").hide();
        \$(\"#success-div\").show();
      }
    });
  });
  
  \$(document).on('click', '#add-modal-button', function(){ 
    \$(\"#add-modal\").modal('show');
  });
  
  \$(document).on('click', '#add-modal-save', function(){ 
    \$(\"#add-modal\").prop('disabled', 'true');
    var korisnik = \$(this).closest('.modal-content').find('.korisnik').val();
    var lozinka = \$(this).closest('.modal-content').find('.lozinka').val();
    var ime = \$(this).closest('.modal-content').find('.ime').val();
    var prezime = \$(this).closest('.modal-content').find('.prezime').val();
    
    var data = JSON.stringify({
      korisnik: korisnik,
      lozinka: lozinka,
      ime: ime,
      prezime: prezime
    });

    \$.ajax({
      url: \"";
        // line 237
        echo $this->env->getExtension('routing')->getPath("korisnici_novi");
        echo "\",
      type: \"POST\",
      data:data,
      success:function (id) {
        var novi = '<div class=\"panel panel-default\">\\
          <div class=\"panel-heading\" role=\"tab\" id=\"heading-' + id.id + '\">\\
            <h4 class=\"panel-title\">\\
              <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse-' + id.id + '\" aria-expanded=\"false\" aria-controls=\"collapse-' + id.id + '\">\\
                ' + korisnik + ' \\
              </a>\\
                <span id=\"edit-modal-button-' + id.id + '\" class=\"glyphicon glyphicon-pencil edit-modal-button\" style=\"cursor: pointer\"></span> \\
                <span id=\"delete-modal-button-' + id.id + '\" class=\"glyphicon glyphicon-trash delete-modal-button\" style=\"cursor: pointer\"></span> \\
            </h4>\\
          </div>\\
          <div id=\"collapse-' + id.id + '\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading-' + id.id + '\">\\
            <div class=\"panel-body\">\\
              <ul class=\"list-group\">\\
                <li class=\"list-group-item\">\\
                  <span><b>Korisničko ime: </b></span>\\
                  <span class=\"korisnik\">' + korisnik + '</span>\\
                </li>\\
                <li class=\"list-group-item\">\\
                  <span><b>Lozinka: </b></span>\\
                  <span class=\"lozinka\">' + lozinka + '</span>\\
                </li>\\
                <li class=\"list-group-item\">\\
                  <span><b>Ime: </b></span>\\
                  <span class=\"ime\">' + ime + '</span>\\
                </li>\\
                <li class=\"list-group-item\">\\
                  <span><b>Prezime: </b></span>\\
                  <span class=\"prezime\">' + prezime + '</span>\\
                </li>\\
              </ul>\\
            </div>\\
          </div>\\
        </div>'
        
        \$(\".panel-group\").append(novi);
        
        \$(\"#success-div\").html('Uspješno dodan novi korisnik!');
        \$(\"#add-modal\").prop('disabled', 'false');
        \$(\"#add-modal\").modal('hide');
        
        \$(\"#add-modal\").find('.korisnik').val('');
        \$(\"#add-modal\").find('.lozinka').val('');
        \$(\"#add-modal\").find('.ime').val('');
        \$(\"#add-modal\").find('.prezime').val('');
        
        \$(\"#error-div\").hide();
        \$(\"#success-div\").show();
      }
    });
  });
</script>
<p id=\"ispis\"></p>
";
        
        $__internal_c581b03363928d734e6b9f155926830d6babb65412cd72241ea7bee0a1474c7a->leave($__internal_c581b03363928d734e6b9f155926830d6babb65412cd72241ea7bee0a1474c7a_prof);

    }

    public function getTemplateName()
    {
        return "SuzaroBundle::users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 237,  298 => 202,  264 => 171,  230 => 139,  224 => 138,  126 => 45,  113 => 38,  106 => 34,  99 => 30,  92 => 26,  82 => 21,  76 => 18,  72 => 17,  67 => 15,  61 => 14,  56 => 12,  53 => 11,  49 => 10,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <div id="success-div" class="alert alert-success" role="alert" style="display: none"></div>*/
/* <div id="error-div" class="alert alert-danger" role="alert" style="display: none"></div>*/
/* */
/* <h4>Korisnici <span id="add-modal-button" class="glyphicon glyphicon-plus" style="cursor: pointer"></span></h4>*/
/* <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">*/
/*   {% for res in resp %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading" role="tab" id="heading-{{res.id}}">*/
/*         <h4 class="panel-title">*/
/*           <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-{{res.id}}" aria-expanded="false" aria-controls="collapse-{{res.id}}">*/
/*             {{res.korisnicko_ime}} */
/*           </a>*/
/*             <span id="edit-modal-button-{{res.id}}" class="glyphicon glyphicon-pencil edit-modal-button" style="cursor: pointer"></span>*/
/*             <span id="delete-modal-button-{{res.id}}" class="glyphicon glyphicon-trash delete-modal-button" style="cursor: pointer"></span>*/
/*         </h4>*/
/*       </div>*/
/*       <div id="collapse-{{res.id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-{{res.id}}">*/
/*         <div class="panel-body">*/
/*           <ul class="list-group">*/
/*             <li class="list-group-item">*/
/*               <span><b>Korisničko ime: </b></span>*/
/*               <span class="korisnik">{{res.korisnicko_ime}}</span>*/
/*             </li>*/
/*             <li class="list-group-item">*/
/*               <span><b>Lozinka: </b></span>*/
/*               <span class="lozinka">{{res.lozinka}}</span>*/
/*             </li>*/
/*             <li class="list-group-item">*/
/*               <span><b>Ime: </b></span>*/
/*               <span class="ime">{{res.ime}}</span>*/
/*             </li>*/
/*             <li class="list-group-item">*/
/*               <span><b>Prezime: </b></span>*/
/*               <span class="prezime">{{res.prezime}}</span>*/
/*             </li>*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endfor %}*/
/* </div>*/
/* */
/* <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label">*/
/*   <div class="modal-dialog" role="document">*/
/*     <div class="modal-content">*/
/*       <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*         <h4 class="modal-title" id="edit-modal-label">Uredi podatke</h4>*/
/*       </div>*/
/*       <input type="hidden" class="edit-modal-id">*/
/*       <div class="modal-body">*/
/*         <div class="input-group">*/
/*           <span class="input-group-addon" id="edit-korisnik-addon">Korisničko ime</span>*/
/*           <input type="text" class="form-control korisnik" aria-describedby="edit-korisnik-addon">*/
/*         </div>*/
/*         <br>*/
/*         <div class="input-group">*/
/*           <span class="input-group-addon" id="edit-lozinka-addon">Lozinka</span>*/
/*           <input type="text" class="form-control lozinka" aria-describedby="edit-lozinka-addon">*/
/*         </div>*/
/*         <br>*/
/*         <div class="input-group">*/
/*           <span class="input-group-addon" id="edit-ime-addon">Ime</span>*/
/*           <input type="text" class="form-control ime" aria-describedby="edit-ime-addon">*/
/*         </div>*/
/*         <br>*/
/*         <div class="input-group">*/
/*           <span class="input-group-addon" id="edit-prezime-addon">Prezime</span>*/
/*           <input type="text" class="form-control prezime" aria-describedby="edit-prezime-addon">*/
/*         </div>*/
/*       </div>*/
/*       <div class="modal-footer">*/
/*         <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>*/
/*         <button type="button" id="edit-modal-save" class="btn btn-primary">Spremi promjene</button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="delete-modal-label">*/
/*   <div class="modal-dialog" role="document">*/
/*     <div class="modal-content">*/
/*       <input type="hidden" id="pom-delete-id">*/
/*       <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*         <h4 class="modal-title" id="delete-modal-label">Brisanje korisnika</h4>*/
/*       </div>*/
/*       <div class="modal-body"></div>*/
/*       <div class="modal-footer">*/
/*         <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>*/
/*         <button type="button" id="confirm-delete" class="btn btn-primary">Obriši korisnika</button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="add-modal-label">*/
/*   <div class="modal-dialog" role="document">*/
/*     <div class="modal-content">*/
/*       <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*         <h4 class="modal-title" id="add-modal-label">Dodaj novog korisnika</h4>*/
/*       </div>*/
/*       <div class="modal-body">*/
/*         <div class="input-group">*/
/*           <span class="input-group-addon" id="add-korisnik-addon">Korisničko ime</span>*/
/*           <input type="text" class="form-control korisnik" aria-describedby="add-korisnik-addon">*/
/*         </div>*/
/*         <br>*/
/*         <div class="input-group">*/
/*           <span class="input-group-addon" id="add-lozinka-addon">Lozinka</span>*/
/*           <input type="text" class="form-control lozinka" aria-describedby="add-lozinka-addon">*/
/*         </div>*/
/*         <br>*/
/*         <div class="input-group">*/
/*           <span class="input-group-addon" id="add-ime-addon">Ime</span>*/
/*           <input type="text" class="form-control ime" aria-describedby="add-ime-addon">*/
/*         </div>*/
/*         <br>*/
/*         <div class="input-group">*/
/*           <span class="input-group-addon" id="add-prezime-addon">Prezime</span>*/
/*           <input type="text" class="form-control prezime" aria-describedby="add-prezime-addon">*/
/*         </div>*/
/*       </div>*/
/*       <div class="modal-footer">*/
/*         <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>*/
/*         <button type="button" id="add-modal-save" class="btn btn-primary">Dodaj korisnika</button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
/* <script>*/
/*   $(document).on('click', '.edit-modal-button', function(){ */
/*     var id = $(this).attr('id').substr(18);*/
/*     var korisnik = $(this).closest('.panel-default').find('.korisnik').text();*/
/*     var lozinka = $(this).closest('.panel-default').find('.lozinka').text();*/
/*     var ime = $(this).closest('.panel-default').find('.ime').text();*/
/*     var prezime = $(this).closest('.panel-default').find('.prezime').text();*/
/*     $(".edit-modal-id").attr('id', id);*/
/*     $("#edit-modal .korisnik").val(korisnik);*/
/*     $("#edit-modal .lozinka").val(lozinka);*/
/*     $("#edit-modal .ime").val(ime);*/
/*     $("#edit-modal .prezime").val(prezime);*/
/*     $("#edit-modal").modal('show');*/
/*   });*/
/*   */
/*   $(document).on('click', '#edit-modal-save', function(){*/
/*     $("#edit-modal").prop('disabled', 'true');*/
/*     var id = $(this).closest('.modal-content').find('.edit-modal-id').attr('id');*/
/*     var korisnik = $(this).closest('.modal-content').find('.korisnik').val();*/
/*     var lozinka = $(this).closest('.modal-content').find('.lozinka').val();*/
/*     var ime = $(this).closest('.modal-content').find('.ime').val();*/
/*     var prezime = $(this).closest('.modal-content').find('.prezime').val();*/
/*     */
/*     var data = JSON.stringify({*/
/*       id: id,*/
/*       korisnik: korisnik,*/
/*       lozinka: lozinka,*/
/*       ime: ime,*/
/*       prezime: prezime*/
/*     });*/
/*     */
/*     $.ajax({*/
/*       url: "{{path('korisnici_uredi')}}",*/
/*       type: "POST",*/
/*       data:data,*/
/*       success:function (msg) {*/
/*         $("#heading-" + id + " a").html(korisnik);*/
/*         $("#collapse-" + id + " .korisnik").html(korisnik);*/
/*         $("#collapse-" + id + " .lozinka").html(lozinka);*/
/*         $("#collapse-" + id + " .ime").html(ime);*/
/*         $("#collapse-" + id + " .prezime").html(prezime);*/
/*         */
/*         $("#success-div").html('Uspješno spremljene promjene!');*/
/*         $("#edit-modal").prop('disabled', 'false');*/
/*         $("#edit-modal").modal('hide');*/
/*         $("#error-div").hide();*/
/*         $("#success-div").show();*/
/*       }*/
/*     });*/
/*   });*/
/*   */
/*   $(document).on('click', '.delete-modal-button', function(){ */
/*     var id = $(this).attr('id').substr(20);*/
/*     var korisnik = $(this).closest('.panel-default').find('.korisnik').text();*/
/*     $("#pom-delete-id").val(id);*/
/*     $("#delete-modal .modal-body").html('Želite li sigurno obrisati korisnika: <b>' + korisnik + '</b>?');*/
/*     $("#delete-modal").modal('show');*/
/*   });*/
/*   */
/*   $(document).on('click', '#confirm-delete', function() {*/
/*     var id = $("#pom-delete-id").val();*/
/*     */
/*     $.ajax({*/
/*       url: "{{path('korisnici_obrisi')}}",*/
/*       type: "POST",*/
/*       data: {'id': id},*/
/*       success:function (msg) {*/
/*         $("#collapse-" + id).closest('.panel-default').remove();*/
/*         */
/*         */
/*         $("#success-div").html('Uspješno obrisan korisnik!');*/
/*         $("#delete-modal").prop('disabled', 'false');*/
/*         $("#delete-modal").modal('hide');*/
/*         $("#error-div").hide();*/
/*         $("#success-div").show();*/
/*       }*/
/*     });*/
/*   });*/
/*   */
/*   $(document).on('click', '#add-modal-button', function(){ */
/*     $("#add-modal").modal('show');*/
/*   });*/
/*   */
/*   $(document).on('click', '#add-modal-save', function(){ */
/*     $("#add-modal").prop('disabled', 'true');*/
/*     var korisnik = $(this).closest('.modal-content').find('.korisnik').val();*/
/*     var lozinka = $(this).closest('.modal-content').find('.lozinka').val();*/
/*     var ime = $(this).closest('.modal-content').find('.ime').val();*/
/*     var prezime = $(this).closest('.modal-content').find('.prezime').val();*/
/*     */
/*     var data = JSON.stringify({*/
/*       korisnik: korisnik,*/
/*       lozinka: lozinka,*/
/*       ime: ime,*/
/*       prezime: prezime*/
/*     });*/
/* */
/*     $.ajax({*/
/*       url: "{{path('korisnici_novi')}}",*/
/*       type: "POST",*/
/*       data:data,*/
/*       success:function (id) {*/
/*         var novi = '<div class="panel panel-default">\*/
/*           <div class="panel-heading" role="tab" id="heading-' + id.id + '">\*/
/*             <h4 class="panel-title">\*/
/*               <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-' + id.id + '" aria-expanded="false" aria-controls="collapse-' + id.id + '">\*/
/*                 ' + korisnik + ' \*/
/*               </a>\*/
/*                 <span id="edit-modal-button-' + id.id + '" class="glyphicon glyphicon-pencil edit-modal-button" style="cursor: pointer"></span> \*/
/*                 <span id="delete-modal-button-' + id.id + '" class="glyphicon glyphicon-trash delete-modal-button" style="cursor: pointer"></span> \*/
/*             </h4>\*/
/*           </div>\*/
/*           <div id="collapse-' + id.id + '" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-' + id.id + '">\*/
/*             <div class="panel-body">\*/
/*               <ul class="list-group">\*/
/*                 <li class="list-group-item">\*/
/*                   <span><b>Korisničko ime: </b></span>\*/
/*                   <span class="korisnik">' + korisnik + '</span>\*/
/*                 </li>\*/
/*                 <li class="list-group-item">\*/
/*                   <span><b>Lozinka: </b></span>\*/
/*                   <span class="lozinka">' + lozinka + '</span>\*/
/*                 </li>\*/
/*                 <li class="list-group-item">\*/
/*                   <span><b>Ime: </b></span>\*/
/*                   <span class="ime">' + ime + '</span>\*/
/*                 </li>\*/
/*                 <li class="list-group-item">\*/
/*                   <span><b>Prezime: </b></span>\*/
/*                   <span class="prezime">' + prezime + '</span>\*/
/*                 </li>\*/
/*               </ul>\*/
/*             </div>\*/
/*           </div>\*/
/*         </div>'*/
/*         */
/*         $(".panel-group").append(novi);*/
/*         */
/*         $("#success-div").html('Uspješno dodan novi korisnik!');*/
/*         $("#add-modal").prop('disabled', 'false');*/
/*         $("#add-modal").modal('hide');*/
/*         */
/*         $("#add-modal").find('.korisnik').val('');*/
/*         $("#add-modal").find('.lozinka').val('');*/
/*         $("#add-modal").find('.ime').val('');*/
/*         $("#add-modal").find('.prezime').val('');*/
/*         */
/*         $("#error-div").hide();*/
/*         $("#success-div").show();*/
/*       }*/
/*     });*/
/*   });*/
/* </script>*/
/* <p id="ispis"></p>*/
/* {% endblock %}*/
