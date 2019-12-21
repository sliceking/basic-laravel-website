@extends("layouts.app")

@section('content')
    <h1>contact</h1>

    <form method="POST" action="{{ route('contact-form-submit') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name"
                placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject"
                placeholder="What do you want to talk about">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea type="text" class="form-control" name="message" id="message"
                placeholder="Enter your message" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
