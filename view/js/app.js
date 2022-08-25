	
	
	$('.cpf').mask('999.999.999-99');
	$('.cnpj').mask('00.000.000/0000-00');

		/**
		 * Assim que a pagina carregar, por padrão ela exibirá a grid do
		 * Cliente PF primeiro
		 **/
		$.get('view/tableClientePf.php?pf=true')
			.then(res=>{
				$('#cliente_table').html(res);
				$('#btnClienteFisico').prop('disabled', true);
		});

		/**
		 * Função para Exibir a grid PJ e esconder a do PF
		 **/ 
		/*const showPjTable = ()=>{

			$.get('view/tableClientePj.php?pj=true')
				.then(res=>{

					$('#btnClienteJuridico').prop('disabled', true);
					$('#btnClienteFisico').prop('disabled', false);
					$('#formPf').prop('hidden', true);
					$('#formPj').prop('hidden', false);
					$('#cliente_table').html(res);
				});
		}*/

		async function showPjTable()
		{
			/**
			 * Ao invés de usar o $.get().then(as funções que vao ser executadas dps)
			 * Dá pra usar o await que 
			 **/
			 
			const response = await $.get('view/tableClientePj.php?pj=true')
			/*const response = $.get('view/tableClientePj.php?pj=true')
			alert(response);*/

			$('#btnClienteJuridico').prop('disabled', true);
			$('#btnClienteFisico').prop('disabled', false);
			$('#formPf').prop('hidden', true);
			$('#formPj').prop('hidden', false);
			$('#cliente_table').html(response);
		}

		const showPfTable = ()=>{

			$.get('view/tableClientePf.php?pf=true')
				.then(res=>{

					$('#btnClienteJuridico').prop('disabled', false);
					$('#btnClienteFisico').prop('disabled', true);
					$('#formPf').prop('hidden', false);
					$('#formPj').prop('hidden', true);
					$('#cliente_table').html(res);

				});
		}

		/**
		 * Funções de excluir um cliente PJ ou PF de forma dinamica
		 **/ 
		const deleteClientePf = (id)=>{

			$.get('controller/deleteClientePf.php?cliente_id='+id)
				.then((res)=>{
					console.log(res)
					showPfTable();
				})
		}

		const deleteClientePj = (id)=>{
			$.get('controller/deleteClientePj.php?cliente_pj_id='+id)
				.then(()=>{
					showPjTable();
				})
		}


		/**
		 * Submit do formulario do modal de edição do Cliente PF
		 **/ 
		$('[name=editClientePfForm]').submit((event)=>{
			event.preventDefault();
			$.post('controller/createClientePf.php',{
				cliente_id: $('#editCliente_id').val(),
				cliente_nome: $('#editCliente_nome').val(),
				cliente_cpf: $('#editCliente_cpf').val(),
				cliente_email: $('#editCliente_email').val(),
			}).then(()=>{
				showPfTable();
				$("#exampleModal").modal("hide")
			});
		});


				/**
		 * Submit do formulario do modal de edição do Cliente PJ
		 **/ 
		$('[name=editClientePjForm]').submit((event)=>{
			event.preventDefault();
			$.post('controller/createClientePj.php',{
				cliente_pj_id: $('#editCliente_pj_id').val(),
				cliente_pj_razao: $('#editCliente_pj_razao').val(),
				cliente_pj_cnpj: $('#editCliente_pj_cnpj').val(),
				cliente_pj_email: $('#editCliente_pj_email').val(),
			}).then((res)=>{
				console.log(res);
				showPjTable();
				$("#clientePjModal").modal("hide")
			});
		});

		/**
		 * Exibindo o modal de Edição
		 **/
		const showEditModal= (id,nome,cpf,email)=>{

			$("#editCliente_id").val(id);
			$("#editCliente_nome").val(nome);
			$("#editCliente_cpf").val(cpf);
			$("#editCliente_email").val(email);
			$("#exampleModal").modal("show");
		}

		const showPjModal= (id,razao,cnpj,email)=>{

			$("#editCliente_pj_id").val(id);
			$("#editCliente_pj_razao").val(razao);
			$("#editCliente_pj_cnpj").val(cnpj);
			$("#editCliente_pj_email").val(email);
			$("#clientePjModal").modal("show");
		}
		/**
		 * Submit do formulario de Inserção dos Clientes
		 **/ 
		$('[name=clienteFisicoForm]').submit((event)=>{

			event.preventDefault();

			$.post('controller/createClientePf.php',{
				
				cliente_nome: $('#cliente_nome').val(),
				cliente_cpf: $('#cliente_cpf').val(),
				cliente_email: $('#cliente_email').val(),

			}).then((res)=>{
				console.log(res);
				$('#cliente_nome').val('');
				$('#cliente_cpf').val('');
				$('#cliente_email').val('');

				showPfTable();

			})
		});

		$('[name=clienteJuridicoForm]').submit((event)=>{

			event.preventDefault();

			$.post('controller/createClientePj.php',{
				cliente_pj_razao: $('#cliente_pj_razao').val(),
				cliente_pj_cnpj: $('#cliente_pj_cnpj').val(),
				cliente_pj_email: $('#cliente_pj_email').val(),
			}).then((res)=>{
				console.log(res);
				$('#cliente_pj_razao').val('');
				$('#cliente_pj_cnpj').val('');
				$('#cliente_pj_email').val('');
				showPjTable();
			})
		});
	