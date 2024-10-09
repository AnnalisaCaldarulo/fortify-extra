<x-layout>
    <form method="POST" action="{{ route('two-factor-challenge') }}">
        @csrf


        <div class="form-group">
            <label for="code">TOTP Code:</label>
            <input type="text" name="code" id="code" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
