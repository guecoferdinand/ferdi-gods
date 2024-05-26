<x-app-layout>
            
    <div class="pagetitle">
        <h1>{{ __('Post') }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{__('Dashboard')}}</a></li>
                <li class="breadcrumb-item active">{{ __('Resource') }}</li>
                <li class="breadcrumb-item"><a href="{{ route('post.index') }}">{{__('Post')}}</a></li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card p-5">
                    <div class="card-body">
                        <h4>Add A New Post</h4>
                        <form action="{{ route('post.store') }}" method="post">
                            @csrf
                            <div class="col-sm-10">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" placeholder="Subject" />
                                    <label for="floatingInput">Subject</label>
                                    @error('subject')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control @error('subject') is-invalid @enderror" id="post" placeholder="Post" name="post" style="height: 100px"></textarea>
                                    <label for="floatingTextarea">Post</label>
                                    @error('post')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="status">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Post Status</label>
                                </div>
                                <div class="w-100 mt-5">
                                    <button type="submit" class="btn btn-primary w-100">Save Post</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
