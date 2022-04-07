<h1>New Pets</h1>

<form action="{{ url('/pet') }}" method="post">
    @csrf
    @include('pet.form')
</form>
