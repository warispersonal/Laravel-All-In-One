<div style="margin-top: 10px;border-radius: 20px;" {{$attributes->merge(['class'=>'font-size'])}} >
    <h4>Name: {{$user->name ?? ""}}</h4>
    <h4>Email: {{$user->email ?? ""}}</h4>
</div>
