<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styles.css" media="screen">
<script src="jquery-1.11.0.min.js"></script>
<script>
  var params=["nome", "tamanho_da_fonte","nome_x","nome_y","vao_do_cabo_y","altura_do_vao_do_cabo"];
  $( document ).ready(function() {
//    $("input[type='text']").change(function() {
    $("#openscad_params_form").submit(function() {
      $("#preview").attr("src", "preview.php?"+$("#openscad_params_form").serialize());
      return false;
    });
    $("#download_stl").click(function(){
      window.location="stl.php?"+$("#openscad_params_form").serialize();
    });
  });
</script>
</head>
<body>
  <div id="form_wrapper">
    <form id="openscad_params_form" action="">
      <div style="margin:0;padding:0;display:inline">
        <fieldset>
            <div id="param-tabs">
                <div id="configuracoes-tab" class="preview-tab" style="">
                    <div class="control-group">
                      <label class="control-label">
                        <strong>Nome</strong>
                        <span class="help">escrito no cracha <span id="nome_value"></span></span>
                      </label>
                      <div class="controls">
                            <input id="openscad_params_nome" name="openscad_params[nome]" type="text" value="oda" />
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">
                        <strong>Tamanho da fonte</strong>
                        <span class="help">em milímetros <span id="tamanho_da_fonte_value"></span></span>
                      </label>
                      <div class="controls">
                            <input id="openscad_params_tamanho_da_fonte" name="openscad_params[tamanho_da_fonte]" type="text" value="10" />
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">
                        <strong>Nome X</strong>
                        <span class="help">direita e esquerda <span id="nome_x_value"></span></span>
                      </label>
                      <div class="controls">
                            <input id="openscad_params_nome_x" name="openscad_params[nome_x]" type="text" value="17" />
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">
                        <strong>Nome Y</strong>
                        <span class="help">sobe e desce <span id="nome_y_value"></span></span>
                      </label>
                      <div class="controls">
                            <input id="openscad_params_nome_y" name="openscad_params[nome_y]" type="text" value="18" />
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">
                        <strong>Altura do vão do cabo</strong>
                        <span class="help">altura vão no cabo do guarda-chuva <span id="altura_do_vao_do_cabo_value"></span></span>
                      </label>
                      <div class="controls">
                            <input id="openscad_params_altura_do_vao_do_cabo" name="openscad_params[altura_do_vao_do_cabo]" type="text" value="12" />
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">
                        <strong>Vão do cabo Y</strong>
                        <span class="help">posição do vão <span id="vao_do_cabo_y_value"></span></span>
                      </label>
                      <div class="controls">
                            <input id="openscad_params_vao_do_cabo_y" name="openscad_params[vao_do_cabo_y]" type="text" value="17" />
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">
                        <strong>Renderizar</strong>
                        <span class="help">para mostrar um preview melhor</span>
                      </label>
                      <div class="controls">
                            <input id="render" name="render" type="checkbox" />
                      </div>
                    </div>
                    <div class="control-group">
                      <div class="controls">
                            <input id="update_preview" type="submit" value="Preview" />
                            <input id="download_stl" type="button" value="Download STL" />
                      </div>
                    </div>
                </div>
            </div>
        </fieldset>
      </div>
    </form>
  </div>
  <div id="preview_wrapper">
    <img id="preview" src="preview.png">
  </div>
</body>
</html>
