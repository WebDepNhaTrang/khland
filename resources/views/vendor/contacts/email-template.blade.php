Bạn đã nhận được một tin nhắn từ : {{ $contact['name'] }}

@if(isset($contact['name'])) 
<p>
Tên: {{ $contact['name'] }}
</p>
@endif 

@if(isset($contact['email'])) 
<p>
Email: {{ $contact['email'] }}
</p>
@endif 

@if(isset($contact['phone'])) 
<p>
Điện thoại: {{ $contact['phone'] }}
</p>
@endif 

@if(isset($contact['message'])) 
<p>
Nội dung: {{ $contact['message'] }}
</p>
@endif 