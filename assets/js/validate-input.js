
(function($) {
    $(function() {
        $('#dtnascimento').mask("00/00/0000", {selectOnFocus: true});
        $('#dtbatismo').mask("00/00/0000", {selectOnFocus: true});
        
        $("#cep").keydown(function(){
            $("#cep").mask("99.999-999");
        });

        $("#phonehouse").keydown(function(){
            $("#phonehouse").mask("(00) 00000-0000");
        });
        
        $("#phonemobile").keydown(function(){
            $("#phonemobile").mask("(00) 00000-0000");
        });

        $("#phonewhats").keydown(function(){
            $("#phonewhats").mask("(00) 00000-0000");
        });

        $('.cpf-cnpj').change(function(){
            var campo = $(this).val();
            if (campo == "cpf"){	
            $("#label-cpf-cnpj").html('CPF');
            $('#InputCpf-cnpj').removeAttr('disabled');
            $("#InputCpf-cnpj").mask("999.999.999-99");
            }
            else if (campo == "cnpj"){
            $("#label-cpf-cnpj").html('CNPJ');
            $('#InputCpf-cnpj').removeAttr('disabled');
            $("#InputCpf-cnpj").mask("99.999.999/9999-99");
            }			
        });



        $("#rg").keydown(function(){
            $("#rg").mask("99.999.999-99");
        });

        $("#dtnascimento").keydown(function() {
            $('#dtnascimento').mask("99/99/9999");
        });

    });

})(jQuery);