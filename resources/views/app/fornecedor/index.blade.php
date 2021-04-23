<h3>Fornecedor<h3>

{{ 'Imagem' }}
<br />
<?= 'Texto' ?>
<br />

@php
 /*
    if (){
    }
        elseif (){

    }else {

    }
    */
@endphp

 @isset($fornecedores)

    @for ($i =0; @isset ($fornecedores[$i]); $i++ )
        Fornecedor: {{ $fornecedores[$i] ['nome'] }}
<br>
        Status: {{ $fornecedores[$i] ['status'] }}
<br>
        CNPJ: {{ $fornecedores[$i] ['cnpj']  ?? 'Dado não preenchido' }}
<br>
        Telefone: {{ $fornecedores[$i] ['ddd'] ?? 'Dado não preenchido' }} {{ $fornecedores[$i] ['telefone'] ?? 'Dado não preenchido' }}
    <hr>
    @endfor
@endisset
{{--
@switch ($fornecedores[1]['ddd'])
    @case ('11')
        São Paulo - SP 
        @break
    @case ('27')
        Vitoria - ES
        @break
    @case ('85')
        Fortaleza - CE 
        @break
    @default
        Estado não informado
@endswitch--}}