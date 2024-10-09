<x-layout>
    <div class="container vh-100">
        <div class="row justify-content-center mt-5 py-5">
            <div class="col-12">
                <h1 class="text-center">Registrati</h1>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form action="{{ route('register') }}" method="POST" class="shadow rounded p-5">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control password-input" id="password">
                            <a href="#" class="input-group-text eye eye1" id="basic-addon2"><i
                                    class="bi bi-eye"></i></a>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma password</label>
                        <div class="input-group mb-3">
                            <input type="password" name="password_confirmation" class="form-control password-input"
                                id="password_confirmation">
                            <a href="#" class="input-group-text eye eye2" id="basic-addon2"><i
                                    class="bi bi-eye"></i></a>

                        </div>
                    </div>
                    <button class="btn btn-info">Accedi</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
