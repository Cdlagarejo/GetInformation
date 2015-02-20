<div id="content" class="span10">
	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="index.html">Inicio</a> 
			<i class="icon-angle-right"></i>
		</li>
		<li>
			<a href="#">Beneficios</a> 

		</li>
	</ul>
	<a href="#" class="btn btn-info btn-setting">Registrar Un Beneficio</a>

	<br>
	<br>


	<div class="row-fluid sortable">		
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white user"></i><span class="break"></span>Materiales</h2>
				<div class="box-icon">
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
					<thead>
						<tr>
							<th>Id del Beneficio</th>
							<th>Nombre del Beneficio</th>
							<th>Descripcion del Beneficio</th>
							<th>Estado</th>
							<th>Aciones</th>
						</tr>
					</thead>   
					<tbody>
						<?php foreach ($Beneficio as $Beneficios ) { ?>
						<tr>
							<td><?php if (isset($Beneficios->id_Beneficio)) echo htmlspecialchars($Beneficios->id_Beneficio, ENT_QUOTES, 'UTF-8'); ?></td>
							<td><?php if (isset($Beneficios->nombre_Beneficio)) echo htmlspecialchars($Beneficios->nombre_Beneficio, ENT_QUOTES, 'UTF-8'); ?></td>
							<td><?php if (isset($Beneficios->descripcion_Beneficio)) echo htmlspecialchars($Beneficios->descripcion_Beneficio, ENT_QUOTES, 'UTF-8'); ?></td>
							<td><?php if (isset($Beneficios->estado)) echo htmlspecialchars($Beneficios->estado, ENT_QUOTES, 'UTF-8'); ?></td>
							<td>
								<a class="btn btn-zoom" href="<?php echo URL . 'postulaciones/ver_Infomacion_Beneficio/' . htmlspecialchars($Beneficios->id_Beneficio, ENT_QUOTES, 'UTF-8'); ?>"><i class="halflings-icon white fullscreen"></i></a>
								<a  class="btn btn-info" href="<?php echo URL . 'postulaciones/editar_Beneficio/' . htmlspecialchars($Beneficios->id_Beneficio, ENT_QUOTES, 'UTF-8'); ?>"><i class="halflings-icon white edit"></i></a>
								<a  class="btn btn-info" href="<?php echo URL . 'postulaciones/eliminar_Beneficio/' . htmlspecialchars($Beneficios->id_Beneficio, ENT_QUOTES, 'UTF-8'); ?>"><i class=" halflings-icon white  list-alt"></i></a>
							</td>
						</tr>	
						<?php } ?>	
					</tbody>
				</table>            
			</div>
		</div><!--/span-->

	</div><!--/row-->


</div><!--/.fluid-container-->

<!-- end: Content -->
</div><!--/#content.span10-->
</div><!--/fluid-row-->
<div class="modal hide fade" id="myModal">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal"></button>
		<h3>Registrar un beneficio</h3>
	</div>
	<div class="modal-body">

		<div class="row-fluid sortable">
			<div class="">

				<div class="box-content">
					
					<fieldset>
						<div class="control-group">
							<label class="control-label" for="focusedInput">Id del Beneficio</label>
							<div class="controls">
								<input class="input-xlarge focused" id="txt_Ben_Id" type="text" value="">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="focusedInput">Nombre del Beneficio</label>
							<div class="controls">
								<input class="input-xlarge focused" id="txt_Ben_Nombre" type="text" value="">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="focusedInput"> Descripción del Beneficio</label>
							<div class="controls">
								<input class="input-xlarge focused" id="txt_Ben_Descripcion" type="text" value="">
							</div>
						</div>
					</fieldset>
				</fieldset>

				<div class="modal-footer">
					<a href="#" class="btn" data-dismiss="modal">Cerrar</a>
					<input type="submit" data-dismiss="modal" class="btn btn-primary noty"  id="btn_Add_Beneficio" value="Aceptar"/>

				</div>
			</form>
		</div>
	</div><!--/span-->
</div>
</div>

<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<ul class="list-inline item-details">
			<li><a href="http://themifycloud.com">Admin templates</a></li>
			<li><a href="http://themescloud.org">Bootstrap themes</a></li>
		</ul>
	</div>
</div>

<div class="clearfix"></div>

