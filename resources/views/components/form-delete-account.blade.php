<div class="panel">
    <div class="panel__body">
        <h2 class="text--danger">Delete Account</h2>

        <p class="text--danger">Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.</p>
        <form action="{{ route('guardian.delete-account') }}" method="post">
            @csrf
            @method('DELETE')
            <div x-data="{open: false}">
                <div x-show="!open">
                    <a href="#" @click.prevent="open = true" class="btn btn--danger">DELETE ACCOUNT</a>
                </div>
                <div x-show="open">
                    <div class="p-4 r-3 mb-5 border--danger text--danger bg--danger-light">
                        <em>Are you sure you want to delete your account?</em>
                    </div>
                    <div class="btn__group r-3">
                        <button type="submit" class="btn btn--danger">YES</button>
                        <a @click.prevent="open = false"  href="#" class="btn text--danger btn--danger-outline rb">No</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
