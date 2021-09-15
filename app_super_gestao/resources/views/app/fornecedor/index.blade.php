<h3> fornecedor </h3> 

{{-- php puro--}}
@php
    

@endphp
{{-- verifica se a variavel existe --}}

@isset($fornecedores)

        @if (count($fornecedores)>0 && count ($fornecedores)<10)
            <h3>existem alguns fornecedores cadastrados</h3>
        @elseif(count($fornecedores)>10)
            <h3>existem varios fornecedores cadastrados</h3>
        @else
            <h3>nao existem fornecedores cadastrados</h3>
        @endif

    Fornecedor: {{ $fornecedores[0]['cnpj'] }}

        @isset( $fornecedores[1]['cnpj'])
            CNPJ:  {{ $fornecedores[1]['cnpj'] }}
        @endisset
    <br>
    {{ $fornecedores[0]['status'] }} 


    @switch( $fornecedores[2]['ddd'])
        @case('41')
                parana-pr
            @break
        @case('45')
                minas gerais - MG
            @break
        @default
            
    @endswitch
    
@endisset
<br>
{{-- verdadeiro se a variavel for null --}}
@empty($fornecedores[1]['cnpj'])

    {{-- retorna mensagem caso seja vazio --}}
    cnpj: {{ $fornecedores[1]['cnpj'] ?? 'cnpj nao informado' }}
    
@endempty
<br>
@isset($fornecedores)

    {{-- retorna mensagem caso seja vazio --}}
    @for ($i = 0; isset($fornecedores[$i]); $i++)

            Nome:  {{ $fornecedores[$i]['nome'] }} <br>

    @endfor
    
@endisset
