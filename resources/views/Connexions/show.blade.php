<section class="content-header">
    <div class="container-fluid">
        <div class="mb-2 row">

            <div class="col-sm-6">
                <a class="float-right btn btn-default" href="{{ route('connexions.index') }}">
                    @lang('crud.back')
                </a>
            </div>
        </div>
    </div>
</section>

<div class="px-3 content">
    <div class="card">
        <div class="card-body">
            <div class="row">
                @include('connexions.show_fields')
            </div>
        </div>
    </div>
</div>
