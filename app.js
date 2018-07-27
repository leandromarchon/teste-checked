$(document).ready(function(){
	$('#marcar_endereco').click(function(){
		if($(this).prop('checked')){
			$('#endereco_manifestacao').val($('#endereco_cidadao').val()).attr('readonly', true);
			$('#numero_manifestacao').val($('#numero_cidadao').val()).attr('readonly', true);
			$('#complemento_manifestacao').val($('#complemento_cidadao').val()).attr('readonly', true);
			$('#bairro_manifestacao').val($('#bairro_cidadao').val()).attr('readonly', true);
			$('#cidade_manifestacao').val($('#cidade_cidadao').val()).attr('readonly', true);
		
		}else{
			$('#endereco_manifestacao').val('').attr('readonly', false);
			$('#numero_manifestacao').val('').attr('readonly', false);
			$('#complemento_manifestacao').val('').attr('readonly', false);
			$('#bairro_manifestacao').val('').attr('readonly', false);
			$('#cidade_manifestacao').val('').attr('readonly', false);
		}
	});
});