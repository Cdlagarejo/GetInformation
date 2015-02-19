				<div id="content" class="span10">


					<ul class="breadcrumb">
						<li>
							<i class="icon-home"></i>
							<a href="index.html">Inicio</a> 
							<i class="icon-angle-right"></i>
						</li>
						<li><a href="<?php echo URL; ?>postulaciones/">Postulaciones</a><i class="icon-angle-right"></i></li>
						<li><a href="" > Lista de Chequeo </a></li>
					</ul>

					<div class="row-fluid sortable">		
						<div class="box-content">
							<h3>Lista de chequeo: Savia y Beneficio</h3>
							<br>
							<br>
							<form class="form-horizontal">
								<fieldset>
									<div class="control-group">
										<label class="control-label">Copia del Documento de identidad</label>
										<div class="controls">
											<label class="checkbox inline">
												<input type="checkbox" id="inlineCheckbox1" value="option1" onclick="validate1()">  Si
											</label>
											<label class="checkbox inline">
												<input type="checkbox" id="inlineCheckbox2" onclick="validate2()" value="option2">  No
											</label>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Copia de los servicios publicos.</label>
										<div class="controls">
											<label class="checkbox inline">
												<input type="checkbox" id="inlineCheckbox3" value="option1" onclick="validate3()">  Si
											</label>
											<label class="checkbox inline">
												<input type="checkbox" id="inlineCheckbox4" onclick="validate4()" value="option2">  No
											</label>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Certificado de estudio</label>
										<div class="controls">
											<label class="checkbox inline">
												<input type="checkbox" id="inlineCheckbox5" value="option1" onclick="validate5()">  Si
											</label>
											<label class="checkbox inline">
												<input type="checkbox" id="inlineCheckbox6" onclick="validate6()" value="option2">  No
											</label>
										</div>
									</div>

									<div class="control-group">

									</div>	
									<a href="#" class="" data-dimiss="modal"><button class="btn btn-primary noty" data-noty-options='{"text":"Registro Exitoso","layout":"topLeft","type":"success"}'> Aceptar</button></a>
									<a href="#" class="btn" data-dismiss="modal">Limpiar</a>
								</fieldset>
							</form>
						</div>

					</div><!--/.fluid-container-->


					<script type=text/javascript>
						function validate1(){
							if (document.getElementById('inlineCheckbox1').checked){
								
								document.getElementById('inlineCheckbox2').checked = false;
								document.getElementById("inlineCheckbox2").disabled=true;


							}else{

								document.getElementById("inlineCheckbox2").disabled=false;
							}
						}
						function validate2 () {
							if (document.getElementById('inlineCheckbox2').checked) {
								document.getElementById('inlineCheckbox1').checked = false;
								document.getElementById("inlineCheckbox1").disabled=true;
							}
							else{
								document.getElementById('inlineCheckbox1').disabled = false;
							}
						}
						function validate3 () {
							if (document.getElementById('inlineCheckbox4').checked) {
								document.getElementById('inlineCheckbox3').checked = false;
								document.getElementById("inlineCheckbox3").disabled=true;
							}
							else{
								document.getElementById('inlineCheckbox3').disabled = false;
							}
						}
						function validate4 () {
							if (document.getElementById('inlineCheckbox3').checked) {
								document.getElementById('inlineCheckbox4').checked = false;
								document.getElementById("inlineCheckbox4").disabled=true;
							}
							else{
								document.getElementById('inlineCheckbox4').disabled = false;
							}
						}
						function validate5 () {
							if (document.getElementById('inlineCheckbox5').checked) {
								document.getElementById('inlineCheckbox6').checked = false;
								document.getElementById("inlineCheckbox6").disabled=true;
							}
							else{
								document.getElementById('inlineCheckbox6').disabled = false;
							}
						}
						function validate6 () {
							if (document.getElementById('inlineCheckbox6').checked) {
								document.getElementById('inlineCheckbox5').checked = false;
								document.getElementById("inlineCheckbox5").disabled=true;
							}
							else{
								document.getElementById('inlineCheckbox5').disabled = false;
							}
						}
					</script>
