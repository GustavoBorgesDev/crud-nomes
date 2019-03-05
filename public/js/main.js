$("#id-form").submit(function () {
	var nome = $("#id-nome").val()
	var sobreNome = $("#id-sobrenome").val()
	$.ajax({
		type: "POST",
		url: "inserido.php",
		data: {
			nome_dado: nome,
			sobre_nome_dado: sobreNome
		},
		success: function (resposta) {
			$("tbody").html(resposta)
		}
	})
	return false
})


function DeletaDado(recebeId) {
	var id = recebeId
	$.ajax({
		type: "GET",
		url: "deletado.php?id="+id,
		success: function (resposta) {
			$("tbody").html(resposta)
		}
	})
	return false
}

function AtualizaDado(recebeId, recebeNome, recebeSobreNome) {
	var id = recebeId
	var nome = recebeNome
	var sobreNome = recebeSobreNome
	console.log(id, nome, sobreNome)
	$.ajax({
		type: "GET",
		url: "atualizado.php?id="+id+"&nome="+nome+"&sobrenome="+sobreNome,
		success: function (resposta) {
			$("tbody").html(resposta)
		}
	})
	return false
}