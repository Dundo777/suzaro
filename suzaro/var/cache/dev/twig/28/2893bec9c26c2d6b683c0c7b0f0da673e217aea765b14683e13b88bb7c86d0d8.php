<?php

/* SuzaroBundle::oprema.html.twig */
class __TwigTemplate_2531d61cadc9d9b64c89c13636a3ee52680ba83af2937b9724325517800267b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SuzaroBundle::oprema.html.twig", 1);
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
        $__internal_d74bbc10b4b2c140b80272b7bbaad738810478f03dbc9589812eb4423e6031ec = $this->env->getExtension("native_profiler");
        $__internal_d74bbc10b4b2c140b80272b7bbaad738810478f03dbc9589812eb4423e6031ec->enter($__internal_d74bbc10b4b2c140b80272b7bbaad738810478f03dbc9589812eb4423e6031ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuzaroBundle::oprema.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d74bbc10b4b2c140b80272b7bbaad738810478f03dbc9589812eb4423e6031ec->leave($__internal_d74bbc10b4b2c140b80272b7bbaad738810478f03dbc9589812eb4423e6031ec_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5950cd637799bad0ee40bf606cabb30d92809743187102964c8e718c0542e9da = $this->env->getExtension("native_profiler");
        $__internal_5950cd637799bad0ee40bf606cabb30d92809743187102964c8e718c0542e9da->enter($__internal_5950cd637799bad0ee40bf606cabb30d92809743187102964c8e718c0542e9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div id=\"success-div\" class=\"alert alert-success\" role=\"alert\" style=\"display: none\"></div>
<div id=\"error-div\" class=\"alert alert-danger\" role=\"alert\" style=\"display: none\"></div>

<h4>Oprema <span id=\"add-modal-button\" class=\"glyphicon glyphicon-plus\" style=\"cursor: pointer\"></span></h4>
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "naziv", array()), "html", null, true);
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
              <span><b>Inventarski broj: </b></span>
              <span class=\"broj\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "inventar_broj", array()), "html", null, true);
            echo "</span>
            </li>
            <li class=\"list-group-item\">
              <span><b>Naziv: </b></span>
              <span class=\"naziv\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["res"], "naziv", array()), "html", null, true);
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
        // line 37
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
          <span class=\"input-group-addon\" id=\"edit-broj-addon\">Inventarski broj</span>
          <input type=\"text\" class=\"form-control broj\" aria-describedby=\"edit-broj-addon\">
        </div>
        <br>
        <div class=\"input-group\">
          <span class=\"input-group-addon\" id=\"edit-naziv-addon\">Naziv</span>
          <input type=\"text\" class=\"form-control naziv\" aria-describedby=\"edit-naziv-addon\">
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
        <h4 class=\"modal-title\" id=\"delete-modal-label\">Brisanje opreme</h4>
      </div>
      <div class=\"modal-body\"></div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Odustani</button>
        <button type=\"button\" id=\"confirm-delete\" class=\"btn btn-primary\">Obriši opremu</button>
      </div>
    </div>
  </div>
</div>

<div class=\"modal fade\" id=\"add-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"add-modal-label\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"add-modal-label\">Dodaj novu opremu</h4>
      </div>
      <div class=\"modal-body\">
        <div class=\"input-group\">
          <span class=\"input-group-addon\" id=\"add-broj-addon\">Inventarski broj</span>
          <input type=\"text\" class=\"form-control broj\" aria-describedby=\"add-broj-addon\">
        </div>
        <br>
        <div class=\"input-group\">
          <span class=\"input-group-addon\" id=\"add-naziv-addon\">Naziv</span>
          <input type=\"text\" class=\"form-control naziv\" aria-describedby=\"add-naziv-addon\">
        </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Odustani</button>
        <button type=\"button\" id=\"add-modal-save\" class=\"btn btn-primary\">Dodaj opremu</button>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_5950cd637799bad0ee40bf606cabb30d92809743187102964c8e718c0542e9da->leave($__internal_5950cd637799bad0ee40bf606cabb30d92809743187102964c8e718c0542e9da_prof);

    }

    // line 110
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_d88870e7d0c35a12e44510b05a2c9a5d0a495d9abe40567c430788fae451549a = $this->env->getExtension("native_profiler");
        $__internal_d88870e7d0c35a12e44510b05a2c9a5d0a495d9abe40567c430788fae451549a->enter($__internal_d88870e7d0c35a12e44510b05a2c9a5d0a495d9abe40567c430788fae451549a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 111
        echo "<script>
  \$(document).on('click', '.edit-modal-button', function(){ 
    var id = \$(this).attr('id').substr(18);
    var broj = \$(this).closest('.panel-default').find('.broj').text();
    var naziv = \$(this).closest('.panel-default').find('.naziv').text();
    \$(\".edit-modal-id\").attr('id', id);
    \$(\"#edit-modal .broj\").val(broj);
    \$(\"#edit-modal .naziv\").val(naziv);
    \$(\"#edit-modal\").modal('show');
  });
  
  \$(document).on('click', '#edit-modal-save', function(){
    \$(\"#edit-modal\").prop('disabled', 'true');
    var id = \$(this).closest('.modal-content').find('.edit-modal-id').attr('id');
    var broj = \$(this).closest('.modal-content').find('.broj').val();
    var naziv = \$(this).closest('.modal-content').find('.naziv').val();
    
    var data = JSON.stringify({
      id: id,
      broj: broj,
      naziv: naziv
    });
    
    \$.ajax({
      url: \"";
        // line 135
        echo $this->env->getExtension('routing')->getPath("oprema_uredi");
        echo "\",
      type: \"POST\",
      data: data,
      success: function (msg) {
        \$(\"#heading-\" + id + \" a\").html(naziv);
        \$(\"#collapse-\" + id + \" .broj\").html(broj);
        \$(\"#collapse-\" + id + \" .naziv\").html(naziv);
        
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
    var naziv = \$(this).closest('.panel-default').find('.naziv').text();
    \$(\"#pom-delete-id\").val(id);
    \$(\"#delete-modal .modal-body\").html('Želite li sigurno obrisati opremu: <b>' + naziv + '</b>?');
    \$(\"#delete-modal\").modal('show');
  });
  
  \$(document).on('click', '#confirm-delete', function() {
    var id = \$(\"#pom-delete-id\").val();
    
    \$.ajax({
      url: \"";
        // line 164
        echo $this->env->getExtension('routing')->getPath("oprema_obrisi");
        echo "\",
      type: \"POST\",
      data: {'id': id},
      success: function (msg) {
        \$(\"#collapse-\" + id).closest('.panel-default').remove();
        
        \$(\"#success-div\").html('Uspješno obrisana oprema!');
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
    var broj = \$(this).closest('.modal-content').find('.broj').val();
    var naziv = \$(this).closest('.modal-content').find('.naziv').val();
    
    var data = JSON.stringify({
      broj: broj,
      naziv: naziv
    });

    \$.ajax({
      url: \"";
        // line 194
        echo $this->env->getExtension('routing')->getPath("oprema_nova");
        echo "\",
      type: \"POST\",
      data: data,
      success: function (id) {
        var novi = '<div class=\"panel panel-default\">\\
          <div class=\"panel-heading\" role=\"tab\" id=\"heading-' + id.id + '\">\\
            <h4 class=\"panel-title\">\\
              <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse-' + id.id + '\" aria-expanded=\"false\" aria-controls=\"collapse-' + id.id + '\">\\
                ' + naziv + ' \\
              </a>\\
                <span id=\"edit-modal-button-' + id.id + '\" class=\"glyphicon glyphicon-pencil edit-modal-button\" style=\"cursor: pointer\"></span> \\
                <span id=\"delete-modal-button-' + id.id + '\" class=\"glyphicon glyphicon-trash delete-modal-button\" style=\"cursor: pointer\"></span> \\
            </h4>\\
          </div>\\
          <div id=\"collapse-' + id.id + '\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading-' + id.id + '\">\\
            <div class=\"panel-body\">\\
              <ul class=\"list-group\">\\
                <li class=\"list-group-item\">\\
                  <span><b>Inventarski broj: </b></span>\\
                  <span class=\"broj\">' + broj + '</span>\\
                </li>\\
                <li class=\"list-group-item\">\\
                  <span><b>Naziv: </b></span>\\
                  <span class=\"naziv\">' + naziv + '</span>\\
                </li>\\
              </ul>\\
            </div>\\
          </div>\\
        </div>'
        
        \$(\".panel-group\").append(novi);
        
        \$(\"#success-div\").html('Uspješno dodana nova oprema!');
        \$(\"#add-modal\").prop('disabled', 'false');
        \$(\"#add-modal\").modal('hide');
        
        \$(\"#add-modal\").find('.broj').val('');
        \$(\"#add-modal\").find('.oprema').val('');
        
        \$(\"#error-div\").hide();
        \$(\"#success-div\").show();
      }
    });
  });
</script>
<p id=\"ispis\"></p>
";
        
        $__internal_d88870e7d0c35a12e44510b05a2c9a5d0a495d9abe40567c430788fae451549a->leave($__internal_d88870e7d0c35a12e44510b05a2c9a5d0a495d9abe40567c430788fae451549a_prof);

    }

    public function getTemplateName()
    {
        return "SuzaroBundle::oprema.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 194,  254 => 164,  222 => 135,  196 => 111,  190 => 110,  112 => 37,  99 => 30,  92 => 26,  82 => 21,  76 => 18,  72 => 17,  67 => 15,  61 => 14,  56 => 12,  53 => 11,  49 => 10,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <div id="success-div" class="alert alert-success" role="alert" style="display: none"></div>*/
/* <div id="error-div" class="alert alert-danger" role="alert" style="display: none"></div>*/
/* */
/* <h4>Oprema <span id="add-modal-button" class="glyphicon glyphicon-plus" style="cursor: pointer"></span></h4>*/
/* <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">*/
/*   {% for res in resp %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading" role="tab" id="heading-{{res.id}}">*/
/*         <h4 class="panel-title">*/
/*           <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-{{res.id}}" aria-expanded="false" aria-controls="collapse-{{res.id}}">*/
/*             {{res.naziv}} */
/*           </a>*/
/*             <span id="edit-modal-button-{{res.id}}" class="glyphicon glyphicon-pencil edit-modal-button" style="cursor: pointer"></span>*/
/*             <span id="delete-modal-button-{{res.id}}" class="glyphicon glyphicon-trash delete-modal-button" style="cursor: pointer"></span>*/
/*         </h4>*/
/*       </div>*/
/*       <div id="collapse-{{res.id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-{{res.id}}">*/
/*         <div class="panel-body">*/
/*           <ul class="list-group">*/
/*             <li class="list-group-item">*/
/*               <span><b>Inventarski broj: </b></span>*/
/*               <span class="broj">{{res.inventar_broj}}</span>*/
/*             </li>*/
/*             <li class="list-group-item">*/
/*               <span><b>Naziv: </b></span>*/
/*               <span class="naziv">{{res.naziv}}</span>*/
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
/*           <span class="input-group-addon" id="edit-broj-addon">Inventarski broj</span>*/
/*           <input type="text" class="form-control broj" aria-describedby="edit-broj-addon">*/
/*         </div>*/
/*         <br>*/
/*         <div class="input-group">*/
/*           <span class="input-group-addon" id="edit-naziv-addon">Naziv</span>*/
/*           <input type="text" class="form-control naziv" aria-describedby="edit-naziv-addon">*/
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
/*         <h4 class="modal-title" id="delete-modal-label">Brisanje opreme</h4>*/
/*       </div>*/
/*       <div class="modal-body"></div>*/
/*       <div class="modal-footer">*/
/*         <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>*/
/*         <button type="button" id="confirm-delete" class="btn btn-primary">Obriši opremu</button>*/
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
/*         <h4 class="modal-title" id="add-modal-label">Dodaj novu opremu</h4>*/
/*       </div>*/
/*       <div class="modal-body">*/
/*         <div class="input-group">*/
/*           <span class="input-group-addon" id="add-broj-addon">Inventarski broj</span>*/
/*           <input type="text" class="form-control broj" aria-describedby="add-broj-addon">*/
/*         </div>*/
/*         <br>*/
/*         <div class="input-group">*/
/*           <span class="input-group-addon" id="add-naziv-addon">Naziv</span>*/
/*           <input type="text" class="form-control naziv" aria-describedby="add-naziv-addon">*/
/*         </div>*/
/*       </div>*/
/*       <div class="modal-footer">*/
/*         <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>*/
/*         <button type="button" id="add-modal-save" class="btn btn-primary">Dodaj opremu</button>*/
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
/*     var broj = $(this).closest('.panel-default').find('.broj').text();*/
/*     var naziv = $(this).closest('.panel-default').find('.naziv').text();*/
/*     $(".edit-modal-id").attr('id', id);*/
/*     $("#edit-modal .broj").val(broj);*/
/*     $("#edit-modal .naziv").val(naziv);*/
/*     $("#edit-modal").modal('show');*/
/*   });*/
/*   */
/*   $(document).on('click', '#edit-modal-save', function(){*/
/*     $("#edit-modal").prop('disabled', 'true');*/
/*     var id = $(this).closest('.modal-content').find('.edit-modal-id').attr('id');*/
/*     var broj = $(this).closest('.modal-content').find('.broj').val();*/
/*     var naziv = $(this).closest('.modal-content').find('.naziv').val();*/
/*     */
/*     var data = JSON.stringify({*/
/*       id: id,*/
/*       broj: broj,*/
/*       naziv: naziv*/
/*     });*/
/*     */
/*     $.ajax({*/
/*       url: "{{path('oprema_uredi')}}",*/
/*       type: "POST",*/
/*       data: data,*/
/*       success: function (msg) {*/
/*         $("#heading-" + id + " a").html(naziv);*/
/*         $("#collapse-" + id + " .broj").html(broj);*/
/*         $("#collapse-" + id + " .naziv").html(naziv);*/
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
/*     var naziv = $(this).closest('.panel-default').find('.naziv').text();*/
/*     $("#pom-delete-id").val(id);*/
/*     $("#delete-modal .modal-body").html('Želite li sigurno obrisati opremu: <b>' + naziv + '</b>?');*/
/*     $("#delete-modal").modal('show');*/
/*   });*/
/*   */
/*   $(document).on('click', '#confirm-delete', function() {*/
/*     var id = $("#pom-delete-id").val();*/
/*     */
/*     $.ajax({*/
/*       url: "{{path('oprema_obrisi')}}",*/
/*       type: "POST",*/
/*       data: {'id': id},*/
/*       success: function (msg) {*/
/*         $("#collapse-" + id).closest('.panel-default').remove();*/
/*         */
/*         $("#success-div").html('Uspješno obrisana oprema!');*/
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
/*     var broj = $(this).closest('.modal-content').find('.broj').val();*/
/*     var naziv = $(this).closest('.modal-content').find('.naziv').val();*/
/*     */
/*     var data = JSON.stringify({*/
/*       broj: broj,*/
/*       naziv: naziv*/
/*     });*/
/* */
/*     $.ajax({*/
/*       url: "{{path('oprema_nova')}}",*/
/*       type: "POST",*/
/*       data: data,*/
/*       success: function (id) {*/
/*         var novi = '<div class="panel panel-default">\*/
/*           <div class="panel-heading" role="tab" id="heading-' + id.id + '">\*/
/*             <h4 class="panel-title">\*/
/*               <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-' + id.id + '" aria-expanded="false" aria-controls="collapse-' + id.id + '">\*/
/*                 ' + naziv + ' \*/
/*               </a>\*/
/*                 <span id="edit-modal-button-' + id.id + '" class="glyphicon glyphicon-pencil edit-modal-button" style="cursor: pointer"></span> \*/
/*                 <span id="delete-modal-button-' + id.id + '" class="glyphicon glyphicon-trash delete-modal-button" style="cursor: pointer"></span> \*/
/*             </h4>\*/
/*           </div>\*/
/*           <div id="collapse-' + id.id + '" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-' + id.id + '">\*/
/*             <div class="panel-body">\*/
/*               <ul class="list-group">\*/
/*                 <li class="list-group-item">\*/
/*                   <span><b>Inventarski broj: </b></span>\*/
/*                   <span class="broj">' + broj + '</span>\*/
/*                 </li>\*/
/*                 <li class="list-group-item">\*/
/*                   <span><b>Naziv: </b></span>\*/
/*                   <span class="naziv">' + naziv + '</span>\*/
/*                 </li>\*/
/*               </ul>\*/
/*             </div>\*/
/*           </div>\*/
/*         </div>'*/
/*         */
/*         $(".panel-group").append(novi);*/
/*         */
/*         $("#success-div").html('Uspješno dodana nova oprema!');*/
/*         $("#add-modal").prop('disabled', 'false');*/
/*         $("#add-modal").modal('hide');*/
/*         */
/*         $("#add-modal").find('.broj').val('');*/
/*         $("#add-modal").find('.oprema').val('');*/
/*         */
/*         $("#error-div").hide();*/
/*         $("#success-div").show();*/
/*       }*/
/*     });*/
/*   });*/
/* </script>*/
/* <p id="ispis"></p>*/
/* {% endblock %}*/
