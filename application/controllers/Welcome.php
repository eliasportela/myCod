<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	
		/*
		Exemplos de como utilizar o Controller
		A classe tem que comçar com maiuscula, e ter o mesmo
		nome do arquivo.
		Ex:
		class Welcome extends CI_Controller 
		
		**VIEW**
		Para chamar uma view utiliza a funçao
		$this->load->view('nome_da_view'); obs: nao coloque a extensao .php
		Para passar uma variavel para a view usa se
		
		**MODEL**
		Para chamar um Model utiliza a funcao
		$this->Nome_do_model->Nome_da_funcao_Banco_de_Dados('parametro');
		Exemplo:
		$sql = "Select * FROM clientes";
		$resultado = $this->Query_model->Query($sql);
		
		**POST**
		$data = $this->input->post();
		
		**GET**
		$data = $this->input->get(); // Terminar essa explicacao
		
		**FORM VALIDATION**
		Usa-se FORM VALIDATION para validar formulário
		
		$this->form_validation->set_rules('*1','*2','*3|*4|*5', *6 array('*4' => 'Mensagem de Erro'));
		*1 - Nome da variavel do _POST ou _ GET da view. Exemplo: nome.
		*2 - Nome que aparecera no erro. Exemplo: "Senha Invalida",
		*3,*4,*5 - Regras de validacao. Exemplo: required|is_natural_no_zero|trim
		*6 - (Opcional) Usa-se para mostrar uma mensagem de erro personalizada para o usuario.
		Exemplo:
  	$this->form_validation->set_rules('id_um','Unidade de Medida','required|is_natural_no_zero|trim',array('is_natural_no_zero' => 'Selecione uma unidade de medida'));
		
		$data['success'] = null;
		$data['error'] = null;
		if($this->form_validation->run() == FALSE){
			$data['error'] = validation_errors();
			}
			else{
				$data['success'] = "Sucesso na Transação";	
			}
			
		**

		
	*/
}
