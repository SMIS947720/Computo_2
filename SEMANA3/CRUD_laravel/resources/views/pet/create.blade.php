<h1>New pets</h1>

<form action="{{ url('/pet') }}" method="post">
    @csrf
    @include('pet.form')
</form>