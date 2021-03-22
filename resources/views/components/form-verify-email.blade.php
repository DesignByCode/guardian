<div>
    <form action="{{ route('verification.send') }}" method="post">
        @csrf
        <button type="submit" class="btn btn--block btn--primary">RESEND EMAIL</button>
    </form>
</div>
