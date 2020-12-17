@component('mail::message')

# More information about {{ $topic }}.


- It works again
- It sounds like you want to here more about {{ $topic }}.


@component('mail::table')
| Laravel       | Table         | Example  |
| ------------- |:-------------:| :--------| 
| Col 2 is      | Centered      | $10      |
| Col 3 is      | Right-Aligned | $20      |
@endcomponent


@component('mail::button', ['url' => config('app.url')])
    Return to app
@endcomponent

@endcomponent

