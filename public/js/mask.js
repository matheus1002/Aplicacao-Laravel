
$(document).ready(function(){
   	$('#txtCpf').mask('000.000.000-00'); //CPF
   	$('#txtCnh').mask('00000000000'); //CNH
   	$('#txtEstEcon').mask('000.000.000.000.000,00', {reverse: true}); //Estado Econômico
   	$('#txtCep').mask('00000-000'); //CEP
   	$('#txtAltura').mask('0,00'); //Altura
 });