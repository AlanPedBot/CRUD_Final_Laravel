@extends('layouts.app')
@section('content')

<body>
    <form method="POST"
        action="{{$book->id) }}>
        @csrf
        @method('DELETE')
        <button type="submit"
        class="btn btn-danger">Excluir</button>
    </form>
@include('layouts.components.footer')
<script type="text/javascript" src="/js/file.js"></script>
</body>

</html>


@endsection
