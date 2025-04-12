<x-layout title=" Form">
    <hgroup>
        <h1>Form </h1>

        <p>This is a normal form.</p>
    </hgroup>

    <form enctype="multipart/form-data" action="{{route('form.post')}}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ old('name') }}">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}">
        <br>
        <label for="email">Price:</label>
        <input type="number" name="price" value="{{ old('price') }}">
        <br>
        <button type="submit">Submit</button>

        @if (session('success'))
            <p>
                {{ session('success') }}
            </p>
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p>
                    {{ $error }}
                </p>

            @endforeach
        @endif
    </form>
</x-layout>
