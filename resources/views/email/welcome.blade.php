@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

@component('mail::panel', ['url' => ''])
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, architecto commodi deleniti laudantium perspiciatis rem reprehenderit. Autem cum doloremque eligendi expedita facilis iusto officia possimus, recusandae vel vero? Odio, vero.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
