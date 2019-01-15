@component('mail::message')
    # New project created

    The body of your message.

    @component('mail::button', ['url' => route('projects.show',['project'=>$project->id])])
        Go to project
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
