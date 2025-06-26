@component('mail::message')
# Nova mensagem de contato

**Nome:** {{ $data['fullName'] }}  
**Telefone:** {{ $data['phone'] }}  
**Email:** {{ $data['email'] }}
**Mensagem:** {{ $data['message'] }}

@endcomponent
