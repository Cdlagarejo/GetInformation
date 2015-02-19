				<div id="content" class="span10">


					<ul class="breadcrumb">
						<li>
							<i class="icon-home"></i>
							<a href="index.html">Inicio</a> 
							<i class="icon-angle-right"></i>
						</li>
						<li><a href="<?php echo URL; ?>postulaciones/">Postulaciones</a><i class="icon-angle-right"></i></li>
						<li><a href="" > Editar Postulacion </a></li>
					</ul>
					<div class="row-fluid sortable">		
						<div class="box-content">
							<h3>Editar Postulación</h3>
							<form class="form-horizontal">
								<fieldset>
									<div class="control-group">
										<label class="control-label" for="focusedInput">Numero del Documento</label>
										<div class="controls">
											<input class="input-xlarge focused" id="focusedInput" type="text" value="">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="selectError3">Tipo de Documento</label>
										<div class="controls">
											<select id="selectError3">
												<option></option>
												<option>T.I</option>
												<option>C.C</option>
												<option>C.E</option>

											</select>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="focusedInput"> Nombre del Postulante</label>
										<div class="controls">
											<input class="input-xlarge focused" id="focusedInput" type="text" value="">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="focusedInput">Apellido del postulante</label>
										<div class="controls">
											<input class="input-xlarge focused" id="focusedInput" type="text" value="">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="focusedInput">Correo del postulante</label>
										<div class="controls">
											<input class="input-xlarge focused" id="focusedInput" type="email" value="">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="selectError3">Sexo</label>
										<div class="controls">
											<select id="selectError3">
												<option></option>
												<option>Masculino</option>
												<option>Femenino</option>

											</select>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="focusedInput">Ficha</label>
										<div class="controls">
											<input class="input-xlarge focused" id="focusedInput" type="text" value="">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="focusedInput">Fecha Nacimiento</label>
										<div class="controls">
											<input class="input-xlarge focused" id="focusedInput" type="date" value="">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Estado de la postulación</label>
										<div class="controls">
											<label class="checkbox inline">
												<input type="checkbox" id="inlineCheckbox1" value="option1" onclick="validate1()">  Habilitar
											</label>
											<label class="checkbox inline">
												<input type="checkbox" id="inlineCheckbox2" onclick="validate2()" value="option2">  Inhabilitar
											</label>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="selectError1">Asociar Beneficio</label>
										<div class="controls">
											<select id="selectError1" multiple data-rel="chosen">
												
											</select> 
										</div>
									</div>
									<br>
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
					</script>

