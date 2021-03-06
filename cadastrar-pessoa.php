<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Pessoas</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <script>
        function validar(){
            if(document.getElementById('cliente').checked == false &&
                    document.getElementById('fornecedor').checked == false &&
                    document.getElementById('funcionario').checked == false) {
                alert('Favor selecionar ao menos uma especialização!');
                return false;
                    } else {
                        return true;
                    }
                
        }
    </script>
    <body>
        <div class="container">
            <h3>Cadastro de Pessoas</h3>
            <form action="gravar-pessoa.php" method="post">
                <div class="row">
                    <div class="col s12">
                        <p>Tipo de Pessoa</p>
                        <p>
                            <label for="fisica">
                                <input type="radio" name="tipo_pessoa" id="fisica" value="Fisica" class="validate" required>
                                <span>Física</span>
                            </label> &emsp;
                            <label for="juridica">
                                <input type="radio" name="tipo_pessoa" id="juridica" value="Juridica" class="validate" required>
                                <span>Jurídica</span>
                            </label> &emsp;
                        </p>    
                    </div>
                </div>
                
                <div id="input-fisica">
                <div class="row">
                    <div class="col m6 s12">
                        <input type="text" name="nome" id="nome" placeholder="Nome">
                        <label for="nome">Nome</label>
                    </div>
                    <div class="col m6 s12">
                        <input type="text" name="cpf" id="cpf" placeholder="CPF">
                        <label for="cpf">CPF</label>
                    </div>
                </div>
                </div>
                
                <div id="input-juridica">
                    <div class="row">
                        <div class="col m4 s12">
                            <input type="text" name="cnpj" id="cnpj" placeholder="CNPJ">
                            <label for="cnpj">CNPJ</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m6 s12">
                            <input type="text" name="nome_fantasia" id="nome_fantasia" placeholder="Nome Fantasia">
                            <label for="nome_fantasia">Nome Fantasia</label>
                        </div>
                        <div class="col m6 s12">
                            <input type="text" name="razao_social" id="razao_social" placeholder="Razão Social">
                            <label for="razao_social">Razão Social</label>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col s12">
                        <input type="text" name="cep" id="cep" class="validate" required placeholder="CEP">
                        <label for="cep">CEP</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col m6 s12">
                        <input type="text" name="endereco" id="endereco" class="validate" required placeholder="Endereço">
                        <label for="endereco">Endereço</label>
                    </div>
                    <div class="col m2 s12">
                        <input type="text" name="numero" placeholder="Número">
                        <label for="numero">Número</label>
                    </div>
                    <div class="col m4 s12">
                        <input type="text" name="complemento" id="complemento" placeholder="Complemento">
                        <label for="complemento">Complemento</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col m6 s12">
                        <input type="text" name="municipio" id="municipio" class="validate" required placeholder="Município">
                        <label for="municipio">Município</label>
                    </div>
                    <div class="col m6 s12">
                        <input type="text" name="uf" id="uf" class="validate" required placeholder="UF" maxlength="2">
                        <label for="uf">UF</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col m5 s12">
                        <input type="text" name="email" placeholder="E-mail">
                        <label for="email">E-mail</label>
                    </div>
                    <div class="col m5 s12">
                        <input type="text" name="telefone" id="telefone" placeholder="Telefone">
                        <label for="telefone">Telefone</label>
                    </div>
                    <div class="col m2 s12">
                        <input type="text" name="celular" id="celular" placeholder="Celular">
                        <label for="celular">Celular</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col m4 s12">
                        <label for="cliente">
                            <input type="checkbox" name="cliente" id="cliente" value="on" class="filled-in">
                            <span>Cliente</span>
                        </label>   
                    </div>
                    <div class="col m4 s12">
                        <label for="fornecedor">
                            <input type="checkbox" name="fornecedor" id="fornecedor" value="on" class="filled-in">
                            <span>Fornecedor</span>
                        </label>   
                    </div>
                    <div class="col m4 s12">
                        <label for="funcionario">
                            <input type="checkbox" name="funcionario" id="funcionario" value="on" class="filled-in">
                            <span>Funcionário</span>
                        </label>   
                    </div>
                </div>
                
                <div class="row">
                    <div class="col s12">
                        <input type="submit" value="Cadastrar" class="btn" onmousedown="validar()">
                    </div>
                </div> 
            </form> 

        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="js/maskedinput-1.4.1.js"></script>
        
        <script>
            $(document).ready(function(){
                
                $("#input-fisica, #input-juridica").hide();
                //maskedinput
                $("#cpf").mask("999.999.999-99");
                $("#cep").mask("99999-999");
                $("#telefone").mask("(99)9999-9999");
                $("#celular").mask("(99)99999-9999");
                $("#cnpj").mask("99.999.999/9999-99");
                
                $("#fisica").on('click', function(){
                    $("#cnpj").val("");
                    $("#nome_fantasia").val("");
                    $("#razao_social").val("");
                    $("#input-juridica").hide();
                    $("#input-fisica").show();
                    $("#razao_social").attr("required", false);
                    $("#nome").attr("required", true);
                    $("#nome").addClass("validate");
                    $("#cpf").attr("required", true);
                    $("#cpf").addClass("validate");
                });
                
                $("#juridica").on('click', function(){
                    $("#nome").val("");
                    $("#cpf").val("");
                    $("#input-fisica").hide();
                    $("#input-juridica").show();
                    $("#nome").attr("required", false);
                    $("#cpf").attr("required", false);
                    $("#razao_social").attr("required", true);
                    $("#razao_social").addClass("validate");
                    
                });

                $("#cep").blur(function(){
                    var cepdigitado = $("#cep").val();
                    $.getJSON("https://viacep.com.br/ws/"+cepdigitado+"/json/",
                    function(dados){
                        $("#endereco").val(dados.logradouro);
                        $("#complemento").val(dados.complemento);
                        $("#municipio").val(dados.localidade);
                        $("#uf").val(dados.uf);
                    });
                });
               
               $('#cnpj').blur(function(){
                    var cnpjdigitado = $('#cnpj').val().replace(/[^0-9]/g, '');
                    $.ajax({
                        url: 'https://www.receitaws.com.br/v1/cnpj/'+cnpjdigitado,
                        method: 'GET',
                        dataType: 'jsonp',
                        complete: function(xhr){
                            response = xhr.responseJSON;
                            
                            if(response.status === 'OK') {
                                $('#nome_fantasia').val(response.fantasia);
                                $('#razao_social').val(response.nome);
                                $('#cep').val(response.cep);
                                $('#endereco').val(response.logradouro);
                                $('#numero').val(response.numero);
                                $('#complemento').val(response.complemento);
                                $('#municipio').val(response.municipio);
                                $('#email').val(response.email);
                                $('#telefone').val(response.telefone);
                                $('#uf').val(response.uf);
                            } else {
                                alert(response.message);
                            }
                        }
                    });
                });
                
            });
        </script>
    </body>
</html>
